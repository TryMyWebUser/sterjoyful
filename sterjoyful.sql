-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 01:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sterjoyful`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'sterjoyful', 'sterjoyful@gmail.com', 'ster@2025', '2025-04-02 14:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `price` varchar(100) NOT NULL,
  `subprice` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `img`, `price`, `subprice`, `created_at`) VALUES
(6, 'Boom Lift Machine', '../uploads/Products/boom lift Machine.jpeg', '0', '0', '2025-04-02 16:09:23'),
(7, 'Tamping Rammer', '../uploads/Products/Tamping Rammer.jpeg', '0', '0', '2025-04-02 16:10:05'),
(8, 'Aluminium Wheel Scaffolding', '../uploads/Products/Aluminium Wheel Scaffolding.jpeg', '0', '0', '2025-04-02 16:10:28'),
(9, 'Adjustable Aluminium Ladder', '../uploads/Products/Adjustable Aluminium Ladder.jpeg', '0', '0', '2025-04-02 16:10:47'),
(10, 'Adjustable Props', '../uploads/Products/Adjustable Props.jpeg', '0', '0', '2025-04-02 16:11:03'),
(11, 'Centering Sheet', '../uploads/Products/Centering Sheet.jpeg', '0', '0', '2025-04-02 16:11:25'),
(12, 'Chain Block', '../uploads/Products/Chain Block.jpeg', '0', '0', '2025-04-02 16:11:41'),
(13, 'Adjustable Span', '../uploads/Products/Adjustable Span.jpeg', '0', '0', '2025-04-02 16:11:58'),
(14, 'Generator', '../uploads/Products/Generator.jpeg', '0', '0', '2025-04-02 16:12:20'),
(15, 'Movable Aluminium Ladder', '../uploads/Products/Movable Aluminium Ladder.jpeg', '0', '0', '2025-04-02 16:12:33'),
(16, 'Column Box', '../uploads/Products/Column Box.jpeg', '0', '0', '2025-04-02 16:12:46'),
(17, 'Air Compressor', '../uploads/Products/Air Compressor.jpeg', '0', '0', '2025-04-02 16:13:00'),
(18, 'Welding Machine', '../uploads/Products/Welding Machine.jpeg', '0', '0', '2025-04-02 16:13:16'),
(19, 'Screw Compressor', '../uploads/Products/Screw Compressor.jpeg', '0', '0', '2025-04-02 16:13:33'),
(20, 'Earth Rammer', '../uploads/Products/Earth Rammer.jpeg', '0', '0', '2025-04-02 16:13:57'),
(21, 'Wheel Barrow', '../uploads/Products/Wheel Barrow.jpeg', '0', '0', '2025-04-02 16:14:11'),
(22, 'Cuplock Scaffolding', '../uploads/Products/Cuplock Scaffolding.jpeg', '0', '0', '2025-04-02 16:14:26'),
(23, 'Staircase Steps Scaffolding', '../uploads/Products/Staircase Steps Scaffolding.jpeg', '0', '0', '2025-04-02 16:14:43'),
(24, 'Platform Jali', '../uploads/Products/Platform Jali.jpeg', '0', '0', '2025-04-02 16:18:02'),
(25, 'Scissor Lift', '../uploads/Products/Scissor Lift.jpeg', '0', '0', '2025-04-02 16:18:17'),
(26, 'Concrete Vibrating Machine', '../uploads/Products/Concrete Vibrating Machine.jpeg', '0', '0', '2025-04-02 16:18:31'),
(27, 'Concrete Mixer Machine', '../uploads/Products/Concrete Mixer Machine.jpeg', '0', '0', '2025-04-02 16:18:48'),
(28, 'Vacuum Cleaner', '../uploads/Products/Vacuum Cleaner.jpeg', '0', '0', '2025-04-02 16:19:11'),
(29, 'Cutt Of Machine', '../uploads/Products/Cutt Of Machine.jpeg', '0', '0', '2025-04-02 16:19:26'),
(30, 'Mini Hoist Lift', '../uploads/Products/Mini Hoist Lift.jpeg', '0', '0', '2025-04-02 16:19:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
