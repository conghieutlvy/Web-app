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
    return view('homePage');
});
Route::get('/doExam', 'DoExamController@doexam');

Route::get('/meo', "WelcomeController@toMeo");

Route::get('/bienbao', "WelcomeController@toBienBao");

Route::get('admin/meo', "HomeController@toMeo");

Route::get('admin/bienbao', "HomeController@toBienBao");

		
Route::post('/doExam', 'DoExamController@showresults');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/addQues', 'HomeController@addques');
