@extends('Template.header')

@section('page')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thêm admin</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('ques') ? ' has-error' : '' }}">
                            <label for="ques" class="col-md-4 control-label">Thêm câu hỏi</label>

                            <div class="col-md-6">
                                <input id="ques" type="text" class="form-control" name="ques" value="{{ old('ques') }}" required autofocus>

                                @if ($errors->has('ques'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ques') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firt-answer') ? ' has-error' : '' }}">
                            <label for="firt-answer" class="col-md-4 control-label">Đáp án 1</label>
					
                            <div class="col-md-6">
                                <input id="firt-answer" type="firt-answer" class="form-control" name="firt-answer" value="{{ old('firt-answer') }}" required>
								<p>     </p>
								<input onclick="" type="checkbox" name="" value="1" /> 
                                @if ($errors->has('firt-answer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firt-answer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('second-answer') ? ' has-error' : '' }}">
                            <label for="second-answer" class="col-md-4 control-label">Đáp án 2</label>
	
                            <div class="col-md-6">
                                <input id="second-answer" type="second-answer" class="form-control" name="second-answer" required>
								<p>     </p>
								<input onclick="" type="checkbox" name="" value="1" /> 
                                @if ($errors->has('second-answer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second-answer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('third-answer') ? ' has-error' : '' }}">
                            <label for="third-answer" class="col-md-4 control-label">Đáp án 2</label>
			
                            <div class="col-md-6">
                                <input id="third-answer" type="third-answer" class="form-control" name="third-answer" required>
								<p>     </p>
								<input onclick="" type="checkbox" name="" value="1" /> 
                                @if ($errors->has('third-answer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('third-answer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
