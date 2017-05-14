<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\ques_img;
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
	public function feedback(){
		return view("feedback");
	}
	public function addques()
	{
		return view('addQues');
	}
	public function selectques($key){
		$resultsDB = question::all();
		$resultsdbimg = ques_img::all();
		return view('selectQues')->with([
		'key'=>$key,
		'data'=> $resultsDB,
		'dataimg'=>$resultsdbimg
		]);
	}
	public function modifiersques($key){
		if(isset($_POST['cb'])){
		$temp = $_POST['cb'];
			if($key == 0){
				foreach($temp as $row){
					$num = intval(substr($row,0,1));
					$id = intval(substr($row,2,2));
					if($num == 0) $ques = question::find($id);
					else $ques = ques_img::find($id);
					$ques->delete();
				}
				echo "Xóa thành công";
				return;
			}
			if($key == 1){
				$i = 0;
				foreach($temp as $row){
					$num = intval(substr($row,0,1));
					
					$id = intval(substr($row,2,2));
					if($num == 0) $ques = question::find($id);
					else $ques = ques_img::find($id);
					$data[$i] = $ques;
					$i++;
				}
				return view('modifiersQues')->with('data',$data);
			}
			echo "Vui lòng chọn ít nhất 1 câu hỏi";	
		}
		
	}
	public function addadmin(){
		return view ('register');
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
}
