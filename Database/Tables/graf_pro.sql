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
-- Table structure for table `graf_pro`
--

CREATE TABLE `graf_pro` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graf_pro`
--

INSERT INTO `graf_pro` (`id`, `date`) VALUES
(5, '2018-11-24'),
(6, '2018-11-25'),
(7, '2018-11-22'),
(8, '2018-11-22'),
(9, '2018-11-22'),
(11, '2018-11-21'),
(12, '2018-11-21'),
(13, '2018-11-21'),
(14, '2018-11-21'),
(16, '2018-11-20'),
(19, '2018-11-29'),
(20, '2018-11-29'),
(21, '2018-11-29'),
(22, '2018-11-30'),
(23, '2018-11-30'),
(24, '2018-11-30'),
(26, '2018-11-30'),
(27, '2018-11-30'),
(28, '2018-12-01'),
(29, '2018-12-01'),
(30, '2018-12-02'),
(31, '2018-12-02'),
(32, '2018-12-02'),
(33, '2018-12-02'),
(34, '2018-12-02'),
(35, '2018-12-02'),
(36, '2018-12-02'),
(37, '2018-12-02'),
(38, '2018-12-02'),
(39, '2018-12-02'),
(40, '2018-12-02'),
(41, '2018-12-02'),
(42, '2018-12-02'),
(43, '2018-12-02'),
(44, '2018-12-02'),
(45, '2018-12-02'),
(46, '2018-12-02'),
(47, '2018-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graf_pro`
--
ALTER TABLE `graf_pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graf_pro`
--
ALTER TABLE `graf_pro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
