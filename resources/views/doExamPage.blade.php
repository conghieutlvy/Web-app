@extends('Template/exam')

@section('exam')
@if (!Auth::guest())
	<?php 
		if(isset($key)){ 
			echo "Bộ đề thi số ".($key + 1);
			$url = "../../picture/";
		}
		else {
			echo "Bộ đề thi ngẫu nhiên";
			$url = "../picture/";
		}
	?>
@else
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
@endif
@stop
@section('ques')
<?php 
	$i = 0;
	foreach($data as $ques)
		{
			getanswer($i, $ques, $url);
			$i++;
			//if($i == 7) break;
		}
?>
@stop
<?php
function getanswer($number,$row, $url){	
		if($number == 0){?>
        	<div class="item active">
        <?php } else {
			?>
            <div class="item">
            <?php } ?>
				<div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                <h3>
								Câu <?php echo (($number+1).":  ".$row["question"]) ?>
								</h3>
                            </div>
                            <div class="col-xs-1">
                            </div>
                    </div>
                    <br />
		<?php 
			if(isset($row["name_img"])) { ?>
            <center><img src="
		<?php echo $url.$row["name_img"]; ?>
        	" alt = ""/></center>
		<?php }
			?>
            
            <div class="row">
                <div class="col-xs-2">
                </div>
				<div class="col-xs-8">
                    <input onclick="active_num(<?php echo $number."0";?>);" type="checkbox" name="cb[]" value="<?php echo $number."0";?>" /> 
                          <?php echo $row['c0']; ?>
                                 
                </div>
                <div class="col-xs-2">
                </div>
            </div>
            <br /><br />
            
            		<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(<?php echo $number."1";?>);" type="checkbox" name="cb[]" value="<?php echo $number."1";?>" /> 
                                 <?php echo $row["c1"];?>
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
            <?php 
			
			if($row["c2"] != null){?>
            		<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(<?php echo $number."2";?>);" type="checkbox" name="cb[]" value="<?php echo $number."2";?>" /> 
                                 <?php echo $row["c2"]; ?>
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
            <?php 
			}
			if ($row["c3"] != null){?>
            		<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(<?php echo $number."3";?>);" type="checkbox" name="cb[]" value="<?php echo $number."3";?>" /> 
                                 <?php echo ($row["c3"]); ?>
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div>
            <?php } ?>
      </div>
<?php					
}
?>