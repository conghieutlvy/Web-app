<?php 
namespace App\Http\Controllers;
session_start();
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\question;
use App\ques_img;
class DoExamController extends Controller {
		
	protected $data = array();
	protected $results = array();
	
	//Khoi tao mang luu ket qua
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
		$maxques = question::all()->count();
		$maxquesimg = ques_img::all()->count();
		$t = array();
		for($i = 0; $i<7; $i++) {
			do{
				$check = 1;
				$j =0;
				$id = mt_rand(1,$maxques);
				for(; $j < $i; $j++){
					if($t[$j] == $id){
						$check = 0;
						break;
					}	
				}
				if($j == $i && question::find($id) != null) {
					$t[$i] = $id;	
				}
			}while(!$check);
			$temp = question::find($id);
			$resultsDB[$i] = $temp;
			$_SESSION["dtb[$i]"] = $temp;
		}
			for($i = 7; $i<10; $i++) {
				do{
					$check = 1;
					$j =7;
					$id = mt_rand(1,$maxquesimg);
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
				$temp = ques_img::find($id);;
				$resultsDB[$i] = $temp;
				$_SESSION["dtb[$i]"] = $temp;	
			}
		
		return view('doExamPage')->with('data', $resultsDB);
	}
	public function doexamwithid($id){
		if($id == 0) $startId = 1;
		else if($id == 1) $startId = 3;
		else if($id == 2) $startId = 5;
		else $startId = 7;
		for($i = 0 ; $i<7; $i++) {
			$temp = question::find($startId + $i);
			$resultsDB[$i] = $temp;
			$_SESSION["dtb[$i]"] = $temp;
		}
		for($i = 7; $i<10; $i++) {
			$temp = ques_img::find($startId++);
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
			foreach($temp as $ques){
				$count = 0;
				if(($ques["a0"] == $this->data[$t])
					||($ques["a1"] == $this->data[$t+1])
					||($ques["a2"] == $this->data[$t+2])
					||($ques["a3"] == $this->data[$t+3])) $count++;
				if( $count == 3) $this->results[$i] = 1;
			}
		}
		return view('resultsPage')->with('res', $this->results);
	}
}