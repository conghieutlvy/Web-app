@extends('Template/header')

@section('page')

<br /><br />
<center><h2> Chọn câu hỏi cần <?php if($key == 0) echo "xóa";
 else echo "sửa" ?></h2></center>
<br /><br />
<form name= "checkform" action="modifiersques/<?php echo $key ?>" method="POST" >
{{ csrf_field() }}
<div class="row">
    <center>
    <table cellspacing="20px" cellpadding="20px" border="1" >
        <tr>
            <th width="60"><center>Chọn</center></th>
            <th width="40"><center>ID</center></th>
            <th width="800"><center>Câu hỏi</center></th>
        </tr>
    <?php
        $url = '../picture/';	 
        $i = 0;
        foreach($data as $ques) {
                 getques($i, $ques, $url); 
                 $i++;       
            }
        foreach($dataimg as $ques){
            getques($i, $ques, $url);
            $i++;
        }
    ?>
    </table>
    </center>
</div>
<br>
<div class = "row">
<center>
    <input width="300" id = "sumbit" type="submit" class="btn btn-lg btn-success btn-fixed-right" name="submit-form" value="<?php if($key == 0) echo "Xóa" ;
	else echo "Sửa" ?>" /></center>
</div>
</form> 

	
<?php
	function getques($number,$ques,$url){
		?><tr>
		<th><center>
			<input type="checkbox" name = "cb[]" id = "<?php echo $number ?>" value="<?php if(isset($ques["name_img"])) $str1 = "0" ; else $str1 = "1";
			if($ques['id'] < 10) $str2 = "0".$ques['id']; else $str2 = $ques['id'];
			echo $str1."_".$str2 ?>"  align="right"/></center>
		</th>
        <th><center> <?php
			echo $ques['id'];
		?></center></th>
		<th><?php
			echo $ques['question'];
		if(isset($ques["name_img"])) { ?>
            <br><center><img src="
        <?php echo $url.$ques["name_img"]; ?>
            " alt = ""/>
            </center>
        <?php }?>
        </th>
        </tr><?php
	}
?>

@stop
