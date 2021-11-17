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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `s_user` varchar(150) NOT NULL,
  `passwrd` varchar(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `s_user`, `passwrd`, `name`, `location`) VALUES
('1', 'YES', '1', '1', 'Karnataka'),
('ghj', 'NO', '125', 'sdg', 'Kerala'),
('Mokshith123', 'NO', '123456789', 'Mokshith Kulal', 'Gujrath'),
('po123', 'NO', '321', 'Raju', 'Panjab'),
('prem123', 'YES', '123', 'premnath', 'Gujrath'),
('prem1234', 'YES', '456', 'huei', 'Karnataka'),
('prem124', 'YES', '897', 'sdvs', 'Karnataka'),
('prem1247', 'NO', '123', 'dfn', 'Karnataka'),
('prem@gmail.com', 'YES', '123', 'iop', 'Kerala'),
('premnathkulal1998@gmail.com', 'YES', '123', 'premnath', 'Karnataka'),
('raju', 'YES', '111', 'raju', 'Rajasthana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
