-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2022 lúc 09:52 AM
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
(9, 'fgfdgf', 201, 107, '09:49:44am 30/11/2022');

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
(4, 106, 198, '2022-11-08', '14:40', '25-11-2022 23:37:38pm', 'cần gấp', 0),
(5, 106, 198, '2022-11-10', '16:40', '25-11-2022 23:37:50pm', 'okkk', 0),
(6, 105, 196, '2022-11-01', '14:40', '25-11-2022 23:38:08pm', 'tới luôn', 1),
(7, 105, 194, '2022-11-30', '15:38', '25-11-2022 23:38:33pm', 'cần gấp', 0),
(8, 99, 194, '2022-11-01', '23:41', '25-11-2022 23:38:52pm', 'ok', 1),
(9, 99, 195, '2022-12-07', '15:43', '25-11-2022 23:39:09pm', 'cần gấp', 0),
(11, 105, 200, '2022-11-09', '02:47', '26-11-2022 00:45:34am', 'tới luôn', 0),
(12, 99, 201, '2022-11-27', '19:50', '27-11-2022 00:22:46am', 'qưertyy', 0),
(13, 99, 199, '2022-11-27', '12:06', '27-11-2022 00:24:02am', 'ok', 0);

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
  `price` double(10,2) DEFAULT 0.00,
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
(193, 'Mercedes 2022', 1000.00, '022fa8c4-20200820_062918-removebg.png', 'bang-gia-xe-mercedes-benz-2020-lan-banh-va-niem-yet-moi-nhat-ff2-4771084-removebg-preview.png', 'Cập nhật giá xe Mercedes-Benz mới nhất tháng 11/2022 tại Việt Nam & Thông tin xe, tin khuyến mãi, ưu đãi kèm giá lăn bánh Mercedes-Benz C180 AMG, C300 AMG, C200 Exclusive, E200 Exclusive, E300 AMG, GLC 200, GLC 200 4Matic, GLC 300 4Matic, S450, S450 Luxury, Maybach S450, Maybach S560, Maybach S650,... $', 0, 43),
(194, 'Mercedes G63 AMG', 121.00, 'mec-dep-removebg-preview.png', 'darth-vader-s-all-black-2019-mercedes-amg-g63-has-topcar-carbon-package-133389_1-removebg-preview.png', 'Mercedes-AMG G63 nâng cấp khủng qua tay Brabus - Sieuxevietnam $', 0, 43),
(195, 'BMW i8 Pensiun di Indonesia', 1000.00, 'bmw-i8-coupe-1-removebg-preview.png', 'a1575662-aa8a-41ec-95cb-85477d54988f_169-removebg-preview.png', 'BMW i8 Pensiun di Indonesia, Sempat Laku 12 Unit $', 0, 47),
(196, ' Hyundai Việt Nam ', 123.00, 'wd30nq5zftynbhmcwp6z-removebg-preview.png', 'icon-santafe-2021-home-vn-hyundai-removebg-preview.png', 'Hyundai Việt Nam | Đại Lý Chính Hãng Của Hyundai Thành Công', 0, 50),
(198, 'Hyunhdai', 1000.00, 'wd30nq5zftynbhmcwp6z-removebg-preview (2).png', 'wd30nq5zftynbhmcwp6z-removebg-preview (1).png', '', 0, 50),
(199, '2022 Toyota Camry', 1000.00, 'c-005-1500x1000-1652713137-removebg-preview.png', '2022-toyota-camry-gets-updated-with-a-few-more-goodies-colors-removebg-preview.png', '2022 Toyota Camry gets updated with a few more goodies, colors', 0, 48),
(200, 'hyunhdai', 1000.00, 'z3057827471284_5db36f4769e3cf45dc482aaca49b78dd-300x200-removebg-preview.png', 'hyundai-tucson_1-removebg-preview.png', '', 0, 49),
(201, 'hyunhdai', 1000.00, 'z3057827471284_5db36f4769e3cf45dc482aaca49b78dd-300x200-removebg-preview.png', 'hyundai-tucson_1-removebg-preview.png', '', 0, 49);

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
(99, 'Mai Anh Hoàng', '123', 'Hưng yên - Việt Nam', '038720005322', 'Khách hàng', 'hoangmapsh23084@fpt.edu.vn', 'tesst.png', 2),
(105, 'Thủy vũ', '123', 'bình phú', '123', 'Khách hàng', 'duchaph23096@fpt.edu.vn', '022fa8c4-20200820_062918.jpg', 1),
(106, '123', '123', 'askdnjasd', '3r5', 'Khách hàng', 'duchaph23096@fpt.edu.vn', '', 1),
(107, 'sonnvph23193', '123', 'sdfsdfsdfsdfsdf', '23423423423423', 'Khách hàng', 'sonnvph23193@fpt.edu.vn', '179240273_499895794533660_705655134895374799_n.jpg', 2);

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
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_xebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
