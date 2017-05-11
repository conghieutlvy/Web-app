@extends('Template/exam')

@section('exam')
	<?php 
		if(isset($key)){ 
			echo "Bộ đề thi số ".($key + 1);
			$url = "../picture/";
		}
		else {
			echo "Bộ đề thi ngẫu nhiên";
			$url = "picture/";
		}
	?>
@stop
	<?php foreach($data[0] as $row) ?>
@section('ans0')
	<?php getanswer(0, $row, $url);?>
@stop      

<?php foreach($data[1] as $row) ?>  
@section('ans1')
	<?php getanswer(1, $row, $url);?>
@stop

<?php foreach($data[2] as $row) ?>
@section('ans2')
	<?php getanswer(2, $row, $url);?>
@stop

<?php foreach($data[3] as $row) ?>
@section('ans3')
	<?php getanswer(3, $row, $url);?>
@stop

<?php foreach($data[4] as $row) ?>
@section('ans4')
	<?php getanswer(4, $row, $url);?>
@stop

<?php foreach($data[5] as $row) ?>
@section('ans5')
	<?php getanswer(5, $row, $url);?>
@stop

<?php foreach($data[6] as $row) ?>
@section('ans6')
	<?php getanswer(6, $row, $url);?>
@stop

<?php foreach($data[7] as $row) ?>
@section('ans7')
	<?php getanswer(7, $row, $url);?>
@stop

<?php foreach($data[8] as $row) ?>
@section('ans8')
	<?php getanswer(8, $row, $url);?>
@stop

<?php foreach($data[9] as $row) ?>
@section('ans9')
	<?php getanswer(9, $row, $url);?>
@stop
