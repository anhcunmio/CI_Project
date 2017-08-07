-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 08:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(99) NOT NULL,
  `menu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`) VALUES
(1, 'HOME'),
(2, 'APARREL'),
(5, 'FASHION'),
(6, 'NEWS'),
(7, 'CONTACT'),
(11, 'ABOUT US');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ques_id` int(99) NOT NULL,
  `ques_name` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques_id`, `ques_name`, `answer`) VALUES
(1, 'How to add icon', 'Dontent Lorem ipsum dolor sit amet, sed sint cetero sdew cssc vulputate novo te.'),
(2, 'How to delete event', 'Bontent Lorem ipsum dolor sit amet, sed sint cetero sdew cssc vulputate novo te.'),
(3, ' How to install Wordpress', 'Content Lorem ipsum dolor sit amet,etero sdew cssc vulputate novo te.'),
(4, 'How to create new FAQ', 'Dontent Lorem ipsum dolor sit amet, sed sint cetero sdew cssc vulputate novo te.'),
(5, ' How to install the demo Content', 'Eontent Lorem ipsum dolor sit amet, sed sint cetate novo te.'),
(6, 'Can the Theme be translated', '>Fontent Lorem ipsum dolor sit amet,'),
(7, 'How to add icon', 'Dontent Lorem ipsum dolor sit amet, sed sint cetero sdew cssc vulputate novo te.'),
(8, 'How to delete event', 'Bontent Lorem ipsum dolor sit amet, sed sint cetero sdew cssc vulputate novo te.'),
(9, ' How to install Wordpress', 'Content Lorem ipsum dolor sit amet,etero sdew cssc vulputate novo te.'),
(10, 'How to create new FAQ', 'Dontent Lorem ipsum dolor sit amet, sed sint cetero sdew cssc vulputate novo te.'),
(11, ' How to install the demo Content', 'Eontent Lorem ipsum dolor sit amet, sed sint cetate novo te.'),
(12, 'Can the Theme be translated', '>Fontent Lorem ipsum dolor sit amet,');

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `Recent_id` int(90) NOT NULL,
  `Recent_name` varchar(255) NOT NULL,
  `Recent_img` varchar(255) NOT NULL,
  `Recent_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`Recent_id`, `Recent_name`, `Recent_img`, `Recent_des`) VALUES
(1, 'recent1', 'recent1.jpg', 'abcxkasjdkfjsklafsdaf'),
(2, 'recent2', 'recent3.jpg', 'errervvdfvsfvsdf'),
(3, 'recent3', 'recent3.jpg', 'wefrefrew'),
(4, 'recent4', 'recent4.jpg', 'asdasfdasf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(99) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(4, 'Thu hang', 'cuuluoi98@gmail.com', '12345'),
(5, 'ngoc anh', 'admin@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `recent`
--
ALTER TABLE `recent`
  ADD PRIMARY KEY (`Recent_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ques_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `Recent_id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
