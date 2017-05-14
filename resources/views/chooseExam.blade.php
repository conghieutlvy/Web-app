@extends('Template/header')
@section('page')
	<div class="row">
    	<center><h1>Bạn hãy chọn bộ đề của mình</h1></center>
    </div>
    <br />
    <br />
    <div class="row">	
    	<center><a href="doExam/0"> 
   			<img src="{{url('so1.jpg')}}" alt="" border="1"/> 
		</a>
        <a href="doExam/1"> 
   			<img src="{{url('so2.jpg')}}" alt="" border="1"/> 
		</a></center>
     </div>
     <div class="row">	
    	<center><a href="doExam/2"> 
   			<img src="{{url('so3.jpg')}}" alt="" border="1"/> 
		</a>
        <a href="doExam/3"> 
   			<img src="{{url('so4.jpg')}}" alt="" border="1"/> 
		</a></center>
     </div>
    
@stop