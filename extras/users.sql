-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 05:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_laravel`
--

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Olivia Lestari', 'elisa.anggraini@example.net', '2024-10-14 01:27:03', '$2y$12$NZwWG.QQipEvQeexDSxCFe8UWDSQTisnC68ufRTC0KA3c6HS8UjQS', 'Qyu3OwWh1W', '2024-10-14 01:27:03', '2024-10-14 01:27:03'),
(2, 'Cici Hastuti S.I.Kom', 'ira26@example.org', '2024-10-14 01:27:03', '$2y$12$NZwWG.QQipEvQeexDSxCFe8UWDSQTisnC68ufRTC0KA3c6HS8UjQS', 'rf2n7x8wtC', '2024-10-14 01:27:03', '2024-10-14 01:27:03'),
(3, 'Genta Padmasari', 'mardhiyah.rahmi@example.net', '2024-10-14 01:27:03', '$2y$12$NZwWG.QQipEvQeexDSxCFe8UWDSQTisnC68ufRTC0KA3c6HS8UjQS', 'RSw6qRmP9W', '2024-10-14 01:27:03', '2024-10-14 01:27:03'),
(4, 'William Devans', 'blue88dynamixx@gmail.com', NULL, '$2y$12$nhQdo7yQar2GpV.qVXHqh.sbB6aY4qlJNuoFtXDk8fh4RXpgFfKKK', NULL, '2024-10-15 00:37:21', '2024-10-15 00:37:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
