-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 07:15 AM
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
-- Database: `minorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `external_id` int(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role`, `qualification`, `stream`, `external_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aalim', 'samad@gmail.com', '', '123', '', 'bca', 'cs', 2, '2023-10-21 08:38:48', '2023-10-24 09:53:46', NULL),
(2, 'Samad', 'samad@gmail.com', '', '$2y$10$59HT87PtbVnEwvA/KfXjVeqMnUQcsWTKIPzuG.JrQwaXl25mTo5Oe', '', 'B.TECH', 'ELECTRONICS', 29158, '2023-10-21 08:49:07', '2023-10-21 08:49:07', NULL),
(4, 'abc', 'abc@gmail.com', '1234567890', '$2y$10$ZmIhMeeRgR6px6w9O208V.8DfGiZaRD0VCyF5gvjNcq1SyYjf56uS', 'user', 'B Tech', 'CS', NULL, '2023-11-01 05:03:21', '2023-11-01 05:03:21', NULL),
(5, 'abc', 'abc@gmail.com', '1234567890', '$2y$10$SOLVwkMCRj7Fx8sbrvn...pkL2BiiW3vAnPc9kADnSn0uNz/QXC/2', 'user', 'B Tech', 'CS', NULL, '2023-11-01 05:09:56', '2023-11-01 05:09:56', NULL),
(6, 'abc', 'abc@gmail.com', '1234567890', '$2y$10$zPSQAemuIQ2bbubu1Ef1aO2dFjxNdjrwDnX.ie6JG7W88CxUKuftW', 'user', 'B Tech', 'CS', NULL, '2023-11-01 05:10:14', '2023-11-01 05:10:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
