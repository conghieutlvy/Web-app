<?php

namespace App\Http\Controllers;
session_start();
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class DoExamController extends Controller {
	
		
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