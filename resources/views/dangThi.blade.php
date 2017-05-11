@extends('Template/header')
@section('page')
	<h1 style="margin-top: 40px; text-align:center;"><strong class="text-info" >
			Các dạng thi lái xe
	</strong></h1> 
	<ol>
		<li><a href="#xemay" class="btn btn-link" type="button">Xe máy</a> </li>
		<li><a href="#xeoto" class="btn btn-link" type="button">Xe ô tô</a> </li>
	</ol>	
	<a name = "xemay"></a>
	<br> 
		<p></p>
	<br>
	<h2 class="text-danger" style="text-align:center;">
				Xe máy
	</h2>
	<h3>
		Điều kiện thi:
	</h3>
	<ul>
		<li>
			Là công dân Việt Nam, người nước ngoài được phép cư trú hoặc đang làm việc, học tập tại Việt Nam.
		</li>
		<li>
			Đủ tuổi (tính đến ngày dự sát hạch lái xe, 18 tuổi đối với bằng B2 và 21 tuổi đối với bằng C), sức khoẻ, trình độ văn hóa theo quy định.
		</li>
	</ul>
	<h3>
		Loại xe sử dụng khi thi
	</h3>
	<ul>
		<li>
			Hạng A1: Sử dụng xe môtô 2 bánh có dung tích xi-lanh từ 50cc đến dưới 175cc.
		</li>
		<li>
			Hạng A2: Sử dụng xe môtô 2 bánh có dung tích xi-lanh trên 175cc.
		</li>
	</ul>
	<h3>
		Thi lí thuyết
	</h3>
	<ul>
		<li>
			Loại hình thi: Thi trắc nghiệm 20 câu trên máy tính.
		</li>
		<li>
			Điểm yêu cầu: 16/20 với A1 và 18/20 với A2.
		</li>
		<li>
			Thời gian: 60 phút.
		</li>
		<li>
			Thi qua phần lí thuyết mới được chuyển sang phần thi sa hình.
		</li>
		<li>
			Nếu không đạt thì mời về đăng kí thi lại.
		</li>
	</ul>
	<h3>
		Thi thực hành (sa hình)
	</h3>
	<ul>
		<li>
			Loại hình thi: Lái xe trực tiếp trên sân thi (1 người lái 1 xe). 
		</li>
		<li>
			Điểm yêu cầu: 80/100
		</li>
		<li>
			Thời gian: 5 phút.
		</li>
		<li>
			Gồm 4 bài thi liên hoàn (thực hiện liên tục, không dừng xe ngắt quãng):
			<0l style="font-weight: bold;">
				<li>
					Đi vòng số 8.
				</li>
				<li>
					Đi đường hẹp.
				</li>
				<li>
					Tránh chướng ngoại vật.
				</li>
				<li>
					Đi đường gồ ghề.
				</li>
			</0l>
		</li>
		<li>
			Thí sinh thực hiện liên tiếp 4 bài thi, giống hình minh họa hướng dẫn dưới đây:
			<br><br><br>
			<p>
			<img alt = "Dạng bài thi thực hành xe máy" src = "7.jpg" >
			</p>
			<br><br><br>
		</li>
		<li>
			Trong quá trình thực hiện bài thi, thí sinh mắc lỗi sẽ bị trừ điểm theo thang điểm (như hình dưới). Thí sinh có điểm thi thực hành 80 điểm trở lên là đỗ.
			<br><br><br>
			<p style = "text-align: center">
				<img alt = "Bảng các lỗi khi thi thực hành xe máy" src = "6.jpg" >
			</p>
		</li>
	</ul>
	<a name = "xeoto"></a>
	<br> 
		<a href="#" class="btn" type="button">Về đầu trang</a>
	<br> 
	<p></p>
	<h2 class="text-danger" style="text-align:center;">
				Xe ô tô
	</h2>
	<h3>
		Điều kiện thi:
	</h3>
	<ul>
		<li>
			Là công dân Việt Nam, người nước ngoài được phép cư trú hoặc đang làm việc, học tập tại Việt Nam.
		</li>
		<li>
			Đủ tuổi (tính đến ngày dự sát hạch lái xe, 18 tuổi đối với bằng B2 và 21 tuổi đối với bằng C), sức khoẻ, trình độ văn hóa theo quy định.
		</li>
		<li>
			Người học để nâng hạng giấy phép lái xe phải có đủ thời gian hành nghề và số km lái xe an toàn như sau:
			<ul>
				<li>
					B2 lên C, C lên D, D lên E; các hạng B2, C, D, E lên hạng F tương ứng: thời gian hành nghề 03 năm trở lên và 50.000 km lái xe an toàn trở lên;
				</li>
				<li>
					B2 lên D, C lên E: thời gian hành nghề 05 năm trở lên và 100.000 km lái xe an toàn trở lên.
				</li>
				<li>
					Người học để nâng hạng giấy phép lái xe lên các hạng D, E phải có bằng tốt nghiệp trung học cơ sở hoặc tương đương trở lên.
				</li>
			</ul>
		</li>
	</ul>
	<h3>
		Loại xe sử dụng khi thi
	</h3>
	<ul>
		<li>
			Hạng B1:
			<ul>
				<li>
					Ôtô dưới 9 chỗ, kể cả người lái.
				</li>
				<li>
					Xe tải, xe chuyên dùng có trọng tải thiết kế dưới 3.500 kg.
				</li>
			</ul>
		</li>
		<li>
			Hạng B2: Tương tự các loại xe dành cho B1.
		</li>
		<li>
			Hạng C: Ôtô tải và xe chuyên dùng có tải trọng thiết kế từ 3.500 kg trở lên.
		</li>
		<li>
			Hạng D: Ôtô chở người từ 10-30 chỗ (tính cả ghế lái) và có tải trọng thiết kế từ 3.500 kg trở lên.
		</li>
		<li>
			Hạng E: Ôtô chở người trên 30 chỗ ngồi (tính cả ghế lái) và có tải trọng thiết kế từ 3.500 kg trở lên.
		</li>
		<li>
			Hạng F: Các xe dành cho loại E để điều khiển các loại xe tương ứng có kéo rơ-moóc trọng tải thiết kế lớn hơn 750 kg.
		</li>
		<li>
			Hạng FC: Xe chuyên chở container.
		</li>
	</ul>
	<h3>
		Thi lí thuyết
	</h3>
	<ul>
		<li>
			Loại hình thi: Thi trắc nghiệm 30 câu trên máy tính.
		</li>
		<li>
			Điểm yêu cầu: 26/20 với B1, B2 và 28/20 với C, D, E.
		</li>
		<li>
			Thời gian: 20 phút.
		</li>
		<li>
			Thi qua phần lí thuyết mới được chuyển sang phần thi sa hình.
		</li>
		<li>
			Nếu không đạt thì mời về đăng kí thi lại.
		</li>
	</ul>
	<h3>
		Thi thực hành(sa hình)
	</h3>
	<ul>
		<li>
			Loại hình thi: Lái xe trực tiếp trên sân thi hoặc ngoài đường thật (1 người lái + 1 giám khảo trên 1 xe). 
		</li>
		<li>
			Điểm yêu cầu: 80/100
		</li>
		<li>
			Thời gian: 5 phút.
		</li>
		<li>
			Gồm 10 bài thi chính liên hoàn và một vài phần thi phụ tùy giám khảo (thực hiện liên tục, dừng xe ngắt quãng theo hiệu lệnh giám khảo trên xe):
			<ol style="font-weight: bold;">
				<li>
					Xuất phát.
				</li>
				<li>
					Dừng xe nhường đường cho người đi bộ.
				</li>
				<li>
					Dừng xe, khởi hành trên dốc lên.
				</li>
				<li>
					Đi xe qua hàng đinh.
				</li>
				<li>
					Đi xe qua đường vuông góc (chữ Z).
				</li>
				<li>
					Đi xe qua đường vòng quanh co (chữ S).
				</li>
				<li>
					Ghép xe vào nơi đỗ (lùi chuồng).
				</li>
				<li>
					Dừng xe nơi giao nhau với đường sắt.
				</li>
				<li>
					Tăng tốc, tăng số.
				</li>
				<li>
					Kết thúc.
				</li>
			</ol>
		</li>
		<li>
			Trong quá trình thực hiện bài thi, thí sinh sẽ được giám khảo đánh giá và tính điểm. Điểm của thí sinh sẽ  được giám khảo thông báo sau khi hoàn tất bài thi.
		</li>
	</ul>
	<br> 
		<a href="#" class="btn" type="button">Về đầu trang</a>
	<br> 
@stop