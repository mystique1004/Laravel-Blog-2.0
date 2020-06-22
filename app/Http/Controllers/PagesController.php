<?php

namespace App\Http\Controllers;

use App\Post; 

class PagesController extends  Controller {

    public function getIndex() {
        $post = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view ('pages.welcome')->withPosts($post);
    }

    public function getAbout() {
        $First = 'CHOCO';
        $Last = 'BUTTERNUT';

        $fullname = $First . " " . $Last;
        $email = "lady@chocobutternut.com";
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view ('pages.about')->withData($data); 
    }

    public function getContact(){
       return view ('pages.contact');
    }

    public function postContact() {

    }
}