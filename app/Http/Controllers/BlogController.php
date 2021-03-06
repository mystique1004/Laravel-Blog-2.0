<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
public function getIndex(){
    $posts = Post::paginate(10);

    return view('blog.index')->withPosts($posts); 
}

    public function getSingle($slug) {

        // /dd($slug);
    //fetch from database base on slug
    $post = Post::where('slug', '=', $slug)->first();
    //return the view and pass in the past object

     //dd($post);

    return view('blog.single')->withPost($post); 
    }
}
