@extends('Template.header')
<!--{{ route('register') }}-->
@section('page')
<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm câu hỏi</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="ques" class="col-md-3 control-label">Câu hỏi:</label>

                            <div class="col-md-7">
                                <input id="ques" type="text" class="form-control" name="ques" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firt-answer" class="col-md-3 control-label">Đáp án 1:</label>
					
                            <div class="col-md-7">
                                <input id="answer1" type="second-answer" class="form-control" name="answer1" required>
                            </div>
							<div class="col-md-2">
								<input id = "cb1" onclick="switchadd();" type="checkbox" name="a1" value="1" /> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="second-answer" class="col-md-3 control-label">Đáp án 2:</label>
	
                            <div class="col-md-7">
                                <input id="answer2" type="second-answer" class="form-control" name="answer2" required>
                            </div>
							<div class="col-md-2">
								<input id = "cb2" onclick="switchadd();" type="checkbox" name="a2" value="1" /> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="third-answer" class="col-md-3 control-label">Đáp án 3:</label>
			
                            <div class="col-md-7">
                                <input id="answer3" type="third-answer" class="form-control" name="answer3">
                            </div>
							<div class="col-md-2">
								<input id = "cb3" onclick="switchadd();" type="checkbox" name="a3" value="1" /> 
							</div>
                        </div>
						
						<div class="form-group">
                            <label for="fourth-answer" class="col-md-3 control-label">Đáp án 4:</label>
			
                            <div class="col-md-7">
                                <input id="answer4" type="fourth-answer" class="form-control" name="answer4">
                            </div>
							<div class="col-md-2">
								<input id = "cb4" onclick="switchadd();" type="checkbox" name="a4" value="1" /> 
							</div>
                        </div>
						
						<div class="form-group"> 
							<label for="exampleInputFile" class="col-md-3 control-label" >  
								Thêm ảnh: 
							</label>
                            <div class="col-md-7">
                                <input type="file" id="file" name = "name_img" /> 
                                <p class="help-block"> Chọn ảnh từ máy tính. 
                                </p>
                            </div> 
						</div>
						
						<div class="form-group">
                            <center>
								<button disabled="disabled" id="btadd" type="submit" class="btn btn-primary">
                                    Thêm
								</button>
							</center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
		if((cb1.checked && answer1 != null)
		 ||(cb2.checked && answer2 != null)
		 ||(cb3.checked && answer3 != null)
		 ||(cb4.checked && answer4 != null)){
			document.getElementById("btadd").removeAttribute("disabled");
		}
		else{
			document.getElementById("btadd").setAttribute("disabled","disabled");
		}
	}
</script>
@endsection
