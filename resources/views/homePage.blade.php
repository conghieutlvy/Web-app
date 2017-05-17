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
								<a class="btn btn-primary" href="doExam" id ="dengaunhien">Bắt đầu</a>
                            @else 
                            	<a class="btn btn-primary" href="admin/doExam" id ="dengaunhien">Bắt đầu</a>
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
								<a class="btn btn-primary" href="chooseexam" id ="bode">Bắt đầu</a> 
                            @else 
                            	<a class="btn btn-primary" href="admin/chooseexam" id ="bode">Bắt đầu</a> 
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
								<a class="btn btn-primary" href="cauhoi" id="cauhoi">Xem</a>
                            @else
                            	<a class="btn btn-primary" href="admin/cauhoi" id="cauhoi">Xem</a>
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
								<a class="btn btn-primary" href="bienbao" id="bienbao">Xem</a>
							@else 
                            	<a class="btn btn-primary" href="admin/bienbao" id="bienbao">Xem</a>
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
								<a class="btn btn-primary" href="meo" id="meo">Xem</a>	
                            @else  <a class="btn btn-primary" href="admin/meo" id="meo">Xem</a>	
							@endif
                            
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Các dạng thi" src="5.jpg">
						<div class="caption">
							<h3>
								Các dạng thi
							</h3>
							@if(Auth::guest())
								<a class="btn btn-primary" href="dangthi" id="dangthi">Xem</a>	
                            @else  <a class="btn btn-primary" href="admin/dangthi" id="dangthi">Xem</a>	
							@endif
						</div>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Các loại biển báo" src="0.jpg">
						<div class="caption">
							<h3>
								Nhận xét trang web
							</h3>
							@if(Auth::guest())
								<a class="btn btn-primary" href="feedback">Xem</a>
							@else 
                            	<a class="btn btn-primary" href="admin/feedback">Xem</a>
                            @endif
						</div>
					</div>
				</div>
            </div>
@stop