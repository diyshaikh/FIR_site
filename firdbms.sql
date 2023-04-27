-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 01:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `criminal_data` (
  `Criminal_Name` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Criminal_FIR` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Crime` varchar(100) NOT NULL,
  `IPC_app` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `victim_data` (
  `Name` varchar(100) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `Victim_FIR` varchar(100) NOT NULL,
  `Statement` varchar(100) NOT NULL,
  `District` varchar(12) NOT NULL,
  `UID` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `criminal_data`
  ADD UNIQUE KEY (`Criminal_FIR`);

-- --
-- -- Indexes for table `message`
-- --
-- ALTER TABLE `victim_data`
--   ADD UNIQUE KEY (`Criminal_FIR`);

-- --
-- -- Indexes for table `orders`
-- --
-- ALTER TABLE `orders`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `products`
-- --
-- ALTER TABLE `products`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- Indexes for table `users`
-- --
-- ALTER TABLE `users`
--   ADD PRIMARY KEY (`id`);

-- --
-- -- AUTO_INCREMENT for dumped tables
-- --

-- --
-- -- AUTO_INCREMENT for table `cart`
-- --
-- ALTER TABLE `cart`
--   MODIFY `id` varchar(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

-- --
-- -- AUTO_INCREMENT for table `message`
-- --
-- ALTER TABLE `message`
--   MODIFY `id` varchar(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

-- --
-- -- AUTO_INCREMENT for table `orders`
-- --
-- ALTER TABLE `orders`
--   MODIFY `id` varchar(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

-- --
-- -- AUTO_INCREMENT for table `products`
-- --
-- ALTER TABLE `products`
--   MODIFY `id` varchar(100) NOT NULL AUTO_INCREMENT;

-- --
-- -- AUTO_INCREMENT for table `users`
-- --
-- ALTER TABLE `users`
--   MODIFY `id` varchar(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
-- COMMIT;

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
