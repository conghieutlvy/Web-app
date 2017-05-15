@extends('Template/header')
@section('page')
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Đề ngẫu nhiên" src="8.jpg">
						<div class="caption">
							<h3>
								Thêm câu hỏi
							</h3>
							<a class="btn btn-primary" href="home/addQues">Thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Đề ngẫu nhiên" src="9.jpg">
						<div class="caption">
							<h3>
								Sửa câu hỏi
							</h3>
							<a class="btn btn-primary" href="home/selectques">Sửa</a>
						</div>
					</div>
				</div>
				@if(Auth::user()->level != 0)
                <div class="col-md-4">
					<div class="thumbnail">
						<img alt="Đề ngẫu nhiên" src="10.jpg">
						<div class="caption">
							<h3>
								Thêm admin
							</h3>
							<a class="btn btn-primary" href="home/addQues">Thêm</a>
						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="thumbnail">
						<img alt="Đề ngẫu nhiên" src="11.jpg">
						<div class="caption">
							<h3>
								Sửa admin
							</h3>
							<a class="btn btn-primary" href="home/addQues">Sửa</a>
						</div>
					</div>
				</div>
                @endif
                <div class="col-md-4">
					<div class="thumbnail">
						<img alt="Đề ngẫu nhiên" src="12.jpg">
						<div class="caption">
							<h3>
								Ý kiến phản hồi
							</h3>
							<a class="btn btn-primary" href="home/addQues">Xem</a>
						</div>
					</div>
				</div>
			</div>
@stop