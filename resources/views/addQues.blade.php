@extends('Template.header')

@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm câu hỏi</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="ques" class="col-md-3 control-label">Câu hỏi:</label>

                            <div class="col-md-8">
                                <input id="ques" type="text" class="form-control" name="ques" value="{{ old('ques') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firt-answer" class="col-md-3 control-label">Đáp án 1:</label>
					
                            <div class="col-md-8">
                                <input id="firt-answer" type="firt-answer" class="form-control" name="firt-answer" value="{{ old('firt-answer') }}" required>
                            </div>
							<div class="col-md-1">
								<input onclick="" type="checkbox" name="" value="1" /> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="second-answer" class="col-md-3 control-label">Đáp án 2:</label>
	
                            <div class="col-md-8">
                                <input id="second-answer" type="second-answer" class="form-control" name="second-answer" required>
                            </div>
							<div class="col-md-1">
								<input onclick="" type="checkbox" name="" value="1" /> 
							</div>
                        </div>

                        <div class="form-group">
                            <label for="third-answer" class="col-md-3 control-label">Đáp án 3:</label>
			
                            <div class="col-md-8">
                                <input id="third-answer" type="third-answer" class="form-control" name="third-answer" required>
                            </div>
							<div class="col-md-1">
								<input onclick="" type="checkbox" name="" value="1" /> 
							</div>
                        </div>
						
						<div class="form-group">
                            <label for="fourth-answer" class="col-md-3 control-label">Đáp án 4:</label>
			
                            <div class="col-md-8">
                                <input id="fourth-answer" type="fourth-answer" class="form-control" name="fourth-answer" required>
                            </div>
							<div class="col-md-1">
								<input onclick="" type="checkbox" name="" value="1" /> 
							</div>
                        </div>
						
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Thêm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
