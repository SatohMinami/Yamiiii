-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 08:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ustore`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `ID_Banner` int(11) NOT NULL,
  `Banner_IMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bo_nho`
--

CREATE TABLE `bo_nho` (
  `ID_BoNho` int(11) NOT NULL,
  `GiaTri_BoNho` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `ID_Carousel` int(11) NOT NULL,
  `IMG` varchar(60) NOT NULL,
  `Noi_Dung` varchar(120) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`ID_Carousel`, `IMG`, `Noi_Dung`, `Rank`, `Link`) VALUES
(18, 'h4-slide.png', 'iPhone 6 Plus <br> Dual sim', 0, 'https://learn-anything.xyz/programming/programming-languages/php'),
(19, 'h4-slide2.png', 'by one, get one 50% off<br>\nschool supplies<br> & backpacks.*', 2, 'http://banhtv.com/xem-phim/ban-hoa-tau-nobunaga-tap-2-nobunaga-concerto-live-action-2014-ep-2-3315-e26255.html'),
(21, 'h4-slide3.png', '\nApple Store Ipod<br>\nSelect Item', 3, 'http://banhtv.com/xem-phim/ban-hoa-tau-nobunaga-tap-2-nobunaga-concerto-live-action-2014-ep-2-3315-e26255.html');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID_Categories` int(11) NOT NULL,
  `Name_Categories` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Rank_Categories` int(11) NOT NULL,
  `ID_Status` int(11) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID_Categories`, `Name_Categories`, `Rank_Categories`, `ID_Status`, `Link`) VALUES
(19, 'CỬA HÀNG', 1, 1, 'cua-hang.html'),
(24, 'TIN TỨC', 6, 1, 'tin-tuc.html'),
(25, 'GIỚI THIỆU', 7, 1, 'gioi-thieu.html'),
(26, 'LIÊN HỆ', 8, 1, 'lien-he.html'),
(28, 'TUYỂN DỤNG', 9, 1, 'tuyen-dung.html');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID_Details` int(11) NOT NULL,
  `ID_DH` int(11) NOT NULL,
  `ID_SP` int(11) NOT NULL,
  `Qty` varchar(60) NOT NULL,
  `Price` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID_Details`, `ID_DH`, `ID_SP`, `Qty`, `Price`) VALUES
(62, 7, 59, '3', '2100'),
(63, 7, 61, '1', '700'),
(64, 7, 30, '1', '1000'),
(65, 7, 31, '1', '999'),
(66, 7, 33, '1', '425'),
(67, 7, 60, '1', '700'),
(68, 8, 59, '3', '2100'),
(69, 8, 61, '1', '700'),
(70, 8, 30, '1', '1000'),
(71, 8, 31, '1', '999'),
(72, 8, 33, '4', '1700'),
(73, 8, 60, '1', '700'),
(74, 9, 33, '1', '425'),
(75, 9, 30, '1', '1000'),
(76, 10, 30, '1', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `content_admin`
--

CREATE TABLE `content_admin` (
  `ID_Content` int(11) NOT NULL,
  `LuongTC` int(11) NOT NULL,
  `ThanhVien` int(11) NOT NULL,
  `Admin` int(11) NOT NULL,
  `DHSanPham` int(11) NOT NULL,
  `SanPham` int(11) NOT NULL,
  `DonHang` int(11) NOT NULL,
  `NhaSX` int(11) NOT NULL,
  `DMTinTuc` int(11) NOT NULL,
  `BaiViet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dm_news`
--

CREATE TABLE `dm_news` (
  `ID_DM` int(11) NOT NULL,
  `Ten_DM` varchar(225) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dm_news`
--

INSERT INTO `dm_news` (`ID_DM`, `Ten_DM`) VALUES
(1, 'Tin Khuyến Mại'),
(3, 'Tin Mới');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `ID_Email` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`ID_Email`, `Email`) VALUES
(4, 'nguyen@gmail.com'),
(5, 'nguyen@gmail.com'),
(6, 'nguyen@gmail.com'),
(7, 'nguyen@gmail.com'),
(8, 'asdsad@gmail.com'),
(9, 'asdsad@gmail.com'),
(10, 'asdasdsaa@gmail.com'),
(11, 'asdasdsaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `fb` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`fb`, `twitter`, `youtube`, `instagram`) VALUES
('https://www.facebook.com/trongnam.nguyen.7', 'https://www.facebook.com/trongnam.nguyen.7', 'https://www.facebook.com/trongnam.nguyen.7', 'https://www.facebook.com/trongnam.nguyen.7');

-- --------------------------------------------------------

--
-- Table structure for table `hang_sx`
--

CREATE TABLE `hang_sx` (
  `ID_Hang` int(11) NOT NULL,
  `Ten_Hang` varchar(60) CHARACTER SET utf8 NOT NULL,
  `IMG_Hang` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hang_sx`
--

INSERT INTO `hang_sx` (`ID_Hang`, `Ten_Hang`, `IMG_Hang`) VALUES
(16, 'IPHONE', 'brand4.png'),
(17, 'HTC', 'brand5.png'),
(18, 'SAMSUNG', 'brand3.png'),
(19, 'LG', 'brand6.png'),
(20, 'NOKIA', 'brand1.png'),
(21, 'CANON', 'brand2.png');

-- --------------------------------------------------------

--
-- Table structure for table `hdh`
--

CREATE TABLE `hdh` (
  `ID_HDH` int(11) NOT NULL,
  `Ten_HDH` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID_History` int(11) NOT NULL,
  `Username` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Action` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ID_History`, `Username`, `Action`, `Time`) VALUES
(232, 'SuperAdmin', ' xóa Banner', '9:37:27  - 24/7/2017'),
(233, 'SuperAdmin', ' xóa Banner', '9:37:28  - 24/7/2017'),
(234, 'SuperAdmin', ' xóa Banner', '9:37:29  - 24/7/2017'),
(235, 'SuperAdmin', ' xóa Banner', '9:37:31  - 24/7/2017'),
(236, 'SuperAdmin', ' xóa Banner', '9:37:32  - 24/7/2017'),
(237, 'SuperAdmin', ' xóa Banner', '9:37:34  - 24/7/2017'),
(238, 'SuperAdmin', 'sửa User', '1:5:36  - 25/7/2017'),
(239, 'SuperAdmin', 'sửa User', '1:5:43  - 25/7/2017'),
(240, 'SuperAdmin', 'sửa User', '1:5:57  - 25/7/2017'),
(241, 'SuperAdmin', 'thêm User', '1:7:30  - 25/7/2017'),
(242, 'SuperAdmin', 'thêm User', '11:14:29  - 25/7/2017'),
(243, 'SuperAdmin', ' xóa Info User', '0:20:51  - 26/7/2017'),
(244, 'SuperAdmin', ' xóa Info User', '1:38:56  - 26/7/2017'),
(245, 'SuperAdmin', ' thêm danh mục tin tức', '9:29:15  - 26/7/2017'),
(246, 'SuperAdmin', ' thêm danh mục tin tức', '9:29:26  - 26/7/2017'),
(247, 'SuperAdmin', ' thêm danh mục tin tức', '9:35:45  - 26/7/2017'),
(248, 'SuperAdmin', ' thêm danh mục tin tức', '9:35:46  - 26/7/2017'),
(249, 'SuperAdmin', ' xóa hãng sản xuất', '9:38:14  - 26/7/2017'),
(250, 'SuperAdmin', ' xóa hãng sản xuất', '9:38:32  - 26/7/2017'),
(251, 'SuperAdmin', ' sửa danh mục tin tức', '9:44:49  - 26/7/2017'),
(252, 'SuperAdmin', ' sửa danh mục tin tức', '9:45:15  - 26/7/2017'),
(253, 'SuperAdmin', ' sửa danh mục tin tức', '9:45:34  - 26/7/2017'),
(254, 'SuperAdmin', ' sửa danh mục tin tức', '9:45:47  - 26/7/2017'),
(255, 'SuperAdmin', ' sửa danh mục tin tức', '9:46:52  - 26/7/2017'),
(256, 'SuperAdmin', ' xóa hãng sản xuất', '9:46:55  - 26/7/2017'),
(257, 'SuperAdmin', ' thêm danh mục tin tức', '9:47:14  - 26/7/2017'),
(258, 'SuperAdmin', ' thêm tin tức', '10:4:44  - 26/7/2017'),
(259, 'SuperAdmin', ' thêm tin tức', '10:7:14  - 26/7/2017'),
(260, 'SuperAdmin', ' thêm tin tức', '10:8:29  - 26/7/2017'),
(261, 'SuperAdmin', ' thêm tin tức', '10:8:40  - 26/7/2017'),
(262, 'SuperAdmin', ' thêm tin tức', '10:10:23  - 26/7/2017'),
(263, 'SuperAdmin', ' thêm tin tức', '10:13:13  - 26/7/2017'),
(264, 'SuperAdmin', ' xóa danh mục', '10:15:43  - 26/7/2017'),
(265, 'SuperAdmin', ' xóa tin tức', '10:16:37  - 26/7/2017'),
(266, 'SuperAdmin', ' thêm tin tức', '10:18:3  - 26/7/2017'),
(267, 'SuperAdmin', ' thêm tin tức', '10:18:19  - 26/7/2017'),
(268, 'SuperAdmin', ' thêm tin tức', '10:19:23  - 26/7/2017'),
(269, 'SuperAdmin', ' thêm tin tức', '10:19:46  - 26/7/2017'),
(270, 'SuperAdmin', ' sửa  tin tức', '10:20:23  - 26/7/2017'),
(271, 'SuperAdmin', ' xóa tin tức', '10:20:26  - 26/7/2017'),
(272, 'SuperAdmin', ' xóa tin tức', '10:20:27  - 26/7/2017'),
(273, 'SuperAdmin', ' xóa tin tức', '10:20:28  - 26/7/2017'),
(274, 'SuperAdmin', ' sửa  tin tức', '10:20:33  - 26/7/2017'),
(275, 'SuperAdmin', ' sửa  tin tức', '10:25:2  - 26/7/2017'),
(276, 'SuperAdmin', ' sửa  tin tức', '10:25:6  - 26/7/2017'),
(277, 'SuperAdmin', ' sửa  tin tức', '10:25:40  - 26/7/2017'),
(278, 'SuperAdmin', ' sửa  tin tức', '10:26:8  - 26/7/2017'),
(279, 'SuperAdmin', ' sửa  tin tức', '10:26:35  - 26/7/2017'),
(280, 'SuperAdmin', ' sửa  tin tức', '10:27:17  - 26/7/2017'),
(281, 'SuperAdmin', ' sửa  tin tức', '10:28:15  - 26/7/2017'),
(282, 'SuperAdmin', ' sửa  tin tức', '10:28:26  - 26/7/2017'),
(283, 'SuperAdmin', ' sửa  tin tức', '10:29:21  - 26/7/2017'),
(284, 'SuperAdmin', ' sửa  tin tức', '10:30:52  - 26/7/2017'),
(285, 'SuperAdmin', ' sửa  tin tức', '10:31:0  - 26/7/2017'),
(286, 'SuperAdmin', ' sửa  tin tức', '10:31:5  - 26/7/2017'),
(287, 'SuperAdmin', ' sửa  tin tức', '10:33:7  - 26/7/2017'),
(288, 'SuperAdmin', ' sửa categories', '11:12:36  - 26/7/2017'),
(289, 'SuperAdmin', ' sửa categories', '11:13:17  - 26/7/2017'),
(290, 'SuperAdmin', ' sửa categories', '13:49:27  - 26/7/2017'),
(291, 'SuperAdmin', ' sửa categories', '13:49:35  - 26/7/2017'),
(292, 'SuperAdmin', 'sửa sản phẩm', '13:51:37  - 26/7/2017'),
(293, 'SuperAdmin', 'sửa sản phẩm', '13:51:58  - 26/7/2017'),
(294, 'SuperAdmin', 'sửa sản phẩm', '13:52:4  - 26/7/2017'),
(295, 'SuperAdmin', 'sửa sản phẩm', '13:54:13  - 26/7/2017');

-- --------------------------------------------------------

--
-- Table structure for table `infouser`
--

CREATE TABLE `infouser` (
  `ID_Info` int(11) NOT NULL,
  `Info_Name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Info_Password` varchar(60) NOT NULL,
  `Info_Address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Info_Phone` varchar(20) NOT NULL,
  `Info_Email` varchar(60) NOT NULL,
  `Info_IMG` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infouser`
--

INSERT INTO `infouser` (`ID_Info`, `Info_Name`, `Info_Password`, `Info_Address`, `Info_Phone`, `Info_Email`, `Info_IMG`) VALUES
(4, 'nam', '123456', '', '123', '213@gmail.com', 'anime-art-11-4-cover (4).jpg'),
(5, '12312321321', '123456', '', '', 'SuperAdmin@gmail.com', ''),
(6, 'asd', '123456', '', '', 'SuperAdmin@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID_News` int(11) NOT NULL,
  `Ten_News` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `ID_DM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID_News`, `Ten_News`, `ID_DM`) VALUES
(8, 'khuyến mại', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pin`
--

CREATE TABLE `pin` (
  `ID_Pin` int(11) NOT NULL,
  `GiaTriPin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID_Role` int(11) NOT NULL,
  `Name_Role` varchar(60) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID_Role`, `Name_Role`) VALUES
(1, 'SuperAdmin'),
(2, 'Admin'),
(3, 'Editor'),
(4, 'Người Dùng');

-- --------------------------------------------------------

--
-- Table structure for table `sp`
--

CREATE TABLE `sp` (
  `ID_SP` int(11) NOT NULL,
  `Ten_SP` varchar(60) CHARACTER SET utf8 NOT NULL,
  `KichThuoc` varchar(60) NOT NULL,
  `CPU` varchar(60) NOT NULL,
  `Camera` varchar(60) NOT NULL,
  `Card` varchar(60) NOT NULL,
  `DPG` varchar(60) NOT NULL,
  `NgoaiVi` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `Gia` int(11) NOT NULL,
  `IMG` varchar(60) NOT NULL,
  `ID_Hang` varchar(60) NOT NULL,
  `Gia_Sale` decimal(10,0) NOT NULL,
  `MoTa` text CHARACTER SET utf8 NOT NULL,
  `ID_Loai` int(11) NOT NULL,
  `View` int(11) NOT NULL,
  `ID_Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp`
--

INSERT INTO `sp` (`ID_SP`, `Ten_SP`, `KichThuoc`, `CPU`, `Camera`, `Card`, `DPG`, `NgoaiVi`, `Gia`, `IMG`, `ID_Hang`, `Gia_Sale`, `MoTa`, `ID_Loai`, `View`, `ID_Status`) VALUES
(30, 'Samsung Galaxy s5- 2015', '', '', '', '', '', '', 1000, 'product-1.jpg', '1', '700', '', 0, 0, 1),
(31, 'Nokia Lumia 1320', '', '', '', '', '', '', 999, 'product-2.jpg', '1', '899', '', 0, 0, 1),
(33, 'LG Leon 2015', '', '', '', '', '', '', 425, 'product-3.jpg', '3', '400', '', 0, 0, 1),
(34, 'Sony microsoft', '', '', '', '', '', '', 225, 'product-4.jpg', '4', '200', '', 0, 0, 1),
(35, 'iPhone 6', '', '', '', '', '', '', 1355, 'product-5.jpg', '1', '1200', '', 0, 0, 1),
(40, 'Sony Smart Air Condtion', '', '', '', '', '', '', 425, 'product-4.jpg', '4', '400', '', 0, 0, 1),
(48, 'Iphone7', '', '', '', '', '', '', 100, 'product-5.jpg', '16', '100', '', 0, 0, 1),
(49, 'Apple new i phone 6', '', '', '', '', '', '', 425, 'product-5.jpg', '16', '400', '', 0, 0, 1),
(50, 'iphone 3', '', '', '', '', '', '', 425, 'product-5.jpg', '16', '400', '', 0, 0, 1),
(51, 'Iphone 3s', '', '', '', '', '', '', 425, 'product-5.jpg', '16', '400', '', 0, 0, 1),
(52, 'iphone 4', '', '', '', '', '', '', 425, 'product-5.jpg', '16', '400', '', 0, 0, 1),
(53, 'iPhone 4s', '', '', '', '', '', '', 425, 'product-5.jpg', '16', '400', '', 0, 0, 1),
(54, 'iPhone 5', '', '', '', '', '', '', 700, 'product-5.jpg', '16', '400', '', 0, 0, 1),
(55, 'Iphone 5s', '', '', '', '', '', '', 700, 'product-5.jpg', '16', '700', '', 0, 0, 1),
(56, 'iphone 6+', '', '', '', '', '', '', 1000, 'product-5.jpg', '16', '899', '', 0, 0, 1),
(57, 'iphone 7+', '', '', '', '', '', '', 1200, 'product-5.jpg', '16', '1000', '', 0, 0, 1),
(58, 'LG G', '', '', '', '', '', '', 425, 'product-3.jpg', '19', '400', '', 0, 0, 1),
(59, 'LG G1', '', '', '', '', '', '', 700, 'product-3.jpg', '16', '400', '', 0, 0, 1),
(60, 'LG G2', '', '', '', '', '', '', 700, 'product-3.jpg', '16', '400', '', 0, 0, 1),
(61, 'LG G3', '', '', '', '', '', '', 700, 'product-3.jpg', '19', '400', '', 0, 0, 1),
(62, 'LG G4', '', '', '', '', '', '', 700, 'product-3.jpg', '19', '400', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ID_Status` int(11) NOT NULL,
  `Name_Status` varchar(60) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID_Status`, `Name_Status`) VALUES
(1, 'Hiển Thị'),
(2, 'Không Hiển Thị');

-- --------------------------------------------------------

--
-- Table structure for table `thongtindonhang`
--

CREATE TABLE `thongtindonhang` (
  `ID_DH` int(11) NOT NULL,
  `ID_KH` int(11) NOT NULL,
  `Time` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thongtindonhang`
--

INSERT INTO `thongtindonhang` (`ID_DH`, `ID_KH`, `Time`) VALUES
(7, 32, '6:43:58  - 18/7/2017'),
(8, 33, '6:44:22  - 18/7/2017'),
(9, 34, '11:0:2  - 28/7/2017'),
(10, 35, '11:1:18  - 28/7/2017');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkhachhang`
--

CREATE TABLE `thongtinkhachhang` (
  `ID_KH` int(11) NOT NULL,
  `Ten_KH` varchar(60) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thongtinkhachhang`
--

INSERT INTO `thongtinkhachhang` (`ID_KH`, `Ten_KH`, `DiaChi`, `Email`, `Phone`) VALUES
(32, 'nam', '', '', ''),
(33, 'mom', '', '', ''),
(34, '213', '123', '123@gmailc.om', '213'),
(35, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_Ten` int(11) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `ID_Role` int(11) NOT NULL,
  `ID_Status` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_Ten`, `Username`, `Password`, `ID_Role`, `ID_Status`, `Email`) VALUES
(71, 'SuperAdmin', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '1233'),
(72, 'Editor', 'e10adc3949ba59abbe56e057f20f883e', 3, 1, '1233'),
(74, 'nam', 'e10adc3949ba59abbe56e057f20f883e', 4, 1, '1233'),
(87, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, '123'),
(88, 'nam68213', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '213'),
(89, 'SuperAdmin213', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID_Banner`);

--
-- Indexes for table `bo_nho`
--
ALTER TABLE `bo_nho`
  ADD PRIMARY KEY (`ID_BoNho`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`ID_Carousel`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID_Categories`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID_Details`);

--
-- Indexes for table `content_admin`
--
ALTER TABLE `content_admin`
  ADD PRIMARY KEY (`ID_Content`);

--
-- Indexes for table `dm_news`
--
ALTER TABLE `dm_news`
  ADD PRIMARY KEY (`ID_DM`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID_Email`);

--
-- Indexes for table `hang_sx`
--
ALTER TABLE `hang_sx`
  ADD PRIMARY KEY (`ID_Hang`);

--
-- Indexes for table `hdh`
--
ALTER TABLE `hdh`
  ADD PRIMARY KEY (`ID_HDH`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID_History`);

--
-- Indexes for table `infouser`
--
ALTER TABLE `infouser`
  ADD PRIMARY KEY (`ID_Info`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID_News`);

--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`ID_Pin`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID_Role`);

--
-- Indexes for table `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`ID_SP`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_Status`);

--
-- Indexes for table `thongtindonhang`
--
ALTER TABLE `thongtindonhang`
  ADD PRIMARY KEY (`ID_DH`);

--
-- Indexes for table `thongtinkhachhang`
--
ALTER TABLE `thongtinkhachhang`
  ADD PRIMARY KEY (`ID_KH`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_Ten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID_Banner` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bo_nho`
--
ALTER TABLE `bo_nho`
  MODIFY `ID_BoNho` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `ID_Carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID_Categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID_Details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `content_admin`
--
ALTER TABLE `content_admin`
  MODIFY `ID_Content` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dm_news`
--
ALTER TABLE `dm_news`
  MODIFY `ID_DM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `ID_Email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hang_sx`
--
ALTER TABLE `hang_sx`
  MODIFY `ID_Hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `hdh`
--
ALTER TABLE `hdh`
  MODIFY `ID_HDH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID_History` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;
--
-- AUTO_INCREMENT for table `infouser`
--
ALTER TABLE `infouser`
  MODIFY `ID_Info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID_News` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `ID_Pin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID_Role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sp`
--
ALTER TABLE `sp`
  MODIFY `ID_SP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID_Status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `thongtindonhang`
--
ALTER TABLE `thongtindonhang`
  MODIFY `ID_DH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `thongtinkhachhang`
--
ALTER TABLE `thongtinkhachhang`
  MODIFY `ID_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_Ten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
