@extends('Template/header')

@section('page')

<br /><br />
<center><h2> Danh sách các câu hỏi </h2></center>
<br /><br />
<div class="row">
    <center>
    <table cellspacing="20" cellpadding="20" border="5" >
        <tr>
            <th width="40"><center>ID</center></th>
            <th width="800"><center>Câu hỏi</center></th>
            <th width="120"><center>Hành động</center></th>
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

	
<?php
	function getques($number,$ques,$url){
		?><tr>
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
        <th><center>
        <a href="modifiersques/1/<?php if(isset($ques["name_img"])){
			echo "1_".$ques['id'];
			} 
			else echo "0_".$ques['id'];
			 ?>" class="btn  btn-warning" type="button">Sửa</a>
              <?php if(isset($ques["name_img"])){
				$str ="1_".$ques['id'];
				}
				else $str = "0_".$ques['id'];?>


            <a id = "<?php echo "btdelete_".$str?>" onclick="confim('<?php echo "modifiersques/0/".$str?>','<?php echo "btdelete_".$str?>');" type="button" class="btn btn-danger">
				Xóa
			</a></center> 
        </th>
        </tr><?php
	}
?>
<script language="javascript">
	function confim(st,id){
		var check = confirm("Bạn có thực sự muốn xóa?");
		if(check)
			document.getElementById(id).setAttribute("href",st);
		else document.getElementById(id).removeAttribute("href");
	}
</script>
@stop
