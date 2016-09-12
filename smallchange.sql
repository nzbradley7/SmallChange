-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 11:32 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smallchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobID` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `type` text NOT NULL,
  `location` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `name`, `description`, `type`, `location`, `email`, `phone`) VALUES
(15, 'Out of work actor needed!', 'Testing the line breaks<br />\r\n<br />\r\nline breaks', 'Barista', 'port test', 'test@test.com', '00'),
(21, 'Stick picker upper', 'Pick up sticks from the ground to tidy up the subdivision then plant grass and talk nicely to it so it grows.', 'manual labour', 'pango point vanuatu', 'bdc.vanuatu@gmail.com', '5555555'),
(22, 'Out of work actor needed!', 'blab', 'Hitman', 'port test', 'asdasd@craic.com', '939302'),
(23, 'Test Job', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at placerat dui. Nullam tempor luctus dui, sed bibendum justo fermentum ut. In lacinia elementum mauris, in facilisis velit facilisis vitae. Donec quis iaculis dolor. Nullam sed elit vehicula, sollicitudin nisi eget, cursus magna. Nunc ipsum augue, dignissim ac lectus non, accumsan congue risus. Aenean gravida sapien non eros dapibus, eu placerat ante porttitor. Fusce hendrerit, elit quis volutpat tincidunt, enim justo lacinia turpis, id rhoncus elit ante vitae ipsum. Curabitur et pellentesque quam, in tincidunt risus.<br />\r\n<br />\r\nUt a lectus convallis, dapibus ligula eget, efficitur nunc. Phasellus luctus vestibulum mattis. Curabitur lacus ipsum, sollicitudin eu condimentum sed, pulvinar a est. Mauris id magna et odio ornare euismod non nec mi. Phasellus sed arcu mollis, dictum urna eu, dignissim leo. Aenean tempor tincidunt libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla vel nisl a augue pellentesque porta. Cras ac posuere nisi.', 'Test Type', 'Test Location', 'test@test.com', '00000000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'dev', 'dev@test.com', 'e77989ed21758e78331b20e477fc5582');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
