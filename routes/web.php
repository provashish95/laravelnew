<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get(md5('contact/us'), 'HelloController@contact')->name('contact');
Route::get(md5('about/us'), 'HelloController@about')->name('about');
Route::get(md5('write/post'), 'HelloController@writePost')->name('write.post');

//category crud here.......
Route::get(md5('all/category'), 'HelloController@allCategory')->name('all.category');
Route::get(md5('add/category'), 'HelloController@addCategory')->name('add.category');
Route::post(md5('store/category'), 'HelloController@storeCategory')->name('store.category');
Route::get('view/category{id}', 'HelloController@viewCategory');






