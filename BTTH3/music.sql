-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2023 lúc 04:32 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `music`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `idTheLoai` int(10) NOT NULL,
  `tenTheLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`idTheLoai`, `tenTheLoai`) VALUES
(1, 'Nhạc trẻ'),
(3, 'Nhạc rap'),
(10, 'Nhạc trữ tình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `id` int(10) NOT NULL,
  `tenBaiHat` varchar(50) NOT NULL,
  `caSi` varchar(50) NOT NULL,
  `idTheLoai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`id`, `tenBaiHat`, `caSi`, `idTheLoai`) VALUES
(1, 'Anh khác hay em khác', 'Nguyen Van B', 1),
(2, 'Anh', 'Nguyen Van A', 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idTheLoai`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idtheloai` (`idTheLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `idTheLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `song`
--
ALTER TABLE `song`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
