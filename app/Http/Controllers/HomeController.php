<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\ques_img;
use App\User;
use Illuminate\Support\Facades\Auth;
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
	public function addques()
	{
		return view('addQues');
	}
	public function selectques(){
		$resultsDB = question::all();
		$resultsdbimg = ques_img::all();
		return view('selectQues')->with([
		'data'=> $resultsDB,
		'dataimg'=>$resultsdbimg
		]);
	}
	public function modifiersques($key,$id){
		$number = intval(substr($id,0,1));
		$idnumber = intval(substr($id,2,2));
			if($key == 0){
					if($number == 0) $ques = question::find($idnumber);
					else $ques = ques_img::find($idnumber);
				$ques->delete();
				return redirect('home/selectques');
			}
			if($key == 1){
				if($number == 0) $ques = question::find($idnumber);
					else $ques = ques_img::find($idnumber);
				return view('modifiersQues')->with('ques',$ques);;
			}
	}
	public function addadmin(){
		if(Auth::user()->level != 0){
			return view ('auth/register');
		}
	}
	public function modifiersadmin($id){
		if((Auth::user()->level != 0) && (Auth::user()->id != $id)){
			$admin = User::find($id);
			if($admin != null){
				$ques = question::where('user_id',$id)->get();
				foreach($ques as $q)
					$q->delete();
				$ques = ques_img::where('user_id',$id)->get();
				foreach($ques as $q)
					$q->delete();	
				$admin->delete();
			}
			return redirect('home/selectadmin');
		}
		else echo "Không thể xóa";
	}
	public function uplevel($id){
		if((Auth::user()->level != 0) && (Auth::user()->id != $id)){
			$admin = User::find($id);
			if($admin != null){
				$admin->level = 1;
				$admin->save();
			}
		}
		return redirect('home/selectadmin');
	}
	
	public function saveques(){
			
		if($_FILES['up_img']['name'] != null){
			$temp = $_FILES['up_img'];
			$ftype = $temp['type'];
			$fsize = $temp['size'];
			$maxsize = 2*8*1024*1024;
			if($ftype == "image/jpeg" 
				|| $ftype == "image/png" 
				|| $ftype == "image/gif"){
				if($fsize <= $maxsize){
					$path = 'picture/';
					$tmp_name = $temp['tmp_name'];
					$ques = new ques_img();
					$temp['name'] =  time()."-".$temp['name'];
					$ques['name_img'] = $temp['name'];
					move_uploaded_file($tmp_name,$path.$temp['name']);
				} else echo "Tải lên không thành công, dung lượng quá lớn.";
			} else echo "Tải lên không thành công, vui lòng chỉ chọn các định dạng: jpeg, png, gif.";	
		}
		else $ques = new question();
				
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
		$ques->user_id = Auth::id();	
		$ques->save();
		return view('addQues'); 	
	}
	public function selectadmin(){
		$results = User::all();
		return view('selectadmin')->with('data',$results);
	}
}
