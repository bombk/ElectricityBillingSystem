-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 07:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebillsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `amps`
--

CREATE TABLE `amps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amp_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amps`
--

INSERT INTO `amps` (`id`, `amp_id`) VALUES
(1, '5 Amp'),
(2, '15 Amp'),
(3, '30 Amp'),
(4, '60 Amp');

-- --------------------------------------------------------

--
-- Table structure for table `amp_details`
--

CREATE TABLE `amp_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amp_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minamt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `energyrate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amp_details`
--

INSERT INTO `amp_details` (`id`, `amp_id`, `range`, `minamt`, `energyrate`) VALUES
(1, '1', '0-10', '30', '0'),
(2, '1', '11-20', '30', '3'),
(3, '1', '21-30', '50', '6.5'),
(4, '1', '31-50', '50', '8'),
(5, '1', '51-100', '75', '9.5'),
(6, '1', '101-150', '100', '9.5'),
(7, '1', '151-250', '125', '10'),
(8, '1', '251-400', '150', '11'),
(9, '1', '401 Above', '175', '12'),
(10, '2', '0-10', '50', '4'),
(11, '2', '11-20', '50', '4'),
(12, '2', '21-30', '75', '6.5'),
(13, '2', '31-50', '75', '8'),
(14, '2', '51-100', '100', '9.5'),
(15, '2', '101-150', '125', '9.5'),
(16, '2', '151-250', '150', '10'),
(17, '2', '251-400', '175', '11'),
(18, '2', '401 Above', '200', '12'),
(19, '3', '0-10', '75', '5'),
(20, '3', '11-20', '75', '5'),
(21, '3', '21-30', '100', '6.5'),
(22, '3', '31-50', '100', '8'),
(23, '3', '51-100', '125', '9.5'),
(24, '3', '101-150', '150', '9.5'),
(25, '3', '151-250', '175', '10'),
(26, '3', '251-400', '200', '11'),
(27, '3', '401 Above', '225', '12'),
(28, '4', '0-10', '125', '6'),
(29, '4', '11-20', '125', '6'),
(30, '4', '21-30', '125', '6.5'),
(31, '4', '31-50', '125', '8'),
(32, '4', '51-100', '150', '9.5'),
(33, '4', '101-150', '200', '9.5'),
(34, '4', '151-250', '200', '10'),
(35, '4', '251-400', '250', '11'),
(36, '4', '401 Above', '275', '12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2021_04_05_041658_create_amps_table', 1),
(3, '2021_04_05_041839_create_amp_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(3, 'Ram', 'ram@gmail.com', 'eyJpdiI6IjIwbDZMcHk0QmtDak1CRFFrdWxuMVE9PSIsInZhbHVlIjoiN1M0VnB0Wnd4Z1graHNzWFJnRmkyUT09IiwibWFjIjoiZWQwMzY1YzVkMWE4ZmUxNGM5OWI2ODk1NjUwZWEwOWM5MTU0ZDU3OTU5M2VjMjZlNjY5OTZmYmRmOGRlMWFjNCJ9', '2021-04-05 17:59:23', '2021-04-05 17:59:23'),
(4, 'bom', 'bomncit@gmail.com', 'eyJpdiI6ImhpWU1SVEc3YWRYMzQ1QkRPRmFCN0E9PSIsInZhbHVlIjoiRG95OEdLN3VmRWZ2K2l5R1VYdjhTQT09IiwibWFjIjoiZmQyY2Q5ZDc3YTdiYzY2NWNlMmUzMzA4NzJhZDA4YmFlMWI2ZTJiYjQ5ODIxMTlkZGRiZGU2ODMzODgwMDI3MCJ9', '2021-04-05 18:07:08', '2021-04-05 18:07:08'),
(5, 'hari', 'hari@gmail.com', 'eyJpdiI6Ijl3MzM5RkQ5Y0d2WnYxVGIzbVFCaXc9PSIsInZhbHVlIjoiajZIWWFrcHBuVTBCS2RtWHp6ck02Zz09IiwibWFjIjoiYzNiNGZiNTgxNTRkZTc2NGEwYzlhZGZhOWFlNmY3NzI0ZDMyZGZjZWNlODVkNmEyODhmYjUxNGViMjBhYzJkNiJ9', '2021-04-06 04:54:44', '2021-04-06 04:54:44'),
(6, 'bindu', 'bindu@gmail.com', 'eyJpdiI6ImxqYnl6ZkFSODJsTXpzc044SDl5a2c9PSIsInZhbHVlIjoiUGJOTHNXQTU0cXEyOENMR0czNmNFZz09IiwibWFjIjoiYTcxN2VhMzRkOGYyNjcyNmY5NzQ0ZDkxMzVhODk2ODdjZDdjYjgwYjAwZWNlZTJmZjVmNzBhNjUwMzRmY2E5OCJ9', '2021-04-06 04:57:30', '2021-04-06 04:57:30'),
(8, 'gita', 'gita@gmail.com', 'eyJpdiI6ImlZbkd1Z3p3NG5yRzQzQUtLTy9oYkE9PSIsInZhbHVlIjoiMDU2U2ZwRkdGeHEwQmYwTUhWdlBxZz09IiwibWFjIjoiNzY5ZmJiNGVmNjk3MmFlMWYzMmM0OTdmYWUxMzc1MmJlM2MxNTk0Y2M4ZDRmY2Y2MTY4NmMxMzRlMTMwNmUwNSJ9', '2021-04-06 05:39:12', '2021-04-06 05:39:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amps`
--
ALTER TABLE `amps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amp_details`
--
ALTER TABLE `amp_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `amps`
--
ALTER TABLE `amps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `amp_details`
--
ALTER TABLE `amp_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
