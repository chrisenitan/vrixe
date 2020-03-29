-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2020 at 03:58 PM
-- Server version: 5.6.41
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrixe`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `cid` int(11) NOT NULL,
  `refs` varchar(100) NOT NULL,
  `tag` varchar(100) DEFAULT 'contributor',
  `dates` varchar(100) DEFAULT 'contributor',
  `edate` varchar(100) DEFAULT 'contributor',
  `timing` varchar(100) DEFAULT 'contributor',
  `etime` varchar(100) DEFAULT 'contributor',
  `coord` varchar(100) DEFAULT 'contributor',
  `address` varchar(100) DEFAULT 'contributor',
  `landmark` varchar(100) DEFAULT 'contributor',
  `dresscode` varchar(100) DEFAULT 'contributor',
  `price` varchar(100) DEFAULT 'contributor',
  `payment` varchar(100) DEFAULT 'contributor',
  `organiser` varchar(100) DEFAULT 'contributor',
  `wapweb` varchar(100) DEFAULT 'contributor',
  `phone` varchar(100) DEFAULT 'contributor',
  `rsvpmail` varchar(900) DEFAULT NULL,
  `keynote` varchar(100) DEFAULT 'contributor'
) ENGINE=MyISAM AUTO_INCREMENT=389 DEFAULT CHARSET=latin1 COMMENT='who edited what on the desk';

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`cid`, `refs`, `tag`, `dates`, `edate`, `timing`, `etime`, `coord`, `address`, `landmark`, `dresscode`, `price`, `payment`, `organiser`, `wapweb`, `phone`, `rsvpmail`, `keynote`) VALUES
(3, '6YG8RpuMpB', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', 'annamorra@mail.usf.edu', '', 'annamorra@mail.usf.edu'),
(4, 'LGmyp45mRG', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', 'Natraj', '', 'Natraj'),
(11, 'LbKUYDuDmM', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', 'shoutforkrishna', '', 'shoutforkrishna'),
(9, 'uwD1ezkdh8', 'chrisenitan', 'mathewelizabeth', 'mathewelizabeth', 'mathewelizabeth', 'mathewelizabeth', 'by mathewelizabeth on 02 Oct 2018 at 21:05hrs', 'by mathewelizabeth on 04 Oct 2018 at 12:17hrs', 'by mathewelizabeth on 04 Oct 2018 at 12:17hrs', 'mathewelizabeth', 'chrisenitan', 'by mathewelizabeth on 02 Oct 2018 at 21:06hrs', 'mathewelizabeth', 'chrisenitan', 'mathewelizabeth', '', 'mathewelizabeth'),
(14, '8iFd5vnZJp', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', 'Candbot', '', 'Candbot'),
(16, 'WtDGTomlqZ', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', 'Ms_Adebomi', '', 'Ms_Adebomi'),
(17, '4bHWMGX018', 'by khorage on 25 Oct 2018 at 23:20hrs', 'khorage', 'khorage', 'khorage', 'khorage', 'by khorage on 26 Oct 2018 at 08:23hrs', 'khorage', 'by khorage on 26 Oct 2018 at 08:23hrs', 'by khorage on 25 Oct 2018 at 23:21hrs', 'khorage', 'by khorage on 25 Oct 2018 at 23:17hrs', 'khorage', 'by khorage on 25 Oct 2018 at 23:16hrs', 'by khorage on 25 Oct 2018 at 23:28hrs', '', 'by khorage on 25 Oct 2018 at 23:26hrs'),
(18, '4nSLiu6Ncj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'PeHC7I0ZTq', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'OR90Nbi7Up', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', 'MrGrochowski', '', 'MrGrochowski'),
(23, 'T1PD1VZ8lU', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', 'cora', '', 'cora'),
(24, 'tX0gGBv5SD', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', 'pablozulamian', '', 'pablozulamian'),
(27, 'UZCqYsYEVt', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', 'Chris', '', 'Chris'),
(26, '9lIA7XZOff', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', 'boohiss', '', 'boohiss'),
(28, '0a85811e78', 'chrisenitan on 24 - Jan - 2019 at 22:06hrs', 'chrisenitan on 18 - Feb - 2019 at 16:25hrs', 'chrisenitan on 19 - Jan - 2019 at 12:52hrs', 'chrisenitan on 18 - Feb - 2019 at 16:25hrs', 'chrisenitan on 18 - Feb - 2019 at 16:26hrs', 'chrisenitan on 21 - Mar - 2019 at 21:32hrs', 'chrisenitan on 25 - Jan - 2019 at 14:52hrs', 'chrisenitan on 19 - Jan - 2019 at 12:53hrs', 'chrisenitan on 25 - Jan - 2019 at 15:02hrs', 'chrisenitan', 'chrisenitan on 05 - Mar - 2019 at 14:18hrs', 'chrisenitan on 19 - Jan - 2019 at 12:54hrs', '', 'chrisenitan on 22 - Dec - 2019 at 21:38hrs', 'chrisenitan on 22 - Dec - 2019 at 21:38hrs', 'chrisenitan on 25 - Jan - 2019 at 14:34hrs'),
(56, 'HhwTIW7tlv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'iJvEwzbzrU', 'chrisenitan on 26 - Feb - 2019 at 17:19hrs', 'hello on 19 - Feb - 2019 at 18:54hrs', 'chrisenitan on 26 - Feb - 2019 at 17:19hrs', 'hello', 'hello on 19 - Feb - 2019 at 18:54hrs', 'chrisenitan on 22 - Mar - 2019 at 10:20hrs', 'chrisenitan on 22 - Mar - 2019 at 10:20hrs', 'hello on 19 - Feb - 2019 at 19:03hrs', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', '', 'hello'),
(60, 'f0587ae442', 'vrixe on 07 - Feb - 2019 at 11:43hrs', 'vrixe on 05 - Feb - 2019 at 13:18hrs', 'vrixe on 19 - Feb - 2019 at 18:00hrs', 'vrixe on 05 - Feb - 2019 at 13:18hrs', 'chrisenitan', 'vrixe on 19 - Feb - 2019 at 17:58hrs', 'vrixe on 21 - Mar - 2019 at 16:33hrs', 'chrisenitan on 04 - Feb - 2019 at 18:01hrs', 'vrixe on 04 - Feb - 2019 at 18:21hrs', 'vrixe', 'vrixe on 04 - Feb - 2019 at 18:21hrs', 'vrixe on 04 - Jul - 2019 at 20:49hrs', '', 'vrixe on 04 - Feb - 2019 at 18:17hrs', 'vrixe on 04 - Feb - 2019 at 18:17hrs', 'chrisenitan'),
(77, '2Luy2qjzVQ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(387, 'Pph8sM3hqL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(386, 'eZB8LkhJND', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'gnVodnM7zG', 'four on 01 - Apr - 2019 at 12:47hrs', 'four', 'four', 'four', 'four', 'four', 'four', 'four on 01 - Apr - 2019 at 12:47hrs', 'four', 'four', 'four on 01 - Apr - 2019 at 13:09hrs', 'four', 'four', 'four', '', 'four'),
(76, '0rSxBcvSla', 'four on 07 - Feb - 2019 at 17:25hrs', 'four', 'four', 'four', 'four', 'four', 'four', 'four on 07 - Feb - 2019 at 17:25hrs', 'four', 'four', 'four', 'four', 'four', 'four', '', 'four'),
(69, 'ThcKaxOB9O', 'vrixe on 01 - Feb - 2019 at 23:04hrs', 'vrixe on 19 - Feb - 2019 at 22:23hrs', 'vrixe on 06 - Feb - 2019 at 16:46hrs', 'vrixe on 06 - Feb - 2019 at 16:46hrs', 'vrixe on 06 - Feb - 2019 at 16:46hrs', 'vrixe on 23 - Mar - 2019 at 16:47hrs', 'vrixe on 23 - Mar - 2019 at 16:47hrs', 'vrixe on 01 - Feb - 2019 at 18:12hrs', 'vrixe', 'vrixe', 'vrixe on 01 - Feb - 2019 at 23:04hrs', 'vrixe', '', 'vrixe', 'vrixe', 'vrixe on 28 - Feb - 2019 at 17:51hrs'),
(337, '43WjF4prCh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(236, 'dlT5hiWY5B', 'vrixe on 30 - Dec - 2019 at 20:31hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe on 30 - Dec - 2019 at 20:31hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', '', 'vrixe', 'vrixe', 'vrixe'),
(237, 'Qc5kST5Lpp', 'vrixe on 17 - Mar - 2019 at 16:40hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe on 21 - Mar - 2019 at 21:49hrs', 'vrixe on 21 - Mar - 2019 at 21:49hrs', 'vrixe on 17 - Mar - 2019 at 16:40hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', '', 'vrixe', 'vrixe', 'vrixe on 17 - Mar - 2019 at 16:40hrs'),
(247, 'QEpIujA5Yz', 'vrixe on 26 - Dec - 2019 at 11:40hrs', 'vrixe', 'vrixe', 'vrixe on 26 - Dec - 2019 at 11:39hrs', 'vrixe on 26 - Dec - 2019 at 11:41hrs', 'vrixe', 'vrixe', 'vrixe on 26 - Dec - 2019 at 11:40hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', '', 'vrixe', 'vrixe', 'vrixe on 26 - Dec - 2019 at 11:41hrs'),
(278, 'gdx9t9QVPg', 'chrisenitan on 04 - Jul - 2019 at 17:48hrs', 'chrisenitan on 07 - Jul - 2019 at 19:22hrs', 'chrisenitan on 07 - Jul - 2019 at 19:22hrs', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan on 04 - Jul - 2019 at 17:48hrs', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', '', 'chrisenitan', 'chrisenitan', 'chrisenitan'),
(265, 'FF1kRAqY5k', 'vrixe on 07 - May - 2019 at 19:11hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe on 07 - May - 2019 at 19:11hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', '', 'vrixe'),
(269, 'SljuTcWBr4', 'ninv on 22 - Apr - 2019 at 18:15hrs', 'ninv', 'ninv', 'ninv', 'ninv', 'ninv', 'ninv', 'ninv on 22 - Apr - 2019 at 18:15hrs', 'ninv', 'ninv', 'ninv', 'ninv', 'ninv', 'ninv', '', 'ninv'),
(268, 'tTN5ZgmDqC', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', '', 'needone'),
(271, 'gVphkcQJWV', 'chrisenitan on 20 - Jun - 2019 at 19:00hrs', 'chrisenitan on 12 - May - 2019 at 17:23hrs', 'chrisenitan on 12 - May - 2019 at 17:23hrs', 'chrisenitan', 'chrisenitan on 12 - May - 2019 at 17:23hrs', 'chrisenitan on 23 - Jul - 2019 at 18:31hrs', 'chrisenitan on 10 - May - 2019 at 11:27hrs', 'chrisenitan on 10 - May - 2019 at 11:07hrs', 'chrisenitan on 18 - Jun - 2019 at 22:15hrs', 'chrisenitan', 'chrisenitan on 10 - May - 2019 at 11:07hrs', 'chrisenitan on 20 - Jun - 2019 at 18:53hrs', '', 'chrisenitan on 13 - Dec - 2019 at 13:37hrs', 'chrisenitan on 13 - Dec - 2019 at 13:37hrs', 'chrisenitan on 18 - Jun - 2019 at 22:15hrs'),
(308, 'jbNcOrOnGB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(388, 'ONUkeamKDO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(281, 'wXv9svu1Ej', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(282, '9e72iOlVnI', 'event on 05 - Oct - 2019 at 08:42hrs', 'event', 'event', 'event', 'event', 'event', 'event on 04 - Oct - 2019 at 19:36hrs', 'event on 07 - Jul - 2019 at 11:05hrs', 'event', 'event', 'event', 'event', '', 'event', '', 'event'),
(285, 'fSECjOs3NG', 'chrisenitan on 17 - Jul - 2019 at 17:18hrs', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan on 17 - Jul - 2019 at 17:18hrs', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', '', 'chrisenitan'),
(288, 'fw9Vv09WNa', 'event on 18 - Oct - 2019 at 17:59hrs', 'event', 'event', 'event', 'event', 'event on 18 - Oct - 2019 at 17:19hrs', 'event on 18 - Oct - 2019 at 17:18hrs', 'event on 24 - Oct - 2019 at 12:00hrs', 'event on 24 - Oct - 2019 at 10:45hrs', 'event', 'event on 24 - Oct - 2019 at 10:46hrs', 'event', 'event on 24 - Oct - 2019 at 12:03hrs', 'event on 24 - Oct - 2019 at 10:46hrs', '', 'event on 24 - Oct - 2019 at 10:45hrs'),
(290, '5T4tNnfpUg', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', '', 'needone'),
(291, 'LyHz0vXhRu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(292, 'yL4jyNJLqC', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', '', 'needone'),
(293, 'tXt6yTtQgW', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', 'needone', '', 'needone'),
(335, 'GKgrMNruZs', 'vrixe on 08 - Jan - 2020 at 16:48hrs', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'vrixe on 08 - Jan - 2020 at 16:48hrs', 'chrisenitan', 'chrisenitan', 'chrisenitan', 'chrisenitan', '', 'vrixe on 08 - Jan - 2020 at 19:34hrs', 'vrixe on 08 - Jan - 2020 at 19:34hrs', 'chrisenitan'),
(341, 'iEsjYBpDhS', 'nopush on 25 - Nov - 2019 at 23:57hrs', 'nopush', 'nopush', 'nopush', 'nopush', 'nopush', 'nopush', 'nopush on 25 - Nov - 2019 at 23:57hrs', 'nopush', 'nopush', 'nopush', 'nopush', '', 'nopush', '', 'nopush'),
(342, 'E6vkb5anir', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', 'glory', '', 'glory'),
(344, 'ZrHabo6zFB', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', 'mensa', '', 'mensa'),
(370, 'ZTLYHCCI1N', 'vrixe on 05 - Jan - 2020 at 16:49hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe', 'vrixe on 05 - Jan - 2020 at 16:45hrs', 'vrixe', 'vrixe', 'vrixe', 'vrixe', '', 'vrixe', 'vrixe', 'vrixe');

-- --------------------------------------------------------

--
-- Table structure for table `ammo`
--

CREATE TABLE IF NOT EXISTS `ammo` (
  `cid` int(11) NOT NULL,
  `day` varchar(1800) NOT NULL,
  `name` varchar(1800) NOT NULL,
  `reqaction` varchar(1800) NOT NULL COMMENT 'action requested from user to be taken on account',
  `email` varchar(1800) NOT NULL,
  `opened` varchar(900) DEFAULT NULL,
  `closed` varchar(900) DEFAULT NULL,
  `rep` varchar(900) DEFAULT NULL,
  `notes` varchar(9000) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='logging account security issues';

--
-- Dumping data for table `ammo`
--

INSERT INTO `ammo` (`cid`, `day`, `name`, `reqaction`, `email`, `opened`, `closed`, `rep`, `notes`) VALUES
(10, '20 Jan 2020 - 7 Jan 2010', 'chrisenitan', 'ila', 'ennycris1@gmail.com', NULL, NULL, NULL, NULL),
(9, '20 Jan 2020 - fgve', 'chrisenitan', 'ila', 'ennycris1@gmail.com', NULL, NULL, NULL, NULL),
(4, '20 Jan 2020 - sfs', 'chrisenitan', 'ila', 'ennycris1@gmail.com', NULL, NULL, NULL, NULL),
(8, '20 Jan 2020 - fgve', 'chrisenitan', 'ila', 'ennycris1@gmail.com', NULL, NULL, NULL, NULL),
(6, '20 Jan 2020 - sfs', 'chrisenitan', 'ila', 'ennycris1@gmail.com', NULL, NULL, NULL, NULL),
(11, '20 Jan 2020 - 7 Jan 2010', 'chrisenitan', 'ila', 'ennycris1@gmail.com', NULL, NULL, NULL, NULL),
(12, '20 Jan 2020 - 7 Jan 2010', 'chrisenitan', 'ila', 'ennycris1@gmail.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contributors`
--

CREATE TABLE IF NOT EXISTS `contributors` (
  `cid` int(255) NOT NULL,
  `code` varchar(900) NOT NULL,
  `owner` varchar(900) NOT NULL,
  `cua` varchar(900) DEFAULT NULL,
  `cub` varchar(900) DEFAULT NULL,
  `cuc` varchar(900) DEFAULT NULL,
  `cud` varchar(900) DEFAULT NULL,
  `cue` varchar(900) DEFAULT NULL,
  `cuf` varchar(900) DEFAULT NULL,
  `lastedit` varchar(900) DEFAULT NULL,
  `pushid` varchar(900) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=394 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contributors`
--

INSERT INTO `contributors` (`cid`, `code`, `owner`, `cua`, `cub`, `cuc`, `cud`, `cue`, `cuf`, `lastedit`, `pushid`) VALUES
(16, 'WtDGTomlqZ', 'Ms_Adebomi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '6YG8RpuMpB', 'annamorra@mail.usf.edu', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'LGmyp45mRG', 'Natraj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '4nSLiu6Ncj', 'khorage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '4bHWMGX018', 'khorage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'LbKUYDuDmM', 'shoutforkrishna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'uwD1ezkdh8', 'mathewelizabeth', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '8iFd5vnZJp', 'Candbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'PeHC7I0ZTq', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'OR90Nbi7Up', 'MrGrochowski', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'T1PD1VZ8lU', 'cora', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'tX0gGBv5SD', 'pablozulamian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '9lIA7XZOff', 'boohiss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'UZCqYsYEVt', 'Chris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '0a85811e78', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'ThcKaxOB9O', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, '2Luy2qjzVQ', 'four', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'gnVodnM7zG', 'four', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '90b2e440-3f13-4516-bd3a-aba47a8f10df,9dcedc1d-6ffd-4bc2-be2f-350d6d0be93e,'),
(56, 'HhwTIW7tlv', 'chrisenitan', 'vrixe', NULL, NULL, '', NULL, '', NULL, NULL),
(76, '0rSxBcvSla', 'four', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(60, 'f0587ae442', 'chrisenitan', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(392, 'Pph8sM3hqL', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 'ZTLYHCCI1N', 'vrixe', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'iJvEwzbzrU', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 'QEpIujA5Yz', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 'dlT5hiWY5B', 'vrixe', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 'Qc5kST5Lpp', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(336, 'GKgrMNruZs', 'chrisenitan', 'mensa', 'vrixe', 'needone', 'admin', 'test', 'event', NULL, NULL),
(265, 'FF1kRAqY5k', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9dcedc1d-6ffd-4bc2-be2f-350d6d0be93e,'),
(269, 'SljuTcWBr4', 'ninv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 'tTN5ZgmDqC', 'needone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(271, 'gVphkcQJWV', 'chrisenitan', 'vrixe', 'mensa', 'needone', NULL, NULL, NULL, NULL, NULL),
(278, 'gdx9t9QVPg', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(393, 'ONUkeamKDO', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 'wXv9svu1Ej', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, '9e72iOlVnI', 'event', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(285, 'fSECjOs3NG', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(288, 'fw9Vv09WNa', 'event', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(290, '5T4tNnfpUg', 'needone', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 'LyHz0vXhRu', 'needone', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, 'yL4jyNJLqC', 'needone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 'tXt6yTtQgW', 'needone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, 'jbNcOrOnGB', 'chrisenitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 'ZrHabo6zFB', 'mensa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(342, 'iEsjYBpDhS', 'nopush', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(343, 'E6vkb5anir', 'glory', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(338, '43WjF4prCh', 'event', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(391, 'eZB8LkhJND', 'vrixe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `status` varchar(900) NOT NULL,
  `cid` int(11) NOT NULL,
  `type` varchar(90) NOT NULL,
  `datep` varchar(90) NOT NULL,
  `event` varchar(90) NOT NULL,
  `organiser` varchar(90) NOT NULL,
  `description` varchar(1800) NOT NULL,
  `keynote` varchar(900) DEFAULT NULL,
  `dates` varchar(90) NOT NULL,
  `edates` varchar(90) NOT NULL,
  `timing` varchar(90) NOT NULL,
  `variant` varchar(200) NOT NULL,
  `venue` varchar(90) DEFAULT NULL,
  `bvenue` varchar(200) NOT NULL COMMENT 'street num and name',
  `cost` varchar(900) DEFAULT NULL,
  `costpur` varchar(900) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `state` varchar(90) NOT NULL,
  `dresscode` varchar(90) DEFAULT NULL,
  `notes` varchar(1800) DEFAULT NULL,
  `wapweb` varchar(900) DEFAULT NULL,
  `authkey` varchar(900) NOT NULL COMMENT 'authorising keyfor priv',
  `email` varchar(90) NOT NULL,
  `phone` varchar(90) DEFAULT NULL,
  `rsvpmail` varchar(900) DEFAULT NULL,
  `hype` varchar(90) NOT NULL,
  `refs` varchar(90) NOT NULL,
  `class` varchar(90) NOT NULL COMMENT 'public or private classification',
  `zip` varchar(900) NOT NULL COMMENT 'iso country code',
  `year` varchar(90) NOT NULL COMMENT 'numeric rep of event year for search and picks',
  `month` varchar(200) NOT NULL COMMENT 'textual rep of month',
  `day` varchar(200) NOT NULL COMMENT 'day of the week search',
  `edit` varchar(200) NOT NULL COMMENT 'for editverification',
  `views` int(255) NOT NULL DEFAULT '1' COMMENT 'views count',
  `programcheck` varchar(900) DEFAULT NULL COMMENT 'default value is pa',
  `pollcheck` varchar(900) DEFAULT NULL,
  `imgname` varchar(900) NOT NULL COMMENT 'name of image',
  `imgthumb` varchar(900) NOT NULL COMMENT 'imagethumbname',
  `cua` varchar(900) DEFAULT NULL,
  `cub` varchar(900) DEFAULT NULL,
  `cuc` varchar(900) DEFAULT NULL,
  `cud` varchar(900) DEFAULT NULL,
  `cue` varchar(900) DEFAULT NULL,
  `cuf` varchar(900) DEFAULT NULL,
  `lastedit` varchar(900) DEFAULT NULL,
  `ringo` varchar(90) DEFAULT 'slack',
  `ringa` varchar(90) DEFAULT 'slack',
  `ringb` varchar(90) DEFAULT 'slack',
  `ringc` varchar(90) DEFAULT 'slack',
  `ringd` varchar(90) DEFAULT 'slack',
  `ringe` varchar(90) DEFAULT 'slack',
  `ringf` varchar(90) DEFAULT 'slack'
) ENGINE=MyISAM AUTO_INCREMENT=394 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`status`, `cid`, `type`, `datep`, `event`, `organiser`, `description`, `keynote`, `dates`, `edates`, `timing`, `variant`, `venue`, `bvenue`, `cost`, `costpur`, `landmark`, `state`, `dresscode`, `notes`, `wapweb`, `authkey`, `email`, `phone`, `rsvpmail`, `hype`, `refs`, `class`, `zip`, `year`, `month`, `day`, `edit`, `views`, `programcheck`, `pollcheck`, `imgname`, `imgthumb`, `cua`, `cub`, `cuc`, `cud`, `cue`, `cuf`, `lastedit`, `ringo`, `ringa`, `ringb`, `ringc`, `ringd`, `ringe`, `ringf`) VALUES
('plan', 247, 'Tetsingstage', '22 Mar 2019', 'FAMILY ONLY', 'vrixe', 'Test cases from Dani L. The Plan', 'Notsure this should be here', '2019-03-04', '2019-03-04', '21:00', '22:00', '', 'Berlin', '', '', 'The famous hall', '-', '', NULL, '', 'COa7jQ', 'vrixeapp@gmail.com', '', '', 'vrixe', 'QEpIujA5Yz', 'public', '-', '2019.0304', 'March', 'Sunday', 'COa7jQEoKdGBIzgWMyun', 2, 'present', 'present', 'default.jpg', 'default.png', '', '', '', '', '', '', 'vrixe on 31 - Dec - 2019', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 28, 'We are looking for a venue to host this.', '10 Jan 2019', 'MEET WITH HAMMAN', 'Tistonom', 'Having a simple hangout with my old matethis is a q', 'Tickets will be sold at the gate on event day', '2019-02-19', '2019-02-19', '16:00', '17:00', 'Leme, abeokuta', 'Adeyemi Bero Auditorium', 'N600', 'Entrance and Uniform', 'Behind the IC mall', '-', 'Super casual. Dress for fun', NULL, 'https://vrixe.com', 'default', 'ennycris1@gmail.com', '5588886666', 'ennycris1@gmail.com', 'chrisenitan', '0a85811e78', 'private', 'Germany', '2019.0219', 'February', 'Monday', '286e6e3b7bbdc4dd94d2', 7, 'present', 'present', '0a85811e78.jpg', '0a85811e78.jpg', '', '', '', '', '', '', 'chrisenitan on 08 - Feb - 2020', 'meals', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 56, '', '12 Jan 2019', 'A LOT OF INVITE UPDATES', 'chrisenitan', 'We have been working on this page for more than 2 days. funny enough its been a week after we finished it an so much more has happened I don''t even remember what we were working on. Growth', '', '2019-03-19', '2019-03-19', '20:00', '15:00', '', 'Berlin', '', '', '', '-', '', NULL, '', 'Berlin', 'ennycris1@gmail.com', '', '', 'chrisenitan', 'HhwTIW7tlv', 'public', 'Germany', '2019.0319', 'March', 'Monday', '2YokJfacTRMY15AgVeZf', 26, '', '', 'default.jpg', 'default.png', 'vrixe', 'mensa', 'admin', 'test', 'needone', 'needtwo', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 282, 'Northampton checks', '07 Jul 2019', 'PVRS LAUNCH', 'event', 'web launch of something just as cool as the invention of couches ', '', '2019-07-07', '2019-07-07', '13:00:00', '14:00:00', '', 'Austin, TX, USA', '', '', 'sfwr', '-', '', NULL, '', 'default', 'eventtest@vrixe.com', '', '', 'event', '9e72iOlVnI', 'public', '-', '2019.0707', 'July', 'Saturday', 'hawXI1rS0XmCEhXKsLIs', 12, '', 'present', 'default.jpg', 'default.png', '', '', '', '', '', '', 'event on 15 - Nov - 2019', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 76, 'Looking for a venue', '07 Feb 2019', 'test release', 'four', '1029 Version is tested. ', '', '2019-02-14', '2019-02-14', '15:00', '15:00', '', 'Lagos', '', '', 'next to only go knows', '-', '', NULL, '', 'IVOPXN', 'four@vrixe.com', '', '', 'four', '0rSxBcvSla', 'public', 'Germany', '2019.0214', 'February', 'Wednesday', 'IVOPXNIbYZPap8wGELm8', 7, '', NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', 'four on 07 - Feb - 2019 at 17:25', 'meals', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 77, '', '07 Feb 2019', 'TO CHRIS', 'four', 'Testing the email for invite list thingy.', '', '2019-02-28', '2019-02-07', '15:00', '14:00:00', '', 'Lagos', '', '', '', '-', '', NULL, '', 'ZDPfQv', 'four@vrixe.com', '', '', 'four', '2Luy2qjzVQ', 'private', 'Germany', '2019.0228', 'February', 'Wednesday', 'ZDPfQvnwHa2eXEGUMyCl', 1, '', NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 60, 'Getting everyone to register ', '20 Jan 2019', 'TESTING DEFAULT DATES AND TIME', 'Adminig', 'Default value was set by JS. What if JS fails to load.', '', '2019-02-12', '2019-02-21', '13:00:00', '15:00:00', 'Shell Beach, USA', 'California 1, Morro Bay, CA, USA', '500', 'Devices and running cost', 'dscd', '-', 'Casual', NULL, 'https://vrixe.com', 'f0587ae442', 'ennycris1@gmail.com', 'ennycris1@gmail.com', '', 'chrisenitan', 'f0587ae442', 'public', 'Germany', '2019.0212', 'February', 'Monday', '8f87710330b2324f7c0c', 14, 'present', 'present', 'f0587ae442.jpg', 'f0587ae442.jpg', 'vrixe', '', '', '', '', '', 'chrisenitan on 05 - Jan - 2020', 'meals', 'transport', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 80, 'Fooding for fenue', '19 Feb 2019', 'EAT CHOCOLATE', 'hello', 'Eating chocolate', '', '2019-02-20', '2019-02-28', '11:00', '11:10', '', 'Big kitchen', '', '', 'Asana 4.th floor', '-', '', NULL, '', 'W3OMrZ', 'didudu@example.com', '', '', 'hello', 'iJvEwzbzrU', 'private', '-', '2019.0220', 'February', 'Tuesday', 'W3OMrZzBIJmz8BR1tb5I', 5, '', NULL, 'iJvEwzbzrU.jpg', 'iJvEwzbzrU.jpg', '', '', '', '', '', '', 'hello on 05 - Apr - 2019', 'slack', 'meals', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 278, 'Waiting', '04 Jul 2019', 'TRIP TO SPAIN', 'chrisenitan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '2019-08-17', '2019-08-18', '17:00', '17:00', '', 'Mallorca, Spain', '', '', 'Pool house', '-', '', NULL, '', '40mHKX', 'ennycris1@gmail.com', '', '', 'chrisenitan', 'gdx9t9QVPg', 'public', '-', '2019.0817', 'August', 'Friday', '40mHKXV7gWuOwrjmfUY1', 2, '', 'present', 'gdx9t9QVPg.jpg', 'gdx9t9QVPg.jpg', '', '', '', '', '', '', 'chrisenitan on 13 - Dec - 2019', 'admin', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 69, 'Trying to make Chris come too. ', '28 Jan 2019', 'PAC AND YAMS DAY', 'vrixe', 'celebrating the best of legends. ', 'Please get tickets from reliable sources only.', '2019-02-26', '2019-02-26', '03:45', '04:45', 'Okeilewo, Abeokuta', 'Leme, Abeokuta', '40', 'hotel food', 'Ujj', '-', '', NULL, '', 'default', 'vrixeapp@gmail.com', '', '', 'vrixe', 'ThcKaxOB9O', 'public', 'Germany', '2019.0226', 'February', 'Monday', 'yqiiMiy1xvZFLE3Yka9c', 73, '', 'present', 'ThcKaxOB9O.jpg', 'ThcKaxOB9O.jpg', '', '', '', '', '', '', 'vrixe on 25 - Dec - 2019', 'transport', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 78, 'Looking for artistes', '09 Feb 2019', 'CAFA MUSIC FESTIVAL 2019', 'four', 'This year, the cafa concert is an urban Contemporary celebration of creativity in Arts and Culture featuring talents from accross Nigeria in music, drama, and ', '', '2019-02-11', '2019-02-11', '13:00:00', '14:00:00', '', 'Muri Okunola Park, Lagos', '600', 'Taxing you all', 'Muri', '-', '', NULL, '', 'default', 'four@vrixe.com', '', '', 'four', 'gnVodnM7zG', 'public', 'Germany', '2019.0211', 'February', 'Sunday', 'NC6K7gp0yvNGO75fM450', 132, '', NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', 'four on 01 - Apr - 2019', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 236, 'wr', '13 Mar 2019', 'INVITE PUSH TEST', 'vrixe', 'Testing, push for invites update. ', '', '2019-03-04', '2019-03-04', '13:26', '13:26', '', 'lagos', '', '', 'wrw', '-', '', NULL, '', 'somethng', 'vrixeapp@gmail.com', '', '', 'vrixe', 'dlT5hiWY5B', 'public', '-', '2019.0304', 'March', 'Sunday', 'kEkufWhJ4GdlpebMnfEu', 5, '', '', 'default.jpg', 'default.png', '', '', '', '', '', '', 'vrixe on 30 - Dec - 2019 at 20:31', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 237, 'Testing all case scenarios', '15 Mar 2019', 'PUSH TEST FOR PLAN', 'vrixe', 'Testing the update for approved and plans', 'This bumps the version number up.', '2019-03-04', '2019-03-04', '13:00:00', '14:00:00', 'Ibadan', 'Lagos', '', '', 'Chrome Notifications', '-', '', NULL, '', 'default', 'vrixeapp@gmail.com', '', '', 'vrixe', 'Qc5kST5Lpp', 'public', '-', '2019.0304', 'March', 'Sunday', 'FudofQQNpkanFcxC6B0e', 2, 'present', '', 'default.jpg', 'default.png', '', '', '', '', '', '', 'vrixe on 30 - Dec - 2019', 'sexing', 'venues', 'slack', 'slack', 'slack', 'slack', 'slack'),
('approved', 265, 'sgsgsg', '28 Mar 2019', 'FOR PUSH', 'vrixe', 'do not add any user. this is testing if users can subscribe when they are not governors', '', '2019-03-28', '2019-03-28', '13:00:00', '14:00:00', '', 'lagos', '', '', 'sgsg', '-', '', NULL, '', 'UYnavL', 'vrixeapp@gmail.com', '', '', 'vrixe', 'FF1kRAqY5k', 'public', '-', '2019.0328', 'March', 'Wednesday', 'UYnavLrNV6ocikrIZzhD', 16, '', '', 'default.jpg', 'default.png', '', '', '', '', '', '', 'vrixe on 04 - Jul - 2019', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 269, 'C cc', '22 Apr 2019', 'KA', 'ninv', 'Kept approved to test the content on smart assistant', '', '2019-04-22', '2019-04-22', '13:00:00', '14:00:00', '', 'Tig', '', '', 'Has', '-', '', NULL, '', 'ZSP6Ot', 'ninvi@vrixe.com', '', '', 'ninv', 'SljuTcWBr4', 'public', '-', '2019.0422', 'April', 'Sunday', 'ZSP6Otjt8UMwYFBQKqAW', 2, '', NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', 'ninv on 22 - Apr - 2019', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 268, '', '14 Apr 2019', 'SDF', 'needone', 'aka', NULL, '2019-04-14', '2019-04-14', '13:00:00', '14:00:00', NULL, 'aka', NULL, NULL, NULL, '-', NULL, NULL, NULL, 'XlmXEw', 'needone@vrixe.com', NULL, '', 'needone', 'tTN5ZgmDqC', 'public', '-', '2019.0414', 'April', 'Saturday', 'XlmXEwATl54TzPIYcr37', 3, NULL, NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', NULL, 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 271, 'Looking for a venue. ', '10 May 2019', 'GROUP TRIP TO MALLORCA', 'Rezept', 'Backend, iOS and QA team bunched together on a shitty flight to spend a week together because... you guys are awesome to hang with!', 'Its our team event', '2019-08-16', '2019-08-18', '16:00', '18:00', 'Spain', 'ColÃ²nia Sant Pere, Mallorca', 'â‚¬150', 'Flight and accomodation', 'The pool house', '-', 'Casual', NULL, 'https://web.whatsapp.com', 'gVphkcQJWV', 'ennycris1@gmail.com', '085558884849', 'chris@vrix.com', 'chrisenitan', 'gVphkcQJWV', 'public', '-', '2019.0816', 'August', 'Thursday', 'ik1PaODIII63dkthvS9W', 35, 'present', 'present', 'gVphkcQJWV.jpeg', 'gVphkcQJWV.jpeg', 'vrixe', 'mensa', 'needone', '', '', '', 'chrisenitan on 13 - Dec - 2019 at 13:45', 'Coding', 'transport', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 392, '', '12 Feb 2020', 'BHH', 'vrixe', 'Yh', '', '2020-02-12', '2020-02-12', '13:00:00', '14:00:00', '', '52.4396693,13.6012974', '', '', '', 'Miami', '', NULL, '', 'RZOhS4', 'vrixeapp@gmail.com', '', '', 'vrixe', 'Pph8sM3hqL', 'public', 'United States of America', '2020.0212', 'February', 'Tuesday', 'RZOhS4WDt9BH9z1gjcot', 2, '', '', 'default.jpg', 'default.png', 'chrisenitan', '', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 281, '', '06 Jul 2019', 'ERD', 'test', 'Rrr', '', '2019-07-17', '2019-07-17', '13:00:00', '14:00:00', '', '52.4630138,13.4007047', '', '', '', '-', '', NULL, '', 'WErEXh', 'test@test.com', '', '', 'test', 'wXv9svu1Ej', 'public', '-', '2019.0717', 'July', 'Tuesday', 'WErEXhUsg7YYcDS3AzeY', 1, '', '', 'default.jpg', 'default.png', '', '', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 393, '', '19 Feb 2020', 'WORKS WITH CHRIS', 'vrixe', 'Testing weekend events with Chris', '', '2020-02-22', '2020-02-22', '13:00:00', '14:00:00', '', '52.439704,13.601233', '', '', '', 'Saint Petersburg', '', NULL, '', 'qbzWV0', 'vrixeapp@gmail.com', '', '', 'vrixe', 'ONUkeamKDO', 'public', 'United States of America', '2020.0222', 'February', 'Friday', 'qbzWV0k53BR1b1pwiFII', 1, '', '', 'default.jpg', 'default.png', 'chrisenitan', '', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 285, 'Filling forms', '17 Jul 2019', 'LASER LIGHT EVENT', 'chrisenitan', 'Why don''t we go stare at lasers for another day', '', '2019-07-24', '2019-07-24', '18:00', '18:00', '', 'Spain', '', '', 'House', '-', '', NULL, '', '4eKo9O', 'ennycris1@gmail.com', '', '', 'chrisenitan', 'fSECjOs3NG', 'public', '-', '2019.0724', 'July', 'Tuesday', '4eKo9O4NamQfaKRC66Z6', 9, '', '', 'fSECjOs3NG.jpg', 'fSECjOs3NG.jpg', '', '', '', '', '', '', 'chrisenitan on 02 - Oct - 2019', 'transport', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 288, 'Whatever the plan is', '25 Aug 2019', 'LEAVE TEST', 'event', 'hsfsfkk', 'Its our 4th meeting', '2019-08-26', '2019-08-26', '14:30', '14:30', 'Obalende, Nigeria', 'Ikeja, Nigeria', '45', 'food', 'Close to the warehouse', '-', 'Casual', NULL, 'https://WhatsApp.com', 'fw9Vv09WNa', 'eventtest@vrixe.com', 'ennycris2@gmail.com', '', 'event', 'fw9Vv09WNa', 'public', '-', '2019.0826', 'August', 'Sunday', 'WwIF2rg8IWSLCnNTHJ8H', 20, 'present', 'present', 'default.jpg', 'default.png', '', '', '', '', '', '', 'event on 24 - Oct - 2019 at 12:03', 'leisure', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 290, '', '08 Sep 2019', 'ONES HABOUR', 'needone', 'The amial never cam ', NULL, '2019-09-08', '2019-09-08', '13:00:00', '14:00:00', NULL, 'Yangon, Myanmar (Burma)', NULL, NULL, NULL, '-', NULL, NULL, NULL, 'OcLvdj', 'needone@vrixe.com', NULL, '', 'needone', '5T4tNnfpUg', 'public', '-', '2019.0908', 'September', 'Saturday', 'OcLvdjSBYqfmtmTbwCQd', 3, NULL, NULL, 'default.jpg', 'default.png', 'chrisenitan', '', '', '', '', '', NULL, 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 291, '', '08 Sep 2019', 'TONE DOWN RENNY', 'needone', 'Why that name cam up I have no idea', '', '2019-09-08', '2019-09-08', '13:00:00', '14:00:00', '', 'Renningen, Germany', '', '', '', '-', '', NULL, '', 'NFy6Zv', 'needone@vrixe.com', '', '', 'needone', 'LyHz0vXhRu', 'public', '-', '2019.0908', 'September', 'Saturday', 'NFy6ZvwICWXr2ms5otix', 3, '', '', 'default.jpg', 'default.png', 'chrisenitan', '', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 292, '', '08 Sep 2019', 'FSFV', 'needone', 'sfs', NULL, '2019-09-08', '2019-09-08', '13:00:00', '14:00:00', NULL, 'Ffordd Pen Llech, Harlech, UK', NULL, NULL, NULL, '-', NULL, NULL, NULL, '0gxzme', 'needone@vrixe.com', NULL, '', 'needone', 'yL4jyNJLqC', 'public', '-', '2019.0908', 'September', 'Saturday', '0gxzmeRLiAXdxDNy9F24', 1, NULL, NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', NULL, 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 293, '', '12 Sep 2019', 'JOE', 'needone', 'fdfved', NULL, '2019-09-12', '2019-09-12', '13:00:00', '14:00:00', NULL, 'Eevettulantie, Akaa, Finland', NULL, NULL, NULL, '-', NULL, NULL, NULL, '38Tx4m', 'needone@vrixe.com', NULL, '', 'needone', 'tXt6yTtQgW', 'public', '-', '2019.0912', 'September', 'Wednesday', '38Tx4mbszsDAUs7oHmjU', 2, NULL, NULL, 'default.jpg', 'default.png', 'chrisenitan', '', '', '', '', '', NULL, 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 308, '', '23 Sep 2019', 'INVITE PUBLIC', 'chrisenitan', 'place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal place holder isnormal ', '', '2019-09-23', '2019-09-23', '13:00:00', '14:00:00', '', 'SF, CA, USA', '', '', '', '-', '', NULL, '', 'AKf9Di', 'ennycris1@gmail.com', '', '', 'chrisenitan', 'jbNcOrOnGB', 'public', '-', '2019.0923', 'September', 'Sunday', 'AKf9DipKKgglxN3NDHQp', 12, '', '', 'default.jpg', 'default.png', 'vrixe', '', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 336, 'looking for a DJ', '15 Nov 2019', 'A LOT OF PLANNERS', 'chrisenitan', 'Testingif the new save page does what it should do in 3 ways ', '', '2019-11-15', '2019-11-15', '13:00:00', '14:00:00', '', '52.439689099999995,13.6013111', '', '', 'Behind', 'Saint Petersburg', '', NULL, '', 'yJywAZ', 'ennycris1@gmail.com', '88885580088', '', 'chrisenitan', 'GKgrMNruZs', 'public', 'United States', '2019.1115', 'November', 'Thursday', 'yJywAZkL0gSPUgqGZBIc', 3, '', '', 'default.jpg', 'default.png', 'mensa', 'vrixe', 'needone', 'admin', 'test', 'event', 'chrisenitan on 19 - Jan - 2020', 'transport', 'meals', 'leisure', 'admin', 'transport', 'venues', 'media'),
('plan', 345, '', '26 Nov 2019', 'MENSA', 'mensa', 'An eventfor mensa', NULL, '2019-11-26', '2019-11-26', '13:00:00', '14:00:00', NULL, 'Mens, France', NULL, NULL, NULL, 'Saint Petersburg', NULL, NULL, NULL, 'd4t2UC', 'mensa@vrixe.com', NULL, '', 'mensa', 'ZrHabo6zFB', 'public', 'United States', '2019.1126', 'November', 'Monday', 'd4t2UCYUgvarA1NzP8Vw', 4, NULL, NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', NULL, 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 342, 'Looking for a venue', '25 Nov 2019', 'SUSU. TRIAL ACCOUNT', 'nopush', 'Created with trial account', '', '2019-11-25', '2019-11-25', '13:00:00', '14:00:00', '', '52.4396416,13.6014344', '', '', 'Landmark', 'Saint Petersburg', '', NULL, '', 'Plal8u', 'nopush@vrixe.com', '', '', 'nopush', 'iEsjYBpDhS', 'public', 'United States', '2019.1125', 'November', 'Sunday', 'Plal8u1efNFB521YJgZI', 2, '', '', 'default.jpg', 'default.png', '', '', '', '', '', '', 'nopush on 25 - Nov - 2019', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 343, '', '25 Nov 2019', 'RFWR', 'glory', 'wrgrw', NULL, '2019-11-25', '2019-11-25', '13:00:00', '14:00:00', NULL, '52.416925,13.6492904', NULL, NULL, NULL, 'Saint Petersburg', NULL, NULL, NULL, 'Exs1WL', 'glory@vrixe.com', NULL, '', 'glory', 'E6vkb5anir', 'public', 'United States', '2019.1125', 'November', 'Sunday', 'Exs1WLdUMk4HeW5c4d3Z', 2, NULL, NULL, 'default.jpg', 'default.png', '', '', '', '', '', '', NULL, 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 338, '', '15 Nov 2019', 'TEST SAVING', 'event', 'Sayinya', '', '2019-11-15', '2019-11-15', '13:00:00', '14:00:00', '', '52.439641,13.601437', '', '', '', 'Saint Petersburg', '', NULL, '', 'd6JBFS', 'eventtest@vrixe.com', '', '', 'event', '43WjF4prCh', 'public', 'United States', '2019.1115', 'November', 'Thursday', 'd6JBFSNnYmNpk4ZDrbfz', 2, '', '', 'default.jpg', 'default.png', 'admin', 'mensa', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('plan', 375, 'dancer is aitg', '05 Jan 2020', 'PUSH TEST', 'vrixe', 'sfsfs', '', '2020-01-05', '2020-01-05', '13:00:00', '14:00:00', '', '52.444298499999995,13.6010435', '', '', 'behind', 'Miami', '', NULL, '', 'JgHPrB', 'vrixeapp@gmail.com', '', '', 'vrixe', 'ZTLYHCCI1N', 'public', 'United States of America', '2020.0105', 'January', 'Saturday', 'JgHPrBFJIdi6prYMi1b0', 1, '', '', 'default.jpg', 'default.png', 'chrisenitan', '', '', '', '', '', 'vrixe on 05 - Jan - 2020', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack'),
('invite', 391, '', '29 Jan 2020', 'WITHOUT CHRIS', 'vrixe', 'Moving house', '', '2020-01-29', '2020-01-29', '13:00:00', '14:00:00', '', '52.4396506,13.6014132', '', '', '', 'Miami', '', NULL, '', '9dvCft', 'vrixeapp@gmail.com', '', '', 'vrixe', 'eZB8LkhJND', 'public', 'United States of America', '2020.0129', 'January', 'Tuesday', '9dvCftHSiDFUq9IUSiwh', 2, '', '', 'default.jpg', 'default.png', '', '', '', '', '', '', '', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack', 'slack');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `cid` int(200) NOT NULL,
  `ranref` varchar(900) NOT NULL COMMENT 'feedback ref number',
  `user` varchar(900) NOT NULL COMMENT 'if available',
  `code` varchar(20) NOT NULL COMMENT 'somtime not present if user is not compmaining on content isse',
  `uas` varchar(900) NOT NULL,
  `statement` varchar(225) NOT NULL,
  `dated` varchar(90) NOT NULL,
  `mails` varchar(90) NOT NULL,
  `opened` varchar(900) DEFAULT NULL COMMENT 'date query was attended to',
  `closed` varchar(900) DEFAULT NULL COMMENT 'date query was solved',
  `rep` varchar(900) DEFAULT NULL COMMENT 'who is handling this',
  `notes` varchar(9000) DEFAULT NULL COMMENT 'steps'
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`cid`, `ranref`, `user`, `code`, `uas`, `statement`, `dated`, `mails`, `opened`, `closed`, `rep`, `notes`) VALUES
(40, '', 'vrixe', '', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Mobile Safari/537.36', 'adadd\r\n', '27 12 2019', '', NULL, NULL, NULL, NULL),
(41, '', 'vrixe', '', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Mobile Safari/537.36', 'adadd\r\n', '27 12 2019', '', NULL, NULL, NULL, NULL),
(25, '', 'chrisenitan', '', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3725.3 Mobile Safari/537.36', 'I think ', '07 03 2019', '', NULL, NULL, NULL, NULL),
(43, '', 'vrixe', '', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Mobile Safari/537.36', 'oo', '27 12 2019', '', NULL, NULL, NULL, NULL),
(42, '', 'vrixe', '', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Mobile Safari/537.36', 'adadd\r\n', '27 12 2019', '', NULL, NULL, NULL, NULL),
(29, '', 'chrisenitan', '', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Mobile Safari/537.36', 'j', '22 09 2019', '', NULL, NULL, NULL, NULL),
(30, '', 'chrisenitan', '', 'Mozilla/5.0 (Linux; Android 8.0.0; Pixel 2 XL Build/OPD1.170816.004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Mobile Safari/537.36', 'j', '22 09 2019', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `cid` int(100) NOT NULL,
  `status` varchar(900) NOT NULL,
  `position` varchar(900) NOT NULL,
  `image` varchar(900) NOT NULL,
  `phrase` varchar(900) NOT NULL,
  `details` varchar(900) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`cid`, `status`, `position`, `image`, `phrase`, `details`) VALUES
(1, 'open', 'Web Developer', 'developer', 'Remote - BYOD - Volunteer', 'Know the languages of web development? have some backend or frontend skills? Understand the use of coffee? We need you; we have a number of features in the pipe and could use some help in delivering them to our expanding user base. Good fit? great! We are looking forward to hearing from you so please mail us your CV and let''s have a chat. '),
(2, 'open', 'App Marketer', 'market', 'Remote - BYOD - Volunteer', 'We are refreshing the requirements to realistic expectations, please check back for new positions. Can''t wait? Please send us your CV and keep those fingers crossed'),
(3, 'open', 'Graphics Designer', 'designer', 'Remote - BYOD - Volunteer', 'Have some ideas on our interface here, want to be the one coming up with new ways to make it better. Your imaginations will be our headache and if you know your way around design suites and frameworks, we are keen to hear from you so please mail us your CV and let''s have a chat.');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `cid` int(11) NOT NULL,
  `mail` varchar(900) NOT NULL,
  `day` varchar(900) NOT NULL,
  `place` varchar(900) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`cid`, `mail`, `day`, `place`) VALUES
(15, 'renwanoob@gmail.com', '20 May 2018\r\n', 'shaba'),
(3, 'vrixeapp@gmail.com', '19 May 2018', 'test'),
(5, 'ennycris1@gmail.com', 'unsubscribed', 'test'),
(14, 'vijaysimha@zep-hyr.com', '20 May 2018\r\n', 'shaba'),
(7, 'theconcernedlearner@gmail.com', '20 May 2018', 'asw'),
(118, 'chris@m1nt3d.com', '26 Dec 2018', 'United Kingdom'),
(10, 'apps+vrixie@tomlowenthal.com', '19 May 2018', 'alpha'),
(13, 'elizmathew93@gmail.com', '19 May 2018', 'sss'),
(16, 'mikolsic+vrixe@gmail.com', '20 May 2018\r\n', 'shaba'),
(17, 'sohelpathan6411@gmail.com', '20 May 2018\r\n', 'shaba'),
(18, 'annamorra@mail.usf.edu', '20 May 2018\r\n', 'shaba'),
(19, 'natraj22easy@gmail.com', '20 May 2018\r\n', 'shaba'),
(20, 'jhonben.rg2016@gmail.com', '20 May 2018\r\n', 'shaba'),
(21, 'fabien.b@gmail.com', '20 May 2018\r\n', 'shaba'),
(22, 'karl.foxley@dkpmarketing.co.uk', '20 May 2018\r\n', 'shaba'),
(23, 'adebomichristina@gmail.com', '20 May 2018\r\n', 'shaba'),
(24, 'wep.proto@gmail.com', '20 May 2018\r\n', 'shaba'),
(25, 'nicomangubat@outlook.com', '20 May 2018\r\n', 'shaba'),
(26, 'teleteube@hotmail.com', '20 May 2018\r\n', 'shaba'),
(27, 'kwadlie@gmail.com', '20 May 2018\r\n', 'shaba'),
(29, 'coolbot89@outlook.com', '02 Oct 2018', 'Hong Kong'),
(112, 'mateusz.grochowski1992@gmail.com', '12 Nov 2018', 'Poland'),
(111, 'nduaguibecourage@gmail.com', '25 Oct 2018', 'Nigeria'),
(113, 'ennydot@gmail.com', '02 Dec 2018', 'Nigeria'),
(115, 'pzulamian@gmail.com', '07 Dec 2018', 'Uruguay'),
(116, 'beckleygbenga@gmail.com', '21 Dec 2018', 'Nigeria'),
(117, 'theregoeslogic@gmail.com', '23 Dec 2018', 'United States'),
(119, 'dav.05.eco@gmail.com', '31 Dec 2018', 'Spain'),
(120, 'contactcafa@gmail.com', '04 Jan 2019', 'Germany'),
(121, 'nnekaolisa94@gmail.com', '05 Jan 2019', 'Nigeria'),
(122, 'test@vrixe.com', '17 Jan 2019', '-'),
(123, 'test@vrixe.com', '17 Jan 2019', '-'),
(124, 'test@vrixe.com', '17 Jan 2019', '-'),
(125, 'test@vrixe.com', '17 Jan 2019', '-'),
(126, 'four@vrixe.com', '07 Feb 2019', '-'),
(127, 'four@vrixe.com', '07 Feb 2019', '-'),
(128, 'glory@vrixe.com', '21 Feb 2019', '-'),
(129, 'glory@vrixe.com', '21 Feb 2019', '-'),
(130, 'glory@vrixe.com', '21 Feb 2019', '-'),
(131, 'glory@vrixe.com', '21 Feb 2019', '-'),
(132, 'eventtest@vrixe.com', '26 Feb 2019', '-'),
(133, 'eventtest@vrixe.com', '26 Feb 2019', '-'),
(134, 'eventtest@vrixe.com', '26 Feb 2019', '-'),
(135, 'ennycris1@gmail.com', '04 Mar 2019', '-'),
(136, 'ennycris1@gmail.com', '04 Mar 2019', '-'),
(137, 'glory@vrixe.com', '11 Mar 2019', '-'),
(138, 'glory@vrixe.com', '11 Mar 2019', '-'),
(139, 'glory@vrixe.com', '11 Mar 2019', '-'),
(140, 'glory@vrixe.com', '11 Mar 2019', '-'),
(141, 'date@vrixe.com', '16 11 2019', 'United States'),
(142, 'date@vrixe.com', '16 11 2019', 'United States'),
(143, 'date@vrixe.com', '2019-11-16', 'United States'),
(144, 'glory@vrixe.com', '2019-11-26', 'United States'),
(145, 'sing@vrixe.com', '2019-12-26', 'United States'),
(146, 'vrixeapp@gmail.com', '2019-12-29', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `cid` int(11) NOT NULL,
  `refs` varchar(900) NOT NULL,
  `question` varchar(900) DEFAULT NULL,
  `answerone` varchar(900) DEFAULT NULL,
  `answertwo` varchar(900) DEFAULT NULL,
  `answerthree` varchar(900) DEFAULT NULL,
  `answerfour` varchar(900) DEFAULT NULL,
  `answerfive` varchar(900) DEFAULT NULL,
  `av` int(11) DEFAULT NULL,
  `bv` int(11) DEFAULT NULL,
  `cv` int(11) DEFAULT NULL,
  `dv` int(11) DEFAULT NULL,
  `ev` int(11) DEFAULT NULL,
  `comments` varchar(900) DEFAULT NULL,
  `pollpri` varchar(900) DEFAULT NULL,
  `users` varchar(900) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`cid`, `refs`, `question`, `answerone`, `answertwo`, `answerthree`, `answerfour`, `answerfive`, `av`, `bv`, `cv`, `dv`, `ev`, `comments`, `pollpri`, `users`) VALUES
(19, 'QEpIujA5Yz', 'reve', 'rer', 'etet', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', NULL),
(20, '0a85811e78', 'sfs', 'sf', 'fs', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', NULL),
(21, 'HhwTIW7tlv', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(23, '0rSxBcvSla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2Luy2qjzVQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'f0587ae442', 'WHAT IS TH COST OF COWORKING', '100', '200', '300', '', '', 1, 1, NULL, NULL, NULL, 'Sade: I like this guys &=@chrisenitan: omments on polls? awesome! &=@chrisenitan: Close absolonia when user clicks add comment &=', 'true', 'Sade #a!,@chrisenitan #b!,'),
(26, 'iJvEwzbzrU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '79gRP557wt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'ThcKaxOB9O', 'Not sure what to eat', 'pasta', 'cow', 'salad', '', '', NULL, 1, NULL, NULL, NULL, '', 'false', '@vrixe #b!,'),
(30, 'gnVodnM7zG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'dlT5hiWY5B', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(32, 'Qc5kST5Lpp', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(33, 'FF1kRAqY5k', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', ''),
(34, 'SljuTcWBr4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'tTN5ZgmDqC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '97EHHyOIUR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'gVphkcQJWV', 'WHAT TIME ARE WE LEAVING', '5pm', '6pm', '4pm. We have to talk to CTO', '', '', 1, NULL, NULL, NULL, NULL, '@chrisenitan: Maybe we can skip Friday all together &=@chrisenitan: No we have o do retro &=unverifieduser: csd &=', 'true', '@chrisenitan #a!,'),
(38, 'FnzGGduhlp', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(39, 'gn4Bg9onR1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, '5TBRFYP7zs', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(41, 'ISKKA7OgPK', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', NULL),
(42, 'ziD68eVsCm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '0sGTAA9cPw', 'wrwrwr', 'wrw', 'wrwr', 'wrwr', '', '', 1, NULL, 1, NULL, NULL, '@vrixe: toungning &=', 'true', '@vrixe #a!,frer #c!,'),
(44, 'gdx9t9QVPg', 'sample', 'one', 'two', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', NULL),
(47, 'wXv9svu1Ej', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(48, '9e72iOlVnI', 'ALL IN TESTING PRI TO EVENT', 'Good', 'Fair', 'Ugly', 'Bad', 'Dn', 1, 1, NULL, NULL, NULL, '@event: you too special &=@event: wine am well &=@chrisenitan: commentas me &=@chrisenitan: at least we stole the show &=@event: One more common comment &=@event: Checking emoji ðŸ˜‰ &=', 'true', '@event #a!,@chrisenitan #b!,'),
(49, 'cvjxxYPzYY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, '628ubGoHId', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'fSECjOs3NG', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', ''),
(52, 'eLAgrsp9b0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'SDqFf4T0fi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'fw9Vv09WNa', 'SAMPLE POLL', 'SVFSVF', 'WRWRGR', 'RWRFVW', '', '', NULL, 1, NULL, NULL, NULL, '', 'true', '@event #b!,'),
(55, 'D7CmNTjtvI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '5T4tNnfpUg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'LyHz0vXhRu', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(58, 'yL4jyNJLqC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'tXt6yTtQgW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'f0bEGZ3jYQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'f0bEGZ3jYQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'f0bEGZ3jYQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'gYRPL1c6Mp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'gYRPL1c6Mp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'pb5eDVBXLg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'fc1F2cYLVd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'fc1F2cYLVd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'fc1F2cYLVd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'fc1F2cYLVd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'lOa6cwV4BL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'fc1F2cYLVd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'fc1F2cYLVd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'lOa6cwV4BL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'jbNcOrOnGB', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(75, 'X2gVOhZSS4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'Z8TM0G2f19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, '4tyZRfBC7p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'OPryZe33IK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'jn9E970zyc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, '02CNkIjbE4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'K9o2gGhs9I', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'cqDLGza9Rw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'cqDLGza9Rw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'fbneQ6Qoaj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'fbneQ6Qoaj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'fbneQ6Qoaj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'T3Jv0zMhZV', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'wBXhBgEfW0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, '3If0lRAz0Q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'QE9oBCeuMy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'WOJpY0xcOU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'C8g1q9ddbn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'WUPLDoFzNj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'aXwlAAHavK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, '0H8wD77L4U', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, '68LMtFnxgl', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'EXCN5ucu2c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'IhqUdQF1Lz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, '9tI7wMFR3C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'GKgrMNruZs', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(102, '9sBZZpDGEQ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, '43WjF4prCh', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(104, 'hMd2vqBdOe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'mWffFFxTft', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'iEsjYBpDhS', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', NULL),
(107, 'E6vkb5anir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, '9F8d7lTeuu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'ZrHabo6zFB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'U0LC8I2tK4', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(112, 'qNusnlPZ09', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', NULL),
(116, 'ZTLYHCCI1N', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'false', NULL),
(118, '0zM48KKCxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'D59flqAzJr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'SeZhjSWe3w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'eZB8LkhJND', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(122, 'Pph8sM3hqL', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL),
(123, 'ONUkeamKDO', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `cid` int(11) NOT NULL,
  `email` varchar(900) NOT NULL,
  `fullname` varchar(900) NOT NULL,
  `username` varchar(900) NOT NULL,
  `password` varchar(900) NOT NULL,
  `created` varchar(900) NOT NULL COMMENT 'date profile was craeted',
  `bio` varchar(1800) NOT NULL COMMENT 'max 220 chars',
  `location` varchar(900) NOT NULL,
  `picture` varchar(900) NOT NULL,
  `cookie` varchar(900) NOT NULL,
  `freq` varchar(900) NOT NULL COMMENT 'secure code for account retrieval',
  `link` varchar(900) NOT NULL,
  `confirm` varchar(900) DEFAULT NULL,
  `contacts` varchar(900) DEFAULT NULL,
  `pushid` varchar(900) DEFAULT NULL COMMENT 'one signal',
  `authtoken` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1225 DEFAULT CHARSET=latin1 COMMENT='store all user profile and details';

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`cid`, `email`, `fullname`, `username`, `password`, `created`, `bio`, `location`, `picture`, `cookie`, `freq`, `link`, `confirm`, `contacts`, `pushid`, `authtoken`) VALUES
(28, 'ennycris1@gmail.com', 'Chris Enitan', 'chrisenitan', 'aaaaaa1', '09 12 2019', 'This is just a test This is just a test This is just a test This is just a test This is just a test This is just a test ', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/0f8coculus-rift-touch-bundle-1.jpg', 'b8c176ee7bee29c3d5a9', '21 04 2019', 'twitter.com/crisenitan', '02 03 2019', 'cid = 79 or cid = 33 or cid = 81 or cid = 93 or cid = 42 or cid = 104 or cid = 108 or cid = 1155 or cid = 1153 or cid = 1156 or cid = 1147 or cid = 109 or cid = 1148 or cid = 1150 or cid = 29 ', '66666666-36f0-432b-9f5d-4bfeec61fa81', 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjVlZGQ5NzgyZDgyMDQwM2VlODUxOGM0YWFiYjJiOWZlMzEwY2FjMTIiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNTUwNjExODEyMjM3LW10MjI4MGQ4ajc2N2M1dTRvNnJxa29kdjM2dGU5NzI3LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNTUwNjExODEyMjM3LW10MjI4MGQ4ajc2N2M1dTRvNnJxa29kdjM2dGU5NzI3LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTA2Mjg4MDc2NjEzNjkyOTAzMzY5IiwiZW1haWwiOiJlbm55Y3JpczFAZ21haWwuY29tIiwiZW1haWxfdmVyaWZpZWQiOnRydWUsImF0X2hhc2giO'),
(29, 'vrixeapp@gmail.com', 'Vrixe Alpha', 'vrixe', 'aaaaaa1', '09 12 2019', 'Something about Vrixe Something about Vrixe Something about Vrixe Something about Vrixe Something about Vrixe Something about Vrixe Something about Vrixe Somet', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7pp29c3d5a9', '2019-12-29', 'github.com/chrisenitan', 'dac025', 'cid = 28 or cid = 109 or cid = 1147 or cid = 110 or cid = 1153 or cid = 1150 ', 'a753e5f4-3c49-4bba-8032-a230a772cbbb', 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImJhZDM5NzU0ZGYzYjI0M2YwNDI4YmU5YzUzNjFkYmE1YjEwZmZjYzAiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiNTUwNjExODEyMjM3LW10MjI4MGQ4ajc2N2M1dTRvNnJxa29kdjM2dGU5NzI3LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiNTUwNjExODEyMjM3LW10MjI4MGQ4ajc2N2M1dTRvNnJxa29kdjM2dGU5NzI3LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTA0NTUzMTE3ODY4ODA5MTI0NTc3IiwiZW1haWwiOiJ2cml4ZWFwcEBnbWFpbC5jb20iLCJlbWFpbF92ZXJpZmllZCI6dHJ1ZSwiYXRfaGFzaCI6I'),
(114, 'four@vrixe.com', 'Need One', 'four', 'aaaaaa1', '09 12 2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/ana_mora.png', 'b8c176ee7bee29c3diok', '38fb90', 'twitter.com/crisenitan', 'ty6trf', NULL, '5cc5aa6e-c010-4aca-bbdb-c5176dae694b', NULL),
(115, 'glory@vrixe.com', 'Need One', 'glory', 'aaaaaa1', '2019-11-12', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7bee29cdnd5a9', 'b8c176', 'twitter.com/crisenitan', NULL, '', 'a753e5f4-3c49-4bba-8032-a230a772cbbb', NULL),
(1147, 'needone@vrixe.com', 'Need One', 'needone', 'aaaaaa1', '09-12-2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7bed29c3d5a9', '76eb11', 'twitter.com/crisenitan', 'gsjh89', NULL, 'e132c34b-2d9b-4436-b690-d3b823a8f12f', NULL),
(1148, 'needtwo@vrixe.com', 'Need One', 'needtwo', 'aaaaaa1', '09-12-2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7be009c3d5a9', 'f7c471', 'twitter.com/crisenitan', 'fjhdkd9', NULL, '39242671-c755-450d-8767-fb89ij39330f', NULL),
(1149, 'didudu@example.com', 'Need One', 'hello', 'aaaaaa1', '09 12 2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7bell9c3d5a9', 'e83fb4', 'twitter.com/crisenitan', 'hsfjhfj', 'cid = 28 ', '39242671-c755-450d-8967-fb8e1339330f', NULL),
(1150, 'eventtest@vrixe.com', 'Event Account', 'event', 'aaaaaa1', '09 12 2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/d_mana.png', 'b8c176ee7bee29c3d5al', '1d58bf', 'twitter.com/crisenitan', '1d58bf', 'cid = 28 or cid = 1147 or cid = 1148 or cid = 109 or cid = 1153 or cid = 1159 ', 'a753e5f4-3c49-4bba-8032-a230a772cbbb', NULL),
(110, 'admin@vrixe.com', 'Admin Account', 'admin', 'aaaaaa1', '09 12 2019', 'Bio...', '-', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'db5bc4c2e0e4c2d114d0', 'db5bc4', 'vrixe.com/profile/admin', 'c2d114d0', 'cid = 28 or cid = 29 or cid = 108 ', '39242671-c755-450d-0967-fb8e1339330f', NULL),
(109, 'mensa@vrixe.com', 'Mensa ', 'mensa', 'aaaaaa1', '09 12 2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7bee29c3d5ak', '7fd023', 'twitter.com/crisenitan', 'c2d114d0', 'cid = 1148 ', '66666666-36f0-432b-9f5d-4bfeec61fa81', NULL),
(1152, 'nopush@vrixe.com', 'Profile Name', 'nopush', 'aaaaaa1', '2019-11-20', 'What I do', '-', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/59fbcafad.png', 'e4fc96751630e5ec4473', 'e4fc96', 'vrixe.com/profile/nopush', NULL, NULL, 'e702ba5d-91e5-460d-898e-ba69f45fbf51', NULL),
(1153, 'cookie@vrixe.com', 'Need One', 'cookietest', 'aaaaaa1', '09 12 2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7bee29cad5a9', '31db57', 'twitter.com/crisenitan', '31db57', '', 'a753e5f4-3c49-4bba-8032-a230a772cbbb', NULL),
(1155, 'ninvi@vrixe.com', 'Need One', 'ninv', 'aaaaaa1', '09 12 2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7bee29c3d5a3', 'aedf0e', 'twitter.com/crisenitan', 'aedf0e9', NULL, '66666666-36f0-432b-9f5d-4bfeec61fa81', NULL),
(1156, 'opentest@vrixe.com', 'Open Tester', 'opentest', 'aaaaaa1', '09 12 2019', 'What I do', '-', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'aedf0e9dbb36caokj88c', 'aedf0e', 'vrixe.com/profile/opentest', 'aedf0e9', NULL, '66666666-36f0-432b-9f5d-4bfeec61fa81', NULL),
(1159, 'test@test.com', 'Test Account', 'test', 'aaaaaa1', '09 12 2019', 'Some bio data here', 'Germany', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', 'b8c176ee7bee29c4d5a9', '1618ee', 'twitter.com/crisenitan', 'wrfr', NULL, 'a753e5f4-3c49-4bba-8032-a230a772cbbb', NULL),
(1196, 'fanny@vrixe.com', 'Profile Name', 'hallosa', 'wug17c155', '2019-12-06', '', 'United States', 'https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/user.png', '073a9afa149ce4965c1d', '073a9a', 'vrixe.com/profile/hallosa', NULL, NULL, '66666666-36f0-432b-9f5d-4bfeec61fa81', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `cid` int(11) NOT NULL,
  `refs` varchar(13) NOT NULL,
  `pa` varchar(900) DEFAULT NULL,
  `pat` varchar(1800) DEFAULT NULL,
  `pb` varchar(1800) DEFAULT NULL,
  `pbt` varchar(1800) DEFAULT NULL,
  `pc` varchar(1800) DEFAULT NULL,
  `pct` varchar(1800) DEFAULT NULL,
  `pd` varchar(1800) DEFAULT NULL,
  `pdt` varchar(1800) DEFAULT NULL,
  `pe` varchar(1800) DEFAULT NULL,
  `pet` varchar(1800) DEFAULT NULL,
  `pf` varchar(1800) DEFAULT NULL,
  `pft` varchar(1800) DEFAULT NULL,
  `pg` varchar(1800) DEFAULT NULL,
  `pgt` varchar(1800) DEFAULT NULL,
  `ph` varchar(1800) DEFAULT NULL,
  `pht` varchar(1800) DEFAULT NULL,
  `pi` varchar(1800) DEFAULT NULL,
  `pit` varchar(1800) DEFAULT NULL,
  `pj` varchar(1800) DEFAULT NULL,
  `pjt` varchar(1800) DEFAULT NULL,
  `pk` varchar(1800) DEFAULT NULL,
  `pkt` varchar(1800) DEFAULT NULL,
  `pl` varchar(1800) DEFAULT NULL,
  `plt` varchar(1800) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=394 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`cid`, `refs`, `pa`, `pat`, `pb`, `pbt`, `pc`, `pct`, `pd`, `pdt`, `pe`, `pet`, `pf`, `pft`, `pg`, `pgt`, `ph`, `pht`, `pi`, `pit`, `pj`, `pjt`, `pk`, `pkt`, `pl`, `plt`) VALUES
(16, 'WtDGTomlqZ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '6YG8RpuMpB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'LGmyp45mRG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '4bHWMGX018', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'LbKUYDuDmM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'uwD1ezkdh8', '12:00:00', 'Finished the article ready to publish ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '8iFd5vnZJp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '4nSLiu6Ncj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'PeHC7I0ZTq', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'OR90Nbi7Up', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'T1PD1VZ8lU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'tX0gGBv5SD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '9lIA7XZOff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'UZCqYsYEVt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '0a85811e78', '12:00:00', 'dfasf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'HhwTIW7tlv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'f0587ae442', '12:00:00', 'Opening remarks from governor', '12:26', 'Welcome in of those who need to be welcomed in.', '13:00', 'Can we have the meeting if the elders at this time', '13:30', 'Time to think and brainstorm on the features we will ring up', '14:00', 'Menu and break period', '14:45', 'Short welcome back ceremony for the old members', '15:28', 'Keynote from our Lady in the house', '', '', '', '', '', '', '', '', '', ''),
(69, 'ThcKaxOB9O', '12:00:00', '', '13:00:00', '', '13:30:00', '', '14:00:00', '', '15:00:00', '', '16:00:00', '', '17:00:00', '', '18:00:00', '', '19:00:00', '', '20:00:00', '', '20:30:00', '', '21:00:00', ''),
(76, '0rSxBcvSla', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '2Luy2qjzVQ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'gnVodnM7zG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'iJvEwzbzrU', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(392, 'Pph8sM3hqL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(271, 'gVphkcQJWV', '12:00:00', 'Leave the office', '19:00', 'Complete flight check-in', '19:10', 'Must be tallied. Need to contact the house owner for more details', '22:15', 'Touch down people. Welcome to Spain', '23:00', 'Hotel Check in with the Owner', '00:00', 'We hit a couple bars. Special at Janivie Bar', '02:04', 'Seriously go home now.', '', '', '', '', '', '', '', '', '', ''),
(336, 'GKgrMNruZs', '12:00:00', '', '13:00:00', '', '13:30:00', '', '14:00:00', '', '15:00:00', '', '16:00:00', '', '17:00:00', '', '18:00:00', '', '19:00:00', '', '20:00:00', '', '20:30:00', '', '21:00:00', ''),
(247, 'QEpIujA5Yz', '12:00:00', 'sd', '13:00:00', 'sfsf', '13:30:00', '', '14:00:00', '', '15:00:00', '', '16:00:00', '', '17:00:00', '', '18:00:00', '', '19:00:00', '', '20:00:00', '', '20:30:00', '', '21:00:00', ''),
(265, 'FF1kRAqY5k', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(269, 'SljuTcWBr4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(268, 'tTN5ZgmDqC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 'dlT5hiWY5B', '12:00:00', '', '13:00:00', '', '13:30:00', '', '14:00:00', '', '15:00:00', '', '16:00:00', '', '17:00:00', '', '18:00:00', '', '19:00:00', '', '20:00:00', '', '20:30:00', '', '21:00:00', ''),
(237, 'Qc5kST5Lpp', '12:00:00', 'r', '13:00:00', '', '13:30:00', '', '14:00:00', '', '15:00:00', '', '16:00:00', '', '17:00:00', '', '18:00:00', '', '19:00:00', '', '20:00:00', '', '20:30:00', '', '21:00:00', ''),
(278, 'gdx9t9QVPg', '12:00:00', '', '13:00:00', '', '13:30:00', '', '14:00:00', '', '15:00:00', '', '16:00:00', '', '17:00:00', '', '18:00:00', '', '19:00:00', '', '20:00:00', '', '20:30:00', '', '21:00:00', ''),
(281, 'wXv9svu1Ej', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(282, '9e72iOlVnI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(285, 'fSECjOs3NG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(288, 'fw9Vv09WNa', '12:00:00', 'wrfrwrfr', '15:03', 'fsvrgrer', '15:33', 'frwghyjyhtegr rrgtegr', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(290, '5T4tNnfpUg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 'LyHz0vXhRu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(292, 'yL4jyNJLqC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 'tXt6yTtQgW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(338, '43WjF4prCh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(308, 'jbNcOrOnGB', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(342, 'iEsjYBpDhS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(343, 'E6vkb5anir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 'ZrHabo6zFB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 'ZTLYHCCI1N', '12:00:00', '', '13:00:00', '', '13:30:00', '', '14:00:00', '', '15:00:00', '', '16:00:00', '', '17:00:00', '', '18:00:00', '', '19:00:00', '', '20:00:00', '', '20:30:00', '', '21:00:00', ''),
(391, 'eZB8LkhJND', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(393, 'ONUkeamKDO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `cid` int(11) NOT NULL,
  `fullname` varchar(900) NOT NULL,
  `user` varchar(900) NOT NULL,
  `reviewdate` varchar(900) NOT NULL,
  `design` varchar(900) NOT NULL,
  `ux` varchar(900) NOT NULL,
  `features` varchar(900) NOT NULL,
  `support` varchar(900) NOT NULL,
  `texts` varchar(900) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`cid`, `fullname`, `user`, `reviewdate`, `design`, `ux`, `features`, `support`, `texts`) VALUES
(4, 'Four User', 'four', '27 Dec 2019', '70', '70', '70', '60', 'I think this is really nice. It''s ready to be shared with the world. '),
(5, 'Shade Test', 'event', '27 Dec 2019', '70', '70', '70', '60', 'Would be nice to know who added me to contacts but I the calendar and email feature are good.'),
(6, 'Thanos Test', 'cookietest', '27 Dec 2019', '70', '70', '70', '60', 'I love Vrixe, did a plan on it and I like d the map feature, very nice thank you for this. '),
(7, 'Chris Enitan', 'chrisenitan', '27 Dec 2019', '70', '70', '80', '70', 'Think it''s not bad'),
(8, 'Mensa Is', 'mensa', '27 Dec 2019', '60', '70', '80', '40', 'The best app I have used in a while. So good I can not believe its a website'),
(13, 'Vrixe Alpha', 'vrixe', '27 Dec 2019', '20', '80', '40', '60', 'cdshjhjbsjf fhsfsfjs sfksjfnsj cdshjhjbsjf fhsfsfjs sfksjfnsj cdshjhjbsjf fhsfsfjs sfksjfnsj cdshjhjbsjf fhsfsfjs sfksjfnsj cdshjhjbsjf fhsfsfjs sfksjfnsj ');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `cid` int(11) NOT NULL,
  `searchquery` varchar(200) NOT NULL,
  `sqy` varchar(700) NOT NULL,
  `profile` varchar(900) NOT NULL,
  `sc` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=399 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`cid`, `searchquery`, `sqy`, `profile`, `sc`) VALUES
(398, 'HANG', 'United States of America', '2020 - 02 - 08', 78),
(397, 'HANG', 'United States of America', '2020 - 02 - 08', 78),
(396, 'HANG', 'United States of America', '2020 - 02 - 08', 78),
(395, 'HANG', 'United States of America', '2020 - 02 - 08', 78),
(394, 'REUN', 'United States of America', '2020 - 01 - 24', 78),
(393, 'MEET', 'United States of America', '2020 - 01 - 24', 78),
(392, 'HANG', 'United States of America', '2020 - 01 - 22', 78),
(391, 'HANG', 'United States of America', '2020 - 01 - 22', 78),
(390, 'HANG', 'United States of America', '2020 - 01 - 22', 78),
(389, 'HANG', 'United States of America', '2020 - 01 - 22', 78),
(388, 'HANG', 'United States of America', '2020 - 01 - 22', 78),
(387, 'REUN', 'United States', '2019 - 12 - 26', 78),
(386, 'HANG', 'United States', '2019 - 12 - 25', 78),
(385, 'HANG', 'United States', '2019 - 12 - 25', 78),
(384, 'HANG', 'United States', '2019 - 12 - 25', 78),
(383, 'HANG', 'United States', '2019 - 12 - 25', 78),
(382, 'HANG', 'United States', '2019 - 12 - 22', 78),
(380, '+1 from <b>Texas, United States</b> on <b>2019-12-14</b> at <b>05:05:33am</b>', 'analytics', 'mobile', 1),
(379, '+1 from <b>United States</b> on <b>2019-12-14</b> at <b>05:03:06am</b>', 'analytics', 'mobile', 1),
(378, '+1 from <b>United States</b> on <b>2019-12-14</b> at <b>05:03:06am</b>', 'analytics', 'mobile', 1),
(377, '+1 from <b>United States</b> on <b>2019-12-14</b> at <b>05:05:18am</b>', 'analytics', 'mobile', 1),
(376, '+1 from <b>United States</b> on <b>2019-12-14</b> at <b>05:03:06am</b>', 'analytics', 'mobile', 1),
(375, '+1 from <b>United States</b> on <b>2019-12-14</b> at <b>05:03:06am</b>', 'analytics', 'mobile', 1),
(374, '+1 from <b>United States</b> on <b>2019-12-14</b> at <b>05:03:06am</b>', 'analytics', 'mobile', 1),
(381, '+1 from <b>Texas, United States</b> on <b>2019-12-14</b> at <b>05:05:33am</b>', 'analytics', 'mobile', 1),
(372, '+1 from <b>United States</b> on <b>2019-12-14</b> at <b>05:03:06am</b>', 'analytics', 'mobile', 1),
(373, '+1 from <b>Texas, United States</b> on <b>2019-12-14</b> at <b>05:05:33am</b>', 'analytics', 'mobile', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ammo`
--
ALTER TABLE `ammo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contributors`
--
ALTER TABLE `contributors`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=389;
--
-- AUTO_INCREMENT for table `ammo`
--
ALTER TABLE `ammo`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contributors`
--
ALTER TABLE `contributors`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=394;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=394;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `cid` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1225;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=394;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=399;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
