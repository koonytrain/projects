-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2019 at 08:28 PM
-- Server version: 5.7.26-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuenstl4_finalproject19`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(25500) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`blog_id`, `user_id`, `title`, `post`, `postdate`) VALUES
(20, 4, 'Yelich for MVP Again', 'Yelich is on pace to get the NL MVP for the second year in a row. Woo!', '2019-05-06 21:40:28'),
(21, 4, 'Clutch', 'Ryan Braun has been clutch lately! Single in the bottom of the 18th to drive in 2 runs for the win. Go Brewers!!', '2019-05-08 01:07:34'),
(22, 4, 'Clutch', 'Ryan Braun has been clutch lately! Single in the bottom of the 18th to drive in 2 runs for the win. Go Brewers!!', '2019-05-08 01:09:38'),
(23, 4, 'Win Streak', 'Brewers are on the verge of sweeping 2 series in a row. They just need a win tonight against Washington.', '2019-05-08 17:45:02'),
(25, 4, 'Test', 'another test to see how the pagination works. Go Brewers!', '2019-05-08 18:23:33'),
(28, 4, 'Testing', 'dadada', '2019-05-09 22:14:49'),
(29, 4, 'last minute test', 'Can the Brewers Sweep the next series against the Cubs? We will have to see.', '2019-05-10 01:17:47'),
(30, 4, 'test', 'test', '2019-05-10 15:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` varchar(25500) NOT NULL,
  `comdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `blog_id`, `comment`, `comdate`) VALUES
(137, 4, 20, '', '2019-05-07 17:45:27'),
(138, 4, 20, '', '2019-05-07 17:46:08'),
(141, 4, 20, 'testing how page responds', '2019-05-08 10:55:50'),
(142, 4, 20, 'Another test. Go Brewers!!', '2019-05-08 18:14:14'),
(143, 6, 25, 'The Bucks beat the Celtics to win the series and the Brewers won to sweep the Washington Nationals. Go Wisconsin teams :)', '2019-05-09 02:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `registration_date`) VALUES
(1, 'test', 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2019-04-15 10:58:53'),
(2, 'test', 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2019-04-15 10:59:04'),
(3, 'al', 'len', 'allen', 'fb360f9c09ac8c5edb2f18be5de4e80ea4c430d0', '2019-04-16 01:39:53'),
(4, 'Allen', 'Kuenstler', 'kuenstl4@uwm.edu', 'a4aed34f4966dc8688b8e67046bf8b276626e284', '2019-04-17 01:33:33'),
(5, 'Jon', 'Smith', 'smith@uwm.edu', '2b5c240e6abd88e71ffc225b0459016e4cba9bda', '2019-04-23 20:55:00'),
(6, 'Bob', 'bob', 'bob@uwm.edu', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2019-05-09 02:22:28'),
(7, 'Jim', 'Schultz', 'schul253@uwm.edu', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2019-05-10 15:43:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD CONSTRAINT `blogposts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `blogposts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
