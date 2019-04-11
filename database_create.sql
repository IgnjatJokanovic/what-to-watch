-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2019 at 06:13 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8755604_ignjat`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `name`, `surname`, `description`, `img_id`) VALUES
(8, 'Ryan', 'Reynolds ', 'Ryan Rodney Reynolds was born on October 23, 1976 in Vancouver, British Columbia, Canada, the youngest of four children. His father, James Chester Reynolds, was a food wholesaler, and his mother, Tammy, worked as a retail-store saleswoman.', 180),
(10, 'Josh ', 'Brolin', 'Rugged features and a natural charm have worked for Josh Brolin, the son of actor James Brolin. He has played roles as a policeman, a hunter, and the President of the United States. Brolin was born February 12, 1968 in Santa Monica, California, to Jane Cameron (Agee), a Texas-born wildlife activist, and James Brolin.', 215),
(11, 'Morena', 'Baccarin', 'Morena Baccarin was born in Rio de Janeiro, Brazil, to actress Vera Setta and journalist Fernando Baccarin. Her uncle was actor Ivan Setta. Morena has Italian and Brazilian Portuguese ancestry. She moved to New York at the age of 10, when her father was transferred there.', 243),
(12, 'Zazie ', 'Beetz', 'Zazie Olivia Beetz is an actress. Born in Berlin, Germany, to a German father and an African-American mother, she was raised in Manhattan (New York City) speaking both German and English at home. She performed in community theaters and local stages from a young age.', 250),
(13, 'Gerard ', 'Butler ', 'Gerard James Butler was born in Paisley, Scotland, to Margaret and Edward Butler, a bookmaker. His family is of Irish origin. Gerard spent some of his very early childhood in Montreal, Quebec, but was mostly raised, along with his older brother and sister, in his hometown of Paisley.', 276),
(14, 'Jim', 'Sturgess', 'Jim was born in London, the son of Jane O. (Martin) and Peter J. S. Sturgess. He was raised in Surrey. First and foremost his interest was music. However, he began to develop a secret passion for acting, at age 8, when he auditioned for local theatre to get out of class. Whilst music appeared cool, he felt being in school plays wasn\'t', 283),
(15, 'Abbie', 'Cornish', '	\r\nTop 500\r\nAbbie Cornish\r\nActress | Soundtrack\r\nView Resume | Official Photos »\r\nAbbie Cornish grew up on her parents\' 170 acre farm in the Hunter Valley town of Lochinvar with her 3 brothers and younger sister. Abbie started modeling at age 13. Her first acting job was at age 15 on the Australian Broadcasting Commission series Children\'s Hospital (1997) playing a quadriplegic.', 290),
(16, 'Lena ', 'Headey', '	\r\n77\r\nLena Headey\r\nActress | Producer | Soundtrack\r\nLena Headey is a British actress. She was born in Bermuda to parents from Yorkshire, England, where she was raised. She is the daughter John Headey, a police officer, and his wife Sue. Headey is best known for her role as \"Cersei Lannister\" in Game of Thrones (2011) (2011-present).', 304),
(17, 'Jack', 'Nicholson ', 'ack Nicholson, an American actor, producer, director and screenwriter, is a three-time Academy Award winner and twelve-time nominee. Nicholson is also notable for being one of two actors - the other being Michael Caine - who have received Oscar nomination in every decade from the 1960s through the early 2000s.', 318),
(18, 'Shelley', 'Duvall', 'Shelley Alexis Duvall was born in Houston, Texas, to Bobbie Ruth (Massengale) and Robert Richardson Duvall, a lawyer. During her childhood, Shelley\'s mother humorously gave Shelley the nickname \"Manic Mouse\", because she would often run around her house and tip over furniture.', 325),
(19, 'Ben', 'Foster ', '	\r\nTop 5000\r\nBen Foster (I)\r\nActor | Director | Producer\r\nView Resume | Official Photos »\r\nBen Foster was born October 29, 1980 in Boston, Massachusetts, to Gillian Kirwan and Steven Foster, restaurant owners. His younger brother is actor Jon Foster. His paternal grandparents were from Russian Jewish families that immigrated to Massachusetts (his grandfather became a prominent judge in Boston), while his mother\'s family is from Maryland.', 339),
(20, 'Dennis ', 'Quaid', 'Dennis Quaid was born in Houston, Texas, to Juanita Bonniedale (Jordan), a real estate agent, and William Rudy Quaid, an electrician. He grew up in the Houston suburban city of Bellaire. He was raised a Baptist, and studied drama, Mandarin Chinese, and dance while a student at Bellaire High School. ', 346),
(21, 'Karen ', 'Fukuhara', 'Karen Fukuhara is a Japanese-American actress from Los Angeles, California. She is fluent in English and Japanese. While attending UCLA, she continued to work on numerous shows in Japan, notably the Disney Channel. She is a martial arts champion, trained in karate and sword fighting. ', 360),
(22, 'Christine ', 'Woods ', 'hristine Woods was born on September 3, 1983 in Lake Forest, California, USA as Christine Elizabeth Woods. She is an actress, known for Hello Ladies (2013), Perfect Couples (2010) and Flashforward (2009).', 367),
(23, 'Sam ', 'Rockwell', 'Sam Rockwell was born on November 5, 1968, in San Mateo, California, the only child of two actors, Pete Rockwell and Penny Hess. The family moved to New York when he was two years old, living first in the Bronx and later in Manhattan.', 381),
(24, 'Taraji P.', 'Henson', 'Taraji P. Henson was born on September 11, 1970 in Washington, District of Columbia, USA as Taraji Penda Henson. She is an actress and producer, known for The Curious Case of Benjamin Button (2008), Hidden Figures (2016) and Hustle & Flow (2005).', 388);

-- --------------------------------------------------------

--
-- Table structure for table `actor_galery`
--

CREATE TABLE `actor_galery` (
  `id` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actor_galery`
--

INSERT INTO `actor_galery` (`id`, `id_actor`, `id_img`) VALUES
(13, 8, 181),
(14, 8, 182),
(15, 8, 183),
(16, 8, 184),
(17, 8, 185),
(18, 8, 186),
(25, 10, 216),
(26, 10, 217),
(27, 10, 218),
(28, 10, 219),
(29, 10, 220),
(30, 10, 221),
(31, 11, 244),
(32, 11, 245),
(33, 11, 246),
(34, 11, 247),
(35, 11, 248),
(36, 11, 249),
(37, 12, 251),
(38, 12, 252),
(39, 12, 253),
(40, 12, 254),
(41, 12, 255),
(42, 12, 256),
(43, 13, 277),
(44, 13, 278),
(45, 13, 279),
(46, 13, 280),
(47, 13, 281),
(48, 13, 282),
(49, 14, 284),
(50, 14, 285),
(51, 14, 286),
(52, 14, 287),
(53, 14, 288),
(54, 14, 289),
(55, 15, 291),
(56, 15, 292),
(57, 15, 293),
(58, 15, 294),
(59, 15, 295),
(60, 15, 296),
(61, 16, 305),
(62, 16, 306),
(63, 16, 307),
(64, 16, 308),
(65, 16, 309),
(66, 16, 310),
(67, 17, 319),
(68, 17, 320),
(69, 17, 321),
(70, 17, 322),
(71, 17, 323),
(72, 17, 324),
(73, 18, 326),
(74, 18, 327),
(75, 18, 328),
(76, 18, 329),
(77, 18, 330),
(78, 18, 331),
(79, 19, 340),
(80, 19, 341),
(81, 19, 342),
(82, 19, 343),
(83, 19, 344),
(84, 19, 345),
(85, 20, 347),
(86, 20, 348),
(87, 20, 349),
(88, 20, 350),
(89, 20, 351),
(90, 20, 352),
(91, 21, 361),
(92, 21, 362),
(93, 21, 363),
(94, 21, 364),
(95, 21, 365),
(96, 21, 366),
(97, 22, 368),
(98, 22, 369),
(99, 22, 370),
(100, 22, 371),
(101, 22, 372),
(102, 22, 373),
(103, 23, 382),
(104, 23, 383),
(105, 23, 384),
(106, 23, 385),
(107, 23, 386),
(108, 23, 387),
(109, 24, 389),
(110, 24, 390),
(111, 24, 391),
(112, 24, 392),
(113, 24, 393),
(114, 24, 394);

-- --------------------------------------------------------

--
-- Table structure for table `actor_rating`
--

CREATE TABLE `actor_rating` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actor_rating`
--

INSERT INTO `actor_rating` (`id`, `id_user`, `id_actor`, `rating`) VALUES
(2, 4, 8, 5),
(4, 4, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(10, 'horror'),
(11, 'thriller'),
(12, 'animated'),
(13, 'adventure'),
(14, 'Kategorija'),
(15, 'comedy'),
(16, 'action'),
(17, 'sci fi'),
(18, 'drama'),
(19, 'history');

-- --------------------------------------------------------

--
-- Table structure for table `comment_actor`
--

CREATE TABLE `comment_actor` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_movie`
--

CREATE TABLE `comment_movie` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment_movie`
--

INSERT INTO `comment_movie` (`id`, `id_user`, `id_movie`, `comment`, `created_at`) VALUES
(14, 8, 25, 'Test', 1550575150),
(15, 6, 26, 'Test', 1554817121),
(16, 6, 26, 'Test', 1554817125);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `src` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(244) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `src`, `alt`) VALUES
(121, 'img/15504101671550335571Jellyfish.jpg', 'DEDPOOL'),
(122, 'img/15504102421550335487Tulips.jpg', 'Neki glumac DAWDAWDAWD'),
(123, 'img/15504102421550335571Penguins.jpg', 'Neki glumac DAWDAWDAWD'),
(124, 'img/15504102421550335571Jellyfish.jpg', 'Neki glumac DAWDAWDAWD'),
(125, 'img/15504102421550335571Penguins.jpg', 'Neki glumac DAWDAWDAWD'),
(126, 'img/15504102421550335571Penguins.jpg', 'Neki glumac DAWDAWDAWD'),
(127, 'img/15504102421550335571Penguins.jpg', 'Neki glumac DAWDAWDAWD'),
(128, 'img/15504102421550335571Penguins.jpg', 'Neki glumac DAWDAWDAWD'),
(129, 'img/15504102681550335571Jellyfish.jpg', 'Drugi Glumac'),
(130, 'img/15504102681550335610Penguins.jpg', 'Drugi Glumac'),
(131, 'img/15504102681550335610Penguins.jpg', 'Drugi Glumac'),
(132, 'img/15504102681550335610Penguins.jpg', 'Drugi Glumac'),
(133, 'img/15504102681550335610Penguins.jpg', 'Drugi Glumac'),
(134, 'img/15504102681550335610Penguins.jpg', 'Drugi Glumac'),
(135, 'img/15504102681550335610Penguins.jpg', 'Drugi Glumac'),
(136, 'img/15504103021550335571Penguins.jpg', 'DAWDAW'),
(137, 'img/15504103021550335610Penguins.jpg', 'DAWDAW'),
(138, 'img/15504103021550335610Penguins.jpg', 'DAWDAW'),
(139, 'img/15504103021550335610Penguins.jpg', 'DAWDAW'),
(140, 'img/15504103021550335610Penguins.jpg', 'DAWDAW'),
(141, 'img/15504103021550335610Penguins.jpg', 'DAWDAW'),
(142, 'img/15504103021550335610Penguins.jpg', 'DAWDAW'),
(143, 'img/15504103301550335571Desert.jpg', 'DAWDAW'),
(144, 'img/15504103301550335610Jellyfish.jpg', 'DAWDAW'),
(145, 'img/15504103301550335610Penguins.jpg', 'DAWDAW'),
(146, 'img/15504103301550335610Penguins.jpg', 'DAWDAW'),
(147, 'img/15504103301550335610Penguins.jpg', 'DAWDAW'),
(148, 'img/15504103301550335610Penguins.jpg', 'DAWDAW'),
(149, 'img/15504103301550335610Penguins.jpg', 'DAWDAW'),
(150, 'img/1550519699DP.jpg', 'ZADNJI'),
(151, 'img/15504114141550335610Jellyfish.jpg', 'Pera'),
(152, 'img/15504114141550335610Jellyfish.jpg', 'Pera'),
(153, 'img/1550519714DP.jpg', 'Pera'),
(154, 'img/15504114141550335610Penguins.jpg', 'Pera'),
(155, 'img/15504114141550335610Penguins.jpg', 'Pera'),
(156, 'img/15504114141550335610Penguins.jpg', 'Pera'),
(157, 'img/15504193891550335571Penguins.jpg', 'Test'),
(158, 'img/15504193891550335571Jellyfish.jpg', 'Test'),
(159, 'img/15504193891550335571Jellyfish.jpg', 'Test'),
(160, 'img/15504193891550335571Penguins.jpg', 'Test'),
(161, 'img/15504193891550335610Penguins.jpg', 'Test'),
(162, 'img/15504193891550335610Penguins.jpg', 'Test'),
(163, 'img/15504193891550335610Penguins.jpg', 'Test'),
(164, 'img/15504195761550335571Penguins.jpg', 'dAWDAWd'),
(165, 'img/15504195761550335610Jellyfish.jpg', 'dAWDAWd'),
(166, 'img/15504195761550335610Penguins.jpg', 'dAWDAWd'),
(167, 'img/15504195761550335610Penguins.jpg', 'dAWDAWd'),
(168, 'img/15504195761550335610Penguins.jpg', 'dAWDAWd'),
(169, 'img/15504195761550335610Penguins.jpg', 'dAWDAWd'),
(170, 'img/15504195761550335610Penguins.jpg', 'dAWDAWd'),
(171, 'img/15504404441550335610Penguins.jpg', 'Ignjat Jokanovic'),
(172, 'img/15504249281550335571Tulips.jpg', 'Pera Peric'),
(173, 'img/15504266361550335571Jellyfish.jpg', 'KURCINA'),
(174, 'img/15504266361550335610Jellyfish.jpg', 'KURCINA'),
(175, 'img/15504266361550335610Jellyfish.jpg', 'KURCINA'),
(176, 'img/15504266361550335610Jellyfish.jpg', 'KURCINA'),
(177, 'img/15504266361550335571Jellyfish.jpg', 'KURCINA'),
(178, 'img/15504266361550335610Jellyfish.jpg', 'KURCINA'),
(179, 'img/15504266361550335610Penguins.jpg', 'KURCINA'),
(180, 'img/1550533962MV5BOTI3ODk1MTMyNV5BMl5BanBnXkFtZTcwNDEyNTE2Mg@@._V1_UY317_CR6,0,214,317_AL_.jpg', 'Ryan Reynolds '),
(181, 'img/1550533975MV5BMTE2ODUzYTEtZGJlMC00OGY1LWI3ZjUtNGUyNDMxNjlkMTliXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_.jpg', 'Ryan Reynolds '),
(182, 'img/1550533999MV5BNzY0YmU0YmMtNGI2ZS00YjAwLWFjYTktNjE5ZGJkZTRiY2ZjXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SX1777_CR0,0,1777,740_AL_.jpg', 'Ryan Reynolds '),
(183, 'img/1550534006MV5BNjViMmEyNTMtOWU3Zi00NWQ4LTllMDUtN2I2MjY3MjQ4MjI5XkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SX1777_CR0,0,1777,744_AL_.jpg', 'Ryan Reynolds '),
(184, 'img/1550534014MV5BOWJjMzE0ZGUtZDk5ZS00Y2QwLWE1ODUtMjAxZTg3NDdhNjIyXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_SY1000_CR0,0,1495,1000_AL_.jpg', 'Ryan Reynolds '),
(185, 'img/1550534019MV5BZDk2OWMwZTMtMGM3ZC00YmQ1LTg4YjktYzBlMjAyNzc2YTUxXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SX1777_CR0,0,1777,740_AL_.jpg', 'Ryan Reynolds '),
(186, 'img/1550534026MV5BZmQ0YjczMTUtMmJhNS00Y2NjLTg4YmEtOWRjMTEyM2NlM2Q4XkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SX1777_CR0,0,1777,740_AL_.jpg', 'Ryan Reynolds '),
(187, 'img/15505205111550335571Penguins.jpg', 'Test'),
(188, 'img/15505205111550335610Penguins.jpg', 'Test'),
(189, 'img/15505205111550335610Penguins.jpg', 'Test'),
(190, 'img/15505205111550335610Penguins.jpg', 'Test'),
(191, 'img/15505205111550335610Penguins.jpg', 'Test'),
(192, 'img/15505205111550335610Penguins.jpg', 'Test'),
(193, 'img/15505205111550335610Penguins.jpg', 'Test'),
(194, 'img/15505213941550335571Penguins.jpg', 'Ignjat Cao'),
(195, 'img/15505213941550335571Jellyfish.jpg', 'Ignjat Cao'),
(196, 'img/15505213941550335571Penguins.jpg', 'Ignjat Cao'),
(197, 'img/15505213941550335610Penguins.jpg', 'Ignjat Cao'),
(198, 'img/15505213941550335571Penguins.jpg', 'Ignjat Cao'),
(199, 'img/15505213941550335571Penguins.jpg', 'Ignjat Cao'),
(200, 'img/15505213941550335571Penguins.jpg', 'Ignjat Cao'),
(201, 'img/15505229391550335571Jellyfish.jpg', 'CAOOOO'),
(202, 'img/15505229391550335571Penguins.jpg', 'CAOOOO'),
(203, 'img/15505229391550335610Penguins.jpg', 'CAOOOO'),
(204, 'img/15505229391550335610Penguins.jpg', 'CAOOOO'),
(205, 'img/15505229391550335610Penguins.jpg', 'CAOOOO'),
(206, 'img/15505229391550335610Penguins.jpg', 'CAOOOO'),
(207, 'img/15505229391550335610Penguins.jpg', 'CAOOOO'),
(208, 'img/15505238561550335571Jellyfish.jpg', 'CAOOOO'),
(209, 'img/15505238561550335610Penguins.jpg', 'CAOOOO'),
(210, 'img/15505238561550335610Penguins.jpg', 'CAOOOO'),
(211, 'img/15505238561550335610Penguins.jpg', 'CAOOOO'),
(212, 'img/15505238561550335610Penguins.jpg', 'CAOOOO'),
(213, 'img/15505238561550335610Penguins.jpg', 'CAOOOO'),
(214, 'img/15505238561550335610Penguins.jpg', 'CAOOOO'),
(215, 'img/1550534373MV5BMTQ1MzYyMjQ0Nl5BMl5BanBnXkFtZTcwMTA0ODkyMg@@._V1_UX214_CR0,0,214,317_AL_.jpg', 'Josh  Brolin'),
(216, 'img/1550534380MV5BNDhkODlmMzQtYjcxYy00MjE2LTlhY2QtYzhmZTUyZmU5NDNjXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Josh  Brolin'),
(217, 'img/1550534398MV5BNDRmMmNhNDctZjBkMi00N2Q5LWEzZjEtZjFiYjhiOGFjOWYwXkEyXkFqcGdeQXVyODM4MjcwMjk@._V1_.jpg', 'Josh  Brolin'),
(218, 'img/1550534404MV5BNWUzZjAxZjMtNDdmNy00NTFiLTlkNGEtNjllZjFiNzk3ZjYyXkEyXkFqcGdeQXVyNDg2MjUxNjM@._V1_SX1777_CR0,0,1777,743_AL_.jpg', 'Josh  Brolin'),
(219, 'img/1550534419MV5BYmRhOGUwNTItOTY2Mi00NTA1LWJkMDEtM2NhY2ZiMzg4OWY4XkEyXkFqcGdeQXVyNDg2MjUxNjM@._V1_SX1777_CR0,0,1777,736_AL_.jpg', 'Josh  Brolin'),
(220, 'img/1550534460MV5BYWQ3Y2ZkYTUtZDJlZi00MzA5LTgyNTUtNDc1ZTVjNDk2ZTMzXkEyXkFqcGdeQXVyNTM3MDMyMDQ@._V1_.jpg', 'Josh  Brolin'),
(221, 'img/1550534444MV5BZjZiMDkxMTctZTdkMC00ODY5LTlmZmItMmI1MmY3ZWFkZWZhXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_.jpg', 'Josh  Brolin'),
(222, 'img/15505244831550335571Penguins.jpg', 'DAWDAW'),
(223, 'img/15505244831550335571Penguins.jpg', 'DAWDAW'),
(224, 'img/15505244831550335610Penguins.jpg', 'DAWDAW'),
(225, 'img/15505244831550335610Penguins.jpg', 'DAWDAW'),
(226, 'img/15505244831550335610Penguins.jpg', 'DAWDAW'),
(227, 'img/15505244831550335610Penguins.jpg', 'DAWDAW'),
(228, 'img/15505244831550335610Penguins.jpg', 'DAWDAW'),
(229, 'img/15505249171550335571Penguins.jpg', 'DAWDAW'),
(230, 'img/15505249171550335610Penguins.jpg', 'DAWDAW'),
(231, 'img/15505249171550335610Penguins.jpg', 'DAWDAW'),
(232, 'img/15505249171550335610Penguins.jpg', 'DAWDAW'),
(233, 'img/15505249171550335610Penguins.jpg', 'DAWDAW'),
(234, 'img/15505249171550335610Penguins.jpg', 'DAWDAW'),
(235, 'img/15505249171550335610Penguins.jpg', 'DAWDAW'),
(236, 'img/15505249681550335610Penguins.jpg', 'DEDPOOL'),
(237, 'img/15505249681550335610Penguins.jpg', 'DEDPOOL'),
(238, 'img/15505249681550335610Penguins.jpg', 'DEDPOOL'),
(239, 'img/15505249681550335610Penguins.jpg', 'DEDPOOL'),
(240, 'img/15505249681550335610Penguins.jpg', 'DEDPOOL'),
(241, 'img/15505249681550335610Penguins.jpg', 'DEDPOOL'),
(242, 'img/15505249681550335610Penguins.jpg', 'DEDPOOL'),
(243, 'img/1550534613MV5BNmU5Yjk4OTItMjMzZS00MTYzLWI1ZDktYWM4YWM2NTM2YzMzXkEyXkFqcGdeQXVyMzY2OTA2MzM@._V1_UY317_CR12,0,214,317_AL_.jpg', 'Morena Baccarin'),
(244, 'img/1550534613MV5BMDFkYzNiZTctMjAzMC00MWEzLThjYjgtYjFkODlkNmIwMDBiXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_SX1777_CR0,0,1777,742_AL_.jpg', 'Morena Baccarin'),
(245, 'img/1550534613MV5BMjM5ZmFjMDktOTI2OC00NmY1LWI5M2UtYzM3NjM5M2FjMjkzXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_SX1777_CR0,0,1777,742_AL_.jpg', 'Morena Baccarin'),
(246, 'img/1550534613MV5BMTA4ODFiMTQtZjk5Ni00OTM0LThjOTAtNDZmN2Y0YWUwODMzXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_SX1777_CR0,0,1777,742_AL_.jpg', 'Morena Baccarin'),
(247, 'img/1550534613MV5BNjFjMzdhZWEtN2MyYy00NGIzLTkzZWEtZmM3NTkwNzliOWNmXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_SX1777_CR0,0,1777,742_AL_.jpg', 'Morena Baccarin'),
(248, 'img/1550534613MV5BOWJjMzE0ZGUtZDk5ZS00Y2QwLWE1ODUtMjAxZTg3NDdhNjIyXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_SY1000_CR0,0,1495,1000_AL_.jpg', 'Morena Baccarin'),
(249, 'img/1550534613MV5BZjhlYTU2NTctMmNiYS00MWI2LWE3OTMtNDc1ODNjMzkxMmRhXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_SX1777_CR0,0,1777,742_AL_.jpg', 'Morena Baccarin'),
(250, 'img/1550534740MV5BMTU2MjEyODIyNl5BMl5BanBnXkFtZTgwMTQyNjY5NTM@._V1_UY317_CR130,0,214,317_AL_.jpg', 'Zazie  Beetz'),
(251, 'img/1550534740MV5BMjAwMzEwNDEyN15BMl5BanBnXkFtZTgwOTczMTAyNzM@._V1_SX1777_CR0,0,1777,998_AL_.jpg', 'Zazie  Beetz'),
(252, 'img/1550534740MV5BMjUyODg4ODM3N15BMl5BanBnXkFtZTgwODczMTAyNzM@._V1_SX1777_CR0,0,1777,999_AL_.jpg', 'Zazie  Beetz'),
(253, 'img/1550534740MV5BMjUzNTIxMDI1Ml5BMl5BanBnXkFtZTgwODg0MDIzNjM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Zazie  Beetz'),
(254, 'img/1550534740MV5BMTc5OTgyMDk0MV5BMl5BanBnXkFtZTgwNjkyNjM0NTM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Zazie  Beetz'),
(255, 'img/1550534740MV5BOGNiMjYwYzMtMTE5Ni00MGZkLTk0ZTQtMDA4NTNiNTVjMTRiXkEyXkFqcGdeQXVyNDg2MjUxNjM@._V1_SY1000_SX1500_AL_.jpg', 'Zazie  Beetz'),
(256, 'img/1550534740MV5BZTI5MDJlNWUtNTNlNy00NTFmLWI1MTAtMTljYjJkNmRjYWQwXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_.jpg', 'Zazie  Beetz'),
(257, 'img/1550535029MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_SY1000_SX686_AL_.jpg', 'Deadpool '),
(258, 'img/1550535029MV5BMDNjYjExMjgtY2U0OS00YzA4LWEzNzQtNzc0YWNkZDIwZDdmXkEyXkFqcGdeQXVyMTYzMDM0NTU@._V1_SY1000_SX750_AL_.jpg', 'Deadpool '),
(259, 'img/1550535029MV5BMjAwNTA3NDkwMV5BMl5BanBnXkFtZTgwMjAwMzQ1NzE@._V1_SY1000_CR0,0,701,1000_AL_.jpg', 'Deadpool '),
(260, 'img/1550535029MV5BMTk4NjMyNzY3MV5BMl5BanBnXkFtZTgwNDY0Nzg0ODE@._V1_SY1000_CR0,0,666,1000_AL_.jpg', 'Deadpool '),
(261, 'img/1550535029MV5BNjE3NjE4NzY1NV5BMl5BanBnXkFtZTgwMDQ4NzY1NTM@._V1_SY1000_CR0,0,666,1000_AL_.jpg', 'Deadpool '),
(262, 'img/1550535029MV5BNjYzNzM3NTg0N15BMl5BanBnXkFtZTgwMzE5MDU0OTE@._V1_SY1000_CR0,0,710,1000_AL_.jpg', 'Deadpool '),
(263, 'img/1550535029MV5BYzE5MjY1ZDgtMTkyNC00MTMyLThhMjAtZGI5OTE1NzFlZGJjXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Deadpool '),
(264, 'img/1550571522Penguins.jpg', 'Ignjat Jokanovic'),
(265, 'img/1550571636Penguins.jpg', 'Cao Macko'),
(266, 'img/1550571707Penguins.jpg', 'Pera Peric'),
(267, 'img/1550572746Penguins.jpg', 'Ignjat Jokanovic'),
(268, 'img/1550573400MV5BNjk1Njk3YjctMmMyYS00Y2I4LThhMzktN2U0MTMyZTFlYWQ5XkEyXkFqcGdeQXVyODM2ODEzMDA@._V1_UY268_CR43,0,182,268_AL_.jpg', 'Deadpool 2'),
(269, 'img/1550573784MV5BNjk1Njk3YjctMmMyYS00Y2I4LThhMzktN2U0MTMyZTFlYWQ5XkEyXkFqcGdeQXVyODM2ODEzMDA@._V1_UY268_CR43,0,182,268_AL_.jpg', 'Deadpool 2'),
(270, 'img/1550573784MV5BM2E2OTUzZTgtNGMxMS00MmY4LWE3NDUtOTFjZWI2OTY5NDUwXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SX1777_CR0,0,1777,744_AL_.jpg', 'Deadpool 2'),
(271, 'img/1550573784MV5BMTE2ODUzYTEtZGJlMC00OGY1LWI3ZjUtNGUyNDMxNjlkMTliXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_.jpg', 'Deadpool 2'),
(272, 'img/1550573784MV5BMzEyMzQyNTIzMV5BMl5BanBnXkFtZTgwOTQyMDgzNDM@._V1_SY1000_CR0,0,1480,1000_AL_.jpg', 'Deadpool 2'),
(273, 'img/1550573784MV5BOTRiYmIxNDYtODE3Zi00MTliLWE1ZGItNjEyZjA5YjczOTg1XkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SX1777_CR0,0,1777,744_AL_.jpg', 'Deadpool 2'),
(274, 'img/1550573784MV5BOWJjMzE0ZGUtZDk5ZS00Y2QwLWE1ODUtMjAxZTg3NDdhNjIyXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_SY1000_CR0,0,1495,1000_AL_.jpg', 'Deadpool 2'),
(275, 'img/1550573784MV5BYjhhMGI4NWItMDU0MC00NzY0LWIyYjgtZDIwNTkyOTc3ODhiXkEyXkFqcGdeQXVyNzQzNDA2MzM@._V1_SX1777_CR0,0,1777,971_AL_.jpg', 'Deadpool 2'),
(276, 'img/1550576020MV5BMjE4NDMwMzc4Ml5BMl5BanBnXkFtZTcwMDg4Nzg4Mg@@._V1_UY317_CR6,0,214,317_AL_.jpg', 'Gerard  Butler '),
(277, 'img/1550576000MV5BMzg4NGFmYzctNzI1Zi00ZDY4LTk2NzYtMzBlZTJhYjBiOGIzXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_SY1000_CR0,0,1453,1000_AL_.jpg', 'Gerard  Butler '),
(278, 'img/1550576032MV5BOTQ3YzVkMjQtYzI1Mi00NjEzLTk0MjktOWQ2MjFjOTUzYzAwXkEyXkFqcGdeQXVyNTM3MDMyMDQ@._V1_.jpg', 'Gerard  Butler '),
(279, 'img/1550576000MV5BOWI0NTk2MDAtYjkyYi00YTRiLTgyN2ItY2M2ODJkMDY0NWIwXkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_SY1000_SX1600_AL_.jpg', 'Gerard  Butler '),
(280, 'img/1550576000MV5BYmFmNmU0NmUtYmZlYi00ZDVlLTlkNjQtMGE0ZTNkMzE5Y2Y0XkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_.jpg', 'Gerard  Butler '),
(281, 'img/1550576000MV5BYmVhMzFjMjYtNTBjOS00MTZhLThmYjgtYTMyMTg3YTM4NzYxXkEyXkFqcGdeQXVyNDg2MjUxNjM@._V1_SX1777_CR0,0,1777,741_AL_.jpg', 'Gerard  Butler '),
(282, 'img/1550576000MV5BYWMyNjY3ZjAtYzY4ZS00ODRmLWI4ZjctNGU3NjZkMzJhYmQ3XkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_.jpg', 'Gerard  Butler '),
(283, 'img/1550576133MV5BNDU0NTE0NDYwOF5BMl5BanBnXkFtZTcwMDc2MDI3Nw@@._V1_UY317_CR19,0,214,317_AL_.jpg', 'Jim Sturgess'),
(284, 'img/1550576133MV5BMWU5Y2RiOTQtNGZlNi00NjM1LTllYjgtMjcxZGY4NmE0YjBmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNTc3MjUzNTI@._V1_SY1000_CR0,0,1618,1000_AL_.jpg', 'Jim Sturgess'),
(285, 'img/1550576133MV5BNmExY2UwZjMtMDUxMy00MDRhLThmNWItOTkwYWNkYWI1NjMwXkEyXkFqcGdeQXVyNTEzNDY5MjM@._V1_SY1000_CR0,0,1609,1000_AL_.jpg', 'Jim Sturgess'),
(286, 'img/1550576133MV5BNTc3Nzc2NTQzMF5BMl5BanBnXkFtZTgwMDQ4NzM5MDI@._V1_.jpg', 'Jim Sturgess'),
(287, 'img/1550576133MV5BODg3NDQyOTgyOF5BMl5BanBnXkFtZTgwNzk4NzYyNjM@._V1_.jpg', 'Jim Sturgess'),
(288, 'img/1550576133MV5BYzk2Zjg4NzctZjc1Yi00MmIwLWEzZjMtNzJkMjM1NDZjYjlhXkEyXkFqcGdeQXVyMDc2NTEzMw@@._V1_SY1000_CR0,0,1505,1000_AL_.jpg', 'Jim Sturgess'),
(289, 'img/1550576133MV5BZmYyNjAwMjQtNDBiYy00YWI0LWI5OTQtOTJhZDYyNTJlOTI2XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Jim Sturgess'),
(290, 'img/1550576228MV5BMjE5Mjk4NDAyN15BMl5BanBnXkFtZTcwMDMyMDY1OA@@._V1_UY317_CR124,0,214,317_AL_.jpg', 'Abbie Cornish'),
(291, 'img/1550576228MV5BMjEyMjE2NjMyMl5BMl5BanBnXkFtZTcwMDgxMDQ4Mg@@._V1_.jpg', 'Abbie Cornish'),
(292, 'img/1550576228MV5BMjI2NzU0ODM3OV5BMl5BanBnXkFtZTgwODI2MTkwMTE@._V1_SY1000_CR0,0,666,1000_AL_.jpg', 'Abbie Cornish'),
(293, 'img/1550576228MV5BMTE5NzI0NDk2OV5BMl5BanBnXkFtZTYwMjA5NTg2._V1_.jpg', 'Abbie Cornish'),
(294, 'img/1550576228MV5BMTkxNTYxMzY5N15BMl5BanBnXkFtZTYwNjUwMzY3._V1_.jpg', 'Abbie Cornish'),
(295, 'img/1550576228MV5BMTM3NjcxNTEyNV5BMl5BanBnXkFtZTcwNDcxMDQ4Mg@@._V1_.jpg', 'Abbie Cornish'),
(296, 'img/1550576228MV5BZmRjOTFjMjMtYTczYi00MDhjLWI2YjItMTg0YWZkN2VjZjBjXkEyXkFqcGdeQXVyNDg2MjUxNjM@._V1_SY1000_SX1500_AL_.jpg', 'Abbie Cornish'),
(297, 'img/1550576420MV5BMTA0OTQwMTIxNzheQTJeQWpwZ15BbWU4MDQ1MzI3OTMy._V1_.jpg', 'Geostorm'),
(298, 'img/1550576420MV5BMTA0OTQwMTIxNzheQTJeQWpwZ15BbWU4MDQ1MzI3OTMy._V1_.jpg', 'Geostorm'),
(299, 'img/1550576420MV5BMTgyOTA2NDc1OF5BMl5BanBnXkFtZTgwNDM1NzU1MzI@._V1_SX1777_CR0,0,1777,744_AL_.jpg', 'Geostorm'),
(300, 'img/1550576420MV5BZWJjMDQzNDQtNTFjZi00Y2RkLWEwYTctYWRmODFkZWQyZGQxXkEyXkFqcGdeQXVyODkwODQ0NTk@._V1_.jpg', 'Geostorm'),
(301, 'img/1550576420MV5BZjdkYjdlMmQtMGU4Zi00NTJlLWE0NjctZWYyZDk5OWU5ZmE1XkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_SY1000_CR0,0,1489,1000_AL_.jpg', 'Geostorm'),
(302, 'img/1550576420MV5BYmYzMTViNzktM2VhNy00MDc3LThjZGMtNzM5MjVjNGRkNTI0XkEyXkFqcGdeQXVyNjMyMzc3Njg@._V1_.jpg', 'Geostorm'),
(303, 'img/1550576420MV5BMTA0OTQwMTIxNzheQTJeQWpwZ15BbWU4MDQ1MzI3OTMy._V1_UX182_CR0,0,182,268_AL_.jpg', 'Geostorm'),
(304, 'img/1550576655MV5BMzIwMjIwNjg0M15BMl5BanBnXkFtZTgwOTI3MDEzMDE@._V1_UY317_CR14,0,214,317_AL_.jpg', 'Lena  Headey'),
(305, 'img/1550576655MV5BMjAwNzIxNzYxOV5BMl5BanBnXkFtZTgwMDQ5MjYzNzM@._V1_.jpg', 'Lena  Headey'),
(306, 'img/1550576655MV5BMjI4MTgzNTA3NF5BMl5BanBnXkFtZTgwNjM1NTAyNzM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Lena  Headey'),
(307, 'img/1550576655MV5BNTgwNzQwNjgzNl5BMl5BanBnXkFtZTgwMDU5MjYzNzM@._V1_.jpg', 'Lena  Headey'),
(308, 'img/1550576655MV5BOTE1NzYwNjQtMGJmNi00OTQ4LTgyYTQtNjE3NGIwMTBlZDVmXkEyXkFqcGdeQXVyMjk3NTUyOTc@._V1_.jpg', 'Lena  Headey'),
(309, 'img/1550576655MV5BYmFmNmU0NmUtYmZlYi00ZDVlLTlkNjQtMGE0ZTNkMzE5Y2Y0XkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_.jpg', 'Lena  Headey'),
(310, 'img/1550576655MV5BYzA1NzYwN2QtYTNhMi00MGExLTg4YmQtZTg2YmNiMDhlNTM5XkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_.jpg', 'Lena  Headey'),
(311, 'img/1550576835MV5BMjAzNTkzNjcxNl5BMl5BanBnXkFtZTYwNDA4NjE3._V1_UX182_CR0,0,182,268_AL_.jpg', ' 300'),
(312, 'img/1550576835MV5BNTU4NjI0MGEtN2ZlZS00ZTZhLWI5MjAtOGJhYWExMzdiZGFjL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNDcxNzU3MTE@._V1_.jpg', ' 300'),
(313, 'img/1550576835MV5BNTVkNzEzNjUtN2UzNy00NWQxLWIxOGMtN2I5ODQ4YzY3MmUzL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNDcxNzU3MTE@._V1_.jpg', ' 300'),
(314, 'img/1550576835MV5BOWFiMTAyNGMtNmUyNC00N2M0LTkzNjMtNmQwMDk3M2FkZmI3XkEyXkFqcGdeQXVyMjMyNTkxNzY@._V1_.jpg', ' 300'),
(315, 'img/1550576835MV5BYjllZWY2YTAtOTlkYi00YTcxLWExMWEtNTJmYzVmMzU3YjcwL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNDcxNzU3MTE@._V1_.jpg', ' 300'),
(316, 'img/1550576835MV5BYWMyNjY3ZjAtYzY4ZS00ODRmLWI4ZjctNGU3NjZkMzJhYmQ3XkEyXkFqcGdeQXVyMzQ3Nzk5MTU@._V1_.jpg', ' 300'),
(317, 'img/1550576835MV5BZThlMDFjODYtZGUyMC00MzU2LTkzZDMtNGRhZWQ3YTUwMzYxXkEyXkFqcGdeQXVyMjMyNTkxNzY@._V1_.jpg', ' 300'),
(318, 'img/1550576998MV5BMTQ3OTY0ODk0M15BMl5BanBnXkFtZTYwNzE4Njc4._V1_UY317_CR7,0,214,317_AL_.jpg', 'Jack Nicholson '),
(319, 'img/1550576998MV5BMmRmNTI0NGEtZjM4Ny00MTYzLTkwYzYtYTA3ZmE4MTc4ZWMwXkEyXkFqcGdeQXVyMTI3MDk3MzQ@._V1_.jpg', 'Jack Nicholson '),
(320, 'img/1550576998MV5BMTlhZjM4MWEtNjNjOS00MGYzLTkwOGEtMDlhN2VlMDExNjk4XkEyXkFqcGdeQXVyMTI3MDk3MzQ@._V1_.jpg', 'Jack Nicholson '),
(321, 'img/1550576998MV5BNWVhZmE0NDQtNjY0Yy00ZTFhLWJhZmMtZmJhYzU2M2Y2ZDQwXkEyXkFqcGdeQXVyMTI3MDk3MzQ@._V1_.jpg', 'Jack Nicholson '),
(322, 'img/1550576998MV5BODlmZTgzZmQtZDFkYy00NDRhLWEwNGItZDhkNWQxNzkzYzZiXkEyXkFqcGdeQXVyMTI3MDk3MzQ@._V1_.jpg', 'Jack Nicholson '),
(323, 'img/1550576998MV5BYmFhMGIyMDQtNjYzMC00ZTQ1LWE2ZTMtYjIyNGE1MWY0MDY3XkEyXkFqcGdeQXVyMTI3MDk3MzQ@._V1_.jpg', 'Jack Nicholson '),
(324, 'img/1550576998MV5BYzlmOTc3ZTMtZTIyMi00YzliLWFlOTctNDQ2MTA4NmM2NGYzXkEyXkFqcGdeQXVyMTI3MDk3MzQ@._V1_.jpg', 'Jack Nicholson '),
(325, 'img/1550577083MV5BNjE4MTY1Mzk0N15BMl5BanBnXkFtZTgwOTQzNDE2MDE@._V1_UX214_CR0,0,214,317_AL_.jpg', 'Shelley Duvall'),
(326, 'img/1550577083MV5BM2VhNDkxNTQtM2Y0Zi00YWM3LWI4MzgtMzhhMGExYWQ4Nzc4XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Shelley Duvall'),
(327, 'img/1550577083MV5BMjNjNDQ2NTAtZjI5Ny00OGE3LWFiNzQtZWZkZTkxOGY1ZmQ4XkEyXkFqcGdeQXVyNTk5NzQ5Ng@@._V1_.jpg', 'Shelley Duvall'),
(328, 'img/1550577083MV5BMTc5MjM4Njg3Nl5BMl5BanBnXkFtZTgwNTk1NDU2NjM@._V1_SY1000_CR0,0,1250,1000_AL_.jpg', 'Shelley Duvall'),
(329, 'img/1550577083MV5BMTU3MTkwMjQ1MF5BMl5BanBnXkFtZTgwODk1NDU2NjM@._V1_SX1237_CR0,0,1237,999_AL_.jpg', 'Shelley Duvall'),
(330, 'img/1550577083MV5BNGY4Yzc2NTMtMDQ1Ni00OWEwLThhNjYtZDA0OTUwZmNjNzdmXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Shelley Duvall'),
(331, 'img/1550577083MV5BOWJlODNhYzEtMjNmMS00NGNlLTkzNWEtYmJhYWZhM2EzZTE2XkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_.jpg', 'Shelley Duvall'),
(332, 'img/1550577237MV5BZWFlYmY2MGEtZjVkYS00YzU4LTg0YjQtYzY1ZGE3NTA5NGQxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Shining'),
(333, 'img/1550577237MV5BMTg0MzkzODUwNV5BMl5BanBnXkFtZTgwODM1MjEwNDI@._V1_SX1252_CR0,0,1252,999_AL_.jpg', 'The Shining'),
(334, 'img/1550577237MV5BMTMwODM3ODgxNl5BMl5BanBnXkFtZTcwNTk4NDIwNA@@._V1_SX1472_CR0,0,1472,999_AL_.jpg', 'The Shining'),
(335, 'img/1550577237MV5BMTU0NTYxNjIzNl5BMl5BanBnXkFtZTcwNDk4NDIwNA@@._V1_SY1000_CR0,0,1475,1000_AL_.jpg', 'The Shining'),
(336, 'img/1550577237MV5BMTU3MTkwMjQ1MF5BMl5BanBnXkFtZTgwODk1NDU2NjM@._V1_SX1237_CR0,0,1237,999_AL_.jpg', 'The Shining'),
(337, 'img/1550577237MV5BMTUwNzI4NDc2Nl5BMl5BanBnXkFtZTgwNjY1MjY5NzE@._V1_SY1000_CR0,0,1439,1000_AL_.jpg', 'The Shining'),
(338, 'img/1550577237MV5BNzg3MzY3MzYxNF5BMl5BanBnXkFtZTgwODg1OTEwMjE@._V1_SY1000_CR0,0,1214,1000_AL_.jpg', 'The Shining'),
(339, 'img/1550577813MV5BMjQ0MzI2MTExMl5BMl5BanBnXkFtZTgwNjM4NjI0NjM@._V1_UY317_CR13,0,214,317_AL_.jpg', 'Ben Foster '),
(340, 'img/1550577813MV5BMWFhMTdjOWMtZWI2MS00YmQ5LWFmYWUtYTExODFhNDBhOTgxXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Ben Foster '),
(341, 'img/1550577813MV5BMzg0ZWE1NTYtZDk0Yi00MmZhLWJkNzYtYWNlYzJmNjcwODE1XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Ben Foster '),
(342, 'img/1550577813MV5BNGIwMDg5MmQtYzkyNi00MTc5LThhMWEtYjRmMWMzMzIyNWZmXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_SX1777_CR0,0,1777,739_AL_.jpg', 'Ben Foster '),
(343, 'img/1550577813MV5BNTU0MWI0MWQtZGZhZi00MjFlLTk5ZjQtMGJjN2NhZDcxMjRhXkEyXkFqcGdeQXVyNjUxMjc1OTM@._V1_SX1777_CR0,0,1777,737_AL_.jpg', 'Ben Foster '),
(344, 'img/1550577813MV5BNjc0OGE5M2EtMTAxZS00YTEwLTk3MTctOGEwODJiZjVlZDhiXkEyXkFqcGdeQXVyNDkzNTM2ODg@._V1_SY1000_CR0,0,1400,1000_AL_.jpg', 'Ben Foster '),
(345, 'img/1550577813MV5BODRhNGJhZTMtOGE2NC00N2MwLThkMjAtYWJhYzg5MDllOGI5XkEyXkFqcGdeQXVyNDkzNTM2ODg@._V1_SY1000_CR0,0,1348,1000_AL_.jpg', 'Ben Foster '),
(346, 'img/1550577919MV5BMTU4ODk3NTcyMl5BMl5BanBnXkFtZTcwOTIwMTQxMw@@._V1_UY317_CR6,0,214,317_AL_.jpg', 'Dennis  Quaid'),
(347, 'img/1550577919MV5BM2IyZmVmODktNWVmZC00MDdlLTgwMWYtZTdhNmMwZmI4MjYyXkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_.jpg', 'Dennis  Quaid'),
(348, 'img/1550577919MV5BMTY1ODQ1OTgwMl5BMl5BanBnXkFtZTgwMzk0NTcwNjM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Dennis  Quaid'),
(349, 'img/1550577919MV5BNDlkNjA5MjItYjA0NC00NzAyLTgzOGMtYzk3OGIxYzBiNWFjXkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_.jpg', 'Dennis  Quaid'),
(350, 'img/1550577919MV5BNzk4MzRmODEtMjNhZS00YWVlLTlhNGUtMDU3OTA0NzhkYmRkXkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_.jpg', 'Dennis  Quaid'),
(351, 'img/1550577919MV5BNzM2NDkzNTYtMDZmYy00N2VhLTg4YTYtNjkyZWVkNDFjMzdhXkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_.jpg', 'Dennis  Quaid'),
(352, 'img/1550577919MV5BYTFjYTJhODUtMTkwMC00ZDEzLTljZTgtMDkwZDZmOWU3ZTAxXkEyXkFqcGdeQXVyMjUyNDk2ODc@._V1_.jpg', 'Dennis  Quaid'),
(353, 'img/1550578061MV5BNDQxNjc5NTMxNl5BMl5BanBnXkFtZTcwNjg2NDE4Mg@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Pandorum '),
(354, 'img/1550578061MV5BMjA2NzM2MTc2OV5BMl5BanBnXkFtZTcwMjA3NTM4Mg@@._V1_SY1000_CR0,0,664,1000_AL_.jpg', 'Pandorum '),
(355, 'img/1550578061MV5BMTkxMDY1MDEwNF5BMl5BanBnXkFtZTcwMDA3NTM4Mg@@._V1_.jpg', 'Pandorum '),
(356, 'img/1550578061MV5BMTMyNDU3NjkzOF5BMl5BanBnXkFtZTcwODk2NTM4Mg@@._V1_.jpg', 'Pandorum '),
(357, 'img/1550578061MV5BMTMzMjAyOTkyMl5BMl5BanBnXkFtZTcwMTA3NTM4Mg@@._V1_.jpg', 'Pandorum '),
(358, 'img/1550578061MV5BMTUyMzg3NTc5Ml5BMl5BanBnXkFtZTcwMzA3NTM4Mg@@._V1_.jpg', 'Pandorum '),
(359, 'img/1550578061MV5BNDY2MDAwNjU0N15BMl5BanBnXkFtZTcwOTk2NTM4Mg@@._V1_.jpg', 'Pandorum '),
(360, 'img/1550578244MV5BODI4NjUwMjQyOF5BMl5BanBnXkFtZTgwMzMwOTg0NjM@._V1_UY317_CR130,0,214,317_AL_.jpg', 'Karen  Fukuhara'),
(361, 'img/1550578244MV5BMGNkN2ZiY2MtNzJhZi00MDI0LTg5NWYtMDllODBiN2MzMjgwXkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_SX1777_CR0,0,1777,748_AL_.jpg', 'Karen  Fukuhara'),
(362, 'img/1550578244MV5BMjdiYmMxMGItZGM2OS00ZWM1LWExYWEtNTUyN2ViM2Q5MTU5XkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_.jpg', 'Karen  Fukuhara'),
(363, 'img/1550578244MV5BMjMxNDc2NTYzNV5BMl5BanBnXkFtZTgwODc3NDY1OTE@._V1_SX1777_CR0,0,1777,736_AL_.jpg', 'Karen  Fukuhara'),
(364, 'img/1550578244MV5BNmIxMWJlZDktOTgyMi00YTM0LTg4YWQtMDgxYjc3NGM2NjZmXkEyXkFqcGdeQXVyNTAyNDQ2NjI@._V1_.jpg', 'Karen  Fukuhara'),
(365, 'img/1550578244MV5BNWE3ZWEwMDAtOTcwZi00OWYwLWI4ODItZTRlZjAxMjk2MjZhXkEyXkFqcGdeQXVyMTI3MDk3MzQ@._V1_.jpg', 'Karen  Fukuhara'),
(366, 'img/1550578244MV5BNzY4NTYxNjg1OF5BMl5BanBnXkFtZTgwNzYxNzA0OTE@._V1_SY1000_CR0,0,1502,1000_AL_.jpg', 'Karen  Fukuhara'),
(367, 'img/1550578382MV5BMTAzMjI0NzgzMDleQTJeQWpwZ15BbWU4MDY1ODE2NzYx._V1_UX214_CR0,0,214,317_AL_.jpg', 'Christine  Woods '),
(368, 'img/1550578382MV5BMjA1NzEwODA2OV5BMl5BanBnXkFtZTgwMjQ4MDc4NDE@._V1_.jpg', 'Christine  Woods '),
(369, 'img/1550578382MV5BMjE3Mjc1OTU4Nl5BMl5BanBnXkFtZTgwNTM4MDc4NDE@._V1_.jpg', 'Christine  Woods '),
(370, 'img/1550578382MV5BMjM3MzMxODI5OV5BMl5BanBnXkFtZTgwOTM4MDc4NDE@._V1_.jpg', 'Christine  Woods '),
(371, 'img/1550578382MV5BMjUyNjM2NDI2N15BMl5BanBnXkFtZTgwNTYyOTAyNzM@._V1_SX1777_CR0,0,1777,999_AL_.jpg', 'Christine  Woods '),
(372, 'img/1550578382MV5BMTQ1ODU2NzkzNV5BMl5BanBnXkFtZTgwMTQ4MDc4NDE@._V1_.jpg', 'Christine  Woods '),
(373, 'img/1550578382MV5BMzgyNTY0ODg1MV5BMl5BanBnXkFtZTgwNDQ4MDc4NDE@._V1_.jpg', 'Christine  Woods '),
(374, 'img/1550578504MV5BMmE0NTY5YmItYjY1ZC00MWQ3LTg4NDItNzEyMjhhYjFhNGY5XkEyXkFqcGdeQXVyNDExMzMxNjE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Stray'),
(375, 'img/1550578504MV5BMjRjZTJkMzktNDlkMS00ODhjLTk0NmEtYzU0ODY1NGYzMmM2XkEyXkFqcGdeQXVyNjEzMTM2MzI@._V1_.jpg', 'Stray'),
(376, 'img/1550578504MV5BMzZmNDM1YjQtYzFhNS00ZDZiLWFjNjctYmI4ZWNiMjhmNmYxXkEyXkFqcGdeQXVyNjEzMTM2MzI@._V1_.jpg', 'Stray'),
(377, 'img/1550578504MV5BNmFjNWQyMTUtY2NjZi00NzBhLWIxNjctZDVjNGU5MDk3N2NlXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_SY1000_CR0,0,990,1000_AL_.jpg', 'Stray'),
(378, 'img/1550578504MV5BODI2MDA2NDItOTM0Ni00ZmJmLTk0NTItMDAyYmI0ZGRiOGFiL2ltYWdlXkEyXkFqcGdeQXVyMTkzMTI5MzM@._V1_.jpg', 'Stray'),
(379, 'img/1550578504MV5BOWMxYjMyMWQtNmUwMS00OTBiLWExMmMtZjViMTliOWFlYzI5XkEyXkFqcGdeQXVyNjEzMTM2MzI@._V1_.jpg', 'Stray'),
(380, 'img/1550578504MV5BYWI3Y2QyZGUtYzJhZi00ZDIzLWFhZjQtNzFhZjkwZTNiMWZkXkEyXkFqcGdeQXVyNjEzMTM2MzI@._V1_.jpg', 'Stray'),
(381, 'img/1550578649MV5BMTc2NTM3MzE5NF5BMl5BanBnXkFtZTcwMjg4NDMwNA@@._V1_UY317_CR4,0,214,317_AL_.jpg', 'Sam  Rockwell'),
(382, 'img/1550578649MV5BM2JkN2IxZjItYTZhZC00ZmUxLTg0ODgtN2Q0YWUwZjllOWQ5XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Sam  Rockwell'),
(383, 'img/1550578649MV5BM2RiN2M3NjAtMWUyZS00MzYwLWIyY2MtYWMyYzAwMTAxZDI4XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Sam  Rockwell'),
(384, 'img/1550578649MV5BMGE5NDAxYjctZGMzNy00ZTBhLTlkNzEtODBmMjQ4M2Q3MjBmXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Sam  Rockwell'),
(385, 'img/1550578649MV5BNDkxNTM2OTctNDBmNS00MGZmLWEyYjYtMmE0NjIxYTQ4MTgzXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Sam  Rockwell'),
(386, 'img/1550578649MV5BNGNhZGU0OWMtYTRiZi00OWMwLTkxYmUtNDhiMGExNTdkOGIxXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Sam  Rockwell'),
(387, 'img/1550578649MV5BOWNhMGNkYmQtOGIxYS00ODg4LWE5ODctNjc5YWQyNTU0ZjE1XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg', 'Sam  Rockwell'),
(388, 'img/1550578824MV5BMTc4NDQ2MTUwMl5BMl5BanBnXkFtZTcwODA2NDY3NQ@@._V1_UX214_CR0,0,214,317_AL_.jpg', 'Taraji P. Henson'),
(389, 'img/1550578824MV5BZGJiYmQxOWQtOTE2ZC00MTcyLTgzNzYtNWIzNTE3YjdlYzYyXkEyXkFqcGdeQXVyNTM3MDMyMDQ@._V1_.jpg', 'Taraji P. Henson'),
(390, 'img/1550578824MV5BMTk3MTMzNTQ0Nl5BMl5BanBnXkFtZTgwMTg2MzgxNzM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Taraji P. Henson'),
(391, 'img/1550578824MV5BOTMzOTM3MDY0OF5BMl5BanBnXkFtZTgwNzc2MzgxNzM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Taraji P. Henson'),
(392, 'img/1550578824MV5BNTU5NjAwMDY2MV5BMl5BanBnXkFtZTgwODc2MzgxNzM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Taraji P. Henson'),
(393, 'img/1550578824MV5BOTMzOTM3MDY0OF5BMl5BanBnXkFtZTgwNzc2MzgxNzM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Taraji P. Henson'),
(394, 'img/1550578824MV5BMjA3NTk4ODk5OV5BMl5BanBnXkFtZTgwNDc2MzgxNzM@._V1_SX1500_CR0,0,1500,999_AL_.jpg', 'Taraji P. Henson'),
(395, 'img/1550578940MV5BMjQ5MjA2NDkyM15BMl5BanBnXkFtZTgwNTIwNjUzNzM@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Best of Enemies'),
(396, 'img/1550578940MV5BZGQyNWQ0ODItNWQ0OS00ZjhjLTliNGEtYzM1OWNkNWQ3MTZiXkEyXkFqcGdeQXVyNzM5Mjg3ODg@._V1_SY1000_SX675_AL_.jpg', 'The Best of Enemies'),
(397, 'img/1550578940MV5BMjQ5MjA2NDkyM15BMl5BanBnXkFtZTgwNTIwNjUzNzM@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Best of Enemies'),
(398, 'img/1550578940MV5BMjQ5MjA2NDkyM15BMl5BanBnXkFtZTgwNTIwNjUzNzM@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'The Best of Enemies'),
(399, 'img/1550578940MV5BZGQyNWQ0ODItNWQ0OS00ZjhjLTliNGEtYzM1OWNkNWQ3MTZiXkEyXkFqcGdeQXVyNzM5Mjg3ODg@._V1_SY1000_SX675_AL_.jpg', 'The Best of Enemies'),
(400, 'img/1550578940MV5BMjQ5MjA2NDkyM15BMl5BanBnXkFtZTgwNTIwNjUzNzM@._V1_UX182_CR0,0,182,268_AL_.jpg', 'The Best of Enemies'),
(401, 'img/1550578940MV5BMjQ5MjA2NDkyM15BMl5BanBnXkFtZTgwNTIwNjUzNzM@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'The Best of Enemies'),
(402, 'img/1551975258Screenshot_2.png', 'Milos Test');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` bigint(20) NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `storyline` text COLLATE utf8_unicode_ci NOT NULL,
  `img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `release_date`, `country`, `storyline`, `img_id`) VALUES
(25, 'Deadpool ', 1455231600, 'United States', 'A wisecracking mercenary gets experimented on and becomes immortal but ugly, and sets out to track down the man who ruined his looks.', 257),
(26, 'Deadpool 2', 1526601600, 'United States', 'Foul-mouthed mutant mercenary Wade Wilson (AKA. Deadpool), brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg, Cable.', 269),
(27, 'Geostorm', 1508457600, 'United States', 'When the network of satellites designed to control the global climate starts to attack Earth, it\'s a race against the clock for its creator to uncover the real threat before a worldwide Geostorm wipes out everything and everyone.', 297),
(28, ' 300', 1173398400, 'United States', 'King Leonidas of Sparta and a force of 300 men fight the Persians at Thermopylae in 480 B.C.', 311),
(29, 'The Shining', 329702400, 'United States', 'A family heads to an isolated hotel for the winter where an evil spiritual presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.', 332),
(30, 'Pandorum ', 1253836800, 'United States', 'Two crew members of a spaceship wake up from hypersleep to discover that all their colleagues are missing. Despite this, it appears that they are not alone.', 353),
(31, 'Stray', 1551398400, 'United States', 'An orphaned teenager forms an unlikely friendship with a detective. Together they investigate her mother\'s murder, and uncover the supernatural force that proves to be a threat to her family.', 374),
(32, 'The Best of Enemies', 1554422400, 'United States', 'Civil rights activist Ann Atwater faces off against C.P. Ellis, Exalted Cyclops of the Ku Klux Klan, in 1971 Durham, North Carolina over the issue of school integration.', 395);

-- --------------------------------------------------------

--
-- Table structure for table `movie_actor`
--

CREATE TABLE `movie_actor` (
  `id` int(11) NOT NULL,
  `id_actor` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_actor`
--

INSERT INTO `movie_actor` (`id`, `id_actor`, `id_movie`) VALUES
(43, 8, 25),
(44, 11, 25),
(45, 8, 26),
(46, 10, 26),
(47, 11, 26),
(48, 12, 26),
(49, 12, 27),
(50, 13, 27),
(51, 14, 27),
(52, 15, 27),
(53, 13, 28),
(54, 16, 28),
(55, 17, 29),
(56, 18, 29),
(57, 19, 30),
(58, 20, 30),
(59, 21, 31),
(60, 22, 31),
(61, 23, 32),
(62, 24, 32);

-- --------------------------------------------------------

--
-- Table structure for table `movie_category`
--

CREATE TABLE `movie_category` (
  `id` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_category`
--

INSERT INTO `movie_category` (`id`, `id_movie`, `id_category`) VALUES
(52, 25, 13),
(53, 25, 15),
(54, 25, 16),
(55, 26, 13),
(56, 26, 15),
(57, 26, 16),
(58, 27, 11),
(59, 27, 16),
(60, 27, 17),
(61, 28, 16),
(62, 29, 10),
(63, 30, 10),
(64, 30, 16),
(65, 30, 17),
(66, 31, 11),
(67, 31, 16),
(68, 31, 17),
(69, 32, 18),
(70, 32, 19);

-- --------------------------------------------------------

--
-- Table structure for table `movie_galery`
--

CREATE TABLE `movie_galery` (
  `id` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_galery`
--

INSERT INTO `movie_galery` (`id`, `id_movie`, `id_img`) VALUES
(91, 25, 258),
(92, 25, 259),
(93, 25, 260),
(94, 25, 261),
(95, 25, 262),
(96, 25, 263),
(97, 26, 270),
(98, 26, 271),
(99, 26, 272),
(100, 26, 273),
(101, 26, 274),
(102, 26, 275),
(103, 27, 298),
(104, 27, 299),
(105, 27, 300),
(106, 27, 301),
(107, 27, 302),
(108, 27, 303),
(109, 28, 312),
(110, 28, 313),
(111, 28, 314),
(112, 28, 315),
(113, 28, 316),
(114, 28, 317),
(115, 29, 333),
(116, 29, 334),
(117, 29, 335),
(118, 29, 336),
(119, 29, 337),
(120, 29, 338),
(121, 30, 354),
(122, 30, 355),
(123, 30, 356),
(124, 30, 357),
(125, 30, 358),
(126, 30, 359),
(127, 31, 375),
(128, 31, 376),
(129, 31, 377),
(130, 31, 378),
(131, 31, 379),
(132, 31, 380),
(133, 32, 396),
(134, 32, 397),
(135, 32, 398),
(136, 32, 399),
(137, 32, 400),
(138, 32, 401);

-- --------------------------------------------------------

--
-- Table structure for table `movie_rating`
--

CREATE TABLE `movie_rating` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_rating`
--

INSERT INTO `movie_rating` (`id`, `id_user`, `id_movie`, `grade`) VALUES
(4, 7, 25, 5),
(5, 6, 31, 4),
(6, 6, 26, 5);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subscribtion`
--

CREATE TABLE `subscribtion` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `ac_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `email`, `password`, `active`, `ac_key`, `img_id`, `role_id`) VALUES
(4, 'Ignjat', 'Jokanovic', 'yyyzzx21', 'yyyzzx@gmail.com', '7db86e132ed35b3781a2bf4030f7860a', 1, '7db86e132ed35b3781a2bf4030f7860a', 171, 2),
(5, 'Pera', 'Peric', 'Nick', 'nekimejl@gmail.com', '7db86e132ed35b3781a2bf4030f7860a', 1, 'fd144f65f19df1c7adaa116c44ce2617', 172, 2),
(6, 'Ignjat', 'Jokanovic', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, '21232f297a57a5a743894a0e4a801fc3', 122, 1),
(7, 'Pera', 'Peric', 'cao', 'jokanovic.ignjat@gmail.com', '18452d47d97eb0f306c59ae38087fcb0', 1, '18452d47d97eb0f306c59ae38087fcb0', 266, 2),
(8, 'Ignjat', 'Jokanovic', 'cao1', 'cao@gmail.com', 'b012d246336ccdb8c261d0d39495bcbd', 0, 'b012d246336ccdb8c261d0d39495bcbd', 267, 2),
(9, 'Milos', 'Test', 'robodoom', 'markovic.ryte@gmail.com', '20a258b4e5b3d287013f417ff5968710', 1, 'be46d024598acb707bd7aa5ee0f6f692', 402, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_id` (`img_id`);

--
-- Indexes for table `actor_galery`
--
ALTER TABLE `actor_galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_actor` (`id_actor`),
  ADD KEY `id_img` (`id_img`);

--
-- Indexes for table `actor_rating`
--
ALTER TABLE `actor_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_actor` (`id_actor`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_actor`
--
ALTER TABLE `comment_actor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_actor` (`id_actor`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `comment_movie`
--
ALTER TABLE `comment_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_id` (`img_id`);

--
-- Indexes for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_actor` (`id_actor`),
  ADD KEY `id_movie` (`id_movie`);

--
-- Indexes for table `movie_category`
--
ALTER TABLE `movie_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_movie` (`id_movie`);

--
-- Indexes for table `movie_galery`
--
ALTER TABLE `movie_galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `id_img` (`id_img`);

--
-- Indexes for table `movie_rating`
--
ALTER TABLE `movie_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_movie` (`id_movie`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribtion`
--
ALTER TABLE `subscribtion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ac_key` (`ac_key`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `img_id` (`img_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `actor_galery`
--
ALTER TABLE `actor_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `actor_rating`
--
ALTER TABLE `actor_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment_actor`
--
ALTER TABLE `comment_actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1084;

--
-- AUTO_INCREMENT for table `comment_movie`
--
ALTER TABLE `comment_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `movie_actor`
--
ALTER TABLE `movie_actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `movie_category`
--
ALTER TABLE `movie_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `movie_galery`
--
ALTER TABLE `movie_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `movie_rating`
--
ALTER TABLE `movie_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribtion`
--
ALTER TABLE `subscribtion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor`
--
ALTER TABLE `actor`
  ADD CONSTRAINT `actor_ibfk_1` FOREIGN KEY (`img_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `actor_galery`
--
ALTER TABLE `actor_galery`
  ADD CONSTRAINT `actor_galery_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actor_galery_ibfk_2` FOREIGN KEY (`id_img`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `actor_rating`
--
ALTER TABLE `actor_rating`
  ADD CONSTRAINT `actor_rating_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `actor_rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_actor`
--
ALTER TABLE `comment_actor`
  ADD CONSTRAINT `comment_actor_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_actor_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_movie`
--
ALTER TABLE `comment_movie`
  ADD CONSTRAINT `comment_movie_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_movie_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`img_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD CONSTRAINT `movie_actor_ibfk_1` FOREIGN KEY (`id_actor`) REFERENCES `actor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_actor_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_category`
--
ALTER TABLE `movie_category`
  ADD CONSTRAINT `movie_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_category_ibfk_2` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_galery`
--
ALTER TABLE `movie_galery`
  ADD CONSTRAINT `movie_galery_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_galery_ibfk_2` FOREIGN KEY (`id_img`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movie_rating`
--
ALTER TABLE `movie_rating`
  ADD CONSTRAINT `movie_rating_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`img_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
