@extends('Template/header')
@section('page')
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Đề ngẫu nhiên" src="1.jpg">
						<div class="caption">
							<h3>
								Đề ngẫu nhiên
							</h3>
							<div>
								Ôn thi với các câu hỏi tổng hợp từ các mức độ khác nhau.
							</div>
							@if(Auth::guest())
								<a class="btn btn-primary" href="doExam">Bắt đầu</a>
                            @else 
                            	<a class="btn btn-primary" href="admin/doExam">Bắt đầu</a>
							@endif
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Thi theo bộ đề" src="1.jpg">
						<div class="caption">
							<h3>
								Thi theo bộ đề
							</h3>
							<div>
								Ôn thi với các bộ câu hỏi tương ứng với trình độ khác nhau.
							</div>
							@if(Auth::guest())
								<a class="btn btn-primary" href="doExam">Bắt đầu</a> 
                            @else 
                            	<a class="btn btn-primary" href="admin/doExam">Bắt đầu</a> 
							@endif
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Câu hỏi ôn tập" src="2.jpg">
						<div class="caption">
							<h3>
								Câu hỏi ôn tập
							</h3>
							<div>
								Tổng hợp kết quả các câu hỏi.
							</div>
							@if(Auth::guest())
								<a class="btn btn-primary" href="#">Xem</a>
                            @else
                            	<a class="btn btn-primary" href="#">Xem</a>
                            @endif
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Các loại biển báo" src="3.jpg">
						<div class="caption">
							<h3>
								Các loại biển báo
							</h3>
							@if(Auth::guest())
								<a class="btn btn-primary" href="bienbao">Xem</a>
							@else 
                            	<a class="btn btn-primary" href="admin/bienbao">Xem</a>
                            @endif
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Mẹo thi" src="4.jpg">
						<div class="caption">
							<h3>
								Mẹo thi
							</h3>
							@if(Auth::guest())
								<a class="btn btn-primary" href="meo">Xem</a>	
                            @else  <a class="btn btn-primary" href="admin/meo">Xem</a>	
							@endif
                            
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Các dạng bài thi" src="5.jpg">
						<div class="caption">
							<h3>
								Các dạng bài thi
							</h3>
							
								<a class="btn btn-primary" href="#">Xem</a>
							
						</div>
					</div>
				</div>
			</div>
@stop