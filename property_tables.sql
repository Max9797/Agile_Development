-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 08:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `property_tables`
--

CREATE TABLE `property_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_pref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `electricity_water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buildup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `furnishing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amenities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facilities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Occupants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_tables`
--

INSERT INTO `property_tables` (`id`, `name`, `gender_pref`, `available_bed`, `total_bed`, `address`, `city`, `price`, `electricity_water`, `contact`, `email`, `distance`, `buildup`, `bathrooms`, `furnishing`, `amenities`, `facilities`, `Occupants`, `image`, `created_at`, `updated_at`) VALUES
(4, 'SOmething', 'Male', '2', '3', '10, something street, New York', 'Nilai', '200', 'Not Included', '23245679', 'danieltws0@gmail.com', '3', '2100', '2', 'Semi-furnished', 'non', 'non', 'non', '1582854527.jpg', '2020-02-12 00:44:46', '2020-02-27 17:48:47'),
(6, 'Golden', 'Male', '6', '6', 'Jalan', 'Georgetown', '350', 'Included', '0123456789', 'donnytan_evo@yahoo.com', '4', '1200', '2', 'Unfurnished', 'non', 'non', 'non', '', '2020-02-13 19:34:35', '2020-02-28 18:36:12'),
(8, 'Arena Residence', 'Female', '4', '5', 'Jalan Mahsuri, Bandar Sunway Tunas, 11900 Bayan Lepas, Pulau Pinang', 'Georgetown', '350', 'Not Included', '0123456789', 'extream_daniel@hotmail.com', '3.5', '1300', '2', 'Fully furnished', 'non', 'non', 'non', '1581655025.jpg', '2020-02-13 20:37:05', '2020-02-13 20:37:05'),
(11, 'Elite Heights', 'Female', '6', '7', '10, something street, New York', 'Subang', '700', 'Not Included', '0123456789', 'donnytan_evo@yahoo.com', '3.5', '900', '2', 'Fully furnished', 'non', 'non', 'non', '1582950390.jpg', '2020-02-28 18:38:34', '2020-02-29 00:50:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property_tables`
--
ALTER TABLE `property_tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property_tables`
--
ALTER TABLE `property_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
