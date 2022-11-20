-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th11 9, 2022 lúc 11:16 AM
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
-- Cơ sở dữ liệu: `chatapp`
--

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
(23, 1309374438, 1514532486, 'đê');

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
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1667602194, 'sơn', 'sacfasd', 'nguyenvanson112003hh1@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1668246429263004140_1044558179657741_8071616640313278899_n.jpg', 'Đang hoạt động'),
(2, 1415062284, 'son1', 'sacfasd', 'nguyenvanson112003dhh1@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '16682464744629831 (1).png', 'Không hoạt động'),
(3, 1438553157, 'admin', 'admin', 'nguyenvanson112003hh12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1668246765263004140_1044558179657741_8071616640313278899_n.jpg', 'Không hoạt động'),
(4, 1514532486, 'Sơn ', 'ADMIN', 'admin@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1668247043179240273_499895794533660_705655134895374799_n.jpg', 'Đang hoạt động'),
(5, 1309374438, 'Sơn', 'Nguyễn', 'sonnvph23193@fpt.edu.vn', 'e807f1fcf82d132f9bb018ca6738a19f', '1668247104e75d416fe03b6415f6d600f8ade0077b.png', 'Đang hoạt động');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
