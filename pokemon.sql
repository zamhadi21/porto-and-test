-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 03:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `element_tb`
--

CREATE TABLE `element_tb` (
  `id_element` varchar(12) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_tb`
--

INSERT INTO `element_tb` (`id_element`, `name`) VALUES
('001', 'earth'),
('002', 'water'),
('003', 'wind');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon_element`
--

CREATE TABLE `pokemon_element` (
  `id_pokemon` varchar(12) NOT NULL,
  `id_element` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon_element`
--

INSERT INTO `pokemon_element` (`id_pokemon`, `id_element`) VALUES
('C1', '002'),
('C1', '003');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon_tb`
--

CREATE TABLE `pokemon_tb` (
  `id_pokemon` varchar(12) NOT NULL,
  `name` varchar(15) NOT NULL,
  `str` varchar(12) NOT NULL,
  `def` varchar(12) NOT NULL,
  `photo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon_tb`
--

INSERT INTO `pokemon_tb` (`id_pokemon`, `name`, `str`, `def`, `photo`) VALUES
('C1', 'bulbasaur', '54', '100', 0x36626431353738633861383266306434613662656439613134336463356431372e6a7067),
('c2', 'charmander', '40', '50', 0x70686f746f);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `element_tb`
--
ALTER TABLE `element_tb`
  ADD PRIMARY KEY (`id_element`);

--
-- Indexes for table `pokemon_element`
--
ALTER TABLE `pokemon_element`
  ADD KEY `id_pokemon` (`id_pokemon`),
  ADD KEY `id_element` (`id_element`);

--
-- Indexes for table `pokemon_tb`
--
ALTER TABLE `pokemon_tb`
  ADD PRIMARY KEY (`id_pokemon`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pokemon_element`
--
ALTER TABLE `pokemon_element`
  ADD CONSTRAINT `pokemon_element_ibfk_1` FOREIGN KEY (`id_pokemon`) REFERENCES `pokemon_tb` (`id_pokemon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pokemon_element_ibfk_2` FOREIGN KEY (`id_element`) REFERENCES `element_tb` (`id_element`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
