-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:13 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `graf_tool`
--

CREATE TABLE `graf_tool` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graf_tool`
--

INSERT INTO `graf_tool` (`id`, `date`) VALUES
(5, '2018-11-08'),
(7, '2018-11-09'),
(12, '2018-11-09'),
(13, '2018-11-09'),
(19, '2018-11-13'),
(26, '2018-11-14'),
(27, '2018-11-30'),
(28, '2018-11-30'),
(29, '2018-12-01'),
(30, '2018-11-08'),
(31, '2018-11-08'),
(32, '2018-11-08'),
(33, '2018-11-08'),
(34, '2018-11-08'),
(35, '2018-11-08'),
(36, '2018-11-08'),
(37, '2018-11-08'),
(38, '2018-12-01'),
(39, '2018-12-01'),
(40, '2018-12-02'),
(41, '2018-12-02'),
(42, '2018-12-02'),
(43, '2018-12-02'),
(44, '2018-12-02'),
(45, '2018-12-02'),
(46, '2018-12-02'),
(47, '2018-12-02'),
(48, '2018-12-02'),
(49, '2018-12-02'),
(50, '2018-12-02'),
(51, '2018-12-02'),
(52, '2018-12-02'),
(53, '2018-12-02'),
(54, '2018-12-02'),
(55, '2018-12-02'),
(56, '2018-12-02'),
(57, '2018-12-02'),
(58, '2018-12-02'),
(59, '2018-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graf_tool`
--
ALTER TABLE `graf_tool`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graf_tool`
--
ALTER TABLE `graf_tool`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
