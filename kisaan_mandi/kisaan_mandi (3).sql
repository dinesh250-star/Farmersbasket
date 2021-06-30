-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 12:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kisaan_mandi`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_location` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_units` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_status` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image`, `product_name`, `product_category`, `product_location`, `product_price`, `product_units`, `product_description`, `product_status`, `seller_id`) VALUES
(78, 'nutsalmonds.jpg', 'kaju', 'nutsalmonds', 'kolhapur', 200, '100gms', 'Fresh.', 'approved', 41),
(79, 'fruits.jpg', 'Banana', 'fruits', 'kolhapur', 100, '1 dozen', 'Nice and fresh.', 'approved', 41),
(80, 'fruits.jpg', 'kiwi', 'fruits', 'kolhapur', 400, '1 kilogram', 'Juicy and fresh.', 'approved', 41),
(82, 'dairyproducts.jpg', 'Cheese', 'dairyproducts', 'nagpur', 200, '10 cubes', 'Frozen', 'approved', 42),
(83, 'dairyproducts.jpg', 'milk', 'dairyproducts', 'pune', 50, '1 litre', 'frozen\r\n', 'approved', 42),
(84, 'vegetables.jpg', 'Brocolli', 'vegetables', 'kolhapur', 200, '1 kilogram', 'Fresh', 'approved', 42),
(89, 'grains.jpg', 'Wheat', 'grains', 'pune', 1000, '3 kilogram', 'Fresh', 'approved', 44),
(91, 'nutsalmonds.jpg', 'Pista', 'nutsalmonds', 'kolhapur', 1000, '1 kilogram', 'nice', 'approved', 44),
(92, 'grains.jpg', 'Rice', 'grains', 'thane', 100, '1 kilogram', 'nice', 'approved', 44),
(93, 'fruits.jpg', 'Mango', 'fruits', 'nagpur', 200, '12 pcs', 'Fresh\r\n', 'approved', 45),
(94, 'fruits.jpg', 'Orange', 'fruits', 'pune', 100, '1 Kilogram', 'noce', 'approved', 45),
(95, 'fruits.jpg', 'Chickoo', 'fruits', 'kolhapur', 200, '1 Kilogram', 'nice', 'approved', 45),
(96, 'fruits.jpg', 'Pineapple', 'fruits', 'nashik', 700, '1.5 kg', 'n', 'approved', 45),
(97, 'fruits.jpg', 'Pappaya', 'fruits', 'nagpur', 100, '200 grams', 'v', 'approved', 45),
(98, 'fruits.jpg', 'Mango', 'fruits', 'nagpur', 20, '12 dozen', 'Sabko mere tarah se free.', 'approved', 44),
(100, 'nutsalmonds.jpg', 'kaju', 'nutsalmonds', 'nagpur', 300, '1 kilograqms', 'frsh', 'approved', 46),
(101, 'grains.jpg', 'soda', 'grains', 'nagpur', 23, '1 fdasf', 'asfd', 'approved', 41);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `contact`, `address`) VALUES
(41, 'Dinesh', 'dineshlakshman2001@gmail.com', '123456', 9325820193, 'mansi building, ambadi cross vasai (west). B 208.'),
(42, 'mayank', 'mayank@gmail.com', '123456', 9325820194, 'vardha , b-344 mandi bld . Bhayandar.'),
(44, 'Ankit', 'ankit@gmail.com', '123456', 9325620493, 'Street:  74-a Nariman Bhavan, Yogakshema (nariman Point)  City:   Mumbai'),
(45, 'Bhavin Pandya', 'bhavin@gmail.com', '123456', 9325863290, 'vasai east, Dhoop chav bld, b-302. Saki naka.'),
(46, 'Dinesh Lakshmanan', 'dineshlakshman2006@gmail.com', '123456', 9325820397, 'ambadi cross and krishna township');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `df` (`seller_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `df` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
