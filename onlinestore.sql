-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 03:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_details_id`, `order_id`, `product_id`, `item_name`, `price`, `qty`) VALUES
(49, 0, 4, 'Black T-shirt', 332, 1),
(50, 10, 4, 'Black T-shirt', 332, 1),
(52, 0, 3, 'blue Sweater', 700, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_no` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `Full_Name`, `Phone_no`, `Address`) VALUES
(0, 6, 'honey', 42798, 'shoubra'),
(0, 6, 'honey', 42798, 'shoubra'),
(0, 6, 'honey', 42798, 'shoubra'),
(0, 10, 'nada', 42798, 'shoubra');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `Description` text NOT NULL DEFAULT 'Lorem ipsum dolor sit amet consectetur adipisicing elit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `Description`) VALUES
(2, 'Red dress', 400, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOrwPA5qye0Ltw5Tuaqt00YRgQ0Cy_nM6tbA&usqp=CAU', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla '),
(3, 'blue Sweater', 700, 'https://spng.pngfind.com/pngs/s/197-1976459_24-small-aesthetic-blue-clothes-png-transparent-png.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit'),
(4, 'Black T-shirt', 332, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnBsdyAUyalq5vOI-v3ScqlrnWdsPwZZj8kg&usqp=CAU', 'Lorem ipsum dolor sit amet consectetur adipisicing elit'),
(5, 'Blue denim shirt', 100, 'https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit'),
(6, 'Red hoodie', 240, 'https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`order_id`, `user_id`) VALUES
(0, 10),
(10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `user_type` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `email`, `created_at`, `user_type`) VALUES
(2, 'nada', '$2y$10$EbP2I2g1./l/25LzK0Vvv.OGsjkfovEYIR830qiIVmg', 'nada@gmail.com', '2021-08-22 07:51:45', 'user'),
(3, 'mohab', '$2y$10$e2Dz9kP7GD5G77k2ii3x3./xhENtVhlPEnpYjrBiw7k', 'mohab@gmail.com', '2021-08-22 07:56:11', 'user'),
(4, 'mona', '$2y$10$EYIDxecYrsL5a6xDm10cNeOVjLamnrijHjc.67A5yQi', 'mona@gmail.com', '2021-08-22 08:11:02', 'user'),
(5, 'arwa', '$2y$10$Z6p18kT.VAjl1HpZWv9poOs78TlZBVOjw3wJKi9dyvs', 'arwa@gmail.com', '2021-08-22 17:33:33', 'user'),
(6, 'honey', '123456', 'honey@gmail.com', '2021-08-22 18:31:53', 'user'),
(7, 'Admin ', 'admin123', 'admin@gmail.com ', '2021-08-22 19:51:45', 'admin '),
(9, 'ali', '123456', 'ali@gmail.com', '2021-08-26 01:59:44', 'user'),
(10, 'nada', '123456', 'nado@gmail.com', '2021-08-26 03:25:43', 'user'),
(11, 'user', '123456', 'user@gmail.com', '2021-08-26 03:29:39', 'user'),
(12, 'user2', '123456', 'user2@gmail.com', '2021-08-26 03:32:27', 'user'),
(13, 'user3', '123456', 'user3@gmail.com', '2021-08-26 17:12:37', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `product_id`, `item_name`, `price`, `qty`) VALUES
(0, 3, 'blue Sweater', 700, 2),
(0, 4, 'Black T-shirt', 332, 1),
(10, 4, 'Black T-shirt', 332, 4),
(10, 5, 'Blue denim shirt', 100, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_details_id`),
  ADD UNIQUE KEY `order_id` (`order_id`,`product_id`),
  ADD UNIQUE KEY `order_id_2` (`order_id`,`product_id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD UNIQUE KEY `order_id` (`order_id`,`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
