-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 13, 2024 at 04:11 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Final Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `GitLink` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Projects`
--

INSERT INTO `Projects` (`id`, `name`, `filename`, `GitLink`, `description`) VALUES
(1, 'Arithmetic Expression Evaluator', 'project1.png', 'https://github.com/Antonio43567/Arithmetic-Expression-Evaluator-', 'In my data structures class I developed a semester-long project to create an evaluator for complex arithmetic expressions involving arbitrarily large integers and implemented a BigInt class capable of handling unlimited-sized integers, subject to memory constraints.'),
(2, 'NYC Tour Website', 'project2.jpg', 'https://github.com/Antonio43567/FS-Project-Tour', 'Created a web page using HTML, CSS, JS, and JQuery to create a NYC tour demo website'),
(3, 'My full-stack project', 'project3.jpg', 'https://github.com/Antonio43567/final-project-template', 'The portfolio project you\'re currently viewing is a web application that serves front end pages, with a back end API\r\nto do CRUD operations saved to a MySQL database.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Projects`
--
ALTER TABLE `Projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
