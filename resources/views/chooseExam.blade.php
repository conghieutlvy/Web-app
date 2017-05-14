@extends('Template/header')
@section('page')
	<div class="row">
    	<center><h1>Bạn hãy chọn bộ đề của mình</h1></center>
    </div>
    <br />
    <br />
@if (!Auth::guest())
<?php $url = "../";
?>
@else
<?php $url = "";
?>
@endif
    <div class="row">	
    	<center><a href="doExam/0"> 
   			<img src="<?php echo $url."so1.jpg"?>" alt="" border="1"/> 
		</a>
        <a href="doExam/1"> 
   			<img src="<?php echo $url."so2.jpg"?>" alt="" border="1"/> 
		</a></center>
     </div>
     <div class="row">	
    	<center><a href="doExam/2"> 
   			<img src="<?php echo $url."so3.jpg"?>" alt="" border="1"/> 
		</a>
        <a href="doExam/3"> 
   			<img src="<?php echo $url."so4.jpg"?>" alt="" border="1"/> 
		</a></center>
     </div>
    
@stop