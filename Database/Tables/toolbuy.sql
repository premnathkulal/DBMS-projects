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
-- Table structure for table `toolbuy`
--

CREATE TABLE `toolbuy` (
  `id` int(100) NOT NULL,
  `for_id` varchar(100) NOT NULL,
  `tool_id` int(100) NOT NULL,
  `amt` int(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `piec` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toolbuy`
--

INSERT INTO `toolbuy` (`id`, `for_id`, `tool_id`, `amt`, `date`, `status`, `piec`) VALUES
(29, 'prem123', 16, 750, '2018-12-02', 'N', 1);

--
-- Triggers `toolbuy`
--
DELIMITER $$
CREATE TRIGGER `tool_g` AFTER INSERT ON `toolbuy` FOR EACH ROW begin

INSERT INTO graf_tool(date)
SELECT Max(date)
FROM toolbuy;

end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toolbuy`
--
ALTER TABLE `toolbuy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tool_id` (`tool_id`),
  ADD KEY `for_id` (`for_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toolbuy`
--
ALTER TABLE `toolbuy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `toolbuy`
--
ALTER TABLE `toolbuy`
  ADD CONSTRAINT `toolbuy_ibfk_1` FOREIGN KEY (`tool_id`) REFERENCES `agritools` (`tool_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `toolbuy_ibfk_2` FOREIGN KEY (`for_id`) REFERENCES `former` (`for_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
