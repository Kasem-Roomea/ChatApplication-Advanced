-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 11:30 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whatsup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_users`
--

CREATE TABLE IF NOT EXISTS `info_users` (
`id` bigint(60) NOT NULL,
  `user_id` bigint(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(60) NOT NULL,
  `active` int(1) NOT NULL,
  `date_active` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info_users`
--

INSERT INTO `info_users` (`id`, `user_id`, `username`, `email`, `gender`, `password`, `image`, `date`, `active`, `date_active`) VALUES
(1, 51478333524223918, 'kasem-roomea', 'kasem@gmail.com', 'Male', '123123123', 'upload_image/Connor.jpg', '2121/07/26 08:07:06', 0, '11-09-pm'),
(2, 4118102136548433, 'rama-roomea', 'rama@gamil.com', 'Female', '123123123', 'upload_image/user1.jfif', '2121/07/26 09:07:00', 0, '09-15-pm'),
(3, 2283252001671748, 'yhia roomea', 'yhia@gamil.com', 'Male', '123123123', 'upload_image/user2.jfif', '2121/07/26 09:07:58', 0, '09-22-pm'),
(6, 4011273025212749242, 'mohamad', 'mouhamad@gamil.com', 'Female', '123123123', 'upload_image/DSC_0473.jpg', '2121/07/26 09:07:51', 0, '09-03-pm'),
(8, 9223372036854775807, 'samera roomea', 'samer@roomea.com', 'Female', '123123123', '', '2121/07/27 03:07:19', 0, '09-04-pm'),
(9, 1301511353924504226, 'areej roomea', 'areej@roomea.com', 'Female', '123123123', '', '2121/11/11 08:11:03', 0, '08-41-pm'),
(10, 484325264423314922, 'mowia shridi', 'mowia@gmail.com', 'Male', '123123123', 'upload_image/codding.jpg', '2222/01/05 08:01:59', 0, '08-36-am');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` bigint(20) NOT NULL,
  `msgid` varchar(50) NOT NULL,
  `sender` bigint(20) NOT NULL,
  `resesve` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `files` varchar(100) NOT NULL DEFAULT '0',
  `date` varchar(20) NOT NULL,
  `seen` bigint(20) NOT NULL,
  `reseved` int(20) NOT NULL,
  `deleted_sender` int(11) NOT NULL DEFAULT '0',
  `deleted_resever` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msgid`, `sender`, `resesve`, `message`, `files`, `date`, `seen`, `reseved`, `deleted_sender`, `deleted_resever`) VALUES
(1, 'CY*dvVrw30j1fzd', 51478333524223918, 484325264423314922, 'ghhj', '', '02:11 pm', 0, 0, 0, 0),
(2, 'LkOhC6F0t_IIyXU', 51478333524223918, 484325264423314922, 'jhjhjh', '', '02:11 pm', 0, 0, 0, 0),
(3, 'ckflszMG1Hrxb!e', 51478333524223918, 9223372036854775807, 'hello', '', '11:08 pm', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_users`
--
ALTER TABLE `info_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_user` (`user_id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_users`
--
ALTER TABLE `info_users`
MODIFY `id` bigint(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
