<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller {
	
	public function index()
	{
		return view('homePage');
	}

	public function toMeo()
	{
		return view('meo');
	}

	public function toBienBao()
	{
		return view('bienBao');
	}

	public function toDangThi()
	{
		return view('dangThi');
	}
	public function chooseexam()
	{
		return view('chooseExam');
	}


	
}
