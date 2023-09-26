-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 22, 2023 lúc 06:57 PM
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
-- Cơ sở dữ liệu: `btth01b`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED DEFAULT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED DEFAULT NULL,
  `ngayviet` datetime NOT NULL,
  `hinhanh` varchar(200) DEFAULT NULL,
  `SLBaiViet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`, `SLBaiViet`) VALUES
(2, 'Bài hát yêu thích', 'Yêu một người', 45, 'Mô tả ngắn về tình yêu', 'Nội dung bài viết về tình yêu', 1, '2023-09-18 00:00:00', 'anh2.jpg', NULL),
(3, 'Bài hát thương thầm', 'Người thương', 11, 'Mô tả về tình thương', 'Nội dung bài viết về tình thương', 4, '2023-09-19 00:00:00', 'anh3.jpg', NULL),
(4, 'Bài hát của anh', 'Anh yêu em', 20, 'Mô tả về tình anh em', 'Nội dung bài viết về tình anh em', 4, '2023-09-20 00:00:00', 'anh4.jpg', NULL),
(5, 'Em yêu âm nhạc', 'Cùng em hát', 20, 'Mô tả về tình em', 'Nội dung bài viết về tình em', 6, '2023-09-21 00:00:00', 'anh5.jpg', NULL),
(6, 'Yêu một lần thôi', 'Người yêu ơi', 11, 'Mô tả về tình yêu đầy đam mê', 'Nội dung bài viết về tình yêu đầy đam mê', 6, '2023-09-22 00:00:00', 'anh6.jpg', NULL),
(7, 'Em và nhạc', 'Nhạc của em', 11, 'Mô tả về tình yêu âm nhạc', 'Nội dung bài viết về tình yêu âm nhạc', 1, '2023-09-23 00:00:00', 'anh7.jpg', NULL),
(8, 'Thương em một người', 'Em và anh', 45, 'Mô tả về tình thương và tình yêu', 'Nội dung bài viết về tình thương và tình yêu', 1, '2023-09-24 00:00:00', 'anh8.jpg', NULL),
(9, 'Bài hát yêu thích', 'Yêu một người', 11, 'Mô tả ngắn về tình yêu', 'Nội dung bài viết về tình yêu', 1, '2023-09-18 00:00:00', 'anh9.jpg', NULL),
(10, 'Bài hát rap', 'Người miền núi chất', 20, 'Mô tả ngắn về con người', 'Nội dung bài viết về tình yêu người miền núi', 4, '2023-09-18 00:00:00', 'anh10.jpg', NULL);

--
-- Bẫy `baiviet`
--
DELIMITER $$
CREATE TRIGGER `tg_CapNhatTheLoai` AFTER INSERT ON `baiviet` FOR EACH ROW BEGIN
    -- Cập nhật số lượng bài viết cho thể loại tương ứng
    UPDATE theloai
    SET SLBaiViet = SLBaiViet + 1
    WHERE ma_tloai = NEW.ma_tloai;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
(1, 'Nhacvietplus', 'anh'),
(4, 'Nhacviet', 'anh'),
(6, 'Nhacplus', 'anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `ten_tloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
(11, 'Nhạc trữ tình'),
(20, 'Nhạc trẻ'),
(45, 'Nhạc rap');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('abc', '321'),
('admin', '123'),
('anh', '271');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `vw_music`
-- (See below for the actual view)
--
CREATE TABLE `vw_music` (
`ma_bviet` int(10) unsigned
,`tieude` varchar(200)
,`ten_bhat` varchar(100)
,`ten_tloai` varchar(50)
,`ten_tgia` varchar(100)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `vw_music`
--
DROP TABLE IF EXISTS `vw_music`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_music`  AS SELECT `baiviet`.`ma_bviet` AS `ma_bviet`, `baiviet`.`tieude` AS `tieude`, `baiviet`.`ten_bhat` AS `ten_bhat`, `theloai`.`ten_tloai` AS `ten_tloai`, `tacgia`.`ten_tgia` AS `ten_tgia` FROM ((`baiviet` join `theloai` on(`baiviet`.`ma_tloai` = `theloai`.`ma_tloai`)) join `tacgia` on(`baiviet`.`ma_tgia` = `tacgia`.`ma_tgia`)) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `ma_tloai` (`ma_tloai`),
  ADD KEY `ma_tgia` (`ma_tgia`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`ma_tgia`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  ADD CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


a.
SELECT baiviet.*, theloai.ten_tloai FROM baiviet
baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = "Nhạc trữ tình"
b.
SELECT baiviet.*, tacgia.ten_tgia FROM
baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = "Nhacvietplus"
c.
SELECT theloai.ma_tloai, theloai.ten_tloai
FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai=theloai.ma_tloai
WHERE baiviet.tomtat IS NULL
d.
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, baiviet.ngayviet, tacgia.ten_tgia, theloai.ten_tloai
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
e.
SELECT theloai.ma_tloai, theloai.ten_tloai, COUNT(baiviet.ma_bviet) AS so_max
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai, theloai.ten_tloai
ORDER BY so_max DESC
LIMIT 1
f.
SELECT tacgia.ma_tgia, tacgia.ten_tgia, COUNT(baiviet.ma_bviet) AS sobaiviet 
FROM tacgia LEFT JOIN baiviet on tacgia.ma_tgia = baiviet.ma_tgia 
GROUP BY tacgia.ma_tgia, tacgia.ten_tgia 
ORDER BY sobaiviet DESC
LIMIT 2
g.
SELECT * FROM baiviet
WHERE ten_bhat LIKE '%yêu%'
    OR ten_bhat LIKE '%thương%'
    OR ten_bhat LIKE '%anh%'
    OR ten_bhat LIKE '%em%'
h.
SELECT *FROM baiviet
WHERE ( tieude LIKE '%yêu%'
    OR tieude LIKE '%thương%'
    OR tieude LIKE '%anh%'
    OR tieude LIKE '%em%')
OR (ten_bhat LIKE '%yêu%'
    OR ten_bhat LIKE '%thương%'
    OR ten_bhat LIKE '%anh%'
    OR ten_bhat LIKE '%em%');
i.
CREATE VIEW vw_Music AS 
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
k.
ALTER TABLE baiviet
ADD SLBaiViet int
DELIMITER //
CREATE TRIGGER tg_CapNhatTheLoai
AFTER INSERT ON baiviet
FOR EACH ROW
BEGIN
    UPDATE theloai
    SET SLBaiViet = SLBaiViet + 1
    WHERE ma_tloai = NEW.ma_tloai;
END;
//
DELIMITER ;
l.
CREATE TABLE Users(
    username varchar(100) NOT null PRIMARY KEY,
    password varchar(50) NOT null
    );
