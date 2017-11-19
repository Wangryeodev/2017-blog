-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 06, 2017 lúc 12:52 PM
-- Phiên bản máy phục vụ: 5.5.41-MariaDB
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k2354levu_blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_post` date NOT NULL,
  `year` year(4) NOT NULL,
  `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`post_id`, `title`, `content`, `date_post`, `year`, `author`) VALUES
(2, 'Giới thiệu mục đích blog', '<p>Blog tr&ecirc;n được x&acirc;y dựng 100% bởi L&ecirc; Văn Vương</p>\r\n\r\n<p>Mục ti&ecirc;u hướng tới: ghi lại những dấu mốc trong việc &ocirc;n thi đại học.</p>\r\n\r\n<p>Về l&yacute; do: trong một tối m&igrave;nh chợt nhận ra m&igrave;nh n&ecirc;n c&oacute; phương ph&aacute;p học cụ thể chứ kh&ocirc;ng thể m&ocirc;ng lung như b&acirc;y giờ. Vậy n&ecirc;n m&igrave;nh đ&atilde; đưa ra phương ph&aacute;p như sau:</p>\r\n\r\n<p>&nbsp; &nbsp; Mục ti&ecirc;u r&otilde; r&agrave;ng: 26 điểm đại học.</p>\r\n\r\n<p>&nbsp; &nbsp; Phương thức: học theo hướng chậm m&agrave; chắc, cụ thể l&agrave; chia việc học một chuy&ecirc;n đề ra l&agrave;m 3 giai đoạn: thuộc phương ph&aacute;p hiểu l&yacute; thuyết, vận dụng giải được c&aacute;c dạng b&agrave;i tập kh&aacute;c nhau, giải nhanh c&aacute;c dạng b&agrave;i đ&atilde; thạo.</p>\r\n\r\n<p>N&oacute;i chung, website sẽ lưu lại những thời điểm đạt được c&aacute;c giai đoạn.hết</p>\r\n', '2017-11-04', 2017, 'Lê Văn Vương'),
(3, 'Sự bắt đầu', '<p>H&ocirc;m nay, ng&agrave;y 5/11/2017, Ch&iacute;nh thức sẽ học h&agrave;nh nghi&ecirc;m chỉnh.</p>\r\n\r\n<p>Tạm g&aacute;c lại CPP.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2017-11-05', 2017, 'Lê Văn Vương');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(1) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fullname`, `gender`, `level`) VALUES
(1, 'admin', '0a941b3082b1e21eb6589ad454dd94c6', 'levuong12a4@gmail.com', 'Lê Văn Vương', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `year`
--

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `year`
--

INSERT INTO `year` (`year_id`, `year`) VALUES
(1, 2017);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
