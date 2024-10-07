-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2023 at 06:39 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `no` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `messages` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`no`, `username`, `email`, `phone`, `messages`) VALUES
(1, 'khant ko', 'khant@gmail.com', '0977234677', 'Hi This is Admin!'),
(2, 'Adam', 'poker@gmail.com', '0928742245', 'Nice Page!         '),
(3, 'Tom', 'brady@gmail.com', '09873482883', 'This is a feedback.            '),
(4, 'Walker', 'saddamwalter@gmail.com', '09543322452', 'Hi This is User!            '),
(5, 'Rock', 'therock@gmail.com', '098113413444', 'This is the rock!            '),
(6, 'Cena', 'cancme@gmail.com', '09236356356', 'This is a message!');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL,
  `prices` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `ph_num` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  PRIMARY KEY (`order_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `prod_name`, `prices`, `user`, `ph_num`, `addr`) VALUES
(1, 'No Brainer', '45000', 'Bryan', '0912232344', 'No.3,24th Street,North Okkala'),
(2, 'The Stand', '27000', 'William', '09832245643', 'No.127,Thukha Street,Hlaing '),
(3, 'The Mysteries', '60000', 'Adam', '0977345624', 'No.146,Hnin Si Street,Mayangone'),
(4, 'Becoming', '20000', 'Hnin', '09245245524', 'No.13,AungMyayTharSi,Kamayut'),
(5, 'The Little Liar', '30000', 'Suzan', '0928452844', 'No.92,14th Street,La Thar'),
(6, 'Iron Flame', '36000', 'admin', '0943434344', 'Mayangone,3rd street,No.25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `prices` varchar(50) NOT NULL,
  `prod_img` varchar(50) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `author`, `prices`, `prod_img`) VALUES
(1, 'Iron Flame', 'Rebecca Yarros', '36000', 'b1.jpg'),
(2, 'The Little Liar', 'Mitch Albom', '30000', 'b2.jpg'),
(3, 'Murtagh', 'Christopher Paolini', '42000', 'b3.jpg'),
(4, 'My Name Is Babara', 'Babara Streisand', '40000', 'b4.jpg'),
(5, 'Narrow Road Desires', 'Patrick Rothfuss', '50000', 'b5.jpg'),
(6, 'Resurrection Walk', 'Michael Connelly', '54000', 'b6.jpg'),
(7, 'The Women', 'Kristin Hannah', '46000', 'b7.jpg'),
(8, 'Elon Musk', 'Walter Issacton', '82000', 'b8.jpg'),
(9, 'A Man Called OVE', 'Frederik Backman', '16000', 'b9.jpg'),
(10, 'Becoming', 'Michelle Obama', '20000', 'b10.jpg'),
(11, 'Beloved', 'Toni Morrison', '12000', 'b11.jpg'),
(12, 'Killing Floor', 'Lee Child', '16000', 'b12.jpg'),
(13, 'Just Because', 'Matthew McConaughey', '34000', 'b13.jpg'),
(14, 'No Brainer', 'Jeff Kinney', '45000', 'b14.jpg'),
(15, 'The Mysteries', 'Bill Watterson', '60000', 'b15.jpg'),
(16, 'Eclipse', 'Stephenie Meyer', '12500', 'b16.jpg'),
(17, 'Hatchet', 'Gray Paulsen', '10800', 'b17.jpg'),
(18, 'Catching Fire', 'Suzanne Collins', '14000', 'b18.jpg'),
(19, 'Coraline', 'Neil Gaiman', '22000', 'b19.jpg'),
(20, 'The Stand', 'Stephen King', '27000', 'b20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `No.` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Birthday` varchar(50) NOT NULL,
  PRIMARY KEY (`No.`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`No.`, `Name`, `Email`, `Mobile`, `Password`, `Birthday`) VALUES
(1, 'khant', 'khant@gmail.com', '0977482945', 'khant21', '2003-08-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
