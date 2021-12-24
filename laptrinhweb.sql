-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 23, 2021 lúc 03:24 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laptrinhweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `delivery_address` varchar(450) NOT NULL,
  `delivery_method` varchar(45) NOT NULL,
  `delivery_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `billing`
--

INSERT INTO `billing` (`billing_id`, `user_id`, `total`, `delivery_address`, `delivery_method`, `delivery_status`) VALUES
(1, 2, 121000, '30 nguyễn thị diệu phường 6 quận 3', 'COD', 'đang giao hàng'),
(2, 3, 306000, '47 Cao lỗ phường 4 quận 8', 'COD', 'đã giao hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billing_detail`
--

CREATE TABLE `billing_detail` (
  `billingdetail_id` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `product_id` varchar(45) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `billing_detail`
--

INSERT INTO `billing_detail` (`billingdetail_id`, `billing_id`, `product_id`, `price`, `amount`) VALUES
(1, 1, 'FF01', '121000', '1'),
(2, 2, 'FF01', '121000', '1'),
(3, 2, 'FF02', '185000', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `shortname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `name`, `shortname`) VALUES
(1, 'Fresh food', 'FF'),
(2, 'Agricultural food', 'AF'),
(3, 'Dry food', 'DF'),
(4, 'Canned food', 'CF');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` varchar(45) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `currency` varchar(45) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `status`, `discount`, `category_id`, `price`, `unit`, `created_date`, `currency`, `amount`) VALUES
('AF01', 'Bạc Hà', 'Bạc Hà là cây nhiều năm, thân thảo, cuống lá (petiole) dày, xốp và mọng nước. Cây có lá vươn cao hơn 1 mét, thường mọc ở nơi đất trũng và ẩm. Phần gốc rễ phình ra như dạng “củ”.', 'Còn hàng', 'None', 2, 11000, 'gram', '2021-10-17 12:50:00', 'VND', 123425),
('AF02', 'Bắp Mỹ Hạt', 'Bắp Mỹ Hạt có màu vàng sánh đẹp, làm tăng vị ngon ngọt cho món ăn.', 'Còn hàng', 'None', 2, 12000, 'gram', '2021-10-17 12:57:34', 'VND', 134),
('AF03', 'Bí Đỏ', 'Bí ngô hay bí đỏ (phương ngữ Nam bộ gọi là bí rợ) là một loại cây dây thuộc chi Cucurbita, họ Bầu bí (Cucurbitaceae). Đây là tên thông dụng để chỉ các loại cây thuộc các loài: Cucurbita pepo, Cucurbita mixta, Cucurbita maxima, và Cucurbita moschata.', 'Còn hàng', 'None', 2, 17000, 'kg', '2021-10-17 13:11:47', 'VND', 54),
('AF04', 'Bắp Non', 'Bắp non có rất ít calorie100 gr bắp non chỉ có 26 calorie. Bổ sung bắp non vào chế độ ăn giảm cân có thể giúp bạn loại bỏ một ít cân thừa một cách nhanh chóng và dễ dàng. Bắp non được thu hoạch đúng lúc chứa nhiều chất xơ có lợi. Chất xơ có thể hòa tan giúp kiểm soát mức đường huyết và tốt cho tim. Nó cũng hỗ trợ đắc lực cho hoạt động đường ruột. Chất xơ cần nhiều thời gian hơn để tiêu hóa nên tạo cảm giác no lâu hơn. Điều này ngăn bạn sa vào những loại thực phẩm có mức chất béo cao khác.', 'Còn hàng', 'None', 2, 22000, 'kg', '2021-10-17 05:16:22', 'VND', 12600),
('AF05', 'Bí Hồ Lô', 'Cụ thể nghiên cứu chỉ ra rằng, 1 bát bí đỏ chỉ có 80g calo nhưng có tới 16g chất xơ. Theo đó, lượng chất xơ này không chỉ tăng cảm giác no, giảm thèm ăn mà còn làm chậm hấp thụ lượng đường. Ngoài ra, trong một bát canh bí đỏ thịt bằm bao nhiêu calo cũng được nhiều bạn quan tâm. Dinh dưỡng của nó rơi vào 193kcal.', 'Còn hàng', 'None', 2, 22000, 'kg', '2021-10-17 05:17:45', 'VND', 34),
('AF06', 'Bí Ngòi Vàng', 'Bí Ngòi Vàng có giá trị dinh dưỡng cao. Thực Phẩm Tấn Tài ngoài cung cấp sỉ các loại rau củ quả cao cấp, thì còn có bí ngòi vàng. Hãy cùng Công Ty Rau Củ Quả Tấn Tài tìm hiểu thêm về loại quả này nhé. Tuy cùng thuộc họ bầu bí, thế nhưng bí ngòi vàng lại có những hình dáng vô cùng bắt mắt, màu vàng rực rỡ. Nó tạo được ấn tượng cho mọi người ngay từ cái nhìn đầu tiên. Nó là loại cây cực kỳ dễ trồng và thường cho năng suất cao, ít sâu bệnh. Hơn nữa, nó chứa nhiều dinh dưỡng có nhiều tác dụng tích cực đối với sức khỏe con người.', 'Còn hàng', 'None', 2, 55000, 'kg', '2021-10-17 05:19:27', 'VND', 123),
('AF07', 'Bí Xanh', '1kg, 500gr', 'Còn hàng', 'None', 2, 11000, 'kg', '2021-10-17 05:20:45', 'VND', 12000),
('AF08', 'Bơ', NULL, 'Còn hàng', 'None', 2, 35000, 'kg', '2021-10-17 05:22:49', 'VND', 56),
('AF09', 'Bồ Ngót', NULL, 'Còn hàng', 'None', 2, 45000, 'kg', '2021-10-17 05:24:12', 'VND', 34),
('AF10', 'Bòn Bon', '500gr', 'Hết hàng', 'None', 2, 60000, 'kg', '2021-10-17 05:26:27', 'VND', 0),
('AF11', 'Bông Bí', '200gr, 500gr', 'Còn hàng', 'None', 2, 60000, 'kg', '2021-10-17 05:27:34', 'VND', 12),
('AF12', 'Bông Cải Trắng', NULL, 'Còn hàng', 'None', 2, 60000, 'kg', '2021-10-17 05:28:56', 'VND', 5),
('AF13', 'Cà Tím', '1kg, 500gr', 'Còn hàng', 'None', 2, 38000, 'kg', '2021-10-22 05:36:42', 'VND', 12),
('AF14', 'Cà Trắng Dĩa', '1kg, 500gr', 'Còn hàng', 'None', 2, 30000, 'kg', '2021-10-22 05:38:16', 'VND', 45),
('AF15', 'Cải Bẹ Xanh', 'Cải Bẹ Xanh Lá To loại rau được dùng nhiều trong các món ăn gia đình mỗi ngày. Trong Cải Bẹ Xanh Lá To rất giàu vitamin và khoáng chất tốt cho cơ thể, đặc biệt ít ai biết loại cải này có khả năng hỗ trợ trị bệnh. Bài viết sau đây chúng tôi sẽ cung cấp các thông tin về thành phần dinh dưỡng, tác dụng của Cải Bẹ Xanh Lá To trong việc hỗ trợ phòng, trị bệnh. Cải Bẹ Xanh Lá To còn được gọi với cái tên là cải canh, cải cay. Tên khoa học của nó là Brassica juncea. Đây là loại cây thân thảo, ngắn ngày, cao tầm khoảng 40 đến 60cm, có rễ trụ ít phân nhánh. Phần lá mọc từ gốc mà ra, có hình trái xoan và tù, mép lá có hình răng cưa, mỗi lá dài 1m, rộng 60cm. Toàn thân có màu xanh đậm hoặc xanh nõn chuối. Mỗi cây cải có tầm 2 đến 3 phiến lá.', 'Còn hàng', 'None', 2, 46000, 'kg', '2021-10-22 05:39:45', 'VND', 32),
('AF16', 'Cải Bó Xôi', 'Cải bó xôi hay còn thường được gọi là: rau chân vịt, rau bắp xôi, cải bina.… Nó là loài cây thuộc họ Dền và có nguồn gốc từ miền Trung, Tây Nam Á. Đây là loại rau có nhiều tác dụng chữa bệnh và không mấy xa lại với chúng ta.', 'Còn hàng', 'None', 2, 70000, 'kg', '2021-10-22 05:40:13', 'VND', 36),
('AF17', 'Cải Chua', '300gr, 500gr', 'Còn hàng', 'None', 2, 50000, 'kg', '2021-10-22 05:41:26', 'VND', 12),
('AF18', 'Cải Dún Trắng', 'Cải dún có vitamin C và nhiều nguyên tố vi lượng giúp ích cho sự trao đổi chất của cơ thể trẻ. Lúc trẻ mệt, chán ăn, một bát cháo cật với cải dún sẽ giúp trẻ ngon miệng, dễ nuốt và dễ tiêu hóa Cải dún có vị dễ ăn, có tác dụng làm mát gan, thanh lọc, giải nhiệt cơ thể khi nấu canh.', 'Còn hàng', 'None', 2, 36000, 'kg', '2021-10-22 05:43:46', 'VND', 322),
('AF19', 'Cải Dún Xanh', '500gr', 'Còn hàng', 'None', 2, 66000, 'kg', '2021-10-22 05:44:26', 'VND', 144),
('AF20', 'Cải Rổ', 'Cải rổ thuộc họ rau cải, tên khoa học là Collard greens. Rau thường có màu xanh sẫm và chúng có họ hàng với các loại rau: cải xoăn, bắp cải, củ cải, bông cải xanh … Được biết đến với giá trị hàm lượng dinh dưỡng rất cao, dưới đây là thống kê về các hợp chất có trong loại rau này.', 'Còn hàng', 'None', 2, 35000, 'kg', '2021-10-22 05:45:14', 'VND', 12),
('CF01', 'Bơ Đậu Phộng', NULL, 'Còn hàng', 'None', 4, 104500, 'hủ', '2021-10-17 13:16:55', 'VND', 23),
('CF02', 'Cá Hộp Vàng', NULL, 'Hết hàng', 'None', 4, 13200, 'lon', '2021-10-17 13:17:23', 'VND', 0),
('CF03', 'Ba Rọi Xông Khói', '500gr', 'Còn hàng', 'None', 4, 260000, 'kg', '2021-10-22 05:48:34', 'VND', 24),
('CF04', 'Bơ Anchor', NULL, 'Còn hàng', 'None', 4, 247500, 'kg', '2021-10-22 05:49:20', 'VND', 43),
('CF05', 'Bơ Lạt', NULL, 'Hết hàng', 'None', 4, 120000, 'kg', '2021-10-22 05:50:49', 'VND', 0),
('CF06', 'Cà Pháo Muối', NULL, 'Còn hàng', 'None', 4, 35200, 'hủ', '2021-10-22 05:52:15', 'VND', 45),
('CF07', 'Cà Pháo Muối Kim Chi', NULL, 'Còn hàng', 'None', 4, 44000, 'hủ', '2021-10-22 05:53:45', 'VND', 123),
('CF08', 'Chanh Muối', NULL, 'Còn hàng', 'None', 4, 57000, 'kg', '2021-10-22 05:54:20', 'VND', 16),
('CF09', 'Đào Hộp', NULL, 'Còn hàng', 'None', 4, 45000, 'Hộp', '2021-10-22 08:03:23', 'VND', 65),
('CF10', 'Dưa Chuột Ngâm Giấm', '1kg', 'Còn hàng', 'None', 4, 27500, 'kg', '2021-10-22 08:04:45', 'VND', 18),
('CF11', 'Măng Tây – Lon', 'Măng tây có thể sử dụng trong việc nấu súp và chay mặn đều dùng được.', 'Còn hàng', 'None', 4, 44000, 'lon', '2021-10-22 08:05:47', 'VND', 56),
('CF12', 'Mứt Gừng', '1kg, 500gr', 'Còn hàng', 'None', 4, 257000, 'kg', '2021-10-22 08:06:54', 'VND', 10),
('CF13', 'Mứt Hạt Sen', '1kg, 500gr', 'Còn hàng', 'None', 4, 268000, 'kg', '2021-10-22 08:12:43', 'VND', 35),
('CF14', 'Nho Khô Đen', '1kg, 500gr', 'Còn hàng', 'None', 4, 120000, 'kg', '2021-10-22 08:13:56', 'VND', 2),
('CF15', 'Óc Chó', NULL, 'Còn hàng', 'None', 4, 238000, 'kg', '2021-10-22 08:22:17', 'VND', 65),
('CF16', 'Oliu Đen', NULL, 'Còn hàng', 'None', 4, 103000, 'kg', '2021-10-22 08:23:47', 'VND', 23),
('CF17', 'Oliu Xanh', NULL, 'Còn hàng', 'None', 4, 10700, 'kg', '2021-10-22 08:25:56', 'VND', 7),
('DF01', 'Bạch Đầu Khấu', 'Bạch đậu khấu là cái tên lạ lẫm với đa số người trong chúng ta. Chắc hẳn ít ai biết được công dụng, cách dùng, nơi bán của loại dược liệu này như thế nào? Vậy thực sự bạch đậu khấu là gì? Mời độc giả khám phá ngay bây giờ!', 'Hết hàng', 'None', 3, 990000, 'kg', '2021-10-17 13:09:55', 'VND', 0),
('DF02', 'Bo Bo Khô', NULL, 'Còn hàng', 'None', 3, 165000, 'kg', '2021-10-17 13:15:13', 'VND', 15),
('DF03', 'Bạch Quả Khô', '200g, 500gr', 'Còn hàng', 'None', 3, 80000, 'kg', '2021-10-22 04:41:34', 'VND', 1489),
('DF04', 'Bột Bánh Bao Mikko', '1kg, bịch', 'Còn hàng', 'None', 3, 56000, 'bịch', '2021-10-22 04:43:12', 'VND', 45),
('DF05', 'Bột Cacao', '1kg, 500gr', 'Còn hàng', 'None', 3, 69000, 'kg', '2021-10-22 04:44:42', 'VND', 650),
('DF06', 'Bột chiên giòn aji quick', 'Dòng Gia vị Bột Chiên Giòn Aji-Quick® của Công ty Ajinomoto Việt Nam bao gồm 2 sản phẩm: Gia vị nêm sẵn Aji-Quick® Bột Tẩm Khô Chiên Giòn và Gia vị nêm sẵn Aji-Quick® Bột Chiên Giòn. Với Gia vị nêm sẵn Bột Chiên Aji-Quick®, người tiêu dùng sẽ không tốn nhiều thời gian để chế biến các món ngon.', 'Còn hàng', 'None', 3, 14000, 'bịch', '2021-10-22 04:46:35', 'VND', 63),
('DF07', 'Bột Gạo', '300gr, 500gr', 'Còn hàng', 'None', 3, 12000, 'kg', '2021-10-22 04:47:37', 'VND', 1200),
('DF08', 'Bột Khoai', '1kg', 'Còn hàng', 'None', 3, 33000, 'kg', '2021-10-22 04:50:11', 'VND', 76),
('DF09', 'Bột Mì Hoa Ngọc Lan', '1kg', 'Còn hàng', 'None', 3, 47000, 'kg', '2021-10-22 04:52:25', 'VND', 24),
('DF10', 'Bột Nở Baking Powder', NULL, 'Còn hàng', 'None', 3, 86900, 'Hộp', '2021-10-22 04:54:35', 'VND', 145),
('DF11', 'Bún Gạo 6Kg', NULL, 'Còn hàng', 'None', 3, 187000, 'Cây', '2021-10-22 04:55:42', 'VND', 45),
('DF12', 'Con Ruốc', '500gr', 'Còn hàng', 'None', 3, 58000, 'kg', '2021-10-22 04:56:12', 'VND', 3500),
('DF13', 'Đậu Đen', '500gr', 'Còn hàng', 'None', 3, 47500, 'kg', '2021-10-22 04:58:58', 'VND', 6200),
('DF14', 'Đậu Đỏ', '500gr', 'Còn hàng', 'None', 3, 48000, 'kg', '2021-10-22 04:59:34', 'VND', 3000),
('DF15', 'Đậu Nành', '500gr', 'Còn hàng', 'None', 3, 31000, 'kg', '2021-10-22 05:00:11', 'VND', 7500),
('DF16', 'Đậu Ngự', '200g, 500gr', 'Còn hàng', 'None', 3, 45000, 'kg', '2021-10-22 05:02:57', 'VND', 12000),
('DF17', 'Đậu Phộng Muối', 'Gói', 'Còn hàng', 'None', 3, 58000, 'Gói', '2021-10-22 05:03:31', 'VND', 45),
('DF18', 'Đậu Phộng Rang', '500gr', 'Còn hàng', 'None', 3, 52500, 'kg', '2021-10-22 05:07:36', 'VND', 4500),
('DF19', 'Đậu Phộng Sống', '200gr, 500gr', 'Còn hàng', 'None', 3, 10000, 'kg', '2021-10-22 05:08:30', 'VND', 12000),
('FF01', 'Ba Rọi Rút Xương', NULL, 'Còn hàng', 'None', 1, 121000, 'kg', '2021-10-17 13:00:12', 'VND', 65),
('FF02', 'Bạch Tuột', '1kg - 12-15 con, 8-10 con', 'Còn hàng', 'None', 1, 185000, 'kg', '2021-10-17 13:05:34', 'VND', 34),
('FF03', 'Bao Tử Bò', '500gr', 'Còn hàng', 'None', 1, 161000, 'kg', '2021-10-22 08:39:34', 'VND', 12),
('FF04', 'Bao Tử Heo', '500gr', 'Còn hàng', 'None', 1, 250000, 'kg', '2021-10-22 08:41:54', 'VND', 12),
('FF05', 'Bắp Bò', '100g, 500gr', 'Còn hàng', 'None', 1, 542000, 'kg', '2021-10-22 08:42:34', 'VND', 3),
('FF06', 'Bắp Bò Hoa', '200g, 500gr', 'Còn hàng', 'None', 1, 642000, 'kg', '2021-10-22 08:45:12', 'VND', 15),
('FF07', 'Bồ Câu', '1kg, 500gr', 'Còn hàng', 'None', 1, 271000, 'kg', '2021-10-22 08:46:08', 'VND', 45),
('FF08', 'Bò Đùi', '100g, 500gr', 'Còn hàng', 'None', 1, 301000, 'kg', '2021-10-22 08:47:45', 'VND', 12),
('FF09', 'Bò File Thăn Chuột', '500gr', 'Còn hàng', 'None', 1, 344000, 'kg', '2021-10-22 08:48:14', 'VND', 12),
('FF10', 'Bò Tái', '300gr, 500gr', 'Còn hàng', 'None', 1, 140000, 'kg', '2021-10-22 08:49:25', 'VND', 56),
('FF11', 'Cá Bạc Má', '1kg Làm sạch, Nguyên Con', 'Còn hàng', 'None', 1, 95000, 'kg', '2021-10-22 08:51:48', 'VND', 46),
('FF12', 'Cá Basa', '1kg Làm sạch, Nguyên Con', 'Còn hàng', 'None', 1, 72000, 'kg', '2021-10-22 08:52:23', 'VND', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `image_id` int(11) NOT NULL,
  `product_id` varchar(45) NOT NULL,
  `image_blob` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`image_id`, `product_id`, `image_blob`) VALUES
(2, 'FF01', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ba-chi-rut-xuong.jpg?ssl=1'),
(3, 'AF02', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bap-my-hat.jpg?ssl=1'),
(4, 'AF03', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bi-do.jpg?ssl=1'),
(5, 'AF01', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bac-ha-1.jpg?ssl=1'),
(6, 'CF01', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-dau-phong.jpg?ssl=1'),
(7, 'CF02', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-dau-phong.jpg?ssl=1'),
(8, 'DF01', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bach-dau-khau.jpg?ssl=1'),
(9, 'DF02', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-bo.jpg?ssl=1'),
(10, 'DF03', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bach-qua.jpg?ssl=1'),
(11, 'DF04', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bot-banh-bao-mikko.jpg?ssl=1'),
(12, 'DF05', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bot-cacao.jpg?ssl=1'),
(13, 'DF06', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2020/11/bot-chien-gion.jpg?ssl=1'),
(14, 'DF07', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bot-gao.jpg?ssl=1'),
(15, 'DF08', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bot-khoai.jpg?ssl=1'),
(16, 'DF09', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bot-mi-hoa-ngoc-lan.jpg?ssl=1'),
(17, 'DF10', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bot-no-baking-powder.jpg?ssl=1'),
(18, 'DF11', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bun-gao.jpg?ssl=1'),
(19, 'DF12', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/con-ruoc.jpg?ssl=1'),
(20, 'DF13', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dau-den.jpg?ssl=1'),
(21, 'DF14', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dau-do.jpg?ssl=1'),
(22, 'DF15', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dau-nanh.jpg?ssl=1'),
(23, 'DF16', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dau-ngu.jpg?ssl=1'),
(24, 'DF17', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dong-phong-muoi.jpg?ssl=1'),
(25, 'DF18', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dau-phong-rang.jpg?ssl=1'),
(26, 'DF19', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dau-phong.jpg?ssl=1'),
(28, 'AF04', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bap-non.jpg?ssl=1'),
(29, 'AF05', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bi-do-ho-lo.jpg?ssl=1'),
(30, 'AF06', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bi-ngoi-vang.png?ssl=1'),
(31, 'AF07', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bi-xanh.jpg?ssl=1'),
(32, 'AF08', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-booth.jpg?ssl=1'),
(33, 'AF09', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-ngot.jpg?ssl=1'),
(34, 'AF10', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bon-bon.jpg?ssl=1'),
(35, 'AF11', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bong-bi.jpg?ssl=1'),
(36, 'AF12', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bong-cai-trang.jpg?ssl=1'),
(37, 'AF13', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ca-tim.jpg?ssl=1'),
(38, 'AF14', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ca-dia.jpg?ssl=1'),
(39, 'AF15', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/cai-be-xanh.jpg?ssl=1'),
(40, 'AF16', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/cai-bo-xoi.jpg?ssl=1'),
(41, 'AF17', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/cai-chua.jpg?ssl=1'),
(42, 'AF18', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/cai-dun-trang.jpg?ssl=1'),
(43, 'AF19', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/cai-dun-xanh.jpeg?ssl=1'),
(44, 'AF20', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/cai-ngong.jpg?ssl=1'),
(45, 'CF03', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ba-roi-xong-khoi.jpg?ssl=1'),
(46, 'CF04', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-anchor.png?ssl=1'),
(47, 'CF05', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-lat.jpg?ssl=1'),
(48, 'CF06', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ca-phao-muoi.jpg?ssl=1'),
(49, 'CF07', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ca-phao-muoi-kim-chi.png?ssl=1'),
(50, 'CF08', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/chanh-muoi.jpg?ssl=1'),
(51, 'CF09', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dao-hop.jpg?ssl=1'),
(52, 'CF10', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/dua-chuot-ngam-giam.jpg?ssl=1'),
(53, 'CF11', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/mang-tay-lon.jpg?ssl=1'),
(54, 'CF12', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/mut-gung.jpg?ssl=1'),
(55, 'CF13', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/mut-hat-sen.jpg?ssl=1'),
(56, 'CF14', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/nho-kho-den.jpg?ssl=1'),
(57, 'CF15', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/oc-cho.jpg?ssl=1'),
(58, 'CF16', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/oliu-den.jpg?ssl=1'),
(59, 'CF17', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/oliu-xanh.jpg?ssl=1'),
(70, 'FF03', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bao-tu-bo.jpg?ssl=1'),
(71, 'FF04', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bao-tu-heo.jpg?ssl=1'),
(72, 'FF05', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bap-bo.jpg?ssl=1'),
(73, 'FF06', 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bap-bo-hoa.jpg?ssl=1'),
(74, 'FF07', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/thit-bo-cau.jpg?ssl=1'),
(75, 'FF08', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-dui.jpg?ssl=1'),
(76, 'FF09', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-phi-le-than-chuot.jpg?ssl=1'),
(77, 'FF10', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/bo-tai.jpg?ssl=1'),
(78, 'FF11', 'https://i1.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ca-bac-ma.jpg?ssl=1'),
(79, 'FF12', 'https://i2.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/ca-ba-sa.jpg?ssl=1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `password` varchar(45) NOT NULL,
  `hoten` varchar(45) NOT NULL,
  `sdt` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `password`, `hoten`, `sdt`, `email`, `role`) VALUES
(1, '123', 'Truong Bui', '034679934', 'truongbui@gmail.com', 'admin'),
(2, '123', 'Tri Nguyen', '0703328787 ', 'tringuyen@gmail.com', 'user'),
(3, '123', 'Hiep Le', '078989272', 'hieple@gmail.com', 'manager'),
(4, '123', 'Thuy Nguyen', '0797378877', 'thuynguyen@gmail.com', 'user'),
(6, '5c82d24d1f9a53ca2b5aa5ae79761d38', 'Trần Tuấn Vũ', '0786266752', 'tuanvutran369@gmail.com', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `user_idx` (`user_id`);

--
-- Chỉ mục cho bảng `billing_detail`
--
ALTER TABLE `billing_detail`
  ADD PRIMARY KEY (`billingdetail_id`),
  ADD KEY `billing_idx` (`billing_id`),
  ADD KEY `refer_billing_detail_idx` (`product_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id_UNIQUE` (`product_id`),
  ADD KEY `category_idx` (`category_id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_idx` (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `billing_detail`
--
ALTER TABLE `billing_detail`
  MODIFY `billingdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `billing_detail`
--
ALTER TABLE `billing_detail`
  ADD CONSTRAINT `billing` FOREIGN KEY (`billing_id`) REFERENCES `billing` (`billing_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `refer_billing_detail` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `refer_product_image` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
