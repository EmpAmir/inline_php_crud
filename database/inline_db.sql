-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2022 at 06:16 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inline_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `age` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `contact`, `email`, `address`, `age`) VALUES
(1, 'John', '9223654411', 'jsmith@sample.com', 'new York', '30'),
(10, 'Smith', '7448541452', 'smith@gmail.com', 'contai', '32'),
(11, 'Amir', '8866008738', 'amir@gmail.com', 'Jerthan', '30'),
(12, 'Harry', '7554125485', 'harry@gmail.com', 'vegas', '45');

-- --------------------------------------------------------

--
-- Table structure for table `members1`
--

DROP TABLE IF EXISTS `members1`;
CREATE TABLE IF NOT EXISTS `members1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members1`
--

INSERT INTO `members1` (`id`, `name`, `contact`, `email`, `address`) VALUES
(5, 'Amir', '8866008738', 'Khan@gmail.com', 'jerthan,egra'),
(6, 'Rahul', '9332634411', 'rahul@gmail.com', 'Egra');

-- --------------------------------------------------------

--
-- Table structure for table `members2`
--

DROP TABLE IF EXISTS `members2`;
CREATE TABLE IF NOT EXISTS `members2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members2`
--

INSERT INTO `members2` (`id`, `name`, `contact`, `email`, `address`) VALUES
(1, 'Nizam', '0912345678', 'jsmith@sample.com', 'Newyork'),
(6, 'Sham', '7441524485', 'sham@gmail.com', 'Washinton');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
