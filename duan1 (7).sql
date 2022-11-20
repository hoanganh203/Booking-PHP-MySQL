-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2022 lúc 09:40 AM
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
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `namebook` varchar(255) NOT NULL,
  `mailbook` varchar(255) NOT NULL,
  `telbook` varchar(255) NOT NULL,
  `notebook` varchar(255) NOT NULL,
  `xebook` varchar(255) NOT NULL,
  `timebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`id`, `namebook`, `mailbook`, `telbook`, `notebook`, `xebook`, `timebook`) VALUES
(152, 'Mai anh hoàng', 'hoangmaph23084@fpt.edu.vn', '0387200053', '123', 'Mercedes', '8H - 10H'),
(155, 'Mai anh hoàng', 'hoangmaph23084@fpt.edu.vn', '0387200053', '1234', 'Mercedes', '8H - 10H');

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
(50, 'Lamborghini'),
(53, 'Điện thoại'),
(54, 'Điện thoại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuctime`
--

CREATE TABLE `danhmuctime` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuctime`
--

INSERT INTO `danhmuctime` (`id`, `time`) VALUES
(7, '8H - 10H'),
(8, '10H - 12H'),
(9, '12H - 14H'),
(10, '14H - 16H'),
(14, '12H-13H');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(20, 1514532486, 1309374438, 'alo'),
(21, 1309374438, 1514532486, 'bẩu gì đấy'),
(22, 1514532486, 1309374438, 'mai nhậu đê'),
(23, 1309374438, 1514532486, 'đê'),
(24, 1185044329, 1644688422, 'alo'),
(25, 1644688422, 1185044329, 'nghe bạn ơi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `imgphu` varchar(255) NOT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `iddmtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `imgphu`, `mota`, `luotxem`, `iddm`, `iddmtime`) VALUES
(193, 'Mercedes 2022', 1000.00, '022fa8c4-20200820_062918-removebg.png', 'bang-gia-xe-mercedes-benz-2020-lan-banh-va-niem-yet-moi-nhat-ff2-4771084-removebg-preview.png', 'Cập nhật giá xe Mercedes-Benz mới nhất tháng 11/2022 tại Việt Nam & Thông tin xe, tin khuyến mãi, ưu đãi kèm giá lăn bánh Mercedes-Benz C180 AMG, C300 AMG, C200 Exclusive, E200 Exclusive, E300 AMG, GLC 200, GLC 200 4Matic, GLC 300 4Matic, S450, S450 Luxury, Maybach S450, Maybach S560, Maybach S650,... $', 0, 43, 10),
(194, 'Mercedes G63 AMG', 121.00, 'mec-dep-removebg-preview.png', 'darth-vader-s-all-black-2019-mercedes-amg-g63-has-topcar-carbon-package-133389_1-removebg-preview.png', 'Mercedes-AMG G63 nâng cấp khủng qua tay Brabus - Sieuxevietnam $', 0, 43, 9),
(195, 'BMW i8 Pensiun di Indonesia', 1000.00, 'bmw-i8-coupe-1-removebg-preview.png', 'a1575662-aa8a-41ec-95cb-85477d54988f_169-removebg-preview.png', 'BMW i8 Pensiun di Indonesia, Sempat Laku 12 Unit $', 0, 47, 7),
(196, ' Hyundai Việt Nam ', 123.00, 'wd30nq5zftynbhmcwp6z-removebg-preview.png', 'icon-santafe-2021-home-vn-hyundai-removebg-preview.png', 'Hyundai Việt Nam | Đại Lý Chính Hãng Của Hyundai Thành Công', 0, 50, 14),
(198, 'Hyunhdai', 1000.00, 'wd30nq5zftynbhmcwp6z-removebg-preview (2).png', 'wd30nq5zftynbhmcwp6z-removebg-preview (1).png', '', 0, 50, 14),
(199, '2022 Toyota Camry', 1000.00, 'c-005-1500x1000-1652713137-removebg-preview.png', '2022-toyota-camry-gets-updated-with-a-few-more-goodies-colors-removebg-preview.png', '2022 Toyota Camry gets updated with a few more goodies, colors', 0, 48, 7),
(200, 'hyunhdai', 1000.00, 'z3057827471284_5db36f4769e3cf45dc482aaca49b78dd-300x200-removebg-preview.png', 'hyundai-tucson_1-removebg-preview.png', '', 0, 49, 14),
(201, 'hyunhdai', 1000.00, 'z3057827471284_5db36f4769e3cf45dc482aaca49b78dd-300x200-removebg-preview.png', 'hyundai-tucson_1-removebg-preview.png', '', 0, 49, 14),
(202, 'vô giá', 111.00, '2022-toyota-camry-gets-updated-with-a-few-more-goodies-colors-removebg-preview.png', 'c-005-1500x1000-1652713137-removebg-preview.png', '', 0, 50, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sodem` int(10) NOT NULL DEFAULT 1,
  `role` varchar(255) NOT NULL DEFAULT 'Khách hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `sodem`, `role`) VALUES
(8, 1644688422, 'Hoàng', 'Mai', 'hoangmaph23084@fpt.edu.vn', '25d55ad283aa400af464c76d713c07ad', '1668544100z3659517404333_62709c94819efb55f9fcd06bb2aecb62.jpg', 'Đang hoạt động', 2, 'Nhân viên'),
(17, 1185044329, 'Thủy', 'Vũ', 'hoangmaph23084@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1668661294tesst.png', 'Không hoạt động', 1, 'Khách hàng'),
(20, 1169610403, 'Hoang', 'Mai', 'duchaph23096@fpt.edu.vn', '202cb962ac59075b964b07152d234b70', '16686652593.jpg', 'Không hoạt động', 1, 'Khách hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `danhmuctime`
--
ALTER TABLE `danhmuctime`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`,`iddmtime`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `danhmuctime`
--
ALTER TABLE `danhmuctime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
