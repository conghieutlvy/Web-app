@extends('Template.header')
<!--{{ route('register') }}-->
@section('page')
<div class="container">
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
								<input id = "cb1" type="checkbox" name="a1" value="1" /> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="second-answer" class="col-md-3 control-label">Đáp án 2:</label>
	
                            <div class="col-md-7">
                                <input id="answer2" type="second-answer" class="form-control" name="answer2" required>
                            </div>
							<div class="col-md-2">
								<input id = "cb2" type="checkbox" name="a2" value="1" /> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="third-answer" class="col-md-3 control-label">Đáp án 3:</label>
			
                            <div class="col-md-7">
                                <input id="answer3" type="third-answer" class="form-control" name="answer3">
                            </div>
							<div class="col-md-2">
								<input id = "cb3" type="checkbox" name="a3" value="1" /> 
							</div>
                        </div>
						
						<div class="form-group">
                            <label for="fourth-answer" class="col-md-3 control-label">Đáp án 4:</label>
			
                            <div class="col-md-7">
                                <input id="answer4" type="fourth-answer" class="form-control" name="answer4">
                            </div>
							<div class="col-md-2">
								<input id = "cb4" type="checkbox" name="a4" value="1" /> 
							</div>
                        </div>
						
						<div class="form-group">
                            <center>
								<button onclick="vailidation();" id="btadd" type="submit" class="btn btn-primary">
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
	function vailidation() {
		document.getElementById("ques").innerHTML = "aa";
		var cb3,cb4;
		var answer3 = document.getElementById('answer3');
		var answer4 = document.getElementById('answer4');
		if(answer3 != '') cb3 = document.getElementById('cb3');
		if(answer4 != '') cb4 = document.getElementById('cb4');
		var cb1 = document.getElementById('cb1');
		var cb2 = document.getElementById('cb2');
		if(!(cb1.checked || cb2.checked || cb3.checked ||cb4.checked)){
			alert("Vui lòng chọn ít nhất 1 đáp án đúng bằng cách tích vào ô tương ứng");
			document.getElementById('answer1').setAttribute("value","{{ old('answer1') }}");
			document.getElementById('answer2').setAttribute("value","{{ old('answer2') }}");
			answer3.setAttribute("value","{{ old('answer3') }}");
			answer4.setAttribute("value","{{ old('answer4') }}");
		}
		else{
			document.getElementById('answer1').removeAttribute("value");
			document.getElementById('answer2').removeAttribute("value");
			answer3.removeAttribute("value");
			answer4.removeAttribute("value");
		}
	}
	
</script>
@endsection
