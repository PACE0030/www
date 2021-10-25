-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2021 at 03:49 AM
-- Server version: 8.0.26
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duck_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int NOT NULL,
  `contact_no` int DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `post_code` int DEFAULT NULL,
  `street` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `house_no` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `contact_no`, `email`, `first_name`, `last_name`, `country`, `city`, `post_code`, `street`, `house_no`) VALUES
(3, 1234567890, '123@gmail.com', 'Sam', 'Smith', 'Australia', 'Sydney', 2000, 'Wallaby Way', 42);

-- --------------------------------------------------------

--
-- Table structure for table `order_`
--

CREATE TABLE `order_` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `shipping_cost` float DEFAULT '5',
  `grand_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` float NOT NULL,
  `img` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Quackout', 'Our Quackout socks are perfect for the more formal events your duck will attend. The high quality and comfort remain but our exciting and vibrant colours make way for a smart and sophisticated black. Whether it be a duck graduation, duck wedding or a duck funeral the Quackout is the go to for a professional duck.\n', 10, '<img width=\"30%\" src=\"img/black_sock.jpg\">'),
(2, 'Blue da ba dee da ba duck ', 'If your duck is feeling blue cheer it up with these extraordinary all-terrain blue duck socks. As seen in the images this customer is fully utilising the all-terrain prowess of these duck socks. These fully enclosed socks are perfect for a hike in the mountains or a stroll on the beach, you and your duck can go everywhere together. ', 10, '<img width=\"30%\" src=\"img/blue_sock.jpeg\">'),
(3, 'Strawberry Kiss', 'These fancy strawberry socks will make your duck happier than it’s ever been as you can see by the reaction of one of our first customers. These comfy socks are perfect for rolling around during play time or just keeping your ducks’ feet warm in bed. \n', 10, '<img width=\"30%\" src=\"img/red_sock.jpg\">'),
(4, 'Park Pond Ploppers ', 'The Park Pond Ploppers are ideal for a duck who loves swimming. Unlike our other socks the ploppers are designed like a human wetsuit. As seen in the image they are designed to interact with water and strapped on to ensure they aren’t lost when having fun in the water.\n', 10, '<img width=\"30%\" src=\"img/green_sock.jpg\">'),
(5, 'Fluro Flappers', 'Quite possibly our brightest pair of socks. Our Fluro Flappers are the easiest way to make your duck stand out amongst the crowd. Whether you just want to show off or lose them in public it’ll be impossible for people to miss this fantastic footwear.\n', 10, '<img width=\"30%\" src=\"img/cyan_sock.jpg\">'),
(6, 'Multicolour Madness', 'Our most innovative socks yet allow your duck to bring all their little furry friends with them. Featuring a frog, a pig, and a bear these patterned socks give your ducks fluffy friends all hours of the day perfect for when you have to go make money to pay for all these duck products. \n', 10, '<img width=\"30%\" src=\"img/multicolour_sock.jpg\">'),
(7, 'Peking Duck', 'These beautiful open toe duck socks bring the comfort and protection of the rest of our range while allowing your duck to show of their nails they’ve worked so hard to maintain. Whether your duck trims or colours their nails these socks ensure they can always show them off. \n', 10, '<img width=\"30%\" src=\"img/open_toe_sock.jpeg\">'),
(8, 'Pink Princess', 'These socks will turn your duck into their most fabulous version of themselves. No matter the occasion the Pink Princess socks are gorgeous, glamorous, and will turn any duck into a star.\n', 10, '<img width=\"30%\" src=\"img/multicolour_sock.jpg\">'),
(9, 'Gobbling Grape', 'The gobbling grapes are the perfect summer duck sock. The comfortable and high-quality sock keeps your duck’s feet safe and snug however, our patented open ankle design allows a cool breeze for the ultimate duck walking capability and prevents your duck getting sweaty during those hot Australian summers. \n', 10, '<img width=\"30%\" src=\"img/purple_sock.jpeg\">'),
(10, 'Blue peas in a pod', 'The Blue Peas in A Pod represent our everyday version of the Blue Da Ba Dee Da Ba Duck. These socks are for the duck who likes a walk in the park and a swim on a nice day without going to the extremes that would require improved footwear. \n', 10, '<img width=\"30%\" src=\"img/blue2_sock.jpeg\">');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int NOT NULL,
  `order_id` int DEFAULT NULL,
  `card_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `card_number` text COLLATE utf8mb4_general_ci NOT NULL,
  `card_expiry` text COLLATE utf8mb4_general_ci NOT NULL,
  `card_cvv` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `order_id`, `card_name`, `card_number`, `card_expiry`, `card_cvv`) VALUES
(9, NULL, 'Sam Smith', '1234567890123456', '01/01', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_`
--
ALTER TABLE `order_`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_`
--
ALTER TABLE `order_`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_`
--
ALTER TABLE `order_`
  ADD CONSTRAINT `order__ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_` (`order_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
