@extends('Template/header')

@section('page')

<br /><br />
<center><h2> Danh sách các admin </h2></center>
<br /><br />
<div class="row">
    <center>
    <table cellspacing="20" cellpadding="20" border="5" >
        <tr>
            <th width="40"><center>ID</center></th>
            <th width="400"><center>Tên</center></th>
            <th width="400"><center>Địa chỉ email</center></th>
            <th width="120"><center>Hành động</center></th>
        </tr>
    <?php
        foreach($data as $admin) {
                 getadmin( $admin); 
                    
            }
    ?>
    </table>
    </center>
</div>
<br>

	
<?php
	function getadmin($admin){
		?><tr>
        <th><center> <?php
			echo $admin['id'];
		?></center></th>
		<th><?php
			echo $admin['name'];?>
        </th>
        <th><?php
			echo $admin['email'];?>
        </th>
        <th><center>
            <a id = "<?php echo "btdelete_".$admin['id']?>" onclick="confim('<?php echo "modifiersadmin/".$admin['id']?>','<?php echo "btdelete_".$admin['id']?>');" type="button" class="btn btn-danger">
				Xóa
			</a></center> 
        </th>
        </tr><?php
	}
?>
<script language="javascript">
	function confim(st,id){
		var check = confirm("Bạn có thực sự muốn xóa? \nLưu ý: Toàn bộ câu hỏi liên quan đến admin này đều bị xóa. ");
		if(check)
			document.getElementById(id).setAttribute("href",st);
		else document.getElementById(id).removeAttribute("href");
	}
</script>
@stop
