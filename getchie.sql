-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 04:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getchie`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `card_id` int(11) NOT NULL,
  `card_image` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `nick_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`card_id`, `card_image`, `card_name`, `nick_name`) VALUES
(13, '6454450bdf7ef.png', 'S+ [Evo] Erebos the Knight of Steel', 'evoerebos'),
(14, '64544528025d0.png', 'S+ [Evo] Kaguya', 'evokaguya'),
(15, '6454455609ebe.png', 'S+ [Evo] The Judge Anubis', 'evojudgeanubis'),
(16, '64544575b0dee.png', 'S+ [Evo] Winter', 'evowinter'),
(17, '6454458e4a40e.png', 'S+ [Legendary] Winter', 'legwinter');

-- --------------------------------------------------------

--
-- Table structure for table `pendants`
--

CREATE TABLE `pendants` (
  `pendant_id` int(11) NOT NULL,
  `pendant_image` varchar(100) NOT NULL,
  `pendant_name` varchar(100) NOT NULL,
  `nick_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendants`
--

INSERT INTO `pendants` (`pendant_id`, `pendant_image`, `pendant_name`, `nick_name`) VALUES
(3, '64545bdb8dc59.png', '[Dark] Jumping Black Hole Generator', 'jumpingbh'),
(4, '64545c121163b.png', '[Dark] Magnetic Bleeding Core', 'magnetbleed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `pendants`
--
ALTER TABLE `pendants`
  ADD PRIMARY KEY (`pendant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pendants`
--
ALTER TABLE `pendants`
  MODIFY `pendant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
