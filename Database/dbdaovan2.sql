-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2021 lúc 04:35 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbdaovan2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `sta_tus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`, `sta_tus`) VALUES
(1, 'Vương', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chuyennganh`
--

CREATE TABLE `tbl_chuyennganh` (
  `ma_chuyen_nganh` int(11) NOT NULL,
  `ten_chuyen_nganh` varchar(100) DEFAULT NULL,
  `mo_ta_chuyen_nganh` varchar(100) DEFAULT NULL,
  `khoa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chuyennganh`
--

INSERT INTO `tbl_chuyennganh` (`ma_chuyen_nganh`, `ten_chuyen_nganh`, `mo_ta_chuyen_nganh`, `khoa_id`) VALUES
(15, '1111', '3', 2),
(16, 'Chuyên ngành 12', '22', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhsachdoan`
--

CREATE TABLE `tbl_danhsachdoan` (
  `ma_do_an` int(11) NOT NULL,
  `ten_do_an` varchar(50) DEFAULT NULL,
  `chuyennganh_id` int(11) DEFAULT NULL,
  `sinhvien_id` int(11) DEFAULT NULL,
  `lop_id` int(11) DEFAULT NULL,
  `khoa_id` int(11) DEFAULT NULL,
  `giaovien_id` int(11) DEFAULT NULL,
  `diem` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaovien`
--

CREATE TABLE `tbl_giaovien` (
  `ma_giao_vien` int(11) NOT NULL,
  `ten_giao_vien` varchar(50) DEFAULT NULL,
  `hinh_giao_vien` text DEFAULT NULL,
  `gmail_giao_vien` varchar(50) DEFAULT NULL,
  `khoa_id` int(11) DEFAULT NULL,
  `chuyennganh_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaovien`
--

INSERT INTO `tbl_giaovien` (`ma_giao_vien`, `ten_giao_vien`, `hinh_giao_vien`, `gmail_giao_vien`, `khoa_id`, `chuyennganh_id`) VALUES
(27, 'khoa công trình1sđssadsasada1', '61101419_653979701721879_2264678578064982016_o.jpg', '124$Gmailc.om1', 3, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hedaotao`
--

CREATE TABLE `tbl_hedaotao` (
  `ma_hdt` int(11) NOT NULL,
  `ten_hdt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_hedaotao`
--

INSERT INTO `tbl_hedaotao` (`ma_hdt`, `ten_hdt`) VALUES
(1, 'Chính quy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khoa`
--

CREATE TABLE `tbl_khoa` (
  `ma_khoa` int(11) NOT NULL,
  `ten_khoa` varchar(50) DEFAULT NULL,
  `mo_ta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khoa`
--

INSERT INTO `tbl_khoa` (`ma_khoa`, `ten_khoa`, `mo_ta`) VALUES
(2, 'khoa công trình', '12'),
(3, 'Khoa công nghệ thông tin', '1234'),
(4, 'Khoa công nghệ thông tin', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lop`
--

CREATE TABLE `tbl_lop` (
  `ma_lop` int(11) NOT NULL,
  `ten_lop` varchar(50) DEFAULT NULL,
  `khoa_id` int(11) DEFAULT NULL,
  `chuyennganh_id` int(11) DEFAULT NULL,
  `thong_tin` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_lop`
--

INSERT INTO `tbl_lop` (`ma_lop`, `ten_lop`, `khoa_id`, `chuyennganh_id`, `thong_tin`) VALUES
(17, '111111', 2, 16, '12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nienkhoa`
--

CREATE TABLE `tbl_nienkhoa` (
  `ma_nien_khoa` int(11) NOT NULL,
  `ten_nien_khoa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_nienkhoa`
--

INSERT INTO `tbl_nienkhoa` (`ma_nien_khoa`, `ten_nien_khoa`) VALUES
(1, '2020-2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale_off` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `sta_tus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `name`, `price`, `sale_off`, `description`, `cat_id`, `image`, `sta_tus`) VALUES
(1, 'Nguyễn Hoàng Vương', 111, 1, '111', 1, 'uploads/604ec963b41ad5.17371756.png', 1),
(2, 'Nguyễn Hoàng Vương', 1111, 1111, '9', 1, 'uploads/6050e0e257cf99.71920089.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `ma_sinh_vien` int(11) NOT NULL,
  `ten_sinh_vien` varchar(50) DEFAULT NULL,
  `so_dien_thoai` varchar(10) DEFAULT NULL,
  `gmail_sinh_vien` varchar(50) DEFAULT NULL,
  `lop_id` int(11) DEFAULT NULL,
  `hedaotao_id` int(11) DEFAULT NULL,
  `khoa_id` int(11) DEFAULT NULL,
  `chuyennganh_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_chuyennganh`
--
ALTER TABLE `tbl_chuyennganh`
  ADD PRIMARY KEY (`ma_chuyen_nganh`);

--
-- Chỉ mục cho bảng `tbl_danhsachdoan`
--
ALTER TABLE `tbl_danhsachdoan`
  ADD PRIMARY KEY (`ma_do_an`);

--
-- Chỉ mục cho bảng `tbl_giaovien`
--
ALTER TABLE `tbl_giaovien`
  ADD PRIMARY KEY (`ma_giao_vien`);

--
-- Chỉ mục cho bảng `tbl_hedaotao`
--
ALTER TABLE `tbl_hedaotao`
  ADD PRIMARY KEY (`ma_hdt`);

--
-- Chỉ mục cho bảng `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  ADD PRIMARY KEY (`ma_khoa`);

--
-- Chỉ mục cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  ADD PRIMARY KEY (`ma_lop`);

--
-- Chỉ mục cho bảng `tbl_nienkhoa`
--
ALTER TABLE `tbl_nienkhoa`
  ADD PRIMARY KEY (`ma_nien_khoa`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Chỉ mục cho bảng `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`ma_sinh_vien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_chuyennganh`
--
ALTER TABLE `tbl_chuyennganh`
  MODIFY `ma_chuyen_nganh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_danhsachdoan`
--
ALTER TABLE `tbl_danhsachdoan`
  MODIFY `ma_do_an` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_giaovien`
--
ALTER TABLE `tbl_giaovien`
  MODIFY `ma_giao_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_hedaotao`
--
ALTER TABLE `tbl_hedaotao`
  MODIFY `ma_hdt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  MODIFY `ma_khoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_lop`
--
ALTER TABLE `tbl_lop`
  MODIFY `ma_lop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_nienkhoa`
--
ALTER TABLE `tbl_nienkhoa`
  MODIFY `ma_nien_khoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  MODIFY `ma_sinh_vien` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
