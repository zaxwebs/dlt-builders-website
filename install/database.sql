-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2019 at 08:30 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dltbuilders`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Zack Webster', 'zack@dltbuilders.zax', '$2y$10$3IO1fiPwRgOeX5cfCPS.JumEgHmecUhdoCBr7mVXiEMqmhQ4SorIq');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `company_name` varchar(255) NOT NULL,
  `quote_line` varchar(255) NOT NULL,
  `cover_text` varchar(255) NOT NULL,
  `about_text` text NOT NULL,
  `residential_text` varchar(255) NOT NULL,
  `office_text` varchar(255) NOT NULL,
  `government_text` varchar(255) NOT NULL,
  `education_text` varchar(255) NOT NULL,
  `healthcare_text` varchar(255) NOT NULL,
  `parking_text` varchar(255) NOT NULL,
  `values_text` text NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_phone` varchar(255) NOT NULL,
  `division_address` varchar(255) NOT NULL,
  `division_phone` varchar(255) NOT NULL,
  `service_email` varchar(255) NOT NULL,
  `quote_email` varchar(255) NOT NULL,
  `career_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`company_name`, `quote_line`, `cover_text`, `about_text`, `residential_text`, `office_text`, `government_text`, `education_text`, `healthcare_text`, `parking_text`, `values_text`, `company_address`, `company_phone`, `division_address`, `division_phone`, `service_email`, `quote_email`, `career_email`) VALUES
('Delite Builders', 'Have a project? Email us for a proposal.', 'We construct outstanding buildings.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus.\r\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam quis interdum arcu. Cras ultricies finibus risus eu euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut arcu augue, viverra ut pretium eu, dapibus non nulla. Mauris lacinia magna ac sapien facilisis, nec elementum nunc posuere.\r\nCras vehicula hendrerit lectus. Aliquam blandit diam tristique, hendrerit lectus sit amet, rutrum dolor. Donec vitae accumsan libero.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum ligula nec ligula suscipit aliquam. Cras nulla metus, cursus sit amet feugiat ut, finibus a urna. Morbi arcu arcu, tempus at tellus non, varius dictum risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam quis interdum arcu. Cras ultricies finibus risus eu euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut arcu augue, viverra ut pretium eu, dapibus non nulla. Mauris lacinia magna ac sapien facilisis, nec elementum nunc posuere. Cras vehicula hendrerit lectus. Aliquam blandit diam tristique, hendrerit lectus sit amet, rutrum dolor. Donec vitae accumsan libero.', 'Lorem ipsum dolor sit amet,\r\nconsectetur adipiscing elit,\r\nDonec bibendum ligula nec,\r\nligula suscipit aliquam. 567175', '+12-123-456-7890', 'Donec bibendum ligula nec,\r\nconsectetur adipiscing elit,\r\nLorem ipsum dolor sit amet,\r\nligula suscipit aliquam. 567175', '+12-123-456-7890', 'service@dltbuilders.zax', 'info@dltbuilders.zax', 'careers@dltbuilders.zax');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
