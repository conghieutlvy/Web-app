@extends('Template/header')
@section('page')

    <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 style="margin-top: 40px; text-align:center;"><strong class="text-info" >
				Các loại biển báo giao thông đường bộ
			</strong></h1> 
			<ol>
			<li><a href="#Biencam" class="btn btn-link" type="button">Biển báo cấm</a> </li>
			<li><a href="#Biennguyhiem" class="btn btn-link" type="button">Biển báo nguy hiểm</a> </li>
			<li><a href="#Bienhieulenh" class="btn btn-link" type="button">Biển hiệu lệnh</a> </li>
			<li><a href="#Bienchidan" class="btn btn-link" type="button">Biển chỉ dẫn</a> </li>
			<li><a href="#Bienphu" class="btn btn-link" type="button">Biển phụ</a></li>
			<li><a href="#Vachkeduong" class="btn btn-link" type="button">Vạch kẻ đường</a></li>
			</ol>
			<a name = "Biencam"></a> 
			<br> 
				<p></p>
			<br> 
			<h3 class="text-danger" style="text-align:center;">
				Biển báo cấm
			</h3>
			<h3>
				Biển báo cấm để biểu thị các điều cấm. Người sử dụng đường phải chấp hành những điều cấm mà biển đã báo. Nhóm biển báo cấm gồm có 39 kiểu được đánh số thứ tự từ biển số 101 đến biển số 139:
			</h3>
			<br> <br> <br>
			<p style = "text-align: center">
				<img alt = "Biển báo cấm" src = "BienBaoCam.jpg" }} >
			</p>	
			<a name = "Biennguyhiem"></a> 
			<br> 
			<a href="#" class="btn" type="button">Về đầu trang</a>
			<br> 
			<h3 class="text-danger" style="text-align:center;">
				Biển báo nguy hiểm
			</h3>			
			<h3>
				Biển báo nguy hiểm là biển báo có dạng hình tam giác đều, viền đỏ, nền màu vàng, trên có hình vẽ màu đen mô tả sự việc báo hiệu nhằm báo cho người sử dụng đường biết trước tính chất các sự nguy hiểm trên đường để có biện pháp phòng ngừa, xử trí.
			</h3>
			<br> <br> <br>
			<p style = "text-align: center">
				<img alt = "Biển báo nguy hiểm" src = "BienBaoNguyHiem.jpg" >
			</p>
			<a name = "Bienhieulenh"></a>
			<br> 
			<a href="#" class="btn" type="button">Về đầu trang</a>
			<br> 
			<h3 class="text-danger" style="text-align:center;">
				Biển hiệu lệnh
			</h3>
			<h3>
				Biển hiệu lệnh để báo các hiệu lệnh cho người tham gia giao thông sử dụng đường bộ phải thi hành. Biển hiệu lệnh gồm 10 kiểu được đánh số thứ tự từ biển số 301 đến biển số 310.
			</h3>
			<br> <br> <br>
			<p style = "text-align: center;">
				<img alt = "Biển hiệu lệnh" src = "BienHieuLenh.jpg">
			</p>
			<a name = "Bienchidan"></a>
			<br> 
			<a href="#" class="btn" type="button">Về đầu trang</a>
			<br> 
			<h3 class="text-danger" style="text-align:center;">
				Biển chỉ dẫn 
			</h3>			
			<h3>
				Biển chỉ dẫn để chỉ dẫn hướng đi hoặc các điều cần biết nhằm thông báo cho những người sử dụng đường biết những định hướng cần thiết hoặc những điều có ích khác, đồng thời có tác dụng giúp cho việc điều khiển và hướng dẫn giao thông trên đường được thuận lợi, đảm bảo an toàn chuyển động.
			</h3>
			<br> <br> <br>
			<p style = "text-align: center;">
				<img alt = "Biển chỉ dẫn" src = "BienChiDan.jpg" >
			</p>
			<a name = "Bienphu"></a>
			<br> 
			<a href="#" class="btn" type="button">Về đầu trang</a>
			<br> 
			<h3 class="text-danger" style="text-align:center;">
				Biển phụ
			</h3>
			<h3>
				Biển phụ thường được đặt kết hợp với các biển báo nguy hiểm, biển báo cấm, biển hiệu lệnh và biển chỉ dẫn nhằm thuyết minh bổ sung để hiểu rõ hơn các biển đó.
			</h3>
			<br> <br> <br>
			<p style = "text-align: center;">
				<img alt = "Biển phụ" src = "BienPhu.jpg" >
			</p>
			<a name = "Vachkeduong"></a>
			<br> 
			<a href="#" class="btn" type="button">Về đầu trang</a>
			<br> 
			<h3 class="text-danger" style="text-align:center;">
				Vạch kẻ đường 
			</h3>
			<h3>
				Vạch kẻ đường là một dạng báo hiệu để hướng dẫn, điều khiển giao thông nhằm nâng cao an toàn và khả năng thông xe. Vạch kẻ đường chia làm 2 loại: vạch nằm ngang và vạch nằm đứng.
			</h3>
			<br> <br> <br>
			<p style = "text-align: center;">
				<img alt = "Vạch kẻ đường" src = "VachKeDuong.jpg" >
			</p>

			</ul> <a href="#" class="btn" type="button">Về đầu trang</a>
			
		</div>
	</div>
	</div>
@stop