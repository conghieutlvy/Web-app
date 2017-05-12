@extends('Template/header')
@section('page')
	
	<div class="row">
		<div class="col-md-10">
			 <h2>
				Đề thi ngẫu nhiên
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
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques0')
                            </div>
                            <div class="col-xs-1">
                            </div>
                    </div>
                    <br /><br />     
						
						<div class="row">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-8">
                                 <input onclick="active_num(0);" type="checkbox" name="cb[]" value="1" /> 
                                  @yield('answ01')
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
						<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                <input onclick="active_num(1);" type="checkbox" name="cb[]" value="2" /> 
                                 @yield('answ02')
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
						 <div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(2);" type="checkbox" name="cb[]" value="3" /> 
                                 @yield('answ03')
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques1')
                            </div>
                            <div class="col-xs-1">
                            </div>
                    </div>
                    <br /><br />
                         
						
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(3);" type="checkbox" name="cb[]" value="4" /> 
                                            @yield('answ11')
                                            
                                    </div>
                            <div class="col-xs-2">
                            </div>
                                </div><br /><br />
                                
                                
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(4);" type="checkbox" name="cb[]" value="5" /> 
                                            @yield('answ12')
                                            
                                    </div>
                            <div class="col-xs-2">
                            </div>
                                </div><br /><br />
                                
                                
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(5);" type="checkbox" name="cb[]" value="6" /> 
                                            @yield('answ13')
                                            
                                    </div>
                            <div class="col-xs-2">
                            </div>
                                </div><br /><br />
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques2')
                            </div>
                            <div class="col-xs-1">
                            </div>
                         </div>
                         <br /><br />
                         
						
						<div class="row">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-8">
                                 <input onclick="active_num(6);" type="checkbox" name="cb[]" value="7" /> 
                                  @yield('answ21')
                                  
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
                         
                        	 
						<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                <input onclick="active_num(7);" type="checkbox" name="cb[]" value="8" /> 
                                 @yield('answ22')
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
                         
                         		
						 <div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(8);" type="checkbox" name="cb[]" value="9" /> 
                                 @yield('answ23')
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
					</div>

					<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques3')
                            </div>
                            <div class="col-xs-1">
                            </div>
                         </div>
                         <br /><br />
                         
						
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(9);" type="checkbox" name="cb[]" value="10" /> 
                                            @yield('answ31')
                                            
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div><br /><br />
                                
                                
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(10);" type="checkbox" name="cb[]" value="11" /> 
                                            @yield('answ32')
                                            
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div><br /><br />
                                
                                
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(11);" type="checkbox" name="cb[]" value="12" /> 
                                            @yield('answ33')
                                            
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div><br /><br />
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques4')
                            </div>
                            <div class="col-xs-1">
                            </div>
                         </div>
                         <br /><br />
                         
						
						<div class="row">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-8">
                                 <input onclick="active_num(12);" type="checkbox" name="cb[]" value="13" /> 
                                  @yield('answ41')
                                  
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
                         
                        	 
						<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                <input onclick="active_num(13);" type="checkbox" name="cb[]" value="14" /> 
                                 @yield('answ42')
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
                         
                         		
						 <div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(14);" type="checkbox" name="cb[]" value="15" /> 
                                 @yield('answ43')
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div><br /><br />
					</div>

					<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques5')
                            </div>
                            <div class="col-xs-1">
                            </div>
                         </div>
                         <br /><br />
                         
						
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(15);" type="checkbox" name="cb[]" value="16" /> 
                                            @yield('answ51')
                                            
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div>
                                <br /><br />
                                
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(16);" type="checkbox" name="cb[]" value="17" /> 
                                            @yield('answ52')
                                            
                                    </div>
									<div class="col-xs-2">
                            </div>
                                </div>
                                <br /><br />
                                
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(17);" type="checkbox" name="cb[]" value="18" /> 
                                            @yield('answ53')
                                            
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div>
                                <br /><br />
					</div>
                    
					<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques6')
                            </div>
                            <div class="col-xs-1">
                            </div>
                         </div>
                         <br /><br />
						
						<div class="row">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-8">
                                 <input onclick="active_num(18);" type="checkbox" name="cb[]" value="19" /> 
                                  @yield('answ61')
                                  
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div>
                         <br /><br />
						<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                <input onclick="active_num(19);" type="checkbox" name="cb[]" value="20" /> 
                                 @yield('answ62')
                                 
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div>
                         <br /><br />
						 <div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(20);" type="checkbox" name="cb[]" value="21" /> 
                                 @yield('answ63')
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div>
                         <br /><br />
					</div>
					<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques7')
                            </div>
                            <div class="col-xs-1">
                            </div>
                         </div>
                         <br />
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(21);" type="checkbox" name="cb[]" value="22" /> 
                                            @yield('answ71')
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div>
                                <br /><br />
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(22);" type="checkbox" name="cb[]" value="23" /> 
                                            @yield('answ72')
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div>
                                <br /><br />
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(23);" type="checkbox" name="cb[]" value="24" /> 
                                            @yield('answ73')
                                    </div>
                                    <div class="col-xs-2">
                            </div>
                                </div>
                                <br /><br />
					</div>
					<div class="item">
                    	<div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques8')
                            </div>
                            <div class="col-xs-1">
                            </div>
                        </div>
                        <br />
						<div class="row">
                            <div class="col-xs-2">
                            </div>
                            <div class="col-xs-8">
                                 <input onclick="active_num(24);" type="checkbox" name="cb[]" value="25" /> 
                                  @yield('answ81')
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div>
                         <br /><br />
						<div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                <input onclick="active_num(25);" type="checkbox" name="cb[]" value="26" /> 
                                 @yield('answ82')
                            </div>
                            <div class="col-xs-2">
                            </div>
                         </div>
                         <br /><br />
						 <div class="row">
                            <div class="col-xs-2">
                            </div>
							<div class="col-xs-8">
                                 <input onclick="active_num(26);" type="checkbox" name="cb[]" value="27" /> 
                                 @yield('answ83')
                            </div>
							<div class="col-xs-2">
                            </div>
                         </div>
                         <br /><br />
					</div>
				<div class="item">
                    <div class="row">
                            <div class="col-xs-1">
                            </div>
                            <div class="col-xs-10">
                                @yield('Ques9')
                            </div>
                            <div class="col-xs-1">
                            </div>
                     </div>
                     <br />
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                       <input onclick="active_num(27);" type="checkbox" name="cb[]" value="22" />

                                            @yield('answ91')
                                    </div>
                                    <div class="col-xs-2">
                            		</div>
                                </div>
                                <br /><br />
                                
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input onclick="active_num(28);" type="checkbox" name="cb[]" value="23" /> 
                                            @yield('answ92')
                                    </div>
                                    <div class="col-xs-2">
                            		</div>
                                </div>
                                <br /><br />
								<div class="row">
                                	<div class="col-xs-2">
                                    </div>
									<div class="col-xs-8">
                                            <input  id = "93" onclick="active_num(29);" type="checkbox" name="cb[]" value="24" /> 
                                            @yield('answ93')
                                    </div>
                                    <div class="col-xs-2">
                            		</div>
                            	</div>
                                <br /><br />
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
                    	 <center><input id = "sumbit" type="submit" class="btn btn-lg btn-success" name="submit-form" value="Finish" />
                         </center>
                     </div>
      </div>
 </form>  
	
    <script language="javascript" >
	
            var seconds = 1200;
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
			
			var check = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,];
			function active_num(n){
				
				check[n] = !check[n];
				//alert(check[n]);
				var t = Math.floor(n/3);
				var temp = t*3;
				if(check[temp] || check[temp +1] || check[temp +3]) check[t] =1;
				var name = "num" + t.toString();
				var obj = document.getElementById(name);
				var c = obj.hasAttribute("class");
				//alert("t la ",t);
				if(c && !check[t]){
					obj.removeAttribute("class");
					//alert("xoa");
				}else{
					obj.setAttribute("class","active");
					//alert("Them");
				}
			}
	</script>
@stop