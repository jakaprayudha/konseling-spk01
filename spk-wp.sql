-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 10:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(20) NOT NULL,
  `alternatif` varchar(20) NOT NULL,
  `C1` varchar(20) NOT NULL,
  `C2` varchar(20) NOT NULL,
  `C3` varchar(20) NOT NULL,
  `C4` varchar(20) NOT NULL,
  `C5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`) VALUES
('12', 'DD', '3', '4', '5', '4', '5'),
('13', 'IMELDA', '4', '4', '4', '3', '3'),
('14', 'INDRA', '5', '3', '5', '5', '3'),
('142945', 'IVO', '5', '3', '5', '4', '3'),
('15', 'RAPDITA', '5', '4', '5', '4', '4'),
('160431', 'ACHMAD YANI', '5', '3', '3', '3', '3'),
('269501', 'D', '5', '3', '3', '3', '5'),
('270173', 'TK', '5', '4', '5', '5', '5'),
('27833', 'M', '5', '3', '5', '3', '5'),
('289582', 'NRL', '5', '3', '5', '5', '5'),
('348084', 'ALVI', '5', '5', '4', '5', '5'),
('486908', 'RS', '5', '5', '5', '5', '5'),
('861390', 'DS', '3', '3', '3', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `dataasli`
--

CREATE TABLE `dataasli` (
  `id` int(20) NOT NULL,
  `nama/inisial` varchar(30) NOT NULL,
  `usia` char(80) NOT NULL,
  `C1` char(98) NOT NULL,
  `C2` char(98) NOT NULL,
  `C3` char(98) NOT NULL,
  `C4` char(98) NOT NULL,
  `C5` char(98) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataasli`
--

INSERT INTO `dataasli` (`id`, `nama/inisial`, `usia`, `C1`, `C2`, `C3`, `C4`, `C5`) VALUES
(1, 'DD', '37', '75', '85', '90', '80', '95'),
(2, 'IMELDA', '30', '86', '85', '80', '75', '75'),
(3, 'INDRA', '41', '95', '75', '95', '95', '75'),
(4, 'IVO', '27', '95', '75', '95', '80', '75'),
(5, 'RAPDITA', '36', '90', '85', '90', '85', '85'),
(6, 'ACHMAD_YANI', '49', '95', '75', '75', '75', '75'),
(7, 'D', '36', '95', '75', '75', '75', '95'),
(8, 'TK', '50', '95', '80', '95', '95', '90'),
(9, 'M', '31', '95', '79', '90', '75', '90'),
(10, 'NRL', '26', '95', '76', '95', '90', '90'),
(11, 'ALVI', '24', '95', '95', '80', '90', '90'),
(12, 'RS', '34', '95', '95', '95', '95', '95'),
(13, 'DS', '20', '75', '75', '75', '80', '90');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(20) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` varchar(20) NOT NULL,
  `cost_benefit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `bobot`, `cost_benefit`) VALUES
('1', 'c1 Pengalaman kerja', '4', 'benefit'),
('2', 'c2 Pendidikan', '5', 'benefit'),
('3', 'c3 Kreativitas', '3', 'benefit'),
('4', 'c4 keahlian teknis', '4', 'benefit'),
('5', 'c5 Dedikasi', '5', 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `Id` int(11) DEFAULT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`Id`, `Username`, `Password`) VALUES
(1, 'aji', 'aji'),
(2, 'aji', 'aji'),
(1, 'aji', 'aji'),
(2, 'aji', 'aji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `dataasli`
--
ALTER TABLE `dataasli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);


  

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataasli`
--
ALTER TABLE `dataasli`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
