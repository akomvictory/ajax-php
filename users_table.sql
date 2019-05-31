-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 10:07 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `msg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `author`, `msg`) VALUES
(1, 'baseey', 'In today\'s market, there is no getting around using the internet for marketing. You find it tough to keep up with since each social media channel has their own expectations. Thankfully, there are systems for a successful digital marketing campaign. These campaign strategies have helped decrease...'),
(2, 'elcy', 'For the uninitiated, Reddit can be more than a little intimidating. This guide shows you exactly how to jump in to this community, and have an awesome time..'),
(3, 'tega', 'It might be hard for you or a loved one to admit that you need help for your addiction. Here are 5 signs ways to know if drug rehab is the necessary choice....'),
(4, 'megan', 'If you suffer from tooth pain, or have missing teeth, it may be time to get dental implants. But what does that mean? Read on to learn if they\'re right for you...'),
(5, 'ophir', 'Customers may find you at any step of the sales cycle, and it’s important to understand the buyer journey.\r\n\r\nBy speaking to customers and leading them down a funnel, you’ll be able to predictably convert them from cold prospects all the way to happy purchasers!'),
(6, 'joe', 'Dieting sucks. And truth be told, it\'s not the best way to keep weight off. Here\'s how you can lose weight while avoiding the dreaded diet.'),
(7, 'patric', 'We\'re not saying that frozen yogurt that\'s more candy than yogurt is good for you, but froyo\'s health benefits can\'t be denied! We\'re listing our faves here....'),
(9, 'Nneka', 'A stubborn non-academic student, never stays in class, has join bad gang'),
(10, 'patrick', 'Our platform allows our clients to scale their content campaigns and have a birds eye view the entire time. Our entire system is built for scale and flexiblity – putting you in the drivers seat while our team works flawlessly for you.'),
(11, 'Nneka', 'A stubborn non-academic student, never stays in class, has join bad gang'),
(12, 'patrick', 'Our platform allows our clients to scale their content campaigns and have a birds eye view the entire time. Our entire system is built for scale and flexiblity – putting you in the drivers seat while our team works flawlessly for you.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
