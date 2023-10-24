-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 05:33 PM
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
-- Cơ sở dữ liệu: `flowers`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `flowers`
--

CREATE TABLE `flowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `description`, `image`, `origin`, `created_at`, `updated_at`) VALUES
(1, 'Wanda Leffler V', 'Ut ut tempore labore dolorem. Eius repudiandae aspernatur fuga harum amet quisquam temporibus. Magni excepturi quia molestias dolore impedit. Dolor et vero aliquid id necessitatibus est laborum.', 'https://via.placeholder.com/640x480.png/00aaee?text=flowers+quaerat', 'Việt Nam', '2023-10-23 17:55:38', '2023-10-23 18:44:01'),
(2, 'Dr. Caleb Gorczany', 'Consectetur dicta ut quam qui sapiente. Fuga nesciunt soluta rerum rem earum et illo. Rem facilis eum hic.', 'https://via.placeholder.com/640x480.png/003300?text=flowers+veniam', 'England', '2023-10-23 17:55:38', '2023-10-23 18:48:28'),
(3, 'Fatima Durgan', 'Illo ut aut veniam sint praesentium. Quis fuga magnam quae cum sit. Voluptatibus in a numquam quia suscipit. Itaque minus temporibus nam non magnam aliquid.', 'https://via.placeholder.com/640x480.png/00ccaa?text=flowers+tempore', 'American', '2023-10-23 17:55:38', '2023-10-23 18:46:13'),
(4, 'Marta Paucek', 'Ipsum similique quasi eligendi eveniet quidem harum modi. Earum perspiciatis cumque laborum et dolor porro. Aut aut nemo dolor omnis ullam ut. Adipisci modi optio consequatur consequatur.', 'https://via.placeholder.com/640x480.png/001155?text=flowers+voluptas', 'England', '2023-10-23 17:55:38', '2023-10-23 18:48:15'),
(5, 'Adrian Bayer Jr.', 'Animi dolorem qui molestias unde. Ducimus molestiae voluptatem debitis aut corrupti odit. Sed vel eaque est ipsum ipsum. Maxime harum quo est magni quo.', 'https://via.placeholder.com/640x480.png/009911?text=flowers+animi', 'England', '2023-10-23 17:55:38', '2023-10-23 18:45:44'),
(6, 'Hilbert Romaguera V', 'Maiores aut dolores vel deserunt reiciendis eos. Quidem quae cumque sequi eveniet voluptas. Ratione sed quia aut delectus laboriosam.', 'https://via.placeholder.com/640x480.png/007788?text=flowers+labore', 'England', '2023-10-23 17:55:38', '2023-10-23 18:47:30'),
(7, 'Ms. Ernestina Welch', 'Velit consectetur architecto ipsa delectus eum nemo animi. Sint cumque ut provident blanditiis nihil doloremque et. Blanditiis eum neque voluptatem beatae modi itaque.', 'https://via.placeholder.com/640x480.png/0055cc?text=flowers+quo', 'England', '2023-10-23 17:55:38', '2023-10-23 18:48:07'),
(8, 'Wilburn Hane Sr.', 'Illo quia eum fugiat et inventore. Expedita ipsum et voluptas. Doloremque aut rerum quia modi.', 'https://via.placeholder.com/640x480.png/00cccc?text=flowers+sed', 'England', '2023-10-23 17:55:38', '2023-10-23 18:47:39'),
(31, 'Hoa Lan', '12906', 'https://via.placeholder.com/640x480.png/00aaee?tex...', 'Việt Nam', '2023-10-23 18:33:00', '2023-10-23 18:44:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_24_004212_create_flowers_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
