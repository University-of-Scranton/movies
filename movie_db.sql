-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Host: 192.168.30.23
-- Generation Time: Nov 21, 2014 at 02:34 PM
-- Server version: 5.5.40-0+wheezy1
-- PHP Version: 5.4.35-0+deb7u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
`aID` mediumint(9) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `bio` longtext NOT NULL,
  `dob` date NOT NULL,
  `won_oscar` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`aID`, `first_name`, `last_name`, `bio`, `dob`, `won_oscar`, `timestamp`) VALUES
(1, 'Mark', 'Hamill', 'I suggest you try it again, Luke. This time, let go your conscious self and act on instinct. Leave that to me. Send a distress signal, and inform the Senate that all on board were killed. The Force is strong with this one. I have you now. What good is a reward if you ain''t around to use it? Besides, attacking that battle station ain''t my idea of courage. It''s more likeâ€¦suicide. Hokey religions and ancient weapons are no match for a good blaster at your side, kid', '1951-09-25', 0, '2014-11-21 13:15:23'),
(2, 'George', 'Clooney', 'Inflammable means flammable? What a country. Hi. I''m Troy McClure. You may remember me from such self-help tapes as "Smoke Yourself Thin" and "Get Some Confidence, Stupid!" Here''s to alcohol, the cause of â€” and solution to â€” all life''s problems. When I held that gun in my hand, I felt a surge of powerâ€¦like God must feel when he''s holding a gun. We started out like Romeo and Juliet, but it ended up in tragedy.', '1961-05-06', 1, '2014-11-21 13:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
`gID` smallint(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`gID`, `name`, `timestamp`) VALUES
(1, 'Sci-Fi', '2014-11-21 13:16:26'),
(2, 'Fantasy', '2014-11-21 13:16:26'),
(3, 'Political Satire', '2014-11-21 13:16:38'),
(4, 'Comedy', '2014-11-21 13:16:38'),
(5, 'Crime', '2014-11-21 13:26:18'),
(6, 'Thriller', '2014-11-21 13:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
`mID` mediumint(9) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year_released` year(4) NOT NULL,
  `synopsis` longtext NOT NULL,
  `was_novel` tinyint(4) NOT NULL,
  `studioID` mediumint(9) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mID`, `title`, `year_released`, `synopsis`, `was_novel`, `studioID`, `timestamp`) VALUES
(1, 'Star Wars: A New Hope', 1977, 'Hokey religions and ancient weapons are no match for a good blaster at your side, kid. You''re all clear, kid. Let''s blow this thing and go home! I suggest you try it again, Luke. This time, let go your conscious self and act on instinct.', 0, 1, '2014-11-21 13:13:25'),
(2, 'Men Who Stare at Goats', 2009, 'Did you dress her up like this? Who''s that then? I''m not a witch. But you are dressed as oneâ€¦ Well, how''d you become king, then?', 1, 2, '2014-11-21 13:13:25'),
(3, 'Ocean''s Eleven', 2001, 'Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.', 0, 3, '2014-11-21 13:21:49'),
(4, 'Ocean''s Twleve', 2004, 'Eaque ipsa quae ab illo inventore veritatis et quasi. Architecto beatae vitae dicta sunt explicabo. Et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Fugiat quo voluptas nulla pariatur? Nihil molestiae consequatur, vel illum qui dolorem eum.', 0, 3, '2014-11-21 13:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actors`
--

CREATE TABLE IF NOT EXISTS `movie_actors` (
`maID` int(11) NOT NULL,
  `movieID` mediumint(9) NOT NULL,
  `actorID` mediumint(9) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_actors`
--

INSERT INTO `movie_actors` (`maID`, `movieID`, `actorID`, `timestamp`) VALUES
(1, 1, 1, '2014-11-21 13:15:39'),
(2, 2, 2, '2014-11-21 13:15:39'),
(3, 3, 2, '2014-11-21 13:24:14'),
(4, 4, 2, '2014-11-21 13:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `movie_genres`
--

CREATE TABLE IF NOT EXISTS `movie_genres` (
`mgID` int(11) NOT NULL,
  `movieID` mediumint(9) NOT NULL,
  `genreID` smallint(6) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_genres`
--

INSERT INTO `movie_genres` (`mgID`, `movieID`, `genreID`, `timestamp`) VALUES
(1, 1, 1, '2014-11-21 13:16:52'),
(2, 1, 2, '2014-11-21 13:16:52'),
(3, 2, 3, '2014-11-21 13:17:03'),
(4, 2, 4, '2014-11-21 13:17:03'),
(5, 3, 5, '2014-11-21 13:26:39'),
(6, 3, 6, '2014-11-21 13:26:39'),
(7, 4, 5, '2014-11-21 13:26:51'),
(8, 4, 6, '2014-11-21 13:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE IF NOT EXISTS `studio` (
`sID` mediumint(9) NOT NULL,
  `name` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`sID`, `name`, `city`, `state`, `zip`, `timestamp`) VALUES
(1, 'LucasFilms', 'San Francisco', 'CA', '94129', '2014-11-21 13:11:14'),
(2, 'Overture', 'Beverly Hills', 'CA', '90210', '2014-11-21 13:11:14'),
(3, 'Warner Bros.', 'Burbank ', 'CA', '92511', '2014-11-21 13:23:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
 ADD PRIMARY KEY (`aID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
 ADD PRIMARY KEY (`gID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
 ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `movie_actors`
--
ALTER TABLE `movie_actors`
 ADD PRIMARY KEY (`maID`);

--
-- Indexes for table `movie_genres`
--
ALTER TABLE `movie_genres`
 ADD PRIMARY KEY (`mgID`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
 ADD PRIMARY KEY (`sID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
MODIFY `aID` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
MODIFY `gID` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
MODIFY `mID` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `movie_actors`
--
ALTER TABLE `movie_actors`
MODIFY `maID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `movie_genres`
--
ALTER TABLE `movie_genres`
MODIFY `mgID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
MODIFY `sID` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
