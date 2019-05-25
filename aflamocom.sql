-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2019 at 02:58 AM
-- Server version: 5.7.21-1
-- PHP Version: 7.2.4-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aflamocom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(255) DEFAULT NULL,
  `admin_lname` varchar(255) DEFAULT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(1000) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_fname`, `admin_lname`, `admin_username`, `admin_password`, `admin_email`) VALUES
(1, 'Zakaria', 'Guenna', 'Aflamocom', '2e6ed4059f3c8cc34fa7c099320981e4fb982439', 'zakaria.guenna@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `episode_id` int(11) NOT NULL,
  `episode_nmbr` int(3) NOT NULL,
  `serie_name` varchar(255) NOT NULL,
  `season` int(2) NOT NULL,
  `server1` varchar(255) NOT NULL,
  `server2` varchar(255) NOT NULL,
  `server3` varchar(255) NOT NULL,
  `server4` varchar(255) NOT NULL,
  `download1` varchar(255) NOT NULL,
  `download2` varchar(255) NOT NULL,
  `download3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`episode_id`, `episode_nmbr`, `serie_name`, `season`, `server1`, `server2`, `server3`, `server4`, `download1`, `download2`, `download3`) VALUES
(1, 1, 'Prison Break', 5, 'https://openload.co/embed/6Q4PMVXLCSU/Prison.Break.S05E01-aflamocom.mp4', 'https://ok.ru/videoembed/319197022956', 'http://thevideo.me/embed-oa2nw51qdz0i.html', 'https://estream.to/mavrzte32yc3.html', 'https://openload.co/f/6Q4PMVXLCSU', 'https://openload.co/f/6Q4PMVXLCSU', 'https://openload.co/f/6Q4PMVXLCSU'),
(2, 2, 'Prison Break', 5, 'https://openload.co/embed/UyP0L9Qf-rU/Prison-Break-s05-ep02-aflamocom-com.m4v.mp4', 'https://ok.ru/videoembed/319197350636', 'http://thevideo.me/embed-mbqa50drivbz.html', 'https://estream.to/99bu77o2voen.html', 'https://openload.co/f/UyP0L9Qf-rU', 'https://openload.co/f/UyP0L9Qf-rU', 'https://openload.co/f/UyP0L9Qf-rU'),
(3, 3, 'Prison Break', 5, 'https://openload.co/embed/Nf90S-5dnQo/Prison-Break-s05-e03-aflamocom-com.mp4', 'https://ok.ru/videoembed/319197481708', 'http://thevideo.me/embed-c7rdknseloqk.html', 'https://estream.to/vde9yn672h8y.html', 'https://openload.co/f/Nf90S-5dnQo', 'https://openload.co/f/Nf90S-5dnQo', 'https://openload.co/f/Nf90S-5dnQo'),
(4, 4, 'Prison Break', 5, 'https://openload.co/embed/8HwCKp40fqc/prison-break-s05-e04-aflamocom-com.mp4', 'https://ok.ru/videoembed/319197612780', 'http://thevideo.me/embed-vhxodari2igf.html', 'https://estream.to/m4y1u40qh9ka.html', 'https://openload.co/f/8HwCKp40fqc', 'https://openload.co/f/8HwCKp40fqc', 'https://openload.co/f/8HwCKp40fqc'),
(5, 5, 'Prison Break', 5, 'https://openload.co/embed/TBqFZh-iLCE/Prison-break-s05-e05-aflamocom-com.mp4', 'https://ok.ru/videoembed/320667716332', 'http://thevideo.me/embed-ddnp3pgx256d.html', 'https://estream.to/embed-g8qzv2wfikt6.html', 'https://openload.co/f/TBqFZh-iLCE', 'https://openload.co/f/TBqFZh-iLCE', 'https://openload.co/f/TBqFZh-iLCE'),
(6, 6, 'Prison Break', 5, 'https://openload.co/embed/pdLfynB57qM/Prison.Break.S05E06.aflamocom.com.mp4', 'https://ok.ru/videoembed/324317874924', 'https://streamango.com/embed/oofqrrlkolfflonr/Prison_Break_S05E06_aflamocom_com_mp4', 'http://thevideo.me/embed-08rfeq3vhf1l.html', 'https://openload.co/f/pdLfynB57qM', 'https://openload.co/f/pdLfynB57qM', 'https://openload.co/f/pdLfynB57qM'),
(7, 7, 'Prison Break', 5, 'https://openload.co/embed/PentxZG2Xqs/Prison.Break.S05E07.aflamocom.com.mp4', 'https://ok.ru/videoembed/327661062892', 'https://streamango.com/embed/tqtftmrrfsbkobke/Prison_Break_S05E07_aflamocom_com_mp4', 'http://thevideo.me/embed-ib4v4hrbxlbh.html', 'https://openload.co/f/PentxZG2Xqs', 'https://openload.co/f/PentxZG2Xqs', 'https://openload.co/f/PentxZG2Xqs'),
(8, 1, 'Mr.Robot', 1, 'https://openload.co/embed/QEyFZE_DzCs/Mr._Robot_S01e01.aflamocom.com.mp4', 'https://ok.ru/videoembed/329004026604', 'https://streamango.com/embed/bdlcmokbanlpbptl/Mr_Robot_S01e01_aflamocom_com_mp4', 'http://thevideo.me/embed-4mm2zcafm45r.html', 'https://openload.co/f/QEyFZE_DzCs\r\n', 'https://openload.co/f/QEyFZE_DzCs\r\n', 'https://openload.co/f/QEyFZE_DzCs\r\n'),
(9, 2, 'Mr.Robot', 1, 'https://openload.co/embed/qH35zLZ4VKc/Mr._Robot_S01e02.aflamocom.com.mp4', 'https://ok.ru/videoembed/329004288748', 'https://streamango.com/embed/slpdksldsbqomkds/Mr_Robot_S01e02_aflamocom_com_mp4', 'http://thevideo.me/embed-17hgie4qhycv.html', 'https://openload.co/f/qH35zLZ4VKc', 'https://openload.co/f/qH35zLZ4VKc', 'https://openload.co/f/qH35zLZ4VKc'),
(10, 3, 'Mr.Robot', 1, 'https://openload.co/embed/xQnXIRPOMf8/Mr._Robot_S01e03.aflamocom.com.mp4', 'https://ok.ru/videoembed/329004419820', 'https://streamango.com/embed/ttobptbpafdsfpad/Mr_Robot_S01e03_aflamocom_com_mp4', 'http://thevideo.me/embed-xovr6sddvpty.html', 'https://openload.co/f/xQnXIRPOMf8', 'https://openload.co/f/xQnXIRPOMf8', 'https://openload.co/f/xQnXIRPOMf8'),
(11, 4, 'Mr.Robot', 1, 'https://openload.co/embed/FdYfaOP2S34/Mr._Robot_S01e04aflamocom.com.mp4', 'https://ok.ru/videoembed/329004681964', 'https://streamango.com/embed/reqqakddssldpask/Mr_Robot_S01e04aflamocom_com_mp4', 'http://thevideo.me/embed-v92s0bgfmgor.html', 'https://openload.co/f/FdYfaOP2S34', 'https://openload.co/f/FdYfaOP2S34', 'https://openload.co/f/FdYfaOP2S34'),
(12, 5, 'Mr.Robot', 1, 'https://openload.co/embed/ENU6PS9NOLs/Mr._Robot_S01e05.aflamocom.com.mp4', 'https://ok.ru/videoembed/329004813036', 'https://streamango.com/embed/feanqommmqlpetmp/Mr_Robot_S01e05_aflamocom_com_mp4', 'http://thevideo.me/embed-1e8oq07orvuo.html', 'https://openload.co/f/ENU6PS9NOLs', 'https://openload.co/f/ENU6PS9NOLs', 'https://openload.co/f/ENU6PS9NOLs'),
(13, 6, 'Mr.Robot', 1, 'https://openload.co/embed/SHiNDGlhst0/Mr._Robot_S01e06.aflamocom.com.mp4', 'https://ok.ru/videoembed/329004944108', 'https://streamango.com/embed/roqosfkanbetqdod/Mr_Robot_S01e06_aflamocom_com_mp4', 'http://thevideo.me/embed-udrpmezokjqm.html', 'https://openload.co/f/SHiNDGlhst0', 'https://openload.co/f/SHiNDGlhst0', 'https://openload.co/f/SHiNDGlhst0'),
(14, 7, 'Mr.Robot', 1, 'https://openload.co/embed/REQCq1EjwoM/Mr._Robot_S01e07.aflamocom.com.mp4', 'https://ok.ru/videoembed/329005009644', 'https://streamango.com/embed/ccsqrsamaarotadf/Mr_Robot_S01e07_aflamocom_com_mp4', 'http://thevideo.me/embed-rymm78hq89d1.html', 'https://openload.co/f/REQCq1EjwoM', 'https://openload.co/f/REQCq1EjwoM', 'https://openload.co/f/REQCq1EjwoM'),
(15, 8, 'Mr.Robot', 1, 'https://openload.co/embed/sX4UeSRpo30/Mr._Robot_S01e08.aflamocom.com.mp4', 'https://ok.ru/videoembed/329005140716', 'https://streamango.com/embed/aoqfcrrrqnnfnkfm/Mr_Robot_S01e08_aflamocom_com_mp4', 'http://thevideo.me/embed-e9jmd8hfwxlo.html', 'https://openload.co/f/sX4UeSRpo30', 'https://openload.co/f/sX4UeSRpo30', 'https://openload.co/f/sX4UeSRpo30'),
(16, 9, 'Mr.Robot', 1, 'https://openload.co/embed/MY__ZkAdhMk/Mr._Robot_S01e09.aflamocm.com.mp4', 'https://ok.ru/videoembed/329005271788', 'https://streamango.com/embed/raddaodddfrpfqfn/Mr_Robot_S01e09_aflamocm_com_mp4', 'http://thevideo.me/embed-553x2as4mocc.html', 'https://openload.co/f/MY__ZkAdhMk', 'https://openload.co/f/MY__ZkAdhMk', 'https://openload.co/f/MY__ZkAdhMk'),
(17, 10, 'Mr.Robot', 1, 'https://openload.co/embed/Ha2LiAciknY/Mr._Robot_S01e10.aflamocom.com.mp4', 'https://ok.ru/videoembed/329005337324', 'https://streamango.com/embed/lrnqalemdsosroof/Mr_Robot_S01e10_aflamocom_com_mp4', 'http://thevideo.me/embed-h62biw1vx8q6.html', 'https://openload.co/f/Ha2LiAciknY', 'https://openload.co/f/Ha2LiAciknY', 'https://openload.co/f/Ha2LiAciknY');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `player_server1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `player_server2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `player_server3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `player_server4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movie_download_1` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `movie_download_2` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `movie_download_3` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `movie_description` text CHARACTER SET latin1,
  `movie_img` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `movie_category` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `movie_section` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `movie_date` date DEFAULT NULL,
  `movie_views` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_title`, `player_server1`, `player_server2`, `player_server3`, `player_server4`, `movie_download_1`, `movie_download_2`, `movie_download_3`, `movie_description`, `movie_img`, `movie_category`, `movie_section`, `movie_date`, `movie_views`) VALUES
(4, 'Spotlight', '//ok.ru/videoembed/315565542124', 'https://openload.co/embed/cJ6HJlTpYgA/spot_light_ready.mp4', 'http://thevideo.me/embed-40mnb16i2hiv.html', 'https://streamango.com/embed/qcosrtfopmnqlosa/spot_light_ready_mp4', 'https://openload.co/f/cJ6HJlTpYgA', 'https://openload.co/f/cJ6HJlTpYgA', 'https://openload.co/f/cJ6HJlTpYgA', 'ÙŠØ±ÙˆÙŠ Ø§Ù„ÙÙŠÙ„Ù… Ø§Ù„Ù‚ØµØ© Ø§Ù„Ø­Ù‚ÙŠÙ‚ÙŠØ© Ù„Ù„ØªØ­Ù‚ÙŠÙ‚ Ø§Ù„Ø®Ø§Øµ Ø¨Ø¬Ø±ÙŠØ¯Ø© (Ø¨ÙˆØ³Ø·Ù† ØºÙ„ÙˆØ¨) Ø§Ù„Ø­Ø§Ø¦Ø² Ø¹Ù„Ù‰ Ø¬Ø§Ø¦Ø²Ø© (Ø¨ÙˆÙ„ÙŠØªØ²Ø±)ØŒ ÙˆØ°Ù„Ùƒ Ø¹Ù†Ø¯Ù…Ø§ Ø®Ø§Ø¶ Ø§Ù„ÙØ±ÙŠÙ‚ Ø§Ù„Ø¹Ù†ÙŠØ¯ Ù„ØµØ­ÙŠÙØ© (Ø³Ø¨ÙˆØªÙ„Ø§ÙŠØª) Ø§Ù„ØªØ­Ù‚ÙŠÙ‚ ÙÙŠ Ø§Ø¯Ø¹Ø§Ø¡Ø§Øª Ø§Ù„Ø§Ø¹ØªØ¯Ø§Ø¡ Ø§Ù„Ø¬Ù†Ø³ÙŠ ÙÙŠ Ø§Ù„ÙƒÙ†ÙŠØ³Ø© Ø§Ù„ÙƒØ§Ø«ÙˆÙ„ÙŠÙƒÙŠØ© Ø¹Ù„Ù‰ Ù…Ø¯Ø§Ø± Ø¹Ø§Ù… ÙƒØ§Ù…Ù„ØŒ ÙˆØ§Ù„Ø°ÙŠ ÙƒØ´Ù Ù…Ø¹Ù„ÙˆÙ…Ø§Øª ØªÙ… Ø§Ù„ØªØ³ØªØ± Ø¹Ù„ÙŠÙ‡Ø§ Ù„Ø¹Ù‚ÙˆØ¯ Ø·ÙˆÙŠÙ„Ø© ÙÙŠ Ù…Ø¬Ø§Ù„Ø§Øª Ø¯ÙŠÙ†ÙŠØ© ÙˆÙ‚Ø§Ù†ÙˆÙ†ÙŠØ©.', 'spotlightimg.jpg', 'all', 'ajnabi', '2017-04-23', 84),
(3, 'Inside Out', '//ok.ru/videoembed/315341998828', 'https://openload.co/embed/gAoAGHJ8tLI/to_upload.mp4', 'http://thevideo.me/embed-lrw2ype8kito.html', 'https://streamango.com/embed/bmsfobnpbaorrrap/inside_out_aflamocom_mp4', 'https://openload.co/f/gAoAGHJ8tLI', 'https://openload.co/f/gAoAGHJ8tLI', 'https://openload.co/f/gAoAGHJ8tLI', 'ØªØ¯ÙˆØ± Ù‚ØµØ© Ø§Ù„ÙÙŠÙ„Ù… Ø§Ù†Ø© Ø¨Ø¹Ø¯ Ø§Ù‚ØªÙ„Ø§Ø¹ Ø§Ù„Ø´Ø¨Ø§Ø¨ Ø±Ø§ÙŠÙ„ÙŠ Ù…Ù† Ø­ÙŠØ§ØªÙ‡Ø§ Ø§Ù„ØºØ±Ø¨ Ø§Ù„Ø£ÙˆØ³Ø·ØŒ ÙˆØ§Ù†ØªÙ‚Ù„ Ø¥Ù„Ù‰ Ø³Ø§Ù† ÙØ±Ø§Ù†Ø³ÙŠØ³ÙƒÙˆØŒ Ø§Ù†ÙØ¹Ø§Ù„Ø§ØªÙ‡Ø§ â€“ Ø§Ù„ÙØ±Ø­ ÙˆØ§Ù„Ø®ÙˆÙ ÙˆØ§Ù„ØºØ¶Ø¨ ÙˆØ§Ù„Ø§Ø´Ù…Ø¦Ø²Ø§Ø² ÙˆØ§Ù„Ø­Ø²Ù† â€“ Ø§Ù„ØµØ±Ø§Ø¹ Ø­ÙˆÙ„ Ø£ÙØ¶Ù„ Ø§Ù„Ø³Ø¨Ù„ Ù„Ù„ØªÙ†Ù‚Ù„ ÙÙŠ Ø§Ù„Ù…Ø¯ÙŠÙ†Ø© Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø©ØŒ Ø§Ù„Ø¨ÙŠØªØŒ ÙˆØ§Ù„Ù…Ø¯Ø±Ø³Ø©', 'rsz_inside_out_img.jpg', 'comedy', 'anime', '2017-04-22', 121),
(5, 'Mad Max Fury Road', 'https://openload.co/embed/zZ5BEOGpPEY/mad_max_up.mp4', '//ok.ru/videoembed/315593788140', 'http://thevideo.me/embed-pnzt82tunper.html', 'https://streamango.com/embed/tltornfdpekaaaof/mad_max_up_mp4', 'https://openload.co/f/zZ5BEOGpPEY', 'https://openload.co/f/zZ5BEOGpPEY', 'https://openload.co/f/zZ5BEOGpPEY', 'Ø¨Ø¹Ø¯ Ù†Ù‡Ø§ÙŠØ© Ø§Ù„Ø¹Ø§Ù„Ù… Ø¹Ù„Ù‰ Ù†Ø­Ùˆ Ù…Ø£Ø³Ø§ÙˆÙŠØŒ ÙˆÙÙŠ Ø¥Ø­Ø¯Ù‰ Ø§Ù„ØµØ­Ø§Ø±ÙŠ Ø§Ù„Ù…Ù‚ÙØ±Ø©ØŒ ÙŠØ¹ÙŠØ´ Ø§Ø«Ù†Ø§Ù† Ù…Ù† Ø§Ù„Ø«ÙˆØ§Ø± Ø§Ù„ÙØ§Ø±ÙŠÙ† Ø§Ù„Ù„Ø°ÙŠÙ† ÙŠØ­Ù…Ù„Ø§Ù† Ø¥Ù…ÙƒØ§Ù†ÙŠØ© Ø§Ø³ØªØ¹Ø§Ø¯Ø© Ø§Ù„Ù†Ø¸Ø§Ù… Ù„Ø·Ø¨ÙŠØ¹ØªÙ‡ Ù…Ù† Ø¬Ø¯ÙŠØ¯ØŒ Ø£ÙˆÙ„Ù‡Ù…Ø§ Ù‡Ùˆ Ù…Ø§ÙƒØ³ (ØªÙˆÙ… Ù‡Ø§Ø±Ø¯ÙŠ)ØŒ Ø§Ù„Ø±Ø¬Ù„ Ø§Ù„Ø°ÙŠ ÙŠØ³Ø¹Ù‰ ÙˆØ±Ø§Ø¡ Ø§Ù„ØªØµØ§Ù„Ø­ Ù…Ø¹ Ø§Ù„Ø°Ø§Øª Ø¨Ø¹Ø¯ Ø®Ø³Ø§Ø±ØªÙ‡ Ù„Ø²ÙˆØ¬ØªÙ‡ ÙˆØ§Ø¨Ù†Ù‡ ÙÙŠ Ø£Ø¹Ù‚Ø§Ø¨ Ø§Ù„ÙÙˆØ¶Ù‰ Ø§Ù„ØªÙŠ Ø§Ø¬ØªØ§Ø­Øª Ø§Ù„ÙƒÙˆÙƒØ¨ØŒ ÙˆÙÙŠÙˆØ±ÙŠØ³Ø§ (ØªØ´Ø§Ø±Ù„ÙŠØ² Ø«ÙŠØ±ÙˆÙ†) Ø§Ù„ØªÙŠ ØªØ¹ØªÙ‚Ø¯ Ø£Ù† Ø·Ø±ÙŠÙ‚ØªÙ‡Ø§ ÙÙŠ Ø§ï»¹ØµÙ„Ø§Ø­ Ù‚Ø¯ ØªÙƒÙˆÙ† Ù…Ø¬Ø¯ÙŠØ© Ø¹Ø¨Ø± Ø§Ù„ØµØ­Ø±Ø§Ø¡.', 'rsz_mad_max_img.jpg', 'action', 'ajnabi', '2017-04-23', 530),
(6, 'Room', 'https://openload.co/embed/te0g_dlco0c/room_aflamocom.mp4', '//ok.ru/videoembed/316042119916', 'http://thevideo.me/embed-pzgc5eflarle.html', 'https://streamango.com/embed/keflrnpkfalapfer/room_aflamocom_mp4', 'https://openload.co/f/te0g_dlco0c', 'https://openload.co/f/te0g_dlco0c', 'https://openload.co/f/te0g_dlco0c', 'Disable Adblock Please', 'room_img.jpg', 'drama', 'ajnabi', '2017-04-28', 66),
(7, 'The Martian', 'https://openload.co/embed/NwPquPgmELo/the_martian_ready.mp4', 'https://ok.ru/videoembed/316506704620', 'http://thevideo.me/embed-44lpuey3b5pk.html', 'https://streamango.com/embed/mlreormprmnbcofe/the_martian_ready_mp4', 'https://openload.co/f/NwPquPgmELo', 'https://openload.co/f/NwPquPgmELo', 'https://openload.co/f/NwPquPgmELo', 'Disable Adblock Please', 'the_mart.jpg', 'advanture', 'ajnabi', '2017-04-28', 74),
(8, 'The Revenant', 'https://openload.co/embed/CI8icNlU1W4/The_revenant_aflamocom_com.mp4', 'https://ok.ru/videoembed/316985117420', 'http://thevideo.me/embed-33fn03my9ns2.html', 'https://streamango.com/embed/kclcbcskecbblclf/The_revenant_aflamocom_com_mp4', 'https://openload.co/f/CI8icNlU1W4', 'https://openload.co/f/CI8icNlU1W4', 'https://openload.co/f/CI8icNlU1W4', 'Disable Adblock Please', 'therevenantimg.jpg', 'action', 'ajnabi', '2017-04-28', 257),
(9, 'Guardians Of The Galaxy ', 'https://openload.co/embed/QFzAbe98lfk/guardians-of-the-galaxy_aflamocom_com.mp4', 'https://ok.ru/videoembed/317497412332', 'http://thevideo.me/embed-2r0q2whk80pl.html', 'https://streamango.com/embed/scktbtcpaefmnfqd/guardians-of-the-galaxy_aflamocom_com_mp4', 'https://openload.co/embed/QFzAbe98lfk/guardians-of-the-galaxy_aflamocom_com.mp4', 'https://openload.co/embed/QFzAbe98lfk/guardians-of-the-galaxy_aflamocom_com.mp4', 'https://openload.co/embed/QFzAbe98lfk/guardians-of-the-galaxy_aflamocom_com.mp4', 'Disable Adblock Please', 'gofthegalaxy_img.jpg', 'advanture', 'ajnabi', '2017-04-29', 79),
(10, 'Ant Man', 'https://openload.co/embed/WHeova3bTmk/Ant-Man-aflamocom-com.mp4', 'https://ok.ru/videoembed/317660072684', 'http://thevideo.me/embed-rtocas68s5zg.html', 'https://streamango.com/embed/rfrotdeedklsctdo/Ant-Man-aflamocom-com_mp4', 'https://openload.co/embed/WHeova3bTmk/Ant-Man-aflamocom-com.mp4', 'https://openload.co/embed/WHeova3bTmk/Ant-Man-aflamocom-com.mp4', 'https://openload.co/embed/WHeova3bTmk/Ant-Man-aflamocom-com.mp4', 'Disable ADBLOCK Please', 'ant_man_img.jpg', 'action', 'ajnabi', '2017-04-29', 89),
(11, 'Rogue One', 'https://openload.co/embed/7nSkjrBBN7A/rogue_one_aflamocom_com.mp4', 'https://ok.ru/videoembed/317796190956', 'http://thevideo.me/embed-35aqo502rjbm.html', 'https://streamango.com/embed/dcqeeopcnarratcr/rogue_one_aflamocom_com_mp4', 'https://openload.co/embed/7nSkjrBBN7A/rogue_one_aflamocom_com.mp4', 'https://openload.co/embed/7nSkjrBBN7A/rogue_one_aflamocom_com.mp4', 'https://openload.co/embed/7nSkjrBBN7A/rogue_one_aflamocom_com.mp4', 'Disable Adblock', 'Rogue_One_img.jpg', 'scifi', 'ajnabi', '2017-04-29', 76),
(12, 'Star Wars Episode VII', 'https://openload.co/embed/rjFjGX75vMc/Star.Wars.Episode.VII-aflamocom.mp4', 'https://openload.co/embed/rjFjGX75vMc/Star.Wars.Episode.VII-aflamocom.mp4', 'http://thevideo.me/embed-gs8cyk1woxuo.html', 'https://streamango.com/embed/tllbrklfnfcssfas/Star_Wars_Episode_VII-aflamocom_mp4', 'https://openload.co/embed/rjFjGX75vMc/Star.Wars.Episode.VII-aflamocom.mp4', 'https://openload.co/embed/rjFjGX75vMc/Star.Wars.Episode.VII-aflamocom.mp4', 'https://openload.co/embed/rjFjGX75vMc/Star.Wars.Episode.VII-aflamocom.mp4', 'Disable AdBlock', 'star_wars_IIV_img.jpg', 'scifi', 'ajnabi', '2017-04-29', 71),
(13, 'The Wolf of Wall Street', 'https://openload.co/embed/UKWVaQ0bwpk/The.Wolf.of.Wall.Street.aflamocom-com.mp4', 'https://ok.ru/videoembed/318053878508', 'http://thevideo.me/embed-iku4wih4rexy.html', 'https://streamango.com/embed/qokqaectmrdnddds/The_Wolf_of_Wall_Street_aflamocom-com_mp4', 'https://openload.co/embed/UKWVaQ0bwpk/The.Wolf.of.Wall.Street.aflamocom-com.mp4', 'https://openload.co/embed/UKWVaQ0bwpk/The.Wolf.of.Wall.Street.aflamocom-com.mp4', 'https://openload.co/embed/UKWVaQ0bwpk/The.Wolf.of.Wall.Street.aflamocom-com.mp4', 'Disable AdBlock', 'the_wolf_of_wall_st_img.jpg', 'comedy', 'ajnabi', '2017-04-29', 108),
(14, 'Mission impossible Rogue Nation', 'https://openload.co/embed/EzrQ9vTT4N0/Mission.Impossible.Rogue.Nation-aflamocom.mp4', 'https://openload.co/embed/EzrQ9vTT4N0/Mission.Impossible.Rogue.Nation-aflamocom.mp4', 'http://thevideo.me/embed-gin6dgfwbqhe.html', 'https://streamango.com/embed/tstpalladstponlm/Mission_Impossible_Rogue_Nation-aflamocom_mp4', 'https://openload.co/embed/EzrQ9vTT4N0/Mission.Impossible.Rogue.Nation-aflamocom.mp4', 'https://openload.co/embed/EzrQ9vTT4N0/Mission.Impossible.Rogue.Nation-aflamocom.mp4', 'https://openload.co/embed/EzrQ9vTT4N0/Mission.Impossible.Rogue.Nation-aflamocom.mp4', 'Disable AdBlock', 'missiom_impossible_img.jpg', 'action', 'ajnabi', '2017-04-29', 82),
(15, 'The Dark Knight', 'https://openload.co/embed/cLhC0NvF0Ho/The.Dark.Knight.2008-aflamocom-com.mp4', 'https://ok.ru/videoembed/320707824364', 'http://thevideo.me/embed-5d13nhjaofiz.html', 'https://streamango.com/embed/tpfcmsctfqlsselo/The_Dark_Knight_2008-aflamocom-com_mp4', 'https://openload.co/f/cLhC0NvF0Ho', 'https://openload.co/f/cLhC0NvF0Ho', 'https://openload.co/f/cLhC0NvF0Ho', NULL, 'The Dark Knight.jpg', 'action', 'ajnabi', '2017-05-03', 88),
(16, 'Ip Man', 'https://openload.co/embed/gtHtL0bnll4/Ip_Man_2008-aflamocom-com.mp4', 'https://openload.co/embed/gtHtL0bnll4/Ip_Man_2008-aflamocom-com.mp4', 'http://thevideo.me/embed-bd6uww1za4he.html', 'https://streamango.com/embed/oeftmfmonqfsqlnt/Ip_Man_2008-aflamocom-com_mp4', 'https://openload.co/f/gtHtL0bnll4', 'https://openload.co/f/gtHtL0bnll4', 'https://openload.co/f/gtHtL0bnll4', NULL, 'Ip Man.jpg', 'action', 'other', '2017-05-03', 82),
(17, 'Up', 'https://openload.co/embed/U2L1PM2bqys/Up.2009-aflamocom-com.mp4', 'https://openload.co/embed/U2L1PM2bqys/Up.2009-aflamocom-com.mp4', 'http://thevideo.me/embed-qkvvaq1f3w1y.html', 'https://streamango.com/embed/odbrptpcnslrfefs/Up_2009-aflamocom-com_mp4', 'https://openload.co/f/U2L1PM2bqys', 'https://openload.co/f/U2L1PM2bqys', 'https://openload.co/f/U2L1PM2bqys', NULL, 'Up.jpg', 'advanture', 'anime', '2017-05-03', 86),
(18, 'Inception', 'https://openload.co/embed/-xM7IUDkMFU/Inception.2010-aflamocom-com.mp4', 'https://ok.ru/videoembed/320707365612', 'http://thevideo.me/embed-13t03pdbsgsq.html', 'https://streamango.com/embed/eprmfqsoqrfnbkbd/Inception_2010-aflamocom-com_mp4', 'https://openload.co/f/-xM7IUDkMFU', 'https://openload.co/f/-xM7IUDkMFU', 'https://openload.co/f/-xM7IUDkMFU', NULL, 'Inception.jpg', 'action', 'ajnabi', '2017-05-03', 92),
(19, 'Interstellar', 'https://openload.co/embed/wBcsPLdw2Yc/Interstellar.2014-aflamocom-com.mp4\r\n', 'https://ok.ru/videoembed/320707496684', 'http://thevideo.me/embed-oigr0xz8iimm.html', 'https://streamango.com/embed/pmanlpeboadlqppd/Interstellar_2014-aflamocom-com_mp4', 'https://openload.co/f/wBcsPLdw2Yc', 'https://openload.co/f/wBcsPLdw2Yc', 'https://openload.co/f/wBcsPLdw2Yc', NULL, 'Interstellar.jpg', 'advanture', 'ajnabi', '2017-05-03', 101),
(20, 'Lion', 'https://openload.co/embed/CbBb1wqZZ6U/Lion.2016-aflamocom-com.mp4', 'https://ok.ru/videoembed/320778865388', 'https://streamango.com/embed/tqcqnrldbdopecom/Lion_2016-aflamocom-com_mp4', 'http://thevideo.me/embed-trbrv5bkq6an.html', 'https://openload.co/f/CbBb1wqZZ6U', '	https://openload.co/f/CbBb1wqZZ6U', 'https://openload.co/f/CbBb1wqZZ6U', NULL, 'Lion.jpg', 'drama', 'ajnabi', '2017-05-04', 87),
(21, 'Deadpool', 'https://openload.co/embed/oGP-9fAC_AM/Deadpool.2016-aflamocom-com.mp4', 'https://openload.co/embed/oGP-9fAC_AM/Deadpool.2016-aflamocom-com.mp4', 'https://streamango.com/embed/aqrkraqoctctklmd/Deadpool_2016-aflamocom-com_mp4', 'http://thevideo.me/embed-l28zwgcpctrg.html', 'https://openload.co/f/oGP-9fAC_AM', 'https://openload.co/f/oGP-9fAC_AM', 'https://openload.co/f/oGP-9fAC_AM', NULL, 'Deadpool.jpg', 'action', 'ajnabi', '2017-05-04', 75),
(22, 'Doctor Strange', 'https://openload.co/embed/mBeV4lI4Gd4/Doctor.Strange.2016-aflamocom-com.mp4', 'https://openload.co/embed/mBeV4lI4Gd4/Doctor.Strange.2016-aflamocom-com.mp4', 'https://streamango.com/embed/nrpltoqfrsoptmqb/Doctor_Strange_2016-aflamocom-com_mp4', 'http://thevideo.me/embed-oggxp9aigecw.html', 'https://openload.co/f/mBeV4lI4Gd4', 'https://openload.co/f/mBeV4lI4Gd4', 'https://openload.co/f/mBeV4lI4Gd4', NULL, 'Doctor Strange.jpg', 'action', 'ajnabi', '2017-05-04', 85),
(23, 'Fantastic Beasts And Where To Find Them', 'https://openload.co/embed/qfwNPzDgJVQ/Fantastic.Beasts.And.Where.To.Find.Them.2016-aflamocom-com.mp4', 'https://ok.ru/videoembed/320778799852', 'https://streamango.com/embed/bmnnndqmobnbssnr/Fantastic_Beasts_And_Where_To_Find_Them_2016-aflamocom-com_mp4', 'http://thevideo.me/embed-efyeung40gm8.html', 'https://openload.co/f/qfwNPzDgJVQ', 'https://openload.co/f/qfwNPzDgJVQ', 'https://openload.co/f/qfwNPzDgJVQ', NULL, 'Fantastic Beasts And Where To Find Them.jpg', 'scifi', 'ajnabi', '2017-05-04', 111),
(24, 'Moana', 'https://openload.co/embed/bFXWcyOTndw/Moana.2016-aflamocom-com.mp4', 'https://openload.co/embed/bFXWcyOTndw/Moana.2016-aflamocom-com.mp4', 'https://streamango.com/embed/lemndammspmarrda/Moana_2016-aflamocom-com_mp4', 'http://thevideo.me/embed-h2pvqmjlyzsj.html', 'https://openload.co/f/bFXWcyOTndw', 'https://openload.co/f/bFXWcyOTndw', 'https://openload.co/f/bFXWcyOTndw', NULL, 'Moana.jpg', 'advanture', 'anime', '2017-05-04', 79),
(25, 'Passengers', 'https://openload.co/embed/xHEr4zo1UnI/Passengers.2016.aflamocom.com.mp4', 'https://openload.co/embed/xHEr4zo1UnI/Passengers.2016.aflamocom.com.mp4', 'https://streamango.com/embed/dfdanmcarsndcasc/Passengers_2016_aflamocom_com_mp4', 'http://thevideo.me/embed-6s9s6spp2j1e.html', 'https://openload.co/f/xHEr4zo1UnI', 'https://openload.co/f/xHEr4zo1UnI', 'https://openload.co/f/xHEr4zo1UnI', NULL, 'Passengers.jpg', 'advanture', 'ajnabi', '2017-05-06', 82),
(26, 'Collateral Beauty', 'https://openload.co/embed/M3BT2s6MTNM/Collateral.Beauty.2016.aflamocom.com.mp4', 'https://ok.ru/videoembed/321686407916', 'https://streamango.com/embed/plonodklaqqdqfsf/Collateral_Beauty_2016_aflamocom_com_mp4', 'http://thevideo.me/embed-yay1sbfhkvpv.html', 'https://openload.co/f/M3BT2s6MTNM', 'https://openload.co/f/M3BT2s6MTNM', 'https://openload.co/f/M3BT2s6MTNM', NULL, 'Collateral Beauty.jpg', 'drama', 'ajnabi', '2017-05-06', 95),
(27, 'Gold', 'https://openload.co/embed/I2Ew6pNLERI/Gold.2016.aflamocom-com.mp4', 'https://ok.ru/videoembed/321686473452', 'https://streamango.com/embed/potcfktmndafklac/Gold_2016_aflamocom-com_mp4', 'http://thevideo.me/embed-2enq77hxqbwp.html', 'https://openload.co/f/I2Ew6pNLERI', 'https://openload.co/f/I2Ew6pNLERI', 'https://openload.co/f/I2Ew6pNLERI', NULL, 'Gold.jpg', 'advanture', 'ajnabi', '2017-05-06', 88),
(28, 'XXx Return Of Xander Cage', 'https://openload.co/embed/_goj6AVOazE/XXx.Return.Of.Xander.Cage.2017.aflamocom.com.mp4', 'https://openload.co/embed/_goj6AVOazE/XXx.Return.Of.Xander.Cage.2017.aflamocom.com.mp4', 'https://streamango.com/embed/mncleecnbcqdmqpc/XXx_Return_Of_Xander_Cage_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-763g8valoqsx.html', 'https://openload.co/f/_goj6AVOazE', 'https://openload.co/f/_goj6AVOazE', 'https://openload.co/f/_goj6AVOazE', NULL, 'XXx Return Of Xander Cage.jpg', 'action', 'ajnabi', '2017-05-06', 95),
(29, 'The Space Between Us', 'https://openload.co/embed/Vg2DrsZLzZY/The.Space.Between.Us.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/321697942252', 'https://streamango.com/embed/bqmndflcassnsmfp/The_Space_Between_Us_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-jpc0hrq5kuhd.html', 'https://openload.co/f/Vg2DrsZLzZY', 'https://openload.co/f/Vg2DrsZLzZY', 'https://openload.co/f/Vg2DrsZLzZY', NULL, 'The Space Between Us.jpg', 'advanture', 'ajnabi', '2017-05-06', 139),
(30, 'Kong Skull Island', 'https://openload.co/embed/FeWwn_qRmAE/Kong.Skull.Island.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/321875217132', 'https://streamango.com/embed/otmcscatnorrqrmq/Kong_Skull_Island_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-71k8isbhg00l.html', 'https://openload.co/f/FeWwn_qRmAE', 'https://openload.co/f/FeWwn_qRmAE', 'https://openload.co/f/FeWwn_qRmAE', NULL, 'Kong Skull Island.jpg', 'action', 'ajnabi', '2017-05-06', 107),
(35, 'Get Out', 'https://openload.co/embed/vADj393r0dU/Get.Out.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/322605943532', 'https://streamango.com/embed/npmamekrlonfklfs/Get_Out_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-jogl7s2zlcuq.html', 'https://openload.co/f/vADj393r0dU', 'https://openload.co/f/vADj393r0dU', 'https://openload.co/f/vADj393r0dU', NULL, 'Get Out.jpg', 'horror', 'ajnabi', '2017-05-07', 102),
(36, 'The Great Wall', 'https://openload.co/embed/_1phOnG-llw/The.Great.Wall.2016.aflamocom.com.mp4', 'https://ok.ru/videoembed/324490234604', 'https://streamango.com/embed/pkqdqmtsrbrrkoqb/The_Great_Wall_2016_aflamocom_com_mp4', 'http://thevideo.me/embed-lmm3tuxrt6ie.html', 'https://openload.co/f/_1phOnG-llw', 'https://openload.co/f/_1phOnG-llw', 'https://openload.co/f/_1phOnG-llw', NULL, 'The Great Wall.jpg', 'action', 'ajnabi', '2017-05-10', 125),
(33, 'LOGAN', 'https://openload.co/embed/1aAoT2-zyFk/Logan.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/322350287596', 'https://streamango.com/embed/qnolakotskqnsqdt/Logan_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-g6sjs0hdn5yz.html', 'https://openload.co/f/1aAoT2-zyFk', 'https://openload.co/f/1aAoT2-zyFk', 'https://openload.co/f/1aAoT2-zyFk', NULL, 'LOGAN.jpg', 'action', 'ajnabi', '2017-05-07', 191),
(34, 'Ghost In The Shell', 'https://openload.co/embed/JASB3sFsmqc/Ghost.in.The.Shell.2017.aflamocom.com.mp4', 'https://streamango.com/embed/solpofmcodpdblof/Ghost_in_The_Shell_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-f11l78z1alc3.html', 'https://openload.co/embed/JASB3sFsmqc/Ghost.in.The.Shell.2017.aflamocom.com.mp4', 'https://openload.co/f/JASB3sFsmqc', 'https://openload.co/f/JASB3sFsmqc', 'https://openload.co/f/JASB3sFsmqc', NULL, 'Ghost In The Shell.jpg', 'scifi', 'ajnabi', '2017-05-07', 140),
(37, 'The Fate Of The Furious', 'https://openload.co/embed/_hmfYm-gyKs/The.Fate.of.the.Furious.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/325194681068', 'https://streamango.com/embed/racrseloqqkcccad/The_Fate_of_the_Furious_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-kq02xfl8i6hp.html', 'https://openload.co/f/_hmfYm-gyKs', 'https://openload.co/f/_hmfYm-gyKs', 'https://openload.co/f/_hmfYm-gyKs', NULL, 'The Fate Of The Furious.jpg', 'action', 'ajnabi', '2017-05-12', 550),
(38, 'Beauty And The Beast', 'https://openload.co/embed/Dxm9fr-KCPc/Beauty.and.the.beast.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/327767689964', 'https://streamango.com/embed/mrpenebsnmmobokt/Beauty_and_the_beast_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-3g1z0f5qjfdw.html', 'https://openload.co/f/Dxm9fr-KCPc', 'https://openload.co/f/Dxm9fr-KCPc', 'https://openload.co/f/Dxm9fr-KCPc', NULL, 'Beauty And The Beast.jpg', 'drama', 'ajnabi', '2017-05-12', 73),
(39, 'Gifted', 'https://openload.co/embed/R-hcx1Vf5HY/Gifted.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/325722770156', 'https://streamango.com/embed/ocseklldsladrptc/Gifted_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-on8e8v8w0rtn.html', 'https://openload.co/f/R-hcx1Vf5HY', 'https://openload.co/f/R-hcx1Vf5HY', 'https://openload.co/f/R-hcx1Vf5HY', NULL, 'Gifted.jpg', 'drama', 'ajnabi', '2017-05-13', 105),
(40, 'Fist Fight', 'https://openload.co/embed/hH0BRYxMT1U/Fist.Fight.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/327269944044', 'https://streamango.com/embed/dnscptqnfoeeredr/Fist_Fight_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-0op2hckagtfv.html', 'https://openload.co/f/hH0BRYxMT1U', 'https://openload.co/f/hH0BRYxMT1U', 'https://openload.co/f/hH0BRYxMT1U', NULL, 'Fist Fight.jpg', 'comedy', 'ajnabi', '2017-05-15', 63),
(41, 'Boyka Undisputed IV', 'https://openload.co/embed/oK0NPDke9a8/Boyka.Undisputed.IV.2016.aflamocom.com.mp4', 'https://streamango.com/embed/qcmdrtapopddbsff/Boyka_Undisputed_IV_2016_aflamocom_com_mp4', 'http://thevideo.me/embed-xqkghv5hnz7l.html', 'https://openload.co/embed/oK0NPDke9a8/Boyka.Undisputed.IV.2016.aflamocom.com.mp4', 'https://openload.co/f/oK0NPDke9a8', 'https://openload.co/f/oK0NPDke9a8', 'https://openload.co/f/oK0NPDke9a8', NULL, 'Boyka Undisputed IV.jpg', 'action', 'ajnabi', '2017-05-17', 117),
(42, 'SPLIT', 'https://openload.co/embed/LT0e1G7_KZ8/Split.2016.aflamocom.com.mp4', 'https://streamango.com/embed/bmrbqnfkcfdetnqf/Split_2016_aflamocom_com_mp4', 'http://thevideo.me/embed-vdol79nei2ad.html', 'https://openload.co/embed/LT0e1G7_KZ8/Split.2016.aflamocom.com.mp4', 'https://openload.co/f/LT0e1G7_KZ8', 'https://openload.co/f/LT0e1G7_KZ8', 'https://openload.co/f/LT0e1G7_KZ8', NULL, 'SPLIT.jpg', 'horror', 'ajnabi', '2017-05-17', 73),
(43, 'Before I Fall', 'https://openload.co/embed/V6ncL6YQGOE/Before.I.Fall.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/328178207468', 'https://streamango.com/embed/taprqbqtssemdbfb/Before_I_Fall_2017_aflamocom_com_mp4', 'https://thevideo.me/embed-2j6v7q2lmdcx.html', 'https://openload.co/f/V6ncL6YQGOE', 'https://openload.co/f/V6ncL6YQGOE', 'https://openload.co/f/V6ncL6YQGOE', NULL, 'Before I Fall.jpg', 'drama', 'ajnabi', '2017-05-18', 108),
(44, 'The Boss Baby', 'https://openload.co/embed/vjpRf1SJh1w/The.Boss.Baby.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/329038891756', 'https://streamango.com/embed/ltfmsmabtfqqdfrb/The_Boss_Baby_2017_aflamocom_com_mp4', 'https://thevideo.me/embed-3gqx48n5mxco.html', 'https://openload.co/f/vjpRf1SJh1w', 'https://openload.co/f/vjpRf1SJh1w', 'https://openload.co/f/vjpRf1SJh1w', NULL, 'The Boss Baby.jpg', 'comedy', 'anime', '2017-05-20', 122),
(45, 'The Lego Batman', 'https://openload.co/embed/YXbF_UfGa1Q/The.Lego.Batman.The.Movie.2017.aflamocom.com.mp4', 'https://ok.ru/videoembed/329109867244', 'https://streamango.com/embed/drckbeceqmqnrsol/The_Lego_Batman_The_Movie_2017_aflamocom_com_mp4', 'http://thevideo.me/embed-nhyw8m3ev6pw.html', 'https://openload.co/f/YXbF_UfGa1Q', 'https://openload.co/f/YXbF_UfGa1Q', 'https://openload.co/f/YXbF_UfGa1Q', NULL, 'The Lego Batman.jpg', 'action', 'anime', '2017-05-20', 81);

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `serie_id` int(11) NOT NULL,
  `serie_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `serie_img` varchar(255) CHARACTER SET latin1 NOT NULL,
  `serie_header` varchar(255) CHARACTER SET latin1 NOT NULL,
  `serie_description` text COLLATE utf8_unicode_ci NOT NULL,
  `seasons_nmbr` int(2) NOT NULL,
  `serie_views` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`serie_id`, `serie_name`, `serie_img`, `serie_header`, `serie_description`, `seasons_nmbr`, `serie_views`) VALUES
(1, 'Prison Break', 'Prison Break.jpg', 'Prison Break.jpg', 'Ù…Ø§ÙŠÙƒÙ„ Ø³ÙƒÙˆÙÙŠÙ„ Ùˆ Ø·Ø±Ù‚Ù‡ Ø§Ù„Ù…Ù…ÙŠØ²Ø© ÙÙŠ Ø§Ù„Ù‡Ø±ÙˆØ¨ Ù…Ù† Ø§Ù„Ø³Ø¬ÙˆÙ† ', 5, 426),
(2, 'Mr.Robot', 'Mr.Robot.jpg', 'Mr.Robot.jpg', 'Ø¥Ù„ÙŠÙˆØª Ù…Ù† Ø£Ø¯Ø§Ø¡ Ø±Ø§Ù…ÙŠ Ù…Ø§Ù„Ùƒ Ø§Ù„Ø°Ù‰ ÙŠØ¹Ø§Ù†ÙŠ Ù…Ù† Ø¥Ø¶Ø·Ø±Ø§Ø¨Ù Ø§Ø¬ØªÙ…Ø§Ø¹ÙŠØŒ Ùˆ ÙŠÙˆØ§Ø¬Ù‡ Ù…Ø´Ø§ÙƒÙ„ ÙÙŠ Ø§Ù„ØªÙˆØ§ØµÙ„ Ù…Ø¹ Ø§Ù„Ù†Ø§Ø³ ØºÙŠØ± Ø§Ù†Ù‡ Ù„Ø¯ÙŠÙ‡ Ù‚Ø¯Ø±Ø§Øª ÙƒØ¨ÙŠØ±Ø© ÙÙŠ Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ù„ØªÙƒÙ†ÙˆÙ„ÙˆØ¬ÙŠØ§ ÙˆØ§Ù„Ù‚Ø±ØµÙ†Ø©. ÙŠØªÙ… ØªØ¬Ù†ÙŠØ¯ Ø¥Ù„ÙŠÙˆØª Ø¹Ù† Ø·Ø±ÙŠÙ‚ Ø§Ù„Ø£Ù†Ø§Ø±ÙƒÙŠ Ø§Ù„ØºØ§Ù…Ø¶ Ø§Ù„Ø°Ù‰ ÙŠØ·Ù„Ù‚ Ø¹Ù„Ù‰ Ù†ÙØ³Ø© Ø§Ø³Ù… Ø§Ù„Ø³ÙŠØ¯ Ø±ÙˆØ¨ÙˆØª Ù…Ù† Ø£Ø¯Ø§Ø¡ ÙƒØ±ÙŠØ³ØªÙŠÙ† Ø³Ù„Ø§ØªØ±', 3, 19),
(3, 'Taboo', 'Taboo.jpg', 'Taboo.jpg', ' Ù…Ø³Ù„Ø³Ù„ Ø¨Ø±ÙŠØ·Ø§Ù†ÙŠ Ù…Ù† Ø§Ù†ØªØ§Ø¬ 2017 ÙŠØªØ­Ø¯Ø« Ø¹Ù† Ø£Ø­Ø¯ Ø§Ù„Ù…ØºØ§Ù…Ø±ÙŠÙ† ÙÙŠ Ø§Ù„Ù‚Ø±Ù† Ø§Ù„ØªØ§Ø³Ø¹ Ø¹Ø´Ø± Ùˆ Ø§Ù„Ø°ÙŠ ÙŠØ¯Ø¹Ù‰ Ø¬ÙŠÙ…Ø³ Ø¯ÙŠÙ„Ø§Ù†ÙŠ Ø­ÙŠØ« ÙŠØªØ¹Ø±Ø¶ Ù„Ù„ÙƒØ«ÙŠØ± Ù…Ù† Ø§Ù„Ù…Ø´Ø§ÙƒÙ„ Ø¨Ø¹Ø¯ Ø£Ù† ÙŠØ¹ÙˆØ¯ Ù„Ù„Ù†Ø¯Ù† Ù„Ù„Ø­ØµÙˆÙ„ Ø¹Ù„Ù‰ Ù…ÙŠØ±Ø§Ø«Ù‡ Ø¨Ø¹Ø¯ ÙˆÙØ§Ø© ÙˆØ§Ù„Ø¯Ù‡ Ø§Ù„Ø°ÙŠ ÙƒØ§Ù† ÙŠØ¹Ù…Ù„ ÙÙŠ Ø§Ù„Ø´Ø­Ù† Ø§Ù„Ø¨Ø­Ø±ÙŠ Ùˆ ØªØ­Ø¯ÙŠØ¯Ø§ Ø¥Ù„Ù‰ Ø§Ù„ÙˆÙ„Ø§ÙŠØ§Øª Ø§Ù„Ù…ØªØ­Ø¯Ø©.', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_link`) VALUES
(1, 'http://aflamocom.com/pages/serie/serie.php?serie_id=1&season=5'),
(2, '#'),
(3, '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`episode_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD UNIQUE KEY `movie_id` (`movie_id`),
  ADD UNIQUE KEY `movie_title_2` (`movie_title`),
  ADD KEY `movie_title` (`movie_title`),
  ADD KEY `movie_title_3` (`movie_title`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`serie_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `serie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
