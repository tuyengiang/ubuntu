-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 04:37 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tin9a5`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `content`) VALUES
(1, 'Học HTML cơ Bản', 'Học html cơ bản'),
(2, 'Học Css Cơ Bản', 'Học Css Cơ Bản'),
(3, 'Học JavaScript', 'Học JavaScript'),
(4, 'Học PHP Cơ Bản', 'Học PHP Cơ Bản'),
(5, 'Tài LIệu Upload', 'Tài LIệu Upload'),
(6, 'Tú Giảng', 'tú giảng'),
(7, 'Giảng Tú', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `que` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngay` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `femal` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `hoten`, `name`, `que`, `sdt`, `ngay`, `thang`, `nam`, `email`, `femal`) VALUES
(1, 'tuyengiang', '24101997', '', '', '', 0, 24, 10, 1997, 'nguyentuyegiangbn@gmail.com', 1),
(2, 'giang1997', '24101997', '', '', '', 0, 24, 10, 1997, 'nguyentuyengiangbn@gmail.com', 1),
(3, 'tuyengiang1997', '24101997', '', '', '', 0, 24, 10, 2017, 'nguyentuyengiang@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `excerpt`, `datetime`, `user`, `cat_id`) VALUES
(11, 'w', 'ww', 'ww', '2017-08-03 09:19:17', 'ww', 2),
(12, 'Nguyen Tuyen Giang', 'day la nd', 'noi dung tom tat', '2017-08-03 07:32:23', 'Tuyen GIang', 4),
(16, 'Nguyen Tuyen Giang', 'c gfyigfrfr', 'sss', '2017-08-04 06:09:49', 'TuyenGIang', 4),
(17, 'Giảng', '<p><strong> Giảng</strong></p>', '<p>ssss</p>', '2017-08-09 20:16:50', 'sss', 1),
(20, 'bai moi', 'ss', 'â', '2017-08-10 21:53:49', '', 5),
(21, 'Hồng hâm', 'đây là bafio viết của hồng hâm', 'bài viết mới', '2017-08-14 21:11:35', 'Hồng', 2),
(22, 'Nguyễn Tuyển Giảng', 'đây là bài viết của giảng', 'bài viết mới', '2017-08-18 12:15:51', 'giảng', 1),
(23, 'nguyen tuyen giang', 'day là giang', 'noi dung tom tat là day', '2017-08-18 21:42:02', 'Giảng', 1),
(24, 'Tuyển Giảng Tin 9a5', 'helllo', 'hello', '2017-08-18 22:31:58', 'Tuyển Giảng', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
