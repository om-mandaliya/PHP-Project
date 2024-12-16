-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 05:54 PM
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
-- Database: `footware`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'ommandaliya', 'om@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_size` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_name`, `product_price`, `quantity`, `product_size`) VALUES
(307, 61, 'Reebok Men\'s Comfort Infused Running Shoes', 2500.00, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders1`
--

CREATE TABLE `orders1` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(20) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders1`
--

INSERT INTO `orders1` (`order_id`, `user_id`, `product_id`, `total_price`, `payment_status`, `user_address`, `order_date`) VALUES
(183, 1, 56, 2697.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-16 19:58:08'),
(184, 1, 56, 2697.00, 'Cash on delivery', 'SURENDRANAGAR', '2024-08-16 20:00:06'),
(185, 1, 56, 2697.00, 'Cash on delivery', 'yfdycf', '2024-08-16 20:00:26'),
(186, 1, 56, 2697.00, 'Cash on delivery', 'j . p street 1 near bahuchar hotel surendranagar', '2024-08-16 20:00:49'),
(187, 1, 56, 2697.00, 'Cash on delivery', 'j . p street 1 near bahuchar hotel surendranagar', '2024-08-16 20:03:08'),
(188, 1, 56, 2697.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-17 06:36:20'),
(189, 1, 56, 2697.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-17 06:39:07'),
(190, 1, 56, 2697.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-17 06:48:01'),
(191, 1, 56, 2697.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-17 06:52:34'),
(192, 1, 56, 2697.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-17 06:54:31'),
(193, 1, 56, 2697.00, 'Cash on delivery', 'HELLO', '2024-08-17 06:55:01'),
(194, 1, 56, 2697.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-17 06:55:37'),
(195, 1, 56, 2697.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-17 06:56:46'),
(196, 1, 61, 2500.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-17 10:44:55'),
(197, 1, 61, 2500.00, 'Cash on delivery', 'surendranagar1', '2024-08-17 10:45:22'),
(198, 1, 63, 4134.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-17 10:58:53'),
(199, 1, 63, 4134.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-17 10:59:09'),
(200, 1, 63, 4134.00, 'Internet Banking', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-17 10:59:29'),
(201, 6, 63, 4134.00, 'Internet Banking', 'ahmedabadf', '2024-08-17 11:01:21'),
(202, 1, 63, 4134.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-18 08:13:08'),
(203, 1, 63, 4134.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-18 19:20:08'),
(204, 1, 61, 7500.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-19 16:14:31'),
(205, 1, 61, 7500.00, 'Cash on delivery', 'SURENDRANAGAR', '2024-08-19 16:14:56'),
(206, 1, 51, 9390.00, 'Cash on delivery', 'IT IS VERY BEST OFFICE IN YOUR LIFE.', '2024-08-19 16:25:54'),
(207, 1, 51, 9390.00, 'Cash on delivery', 'SURENDRANAGAR', '2024-08-20 13:00:12'),
(208, 1, 51, 9390.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-20 15:32:19'),
(209, 1, 51, 9390.00, 'Cash on delivery', 'j.p. street 1 newar bahuchar hotel , surendranagar', '2024-08-20 15:32:29'),
(210, 1, 51, 9390.00, 'Cash on delivery', 'SURENDRANAGAR', '2024-08-20 15:32:48'),
(211, 1, 51, 9390.00, 'Cash on delivery', 'SURENDRANAGAR', '2024-08-20 15:33:22'),
(212, 1, 51, 9390.00, 'Cash on delivery', 'j . p street 1 near bahuchar hotel surendranagar', '2024-08-20 15:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_material` varchar(70) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_sport` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_image`, `product_color`, `product_material`, `product_brand`, `product_sport`) VALUES
(0, 'AVANT Men\'s Impact Cricket Shoes ', 1600, 'images/cricket3.jpg', 'white/blue', 'rubber', 'avant', 'cricket'),
(47, 'SG Scorer 6.0 Rubber Spikes Cricket Shoes', 1300, 'images/cricket1.jpg', 'white', 'Polyurethane, Rubber, Thermoplastic Polyurethane', 'SG', 'cricket'),
(50, 'Drifter cricket shoze', 2000, 'images/foot5.jpg', 'white / blue', 'ladher', 'DRIFTER', 'cricket'),
(51, 'Hundred HyperTurf Cricket Shoes', 1890, 'images/cricket2.jpg', 'white/blue', ' Polyester', 'hundred', 'cricket'),
(52, 'NIVIA IGNITE FOOTBALL STUD SHOES FOR MEN', 1269, 'images/foot5.webp', 'white/blue', 'PU Synthetic leather upper & TPU sole', 'Nivia', 'football'),
(54, 'Nivia Carbonite 6.0 Football Shoes', 739, 'images/item2.jpg', 'black', 'PVC Synthetic leather', 'Nivia', 'football'),
(55, 'Vector X Chaser Kids Football Shoes', 749, 'images/f1.jpg', 'Orange-Black-Firozi', 'Synthetic', 'Vector', 'Football'),
(56, 'Nivia INFRA FOOTBALL SHOES for MEN', 899, 'images/f2.jpg', 'white/blue', 'Faux Leather, Ethylene Vinyl Acetate, Polyvinyl Chloride', 'Nivla', 'Football'),
(57, 'Boldfit Badminton Shoes', 1699, 'images/t1.jpg', 'white/yellow', 'PU-Mesh', 'Boldfit', 'Badminton'),
(58, 'Prokick Power Plus Non Marking Badminton Shoes ', 1499, 'images/t2.jpg', 'white', 'Polyurethane', 'Prokick Power Plus ', 'Badminton'),
(59, 'YONEX Drive-i Badminton Shoes', 1990, 'images/f3.JPG', 'balck', 'Nylon', 'YONEX', 'Badminton'),
(60, 'Nivia Appeal Badminton Shoes', 1339, 'images/t3.jpg', 'white/gray', 'Synthetic', 'Nivia', 'Badminton'),
(61, 'Reebok Men\'s Comfort Infused Running Shoes', 2500, 'images/t4.jpg', 'FLAT GREY-BLACK-NACHO', 'Mesh', 'Reebok', 'Running Shoes'),
(62, 'Reebok Men\'s Velocity Runner Lp Running Shoes', 1670, 'images/t5.jpg', 'PUGRY6', 'Mesh, Ethylene Vinyl', 'Reebok', 'Running Shoes'),
(63, 'Reebok Men\'s Energy Runner Lp Running Shoes', 1634, 'images/t6.jpg', 'FLAGRE/CONAVY', 'Synthetic', 'Reebok', 'Running Shoes'),
(64, 'AVANT Men’s Ignite PRO Running Shoze', 899, 'images/t7.jpg', 'Grey/Black', 'Mesh', 'Sparx', 'Running Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` enum('excellent','good','average','poor') NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `product_id`, `user_id`, `name`, `email`, `rating`, `message`) VALUES
(17, 47, 0, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'reter'),
(18, 51, 0, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'wdwwe'),
(19, 51, 0, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'qwww'),
(20, 51, 0, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'hrkkr'),
(21, 51, 1, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'test '),
(22, 47, 1, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'test'),
(23, 47, 91, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'test'),
(24, 0, 91, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'hello '),
(25, 61, 91, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'hello'),
(26, 63, 91, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'hrlooo'),
(28, 54, 88, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'wgdywd'),
(31, 55, 91, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'yghyhu'),
(32, 51, 91, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'sqsdq'),
(33, 0, 91, 'mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'excellent', 'wdw'),
(34, 51, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'fefef'),
(35, 0, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'rfefe'),
(36, 0, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'efefef'),
(37, 61, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'wfefe'),
(38, 61, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'efbeb'),
(39, 61, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'h'),
(40, 61, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'hvgueigvu'),
(41, 61, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'average', 'vhegjh'),
(42, 61, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'average', 'vbegh'),
(43, 0, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'fhej'),
(44, 50, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'best\r\n'),
(45, 56, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'ffeff'),
(46, 64, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'huhrugr'),
(47, 47, 91, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'average', 'hellooooooo'),
(48, 64, 15, 'mandaliya akshar naineshbhaiee', 'ommandaliya17@gmail.com', 'excellent', 'ihduf');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_phone` int(13) NOT NULL,
  `user_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_address`) VALUES
(1, 'Akshar', 'ommandaliya17@gmail.com', 'mandaliya', 123456, 'j.p. street 1 newar bahuchar hotel , surendranagar'),
(2, 'om1', 'ommandaliya17@gmail.com', '211122', 9824058, 'ahmedabadf'),
(3, 'Akshar', 'ommandaliya17@gmail.com', 'e988', 2147483647, 'u78789809'),
(4, 'om1', 'ommandaliya17@gmail.com', '11222', 9824058, 'ahmedabadf'),
(7, 'Akshar', 'ommandaliya17@gmail.com', 'ommandaliya', 2147483647, 'u78789809'),
(8, 'Akshar', 'ommandaliya17@gmail.com', 'udud', 2147483647, 'u78789809'),
(9, 'Akshar', 'ommandaliya17@gmail.com', 'sdddd', 2147483647, 'u78789809'),
(10, 'Akshar', 'ommandaliya17@gmail.com', 'hbh', 2147483647, 'u78789809'),
(11, 'Akshar', 'ommandaliya17@gmail.com', 'hello', 2147483647, 'u78789809');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orders1`
--
ALTER TABLE `orders1`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `orders1`
--
ALTER TABLE `orders1`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
