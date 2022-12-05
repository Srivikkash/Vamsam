-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 10:42 AM
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
-- Database: `vamsam`
--

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `landid` int(5) NOT NULL,
  `sqfeet` int(10) NOT NULL,
  `prize` int(10) NOT NULL,
  `rname` varchar(30) DEFAULT NULL,
  `rdate` date DEFAULT current_timestamp(),
  `rphone` bigint(10) DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`landid`, `sqfeet`, `prize`, `rname`, `rdate`, `rphone`, `rstatus`) VALUES
(608, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(609, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(610, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(611, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(612, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(613, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(614, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(615, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(616, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(617, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(618, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(619, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(620, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(621, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(622, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(623, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(624, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(625, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(626, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(627, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(628, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(629, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(630, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(631, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(632, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(633, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(634, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(635, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(636, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(637, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(638, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(639, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(640, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(641, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(642, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(643, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(644, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(645, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(646, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(647, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(648, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(649, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(650, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(651, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(652, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(653, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(654, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(655, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(656, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(657, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(658, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(659, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(660, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(661, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(662, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(663, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(664, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(665, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(666, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(667, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(668, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(669, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(670, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(671, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(672, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(673, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(674, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(675, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(676, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(677, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(678, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(679, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(680, 1000, 3000, NULL, '0000-00-00', NULL, 0),
(681, 1000, 3000, NULL, '0000-00-00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(5) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `uname`, `pwd`) VALUES
('u01', 'admin', 'vamsam@admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`landid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;