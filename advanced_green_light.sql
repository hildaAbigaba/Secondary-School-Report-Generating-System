-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2017 at 01:15 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advanced_green_light`
--

-- --------------------------------------------------------

--
-- Table structure for table `5arts_grading`
--

CREATE TABLE IF NOT EXISTS `5arts_grading` (
  `subject_id` varchar(20) NOT NULL,
  `grades` text NOT NULL,
  `award` varchar(20) NOT NULL,
  `value` varchar(11) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5arts_grading`
--

INSERT INTO `5arts_grading` (`subject_id`, `grades`, `award`, `value`, `remark`) VALUES
('GP', '', '', '', ''),
('HIST', '', '', '', ''),
('ECON', '', '', '', ''),
('LUGA', '', '', '', ''),
('ARAB', '', '', '', ''),
('ART', '', '', '', ''),
('ISLAM', '', '', '', ''),
('GEO', '', '', '', ''),
('ICT', '', '', '', ''),
('MATH', '', '', '', ''),
('ENT', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `5scs_grading`
--

CREATE TABLE IF NOT EXISTS `5scs_grading` (
  `subject_id` varchar(20) NOT NULL,
  `grades` text NOT NULL,
  `award` varchar(20) NOT NULL,
  `value` varchar(11) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5scs_grading`
--

INSERT INTO `5scs_grading` (`subject_id`, `grades`, `award`, `value`, `remark`) VALUES
('GP', '3,', '3', '1', 'Good'),
('MATH', '', '', '', ''),
('ECON', '', '', '', ''),
('PHYS', '3,2,1', 'A', '6', 'Excellent'),
('BIO', '3,5,9', 'O', '1', 'Improve'),
('CHEM', '3,3,1', 'B', '5', 'Very Good'),
('GEO', '', '', '', ''),
('ICT', '', '', '', ''),
('SUB_MATH', '4,', '4', '1', 'Fairly Good'),
('ENT', '', '', '', ''),
('ART', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `6arts_grading`
--

CREATE TABLE IF NOT EXISTS `6arts_grading` (
  `subject_id` varchar(20) NOT NULL,
  `grades` text NOT NULL,
  `award` varchar(20) NOT NULL,
  `value` varchar(11) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6arts_grading`
--

INSERT INTO `6arts_grading` (`subject_id`, `grades`, `award`, `value`, `remark`) VALUES
('GP', '4,', '4', '1', 'Fairly Good'),
('HIST', '4,6', 'D', '3', 'Fairly Good'),
('ECON', '', '', '', ''),
('LUGA', '2,4,3', 'B', '5', 'Very Good'),
('ARAB', '', '', '', ''),
('ART', '1,1,1,1', '', '', ''),
('ISLAM', '5,2,4', 'C', '4', 'Good'),
('GEO', '', '', '', ''),
('ICT', '3,', '3', '1', 'Good'),
('MATH', '', '', '', ''),
('ENT', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `6scs_grading`
--

CREATE TABLE IF NOT EXISTS `6scs_grading` (
  `subject_id` varchar(20) NOT NULL,
  `grades` text NOT NULL,
  `award` varchar(20) NOT NULL,
  `value` varchar(11) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6scs_grading`
--

INSERT INTO `6scs_grading` (`subject_id`, `grades`, `award`, `value`, `remark`) VALUES
('GP', '3,', '3', '1', 'Good'),
('MATH', '2,9', 'O', '1', 'Improve'),
('ECON', '', '', '', ''),
('PHYS', '1,3,2', 'A', '6', 'Excellent'),
('BIO', '', '', '', ''),
('CHEM', '', '', '', ''),
('GEO', '', '', '', ''),
('ICT', '3,', '3', '1', 'Good'),
('SUB_MATH', '', '', '', ''),
('ENT', '5,5,4', 'D', '3', 'Fairly Good'),
('ART', '3,3,3,3', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `arabic_5_arts`
--

CREATE TABLE IF NOT EXISTS `arabic_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arabic_5_arts`
--

INSERT INTO `arabic_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arabic_6_arts`
--

CREATE TABLE IF NOT EXISTS `arabic_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arabic_6_arts`
--

INSERT INTO `arabic_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biology5`
--

CREATE TABLE IF NOT EXISTS `biology5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biology5`
--

INSERT INTO `biology5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', ''),
('G/002', '70', '78', '30', '67', '35', '22', ''),
('G/003', '', '', '', '', '', '', ''),
('G/004', '', '', '', '', '', '', ''),
('G/005', '56', '82', '', '', '', '', ''),
('G/006', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `biology6`
--

CREATE TABLE IF NOT EXISTS `biology6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biology6`
--

INSERT INTO `biology6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chemistry5`
--

CREATE TABLE IF NOT EXISTS `chemistry5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry5`
--

INSERT INTO `chemistry5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', ''),
('G/002', '89', '60', '72', '56', '78', '90', ''),
('G/003', '', '', '', '', '', '', ''),
('G/004', '77', '78', '67', '78', '58', '77', ''),
('G/005', '62', '67', '', '', '', '', ''),
('G/006', '43', '31', '43', '35', '54', '65', '');

-- --------------------------------------------------------

--
-- Table structure for table `chemistry6`
--

CREATE TABLE IF NOT EXISTS `chemistry6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemistry6`
--

INSERT INTO `chemistry6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `econ5`
--

CREATE TABLE IF NOT EXISTS `econ5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `econ5`
--

INSERT INTO `econ5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '50', '50', '', '50', '50', '', ''),
('G/002', '', '', '', '', '', '', ''),
('G/003', '78', '64', NULL, '57', '83', '', ''),
('G/004', '', '', NULL, '', '', '', ''),
('G/005', '43', '82', '', '', '', '', ''),
('G/006', '', '', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `econ6`
--

CREATE TABLE IF NOT EXISTS `econ6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `econ6`
--

INSERT INTO `econ6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `econ_5_arts`
--

CREATE TABLE IF NOT EXISTS `econ_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `econ_5_arts`
--

INSERT INTO `econ_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', NULL, '', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `econ_6_arts`
--

CREATE TABLE IF NOT EXISTS `econ_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `econ_6_arts`
--

INSERT INTO `econ_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ent_5`
--

CREATE TABLE IF NOT EXISTS `ent_5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ent_5`
--

INSERT INTO `ent_5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL),
('G/003', NULL, NULL, NULL, '', '', '', NULL),
('G/004', '', '', '', '', '', '', NULL),
('G/006', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ent_5_arts`
--

CREATE TABLE IF NOT EXISTS `ent_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ent_5_arts`
--

INSERT INTO `ent_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '30', '55', '88', '30', '54', '87', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ent_6`
--

CREATE TABLE IF NOT EXISTS `ent_6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ent_6`
--

INSERT INTO `ent_6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '56', '45', '77', '55', '68', '52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ent_6_arts`
--

CREATE TABLE IF NOT EXISTS `ent_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ent_6_arts`
--

INSERT INTO `ent_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_art_5`
--

CREATE TABLE IF NOT EXISTS `f_art_5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `four_paper_mot` varchar(20) NOT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `four_paper_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_art_5`
--

INSERT INTO `f_art_5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `four_paper_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `four_paper_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', '', '', NULL),
('G/003', NULL, NULL, NULL, '', '', '', '', '', NULL),
('G/004', '', '', '', '', '', '', '', '', NULL),
('G/006', NULL, NULL, NULL, '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_art_5_arts`
--

CREATE TABLE IF NOT EXISTS `f_art_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `four_paper_mot` varchar(20) NOT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `four_paper_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_art_5_arts`
--

INSERT INTO `f_art_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `four_paper_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `four_paper_end`, `Total`) VALUES
('G/001', '45', '50', '60', '70', '55', '65', '45', '70', NULL),
('G/002', NULL, NULL, NULL, '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_art_6`
--

CREATE TABLE IF NOT EXISTS `f_art_6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `four_paper_mot` varchar(20) NOT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `four_paper_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_art_6`
--

INSERT INTO `f_art_6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `four_paper_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `four_paper_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_art_6_arts`
--

CREATE TABLE IF NOT EXISTS `f_art_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `four_paper_mot` varchar(20) NOT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `four_paper_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_art_6_arts`
--

INSERT INTO `f_art_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `four_paper_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `four_paper_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geo5`
--

CREATE TABLE IF NOT EXISTS `geo5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geo5`
--

INSERT INTO `geo5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', ''),
('G/002', '', '', '', '', '', '', ''),
('G/003', '79', '68', '72', '89', '47', '80', ''),
('G/004', '', '', '', '', '', '', ''),
('G/005', '62', '75', '', '', '', '', ''),
('G/006', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `geo6`
--

CREATE TABLE IF NOT EXISTS `geo6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geo6`
--

INSERT INTO `geo6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `geog_5_arts`
--

CREATE TABLE IF NOT EXISTS `geog_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geog_5_arts`
--

INSERT INTO `geog_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '56', '70', '54', '90', '65', '76', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `geog_6_arts`
--

CREATE TABLE IF NOT EXISTS `geog_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geog_6_arts`
--

INSERT INTO `geog_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gp5`
--

CREATE TABLE IF NOT EXISTS `gp5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp5`
--

INSERT INTO `gp5` (`id`, `paper_one_mot`, `paper_one_end`, `Total`) VALUES
('G/001', '80', '89', ''),
('G/002', '70', '70', ''),
('G/003', '70', '65', ''),
('G/004', '50', '67', ''),
('G/005', '77', '', ''),
('G/006', '70', '67', '');

-- --------------------------------------------------------

--
-- Table structure for table `gp6`
--

CREATE TABLE IF NOT EXISTS `gp6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp6`
--

INSERT INTO `gp6` (`id`, `paper_one_mot`, `paper_one_end`, `Total`) VALUES
('G/001', '66', '65', '');

-- --------------------------------------------------------

--
-- Table structure for table `gp_5_arts`
--

CREATE TABLE IF NOT EXISTS `gp_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_5_arts`
--

INSERT INTO `gp_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '67', NULL, NULL, '54', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gp_6_arts`
--

CREATE TABLE IF NOT EXISTS `gp_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_6_arts`
--

INSERT INTO `gp_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '55', NULL, NULL, '70', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_5_arts`
--

CREATE TABLE IF NOT EXISTS `history_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_5_arts`
--

INSERT INTO `history_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '56', '90', '', '34', '70', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_6_arts`
--

CREATE TABLE IF NOT EXISTS `history_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_6_arts`
--

INSERT INTO `history_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '65', '60', NULL, '56', '40', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ict5`
--

CREATE TABLE IF NOT EXISTS `ict5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict5`
--

INSERT INTO `ict5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_one_end`, `two_paper_end`, `Total`) VALUES
('G/001', '60', '90', '70', '60', ''),
('G/002', '', '', '', '', ''),
('G/003', '', '', '', '', ''),
('G/004', '60', '60', '67', '80', ''),
('G/005', '78', '', '', '', ''),
('G/006', '60', '76', '65', '76', '');

-- --------------------------------------------------------

--
-- Table structure for table `ict6`
--

CREATE TABLE IF NOT EXISTS `ict6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict6`
--

INSERT INTO `ict6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '79', NULL, NULL, '60', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ict_5_arts`
--

CREATE TABLE IF NOT EXISTS `ict_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict_5_arts`
--

INSERT INTO `ict_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', NULL, NULL, '', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ict_6_arts`
--

CREATE TABLE IF NOT EXISTS `ict_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ict_6_arts`
--

INSERT INTO `ict_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '70', NULL, NULL, '66', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `initials5`
--

CREATE TABLE IF NOT EXISTS `initials5` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `GP` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  `BIO` varchar(20) NOT NULL,
  `CHEM` varchar(20) NOT NULL,
  `PHYS` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `GEO` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `SUB_MTC` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `initials5`
--

INSERT INTO `initials5` (`id`, `GP`, `MATH`, `BIO`, `CHEM`, `PHYS`, `ECON`, `ENT`, `GEO`, `ART`, `ICT`, `SUB_MTC`) VALUES
(1, 'PP', 'HJ', 'MK', 'NJ', 'MK', 'MN', 'LO', 'JU', 'HY', 'KK', 'MO');

-- --------------------------------------------------------

--
-- Table structure for table `initials5_arts`
--

CREATE TABLE IF NOT EXISTS `initials5_arts` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `GP` varchar(20) NOT NULL,
  `HISTORY` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `LUGANDA` varchar(20) NOT NULL,
  `ARAB` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `ISLAM` varchar(20) NOT NULL,
  `GEOG` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `initials5_arts`
--

INSERT INTO `initials5_arts` (`id`, `GP`, `HISTORY`, `ECON`, `ENT`, `LUGANDA`, `ARAB`, `ART`, `ISLAM`, `GEOG`, `ICT`, `MATH`) VALUES
(1, 'UU', 'UU', 'UU', 'UU', 'UU', 'UU', 'UU', 'UU', 'UU', 'UU', 'UU');

-- --------------------------------------------------------

--
-- Table structure for table `initials6`
--

CREATE TABLE IF NOT EXISTS `initials6` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `GP` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  `BIO` varchar(20) NOT NULL,
  `CHEM` varchar(20) NOT NULL,
  `PHYS` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `GEO` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `SUB_MTC` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `initials6`
--

INSERT INTO `initials6` (`id`, `GP`, `MATH`, `BIO`, `CHEM`, `PHYS`, `ECON`, `ENT`, `GEO`, `ART`, `ICT`, `SUB_MTC`) VALUES
(1, 'KK', 'KK', 'KK', 'KK', 'KK', 'KK', 'KK', 'KK', 'KK', 'KK', 'KK');

-- --------------------------------------------------------

--
-- Table structure for table `initials6_arts`
--

CREATE TABLE IF NOT EXISTS `initials6_arts` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `GP` varchar(20) NOT NULL,
  `HIST` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `LUGA` varchar(20) NOT NULL,
  `ARAB` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `ISLAM` varchar(20) NOT NULL,
  `GEO` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `initials6_arts`
--

INSERT INTO `initials6_arts` (`id`, `GP`, `HIST`, `ECON`, `ENT`, `LUGA`, `ARAB`, `ART`, `ISLAM`, `GEO`, `ICT`, `MATH`) VALUES
(1, 'FF', 'FF', 'FF', 'FF', 'FF', 'FF', 'FF', 'FF', 'FF', 'FF', 'FF');

-- --------------------------------------------------------

--
-- Table structure for table `islam_5_arts`
--

CREATE TABLE IF NOT EXISTS `islam_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `islam_5_arts`
--

INSERT INTO `islam_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islam_6_arts`
--

CREATE TABLE IF NOT EXISTS `islam_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `islam_6_arts`
--

INSERT INTO `islam_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '60', '78', '80', '55', '72', '40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `luganda_5_arts`
--

CREATE TABLE IF NOT EXISTS `luganda_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luganda_5_arts`
--

INSERT INTO `luganda_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `luganda_6_arts`
--

CREATE TABLE IF NOT EXISTS `luganda_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luganda_6_arts`
--

INSERT INTO `luganda_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '70', '75', '65', '80', '50', '70', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `math5`
--

CREATE TABLE IF NOT EXISTS `math5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math5`
--

INSERT INTO `math5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '89', '70', '', '80', '70', '', ''),
('G/002', '', '', '', '', '', '', ''),
('G/003', '45', '67', NULL, '70', '68', '', ''),
('G/004', '67', '78', NULL, '57', '73', '', ''),
('G/005', '', '', '', '', '', '', ''),
('G/006', '67', '73', NULL, '65', '76', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `math6`
--

CREATE TABLE IF NOT EXISTS `math6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math6`
--

INSERT INTO `math6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '87', '56', NULL, '66', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `physics5`
--

CREATE TABLE IF NOT EXISTS `physics5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physics5`
--

INSERT INTO `physics5` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '90', '70', '87', '95', '72', '84', ''),
('G/002', '56', '67', '78', '78', '89', '82', ''),
('G/003', '', '', '', '', '', '', ''),
('G/004', '66', '89', '67', '55', '45', '56', ''),
('G/005', '68', '36', '', '', '', '', ''),
('G/006', '56', '54', '86', '76', '34', '84', '');

-- --------------------------------------------------------

--
-- Table structure for table `physics6`
--

CREATE TABLE IF NOT EXISTS `physics6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physics6`
--

INSERT INTO `physics6` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '77', '89', '75', '88', '46', '82', '');

-- --------------------------------------------------------

--
-- Table structure for table `s5`
--

CREATE TABLE IF NOT EXISTS `s5` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `combination` varchar(20) NOT NULL,
  `Term` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `House` varchar(20) NOT NULL,
  `nextdate` varchar(20) NOT NULL,
  `class_tr` varchar(20) NOT NULL,
  `Head_tr` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `PHYS` varchar(20) NOT NULL,
  `BIO` varchar(20) NOT NULL,
  `CHEM` varchar(20) NOT NULL,
  `GEO` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `GP` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `SUB_MATH` varchar(20) NOT NULL,
  `POINTS` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s5`
--

INSERT INTO `s5` (`id`, `firstname`, `middlename`, `lastname`, `class`, `sex`, `combination`, `Term`, `year`, `House`, `nextdate`, `class_tr`, `Head_tr`, `MATH`, `ECON`, `ENT`, `PHYS`, `BIO`, `CHEM`, `GEO`, `ART`, `GP`, `ICT`, `SUB_MATH`, `POINTS`) VALUES
('G/001', 'kalule', 'TEDDY', 'richard', 'S.5', 'MALE', 'PEM/ICT', 'II', '2017', 'MECCA', '6/25/2017', 'KATENDE HASSAN', 'NANGOBI SUMAYAH', '', 'E (6,6)', '', 'A (1,3,1)', '', '', '', '', '1', '3', '', '15'),
('G/002', 'Ssekagya', '', 'Hassan', 'S.5', 'MALE', 'PCB/M', 'II', '2017', 'JIDDAH', '6/25/2017', 'KATENDE HASSAN', 'NANGOBI SUMAYAH', '', '', '', 'A (3,2,1)', 'O (3,5,9)', 'B (3,3,1)', '', '', '3', '', '4', '14'),
('G/003', 'Namuddu', '', 'Daria', 'S.5', 'FEMALE', 'MEG/MTC', 'II', '2017', '', '6/25/2017', 'KATENDE HASSAN', 'NANGOBI SUMAYAH', 'C (5,3)', 'B (3,3)', '', '', '', '', 'C (1,5,2)', '', '3', '', '2', '15'),
('G/004', 'Najjemba', '', 'shakirah', 'S.5', 'FEMALE', 'PCM/ICT', 'II', '2017', '', '6/25/2017', 'KATENDE HASSAN', 'NANGOBI SUMAYAH', 'B (4,2)', '', '', 'C (4,3,4)', '', 'B (2,3,3)', '', '', '5', '4', '', '16'),
('G/006', 'Nakawunde', '', 'Fatumah', 'S.5', 'FEMALE', 'PCM/ICT', 'II', '2017', '', '6/25/2017', 'KATENDE HASSAN', 'NANGOBI SUMAYAH', 'B (3,3)', '', '', 'E (3,7,1)', '', 'O (8,7,6)', '', '', '3', '4', '', '10');

-- --------------------------------------------------------

--
-- Table structure for table `s5_arts`
--

CREATE TABLE IF NOT EXISTS `s5_arts` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `combination` varchar(20) NOT NULL,
  `Term` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `House` varchar(20) NOT NULL,
  `nextdate` varchar(20) NOT NULL,
  `class_tr` varchar(20) NOT NULL,
  `Head_tr` varchar(20) NOT NULL,
  `HIST` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `LUGA` varchar(20) NOT NULL,
  `ARAB` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `ISLAM` varchar(20) NOT NULL,
  `GEO` varchar(20) NOT NULL,
  `GP` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  `POINTS` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s5_arts`
--

INSERT INTO `s5_arts` (`id`, `firstname`, `middlename`, `lastname`, `class`, `sex`, `combination`, `Term`, `year`, `House`, `nextdate`, `class_tr`, `Head_tr`, `HIST`, `ECON`, `ENT`, `LUGA`, `ARAB`, `ART`, `ISLAM`, `GEO`, `GP`, `ICT`, `MATH`, `POINTS`) VALUES
('G/001', 'KALULE', '', 'HAKIM', 'S.5', 'MALE', 'HEG/MTC', 'II', '2017', 'JIDDAH', '6/25/2017', 'SSEKAGYA MAHAD', 'NANGOBI SUMAYAH', 'E (7,1)', '', 'O (9,6,1)', '', '', '', '', 'B (3,3,3)', '', '', '', '10'),
('G/002', 'ssekagya', '', 'Mahad', 'S.5', 'MALE', 'LEI/MTC', 'II', '2017', 'MEDINA', '6/25/2017', 'SSEKAGYA MAHAD', 'NANGOBI SUMAYAH', '', '', '', '', '', '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `s6`
--

CREATE TABLE IF NOT EXISTS `s6` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `combination` varchar(20) NOT NULL,
  `Term` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `House` varchar(20) NOT NULL,
  `nextdate` varchar(20) NOT NULL,
  `class_tr` varchar(20) NOT NULL,
  `Head_tr` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `PHYS` varchar(20) NOT NULL,
  `BIO` varchar(20) NOT NULL,
  `CHEM` varchar(20) NOT NULL,
  `GEO` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `GP` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `SUB_MATH` varchar(20) NOT NULL,
  `POINTS` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s6`
--

INSERT INTO `s6` (`id`, `firstname`, `middlename`, `lastname`, `class`, `sex`, `combination`, `Term`, `year`, `House`, `nextdate`, `class_tr`, `Head_tr`, `MATH`, `ECON`, `ENT`, `PHYS`, `BIO`, `CHEM`, `GEO`, `ART`, `GP`, `ICT`, `SUB_MATH`, `POINTS`) VALUES
('G/001', 'Kakumba', '', 'HAKIM', 'S.6', 'MALE', 'PEM/ICT', 'II', '2017', 'MECCA', '6/25/2017', 'NAMAWA HALIMAH', 'NANGOBI SUMAYAH', 'O (2,9)', '', 'D (5,5,4)', 'A (1,3,2)', '', '', '', '', '3', '3', '', '12');

-- --------------------------------------------------------

--
-- Table structure for table `s6_arts`
--

CREATE TABLE IF NOT EXISTS `s6_arts` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `combination` varchar(20) NOT NULL,
  `Term` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `House` varchar(20) NOT NULL,
  `nextdate` varchar(20) NOT NULL,
  `class_tr` varchar(20) NOT NULL,
  `Head_tr` varchar(20) NOT NULL,
  `HIST` varchar(20) NOT NULL,
  `ECON` varchar(20) NOT NULL,
  `ENT` varchar(20) NOT NULL,
  `LUGA` varchar(20) NOT NULL,
  `ARAB` varchar(20) NOT NULL,
  `ART` varchar(20) NOT NULL,
  `ISLAM` varchar(20) NOT NULL,
  `GEO` varchar(20) NOT NULL,
  `GP` varchar(20) NOT NULL,
  `ICT` varchar(20) NOT NULL,
  `MATH` varchar(20) NOT NULL,
  `POINTS` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s6_arts`
--

INSERT INTO `s6_arts` (`id`, `firstname`, `middlename`, `lastname`, `class`, `sex`, `combination`, `Term`, `year`, `House`, `nextdate`, `class_tr`, `Head_tr`, `HIST`, `ECON`, `ENT`, `LUGA`, `ARAB`, `ART`, `ISLAM`, `GEO`, `GP`, `ICT`, `MATH`, `POINTS`) VALUES
('G/001', 'Namuddu', '', 'Daria', 'S.6', 'FEMALE', 'HIL/ICT', 'II', '2017', 'MECCA', '6/25/2017', 'NAMATOVU ZAINA', 'NANGOBI SUMAYAH', 'D (4,6)', '', '', 'B (2,4,3)', '', '', 'C (5,2,4)', '', '', '3', '', '14');

-- --------------------------------------------------------

--
-- Table structure for table `sub_math5`
--

CREATE TABLE IF NOT EXISTS `sub_math5` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `paper_two_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `paper_two_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_math5`
--

INSERT INTO `sub_math5` (`id`, `paper_one_mot`, `paper_two_mot`, `paper_three_mot`, `paper_one_end`, `paper_two_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', '', '', '', '', '', ''),
('G/002', '57', '', '', '67', '', '', ''),
('G/003', '68', '', NULL, '90', '', '', ''),
('G/004', '', '', NULL, '', '', '', ''),
('G/005', '62', '', '', '', '', '', ''),
('G/006', '', '', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_math6`
--

CREATE TABLE IF NOT EXISTS `sub_math6` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `paper_two_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `paper_two_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_math6`
--

INSERT INTO `sub_math6` (`id`, `paper_one_mot`, `paper_two_mot`, `paper_three_mot`, `paper_one_end`, `paper_two_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', NULL, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_math_5_arts`
--

CREATE TABLE IF NOT EXISTS `sub_math_5_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_math_5_arts`
--

INSERT INTO `sub_math_5_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '55', NULL, NULL, '68', '', '', NULL),
('G/002', NULL, NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_math_6_arts`
--

CREATE TABLE IF NOT EXISTS `sub_math_6_arts` (
  `id` varchar(20) NOT NULL,
  `paper_one_mot` varchar(20) DEFAULT NULL,
  `two_paper_mot` varchar(20) DEFAULT NULL,
  `paper_three_mot` varchar(20) DEFAULT NULL,
  `paper_one_end` varchar(20) NOT NULL,
  `two_paper_end` varchar(20) NOT NULL,
  `paper_three_end` varchar(20) NOT NULL,
  `Total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_math_6_arts`
--

INSERT INTO `sub_math_6_arts` (`id`, `paper_one_mot`, `two_paper_mot`, `paper_three_mot`, `paper_one_end`, `two_paper_end`, `paper_three_end`, `Total`) VALUES
('G/001', '', NULL, NULL, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Access_Level` varchar(50) NOT NULL,
  `Time` date NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FirstName`, `LastName`, `UserName`, `Password`, `Access_Level`, `Time`) VALUES
(1, 'Kalule', 'Richard', 'admin', 'ana', 'Admin', '2017-06-04');
