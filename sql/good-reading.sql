-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2016 at 10:13 AM
-- Server version: 5.5.52
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cl22-goodreads`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `author_number` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_name` varchar(255) NOT NULL,
  `year_born` smallint(4) unsigned NOT NULL,
  `year_died` smallint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`author_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_number`, `author_name`, `year_born`, `year_died`) VALUES
(1, 'Alan Lee', 1947, NULL),
(2, 'Andre Norton', 1912, 2005),
(3, 'Brian Fraud', 1947, NULL),
(4, 'Flannery O''Connor', 1925, 1964),
(5, 'Frances Hodgson Burnett', 1849, 1924),
(6, 'Greg Iles', 1960, NULL),
(7, 'Harper Lee', 1926, 2016),
(8, 'Herbert George Wells', 1866, 1946),
(9, 'Isaac Asimov', 1920, 1992),
(10, 'James Baldwin', 1924, 1987),
(11, 'James Patterson', 1947, NULL),
(12, 'Jane Austen', 1775, 1817),
(13, 'John Green', 1977, NULL),
(14, 'Jojo Moyes', 1969, NULL),
(15, 'Michael Ledwidge', 1971, NULL),
(16, 'Nicholas Sparks', 1965, NULL),
(17, 'Orson Scott Card', 1951, NULL),
(18, 'Peter Abrahams', 1919, NULL),
(19, 'Richard Sapir', 1936, 1987),
(20, 'Rick Yancey', 1962, NULL),
(21, 'Robin McKinley', 1952, NULL),
(22, 'Warren Murphy', 1933, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_number` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) NOT NULL,
  `publication_year` smallint(4) unsigned NOT NULL,
  `pages` smallint(5) unsigned NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  PRIMARY KEY (`book_number`),
  KEY `publisher_name` (`publisher_name`),
  KEY `publisher_name_2` (`publisher_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_number`, `book_name`, `publication_year`, `pages`, `publisher_name`) VALUES
(1, '1st to Die', 2001, 462, 'Little, Brown and Company'),
(2, '24 Hours', 2001, 448, 'Signet'),
(3, '2nd Chance', 2003, 432, 'Warner Books'),
(4, 'Beauty: A Retelling of the Story of Beauty and the Beast', 1993, 247, 'HarperCollins'),
(5, 'Bullseye', 2016, 368, 'Little, Brown and Company'),
(6, 'Dear John', 2009, 352, 'Grand Central Publishing'),
(7, 'Ender''s Game', 1994, 352, 'Souvenir Press Ltd'),
(8, 'Faeries', 1978, 188, 'Souvenir Press Ltd'),
(9, 'Fantastic Voyage', 1988, 208, 'Random House Publishing Group'),
(10, 'Giovanni''s Room', 2013, 169, 'Vintage Books'),
(11, 'Good Man Is Hard To Find & Other Stories', 1977, 276, 'Houghton Mifflin Harcourt'),
(12, 'I, Robot', 2008, 256, 'Random House Publishing Group'),
(13, 'Lights Out', 2002, 352, 'Random House Publishing Group'),
(14, 'Me Before You', 2016, 400, 'Penguin Publishing Group'),
(15, 'Norby The Mixed-Up Robot', 2010, 96, 'Dover Children''s Classic Series'),
(16, 'Paper Towns', 2009, 336, 'Penguin Young Readers Group'),
(17, 'Pride and Prejudice', 1972, 399, 'Penguin Classics'),
(18, 'Summit Chase', 2013, 200, 'Gere Donovan Press'),
(19, 'The 5th Wave', 2013, 592, 'G.P. Putnam''s Sons '),
(20, 'The Best Of Me', 2012, 320, 'Grand Central Publishing '),
(21, 'The Notebook', 2004, 240, 'Warner Books'),
(22, 'The Secret Garden', 2005, 272, 'Barnes & Noble'),
(23, 'To Kill A Mockingbird', 1988, 384, 'Grand Central Publishing'),
(24, 'Ware Hawk', 1984, 258, 'Del Rey Books'),
(25, 'Wheels of Chance', 1896, 313, 'J. M. Dent & Co');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_number` int(10) unsigned NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_number`, `customer_name`, `street`, `city`, `state`, `country`) VALUES
(1, 'Diana Davis', '35 Fairfield Parkway', 'Fargo', 'North Dakota', 'USA'),
(2, 'Nancy Gomez', '121 Southridge Lane', 'Valdosta', 'Georgia', 'USA'),
(3, 'Fred Roberts', '9 Main Crossing', 'Gilbert', 'Arizona', 'USA'),
(4, 'Terry Hicks', '47487 Loomis Park', 'Ashburn', 'Virginia', 'USA'),
(5, 'Jeremy Black', '8409 Ridge Oak Circle', 'Topeka', 'Kansas', 'USA'),
(6, 'Todd Edwards', '49393 Sage Place', 'Caldecott', 'Oxfordshire', 'UK'),
(7, 'Henry Rice', '206 Schlimgen Parkway', 'Dallas', 'Texas', 'USA'),
(8, 'Frances Ramirez', '914 Golden Leaf Alley', 'Gainford', 'Durham', 'UK'),
(9, 'Johnny West', '3917 Monica Pass', 'Buckie', 'Banffshire', 'UK'),
(10, 'Jerry Dean', '141 Del Sol Crossing', 'Sacramento', 'California', 'USA'),
(11, 'Steve Turner', '7 Carioca Avenue', 'Sarasota', 'Florida', 'USA'),
(12, 'Philip Smith', '40 Dakota Point', 'Phoenix', 'Arizona', 'USA'),
(13, 'Joseph Cole', '672 Bellgrove Drive', 'London', 'Surrey', 'UK'),
(14, 'Samuel Hart', '08690 Stone Corner Alley', 'Topeka', 'Kansas', 'USA'),
(15, 'Margaret Greene', '9118 Susan Drive', 'Metairie', 'Louisiana', 'USA'),
(16, 'Juan Graham', '27 Green Ridge Center', 'Phoenix', 'Arizona', 'USA'),
(17, 'Gerald Foster', '994 Transport Plaza', 'Ocala', 'Florida', 'USA'),
(18, 'Rachel Kelley', '90 Fairfield Place', 'Wilmington', 'Delaware', 'USA'),
(19, 'Donna Burns', '45 Mandrake Plaza', 'Bolton', 'Manchester', 'UK'),
(20, 'Lois Hanson', '614 North Junction', 'Denver', 'Colorado', 'USA'),
(21, 'Mildred Martin', '1054 Sycamore Parkway', 'Flint ', 'Michigan', 'USA'),
(22, 'Mark Brooks', '0043 Sugar Way', 'Chicago', 'Illinois', 'USA'),
(23, 'Victor Fernandez', '53 Service Park', 'Salt Lake', 'Utah', 'USA'),
(24, 'Denise Larson', '044 Killdeer Circle', 'Naperville', 'Illinois', 'USA'),
(25, 'Deborah Parker', '45475 Hauk Drive', 'Toledo', 'Ohio', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `publisher_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `year_founded` smallint(4) unsigned NOT NULL,
  PRIMARY KEY (`publisher_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_name`, `city`, `country`, `telephone`, `year_founded`) VALUES
('Anchor Books', 'New York', 'USA', '(212) 572-2882', 1953),
('Barnes & Noble', 'New York', 'USA', '00 1 201-559-3882', 1886),
('Del Rey Books', 'New York', 'USA', '212-782-9000', 1977),
('Dover Publications', 'New York', 'USA', '516-294-7000', 1941),
('G.P. Putnam''s Sons', 'New York', 'USA', '212-414-3610', 1838),
('Gere Donovan Press', 'Washington', 'USA', '(866) 220-9373', 1998),
('Grand Central Publishing', 'New York', 'USA', '1-800-222-6747', 1970),
('HarperCollins', 'New York', 'USA', '212-207-7000', 1817),
('Houghton Mifflin Harcourt', 'Boston', 'USA', '617-351-3546', 1832),
('J. M. Dent & Co', 'London', 'UK', '020-7240-3444', 1888),
('Little, Brown and Company', 'New York', 'USA', '800-759-0190', 1837),
('Penguin Classics', 'London', 'UK', '44 20 70103000', 1946),
('Penguin Publishing Group', 'London', 'UK', '44 20 70103000', 1935),
('Penguin Young Readers Group', 'New York', 'USA', '212-366-2000', 2002),
('Puffin Books', 'New York', 'USA', '212 366-2795', 1940),
('Random House Publishing Group', 'New York', 'USA', '1-800-733-3000', 1927),
('Signet', 'New York', 'USA', '(212) 366-2385', 1948),
('Souvenir Press Ltd', 'London', 'UK', '(020) 7580 9307-8', 1951),
('Tom Doherty Associates', 'New York', 'USA', '212-388-0100', 1980),
('Turner Publishing', 'Nashville', 'USA', '615-255-2665', 1985),
('Vintage Books', 'New York', 'USA', '(212) 572-2882', 1954),
('Warner Books', 'New York', 'USA', '212-522-7200', 1970);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `book_number` int(10) unsigned NOT NULL,
  `customer_number` int(10) unsigned NOT NULL,
  `date` date NOT NULL,
  `price` decimal(10,0) unsigned NOT NULL,
  `quantity` smallint(5) unsigned NOT NULL,
  KEY `book_number` (`book_number`),
  KEY `customer_number` (`customer_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`book_number`, `customer_number`, `date`, `price`, `quantity`) VALUES
(14, 1, '2016-07-28', '493', 1),
(1, 2, '2016-07-28', '262', 2),
(3, 3, '2016-07-28', '140', 1),
(21, 4, '2016-07-28', '500', 1),
(20, 5, '2016-07-29', '603', 1),
(5, 6, '2016-07-29', '252', 1),
(15, 7, '2016-07-29', '368', 3),
(21, 8, '2016-07-30', '500', 1),
(12, 2, '2016-07-30', '170', 1),
(14, 9, '2016-07-30', '493', 1),
(11, 10, '2016-07-30', '280', 2),
(16, 11, '2016-07-30', '747', 2),
(23, 11, '2016-07-31', '311', 1),
(23, 12, '2016-07-31', '311', 1),
(12, 13, '2016-07-31', '510', 3),
(1, 14, '2016-07-31', '262', 2),
(14, 1, '2016-07-31', '1974', 4),
(4, 15, '2016-08-01', '510', 1),
(25, 16, '2016-08-01', '400', 2),
(25, 17, '2016-08-01', '400', 2),
(4, 18, '2016-08-02', '510', 1),
(24, 19, '2016-08-02', '1067', 3),
(18, 20, '2016-08-03', '752', 5),
(10, 1, '2016-08-03', '528', 2),
(8, 21, '2016-08-03', '205', 1),
(4, 22, '2016-08-03', '510', 1),
(9, 23, '2016-08-03', '199', 1),
(2, 24, '2016-08-03', '421', 2),
(5, 20, '2016-08-03', '1007', 4),
(22, 25, '2016-08-04', '700', 2),
(17, 25, '2016-08-04', '737', 3),
(7, 12, '2016-08-04', '1702', 5),
(6, 21, '2016-08-04', '889', 3),
(11, 1, '2016-08-04', '272', 1),
(20, 3, '2016-08-04', '1207', 2),
(14, 1, '2016-07-28', '493', 1),
(1, 2, '2016-07-28', '262', 2),
(3, 3, '2016-07-28', '140', 1),
(21, 4, '2016-07-28', '500', 1),
(20, 5, '2016-07-29', '603', 1),
(5, 6, '2016-07-29', '252', 1),
(15, 7, '2016-07-29', '368', 3),
(21, 8, '2016-07-30', '500', 1),
(12, 2, '2016-07-30', '170', 1),
(14, 9, '2016-07-30', '493', 1),
(11, 10, '2016-07-30', '280', 2),
(16, 11, '2016-07-30', '747', 2),
(23, 11, '2016-07-31', '311', 1),
(23, 12, '2016-07-31', '311', 1),
(12, 13, '2016-07-31', '510', 3),
(1, 14, '2016-07-31', '262', 2),
(14, 1, '2016-07-31', '1974', 4),
(4, 15, '2016-08-01', '510', 1),
(25, 16, '2016-08-01', '400', 2),
(25, 17, '2016-08-01', '400', 2),
(4, 18, '2016-08-02', '510', 1),
(24, 19, '2016-08-02', '1067', 3),
(18, 20, '2016-08-03', '752', 5),
(10, 1, '2016-08-03', '528', 2),
(8, 21, '2016-08-03', '205', 1),
(4, 22, '2016-08-03', '510', 1),
(9, 23, '2016-08-03', '199', 1),
(2, 24, '2016-08-03', '421', 2),
(5, 20, '2016-08-03', '1007', 4),
(22, 25, '2016-08-04', '700', 2),
(17, 25, '2016-08-04', '737', 3),
(7, 12, '2016-08-04', '1702', 5),
(6, 21, '2016-08-04', '889', 3),
(11, 1, '2016-08-04', '272', 1),
(20, 3, '2016-08-04', '1207', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wrote`
--

CREATE TABLE IF NOT EXISTS `wrote` (
  `book_number` int(10) unsigned NOT NULL,
  `author_number` int(10) unsigned NOT NULL,
  KEY `book_number` (`book_number`),
  KEY `author_number` (`author_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wrote`
--

INSERT INTO `wrote` (`book_number`, `author_number`) VALUES
(1, 11),
(2, 6),
(3, 11),
(4, 21),
(5, 11),
(5, 15),
(6, 16),
(7, 17),
(8, 1),
(8, 3),
(9, 9),
(10, 10),
(11, 4),
(12, 9),
(13, 18),
(14, 14),
(15, 9),
(16, 13),
(17, 12),
(18, 19),
(18, 22),
(19, 20),
(20, 16),
(21, 16),
(22, 5),
(23, 7),
(24, 2),
(25, 8);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `publisher_name_fk` FOREIGN KEY (`publisher_name`) REFERENCES `publisher` (`publisher_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `book_number_fk2` FOREIGN KEY (`book_number`) REFERENCES `book` (`book_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_number_fk` FOREIGN KEY (`customer_number`) REFERENCES `customer` (`customer_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wrote`
--
ALTER TABLE `wrote`
  ADD CONSTRAINT `author_number_fk` FOREIGN KEY (`author_number`) REFERENCES `author` (`author_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_number_fk` FOREIGN KEY (`book_number`) REFERENCES `book` (`book_number`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
