<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index(Request $request)
    {





        $reviews = Review::all();

        $page = 'home';

        return view('frontend.home.index', compact('page', 'reviews'));
    }
}