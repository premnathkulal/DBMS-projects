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
-- Table structure for table `former`
--

CREATE TABLE `former` (
  `for_id` varchar(100) NOT NULL,
  `for_name` varchar(100) NOT NULL,
  `passwrd` varchar(150) NOT NULL,
  `f_state` varchar(100) NOT NULL,
  `f_city` varchar(100) NOT NULL,
  `f_pincode` int(100) NOT NULL,
  `f_phno` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `former`
--

INSERT INTO `former` (`for_id`, `for_name`, `passwrd`, `f_state`, `f_city`, `f_pincode`, `f_phno`) VALUES
('aki123', 'sharan', '456', 'Karnataka', 'puttur', 574211, 87895654231),
('ihiu', 'oop', 'hh', 'Gujrath', 'soorath', 46565, 46546),
('io', 'io', 'io', 'Karnataka', 'oio', 0, 0),
('iop123', 'iop', 'iop123', 'Gujrath', 'Soorath', 568978, 8970296845),
('Mo123', 'Mobile', 'abc', 'Karnataka', 'Bantwal', 1234, 4321),
('op', 'op', '123', 'Karnataka', 'op', 0, 0),
('prem123', 'PREMN', '123', 'Gujrath', 'Manglore', 57422156, 8722275074);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `former`
--
ALTER TABLE `former`
  ADD PRIMARY KEY (`for_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
