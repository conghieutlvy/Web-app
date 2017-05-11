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
<?php 
function getanswer($number,$row, $url){	
		foreach($row as $key => $val){
			if($key == "question"){?>
			<div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                <h3>
								Câu <?php echo (($number+1).":  ".$val) ?>
								</h3>
                            </div>
                            <div class="col-xs-1">
                            </div>
                    </div>
                    <br /><br />
		<?php }
			if($key == "img_src") { ?>
            <center><img src="
		<?php echo $url.$val; ?>
        	" alt = ""/></center>
		<?php }
			if ($key == "c0"){?>
            <div class="row">
                <div class="col-xs-2">
                </div>
				<div class="col-xs-8">
                    <input onclick="active_num(<?php echo $number."0";?>);" type="checkbox" name="cb[]" value="<?php echo $number."0";?>" /> 
                          <?php echo ($val) ?>
                                 
                </div>
                <div class="col-xs-2">
                </div>
            </div>
            <br /><br />
            <?php 
			}
			if ($key == "c1"){?>
            		<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(<?php echo $number."1";?>);" type="checkbox" name="cb[]" value="<?php echo $number."1";?>" /> 
                                 <?php echo ($val) ?>
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
            <?php 
			}
			if ($key == "c2" && $val != NULL){?>
            		<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(<?php echo $number."2";?>);" type="checkbox" name="cb[]" value="<?php echo $number."2";?>" /> 
                                 <?php echo ($val) ?>
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
            <?php 
			}
			if ($key == "c3" && $val != NULL){?>
            		<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(<?php echo $number."3";?>);" type="checkbox" name="cb[]" value="<?php echo $number."3";?>" /> 
                                 <?php echo ($val) ?>
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
            <?php 
			}
		}
}
	?>