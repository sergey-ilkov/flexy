<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestApiDomainController extends Controller
{
    //
    public function index()
    {
        // 

        return  response('GET /api 200 ok', 200);
    }
    public function task(Request $request)
    {

        $res = [
            'method' => $request->method(),
            'request' => $request->all(),
        ];

        return response('ok', 200)->json($res);
    }
}