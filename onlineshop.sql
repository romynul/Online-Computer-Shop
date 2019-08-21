-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 12:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `products_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_price` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `catagories` varchar(50) NOT NULL,
  `customer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`products_id`, `p_name`, `p_quantity`, `p_price`, `brand`, `catagories`, `customer`) VALUES
(3, 'Ram DDr3', 12, 1100, 'Dell', 'ram', 'shuvo'),
(5, 'Ram DDr3', 12, 1100, 'Dell', 'ram', 'shuvo'),
(7, 'Ram DDr3', 12, 1100, 'Dell', 'ram', 'rocky'),
(8, 'Laptop', 12, 100, 'Asus', 'laptop', 'shuvo'),
(10, 'Ram DDr3', 12, 100, 'Hp', 'ram', 'shuvo');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_name`, `contact_no`, `username`, `password`, `role`) VALUES
(1, 'Shuvo', '01766881646', 'romynul', '1234', 'admin'),
(2, 'Romynul', '01735418844', 'shuvo', '12345678', 'customer'),
(4, 'Musrat1', '0176544565', 'musrat', '12345678', 'customer'),
(5, 'Riyad', '0177777778545', 'riyad', '12345678', 'customer'),
(6, 'Sabbir Hossain', '01919843293', 'sajid', '12345678', 'customer'),
(7, 'Tahmid', '01765454', 'tahmid', '1234', 'customer'),
(8, 'wahid', '01765454', 'wahid', '1111', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(10) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `products_quantity` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `customer`, `products_quantity`, `amount`) VALUES
(1, 'shuvo', 5, 1432),
(2, 'wahid', 3, 420);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_price` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `catagories` varchar(50) NOT NULL,
  `menufac` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `p_name`, `p_quantity`, `p_price`, `brand`, `catagories`, `menufac`) VALUES
(1, 'Laptop', 12, 100, 'Asus', 'laptop', ''),
(2, 'Laptop 204', 10, 100, 'Dell', 'laptop', ''),
(3, 'Laptop 304', 15, 100, 'Hp', 'laptop', ''),
(4, 'Ram DDr3', 12, 100, 'Hp', 'ram', ''),
(5, 'Ram DDr3', 12, 1000, 'Asus', 'ram', ''),
(6, 'Ram DDr3', 12, 1100, 'Dell', 'ram', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero''s De Finibus Bonorum et Malorum for use in a type specimen book.'),
(7, 'Hard Disk', 101, 2222, 'Asus', 'laptop', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero''s De Finibus Bonorum et Malorum for use in a type specimen book.'),
(8, 'Casing rog', 33, 234, 'Hp', 'casing', 'Menudfdsfacture Review');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) NOT NULL,
  `reviewstar` int(1) NOT NULL,
  `review` varchar(500) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `reviewstar`, `review`, `product_id`, `customer`) VALUES
(1, 4, 'Good Products', 7, 'romynul'),
(2, 4, 'Products Quality Average', 7, 'romynul'),
(3, 4, 'Good Products', 7, 'romynul'),
(4, 5, 'very good', 1, 'romynul'),
(6, 3, 'great', 1, 'romynul'),
(7, 5, 'adsda', 1, 'romynul'),
(8, 3, 'adsda', 2, 'romynul'),
(9, 5, 'Avetage', 8, 'shuvo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
