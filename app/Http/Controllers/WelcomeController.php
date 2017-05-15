<?php namespace App\Http\Controllers;
use App\question;
use App\ques_img;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('homePage');
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
	public function cauHoi(){
		
			$temp = question::all();			
			$resultsDB = $temp;
		
		
			$temp = ques_img::all();			
			$resultsdbimg = $temp;
		
		return view('cauHoi')->with([
			'data'=> $resultsDB,
			'dataimg'=>$resultsdbimg
			]);
	}
	public function feedback(){
		return view('feedback');
	}
}
