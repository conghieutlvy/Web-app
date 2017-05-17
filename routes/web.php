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

//Route for guest
Route::get('doExam', 'DoExamController@doexam');

Route::get('doExam/{id}', 'DoExamController@doexamwithid');

Route::get('meo', "WelcomeController@Meo");

Route::get('bienbao', "WelcomeController@BienBao");

Route::get('dangthi', "WelcomeController@dangThi");

Route::get('chooseexam', "WelcomeController@chooseExam");

Route::get('cauhoi', "WelcomeController@cauHoi");

Route::get('feedback','WelcomeController@feedback');

Route::post('doExam', 'DoExamController@showresults');

Route::post('doExam/{id}', 'DoExamController@showresults');

//Route for admin
Route::get('admin/doExam', 'DoExamController@doexam');

Route::get('admin/doExam/{id}', 'DoExamController@doexamwithid');

Route::get('admin/meo', "HomeController@Meo");

Route::get('admin/bienbao', "HomeController@BienBao");

Route::get('admin/dangthi', "HomeController@dangThi");

Route::get('admin/chooseexam', "HomeController@chooseExam");

Route::get('admin/cauhoi', "HomeController@cauHoi");

Route::get('admin/feedback','HomeController@feedback');
		
Route::post('admin/doExam', 'DoExamController@showresults');

Route::post('admin/doExam/{id}', 'DoExamController@showresults');

//Route for management
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('home/addQues', 'HomeController@addques');

Route::get('home/selectques', 'HomeController@selectques');

Route::get('home/modifiersques/{key}/{id}', 'HomeController@modifiersques');

Route::get('home/addadmin', 'HomeController@addadmin');

Route::get('home/selectadmin','HomeController@selectadmin');

Route::get('home/modifiersadmin/{id}','HomeController@modifiersadmin');

Route::post('home/addQues', 'HomeController@saveques');

Route::get('home/uplevel/{id}','HomeController@uplevel');