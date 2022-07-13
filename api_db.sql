-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 09:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_d_b_s`
--

CREATE TABLE `api_d_b_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emission_date` timestamp NOT NULL DEFAULT '2022-07-07 20:00:00',
  `last_cycle_date` timestamp NOT NULL DEFAULT '2023-07-07 20:00:00',
  `nominal_value` double(8,2) NOT NULL,
  `pay_period` int(11) NOT NULL,
  `per_period` int(11) NOT NULL,
  `per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `api_d_b_s`
--

INSERT INTO `api_d_b_s` (`id`, `emission_date`, `last_cycle_date`, `nominal_value`, `pay_period`, `per_period`, `per`) VALUES
(1, '2022-07-07 20:00:00', '2023-07-07 20:00:00', 45.00, 1, 360, 57),
(2, '2022-07-07 20:00:00', '2023-07-07 20:00:00', 85.00, 2, 364, 74),
(3, '2022-07-07 20:00:00', '2023-07-07 20:00:00', 123.00, 4, 364, 42),
(4, '2022-07-07 20:00:00', '2023-07-07 20:00:00', 142.00, 12, 365, 81);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_d_b_s`
--
ALTER TABLE `api_d_b_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_d_b_s`
--
ALTER TABLE `api_d_b_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
