-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 09:12 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `hang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `hang`, `created_at`, `updated_at`) VALUES
(1, 'BMV', NULL, NULL),
(2, 'Volvo', NULL, NULL),
(3, 'Audi', NULL, NULL),
(4, 'Toyota', NULL, NULL),
(5, 'Zenos', NULL, NULL),
(6, 'Tesla', NULL, NULL),
(7, 'Abarth', NULL, NULL),
(8, 'Hyundai ', NULL, NULL),
(9, 'Nissan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_10_15_162822_create_products_table', 1),
(12, '2023_10_16_102835_create_category_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten` varchar(255) NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `gia` varchar(255) NOT NULL,
  `nhienlieu` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `mota` varchar(1000) DEFAULT NULL,
  `kmdadi` varchar(255) DEFAULT NULL,
  `hopso` varchar(255) DEFAULT NULL,
  `xuatxu` varchar(255) DEFAULT NULL,
  `namsx` varchar(255) DEFAULT NULL,
  `socho` varchar(50) DEFAULT NULL,
  `chuxe` varchar(255) NOT NULL,
  `sochuxe` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ten`, `category_id`, `gia`, `nhienlieu`, `anh`, `mota`, `kmdadi`, `hopso`, `xuatxu`, `namsx`, `socho`, `chuxe`, `sochuxe`, `diachi`, `created_at`, `updated_at`) VALUES
(13, 'QQS', 6, '820 Triệu', 'Điện', '1697555160.jpg', 'Cũng ổn áp', '40000', 'Số Sàn', 'Japanese', '2017-06', '7', 'Huy', '0323597362', 'Bắc Giang', NULL, NULL),
(14, 'IPD', 6, '800 Triệu', 'Dầu', '1697562721.jpg', 'ổn', '2000', 'tự động', 'American', '2019-11', '4', 'Đức Anh', '0393866527', 'Thái Bình', NULL, NULL),
(16, 'Toyota Wigo 1.2G 4X2', 4, '325 Triệu', 'Xăng', '1697737483.jpg', 'Wigo 2018 máy xăng, số tự động đã đi khoảng 5 vạn, xe nhập khẩu, màu đỏ, lịch sử bảo dưỡng full hãng, xe đi gia đình, máy nguyên zin. Bao check', '50000', 'tự động', 'Nhập khẩu', '2018-06', '4', 'Đạt', '0342857483', 'Hà Nội', '2023-10-18 17:00:00', NULL),
(17, 'BMW X6 XDrive35i', 1, '679 Triệu', 'Xăng', '1697738627.jpg', 'BMW X6 XDrive35i Model 2008. Một chiếc SUV thể thao gầm cao biểu tượng của nhà BMW gây sốt toàn cộng đồng mê xe tại thời điểm ra mắt với thân hình đậm chất thể thao, rộng, đẹp không thể không ngoái nhìn. Xe nhập khẩu nguyên chiếc từ Mỹ Sx cuối 2008, lăn bánh lần đầu 2009, xe mang biển HCMC tên cá nhân. Màu sơn đỏ bordeaux kết hợp với dàn ghế thể thao 2 màu đen/đỏ cực kỳ thể thao và cá tính. Những mấu xe BMW luôn mang lại cảm giác cực kỳ chắc, đậm chất thể thao. Xe đi đúng 8v4 KM. Lẫy chuyển số vô lăng, Màn hình giải trí, Camera lùi, cảm biến trước sau, Đèn Bi-xenon tự động... Vui lòng liên hệ để biết thêm thông tin chi tiết', '84000', 'tự động', 'Nhập khẩu', '2008', '4', 'Trần Phạm Sỹ Phan', '0938365160', 'Hồ Chí Minh', '2023-10-18 17:00:00', NULL),
(18, 'BMW 3 Series 325i 2004', 1, '245 Triệu', 'Xăng', '1697738852.jpg', 'Xe xử dụng đi làm hàng ngày, chủ xe tính cẩn thận, bảo quản tốt.', '100600', 'tự động', 'Nhập khẩu', '2004', '4', 'Chị Phương', '0919647970', 'Hà Nội', '2023-10-18 17:00:00', NULL),
(19, 'Audi A4', 3, '650 Triệu', 'Xăng', '1697738986.jpg', 'Chính chủ tại Hà Nội cần bán xe Audi A4 2010, - Nhập khẩu nguyên chiếc từ Đức năm 2010 - Máy 1.8 TFSI - Số KM: 6 vạn km - Xe đi rất cẩn thận, bảo quản gara trong nhà - Giá bán: 650tr', '600000', 'Bán Tự Động', 'Nhập khẩu', '2010', '4', 'Nguyen Thi Oanh', '0913846482', 'Hà Nội', '2023-10-18 17:00:00', NULL),
(20, 'Toyota Camry 2.4', 4, '445 Triệu', 'Xăng', '1697739056.jpg', 'Chính chủ bán xe Camry 2011 số tự động 2.4 Xe đang sử dụng ko có nhu cầu sửa dụng nên bán.xe đẹp bao test hãng + Hãng: Toyota + Dòng xe: Camry + Năm sản xuất: 2011 + Số Km đã đi: 870000 + Tình trạng: Đã sử dụng + Hộp số: Tự động + Nhiên liệu: Xăng - Địa chỉ : Phường Tân Chánh Hiệp, Quận 12, Tp Hồ Chí Minh - Giá bán : 445.000.000 đ - Liên hệ : 0986706147', '870000', 'tự động', 'Nhập khẩu', '4', '4', 'Anh', '0387372779', 'Hồ Chí Minh', '2023-10-18 17:00:00', NULL),
(21, 'Nissan Navara PRO4X', 9, '210 Triệu', 'Dầu', '1697744062.jpg', 'Giảm phí trước bạ + tặng phụ kiện chính hãng ____________________ Hỗ trợ trả góp lên đến 80% giá trị xe Hỗ trợ đăng kí lái thử Đủ màu giao ngay _______________________ Liên hệ: 0941 421 408 Địa chỉ: 202- 204 Nguyễn Lương Bằng, Quận 7, TP.HCM', '0', 'tự động', 'Nhập khẩu', '2022', '4', 'NISSAN PHÚ MỸ', '0941738408', 'Hồ Chí Minh', '2023-10-18 17:00:00', NULL),
(23, 'Ford Ranger Ford Ranger XLS 2.0L 4x2 AT', 5, '645 Triệu', 'Xăng', '1697809741.jpg', 'Siêu Lướt 6000km FORD RANGER XLS AT 2.0L 4x2 (Số tự động 1 cầu) - Ngoại hình mới hầm hố đậm chất Mỹ, thiết kế cụm đèn chữ C kiểu F150 - Nội thất rộng rãi 5 chỗ ngồi - Động cơ Diesel 2.0L mới 170 mã lực - Số tự động 6 cấp mới - Tay lái trợ lực điện - Rất tiếp kiệm dầu - An toàn ABS, EDB, kiểm soát lật xe+trọng tải, Cruise - Lim Control, khởi hành ngang dốc - 6 túi khí - Hệ thống Sync 4A, màn hình cảm ứng 10\". Kết nối Carplay, Androi Auto - Màn hình công tơ mét 8\"', '6000', 'tự động', NULL, '2023', '4', 'Bạch Hiếu', '0562535525', 'Hà Nội', '2023-10-19 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL DEFAULT '0',
  `image` varchar(400) DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `image`, `level`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ankdev', 'HarrveyDev@gmail.com', NULL, '$2y$10$Wi8VKwPV1inZXtKqtcyYFeE4oIc.2GVfkOnGOVXko0Slm74y3F7Qi', '0393866527', NULL, 1, 1, 'p0gAj9JHtXltkvJDeje0CcCAqZT1deuPfnSqMAVlpL0Bq4wjVjdEG7u4Ef8H', '2023-10-16 13:16:49', '2023-10-16 13:16:49'),
(4, 'Huy23', 'Huy@gmail.com', NULL, '$2y$10$M9mR/Jq.t/ATzqFVFtqtz.eAXlmmicwRKlTTUO4/MvXV0KrDKm2fa', '0286943538', NULL, 0, 0, NULL, '2023-10-17 12:28:31', NULL),
(5, 'Tuan03', 'Tuan03@gmail.com', NULL, '$2y$10$ubTIkOm4lvcxxkB.u2aIYOHcWOhVnTwGj4wm5oRITnQzQ2y3FAXDa', '0637892234', NULL, 0, 0, NULL, '2023-10-17 12:30:19', NULL),
(6, 'thuytrang', 'thuytrang22@gmail.com', NULL, '$2y$10$DE2X8yctAStIs8qR954ZfuAITvyyn38NUgI/RFiaA.yPQLIq5JXGS', '0348947682', '1697648577.jpg', 0, 1, 'fGiJERplauYshy70bS2n8FwdiQ6ImE7F7pGMNRVm2qV8QPhzyyjEWj2Z9sRQ', '2023-10-17 12:36:16', '2023-10-18 10:02:57'),
(7, 'ngocmai', 'ngocmai@gmail.com', NULL, '$2y$10$2LSozjZydV72omrcqUbw1.GoxVTaRHtXXfAvTOv.7BtpG/aJz9X4C', '0352834627', NULL, 1, 0, 'xueibGadCIlqdFwVCRzBZ1vXakz55o6wpCwcqv4FQ84QGePCwOfFMt71oWEd', '2023-10-17 12:37:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_has` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_has` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
