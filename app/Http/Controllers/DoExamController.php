<?php 
namespace App\Http\Controllers;
session_start();
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TestOnline;
use App\question_img;
class DoExamController extends Controller {
		
	protected $data = array();
	protected $results = array();

	public function __construct(){
		for($i = 0; $i < 10; $i++){
			$t = $i*4;
			$this->data[$t] = 0;
			$this->data[$t+1] = 0;
			$this->data[$t+2] = 0;
			$this->data[$t+3] = 0;
			$this->results[$i] = 0;
		};
	}
	public function doexam(){
		$t = array();
		for($i = 0; $i<7; $i++) {
			do{
				$check = 1;
				$j =0;
				$id = mt_rand(0,20);
				for(; $j < $i; $j++){
					if($t[$j] == $id){
						$check = 0;
						break;
					}
					
				}
				if($j == $i) {
					$t[$i] = $id;	
				}
			}while(!$check);
			$temp = TestOnline::where('id','=',$id)->get()->toArray();
			$resultsDB[$i] = $temp;
			$_SESSION["dtb[$i]"] = $temp;
		}
			for($i = 7; $i<10; $i++) {
				do{
					$check = 1;
					$j =7;
					$id = mt_rand(0,10);
					for(; $j < $i; $j++){
						if($t[$j] == $id){
							$check = 0;
							break;
						}
						
					}
					if($j == $i) {
						$t[$i] = $id;	
					}
				}while(!$check);
				$temp = question_img::where('id','=',$id)->get()->toArray();
				$resultsDB[$i] = $temp;
				$_SESSION["dtb[$i]"] = $temp;	
			}
		
		return view('doExamPage')->with('data', $resultsDB);
	}
	public function doexamwithid($id){
		if($id == 0) $startId = 0;
		else if($id == 1) $startId = 2;
		else if($id == 2) $startId = 4;
		else $startId = 6;
		for($i = 0 ; $i<7; $i++) {
			$temp = TestOnline::where('id','=',$startId + $i)->get()->toArray();
			$resultsDB[$i] = $temp;
			$_SESSION["dtb[$i]"] = $temp;
		}
		for($i = 7; $i<10; $i++) {
			$temp = question_img::where('id','=',$startId++)->get()->toArray();
			$resultsDB[$i] = $temp;
			$_SESSION["dtb[$i]"] = $temp;	
		}
		return view('doExamPage')->with([
		'data'=>$resultsDB,
		'key'=>$id,
		]);
	}	
	public function showresults(){
		if(isset($_POST['cb']))
		foreach($_POST['cb'] as $row){
			$this->data[floor($row/10) + $row%10] = 1;		
		}
		for($i = 0; $i<10; $i++) {
			$temp = $_SESSION["dtb[$i]"];
			$t =$i*4;
			foreach($temp as $row){
				$count = 0;
				foreach($row as $key => $value){
					if(($key == "a0" && $value == $this->data[$t])
					||($key == "a1" && $value == $this->data[$t+1])
					||($key == "a2" && $value == $this->data[$t+2])
					||($key == "a3" && $value == $this->data[$t+3])) $count++;	
				}
				if( $count == 3) $this->results[$i] = 1;
			}
		}
		session_destroy();
		return view('resultsPage')->with('res', $this->results);
	}
	
	public function showquestion() {
		
			$temp = TestOnline::all()->toArray();			
			$resultsDB = $temp;
		
		
			$temp = question_img::all()->toArray();			
			$resultsdbimg = $temp;
		
		return view('cauHoi')->with([
			'data'=> $resultsDB,
			'dataimg'=>$resultsdbimg
			]);
	}
}