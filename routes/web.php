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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes ();//认证

Route::get ('/' , 'IndexController@index');//首页
Route::get('/shuku','IndexController@shuku');//书库
Route::get('/rankList','IndexController@rankList');//书库
Route::get('/bookRack','IndexController@bookRack');//书库
Route::get('/app','IndexController@app');//书库
Route::get('/writer','IndexController@writer');//书库
Route::get('/yuedu','IndexController@yuedu');//书库

Route::get('/auther/index','AutherController@index');
Route::get('/auther/publish','AutherController@publish');
Route::get('/auther/writings','AutherController@writings');
Route::get('/auther/Literaturedata','AutherController@Literaturedata');
Route::get('/auther/uidset','AutherController@uidset');
Route::get('/auther/Myfans','AutherController@Myfans');
Route::get('/auther/interactions','AutherController@interactions');
Route::get('/auther/accounts','AutherController@accounts');
Route::get('/auther/addbook','AutherController@addbook');
Route::get('/auther/addchapter','AutherController@addchapter');
Route::get('/auther/chapterlist','AutherController@chapterlist');
Route::get('/auther/updatechapter','AutherController@updatechapter');
Route::get('/auther/previewbook','AutherController@previewbook');

Route::get('/upload/{one?}/{two?}/{three?}/{four?}/{five?}/{six?}/{seven?}/{eight?}/{nine?}',function(){
    \App\Util\ImageRoute::imageStorageRoute();
});