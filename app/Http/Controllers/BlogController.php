<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug) {
    //fetch from database base on slug
    $post = Post::where('slug', '=', $slug)->first();
    //return the view and pass in the past object

    return view('blog.single')->withPost($post); 
    }
}
