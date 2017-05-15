@extends('Template/header')

@section('page')

<br /><br />
<center><h2> Chọn admin cần xóa</h2></center>
<br /><br />
<form name= "checkform" action="" method="POST" >
{{ csrf_field() }}
<div class="row">
    <center>
    <table cellspacing="20px" cellpadding="20px" border="1" >
        <tr>
            <th width="60"><center>Chọn</center></th>
            <th width="40"><center>ID</center></th>
            <th width="400"><center>Admin</center></th>
            <th width="400"><center>Địa chỉ e-mail</center></th>
        </tr>
    <?php	 
        $i = 0;
        foreach($data as $admin) {
                 getadmin($i, $admin); 
                 $i++;       
            }
    ?>
    </table>
    </center>
</div>
<br>
<div class = "row">
<center>
    <input width="300" id = "sumbit" type="submit" class="btn btn-lg btn-success btn-fixed-right" name="submit-form" value="<?php echo "Xóa"?>" /></center>
</div>
</form> 

	
<?php
	function getadmin($number,$admin){
		?><tr>
		<th><center>
			<input type="checkbox" name = "cb[]" id = "<?php echo $number ?>" value="<?php echo $admin['id'] ?>"  align="right"/></center>
		</th>
        <th><center> <?php
			echo $admin['id'];
		?></center></th>
		<th><?php
			echo $admin['name'];
		?>
        </th>
        <th><?php
			echo $admin['email'];
		?>
        </th>
        </tr><?php
	}
?>

@stop
