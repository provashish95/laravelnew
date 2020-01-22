<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about');
    }
    public function writePost(){
        return view('posts.writepost');
    }
    public function addcategory(){
        return view('posts.add_category');
    }
}
