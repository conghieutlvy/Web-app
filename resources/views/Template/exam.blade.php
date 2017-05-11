@extends('Template/header')
@section('page')
	
	<div class="row">
		<div class="col-md-10">
			 <h2>
				@yield('exam')
			 </h2>
		</div>
        <div class = "col-md-2">
        	 <h2><span class="label label-warning" id="clock" ></span></h2>
        </div>
	</div>
	<br /><br />
      
<form name= "checkform" action="" method="POST" >
<input onclick="active_num(9);" type="hidden" name="_token" value="{{ csrf_token() }}" />
<!-- ////////////////////////////////////////////////////// -->      
		<div class="carousel slide" id="carousel-1"  data-interval="9999999">
				
				<div class="carousel-inner">
					<div class="item active">
                        @yield('ans0')  
					</div>
                    
					<div class="item">
                    	@yield('ans1')
					</div>
                    
					<div class="item">
                    	@yield('ans2')
					</div>
                    
					<div class="item">
                    	@yield('ans3')
					</div>
                    
					<div class="item">
                    	@yield('ans4')
					</div>
                    
					<div class="item">
                    	@yield('ans5')
					</div>
                    
					<div class="item">
                    	@yield('ans6')
					</div>
                    
					<div class="item">
                    	@yield('ans7')
					</div>
                    
                    <div class="item">
                    	@yield('ans8')
					</div>
                    
                    <div class="item">
                    	@yield('ans9')
					</div>

       			</div>
  <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  </a>	
</div> 
   
   <div align="bottom">
      <div class = "row">
		<div class="container-fluid,carousel-indicators">
                <center>
                <ul class="pagination pagination">
                    <li id="num0" data-slide-to="0" data-target="#carousel-1" >
                        <a>1</a>
                    </li>
                    <li id="num1" data-slide-to="1" data-target="#carousel-1">
                        <a>2</a>
                    </li>
                    <li id="num2" data-slide-to="2" data-target="#carousel-1">
                        <a>3</a>
                    </li>
                    <li id="num3" data-slide-to="3" data-target="#carousel-1">
                        <a>4</a>
                    </li>
                    <li id="num4" data-slide-to="4" data-target="#carousel-1">
                        <a>5</a>
                    </li>
                    <li id="num5" data-slide-to="5" data-target="#carousel-1">
                        <a>6</a>
                    </li>
                    <li id="num6" data-slide-to="6" data-target="#carousel-1">
                        <a>7</a>
                    </li>
                    <li id="num7" data-slide-to="7" data-target="#carousel-1">
                        <a>8</a>
                    </li>
                    <li id="num8" data-slide-to="8" data-target="#carousel-1">
                        <a>9</a>
                    </li>
                    <li id="num9" data-slide-to="9" data-target="#carousel-1">
                        <a>10</a>
                    </li>
                </ul>
                </center>
		  </div>
		</div>
                     <div class="row">	
                    	 <center><input id = "sumbit" type="submit" class="btn btn-lg btn-success" name="submit-form" value="Nộp bài" />
                         </center>
                     </div>
      </div>
 </form> 
 <script language="javascript" >
	
            var seconds = 600;
            function timer() {
                var hours       = Math.floor(seconds/3600);
                var minutesLeft = Math.floor(seconds - (hours*3600));
                var minutes     = Math.floor(minutesLeft/60);
                var remainingSeconds = seconds % 60;
                if (remainingSeconds < 10) {
                    remainingSeconds = "0" + remainingSeconds; 
                }
				if (minutes < 10) {
                    minutes = "0" + minutes; 
                }
				
                document.getElementById('clock').innerHTML = hours + ": " + minutes + ": " + remainingSeconds;
                if (seconds == 0) {
                    clearInterval(countdownTimer);
                    document.getElementById('clock').innerHTML = "Finish!";
					document.getElementById('sumbit').click() ;
					
                } else {
                    seconds--;
                }
            }
            var countdownTimer = setInterval('timer()', 1000);
			
			var check = new Array();
			for(var i =0; i < 40; i++) check[i] = 0;
			var c = [0,0,0,0,0,0,0,0,0,0];
			function active_num(n){
				var t = Math.floor(n/10);
				n = Math.floor(n/10)*4  + n % 10;
				check[n] = !check[n];
				var temp = t*4;
				if(check[temp] || check[temp+1] || check[temp+2] ||check[temp+3]) c[t]=1;
				else c[t] = 0;
				var name = "num" + t.toString();
				var obj = document.getElementById(name);
				if(c[t]){
					if(!obj.hasAttribute("class"))
						obj.setAttribute("class","active");
				}else{
					obj.removeAttribute("class");
				}
			}
	</script> 
@stop