-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2020 at 08:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(8) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `minitial` varchar(3) DEFAULT NULL,
  `barangay` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `map_add` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `civil_stat` varchar(50) NOT NULL,
  `pos_date` date NOT NULL,
  `level` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `admit_date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `lname`, `fname`, `minitial`, `barangay`, `municipality`, `city`, `map_add`, `age`, `gender`, `civil_stat`, `pos_date`, `level`, `hospital`, `admit_date`, `status`) VALUES
(1, 'ABCDE', 'FGHIJKLM', 'N.', 'Sambag 1', 'Cebu', 'Cebu City', '12.12355674,100.1243456,8', 66, 'Female', 'Single', '2020-07-01', 'Asymptomatic', 'Chong Hua Hospital', '2020-07-04', 'Admitted'),
(2, 'Quarantina', 'Covida', 'M.', 'Guadalupe', 'Cebu', 'Cebu City', '123456,7839013', 55, 'Female', 'Single', '2020-07-12', 'Asymptomatic', 'VSMMC', '2020-07-13', 'Admitted'),
(3, 'Qwesrtsdf', 'Ronaldo', '', 'Labangon', 'Cebu', 'Cebu City', '09831534,5879764', 43, 'Male', 'Married', '2020-04-12', 'Mild', 'VSMMC', '2020-07-14', 'Negative'),
(5, 'Palasyo', 'Renato', 'S.', 'Talamban', 'Cebu', 'Cebu City', '13253732,93468340', 73, 'Male', 'Widow', '2020-06-22', 'Critical', 'Cebu Doctor\'s University Hospital', '2020-07-19', 'Expired');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
