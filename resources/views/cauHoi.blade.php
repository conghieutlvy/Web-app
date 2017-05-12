
@extends('Template/header')

@section('page')

    <?php
        $url = '../picture/';
    foreach($data as $data1) {
        foreach ($data1 as $row) {
             getanswer(0, $row, $url);        
        }
    }
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
            " alt = ""/>
            </center>
        <?php }
            if ($key == "c0"){?>
            <div class="row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                    <input type="checkbox" name="cb[]" value="<?php echo $number."0";?>" /> 
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
                                 <input  type="checkbox" /> 
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
                                 <input type="checkbox"  /> 
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
                                 <input type="checkbox"  /> 
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
@stop            