@extends('Template/header')
@section('page')
			<div class="row">
				<div class="col-md-6">
					<div class="thumbnail">
						<a class="btn btn-primary" href="home/addQues">Thêm câu hỏi
							<img alt="Thêm câu hỏi" src="{{url('8.jpg')}}">
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumbnail">
						<a class="btn btn-primary" href="home/selectques">Sửa câu hỏi
							<img alt="Sửa câu hỏi" src="{{url('9.jpg')}}">
						</a>
					</div>
				</div>
				@if(Auth::user()->level != 0)
                <div class="col-md-6">
					<div class="thumbnail">
						<a class="btn btn-primary" href="home/addadmin">Thêm admin
							<img alt="" src="{{url('12.jpg')}}">
						</a>
					</div>
				</div>
                <div class="col-md-6">
					<div class="thumbnail">
						<a class="btn btn-primary" href="home/selectadmin">Xóa admin
							<img alt="" src="{{url('13.jpg')}}">
						</a>
					</div>
				</div>
                @endif
                <div class="col-md-6">
					<div class="thumbnail">
						<a class="btn btn-primary" href="home/feedback">Ý kiến phản hồi
							<img alt="Ý kiến phản hồi" src="{{url('11.jpg')}}">
						</a>
					</div>
				</div>
			</div>
@stop