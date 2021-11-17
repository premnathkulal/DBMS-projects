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
-- Table structure for table `vegsel`
--

CREATE TABLE `vegsel` (
  `s_id` int(200) NOT NULL,
  `for_id` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_type` varchar(150) NOT NULL,
  `quality` text NOT NULL,
  `weight` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegsel`
--

INSERT INTO `vegsel` (`s_id`, `for_id`, `pro_name`, `pro_type`, `quality`, `weight`, `amount`, `time`) VALUES
(136, 'prem123', 'GARLIC', 'baby', 'GHJ', 189, 32, '2018-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vegsel`
--
ALTER TABLE `vegsel`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `for_id` (`for_id`),
  ADD KEY `pro_name` (`pro_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vegsel`
--
ALTER TABLE `vegsel`
  MODIFY `s_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vegsel`
--
ALTER TABLE `vegsel`
  ADD CONSTRAINT `vegsel_ibfk_1` FOREIGN KEY (`for_id`) REFERENCES `former` (`for_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vegsel_ibfk_2` FOREIGN KEY (`pro_name`) REFERENCES `products` (`pro_name`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
