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
	public function addadmin(){
		return view ('register');
	}
	public function saveques(){
		if(isset($_POST['question']) &&
		isset($_POST['answer1']) && isset($_POST['answer2'])){
			$ques = new question();
			$ques->question = $_POST['question'];
			$ques->c0 = $_POST['answer1'];
			$ques->c1 = $_POST['answer2'];
			
			if(isset($_POST['answer3'])){
				$ques->c2 = $_POST['answer3'];
				if(isset($_POST['answer4']))
				$ques->c3 = $_POST['answer4'];
			}
			else if(isset($_POST['answer4']))
				$ques->c2 = $_POST['answer4'];
		}
		return view('addQues'); 	
	}
}
