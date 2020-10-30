-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2020 at 11:22 AM
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
-- Table structure for table `business`
--

DROP TABLE IF EXISTS `business`;
CREATE TABLE IF NOT EXISTS `business` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `contact_number` varchar(12) NOT NULL DEFAULT '',
  `whatsapp_number` varchar(12) NOT NULL DEFAULT '',
  `landline_number` varchar(12) DEFAULT '',
  `website` varchar(255) DEFAULT '',
  `g_map` varchar(255) DEFAULT '',
  `address1` varchar(255) DEFAULT '',
  `address2` varchar(255) DEFAULT '',
  `pincode` varchar(10) DEFAULT '',
  `city` varchar(255) DEFAULT '',
  `state` varchar(255) DEFAULT '',
  `country` varchar(255) DEFAULT '',
  `est_year` varchar(10) DEFAULT '',
  `gst` varchar(20) DEFAULT '',
  `about` varchar(1000) DEFAULT '',
  `facebook` varchar(255) DEFAULT '',
  `twitter` varchar(255) DEFAULT '',
  `instagram` varchar(255) DEFAULT '',
  `linkedin` varchar(255) DEFAULT '',
  `youtube` varchar(255) DEFAULT '',
  `pinterest` varchar(255) DEFAULT '',
  `other1` varchar(255) DEFAULT '',
  `other2` varchar(255) DEFAULT '',
  `other3` varchar(255) DEFAULT '',
  `bankname` varchar(255) DEFAULT '',
  `account_no` varchar(255) DEFAULT '',
  `branchname` varchar(255) DEFAULT '',
  `ifsc_code` varchar(20) DEFAULT '',
  `account_holder_name` varchar(255) DEFAULT '',
  `account_type` varchar(255) DEFAULT '',
  `iban` varchar(255) DEFAULT '',
  `swift` varchar(255) DEFAULT '',
  `googlepay` varchar(255) DEFAULT '',
  `paytm` varchar(255) DEFAULT '',
  `googlepay_qr` varchar(255) DEFAULT '',
  `paytm_qr` varchar(255) DEFAULT '',
  `upiid` varchar(255) DEFAULT '',
  `phonepay` varchar(255) DEFAULT '',
  `phonepay_qr` varchar(255) DEFAULT '',
  `upiid_qr` varchar(255) DEFAULT '',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_agent` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `id_agent` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `name`, `url`, `company`, `email`, `contact_number`, `whatsapp_number`, `landline_number`, `website`, `g_map`, `address1`, `address2`, `pincode`, `city`, `state`, `country`, `est_year`, `gst`, `about`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `pinterest`, `other1`, `other2`, `other3`, `bankname`, `account_no`, `branchname`, `ifsc_code`, `account_holder_name`, `account_type`, `iban`, `swift`, `googlepay`, `paytm`, `googlepay_qr`, `paytm_qr`, `upiid`, `phonepay`, `phonepay_qr`, `upiid_qr`, `created_at`, `updated_at`, `is_admin`, `is_agent`, `id_agent`, `is_confirmed`, `is_deleted`) VALUES
(1, 'Cader', 'hasna', 'Hasna Technology', 'cadersoft@gmail.com', '9840033126', '9840033126', '', '', '', '#1 Jone Street', '', '', '', 'Choose...', 'Choose...', '2014', '1234567890', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-21 00:00:00', NULL, 0, 0, 0, 0, 0);

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

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9rg78p0htncercokcpb76vup1t', '::1', 1601104082, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343038323b),
('5qetbnoh2ejm5lsnjpq7l0db0n', '::1', 1601104094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343039343b),
('rga3aeet2mnahhp99lmpiqmcqu', '::1', 1601104099, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343039393b),
('9lmuhmf0v8lnns0hu81g25nivv', '::1', 1601104144, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343134343b),
('c4k6rbl4mlk86vfg34bbemic90', '::1', 1601104150, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343135303b),
('3ka2t285bmr0ckqdcresj57uor', '::1', 1601104151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343135313b),
('1u5u73b7uds19tkt4i6nfj6vq2', '::1', 1601104152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343135323b),
('s2c1tsbi2qam5tf3f84fhjp1no', '::1', 1601104157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343135373b),
('hq2cse9b45dmcf1o3tnup4g55b', '::1', 1601104158, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343135383b),
('b16l1qf47kaotf7vf25fsjc86j', '::1', 1601104164, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343136343b),
('2ksfb53kphidki0stfqjjr35cb', '::1', 1601104164, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343136343b),
('4qngtb5p2ibnahutfi1k978tkc', '::1', 1601104166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343136363b),
('9eng1r04qsqqh6l1ics0qishkr', '::1', 1601104167, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343136373b),
('nnc8q6jekqj78m62v59ge8hjql', '::1', 1601104232, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343233323b),
('8j7o4hinka8lsuule8sba103e3', '::1', 1601104545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343534353b),
('oaudph5ln3coqs586128efvihr', '::1', 1601104722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343732323b),
('g1s70f3j81qill4se32hcqfod7', '::1', 1601104748, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343734383b),
('s452lhoc7qjd4gqq2inl9nd3m1', '::1', 1601104925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343932353b),
('lr8ba1ads4eur01l6tv1o3bfjr', '::1', 1601104950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343935303b),
('fro9f2vvr7ho162cnkf12q8f8b', '::1', 1601104968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130343936383b),
('lou3k5pd6i9hinb6s7nfaoh46d', '::1', 1601105074, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353037343b),
('nj2avq8hk87brcdt2ddhlbuk7l', '::1', 1601105090, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353039303b),
('06ffbpalj147rq6c8vq0uq5lnn', '::1', 1601105162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136323b),
('tpcbm3ptqunief7ov385j8rlo9', '::1', 1601105162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136323b),
('efgbjk9o50nb34cg3h3v0tne3k', '::1', 1601105163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136333b),
('fm3dg6c6s52svih4u40c8n5no2', '::1', 1601105163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136333b),
('d8h4qmv3eeuuc5q294br818kmb', '::1', 1601105164, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136343b),
('i48issjoi30rl8brrqga9up7f2', '::1', 1601105165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136353b),
('3vsffveemsm2hhucr74otu6t61', '::1', 1601105165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136353b),
('smk68vb8699nms8vn5s7ek9gec', '::1', 1601105165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136353b),
('g8ku6f4oc3u66q6pkuh8snlt5v', '::1', 1601105165, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136353b),
('9cikt0i6cisrkpibl7f2cnt2js', '::1', 1601105166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136363b),
('5npa86obhgg8aqph2cu80cr8qd', '::1', 1601105166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313630313130353136363b);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(50) NOT NULL,
  `mrp` float NOT NULL,
  `our_price` float NOT NULL,
  `image` varchar(200) NOT NULL,
  `business_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product`, `mrp`, `our_price`, `image`, `business_id`, `created`) VALUES
(1, 'Name', 45, 5, 'bellow7.png', 1, '2020-10-24 00:00:00'),
(2, 'Name', 45, 5, 'bellow9.png', 1, '2020-10-24 15:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `companyName` varchar(150) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

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

-- --------------------------------------------------------

--
-- Table structure for table `youtube_video`
--

DROP TABLE IF EXISTS `youtube_video`;
CREATE TABLE IF NOT EXISTS `youtube_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `business_id` int(11) NOT NULL,
  `yt` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube_video`
--

INSERT INTO `youtube_video` (`id`, `business_id`, `yt`, `created`) VALUES
(9, 1, '', '2020-10-24 12:10:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
