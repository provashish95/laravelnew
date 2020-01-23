<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function writePost(){
        $category = DB::table('categories')->get();
       return view('posts.writepost', compact('category'));
    }
    public function storePost(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|max:125',
            'details' => 'required|max:400',
            'img'=>'required|mimes:jpeg,jpg,png| max:1000'
        ]);

        $data = array();
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        $image=$request->file('img');
        if ($image){
             $image_name = str_random(4);
        }else{
            DB::table('posts')->insert($data);
            $notificaton =array(
                'message'=>'post insert successfully',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notificaton);
        }
    }
}
