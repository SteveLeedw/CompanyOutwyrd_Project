-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 28, 2022 at 06:58 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commsimple`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `listingID` int(11) NOT NULL COMMENT 'listing id autoincrements',
  `user_id` int(11) NOT NULL COMMENT 'the userID of the user who uploaded the listing',
  `timeListed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'when the listing was uploaded',
  `addressStreet` text NOT NULL COMMENT 'address',
  `addressCity` text NOT NULL COMMENT 'city',
  `addressState` text NOT NULL COMMENT 'state, stored in two character format ie NJ, NY, WI, MI',
  `addressZipcode` text NOT NULL COMMENT 'zipcode',
  `saleType` text NOT NULL COMMENT 'sale, auction, rent/lease',
  `description` longtext NOT NULL COMMENT 'any other description, bathroom, parking, main road prox, ect.',
  `nameListing` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listingID`, `user_id`, `timeListed`, `addressStreet`, `addressCity`, `addressState`, `addressZipcode`, `saleType`, `description`, `nameListing`, `price`) VALUES
(6, 1, '2022-04-04 05:09:55', '15 Perch Ave', 'Wood Hills', 'CT', '01701', 'Sale', 'Parking, Bathroom on site', '', 0),
(7, 1, '2022-04-04 05:11:34', 'Example Ave', 'Example City', 'AL', '00000', 'Rent', 'Example', '', 0),
(8, 1, '2022-04-04 14:34:34', '143', 'test', 'DE', 'test', 'Sale', 'test', '', 0),
(9, 5, '2022-04-27 17:41:21', '123 lane', 'holmdel', 'AL', '01732', 'Sale', 'this is a big house pls work', 'big house', 0),
(10, 5, '2022-04-27 17:51:54', '32  road', 'holmdel', 'NJ', '07733', 'Sale', 'maybe ikd', 'luxury home', 123),
(11, 5, '2022-04-27 17:57:26', '975 binghamton road', 'holmdel', 'AL', '19362', 'Sale', 'this is a house\r\n\r\n\r\nmaybe you can buy it ', 'Big House', 132),
(12, 5, '2022-04-27 20:22:49', '123', '123', 'AL', '12345', 'Sale', '', 'big house ', 123),
(13, 5, '2022-04-27 20:26:18', '98 street lane', 'new york', 'AL', '12342', 'Sale', '', 'kaylie', 700),
(14, 5, '2022-04-27 20:43:44', '79 lincoln avenue', 'new york city', 'NY', '10314', 'Sale', 'a lot of apartments, parking on site with rental of a room, bathroom facilities, etc. ', 'apartment building', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'user id should be auto incrementing',
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(320) NOT NULL COMMENT '320 length because that is apparently the longest possible email address length',
  `password` text NOT NULL COMMENT 'should be hashed later'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'eric', 'dreitlein', 'edreitlein@drew.edu', '1234'),
(2, 'user1', 'user1l', 'user1@gmail.com', '1234'),
(3, 'user2', 'user2l', 'user2@user2.com', '1234'),
(4, '1', '1', '1', '1'),
(5, 'kaylie', 'kaffl', 'kkaffl@drew.edu', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`listingID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `listingID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'listing id autoincrements', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user id should be auto incrementing', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
