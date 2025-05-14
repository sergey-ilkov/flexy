<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CallStreamTask;
use App\Models\CallStreamToken;
use App\Models\User;
use App\Services\Backend\CallStream\CallStreamService;
use App\Services\Backend\CallStream\CallStreamTaskService;
use App\Services\Backend\CallStream\CallStreamTokenService;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    //

    public function index(CallStreamService $callStream, CallStreamTokenService $callStreamToken, CallStreamTaskService $callStreamTask)
    {

        // $user = User::find(10);

        // Auth::loginUsingId($user->id);
        // Auth::logout();
        // $task = CallStreamTask::where('task_id', '8cf3163d-ad5f-4e1b-90ae-85dac5aea2c1')->latest()->first();
        // dd($task);
        // $user = $task->user;

        // Auth::loginUsingId($user->id);
        // dd($user->id);

        // $user = User::find(10);

        // dd($user->callStreamTasks);

        $user = User::find(10);

        Auth::loginUsingId($user->id);
        // Auth::logout();

        echo 'user: ' . Auth::guard('web')->user();
        // echo 'user: ' . Auth::user();

        return view('frontend.test.index');


        echo 'Test call <br>';


        // ? test encrypt
        // $dataStart = Carbon::now()->format('H:m:s');

        // $access_token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ2.eyJkYXRhIjp7InJpZCI6MSwidWlkIjoxNn0sImlhdCI6MTY1ODgwOTgwNCwiZXhwIjoxNjU4ODE3MDA0fQ.d6bTlp8iLNueV2_gaO1lvyRVSr6aCr5tr1hJJVymBf4";
        // $refresh_token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ2.eyJyZWZyZXNoIjo3MjAwLCJpYXQiOjE2NTg4MDk4MDQsImV4cCI6MTY1ODgyMDYwNH0.BVUz4rGakb5Uz0ZO_fsoDpthOCe9wjQUveeOnWxybB8";
        // $access_token_encrypt = Crypt::encryptString($access_token);
        // $refresh_token_encrypt = Crypt::encryptString($refresh_token);
        // $access_token_descrypt = Crypt::decryptString($access_token_encrypt);
        // $refresh_token_descrypt = Crypt::decryptString($refresh_token_encrypt);



        // echo '$access_token: ' . $access_token;
        // echo '<br>';
        // echo '$access_token_descrypt: ' . $access_token_descrypt;
        // echo '<br>';
        // echo '$access_token_encrypt: ' . $access_token_encrypt;
        // echo '<br>';
        // echo '$refresh_token: ' . $refresh_token;
        // echo '<br>';
        // echo '$refresh_token_descrypt: ' . $refresh_token_descrypt;
        // echo '<br>';
        // echo '$refresh_token_encrypt: ' . $refresh_token_encrypt;
        // echo '<br>';


        // ? test save tokens DB
        // echo '----------------------<br>';
        // $dataAccess = [
        //     'name' => 'access_token',
        //     'token' => $access_token_encrypt,
        //     'expires_at' => Carbon::now()->addHour(2),
        // ];
        // $db_token_access = CallToken::create($dataAccess);

        // $dataRefresh = [
        //     'name' => 'refresh_token',
        //     'token' => $access_token_encrypt,
        //     'expires_at' => Carbon::now()->addHour(2),
        // ];
        // $db_token_refresh = CallToken::create($dataRefresh);


        // echo $db_token_access;

        // echo '<br><br>';
        // echo $db_token_refresh;


        // echo '<br><br>';
        // $dataEnd = Carbon::now()->format('H:m:s');
        // echo $dataStart . '<br>';
        // echo $dataEnd . '<br>';
        // echo '<br><br>';


        // ? test value .env

        // dd(
        //     'email: ' . config('services.call_stream.email'),
        //     'password: ' . config('services.call_stream.password'),
        //     'url_auth: ' . config('services.call_stream.url_auth'),
        //     'url_refresh: ' . config('services.call_stream.url_refresh'),
        //     'url_logout: ' . config('services.call_stream.url_logout'),
        //     'url_task: ' . config('services.call_stream.url_task')
        // );










        // // ? logging
        // $channel = Log::build([
        //     'driver' => 'single',
        //     'path' => storage_path('logs/CallStream/call.log'),
        // ]);

        // // ? auth api call

        // $response = Http::post(config('services.call_stream.url_login'), [
        //     'email' => config('services.call_stream.email'),
        //     'password' => config('services.call_stream.password'),
        // ]);

        // if ($response->ok() && $response->body()) {
        //     Log::stack(['single', $channel])->info('Authorization succes.');

        //     // Log::stack(['single', $channel])->error('Error. Authorization failed.');
        //     // dd($response->ok(), $response->body());

        //     $dataResponse = json_decode($response->body());
        //     // echo gettype($dataResponse);

        //     // echo $data->result;
        //     // dd($dataResponse);

        //     if ($dataResponse->result) {
        //         // ? написать проверку токенов, если нет логирование ошибки
        //         // ? encrypt tokens
        //         $access_token = $dataResponse->message->access_token;
        //         $refresh_token = $dataResponse->message->refresh_token;
        //         // $access_token = $dataResponse['message']['access_token'];
        //         // $refresh_token = $dataResponse['message']['refresh_token'];

        //         $access_token_expires = Carbon::now()->addHour(2);
        //         $refresh_token_expires = Carbon::now()->addHour(4);

        //         $access_token_encrypt = Crypt::encryptString($access_token);
        //         $refresh_token_encrypt = Crypt::encryptString($refresh_token);

        //         // ? save tokens
        //         $dataAccess = [
        //             'name' => 'access_token',
        //             'token' => $access_token_encrypt,
        //             'expires_at' => $access_token_expires,
        //         ];


        //         CallStreamToken::create($dataAccess);

        //         $dataRefresh = [
        //             'name' => 'refresh_token',
        //             'token' => $refresh_token_encrypt,
        //             'expires_at' => $refresh_token_expires,
        //         ];

        //         CallStreamToken::create($dataRefresh);

        //         Log::stack(['single', $channel])->info('Tokens success  and saved in the database.');

        //         return 'Token save success!';
        //     }
        // }



        // Log::stack(['single', $channel])->error('Error. Response: ', ['status' => $response->status()]);

        // $call_stream = $callStream->task();
        // dd($call_stream);


        // $tokens = $callStream->login();
        // dd($tokens);

        // $access_token = $callstreamToken->getAccessToken();
        // echo $access_token;
        // dd($access_token);

        // $callstreamToken->setTokensNull();

        // $dataStart = Carbon::now();
        // $tokens = $callStream->login();

        // if ($tokens) {
        //     // $callstreamToken->createTokens($tokens);
        //     $callstreamToken->updateTokens($tokens);
        // }
        // $dataEnd = Carbon::now();

        // echo $dataStart . '<br>';
        // echo $dataEnd . '<br>';

        // $refresh_token = $callstreamToken->getRefreshToken();
        // dd($refresh_token);

        // dd($callStreamToken->getRefreshToken());
        // if (!$callStreamToken->getRefreshToken()) {
        //     dd('nooo');
        // }
        // dd($callStreamToken->getAccessToken(), $callStreamToken->getRefreshToken());

        // $channel = Log::build([
        //     'driver' => 'single',
        //     'path' => storage_path('logs/CallStream/callstream.log'),
        // ]);
        // Log::stack([$channel])->info('Cron start.');
        // $callStreamToken->setTokensNull();

        // $access_token = $callStreamToken->getAccessToken();
        // if ($access_token) {
        //     $callStream->logout($access_token);


        //     $callStreamToken->setTokensNull();
        // }


        // dd($callStreamToken->getAccessToken());

        // dd($callStreamToken->getRefreshToken());
        // dd($callStreamToken->getAccessToken());

        // $token = $callStreamToken->getAccessToken();

        // $res = $token->update([
        //     'token' => '123'
        // ]);

        // dd($res);
        // dd($callStreamToken->getRefreshToken());


        // $access_token = CallStreamToken::where('name', 'access_token')->first();



        // // $channel = Log::build([
        // //     'driver' => 'single',
        // //     'path' => storage_path('logs/CallStream/callstream.log'),
        // // ]);

        // try {
        //     $access_token->token = Crypt::decryptString($access_token->token);
        // } catch (\Exception $e) {
        //     $access_token->token = null;
        //     $access_token->update();
        //     // Log::stack([$channel])->error('Decrypt token failed: ', ['error' => $e->getMessage()]);
        // }

        // dd($access_token->token);

        // $callStreamToken->setTokensNull();
        // dd($callStreamToken->getAccessToken()->token, $callStreamToken->getRefreshToken()->token);


        // ?  test save task через модель пользователя

        // $user = User::find(10);

        // if ($user) {
        //     $task = new CallStreamTask();
        //     $task->result = true;
        //     $task->task_id = '4s4sd4ds-sd4s-d4d4-5s5e-7wer88wer';
        //     $task->attributes = [
        //         'phone' => '380952057139',
        //         'callback_url' => 'https://sergeyilkov.com',
        //         'created_at' => '2025-05-11 10:30:33',
        //     ];
        //     $task->error = null;
        //     $new_task = $user->callStreamTaks()->save($task);

        //     // dd($new_task);
        // }

        // // ? обработка полученного запроса с задачей от сервиса стрим
        // $request = [
        //     'task_id' => '4s4sd4ds-sd4s-d4d4-5s5e-7wer88wer',
        //     'ivr_answer' => 1,

        // ];

        // // $task_get = CallStreamTask::where('task_id', $request['task_id'])->get();
        // $task_get = CallStreamTask::where('task_id', $request['task_id'])->latest()->first();

        // if ($task_get) {
        //     $attributes = $task_get->attributes;
        //     $attributes['ivr_answer'] = $request['ivr_answer'];
        //     $task_get->attributes = $attributes;
        //     $task_get->update();
        //     echo 'Task update success. <br>';

        //     if ($request['ivr_answer']) {
        //         // $task_get->attributes

        //         echo 'Next user auth...';
        //         // ? если полученное значение нажал 1 - авторизовываем пользователя
        //         dd($task_get);
        //         return;
        //     }
        // }

        // echo 'Ошибка авторизации. Попробуйте позже';


        // ? test отправки обработаной задачи после звонка пользователю на api flexy (/api/v1/task)

        // ? task
        // ? create routes api get post /task
        // ? test task: create task, send new task api, save new task DB

        // $responseGet = Http::get(route('api.'));

        // dd(route('api.task'));
        //         Route::prefix('/v1')->group(function () {
        //     Route::prefix('/task')->group(function () {
        //         Route::get('/', [CallStreamApiController::class, 'index'])->name('api.task');
        //         Route::post('/', [CallStreamApiController::class, 'taskUpdate'])->name('api.task.update');
        //     });
        // });
        // dd(route('api.task.index'));

        // $responseGet = Http::get(route('api.task.index'));
        // $responseGet = Http::get(route('api.task.index'));


        // $responseGet = app('App\Http\Controllers\Api\CallStreamApiController')->index();
        // echo $responseGet;
        // dd($responseGet);

        // dd(route('api.task.index'), route('api.task.update'));

        // dd(config('services.call_stream.url_task'));

        // $access_token = $callStreamToken->getAccessToken();
        // // dd($access_token->token);
        // if ($access_token) {
        //     $token = $access_token->token;
        //     $phone = '380952057139';
        //     // $user = User::find(10);
        //     $callback_url = route('api.task.index');

        //     $task = $callStream->task($token, $phone, $callback_url);

        //     dd($task);
        // }

        // $access_token = $callStreamToken->getAccessToken();
        // if ($access_token) {
        //     $token = $access_token->token;
        //     $phone = '380952057139';
        //     // $user = User::find(10);
        //     $callback_url = route('api.task.index');


        //     try {
        //         $response = Http::withHeaders([
        //             'Authorization' => 'Bearer ' . $token,
        //             'Content-Type' => 'application/json',
        //         ])->post(config('services.call_stream.url_task'), [
        //             'phone' => $phone,
        //             // 'callback_url' => $callback_url,
        //             'callback_url' => 'https://sergeyilkov.com',
        //         ]);

        //         // dd('res: ', $response);
        //     } catch (\Exception $e) {

        //         // dd($e->getMessage());
        //     }

        //     dd($response);
        // }

        // ? отправка задачи и получение ответа
        // $access_token = $callStreamToken->getAccessToken();
        // // dd($access_token->expires_at < now());

        // if ($access_token) {
        //     $token = $access_token->token;
        //     $phone = '380952057139';
        //     // $user = User::find(10);


        //     $get_task = $callStream->task($token, $phone);

        //     // dd($task);
        //     // dd($task->message->id);
        // }
        // ? если успех - отправить задачу на сохранение в бд
        // ? если успех и результат ошибка - сохраняем в бд и отдаем пользователю сообщение об ошибке
        // ? если ошибка 500 - отправляем сообщение пользователю что авторизация временно не доступна

        // if ($get_task) {
        //     $user = User::find(10);
        //     $new_task = $callStreamTask->createTask($user, $get_task);

        //     // dd($new_task);
        // }



    }
}
