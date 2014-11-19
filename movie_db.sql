-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 192.168.30.23
-- Generation Time: Nov 19, 2014 at 02:52 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mID`, `title`, `year_released`, `synopsis`, `was_novel`, `studioID`, `timestamp`) VALUES
(1, 'Star Wars: A New Hope', 1977, 'Look, I ain''t in this for your revolution, and I''m not in it for you, Princess. I expect to be well paid. I''m in it for the money. A tremor in the Force. The last time I felt it was in the presence of my old master. I want to come with you to Alderaan. There''s nothing for me here now. I want to learn the ways of the Force and be a Jedi, like my father before me. The plans you refer to will soon be back in our hands. I suggest you try it again, Luke. This time, let go your conscious self and act on instinct.', 0, 1, '2014-11-19 13:28:44'),
(2, 'Men Who Stare at Goats', 2009, 'Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', 0, 2, '2014-11-19 13:28:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
 ADD PRIMARY KEY (`mID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
MODIFY `mID` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
