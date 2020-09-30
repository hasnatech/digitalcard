  -- phpMyAdmin SQL Dump
  -- version 4.8.4
  -- https://www.phpmyadmin.net/
  --
  -- Host: 127.0.0.1:3306
  -- Generation Time: Sep 28, 2020 at 11:03 AM
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
  -- Database: `ecard`
  --

  -- --------------------------------------------------------

  --
  -- Table structure for table `ci_sessions`
  --

  DROP TABLE IF EXISTS `ci_sessions`;
  CREATE TABLE IF NOT EXISTS `ci_sessions` (
    `id` varchar(40) NOT NULL,
    `ip_address` varchar(45) NOT NULL,
    `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
    `data` blob NOT NULL,
    PRIMARY KEY (`id`),
    KEY `ci_sessions_timestamp` (`timestamp`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

  --
  -- Dumping data for table `ci_sessions`
  --


  --
  -- Table structure for table `users`
  --

  DROP TABLE IF EXISTS `users`;
  CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL DEFAULT '',
    `email` varchar(255) NOT NULL DEFAULT '',
    `password` varchar(255) NOT NULL DEFAULT '',
    `avatar` varchar(255) DEFAULT 'default.jpg',
    `created_at` datetime NOT NULL,
    `updated_at` datetime DEFAULT NULL,
    `is_admin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
    `is_confirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
    `is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
