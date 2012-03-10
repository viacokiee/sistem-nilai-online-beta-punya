-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2012 at 09:52 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblab`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Sistem Komputer'),
(2, 'Teknik Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `ket`
--

CREATE TABLE IF NOT EXISTS `ket` (
  `id_ket` int(5) NOT NULL AUTO_INCREMENT,
  `nama_ket` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ket`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ket`
--

INSERT INTO `ket` (`id_ket`, `nama_ket`) VALUES
(1, 'Lulus'),
(2, 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id_level` int(5) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(30) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `mutu`
--

CREATE TABLE IF NOT EXISTS `mutu` (
  `id_mutu` int(5) NOT NULL AUTO_INCREMENT,
  `nama_mutu` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mutu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mutu`
--

INSERT INTO `mutu` (`id_mutu`, `nama_mutu`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_npm` int(5) NOT NULL,
  `id_jurusan` int(5) NOT NULL,
  `id_mutu` int(5) NOT NULL,
  `id_ket` int(5) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `angkatan` int(10) NOT NULL,
  PRIMARY KEY (`id_npm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--


-- --------------------------------------------------------

--
-- Table structure for table `publish`
--

CREATE TABLE IF NOT EXISTS `publish` (
  `id_publish` int(5) NOT NULL AUTO_INCREMENT,
  `nama_publish` varchar(10) NOT NULL,
  PRIMARY KEY (`id_publish`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `publish`
--

INSERT INTO `publish` (`id_publish`, `nama_publish`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_level` int(5) NOT NULL,
  `id_publish` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama`, `id_level`, `id_publish`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 1),
('iman', '5be9a68073f66a56554e25614e9f1c9a', 'iman', 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
