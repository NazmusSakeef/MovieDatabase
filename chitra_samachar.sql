-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 05:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitra_samachar`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `birth_place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `name`, `birthday`, `birth_place`) VALUES
(1, 'MD. Razzak', '1945-08-02', 'borishal'),
(2, 'Alomgir hossain', '1955-03-15', 'Rongpur'),
(3, 'Bulbul Ahmed', '1940-06-26', 'Khulna'),
(4, 'Sakib Khan', '1980-05-13', 'Noakhali'),
(5, 'MD. Riaz', '1979-11-10', 'Dhaka'),
(6, 'Shakil Khan', '1981-08-16', 'Gaibandha'),
(7, 'Elias Kanchan', '1970-08-16', 'Pabna'),
(8, 'Salman Shah', '1971-03-15', 'Sylhet'),
(9, 'ferdaus Raman', '1976-04-25', 'Dinajpur'),
(10, 'Shahin Alam', '1990-04-28', 'Magura'),
(11, 'Omar Sani', '1978-09-14', 'Jessore'),
(12, 'Suchonda Raihan', '1967-09-06', 'Sirajgonj'),
(13, 'Bobita Rahman', '1955-12-31', 'Bandorban'),
(14, 'Kabori Akhter', '1960-10-09', 'Bogura'),
(15, 'Shabana Azmi', '1937-09-25', 'Norail'),
(16, 'Shabnur khatun', '1978-08-16', 'Narayangonj'),
(17, 'Purnima Chowdhury', '1975-08-22', 'Faridpur'),
(18, 'Apu Bishawas', '1980-02-09', 'Netrokona'),
(19, 'Sreelekha Mitra', '1987-09-06', 'Kolkata'),
(20, 'Mahiya Mahui', '1989-09-11', 'Kishorgonj'),
(21, 'Ishita Khandokar', '1980-09-07', 'Narail'),
(22, 'Johir Raihan', '1930-05-10', 'Narayongonj'),
(23, 'Chashi Nozrul Islam', '1955-01-18', 'Bagerhat'),
(24, 'Suvash Dutt', '1923-10-09', 'Kishoregonj'),
(25, 'Khan Ataur Rahaman', '1954-10-13', 'Jessore'),
(26, 'Humayun Ahmed', '1955-08-19', 'rongpur'),
(27, 'Kazi Hayat', '1935-08-09', 'Dhaka'),
(28, 'Tareq Masud', '1935-02-12', 'Madaripur'),
(29, 'Toukir Ahmed', '1965-12-12', 'Mymensingh'),
(30, 'Nur Islam', '1998-09-07', 'Gaibandha'),
(31, 'Bobita Rahman', '1978-09-06', 'Gazipur'),
(32, 'Schorita saha', '1967-09-15', 'khulna'),
(33, 'Anuradha Ghoshal', '1987-09-06', 'kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `Movie_id` int(11) NOT NULL,
  `Movie_name` varchar(50) NOT NULL,
  `Year` int(11) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `Rating` float NOT NULL,
  `movie_poster` varchar(100) NOT NULL,
  `description` text,
  `youtube` varchar(100) NOT NULL,
  `upcoming` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`Movie_id`, `Movie_name`, `Year`, `Genre`, `Rating`, `movie_poster`, `description`, `youtube`, `upcoming`) VALUES
(1, 'Mukh O Mukhos', 1923, 'Nirbak', 9, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(2, 'amanush', 1995, 'comedy', 9.5, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(3, 'devdas', 1996, 'romantic', 9.7, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(4, 'hazar bochor dhore', 2005, 'village life', 9.4, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(5, 'ora egarjon', 1973, 'freedom war', 9.9, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(6, 'Jibon theke neoa', 1970, 'philosophical', 9.3, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(7, 'padma nodir majhi', 1993, 'philosophical', 9.1, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(8, 'simana periye', 1977, 'adventure', 9.2, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(9, 'Chutir Ghonta', 1980, 'true story', 8.7, 'dummy/movie poster/slide-3.JPG', NULL, '', 0),
(10, 'dipu number 2', 1996, 'mystery', 9.8, 'dummy/movie poster/slide-2.JPG', NULL, '', 0),
(11, 'sareng bou', 1978, 'Philosophical', 8.5, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(12, 'Rongbaz', 1973, 'Romantic', 9.2, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(13, 'Titas ekti nodir nam', 1973, 'philosophical', 8.3, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(14, 'Chitra nodir pare', 1999, 'historical', 9.45, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(15, 'aguner proshmoni', 1995, 'freedom war', 9.8, 'dummy/movie poster/slide-1.JPG', NULL, '', 0),
(16, 'Shongkhochil', 2016, 'unknown', 9.4, 'dummy/latest/movie-1.jpg', NULL, '', 0),
(17, 'aynabaji', 2016, 'Romantic', 0, ' ', 'nice!', 'youtube.com', 0),
(18, 'shikari', 2016, 'Romantic', 0, '/responsive-sidebar-navigation/index.php ', 'best!', 'youtube.com', 0),
(19, 'dummy', 2016, 'Adventure', 0, '/responsive-sidebar-navigation/index.php ', 'best movie!', 'youtube.com', 0),
(20, 'dummy', 2016, 'Adventure', 0, '/responsive-sidebar-navigation/index.php ', 'best movie!', 'youtube.com', 0),
(21, 'abc', 2018, 'Drama', 0, 'images\\logo@2x.png ', 'asjkfgcjksdbcm,zx m,cnzxlv', 'youtube.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `Movie_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`Movie_id`, `artist_id`, `role`) VALUES
(1, 1, 'Hero'),
(1, 2, 'Villain'),
(1, 12, 'Heroine'),
(1, 22, 'Director'),
(2, 2, 'Hero'),
(2, 3, 'Villain'),
(2, 13, 'Heroine'),
(2, 23, 'Director'),
(3, 4, 'Hero'),
(3, 5, 'Villain'),
(3, 7, 'Villain'),
(3, 14, 'Heroine'),
(3, 24, 'Director'),
(4, 4, 'Hero'),
(4, 14, 'Heroine'),
(4, 24, 'Director'),
(5, 2, 'Villain'),
(5, 3, 'Hero'),
(5, 4, 'Comedian'),
(5, 12, 'Heroine'),
(5, 22, 'Director'),
(6, 3, 'Hero'),
(6, 11, 'Villain'),
(6, 15, 'Heroine'),
(6, 21, 'Comedian'),
(6, 26, 'Director'),
(7, 11, 'Hero'),
(7, 16, 'Heroine'),
(7, 17, 'Heroine'),
(7, 27, 'Director'),
(7, 32, 'Comedian'),
(7, 33, 'Villain'),
(8, 10, 'Hero'),
(8, 28, 'Director'),
(9, 9, 'Hero'),
(9, 18, 'Heroine'),
(9, 29, 'Director'),
(10, 8, 'Hero'),
(10, 19, 'Heroine'),
(10, 31, 'Director'),
(11, 7, 'Hero'),
(11, 10, 'Heroine'),
(11, 32, 'Director'),
(12, 7, 'Hero'),
(12, 10, 'Heroine'),
(12, 32, 'Director'),
(13, 6, 'Hero'),
(13, 10, 'Heroine'),
(13, 31, 'Director'),
(14, 7, 'Hero'),
(14, 9, 'Heroine'),
(14, 33, 'Director'),
(15, 6, 'Hero'),
(15, 9, 'Heroine'),
(15, 33, 'Director'),
(16, 6, 'Hero'),
(16, 9, 'Heroine'),
(16, 32, 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `Movie_id` int(11) NOT NULL,
  `studio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`Movie_id`, `studio_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 1),
(5, 3),
(6, 4),
(7, 5),
(8, 6),
(9, 7),
(10, 8),
(11, 9),
(12, 9),
(13, 9),
(14, 2),
(15, 2),
(16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `Movie_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Rating` float NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`Movie_id`, `User_id`, `Rating`, `Comment`) VALUES
(1, 1, 9, 'My favourite one.'),
(2, 3, 9, 'awesome'),
(5, 15, 8, 'cinemar kahini onek sundor'),
(6, 5, 10, 'bar bar dekhte chai'),
(9, 6, 10, 'the best one'),
(10, 3, 10, 'onek valo'),
(11, 4, 8, 'valoi legeche'),
(12, 6, 10, 'amar jioboner shreshto cinema'),
(12, 8, 9, 'valo cinema gulor moddhe ekta'),
(14, 7, 8, 'awesome story');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `studio_id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`studio_id`, `Name`, `City`) VALUES
(1, 'Fox', 'Newyork'),
(2, 'Disney', 'London'),
(3, 'Pixur', 'Los Angeles'),
(4, 'Eskay', 'Kolkata'),
(5, 'Raj Laxmi', 'Dhaka'),
(6, 'Venktesh Film', 'TallyGonj'),
(7, 'Raj Production', 'Baily Road'),
(8, 'Fantasy Production', 'Narayangonj'),
(9, 'Gold Star', 'Beijing'),
(10, 'Yash Raj Films', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `last_login` datetime NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `name`, `email`, `password`, `last_login`, `user_type`) VALUES
(1, 'mredul', 'mredulhasan93@gmail.com', '62a5575cc3f63d9d98e085a395e60599', '2017-03-18 12:49:51', 'Admin'),
(9, 'sumit', 'sumit.ku.cse@gmail.com', 'ee8f75d19d50b8c8557e3661fe66e2bf', '2016-11-09 14:06:19', 'Admin'),
(3, 'farhana', 'farhana@gmail.com', 'f6c29ea92aab180183100dff95cce70a', '2016-11-09 01:00:47', 'Admin'),
(4, 'akash', 'akash@gmail.com', '4c701c72ba7fd76047164cea2ea6df39', '0000-00-00 00:00:00', 'General'),
(5, 'deep', 'deep@gmail.com', 'ae18daae09297b2a35b0be4294e7fb09', '0000-00-00 00:00:00', 'General'),
(6, 'soma', 'soma@gmail.com', '47f705c97fbda8775beae1850f8f3f33', '0000-00-00 00:00:00', 'General'),
(7, 'juel', 'juel@gmail.com', '4ca0cc8c9e69cde047b0339ec2fa971b', '0000-00-00 00:00:00', 'General'),
(8, 'nazia', 'nazia@gmail.com', 'da4bc744ceb0c2276d10ba96326aa270', '0000-00-00 00:00:00', 'General'),
(10, 'fazla', 'fazla@gmail.com', '556485260fcf2fdf131c8a931126a7ff', '2016-11-09 13:31:49', 'General'),
(11, 'nadira', 'nadira@gmail.com', 'a7a755458b2bbda537a10905b6e8808a', '0000-00-00 00:00:00', 'General'),
(12, 'avijit', 'avijit@gmail1.com', 'cb7e427a99be564cac6f045de0721894', '0000-00-00 00:00:00', 'General'),
(13, 'rahad', 'rahad@gmail.com', 'f6b006b13947a48346270bc3dd3c7c8b', '2016-11-09 01:21:42', 'General'),
(14, 'riya', 'riya@gmail.com', '19e960a3d174958090c530666d4aa507', '0000-00-00 00:00:00', 'General'),
(15, 'mishuk', 'mishuk@gmail.com', 'f474dff115cd4be8dad153b0d5702ad2', '0000-00-00 00:00:00', 'General'),
(16, 'fahim', 'fahim@gmail.com', '78946e1aab6abcf907f5afeb833bfdea', '0000-00-00 00:00:00', 'General'),
(17, 'arpon', 'arpon@gmail.com', '3c5dcc66436ebf0b2211d90417222d6c', '2016-08-28 07:12:16', 'General'),
(19, 'saidur', 'saidur@gmail.com', 'e21c4d7aeed37ddd7597fdc22b59f77d', '2016-11-09 01:01:34', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `Movie_id` int(11) NOT NULL,
  `User_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`Movie_id`, `User_id`) VALUES
(1, 1),
(2, 1),
(2, 17),
(2, 18),
(2, 19),
(3, 2),
(3, 3),
(3, 18),
(3, 19),
(4, 1),
(4, 11),
(4, 16),
(5, 3),
(5, 12),
(5, 13),
(6, 4),
(7, 5),
(8, 6),
(9, 7),
(10, 8),
(11, 9),
(12, 9),
(13, 9),
(14, 2),
(15, 2),
(16, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`),
  ADD KEY `Actor_id` (`artist_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`Movie_id`),
  ADD UNIQUE KEY `Movie_id` (`Movie_id`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`Movie_id`,`artist_id`,`role`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`Movie_id`,`studio_id`),
  ADD KEY `studio_id` (`studio_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`Movie_id`,`User_id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`studio_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`User_id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`Movie_id`,`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `Movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `studio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `participation_ibfk_1` FOREIGN KEY (`Movie_id`) REFERENCES `movie` (`Movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participation_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `production`
--
ALTER TABLE `production`
  ADD CONSTRAINT `production_ibfk_1` FOREIGN KEY (`Movie_id`) REFERENCES `movie` (`Movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `production_ibfk_2` FOREIGN KEY (`studio_id`) REFERENCES `studio` (`studio_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`Movie_id`) REFERENCES `movie` (`Movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`Movie_id`) REFERENCES `movie` (`Movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
