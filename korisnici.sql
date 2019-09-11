-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2019 at 08:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korisnici`
--

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

DROP TABLE IF EXISTS `registracija`;
CREATE TABLE IF NOT EXISTS `registracija` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `korisnicko_ime` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`id`, `email`, `korisnicko_ime`, `lozinka`, `lozinka1`) VALUES
(1, 'nikola@nikola', 'nikola83', 'nikola', 'nikola'),
(2, 'petar@petar', 'petar55', 'petar55', 'petar55'),
(3, 'dragan@dragan', 'dragan99', 'dragan99', 'dragan99'),
(4, 'nikola@nikola55', 'nikola55', 'nikola55', 'nikola55'),
(5, 'mika@mika', 'mika55', 'mika55', 'mika55'),
(6, 'dragana@dragana', 'dragana33', 'drg333', 'drg333'),
(7, 'nesto@nesto', 'batman', 'robin55', 'robin55'),
(8, 'predrag@predrag', 'pedja89', 'pedjolino', 'pedjolino');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
