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
Route::get('doExam', 'DoExamController@doexam');

Route::get('meo', "WelcomeController@Meo");

Route::get('bienbao', "WelcomeController@BienBao");

Route::get('dangthi', "WelcomeController@dangThi");

Route::get('chooseexam', "WelcomeController@chooseExam");

Route::get('cauhoi', "WelcomeController@cauHoi");

Route::post('doExam', 'DoExamController@showresults');


Route::get('admin/doExam', 'DoExamController@doexam');

Route::get('admin/meo', "HomeController@Meo");

Route::get('admin/bienbao', "HomeController@BienBao");

Route::get('admin/dangthi', "HomeController@dangThi");

Route::get('admin/chooseexam', "HomeController@chooseExam");

Route::get('admin/cauhoi', "HomeController@cauHoi");
		
Route::post('admin/doExam', 'DoExamController@showresults');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('home/addQues', 'HomeController@addques');

Route::get('home/modifiersques/{id}', 'HomeController@modifiersques');

Route::get('home/addadmin', 'HomeController@addadmin');

Route::get('home/feedback', 'HomeController@feedback');

Route::post('home/vaildques', 'HomeController@saveques');

Route::post('home/addadmin', 'HomeController@saveadmin');
