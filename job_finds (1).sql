-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 09:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_finds`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Accounting & Banking'),
(2, 'Healthcare'),
(3, 'Fashion & Style'),
(4, 'Food & Restaurant'),
(5, 'Retail &Sales'),
(6, 'Technology'),
(7, 'Construction');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `user_id`, `type_id`, `company_name`, `title`, `description`, `city`, `state`, `contact_email`, `created`) VALUES
(1, 6, 3, 1, 'Microsoft', 'Web developer', 'Part time\r\nWeb developer (Washington, DC)\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique mauris ut lectus pulvinar congue. Vivamus non rhoncus nunc. Vestibulum nec est justo. Aenean placerat ex in libero pharetra sodales. Vivamus placerat arcu sed efficitur congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eros ipsum, scelerisque in erat vel, laoreet ullamcorper eros. Pellentesque varius, risus eget varius imperdiet, eros leo eleifend ex, eu tristique leo nibh at turpis. Duis tristique velit eu massa dignissim volutpat. Maecenas vitae ultricies leo.', 'Washington', 'DC', 'ceva@gmail.com', NULL),
(2, 6, 1, 3, 'Elektrobit', 'Senior Graphic designer', 'Part time\r\nWeb developer (Washington, DC)\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique mauris ut lectus pulvinar congue. Vivamus non rhoncus nunc. Vestibulum nec est justo. Aenean placerat ex in libero pharetra sodales. Vivamus placerat arcu sed efficitur congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eros ipsum, scelerisque in erat vel, laoreet ullamcorper eros. Pellentesque varius, risus eget varius imperdiet, eros leo eleifend ex, eu tristique leo nibh at turpis. Duis tristique velit eu massa dignissim volutpat. Maecenas vitae ultricies leo.', 'Brooklyn', 'NY', 'ceva@ceva.ro', NULL),
(3, 7, 3, 2, 'Maria si asociatii', 'House painter', 'Part time\r\nWeb developer (Washington, DC)\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique mauris ut lectus pulvinar congue. Vivamus non rhoncus nunc. Vestibulum nec est justo. Aenean placerat ex in libero pharetra sodales. Vivamus placerat arcu sed efficitur congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eros ipsum, scelerisque in erat vel, laoreet ullamcorper eros. Pellentesque varius, risus eget varius imperdiet, eros leo eleifend ex, eu tristique leo nibh at turpis. Duis tristique velit eu massa dignissim volutpat. Maecenas vitae ultricies leo.', 'Austin', 'TX', 'ceva@ymail.com', NULL),
(4, 5, 1, 1, 'Kraft', 'Key account manager', 'Part time\r\nWeb developer (Washington, DC)\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique mauris ut lectus pulvinar congue. Vivamus non rhoncus nunc. Vestibulum nec est justo. Aenean placerat ex in libero pharetra sodales. Vivamus placerat arcu sed efficitur congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eros ipsum, scelerisque in erat vel, laoreet ullamcorper eros. Pellentesque varius, risus eget varius imperdiet, eros leo eleifend ex, eu tristique leo nibh at turpis. Duis tristique velit eu massa dignissim volutpat. Maecenas vitae ultricies leo.', 'Philadelphia', 'PA', 'ceva@yahoo.com', NULL),
(6, 7, 3, 1, 'test company', 'test 12', 'dsadsdsd', 'New York', 'NY', 'ceva@ceva.com', '2016-09-08 10:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `color`) VALUES
(1, 'Full Time', '#81b800'),
(2, 'Part time', '#4c9ef1'),
(3, 'Freelance', '#FF7F50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `role`, `created`) VALUES
(1, 'Carrmen', 'Buta', 'carmen@ceva.com', 'CarmeN', 'de8d8bdcfbd72fd4a30673f3883be0b1fed4ca93', 'Employer', NULL),
(2, 'Georgiana', 'Buta', 'geo@ceva.com', 'GeorgianA', 'de8d8bdcfbd72fd4a30673f3883be0b1fed4ca93', 'Seeker', NULL),
(3, 'Brad', 'Popescu', 'ceva@ion.com', 'bradPOP', 'de8d8bdcfbd72fd4a30673f3883be0b1fed4ca93', 'Job seeker', '2016-09-08 10:05:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
