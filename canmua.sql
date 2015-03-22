-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2015 at 07:44 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `canmua`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `add_date` datetime NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `postid`, `add_date`, `content`, `username`, `image`) VALUES
(45, 8, '2015-03-18 06:26:48', 'Mình cần bán 1 máy IP6 plus mới 99%, liên hệ mình nhé: 01836728846', 'trangnt', 'ba8d47b4a03f35ab15a0beec6d65e0dc.jpg'),
(46, 8, '2015-03-18 06:28:23', 'Hàng chính hãng về rất nhiều nhé đảm bảo mới full box. SĐT: 0482652717', 'hungnm', 'ea992a5813a02d498659e2325a32d3b6.jpg'),
(47, 8, '2015-03-18 06:31:35', 'Mời bạn qua đại lý gần nhất để xem sản phẩm này. Hotline: 19008082', 'fptshop', '2fe918e948b4024b7032e62d40dc2a03.jpg'),
(48, 8, '2015-03-18 06:35:54', 'thegioididong chuyên cung cấp IP6 chính hãng đảm bảo rẻ hơn FPTShop ở trên nhé, gọi ngay 19000000', 'tgdd', '0c88d7cdea62904197ed5a61494285cd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenSP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `khuVuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `yeuCau` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `danhMuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `lienHe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `add_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `tenSP`, `khuVuc`, `yeuCau`, `danhMuc`, `lienHe`, `email`, `image`, `add_date`, `update_date`, `userid`) VALUES
(7, '"Gấu"', 'Hà Nội', 'Xinh', 'Người', '01689399949', 'hugnnm_580@vnu.edu.vn', '8ce4d004bec06a6100e813ee0a0a1b97.jpg', '2015-03-01', NULL, 68),
(8, 'Iphone 6 plus', 'Hà Nội', 'Hình thức mới', 'Điện thoại', '01689399949', 'hungnm_580@vnu.edu.vn', '0932a01665b74d7ee331f132113ab80a.jpg', '2015-03-01', NULL, 68),
(9, 'Chó Alaska', 'Hà Nội', '<2 tháng tuổi', 'Chó', '01689399949', 'hungnm_580@vnu.edu.vn', 'b888f3f71a7af69f262b4f4411af0007.jpg', '2015-03-01', NULL, 68),
(10, 'Sony Xperia Z3', 'Hà Nội', 'new 100%', 'Điện thoại', '01689399949', 'hungnm_580@vnu.edu.vn', '68c9e2ca0a4d1d86eee44a5b465a3c7e.jpg', '2015-03-01', NULL, 68),
(11, 'Áo khoác HQ', 'Hà Nọi', 'Mới', 'Áo', '01689399949', 'hungnm_580@vnu.edu.vn', '08aa0a69aa65212024d793acc7128bf0.jpg', '2015-03-01', NULL, 68),
(12, 'Căn hộ cao cấp', 'Phú Mỹ Hưng - Hà Nội', 'Mới', 'Nhà', '01689399949', 'hungnm_580@vnu.edu.vn', '641b062c4b69165ddddf5791755f2371.jpg', '2015-03-01', NULL, 68);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `salt` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` int(1) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `active_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `level`, `full_name`, `email`, `phone`, `address`, `salt`, `gender`, `image`, `active`, `add_date`, `active_date`, `update_date`) VALUES
(68, 'hungnm', 'c4ca4238a0b923820dcc509a6f75849b', 2, 'Nguyễn Mạnh Hùng', 'hungnm_580@vnu.edu.vn', '01689399949', 'Hưng Yên', 'WB%z&', 1, 'ea992a5813a02d498659e2325a32d3b6.jpg', 1, '2015-03-01 19:50:21', NULL, '2015-03-05 15:12:03'),
(69, 'hungnn', 'c4ca4238a0b923820dcc509a6f75849b', 2, ',mjkjn jk', 'gf@a.com', '01856277379', '11bcsjhb', 'X%UYb', 1, '6f8f2eed9a41f1663a3aa769ce012deb.png', 1, '2015-03-03 17:15:39', NULL, '2015-03-18 05:13:53'),
(70, 'a', '0cc175b9c0f1b6a831c399e269772661', 2, 'aaaaaaaa', 'a@a.com', '01827466616', '1we', 'Uo&un', 1, '162d29e9b6ce7b1a9c8e15de1d5744ec.jpg', 1, '2015-03-08 14:57:57', NULL, NULL),
(71, 'trangnt', 'c4ca4238a0b923820dcc509a6f75849b', 2, 'lkmasc', 'hjc@h.com', '01687564485', 'tgu', 'u$WZa', 2, 'ba8d47b4a03f35ab15a0beec6d65e0dc.jpg', 1, '2015-03-18 06:24:52', NULL, NULL),
(72, 'fptshop', 'c4ca4238a0b923820dcc509a6f75849b', 2, 'fptshop', 'hjsdvh@u.com', '01547628846', '78hbsdc721', 'qvj34', 3, '2fe918e948b4024b7032e62d40dc2a03.jpg', 1, '2015-03-18 06:30:07', NULL, NULL),
(73, 'tgdd', 'c4ca4238a0b923820dcc509a6f75849b', 2, 'thegioididong', 'cn@a.com', '63748176453', 'huicnsdk8', 'Ft7zW', 3, '0c88d7cdea62904197ed5a61494285cd.jpg', 1, '2015-03-18 06:34:10', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
