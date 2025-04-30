<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {



        $page = 'blog';

        $posts = Post::where('published',  true)->orderBy('created_at', 'desc')->paginate(4);

        // $services = Service::where('published', 1)->orderBy('rating', 'desc')->take(10)->get();
        $services = Service::where('published', 1)->orderBy('rating', 'desc')->limit(10)->get();


        return view('frontend.blog.index', compact('page', 'posts', 'services'));
    }

    public function show($slug)
    {

        $post = Post::where('slug', $slug)->first();

        if ($post) {

            $page = 'article';


            return view('frontend.article.index', compact('page', 'post'));
        }

        return abort(404);
    }
}