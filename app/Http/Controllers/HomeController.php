<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\Http\Controllers\Auth;
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
			$ques = new question();		
			$ques->question = $_POST['ques'];
			$ques->c0 = $_POST['answer1'];
			$ques->c1 = $_POST['answer2'];
			if(isset($_POST['a1'])) $ques->a0 = $_POST['a1'];
			if(isset($_POST['a2'])) $ques->a1 = $_POST['a2'];
			if(isset($_POST['answer3'])){
				$ques->c2 = $_POST['answer3'];
				if(isset($_POST['a3'])) $ques->a2 = $_POST['a3'];
				if(isset($_POST['answer4'])){
					$ques->c3 = $_POST['answer4'];
					if(isset($_POST['a4'])) $ques->a3 = $_POST['a4'];
				}
			}
			else if(isset($_POST['answer4'])){
				$ques->c2 = $_POST['answer4'];
				if(isset($_POST['a4'])) $ques->a2 = $_POST['a4'];
			}
		$ques->save();
		return view('addQues'); 	
	}
}
