-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 11:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_details` text NOT NULL,
  `p_price` varchar(10) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `p_subcat_id` int(11) NOT NULL,
  `p_brand_id` int(11) NOT NULL,
  `p_small` varchar(255) NOT NULL,
  `p_medium` varchar(255) NOT NULL,
  `p_large` varchar(255) NOT NULL,
  `p_arival_date` varchar(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_products_brand` (
  `p_brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`p_brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_products_brand`
--

INSERT INTO `tbl_products_brand` (`p_brand_id`, `p_brand_name`) VALUES
(1, 'Lotto'),
(2, 'Fusion'),
(3, 'Easy'),
(4, 'OutLook'),
(5, 'Arong'),
(6, 'Galliver'),
(7, 'Raymond'),
(8, 'Test 123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_category`
--

CREATE TABLE IF NOT EXISTS `tbl_products_category` (
  `p_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`p_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_products_category`
--

INSERT INTO `tbl_products_category` (`p_cat_id`, `p_cat_name`) VALUES
(1, 'Womens'),
(2, 'Mens'),
(3, 'Kids'),
(5, 'Winter'),
(6, 'Accessoris'),
(7, 'Fast Food');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_products_subcategory` (
  `p_subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_subcat_name` varchar(255) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  PRIMARY KEY (`p_subcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_products_subcategory`
--

INSERT INTO `tbl_products_subcategory` (`p_subcat_id`, `p_subcat_name`, `p_cat_id`) VALUES
(2, '3-Pieces', 1),
(3, 'T-Shirt', 1),
(4, 'Borkha', 1),
(5, 'Body Spary', 1),
(6, 'T-Shirt', 2),
(7, 'Full Pants', 2),
(8, 'Formal Shirt', 2),
(9, 'Body Spary', 2),
(10, 'For Women', 5),
(11, 'For Men', 5),
(12, 'Mobile', 6),
(13, 'Laptop', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
