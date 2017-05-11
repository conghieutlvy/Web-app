@extends('Template/header')
@section('page')
    <div class="row">
    	<h1 class="text-center">
			Kết quả bài thi
		</h1>
    </div>
    
	<div class="row">
		<div class="col-md-8">
        <h2 class="text-center">
				@yield('pass')
			</h2>
		</div>
		<div class="col-md-4">
			<h3 class="text-center">
				Tổng số
			</h3>
            <div class="row">
            	<h4 class="text-center text-danger">
					@yield('total')/10
				</h4>
            </div>
		</div>
	</div>
	
    
	<div class="row">
    	<div class="col-md-1">
        </div>
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 1
			</h3>
            @yield('q1')
		</div>
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 2
			</h3>
            @yield('q2')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 3
			</h3>
            @yield('q3')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 4
			</h3>
            @yield('q4')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 5
			</h3>
            @yield('q5')
        </div>
        
		<div class="col-md-1">
        </div>
	</div>
    
<div class="row">
    	<div class="col-md-1">
        </div>
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 6
			</h3>
            @yield('q6')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 7
			</h3>
            @yield('q7')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 8
			</h3>
            @yield('q8')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 9
			</h3>
            @yield('q9')
		</div>
        
		<div class="col-md-2">
			<h3 class="text-center">
				Câu 10
			</h3>
            @yield('q10')
         </div>
		<div class="col-md-1">
        </div>
	</div>
    <br /><br />
    <center><a class="btn btn-primary btn-lg" href="/">Trang chủ</a></center>
@stop