-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 04:05 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linked_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pass` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_job` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isS3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_user_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`, `isS3`) VALUES
(1, 'psychoDev', 'Robin', 'psychoDev@gmail.com', '$2y$10$FYzM6yRs38nl3B9UjuT3o.pgyKYW7bu1FJWRUvZ.S4lziAr2weaV.', '20210611_185251.jpg', '3131313131', 'NIGiria', 'fjlfjl', 'fjfljl', 0);

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) NOT NULL,
  `site_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_www` int(10) NOT NULL,
  `site_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_favicon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_email_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_copyright` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinymce_api_key` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_title`, `site_www`, `site_name`, `site_favicon`, `site_logo_text`, `site_logo_image`, `site_logo`, `site_keywords`, `site_author`, `site_url`, `site_email_address`, `site_copyright`, `site_timezone`, `tinymce_api_key`) VALUES
(1, 'linked-auto', 1, 'linked-auto', 'logo.png', '', 'logo(2).png', 'logo.png', 'writer,freelancers', '', 'http://localhost/linked-auto', 'adewalejoel70@gmail.com', 'cravinkminds', 'America/Chicago', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` int(2) NOT NULL DEFAULT 0 COMMENT '1:admin,0:user',
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_img` varchar(500) NOT NULL DEFAULT 'default.png',
  `company_name` varchar(255) NOT NULL,
  `password` varchar(400) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0:inactive,1:active',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0:deleted,1:undeleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `first_name`, `last_name`, `email`, `profile_img`, `company_name`, `password`, `status`, `created`, `modified`, `is_deleted`) VALUES
(1, 1, 'Singh', 'Robin', 'rr@gmail.com', 'cravinkminds - D.png', 'this', '$2y$10$psvmEIKDsrU56sxTuwopoeAJTLXLQfZQOcUCFaxKDTjGW3zqWjc3u', 0, '2021-11-19 15:40:10', '2021-11-19 15:40:10', 1),
(2, 0, 'c', 'c', 'rccr@gmail.com', 'default.png', 'c', '$2y$10$taFqv.BghZVqjXZvW/MfYO/eDW.vN6Zp1HWBVnrlIaTX95N1Lfg/6', 0, '2021-11-19 15:41:28', '2021-11-19 15:41:28', 1),
(3, 0, 'kumar', 'Robin', 'rrccc@gmail.com', 'default.png', 'Flytech', '$2y$10$oUPYzzQbJJ9AfvjCvkspw.IfUAU9F4BExGX6nyr7c0JU10uTFQ.jO', 0, '2021-11-19 15:44:09', '2021-11-19 15:44:09', 1),
(4, 0, 'kumar', 'kumar', 'ss@gmail.com', 'default.png', 'RB', '$2y$10$kaXtItk2WZ3CRp4DR.cln.N4elp8PG9uznyDDzqVDz.WnTEkXU6O2', 0, '2021-11-19 16:38:39', '2021-11-19 16:38:39', 1),
(5, 0, 'kumar', 'Robin', 'p@gmail.com', 'default.png', 'ddd', '$2y$10$OGdboVm3EprLIlURMif8bu8HvuzVtD97VtBTZXG.AL/ji0UdSx8Hi', 0, '2021-11-19 16:42:03', '2021-11-19 16:42:03', 1),
(6, 0, 'g', 'Robin', 'g@gmail.com', 'default.png', 'g', '$2y$10$g6FvDep3kJahtctEoZ0qi.vU7XZnX.e9.f5X6xLdzvUtlsRJHxK0q', 0, '2021-11-19 16:43:14', '2021-11-19 16:43:14', 1),
(7, 0, 'user', 'us', 'user@gmail.com', 'gear-gaa73fa637_1280.png', 'FLOWUp', '$2y$10$psvmEIKDsrU56sxTuwopoeAJTLXLQfZQOcUCFaxKDTjGW3zqWjc3u', 0, '2021-11-19 23:25:55', '2021-11-19 23:25:55', 1),
(8, 0, 'kumar', 'kumar', 'robin@gmail.com', 'default.png', 'Flytech', '$2y$10$ZR2rHDd6PWyadmqOv57Yau/vAohLKOb/ordOtZ2NyIVtkbjcApRKS', 0, '2021-11-25 20:24:50', '2021-11-25 20:24:50', 1),
(9, 0, 'sfsf', 'dfsdf', 'dfff@gmail.com', 'default.png', 'fdfd', '$2y$10$gUddyeq9KqQ2fuHNoemk/ec.83FwEBoh4BI2secL1WvPsPTnmqvHe', 0, '2021-11-25 20:26:15', '2021-11-25 20:26:15', 1),
(10, 0, 'dfdf', 'dfd', 'ffdfsdfaf@gmail.com', 'default.png', 'dfdf', '$2y$10$203VqVwpaWmRUVWLNGHECecysTWPoCXCxIRf9SXsZBKONBFSXs8Nu', 0, '2021-11-25 20:27:22', '2021-11-25 20:27:22', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
