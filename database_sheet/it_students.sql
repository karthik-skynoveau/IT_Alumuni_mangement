-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 04:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_connection`
--

-- --------------------------------------------------------

--
-- Table structure for table `it_students`
--

CREATE TABLE `it_students` (
  `id` int(6) NOT NULL,
  `registerno` varchar(15) NOT NULL,
  `stdname` varchar(100) NOT NULL,
  `phno` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpyname` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `it_students`
--

INSERT INTO `it_students` (`id`, `registerno`, `stdname`, `phno`, `email`, `cpyname`, `location`) VALUES
(21, '82607134002', 'Anandaraj S', '16026079740', 'anandaraj.subramanian@gmail.com', 'TCS', 'USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it_students`
--
ALTER TABLE `it_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `it_students`
--
ALTER TABLE `it_students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
