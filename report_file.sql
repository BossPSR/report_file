-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2020 at 06:24 PM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp486987_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(5) NOT NULL,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countryCode`, `countryName`) VALUES
(1, 'AD', 'Andorra'),
(2, 'AE', 'United Arab Emirates'),
(3, 'AF', 'Afghanistan'),
(4, 'AG', 'Antigua and Barbuda'),
(5, 'AI', 'Anguilla'),
(6, 'AL', 'Albania'),
(7, 'AM', 'Armenia'),
(8, 'AO', 'Angola'),
(9, 'AQ', 'Antarctica'),
(10, 'AR', 'Argentina'),
(11, 'AS', 'American Samoa'),
(12, 'AT', 'Austria'),
(13, 'AU', 'Australia'),
(14, 'AW', 'Aruba'),
(15, 'AX', 'Åland'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BA', 'Bosnia and Herzegovina'),
(18, 'BB', 'Barbados'),
(19, 'BD', 'Bangladesh'),
(20, 'BE', 'Belgium'),
(21, 'BF', 'Burkina Faso'),
(22, 'BG', 'Bulgaria'),
(23, 'BH', 'Bahrain'),
(24, 'BI', 'Burundi'),
(25, 'BJ', 'Benin'),
(26, 'BL', 'Saint Barthélemy'),
(27, 'BM', 'Bermuda'),
(28, 'BN', 'Brunei'),
(29, 'BO', 'Bolivia'),
(30, 'BQ', 'Bonaire, Sint Eustatius, and Saba'),
(31, 'BR', 'Brazil'),
(32, 'BS', 'Bahamas'),
(33, 'BT', 'Bhutan'),
(34, 'BV', 'Bouvet Island'),
(35, 'BW', 'Botswana'),
(36, 'BY', 'Belarus'),
(37, 'BZ', 'Belize'),
(38, 'CA', 'Canada'),
(39, 'CC', 'Cocos [Keeling] Islands'),
(40, 'CD', 'DR Congo'),
(41, 'CF', 'Central African Republic'),
(42, 'CG', 'Congo Republic'),
(43, 'CH', 'Switzerland'),
(44, 'CI', 'Ivory Coast'),
(45, 'CK', 'Cook Islands'),
(46, 'CL', 'Chile'),
(47, 'CM', 'Cameroon'),
(48, 'CN', 'China'),
(49, 'CO', 'Colombia'),
(50, 'CR', 'Costa Rica'),
(51, 'CU', 'Cuba'),
(52, 'CV', 'Cabo Verde'),
(53, 'CW', 'Curaçao'),
(54, 'CX', 'Christmas Island'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czechia'),
(57, 'DE', 'Germany'),
(58, 'DJ', 'Djibouti'),
(59, 'DK', 'Denmark'),
(60, 'DM', 'Dominica'),
(61, 'DO', 'Dominican Republic'),
(62, 'DZ', 'Algeria'),
(63, 'EC', 'Ecuador'),
(64, 'EE', 'Estonia'),
(65, 'EG', 'Egypt'),
(66, 'EH', 'Western Sahara'),
(67, 'ER', 'Eritrea'),
(68, 'ES', 'Spain'),
(69, 'ET', 'Ethiopia'),
(70, 'FI', 'Finland'),
(71, 'FJ', 'Fiji'),
(72, 'FK', 'Falkland Islands'),
(73, 'FM', 'Micronesia'),
(74, 'FO', 'Faroe Islands'),
(75, 'FR', 'France'),
(76, 'GA', 'Gabon'),
(77, 'GB', 'United Kingdom'),
(78, 'GD', 'Grenada'),
(79, 'GE', 'Georgia'),
(80, 'GF', 'French Guiana'),
(81, 'GG', 'Guernsey'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GL', 'Greenland'),
(85, 'GM', 'Gambia'),
(86, 'GN', 'Guinea'),
(87, 'GP', 'Guadeloupe'),
(88, 'GQ', 'Equatorial Guinea'),
(89, 'GR', 'Greece'),
(90, 'GS', 'South Georgia and South Sandwich Islands'),
(91, 'GT', 'Guatemala'),
(92, 'GU', 'Guam'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HK', 'Hong Kong'),
(96, 'HM', 'Heard Island and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HR', 'Croatia'),
(99, 'HT', 'Haiti'),
(100, 'HU', 'Hungary'),
(101, 'ID', 'Indonesia'),
(102, 'IE', 'Ireland'),
(103, 'IL', 'Israel'),
(104, 'IM', 'Isle of Man'),
(105, 'IN', 'India'),
(106, 'IO', 'British Indian Ocean Territory'),
(107, 'IQ', 'Iraq'),
(108, 'IR', 'Iran'),
(109, 'IS', 'Iceland'),
(110, 'IT', 'Italy'),
(111, 'JE', 'Jersey'),
(112, 'JM', 'Jamaica'),
(113, 'JO', 'Jordan'),
(114, 'JP', 'Japan'),
(115, 'KE', 'Kenya'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'KH', 'Cambodia'),
(118, 'KI', 'Kiribati'),
(119, 'KM', 'Comoros'),
(120, 'KN', 'St Kitts and Nevis'),
(121, 'KP', 'North Korea'),
(122, 'KR', 'South Korea'),
(123, 'KW', 'Kuwait'),
(124, 'KY', 'Cayman Islands'),
(125, 'KZ', 'Kazakhstan'),
(126, 'LA', 'Laos'),
(127, 'LB', 'Lebanon'),
(128, 'LC', 'Saint Lucia'),
(129, 'LI', 'Liechtenstein'),
(130, 'LK', 'Sri Lanka'),
(131, 'LR', 'Liberia'),
(132, 'LS', 'Lesotho'),
(133, 'LT', 'Lithuania'),
(134, 'LU', 'Luxembourg'),
(135, 'LV', 'Latvia'),
(136, 'LY', 'Libya'),
(137, 'MA', 'Morocco'),
(138, 'MC', 'Monaco'),
(139, 'MD', 'Moldova'),
(140, 'ME', 'Montenegro'),
(141, 'MF', 'Saint Martin'),
(142, 'MG', 'Madagascar'),
(143, 'MH', 'Marshall Islands'),
(144, 'MK', 'North Macedonia'),
(145, 'ML', 'Mali'),
(146, 'MM', 'Myanmar'),
(147, 'MN', 'Mongolia'),
(148, 'MO', 'Macao'),
(149, 'MP', 'Northern Mariana Islands'),
(150, 'MQ', 'Martinique'),
(151, 'MR', 'Mauritania'),
(152, 'MS', 'Montserrat'),
(153, 'MT', 'Malta'),
(154, 'MU', 'Mauritius'),
(155, 'MV', 'Maldives'),
(156, 'MW', 'Malawi'),
(157, 'MX', 'Mexico'),
(158, 'MY', 'Malaysia'),
(159, 'MZ', 'Mozambique'),
(160, 'NA', 'Namibia'),
(161, 'NC', 'New Caledonia'),
(162, 'NE', 'Niger'),
(163, 'NF', 'Norfolk Island'),
(164, 'NG', 'Nigeria'),
(165, 'NI', 'Nicaragua'),
(166, 'NL', 'Netherlands'),
(167, 'NO', 'Norway'),
(168, 'NP', 'Nepal'),
(169, 'NR', 'Nauru'),
(170, 'NU', 'Niue'),
(171, 'NZ', 'New Zealand'),
(172, 'OM', 'Oman'),
(173, 'PA', 'Panama'),
(174, 'PE', 'Peru'),
(175, 'PF', 'French Polynesia'),
(176, 'PG', 'Papua New Guinea'),
(177, 'PH', 'Philippines'),
(178, 'PK', 'Pakistan'),
(179, 'PL', 'Poland'),
(180, 'PM', 'Saint Pierre and Miquelon'),
(181, 'PN', 'Pitcairn Islands'),
(182, 'PR', 'Puerto Rico'),
(183, 'PS', 'Palestine'),
(184, 'PT', 'Portugal'),
(185, 'PW', 'Palau'),
(186, 'PY', 'Paraguay'),
(187, 'QA', 'Qatar'),
(188, 'RE', 'Réunion'),
(189, 'RO', 'Romania'),
(190, 'RS', 'Serbia'),
(191, 'RU', 'Russia'),
(192, 'RW', 'Rwanda'),
(193, 'SA', 'Saudi Arabia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SC', 'Seychelles'),
(196, 'SD', 'Sudan'),
(197, 'SE', 'Sweden'),
(198, 'SG', 'Singapore'),
(199, 'SH', 'Saint Helena'),
(200, 'SI', 'Slovenia'),
(201, 'SJ', 'Svalbard and Jan Mayen'),
(202, 'SK', 'Slovakia'),
(203, 'SL', 'Sierra Leone'),
(204, 'SM', 'San Marino'),
(205, 'SN', 'Senegal'),
(206, 'SO', 'Somalia'),
(207, 'SR', 'Suriname'),
(208, 'SS', 'South Sudan'),
(209, 'ST', 'São Tomé and Príncipe'),
(210, 'SV', 'El Salvador'),
(211, 'SX', 'Sint Maarten'),
(212, 'SY', 'Syria'),
(213, 'SZ', 'Eswatini'),
(214, 'TC', 'Turks and Caicos Islands'),
(215, 'TD', 'Chad'),
(216, 'TF', 'French Southern Territories'),
(217, 'TG', 'Togo'),
(218, 'TH', 'Thailand'),
(219, 'TJ', 'Tajikistan'),
(220, 'TK', 'Tokelau'),
(221, 'TL', 'Timor-Leste'),
(222, 'TM', 'Turkmenistan'),
(223, 'TN', 'Tunisia'),
(224, 'TO', 'Tonga'),
(225, 'TR', 'Turkey'),
(226, 'TT', 'Trinidad and Tobago'),
(227, 'TV', 'Tuvalu'),
(228, 'TW', 'Taiwan'),
(229, 'TZ', 'Tanzania'),
(230, 'UA', 'Ukraine'),
(231, 'UG', 'Uganda'),
(232, 'UM', 'U.S. Minor Outlying Islands'),
(233, 'US', 'United States'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VA', 'Vatican City'),
(237, 'VC', 'St Vincent and Grenadines'),
(238, 'VE', 'Venezuela'),
(239, 'VG', 'British Virgin Islands'),
(240, 'VI', 'U.S. Virgin Islands'),
(241, 'VN', 'Vietnam'),
(242, 'VU', 'Vanuatu'),
(243, 'WF', 'Wallis and Futuna'),
(244, 'WS', 'Samoa'),
(245, 'XK', 'Kosovo'),
(246, 'YE', 'Yemen'),
(247, 'YT', 'Mayotte'),
(248, 'ZA', 'South Africa'),
(249, 'ZM', 'Zambia'),
(250, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_admin` varchar(255) DEFAULT '' COMMENT '1// admin 2// superadmin 3//administrator'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `phone`, `username`, `password`, `created_at`, `is_admin`) VALUES
(1, 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', '94d2be2e13cce22e63f410e98d6d59a9', '2020-01-22 07:10:30', '2'),
(2, 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-20 03:48:48', '3'),
(3, 'infinityp.soft@gmail.com', '0618096661', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-20 04:14:25', '3'),
(4, 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-22 07:10:23', '3'),
(5, 'tt@gmail.com', '123123', 'a123', '202cb962ac59075b964b07152d234b70', '2020-01-20 03:48:51', '2'),
(6, 'test2@gmail.com', '0879874444', 'ทดสอบ รูปแบบที่ 2', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-22 07:10:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookmark`
--

CREATE TABLE `tbl_bookmark` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) DEFAULT '' COMMENT 'CM0001',
  `id_orderBuy` varchar(255) DEFAULT '' COMMENT 'OD0001',
  `id_document` varchar(255) DEFAULT '' COMMENT 'DM001',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bookmark`
--

INSERT INTO `tbl_bookmark` (`id`, `id_user`, `id_orderBuy`, `id_document`, `create_at`, `update_at`) VALUES
(4, 'CM4', 'OR-2', 'fdfdfd', '2020-02-07 11:50:40', NULL),
(5, 'CM4', 'OD6', 'r', '2020-02-07 11:52:10', NULL),
(6, 'CM4', 'OD9', 't-89', '2020-02-07 12:04:57', NULL),
(7, 'CM4', 'OD9', 't-89', '2020-02-07 12:12:00', NULL),
(8, 'CM4', 'OD9', 't-89', '2020-02-07 12:14:11', NULL),
(9, 'CM4', 'OD9', 't-89', '2020-02-07 12:16:17', NULL),
(10, 'CM4', 'OD9', 't-89', '2020-02-07 12:53:34', NULL),
(11, 'CM4', 'OD9', 't-89', '2020-02-07 14:01:14', NULL),
(12, 'CM4', 'OD17', 'V10000', '2020-02-07 16:23:10', NULL),
(13, 'CM4', 'OD9', 't-80', '2020-02-07 16:56:22', NULL),
(14, 'CM4', 'OD19', 't-80', '2020-02-07 17:32:29', NULL),
(15, 'CM4', 'OD19', 't-80', '2020-02-07 17:45:18', NULL),
(16, 'CM4', 'OD19', 't-80', '2020-02-07 17:47:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deposit`
--

CREATE TABLE `tbl_deposit` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `bill_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_deposit`
--

INSERT INTO `tbl_deposit` (`id`, `userId`, `price`, `status`, `create_at`, `update_at`, `note`, `bill_id`) VALUES
(1, 4, '100', 1, '2020-01-20 15:14:13', '2020-01-20 15:20:19', '-', 'DE-1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_follow`
--

CREATE TABLE `tbl_follow` (
  `id` int(11) NOT NULL,
  `sender_userId` int(11) DEFAULT NULL,
  `receiver_userId` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `upload_id` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `id` int(11) NOT NULL,
  `job_position` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_position`
--

CREATE TABLE `tbl_job_position` (
  `id` int(11) NOT NULL,
  `id_team` int(11) DEFAULT NULL,
  `job_position` varchar(150) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_position`
--

INSERT INTO `tbl_job_position` (`id`, `id_team`, `job_position`, `create_at`, `update_at`) VALUES
(1, 1, '1', '2020-01-16 14:50:18', NULL),
(2, 1, '3', '2020-01-16 14:50:18', NULL),
(3, 1, '4', '2020-01-16 14:50:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_f`
--

CREATE TABLE `tbl_order_f` (
  `id` int(11) NOT NULL,
  `order_main` varchar(255) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_f`
--

INSERT INTO `tbl_order_f` (`id`, `order_main`, `create_at`, `status`) VALUES
(1, 'OD1', '2020-02-05', 1),
(2, 'OD2', '2020-02-05', 1),
(3, 'OD3', '2020-02-07', 1),
(4, 'OD4', '2020-02-07', 1),
(5, 'OD5', '2020-02-07', 1),
(6, 'OD6', '2020-02-07', 1),
(7, 'OD7', '2020-02-07', 1),
(8, 'OD8', '2020-02-07', 1),
(9, 'OD9', '2020-02-07', 1),
(10, 'OD10', '2020-02-07', 1),
(11, 'OD11', '2020-02-07', 1),
(12, 'OD12', '2020-02-07', 1),
(13, 'OD13', '2020-02-07', 1),
(14, 'OD14', '2020-02-07', 1),
(15, 'OD15', '2020-02-07', 1),
(16, 'OD16', '2020-02-07', 1),
(17, 'OD17', '2020-02-07', 1),
(18, 'OD18', '2020-02-07', 1),
(19, 'OD19', '2020-02-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `title_pk` varchar(200) DEFAULT NULL,
  `price_pk` varchar(100) DEFAULT '',
  `description_pk` text,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `userId_pk` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `time_pk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `title_pk`, `price_pk`, `description_pk`, `created_at`, `update_at`, `userId_pk`, `status`, `time_pk`) VALUES
(1, 'Free', '0.00', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-01-06 00:00:00', NULL, NULL, 0, 'mo'),
(4, 'Annual', '10.00', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-01-06 00:00:00', NULL, NULL, 0, 'mo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paypal`
--

CREATE TABLE `tbl_paypal` (
  `id` int(11) NOT NULL,
  `orderID` varchar(255) NOT NULL,
  `payerID` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency_code` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `create_time` datetime NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `status_drop` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_paypal`
--

INSERT INTO `tbl_paypal` (`id`, `orderID`, `payerID`, `amount`, `currency_code`, `user_id`, `first_name`, `last_name`, `create_time`, `start_time`, `status_drop`) VALUES
(1, '04872538P9424894Y', 'J3GJEC9GX23VS', 10, 'USD', 4, 'John', 'Doe', '2020-01-28 16:53:19', '2020-02-27 16:53:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rejected`
--

CREATE TABLE `tbl_rejected` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `bookid_rj` int(11) DEFAULT NULL,
  `userId_rj` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rejected`
--

INSERT INTO `tbl_rejected` (`id`, `description`, `bookid_rj`, `userId_rj`, `create_at`, `updated_at`, `status`) VALUES
(7, '', 7, 5, '2020-01-06 16:50:55', NULL, 1),
(8, '', 7, 6, '2020-01-06 16:50:55', NULL, 1),
(9, '', 7, 7, '2020-01-06 16:50:55', NULL, 1),
(10, '', 7, 8, '2020-01-06 16:50:55', NULL, 1),
(11, '', 8, 6, '2020-01-07 15:30:45', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_select_item`
--

CREATE TABLE `tbl_select_item` (
  `id` int(11) NOT NULL,
  `name_item` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_select_item`
--

INSERT INTO `tbl_select_item` (`id`, `name_item`, `created_at`, `updated_at`) VALUES
(1, 'อาหาร', '2019-12-26 13:31:33', NULL),
(2, 'คณิตศาสตร์', '2019-12-26 18:02:22', NULL),
(3, 'ดาราศาสตร์', '2020-01-03 14:48:42', NULL),
(4, 'ภาษาไทย', '2020-01-03 14:48:48', NULL),
(5, 'อวกาศ', '2020-01-03 14:48:59', NULL),
(6, 'ดนตรี', '2020-01-03 14:49:10', NULL),
(7, 'การเมือง', '2020-01-03 14:51:22', NULL),
(8, 'รัฐบาล', '2020-01-03 14:51:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store_for_buy_email`
--

CREATE TABLE `tbl_store_for_buy_email` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `price_file` varchar(255) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `price_dis` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT '',
  `phone` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT '',
  `password` varchar(150) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0 == approve //  == non-approve'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `country_id`, `email`, `phone`, `name`, `password`, `file_name`, `created_at`, `update_at`, `status`) VALUES
(1, 218, 'famnoiii@gmail.com', '0968138751', 'Fam Worapong', 'e10adc3949ba59abbe56e057f20f883e', 'screencapture-file-G-Fam-E-backup-19-9-19-profile-profile-index-html-2020-01-06-19_08_028.png', '2020-01-16 14:50:17', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unlocks`
--

CREATE TABLE `tbl_unlocks` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `merchant_id` int(11) NOT NULL,
  `upload_id` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload`
--

CREATE TABLE `tbl_upload` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `select_item_id` int(11) NOT NULL,
  `search_item` varchar(255) DEFAULT '',
  `select_item` varchar(255) DEFAULT '',
  `code` text,
  `topic` text,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_upload`
--

INSERT INTO `tbl_upload` (`id`, `userId`, `select_item_id`, `search_item`, `select_item`, `code`, `topic`, `create_at`, `update_at`) VALUES
(4, 4, 1, 'อาหารไทย เมนูอาหาร สูตรอาหารง่ายๆ สำหรับคนรักการทำอาหาร', 'อาหาร', 'ZXC001', 'สำหรับคนรักการทำอาหาร', '2020-01-04 14:09:31', NULL),
(5, 4, 2, 'เอกสารสำคัญ - โปรแกรม ร้าน ค้า ปลีก', 'คณิตศาสตร์', 'ZXV33', 'โปรแกรม ร้าน ค้า ปลีก', '2020-01-04 14:10:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_main_search`
--

CREATE TABLE `tbl_upload_main_search` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `select_item_id` int(11) NOT NULL,
  `search_item` varchar(255) DEFAULT '',
  `select_item` varchar(255) DEFAULT '',
  `code` text,
  `topic` text,
  `upload_store_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_upload_main_search`
--

INSERT INTO `tbl_upload_main_search` (`id`, `userId`, `select_item_id`, `search_item`, `select_item`, `code`, `topic`, `upload_store_id`, `create_at`, `update_at`) VALUES
(1, 4, 2, 'G-Shock', 'คณิตศาสตร์', 'C76JB', '-----', 8, '2020-02-07 11:22:36', '2020-02-07 11:22:36'),
(2, 4, 3, 'T-5', 'ดาราศาสตร์', 'T-61', '---', 7, '2020-02-07 11:30:12', '2020-02-07 11:30:12'),
(3, 4, 7, 'G-Shock', 'การเมือง', '1000', '5485778', 9, '2020-02-07 12:01:40', '2020-02-07 12:01:40'),
(4, 4, 2, 'Y-88', 'คณิตศาสตร์', 'T88', 'wqe', 10, '2020-02-07 12:03:36', '2020-02-07 12:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_order`
--

CREATE TABLE `tbl_upload_order` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT '',
  `order_id` varchar(110) DEFAULT '' COMMENT 'OR00001',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `date_required` date DEFAULT NULL,
  `price_file` varchar(255) DEFAULT NULL,
  `status_book` int(11) DEFAULT '0' COMMENT '0// not 1//ture',
  `is_check` int(11) DEFAULT '0' COMMENT '0//not 1// ture',
  `note_reject` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_upload_order`
--

INSERT INTO `tbl_upload_order` (`id`, `userId`, `file_name`, `order_id`, `create_at`, `update_at`, `path`, `date_required`, `price_file`, `status_book`, `is_check`, `note_reject`) VALUES
(1, 4, 'shirt-1580109491.jpg', 'OR-1', '2020-02-03 10:09:48', NULL, 'uploads/Buy/shirt-1580109491.jpg', '2020-02-05', '', 0, 1, 'asdasdasdasd'),
(2, 4, 'shirt-1580439213.jpg', 'OR-2', '2020-02-03 10:09:48', NULL, 'uploads/Buy/shirt-1580439213.jpg', '2020-02-16', '200', 1, NULL, NULL),
(3, 4, '2.jpg', 'OR-3', '2020-02-03 16:11:12', NULL, 'uploads/Buy/2.jpg', '2020-02-14', '', 0, 1, 'not work'),
(4, 4, 'ใบเสร็จคุณเบิร์ด_(2).pdf', 'OD6', '2020-02-07 11:23:34', NULL, 'uploads/Buy/ใบเสร็จคุณเบิร์ด_(2).pdf', '2020-02-14', '200', 1, 0, NULL),
(12, 4, 'ใบวางบิลเว็บdeejungdelivery.com_13-01-25631.pdf', 'OD9', '2020-02-07 14:13:51', '2020-02-07 16:56:22', 'uploads/Buy/ใบวางบิลเว็บdeejungdelivery.com_13-01-25631.pdf', '0000-00-00', '100', 1, 0, NULL),
(13, 4, 'ใบเสร็จคุณเบิร์ด_(2)2.pdf', 'OD9', '2020-02-07 14:13:51', '2020-02-07 16:56:22', 'uploads/Buy/ใบเสร็จคุณเบิร์ด_(2)2.pdf', '0000-00-00', '100', 1, 0, NULL),
(14, 4, 'ใบเสร็จคุณเบิร์ด_(2)_(2).pdf', 'OD17', '2020-02-07 14:22:35', '2020-02-07 16:23:10', 'uploads/Buy/ใบเสร็จคุณเบิร์ด_(2)_(2).pdf', '2020-02-08', '1000', 1, 0, NULL),
(15, 4, 'ใบวางบิลเว็บdeejungdelivery.com_13-01-25632.pdf', 'OD17', '2020-02-07 14:22:35', '2020-02-07 16:23:10', 'uploads/Buy/ใบวางบิลเว็บdeejungdelivery.com_13-01-25632.pdf', '2020-02-08', '1000', 1, 0, NULL),
(16, 4, 'ใบวางบิลเว็บdeejungdelivery.com_13-01-25633.pdf', 'OD19', '2020-02-07 17:32:09', '2020-02-07 17:47:31', 'uploads/Buy/ใบวางบิลเว็บdeejungdelivery.com_13-01-25633.pdf', '2020-02-21', '10000', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_store`
--

CREATE TABLE `tbl_upload_store` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `store_id` varchar(110) DEFAULT '' COMMENT 'ST00001',
  `file_name` varchar(255) DEFAULT NULL,
  `is_check` int(5) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `price_file` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `status_cp` varchar(255) DEFAULT NULL,
  `status_main_search` tinyint(1) NOT NULL DEFAULT '0',
  `is_accept` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_upload_store`
--

INSERT INTO `tbl_upload_store` (`id`, `userId`, `store_id`, `file_name`, `is_check`, `create_at`, `update_at`, `path`, `price_file`, `note`, `grade`, `status_cp`, `status_main_search`, `is_accept`) VALUES
(1, 4, 'ST-1', 'sample-3pp.pdf', 0, '2020-01-31 10:27:53', NULL, 'uploads/Store/sample-3pp.pdf', NULL, 'TEST', 'A', NULL, 0, 1),
(2, 4, 'ST-2', 'sample-3pp.pdf', 0, '2020-02-04 12:17:36', NULL, 'uploads/Store/sample-3pp.pdf', NULL, 'TEST2', 'B', NULL, 0, 1),
(6, 4, 'OD3', 'UML_การทำงานระบบแจ้งเตือน.pdf', 1, '2020-02-07 11:01:54', NULL, 'uploads/Store/UML_การทำงานระบบแจ้งเตือน.pdf', NULL, NULL, NULL, NULL, 0, 1),
(7, 4, 'OD4', 'ใบเสนอราคาline_4_1_2563_.pdf', 1, '2020-02-07 11:03:09', NULL, 'uploads/Store/ใบเสนอราคาline_4_1_2563_.pdf', '20', NULL, 'B', 'complete', 1, 0),
(8, 4, 'OD5', 'ใบเสร็จคุณเบิร์ด2.pdf', 0, '2020-02-07 11:21:05', NULL, 'uploads/Store/ใบเสร็จคุณเบิร์ด2.pdf', '20', NULL, 'B', 'complete', 1, 0),
(9, 4, 'OD7', 'ใบเสร็จคุณเบิร์ด_(2).pdf', 0, '2020-02-07 12:01:17', NULL, 'uploads/Store/ใบเสร็จคุณเบิร์ด_(2).pdf', '50', NULL, 'A', 'complete', 1, 0),
(10, 4, 'OD8', 'บทนำ.pdf', 0, '2020-02-07 12:02:57', NULL, 'uploads/Store/บทนำ.pdf', '50', NULL, 'A', 'complete', 1, 0),
(11, 4, 'OD9', 'ใบวางบิลเว็บdeejungdelivery.com_13-01-2563.pdf', 0, '2020-02-07 17:31:50', NULL, 'uploads/Store/ใบวางบิลเว็บdeejungdelivery.com_13-01-2563.pdf', NULL, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `idUser` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `cash` int(11) NOT NULL DEFAULT '0',
  `score` int(11) DEFAULT '0',
  `email` varchar(255) DEFAULT '',
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `free_forever` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `idUser`, `passport`, `cash`, `score`, `email`, `phone`, `username`, `password`, `file_name`, `free_forever`, `created_at`) VALUES
(2, 'CM2', '1269900232221', 0, 0, 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', 0, '2020-02-04 06:56:11'),
(3, 'CM3', '123456789', 0, 0, 'infinityp.soft@gmail.com', '0618096661', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/1.png', 0, '2020-02-04 06:56:13'),
(4, 'CM4', '4444555666112', 150, 100, 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', 1, '2020-02-07 04:03:25'),
(5, 'CM5', '123123', 0, 0, 'tt@gmail.com', '123123', 'a123', '202cb962ac59075b964b07152d234b70', NULL, 0, '2020-02-04 06:56:17'),
(6, 'CM6', '987456123', 2, 0, 'test2@gmail.com', '0879874444', 'ทดสอบ รูปแบบที่ 2', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, '2020-02-04 06:56:20'),
(23, 'CM23', '1659900740516', 0, 0, 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, '2020-02-04 06:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_withdraw`
--

CREATE TABLE `tbl_withdraw` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT '1' COMMENT '1 = กำลังดำเนินการ , 2 = เสร็จสิ้น , 3 = ล้มเหลว',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `note` varchar(255) DEFAULT '-',
  `bill_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_withdraw`
--

INSERT INTO `tbl_withdraw` (`id`, `userId`, `price`, `status`, `create_at`, `update_at`, `note`, `bill_id`) VALUES
(1, 4, '150', 2, '2020-01-20 15:20:23', '2020-01-20 15:20:26', '-', 'WD-321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deposit`
--
ALTER TABLE `tbl_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_position`
--
ALTER TABLE `tbl_job_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_f`
--
ALTER TABLE `tbl_order_f`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_paypal`
--
ALTER TABLE `tbl_paypal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rejected`
--
ALTER TABLE `tbl_rejected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_select_item`
--
ALTER TABLE `tbl_select_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_store_for_buy_email`
--
ALTER TABLE `tbl_store_for_buy_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unlocks`
--
ALTER TABLE `tbl_unlocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload_main_search`
--
ALTER TABLE `tbl_upload_main_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload_order`
--
ALTER TABLE `tbl_upload_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_upload_store`
--
ALTER TABLE `tbl_upload_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_withdraw`
--
ALTER TABLE `tbl_withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_deposit`
--
ALTER TABLE `tbl_deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_position`
--
ALTER TABLE `tbl_job_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order_f`
--
ALTER TABLE `tbl_order_f`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_paypal`
--
ALTER TABLE `tbl_paypal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rejected`
--
ALTER TABLE `tbl_rejected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_select_item`
--
ALTER TABLE `tbl_select_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_store_for_buy_email`
--
ALTER TABLE `tbl_store_for_buy_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_unlocks`
--
ALTER TABLE `tbl_unlocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_upload_main_search`
--
ALTER TABLE `tbl_upload_main_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_upload_order`
--
ALTER TABLE `tbl_upload_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_upload_store`
--
ALTER TABLE `tbl_upload_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_withdraw`
--
ALTER TABLE `tbl_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
