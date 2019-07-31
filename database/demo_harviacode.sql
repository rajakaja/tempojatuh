-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 06:06 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `tgl_pangkat1` date NOT NULL,
  `tgl_pangkat2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id`, `nama`, `nip`, `tgl_pangkat1`, `tgl_pangkat2`) VALUES
(1, 'Mas Admin', '198001022000021001', '2013-09-30', '2017-09-30'),
(2, 'Mas Kuncung', '198001022000021002', '2013-10-15', '2017-10-15'),
(3, 'Mas Sugeng', '198001022000021003', '2013-11-30', '2017-11-30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pangkat`
--
CREATE TABLE `view_pangkat` (
`id` int(11)
,`nama` varchar(100)
,`nip` varchar(20)
,`tgl_pangkat1` date
,`tgl_pangkat2` date
,`selisih` int(7)
);

-- --------------------------------------------------------

--
-- Structure for view `view_pangkat`
--
DROP TABLE IF EXISTS `view_pangkat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pangkat`  AS  select `pangkat`.`id` AS `id`,`pangkat`.`nama` AS `nama`,`pangkat`.`nip` AS `nip`,`pangkat`.`tgl_pangkat1` AS `tgl_pangkat1`,`pangkat`.`tgl_pangkat2` AS `tgl_pangkat2`,(to_days(`pangkat`.`tgl_pangkat2`) - to_days(now())) AS `selisih` from `pangkat` ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
