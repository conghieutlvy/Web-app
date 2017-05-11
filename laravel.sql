-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 04:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`id` smallint(5) unsigned NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c0` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `a0` tinyint(1) NOT NULL DEFAULT '1',
  `a1` tinyint(1) NOT NULL DEFAULT '0',
  `a2` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `c0`, `c1`, `c2`, `a0`, `a1`, `a2`) VALUES
(0, 'Vạch kẻ đường được hiểu như thế nào là đúng?', 'Vạch kẻ đường là vạch chỉ sự phân chia làn đường, vị trí hoặc hướng đi, vị trí dừng lại.', 'Vạch kẻ đường là vạch chỉ sự phân biệt vị trí dừng, đỗ trên đường.', 'Tất cả các ý nêu trên', 1, 0, 0),
(1, 'Khái niệm phương tiện giao thông cơ giới đường bộ được hiểu thế nào là đúng?', 'Gồm xe ô tô; xe kéo; xe mô tô hai bánh; xe mô tô ba bánh; xe găn máy; xe cơ giới dùng cho người khuyết tật và các loại xe tương tự.', 'Gồm xe ô tô, máy kéo, rơ moóc hoặc sơ mi rơ moóc được kéo bởi xe ô tô, máy kéo, xe ô tô hai bánh; xe mô tô ba bánh. xe gắn máy (kể cả xe gắn máy điện) và các loại xe tương tự. ', 'Cả 2 ý đúng.', 0, 1, 0),
(2, 'Người điều khiển xe mô tô, xe gắn máy trên đường mà mấu trong có nồng độ còn vượt quá bao nhiêu thì bị cấm?', 'Nồng độ cồn vượt quá 40 miligam/100 mililit máu.', 'Nồng độ cồn vượt quá 50 miligam/100 mililit máu.', 'Nồng độ cồn vượt quá 30 miligam/100 mililit máu.', 0, 1, 0),
(3, 'Tại nơi đường giao nhau, khi đèn điều khiển giao thông có tín hiệu vàng, người điều khiển phương tiện phải thực hiện như thế nào?', 'Phải cho xe dừng lại trước vạch dừng, trừ trường hợp đã đi quá vạch dừng thì được phép đi tiếp; trong trường hợp tín hiệu vàng nhấp nháy là được đi nhưng phải giảm tốc độ, chú ý quan sát, nhường đường cho người đi bộ qua đường.', 'Phải cho xe nhanh cóng vượt qua vạch dừng để đi qua đường giao nhau và chú ý đảm bảo an toàn; khi đèn tín hiệu vàng nhấp nháy là được đi nhưng phải giảm tốc độ, chú ý quan sát người đi bộ để đảm bảo an toàn.', 'Cả hai ý nêu trên.', 1, 0, 0),
(4, 'Tại nơi đường giao nhau không có báo hiệu đi theo vòng xuyến, người điều khiển phương tiện phải nhường đường như thế nào là đúng quy tắc giao thông?', 'Phải nhường đường cho xe đi đến từ bên phải.', 'Xe báo hiệu xin đường trước xe đó được đi trước', 'Phải nhường đường cho xe đi đến từ bên trái', 1, 0, 0),
(5, 'Người đủ bao nhiêu tuổi trở lên thì được điều khiển xe mô tô 2 bánh, mô tô 3 bánh có dung tích xi lanh từ 50CM2 trở lên và các loại xe có kết cấu tương tự; xe ô tô tải dưới 3,5 tấn, xe ô tô chở người đến 9 chỗ?', '16 Tuổi', '18 Tuổi', '20 Tuổi', 0, 1, 0),
(6, 'Khái niệm đường bộ được hiểu thế nào? Đường bộ gồm:', 'Đường, cầu đường bộ, hầm đường bộ.', 'Đường, cầu đường bộ, hầm đường bộ, bến phà đường bộ. ', 'Đường, cầu đường bộ, hầm đường bộ, bến phà đường bộ và các công trình phụ trợ khác.', 0, 1, 0),
(7, 'Cơ quan nào quy định các đoạn đường cấm đi, đường đi một chiều, nơi cấm dừng, cấm đõ, cấp quay đầu xe, lắp đặt báo hiệu đường bộ thuộc địa phương quản lý?', 'Cơ quan quản lý giao thông vận tải.', 'Ủy ban nhân dân cấp tỉnh.', 'Cơ quan cảnh sát giao thông đường bộ.', 0, 1, 0),
(8, 'Người điều khiển phương tiện giao thông đường bộ mà trong cơ thể có chất ma túy có bị nghiêm cấm hay không?', 'Nghiêm cấm. ', 'Không bị nghiêm cấm.', 'Nghiêm cấm trong trường hợp sử dụng trái phép.', 1, 0, 0),
(9, 'Đảm bảo trật tự, an toàn giao thông đường bộ là trách nhiệm của ai?', 'Là trách nhiệm của nghành Giao thông vận tải và ngành Công an.', 'Là trách nhiệm của cơ quan, tổ chức, cá nhân.', 'Là trách nhiệm của cảnh sát giao thông.', 0, 1, 0),
(10, 'Trên đường có nhiều làn đường, người điều kiển phương tiện tham gia giao thông sử dụng làn đường như thế nào là đúng?', 'Trên đường có nhiều làn đường cho xe đi cùng chiều được phân biệt bằng vạch kẻ phân làn đường, người điều khiển phương tiện phải cho xe đi trong một làn đường và chỉ được chuyển làn đường ở những nơi cho phép; khi chuyển làn đường phải có tín hiệu báo trước và đảm bảo an toàn.', 'Trên đường một chiều có vạch kẻ phân làn đường, xe thô sơ phải đi trên làn đường bên phải trong cùng, xe cơ giới, xe máy chuyên dùng đi trên làn đường bên trái.', 'Tất cả các ý nêu trên.', 0, 0, 1),
(11, 'Tại nơi đường giao nhau, người lái xe đang đi trên đường không ưu tiên phải nhường đường như thế nào?', 'Nhường đường cho xe đi ở bên phải mình tới.', 'Nhường đường cho xe đi ở bên trái mình tới.', 'Nhường đường cho xe đi trên đường ưu tiên hoặc đường chính từ bất kỳ hường nào tới.', 0, 0, 1),
(12, 'Khi Điều khiển xe chạy trên đường người lái xe phải mang theo các loại giấy tờ gì?', 'Giấy phép lái xe, đăng ký xe, lưu hành xe.', 'Giấy phép lái xe phù hợp với loại xe đó, đăng ký xe, giấy chứng nhận kiểm định kỹ thuật và bảo vệ môi trường, giấy chứng nhận bảo hiểm trách nhiệm dân sự của chủ xe cơ giới và giấy phép vận chuyển (nếu loại xe đó cần phải có).', 'Giấy phép lái xe theo quy định, đăng ký xe, giấy vận chuyển, chứng minh thư nhân dân.', 0, 1, 0),
(13, 'Trong các trường hợp dưới đây, để đảm bảo an toàn khi tham gia giao thông, người lái xe mô tô cần thực hiện như thế nào?', 'Phải đội mũ bảo hiểm có cài quai đúng quy cách, mặc quần áo gọn gàng.', 'Không sử dụng ô, điện thoại di động, thiết bị âm thanh (trừ thiết bị trợ thính).', 'Tất cả các ý nêu trên.', 0, 0, 1),
(14, 'Đường bộ trong khu vực đông dân cư gồm những đường nào?', 'Đường bộ nằm trong khu vực nội thành phố, nội thị xã, nội thị trấn, khu công nghiệp có đông người và phương tiện tham gia giao thông.', 'Đường bộ nằm trong khu vực nội thành phố, nội thị xã và những đoạn đường bộ được xác định từ bị trí có hiệu lực của biển báo hiệu "Bắt đầu khu đông dân cư" đến vị trí có hiệu lực của biển báo hiệu "Hết khu đông dân cư".', 'Đường bộ có đông người, phương tiện tham gia giao thông và những đoạn đường bộ được xác định từ vị trí có hiệu lực của biển báo hiệu "Bắt đầu khu đông dân cư" đến vị trí có hiệu lực của biển báo hiệu "hết khu đông dân cư".', 0, 1, 0),
(15, 'Trên đường bộ trong khu vực đông dân cư, xe mô tô hai bánh, xe gắn máy tham gia giao thông với tốc độ tối đa cho phép là bao nhiêu?', '30 Km/h', '40 Km/h', '50 Km/h', 0, 1, 0),
(16, 'Trên đường bộ trong khu vực đông dân cư, loại xe nào tham gia giao thông với tốc độ tối đa cho phép là 40 Km/h.', 'Ô tô chở người trên 30 chỗ ngồi, ô tô tải có trọng tải từ 3500Kg trở lên, ô tô sơ mi rơ moóc, ô tô kéo rơ moóc, ô tô kéo xe khác, ô tô chuyên dùng, xe mô tô, xe gắn máy.', 'Ô tô chở người đến 30 chỗ ngồi, ô tô tải có trọng tải dưới 3500Kg', 'Xe máy kéo, xe công nông, xe lam, xe lôi máy, xe xích lô máy, xe ba gác máy, xe máy chuyên dùng và các loại xe tương tự (loại đang được phép hoạt động)', 1, 0, 0),
(17, 'Trên đường bộ ngoài khu vực đông dân cư, loại xe nào tham gia giao thông với tốc độ tối đa cho phép là 50Km/h?', 'Ô tô chở người đến 30 chỗ ngồi (trừ ô tô buýt), ô tô tải có trọng tải dưới 3500Kg.', 'Ô tô chở người đến 30 chỗ ngồi (trừ ô tô buýt), ô tô tải có trọng tải dưới 3500Kg trở lên.\r\n', 'Ô tô kéo rơ moóc, ô tô kéo xe khác, xe gắn máy.', 0, 0, 1),
(18, 'Khái niệm về văn hóa giao thông được hiểu như thế nào là đúng?', 'Là sự hiểu biết và chấp hành nghiêm chỉnh pháp luật về giao thông; là ý thức trách nhiệm với cộng đồng khi tham gia giao thông.', 'Là ứng xử có văn hóa, có tình yêu thương con người trong các tình huống không may xảy ra khi tham gia giao thông.', 'Cả 2 ý trên', 0, 0, 1),
(19, 'Người lái xe cố tình vi phạm luật giao thông đường bộ, không phân biệt làn đường, vạch phân làn, phóng nhanh, vượt ẩu, vượt đèn đỏ, đi vào đường cấm, đường một chiều được coi là hành vi nào trong các hành vi sau đây?', 'Là bình thường', 'Là thiếu văn hóa giao thông', 'Là có văn hóa giao thông', 0, 1, 0),
(20, 'Người có văn hóa giao thông khi điều khiển xe cơ giới tham gia giao thông đường bộ phải đảm bảo các điều kiện gì?', 'Có giấy phép lái xe phù hợp với loại xe được phép điều khiển; xe cơ giới đảm bảo các quy định về chất lượng, an toàn kỹ thuật và bảo vệ môi trường', 'Có giấy chứng nhận bảo hiểm trách nhiệm dân sự của chủ xe cơ giới còn hiệu lực; nộp phí sử dụng đường bộ theo quy định.', 'Cả 2 ý trên', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ques_img`
--

CREATE TABLE IF NOT EXISTS `ques_img` (
  `id` smallint(6) unsigned NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_src` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c0` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `a0` tinyint(1) NOT NULL DEFAULT '1',
  `a1` tinyint(1) NOT NULL DEFAULT '0',
  `a2` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques_img`
--

INSERT INTO `ques_img` (`id`, `question`, `img_src`, `c0`, `c1`, `c2`, `a0`, `a1`, `a2`) VALUES
(0, 'Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', '1.jpg', 'Xe tải, xe lam, xe con, mô tô.\r\n', 'Xe tải, mô tô, xe lam, xe con.', 'Xe lam, xe tải, xe con, mô tô.', 0, 1, 0),
(1, 'Xe nào được quyền đi trước?', '2.jpg', 'Xe con', 'Xe lam', 'Xe tải', 1, 0, 0),
(2, 'Trong hình dưới đây, xe nào chấp hành đúng quy tắc giao thông?', '3.jpg', 'Xe con, xe tải.\r\n', 'Tất cả các xe ', 'Xe khách, mô tô.', 0, 1, 0),
(3, 'Gặp biển báo nào người lái xe phải nhường đường cho người đi bộ?', '4.jpg', 'Biển 1', 'Biển 2', 'Biển 3', 1, 0, 0),
(4, 'Biển bào báo hiệu đường sắt giao nhau với đường bộ không có rào chắn?', '5.jpg', 'Biển 1 và 2', 'Biển 2 và 3', 'Biển 1 và 3', 0, 1, 0),
(5, 'Biển nào báo hiệu đường giao nhau của các tuyết đường cùng cấp?', '6.jpg', 'Biển 1', 'Biển 2', 'Biển 3', 1, 0, 0),
(6, 'Biển báo nào báo hiệu cấp xe mô tô 2 bánh đi vào?\r\n\r\n', '7.jpg', 'Biển 1', 'Biển 2', 'Biển 3', 1, 0, 0),
(7, 'Biển báo nào cấm xe rẽ trái\r\n\r\n', '8.jpg', 'Biển 1', 'Biển 2', 'Cả 2 biển trên', 1, 0, 0),
(8, 'Theo tín hiệu đèn, xe nào phải dừng lại là đúng quy tắc giao thông?', '9.jpg', 'Xe con, xe tải.', 'Xe tải, mô tô.', 'Xe khách, mô tô. ', 0, 0, 1),
(9, 'Theo hướng mũi tên, nhường hướng nào xe gắn máy đi được?', '10.jpg', 'Hướng 1 và 3', 'Hướng 1', 'Cả 3 hướng', 0, 0, 1),
(10, 'Theo hướng mũi tên, những hướng nào xe mô tô được phép đi?', '11.jpg', 'Hướng 1', 'Hướng 1 và 3', 'Cả 3 hướng', 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `ques_img`
--
ALTER TABLE `ques_img`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`), ADD KEY `id_2` (`id`), ADD KEY `id_3` (`id`), ADD KEY `id_4` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
