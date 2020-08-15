-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 11:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baker`
--

-- --------------------------------------------------------

--
-- Table structure for table `baker_admin`
--

CREATE TABLE `baker_admin` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_admin`
--

INSERT INTO `baker_admin` (`id`, `name`, `email`, `password`) VALUES
(33, 'Dhirender', 'dhiren@gmail.com', 'dhiren@123'),
(34, 'Sandesh', 'aksandesh03@gmail.com', 'Sandesh@123');

-- --------------------------------------------------------

--
-- Table structure for table `baker_cart`
--

CREATE TABLE `baker_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_cart`
--

INSERT INTO `baker_cart` (`cart_id`, `user_id`, `user_name`, `prod_id`) VALUES
(213, 2, 'Dhirender', 12),
(214, 34, 'Sandesh', 11),
(220, 1, 'sandesh', 12),
(221, 1, 'sandesh', 11);

-- --------------------------------------------------------

--
-- Table structure for table `baker_cart_new`
--

CREATE TABLE `baker_cart_new` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_cart_new`
--

INSERT INTO `baker_cart_new` (`id`, `user_name`, `user_id`, `prod_id`) VALUES
(1, 'Dhirender', 2, 13),
(2, 'sandesh', 1, 2),
(3, 'sandesh', 1, 3),
(4, 'Dhirender', 2, 13),
(5, 'sandesh', 1, 2),
(6, 'sandesh', 1, 3),
(7, 'Dhirender', 2, 13),
(8, 'sandesh', 1, 2),
(9, 'sandesh', 1, 3),
(10, 'Dhirender', 2, 13),
(11, 'sandesh', 1, 2),
(12, 'sandesh', 1, 3),
(13, 'Dhirender', 2, 13),
(14, 'sandesh', 1, 2),
(15, 'sandesh', 1, 3),
(16, 'Dhirender', 2, 13),
(17, 'sandesh', 1, 2),
(18, 'sandesh', 1, 3),
(19, 'Roshil', 3, 16),
(20, 'Roshil', 3, 17),
(21, 'sandesh', 1, 2),
(22, 'sandesh', 1, 3),
(23, 'Dhirender', 2, 13),
(24, 'sandesh', 1, 2),
(25, 'sandesh', 1, 3),
(26, 'Roshil', 3, 2),
(27, 'Roshil', 3, 11),
(28, 'sandesh', 1, 2),
(29, 'sandesh', 1, 3),
(30, 'sandesh', 1, 12),
(31, 'sandesh', 1, 2),
(32, 'sandesh', 1, 12),
(33, 'sandesh', 1, 13),
(34, 'Roshil', 3, 11),
(35, 'Roshil', 3, 12),
(36, 'Roshil', 3, 11),
(37, 'Roshil', 3, 12),
(38, 'Roshil', 3, 11),
(39, 'Roshil', 3, 12),
(40, 'Roshil', 3, 11),
(41, 'Roshil', 3, 12),
(42, 'Roshil', 3, 11),
(43, 'Roshil', 3, 12),
(44, 'Roshil', 3, 11),
(45, 'Roshil', 3, 12),
(46, 'Dhirender', 2, 12),
(47, 'Dhirender', 2, 12),
(48, 'Roshil', 3, 11),
(49, 'Roshil', 3, 12),
(50, 'Dhirender', 2, 12),
(51, 'Roshil', 3, 11),
(52, 'Roshil', 3, 12),
(53, 'Roshil', 3, 11),
(54, 'Roshil', 3, 12),
(55, 'Dhirender', 2, 1),
(56, 'Roshil', 3, 11),
(57, 'Roshil', 3, 12),
(58, 'Roshil', 3, 11),
(59, 'Roshil', 3, 12),
(60, 'Dhirender', 2, 1),
(61, 'Roshil', 3, 11),
(62, 'Roshil', 3, 12),
(63, 'Sandesh', 34, 1),
(64, 'Sandesh', 34, 2),
(65, 'Dhirender', 2, 1),
(66, 'Dhirender', 2, 2),
(67, 'Dhirender', 2, 3),
(68, 'Roshil', 3, 11),
(69, 'Roshil', 3, 12),
(70, 'sandesh', 1, 10),
(71, 'Roshil', 3, 11),
(72, 'Roshil', 3, 12),
(73, 'Roshil', 3, 11),
(74, 'Roshil', 3, 12),
(75, 'sandesh', 1, 2),
(76, 'sandesh', 1, 10),
(77, 'sandesh', 1, 2),
(78, 'sandesh', 1, 10),
(79, 'sandesh', 1, 2),
(80, 'sandesh', 1, 10),
(81, 'Sandesh', 34, 1),
(82, 'Sandesh', 34, 2),
(83, 'sandesh', 1, 2),
(84, 'sandesh', 1, 10),
(85, 'Roshil', 3, 11),
(86, 'Roshil', 3, 12),
(87, 'Roshil', 3, 11),
(88, 'Roshil', 3, 12),
(89, 'sandesh', 1, 2),
(90, 'sandesh', 1, 10),
(91, 'sandesh', 1, 2),
(92, 'sandesh', 1, 10),
(93, 'Sandesh', 34, 1),
(94, 'Sandesh', 34, 10),
(95, 'Sandesh', 34, 11),
(96, 'Sandesh', 34, 12),
(97, 'sandesh', 1, 12),
(98, 'sandesh', 1, 13),
(99, 'sandesh', 1, 11),
(100, 'sandesh', 1, 12),
(101, 'sandesh', 1, 11),
(102, 'sandesh', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `baker_cat`
--

CREATE TABLE `baker_cat` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_cat`
--

INSERT INTO `baker_cat` (`id`, `category`) VALUES
(1, 'Classic Cake'),
(2, 'Pastries');

-- --------------------------------------------------------

--
-- Table structure for table `baker_orders`
--

CREATE TABLE `baker_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `card` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_orders`
--

INSERT INTO `baker_orders` (`id`, `user_id`, `user_name`, `name`, `name2`, `address`, `address2`, `state`, `city`, `zip`, `email`, `phone`, `card`, `cvv`, `amount`) VALUES
(4, 2, 'Dhirender', 'Sandesh', 'Jayaraman', 'Bandra', 'West', 'Maharashtra', 'Mumbai', 401303, 'dhirender@gmail.com', '8087646251', '12345678', '301', 30),
(5, 1, 'sandesh', 'Hemant', 'Joshi', 'Khar road', 'Gokul Township', 'Maharashtra', 'Mumbai', 401303, 'aksandesh03@gmail.com', '8087646251', '40003251', '501', 395),
(6, 2, 'Dhirender', 'Roshil', 'Joshi', 'Bandra', 'West', 'Maharashtra', 'Mumbai', 403101, 'aksandesh03@gmail.com', '8087646251', '12345678', '501', 450),
(7, 2, 'Dhirender', 'Jignesh', 'yadav', 'Bandra', 'West', 'Maharashtra', 'mumbai', 401303, 'aksandesh03@gmail.com', '8087646251', '12345678', '501', 50),
(9, 1, 'sandesh', 'Bhavana', 'Patidhar', 'c/212,Paradise apt', 'Virar', 'Maharashtra', 'mumbai', 401303, 'aksandesh03@gmail.com', '8087646251', '12345678', '123', 50),
(10, 1, 'sandesh', 'Sunil', 'Jay', 'Parliment House', 'Delhi', 'Punjab', 'Punjab', 401303, 'aksandesh03@gmail.com', '8087646251', '12345678', '201', 100);

-- --------------------------------------------------------

--
-- Table structure for table `baker_order_new`
--

CREATE TABLE `baker_order_new` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `prod_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_order_new`
--

INSERT INTO `baker_order_new` (`id`, `user_id`, `user_name`, `name`, `name2`, `prod_id`, `quantity`) VALUES
(7, 2, 'Dhirender', 'Sandesh', 'Jayaraman', '14', '1'),
(8, 1, 'sandesh', 'Hemant', 'Joshi', '10', '1'),
(9, 1, 'sandesh', 'Hemant', 'Joshi', '11', '1'),
(10, 1, 'sandesh', 'Hemant', 'Joshi', '13', '1'),
(11, 2, 'Dhirender', 'Roshil', 'Joshi', '6', '1'),
(12, 2, 'Dhirender', 'Jignesh', 'yadav', '12', '1'),
(13, 33, 'Dhirender', 'Doctor', 'X', '13', '1'),
(14, 1, 'sandesh', 'Bhavana', 'Patidhar', '12', '1'),
(15, 1, 'sandesh', 'Sunil', 'Jay', '12', '2');

-- --------------------------------------------------------

--
-- Table structure for table `baker_prod`
--

CREATE TABLE `baker_prod` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_prod`
--

INSERT INTO `baker_prod` (`id`, `cat_id`, `title`, `price`, `image`, `description`) VALUES
(1, 1, 'GULLIVER GOLD CAKE', 500, '20200410055230.jpg', 'This cake will offer a chocolaty treat to your eyes as well as your palates! Having a red/dark spong'),
(2, 1, 'FARM HOUSE CAKE', 49, '20200410055351.jpg', 'A Rich vanilla sponge with dutch cream decorated with non edible animals.Having a red/dark sponge, s'),
(3, 1, 'RAINBOW VEG PREMIUM CAKE', 150, '20200410055506.jpg', 'Rainbow Veg Premium Cake your eyes as well as your palates! Having a red/dark sponge, so that the re'),
(4, 1, 'GRAPE ORANGE CAKE', 100, '20200410055637.jpg', 'This is a very unique as well as delicious combination of cake crafted especially to gift your near '),
(5, 1, 'MORNING DEW CAKE', 450, '20200410055802.jpg', 'Crazy filled with dark chocolate, this Morning Dew Cake will leave your taste buds with an unbelieva'),
(6, 1, 'SHIMMER CAKE', 450, '20200410055905.jpg', 'Crazy filled with dark chocolate, this Morning Dew Cake will leave your taste buds with an unbelieva'),
(7, 1, 'MIDNIGHT DELITE CAKE', 299, '20200410060027.jpg', 'Crazy filled with dark chocolate, this Morning Dew Cake will leave your taste buds with an unbelieva'),
(8, 1, 'BOUNTIFUL VEG PREMIUM CAKE', 540, '20200410060228.jpg', 'Bountiful Veg Premium Cake Sed nisi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi'),
(10, 2, 'Pastris', 250, '20200517054023.jpg', 'Pastry is a dough of flour, water and shortening that may be savoury or sweetened.'),
(11, 2, 'Pink Pastries', 25, '20200517053318.jpg', 'The word \"pastries\" suggests many kinds of baked products made from ingredients such as flour, sugar'),
(12, 2, 'Danishes', 50, '20200517053932.jpg', 'A Danish pastry, sometimes shortened to just Danish, is a multilayered, laminated sweet pastry in th'),
(13, 2, 'Croissants', 120, '20200517053530.jpg', 'A croissant is a buttery, flaky, viennoiserie pastry of Austrian origin, named for its historical cr'),
(14, 2, 'Pies', 30, '20200517053802.jpg', 'A pie is a baked dish which is usually made of a pastry dough casing that contains a filling of vari'),
(15, 2, 'Macarons', 70, '20200517054131.jpg', 'A macaron or French macaroon is a sweet meringue-based confection made with egg white, icing sugar, '),
(16, 2, 'Strudels', 65, '20200517054310.jpg', 'A strudel is a type of layered pastry with a filling that is usually sweet. It became popular in the'),
(17, 2, 'Cannoli', 80, '20200517054403.jpg', 'Cannoli are Italian pastries that originated on the island of Sicily and are today a staple of Sicil'),
(21, 0, '', 0, '20200722113750.', ''),
(22, 0, '', 0, '20200722113825.', ''),
(23, 0, '', 0, '20200722113855.', '');

-- --------------------------------------------------------

--
-- Table structure for table `baker_user_info`
--

CREATE TABLE `baker_user_info` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` int(200) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baker_user_info`
--

INSERT INTO `baker_user_info` (`id`, `firstname`, `lastname`, `contact`, `address`, `email`, `password`) VALUES
(1, 'sandesh', 'nair', 2147483647, 'mira road', 'aksandesh03@gmail.com', 'Sandesh@123'),
(2, 'Dhirender', 'sanil', 2147483647, 'Khar road', 'dhirender@gmail.com', 'Dhiren@123'),
(3, 'Roshil', 'Joshi', 2147483647, 'Bandra', 'roshil@gmail.com', 'Roshil@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baker_admin`
--
ALTER TABLE `baker_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baker_cart`
--
ALTER TABLE `baker_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `baker_cart_new`
--
ALTER TABLE `baker_cart_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baker_cat`
--
ALTER TABLE `baker_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baker_orders`
--
ALTER TABLE `baker_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baker_order_new`
--
ALTER TABLE `baker_order_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baker_prod`
--
ALTER TABLE `baker_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baker_user_info`
--
ALTER TABLE `baker_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baker_admin`
--
ALTER TABLE `baker_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `baker_cart`
--
ALTER TABLE `baker_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `baker_cart_new`
--
ALTER TABLE `baker_cart_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `baker_cat`
--
ALTER TABLE `baker_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `baker_orders`
--
ALTER TABLE `baker_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `baker_order_new`
--
ALTER TABLE `baker_order_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `baker_prod`
--
ALTER TABLE `baker_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `baker_user_info`
--
ALTER TABLE `baker_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
