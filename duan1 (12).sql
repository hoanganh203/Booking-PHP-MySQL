-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2022 lúc 11:02 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(250) NOT NULL,
  `id_xebook` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `ngay_bl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `id_xebook`, `id_user`, `ngay_bl`) VALUES
(8, 'dfdfd', 201, 107, '09:20:38am 30/11/2022'),
(9, 'fgfdgf', 201, 107, '09:49:44am 30/11/2022'),
(10, 'ok', 201, 99, '06:05:11pm 30/11/2022'),
(11, 'qưq', 201, 99, '10:23:51pm 02/12/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_xebook` int(11) NOT NULL,
  `date_book` varchar(255) NOT NULL,
  `time_book` varchar(255) NOT NULL,
  `time_nhan` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `trangthai` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `id_xebook`, `date_book`, `time_book`, `time_nhan`, `note`, `trangthai`) VALUES
(23, 105, 201, '2022-03-12T15:23', '', '03-12-2022 02:17:30am', 'tới luôn', 1),
(26, 105, 201, '', '', '03-12-2022 03:07:47am', '', 3),
(27, 105, 201, '', '', '03-12-2022 03:11:46am', '', 1),
(28, 105, 201, '2202-12-12T12:31', '', '03-12-2022 03:27:15am', 'ok', 0),
(29, 105, 201, '2202-12-12T12:31', '', '03-12-2022 03:27:31am', 'okkk', 0),
(30, 105, 201, '2202-12-12T12:31', '', '03-12-2022 03:28:37am', 'okkk', 0),
(31, 105, 201, '2202-12-12T12:31', '', '03-12-2022 03:28:39am', 'okkk', 3),
(32, 105, 201, '2202-12-12T12:31', '', '03-12-2022 03:28:43am', 'okkk', 1),
(33, 105, 201, '', '', '03-12-2022 03:30:12am', '', 2),
(34, 105, 201, '', '', '03-12-2022 03:30:19am', '', 1),
(35, 105, 201, '', '', '03-12-2022 03:30:39am', '', 2),
(36, 99, 201, '2022-12-03T16:02', '', '03-12-2022 04:20:40am', 'cần gấp', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name1`) VALUES
(43, 'Mercedes'),
(47, 'BMW'),
(48, 'Toyota'),
(49, 'Hyundai'),
(50, 'Điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_xebook` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(100) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `imgphu` varchar(255) NOT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_xebook`, `name`, `price`, `img`, `imgphu`, `mota`, `luotxem`, `iddm`) VALUES
(193, 'Mercedes 2022', 10001234, '022fa8c4-20200820_062918-removebg.png', 'bang-gia-xe-mercedes-benz-2020-lan-banh-va-niem-yet-moi-nhat-ff2-4771084-removebg-preview.png', 'Cập nhật giá xe Mercedes-Benz mới nhất tháng 11/2022 tại Việt Nam & Thông tin xe, tin khuyến mãi, ưu đãi kèm giá lăn bánh Mercedes-Benz C180 AMG, C300 AMG, C200 Exclusive, E200 Exclusive, E300 AMG, GLC 200, GLC 200 4Matic, GLC 300 4Matic, S450, S450 Luxury, Maybach S450, Maybach S560, Maybach S650,... $', 0, 43),
(194, 'Mercedes G63 AMG', 2147483647, 'mec-dep-removebg-preview.png', 'darth-vader-s-all-black-2019-mercedes-amg-g63-has-topcar-carbon-package-133389_1-removebg-preview.png', 'Mercedes-AMG G63 nâng cấp khủng qua tay Brabus - Sieuxevietnam $', 0, 43),
(195, 'BMW i8 Pensiun di Indonesia', 100923842, 'bmw-i8-coupe-1-removebg-preview.png', 'a1575662-aa8a-41ec-95cb-85477d54988f_169-removebg-preview.png', 'BMW i8 Pensiun di Indonesia, Sempat Laku 12 Unit $', 0, 47),
(196, ' Hyundai Việt Nam ', 1231230000, 'wd30nq5zftynbhmcwp6z-removebg-preview.png', 'icon-santafe-2021-home-vn-hyundai-removebg-preview.png', 'Hyundai Việt Nam | Đại Lý Chính Hãng Của Hyundai Thành Công', 0, 50),
(198, 'Hyunhdai 2.1', 60000009, 'wd30nq5zftynbhmcwp6z-removebg-preview (2).png', 'wd30nq5zftynbhmcwp6z-removebg-preview (1).png', 'Cập nhật giá xe Mercedes-Benz mới nhất tháng 11/2022 tại Việt Nam & Thông tin xe, tin khuyến mãi, ưu đãi kèm giá lăn bánh Mercedes-Benz C180 AMG, C300 AMG, C200 Exclusive, E200 Exclusive, E300 AMG, GLC 200, GLC 200 4Matic, GLC 300 4Matic, S450, S450 Luxury, Maybach S450, Maybach S560, Maybach S650,... $ $', 0, 50),
(199, '2022 Toyota Camry', 1990000000, 'c-005-1500x1000-1652713137-removebg-preview.png', '2022-toyota-camry-gets-updated-with-a-few-more-goodies-colors-removebg-preview.png', '2022 Toyota Camry gets updated with a few more goodies, colors', 0, 48),
(200, 'hyunhdai AWM', 499000000, 'z3057827471284_5db36f4769e3cf45dc482aaca49b78dd-300x200-removebg-preview.png', 'hyundai-tucson_1-removebg-preview.png', 'Cập nhật giá xe Mercedes-Benz mới nhất tháng 11/2022 tại Việt Nam & Thông tin xe, tin khuyến mãi, ưu đãi kèm giá lăn bánh Mercedes-Benz C180 AMG, C300 AMG, C200 Exclusive, E200 Exclusive, E300 AMG, GLC 200, GLC 200 4Matic, GLC 300 4Matic, S450, S450 Luxury, Maybach S450, Maybach S560, Maybach S650,... $ $', 0, 49),
(201, 'hyunh santafe', 100000000, 'z3057827471284_5db36f4769e3cf45dc482aaca49b78dd-300x200-removebg-preview.png', 'hyundai-tucson_1-removebg-preview.png', 'Cập nhật giá xe Mercedes-Benz mới nhất tháng 11/2022 tại Việt Nam & Thông tin xe, tin khuyến mãi, ưu đãi kèm giá lăn bánh Mercedes-Benz C180 AMG, C300 AMG, C200 Exclusive, E200 Exclusive, E300 AMG, GLC 200, GLC 200 4Matic, GLC 300 4Matic, S450, S450 Luxury, Maybach S450, Maybach S560, Maybach S650,... $ $', 0, 49);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Khách hàng',
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sodem` tinyint(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `user`, `pass`, `address`, `tel`, `role`, `email`, `img`, `sodem`) VALUES
(99, 'Mai Anh Hoàng', '123', 'Hưng yên - Việt Nam', '038720005322', 'Khách hàng', 'hoangmaph23084@fpt.edu.vn', 'tesst.png', 2),
(105, 'Thủy vũ', '123', 'bình phú', '123', 'Khách hàng', 'hoangmaph23084@gmail.com', '022fa8c4-20200820_062918.jpg', 1),
(106, '123', '123', 'askdnjasd', '3r5', 'Khách hàng', 'duchaph23096@fpt.edu.vn', '', 1),
(107, 'sonnvph23193', '123', 'sdfsdfsdfsdfsdf', '23423423423423', 'Khách hàng', 'sonnvph23193@fpt.edu.vn', '179240273_499895794533660_705655134895374799_n.jpg', 2),
(108, 'Lê Xuân trường', '123', 'Hưng yên - Việt Nam', '0387200053', 'Khách hàng', 'lexuantruong46203@gmail.com', '68ff9a1487dc1c2cc8516b4a58091cb4.jpg', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_xebook`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`) USING BTREE;

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_xebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
