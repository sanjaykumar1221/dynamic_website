-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 06:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2_for_visudh_pvt`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `sn` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `address` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`sn`, `name`, `email`, `phone`, `date`, `address`, `reason`) VALUES
(9, 'sanjay', 'kumar123@gmail.com', '', '0000-00-00', '', ''),
(12, 'sanjay', 'kumar123@gmail.com', '', '0000-00-00', '', ''),
(15, 'sanjay', 'kumar@gmail.com', '', '0000-00-00', '', ''),
(31, 'sanjay', 'sanjay765@gmail.com', '8787878787', '2021-04-30', 'Udaypuria mod, Jaipur', 'I am your friend'),
(33, 'sanjay', 'sanjay65@gmail.com', '8768766788', '2021-05-07', 'Udaypuria mod, Jaipur', 'I am just kidding'),
(36, 'sanjay', 'sanjay76@gmail.com', '8787878787', '2021-05-22', 'Udaypuria mod, Jaipur', 'I am '),
(48, 'Radha Kumari', 'radha114@gmail.com', '8867567895', '2021-05-14', 'Udaypuria mod, Jaipur', 'I am suffering from fever'),
(49, '', '', '', '0000-00-00', '', ''),
(50, 'Radha Kumari', 'radha114@gmail.com', '8867567895', '2021-05-14', 'Udaypuria mod, Jaipur', 'I am suffering from fever'),
(51, 'Radha Kumari', 'radha114@gmail.com', '8867567895', '2021-05-14', 'Udaypuria mod, Jaipur', 'I am suffering from fever'),
(55, '', '', '', '0000-00-00', '', ''),
(56, '', '', '', '0000-00-00', '', ''),
(57, 'sanjay kumar', 'sanjay7545@gmail.com', '9465576845', '2021-05-07', 'Udaypuria mod, Jaipur', 'I am suffering from cold fever'),
(58, '', '', '', '0000-00-00', '', ''),
(59, '', '', '', '0000-00-00', '', ''),
(60, '', '', '', '0000-00-00', '', ''),
(61, '', '', '', '0000-00-00', '', ''),
(62, 'sanjay jaiswal', 'sanjay@gamil.com', '8767568546', '2020-09-11', 'Udaypuria mod, Jaipur', 'I am suffering from cold fever');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
