-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3307
-- Thời gian đã tạo: Th12 05, 2021 lúc 03:57 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_16_064002_create_tbl_admin_table', 1),
(5, '2021_11_16_132947_create_tbl_category_product', 2),
(6, '2021_11_17_064944_create_tbl_brand_product', 3),
(7, '2021_11_17_081302_create_tbl_product', 4),
(8, '2021_11_20_032521_tbl_customer', 5),
(9, '2021_11_20_063239_tbl_shipping', 6),
(13, '2021_11_23_025050_tbl_payment', 7),
(14, '2021_11_23_025224_tbl_order', 7),
(15, '2021_11_23_025436_tbl_order_details', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ThoJ', '0932421565', '2021-11-16 07:04:14', '2021-11-16 07:04:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'KFC', '1234', 0, NULL, NULL),
(4, 'Jollibee', '212', 0, NULL, NULL),
(5, 'Lotteria', 'Cũng được mà mắc', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `meta_keywords`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(6, 'MÓN TRÁNG MIỆNG', 'món tráng miệng ', 'Tráng miệng', 0, NULL, NULL),
(7, 'COMBO', 'combo', 'COMBO', 0, NULL, NULL),
(8, 'PHẦN ĂN PHỤ', 'phần ăn phụ', 'Khoai tây, súp, cơm, mực', 0, NULL, NULL),
(9, 'BURGER & CƠM', 'burger & cơm', 'burger, sandwich', 0, NULL, NULL),
(10, 'GÀ RÁN', 'gà rán', 'gà giòn vui vẻ', 0, NULL, NULL),
(11, 'MÌ Ý', 'mì ý', 'mì siêu ngon', 0, NULL, NULL),
(12, 'GÀ SỐT CAY', 'gà sốt cay', 'Siêu cay', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(3, 'ThoJ', 'ThoJ@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0932421564', NULL, NULL),
(4, 'Võ Quốc Dũng', 'vqdung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0255113', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `shipping_id` int(11) UNSIGNED NOT NULL,
  `order_status` int(20) NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `order_status`, `order_code`, `created_at`, `updated_at`) VALUES
(21, 3, 26, 1, '5e1e7', '2021-12-04 12:16:13', NULL),
(22, 3, 27, 1, '5f06d', '2021-12-04 12:12:41', NULL),
(23, 3, 28, 1, 'bc676', '2021-12-04 12:16:13', NULL),
(24, 3, 29, 1, 'cac40', '2021-12-04 12:32:03', NULL),
(25, 4, 30, 1, 'cf856', '2021-12-04 15:21:24', NULL),
(26, 3, 31, 1, '96570', '2021-12-05 06:27:37', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_code`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(7, '5e1e7', 58, 'Mì Ý Thịt Bò', '39000', 1, NULL, NULL),
(8, '5e1e7', 57, 'Mì Ý', '29000', 5, NULL, NULL),
(9, '5e1e7', 56, 'Súp Gà', '10000', 1, NULL, NULL),
(10, '5f06d', 58, 'Mì Ý Thịt Bò', '39000', 4, NULL, NULL),
(11, '5f06d', 57, 'Mì Ý', '29000', 5, NULL, NULL),
(12, '5f06d', 56, 'Súp Gà', '10000', 1, NULL, NULL),
(13, 'bc676', 58, 'Mì Ý Thịt Bò', '39000', 4, NULL, NULL),
(14, 'bc676', 57, 'Mì Ý', '29000', 5, NULL, NULL),
(15, 'bc676', 56, 'Súp Gà', '10000', 1, NULL, NULL),
(16, 'cac40', 58, 'Mì Ý Thịt Bò', '39000', 4, NULL, NULL),
(17, 'cac40', 57, 'Mì Ý', '29000', 5, NULL, NULL),
(18, 'cac40', 56, 'Súp Gà', '10000', 3, NULL, NULL),
(19, 'cf856', 57, 'Mì Ý', '29000', 3, NULL, NULL),
(20, 'cf856', 55, 'Súp Gà', '10000', 1, NULL, NULL),
(21, '96570', 57, 'Mì Ý', '29000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(14, 10, '2 MIẾNG GÀ GIÒN', 4, 'Giòn ngon', '2 miếng gà giòn', '60000', '2mienggagion29.png', 0, NULL, NULL),
(15, 10, '1 MIẾNG GÀ GIÒN', 4, 'Giòn ngon', '1 Miếng gà giòn', '30000', '1mienggagion48.jpg', 0, NULL, NULL),
(16, 10, '4 MIẾNG GÀ GIÒN', 4, 'Giòn ngon', '4 miếng gà giòn', '116000', '4mienggagion46.png', 0, NULL, NULL),
(17, 10, '6 MIẾNG GÀ GIÒN', 4, 'Giòn ngon', '6 miếng gà giòn', '174000', '6mingggin68.png', 0, NULL, NULL),
(18, 10, 'CƠM GÀ GIÒN(1 MIẾNG GÀ GIÒN, CƠM VÀ SÀ LÁCH)', 4, '1 MIẾNG GÀ GIÒN, CƠM VÀ SÀ LÁCH', 'cơm gà giòn', '40000', '1mg-com-xl78.png', 0, NULL, NULL),
(19, 10, '2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT', 4, '2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT', '2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT', '80000', '2mgg-1khoaivua-1pepsi96.png', 0, NULL, NULL),
(20, 10, 'CƠM GÀ GIÒN + SÚP BÍ ĐỎ + NƯỚC NGỌT', 4, 'CƠM GÀ GIÒN + SÚP BÍ ĐỎ + NƯỚC NGỌT', 'CƠM GÀ GIÒN + SÚP BÍ ĐỎ + NƯỚC NGỌT', '50000', 'comgagion-supbido-nuocngot96.png', 0, NULL, NULL),
(21, 12, '1 MIẾNG GÀ SỐT CAY + CƠM', 4, '1 MIẾNG GÀ SỐT CAY + CƠM', '1 MIẾNG GÀ SỐT CAY + CƠM', '42000', '1gstcaycom87.jpg', 0, NULL, NULL),
(22, 12, '2 MIẾNG GÀ SÀI GÒN SỐT CAY', 4, '2 MIẾNG GÀ SÀI GÒN SỐT CAY', '2 MIẾNG GÀ SÀI GÒN SỐT CAY', '62000', '2minggstcay45.png', 0, NULL, NULL),
(23, 12, '2 MIẾNG GÀ SỐT CAY + KHOAI TÂY + NƯỚC', 4, '2 MIẾNG GÀ SỐT CAY + KHOAI TÂY + NƯỚC', '2 MIẾNG GÀ SỐT CAY + KHOAI TÂY + NƯỚC', '80000', '2gsc1kt1pepsi9.png', 0, NULL, NULL),
(24, 12, '1 MIẾNG GÀ SỐT CAY + CƠM + NƯỚC + SÚP', 4, '1 MIẾNG GÀ SỐT CAY + CƠM + NƯỚC + SÚP', '1 MIẾNG GÀ SỐT CAY + CƠM + NƯỚC + SÚP', '50000', '1gsccom1pepsisup30.png', 0, NULL, NULL),
(25, 11, 'MÌ Ý SỐT BÒ BẰM LỚN + NƯỚC NGỌT', 4, 'MÌ Ý SỐT BÒ BẰM LỚN + NƯỚC NGỌT', 'MÌ Ý SỐT BÒ BẰM LỚN + NƯỚC NGỌT', '45000', '01myylon01pepsi31.png', 0, NULL, NULL),
(26, 11, 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ KHÔNG XƯƠNG + KHOAI TÂY VỪA + NƯỚC NGỌT', 4, 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ KHÔNG XƯƠNG + KHOAI TÂY VỪA + NƯỚC NGỌT', 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ KHÔNG XƯƠNG + KHOAI TÂY VỪA + NƯỚC NGỌT', '75000', '01myylon02gakoxuong01khoaivua01pepsi80.png', 0, NULL, NULL),
(27, 11, 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ KHÔNG XƯƠNG + NƯỚC NGỌT', 4, 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ KHÔNG XƯƠNG + NƯỚC NGỌT', 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ KHÔNG XƯƠNG + NƯỚC NGỌT', '65000', '01myylon02gakoxuong01pepsi35.png', 0, NULL, NULL),
(28, 11, '1 MIẾNG GÀ GIÒN + 1 MỲ Ý SỐT BÒ BẰM + 1 NƯỚC NGỌT', 4, '1 MIẾNG GÀ GIÒN + 1 MỲ Ý SỐT BÒ BẰM + 1 NƯỚC NGỌT', '01 MIẾNG GÀ', '65000', '1gg-1miy-1nuocvua73.png', 0, NULL, NULL),
(30, 10, 'CƠM GÀ GIÒN + NƯỚC NGỌT', 4, '<p>123</p>', '123', '45000', 'comga1pepsi35.png', 0, NULL, NULL),
(31, 8, 'KHOAI LẮC RONG BIỂN', 4, '<p>1</p>', '1', '25000', 'e37e2754354109-menuborad124.png', 0, NULL, NULL),
(32, 8, 'KHOAI TÂY CHIÊN (VỪA)', 4, '<p>1</p>', '1', '20000', 'khoaivua2130.png', 0, NULL, NULL),
(33, 8, 'KHOAI TÂY LẮC VỊ BBQ (VỪA)', 4, '<p>1</p>', '1', '25000', 'ktlacvibbq53.png', 0, NULL, NULL),
(34, 8, '7 KHOANH MỰC ỐNG CHIÊN GIÒN', 4, '<p>1</p>', '1', '35000', '7khoanhmuc5.png', 0, NULL, NULL),
(35, 7, '03 GÀ GIÒN VUI VẺ + 01 MỲ Ý SỐT BÒ BẰM + 01 KHOAI TÂY CHIÊN VỪA + 2 LY PEPSI VỪA', 4, '<p>1</p>', '1', '139000', 'cb1jlb63.jpg', 0, NULL, NULL),
(36, 7, '02 GÀ GIÒN VUI VẺ + 02 MỲ Ý SỐT BÒ BẰM + 01 KHOAI TÂY CHIÊN VỪA + 2 LY PEPSI VỪA', 4, '<p>1</p>', '1', '139000', 'cb2jlb92.jpg', 0, NULL, NULL),
(37, 7, '02 GÀ GIÒN VUI VẺ + 01 GÀ SỐT CAY + 01 MỲ Ý SỐT BÒ BẰM + 01 KHOAI TÂY CHIÊN VỪA + 2 LY PEPSI VỪA', 4, '<p>1</p>', '1', '139000', 'cb3jlb64.jpg', 0, NULL, NULL),
(38, 7, '03 GÀ GIÒN VUI VẺ + 02 MỲ Ý SỐT BÒ BẰM + 01 KHOAI BBQ VỪA + 03 LY PEPSI VỪA', 4, '<p>1</p>', '1', '179000', 'cb4jlb50.jpg', 0, NULL, NULL),
(39, 8, 'CƠM TRẮNG', 4, '<p>1</p>', '1', '5000', 'com36.png', 0, NULL, NULL),
(40, 8, 'KHOAI TÂY CHIÊN (LỚN)', 4, '<p>1</p>', '1', '25000', 'ktclon61.png', 0, NULL, NULL),
(41, 8, 'SÚP BÍ ĐỎ', 4, '<p>S&uacute;p b&iacute; đỏ&nbsp;</p>', '1 phần Súp bí đỏ ', '15000', 'supbido174.png', 0, NULL, NULL),
(42, 8, '3 MIẾNG GÀ GIÒN KHÔNG XƯƠNG', 4, '<p>Gi&ograve;n ngon&nbsp;</p>', '3 MIẾNG GÀ GIÒN KHÔNG XƯƠNG', '30000', '3mgakxuong90.png', 0, NULL, NULL),
(43, 10, 'Gà Rán - 1 Miếng', 5, '<p>Gi&ograve;n ngon</p>', 'Gà Rán - 1 Miếng', '35000', '1mgr98.png', 0, NULL, NULL),
(44, 10, 'Gà Sốt Đậu - 1 Miếng', 5, '<p>Gi&ograve;n ngon</p>', 'Gà Sốt Đậu - 1 Miếng', '35000', '1mgsd9.png', 0, NULL, NULL),
(45, 10, 'Gà Sốt Phô Mai - 1 Miếng', 5, '<p>Gi&ograve;n ngon b&eacute;o</p>', 'Gà Sốt Phô Mai - 1 Miếng', '35000', '1mgspm74.png', 0, NULL, NULL),
(46, 10, 'Gà Rán - 3 Miếng', 5, '<p>Gi&ograve;n ngon</p>', 'Gà Rán - 3 Miếng', '95000', '3mgr10.png', 0, NULL, NULL),
(47, 10, 'Gà Sốt Phô Mai - 3 Miếng', 5, '<p>Gi&ograve;n ngon b&eacute;o</p>', 'Gà Sốt Phô Mai - 3 Miếng', '105000', '3mgspm86.png', 0, NULL, NULL),
(48, 10, 'Gà Sốt Đậu - 3 Miếng', 5, '<p>Gi&ograve;n ngon</p>', 'Gà Sốt Đậu - 3 Miếng', '105000', '3mgsd73.png', 0, NULL, NULL),
(49, 10, 'Gà Rán - 9 Miếng', 5, '<p>Gi&ograve;n ngon</p>', 'Gà Rán - 9 Miếng', '280000', '9mgr86.png', 0, NULL, NULL),
(50, 10, 'Gà Rán - 6 Miếng', 5, '<p>Gi&ograve;n ngon</p>', 'Gà Rán - 6 Miếng', '189000', '6mgr45.png', 0, NULL, NULL),
(51, 9, 'Cơm Gà Nướng Góc Tư', 5, '<p>Ngon v&atilde;i</p>', 'Cơm Gà Nướng Góc Tư', '55000', 'comgang453.png', 0, NULL, NULL),
(52, 9, 'Cơm Gà Hoàng Gia', 5, '<p>Ngon lắm</p>', 'Cơm Gà Hoàng Gia', '44000', 'comgahoanggia30.png', 0, NULL, NULL),
(53, 9, 'Cơm Gà Nướng', 5, '<p>ngon</p>', 'Cơm Gà Nướng', '44000', 'comganuong52.png', 0, NULL, NULL),
(54, 9, 'Cơm Gà Sốt Đậu', 5, '<p>Ngon</p>', 'Cơm Gà Sốt Đậu', '44000', 'comgasotdau97.png', 0, NULL, NULL),
(55, 11, 'Súp Gà', 5, '<p>B&eacute;o</p>', 'Súp Gà', '10000', 'supga79.png', 0, NULL, NULL),
(56, 11, 'Súp Gà', 5, '<p>B&eacute;o</p>', 'Súp Gà', '10000', 'supga71.png', 0, NULL, NULL),
(57, 11, 'Mì Ý', 5, '<p>Ngon</p>', 'Mì Ý', '29000', 'miy95.png', 0, NULL, NULL),
(58, 11, 'Mì Ý Thịt Bò', 5, '<p>Ngon</p>', 'Mì Ý Thịt Bò', '39000', 'miythitbo89.png', 0, NULL, NULL),
(59, 11, 'Mì Ý Thịt Xông Khói', 5, '<p>Ngon lắm</p>', 'Mì Ý Thịt Xông Khói', '40000', 'miyxongkhoi48.png', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_note`, `shipping_method`, `created_at`, `updated_at`) VALUES
(26, 'ThoJ', '60 Lê Trung Đình', '0932421564', 'doibaclam6060@gmail.com', '1223', 1, NULL, NULL),
(27, 'THO', '60 Võ Tùng phường lê hồng phong', '0932421564', 'ThoJ@gmail.com', 'dễ vỡ', 1, NULL, NULL),
(28, 'Nguyễn Khánh Linh', '60 Lê Trung Đình', '0932421564', 'doibaclam6060@gmail.com', '122', 0, NULL, NULL),
(29, 'Lê Xuân Thắng', 'Quảng Ngãi', '0255113', 'Thang@gmail.com', 'hàng xịn', 0, NULL, NULL),
(30, 'Võ Quốc Dũng', 'Đà nẵng', '0255113', 'vqdung@gmail.com', 'nhẹ tay', 1, NULL, NULL),
(31, 'Nguyễn Viết Thọ', '60 Lê Trung Đình', '0932421564', 'doibaclam6060@gmail.com', '123', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`,`shipping_id`),
  ADD KEY `shipping_id` (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `category_id_2` (`category_id`,`brand_id`),
  ADD KEY `category_id_3` (`category_id`,`brand_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`shipping_id`) REFERENCES `tbl_shipping` (`shipping_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tbl_category_product` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
