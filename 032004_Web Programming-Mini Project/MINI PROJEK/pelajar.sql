-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2014 at 05:03 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE IF NOT EXISTS `pelajar` (
  `nomatrik` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `sesi` varchar(20) NOT NULL,
  `sesigraduasi` varchar(20) NOT NULL,
  `cgpa` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelefon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`nomatrik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`nomatrik`, `nama`, `bidang`, `sesi`, `sesigraduasi`, `cgpa`, `status`, `alamat`, `notelefon`, `email`) VALUES
('1', '1', 'DTMM  ', '2012/2013', '2014/2015', '1', '', '2', '2', '2'),
('31999', 'zaiham', 'IT', '2014', '2016/2017', '3.56', 'DILULUSKAN', 'merang', '014545824', 'zaiham_ja@gmail.com'),
('32004', 'hazim', 'IT     ', '2012', '', '', 'DILULUSKAN', '  johor', '045856574', 'ajimlala@gmail.com'),
('32055', 'cuki', 'IT  ', '2014', '', '', 'DILULUSKAN', ' ', '', ''),
('32071', 'AZRI', 'MULTIMEDIA', '2013', '', '', 'BELAJAR', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
