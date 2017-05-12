@extends('Template.header')

@section('page')
<div class="container">
	<div class="row">
		<a href = "home/addQues" type = 'button' id = 'addQues'>
        Add ques
        </a>
	</div>
    <div class="row">
		<a href="{{ route('register') }}">Đăng kí</a>
	</div>
</div>
@endsection
