-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 10:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whereishouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `password` varchar(13) NOT NULL,
  `images` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fullname`, `password`, `images`) VALUES
(1, 'muvunyi patrick ', 'pazzo', ''),
(2, 'muvunyi patrick ', 'pazzo', ''),
(3, 'muvunyi patrick ', 'pazzo', ''),
(4, 'huye student ', 'pazz', 0x686f7573652e6a7067),
(5, 'imariyo batpiste ', 'asdfgh', 0x6d61702e6a7067),
(6, 'NIYOMUGABO ', 'WERUIOYUIY', 0x6e657720686f6d652e6a7067),
(7, 'BANANAYO Sosthe ', 'irizina', 0x53637265656e73686f7420283338292e706e67),
(8, 'BIZAZA PHP ', 'BIRIGUKUNDA', 0x636c69656e74342e706e67),
(9, 'muvunyi2000 ', 'hgtyynn', 0x53637265656e73686f7420283337292e706e67),
(10, 'muvunyi2000 ', 'rterywyrds', 0x53637265656e73686f7420283337292e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `comissioner`
--

CREATE TABLE `comissioner` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `password` varchar(8) NOT NULL,
  `telnumber` int(15) NOT NULL,
  `district` varchar(40) NOT NULL,
  `sector` varchar(40) NOT NULL,
  `cell` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_nbr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comissioner`
--

INSERT INTO `comissioner` (`id`, `fullname`, `password`, `telnumber`, `district`, `sector`, `cell`, `email`, `id_nbr`) VALUES
(6, 'muvunyi patrick', 'muvunyi', 781632401, 'kamonyi', 'gacurabwenge', 'kigembe', 'muhayimana212@GMAIL.COM', 2147483647),
(7, 'happi', 'psaword', 2147483647, 'huye', 'huye', 'ngoma', 'muvunyi@gmail.com', 2147483647),
(8, 'mama patrick', 'haleluya', 998474667, 'ASDFGVN', 'tyujkl', 'ngaram', 'gikongoro@gmail.com', 2147483647),
(9, 'URUKUNDO rwawe', 'pazzo', 789434456, 'runda', 'sector', 'gatsibo', 'muvunyi patrick', 2147483647),
(10, 'URUKUNDO rwawe', 'pazzo', 789434456, 'runda', 'sector', 'gatsibo', 'muvunyi patrick', 2147483647),
(11, 'rekandebenexa', 'sftrt', 789998872, 'kamonyi', 'gacurabwenge', 'kigembe', 'muvunyipatrick', 2147483647),
(12, 'ABABA bazaz', 'nibo', 2147483647, 'bokurugarika', 'bavuka', 'bavuga', 'muvunyi patrick', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `loginclients`
--

CREATE TABLE `loginclients` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `tel_number` int(15) NOT NULL,
  `province` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `sector` varchar(40) NOT NULL,
  `cell` varchar(40) NOT NULL,
  `images` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comissioner`
--
ALTER TABLE `comissioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginclients`
--
ALTER TABLE `loginclients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comissioner`
--
ALTER TABLE `comissioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `loginclients`
--
ALTER TABLE `loginclients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
