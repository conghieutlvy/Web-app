<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('doExam', 'DoExamController@doexam');

Route::get('meo', "WelcomeController@toMeo");

Route::get('bienbao', "WelcomeController@toBienBao");

Route::get('dangthi', "WelcomeController@toDangThi");
