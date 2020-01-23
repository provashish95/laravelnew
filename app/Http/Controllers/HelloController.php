<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
    public function addCategory(){
        return view('posts.add_category');
    }
    public function storeCategory(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:25|min:4',
            'slug' => 'required|unique:categories|max:25|min:4',
        ]);

        $data = array();
        $data['name']=$request->name;
        $data['slug']=$request->slug;
        $category = DB::table('categories')->insert($data);
        if ($category){
            $notificaton =array(
                 'message'=>'Succsessfully Category Inserted',
                 'alert-type'=>'success'
             );
            return Redirect()->route('all.category')->with($notificaton);
        }else{
            $notificaton =array(
                'message'=>'Something went wrong !',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notificaton);
        }
    }
    public function allCategory(){
        $category = DB::table('categories')->get();
//        return response()->json($category);
        return view('posts.all_category',compact('category'));

    }
    public function viewCategory($id){
        $category = DB::table('categories')->where('id', $id)->first();

//         return response()->json($category);
       return view('posts.categoryview')->with('cat', $category);
    }
    public function deleteCategory($id){
        $delete = DB::table('categories')->where('id', $id)->delete();
            $notificaton =array(
                'message'=>'Succsessfully Category delete',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notificaton);
        }

}
