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
-- Table structure for table `cosform`
--

CREATE TABLE `cosform` (
  `cf_id` int(100) NOT NULL,
  `cos_id` varchar(100) NOT NULL,
  `for_id` varchar(100) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `waight` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(150) NOT NULL,
  `card_no` bigint(200) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `cosform`
--
DELIMITER $$
CREATE TRIGGER `graf_p` AFTER INSERT ON `cosform` FOR EACH ROW BEGIN

INSERT INTO graf_pro(date)
SELECT max(date)
FROM cosform;

end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cosform`
--
ALTER TABLE `cosform`
  ADD PRIMARY KEY (`cf_id`),
  ADD KEY `for_id` (`for_id`),
  ADD KEY `cos_id` (`cos_id`),
  ADD KEY `pro_name` (`pro_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cosform`
--
ALTER TABLE `cosform`
  MODIFY `cf_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cosform`
--
ALTER TABLE `cosform`
  ADD CONSTRAINT `cosform_ibfk_1` FOREIGN KEY (`for_id`) REFERENCES `former` (`for_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cosform_ibfk_2` FOREIGN KEY (`cos_id`) REFERENCES `costemer` (`cos_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cosform_ibfk_3` FOREIGN KEY (`pro_name`) REFERENCES `products` (`pro_name`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
