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

//user routes

Route::group(['namespace'=>'User'],function(){

Route::get('/','HomeController@index');
Route::get('post/{post}','PostController@post')->name('post');


});

Route::group(['namespace'=>'Admin'],function(){

Route::resource('admin/home','HomeController');
Route::resource('admin/post','PostController');
Route::resource('admin/tag','TagController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/user','UserController');

});
//Route::get('post', function () {
  //  return view('user/post');
//})->name('post');

