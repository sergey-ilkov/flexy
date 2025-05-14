<?php

namespace App\Services\Frontend;

use App\Mail\SendCode;
use App\Models\User;
use App\Services\Backend\CallStream\CallStreamService;
use App\Services\Backend\CallStream\CallStreamTaskService;
use App\Services\Backend\CallStream\CallStreamTokenService;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthUserService
{

    protected $channel;

    public $callStream;
    public $callStreamToken;
    public $callStreamTask;

    public function __construct(CallStreamService $callStream, CallStreamTokenService $callStreamToken, CallStreamTaskService $callStreamTask)
    {
        //
        $this->channel = Log::build([
            'driver' => 'single',
            'path' => storage_path('logs/callstream/authuser.log'),
        ]);

        $this->callStream = $callStream;
        $this->callStreamToken = $callStreamToken;
        $this->callStreamTask = $callStreamTask;
    }

    public function register($request)
    {

        if ($request->action == 'email-confirm') {

            $request->validate([
                'email' => 'required|email',
            ]);


            $email = strip_tags($request->email);


            $user = User::where('email', $email)->first();
            if ($user) {
                $res = [
                    "status" => "error",
                    'errors' => [
                        'email' => __('messages.email_already_registered'),
                    ]
                ];
                return response()->json($res);
            }



            $code = codeGenerator();



            $data = [
                'code' => $code,
                'url' => route('home'),
            ];



            try {
                // ? send email
                Mail::to($email)->send(new SendCode($data));

                Cache::put($email, $code, now()->addMinutes(10));

                $res = [
                    "status" => "ok",
                ];

                return response()->json($res);
            } catch (Exception $ex) {
                $errors = [
                    "status" => "error",
                    'errors' => [
                        'send-email' => __('messages.error_sending_email'),
                    ]
                ];
                return response()->json($errors);
            }
        }

        if ($request->action == 'sign-up') {

            $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'date' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'code' => 'required',
            ]);


            $name = strip_tags($request->name);
            $surname = strip_tags($request->surname);
            $date = strip_tags($request->date);
            $phone = strip_tags($request->phone);
            $email = strip_tags($request->email);
            $code = strip_tags($request->code);



            $codeCache = Cache::pull($email);

            $id_unique = '';

            $errors = [];

            $users = User::all();

            if (!$users->isEmpty()) {

                $phoneDB = $users->whereIn('phone', $phone)->isNotEmpty();
                if ($phoneDB) {
                    $errors['phone'] =  __('messages.phone_already_registered');
                    $errors['code'] =  __('messages.get_new_code');
                }

                $emailDB = $users->whereIn('email', $email)->isNotEmpty();
                if ($emailDB) {
                    $errors['email'] =  __('messages.email_already_registered');
                    $errors['code'] =  __('messages.get_new_code');
                }

                // $idLast = $users->last()->id;
                // $id_unique = $this->generateUniqueString($len = 10);
            } else {
                // $id_unique = $this->generateUniqueString($len = 10);
            }

            $id_unique = str()->substr($phone, -7) . str(str()->random(8))->lower();




            $checkCode = $code == $codeCache;
            if (!$checkCode) {
                $errors['code'] =  __('messages.invalid_verification_code');
            }


            if (!empty($errors)) {
                $res = [
                    "status" => "error",
                    'errors' => $errors,
                ];
                return response()->json($res);
            }


            $userData = [
                'name' => $name,
                'surname' => $surname,
                'date' => $date,
                'phone' => $phone,
                'email' => $email,
                'id_unique' => $id_unique,

            ];


            $user = User::create($userData);


            if ($user) {
                $res = [
                    "status" => "ok",
                    'message' => __('messages.success_registration'),
                ];

                return response()->json($res);
            }


            $res = [
                "status" => "error",
                'errors' => [
                    'register' => __('messages.error_registration'),
                ]
            ];
            return response()->json($res);
        }



        $error = [
            "status" => "error",
            'errors' => [
                'action' => "Invalid action field value",
            ]
        ];
        return response()->json($error);
    }


    // public function login($request)
    public function login($request)
    {


        //  dd($request->cookie(config('session.cookie')));


        // $request->validate([
        //     'phone' => 'required',
        // ]);

        $request->validate([
            'action' => 'required',
            'email' => 'required|email',
        ]);



        $email = strip_tags($request->email);


        $user = User::where('email', $email)->first();

        if (!$user) {
            $res = [
                "status" => "error",
                'errors' => [
                    'email' => __('messages.email_not_registered'),
                ]
            ];
            return response()->json($res);
        }

        $phone = $user->phone;

        if (!$phone) {
            Log::stack([$this->channel])->error('User not phone: ', ['user' => $user->id, 'phone' => $phone]);

            $res = [
                "status" => "error",
                'errors' => [
                    'phone' => __('Авторизація тимчасово не працює. Ведуться технічні роботи.'),
                ]
            ];
            return response()->json($res);
        }


        if ($request->action == 'get-phone') {


            $phone = substr($phone, 0, 6) . ' ***** ' . substr($phone, -2);

            $res = [
                "status" => "ok",
                'phone' => $phone,
            ];
            return response()->json($res);
        }



        if ($request->action == 'get-call') {


            $phone = preg_replace('/[^0-9]/', '', $phone);
            // $phone = null;

            // ? call stream
            // ? call stream

            // ? информация о текущей сессии
            Log::stack([$this->channel])->info('Current session: ', ['session' => $request->cookie(config('session.cookie'))]);

            // ? проверяем на существование активного токена
            $access_token = $this->checkTokenValidity();

            if (!$access_token) {
                Log::stack([$this->channel])->error('Error not Access tokens');

                $error = [
                    "status" => "error",
                    'errors' => [
                        'auth' => __('Авторизація тимчасово не працює. Ведуться технічні роботи.'),
                    ]
                ];
                return response()->json($error);
            }
            Log::stack([$this->channel])->info('Access tokens success');


            // ? отправляем задачу на звонок на апи сервиса стреам и ждем ответа с задачей
            // ? если не получаем задачу сразу отдаем ошибку
            $taskRespose = $this->callStream->task($access_token, $phone);

            if (!$taskRespose) {
                Log::stack([$this->channel])->error('Error not task  response');
                $error = [
                    "status" => "error",
                    'errors' => [
                        'auth' => __('Авторизація тимчасово не працює. Ведуться технічні роботи.'),
                    ]
                ];
                return response()->json($error);
            }


            Log::stack([$this->channel])->info('Task Response success');

            $task = $this->callStreamTask->createTask($user, $taskRespose);
            // $task = $this->callStreamTask->createTask($user, $taskRespose, $request);


            if (!$task) {
                Log::stack([$this->channel])->error('Error create task');
                $error = [
                    "status" => "error",
                    'errors' => [
                        'auth' => __('Авторизація тимчасово не працює. Ведуться технічні роботи.'),
                    ]
                ];
                return response()->json($error);
            }
            $res = [
                "status" => "ok",
                'task' => $task->task_id,
            ];
            return response()->json($res);
        }



        // ? не верный action
        $error = [
            "status" => "error",
            'errors' => [
                'action' => __('Авторизація тимчасово не працює. Ведуться технічні роботи.'),
            ]
        ];
        return response()->json($error);
    }

    public function checkTokenValidity()
    {

        $access_token = $this->callStreamToken->getAccessToken();


        if ($access_token == null || $access_token->token == null || $access_token->expires_at < Carbon::now()) {
            // ? если null sleep(3) сек и еще раз попробывать если опять пусто - ошибка 
            sleep(3);

            $access_token = $this->callStreamToken->getAccessToken();

            if ($access_token == null || $access_token->token == null || $access_token->expires_at < Carbon::now()) {

                return false;
            }
        }
        return $access_token->token;
    }

    public function authenticate($request)
    {
        // Auth::loginUsingId($userId);
        // $request->session()->regenerate();
    }


    public function generateUniqueString($len = 10, $num = 0)
    {

        $secret_key = $num == 0 ?  str(str()->random($len))->lower() : str(str()->random($len))->lower() . $num;

        $data = ['id_unique' => $secret_key,];

        $num++;

        $rules = ['id_unique' => 'unique:users'];

        $validate = Validator::make($data, $rules)->passes();

        return $validate ? $data['id_unique'] : $this->generateUniqueString($len, $num);
    }
}