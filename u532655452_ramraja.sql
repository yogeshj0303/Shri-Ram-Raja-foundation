-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2025 at 05:51 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u532655452_ramraja`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(250) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ram Raja Foundation is a progressively organized, committed non-profit NGO consisting of a group of dedicated social workers, engineers, doctors, management experts, professors, trainers, and entrepreneurs who have pledged to help, develop, support, and facilitate the urban and rural community in the areas of poverty, education, health, agriculture, environment, watershed, and overall development in Uttar Pradesh and India. Earlier, the name of the Society was Jesus And Mary Educational Social Welfare Society, and it was changed on 09th January 2018 to Ram Raja Educational Social Welfare Society. Presently, the Society is a pioneer in the field of vocational training and other health awareness programs in Uttar Pradesh, especially in Ram Raja and surrounding districts, under the banner of the Society with the support of the State Government. These efforts are part of the promotion of health and allied health-related activities, along with dedicated initiatives in the field of education and literacy among youth and children under Samagra Swacchata Abhiyan. Various schemes from multiple departments have been implemented for the upliftment of education and literacy, supported by experts, trained staff, and trainers, with the cooperation of the Society’s body members. These efforts have contributed to the grand success of numerous training programs undertaken over the years. RAM RAJA EDUCATIONAL SOCIAL WELFARE SOCIETY is a voluntary non-profit, non-governmental organization formed in 2018 and registered as a society under Subsection (2) of Section with the Registrar of Firms and Societies, Uttar Pradesh. Ram Raja Foundation is registered with Registration, and works in various sectors of social welfare throughout the year.', '2025-02-17 00:55:17', '2025-02-18 05:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `link`, `created_at`, `updated_at`) VALUES
(4, 'https://youtu.be/zpFgVnKVTUc?si=mXAVWJQRaWGxhLu7', '2025-02-17 09:05:41', '2025-02-17 09:05:41'),
(5, 'https://youtube.com/shorts/AOJhTaQjqNw?si=WWaow4SEqcdF2tfo', '2025-02-17 04:53:48', '2025-02-17 04:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pin_no` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`, `pin_no`, `contact_no`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Sangam Vihar Awas Vikas Jhansi Uttar pradesh jhansi', '284002', '8423391421', 'shriramrajafoundationn@gmail.com', '2025-02-17 07:13:07', '2025-02-18 05:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `phone`, `country`, `password`, `role`, `photo`, `created_at`, `updated_at`, `remember_token`, `status`) VALUES
(1, 'Super Admin', 'admin', 'superadmin@gmail.com', '9876543212', 'Bahamas', '$2y$10$BG51IgX.m4SS4iovwrCXheaCXW1ta8d1bWZ.tHv4s3BELG2J1haWW', 'administrator', '1641974944u5.png', '2017-01-24 03:21:40', '2022-01-12 08:09:47', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `type` enum('script','banner') NOT NULL,
  `advertiser_name` varchar(255) DEFAULT NULL,
  `redirect_url` varchar(255) DEFAULT NULL,
  `banner_size` varchar(255) NOT NULL,
  `banner_file` varchar(255) DEFAULT NULL,
  `script` text DEFAULT NULL,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(250) NOT NULL,
  `awards_image` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `awards_image`, `created_at`, `updated_at`) VALUES
(1, '24-12-27-886419581.jpg', '2024-12-27 05:58:10', '2024-12-27 05:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `details`, `featured_image`, `source`, `views`, `created_at`, `updated_at`, `status`) VALUES
(10, 'Rally Event', '<b style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">Rally</b><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;is a form of&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Motorsport\" title=\"Motorsport\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif;\">motorsport</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;that takes place on public or private roads with modified production or specially built&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Street-legal_vehicle\" title=\"Street-legal vehicle\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif;\">road-legal cars</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">. It is distinguished by not running on a&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Race_track\" title=\"Race track\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif;\">circuit</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">, but instead in a point-to-point format in which participants and their co-drivers drive between set control points (</span><a href=\"https://en.wikipedia.org/wiki/Special_stage_(rallying)\" title=\"Special stage (rallying)\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif;\">special stages</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">), leaving at regular intervals from one or more start points. Rallies may be won by pure speed within the stages or alternatively by&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Regularity_rally\" title=\"Regularity rally\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif;\">driving to a predetermined ideal journey time</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\">&nbsp;within the stages.</span><br><div><span style=\"color: rgb(32, 33, 34); font-family: sans-serif;\"><br></span></div><div><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">The term \"rally\", as a branch of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Motorsport\" title=\"Motorsport\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">motorsport</a>, probably dates from the first&nbsp;<a href=\"https://en.wikipedia.org/wiki/Monte_Carlo_Rally\" title=\"Monte Carlo Rally\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Monte Carlo Rally</a>&nbsp;of January 1911. Until the late 1920s, few if any other events used the term.<sup id=\"cite_ref-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Rallying#cite_note-1\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup>&nbsp;Rallying itself can be traced back to the 1894&nbsp;<a href=\"https://en.wikipedia.org/wiki/Paris%E2%80%93Rouen_(motor_race)\" title=\"Paris–Rouen (motor race)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Paris–Rouen Horseless Carriage Competition</a>&nbsp;(<i>Concours des Voitures sans Chevaux</i>), sponsored by a Paris newspaper,&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Le_Petit_Journal_(newspaper)\" title=\"Le Petit Journal (newspaper)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Le Petit Journal</a></i>, which attracted considerable public interest and entries from leading manufacturers. Prizes were awarded to the vehicles by a jury based on the reports of the observers who rode in each car; the official winner was&nbsp;<a href=\"https://en.wikipedia.org/wiki/Albert_Lema%C3%AEtre\" title=\"Albert Lemaître\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Albert Lemaître</a>&nbsp;driving a 3&nbsp;hp&nbsp;<a href=\"https://en.wikipedia.org/wiki/Peugeot\" title=\"Peugeot\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Peugeot</a>, although the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Jules-Albert_de_Dion\" title=\"Jules-Albert de Dion\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><i>Comte</i>&nbsp;de Dion</a>&nbsp;had finished first, but his steam-powered vehicle was ineligible for the official competition.<sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Rallying#cite_note-2\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[2]</a></sup>&nbsp;This event led directly to a period of city-to-city road races in France and other European countries, which introduced many of the features found in later rallies: individual start times with cars running against the clock rather than head to head; time controls at the entry and exit points of towns along the way; road books and route notes; and driving over long distances on ordinary, mainly gravel, roads, facing hazards such as dust, traffic, pedestrians and farm animals.</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">The first of these great races was the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Paris%E2%80%93Bordeaux%E2%80%93Paris\" title=\"Paris–Bordeaux–Paris\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Paris–Bordeaux–Paris</a>&nbsp;race of June 1895, won by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Paul_Koechlin\" class=\"mw-redirect\" title=\"Paul Koechlin\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Paul Koechlin</a>&nbsp;in a Peugeot, despite arriving 11 hours after&nbsp;<a href=\"https://en.wikipedia.org/wiki/%C3%89mile_Levassor\" title=\"Émile Levassor\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Émile Levassor</a>&nbsp;in a Panhard et Levassor.<sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Rallying#cite_note-3\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[3]</a></sup>&nbsp;Levassor\'s time for the 1,178&nbsp;km (732&nbsp;mi) course, running virtually without a break, was 48 hours and 48 minutes, an average speed of 24&nbsp;km/h (15&nbsp;mph).<sup id=\"cite_ref-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Rallying#cite_note-4\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[4]</a></sup></p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">From 24 September-3 October 1895, the&nbsp;<i><a href=\"https://en.wikipedia.org/wiki/Automobile_Club_de_France\" class=\"mw-redirect\" title=\"Automobile Club de France\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Automobile Club de France</a></i>&nbsp;sponsored the longest race to date, a 1,710&nbsp;km (1,060&nbsp;mi) event, from&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bordeaux\" title=\"Bordeaux\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bordeaux</a>&nbsp;to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Agen\" title=\"Agen\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Agen</a>&nbsp;and back.<sup id=\"cite_ref-Grand_Prix_History_online_5-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Rallying#cite_note-Grand_Prix_History_online-5\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[5]</a></sup>&nbsp;Because it was held in ten stages, it can be considered the first rally. The first three places were taken by a Panhard, a Panhard, and a three-wheeler&nbsp;<a href=\"https://en.wikipedia.org/wiki/De_Dion-Bouton\" title=\"De Dion-Bouton\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">De Dion-Bouton</a>.<sup id=\"cite_ref-Grand_Prix_History_online_5-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/Rallying#cite_note-Grand_Prix_History_online-5\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[5]</a></sup></p></div>', 'ee3WhatsApp Image 2022-05-12 at 3.16.57 AM (2).jpeg', 'acttconnect.com', 67, '2022-01-11 11:28:17', '2024-11-08 21:25:43', 1),
(13, 'Women Empowerment', '<p style=\"margin-bottom: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: Montserrat, sans-serif; vertical-align: baseline; color: rgb(48, 48, 48); background-color: rgb(255, 254, 248);\">Women’s entrepreneurship doesn’t exist in a vacuum. Their surroundings may have direct and indirect impact on their aspirations, let alone on their enterprises. We recognize that it is important to overcome some of the worries for women and strengthen their environments so they can invest strongly into their dreams. We work on –</p><ol style=\"margin: 15px 0px; padding: 0px 0px 0px 25px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Montserrat, sans-serif; vertical-align: baseline; list-style: outside none; color: rgb(48, 48, 48); background-color: rgb(255, 254, 248);\"><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: inherit; vertical-align: baseline; position: relative; list-style-type: decimal;\">Creating a more gender equal discourse by integrating Gender Justice Training and Awareness (involving men of the families/communities).</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: inherit; vertical-align: baseline; position: relative; list-style-type: decimal;\">Strengthening Human Capabilities by investing in Health, Education and Nutrition Support for communities</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: inherit; vertical-align: baseline; position: relative; list-style-type: decimal;\">Protecting and managing natural resources/ecology to bolster communities’ bond with their natural environments.</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: inherit; vertical-align: baseline; position: relative; list-style-type: decimal;\">Addressing immediate needs such as water, hygiene, health and sanitation so women are able to focus on economic independence.</li><li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: inherit; vertical-align: baseline; position: relative; list-style-type: decimal;\">Improving financial literacy and</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 25px; font-family: inherit; vertical-align: baseline; position: relative; list-style-type: decimal;\">Linkages with social protection schemes of Government</li></ol>', 'q5jWhatsApp Image 2022-05-12 at 3.16.58 AM (1).jpeg', 'acttconnect.com', 50, '2022-01-11 11:34:49', '2024-12-11 21:54:34', 1),
(14, 'Schools', '<p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\"><i><b>The School Magazine</b></i>&nbsp;is a literary magazine for children which has been published continuously by the&nbsp;<a href=\"https://en.wikipedia.org/wiki/New_South_Wales_Department_of_Education_and_Communities\" class=\"mw-redirect\" title=\"New South Wales Department of Education and Communities\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">New South Wales Department of Education and Communities</a>&nbsp;in its many incarnations since its first issue in 1916. It was originally subtitled \'A Magazine of Literature for Our Boys and Girls\'.<sup id=\"cite_ref-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/School_Magazine#cite_note-1\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[1]</a></sup>&nbsp;Established during World War One, the magazine was intended to expand the range of reading material available to New South Wales primary school students. Stephen Henry Smith was the magazine\'s first editor, followed by Doris Chadwick, who held the position of editor from 1922 to 1959.<sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/School_Magazine#cite_note-2\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[2]</a></sup>&nbsp;Over its 100-year history, its editors have included some of the best known names of Australian children\'s literature:&nbsp;<a href=\"https://en.wikipedia.org/w/index.php?title=Noreen_Shelley&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Noreen Shelley (page does not exist)\" style=\"color: rgb(186, 0, 0); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Noreen Shelley</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Patricia_Wrightson\" title=\"Patricia Wrightson\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Patricia Wrightson</a>,&nbsp;<a href=\"https://en.wikipedia.org/w/index.php?title=Lilith_Norman&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Lilith Norman (page does not exist)\" style=\"color: rgb(186, 0, 0); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Lilith Norman</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Duncan_Ball\" title=\"Duncan Ball\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Duncan Ball</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Anna_Fienberg\" title=\"Anna Fienberg\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Anna Fienberg</a>, Jonathan Shaw and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tohby_Riddle\" title=\"Tohby Riddle\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Tohby Riddle</a>. The list of past and present editorial staff features many authors who have been recognised by awards or by popular acclaim: these include&nbsp;<a href=\"https://en.wikipedia.org/wiki/Joanne_Horniman\" title=\"Joanne Horniman\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Joanne Horniman</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dianne_Bates\" title=\"Dianne Bates\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Dianne Bates</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Cassandra_Golds\" title=\"Cassandra Golds\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Cassandra Golds</a>,&nbsp;<a href=\"https://en.wikipedia.org/w/index.php?title=Margrete_Lamond&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Margrete Lamond (page does not exist)\" style=\"color: rgb(186, 0, 0); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Margrete Lamond</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Geoffrey_McSkimming\" title=\"Geoffrey McSkimming\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Geoffrey McSkimming</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ursula_Dubosarsky\" title=\"Ursula Dubosarsky\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Ursula Dubosarsky</a>&nbsp;and Sue Murray. Some of the many illustrators are Kim Gamble,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tohby_Riddle\" title=\"Tohby Riddle\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Tohby Riddle</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Aaron_Blabey\" title=\"Aaron Blabey\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Aaron Blabey</a>, Stephen Axelsen, Noela Young, Craig Phillips, Sarah Davis] and David Legge. The&nbsp;<i>School Magazine</i>&nbsp;publishes four literary magazines for children:&nbsp;<i>Countdown</i>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/ISSN_(identifier)\" class=\"mw-redirect\" title=\"ISSN (identifier)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ISSN</a>&nbsp;<a rel=\"nofollow\" class=\"external text\" href=\"https://www.worldcat.org/search?fq=x0:jrnl&amp;q=n2:1440-4907\" style=\"color: rgb(51, 102, 187); background-image: url(\" w=\"\" resources=\"\" src=\"\" mediawiki.skinning=\"\" images=\"\" external-ltr.svg?59558\");=\"\" background-position:=\"\" right=\"\" center;=\"\" background-size:=\"\" initial;=\"\" background-repeat:=\"\" no-repeat;=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" padding-right:=\"\" 13px;\"=\"\">1440-4907</a>),&nbsp;<i>Blast Off</i>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/ISSN_(identifier)\" class=\"mw-redirect\" title=\"ISSN (identifier)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ISSN</a>&nbsp;<a rel=\"nofollow\" class=\"external text\" href=\"https://www.worldcat.org/search?fq=x0:jrnl&amp;q=n2:1440-4885\" style=\"color: rgb(51, 102, 187); background-image: url(\" w=\"\" resources=\"\" src=\"\" mediawiki.skinning=\"\" images=\"\" external-ltr.svg?59558\");=\"\" background-position:=\"\" right=\"\" center;=\"\" background-size:=\"\" initial;=\"\" background-repeat:=\"\" no-repeat;=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" padding-right:=\"\" 13px;\"=\"\">1440-4885</a>),&nbsp;<i>Orbit</i>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/ISSN_(identifier)\" class=\"mw-redirect\" title=\"ISSN (identifier)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ISSN</a>&nbsp;<a rel=\"nofollow\" class=\"external text\" href=\"https://www.worldcat.org/search?fq=x0:jrnl&amp;q=n2:1440-4893\" style=\"color: rgb(51, 102, 187); background-image: url(\" w=\"\" resources=\"\" src=\"\" mediawiki.skinning=\"\" images=\"\" external-ltr.svg?59558\");=\"\" background-position:=\"\" right=\"\" center;=\"\" background-size:=\"\" initial;=\"\" background-repeat:=\"\" no-repeat;=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" padding-right:=\"\" 13px;\"=\"\">1440-4893</a>) and&nbsp;<i>Touchdown</i>&nbsp;(<a href=\"https://en.wikipedia.org/wiki/ISSN_(identifier)\" class=\"mw-redirect\" title=\"ISSN (identifier)\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">ISSN</a>&nbsp;<a rel=\"nofollow\" class=\"external text\" href=\"https://www.worldcat.org/search?fq=x0:jrnl&amp;q=n2:1440-4877\" style=\"color: rgb(51, 102, 187); background-image: url(\" w=\"\" resources=\"\" src=\"\" mediawiki.skinning=\"\" images=\"\" external-ltr.svg?59558\");=\"\" background-position:=\"\" right=\"\" center;=\"\" background-size:=\"\" initial;=\"\" background-repeat:=\"\" no-repeat;=\"\" background-attachment:=\"\" background-origin:=\"\" background-clip:=\"\" padding-right:=\"\" 13px;\"=\"\">1440-4877</a>. Each 36-page full-colour magazine contains a mix of stories, plays, poetry, nonfiction articles, book reviews, puzzles, comic serials and other texts.</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">Published continually since February 1916, the&nbsp;<i>School Magazine</i>&nbsp;is the oldest magazine in Australia and the longest running literary magazine for children in the world.<sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a href=\"https://en.wikipedia.org/wiki/School_Magazine#cite_note-3\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">[3]</a></sup></p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">The magazine has thrived as a showpiece of original writing for children from authors in Australia, New Zealand, the US, India, the UK, and a number of Asian, Pacific and African nations.</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">The magazine has played and continues to play a role in fostering new talent in writing for children. In particular, it is the largest publisher of poetry for children in Australia. A number of children\'s writers and illustrators who are now justly celebrated were first published by The School Magazine, which still accepts unsolicited manuscripts.</p><p style=\"margin-top: 0.5em; margin-bottom: 0.5em; color: rgb(32, 33, 34); font-family: sans-serif;\">To foster literacy skills, the&nbsp;<i>School Magazine</i>&nbsp;also publishes Teaching Units, which offer lesson plans and worksheets to assist teachers in maximising the use of the literary material with their students.</p>', 'B4EWhatsApp Image 2022-05-12 at 3.17.00 AM (2).jpeg', 'acttconnect.com', 51, '2022-01-11 11:36:06', '2024-10-24 05:47:01', 1),
(15, 'स्वच्छ भारत अभियान', '<p style=\"margin-top: 0.5em; margin-bottom: 0.5em;\"><font color=\"#202122\" face=\"sans-serif\"><span style=\"font-size: 17.5px;\"><b>Swachh Bharat Abhiyan is a national level campaign launched by the Government of India with the objective of keeping the streets, roads and infrastructure clean and garbage clean. This campaign was launched on 2nd October, 2014. The Father of the Nation Mahatma Gandhi freed the country from slavery, but his dream of \'Clean India\' was not fulfilled. Mahatma Gandhi gave an excellent message to the nation by providing education to the people around him about maintaining cleanliness.</b></span></font><br></p>', 'e4mWhatsApp Image 2022-05-12 at 3.16.54 AM (1).jpeg', 'acttconnect.com', 31, '2022-05-13 19:43:39', '2024-10-23 14:37:24', 1),
(16, 'No Hunger', '<span style=\"color: rgba(0, 0, 0, 0.9); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Fira Sans&quot;, Ubuntu, Oxygen, &quot;Oxygen Sans&quot;, Cantarell, &quot;Droid Sans&quot;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Lucida Grande&quot;, Helvetica, Arial, sans-serif; font-size: 20px; white-space: pre-wrap;\">The aim of \"Aasra\" is to abolish Hunger issues through the hyperlocal distribution of food having connected 6+states of India. \r\n\r\n</span><span style=\"color: rgba(0, 0, 0, 0.9); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Fira Sans&quot;, Ubuntu, Oxygen, &quot;Oxygen Sans&quot;, Cantarell, &quot;Droid Sans&quot;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Lucida Grande&quot;, Helvetica, Arial, sans-serif; font-size: 20px; white-space: pre-wrap;\">Aasra </span><span style=\"color: rgba(0, 0, 0, 0.9); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Fira Sans&quot;, Ubuntu, Oxygen, &quot;Oxygen Sans&quot;, Cantarell, &quot;Droid Sans&quot;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Lucida Grande&quot;, Helvetica, Arial, sans-serif; font-size: 20px; white-space: pre-wrap;\">motivate people to donate food and encourage them to reduce the use of plastic with a tagline: #inspiringmillions \r\n\r\nThe organization provides a platform to the socially conscious youth for building a new model for serving humanity based on helping hand, humanity, love, and unity by donating food to the needy.\r\n\r\n</span><span style=\"color: rgba(0, 0, 0, 0.9); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Fira Sans&quot;, Ubuntu, Oxygen, &quot;Oxygen Sans&quot;, Cantarell, &quot;Droid Sans&quot;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Lucida Grande&quot;, Helvetica, Arial, sans-serif; font-size: 20px; white-space: pre-wrap;\">Aasra</span><span style=\"color: rgba(0, 0, 0, 0.9); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Fira Sans&quot;, Ubuntu, Oxygen, &quot;Oxygen Sans&quot;, Cantarell, &quot;Droid Sans&quot;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Lucida Grande&quot;, Helvetica, Arial, sans-serif; font-size: 20px; white-space: pre-wrap;\">has a team of over one hundred students, volunteers, and professionals who mentor and educate the youth across India and give them a better future, which will be benefiting them as well as the unprivileged society.\r\n\r\nSay No to Hunger with No Hunger Foundation\r\n\'\'We donate food to Hyperlocal\'\'</span><br>', 'z0pfood.jpeg', 'acttconnect.com', 48, '2022-05-13 19:46:26', '2024-12-10 10:41:39', 1),
(17, 'Environmental Tree Plantation', '<p style=\"margin-bottom: 0px; font-size: 16px; line-height: 1.625; font-family: Roboto, sans-serif;\"><span style=\"font-weight: 700; line-height: normal;\">Environmental Benefits of Tree Plantation</span></p><p style=\"margin-bottom: 0px; font-size: 16px; line-height: 1.625; font-family: Roboto, sans-serif;\">We all know that trees are like the lungs of the Earth. They breathe in the carbon dioxide in the air and exhale oxygen. Moreover, they provide habitat for birds and animals. But this is just too basic! To understand how tree plantation is essential for the planet, let’s look at these statistics:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 1.4rem; padding: 0px; list-style-position: initial; list-style-image: initial; line-height: 1.6; font-size: 16px; font-family: Roboto, sans-serif;\"><li>Carbon dioxide (CO2) is one of the main contributing factors to the greenhouse effect. Trees trap carbon dioxide from the atmosphere and use the carbohydrates in it for growth. In return, they exhale oxygen which is of utmost importance for a clean environment. According to&nbsp;a study, tens of thousands of crores tons of carbon is stored in the trees from the urban forests in India. Mature trees can&nbsp;absorb coarsely 21 kilograms of carbon dioxide in a year. In return, a mature tree releases oxygen which is enough to sustain two human beings.</li><li>Tree plantation can also help us in dealing with ozone layer depletion. They stand as an obstruction in the way of the harmful UV rays, thus protecting us from its side-effects.</li><li>Trees&nbsp;reduce urban water overflow&nbsp;and erosion by storing water and breaking the force of rainfalls. In America, according to a report given by the&nbsp;USDA, 100 mature trees can reduce rainwater overflow up to 3,75,000 litres! If these are the statistics in America, imagine how much it can be helpful in case of Indian cities. If we plant more and more trees in our cities and villages, we can save all the water that runs down the concrete road and finally goes in vain. We can also stop a great amount of soil erosion which takes place due to lack of enough trees.</li><li>Tree plantation can also help in reduction of noise pollution in the crowded noisy cities and towns. Trees&nbsp;absorb sound and reduce noise density. Thus, tree plantation is especially important for areas where people live near freeways. According to a study, a group of trees can reduce noise pollution by about 10 decibels.</li><li>Besides this, the shade of the trees cools down the air and reduce the “Heat Island” effect. Planting trees and other vegetation can help reduce the urban heat island effect and deal with the constantly mounting hazard of global warming.</li></ul>', '11gWhatsApp Image 2022-05-12 at 3.17.02 AM (2).jpeg', 'acttconnect.com', 133, '2022-05-13 19:52:27', '2024-12-27 07:51:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `logo`, `status`) VALUES
(3, 'Io1519468640zbrand.png', 1),
(4, '601519468648zbrand.png', 1),
(5, 'oX1519468660zbrand.png', 1),
(6, 'uZ1519468670zbrand.png', 1),
(7, 'JB1519468717zbrand.png', 1),
(8, 'jn1519468725zbrand.png', 1),
(9, 'Ee1519468732zbrand.png', 1),
(10, 'WQ1519468743zbrand.png', 1),
(12, 'kn1641975533home.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(250) NOT NULL,
  `campaigns_title` varchar(250) NOT NULL,
  `campaigns_image` varchar(250) NOT NULL,
  `campaigns_desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `campaigns_title`, `campaigns_image`, `campaigns_desc`, `created_at`, `updated_at`) VALUES
(1, 'Student\'s Education', '24-12-27-319060627.jpg', 'Several interventions have been implemented across higher education institutions with the aim of reducing the prevalence...', '2024-12-27 03:38:18', '2024-12-27 03:38:18'),
(2, 'Sports', '24-12-27-101427073.jpg', 'By means of the mobility and hearing aids project, Ratna Nidhi Charitable trust aims to bequeath a new life to each of t..', '2024-12-27 03:38:40', '2024-12-27 03:38:40'),
(3, 'Rally', '24-12-27-905476737.jpg', 'Rally is a form of motorsport that takes place on public or private roads with modified production or spe......', '2024-12-27 03:39:03', '2024-12-27 03:39:03'),
(4, 'Career Guide', '24-12-27-104273887.jpg', 'We all require some advice sometime or the other. When it comes to our careers, everyone hopes and wishes for the best. ...', '2024-12-27 03:43:12', '2024-12-27 03:43:12'),
(5, 'Women Empowerment', '24-12-27-414814707.jpg', 'Women’s entrepreneurship doesn’t exist in a vacuum. Their surroundings may have direct and indirect impact on their...', '2024-12-27 03:43:36', '2024-12-27 03:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image`, `status`) VALUES
(19, 'Nonprofit', 'nonprofit', 'ZkrIMG_20140423_093840.jpg', 1),
(20, 'Awareness', 'Awareness', 'tdOAwareness program.jpeg', 1),
(21, 'Foods', 'foods', 'Z8uIMG_3145.jpg', 1),
(22, 'Health', 'health', '1RDdownload.jpg', 1),
(23, 'Travel', 'travel', 'l6LIMG_20140409_092426.jpg', 1),
(25, 'Sport', 'sport', 'Mcccontent_balapan-karung.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `code_scripts`
--

CREATE TABLE `code_scripts` (
  `id` int(11) NOT NULL,
  `google_analytics` text NOT NULL,
  `meta_keys` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `code_scripts`
--

INSERT INTO `code_scripts` (`id`, `google_analytics`, `meta_keys`) VALUES
(1, '<script>\r\n   //Google Analytics Scriptfffffffffffffffffffffffssssfffffs\r\n</script>', 'Genius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,Sea');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `number` text NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `number`, `message`, `created_at`, `updated_at`) VALUES
(2, 'PANKAJ yadav', 'py9091@gmail.com', 'For Participating', '84233914255', 'Gzgshjckfjs', '2025-01-17 19:03:22', '2025-01-17 19:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `type` enum('referral','browser') NOT NULL DEFAULT 'referral',
  `referral` varchar(255) DEFAULT NULL,
  `total_count` int(11) NOT NULL DEFAULT 0,
  `todays_count` int(11) NOT NULL DEFAULT 0,
  `today` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `type`, `referral`, `total_count`, `todays_count`, `today`) VALUES
(1, 'referral', 'www.facebook.com', 10, 0, NULL),
(2, 'referral', 'geniusocean.com', 2, 0, NULL),
(3, 'browser', 'Windows 10', 2870, 0, NULL),
(4, 'browser', 'Linux', 183, 0, NULL),
(5, 'browser', 'Unknown OS Platform', 1502, 0, NULL),
(6, 'browser', 'Windows 7', 240, 0, NULL),
(7, 'referral', 'yandex.ru', 2, 0, NULL),
(8, 'browser', 'Windows 8.1', 76, 0, NULL),
(9, 'referral', 'www.google.com', 56, 0, NULL),
(10, 'browser', 'Android', 892, 0, NULL),
(11, 'browser', 'Mac OS X', 642, 0, NULL),
(12, 'browser', 'iPhone', 65, 0, NULL),
(13, 'referral', NULL, 24, 0, NULL),
(14, 'browser', 'Ubuntu', 16, 0, NULL),
(15, 'referral', 'www.dareboost.com', 4, 0, NULL),
(16, 'browser', 'Windows Server 2003/XP x64', 1, 0, NULL),
(17, 'referral', 'com.google.android.googlequicksearchbox', 11, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `donator_name` varchar(255) NOT NULL,
  `donator_email` varchar(255) NOT NULL,
  `donator_phone` varchar(15) NOT NULL,
  `donator_address` text NOT NULL,
  `donator_city` varchar(255) NOT NULL,
  `screen_shot` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(250) NOT NULL,
  `event_title` varchar(250) NOT NULL,
  `event_desc` text NOT NULL,
  `event_image` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_desc`, `event_image`, `created_at`, `updated_at`) VALUES
(1, 'Rally Event', 'Rally is a form of motorsport that takes place on public or private roads with modified production or speciall', '24-12-27-1740271303.jfif', '2024-12-27 01:40:51', '2024-12-27 01:50:08'),
(2, 'Women Empowerment', 'Women’s entrepreneurship doesn’t exist in a vacuum. Their surroundings may have direct and indirect impact on their aspir', '24-12-27-1656858604.jfif', '2024-12-27 01:55:47', '2024-12-27 01:55:47'),
(3, 'Schools', 'The School Magazine is a literary magazine for children which has been published continuously by the New South Wale', '24-12-27-2125897812.jfif', '2024-12-27 01:57:11', '2024-12-27 01:57:11'),
(4, 'स्वच्छ भारत अभियान', 'Swachh Bharat Abhiyan is a national level campaign launched by the Government of India with the objective of keeping the stre', '24-12-27-434606049.jfif', '2024-12-27 01:57:38', '2024-12-27 01:57:38'),
(5, 'No Hunger', 'The aim of \"Shri Ram Raja Foundation\" is to abolish Hunger issues through the hyperlocal distribution of food having connected 6+states of India', '24-12-27-328691994.jfif', '2024-12-27 01:57:57', '2025-02-13 02:45:54'),
(6, 'Child Rights', 'The aim of \"Shri Ram Raja Foundation\" is to abolish Hunger issues through the hyperlocal distribution of food having connected 6+states of India', '24-12-27-1464107568.jfif', '2024-12-27 01:58:18', '2025-02-13 02:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `wimage` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `wimage`, `status`) VALUES
(7, 'Student Welfare', 'The findings reported herein provide the basis of several recommendations for intervention through teaching practice and university policy change to reduce the prevalence of plagiarism within higher education institutions.', '1642495704.JPG', 1),
(8, 'Society welfare', 'We all require some advice sometime or the other. When it comes to our careers, everyone hopes and wishes for the best. The facet of life is that at you have to work hard to get to where you would hope and wish to be.', '1642495811.JPG', 1),
(9, 'Women Empowerment', 'Women’s entrepreneurship doesn’t exist in a vacuum. Their surroundings may have direct and indirect impact on their aspirations, let alone on their enterprises.', '1642495904.JPG', 1),
(10, 'Career Guide', 'We all require some advice sometime or the other. When it comes to our careers, everyone hopes and wishes for the best. The facet of life is that at you have to work hard to get to where you would hope and wish to be.', '1642496025.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `packageid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `packageid`, `image`) VALUES
(10, 5, 'ql1493393791single_blog-img1.png'),
(11, 5, 'L91493393791single_blog-img2.png'),
(12, 5, '9H1493393791single_blog-img3.png'),
(13, 8, 'Nu14935510431-min.jpg'),
(14, 8, '8k14935510432-min.jpg'),
(15, 8, 'xE14935510433-min.jpg'),
(16, 8, 'CI14935510434-min.jpg'),
(17, 8, 'Oc14935510435-min.jpg'),
(18, 8, 'qo14935510436-min.jpg'),
(19, 9, 'fg14935513162-min.jpg'),
(20, 9, 'yw14935513163-min.jpg'),
(21, 9, 'W114935513164-min.jpg'),
(22, 9, 'Ri14935513165-min.jpg'),
(23, 9, 'Fu14935513166-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(250) NOT NULL,
  `type` enum('gallery','video') NOT NULL,
  `file_path` varchar(250) DEFAULT NULL,
  `video_link` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `type`, `file_path`, `video_link`, `created_at`, `updated_at`) VALUES
(3, 'gallery', '24-12-27-1908798945.jpg', NULL, '2024-12-27 05:33:19', '2024-12-27 05:33:19'),
(4, 'gallery', '24-12-27-1173255523.jpg', NULL, '2024-12-27 05:33:32', '2024-12-27 05:33:32'),
(5, 'gallery', '24-12-27-113142813.jpg', NULL, '2024-12-27 05:33:43', '2024-12-27 05:33:43'),
(6, 'gallery', '24-12-27-365758678.jpg', NULL, '2024-12-27 05:33:54', '2024-12-27 05:33:54'),
(7, 'gallery', '24-12-27-163135565.jpg', NULL, '2024-12-27 05:34:05', '2024-12-27 05:34:05'),
(8, 'gallery', '24-12-27-1498064456.jpg', NULL, '2024-12-27 05:34:16', '2024-12-27 05:34:16'),
(9, 'gallery', '24-12-27-204489891.jpg', NULL, '2024-12-27 05:34:27', '2024-12-27 05:34:27'),
(10, 'gallery', '24-12-27-753611197.jpg', NULL, '2024-12-27 05:34:37', '2024-12-27 05:34:37'),
(11, 'gallery', '24-12-28-811480845.jpg', NULL, '2024-12-28 02:06:25', '2024-12-28 02:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_settings`
--

CREATE TABLE `page_settings` (
  `id` int(11) NOT NULL,
  `contact` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact_email` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `about` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `faq` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `welcome_title` varchar(255) DEFAULT NULL,
  `welcome_image` varchar(255) DEFAULT NULL,
  `welcome_description` text DEFAULT NULL,
  `welcome_link` text DEFAULT NULL,
  `slider_status` int(11) DEFAULT 1,
  `split_status` int(11) DEFAULT 1,
  `welcome_status` int(11) DEFAULT 1,
  `service_status` int(11) DEFAULT 1,
  `category_status` int(11) DEFAULT 1,
  `counter_status` int(11) DEFAULT 1,
  `latest_status` int(11) DEFAULT 1,
  `featured_status` int(11) DEFAULT 1,
  `volunteer_status` int(11) DEFAULT 1,
  `portfolio_status` int(11) DEFAULT 1,
  `testimonial_status` int(11) DEFAULT 1,
  `blog_status` int(11) DEFAULT 1,
  `partners_status` int(11) DEFAULT 1,
  `home_reg_status` int(11) DEFAULT 1,
  `w_b_status` int(11) NOT NULL DEFAULT 1,
  `c_status` int(11) NOT NULL,
  `a_status` int(11) NOT NULL,
  `f_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `page_settings`
--

INSERT INTO `page_settings` (`id`, `contact`, `contact_email`, `about`, `faq`, `welcome_title`, `welcome_image`, `welcome_description`, `welcome_link`, `slider_status`, `split_status`, `welcome_status`, `service_status`, `category_status`, `counter_status`, `latest_status`, `featured_status`, `volunteer_status`, `portfolio_status`, `testimonial_status`, `blog_status`, `partners_status`, `home_reg_status`, `w_b_status`, `c_status`, `a_status`, `f_status`) VALUES
(1, 'Success! Thanks for contacting us, we will get back to you shortly.', 'admin@geniusocean.com', '<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:13.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\">AASRA&nbsp;\r\nis a progressively organized committed non-profit NGO consists a group of\r\nCommitted Social Workers, Engineers, Doctors, Management Experts, Professors,\r\nTrainers and Entrepreneurs who pledged to help, develop, support and facilitate\r\nthe Urban and rural community for the area of Poverty Education, ) health,\r\nAgriculture, Environment, Watershed and overall development in Uttar Pradesh\r\nand India.</span><span style=\"font-size: 9.5pt; font-family: Helvetica, \" sans-serif\";\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:13.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\">Earlier\r\nthe name of the Society was Jesus And Marry Educational Social Welfare Society\r\nand changed their name on 09 January 2018 to Aasra Educational Social\r\nWelfare Society.</span><span style=\"font-size: 9.5pt; font-family: Helvetica, \" sans-serif\";\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:13.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\"><br>\r\nPresently Society is pioneers in the field of Vocational Training and other\r\nrelated Health Av, awareness Programs in uttar Pradesh especially in the Aasra\r\nand Near Surroundings District under the banner of Society with the support of\r\nthe State Government under the Promotion of the Health and Allied\r\nHealth-related Activities along with dedicated activities in the field of\r\nEducation and Literacy related activities among Youth and Children under\r\nSamagra Swacchata Abhiyan, Under the various Schemes of various Department for\r\nthe upliftment of Education and Literacy among all with the Support of the\r\nExperts and Trained Staff and Trainers and Keep Co-operation of the Society\r\nBody members for the grand success of the Various Training Programs undertaken\r\nduring the various earlier years.</span><span style=\"font-size: 9.5pt; font-family: Helvetica, \" sans-serif\";\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:13.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\"><br>\r\nAASRA EDUCATIONAL SOCIAL WELFARE SOCIETY AASRA is a voluntary non-profit\r\nnon-government organization formed in 2018 and registered as a society under\r\nsub-section (2) of section 13 of the Uttar Pradesh Society Registration Act, 21, 1860 (R - 874) with Registrar or Firms and Societies Uttar Pradesh Aasra\r\nwith Registration No. J - 30632 Dated 09 th January 2018 and working in various\r\nSectors or Social Welfare through out the year.</span><span style=\"font-size: 9.5pt; font-family: Helvetica, \" sans-serif\";\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:13.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\"><br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--></span><span style=\"font-size: 9.5pt; font-family: Helvetica, \" sans-serif\";\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"font-size:18.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\">Our\r\nVision &amp; Mission --</span></b><span style=\"font-size: 9.5pt; font-family: Helvetica, \" sans-serif\";\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:13.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\">We\r\nseek a world of hope that is inclusive and just, where all people live in\r\ndignity and security.</span><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:13.0pt;font-family:\" arial\",\"sans-serif\";=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";color:#919191;background:#f9f9f9\"=\"\"><br>\r\nTo save lives, enable social protection and defeat poverty.</span><span style=\"font-size: 9.5pt; font-family: Helvetica, \" sans-serif\";\"=\"\"><o:p></o:p></span></p>', '<div>\r\n<h2>What is Lorem Ipsum, Really?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div><div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the\r\n readable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>\r\n</div><br><div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section \r\n1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is\r\n reproduced below for those interested. Sections 1.10.32 and 1.10.33 \r\nfrom \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in \r\ntheir exact original form, accompanied by English versions from the 1914\r\n translation by H. Rackham.</p>\r\n</div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', 'Welcome to Aasra NGO', '2x4Team Kamladevi.jpeg', 'Aasra Society NGO is a progressively organized committed non-profit NGO consists a group of Committed Social Workers, Engineers, Doctors, Management Experts, Professors, Trainers and Entrepreneurs who pledged to help, develop, support and facilitate the Urban and rural community for the area of Poverty Education, ) health, Agriculture, Environment, Watershed and overall development in Uttar Pradesh and India.\r\n\r\n\r\nEarlier the name of the Society was Jesus And Marry Educational Social Welfare Society and changed their name on 09 th January 2018 to Aasra  Welfare Society.', 'http://localhost/charityup/campaigns', 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `image`, `status`) VALUES
(5, 'Q0Sassra130.jpg.jpg', 1),
(6, 'W1Rassra131.jpg.jpg', 1),
(7, 'Soqaward2.jpg.jpg', 1),
(8, 'dQWassra12.jpg.jpg', 1),
(9, 'EzMassra5.jpg.jpg', 1),
(10, 'wdSassra3.jpg.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_titles`
--

CREATE TABLE `section_titles` (
  `id` int(11) NOT NULL,
  `service_title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `service_text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `category_title` varchar(255) DEFAULT NULL,
  `category_text` text DEFAULT NULL,
  `newcamp_title` varchar(255) DEFAULT NULL,
  `newcamp_text` text DEFAULT NULL,
  `pricing_title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pricing_text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `volunteer_title` varchar(255) DEFAULT NULL,
  `volunteer_text` text DEFAULT NULL,
  `portfolio_title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `portfolio_text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `testimonial_title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `testimonial_text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `section_titles`
--

INSERT INTO `section_titles` (`id`, `service_title`, `service_text`, `category_title`, `category_text`, `newcamp_title`, `newcamp_text`, `pricing_title`, `pricing_text`, `volunteer_title`, `volunteer_text`, `portfolio_title`, `portfolio_text`, `testimonial_title`, `testimonial_text`, `blog_title`, `blog_text`) VALUES
(1, 'Our Works', 'Kamla Devi NGO is working to bring\r\nholistic & sustainable changes in these feilds.', 'Campaign Categories', 'Campaign Categories', 'Campaigns', 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'Our Programs', 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'Our Volunteers', 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'Our Gallery', 'Our Gallery', 'Donate Us', 'When you give to you’re joining a movement of countless others with a shared belief that there should be no Child Hunger.', 'Latest Events', 'Latest Events');

-- --------------------------------------------------------

--
-- Table structure for table `service_section`
--

CREATE TABLE `service_section` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `service_section`
--

INSERT INTO `service_section` (`id`, `title`, `text`, `icon`, `status`) VALUES
(1, 'Health', 'Assisting in medical emergencies, reproductive, maternal, neonatal, child and adolescent healthcare', 'YuDdownload.jpg', 1),
(2, 'Education', 'Imparting 21st century skills like innovation, problem solving and leadership to adolescents.', 'zncdownload (1).jpg', 1),
(3, 'Livelihood', 'Developing a professional and entrepreneurial spirit among marginalised women and girls.', 'Mzodownload (2).jpg', 1),
(4, 'Women Empowerment', 'Individuals reached directly through livelihood interventions across 12 states, out of which 144,709 are women.', 'H70download (3).jpg', 1),
(5, 'Privilege Children', 'Join hands with Kamla Devi to ensure that #ShikshaNaRuke – education does not stop for any child. Donate to help these little dreamers continue their education.', 'clPdownload (4).jpg', 1),
(6, 'qwer', NULL, 'eQF5.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `currency_sign` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `paypal_business` varchar(255) NOT NULL,
  `stripe_key` varchar(255) DEFAULT NULL,
  `stripe_secret` varchar(255) DEFAULT NULL,
  `success_msg` text DEFAULT NULL,
  `withdraw_charge` int(11) NOT NULL DEFAULT 0,
  `paypal_donate` int(11) NOT NULL DEFAULT 1,
  `stripe_donate` int(11) NOT NULL DEFAULT 1,
  `anonym_donation` int(11) NOT NULL DEFAULT 1,
  `theme_color` varchar(255) DEFAULT NULL,
  `css_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `title`, `url`, `about`, `address`, `phone`, `fax`, `email`, `footer`, `background`, `currency_sign`, `currency_code`, `paypal_business`, `stripe_key`, `stripe_secret`, `success_msg`, `withdraw_charge`, `paypal_donate`, `stripe_donate`, `anonym_donation`, `theme_color`, `css_file`) VALUES
(1, 'logo1.png', 'Kamla Devi_Logo.png', 'Aasra Society', 'Fuckcccccc', '<span style=\"color: rgb(102, 102, 102); font-family: Montserrat, sans-serif; font-size: 16px;\">KAMLADEVI&nbsp; is a progressively organized committed non-profit NGO consists a group of Committed Social Workers, Engineers, Doctors, Management Experts, Professors, Trainers and Entrepreneurs who pledged to help, develop, support and facilitate the Urban and rural community for the area of Poverty Education, ) health, Agriculture, Environment, Watershed and overall development in Madhya Pradesh and India. Earlier the name of the Society was Jesus And Marry Educational Social Welfare Society and changed their name on 12 December 2013 to KamlaDevi Educational Social Welfare Society.</span><br>', 'Plot No. 176, Narayan Nagar, Above Bharat Gas Agency, Hoshangabad Road, Bhopal (M.P) - 462026', '9301014576', '0755-4902290', 'bhupendra.kdsw@gmail.com', 'COPYRIGHT 2022- acttconnect.com', 'back3.png', 'Rs.', 'INS', 'shaon143-facilitator-1@gmail.com', 'pk_test_bD5Si0msHNV75sd5R71jSJFb', 'sk_test_r7zxASOuYYCiuT3svkUtuh6W', '<h1 class=\"text-center\" style=\"color: green\">Payment Success.<br> Thank You !!</h1>\n                        <h2>Your Donation Received Successfully.</h2>', 10, 1, 1, 0, '#288000', 'genius1.css');

-- --------------------------------------------------------

--
-- Table structure for table `site_language`
--

CREATE TABLE `site_language` (
  `id` int(11) NOT NULL,
  `home` varchar(255) DEFAULT NULL,
  `about_us` varchar(255) DEFAULT NULL,
  `contact_us` varchar(255) DEFAULT NULL,
  `faq` varchar(255) DEFAULT NULL,
  `log_in` varchar(255) DEFAULT NULL,
  `sign_up` varchar(255) DEFAULT NULL,
  `my_account` varchar(255) DEFAULT NULL,
  `forgot_password` varchar(255) DEFAULT NULL,
  `campaigns` varchar(255) DEFAULT NULL,
  `running_campaigns` varchar(255) DEFAULT NULL,
  `completed_campaigns` varchar(255) DEFAULT NULL,
  `donations` varchar(255) DEFAULT NULL,
  `funded` varchar(255) DEFAULT NULL,
  `campaign_details` varchar(255) DEFAULT NULL,
  `donate` varchar(255) DEFAULT NULL,
  `goal` varchar(255) DEFAULT NULL,
  `days_left` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `withdraw` varchar(255) DEFAULT NULL,
  `settings` varchar(255) DEFAULT NULL,
  `transactions` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `subscribe` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_us_today` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `submit` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dashboard` varchar(255) DEFAULT NULL,
  `update_profile` varchar(255) DEFAULT NULL,
  `change_password` varchar(255) DEFAULT NULL,
  `latest_blogs` varchar(255) DEFAULT NULL,
  `recent_posts` varchar(255) DEFAULT NULL,
  `footer_links` varchar(255) DEFAULT NULL,
  `view_details` varchar(255) DEFAULT NULL,
  `blog` varchar(255) DEFAULT NULL,
  `api_documentation` varchar(255) DEFAULT NULL,
  `share_in_social` varchar(255) DEFAULT NULL,
  `donate_anonymous` varchar(255) DEFAULT NULL,
  `enter_details` varchar(255) DEFAULT NULL,
  `logout` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `site_language`
--

INSERT INTO `site_language` (`id`, `home`, `about_us`, `contact_us`, `faq`, `log_in`, `sign_up`, `my_account`, `forgot_password`, `campaigns`, `running_campaigns`, `completed_campaigns`, `donations`, `funded`, `campaign_details`, `donate`, `goal`, `days_left`, `created_by`, `dates`, `action`, `amount`, `withdraw`, `settings`, `transactions`, `total`, `subscription`, `subscribe`, `address`, `contact_us_today`, `street_address`, `phone`, `email`, `fax`, `submit`, `name`, `dashboard`, `update_profile`, `change_password`, `latest_blogs`, `recent_posts`, `footer_links`, `view_details`, `blog`, `api_documentation`, `share_in_social`, `donate_anonymous`, `enter_details`, `logout`) VALUES
(1, 'Home', 'About', 'Contact', 'What we Do', 'Log In', 'Join us', 'My Account', 'Forgot Password', 'Campaigns', 'Running Campaigns', 'Completed Campaigns', 'Donations', 'Funded', 'Campaign Details', 'Donate', 'Goal', 'Days Left', 'Created By', 'Date', 'Action', 'Amount', 'Withdraw', 'Settings', 'Transactions', 'Total', 'SUBSCRIBE TO OUR NEWSLETTER', 'Subscribe', 'Address', 'Contact Us Today!', 'Contact Info', 'Phone', 'Email', 'Fax', 'Submit', 'Name', 'Dashboard', 'Update Profile', 'Change Password', 'Latest Events', 'Recent Posts', 'Footer Links', 'Read More', 'Media-Centre', 'API Documantation', 'Share', 'Donate Anonymous', 'Enter Details', 'Logout');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `text_position` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `g_plus` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `f_status` enum('enable','disable') NOT NULL DEFAULT 'enable',
  `t_status` enum('enable','disable') NOT NULL DEFAULT 'enable',
  `g_status` enum('enable','disable') NOT NULL DEFAULT 'enable',
  `link_status` enum('enable','disable') NOT NULL DEFAULT 'enable'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `twiter`, `g_plus`, `linkedin`, `f_status`, `t_status`, `g_status`, `link_status`) VALUES
(1, 'https://www.facebook.com/profile.php?id=100076816193610', 'https://twitter.com/Kamladevingo', 'https://www.youtube.com/channel/UCRpAoy7Ibu4fzt391stEFqg', 'http://linkedin.com/', 'enable', 'disable', 'enable', 'disable');

-- --------------------------------------------------------

--
-- Table structure for table `split_section`
--

CREATE TABLE `split_section` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `split_section`
--

INSERT INTO `split_section` (`id`, `icon`, `title`, `text`, `status`) VALUES
(1, NULL, 'OUR VISION', '<span style=\"color: rgb(145, 145, 145); font-family: Roboto, sans-serif; font-size: 19.2px; text-align: right; background-color: rgb(249, 249, 249);\">We seek a world of hope that is inclusive and just, where all people live in dignity and security.</span><br>', 1),
(2, NULL, 'OUR MISSION', '<span style=\"color: rgb(145, 145, 145); font-family: Roboto, sans-serif; font-size: 19.2px; text-align: right; background-color: rgb(249, 249, 249);\">We seek a world of hope that is inclusive and just, where all people live in dignity and security.</span><br>', 1),
(3, NULL, 'DONATE US', '<span style=\"color: rgb(145, 145, 145); font-family: Roboto, sans-serif; font-size: 19.2px; text-align: right; background-color: rgb(249, 249, 249);\">We seek a world of hope that is inclusive and just, where all people live in dignity and security.</span><br><div></div>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`) VALUES
(1, 'shaoneel@gmail.com'),
(2, 'shaoneel@gmail.com'),
(3, 'knikhil7549@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `review` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `client` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `designation` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `review`, `client`, `designation`) VALUES
(6, 'Title 1', 'https://www.youtube.com/watch?v=dOXCLmR8TLY', NULL),
(7, 'Title 2', 'https://www.youtube.com/watch?v=KCVuplhRvZw', NULL),
(8, 'Title-3', 'https://www.youtube.com/watch?v=WArFN05xVX0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'actt@gmail.com', '$2y$12$w1NjCmOQlb4Sh4CFt6KSgOcc8FytB.y.AQ3PudL6rlGAACIxWt14C', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `name`, `gender`, `phone`, `fax`, `email`, `password`, `country`, `address`, `city`, `zip`, `created_at`, `updated_at`, `remember_token`, `status`) VALUES
(2, 'User Name', NULL, '2222256474', '324344', 'user@gmail.com', '$2y$10$PdI5luZqAmZyZWZxbjyvlu4R1s.wqMvjthk7we.lEK2X6VlVgWY3.', 'Argentina', 'sss', 'ssss', 'ssss', '2017-05-04 11:59:39', '2018-01-09 17:03:42', 'LUW3pzNOZh06ClQf5PL8XQXcTCMFtR4yLb806VjNhyGNY93as2RSNzc5t2Tf', 1),
(4, 'ShaOn Zaman', NULL, '0000000000', NULL, 'admiereeen@gmail.com', '$2y$10$Md6d/XYCWmWnNYF3pcDuM.F/siXbem.dzRCPG1EGsbptp0Z7WpY0y', NULL, NULL, NULL, NULL, '2018-01-07 16:09:53', '2018-01-07 16:09:53', NULL, 1),
(5, 'Badruddoza Chowdhury', NULL, '1745546773', NULL, 'badruddoza.me@gmail.com', '$2y$10$fWnomkdQxnGz6SY6Xv9OpuLDkC1jVrH..9uRC6ZoK132HBDmscZJu', NULL, NULL, NULL, NULL, '2018-02-25 13:14:07', '2022-01-04 11:37:29', NULL, 0),
(6, 'Priya Shrivastava', NULL, '08840460627', NULL, 'shrashri121@gmail.com', '$2y$10$G0t0NUUbBtMVOKAzaWh2OOVBOUDBnlKS3kVmzrXd7wZHVyERSE8H.', 'India', NULL, NULL, NULL, '2022-01-05 09:39:50', '2022-01-12 05:32:45', NULL, 1),
(7, 'Priya Shrivastava', NULL, '1234567890', NULL, 'abc@example.com', '$2y$10$4FjVJ8nePRmBZTWRDXcp5O1cLnYZzZp2lZTX35HEWIEyCMGrnz6ka', 'India', NULL, NULL, NULL, '2022-01-11 12:42:05', '2022-05-24 08:49:11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `occupation` text NOT NULL,
  `message` text NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `name`, `designation`, `photo`, `email`, `phone`, `address`, `occupation`, `message`, `facebook`, `google_plus`, `twitter`, `linkedin`, `status`) VALUES
(1, 'Priya Shrivastava', NULL, NULL, 'abc@example.com', '1234567890', 'Jhansi', 'asdfghj', 'wertyujm', NULL, NULL, NULL, NULL, NULL),
(2, 'Vivek  Anand', NULL, NULL, 'admin@gmail.com', '9301707998', 'ksjhf', 'kkwl', 's', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` int(11) NOT NULL,
  `campid` int(11) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `acc_email` varchar(255) DEFAULT NULL,
  `acc_phone` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `acc_name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `swift` varchar(255) DEFAULT NULL,
  `reference` text DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `fee` float DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` enum('pending','completed','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_section`
--
ALTER TABLE `service_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_section`
--
ALTER TABLE `service_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
