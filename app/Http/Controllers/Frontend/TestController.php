<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {

        $phone = '+380952051122';

        echo str()->substr($phone, -7) . str(str()->random(8))->lower();
    }
}