<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function Meo()
	{	
		return view('meo');
	}

	public function BienBao()
	{
		return view('bienBao');
	}

	public function DangThi()
	{
		return view('dangThi');
	}
	public function chooseexam()
	{
		return view('chooseExam');
	}
	public function addques()
	{
		return view('addQues');
	}
	public function modifiersques($id){
		return view('modifiersQues')->with('data',$data);
	}
	public function addadmin(){}
}
