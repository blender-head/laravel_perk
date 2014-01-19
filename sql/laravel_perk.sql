-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2014 at 12:10 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_perk`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `bio` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`, `created_at`, `updated_at`) VALUES
(10, 'Author 3', 'Author 3 bio', '2013-12-30 06:12:45', '2013-12-30 06:12:45'),
(11, 'Author 4', 'Author 4 bio', '2013-12-30 06:12:45', '2013-12-30 06:12:45'),
(12, 'Author 5', 'Author 5 bio', '2013-12-30 06:12:45', '2013-12-30 06:12:45'),
(13, 'Author 6', 'Author 6 bio', '2013-12-30 06:12:45', '2013-12-30 06:12:45'),
(14, 'Author 7', 'Author 7 bio', '2013-12-30 06:12:45', '2013-12-30 06:12:45'),
(17, 'Author 10', 'Author 10 bio', '2013-12-30 06:12:45', '2013-12-30 07:56:44'),
(18, 'Author 11', 'Author 11 bio', '2013-12-30 06:46:03', '2013-12-30 07:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_migrations`
--

CREATE TABLE IF NOT EXISTS `laravel_migrations` (
  `bundle` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`bundle`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laravel_migrations`
--

INSERT INTO `laravel_migrations` (`bundle`, `name`, `batch`) VALUES
('application', '2013_12_30_034104_create_authors_table', 1),
('application', '2013_12_30_035024_add_authors', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
