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
    return view('welcome');
});

Route::get('helloword', 'MyController@HelloWord');

Route::get('hello', function() {
    return "Xin chao cac ban";
});

Route::get('getinfo/{id}', 'MyController@getInfo');


//Gửi và nhận Request
Route::get('getForm', function() {
	return view('postForm');
});

Route::get('getView', 'MyController@getView');

Route::post('postForm', ['as'=>'postForm', 'uses'=>'MyController@getName']);

Route::get('getStudent', 'Mycontroller@getStudent');

Route::get('getCategory','PagesController@getCategory');

Route::get('getDetailCategory', 'PagesController@getDetailCategory');

Route::get('getDetailNews', 'PagesController@getDetailNews');

