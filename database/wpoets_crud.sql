-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2025 at 09:07 PM
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
-- Database: `wpoets_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `link_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `category`, `title`, `subtitle`, `image_url`, `link_url`) VALUES
(1, 'Learning', 'Usability enhancement and Training for Transaction Portal for Customers', 'Digital Learning Infrastructure', 'images/DL-Learning-1.jpg', 'https://loremipsum.io/'),
(2, 'Learning', 'Learning 2', 'Lorem Ipsum', 'images/DL-Technology.jpg', 'https://loremipsum.io/'),
(7, 'Learning', 'Learn 3', 'Lorem Ipsum', 'images/DL-Learning-1.jpg', 'https://loremipsum.io/'),
(8, 'Communication', 'Comm 1', 'Commm1', 'images/DL-Learning-1.jpg', 'https://loremipsum.io/'),
(9, 'Technology', 'tech 1', 'Lorem Ipsum', 'images/DL-Technology.jpg', 'https://loremipsum.io/'),
(10, 'Communication', 'Comm 2 ', 'comm 2', 'images/DL-Communication.jpg', 'https://loremipsum.io/'),
(11, 'Technology', 'Tech 2', 'Lorem Ipsum', 'images/DL-Technology.jpg', 'https://loremipsum.io/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
