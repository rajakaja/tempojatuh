-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2019 at 11:31 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_harviacode`
--

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id`, `nama`, `nip`, `jatuh_tempo`) VALUES
(1, 'Mas Admin', '198001022000021001', '2019-09-30'),
(2, 'Mas Kuncung', '198001022000021002', '2019-10-15'),
(3, 'Mas Sugeng', '198001022000021003', '2019-08-05'),
(4, 'yanis', '195410111980031004', '2019-08-07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pangkat`
-- (See below for the actual view)
--
CREATE TABLE `view_pangkat` (
`id` int(11)
,`nama` varchar(100)
,`nip` varchar(20)
,`jatuh_tempo` date
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Structure for view `view_pangkat`
--
DROP TABLE IF EXISTS `view_pangkat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pangkat`  AS  select `pangkat`.`id` AS `id`,`pangkat`.`nama` AS `nama`,`pangkat`.`nip` AS `nip`,`pangkat`.`jatuh_tempo` AS `jatuh_tempo`,to_days(`pangkat`.`jatuh_tempo`) - to_days(current_timestamp()) AS `selisih` from `pangkat` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
