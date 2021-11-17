-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:12 AM
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
-- Table structure for table `costemer`
--

CREATE TABLE `costemer` (
  `cos_id` varchar(100) NOT NULL,
  `cos_name` varchar(100) NOT NULL,
  `passwrd` varchar(150) NOT NULL,
  `c_state` varchar(100) NOT NULL,
  `c_city` varchar(100) NOT NULL,
  `c_pincode` int(100) NOT NULL,
  `c_phno` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costemer`
--

INSERT INTO `costemer` (`cos_id`, `cos_name`, `passwrd`, `c_state`, `c_city`, `c_pincode`, `c_phno`) VALUES
('prem124', 'Prem', '123', 'Gujrath', 'Mangluru', 574211, 8722275074);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costemer`
--
ALTER TABLE `costemer`
  ADD PRIMARY KEY (`cos_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
