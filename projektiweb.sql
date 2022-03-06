-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 09:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `antaret`
--

CREATE TABLE `antaret` (
  `antariid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `datalindjes` date DEFAULT NULL,
  `nrpersonal` bigint(20) DEFAULT NULL,
  `telefoni` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fjalekalimi` varchar(30) DEFAULT NULL,
  `roli` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antaret`
--

INSERT INTO `antaret` (`antariid`, `emri`, `mbiemri`, `datalindjes`, `nrpersonal`, `telefoni`, `email`, `fjalekalimi`, `roli`) VALUES
(1, 'Leonard', 'Ademi', '2002-09-09', 1112, NULL, 'leonardademi00@hotmail.com', 'Leo123', b'1'),
(2, 'Elsa', 'Topalli', '1998-08-08', 11132, NULL, 'elsatopalli@hotmail.com', 'Elsa123', b'1'),
(3, 'Premtim', 'Pasjaqa', '2000-10-10', 123456789, '044999999', 'premtimpasjaqa@hotmail.com', 'Premtim123', b'0'),
(4, 'Filan', 'Demi', '1986-09-26', 123456789, '044999999', 'filanfisteku@gmail.com', '123456', b'0'),
(5, 'Filan', 'Gashi', '1987-09-26', 123456789, '044999999', 'filanfisteku@gmail.com', '123456', b'0'),
(6, 'Filan', 'Bislimi', '1976-09-26', 123456789, '044999999', 'filanfisteku@hotmail.com', '123456', b'0'),
(7, 'Filan', 'Shala', '1983-09-26', 123456789, '044999999', 'filanfisteku@outlook.com', '123456', b'0'),
(8, 'Filan', 'Mazreku', '1978-09-26', 123456789, '044999999', 'filanfisteku@gmail.com', '123456', b'0'),
(9, 'Filane', 'Gashi', '1983-09-26', 123456789, '044999999', 'filanfisteku@gmail.com', '123456', b'0'),
(10, 'Filane', 'Pirevacm vbn', '1980-09-26', 123456789, '044999999cvncnc n', 'filanfisteku@gmail.comc', 'fjalekalimi', b'0'),
(30, 'Filan', 'Demi', NULL, NULL, '11112222', 'andidemi00@hotmail.com', '12332', NULL);

-- --------------------------------------------------------
update antaret 
set emri='Leonard',mbiemri='Ademi'
where antariid=1;

--
-- Table structure for table `projektet`
--

CREATE TABLE `projektet` (
  `projektiid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `pershkrimi` text DEFAULT NULL,
  `datafillimit` date NOT NULL,
  `datambarimit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projektet`
--

INSERT INTO `projektet` (`projektiid`, `emri`, `pershkrimi`, `datafillimit`, `datambarimit`) VALUES
(1, 'comWeb', 'Projekti qe mundeson menaxhimin e puneve qe kryhen nga anetaret', '2019-06-17', '2019-08-03'),
(2, 'commm', 'sakldjlkahfsjk;', '2019-01-17', '2019-10-03'),
(3, 'Financa', 'Projekti per menaxhimin e financave', '2018-01-17', '2019-10-03'),
(4, 'kontabiltet', 'Menaxhimi i studentave', '2019-01-17', '2021-10-03'),
(5, 'web', 'Projeket per klientat', '2019-01-17', '2021-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `trajnimet`
--

CREATE TABLE `trajnimet` (
  `trajnimetid` int(11) NOT NULL,
  `antariid` int(11) NOT NULL,
  `projektiid` int(11) DEFAULT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `pershkrimi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trajnimet`
--

INSERT INTO `trajnimet` (`trajnimetid`, `antariid`, `projektiid`, `data`, `pershkrimi`) VALUES
(1, 1, 2, '2020-04-17 17:14:20', 'test pershkrim'),
(2, 2, NULL, '2020-04-17 17:20:32', 'test'),
(3, 1, 1, '2019-07-15 00:00:00', 'krijimi i html css'),
(4, 2, 1, '2019-07-16 00:00:00', 'permirsimi i html css'),
(5, 3, 1, '2019-07-17 00:00:00', 'filtime me jquery'),
(6, 3, 1, '2019-07-16 00:00:00', 'formen per regjistrimin e antareve'),
(7, 1, 1, '2019-07-18 00:00:00', 'krijimin e databazes'),
(8, 4, 1, '2019-07-19 00:00:00', 'permirsimi i db'),
(9, 4, 1, '2019-07-20 00:00:00', 'permirsimi i db'),
(10, 5, 1, '2019-07-21 00:00:00', 'pyetsor per anetaret CRUD'),
(11, 5, 1, '2019-07-21 00:00:00', 'PHP funksionet per CRUD te anetaret'),
(12, 6, 1, '2019-07-16 00:00:00', 'PHP permirsime te anetaret'),
(13, 2, 1, '2019-07-16 00:00:00', 'permirsimi i db'),
(14, 3, 1, '2019-07-16 00:00:00', 'permirsimi i html css'),
(15, 1, 1, '0000-00-00 00:00:00', ''),
(16, 1, 4, '2222-02-22 00:00:00', 'KONTA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antaret`
--
ALTER TABLE `antaret`
  ADD PRIMARY KEY (`antariid`);

--
-- Indexes for table `projektet`
--
ALTER TABLE `projektet`
  ADD PRIMARY KEY (`projektiid`);

--
-- Indexes for table `trajnimet`
--
ALTER TABLE `trajnimet`
  ADD PRIMARY KEY (`trajnimetid`),
  ADD KEY `antariid` (`antariid`),
  ADD KEY `projektiid` (`projektiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antaret`
--
ALTER TABLE `antaret`
  MODIFY `antariid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `projektet`
--
ALTER TABLE `projektet`
  MODIFY `projektiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trajnimet`
--
ALTER TABLE `trajnimet`
  MODIFY `trajnimetid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trajnimet`
--
ALTER TABLE `trajnimet`
  ADD CONSTRAINT `trajnimet_ibfk_1` FOREIGN KEY (`antariid`) REFERENCES `antaret` (`antariid`),
  ADD CONSTRAINT `trajnimet_ibfk_2` FOREIGN KEY (`projektiid`) REFERENCES `projektet` (`projektiid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
