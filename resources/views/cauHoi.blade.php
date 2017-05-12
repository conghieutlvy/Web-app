
@extends('Template/header')

@section('page')
<br /><br />
<center><h2> Danh sách câu hỏi có trong đề thi </h2></center>
<br /><br />
    <?php
     $url = '../picture/';
	$i = 0;
    foreach($data as $ques) {
             getanswer($i, $ques, $url); 
			 $i++;       
        }
function getanswer($number,$ques, $url){ 
            ?>
            <div class="row">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-9">
                                <h3>
                Câu <?php echo (($number+1).":  ".$ques['question']) ?>
                                </h3>
                            </div>
                            <div class="col-xs-1">
                            </div>
                    </div>
                    <br />
        <?php if(isset($ques["name_img"])) { ?>
            <center><img src="
        <?php echo $url.$ques["name_img"]; ?>
            " alt = ""/>
            </center>
        <?php }
		
            if($ques["a0"] == 1)
				initques($ques["c0"]);
			if($ques["a1"] == 1)
				initques($ques["c1"]);
			if($ques["a2"] == 1)
				initques($ques["c2"]);
			if($ques["a3"] == 1)
				initques($ques["c3"]);
				?>
            <br />
            <?php           
}
	function initques($val){
		?>
            <div class="row">
                <div class="col-xs-3">
                </div>
                <div class="col-xs-7">
                    <input type="checkbox" checked="checked" disabled="disabled" /> 
                          <?php echo ($val) ?>
                                 
                </div>
                <div class="col-xs-2">
                </div>
            </div>
            <br />
		<?php	
	}
?>
@stop            