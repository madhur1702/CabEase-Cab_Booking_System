-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2025 at 02:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `pickup` varchar(100) DEFAULT NULL,
  `dropoff` varchar(100) DEFAULT NULL,
  `status` enum('pending','accepted','completed','cancelled') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `user_id`, `driver_id`, `pickup`, `dropoff`, `status`) VALUES
(1, 1, 2, 'dhule', 'pune', 'completed'),
(2, 3, 2, 'dhule', 'pune', 'cancelled'),
(3, 1, 2, 'dhule', 'jalgaon', 'completed'),
(4, 1, 4, 'dhule', 'pune', 'completed'),
(5, 1, 2, 'dhule', 'pune', 'completed'),
(6, 1, 2, 'a', 'b', 'cancelled'),
(7, 1, 2, 'a', 'b', 'completed'),
(8, 1, 2, 'a', 'b', 'cancelled'),
(9, 1, 2, 'a', 'b', 'cancelled'),
(10, 1, 2, 'a', 'b', 'completed'),
(11, 1, 2, 'dhule', 'pune', 'completed'),
(12, 1, 2, 'dhule', 'pune', 'completed'),
(13, 3, 2, 'dhule', 'pune', 'completed'),
(14, 1, 2, 'dhule', 'b', 'cancelled'),
(15, 1, 5, 'Electronic City', 'MG Road', 'completed'),
(16, 1, 2, 'MG Road', 'Brigade Road', 'completed'),
(17, 1, 2, 'MG Road', 'Whitefield', 'cancelled'),
(18, 1, 2, 'Brigade Road', 'Whitefield', 'completed'),
(19, 1, 2, 'Brigade Road', 'Electronic City', 'completed'),
(20, 6, 2, 'MG Road', 'Electronic City', 'completed'),
(21, 1, 2, 'MG Road', 'Brigade Road', 'completed'),
(22, 1, 2, 'MG Road', 'Koramangala', 'completed'),
(23, 1, 2, 'MG Road', 'Whitefield', 'completed'),
(24, 1, 2, 'MG Road', 'Hebbal', 'completed'),
(25, 1, 2, 'MG Road', 'MG Road', 'completed'),
(26, 1, NULL, 'MG Road', 'Brigade Road', 'cancelled'),
(27, 1, NULL, 'Koramangala', 'Electronic City', 'cancelled'),
(28, 1, 2, 'MG Road', 'HSR Layout', 'cancelled'),
(29, 1, NULL, 'MG Road', 'Brigade Road', 'cancelled'),
(30, 1, 2, 'Koramangala', 'Whitefield', 'completed'),
(31, 1, NULL, 'MG Road', 'Koramangala', 'cancelled'),
(32, 1, NULL, 'Brigade Road', 'Indiranagar', 'cancelled'),
(33, 1, 2, 'Koramangala', 'Indiranagar', 'completed'),
(34, 1, NULL, 'Whitefield', 'Hebbal', 'cancelled'),
(35, 1, NULL, 'dhule', 'pune', 'cancelled'),
(36, 1, NULL, 'Brigade Road', 'Whitefield', 'cancelled'),
(37, 1, NULL, 'MG Road', 'Whitefield', 'cancelled'),
(38, 1, 2, 'Brigade Road', 'Koramangala', 'cancelled'),
(39, 8, 9, 'Brigade Road', 'Hebbal', 'completed'),
(40, 1, 9, 'deopur', 'old dhule', 'completed'),
(41, 1, 9, 'Awadhan', 'Songir', 'cancelled'),
(42, 1, 9, 'Deopur', 'Awadhan', 'completed'),
(43, 11, NULL, 'Deopur', 'shir', 'cancelled'),
(44, 12, 10, 'Deopur', 'shirpur', 'cancelled'),
(45, 12, 10, 'Deopur', 'Ram Nagar', 'completed'),
(46, 1, 10, 'Old Dhule', 'Shirpur', 'completed'),
(47, 14, 10, 'Awadhan', 'Deopur', 'cancelled'),
(48, 1, 10, 'Deopur', 'Shirpur', 'completed'),
(49, 15, 10, 'Deopur', 'Ramchandra Nagar', 'cancelled'),
(50, 16, 10, 'Dhule', 'Pune', 'completed'),
(51, 12, 10, 'Deopur', 'Mahindale', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('customer','driver') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'virat kolhi', 'virat@gmail.com', '$2y$10$hyafxE3CfPusbd9RP.I9/.044oPXaWAhNc/UliTazX.VW9j961Gbu', 'customer'),
(2, 'v kolhi', 'v@gmail.com', '$2y$10$mq9cELKCLrZeSuIdQ3/n5O/rzNtoPBGuZ48.6jKQlAoC5t2.bErk2', 'driver'),
(3, 'Rohit Sharma', 'rohit@gmail.com', '$2y$10$oMqmVlYUTtC92nLDn7Jvje.fNtNIi4a7Q1yBSuz.wJdorIgsIhT2O', 'customer'),
(4, 'r sharma', 'r@gmail.com', '$2y$10$HvNwQu10lgNz3cvfaRv/PuUugyxIY9paNVMiIAE8cKrMFhVZsOIcS', 'driver'),
(5, 'msdhoni', 'dhoni@gmail.com', '$2y$10$S4F/41UWXpKI1tiYhIElwuyYPtABz.byGcCAmk56yP2MYD6.W4Am6', 'driver'),
(6, 'nakul shimpi', 'nakul@gmail.com', '$2y$10$W8EGFntMk3kwKuNIMGm76.Y.Vg.AtUYa64TXGf4mPGkD7YkJ1Bp8m', 'customer'),
(7, 'Rohit Sharma', '123@gmail.com', '$2y$10$8NH99HY/vYowRQvMdR4RXuOcUCrp5yvmFTLpbmAB4sl83p5Q2Gof6', 'driver'),
(8, 'Ravindra Jadeja', 'ravindra@gmail.com', '$2y$10$6Mxk/uED9eDyYwUOXI3lguq/A4PTUAs0ZOcyNjhsaqjHFBc.hE7wq', 'customer'),
(9, 'Jasprit Bumrah', 'bumrah@gmail.com', '$2y$10$7PVDdPdR/nN7RxA.wn2UpOyW6TzFVB9UGHrxBBfxjbuIGcw7HgEbm', 'driver'),
(10, 'Lalit Joshi', 'Lalit@gmail.com', '$2y$10$36DL./T/PoIz4uqpSqolWO4GAiSTejGMXJ4x7kp7Tu84MjQIgCLJO', 'driver'),
(11, 'Parth Bhandari', 'parth@gmail.com', '$2y$10$JA98lbo2HsQycfI3aaalee2DXf8zX/bx5cJNBxKqmlN3LUaciqWvO', 'customer'),
(12, 'Devansh Patel', 'devansh@gmail.com', '$2y$10$U0p98N9eNPxQUBq2mBRagOqNvEYgWYGZmXM5Nwr87..g8MPrfpFvO', 'customer'),
(13, 'Harshal Patel', 'harshu@gmail.com', '$2y$10$Pc/UxgxkHmfy.iUX2Tm2ou4Y.E8WQE7vnL1t/1IkIdjYe.q7DeVAO', 'customer'),
(14, 'virat', 'virat12@gmail.com', '$2y$10$GYRsrIbPKS/h42/0lOaArexrR0ND07BwvKXJL4.V3/8rw/tLIQO7m', 'customer'),
(15, 'Atharv', 'dhage@gmail.com', '$2y$10$TF3z72nymiZXlv4tA3a/deg4wqD3ByBc/jk7be1sWM0pgvTt.bJMC', 'customer'),
(16, 'Yog', 'yog@gmail.com', '$2y$10$HI.yUXg/03mAJiouCouijeMqefRU6tu1vszbtkaUxQDOYtx/npWuu', 'customer'),
(17, 'Yoyo', 'yo@gmail.com', '$2y$10$r3e0/39RpI18HSDifKum9O74wDdvKguCkmf7z4X4uYezLVjfE7/YW', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rides`
--
ALTER TABLE `rides`
  ADD CONSTRAINT `rides_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `rides_ibfk_2` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
