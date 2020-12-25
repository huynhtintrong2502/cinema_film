<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/sign_in',function(){
    return view('sign_in');
});

Route::get('/sign_up',function(){
    return view('sign_up');
});

Route::get('/xemchitiet',function(){
    return view('xemchitiet');
});
Route::get('/test',function(){
    return view('test');
});
Route::get('/test1',function(){
    return view('test1');
});


// admin
Route::get('admin/dashboard',function(){
    return view('admin/dashboard');
});
Route::get('admin/add_film',function(){
    return view('admin/add_film');
});
Route::get('admin/list_user',function(){
    return view('admin/list_user');
});
Route::get('list1',['uses'=>'SinhVienController@getList']);

Route::get('list2',['uses'=>'usertypeController@getList']);


