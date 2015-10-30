-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2015 at 08:22 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dunsky`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(256) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`) VALUES
(1, 'Md. Mir Hossain', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `blog_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_id` int(2) NOT NULL,
  `blog_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `author_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `blog_short_description` text CHARACTER SET utf8 NOT NULL,
  `blog_long_description` text CHARACTER SET utf8 NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `category_id`, `blog_title`, `author_name`, `blog_short_description`, `blog_long_description`, `publication_status`, `created_date_time`) VALUES
(2, 5, 'জেএমবির সদস্য মিনহাজের তিন দিনের রিমান্ড', 'Md. Mir Hossain', '<p>\r\n নিষিদ্ধ জঙ্গি সংগঠন জামাআতুল মুজাহিদীন বাংলাদেশের (জেএমবি) সদস্য মিনহাজুল ইসলাম ওরফে সাজিল ওরফে সজীবের তিন দিনের রিমান্ড মঞ্জুর করেছেন আদালত।</p>\r\n<p>\r\n চট্টগ্রাম নগরের কর্ণফুলী থানায় সন্ত্রাস দমন আইনে করা একটি মামলার তদন্ত কর্মকর্তার আবেদনের পরিপ্রেক্ষিতে আজ রোববার বিকেলে মহানগর হাকিম মোহাম্মদ আবদুল কাদের শুনানি শেষে এ আদেশ দেন। বুলেটপ্রুফ জ্যাকেট ও হেলমেট পরিয়ে তাঁকে আদালতে হাজির করা হয়। তবে আদালতে তাঁর কোনো স্বজন বা আইনজীবী ছিলেন না।</p>\r\n', '<article class="jw_detail_content_holder content mb10 oh" itemscope="" itemtype="http://schema.org/Article">\r\n<div itemprop="articleBody">\r\n <p>\r\n  নিষিদ্ধ জঙ্গি সংগঠন জামাআতুল মুজাহিদীন বাংলাদেশের (জেএমবি) সদস্য মিনহাজুল ইসলাম ওরফে সাজিল ওরফে সজীবের তিন দিনের রিমান্ড মঞ্জুর করেছেন আদালত।</p>\r\n <p>\r\n  চট্টগ্রাম নগরের কর্ণফুলী থানায় সন্ত্রাস দমন আইনে করা একটি মামলার তদন্ত কর্মকর্তার আবেদনের পরিপ্রেক্ষিতে আজ রোববার বিকেলে মহানগর হাকিম মোহাম্মদ আবদুল কাদের শুনানি শেষে এ আদেশ দেন। বুলেটপ্রুফ জ্যাকেট ও হেলমেট পরিয়ে তাঁকে আদালতে হাজির করা হয়। তবে আদালতে তাঁর কোনো স্বজন বা আইনজীবী ছিলেন না।</p>\r\n <p>\r\n  গত বৃহস্পতিবার দিবাগত রাত দুইটার দিকে টাঙ্গাইলের নাগপুর থানার কেদারপুর এলাকা থেকে মিনহাজুলকে গ্রেপ্তার করে চট্টগ্রাম নগর গোয়েন্দা (ডিবি) পুলিশ। তাঁর বাড়ি মিরসরাই উপজেলার জোরারগঞ্জ থানার মধ্যম সোনাপাড়া এলাকায়। পরে মিনহাজকে গত ২৩ সেপ্টেম্বর নগরের সদরঘাটে ছিনতাইয়ের এবং ৫ অক্টোবর কর্ণফুলী থানার খোয়াজ নগর এলাকায় গ্রেনেড, অস্ত্র-গুলি উদ্ধারের ঘটনায় সন্ত্রাস দমন আইনে করা মামলায় গ্রেপ্তার দেখায় নগর ডিবি পুলিশ। এর মধ্যে ছিনতাইয়ের মামলায় দায় স্বীকার করে গতকাল শনিবার আদালতে জবানবন্দি দেন মিনহাজ।</p>\r\n <p>\r\n  নগর পুলিশের অতিরিক্ত উপকমিশনার (প্রসিকিউশন) কাজী মুত্তাকী ইবনু মিনান প্রথম আলোকে বলেন, গ্রেপ্তার মিনহাজকে জিজ্ঞাসাবাদ করতে কর্ণফুলী থানার সন্ত্রাসবিরোধী আইনের মামলায় ১০ দিনের রিমান্ডের আবেদন করেন মামলার তদন্ত কর্মকর্তা নগর ডিবি পুলিশের পরিদর্শক সত্যজিৎ বড়ুয়া। শুনানি শেষে আদালত তিন দিনের রিমান্ড মঞ্জুর করেন। শুনানি শেষে কড়া নিরাপত্তায় তাঁকে চট্টগ্রাম কেন্দ্রীয় কারাগারে নিয়ে যাওয়া হয়। সেখান থেকে ডিবি পুলিশ জিজ্ঞাসাবাদের জন্য তাঁকে নিয়ে যাবে।</p>\r\n</div>\r\n</article>', 1, '2015-10-18 14:12:18'),
(3, 10, 'আইফোনে দ্রুত চার্জ ফুরাচ্ছে?', 'Md. Mir Hossain', '<p>\r\n আইফোনে চার্জ দ্রুত শেষ হচ্ছে? এর জন্য দায়ী করতে পারেন ফেসবুককে। আইওএসের ফেসবুক অ্যাপ্লিকেশনটি সবচেয়ে বেশি চার্জ শেষ করে। ফেসবুক কর্তৃপক্ষও এ বিষয়টি জানে। ফেসবুক কর্তৃপক্ষের ভাষ্য, ব্যাটারি খেকো অ্যাপটি ঠিক করতে কাজ করছে তারা।<br />\r\n সাইবার নিরাপত্তা বিশেষজ্ঞ জোনাথান জিজারসকি ফেসবুকের অ্যাপটির কোড বিশ্লেষণ করে দেখেছেন, সক্রিয় না থাকলেও অ্যাপটি এর ব্র্যাক গ্রাউন্ডে আইফোনের জিপিএস ব্যবহার করে সব সময় ব্যবহারকারীর অবস্থান নজরদারি করতে থাকে।</p>\r\n', '<p>\r\n আইফোনে চার্জ দ্রুত শেষ হচ্ছে? এর জন্য দায়ী করতে পারেন ফেসবুককে। আইওএসের ফেসবুক অ্যাপ্লিকেশনটি সবচেয়ে বেশি চার্জ শেষ করে। ফেসবুক কর্তৃপক্ষও এ বিষয়টি জানে। ফেসবুক কর্তৃপক্ষের ভাষ্য, ব্যাটারি খেকো অ্যাপটি ঠিক করতে কাজ করছে তারা।<br />\r\n সাইবার নিরাপত্তা বিশেষজ্ঞ জোনাথান জিজারসকি ফেসবুকের অ্যাপটির কোড বিশ্লেষণ করে দেখেছেন, সক্রিয় না থাকলেও অ্যাপটি এর ব্র্যাক গ্রাউন্ডে আইফোনের জিপিএস ব্যবহার করে সব সময় ব্যবহারকারীর অবস্থান নজরদারি করতে থাকে।<br />\r\n ফেসবুক কর্তৃপক্ষ জানিয়েছে, যদি লোকেশন সেটিংস বন্ধ থাকে তাহলে এ সমস্যা হওয়ার কথা নয়। এটি বন্ধ থাকলে ব্র্যাক গ্রাউন্ডে অবস্থানগত তথ্য ফেসবুক সংগ্রহ করে না। লোকেশন হিস্ট্রি চালু থাকলেই কেবল ফেসবুক তথ্য সংগ্রহ করতে থাকে। এ জন্য দ্রুত ব্যাটারি শেষ হয়।</p>\r\n', 0, '2015-10-18 15:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogger`
--

CREATE TABLE IF NOT EXISTS `tbl_blogger` (
  `bolgger_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip_code` varchar(6) NOT NULL,
  PRIMARY KEY (`bolgger_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_blogger`
--

INSERT INTO `tbl_blogger` (`bolgger_id`, `first_name`, `last_name`, `email_address`, `password`, `mobile_no`, `address`, `gender`, `city`, `country`, `zip_code`) VALUES
(1, 'MIr', 'Hossain', 'admin@duet.ac.bd', '123456', '+8801737327171', 'dfsgsdfgd', 'Male', 'Dhaka', 'Bangladesh', '1280');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(11, 'Geo-Targeted DSM at National Grid: Assessing the Value Proposition ', 'Dunsky is excited to be assisting National Grid in addressing the value of geo-targeted demand-side management (DSM) in Massachusetts.\r\n\r\nIn an effort to defer capital investments in its distribution network, National Grid has started exploring opportunities to geographically target DSM, demand response and distributed generation measures. Dunsky was retained to assist National Grid in identifying the full suite of potential benefits of geo-targeted initiatives – both to the grid and to consumers – as well as to develop a robust cost-effectiveness methodology to properly account for them.\r\n\r\nOur research and experience across North America suggests that the value of DSM, on a per kWh or per kW basis, can vary considerably when examined on a local basis (in lieu of state-wide averages). Properly valuing benefits (while staying clear of double-counting) through the framework that we are developing for National Grid, can unlock win-win opportunities that might previously have gone unnoticed. In addition to providing a clear, practical path for our client’s immediate focus (deferral of a specific capital project), this work will act as a catalyst for National Grid as it develops its longer-term, comprehensive approach to geo-targeted DSM.\r\n', 1),
(12, 'Bringing Investor Ready Energy Efficiency™ to Canada', 'Uncertainty over the risks and returns related to energy efficiency retrofits often presents a major barrier to investors seeking opportunities in commercial buildings. Dunsky recently addressed this challenge by exploring the potential of adapting the U.S.-based Investor Confidence Project (ICP) to the Canadian marketplace.\r\n\r\nICP defines a clear road-map from retrofit opportunities to reliable Investor Ready Energy Efficiency™ projects. It combines existing industry standards and best practices, creating a consistent and transparent process that can increase confidence in energy efficiency investments, reduce transaction costs and facilitate access to capital.\r\n\r\nDunsky assisted the MaRS Discovery District’s Advanced Energy Centre by leading consultations with industry, collecting feedback and preparing a work plan to establish an ICP Canada strategy.  We also reviewed the existing ICP protocols, and identified where they can be adopted or adapted to fit the specific needs of the Canadian energy efficiency retrofit market.\r\n\r\nWe will continue to follow this important initiative closely, and look forward to seeing the first “ICP Canada” approved projects!\r\n', 1),
(13, 'What’s Cooking in Commercial Kitchens?', 'Dunsky Energy Consulting recently conducted a market analysis of commercial kitchen equipment (CKE) in order to help Natural Resources Canada (NRCan) understand the market’s distribution chain and develop a strategy to increase adoption of ENERGY STAR qualified CKE. The study covers nine product categories, including refrigeration, ware washing and cooking equipment.\r\n\r\nThe analysis shows that the CKE market is highly fragmented and composed of a large number of players across a variety of end-user segments (hospitals, universities, restaurant chains, hotels and grocery stores). Each segment differs in terms of who is responsible for purchasing decisions and how decisions are made, with each placing a different value on equipment functionality, after sales service, purchasing criteria, energy and resource savings, and myriad other criteria. This results in a composite supply chain and a complex decision-making process.\r\n\r\nThe market analysis provides a picture of the decision-making process for each end-user segment as well as a mapping of the level of each player and the major market and institutional barriers that prevent or lower the adoption of ENERGY STAR CKE. Incremental equipment costs, lack of visibility, split incentives / decision-making, and uncertainty regarding energy savings were among the most common barriers an effective program strategy must overcome.\r\n\r\nThe CKE market analysis is available here.\r\n\r\nBuilding upon our new understanding of the dynamics of this market, Dunsky is embarking on Phase II of the study where we will develop an integrated engagement strategy, aimed, of course, at increasing the market adoption of ENERGY STAR CKE.\r\n', 1),
(14, 'Bungee Jump for Amnesty', 'To do a bungee jump, you need nerves of steel. But to do the highest bungee jump in America, you also need… a good cause! By jumping into the void from the top of a 200-foot tower, our colleagues Philippe Dunsky and Francois Boulanger raised $2000 for Amnesty International, paying tribute to the men and women who, every day, face the unimaginable in their quest to be free. To see them in action (and to confirm that they really jumped!), watch this video.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `comments_id` int(6) NOT NULL AUTO_INCREMENT,
  `blog_id` int(5) NOT NULL,
  `comments_author_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `comments_author_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `comments_description` text CHARACTER SET utf8 NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comments_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comments_id`, `blog_id`, `comments_author_name`, `comments_author_email`, `comments_description`, `publication_status`) VALUES
(1, 3, 'Mir', 'm@yahoo.com', 'Hi all of you', 0),
(3, 3, 'Mir', 'm@yahoo.com', 'Hi how are you?', 0),
(4, 3, 'Mir', 'm@yahoo.com', 'Hi How are you', 1),
(5, 2, 'Mir', 'm@yahoo.com', 'gfhdfh ', 1),
(6, 2, 'Mir', 'm@yahoo.com', 'nxbnvbncb', 1),
(7, 2, 'Mir', 'm@yahoo.com', 'ghsdfghd', 0),
(8, 2, 'Mir', 'm@yahoo.com', 'bfzdbfcxvb\r\ngfhdfhgdfg', 0),
(10, 2, 'Mir', 'm@yahoo.com', 'dfghs dsgf dgdf', 0),
(11, 2, 'Mir', 'm@yahoo.com', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
