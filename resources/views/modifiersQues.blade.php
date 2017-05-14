@extends('Template.header')
<!--{{ route('register') }}-->
@section('page')
<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sửa câu hỏi</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <?php foreach($data as $row)
							showques($row);
							?>
						<div class="form-group">
                            <center>
								<button id="btadd" type="submit" class="btn btn-primary">
                                    Sửa
								</button>
							</center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php 
	function showques($ques){
		?><div class="form-group">
                            <label for="ques" class="col-md-3 control-label">Câu hỏi:</label>

                            <div class="col-md-7">
                                <input id="ques" type="text" class="form-control" name="ques" required autofocus value="<?php echo $ques['question'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firt-answer" class="col-md-3 control-label">Đáp án 1:</label>
					
                            <div class="col-md-7">
                                <input  id="answer1" type="text" class="form-control" name="answer1" required value="<?php echo $ques['c0'] ?>">
                            </div>
							<div class="col-md-2">
								<input id = "cb1" onclick="switchadd();" type="checkbox" name="a1" value="1" <?php if($ques['a0']) echo "checked"; ?>/> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="second-answer" class="col-md-3 control-label">Đáp án 2:</label>
	
                            <div class="col-md-7">
                                <input  id="answer2" type="text" class="form-control" name="answer2" required value="<?php echo $ques['c1'] ?>">
                            </div>
							<div class="col-md-2">
								<input id = "cb2" onclick="switchadd();" type="checkbox" name="a2" value="1" <?php if($ques['a1']) echo "checked"; ?> /> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="third-answer" class="col-md-3 control-label">Đáp án 3:</label>
			
                            <div class="col-md-7">
                                <input id="answer3" type="text" class="form-control" name="answer3" value="<?php echo $ques['c2'] ?>">
                            </div>
							<div class="col-md-2">
								<input id = "cb3" onclick="switchadd();" type="checkbox" name="a3" value="1"<?php if($ques['a2']) echo "checked"; ?>/> 
							</div>
                        </div>
						
						<div class="form-group">
                            <label for="fourth-answer" class="col-md-3 control-label">Đáp án 4:</label>
			
                            <div class="col-md-7">
                                <input id="answer4" type="text" class="form-control" name="answer4" value="<?php echo $ques['c3'] ?>">
                            </div>
							<div class="col-md-2">
								<input id = "cb4" onclick="switchadd();" type="checkbox" name="a4" value="1" <?php if($ques['a3']) echo "checked"; ?> /> 
							</div>
                        </div>
						
						<div class="form-group"> 
							<label for="InputFile" class="col-md-3 control-label" >  
								Thêm ảnh: 
							</label>
                            <div class="col-md-7">
                                <input type="file" id="ifile" name="up_img" /> 
                                <p class="help-block"> Chọn ảnh từ máy tính. 
                                </p>
                            </div> 
						</div>
                        <hr>
<?php	
	}
?>
<script language="javascript">
	function switchadd() {
		var answer1 = document.getElementById('answer1');
		var answer2 = document.getElementById('answer2');
		var answer3 = document.getElementById('answer3');
		var answer4 = document.getElementById('answer4');
		var cb1 = document.getElementById('cb1');
		var cb2 = document.getElementById('cb2');
		var cb3 = document.getElementById('cb3');
		var cb4 = document.getElementById('cb4');
		if((cb1.checked && answer1.value != "")
		 ||(cb2.checked && answer2.value != "")
		 ||(cb3.checked && answer3.value != "")
		 ||(cb4.checked && answer4.value != "")){
			document.getElementById("btadd").removeAttribute("disabled");
		}
		else{
			document.getElementById("btadd").setAttribute("disabled","disabled");
		}
	}

</script>
@endsection
