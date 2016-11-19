-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 03:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_flic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list`
--

CREATE TABLE `tbl_list` (
  `list_id` int(100) NOT NULL,
  `list_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_list`
--

INSERT INTO `tbl_list` (`list_id`, `list_name`) VALUES
(444, 'scope'),
(443, 'army'),
(442, 'arm'),
(441, 'intel'),
(440, 'international'),
(439, 'happy'),
(438, 'hope'),
(437, 'lion'),
(436, 'living'),
(435, 'lust'),
(434, 'love'),
(433, 'dark'),
(432, 'cars'),
(431, 'numbers'),
(430, 'seven'),
(429, 'life'),
(428, 'cam'),
(427, 'cat'),
(426, 'cow'),
(425, 'fun'),
(424, 'snow'),
(423, 'ice'),
(422, 'game'),
(421, 'green'),
(420, 'flowers'),
(419, 'water'),
(418, 'abstract'),
(417, 'color'),
(416, 'inspection'),
(415, 'space'),
(414, 'rain'),
(413, 'orange'),
(412, 'insect'),
(411, 'art'),
(410, 'ar'),
(409, 'a'),
(445, 'star'),
(446, 'crown'),
(447, 'cup'),
(448, 'hot'),
(449, 'can'),
(450, 'cut'),
(451, 'hale'),
(452, 'half'),
(453, 'man'),
(454, 'wolf'),
(455, 'truck'),
(456, 'photoshop'),
(457, 'supermoon'),
(458, 'seaside'),
(459, 'sky'),
(460, 'house'),
(461, 'hero'),
(462, 'blood'),
(466, 'ship'),
(465, 'boat'),
(467, 'ocean'),
(468, 'google'),
(469, 'asdfjsaf'),
(470, 'smile'),
(471, 'que'),
(472, 'animals'),
(473, 'mask'),
(474, 'canon'),
(475, 'van'),
(476, 'milk'),
(477, 'fox'),
(478, 'black'),
(479, 'ball'),
(480, 'popular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_list`
--
ALTER TABLE `tbl_list`
  ADD PRIMARY KEY (`list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_list`
--
ALTER TABLE `tbl_list`
  MODIFY `list_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
