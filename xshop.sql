-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Oct 17, 2023 at 07:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `username`, `password`) VALUES
(3, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `thanhtoan` int(11) NOT NULL COMMENT '0 tiền mặt, 1 ck, 2 thanh toán thẻ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `tenSp` varchar(255) NOT NULL,
  `hinhSp` varchar(255) NOT NULL,
  `dongia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `password`, `email`, `address`) VALUES
(1, 'phong@1', '123', 'phongktbpham@gmail.com', 'Trường THPT Sơn Mỹ'),
(2, 'phongco', '123', 'qweqwe@12', 'qweqwe'),
(3, 'phongpham', '123', 'phongktbpham@gmail.com', 'Trường THPT Sơn Mỹ'),
(4, 'phong', '123', 'qweqwe@12', 'qweqwe'),
(5, 'client', '123', 'phongktbpham@gmai', 'Trường THPT Sơn Mỹ');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenSp` varchar(255) NOT NULL,
  `anhSp` text NOT NULL,
  `giaSp` float NOT NULL,
  `maSp` varchar(50) NOT NULL,
  `soluong` int(10) NOT NULL,
  `theloaiSp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenSp`, `anhSp`, `giaSp`, `maSp`, `soluong`, `theloaiSp`) VALUES
(62, 'Macbook Air M1 (8G/512Gb)', './uploads/637407970062806725_mba-2020-gold-dd.jpg', 23, 'Ap1', 456, 'laptop'),
(63, 'Acer Nitro 5 Tiger', './uploads/637743874726278183_acer-nitro-gaming-an515-57-56xx-den-dd.jpg', 19, 'AC1', 90, 'laptop'),
(64, 'Macbook Air M2', './uploads/637901915720184032_macbook-air-m2-2022-den-dd.jpg', 30, 'AP2', 56, 'laptop'),
(65, 'IPad Pro 2020', './uploads/638017406298728611_ipad-pro-129-m2-2022-wifi-dd.jpg', 19, 'IPd1', 456, 'tablet');

-- --------------------------------------------------------

--
-- Table structure for table `theloaisp`
--

CREATE TABLE `theloaisp` (
  `id` int(11) NOT NULL,
  `maSP` varchar(50) NOT NULL,
  `tenSp` varchar(50) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'STT',
  `username` varchar(50) NOT NULL COMMENT 'Tên đăng nhập',
  `ngaysinh` varchar(20) NOT NULL COMMENT 'Ngày sinh',
  `soDienthoai` varchar(10) NOT NULL COMMENT 'Số điện thoại',
  `email` varchar(50) NOT NULL COMMENT 'email người dùng',
  `password` varchar(50) NOT NULL COMMENT 'Mật khẩu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloaisp`
--
ALTER TABLE `theloaisp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `theloaisp`
--
ALTER TABLE `theloaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'STT', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
