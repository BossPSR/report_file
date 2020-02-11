/*
Navicat MySQL Data Transfer

<<<<<<< HEAD
Source Server         : database
=======
Source Server         : db
>>>>>>> master
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

<<<<<<< HEAD
Date: 2020-02-11 21:06:57
=======
Date: 2020-02-11 15:46:27
>>>>>>> master
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `countries`
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO `countries` VALUES ('1', 'AD', 'Andorra');
INSERT INTO `countries` VALUES ('2', 'AE', 'United Arab Emirates');
INSERT INTO `countries` VALUES ('3', 'AF', 'Afghanistan');
INSERT INTO `countries` VALUES ('4', 'AG', 'Antigua and Barbuda');
INSERT INTO `countries` VALUES ('5', 'AI', 'Anguilla');
INSERT INTO `countries` VALUES ('6', 'AL', 'Albania');
INSERT INTO `countries` VALUES ('7', 'AM', 'Armenia');
INSERT INTO `countries` VALUES ('8', 'AO', 'Angola');
INSERT INTO `countries` VALUES ('9', 'AQ', 'Antarctica');
INSERT INTO `countries` VALUES ('10', 'AR', 'Argentina');
INSERT INTO `countries` VALUES ('11', 'AS', 'American Samoa');
INSERT INTO `countries` VALUES ('12', 'AT', 'Austria');
INSERT INTO `countries` VALUES ('13', 'AU', 'Australia');
INSERT INTO `countries` VALUES ('14', 'AW', 'Aruba');
INSERT INTO `countries` VALUES ('15', 'AX', 'Åland');
INSERT INTO `countries` VALUES ('16', 'AZ', 'Azerbaijan');
INSERT INTO `countries` VALUES ('17', 'BA', 'Bosnia and Herzegovina');
INSERT INTO `countries` VALUES ('18', 'BB', 'Barbados');
INSERT INTO `countries` VALUES ('19', 'BD', 'Bangladesh');
INSERT INTO `countries` VALUES ('20', 'BE', 'Belgium');
INSERT INTO `countries` VALUES ('21', 'BF', 'Burkina Faso');
INSERT INTO `countries` VALUES ('22', 'BG', 'Bulgaria');
INSERT INTO `countries` VALUES ('23', 'BH', 'Bahrain');
INSERT INTO `countries` VALUES ('24', 'BI', 'Burundi');
INSERT INTO `countries` VALUES ('25', 'BJ', 'Benin');
INSERT INTO `countries` VALUES ('26', 'BL', 'Saint Barthélemy');
INSERT INTO `countries` VALUES ('27', 'BM', 'Bermuda');
INSERT INTO `countries` VALUES ('28', 'BN', 'Brunei');
INSERT INTO `countries` VALUES ('29', 'BO', 'Bolivia');
INSERT INTO `countries` VALUES ('30', 'BQ', 'Bonaire, Sint Eustatius, and Saba');
INSERT INTO `countries` VALUES ('31', 'BR', 'Brazil');
INSERT INTO `countries` VALUES ('32', 'BS', 'Bahamas');
INSERT INTO `countries` VALUES ('33', 'BT', 'Bhutan');
INSERT INTO `countries` VALUES ('34', 'BV', 'Bouvet Island');
INSERT INTO `countries` VALUES ('35', 'BW', 'Botswana');
INSERT INTO `countries` VALUES ('36', 'BY', 'Belarus');
INSERT INTO `countries` VALUES ('37', 'BZ', 'Belize');
INSERT INTO `countries` VALUES ('38', 'CA', 'Canada');
INSERT INTO `countries` VALUES ('39', 'CC', 'Cocos [Keeling] Islands');
INSERT INTO `countries` VALUES ('40', 'CD', 'DR Congo');
INSERT INTO `countries` VALUES ('41', 'CF', 'Central African Republic');
INSERT INTO `countries` VALUES ('42', 'CG', 'Congo Republic');
INSERT INTO `countries` VALUES ('43', 'CH', 'Switzerland');
INSERT INTO `countries` VALUES ('44', 'CI', 'Ivory Coast');
INSERT INTO `countries` VALUES ('45', 'CK', 'Cook Islands');
INSERT INTO `countries` VALUES ('46', 'CL', 'Chile');
INSERT INTO `countries` VALUES ('47', 'CM', 'Cameroon');
INSERT INTO `countries` VALUES ('48', 'CN', 'China');
INSERT INTO `countries` VALUES ('49', 'CO', 'Colombia');
INSERT INTO `countries` VALUES ('50', 'CR', 'Costa Rica');
INSERT INTO `countries` VALUES ('51', 'CU', 'Cuba');
INSERT INTO `countries` VALUES ('52', 'CV', 'Cabo Verde');
INSERT INTO `countries` VALUES ('53', 'CW', 'Curaçao');
INSERT INTO `countries` VALUES ('54', 'CX', 'Christmas Island');
INSERT INTO `countries` VALUES ('55', 'CY', 'Cyprus');
INSERT INTO `countries` VALUES ('56', 'CZ', 'Czechia');
INSERT INTO `countries` VALUES ('57', 'DE', 'Germany');
INSERT INTO `countries` VALUES ('58', 'DJ', 'Djibouti');
INSERT INTO `countries` VALUES ('59', 'DK', 'Denmark');
INSERT INTO `countries` VALUES ('60', 'DM', 'Dominica');
INSERT INTO `countries` VALUES ('61', 'DO', 'Dominican Republic');
INSERT INTO `countries` VALUES ('62', 'DZ', 'Algeria');
INSERT INTO `countries` VALUES ('63', 'EC', 'Ecuador');
INSERT INTO `countries` VALUES ('64', 'EE', 'Estonia');
INSERT INTO `countries` VALUES ('65', 'EG', 'Egypt');
INSERT INTO `countries` VALUES ('66', 'EH', 'Western Sahara');
INSERT INTO `countries` VALUES ('67', 'ER', 'Eritrea');
INSERT INTO `countries` VALUES ('68', 'ES', 'Spain');
INSERT INTO `countries` VALUES ('69', 'ET', 'Ethiopia');
INSERT INTO `countries` VALUES ('70', 'FI', 'Finland');
INSERT INTO `countries` VALUES ('71', 'FJ', 'Fiji');
INSERT INTO `countries` VALUES ('72', 'FK', 'Falkland Islands');
INSERT INTO `countries` VALUES ('73', 'FM', 'Micronesia');
INSERT INTO `countries` VALUES ('74', 'FO', 'Faroe Islands');
INSERT INTO `countries` VALUES ('75', 'FR', 'France');
INSERT INTO `countries` VALUES ('76', 'GA', 'Gabon');
INSERT INTO `countries` VALUES ('77', 'GB', 'United Kingdom');
INSERT INTO `countries` VALUES ('78', 'GD', 'Grenada');
INSERT INTO `countries` VALUES ('79', 'GE', 'Georgia');
INSERT INTO `countries` VALUES ('80', 'GF', 'French Guiana');
INSERT INTO `countries` VALUES ('81', 'GG', 'Guernsey');
INSERT INTO `countries` VALUES ('82', 'GH', 'Ghana');
INSERT INTO `countries` VALUES ('83', 'GI', 'Gibraltar');
INSERT INTO `countries` VALUES ('84', 'GL', 'Greenland');
INSERT INTO `countries` VALUES ('85', 'GM', 'Gambia');
INSERT INTO `countries` VALUES ('86', 'GN', 'Guinea');
INSERT INTO `countries` VALUES ('87', 'GP', 'Guadeloupe');
INSERT INTO `countries` VALUES ('88', 'GQ', 'Equatorial Guinea');
INSERT INTO `countries` VALUES ('89', 'GR', 'Greece');
INSERT INTO `countries` VALUES ('90', 'GS', 'South Georgia and South Sandwich Islands');
INSERT INTO `countries` VALUES ('91', 'GT', 'Guatemala');
INSERT INTO `countries` VALUES ('92', 'GU', 'Guam');
INSERT INTO `countries` VALUES ('93', 'GW', 'Guinea-Bissau');
INSERT INTO `countries` VALUES ('94', 'GY', 'Guyana');
INSERT INTO `countries` VALUES ('95', 'HK', 'Hong Kong');
INSERT INTO `countries` VALUES ('96', 'HM', 'Heard Island and McDonald Islands');
INSERT INTO `countries` VALUES ('97', 'HN', 'Honduras');
INSERT INTO `countries` VALUES ('98', 'HR', 'Croatia');
INSERT INTO `countries` VALUES ('99', 'HT', 'Haiti');
INSERT INTO `countries` VALUES ('100', 'HU', 'Hungary');
INSERT INTO `countries` VALUES ('101', 'ID', 'Indonesia');
INSERT INTO `countries` VALUES ('102', 'IE', 'Ireland');
INSERT INTO `countries` VALUES ('103', 'IL', 'Israel');
INSERT INTO `countries` VALUES ('104', 'IM', 'Isle of Man');
INSERT INTO `countries` VALUES ('105', 'IN', 'India');
INSERT INTO `countries` VALUES ('106', 'IO', 'British Indian Ocean Territory');
INSERT INTO `countries` VALUES ('107', 'IQ', 'Iraq');
INSERT INTO `countries` VALUES ('108', 'IR', 'Iran');
INSERT INTO `countries` VALUES ('109', 'IS', 'Iceland');
INSERT INTO `countries` VALUES ('110', 'IT', 'Italy');
INSERT INTO `countries` VALUES ('111', 'JE', 'Jersey');
INSERT INTO `countries` VALUES ('112', 'JM', 'Jamaica');
INSERT INTO `countries` VALUES ('113', 'JO', 'Jordan');
INSERT INTO `countries` VALUES ('114', 'JP', 'Japan');
INSERT INTO `countries` VALUES ('115', 'KE', 'Kenya');
INSERT INTO `countries` VALUES ('116', 'KG', 'Kyrgyzstan');
INSERT INTO `countries` VALUES ('117', 'KH', 'Cambodia');
INSERT INTO `countries` VALUES ('118', 'KI', 'Kiribati');
INSERT INTO `countries` VALUES ('119', 'KM', 'Comoros');
INSERT INTO `countries` VALUES ('120', 'KN', 'St Kitts and Nevis');
INSERT INTO `countries` VALUES ('121', 'KP', 'North Korea');
INSERT INTO `countries` VALUES ('122', 'KR', 'South Korea');
INSERT INTO `countries` VALUES ('123', 'KW', 'Kuwait');
INSERT INTO `countries` VALUES ('124', 'KY', 'Cayman Islands');
INSERT INTO `countries` VALUES ('125', 'KZ', 'Kazakhstan');
INSERT INTO `countries` VALUES ('126', 'LA', 'Laos');
INSERT INTO `countries` VALUES ('127', 'LB', 'Lebanon');
INSERT INTO `countries` VALUES ('128', 'LC', 'Saint Lucia');
INSERT INTO `countries` VALUES ('129', 'LI', 'Liechtenstein');
INSERT INTO `countries` VALUES ('130', 'LK', 'Sri Lanka');
INSERT INTO `countries` VALUES ('131', 'LR', 'Liberia');
INSERT INTO `countries` VALUES ('132', 'LS', 'Lesotho');
INSERT INTO `countries` VALUES ('133', 'LT', 'Lithuania');
INSERT INTO `countries` VALUES ('134', 'LU', 'Luxembourg');
INSERT INTO `countries` VALUES ('135', 'LV', 'Latvia');
INSERT INTO `countries` VALUES ('136', 'LY', 'Libya');
INSERT INTO `countries` VALUES ('137', 'MA', 'Morocco');
INSERT INTO `countries` VALUES ('138', 'MC', 'Monaco');
INSERT INTO `countries` VALUES ('139', 'MD', 'Moldova');
INSERT INTO `countries` VALUES ('140', 'ME', 'Montenegro');
INSERT INTO `countries` VALUES ('141', 'MF', 'Saint Martin');
INSERT INTO `countries` VALUES ('142', 'MG', 'Madagascar');
INSERT INTO `countries` VALUES ('143', 'MH', 'Marshall Islands');
INSERT INTO `countries` VALUES ('144', 'MK', 'North Macedonia');
INSERT INTO `countries` VALUES ('145', 'ML', 'Mali');
INSERT INTO `countries` VALUES ('146', 'MM', 'Myanmar');
INSERT INTO `countries` VALUES ('147', 'MN', 'Mongolia');
INSERT INTO `countries` VALUES ('148', 'MO', 'Macao');
INSERT INTO `countries` VALUES ('149', 'MP', 'Northern Mariana Islands');
INSERT INTO `countries` VALUES ('150', 'MQ', 'Martinique');
INSERT INTO `countries` VALUES ('151', 'MR', 'Mauritania');
INSERT INTO `countries` VALUES ('152', 'MS', 'Montserrat');
INSERT INTO `countries` VALUES ('153', 'MT', 'Malta');
INSERT INTO `countries` VALUES ('154', 'MU', 'Mauritius');
INSERT INTO `countries` VALUES ('155', 'MV', 'Maldives');
INSERT INTO `countries` VALUES ('156', 'MW', 'Malawi');
INSERT INTO `countries` VALUES ('157', 'MX', 'Mexico');
INSERT INTO `countries` VALUES ('158', 'MY', 'Malaysia');
INSERT INTO `countries` VALUES ('159', 'MZ', 'Mozambique');
INSERT INTO `countries` VALUES ('160', 'NA', 'Namibia');
INSERT INTO `countries` VALUES ('161', 'NC', 'New Caledonia');
INSERT INTO `countries` VALUES ('162', 'NE', 'Niger');
INSERT INTO `countries` VALUES ('163', 'NF', 'Norfolk Island');
INSERT INTO `countries` VALUES ('164', 'NG', 'Nigeria');
INSERT INTO `countries` VALUES ('165', 'NI', 'Nicaragua');
INSERT INTO `countries` VALUES ('166', 'NL', 'Netherlands');
INSERT INTO `countries` VALUES ('167', 'NO', 'Norway');
INSERT INTO `countries` VALUES ('168', 'NP', 'Nepal');
INSERT INTO `countries` VALUES ('169', 'NR', 'Nauru');
INSERT INTO `countries` VALUES ('170', 'NU', 'Niue');
INSERT INTO `countries` VALUES ('171', 'NZ', 'New Zealand');
INSERT INTO `countries` VALUES ('172', 'OM', 'Oman');
INSERT INTO `countries` VALUES ('173', 'PA', 'Panama');
INSERT INTO `countries` VALUES ('174', 'PE', 'Peru');
INSERT INTO `countries` VALUES ('175', 'PF', 'French Polynesia');
INSERT INTO `countries` VALUES ('176', 'PG', 'Papua New Guinea');
INSERT INTO `countries` VALUES ('177', 'PH', 'Philippines');
INSERT INTO `countries` VALUES ('178', 'PK', 'Pakistan');
INSERT INTO `countries` VALUES ('179', 'PL', 'Poland');
INSERT INTO `countries` VALUES ('180', 'PM', 'Saint Pierre and Miquelon');
INSERT INTO `countries` VALUES ('181', 'PN', 'Pitcairn Islands');
INSERT INTO `countries` VALUES ('182', 'PR', 'Puerto Rico');
INSERT INTO `countries` VALUES ('183', 'PS', 'Palestine');
INSERT INTO `countries` VALUES ('184', 'PT', 'Portugal');
INSERT INTO `countries` VALUES ('185', 'PW', 'Palau');
INSERT INTO `countries` VALUES ('186', 'PY', 'Paraguay');
INSERT INTO `countries` VALUES ('187', 'QA', 'Qatar');
INSERT INTO `countries` VALUES ('188', 'RE', 'Réunion');
INSERT INTO `countries` VALUES ('189', 'RO', 'Romania');
INSERT INTO `countries` VALUES ('190', 'RS', 'Serbia');
INSERT INTO `countries` VALUES ('191', 'RU', 'Russia');
INSERT INTO `countries` VALUES ('192', 'RW', 'Rwanda');
INSERT INTO `countries` VALUES ('193', 'SA', 'Saudi Arabia');
INSERT INTO `countries` VALUES ('194', 'SB', 'Solomon Islands');
INSERT INTO `countries` VALUES ('195', 'SC', 'Seychelles');
INSERT INTO `countries` VALUES ('196', 'SD', 'Sudan');
INSERT INTO `countries` VALUES ('197', 'SE', 'Sweden');
INSERT INTO `countries` VALUES ('198', 'SG', 'Singapore');
INSERT INTO `countries` VALUES ('199', 'SH', 'Saint Helena');
INSERT INTO `countries` VALUES ('200', 'SI', 'Slovenia');
INSERT INTO `countries` VALUES ('201', 'SJ', 'Svalbard and Jan Mayen');
INSERT INTO `countries` VALUES ('202', 'SK', 'Slovakia');
INSERT INTO `countries` VALUES ('203', 'SL', 'Sierra Leone');
INSERT INTO `countries` VALUES ('204', 'SM', 'San Marino');
INSERT INTO `countries` VALUES ('205', 'SN', 'Senegal');
INSERT INTO `countries` VALUES ('206', 'SO', 'Somalia');
INSERT INTO `countries` VALUES ('207', 'SR', 'Suriname');
INSERT INTO `countries` VALUES ('208', 'SS', 'South Sudan');
INSERT INTO `countries` VALUES ('209', 'ST', 'São Tomé and Príncipe');
INSERT INTO `countries` VALUES ('210', 'SV', 'El Salvador');
INSERT INTO `countries` VALUES ('211', 'SX', 'Sint Maarten');
INSERT INTO `countries` VALUES ('212', 'SY', 'Syria');
INSERT INTO `countries` VALUES ('213', 'SZ', 'Eswatini');
INSERT INTO `countries` VALUES ('214', 'TC', 'Turks and Caicos Islands');
INSERT INTO `countries` VALUES ('215', 'TD', 'Chad');
INSERT INTO `countries` VALUES ('216', 'TF', 'French Southern Territories');
INSERT INTO `countries` VALUES ('217', 'TG', 'Togo');
INSERT INTO `countries` VALUES ('218', 'TH', 'Thailand');
INSERT INTO `countries` VALUES ('219', 'TJ', 'Tajikistan');
INSERT INTO `countries` VALUES ('220', 'TK', 'Tokelau');
INSERT INTO `countries` VALUES ('221', 'TL', 'Timor-Leste');
INSERT INTO `countries` VALUES ('222', 'TM', 'Turkmenistan');
INSERT INTO `countries` VALUES ('223', 'TN', 'Tunisia');
INSERT INTO `countries` VALUES ('224', 'TO', 'Tonga');
INSERT INTO `countries` VALUES ('225', 'TR', 'Turkey');
INSERT INTO `countries` VALUES ('226', 'TT', 'Trinidad and Tobago');
INSERT INTO `countries` VALUES ('227', 'TV', 'Tuvalu');
INSERT INTO `countries` VALUES ('228', 'TW', 'Taiwan');
INSERT INTO `countries` VALUES ('229', 'TZ', 'Tanzania');
INSERT INTO `countries` VALUES ('230', 'UA', 'Ukraine');
INSERT INTO `countries` VALUES ('231', 'UG', 'Uganda');
INSERT INTO `countries` VALUES ('232', 'UM', 'U.S. Minor Outlying Islands');
INSERT INTO `countries` VALUES ('233', 'US', 'United States');
INSERT INTO `countries` VALUES ('234', 'UY', 'Uruguay');
INSERT INTO `countries` VALUES ('235', 'UZ', 'Uzbekistan');
INSERT INTO `countries` VALUES ('236', 'VA', 'Vatican City');
INSERT INTO `countries` VALUES ('237', 'VC', 'St Vincent and Grenadines');
INSERT INTO `countries` VALUES ('238', 'VE', 'Venezuela');
INSERT INTO `countries` VALUES ('239', 'VG', 'British Virgin Islands');
INSERT INTO `countries` VALUES ('240', 'VI', 'U.S. Virgin Islands');
INSERT INTO `countries` VALUES ('241', 'VN', 'Vietnam');
INSERT INTO `countries` VALUES ('242', 'VU', 'Vanuatu');
INSERT INTO `countries` VALUES ('243', 'WF', 'Wallis and Futuna');
INSERT INTO `countries` VALUES ('244', 'WS', 'Samoa');
INSERT INTO `countries` VALUES ('245', 'XK', 'Kosovo');
INSERT INTO `countries` VALUES ('246', 'YE', 'Yemen');
INSERT INTO `countries` VALUES ('247', 'YT', 'Mayotte');
INSERT INTO `countries` VALUES ('248', 'ZA', 'South Africa');
INSERT INTO `countries` VALUES ('249', 'ZM', 'Zambia');
INSERT INTO `countries` VALUES ('250', 'ZW', 'Zimbabwe');

-- ----------------------------
-- Table structure for `tbl_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `is_admin` varchar(255) DEFAULT '' COMMENT '1// admin 2// superadmin 3//administrator',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', '94d2be2e13cce22e63f410e98d6d59a9', '2020-01-22 14:10:30', '2');
INSERT INTO `tbl_admin` VALUES ('2', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-20 10:48:48', '3');
INSERT INTO `tbl_admin` VALUES ('3', 'infinityp.soft@gmail.com', '0618096661', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-20 11:14:25', '3');
INSERT INTO `tbl_admin` VALUES ('4', 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-22 14:10:23', '3');
INSERT INTO `tbl_admin` VALUES ('5', 'tt@gmail.com', '123123', 'a123', '202cb962ac59075b964b07152d234b70', '2020-01-20 10:48:51', '2');
INSERT INTO `tbl_admin` VALUES ('6', 'test2@gmail.com', '0879874444', 'ทดสอบ รูปแบบที่ 2', 'e10adc3949ba59abbe56e057f20f883e', '2020-01-22 14:10:25', '1');

-- ----------------------------
-- Table structure for `tbl_bookmark`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bookmark`;
CREATE TABLE `tbl_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) DEFAULT '' COMMENT 'CM0001',
  `id_orderBuy` varchar(255) DEFAULT '' COMMENT 'OD0001',
  `id_document` varchar(255) DEFAULT '' COMMENT 'DM001',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
=======
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
>>>>>>> master

-- ----------------------------
-- Records of tbl_bookmark
-- ----------------------------
<<<<<<< HEAD
INSERT INTO `tbl_bookmark` VALUES ('4', 'CM4', 'OR-2', 'fdfdfd', '2020-02-07 11:50:40', null);
INSERT INTO `tbl_bookmark` VALUES ('5', 'CM4', 'OD6', 'r', '2020-02-07 11:52:10', null);
INSERT INTO `tbl_bookmark` VALUES ('6', 'CM4', 'OD9', 't-89', '2020-02-07 12:04:57', null);
INSERT INTO `tbl_bookmark` VALUES ('7', 'CM4', 'OD9', 't-89', '2020-02-07 12:12:00', null);
INSERT INTO `tbl_bookmark` VALUES ('8', 'CM4', 'OD9', 't-89', '2020-02-07 12:14:11', null);
INSERT INTO `tbl_bookmark` VALUES ('9', 'CM4', 'OD9', 't-89', '2020-02-07 12:16:17', null);
INSERT INTO `tbl_bookmark` VALUES ('10', 'CM4', 'OD9', 't-89', '2020-02-07 12:53:34', null);
INSERT INTO `tbl_bookmark` VALUES ('11', 'CM4', 'OD9', 't-89', '2020-02-07 14:01:14', null);
INSERT INTO `tbl_bookmark` VALUES ('12', 'CM4', 'OD17', 'V10000', '2020-02-07 16:23:10', null);
INSERT INTO `tbl_bookmark` VALUES ('13', 'CM4', 'OD9', 't-80', '2020-02-07 16:56:22', null);
INSERT INTO `tbl_bookmark` VALUES ('14', 'CM4', 'OD19', 't-80', '2020-02-07 17:32:29', null);
INSERT INTO `tbl_bookmark` VALUES ('15', 'CM4', 'OD19', 't-80', '2020-02-07 17:45:18', null);
INSERT INTO `tbl_bookmark` VALUES ('16', 'CM4', 'OD19', 't-80', '2020-02-07 17:47:31', null);
=======
INSERT INTO `tbl_bookmark` VALUES ('1', 'CM4', 'OR1', 'Dm555', '2020-02-11 14:06:03', null);
INSERT INTO `tbl_bookmark` VALUES ('2', 'CM5', 'OR2', 'Dm555', '2020-02-11 14:06:30', null);
>>>>>>> master

-- ----------------------------
-- Table structure for `tbl_deposit`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_deposit`;
CREATE TABLE `tbl_deposit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `bill_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_deposit
-- ----------------------------
INSERT INTO `tbl_deposit` VALUES ('1', '4', '100', '1', '2020-01-20 15:14:13', '2020-01-20 15:20:19', '-', 'DE-1234');

-- ----------------------------
-- Table structure for `tbl_follow`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_follow`;
CREATE TABLE `tbl_follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_userId` int(11) DEFAULT NULL,
  `receiver_userId` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_follow
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_history`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_history`;
CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `upload_id` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_history
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_job`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_job`;
CREATE TABLE `tbl_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_position` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_job
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_job_position`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_job_position`;
CREATE TABLE `tbl_job_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_team` int(11) DEFAULT NULL,
  `job_position` varchar(150) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_job_position
-- ----------------------------
INSERT INTO `tbl_job_position` VALUES ('1', '1', '1', '2020-01-16 14:50:18', null);
<<<<<<< HEAD
INSERT INTO `tbl_job_position` VALUES ('2', '1', '2', '2020-01-16 14:50:18', null);
INSERT INTO `tbl_job_position` VALUES ('3', '1', '3', '2020-01-16 14:50:18', null);

-- ----------------------------
-- Table structure for `tbl_order_f`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order_f`;
CREATE TABLE `tbl_order_f` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_main` varchar(255) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_order_f
-- ----------------------------
INSERT INTO `tbl_order_f` VALUES ('1', 'OD1', '2020-02-05', '1');
INSERT INTO `tbl_order_f` VALUES ('2', 'OD2', '2020-02-05', '1');
INSERT INTO `tbl_order_f` VALUES ('3', 'OD3', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('4', 'OD4', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('5', 'OD5', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('6', 'OD6', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('7', 'OD7', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('8', 'OD8', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('9', 'OD9', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('10', 'OD10', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('11', 'OD11', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('12', 'OD12', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('13', 'OD13', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('14', 'OD14', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('15', 'OD15', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('16', 'OD16', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('17', 'OD17', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('18', 'OD18', '2020-02-07', '1');
INSERT INTO `tbl_order_f` VALUES ('19', 'OD19', '2020-02-07', '1');
=======
INSERT INTO `tbl_job_position` VALUES ('2', '1', '3', '2020-01-16 14:50:18', null);
INSERT INTO `tbl_job_position` VALUES ('3', '1', '4', '2020-01-16 14:50:18', null);
>>>>>>> master

-- ----------------------------
-- Table structure for `tbl_package`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_package`;
CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_pk` varchar(200) DEFAULT NULL,
  `price_pk` varchar(100) DEFAULT '',
  `description_pk` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `userId_pk` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `time_pk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_package
-- ----------------------------
INSERT INTO `tbl_package` VALUES ('1', 'Free', '0.00', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-01-06 00:00:00', null, null, '0', 'mo');
INSERT INTO `tbl_package` VALUES ('4', 'Annual', '10.00', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-01-06 00:00:00', null, null, '0', 'mo');

-- ----------------------------
-- Table structure for `tbl_paypal`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_paypal`;
CREATE TABLE `tbl_paypal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(255) NOT NULL,
  `payerID` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency_code` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `create_time` datetime NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `status_drop` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_paypal
-- ----------------------------
INSERT INTO `tbl_paypal` VALUES ('1', '04872538P9424894Y', 'J3GJEC9GX23VS', '10', 'USD', '4', 'John', 'Doe', '2020-01-28 16:53:19', '2020-02-27 16:53:19', '1');

-- ----------------------------
-- Table structure for `tbl_rejected`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rejected`;
CREATE TABLE `tbl_rejected` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `bookid_rj` int(11) DEFAULT NULL,
  `userId_rj` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(2) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_rejected
-- ----------------------------
INSERT INTO `tbl_rejected` VALUES ('7', '', '7', '5', '2020-01-06 16:50:55', null, '1');
INSERT INTO `tbl_rejected` VALUES ('8', '', '7', '6', '2020-01-06 16:50:55', null, '1');
INSERT INTO `tbl_rejected` VALUES ('9', '', '7', '7', '2020-01-06 16:50:55', null, '1');
INSERT INTO `tbl_rejected` VALUES ('10', '', '7', '8', '2020-01-06 16:50:55', null, '1');
INSERT INTO `tbl_rejected` VALUES ('11', '', '8', '6', '2020-01-07 15:30:45', null, '1');

-- ----------------------------
-- Table structure for `tbl_select_item`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_select_item`;
CREATE TABLE `tbl_select_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_item` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_select_item
-- ----------------------------
INSERT INTO `tbl_select_item` VALUES ('1', 'อาหาร', '2019-12-26 13:31:33', null);
INSERT INTO `tbl_select_item` VALUES ('2', 'คณิตศาสตร์', '2019-12-26 18:02:22', null);
INSERT INTO `tbl_select_item` VALUES ('3', 'ดาราศาสตร์', '2020-01-03 14:48:42', null);
INSERT INTO `tbl_select_item` VALUES ('4', 'ภาษาไทย', '2020-01-03 14:48:48', null);
INSERT INTO `tbl_select_item` VALUES ('5', 'อวกาศ', '2020-01-03 14:48:59', null);
INSERT INTO `tbl_select_item` VALUES ('6', 'ดนตรี', '2020-01-03 14:49:10', null);
INSERT INTO `tbl_select_item` VALUES ('7', 'การเมือง', '2020-01-03 14:51:22', null);
INSERT INTO `tbl_select_item` VALUES ('8', 'รัฐบาล', '2020-01-03 14:51:31', null);

-- ----------------------------
<<<<<<< HEAD
-- Table structure for `tbl_session`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_session`;
CREATE TABLE `tbl_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamId` int(11) DEFAULT NULL,
  `status_check` int(11) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_session
-- ----------------------------
INSERT INTO `tbl_session` VALUES ('1', '1', '1', '2020-02-11');

-- ----------------------------
-- Table structure for `tbl_store_for_buy_email`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_store_for_buy_email`;
CREATE TABLE `tbl_store_for_buy_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `price_file` varchar(255) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `price_dis` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_store_for_buy_email
-- ----------------------------

-- ----------------------------
=======
>>>>>>> master
-- Table structure for `tbl_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT '',
  `phone` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT '',
  `password` varchar(150) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0 COMMENT '0 == approve //  == non-approve',
<<<<<<< HEAD
  `bank_account` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
=======
>>>>>>> master
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_team
-- ----------------------------
<<<<<<< HEAD
INSERT INTO `tbl_team` VALUES ('1', '218', 'famnoiii@gmail.com', '0968138751', 'Fam Worapong', 'e10adc3949ba59abbe56e057f20f883e', 'screencapture-file-G-Fam-E-backup-19-9-19-profile-profile-index-html-2020-01-06-19_08_028.png', '2020-01-16 14:50:17', null, '1', null, '1659900740516');
=======
INSERT INTO `tbl_team` VALUES ('1', '218', 'famnoiii@gmail.com', '0968138751', 'Fam Worapong', 'e10adc3949ba59abbe56e057f20f883e', 'screencapture-file-G-Fam-E-backup-19-9-19-profile-profile-index-html-2020-01-06-19_08_028.png', '2020-01-16 14:50:17', null, '1');
>>>>>>> master

-- ----------------------------
-- Table structure for `tbl_unlocks`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_unlocks`;
CREATE TABLE `tbl_unlocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `merchant_id` int(11) NOT NULL,
  `upload_id` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_unlocks
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_upload`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload`;
CREATE TABLE `tbl_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `select_item_id` int(11) NOT NULL,
  `search_item` varchar(255) DEFAULT '',
  `select_item` varchar(255) DEFAULT '',
  `code` text DEFAULT NULL,
  `topic` text DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload
-- ----------------------------
INSERT INTO `tbl_upload` VALUES ('4', '4', '1', 'อาหารไทย เมนูอาหาร สูตรอาหารง่ายๆ สำหรับคนรักการทำอาหาร', 'อาหาร', 'ZXC001', 'สำหรับคนรักการทำอาหาร', '2020-01-04 14:09:31', null);
INSERT INTO `tbl_upload` VALUES ('5', '4', '2', 'เอกสารสำคัญ - โปรแกรม ร้าน ค้า ปลีก', 'คณิตศาสตร์', 'ZXV33', 'โปรแกรม ร้าน ค้า ปลีก', '2020-01-04 14:10:10', null);

-- ----------------------------
-- Table structure for `tbl_upload_main_search`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_main_search`;
CREATE TABLE `tbl_upload_main_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
<<<<<<< HEAD
=======
  `id_doc` varchar(255) DEFAULT NULL,
>>>>>>> master
  `select_item_id` int(11) NOT NULL,
  `search_item` varchar(255) DEFAULT '',
  `select_item` varchar(255) DEFAULT '',
  `code` text DEFAULT NULL,
  `topic` text DEFAULT NULL,
<<<<<<< HEAD
  `upload_store_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
=======
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
>>>>>>> master

-- ----------------------------
-- Records of tbl_upload_main_search
-- ----------------------------
<<<<<<< HEAD
INSERT INTO `tbl_upload_main_search` VALUES ('1', '4', '2', 'G-Shock', 'คณิตศาสตร์', 'C76JB', '-----', '8', '2020-02-07 11:22:36', '2020-02-07 11:22:36');
INSERT INTO `tbl_upload_main_search` VALUES ('2', '4', '3', 'T-5', 'ดาราศาสตร์', 'T-61', '---', '7', '2020-02-07 11:30:12', '2020-02-07 11:30:12');
INSERT INTO `tbl_upload_main_search` VALUES ('3', '4', '7', 'G-Shock', 'การเมือง', '1000', '5485778', '9', '2020-02-07 12:01:40', '2020-02-07 12:01:40');
INSERT INTO `tbl_upload_main_search` VALUES ('4', '4', '2', 'Y-88', 'คณิตศาสตร์', 'T88', 'wqe', '10', '2020-02-07 12:03:36', '2020-02-07 12:03:36');
=======
INSERT INTO `tbl_upload_main_search` VALUES ('1', '0', 'Dm555', '0', '', '', null, null, null, null);
>>>>>>> master

-- ----------------------------
-- Table structure for `tbl_upload_order`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_order`;
CREATE TABLE `tbl_upload_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT '',
  `order_id` varchar(110) DEFAULT '' COMMENT 'OR00001',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `date_required` date DEFAULT NULL,
  `price_file` varchar(255) DEFAULT NULL,
<<<<<<< HEAD
  `status_book` int(11) DEFAULT 0 COMMENT '0// not 1//ture',
  `is_check` int(11) DEFAULT 0 COMMENT '0//not 1// ture',
  `note_reject` varchar(255) DEFAULT NULL,
  `select_item` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `is_confirm` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
=======
  `status_book` varchar(255) DEFAULT '0' COMMENT '0// not 1//ture',
  `is_check` varchar(255) DEFAULT '0' COMMENT '0//not 1// ture',
  `note_reject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
>>>>>>> master

-- ----------------------------
-- Records of tbl_upload_order
-- ----------------------------
<<<<<<< HEAD
INSERT INTO `tbl_upload_order` VALUES ('1', '4', 'shirt-1580109491.jpg', 'OR-1', '2020-02-03 10:09:48', null, 'uploads/Buy/shirt-1580109491.jpg', '2020-02-05', '', '0', '1', 'asdasdasdasd', null, null, null);
INSERT INTO `tbl_upload_order` VALUES ('2', '4', 'shirt-1580439213.jpg', 'OR-2', '2020-02-03 10:09:48', null, 'uploads/Buy/shirt-1580439213.jpg', '2020-02-16', '200', '1', null, null, null, null, null);
INSERT INTO `tbl_upload_order` VALUES ('3', '4', '2.jpg', 'OR-3', '2020-02-03 16:11:12', null, 'uploads/Buy/2.jpg', '2020-02-14', '', '0', '1', 'not work', null, null, null);
INSERT INTO `tbl_upload_order` VALUES ('4', '4', 'ใบเสร็จคุณเบิร์ด_(2).pdf', 'OD6', '2020-02-07 11:23:34', null, 'uploads/Buy/ใบเสร็จคุณเบิร์ด_(2).pdf', '2020-02-14', '200', '1', '0', null, '', null, null);
INSERT INTO `tbl_upload_order` VALUES ('12', '4', 'ใบวางบิลเว็บdeejungdelivery.com_13-01-25631.pdf', 'OD9', '2020-02-07 14:13:51', '2020-02-07 16:56:22', 'uploads/Buy/ใบวางบิลเว็บdeejungdelivery.com_13-01-25631.pdf', '0000-00-00', '100', '1', '0', null, '', null, null);
INSERT INTO `tbl_upload_order` VALUES ('13', '4', 'ใบเสร็จคุณเบิร์ด_(2)2.pdf', 'OD9', '2020-02-07 14:13:51', '2020-02-07 16:56:22', 'uploads/Buy/ใบเสร็จคุณเบิร์ด_(2)2.pdf', '0000-00-00', '100', '1', '0', null, '', null, null);
INSERT INTO `tbl_upload_order` VALUES ('14', '4', 'ใบเสร็จคุณเบิร์ด_(2)_(2).pdf', 'OD17', '2020-02-07 14:22:35', '2020-02-07 16:23:10', 'uploads/Buy/ใบเสร็จคุณเบิร์ด_(2)_(2).pdf', '2020-02-08', '1000', '1', '0', null, null, null, null);
INSERT INTO `tbl_upload_order` VALUES ('15', '4', 'ใบวางบิลเว็บdeejungdelivery.com_13-01-25632.pdf', 'OD17', '2020-02-07 14:22:35', '2020-02-07 16:23:10', 'uploads/Buy/ใบวางบิลเว็บdeejungdelivery.com_13-01-25632.pdf', '2020-02-08', '1000', '2', '0', null, '1', null, null);
INSERT INTO `tbl_upload_order` VALUES ('16', '4', 'ใบวางบิลเว็บdeejungdelivery.com_13-01-25633.pdf', 'OD19', '2020-02-07 17:32:09', '2020-02-07 17:47:31', 'uploads/Buy/ใบวางบิลเว็บdeejungdelivery.com_13-01-25633.pdf', '2020-02-21', '10000', '2', '0', null, '1', null, null);
=======
INSERT INTO `tbl_upload_order` VALUES ('1', '4', 'shirt-1580109491.jpg', 'OR1', '2020-02-03 10:09:48', '2020-02-11 14:06:03', 'uploads/Buy/shirt-1580109491.jpg', '2020-02-04', '200', '1', '', '');
INSERT INTO `tbl_upload_order` VALUES ('2', '4', 'shirt-1580439213.jpg', 'OR1', '2020-02-03 10:09:48', '2020-02-11 14:06:03', 'uploads/Buy/shirt-1580439213.jpg', '2020-02-04', '200', '1', null, null);
INSERT INTO `tbl_upload_order` VALUES ('3', '4', '2.jpg', 'OR1', '2020-02-03 16:11:12', '2020-02-11 14:06:03', 'uploads/Buy/2.jpg', '2020-02-04', '200', '1', '', '');
INSERT INTO `tbl_upload_order` VALUES ('4', '5', '2.jpg', 'OR2', '2020-02-03 16:11:12', '2020-02-11 14:06:30', 'uploads/Buy/2.jpg', '2020-02-03', '200', '1', '', '');
INSERT INTO `tbl_upload_order` VALUES ('5', '5', 'shirt-1580439213.jpg', 'OR2', '2020-02-03 10:09:48', '2020-02-11 14:06:30', 'uploads/Buy/shirt-1580439213.jpg', '2020-02-03', '200', '1', null, null);
>>>>>>> master

-- ----------------------------
-- Table structure for `tbl_upload_store`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_store`;
CREATE TABLE `tbl_upload_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `store_id` varchar(110) DEFAULT '' COMMENT 'ST00001',
  `file_name` varchar(255) DEFAULT NULL,
  `is_check` int(5) DEFAULT 0,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `price_file` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `status_cp` varchar(255) DEFAULT NULL,
  `status_main_search` tinyint(1) NOT NULL DEFAULT 0,
  `is_accept` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
=======
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
>>>>>>> master

-- ----------------------------
-- Records of tbl_upload_store
-- ----------------------------
<<<<<<< HEAD
INSERT INTO `tbl_upload_store` VALUES ('1', '4', 'ST-1', 'sample-3pp.pdf', '0', '2020-01-31 10:27:53', null, 'uploads/Store/sample-3pp.pdf', null, 'TEST', 'A', null, '0', '1');
INSERT INTO `tbl_upload_store` VALUES ('2', '4', 'ST-2', 'sample-3pp.pdf', '0', '2020-02-04 12:17:36', null, 'uploads/Store/sample-3pp.pdf', null, 'TEST2', 'B', null, '0', '1');
INSERT INTO `tbl_upload_store` VALUES ('6', '4', 'OD3', 'UML_การทำงานระบบแจ้งเตือน.pdf', '1', '2020-02-07 11:01:54', null, 'uploads/Store/UML_การทำงานระบบแจ้งเตือน.pdf', null, null, null, null, '0', '1');
INSERT INTO `tbl_upload_store` VALUES ('7', '4', 'OD4', 'ใบเสนอราคาline_4_1_2563_.pdf', '1', '2020-02-07 11:03:09', null, 'uploads/Store/ใบเสนอราคาline_4_1_2563_.pdf', '20', null, 'B', 'complete', '1', '0');
INSERT INTO `tbl_upload_store` VALUES ('8', '4', 'OD5', 'ใบเสร็จคุณเบิร์ด2.pdf', '0', '2020-02-07 11:21:05', null, 'uploads/Store/ใบเสร็จคุณเบิร์ด2.pdf', '20', null, 'B', 'complete', '1', '0');
INSERT INTO `tbl_upload_store` VALUES ('9', '4', 'OD7', 'ใบเสร็จคุณเบิร์ด_(2).pdf', '0', '2020-02-07 12:01:17', null, 'uploads/Store/ใบเสร็จคุณเบิร์ด_(2).pdf', '50', null, 'A', 'complete', '1', '0');
INSERT INTO `tbl_upload_store` VALUES ('10', '4', 'OD8', 'บทนำ.pdf', '0', '2020-02-07 12:02:57', null, 'uploads/Store/บทนำ.pdf', '50', null, 'A', 'complete', '1', '0');
INSERT INTO `tbl_upload_store` VALUES ('11', '4', 'OD9', 'ใบวางบิลเว็บdeejungdelivery.com_13-01-2563.pdf', '0', '2020-02-07 17:31:50', null, 'uploads/Store/ใบวางบิลเว็บdeejungdelivery.com_13-01-2563.pdf', null, null, null, null, '0', '0');
=======
INSERT INTO `tbl_upload_store` VALUES ('1', '4', 'ST-1', 'sample-3pp.pdf', '0', '2020-01-31 10:27:53', null, 'uploads/Store/sample-3pp.pdf', null, 'TEST', 'A', null, '0', '0');
INSERT INTO `tbl_upload_store` VALUES ('2', '4', 'ST-2', 'sample-3pp.pdf', '0', '2020-02-04 12:17:36', null, 'uploads/Store/sample-3pp.pdf', null, 'TEST2', 'B', null, '0', '0');
>>>>>>> master

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `cash` int(11) NOT NULL DEFAULT 0,
  `score` int(11) DEFAULT 0,
  `email` varchar(255) DEFAULT '',
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `free_forever` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('2', 'CM2', '1269900232221', '0', '0', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', '0', '2020-02-04 13:56:11');
INSERT INTO `tbl_user` VALUES ('3', 'CM3', '123456789', '0', '0', 'infinityp.soft@gmail.com', '0618096661', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/1.png', '0', '2020-02-04 13:56:13');
<<<<<<< HEAD
INSERT INTO `tbl_user` VALUES ('4', 'CM4', '4444555666112', '150', '100', 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', '1', '2020-02-07 11:03:25');
=======
INSERT INTO `tbl_user` VALUES ('4', 'CM4', '4444555666112', '150', '100', 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', '0', '2020-02-04 13:56:15');
>>>>>>> master
INSERT INTO `tbl_user` VALUES ('5', 'CM5', '123123', '0', '0', 'tt@gmail.com', '123123', 'a123', '202cb962ac59075b964b07152d234b70', null, '0', '2020-02-04 13:56:17');
INSERT INTO `tbl_user` VALUES ('6', 'CM6', '987456123', '2', '0', 'test2@gmail.com', '0879874444', 'ทดสอบ รูปแบบที่ 2', 'e10adc3949ba59abbe56e057f20f883e', null, '1', '2020-02-04 13:56:20');
INSERT INTO `tbl_user` VALUES ('23', 'CM23', '1659900740516', '0', '0', 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', 'e10adc3949ba59abbe56e057f20f883e', null, '0', '2020-02-04 13:55:59');

-- ----------------------------
-- Table structure for `tbl_withdraw`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_withdraw`;
CREATE TABLE `tbl_withdraw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT 1 COMMENT '1 = กำลังดำเนินการ , 2 = เสร็จสิ้น , 3 = ล้มเหลว',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `note` varchar(255) DEFAULT '-',
  `bill_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_withdraw
-- ----------------------------
INSERT INTO `tbl_withdraw` VALUES ('1', '4', '150', '2', '2020-01-20 15:20:23', '2020-01-20 15:20:26', '-', 'WD-321');
