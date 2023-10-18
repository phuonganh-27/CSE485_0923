-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2023 lúc 12:02 PM
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
-- Cơ sở dữ liệu: `blog5`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(51, 'Thaddeus Littel', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(53, 'Devante Ondricka', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(54, 'Bridgette Reynolds', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(56, 'Damian Hansen', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(57, 'Prof. Herbert Mills', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(58, 'Prof. Matteo Mohr PhD', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(59, 'Nathan Moen', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(60, 'Declan Johns', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(61, 'Dr. Micaela Dach', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(62, 'Keely Russel Jr.', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(63, 'Nona Von', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(64, 'Louie Jakubowski', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(65, 'Elody Wilkinson', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(66, 'Malachi Robel', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(67, 'Dr. Misty Adams', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(68, 'Edmond D\'Amore', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(69, 'Gunner Heller II', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(70, 'Jarred Larson DVM', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(71, 'Prof. Erna Greenfelder', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(72, 'Izabella Murray', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(73, 'Prof. Mabel Sipes I', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(74, 'Mr. Stewart Jacobi Jr.', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(75, 'Dr. Alysha Stehr DVM', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(76, 'Miss Earnestine Mertz', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(77, 'Dr. Laisha Reilly', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(78, 'Cassandra Schiller I', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(79, 'London Wuckert', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(80, 'Courtney Considine', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(81, 'Mr. Wendell Bernhard', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(82, 'Mr. Adrain Gaylord PhD', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(83, 'Prof. Abe Bogan MD', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(84, 'Dr. Dayne Reichert', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(85, 'Vernie Greenholt', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(86, 'Ericka Yost', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(87, 'Urban Deckow', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(88, 'Ms. Edna Rutherford Sr.', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(89, 'Krista Konopelski Sr.', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(90, 'Trever Bartell', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(91, 'Rudy Hessel', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(92, 'Ms. Celia Cronin MD', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(93, 'Leslie Zulauf', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(94, 'Dr. Eileen Hyatt MD', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(95, 'Dortha Hermiston', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(96, 'Manuel Swift', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(97, 'Elliott Hermiston', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(98, 'Mireya Mosciski', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(99, 'Clark Schulist', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(100, 'Dr. Kirsten Cartwright', '2023-10-16 17:56:58', '2023-10-16 17:56:58'),
(103, 'ntc', '2023-10-17 07:57:18', '2023-10-17 07:57:18'),
(105, 'nguyễn thành chung', '2023-10-17 08:05:15', '2023-10-17 08:05:15'),
(107, 'Phương Anh Bùi', '2023-10-17 19:48:42', '2023-10-17 19:48:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `author_id`, `title`, `created_at`, `updated_at`) VALUES
(101, 76, 'Dolore repellendus in eos atque.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(103, 80, 'Quasi vel alias minus et.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(104, 98, 'Placeat ut eum aut doloremque.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(106, 83, 'Dolorem id odit sequi adipisci accusamus.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(107, 97, 'Est repellat iusto ut.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(109, 77, 'Voluptatem qui ad et sint.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(110, 87, 'Harum sunt debitis nulla et rem.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(111, 59, 'Aut et hic blanditiis pariatur et.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(112, 75, 'Necessitatibus consequatur dolore explicabo aperiam.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(113, 61, 'Accusamus distinctio quo deleniti quas.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(114, 63, 'Aut quidem qui saepe rerum.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(115, 83, 'Hic qui quidem necessitatibus.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(116, 91, 'Consequatur ea iste id sed.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(117, 89, 'Qui iste blanditiis voluptatem laudantium consequatur.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(118, 58, 'Nulla quos iure modi et.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(120, 53, 'Fugiat eaque quia cumque.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(121, 95, 'Ullam nulla iusto repellat hic voluptas voluptatem.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(122, 93, 'Veritatis quia nam mollitia.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(123, 70, 'In non exercitationem numquam est officiis.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(124, 64, 'Fugiat necessitatibus corrupti est possimus non impedit.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(125, 95, 'Ad sed eum ipsam.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(126, 68, 'Odit dolores commodi quaerat vel fugit quibusdam.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(127, 89, 'Nihil quidem facere consequatur aliquid consequatur.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(129, 81, 'Natus ratione perspiciatis harum maxime aliquam veritatis.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(131, 67, 'Sint vero magni omnis vitae.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(132, 69, 'Vel labore tempora id.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(133, 51, 'Nesciunt laboriosam voluptas ullam.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(134, 67, 'Voluptates nihil cum nihil ut.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(135, 57, 'Autem ut sequi ullam dolore.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(136, 57, 'Occaecati laborum id fugiat.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(137, 51, 'Delectus dolor et ea sit quo tempore.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(138, 97, 'Itaque consequatur aut eius deserunt.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(139, 65, 'Quibusdam omnis ratione quidem voluptatem saepe.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(140, 51, 'Velit cupiditate nisi nobis sed suscipit fugit.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(141, 73, 'Et aperiam porro omnis molestias.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(142, 65, 'Ad et aperiam aperiam iure at.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(143, 64, 'Perspiciatis nam consequatur praesentium ad.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(144, 94, 'Et dolor veritatis commodi.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(145, 62, 'Quo ea nemo qui quidem.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(146, 54, 'Nisi eos enim autem expedita labore.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(148, 92, 'Nostrum rerum quia deleniti pariatur sed.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(149, 94, 'Distinctio earum odio quasi hic alias praesentium.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(150, 51, 'Incidunt a hic quae dolorem et.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(151, 61, 'Et est optio sed ut.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(152, 86, 'Est culpa quis voluptatem error similique numquam.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(153, 66, 'Nobis incidunt eos est repellat eaque.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(154, 53, 'Non reprehenderit nisi asperiores et.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(155, 62, 'Et nemo eos sunt.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(156, 85, 'Aspernatur ea illo fugit explicabo.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(157, 94, 'Animi sint aut expedita.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(158, 59, 'Vero libero non nihil sit non et.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(159, 80, 'Animi eum laborum veniam voluptatem tempore.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(160, 64, 'Ut ea ut quos.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(161, 57, 'Consectetur nulla praesentium impedit.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(162, 66, 'Est velit velit cupiditate sit consequatur.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(163, 92, 'Unde dolor est et similique blanditiis.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(164, 90, 'Pariatur architecto ut dolorum provident ea tenetur.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(165, 61, 'Molestiae dolor ut fugiat aut ipsa.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(166, 67, 'Voluptatem sit id est aut cumque hic.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(167, 100, 'Voluptas iure laborum aliquam quo ducimus.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(168, 88, 'Similique eos culpa nihil delectus voluptas.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(169, 89, 'Velit consequatur vero cum labore ut.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(170, 81, 'Doloremque eaque consectetur sed est.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(171, 85, 'Eaque culpa quos dolorum inventore enim blanditiis.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(172, 78, 'Est impedit vero quis ut molestias dolorem.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(173, 76, 'Voluptate incidunt assumenda quia consequatur officiis consequatur.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(174, 54, 'Amet error est officia omnis illum aspernatur.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(175, 79, 'In est nesciunt perspiciatis molestias voluptatum est.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(176, 96, 'Debitis ex dicta aliquam ipsum enim.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(177, 53, 'Sunt dolorem magni voluptatem laboriosam.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(178, 76, 'Quia voluptatibus veritatis fugiat praesentium exercitationem ut.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(179, 99, 'Aspernatur veniam accusantium perspiciatis libero.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(180, 90, 'Commodi at eum dolores quia.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(181, 97, 'Iste enim voluptate quae non.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(182, 66, 'Voluptas et sint provident non aliquid deserunt.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(183, 51, 'Libero corporis quo excepturi a quis et velit.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(184, 63, 'Debitis rem ducimus sapiente error eius omnis.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(185, 69, 'Vitae est nostrum voluptatem repudiandae culpa.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(186, 87, 'Aut consequuntur quasi non nihil voluptas ut.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(187, 56, 'Quaerat voluptatem ut ut et distinctio vel.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(188, 66, 'Cum dolores veritatis culpa.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(189, 73, 'Quidem adipisci est cumque laboriosam sequi consequuntur.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(190, 83, 'Rerum consectetur itaque quis.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(191, 80, 'Sint id inventore numquam enim officia.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(192, 71, 'Assumenda eos quis fugiat autem dignissimos maiores.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(193, 87, 'Voluptatem soluta dolorem vel tempora ut eaque.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(194, 94, 'Soluta voluptas ut omnis vero non sint.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(195, 88, 'Repellat enim ut distinctio quae totam.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(196, 57, 'Consectetur officia ipsum illum.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(197, 79, 'Eaque qui sunt quo rerum ut eveniet.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(198, 78, 'Nihil a velit quasi quia tempore eligendi.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(199, 68, 'Repellat et voluptate vitae.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(200, 85, 'Omnis commodi velit in ut aliquid eos.', '2023-10-16 17:57:07', '2023-10-16 17:57:07'),
(202, 51, 'hhhuhahohehyhe', '2023-10-17 09:14:54', '2023-10-17 09:14:54'),
(203, 56, 'Khánh píu nè he he', '2023-10-17 19:18:16', '2023-10-17 19:18:16');

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
(5, '2023_10_17_002203_create_authors_table', 1),
(6, '2023_10_17_002450_create_books_table', 1);

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
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
