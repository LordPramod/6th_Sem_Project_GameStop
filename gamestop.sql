-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 03:07 PM
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
-- Database: `gamestop`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout_detail`
--

CREATE TABLE `checkout_detail` (
  `cid` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Cname` varchar(255) DEFAULT NULL,
  `Cemail` varchar(255) DEFAULT NULL,
  `Cphone` bigint(20) DEFAULT NULL,
  `Ccity` varchar(255) DEFAULT NULL,
  `Caddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_detail`
--

INSERT INTO `checkout_detail` (`cid`, `Uid`, `Cname`, `Cemail`, `Cphone`, `Ccity`, `Caddress`) VALUES
(1, 4, 'PRAMOD THAPA', 'thapapramod821@gmail.com', 9800000000, 'lalitpur', 'Nepal'),
(2, 7, 'Lord Pramod', 'test@gmail.com', 9884113427, 'Kathmadu', 'Dhapasi,Kathmandu'),
(3, 8, 'Pramod Thapa', 'thapapramod821@gmail.com', 9884113427, 'Kathmadu', 'Dhapasi,Kathmandu'),
(4, 9, 'Pramod Thapa', 'thapapramod821@gmail.com', 9884113427, 'Kathmadu', 'Dhapasi,Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `purchase_date` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_name`, `quantity`, `total`, `order_status`, `payment_method`, `email`, `city`, `address`, `product_image`, `purchase_date`) VALUES
(1, 4, 'Google Gift Card 10', 1, 1350, 'Completed', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '07:39:32'),
(2, 4, 'Google Gift Card 10', 1, 1350, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '07:39:32'),
(3, 4, 'Google Gift Card 10', 1, 1350, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '07:46:27'),
(4, 4, 'Google Gift Card 10', 1, 1350, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '07:49:15'),
(5, 4, 'Google Gift Card 10', 1, 1350, 'pending', '', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '08:03:18'),
(6, 4, 'Google Gift Card 10', 1, 1350, 'pending', '', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '08:03:18'),
(7, 4, 'Google Gift Card 10', 1, 1350, 'pending', '', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '08:06:39'),
(8, 4, 'Google Gift Card 10', 1, 1350, 'pending', '', 'thapapramod821@gmail.com', 'lalitpur', 'Nepal', 'google_10$.jpg', '08:06:39'),
(9, 7, 'PlayStation Gift Card 10$ ', 1, 1350, 'pending', 'Esewa', 'test@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'PlayStation-Gift-Card_10$.jpg', '16:46:51'),
(10, 7, 'iTunes Gift Card 5$', 1, 650, 'pending', 'Esewa', 'test@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'itunes_5$.jpg', '16:47:49'),
(11, 8, 'iTunes Gift Card 100$', 1, 14500, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'itunes_100$.jpg', '06:39:55'),
(12, 9, 'Google Gift Card 10', 1, 1350, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'google_10$.jpg', '20:05:47'),
(13, 9, 'Google Gift Card 10', 3, 4050, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'google_10$.jpg', '09:10:41'),
(14, 9, 'iTunes Gift Card 5$', 1, 650, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'itunes_5$.jpg', '09:10:41'),
(15, 9, 'iTunes Gift Card 5$', 5, 3250, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'itunes_5$.jpg', '09:10:41'),
(16, 9, 'Google Gift Card 50$', 1, 6500, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'google-gift-card-50.png', '09:10:41'),
(17, 9, 'Google Gift Card 50$', 1, 6500, 'pending', 'Esewa', 'thapapramod821@gmail.com', 'Kathmadu', 'Dhapasi,Kathmandu', 'google-gift-card-50.png', '09:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `pdt_cart`
--

CREATE TABLE `pdt_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `pdt_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdt_category`
--

CREATE TABLE `pdt_category` (
  `C_id` int(11) NOT NULL,
  `pdt_category_name` varchar(255) DEFAULT NULL,
  `product_category_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdt_category`
--

INSERT INTO `pdt_category` (`C_id`, `pdt_category_name`, `product_category_image`) VALUES
(1, 'Google Gift Cards', 'google-gift-card-main.png'),
(2, 'iTunes Gift Cards', 'itunes_100$.jpg'),
(3, 'PlayStation Subsctiption', 'PLAYSTATION-main.jpg'),
(4, 'Free Fire Topup Login', 'free-fire.jpg'),
(5, 'Nintendo Topup', 'nintendo eShop.jpg'),
(6, 'Mobile Legends Diamonds', 'mobile-legend.jpeg'),
(7, 'Xbox Live Gift Card', 'xbox.png'),
(8, 'Steam Gift Card', 'steam-100$.png'),
(9, 'Game', 'games.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `pdt_order`
--

CREATE TABLE `pdt_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT 'pending',
  `total_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pdt_table`
--

CREATE TABLE `pdt_table` (
  `pdt_id` int(11) NOT NULL,
  `pdt_name` varchar(255) DEFAULT NULL,
  `pdt_price` int(11) DEFAULT NULL,
  `pdt_image` varchar(255) DEFAULT NULL,
  `pdt_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_details`
--

CREATE TABLE `products_details` (
  `id` int(11) NOT NULL,
  `pdt_name` varchar(255) DEFAULT NULL,
  `pdt_price` int(11) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `products_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_details`
--

INSERT INTO `products_details` (`id`, `pdt_name`, `pdt_price`, `product_image`, `products_category`) VALUES
(1, 'Google Gift Card 10', 1350, 'google_10$.jpg', 1),
(2, 'Google Gift Card 5$', 650, 'google_5$.jpg', 1),
(3, 'Google Gift Card 15$', 2100, 'google_15$.jpg', 1),
(4, 'Google Gift Card 25$', 3200, 'Google_25$.jpg', 1),
(5, 'Google Gift Card 50$', 6500, 'google-gift-card-50.png', 1),
(6, 'Google Gift Card 100$', 14500, 'google-giftcard_100$.jpg', 1),
(7, 'iTunes Gift Card 5$', 650, 'itunes_5$.jpg', 2),
(9, 'iTunes Gift Card 10$', 1350, 'itunes_10$.png', 2),
(10, 'iTunes Gift Card 15$', 2100, 'itunes_15$.jpg', 2),
(12, 'iTunes Gift Card 50$', 6500, 'itunes_50$.jpg', 2),
(13, 'iTunes Gift Card 100$', 14500, 'itunes_100$.jpg', 2),
(14, 'PlayStation Gift Card 100$ ', 14500, 'PlayStation_Gift_Card_100$.jpg', 3),
(15, 'PlayStation Gift Card 10$ ', 1350, 'PlayStation-Gift-Card_10$.jpg', 3),
(16, 'PlayStation Gift Card 20$ ', 3200, 'PlayStation-Gift-Card_20$.jpg', 3),
(17, 'PlayStation Gift Card 50$ ', 6500, 'PlayStation-Gift-Card_50$.jpg', 3),
(19, 'Black Myth: Wukong Game 2024', 5999, 'games.jfif', 9),
(20, 'Steam Wallet', 1350, 'R.jfif', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT 'user',
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `phone`, `password`, `usertype`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(4, 'PRAMOD THAPA', 'thapa@gmail.com', 9800000000, 'bb16fa6160fa1d8a73eba6217844a08b', 'user', NULL, NULL),
(6, 'Pramod Thapa', 'pramod@gmail.com', 9861818297, 'bb16fa6160fa1d8a73eba6217844a08b', 'admin', NULL, NULL),
(7, 'Lord Pramod', 'test@gmail.com', 9861818297, 'cc03e747a6afbbcbf8be7668acfebee5', 'user', NULL, NULL),
(8, 'Pramod Thapa', 'thapapramod821@gmail.com', 9861818297, 'bb16fa6160fa1d8a73eba6217844a08b', 'admin', NULL, NULL),
(9, 'test', 'test1@gmail.com', 9861812244, 'bb16fa6160fa1d8a73eba6217844a08b', 'user', NULL, NULL),
(10, 'admin', 'admin@gmail.com', 1234567890, '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL),
(11, 'PRAMOD THAPA', 'pramodthapa2023@gmail.com', 9861818297, 'bb16fa6160fa1d8a73eba6217844a08b', 'user', 'eff6338688eeae18ab9fb73a9d2a90b65dbad0e4e9684fc52315b46e33423d66', '2024-09-24 18:43:12'),
(12, 'Rishab Maharjan', 'Rishabmaharjan1999@gmail.com', 9849181673, '7e663263c00050dfe773e21dae3a31d8', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `Uid` (`Uid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pdt_cart`
--
ALTER TABLE `pdt_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pdt_category`
--
ALTER TABLE `pdt_category`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `pdt_order`
--
ALTER TABLE `pdt_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pdt_id` (`pdt_id`);

--
-- Indexes for table `pdt_table`
--
ALTER TABLE `pdt_table`
  ADD PRIMARY KEY (`pdt_id`);

--
-- Indexes for table `products_details`
--
ALTER TABLE `products_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category` (`products_category`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pdt_cart`
--
ALTER TABLE `pdt_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pdt_category`
--
ALTER TABLE `pdt_category`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pdt_order`
--
ALTER TABLE `pdt_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdt_table`
--
ALTER TABLE `pdt_table`
  MODIFY `pdt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_details`
--
ALTER TABLE `products_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  ADD CONSTRAINT `checkout_detail_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `pdt_cart`
--
ALTER TABLE `pdt_cart`
  ADD CONSTRAINT `pdt_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `pdt_order`
--
ALTER TABLE `pdt_order`
  ADD CONSTRAINT `pdt_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `pdt_order_ibfk_2` FOREIGN KEY (`pdt_id`) REFERENCES `pdt_table` (`pdt_id`);

--
-- Constraints for table `products_details`
--
ALTER TABLE `products_details`
  ADD CONSTRAINT `products_details_ibfk_1` FOREIGN KEY (`products_category`) REFERENCES `pdt_category` (`C_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
