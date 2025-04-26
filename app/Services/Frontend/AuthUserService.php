<?php

namespace App\Services\Frontend;

use App\Mail\SendCode;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthUserService
{

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
                $id_unique = $this->generateUniqueString($len = 10);
            } else {
                $id_unique = $this->generateUniqueString($len = 10);
            }




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


    public function login($request)
    {



        $request->validate([
            'phone' => 'required',
        ]);

        $phone = strip_tags($request->phone);

        $user = User::where('phone', $phone)->first();

        if (!$user) {
            $res = [
                "status" => "error",
                'errors' => [
                    'phone' => __('messages.phone_not_registered'),
                ]
            ];
            return response()->json($res);
        }


        $resService = true;


        sleep(2);

        if ($resService) {


            Auth::loginUsingId($user->id);
            $request->session()->regenerate();

            $res = [
                "status" => "ok",
                'auth' => true,
            ];

            return response()->json($res);
        }



        $res = [
            "status" => "error",
            'errors' => [
                'auth' => __('messages.you_refused_authorization_site'),
            ]
        ];
        return response()->json($res);
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
