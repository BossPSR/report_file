/*
Navicat MySQL Data Transfer

Source Server         : Report file
Source Server Version : 50643
Source Host           : 163.44.198.63:3306
Source Database       : cp486987_report

Target Server Type    : MYSQL
Target Server Version : 50643
File Encoding         : 65001

Date: 2020-09-28 14:21:13
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
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_admin` varchar(255) DEFAULT '' COMMENT '1// admin 2// superadmin 3//administrator',
  `adminId` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('2', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikui', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-28 16:04:17', '2', 'A20200502');
INSERT INTO `tbl_admin` VALUES ('4', 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-18 22:59:10', '3', 'A20200504');
INSERT INTO `tbl_admin` VALUES ('5', 'wut.088english@gmail.com', '0222222222', 'wut', '950a878528bfe57bae694ee421c24154', '2020-09-22 09:55:14', '3', 'A20200505');

-- ----------------------------
-- Table structure for `tbl_bookmark`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bookmark`;
CREATE TABLE `tbl_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) DEFAULT NULL COMMENT 'CM0001',
  `id_orderBuy` varchar(255) DEFAULT '' COMMENT 'OD0001',
  `id_document` varchar(255) DEFAULT '' COMMENT 'DM001',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_bookmark
-- ----------------------------
INSERT INTO `tbl_bookmark` VALUES ('2', 'CM2009002', 'ODB4', 'DM3.1.1', '2020-09-19 23:45:02', null);
INSERT INTO `tbl_bookmark` VALUES ('3', 'CM2009002', 'ODB5', 'DM1.2.1', '2020-09-20 00:00:56', null);
INSERT INTO `tbl_bookmark` VALUES ('4', 'CM2009002', 'ODB6', 'DM1.2.1', '2020-09-20 00:13:16', null);
INSERT INTO `tbl_bookmark` VALUES ('5', 'CM2009002', 'ODB7', 'DM3.1.1', '2020-09-20 00:14:20', null);
INSERT INTO `tbl_bookmark` VALUES ('7', 'CM2009002', 'ODB8', 'DM4.1.1', '2020-09-20 00:22:36', null);
INSERT INTO `tbl_bookmark` VALUES ('8', 'CM2009002', 'ODB9', 'DM3.1.1', '2020-09-20 00:23:20', null);
INSERT INTO `tbl_bookmark` VALUES ('9', 'CM2009002', 'ODB10', 'DM4.1.1', '2020-09-20 00:24:35', null);
INSERT INTO `tbl_bookmark` VALUES ('10', 'CM2009002', 'ODB11', 'DM3.1.1', '2020-09-20 00:25:57', null);
INSERT INTO `tbl_bookmark` VALUES ('11', 'CM2009002', 'ODB12', 'DM1.2.2', '2020-09-20 00:28:09', null);
INSERT INTO `tbl_bookmark` VALUES ('12', 'CM2009002', 'ODB13', 'DM3.1.1', '2020-09-20 00:33:41', null);
INSERT INTO `tbl_bookmark` VALUES ('13', 'CM2009002', 'ODB14', 'DM5.1.1', '2020-09-20 00:34:41', null);
INSERT INTO `tbl_bookmark` VALUES ('14', 'CM2009002', 'ODB15', 'DM5.1.2', '2020-09-20 00:35:54', null);
INSERT INTO `tbl_bookmark` VALUES ('15', 'CM2009002', 'ODB15', 'DM5.1.3', '2020-09-20 00:36:48', null);
INSERT INTO `tbl_bookmark` VALUES ('16', 'CM2009002', 'ODB15', 'DM5.2.5', '2020-09-20 00:39:41', null);
INSERT INTO `tbl_bookmark` VALUES ('17', 'CM2009002', 'ODB20', 'DM5.2.5', '2020-09-20 00:46:57', null);
INSERT INTO `tbl_bookmark` VALUES ('18', 'CM2009002', 'ODB15', 'DM5.2.5', '2020-09-20 00:49:14', null);
INSERT INTO `tbl_bookmark` VALUES ('19', 'CM2009002', 'ODB16', 'DM1.2.1', '2020-09-20 00:50:01', null);
INSERT INTO `tbl_bookmark` VALUES ('20', 'CM2009002', 'ODB17', 'DM1.2.1', '2020-09-20 00:51:49', null);
INSERT INTO `tbl_bookmark` VALUES ('21', 'CM2009002', 'ODB19', 'DM5.2.4', '2020-09-20 00:56:53', null);
INSERT INTO `tbl_bookmark` VALUES ('22', 'CM2009002', 'ODB18', 'DM5.2.5', '2020-09-20 00:58:47', null);
INSERT INTO `tbl_bookmark` VALUES ('23', 'CM2009002', 'ODB22', 'DM1.2.1', '2020-09-20 01:01:52', null);
INSERT INTO `tbl_bookmark` VALUES ('24', 'CM2009002', 'ODB23', 'DM1.2.1', '2020-09-20 01:02:41', null);
INSERT INTO `tbl_bookmark` VALUES ('25', 'CM2009002', 'ODB23', 'DM1.2.1', '2020-09-20 01:04:30', null);
INSERT INTO `tbl_bookmark` VALUES ('26', 'CM2009002', 'ODB24', 'DM1.2.1', '2020-09-20 01:05:27', null);
INSERT INTO `tbl_bookmark` VALUES ('27', 'CM2009001', 'ODB28', 'DM1.2.1', '2020-09-20 09:21:04', null);
INSERT INTO `tbl_bookmark` VALUES ('28', 'CM2009001', 'ODB51', 'DM1.2.1', '2020-09-20 11:34:38', null);
INSERT INTO `tbl_bookmark` VALUES ('29', 'CM2009001', 'ODB55', 'DM1.2.2', '2020-09-20 12:07:38', null);
INSERT INTO `tbl_bookmark` VALUES ('30', 'CM2009001', 'ODB55', 'DM1.2.1', '2020-09-20 12:08:06', null);
INSERT INTO `tbl_bookmark` VALUES ('31', 'CM2009001', 'ODB55', 'DM1.2.2', '2020-09-20 12:13:02', null);
INSERT INTO `tbl_bookmark` VALUES ('32', 'CM2009001', 'ODB56', 'DM1.2.1', '2020-09-20 12:21:57', null);
INSERT INTO `tbl_bookmark` VALUES ('34', 'CM2009001', 'ODB59', 'DM2.1.1', '2020-09-20 12:27:29', null);
INSERT INTO `tbl_bookmark` VALUES ('38', 'CM2009001', 'ODB57', 'DM2.1.1', '2020-09-20 12:42:48', null);
INSERT INTO `tbl_bookmark` VALUES ('39', 'CM2009002', 'ODB62', 'DM1.2.1', '2020-09-20 12:43:00', null);
INSERT INTO `tbl_bookmark` VALUES ('40', 'CM2009002', 'ODB63', 'DM1.2.2', '2020-09-20 12:50:16', null);
INSERT INTO `tbl_bookmark` VALUES ('41', 'CM2009002', 'ODB60', 'DM2.1.1', '2020-09-20 12:52:28', null);
INSERT INTO `tbl_bookmark` VALUES ('44', 'CM2009002', 'ODB61', 'DM1.2.1', '2020-09-20 13:08:46', null);
INSERT INTO `tbl_bookmark` VALUES ('45', 'CM2009002', 'ODB64', 'DM1.2.1', '2020-09-20 13:14:44', null);
INSERT INTO `tbl_bookmark` VALUES ('46', 'CM2009002', 'ODB66', 'DM1.2.1', '2020-09-20 15:48:54', null);
INSERT INTO `tbl_bookmark` VALUES ('47', 'CM2009002', 'ODB69', 'DM1.2.2', '2020-09-20 17:47:12', null);
INSERT INTO `tbl_bookmark` VALUES ('48', 'CM2009002', 'ODB70', 'DM5.1.1', '2020-09-20 18:32:55', null);
INSERT INTO `tbl_bookmark` VALUES ('49', 'CM2009002', 'ODB74', 'DM5.1.2', '2020-09-20 19:05:33', null);
INSERT INTO `tbl_bookmark` VALUES ('50', 'CM2009001', 'ODB75', 'DM1.2.1', '2020-09-21 10:16:00', null);
INSERT INTO `tbl_bookmark` VALUES ('51', 'CM2009002', 'ODB71', 'DM1.2.2', '2020-09-21 13:41:02', null);
INSERT INTO `tbl_bookmark` VALUES ('52', 'CM2009001', 'ODB77', 'DM3.1.1', '2020-09-21 13:42:26', null);
INSERT INTO `tbl_bookmark` VALUES ('53', 'CM2009001', 'ODB77', 'DM4.1.1', '2020-09-21 13:42:26', null);
INSERT INTO `tbl_bookmark` VALUES ('55', 'CM2009001', 'ODB80', 'DM1.2.2', '2020-09-21 16:55:04', null);
INSERT INTO `tbl_bookmark` VALUES ('56', 'CM2009001', 'ODB83', 'DM3.1.1', '2020-09-21 23:45:09', null);
INSERT INTO `tbl_bookmark` VALUES ('57', 'CM2009001', 'ODB83', 'DM4.1.1', '2020-09-21 23:45:09', null);
INSERT INTO `tbl_bookmark` VALUES ('58', 'CM2009001', 'ODB84', 'DM2.1.1', '2020-09-21 23:50:30', null);
INSERT INTO `tbl_bookmark` VALUES ('59', 'CM2009001', 'ODB84', 'DM3.1.1', '2020-09-21 23:50:30', null);
INSERT INTO `tbl_bookmark` VALUES ('60', 'CM2009001', 'ODB85', 'DM5.1.2', '2020-09-23 14:44:01', null);
INSERT INTO `tbl_bookmark` VALUES ('61', 'CM2009001', 'ODB85', 'DM5.1.3', '2020-09-23 14:44:01', null);
INSERT INTO `tbl_bookmark` VALUES ('62', 'CM2009002', 'ODB87', 'DM4.2.2', '2020-09-24 12:12:30', null);
INSERT INTO `tbl_bookmark` VALUES ('63', 'CM2009002', 'ODB90', 'DM4.1.1', '2020-09-24 18:15:06', null);
INSERT INTO `tbl_bookmark` VALUES ('64', 'CM2009002', 'ODB91', 'DM4.1.1', '2020-09-24 18:30:50', null);
INSERT INTO `tbl_bookmark` VALUES ('65', 'CM2009002', 'ODB92', 'DM5.1.2', '2020-09-24 18:33:43', null);
INSERT INTO `tbl_bookmark` VALUES ('66', 'CM2009002', 'ODB93', 'DM5.2.5', '2020-09-24 18:38:44', null);
INSERT INTO `tbl_bookmark` VALUES ('67', 'CM2009002', 'ODB95', 'DM5.2.4', '2020-09-24 19:10:29', null);
INSERT INTO `tbl_bookmark` VALUES ('68', 'CM2009001', 'ODB97', 'DM4.1.1', '2020-09-24 19:33:05', null);
INSERT INTO `tbl_bookmark` VALUES ('69', 'CM2009001', 'ODB97', 'DM4.2.2', '2020-09-24 19:33:05', null);
INSERT INTO `tbl_bookmark` VALUES ('70', 'CM2009001', 'ODB98', 'DM4.2.2', '2020-09-24 20:10:08', null);
INSERT INTO `tbl_bookmark` VALUES ('71', 'CM2009002', 'ODB99', 'DM4.1.1', '2020-09-25 12:40:59', null);
INSERT INTO `tbl_bookmark` VALUES ('75', 'CM2009001', 'ODB103', 'DM4.1.1', '2020-09-26 16:52:50', null);
INSERT INTO `tbl_bookmark` VALUES ('76', 'CM2009001', 'ODB103', 'DM4.2.2', '2020-09-26 16:52:50', null);
INSERT INTO `tbl_bookmark` VALUES ('77', 'CM2009001', 'ODB103', 'DM5.1.2', '2020-09-26 16:52:50', null);
INSERT INTO `tbl_bookmark` VALUES ('78', 'CM2009001', 'ODB105', 'DM4.1.1', '2020-09-26 19:02:46', null);
INSERT INTO `tbl_bookmark` VALUES ('79', 'CM2009001', 'ODB104', 'DM5.1.2', '2020-09-26 19:03:14', null);
INSERT INTO `tbl_bookmark` VALUES ('80', 'CM2009001', 'ODB102', 'DM5.1.3', '2020-09-26 22:12:21', null);
INSERT INTO `tbl_bookmark` VALUES ('81', 'CM2009001', 'ODB102', 'DM5.2.4', '2020-09-26 22:12:21', null);
INSERT INTO `tbl_bookmark` VALUES ('82', 'CM2009002', 'ODB108', 'DM4.2.2', '2020-09-27 11:30:30', null);

-- ----------------------------
-- Table structure for `tbl_cancel`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cancel`;
CREATE TABLE `tbl_cancel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `teamid` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price_deduct` varchar(100) CHARACTER SET utf8 DEFAULT '' COMMENT 'ราคาที่โดนหักจัดการโดน Cancel',
  `status` int(2) DEFAULT '0' COMMENT '0 = ไม่ได้กด cancel /  1 = กด cancel Order',
  `history` text CHARACTER SET utf8,
  `status_check` int(11) NOT NULL DEFAULT '0',
  `status_who` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'เป็นใครที่ กด cancal เช่น admin หรือ ทีม',
  `create_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `end_date_ncf` date DEFAULT NULL COMMENT 'วันที่ในการหมดการ ban ของ team งาน',
  `status_cl` int(11) DEFAULT '0' COMMENT 'สถานะการแสดงความยินดีที่ทีมงานได้ปลดบล็อ 0 = ยังไม่แสดง / 1 = แสดงเรียบร้อนแล้ว',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_cancel
-- ----------------------------
INSERT INTO `tbl_cancel` VALUES ('1', 'ODB89', 'TM2009001', '10', '1', 'Cancel Order (ODB89)', '0', 'Team cancel', '2020-09-26', null, '2020-10-26', '1');

-- ----------------------------
-- Table structure for `tbl_cancel_file`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cancel_file`;
CREATE TABLE `tbl_cancel_file` (
  `id_nc` int(11) NOT NULL AUTO_INCREMENT,
  `id_upload_team` varchar(100) DEFAULT NULL COMMENT 'id ของตาราง tbl_upload_team',
  `teamid_ncf` varchar(100) DEFAULT NULL COMMENT 'id ทีมงาน',
  `file_name_notcomplete` varchar(255) DEFAULT NULL COMMENT 'การแนบไฟล์จากการกด not complete ของ admin หน้า complete',
  `path_notcomplete` varchar(255) DEFAULT NULL COMMENT 'การแนบไฟล์จากการกด not complete ของ admin หน้า complete',
  `create_at_ncf` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at_ncf` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `end_date_ncf` date DEFAULT NULL COMMENT 'วันหมดเวลาการโดนแบน ทีมงาน',
  PRIMARY KEY (`id_nc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_cancel_file
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_cancel_file_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cancel_file_admin`;
CREATE TABLE `tbl_cancel_file_admin` (
  `id_nc` int(11) NOT NULL AUTO_INCREMENT,
  `id_cancel` varchar(100) DEFAULT NULL COMMENT 'id ของตาราง tbl_upload_team',
  `file_name_cfa` varchar(255) DEFAULT NULL COMMENT 'การแนบไฟล์จากการกด not complete ของ admin หน้า complete',
  `path_cfa` varchar(255) DEFAULT NULL COMMENT 'การแนบไฟล์จากการกด not complete ของ admin หน้า complete',
  `create_at_cfa` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at_cfa` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_nc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_cancel_file_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_cashback`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cashback`;
CREATE TABLE `tbl_cashback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_cashback` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Refund คืนเงิน (กรณีOrderเสียหาย)  / Rewards รางวัล (กรณีสั่งครบจำนวนOrder…) ',
  `userId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cashback` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `cashback_detail` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_cashback
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_commission`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_commission`;
CREATE TABLE `tbl_commission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commission_inviter` varchar(255) DEFAULT NULL COMMENT 'รหัสผู้เชิญ',
  `commission_recipient` varchar(255) DEFAULT NULL COMMENT 'รหัสผู้ถูกเชิญ',
  `id_package_com` varchar(10) DEFAULT NULL COMMENT 'id ของ package',
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `commission_price` decimal(22,2) DEFAULT NULL,
  `commission_sale` decimal(22,2) DEFAULT NULL COMMENT 'ราคาที่ลดแล้ว',
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_commission
-- ----------------------------
INSERT INTO `tbl_commission` VALUES ('1', 'CM2009002', 'CM2009001', '3', '2020-09-18 16:15:12', '49.00', '39.20', '2020-09-18 16:15:12');

-- ----------------------------
-- Table structure for `tbl_date_required`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_date_required`;
CREATE TABLE `tbl_date_required` (
  `id_rq` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ตารางการขอเวลาเพิ่ม เมื่อเวลาหมดแล้ว ',
  `order_id_rq` varchar(255) DEFAULT NULL,
  `date_required_rq` datetime DEFAULT NULL,
  `create_at_rq` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rq`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_date_required
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_deduct`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_deduct`;
CREATE TABLE `tbl_deduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `teamid_deduct` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `deduct` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `admin_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1239 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct
-- ----------------------------
INSERT INTO `tbl_deduct` VALUES ('1', 'CM2009002', null, '10', 'ODS1', null, null, null, '2020-09-18 16:53:15', null, null);
INSERT INTO `tbl_deduct` VALUES ('2', 'CM2009002', null, '10', 'ODS5', null, null, null, '2020-09-19 15:44:42', null, null);
INSERT INTO `tbl_deduct` VALUES ('3', 'CM2009001', null, '10', 'ODS7', null, null, null, '2020-09-19 15:46:28', null, null);
INSERT INTO `tbl_deduct` VALUES ('4', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:03:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('5', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:03:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('6', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:03:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('7', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:03:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('8', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:03:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('9', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:04:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('10', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:04:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('11', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:04:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('12', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:04:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('13', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:04:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('14', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:04:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('15', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:05:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('16', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:05:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('17', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:05:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('18', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:05:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('19', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:05:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('20', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:05:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('21', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:06:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('22', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:06:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('23', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:06:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('24', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:06:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('25', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:06:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('26', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:06:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('27', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:07:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('28', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:07:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('29', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:07:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('30', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:07:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('31', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:07:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('32', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:07:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('33', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:08:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('34', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:08:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('35', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:08:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('36', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:08:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('37', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:08:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('38', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:08:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('39', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:09:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('40', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:09:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('41', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:09:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('42', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:09:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('43', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:09:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('44', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:09:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('45', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:10:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('46', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:10:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('47', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:10:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('48', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:10:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('49', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:10:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('50', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:10:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('51', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:11:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('52', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:11:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('53', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:11:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('54', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:11:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('55', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:11:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('56', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:11:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('57', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:12:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('58', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:12:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('59', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:12:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('60', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:12:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('61', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:12:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('62', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:12:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('63', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:13:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('64', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:13:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('65', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:13:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('66', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:13:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('67', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:13:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('68', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:13:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('69', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:14:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('70', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:14:11', null, null);
INSERT INTO `tbl_deduct` VALUES ('71', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:14:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('72', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:14:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('73', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:14:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('74', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:14:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('75', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:15:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('76', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:15:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('77', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:15:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('78', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:15:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('79', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:15:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('80', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:15:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('81', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:16:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('82', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:16:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('83', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:16:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('84', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:16:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('85', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:16:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('86', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:16:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('87', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:17:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('88', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:17:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('89', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:17:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('90', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:17:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('91', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:17:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('92', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:17:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('93', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:18:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('94', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:18:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('95', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:18:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('96', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:18:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('97', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:18:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('98', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:18:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('99', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:19:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('100', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:19:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('101', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:19:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('102', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:19:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('103', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:19:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('104', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:19:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('105', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:20:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('106', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:20:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('107', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:20:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('108', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:20:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('109', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:20:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('110', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:20:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('111', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:21:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('112', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:21:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('113', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:21:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('114', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:21:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('115', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:21:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('116', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:21:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('117', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:22:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('118', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:22:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('119', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:22:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('120', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:22:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('121', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:22:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('122', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:22:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('123', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:23:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('124', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:23:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('125', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:23:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('126', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:23:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('127', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:23:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('128', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:23:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('129', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:24:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('130', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:24:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('131', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:24:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('132', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:24:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('133', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:24:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('134', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:24:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('135', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:25:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('136', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:25:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('137', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:25:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('138', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:25:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('139', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:25:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('140', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:25:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('141', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:26:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('142', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:26:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('143', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:26:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('144', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:26:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('145', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:26:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('146', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:26:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('147', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:27:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('148', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:27:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('149', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:27:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('150', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:27:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('151', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:27:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('152', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:27:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('153', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:28:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('154', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:28:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('155', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:28:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('156', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:28:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('157', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:28:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('158', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:28:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('159', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:29:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('160', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:29:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('161', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:29:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('162', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:29:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('163', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:29:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('164', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:29:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('165', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:30:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('166', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:30:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('167', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:30:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('168', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:30:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('169', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:30:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('170', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:30:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('171', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:31:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('172', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:31:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('173', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:31:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('174', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:31:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('175', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:31:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('176', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:31:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('177', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:32:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('178', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:32:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('179', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:32:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('180', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:32:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('181', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:32:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('182', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:32:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('183', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:33:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('184', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:33:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('185', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:33:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('186', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:33:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('187', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:33:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('188', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:33:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('189', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:34:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('190', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:34:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('191', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:34:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('192', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:34:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('193', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:34:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('194', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:34:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('195', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:35:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('196', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:35:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('197', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:35:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('198', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:35:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('199', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:35:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('200', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:35:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('201', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:36:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('202', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:36:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('203', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:36:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('204', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:36:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('205', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:36:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('206', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:36:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('207', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:37:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('208', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:37:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('209', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:37:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('210', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:37:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('211', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:37:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('212', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:37:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('213', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:38:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('214', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:38:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('215', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:38:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('216', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:38:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('217', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:38:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('218', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:38:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('219', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:39:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('220', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:39:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('221', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:39:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('222', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:39:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('223', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:39:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('224', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:39:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('225', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:40:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('226', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:40:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('227', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:40:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('228', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:40:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('229', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:40:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('230', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:40:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('231', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:41:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('232', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:41:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('233', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:41:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('234', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:41:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('235', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:41:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('236', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:41:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('237', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:42:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('238', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:42:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('239', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:42:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('240', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:42:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('241', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:42:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('242', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:42:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('243', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:43:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('244', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:43:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('245', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:43:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('246', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:43:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('247', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:43:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('248', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:43:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('249', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:44:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('250', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:44:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('251', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:44:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('252', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:44:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('253', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:44:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('254', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:44:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('255', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:45:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('256', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:45:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('257', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:45:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('258', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:45:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('259', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:45:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('260', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:45:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('261', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:46:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('262', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:46:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('263', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:46:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('264', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:46:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('265', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:46:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('266', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:46:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('267', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:47:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('268', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:47:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('269', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:47:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('270', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:47:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('271', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:47:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('272', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:47:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('273', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:48:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('274', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:48:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('275', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:48:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('276', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:48:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('277', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:48:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('278', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:48:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('279', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:49:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('280', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:49:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('281', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:49:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('282', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:49:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('283', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:49:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('284', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:49:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('285', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:50:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('286', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:50:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('287', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:50:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('288', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:50:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('289', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:50:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('290', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:50:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('291', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:51:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('292', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:51:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('293', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:51:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('294', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:51:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('295', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:51:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('296', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:51:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('297', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:52:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('298', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:52:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('299', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:52:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('300', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:52:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('301', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:52:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('302', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:52:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('303', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:53:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('304', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:53:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('305', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:53:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('306', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:53:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('307', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:53:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('308', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:53:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('309', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:54:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('310', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:54:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('311', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:54:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('312', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:54:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('313', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:54:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('314', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:54:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('315', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:55:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('316', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:55:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('317', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:55:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('318', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:55:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('319', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:55:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('320', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:55:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('321', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:56:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('322', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:56:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('323', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:56:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('324', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:56:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('325', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:56:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('326', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:56:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('327', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:57:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('328', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:57:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('329', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:57:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('330', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:57:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('331', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:57:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('332', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:57:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('333', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:58:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('334', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:58:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('335', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:58:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('336', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:58:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('337', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:58:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('338', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:58:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('339', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:59:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('340', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:59:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('341', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:59:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('342', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:59:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('343', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:59:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('344', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 11:59:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('345', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:00:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('346', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:00:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('347', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:00:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('348', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:00:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('349', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:00:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('350', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:00:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('351', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:01:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('352', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:01:11', null, null);
INSERT INTO `tbl_deduct` VALUES ('353', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:01:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('354', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:01:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('355', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:01:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('356', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:01:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('357', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:02:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('358', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:02:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('359', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:02:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('360', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:02:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('361', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:02:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('362', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:02:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('363', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:03:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('364', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:03:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('365', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:03:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('366', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:03:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('367', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:03:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('368', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:03:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('369', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:04:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('370', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:04:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('371', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:04:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('372', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:04:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('373', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:04:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('374', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:04:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('375', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:05:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('376', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:05:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('377', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:05:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('378', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:05:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('379', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:05:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('380', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:05:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('381', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:06:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('382', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:06:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('383', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:06:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('384', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:06:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('385', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:06:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('386', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:06:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('387', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:07:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('388', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:07:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('389', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:07:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('390', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:07:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('391', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:07:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('392', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:07:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('393', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:08:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('394', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:08:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('395', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:08:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('396', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:08:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('397', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:08:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('398', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:08:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('399', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:09:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('400', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:09:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('401', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:09:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('402', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:09:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('403', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:09:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('404', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:09:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('405', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:10:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('406', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:10:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('407', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:10:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('408', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:10:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('409', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:10:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('410', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:10:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('411', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:11:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('412', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:11:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('413', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:11:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('414', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:11:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('415', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:11:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('416', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:11:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('417', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:12:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('418', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:12:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('419', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:12:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('420', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:12:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('421', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:12:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('422', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:12:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('423', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:13:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('424', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:13:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('425', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:13:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('426', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:13:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('427', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:13:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('428', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:13:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('429', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:14:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('430', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:14:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('431', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:14:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('432', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:14:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('433', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:14:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('434', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:14:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('435', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:15:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('436', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:15:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('437', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:15:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('438', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:15:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('439', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:15:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('440', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:15:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('441', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:16:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('442', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:16:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('443', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:16:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('444', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:16:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('445', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:16:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('446', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:16:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('447', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:17:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('448', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:17:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('449', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:17:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('450', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:17:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('451', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:17:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('452', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:17:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('453', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:18:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('454', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:18:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('455', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:18:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('456', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:18:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('457', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:18:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('458', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:18:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('459', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:19:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('460', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:19:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('461', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:19:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('462', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:19:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('463', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:19:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('464', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:19:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('465', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:20:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('466', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:20:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('467', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:20:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('468', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:20:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('469', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:20:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('470', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:20:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('471', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:21:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('472', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:21:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('473', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:21:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('474', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:21:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('475', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:21:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('476', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:21:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('477', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:22:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('478', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:22:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('479', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:22:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('480', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:22:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('481', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:22:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('482', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:22:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('483', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:23:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('484', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:23:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('485', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:23:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('486', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:23:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('487', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:23:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('488', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:23:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('489', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:24:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('490', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:24:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('491', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:24:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('492', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:24:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('493', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:24:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('494', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:24:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('495', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:25:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('496', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:25:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('497', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:25:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('498', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:25:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('499', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:25:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('500', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:25:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('501', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:26:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('502', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:26:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('503', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:26:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('504', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:26:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('505', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:26:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('506', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:26:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('507', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:27:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('508', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:27:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('509', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:27:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('510', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:27:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('511', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:27:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('512', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:27:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('513', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:28:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('514', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:28:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('515', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:28:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('516', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:28:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('517', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:28:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('518', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:28:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('519', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:29:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('520', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:29:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('521', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:29:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('522', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:29:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('523', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:29:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('524', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:29:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('525', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:30:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('526', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:30:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('527', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:30:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('528', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:30:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('529', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:30:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('530', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:30:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('531', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:31:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('532', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:31:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('533', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:31:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('534', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:31:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('535', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:31:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('536', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:31:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('537', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:32:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('538', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:32:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('539', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:32:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('540', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:32:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('541', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:32:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('542', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:32:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('543', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:33:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('544', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:33:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('545', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:33:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('546', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:33:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('547', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:33:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('548', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:33:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('549', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:34:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('550', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:34:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('551', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:34:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('552', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:34:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('553', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:34:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('554', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:34:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('555', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:35:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('556', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:35:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('557', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:35:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('558', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:35:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('559', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:35:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('560', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:35:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('561', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:36:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('562', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:36:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('563', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:36:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('564', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:36:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('565', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:36:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('566', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:36:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('567', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:37:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('568', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:37:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('569', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:37:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('570', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:37:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('571', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:37:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('572', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:37:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('573', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:38:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('574', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:38:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('575', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:38:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('576', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:38:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('577', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:38:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('578', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:38:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('579', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:39:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('580', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:39:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('581', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:39:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('582', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:39:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('583', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:39:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('584', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:39:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('585', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:40:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('586', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:40:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('587', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:40:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('588', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:40:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('589', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:40:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('590', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:40:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('591', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:41:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('592', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:41:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('593', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:41:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('594', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:41:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('595', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:41:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('596', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:41:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('597', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:42:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('598', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:42:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('599', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:42:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('600', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:42:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('601', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:42:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('602', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:42:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('603', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:43:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('604', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:43:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('605', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:43:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('606', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:43:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('607', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:43:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('608', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:43:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('609', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:44:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('610', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:44:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('611', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:44:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('612', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:44:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('613', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:44:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('614', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:44:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('615', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:45:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('616', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:45:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('617', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:45:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('618', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:45:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('619', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:45:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('620', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:45:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('621', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:46:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('622', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:46:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('623', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:46:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('624', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:46:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('625', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:46:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('626', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:46:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('627', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:47:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('628', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:47:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('629', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:47:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('630', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:47:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('631', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:47:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('632', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:47:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('633', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:48:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('634', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:48:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('635', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:48:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('636', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:48:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('637', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:48:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('638', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:48:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('639', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:49:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('640', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:49:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('641', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:49:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('642', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:49:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('643', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:49:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('644', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:49:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('645', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:50:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('646', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:50:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('647', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:50:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('648', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:50:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('649', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:50:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('650', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:50:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('651', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:51:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('652', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:51:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('653', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:51:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('654', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:51:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('655', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:51:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('656', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:51:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('657', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:52:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('658', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:52:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('659', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:52:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('660', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:52:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('661', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:52:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('662', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:52:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('663', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:53:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('664', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:53:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('665', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:53:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('666', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:53:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('667', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:53:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('668', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:53:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('669', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:54:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('670', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:54:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('671', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:54:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('672', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:54:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('673', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:54:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('674', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:54:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('675', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:55:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('676', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:55:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('677', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:55:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('678', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:55:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('679', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:55:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('680', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:55:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('681', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:56:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('682', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:56:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('683', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:56:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('684', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:56:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('685', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:56:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('686', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:56:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('687', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:57:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('688', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:57:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('689', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:57:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('690', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:57:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('691', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:57:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('692', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:57:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('693', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:58:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('694', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:58:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('695', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:58:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('696', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:58:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('697', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:58:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('698', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:58:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('699', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:59:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('700', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:59:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('701', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:59:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('702', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:59:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('703', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:59:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('704', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 12:59:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('705', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:00:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('706', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:00:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('707', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:00:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('708', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:00:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('709', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:00:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('710', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:00:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('711', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:01:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('712', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:01:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('713', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:01:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('714', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:01:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('715', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:01:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('716', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:01:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('717', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:02:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('718', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:02:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('719', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:02:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('720', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:02:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('721', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:02:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('722', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:02:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('723', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:03:01', null, null);
INSERT INTO `tbl_deduct` VALUES ('724', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:03:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('725', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:03:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('726', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:03:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('727', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:03:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('728', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:03:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('729', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:04:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('730', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:04:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('731', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:04:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('732', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:04:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('733', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:04:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('734', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:04:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('735', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:05:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('736', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:05:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('737', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:05:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('738', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:05:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('739', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:05:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('740', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:05:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('741', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:06:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('742', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:06:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('743', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:06:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('744', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:06:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('745', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:06:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('746', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:06:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('747', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:07:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('748', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:07:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('749', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:07:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('750', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:07:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('751', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:07:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('752', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:07:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('753', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:08:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('754', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:08:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('755', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:08:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('756', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:08:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('757', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:08:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('758', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:08:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('759', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:09:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('760', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:09:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('761', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:09:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('762', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:09:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('763', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:09:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('764', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:09:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('765', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:10:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('766', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:10:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('767', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:10:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('768', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:10:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('769', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:10:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('770', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:10:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('771', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:11:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('772', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:11:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('773', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:11:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('774', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:11:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('775', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:11:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('776', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:11:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('777', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:12:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('778', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:12:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('779', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:12:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('780', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:12:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('781', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:12:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('782', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:12:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('783', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:13:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('784', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:13:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('785', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:13:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('786', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:13:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('787', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:13:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('788', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:13:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('789', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:14:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('790', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:14:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('791', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:14:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('792', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:14:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('793', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:14:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('794', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:14:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('795', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:15:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('796', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:15:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('797', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:15:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('798', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:15:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('799', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:15:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('800', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:15:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('801', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:16:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('802', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:16:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('803', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:16:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('804', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:16:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('805', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:16:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('806', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:16:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('807', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:17:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('808', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:17:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('809', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:17:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('810', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:17:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('811', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:17:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('812', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:17:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('813', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:18:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('814', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:18:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('815', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:18:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('816', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:18:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('817', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:18:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('818', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:18:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('819', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:19:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('820', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:19:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('821', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:19:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('822', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:19:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('823', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:19:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('824', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:19:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('825', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:20:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('826', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:20:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('827', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:20:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('828', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:20:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('829', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:20:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('830', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:20:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('831', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:21:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('832', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:21:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('833', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:21:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('834', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:21:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('835', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:21:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('836', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:21:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('837', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:22:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('838', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:22:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('839', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:22:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('840', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:22:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('841', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:22:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('842', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:22:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('843', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:23:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('844', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:23:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('845', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:23:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('846', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:23:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('847', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:23:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('848', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:23:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('849', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:24:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('850', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:24:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('851', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:24:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('852', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:24:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('853', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:24:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('854', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:24:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('855', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:25:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('856', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:25:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('857', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:25:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('858', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:25:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('859', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:25:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('860', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:25:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('861', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:26:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('862', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:26:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('863', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:26:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('864', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:26:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('865', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:26:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('866', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:26:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('867', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:27:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('868', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:27:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('869', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:27:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('870', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:27:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('871', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:27:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('872', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:27:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('873', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:28:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('874', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:28:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('875', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:28:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('876', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:28:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('877', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:28:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('878', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:28:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('879', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:29:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('880', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:29:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('881', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:29:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('882', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:29:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('883', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:29:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('884', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:29:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('885', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:30:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('886', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:30:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('887', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:30:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('888', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:30:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('889', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:30:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('890', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:30:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('891', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:31:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('892', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:31:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('893', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:31:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('894', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:31:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('895', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:31:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('896', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:31:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('897', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:32:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('898', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:32:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('899', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:32:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('900', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:32:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('901', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:32:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('902', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:32:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('903', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:33:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('904', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:33:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('905', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:33:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('906', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:33:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('907', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:33:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('908', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:33:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('909', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:34:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('910', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:34:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('911', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:34:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('912', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:34:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('913', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:34:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('914', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:34:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('915', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:35:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('916', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:35:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('917', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:35:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('918', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:35:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('919', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:35:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('920', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:35:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('921', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:36:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('922', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:36:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('923', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:36:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('924', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:36:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('925', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:36:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('926', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:36:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('927', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:37:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('928', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:37:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('929', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:37:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('930', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:37:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('931', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:37:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('932', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:37:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('933', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:38:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('934', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:38:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('935', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:38:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('936', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:38:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('937', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:38:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('938', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:38:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('939', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:39:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('940', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:39:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('941', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:39:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('942', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:39:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('943', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:39:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('944', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:39:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('945', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:40:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('946', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:40:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('947', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:40:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('948', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:40:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('949', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:40:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('950', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:40:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('951', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:41:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('952', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:41:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('953', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:41:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('954', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:41:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('955', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:41:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('956', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:41:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('957', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:42:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('958', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:42:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('959', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:42:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('960', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:42:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('961', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:42:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('962', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:42:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('963', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:43:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('964', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:43:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('965', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:43:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('966', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:43:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('967', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:43:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('968', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:43:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('969', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:44:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('970', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:44:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('971', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:44:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('972', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:44:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('973', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:44:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('974', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:44:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('975', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:45:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('976', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:45:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('977', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:45:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('978', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:45:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('979', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:45:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('980', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:45:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('981', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:46:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('982', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:46:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('983', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:46:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('984', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:46:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('985', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:46:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('986', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:46:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('987', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:47:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('988', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:47:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('989', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:47:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('990', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:47:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('991', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:47:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('992', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:47:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('993', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:48:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('994', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:48:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('995', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:48:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('996', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:48:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('997', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:48:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('998', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:48:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('999', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:49:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1000', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:49:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1001', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:49:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1002', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:49:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1003', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:49:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1004', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:49:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1005', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:50:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1006', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:50:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1007', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:50:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1008', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:50:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1009', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:50:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1010', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:50:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1011', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:51:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1012', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:51:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1013', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:51:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1014', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:51:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1015', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:51:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1016', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:51:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1017', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:52:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1018', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:52:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1019', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:52:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1020', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:52:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1021', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:52:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1022', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:52:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1023', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:53:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1024', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:53:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1025', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:53:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1026', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:53:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1027', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:53:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1028', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:53:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1029', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:54:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1030', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:54:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1031', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:54:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1032', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:54:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1033', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:54:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1034', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:54:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1035', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:55:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1036', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:55:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1037', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:55:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1038', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:55:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1039', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:55:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1040', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:55:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1041', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:56:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1042', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:56:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1043', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:56:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1044', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:56:31', null, null);
INSERT INTO `tbl_deduct` VALUES ('1045', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:56:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1046', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:56:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1047', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:57:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1048', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:57:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1049', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:57:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1050', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:57:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1051', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:57:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1052', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:57:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1053', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:58:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1054', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:58:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1055', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:58:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1056', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:58:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1057', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:58:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1058', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:58:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1059', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:59:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1060', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:59:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1061', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:59:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1062', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:59:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1063', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:59:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1064', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 13:59:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1065', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:00:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1066', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:00:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1067', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:00:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1068', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:00:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1069', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:00:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1070', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:00:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1071', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:01:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1072', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:01:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1073', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:01:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1074', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:01:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1075', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:01:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1076', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:01:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1077', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:02:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1078', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:02:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1079', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:02:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1080', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:02:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1081', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:02:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1082', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:02:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1083', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:03:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1084', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:03:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1085', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:03:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1086', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:03:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1087', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:03:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1088', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:03:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1089', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:04:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1090', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:04:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1091', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:04:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1092', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:04:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1093', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:04:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1094', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:04:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1095', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:05:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1096', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:05:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1097', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:05:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1098', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:05:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1099', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:05:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1100', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:05:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1101', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:06:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1102', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:06:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1103', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:06:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1104', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:06:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1105', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:06:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1106', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:06:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1107', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:07:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1108', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:07:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1109', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:07:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1110', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:07:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1111', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:07:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1112', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:07:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1113', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:08:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1114', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:08:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1115', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:08:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1116', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:08:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1117', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:08:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1118', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:08:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1119', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:09:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1120', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:09:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1121', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:09:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1122', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:09:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1123', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:09:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1124', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:09:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1125', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:10:01', null, null);
INSERT INTO `tbl_deduct` VALUES ('1126', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:10:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1127', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:10:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1128', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:10:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1129', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:10:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1130', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:10:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1131', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:11:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1132', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:11:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1133', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:11:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1134', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:11:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1135', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:11:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1136', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:11:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1137', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:12:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1138', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:12:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1139', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:12:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1140', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:12:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1141', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:12:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1142', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:12:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1143', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:13:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1144', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:13:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1145', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:13:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1146', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:13:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1147', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:13:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1148', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:13:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1149', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:14:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1150', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:14:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1151', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:14:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1152', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:14:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1153', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:14:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1154', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:14:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1155', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:15:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1156', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:15:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1157', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:15:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1158', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:15:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1159', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:15:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1160', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:15:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1161', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:16:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1162', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:16:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1163', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:16:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1164', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:16:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1165', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:16:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1166', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:16:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1167', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:17:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1168', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:17:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1169', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:17:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1170', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:17:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1171', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:17:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1172', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:17:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1173', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:18:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1174', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:18:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1175', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:18:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1176', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:18:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1177', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:18:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1178', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:18:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1179', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:19:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1180', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:19:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1181', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:19:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1182', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:19:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1183', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:19:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1184', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:19:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1185', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:20:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1186', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:20:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1187', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:20:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1188', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:20:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1189', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:20:40', null, null);
INSERT INTO `tbl_deduct` VALUES ('1190', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:20:50', null, null);
INSERT INTO `tbl_deduct` VALUES ('1191', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:21:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1192', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:21:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1193', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:21:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1194', 'CM2009001', 'TM2009001', '10', 'ODB76', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-22 14:21:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1195', '', 'TM2009001', '10', 'ODB79', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-23 13:34:00', null, null);
INSERT INTO `tbl_deduct` VALUES ('1196', '', 'TM2009001', '10', 'ODB79', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-23 13:34:10', null, null);
INSERT INTO `tbl_deduct` VALUES ('1197', '', 'TM2009001', '10', 'ODB79', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-23 13:34:20', null, null);
INSERT INTO `tbl_deduct` VALUES ('1198', '', 'TM2009001', '10', 'ODB79', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-23 13:34:30', null, null);
INSERT INTO `tbl_deduct` VALUES ('1199', '', 'TM2009002', '10', 'ODB92', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1200', '', 'TM2009002', '10', 'ODB95', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1201', 'CM2009002', 'TM2009002', '10', 'ODB96', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1202', '', 'TM2009002', '10', 'ODB93', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1203', '', 'TM2009002', '10', 'ODB92', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:51', null, null);
INSERT INTO `tbl_deduct` VALUES ('1204', '', 'TM2009002', '10', 'ODB93', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:51', null, null);
INSERT INTO `tbl_deduct` VALUES ('1205', '', 'TM2009002', '10', 'ODB95', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:51', null, null);
INSERT INTO `tbl_deduct` VALUES ('1206', 'CM2009002', 'TM2009002', '10', 'ODB96', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:49:51', null, null);
INSERT INTO `tbl_deduct` VALUES ('1207', '', 'TM2009002', '10', 'ODB92', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:01', null, null);
INSERT INTO `tbl_deduct` VALUES ('1208', '', 'TM2009002', '10', 'ODB93', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:01', null, null);
INSERT INTO `tbl_deduct` VALUES ('1209', 'CM2009002', 'TM2009002', '10', 'ODB96', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:01', null, null);
INSERT INTO `tbl_deduct` VALUES ('1210', '', 'TM2009002', '10', 'ODB95', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:01', null, null);
INSERT INTO `tbl_deduct` VALUES ('1211', '', 'TM2009002', '10', 'ODB92', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:11', null, null);
INSERT INTO `tbl_deduct` VALUES ('1212', '', 'TM2009002', '10', 'ODB95', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:11', null, null);
INSERT INTO `tbl_deduct` VALUES ('1213', 'CM2009002', 'TM2009002', '10', 'ODB96', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:11', null, null);
INSERT INTO `tbl_deduct` VALUES ('1214', '', 'TM2009002', '10', 'ODB93', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:12', null, null);
INSERT INTO `tbl_deduct` VALUES ('1215', '', 'TM2009002', '10', 'ODB92', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:21', null, null);
INSERT INTO `tbl_deduct` VALUES ('1216', '', 'TM2009002', '10', 'ODB93', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:21', null, null);
INSERT INTO `tbl_deduct` VALUES ('1217', 'CM2009002', 'TM2009002', '10', 'ODB96', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:21', null, null);
INSERT INTO `tbl_deduct` VALUES ('1218', '', 'TM2009002', '10', 'ODB95', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:21', null, null);
INSERT INTO `tbl_deduct` VALUES ('1219', '', 'TM2009002', '10', 'ODB92', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:31', null, null);
INSERT INTO `tbl_deduct` VALUES ('1220', '', 'TM2009002', '10', 'ODB93', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:31', null, null);
INSERT INTO `tbl_deduct` VALUES ('1221', '', 'TM2009002', '10', 'ODB95', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:31', null, null);
INSERT INTO `tbl_deduct` VALUES ('1222', 'CM2009002', 'TM2009002', '10', 'ODB96', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:31', null, null);
INSERT INTO `tbl_deduct` VALUES ('1223', '', 'TM2009002', '10', 'ODB92', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1224', '', 'TM2009002', '10', 'ODB93', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1225', 'CM2009002', 'TM2009002', '10', 'ODB96', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1226', '', 'TM2009002', '10', 'ODB95', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-25 12:50:41', null, null);
INSERT INTO `tbl_deduct` VALUES ('1227', '', 'TM2009001', '10', 'ODB89', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-26 10:42:38', null, null);
INSERT INTO `tbl_deduct` VALUES ('1228', '', 'TM2009001', '10', 'ODB89', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-26 10:42:47', null, null);
INSERT INTO `tbl_deduct` VALUES ('1229', 'CM2009001', 'TM2009001', '10', 'ODB84', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:19', null, null);
INSERT INTO `tbl_deduct` VALUES ('1230', '', 'TM2009001', '10', 'ODB98', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:19', null, null);
INSERT INTO `tbl_deduct` VALUES ('1231', 'CM2009001', 'TM2009001', '10', 'ODB84', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:29', null, null);
INSERT INTO `tbl_deduct` VALUES ('1232', '', 'TM2009001', '10', 'ODB98', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:29', null, null);
INSERT INTO `tbl_deduct` VALUES ('1233', '', 'TM2009001', '10', 'ODB98', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:39', null, null);
INSERT INTO `tbl_deduct` VALUES ('1234', 'CM2009001', 'TM2009001', '10', 'ODB84', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:39', null, null);
INSERT INTO `tbl_deduct` VALUES ('1235', 'CM2009001', 'TM2009001', '10', 'ODB84', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:49', null, null);
INSERT INTO `tbl_deduct` VALUES ('1236', '', 'TM2009001', '10', 'ODB98', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:49', null, null);
INSERT INTO `tbl_deduct` VALUES ('1237', 'CM2009001', 'TM2009001', '10', 'ODB84', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:59', null, null);
INSERT INTO `tbl_deduct` VALUES ('1238', '', 'TM2009001', '10', 'ODB98', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-09-27 00:48:59', null, null);

-- ----------------------------
-- Table structure for `tbl_deduct_score`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_deduct_score`;
CREATE TABLE `tbl_deduct_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `teamid_deduct` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `deduct_score` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `detail_score` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `admin_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct_score
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_deduct_team_income`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_deduct_team_income`;
CREATE TABLE `tbl_deduct_team_income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamid_dti` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `item_dti` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `income_dti` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id_dti` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `file_name_dti` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path_dti` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `note_dti` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at_dti` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at_dti` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct_team_income
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_deduct_team_score`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_deduct_team_score`;
CREATE TABLE `tbl_deduct_team_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamid_dts` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `deduct_dts` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id_dts` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `detail_score_dts` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name_dts` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path_dts` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at_dts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at_dts` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `admin_by_dts` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct_team_score
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_deductmoney`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_deductmoney`;
CREATE TABLE `tbl_deductmoney` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `node_deductmoney` text CHARACTER SET utf8,
  `price_deductmoney` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status_deductmoney` varchar(255) CHARACTER SET utf8 DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deductmoney
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_delivery`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_delivery`;
CREATE TABLE `tbl_delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) DEFAULT NULL,
  `userId` varchar(255) DEFAULT NULL,
  `doc_id` varchar(255) DEFAULT NULL,
  `price_doc` varchar(200) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_delivery
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_delivery_file`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_delivery_file`;
CREATE TABLE `tbl_delivery_file` (
  `id_d` int(11) NOT NULL AUTO_INCREMENT,
  `order_id_d` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name_d` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path_d` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at_d` datetime DEFAULT NULL,
  `update_at_d` datetime DEFAULT NULL,
  PRIMARY KEY (`id_d`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_delivery_file
-- ----------------------------
INSERT INTO `tbl_delivery_file` VALUES ('1', 'ODB83', 'IMG_42142.PNG', 'uploads/Buy/IMG_42142.PNG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_delivery_file` VALUES ('2', 'ODB83', 'IMG_4249.JPG', 'uploads/Buy/IMG_4249.JPG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_delivery_file` VALUES ('3', 'ODB83', 'IMG_42142.PNG', 'uploads/Buy/IMG_42142.PNG', '2020-09-23 11:32:45', null);
INSERT INTO `tbl_delivery_file` VALUES ('4', 'ODB85', 'IMG_41813.PNG', 'uploads/Buy/IMG_41813.PNG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_delivery_file` VALUES ('5', 'ODB85', 'IMG_41821.PNG', 'uploads/Buy/IMG_41821.PNG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_delivery_file` VALUES ('6', 'ODB85', 'IMG_41821.PNG', 'uploads/Buy/IMG_41821.PNG', '2020-09-23 16:04:38', null);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_deposit
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_feedback`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamId` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `feedback_detail` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `userId` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `notify_team` tinyint(1) DEFAULT '0',
  `status_c_feedack_team` varchar(11) CHARACTER SET utf8 DEFAULT '0' COMMENT '0 = แอดมินยังไม่ได้กดอนุมัติให้ทีม / 1 = แอดมินยืนยันการ feedback ส่งให้ทีมงาน / 2 = ',
  `dated` date DEFAULT NULL,
  `check_status` int(11) DEFAULT '0' COMMENT '0 = Admin feedback / 1 = Client feedback',
  `check_feedback_dalivery` int(11) DEFAULT '0' COMMENT '0 == ยังไม่ส่งงาน // 1 == ทีมงานส่งให้แอดมิน // 2 == แอดมินส่งให้ลูกค้า',
  `status_feedback_read` int(11) DEFAULT '0',
  `check_feedback_order` int(11) DEFAULT '0',
  `re_feedback` varchar(5) CHARACTER SET utf8 NOT NULL DEFAULT '0' COMMENT 'เช็ค การ Re-feedback ถ้า 0 = Feedback / 1 = Re-Feedback',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_feedback
-- ----------------------------
INSERT INTO `tbl_feedback` VALUES ('1', null, 'กกกก', 'ODB62', 'CM2009002', '2020-09-20 14:17:52', '2020-09-20 14:59:57', '1', '1', '2020-09-28', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('2', null, 'lllll', 'ODB62', 'CM2009002', '2020-09-20 15:06:06', null, '1', '0', '2020-09-28', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('3', 'TM2009002', null, 'ODB62', 'CM2009002', '2020-09-20 16:41:20', null, '1', '0', null, '1', '1', '1', '1', '1');
INSERT INTO `tbl_feedback` VALUES ('4', null, '', 'ODB62', 'CM2009002', '2020-09-20 16:41:43', null, '1', '0', '2020-09-24', '1', '1', '0', '0', '1');
INSERT INTO `tbl_feedback` VALUES ('5', null, 'dxfs', 'ODB63', 'CM2009002', '2020-09-20 16:45:21', null, '0', '0', '2020-09-20', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('6', null, 'hah', 'ODB63', 'CM2009002', '2020-09-20 17:23:39', null, '0', '0', '2020-09-20', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('7', null, 'hah', 'ODB63', 'CM2009002', '2020-09-20 17:23:39', null, '0', '0', '2020-09-29', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('8', null, null, 'ODB63', 'CM2009002', '2020-09-20 17:25:25', null, '0', '0', null, '1', '0', '0', '0', '1');
INSERT INTO `tbl_feedback` VALUES ('9', null, 'bjmbvj', 'ODB63', 'CM2009002', '2020-09-20 17:25:43', null, '0', '0', '2020-09-22', '1', '0', '0', '0', '1');
INSERT INTO `tbl_feedback` VALUES ('10', 'TM2009002', 'ssss', 'ODB74', 'CM2009002', '2020-09-20 22:14:35', null, '1', '1', '2020-09-26', '0', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('11', 'TM2009002', 'aaa', 'ODB74', 'CM2009002', '2020-09-20 22:57:34', null, '1', '1', '2020-09-22', '0', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('18', null, 'cvcvcv', 'ODB75', 'CM2009001', '2020-09-21 11:11:37', '2020-09-21 11:54:19', '0', '2', '2020-09-30', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('19', null, 'wweewewewe', 'ODB76', 'CM2009001', '2020-09-21 11:12:08', null, '1', '0', '2020-09-30', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('20', null, null, 'ODB75', 'CM2009001', '2020-09-24 18:03:17', null, '0', '0', null, '1', '0', '0', '0', '1');
INSERT INTO `tbl_feedback` VALUES ('21', null, '', 'ODB88', 'CM2009002', '2020-09-24 18:25:35', '2020-09-24 18:42:00', '0', '0', '2020-09-27', '1', '2', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('22', 'TM2009002', 'aaaa', 'ODB96', 'CM2009002', '2020-09-24 19:28:54', '2020-09-24 19:31:20', '0', '1', '2020-09-27', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('23', 'TM2009002', 'fff', 'ODB99', 'CM2009002', '2020-09-25 12:52:47', '2020-09-25 16:33:33', '0', '1', '2020-09-26', '0', '2', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('24', null, 'fffff', 'ODB99', 'CM2009002', '2020-09-25 13:31:28', '2020-09-25 16:33:33', '0', '1', '2020-10-20', '1', '2', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('25', 'TM2009002', 'aa', 'ODB99', 'CM2009002', '2020-09-25 14:53:21', '2020-09-25 16:33:33', '0', '1', '2020-09-26', '1', '2', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('26', 'TM2009002', 'jhhh', 'ODB99', 'CM2009002', '2020-09-25 15:20:21', '2020-09-25 16:33:33', '0', '1', '2020-09-28', '1', '2', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('27', 'TM2009002', 'kkk', 'ODB99', 'CM2009002', '2020-09-25 15:45:34', '2020-09-25 16:33:33', '0', '1', '2020-09-29', '1', '2', '1', '1', '1');
INSERT INTO `tbl_feedback` VALUES ('28', 'TM2009001', 'Feedback (ODB84)', 'ODB84', 'CM2009001', '2020-09-26 12:38:56', '2020-09-26 13:41:58', '1', '1', '2020-09-30', '0', '1', '1', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('29', 'TM2009001', 'Feedback (ODB84) ครั้ง 2\n', 'ODB84', 'CM2009001', '2020-09-26 12:40:03', '2020-09-26 13:41:58', '1', '1', '2020-10-02', '0', '1', '1', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('31', null, 'Feedback (ODB89)', 'ODB89', 'CM2009001', '2020-09-26 14:04:07', null, '1', '0', '2020-10-01', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('32', 'TM2009001', 'Feedback (ODB84)', 'ODB84', 'CM2009001', '2020-09-26 14:04:57', '2020-09-26 14:05:55', '1', '1', '2020-09-29', '1', '1', '1', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('33', 'TM2009001', 'Feedback (ODB84) Admin\n ', 'ODB84', 'CM2009001', '2020-09-26 21:39:58', null, '1', '1', '2020-09-29', '0', '1', '1', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('34', 'TM2009001', 'Feedback (ODB84)\nAdmin', 'ODB84', 'CM2009001', '2020-09-26 21:41:40', null, '1', '1', '2020-09-30', '0', '1', '1', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('36', null, 'Feedback (ODB77)', 'ODB77', 'CM2009001', '2020-09-27 00:12:24', null, '1', '0', '2020-10-04', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('35', 'TM2009001', 'Feedback (ODB84)\n admin', 'ODB84', 'CM2009001', '2020-09-26 21:46:28', null, '1', '1', '2020-09-29', '0', '0', '1', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('37', 'TM2009001', 'Feedback (ODB77)', 'ODB77', 'CM2009001', '2020-09-27 00:17:21', '2020-09-28 12:04:10', '0', '1', '2020-10-06', '1', '0', '1', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('38', null, 'Feedback (ODB77)', 'ODB77', 'CM2009001', '2020-09-27 00:17:25', null, '1', '0', '2020-10-06', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('39', null, 'Feedback (ODB77) 8', 'ODB77', 'CM2009001', '2020-09-27 00:17:39', null, '1', '0', '2020-10-08', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('40', null, 'Feedback (ODB77) 8', 'ODB77', 'CM2009001', '2020-09-27 00:17:43', null, '1', '0', '2020-10-08', '1', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `tbl_feedback_file`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_feedback_file`;
CREATE TABLE `tbl_feedback_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_feedback` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_feedback_file
-- ----------------------------
INSERT INTO `tbl_feedback_file` VALUES ('1', '1', 'Shards_of_Glass_Feedback_client8.docx', 'uploads/Feedback/Shards_of_Glass_Feedback_client8.docx', '2020-09-20 14:17:52', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('2', '1', 'Shards_of_Glass_Feedback_client9.docx', 'uploads/Feedback/Shards_of_Glass_Feedback_client9.docx', '2020-09-20 14:59:57', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('3', '2', 'Shards_of_Glass_Feedback_client10.docx', 'uploads/Feedback/Shards_of_Glass_Feedback_client10.docx', '2020-09-20 15:06:06', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('4', '4', 'And_When_Did_You_Last_See_Your_Father__Main_file.docx', 'uploads/Feedback/And_When_Did_You_Last_See_Your_Father__Main_file.docx', '2020-09-20 16:41:43', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('5', '9', 'And_When_Did_You_Last_See_Your_Father__Main_file1.docx', 'uploads/Feedback/And_When_Did_You_Last_See_Your_Father__Main_file1.docx', '2020-09-20 17:25:44', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('6', '10', 'White__Sell_3.docx', 'uploads/Feedback/White__Sell_3.docx', '2020-09-20 22:14:35', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('7', '11', 'The_Dream_Asylum_Rewrite1.docx', 'uploads/Feedback/The_Dream_Asylum_Rewrite1.docx', '2020-09-20 22:57:34', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('13', '18', 'feedback_Depa_Vocher_27082020.pdf', 'uploads/Feedback/feedback_Depa_Vocher_27082020.pdf', '2020-09-21 11:11:38', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('14', '19', 'feedback_Depa_Vocher_270820201.pdf', 'uploads/Feedback/feedback_Depa_Vocher_270820201.pdf', '2020-09-21 11:12:08', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('15', '21', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN7.docx', 'uploads/Feedback/Night_Terrors_in_Cairo_FEEDBACK_ADMIN7.docx', '2020-09-24 18:25:35', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('16', '22', 'White_Lies_Sell_2.docx', 'uploads/Feedback/White_Lies_Sell_2.docx', '2020-09-24 19:28:54', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('17', '22', 'Umbrella_Sell_11.docx', 'uploads/Feedback/Umbrella_Sell_11.docx', '2020-09-24 19:31:20', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('18', '23', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN8.docx', 'uploads/Feedback/Night_Terrors_in_Cairo_FEEDBACK_ADMIN8.docx', '2020-09-25 12:52:47', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('19', '24', 'Shards_of_Glass_Feedback_client11.docx', 'uploads/Feedback/Shards_of_Glass_Feedback_client11.docx', '2020-09-25 13:31:28', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('20', '25', 'Shards_of_Glass_Feedback_client12.docx', 'uploads/Feedback/Shards_of_Glass_Feedback_client12.docx', '2020-09-25 14:53:21', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('21', '25', 'Umbrella_Sell_12.docx', 'uploads/Feedback/Umbrella_Sell_12.docx', '2020-09-25 15:04:25', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('22', '26', 'The_Lighthouse_More_file1.docx', 'uploads/Feedback/The_Lighthouse_More_file1.docx', '2020-09-25 15:20:21', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('23', '26', 'The_Lighthouse_More_file2.docx', 'uploads/Feedback/The_Lighthouse_More_file2.docx', '2020-09-25 15:22:01', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('24', '27', 'White__Sell_31.docx', 'uploads/Feedback/White__Sell_31.docx', '2020-09-25 16:07:47', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('25', '28', 'LINE_P25630805_160507710.png', 'uploads/Feedback/LINE_P25630805_160507710.png', '2020-09-26 12:38:56', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('26', '28', 'LINE_P25630805_1600423.png', 'uploads/Feedback/LINE_P25630805_1600423.png', '2020-09-26 12:38:56', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('27', '29', 'Finalist_Report_proje01.docx', 'uploads/Feedback/Finalist_Report_proje01.docx', '2020-09-26 12:40:04', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('28', '31', 'Finalist_Report_project1.docx', 'uploads/Feedback/Finalist_Report_project1.docx', '2020-09-26 14:04:07', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('29', '33', 'Programmer_แก้ไข.docx', 'uploads/Feedback/Programmer_แก้ไข.docx', '2020-09-26 21:39:58', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('30', '34', 'Data_input.docx', 'uploads/Feedback/Data_input.docx', '2020-09-26 21:41:40', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('31', '35', 'Data_input1.docx', 'uploads/Feedback/Data_input1.docx', '2020-09-26 21:46:29', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `tbl_folder`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_folder`;
CREATE TABLE `tbl_folder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_team_folder` varchar(100) DEFAULT NULL,
  `name_folder` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `cancel_status` int(2) DEFAULT '0' COMMENT '0 ยังไม่ได้ลบ / 1 ลบโฟร์เดอร์แล้ว',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_folder
-- ----------------------------
INSERT INTO `tbl_folder` VALUES ('1', 'TM2009002', 't1', '2020-09-20 21:34:16', '2020-09-20 21:34:16', '1');
INSERT INTO `tbl_folder` VALUES ('2', 'TM2009002', 'T1', '2020-09-24 11:39:12', '2020-09-24 11:39:12', '1');
INSERT INTO `tbl_folder` VALUES ('3', 'TM2009001', 'ทดสอบ', '2020-09-22 12:14:14', '2020-09-22 12:14:14', '1');
INSERT INTO `tbl_folder` VALUES ('4', 'TM2009001', 'ทดสอบ 2', '2020-09-22 12:14:16', '2020-09-22 12:14:16', '1');
INSERT INTO `tbl_folder` VALUES ('5', 'TM2009001', 'TEST1', '2020-09-24 20:20:07', '2020-09-24 20:20:07', '1');
INSERT INTO `tbl_folder` VALUES ('6', 'TM2009001', 'TEST2', '2020-09-24 20:20:09', '2020-09-24 20:20:09', '1');
INSERT INTO `tbl_folder` VALUES ('7', 'TM2009002', 'Task1', '2020-09-24 11:39:08', null, '0');
INSERT INTO `tbl_folder` VALUES ('8', 'TM2009002', 'task2', '2020-09-24 18:54:03', null, '0');
INSERT INTO `tbl_folder` VALUES ('9', 'TM2009001', 'YOU', '2020-09-26 11:48:21', '2020-09-26 11:48:21', '1');
INSERT INTO `tbl_folder` VALUES ('10', 'TM2009001', 'News', '2020-09-26 21:34:31', '2020-09-26 21:34:31', '1');
INSERT INTO `tbl_folder` VALUES ('11', 'TM2009001', 'ORO', '2020-09-26 21:34:33', '2020-09-26 21:34:33', '1');
INSERT INTO `tbl_folder` VALUES ('12', 'TM2009001', 'ROOM', '2020-09-26 21:40:19', '2020-09-26 21:40:19', '1');
INSERT INTO `tbl_folder` VALUES ('13', 'TM2009001', 'SOS', '2020-09-26 21:40:22', '2020-09-26 21:40:22', '1');
INSERT INTO `tbl_folder` VALUES ('14', 'TM2009001', 'Gold', '2020-09-26 21:41:57', '2020-09-26 21:41:57', '1');
INSERT INTO `tbl_folder` VALUES ('15', 'TM2009001', 'Silver', '2020-09-26 21:41:55', '2020-09-26 21:41:55', '1');
INSERT INTO `tbl_folder` VALUES ('16', 'TM2009001', 'Demon', '2020-09-26 21:42:04', null, '0');

-- ----------------------------
-- Table structure for `tbl_income_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_income_team`;
CREATE TABLE `tbl_income_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamid` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `income` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `note` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_income_team
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_item_educational`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_item_educational`;
CREATE TABLE `tbl_item_educational` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_educational` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_item_educational
-- ----------------------------
INSERT INTO `tbl_item_educational` VALUES ('1', 'B.A.', '2019-12-26 13:31:33', null);
INSERT INTO `tbl_item_educational` VALUES ('2', 'B.Sc.', '2019-12-26 18:02:22', null);
INSERT INTO `tbl_item_educational` VALUES ('3', 'BCA', '2020-01-03 14:48:42', null);
INSERT INTO `tbl_item_educational` VALUES ('4', 'B.Arch', '2020-01-03 14:48:48', null);
INSERT INTO `tbl_item_educational` VALUES ('5', 'B.B.A.', '2020-01-03 14:48:59', null);
INSERT INTO `tbl_item_educational` VALUES ('6', 'B.Com', '2020-01-03 14:49:10', null);
INSERT INTO `tbl_item_educational` VALUES ('7', 'B.Ed', '2020-01-03 14:51:22', null);
INSERT INTO `tbl_item_educational` VALUES ('8', 'BDS', '2020-01-03 14:51:31', null);
INSERT INTO `tbl_item_educational` VALUES ('9', 'BHM', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('10', 'B.Pharma', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('11', 'B.Tech', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('12', 'B.STAT', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('13', 'BVSC', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('14', 'CA', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('15', 'CPA', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('16', 'CS', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('17', 'CWA', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('18', 'CFA', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('19', 'CFP', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('20', 'Dlploma', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('21', 'Doctorate-Phd', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('22', 'D.Phil', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('23', 'ICWA', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('24', 'Integrated PG Course', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('25', 'I.T.I', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('26', 'LLB', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('27', 'LLM', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('28', 'M.A.', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('29', 'M.Arch', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('30', 'MBBS', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('31', 'M.Com', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('32', 'M.Ed.', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('33', 'M.Pharma', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('34', 'M.Sc', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('35', 'M.Tech', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('36', 'MBA', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('37', 'MCA', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('38', 'MS', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('39', 'MVSC', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('40', 'MCM', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('41', 'MPHIL', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('42', 'M.D.S', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('43', 'M.D.', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('44', 'M.STAT', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('45', 'M.Math', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('46', 'PG.Diploma', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('47', 'Ph.D', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('48', 'Polytechnic', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('49', 'Graduate Degree', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('50', 'Postgraduate Degree', '2020-08-14 16:39:14', null);
INSERT INTO `tbl_item_educational` VALUES ('51', 'Master\'s Degree', '2020-08-14 16:39:14', null);

-- ----------------------------
-- Table structure for `tbl_item_position`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_item_position`;
CREATE TABLE `tbl_item_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_item` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_item_position
-- ----------------------------
INSERT INTO `tbl_item_position` VALUES ('1', 'ตำแหน่งอาหาร', '2019-12-26 13:31:33', null);
INSERT INTO `tbl_item_position` VALUES ('2', 'ตำแหน่งคณิตศาสตร์', '2019-12-26 18:02:22', null);
INSERT INTO `tbl_item_position` VALUES ('3', 'ตำแหน่งดาราศาสตร์', '2020-01-03 14:48:42', null);
INSERT INTO `tbl_item_position` VALUES ('4', 'ตำแหน่งภาษาไทย', '2020-01-03 14:48:48', null);
INSERT INTO `tbl_item_position` VALUES ('5', 'ตำแหน่งอวกาศ', '2020-01-03 14:48:59', null);
INSERT INTO `tbl_item_position` VALUES ('6', 'ตำแหน่งดนตรี', '2020-01-03 14:49:10', null);
INSERT INTO `tbl_item_position` VALUES ('7', 'ตำแหน่งการเมือง', '2020-01-03 14:51:22', null);
INSERT INTO `tbl_item_position` VALUES ('8', 'ตำแหน่งรัฐบาล', '2020-01-03 14:51:31', null);

-- ----------------------------
-- Table structure for `tbl_job_position`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_job_position`;
CREATE TABLE `tbl_job_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_team` int(11) DEFAULT NULL,
  `job_position` varchar(150) DEFAULT NULL,
  `status_approve` varchar(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_job_position
-- ----------------------------
INSERT INTO `tbl_job_position` VALUES ('1', '1', '1', '1', '2020-09-19 17:47:00', null);
INSERT INTO `tbl_job_position` VALUES ('2', '1', '2', '1', '2020-09-19 17:47:00', null);
INSERT INTO `tbl_job_position` VALUES ('3', '1', '3', '1', '2020-09-19 17:47:00', null);
INSERT INTO `tbl_job_position` VALUES ('4', '2', '1', '1', '2020-09-20 16:05:13', null);
INSERT INTO `tbl_job_position` VALUES ('5', '2', '3', '0', '2020-09-25 19:03:35', null);
INSERT INTO `tbl_job_position` VALUES ('6', '3', '1', '0', '2020-09-26 17:26:49', null);
INSERT INTO `tbl_job_position` VALUES ('7', '3', '3', '0', '2020-09-26 17:26:49', null);

-- ----------------------------
-- Table structure for `tbl_morefile_GT`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_morefile_GT`;
CREATE TABLE `tbl_morefile_GT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamId` varchar(100) DEFAULT NULL,
  `more_detail` text CHARACTER SET utf8,
  `more_detail_team` text,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `userId` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `notify_team` tinyint(1) DEFAULT '0',
  `status_more_file` int(11) DEFAULT '0' COMMENT 'เช็คสถานะว่า เป็นการส่ง morefile เพิ่มเติม หรือ ส่งไฟล์ GT ต้องแต่แรกอยู่แล้ว',
  `status_see_more_file_team` int(11) DEFAULT '0' COMMENT 'สถานะ Admin ต้องกดอนุมัติก่อนถึงจะ ทีมงานจะเห็น morefile ',
  `status_approved_more_file` int(11) DEFAULT '0' COMMENT 'สถนาะการยืนยันการมองเห็นไฟล์ เพิ่ทเติมจากทางทีมงาน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_morefile_GT
-- ----------------------------
INSERT INTO `tbl_morefile_GT` VALUES ('1', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, 'ODB51', 'CM2009001', '2020-09-20 11:20:13', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('2', null, '', null, 'ODB52', 'CM2009001', '2020-09-20 11:21:29', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('3', null, '', null, 'ODB53', 'CM2009001', '2020-09-20 11:23:34', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('4', null, '', null, 'ODB54', 'CM2009001', '2020-09-20 11:24:19', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('5', null, '', null, 'ODB55', 'CM2009001', '2020-09-20 11:32:19', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('6', null, '', null, 'ODB56', 'CM2009001', '2020-09-20 12:20:55', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('7', null, '', null, 'ODB57', 'CM2009001', '2020-09-20 12:21:13', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('8', null, '', null, 'ODB58', 'CM2009001', '2020-09-20 12:21:45', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('9', null, '', null, 'ODB59', 'CM2009001', '2020-09-20 12:23:46', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('10', null, '', null, 'ODB60', 'CM2009002', '2020-09-20 12:39:30', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('11', null, '', null, 'ODB61', 'CM2009002', '2020-09-20 12:40:44', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('12', null, '', null, 'ODB62', 'CM2009002', '2020-09-20 12:42:48', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('13', null, '', null, 'ODB63', 'CM2009002', '2020-09-20 12:49:30', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('14', null, '', null, 'ODB64', 'CM2009002', '2020-09-20 13:14:11', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('15', null, 'aa', null, 'ODB65', 'CM2009002', '2020-09-20 13:20:52', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('16', null, '', null, 'ODB66', 'CM2009002', '2020-09-20 15:48:07', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('17', null, '', null, 'ODB67', 'CM2009002', '2020-09-20 15:48:16', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('18', null, '', null, 'ODB68', 'CM2009002', '2020-09-20 15:48:28', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('19', null, '', null, 'ODB69', 'CM2009002', '2020-09-20 17:46:52', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('20', null, '', null, 'ODB70', 'CM2009002', '2020-09-20 18:31:23', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('21', null, '', null, 'ODB71', 'CM2009002', '2020-09-20 18:31:35', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('22', null, '', null, 'ODB72', 'CM2009002', '2020-09-20 18:31:46', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('23', null, '', null, 'ODB73', 'CM2009002', '2020-09-20 18:31:59', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('24', 'TM2009002', '', null, 'ODB74', 'CM2009002', '2020-09-20 19:04:47', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('25', 'TM2009002', null, null, 'ODB74', 'CM2009002', '2020-09-20 19:12:00', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('26', 'TM2009002', 'hhhhh', null, 'ODB74', 'CM2009002', '2020-09-20 20:01:00', null, '0', '1', '11', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('27', null, '545454545454', null, 'ODB75', 'CM2009001', '2020-09-21 10:14:07', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('28', null, '', null, 'ODB76', 'CM2009001', '2020-09-21 10:14:53', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('29', null, '', null, 'ODB77', 'CM2009001', '2020-09-21 13:42:03', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('30', null, '', null, 'ODB78', 'CM2009001', '2020-09-21 13:45:53', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('31', null, '', null, 'ODB79', 'CM2009001', '2020-09-21 16:22:08', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('32', null, '', null, 'ODB80', 'CM2009001', '2020-09-21 16:54:22', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('33', null, '', null, 'ODB81', 'CM2009001', '2020-09-21 16:54:38', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('34', null, 'ในการสั่งออร์เดอร์แต่ล่ะครั้งต้องเป็นออร์เดอร์เดียวกันเท่านั้น', null, 'ODB82', 'CM2009001', '2020-09-21 23:39:53', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('35', null, 'หากท่านต้องการสั่งออร์เดอร์มากกว่า1ออร์เดอร์ท่านสามารถกดสั่งได้ในครั้งต่อไป', null, 'ODB83', 'CM2009001', '2020-09-21 23:44:12', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('36', null, '1111', null, 'ODB84', 'CM2009001', '2020-09-21 23:50:09', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('37', null, 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File', null, 'ODB85', 'CM2009001', '2020-09-23 14:37:11', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('38', null, 'You can buy GT Document.', null, 'ODB86', 'CM2009001', '2020-09-23 14:39:42', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('39', null, 'gg', null, 'ODB87', 'CM2009002', '2020-09-24 12:11:47', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('40', null, '', null, 'ODB88', 'CM2009002', '2020-09-24 16:51:14', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('41', null, 'More details.', null, 'ODB89', 'CM2009001', '2020-09-24 18:10:57', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('42', null, '', null, 'ODB90', 'CM2009002', '2020-09-24 18:14:32', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('43', null, '', null, 'ODB91', 'CM2009002', '2020-09-24 18:30:30', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('44', null, '', null, 'ODB92', 'CM2009002', '2020-09-24 18:33:25', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('45', null, '', null, 'ODB93', 'CM2009002', '2020-09-24 18:38:06', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('46', null, '', null, 'ODB94', 'CM2009002', '2020-09-24 18:51:39', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('47', null, '', null, 'ODB95', 'CM2009002', '2020-09-24 19:09:54', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('48', null, '', null, 'ODB96', 'CM2009002', '2020-09-24 19:22:04', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('49', null, 'More details.', null, 'ODB97', 'CM2009001', '2020-09-24 19:32:06', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('50', null, '', null, 'ODB98', 'CM2009001', '2020-09-24 20:08:22', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('51', null, 'aaa', null, 'ODB99', 'CM2009002', '2020-09-25 12:40:07', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('52', null, '* อธิบายการสั่งOrder', null, 'ODB100', 'CM2009001', '2020-09-26 11:39:07', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('53', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, 'ODB101', 'CM2009001', '2020-09-26 15:46:49', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('54', null, 'More details.', null, 'ODB102', 'CM2009001', '2020-09-26 16:26:27', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('55', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, 'ODB103', 'CM2009001', '2020-09-26 16:45:02', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('56', null, 'ดเดเดเดเ', null, 'ODB104', 'CM2009001', '2020-09-26 18:56:32', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('57', null, '5555', null, 'ODB105', 'CM2009001', '2020-09-26 19:00:16', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('58', null, '', null, 'ODB106', null, '2020-09-26 23:41:31', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('59', null, 'aa', null, 'ODB107', 'CM2009002', '2020-09-27 11:26:24', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('60', null, '', null, 'ODB108', 'CM2009002', '2020-09-27 11:30:05', null, '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `tbl_not_complete_file`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_not_complete_file`;
CREATE TABLE `tbl_not_complete_file` (
  `id_nc` int(11) NOT NULL AUTO_INCREMENT,
  `id_upload_team` varchar(100) DEFAULT NULL COMMENT 'id ของตาราง tbl_upload_team',
  `file_name_notcomplete` varchar(255) DEFAULT NULL COMMENT 'การแนบไฟล์จากการกด not complete ของ admin หน้า complete',
  `path_notcomplete` varchar(255) DEFAULT NULL COMMENT 'การแนบไฟล์จากการกด not complete ของ admin หน้า complete',
  `create_at_ncf` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at_ncf` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_nc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_not_complete_file
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_notification`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_notification`;
CREATE TABLE `tbl_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTeam` varchar(255) NOT NULL,
  `notification_detail` text CHARACTER SET utf8,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_notification
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_order_f`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order_f`;
CREATE TABLE `tbl_order_f` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_main` varchar(255) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_order_f
-- ----------------------------
INSERT INTO `tbl_order_f` VALUES ('1', 'ODB1', '2020-09-19', '1');
INSERT INTO `tbl_order_f` VALUES ('2', 'ODB2', '2020-09-19', '1');
INSERT INTO `tbl_order_f` VALUES ('3', 'ODB3', '2020-09-19', '1');
INSERT INTO `tbl_order_f` VALUES ('4', 'ODB4', '2020-09-19', '1');
INSERT INTO `tbl_order_f` VALUES ('5', 'ODB5', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('6', 'ODB6', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('7', 'ODB7', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('8', 'ODB8', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('9', 'ODB9', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('10', 'ODB10', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('11', 'ODB11', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('12', 'ODB12', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('13', 'ODB13', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('14', 'ODB14', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('15', 'ODB15', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('16', 'ODB16', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('17', 'ODB17', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('18', 'ODB18', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('19', 'ODB19', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('20', 'ODB20', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('21', 'ODB21', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('22', 'ODB22', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('23', 'ODB23', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('24', 'ODB24', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('25', 'ODB25', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('26', 'ODB26', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('27', 'ODB27', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('28', 'ODB28', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('29', 'ODB29', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('30', 'ODB30', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('31', 'ODB31', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('32', 'ODB32', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('33', 'ODB33', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('34', 'ODB34', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('35', 'ODB35', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('36', 'ODB36', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('37', 'ODB37', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('38', 'ODB38', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('39', 'ODB39', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('40', 'ODB40', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('41', 'ODB41', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('42', 'ODB42', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('43', 'ODB43', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('44', 'ODB44', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('45', 'ODB45', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('46', 'ODB46', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('47', 'ODB47', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('48', 'ODB48', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('49', 'ODB49', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('50', 'ODB50', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('51', 'ODB51', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('52', 'ODB52', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('53', 'ODB53', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('54', 'ODB54', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('55', 'ODB55', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('56', 'ODB56', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('57', 'ODB57', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('58', 'ODB58', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('59', 'ODB59', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('60', 'ODB60', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('61', 'ODB61', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('62', 'ODB62', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('63', 'ODB63', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('64', 'ODB64', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('65', 'ODB65', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('66', 'ODB66', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('67', 'ODB67', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('68', 'ODB68', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('69', 'ODB69', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('70', 'ODB70', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('71', 'ODB71', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('72', 'ODB72', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('73', 'ODB73', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('74', 'ODB74', '2020-09-20', '1');
INSERT INTO `tbl_order_f` VALUES ('75', 'ODB75', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('76', 'ODB76', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('77', 'ODB77', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('78', 'ODB78', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('79', 'ODB79', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('80', 'ODB80', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('81', 'ODB81', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('82', 'ODB82', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('83', 'ODB83', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('84', 'ODB84', '2020-09-21', '1');
INSERT INTO `tbl_order_f` VALUES ('85', 'ODB85', '2020-09-23', '1');
INSERT INTO `tbl_order_f` VALUES ('86', 'ODB86', '2020-09-23', '1');
INSERT INTO `tbl_order_f` VALUES ('87', 'ODB87', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('88', 'ODB88', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('89', 'ODB89', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('90', 'ODB90', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('91', 'ODB91', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('92', 'ODB92', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('93', 'ODB93', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('94', 'ODB94', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('95', 'ODB95', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('96', 'ODB96', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('97', 'ODB97', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('98', 'ODB98', '2020-09-24', '1');
INSERT INTO `tbl_order_f` VALUES ('99', 'ODB99', '2020-09-25', '1');
INSERT INTO `tbl_order_f` VALUES ('100', 'ODB100', '2020-09-26', '1');
INSERT INTO `tbl_order_f` VALUES ('101', 'ODB101', '2020-09-26', '1');
INSERT INTO `tbl_order_f` VALUES ('102', 'ODB102', '2020-09-26', '1');
INSERT INTO `tbl_order_f` VALUES ('103', 'ODB103', '2020-09-26', '1');
INSERT INTO `tbl_order_f` VALUES ('104', 'ODB104', '2020-09-26', '1');
INSERT INTO `tbl_order_f` VALUES ('105', 'ODB105', '2020-09-26', '1');
INSERT INTO `tbl_order_f` VALUES ('106', 'ODB106', '2020-09-26', '1');
INSERT INTO `tbl_order_f` VALUES ('107', 'ODB107', '2020-09-27', '1');
INSERT INTO `tbl_order_f` VALUES ('108', 'ODB108', '2020-09-27', '1');

-- ----------------------------
-- Table structure for `tbl_order_s`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order_s`;
CREATE TABLE `tbl_order_s` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_main` varchar(255) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_order_s
-- ----------------------------
INSERT INTO `tbl_order_s` VALUES ('1', 'ODS1', '2020-09-18', '1');
INSERT INTO `tbl_order_s` VALUES ('2', 'ODS2', '2020-09-18', '1');
INSERT INTO `tbl_order_s` VALUES ('3', 'ODS3', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('4', 'ODS4', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('5', 'ODS5', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('6', 'ODS6', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('7', 'ODS7', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('8', 'ODS8', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('9', 'ODS9', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('10', 'ODS10', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('11', 'ODS11', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('12', 'ODS12', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('13', 'ODS13', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('14', 'ODS14', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('15', 'ODS15', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('16', 'ODS16', '2020-09-19', '1');
INSERT INTO `tbl_order_s` VALUES ('17', 'ODS17', '2020-09-22', '1');
INSERT INTO `tbl_order_s` VALUES ('18', 'ODS18', '2020-09-22', '1');
INSERT INTO `tbl_order_s` VALUES ('19', 'ODS19', '2020-09-22', '1');

-- ----------------------------
-- Table structure for `tbl_otp`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_otp`;
CREATE TABLE `tbl_otp` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `otp` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_otp
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_package`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_package`;
CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_pk` varchar(200) DEFAULT NULL,
  `price_pk` decimal(22,2) DEFAULT NULL,
  `description_pk` text,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `userId_pk` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `time_pk` varchar(100) DEFAULT NULL,
  `month_pk` varchar(100) DEFAULT NULL COMMENT 'จำนวนเดือน',
  `commission_price` decimal(22,2) DEFAULT NULL,
  `new_price` decimal(22,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_package
-- ----------------------------
INSERT INTO `tbl_package` VALUES ('1', 'Silver', '9.00', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-09-15 00:00:00', '2020-09-15 00:00:00', null, '0', 'mo', '3', '1.80', '7.20');
INSERT INTO `tbl_package` VALUES ('2', 'Gold', '19.00', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-09-15 00:00:00', '2020-09-15 00:00:00', null, '0', 'mo', '12', '3.80', '15.20');
INSERT INTO `tbl_package` VALUES ('3', 'Diamond', '49.00', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-09-15 00:00:00', '2020-09-15 00:00:00', null, '0', 'mo', '12', '9.80', '39.20');

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
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `create_time` datetime NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `status_drop` tinyint(1) DEFAULT NULL,
  `package_pay` varchar(11) DEFAULT NULL COMMENT 'เก็บ id package ไว้เช็ค tbl_package',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_paypal
-- ----------------------------
INSERT INTO `tbl_paypal` VALUES ('1', '4NP861472G5505525', 'J3GJEC9GX23VS', '49', 'USD', 'CM2009002', 'John', 'Doe', '2020-09-18 15:54:57', '2020-10-18 15:54:57', '1', '3');
INSERT INTO `tbl_paypal` VALUES ('4', '7F682199LX1379621', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-19 10:11:02', '2020-10-19 10:11:02', '1', '2');
INSERT INTO `tbl_paypal` VALUES ('5', '1H574693A18787748', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-26 14:51:34', '2020-09-26 14:51:34', '0', '2');
INSERT INTO `tbl_paypal` VALUES ('6', '6M468564PP159191Y', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009003', 'John', 'Doe', '2020-09-26 15:22:32', '2020-09-26 15:22:32', '0', '2');

-- ----------------------------
-- Table structure for `tbl_poster`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_poster`;
CREATE TABLE `tbl_poster` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_file` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_poster
-- ----------------------------
INSERT INTO `tbl_poster` VALUES ('11', 'ทดลองกรอก', 'poster-1589511127.jpg', '2020-05-15 09:52:07');

-- ----------------------------
-- Table structure for `tbl_price_management`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_price_management`;
CREATE TABLE `tbl_price_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `note` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_price_management
-- ----------------------------
INSERT INTO `tbl_price_management` VALUES ('1', '10', 'ค่าธรรมเนียม', '2020-07-07 19:28:00', '2020-07-07 19:28:00');
INSERT INTO `tbl_price_management` VALUES ('2', '100', 'ราคารางวัลที่ cashback ที่จะได้', '2020-06-24 15:52:03', '2020-06-24 15:52:04');
INSERT INTO `tbl_price_management` VALUES ('3', '30', 'จำนวนออเดอร์ของลูกค้าที่ต้องทำ ให้ถึงเผื่อได้รับรางวัล cashback', '2020-06-24 15:52:03', '2020-06-24 15:52:04');
INSERT INTO `tbl_price_management` VALUES ('4', '100', 'ราคารางวัลที่จะให้ทีมงาน หน่วยเงิน USD', '2020-09-10 16:26:02', '2020-09-10 16:26:01');
INSERT INTO `tbl_price_management` VALUES ('5', '100', 'จำนวน score ที่จะต้องทำให้ถึงเป้าเพื่อรับรางวัลพิเศษ ของทีมงาน', '2020-09-10 16:26:02', '2020-09-10 16:26:01');
INSERT INTO `tbl_price_management` VALUES ('6', '30', 'จำนวนเปอร์เซนต์ในการหักเงิน ของ Re feedback', '2020-09-10 16:25:36', '2020-09-10 16:25:35');

-- ----------------------------
-- Table structure for `tbl_refeedback`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_refeedback`;
CREATE TABLE `tbl_refeedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_re` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Refund คืนเงิน (กรณีOrderเสียหาย)  / Rewards รางวัล (กรณีสั่งครบจำนวนOrder…) ',
  `userId_re` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price_re` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id_re` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `detail_re` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at_re` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at_re` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_refeedback
-- ----------------------------

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
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_rejected
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_reward`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_reward`;
CREATE TABLE `tbl_reward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId_reward` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `reward` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `detail_reward` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_reward
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_score`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_score`;
CREATE TABLE `tbl_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_sc` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'สถานะจะมีเงื่อนไขการแสดง Type_sc ต้องเท่ากับ bonus หรือ score',
  `userId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `teamid_sc` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `score` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status_sc` int(11) DEFAULT '0' COMMENT 'สถานะจะมีเงื่อนไขการแสดง Type_sc ต้องเท่ากับ bonus จะเข้าเงื่อนไขต่อขึ้น pop-up / 0 = แสดง pop up อยู่  / 1 = ไม่ต้องแสดงอีก',
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_score
-- ----------------------------
INSERT INTO `tbl_score` VALUES ('1', 'bonus', 'CM2004001', 'TM1', '100', 'ODB1', 'ยินดีด้วย', '1', '2020-09-17 13:19:24', null);

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
-- Table structure for `tbl_send_email_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_send_email_team`;
CREATE TABLE `tbl_send_email_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id_team` varchar(255) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_send_email_team
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_session`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_session`;
CREATE TABLE `tbl_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamId` int(11) DEFAULT NULL,
  `status_check` int(11) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_session
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_session_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_session_admin`;
CREATE TABLE `tbl_session_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_session_admin
-- ----------------------------
INSERT INTO `tbl_session_admin` VALUES ('1', 'A20200504', 'Login', '2020-09-18 15:26:34');
INSERT INTO `tbl_session_admin` VALUES ('2', 'A20200504', 'Login', '2020-09-18 15:28:51');
INSERT INTO `tbl_session_admin` VALUES ('3', 'A20200504', 'Login', '2020-09-18 21:14:06');
INSERT INTO `tbl_session_admin` VALUES ('4', 'A20200504', 'Login', '2020-09-19 08:35:00');
INSERT INTO `tbl_session_admin` VALUES ('5', 'A20200504', 'Login', '2020-09-19 09:13:55');
INSERT INTO `tbl_session_admin` VALUES ('6', 'A20200504', 'Login', '2020-09-19 11:55:15');
INSERT INTO `tbl_session_admin` VALUES ('7', 'A20200504', 'Login', '2020-09-19 13:27:30');
INSERT INTO `tbl_session_admin` VALUES ('8', 'A20200504', 'Login', '2020-09-19 14:46:52');
INSERT INTO `tbl_session_admin` VALUES ('9', 'A20200504', 'Login', '2020-09-19 15:20:20');
INSERT INTO `tbl_session_admin` VALUES ('10', 'A20200504', 'Login', '2020-09-19 15:32:43');
INSERT INTO `tbl_session_admin` VALUES ('11', 'A20200504', 'Login', '2020-09-19 15:32:47');
INSERT INTO `tbl_session_admin` VALUES ('12', 'A20200504', 'Login', '2020-09-19 17:48:29');
INSERT INTO `tbl_session_admin` VALUES ('13', 'A20200504', 'Login', '2020-09-19 23:06:23');
INSERT INTO `tbl_session_admin` VALUES ('14', 'A20200504', 'Login', '2020-09-20 08:54:02');
INSERT INTO `tbl_session_admin` VALUES ('15', 'A20200504', 'Login', '2020-09-20 08:55:23');
INSERT INTO `tbl_session_admin` VALUES ('16', 'A20200504', 'Login', '2020-09-20 09:17:59');
INSERT INTO `tbl_session_admin` VALUES ('17', 'A20200504', 'Login', '2020-09-20 09:29:22');
INSERT INTO `tbl_session_admin` VALUES ('18', 'A20200504', 'Login', '2020-09-20 10:32:18');
INSERT INTO `tbl_session_admin` VALUES ('19', 'A20200504', 'Login', '2020-09-20 11:42:28');
INSERT INTO `tbl_session_admin` VALUES ('20', 'A20200504', 'Login', '2020-09-20 12:07:22');
INSERT INTO `tbl_session_admin` VALUES ('21', 'A20200504', 'Login', '2020-09-20 12:31:57');
INSERT INTO `tbl_session_admin` VALUES ('22', 'A20200504', 'Login', '2020-09-20 13:29:56');
INSERT INTO `tbl_session_admin` VALUES ('23', 'A20200504', 'Login', '2020-09-20 16:06:03');
INSERT INTO `tbl_session_admin` VALUES ('24', 'A20200504', 'Login', '2020-09-20 16:07:58');
INSERT INTO `tbl_session_admin` VALUES ('25', 'A20200504', 'Login', '2020-09-20 16:18:19');
INSERT INTO `tbl_session_admin` VALUES ('26', 'A20200504', 'Login', '2020-09-20 16:40:41');
INSERT INTO `tbl_session_admin` VALUES ('27', 'A20200504', 'Login', '2020-09-20 16:44:14');
INSERT INTO `tbl_session_admin` VALUES ('28', 'A20200504', 'Login', '2020-09-20 16:45:45');
INSERT INTO `tbl_session_admin` VALUES ('29', 'A20200504', 'Login', '2020-09-20 16:55:37');
INSERT INTO `tbl_session_admin` VALUES ('30', 'A20200504', 'Login', '2020-09-20 17:24:10');
INSERT INTO `tbl_session_admin` VALUES ('31', 'A20200504', 'Login', '2020-09-20 18:19:57');
INSERT INTO `tbl_session_admin` VALUES ('32', 'A20200504', 'Login', '2020-09-20 18:32:11');
INSERT INTO `tbl_session_admin` VALUES ('33', 'A20200504', 'Login', '2020-09-20 19:19:42');
INSERT INTO `tbl_session_admin` VALUES ('34', 'A20200504', 'Login', '2020-09-20 20:02:26');
INSERT INTO `tbl_session_admin` VALUES ('35', 'A20200504', 'Login', '2020-09-20 20:59:12');
INSERT INTO `tbl_session_admin` VALUES ('36', 'A20200504', 'Login', '2020-09-21 10:07:33');
INSERT INTO `tbl_session_admin` VALUES ('37', 'A20200504', 'Login', '2020-09-21 10:15:27');
INSERT INTO `tbl_session_admin` VALUES ('38', 'A20200504', 'Login', '2020-09-21 10:33:24');
INSERT INTO `tbl_session_admin` VALUES ('39', 'A20200504', 'Login', '2020-09-21 10:37:46');
INSERT INTO `tbl_session_admin` VALUES ('40', 'A20200504', 'Login', '2020-09-21 11:02:03');
INSERT INTO `tbl_session_admin` VALUES ('41', 'A20200504', 'Login', '2020-09-21 11:13:22');
INSERT INTO `tbl_session_admin` VALUES ('42', 'A20200504', 'Login', '2020-09-21 13:04:25');
INSERT INTO `tbl_session_admin` VALUES ('43', 'A20200504', 'Login', '2020-09-21 13:40:28');
INSERT INTO `tbl_session_admin` VALUES ('44', 'A20200504', 'Login', '2020-09-21 14:06:26');
INSERT INTO `tbl_session_admin` VALUES ('45', 'A20200504', 'Login', '2020-09-21 16:17:07');
INSERT INTO `tbl_session_admin` VALUES ('46', 'A20200504', 'Login', '2020-09-21 16:22:27');
INSERT INTO `tbl_session_admin` VALUES ('47', 'A20200504', 'Login', '2020-09-21 16:24:28');
INSERT INTO `tbl_session_admin` VALUES ('48', 'A20200504', 'Login', '2020-09-21 16:30:30');
INSERT INTO `tbl_session_admin` VALUES ('49', 'A20200504', 'Login', '2020-09-21 16:30:35');
INSERT INTO `tbl_session_admin` VALUES ('50', 'A20200504', 'Login', '2020-09-21 16:54:46');
INSERT INTO `tbl_session_admin` VALUES ('51', 'A20200504', 'Login', '2020-09-21 21:01:36');
INSERT INTO `tbl_session_admin` VALUES ('52', 'A20200504', 'Login', '2020-09-21 21:37:38');
INSERT INTO `tbl_session_admin` VALUES ('53', 'A20200504', 'Login', '2020-09-22 01:45:17');
INSERT INTO `tbl_session_admin` VALUES ('54', 'A20200504', 'Login', '2020-09-22 01:51:46');
INSERT INTO `tbl_session_admin` VALUES ('55', 'A20200505', 'Login', '2020-09-22 09:55:38');
INSERT INTO `tbl_session_admin` VALUES ('56', 'A20200505', 'Logout', '2020-09-22 09:55:54');
INSERT INTO `tbl_session_admin` VALUES ('57', 'A20200504', 'Login', '2020-09-22 10:10:14');
INSERT INTO `tbl_session_admin` VALUES ('58', 'A20200504', 'Login', '2020-09-22 10:13:49');
INSERT INTO `tbl_session_admin` VALUES ('59', 'A20200504', 'Login', '2020-09-22 10:32:48');
INSERT INTO `tbl_session_admin` VALUES ('60', 'A20200504', 'Login', '2020-09-22 14:58:52');
INSERT INTO `tbl_session_admin` VALUES ('61', 'A20200504', 'Login', '2020-09-22 15:06:37');
INSERT INTO `tbl_session_admin` VALUES ('62', 'A20200504', 'Login', '2020-09-22 15:13:44');
INSERT INTO `tbl_session_admin` VALUES ('63', 'A20200504', 'Login', '2020-09-23 11:20:39');
INSERT INTO `tbl_session_admin` VALUES ('64', 'A20200504', 'Login', '2020-09-23 13:29:20');
INSERT INTO `tbl_session_admin` VALUES ('65', 'A20200504', 'Login', '2020-09-23 13:37:13');
INSERT INTO `tbl_session_admin` VALUES ('66', 'A20200504', 'Login', '2020-09-23 14:40:02');
INSERT INTO `tbl_session_admin` VALUES ('67', 'A20200504', 'Login', '2020-09-23 16:02:23');
INSERT INTO `tbl_session_admin` VALUES ('68', 'A20200504', 'Login', '2020-09-24 08:07:31');
INSERT INTO `tbl_session_admin` VALUES ('69', 'A20200504', 'Login', '2020-09-24 09:40:13');
INSERT INTO `tbl_session_admin` VALUES ('70', 'A20200504', 'Login', '2020-09-24 11:15:43');
INSERT INTO `tbl_session_admin` VALUES ('71', 'A20200504', 'Login', '2020-09-24 11:36:23');
INSERT INTO `tbl_session_admin` VALUES ('72', 'A20200504', 'Login', '2020-09-24 11:39:47');
INSERT INTO `tbl_session_admin` VALUES ('73', 'A20200504', 'Login', '2020-09-24 12:11:07');
INSERT INTO `tbl_session_admin` VALUES ('74', 'A20200504', 'Login', '2020-09-24 12:34:19');
INSERT INTO `tbl_session_admin` VALUES ('75', 'A20200504', 'Login', '2020-09-24 14:05:30');
INSERT INTO `tbl_session_admin` VALUES ('76', 'A20200504', 'Login', '2020-09-24 15:05:45');
INSERT INTO `tbl_session_admin` VALUES ('77', 'A20200504', 'Login', '2020-09-24 16:37:41');
INSERT INTO `tbl_session_admin` VALUES ('78', 'A20200504', 'Login', '2020-09-24 16:38:02');
INSERT INTO `tbl_session_admin` VALUES ('79', 'A20200504', 'Login', '2020-09-24 16:55:22');
INSERT INTO `tbl_session_admin` VALUES ('80', 'A20200504', 'Login', '2020-09-24 18:11:02');
INSERT INTO `tbl_session_admin` VALUES ('81', 'A20200504', 'Login', '2020-09-24 18:13:02');
INSERT INTO `tbl_session_admin` VALUES ('82', 'A20200504', 'Login', '2020-09-24 18:19:15');
INSERT INTO `tbl_session_admin` VALUES ('83', 'A20200504', 'Login', '2020-09-24 18:26:04');
INSERT INTO `tbl_session_admin` VALUES ('84', 'A20200504', 'Login', '2020-09-24 18:37:06');
INSERT INTO `tbl_session_admin` VALUES ('85', 'A20200504', 'Login', '2020-09-24 18:38:20');
INSERT INTO `tbl_session_admin` VALUES ('86', 'A20200504', 'Login', '2020-09-24 18:41:24');
INSERT INTO `tbl_session_admin` VALUES ('87', 'A20200504', 'Login', '2020-09-24 18:42:51');
INSERT INTO `tbl_session_admin` VALUES ('88', 'A20200504', 'Login', '2020-09-24 18:54:25');
INSERT INTO `tbl_session_admin` VALUES ('89', 'A20200504', 'Login', '2020-09-24 19:10:12');
INSERT INTO `tbl_session_admin` VALUES ('90', 'A20200504', 'Login', '2020-09-24 19:12:56');
INSERT INTO `tbl_session_admin` VALUES ('91', 'A20200504', 'Login', '2020-09-24 19:14:20');
INSERT INTO `tbl_session_admin` VALUES ('92', 'A20200504', 'Login', '2020-09-24 19:25:19');
INSERT INTO `tbl_session_admin` VALUES ('93', 'A20200504', 'Login', '2020-09-24 19:29:22');
INSERT INTO `tbl_session_admin` VALUES ('94', 'A20200504', 'Login', '2020-09-24 19:33:19');
INSERT INTO `tbl_session_admin` VALUES ('95', 'A20200504', 'Login', '2020-09-24 19:34:44');
INSERT INTO `tbl_session_admin` VALUES ('96', 'A20200504', 'Login', '2020-09-24 20:18:05');
INSERT INTO `tbl_session_admin` VALUES ('97', 'A20200504', 'Login', '2020-09-25 12:40:21');
INSERT INTO `tbl_session_admin` VALUES ('98', 'A20200504', 'Login', '2020-09-25 12:51:17');
INSERT INTO `tbl_session_admin` VALUES ('99', 'A20200504', 'Login', '2020-09-25 13:31:51');
INSERT INTO `tbl_session_admin` VALUES ('100', 'A20200504', 'Login', '2020-09-25 14:46:58');
INSERT INTO `tbl_session_admin` VALUES ('101', 'A20200504', 'Login', '2020-09-25 14:53:55');
INSERT INTO `tbl_session_admin` VALUES ('102', 'A20200504', 'Login', '2020-09-25 15:10:29');
INSERT INTO `tbl_session_admin` VALUES ('103', 'A20200504', 'Login', '2020-09-25 15:20:44');
INSERT INTO `tbl_session_admin` VALUES ('104', 'A20200504', 'Login', '2020-09-25 15:24:02');
INSERT INTO `tbl_session_admin` VALUES ('105', 'A20200504', 'Login', '2020-09-25 15:47:00');
INSERT INTO `tbl_session_admin` VALUES ('106', 'A20200504', 'Login', '2020-09-25 16:27:15');
INSERT INTO `tbl_session_admin` VALUES ('107', 'A20200504', 'Login', '2020-09-25 16:38:32');
INSERT INTO `tbl_session_admin` VALUES ('108', 'A20200504', 'Login', '2020-09-25 18:53:42');
INSERT INTO `tbl_session_admin` VALUES ('109', 'A20200504', 'Login', '2020-09-26 11:24:20');
INSERT INTO `tbl_session_admin` VALUES ('110', 'A20200504', 'Login', '2020-09-26 11:58:30');
INSERT INTO `tbl_session_admin` VALUES ('111', 'A20200504', 'Login', '2020-09-26 12:38:24');
INSERT INTO `tbl_session_admin` VALUES ('112', 'A20200504', 'Login', '2020-09-26 13:24:06');
INSERT INTO `tbl_session_admin` VALUES ('113', 'A20200504', 'Login', '2020-09-26 13:49:31');
INSERT INTO `tbl_session_admin` VALUES ('114', 'A20200504', 'Login', '2020-09-26 15:09:26');
INSERT INTO `tbl_session_admin` VALUES ('115', 'A20200504', 'Login', '2020-09-26 15:11:08');
INSERT INTO `tbl_session_admin` VALUES ('116', 'A20200504', 'Login', '2020-09-26 15:47:54');
INSERT INTO `tbl_session_admin` VALUES ('117', 'A20200504', 'Login', '2020-09-26 16:01:26');
INSERT INTO `tbl_session_admin` VALUES ('118', 'A20200504', 'Login', '2020-09-26 16:08:34');
INSERT INTO `tbl_session_admin` VALUES ('119', 'A20200504', 'Login', '2020-09-26 16:08:38');
INSERT INTO `tbl_session_admin` VALUES ('120', 'A20200504', 'Login', '2020-09-26 16:08:41');
INSERT INTO `tbl_session_admin` VALUES ('121', 'A20200504', 'Login', '2020-09-26 16:43:31');
INSERT INTO `tbl_session_admin` VALUES ('122', 'A20200504', 'Login', '2020-09-26 17:17:27');
INSERT INTO `tbl_session_admin` VALUES ('123', 'A20200504', 'Login', '2020-09-26 18:14:43');
INSERT INTO `tbl_session_admin` VALUES ('124', 'A20200504', 'Login', '2020-09-26 18:57:51');
INSERT INTO `tbl_session_admin` VALUES ('125', 'A20200504', 'Login', '2020-09-26 19:01:53');
INSERT INTO `tbl_session_admin` VALUES ('126', 'A20200504', 'Login', '2020-09-26 19:01:57');
INSERT INTO `tbl_session_admin` VALUES ('127', 'A20200504', 'Login', '2020-09-26 19:02:01');
INSERT INTO `tbl_session_admin` VALUES ('128', 'A20200504', 'Login', '2020-09-26 19:26:57');
INSERT INTO `tbl_session_admin` VALUES ('129', 'A20200504', 'Login', '2020-09-26 19:28:40');
INSERT INTO `tbl_session_admin` VALUES ('130', 'A20200504', 'Login', '2020-09-26 20:08:04');
INSERT INTO `tbl_session_admin` VALUES ('131', 'A20200504', 'Login', '2020-09-26 22:11:45');
INSERT INTO `tbl_session_admin` VALUES ('132', 'A20200504', 'Login', '2020-09-26 22:24:40');
INSERT INTO `tbl_session_admin` VALUES ('133', 'A20200504', 'Login', '2020-09-26 22:56:47');
INSERT INTO `tbl_session_admin` VALUES ('134', 'A20200504', 'Login', '2020-09-26 23:06:13');
INSERT INTO `tbl_session_admin` VALUES ('135', 'A20200504', 'Login', '2020-09-27 00:57:25');
INSERT INTO `tbl_session_admin` VALUES ('136', 'A20200504', 'Login', '2020-09-27 01:30:26');
INSERT INTO `tbl_session_admin` VALUES ('137', 'A20200504', 'Login', '2020-09-27 11:24:09');
INSERT INTO `tbl_session_admin` VALUES ('138', 'A20200504', 'Login', '2020-09-28 11:40:19');
INSERT INTO `tbl_session_admin` VALUES ('139', 'A20200504', 'Login', '2020-09-28 14:13:46');

-- ----------------------------
-- Table structure for `tbl_status_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_status_admin`;
CREATE TABLE `tbl_status_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdAdmin` varchar(255) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_status_admin
-- ----------------------------
INSERT INTO `tbl_status_admin` VALUES ('137', 'A20200504', '2020-09-28 11:40:19');
INSERT INTO `tbl_status_admin` VALUES ('136', 'A20200504', '2020-09-27 11:24:09');
INSERT INTO `tbl_status_admin` VALUES ('135', 'A20200504', '2020-09-27 01:30:26');
INSERT INTO `tbl_status_admin` VALUES ('134', 'A20200504', '2020-09-27 00:57:25');
INSERT INTO `tbl_status_admin` VALUES ('133', 'A20200504', '2020-09-26 23:06:13');
INSERT INTO `tbl_status_admin` VALUES ('132', 'A20200504', '2020-09-26 22:56:47');
INSERT INTO `tbl_status_admin` VALUES ('131', 'A20200504', '2020-09-26 22:24:40');
INSERT INTO `tbl_status_admin` VALUES ('130', 'A20200504', '2020-09-26 22:11:45');
INSERT INTO `tbl_status_admin` VALUES ('129', 'A20200504', '2020-09-26 20:08:04');
INSERT INTO `tbl_status_admin` VALUES ('128', 'A20200504', '2020-09-26 19:28:40');
INSERT INTO `tbl_status_admin` VALUES ('127', 'A20200504', '2020-09-26 19:26:57');
INSERT INTO `tbl_status_admin` VALUES ('126', 'A20200504', '2020-09-26 19:02:01');
INSERT INTO `tbl_status_admin` VALUES ('125', 'A20200504', '2020-09-26 19:01:57');
INSERT INTO `tbl_status_admin` VALUES ('124', 'A20200504', '2020-09-26 19:01:53');
INSERT INTO `tbl_status_admin` VALUES ('123', 'A20200504', '2020-09-26 18:57:51');
INSERT INTO `tbl_status_admin` VALUES ('122', 'A20200504', '2020-09-26 18:14:43');
INSERT INTO `tbl_status_admin` VALUES ('121', 'A20200504', '2020-09-26 17:17:27');
INSERT INTO `tbl_status_admin` VALUES ('120', 'A20200504', '2020-09-26 16:43:31');
INSERT INTO `tbl_status_admin` VALUES ('119', 'A20200504', '2020-09-26 16:08:41');
INSERT INTO `tbl_status_admin` VALUES ('118', 'A20200504', '2020-09-26 16:08:38');
INSERT INTO `tbl_status_admin` VALUES ('117', 'A20200504', '2020-09-26 16:08:34');
INSERT INTO `tbl_status_admin` VALUES ('116', 'A20200504', '2020-09-26 16:01:26');
INSERT INTO `tbl_status_admin` VALUES ('115', 'A20200504', '2020-09-26 15:47:54');
INSERT INTO `tbl_status_admin` VALUES ('114', 'A20200504', '2020-09-26 15:11:08');
INSERT INTO `tbl_status_admin` VALUES ('113', 'A20200504', '2020-09-26 15:09:26');
INSERT INTO `tbl_status_admin` VALUES ('112', 'A20200504', '2020-09-26 13:49:31');
INSERT INTO `tbl_status_admin` VALUES ('111', 'A20200504', '2020-09-26 13:24:06');
INSERT INTO `tbl_status_admin` VALUES ('110', 'A20200504', '2020-09-26 12:38:24');
INSERT INTO `tbl_status_admin` VALUES ('109', 'A20200504', '2020-09-26 11:58:30');
INSERT INTO `tbl_status_admin` VALUES ('108', 'A20200504', '2020-09-26 11:24:20');
INSERT INTO `tbl_status_admin` VALUES ('107', 'A20200504', '2020-09-25 18:53:42');
INSERT INTO `tbl_status_admin` VALUES ('106', 'A20200504', '2020-09-25 16:38:32');
INSERT INTO `tbl_status_admin` VALUES ('105', 'A20200504', '2020-09-25 16:27:15');
INSERT INTO `tbl_status_admin` VALUES ('104', 'A20200504', '2020-09-25 15:47:00');
INSERT INTO `tbl_status_admin` VALUES ('103', 'A20200504', '2020-09-25 15:24:02');
INSERT INTO `tbl_status_admin` VALUES ('102', 'A20200504', '2020-09-25 15:20:44');
INSERT INTO `tbl_status_admin` VALUES ('101', 'A20200504', '2020-09-25 15:10:29');
INSERT INTO `tbl_status_admin` VALUES ('100', 'A20200504', '2020-09-25 14:53:55');
INSERT INTO `tbl_status_admin` VALUES ('99', 'A20200504', '2020-09-25 14:46:58');
INSERT INTO `tbl_status_admin` VALUES ('98', 'A20200504', '2020-09-25 13:31:51');
INSERT INTO `tbl_status_admin` VALUES ('97', 'A20200504', '2020-09-25 12:51:17');
INSERT INTO `tbl_status_admin` VALUES ('96', 'A20200504', '2020-09-25 12:40:21');
INSERT INTO `tbl_status_admin` VALUES ('95', 'A20200504', '2020-09-24 20:18:05');
INSERT INTO `tbl_status_admin` VALUES ('94', 'A20200504', '2020-09-24 19:34:44');
INSERT INTO `tbl_status_admin` VALUES ('93', 'A20200504', '2020-09-24 19:33:19');
INSERT INTO `tbl_status_admin` VALUES ('92', 'A20200504', '2020-09-24 19:29:22');
INSERT INTO `tbl_status_admin` VALUES ('91', 'A20200504', '2020-09-24 19:25:19');
INSERT INTO `tbl_status_admin` VALUES ('90', 'A20200504', '2020-09-24 19:14:20');
INSERT INTO `tbl_status_admin` VALUES ('89', 'A20200504', '2020-09-24 19:12:56');
INSERT INTO `tbl_status_admin` VALUES ('88', 'A20200504', '2020-09-24 19:10:12');
INSERT INTO `tbl_status_admin` VALUES ('87', 'A20200504', '2020-09-24 18:54:25');
INSERT INTO `tbl_status_admin` VALUES ('86', 'A20200504', '2020-09-24 18:42:51');
INSERT INTO `tbl_status_admin` VALUES ('85', 'A20200504', '2020-09-24 18:41:24');
INSERT INTO `tbl_status_admin` VALUES ('84', 'A20200504', '2020-09-24 18:38:20');
INSERT INTO `tbl_status_admin` VALUES ('83', 'A20200504', '2020-09-24 18:37:06');
INSERT INTO `tbl_status_admin` VALUES ('82', 'A20200504', '2020-09-24 18:26:04');
INSERT INTO `tbl_status_admin` VALUES ('81', 'A20200504', '2020-09-24 18:19:15');
INSERT INTO `tbl_status_admin` VALUES ('80', 'A20200504', '2020-09-24 18:13:02');
INSERT INTO `tbl_status_admin` VALUES ('79', 'A20200504', '2020-09-24 18:11:02');
INSERT INTO `tbl_status_admin` VALUES ('78', 'A20200504', '2020-09-24 16:55:22');
INSERT INTO `tbl_status_admin` VALUES ('77', 'A20200504', '2020-09-24 16:38:02');
INSERT INTO `tbl_status_admin` VALUES ('76', 'A20200504', '2020-09-24 16:37:41');
INSERT INTO `tbl_status_admin` VALUES ('75', 'A20200504', '2020-09-24 15:05:45');
INSERT INTO `tbl_status_admin` VALUES ('74', 'A20200504', '2020-09-24 14:05:30');
INSERT INTO `tbl_status_admin` VALUES ('73', 'A20200504', '2020-09-24 12:34:19');
INSERT INTO `tbl_status_admin` VALUES ('72', 'A20200504', '2020-09-24 12:11:07');
INSERT INTO `tbl_status_admin` VALUES ('71', 'A20200504', '2020-09-24 11:39:47');
INSERT INTO `tbl_status_admin` VALUES ('70', 'A20200504', '2020-09-24 11:36:23');
INSERT INTO `tbl_status_admin` VALUES ('138', 'A20200504', '2020-09-28 14:13:46');

-- ----------------------------
-- Table structure for `tbl_status_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_status_team`;
CREATE TABLE `tbl_status_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTeam` varchar(255) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_status_team
-- ----------------------------
INSERT INTO `tbl_status_team` VALUES ('65', 'TM2009001', '2020-09-28 14:22:01');
INSERT INTO `tbl_status_team` VALUES ('64', 'TM2009001', '2020-09-28 14:22:01');

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
  `cashback` varchar(100) NOT NULL,
  `price_dis` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL,
  `notify_user` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_store_for_buy_email
-- ----------------------------
INSERT INTO `tbl_store_for_buy_email` VALUES ('1', 'And_When_Did_You_Last_See_Your_Father__Main_file55.docx', 'ODB23', '10', '10', '', '9', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 01:09:46', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('2', 'And_When_Did_You_Last_See_Your_Father__Main_file63.docx', 'ODB62', '30', '10', '', '27', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 12:45:09', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('3', 'And_When_Did_You_Last_See_Your_Father__Main_file64.docx', 'ODB63', '20', '10', '', '18', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 12:50:47', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('4', 'And_When_Did_You_Last_See_Your_Father__Main_file67.docx', 'ODB66', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 15:51:58', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('5', 'And_When_Did_You_Last_See_Your_Father__Main_file69.docx', 'ODB68', '40', '0', '', '40', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 16:02:18', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('6', 'And_When_Did_You_Last_See_Your_Father__Main_file68.docx', 'ODB67', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 16:12:25', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('7', 'And_When_Did_You_Last_See_Your_Father__Main_file70.docx', 'ODB69', '49', '0', '', '49', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 17:48:02', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('8', 'And_When_Did_You_Last_See_Your_Father__Main_file71.docx', 'ODB70', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 18:33:30', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('9', 'And_When_Did_You_Last_See_Your_Father__Main_file75.docx', 'ODB74', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-20 19:06:05', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('10', 'ใบเสร็จ_kat_cat_19-8-2563.pdf,แก้ไข_·3.pdf', 'ODB76', '20', '10', '', '18', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 10:36:15', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('11', 'Flow_Chart_ระบบหลังร้าน_Quli_-_AutoRecovered.pdf,ผลงานเบื้องต้น.pdf', 'ODB75', '20', '0', '', '20', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 10:37:09', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('12', 'Programmer_แก้ไข_200920.docx', 'ODB77', '10', '0', '', '10', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 13:44:11', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('13', 'Checklist_Programmer_20-09-20.xlsx', 'ODB78', '15', '0', '', '15', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 13:46:29', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('14', 'Checklist_Programmer_20-09-201.xlsx,Programmer_แก้ไข_2009201.docx', 'ODB79', '12', '0', '', '12', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 16:22:50', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('15', 'Checklist_Programmer_20-09-202.xlsx', 'ODB80', '10', '0', '', '10', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 16:55:19', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('16', 'IMG_41772.JPG,IMG_41812.PNG,IMG_41791.JPG,IMG_41802.JPG', 'ODB82', '15', '0', '', '15', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 23:40:57', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('17', 'IMG_42142.PNG,IMG_4249.JPG', 'ODB83', '13', '0', '', '13', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 23:45:17', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('18', 'IMG_41773.JPG', 'ODB84', '20', '0', '', '20', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-21 23:50:41', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('19', 'IMG_41813.PNG,IMG_41821.PNG,IMG_41803.JPG', 'ODB85', '20', '10', '', '18', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-23 14:44:36', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('20', 'And_When_Did_You_Last_See_Your_Father__Main_file75.docx', 'ODB87', '60', '10', '', '54', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 12:15:01', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('21', 'And_When_Did_You_Last_See_Your_Father__Main_file76.docx', 'ODB88', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 16:52:16', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('22', '23963_200923.jpg,3.png', 'ODB89', '10', '10', '', '9', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-24 18:11:54', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('23', 'And_When_Did_You_Last_See_Your_Father__Main_file77.docx', 'ODB90', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 18:16:06', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('24', 'And_When_Did_You_Last_See_Your_Father__Main_file79.docx', 'ODB92', '40', '0', '', '40', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 18:34:28', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('25', 'The_Lighthouse_More_file1.docx', 'ODB93', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 18:39:19', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('26', 'White_Lies_Sell_22.docx', 'ODB94', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 18:52:27', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('27', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN.docx', 'ODB95', '10', '0', '', '10', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 19:10:52', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('28', 'Umbrella_Sell_12.docx', 'ODB96', '10', '0', '', '10', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-24 19:22:43', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('29', '23963_200923_0.jpg,23963_200923_1.jpg', 'ODB97', '30', '10', '', '27', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-24 19:33:30', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('30', '23963_2009231.jpg', 'ODB98', '20', '0', '', '20', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-24 20:10:35', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('31', 'Shards_of_Glass_Feedback_client.docx', 'ODB99', '10', '0', '', '10', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-25 12:42:05', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('32', 'IMG_4835.JPG,IMG_4836.JPG,IMG_4837.JPG', 'ODB86', '16', '0', '', '16', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-26 11:25:50', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('33', 'Data_input.docx', 'ODB100', '10', '0', '', '10', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-26 11:39:44', null);

-- ----------------------------
-- Table structure for `tbl_store_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_store_team`;
CREATE TABLE `tbl_store_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamid` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `store` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `order_id` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `note` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_store_team
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTeam` varchar(255) DEFAULT NULL,
  `income` decimal(65,0) DEFAULT '0',
  `team_score` decimal(11,0) DEFAULT '0',
  `educational` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT '',
  `phone` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT '',
  `password` varchar(150) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0 == approve //  == non-approve',
  `bank_account` varchar(255) DEFAULT NULL,
  `forgot_password` varchar(255) DEFAULT NULL,
  `time_forgot_password` datetime DEFAULT NULL,
  `notify_admin` tinyint(1) DEFAULT NULL,
  `status_notification_ban` varchar(11) DEFAULT '0',
  `notification_ban` text,
  `resume_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_team
-- ----------------------------
INSERT INTO `tbl_team` VALUES ('1', 'TM2009001', '-12080', '0', 'Ph.D', '218', 'jame0879871121@gmail.com', '0925623256', 'นายณัฐพนธ์ เกัยรติกุล', 'e3d00986182c0c42dd0f5bb4c6dc91fa', 'uploads/resume/Finalist_Report_project.docx', '2020-09-19 17:47:00', '2020-09-27 00:48:59', '1', '1234567890', null, null, '1', '0', null, 'Finalist_Report_project.docx');
INSERT INTO `tbl_team` VALUES ('2', 'TM2009002', '-280', '0', 'B.A.', '218', 'pat.088english@gmail.com', '0652074798', 'wut', '44aa52cca5725e90d714f0106180176f', 'public/frontend/assets/img/profile/phpto-1600920798.jpg', '2020-09-20 16:05:13', '2020-09-25 12:50:41', '1', '12345', null, null, '1', '0', null, 'And_When_Did_You_Last_See_Your_Father__Main_file1.docx');
INSERT INTO `tbl_team` VALUES ('3', 'TM2009003', '0', '0', 'B.A.', '13', 'chutwut.088english@gmail.com', '0652074798', 'chut', '2a4811e4bcd0ff53a933ab036ad32d26', 'uploads/resume/The_Dream_Asylum_Rewrite.docx', '2020-09-26 17:26:49', null, '0', '', null, null, '0', '0', null, 'The_Dream_Asylum_Rewrite.docx');

-- ----------------------------
-- Table structure for `tbl_upload_auto`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_auto`;
CREATE TABLE `tbl_upload_auto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dm_create` varchar(255) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_auto
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_upload_backup_gt`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_backup_gt`;
CREATE TABLE `tbl_upload_backup_gt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id_g` int(5) DEFAULT NULL COMMENT 'id ของคาราง tbl_upload_team',
  `order_id_g` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name_g` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path_g` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at_g` datetime DEFAULT NULL,
  `update_at_g` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload_backup_gt
-- ----------------------------
INSERT INTO `tbl_upload_backup_gt` VALUES ('1', '19', 'ODB83', 'IMG_4192.PNG', 'uploads/Buy/GT/IMG_4192.PNG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('2', '19', 'ODB83', 'IMG_4213.JPG', 'uploads/Buy/GT/IMG_4213.JPG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('3', '19', 'ODB83', 'IMG_42141.PNG', 'uploads/Buy/GT/IMG_42141.PNG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('4', '20', 'ODB83', 'IMG_42141.PNG', 'uploads/Buy/GT/IMG_42141.PNG', '2020-09-23 11:32:45', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('5', '23', 'ODB85', 'IMG_4631.JPG', 'uploads/Buy/GT/IMG_4631.JPG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('6', '23', 'ODB85', 'IMG_4630.JPG', 'uploads/Buy/GT/IMG_4630.JPG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('7', '23', 'ODB85', 'IMG_41581.JPG', 'uploads/Buy/GT/IMG_41581.JPG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('8', '24', 'ODB85', 'IMG_4145.JPG', 'uploads/Buy/GT/IMG_4145.JPG', '2020-09-23 16:04:38', null);

-- ----------------------------
-- Table structure for `tbl_upload_backup_main`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_backup_main`;
CREATE TABLE `tbl_upload_backup_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id_m` int(5) DEFAULT NULL COMMENT 'id ของคาราง tbl_upload_team',
  `order_id_m` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name_m` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path_m` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at_m` datetime DEFAULT NULL,
  `update_at_m` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload_backup_main
-- ----------------------------
INSERT INTO `tbl_upload_backup_main` VALUES ('1', '19', 'ODB83', 'IMG_42142.PNG', 'uploads/Buy/IMG_42142.PNG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('2', '19', 'ODB83', 'IMG_4249.JPG', 'uploads/Buy/IMG_4249.JPG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('3', '20', 'ODB83', 'IMG_42142.PNG', 'uploads/Buy/IMG_42142.PNG', '2020-09-23 11:32:45', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('4', '23', 'ODB85', 'IMG_41813.PNG', 'uploads/Buy/IMG_41813.PNG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('5', '23', 'ODB85', 'IMG_41821.PNG', 'uploads/Buy/IMG_41821.PNG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('6', '24', 'ODB85', 'IMG_41821.PNG', 'uploads/Buy/IMG_41821.PNG', '2020-09-23 16:04:38', null);

-- ----------------------------
-- Table structure for `tbl_upload_backup_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_backup_team`;
CREATE TABLE `tbl_upload_backup_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id_back` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name_back` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path_back` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at_back` datetime DEFAULT NULL,
  `update_at_back` datetime DEFAULT NULL,
  `status_back` int(2) DEFAULT '0' COMMENT '0 = ไฟล์ที่ยังเก็บไว้แสดงให้กับทีมคนล่าสุด / 1 = ไฟล์ที่ไม่ให้แสดงแล้ว',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload_backup_team
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_upload_main_search`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_main_search`;
CREATE TABLE `tbl_upload_main_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(11) NOT NULL,
  `id_doc` varchar(255) DEFAULT NULL,
  `select_item_id` int(11) NOT NULL,
  `select_item` varchar(255) DEFAULT '',
  `code` text,
  `topic` text,
  `section` int(10) DEFAULT '0',
  `organization_upload` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_main_search
-- ----------------------------
INSERT INTO `tbl_upload_main_search` VALUES ('1', 'CM2009002', 'DM1', '1', 'อาหาร', 'Food', 'Thai cuisine', '3', 'A', '2020-09-18 16:55:41', null);
INSERT INTO `tbl_upload_main_search` VALUES ('2', 'CM2009002', 'DM2', '1', 'อาหาร', 'Food', 'Thai Cuisine', '1', 'B', '2020-09-18 16:58:35', null);
INSERT INTO `tbl_upload_main_search` VALUES ('3', 'CM2009001', 'DM3', '1', 'อาหาร', 'ผัดไทย', 'การทำผัดไทย', '1', 'A', '2020-09-19 15:49:46', null);
INSERT INTO `tbl_upload_main_search` VALUES ('4', 'CM2009001', 'DM4', '1', 'อาหาร', 'กระเพรา', 'การทำกระเพราไก่', '2', 'A', '2020-09-19 15:50:48', null);
INSERT INTO `tbl_upload_main_search` VALUES ('5', 'CM2009002', 'DM5', '1', 'อาหาร', 'แกงไก่ป่า', 'การทำแกงไก่ป่า', '1', 'A', '2020-09-19 15:51:38', null);

-- ----------------------------
-- Table structure for `tbl_upload_main_search_sub`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_main_search_sub`;
CREATE TABLE `tbl_upload_main_search_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dm_main` varchar(100) NOT NULL,
  `dm_sub` varchar(100) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `status` int(2) DEFAULT '0' COMMENT 'สถานะเช็คการอัพไฟล์แล้วหรือยัง??  0 = ยังไม่ได้อัพไฟล์ / 1 = อัพไฟล์แล้ว',
  `comandnocom` int(4) DEFAULT NULL COMMENT '1 = sell Complete / 2 = Sell not Complete / 3 = Original / 4 = Rewrite',
  `cp` varchar(255) DEFAULT NULL COMMENT ' complelte /  not complelte ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_main_search_sub
-- ----------------------------
INSERT INTO `tbl_upload_main_search_sub` VALUES ('17', '5', 'DM5.1.2', 'ผลงานเบื้องต้น.pdf', 'uploads/Store/ผลงานเบื้องต้น.pdf', '2020-09-19 15:58:50', null, '1', '1', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('18', '5', 'DM5.1.2', 'feedback_Depa_Vocher_270820201.pdf', 'uploads/Store/feedback_Depa_Vocher_270820201.pdf', '2020-09-19 15:58:50', null, '1', '1', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('19', '5', 'DM5.1.2', 'company_profile4.pdf', 'uploads/Store/company_profile4.pdf', '2020-09-19 15:58:50', null, '1', '1', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('21', '5', 'DM5.1.3', 'Programmer_แก้ไข_2009202.docx', 'uploads/Store/Programmer_แก้ไข_2009202.docx', '2020-09-19 16:00:58', null, '1', '1', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('22', '5', 'DM5.1.3', 'Checklist_Programmer_20-09-20.xlsx', 'uploads/Store/Checklist_Programmer_20-09-20.xlsx', '2020-09-19 16:00:58', null, '1', '1', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('23', '5', 'DM5.1.3', 'company_profile1.pdf', 'uploads/Store/company_profile1.pdf', '2020-09-19 16:00:58', null, '1', '1', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('24', '5', 'DM5.2.4', 'Find_Me_GT_file2.docx', 'uploads/Store/Find_Me_GT_file2.docx', '2020-09-19 16:10:41', null, '1', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('25', '5', 'DM5.2.4', 'feedback_Depa_Vocher_260820202.pdf', 'uploads/Store/feedback_Depa_Vocher_260820202.pdf', '2020-09-19 16:10:41', null, '1', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('26', '5', 'DM5.2.4', 'LINE_P25630806_1128453831.png', 'uploads/Store/LINE_P25630806_1128453831.png', '2020-09-19 16:10:41', null, '1', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('27', '5', 'DM5.2.4', 'feedback_Depa_Vocher_270820202.pdf', 'uploads/Store/feedback_Depa_Vocher_270820202.pdf', '2020-09-19 16:10:41', null, '1', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('28', '5', 'DM5.2.4', 'feedback_Depa_Vocher_270820203.pdf', 'uploads/Store/feedback_Depa_Vocher_270820203.pdf', '2020-09-19 16:10:41', null, '1', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('29', '5', 'DM5.2.5', 'LINE_P25630806_112803527.png', 'uploads/Store/LINE_P25630806_112803527.png', '2020-09-19 16:17:50', null, '1', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('30', '4', 'DM4.2.2', 'IMG_4192.PNG', 'uploads/Store/IMG_4192.PNG', '2020-09-19 16:18:25', null, '0', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('31', '4', 'DM4.2.2', 'IMG_4221.JPG', 'uploads/Store/IMG_4221.JPG', '2020-09-19 16:18:25', null, '0', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('32', '4', 'DM4.2.2', 'IMG_4249.JPG', 'uploads/Store/IMG_4249.JPG', '2020-09-19 16:18:25', null, '0', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('33', '4', 'DM4.2.2', 'IMG_4214.PNG', 'uploads/Store/IMG_4214.PNG', '2020-09-19 16:18:25', null, '0', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('34', '4', 'DM4.2.2', 'IMG_4213.JPG', 'uploads/Store/IMG_4213.JPG', '2020-09-19 16:18:25', null, '0', '2', null);
INSERT INTO `tbl_upload_main_search_sub` VALUES ('36', '4', 'DM4.1.1', 'IMG_4213.JPG', 'uploads/Store/IMG_4213.JPG', '2020-09-22 17:06:19', null, '0', '2', null);

-- ----------------------------
-- Table structure for `tbl_upload_order`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_order`;
CREATE TABLE `tbl_upload_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) NOT NULL,
  `Username` varchar(255) DEFAULT NULL COMMENT 'ชื่อลูกค้านอกระบบ Stock Admin',
  `email` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT '',
  `order_id` varchar(110) DEFAULT '' COMMENT 'OR00001',
  `price_file` varchar(255) DEFAULT NULL,
  `price_dis_order` varchar(100) DEFAULT NULL,
  `score_user` varchar(100) DEFAULT NULL COMMENT 'คิดเป็นเปอร์เซยต์ ',
  `cashback_user` varchar(100) DEFAULT NULL COMMENT 'คิด cashback ที่ลดราคา',
  `date_required` datetime DEFAULT NULL,
  `created_at_buy` datetime DEFAULT NULL COMMENT 'create_at แบบใหม่',
  `update_at` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `status_book` int(11) DEFAULT '0' COMMENT '0// not 1//ture',
  `status_admin` int(2) DEFAULT '0',
  `is_check` int(11) DEFAULT '0' COMMENT '0//not 1// ture',
  `note_reject` varchar(255) DEFAULT NULL,
  `status_confirmed_team` int(11) DEFAULT '0',
  `note` varchar(255) DEFAULT NULL,
  `note_user` varchar(255) DEFAULT NULL,
  `is_confirm` int(11) DEFAULT NULL,
  `status_pay` varchar(11) DEFAULT '0',
  `select_item` int(11) DEFAULT NULL,
  `status_approved` int(2) DEFAULT '0' COMMENT '1 = Appovre /  2  = Not Appovre / 3 = Feedback / 4 = Re Feedback / 5 = Admin Feedback',
  `notify_user` tinyint(1) DEFAULT NULL,
  `status_cp` varchar(255) DEFAULT NULL,
  `status_delivery` varchar(10) DEFAULT '0' COMMENT '0 = ยังไม่ทำการ delivery / 1 = ส่ง delivery / 2 = Not delivery ',
  `notify_team` tinyint(1) DEFAULT NULL,
  `notify_admin` tinyint(1) DEFAULT NULL,
  `click_step` int(11) NOT NULL,
  `update_check` date DEFAULT NULL,
  `num_check` int(11) NOT NULL,
  `status_upload_admin` int(11) DEFAULT '0' COMMENT ' 0 == user // 1 == admin ที่อัพโหลดไฟล์มา',
  `status_bookmark` int(2) DEFAULT '0' COMMENT '0 = ยังไม่ bookmark / 1 = bookmark แล้ว',
  `organization` varchar(255) DEFAULT NULL,
  `price_refeedback` varchar(100) DEFAULT NULL COMMENT 'ราคาที่ได้มาจากการจ่ายเงินจากลูกค้าของ',
  `note_approved` varchar(255) DEFAULT NULL COMMENT 'ความติดเห็นหลังจากตอนกด ap/not ap',
  `end_time_feedback` date DEFAULT NULL COMMENT 'วันหมดอายุของ feedback ให้หายไป',
  `end_time_withdraw` date DEFAULT NULL COMMENT 'นับเวลาในการเปิด Withdraw ให้ถอนเงินทีมงาน',
  `stars_score_user` varchar(10) DEFAULT NULL COMMENT 'การให้คะแนนความพึ่งพอใจ ฝั่งลูกค้า',
  `status_refeedback` varchar(2) DEFAULT '0' COMMENT 'เอาไว้เช็คเคยซื้อ refeedback ไปแล้วหรือยัง  0 = ยังไม่ได้ซื้อ / 1 = ซื้อไปแล้ว',
  `check_email_ot` int(2) DEFAULT '0' COMMENT 'เช็คเวลาใหม่ที่ส่งไปใน email 0 = ยังไม่ได้กดปุ่มอะไรทั้งนั้น / 1 = กดปุ่มแล้วไม่สามารถกดได้อีก',
  `check_time_not_pay` int(2) DEFAULT '0' COMMENT 'เช็คการแจ้งเตือน email ในกรณี ที่ไม่ยอมจ่ายเงิน | 0 = ช่วง 12 ชั่วโมงแรก / 1 = ช่วง 12 ชั่วโมงครั้งหลัง /2 = ไม่ต้องแจ้งเตือนแล้ว',
  `check_cashback_reward` int(2) DEFAULT '0' COMMENT 'สถานนะนี้จะเกิดได้ก็ต่อเมือนำจำนวน ออเดอร์ในสถานะ 0 ให้ครบ 30 ถึงจะได้ 100 และเปลี่ยนสถานะ ให้เป็น 1 / 0 = ยังไม่ได้รับ Reward 100 ',
  `check_upload_to_main_search` int(2) DEFAULT '0' COMMENT '0 = ยังไม่เคย upload to main search หน้า Appoerd / Not ap / 1 เคย   upload to main search แล้ว Appoerd / Not ap',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_order
-- ----------------------------
INSERT INTO `tbl_upload_order` VALUES ('1', 'CM2009001', null, null, 'Member1.xlsx', 'ODB51', '10', null, null, null, '2020-09-22 00:00:00', '2020-09-20 08:33:40', '2020-09-20 11:34:38', '2020-11-19 00:00:00', 'uploads/Buy/Member1.xlsx', '1', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('2', 'CM2009001', null, null, 'Finalist_Report_project(ใหม่).docx', 'ODB52', '20', null, null, null, '2020-09-21 00:00:00', '2020-09-20 09:33:40', '2020-09-20 11:37:50', '2020-11-19 00:00:00', 'uploads/Buy/Finalist_Report_project(ใหม่).docx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('3', 'CM2009001', null, null, 'IMG_4353.jfif', 'ODB54', '5', null, null, null, '2020-09-21 00:00:00', '2020-09-20 10:33:40', '2020-09-20 11:43:34', '2020-11-19 00:00:00', 'uploads/Buy/IMG_4353.jfif', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('4', 'CM2009001', null, null, 'ดาวน์โหลด.png', 'ODB55', '20', null, null, null, '2020-09-21 00:00:00', '2020-09-21 11:32:21', '2020-09-20 12:13:02', '2020-11-19 00:00:00', 'uploads/Buy/ดาวน์โหลด.png', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'C', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('5', 'CM2009001', null, null, 'IMG_43531.jfif', 'ODB56', '20', null, null, null, '2020-09-21 00:00:00', '2020-09-20 12:20:56', '2020-09-20 12:21:57', '2020-11-19 00:00:00', 'uploads/Buy/IMG_43531.jfif', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('6', 'CM2009001', null, null, 'Finalist_Report_project(ใหม่)1.docx', 'ODB57', '100', null, null, null, '2020-09-21 00:00:00', '2020-09-20 12:42:48', '2020-09-20 12:42:48', '2020-11-19 00:00:00', 'uploads/Buy/Finalist_Report_project(ใหม่)1.docx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('7', 'CM2009001', null, null, 'Member2.xlsx', 'ODB58', '20', null, null, null, '2020-10-21 00:00:00', '2020-09-20 12:21:46', '2020-09-20 16:12:06', '2020-11-19 00:00:00', 'uploads/Buy/Member2.xlsx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('8', 'CM2009001', null, null, 'Member3.xlsx', 'ODB59', '25', null, null, null, '2020-09-25 00:00:00', '2020-09-20 12:27:28', '2020-09-20 12:27:29', '2020-11-19 00:00:00', 'uploads/Buy/Member3.xlsx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('9', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file61.docx', 'ODB60', '25', null, null, null, '2020-09-26 00:00:00', '2020-09-20 12:52:28', '2020-09-20 12:52:28', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file61.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('10', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file62.docx', 'ODB61', '50', null, null, null, '2020-09-29 00:00:00', '2020-09-20 13:08:46', '2020-09-20 13:08:46', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file62.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('12', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file64.docx', 'ODB63', '20', '18', '10', null, '2020-09-28 00:00:00', '2020-09-20 12:49:32', '2020-09-20 15:02:47', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file64.docx', '1', '0', '0', null, '0', null, '-', null, '1', null, '4', '1', 'complete', '0', '0', '1', '0', null, '0', '0', '1', 'A', '10', null, null, '2020-11-24', null, '1', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('13', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file65.docx', 'ODB64', '60', null, null, null, '2020-09-29 00:00:00', '2020-09-20 13:14:13', '2020-09-20 13:14:44', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file65.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('15', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file67.docx', 'ODB66', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-20 15:48:09', '2020-09-20 15:48:54', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file67.docx', '1', '0', '0', null, '1', null, 'ff', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('19', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file71.docx', 'ODB70', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-20 18:31:26', '2020-09-20 18:32:55', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file71.docx', '1', '0', '0', null, '0', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('20', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file72.docx', 'ODB71', '10', null, null, null, '2020-09-29 00:00:00', '2020-09-20 18:31:37', '2020-09-21 13:41:02', '2020-11-20 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file72.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('22', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file74.docx', 'ODB73', '10', null, null, null, '2020-10-01 00:00:00', '2020-09-20 18:32:00', '2020-09-21 16:20:48', '2020-11-20 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file74.docx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('25', 'CM2009001', null, null, 'Flow_Chart_ระบบหลังร้าน_Quli_-_AutoRecovered.pdf', 'ODB75', '20', '20', '0', null, '2020-09-22 00:00:00', '2020-09-21 10:14:34', '2020-09-21 10:47:51', '2020-11-23 00:00:00', 'uploads/Buy/Flow_Chart_ระบบหลังร้าน_Quli_-_AutoRecovered.pdf', '1', '0', '0', null, '0', null, '545454545454', null, '1', null, '4', '1', 'complete', '0', '0', '0', '0', null, '0', '0', '1', 'B', '10', null, null, '2020-11-25', null, '1', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('26', 'CM2009001', null, null, 'ผลงานเบื้องต้น.pdf', 'ODB75', '20', '20', '0', null, '2020-09-22 00:00:00', '2020-09-21 10:14:34', '2020-09-21 10:47:51', '2020-11-23 00:00:00', 'uploads/Buy/ผลงานเบื้องต้น.pdf', '1', '0', '0', null, '0', null, '545454545454', null, '1', null, '4', '1', 'complete', '0', '0', '0', '0', null, '0', '0', '0', 'B', '10', null, null, '2020-11-25', null, '1', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('29', 'CM2009001', null, null, 'Programmer_แก้ไข_200999.docx', 'ODB77', '10', '10', '0', null, '2020-09-29 00:00:00', '2020-09-21 13:42:12', '2020-09-26 19:29:03', '2020-11-25 00:00:00', 'uploads/Buy/Programmer_แก้ไข_200999.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '3', '1', 'complete', '0', '0', '1', '0', null, '0', '0', '1', 'A', null, null, null, '2020-11-30', null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('31', 'CM2009001', '', '', 'Programmer_แก้ไข_200920.docx', 'ODB77', '10', '10', '0', null, '2020-09-29 00:00:00', '2020-09-21 14:57:56', '2020-09-26 19:29:03', '2020-11-25 00:00:00', 'uploads/Main/Programmer_แก้ไข_200920.docx', '1', '0', '0', '', '1', null, '', null, '1', null, '3', '1', 'complete', '0', '0', '1', '0', null, '0', '1', '1', null, null, null, null, '2020-11-30', null, '0', '0', '0', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('34', 'CM2009001', null, null, 'Checklist_Programmer_20-09-202.xlsx', 'ODB80', '10', '10', '0', null, '2020-09-25 00:00:00', '2020-09-21 16:54:29', '2020-09-21 16:55:04', '2020-11-20 00:00:00', 'uploads/Buy/Checklist_Programmer_20-09-202.xlsx', '1', '0', '0', null, '0', null, '', null, '1', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('42', 'CM2009001', null, null, 'IMG_4177301.JPG', 'ODB84', '20', '20', '0', null, '2020-09-27 00:00:00', '2020-09-21 23:50:12', '2020-09-26 13:41:58', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4177301.JPG', '1', '0', '0', null, '1', null, '1111', null, '1', null, '5', '1', 'rewrite', '0', '0', '1', '0', null, '0', '0', '0', 'A', null, null, '2021-03-25', '2020-11-30', null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('43', 'CM2009001', null, null, 'IMG_41813.PNG', 'ODB85', '20', '18', '10', null, '2020-09-27 00:00:00', '2020-09-23 14:37:27', '2020-09-23 16:04:38', '2020-11-22 00:00:00', 'uploads/Buy/IMG_41813.PNG', '1', '0', '0', null, '1', null, 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('44', 'CM2009001', null, null, 'IMG_41821.PNG', 'ODB85', '20', '18', '10', null, '2020-09-27 00:00:00', '2020-09-23 14:37:27', '2020-09-23 16:04:38', '2020-11-22 00:00:00', 'uploads/Buy/IMG_41821.PNG', '1', '0', '0', null, '1', null, 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('45', 'CM2009001', null, null, 'IMG_41803.JPG', 'ODB85', '20', '18', '10', null, '2020-09-27 00:00:00', '2020-09-23 14:37:27', '2020-09-23 16:04:38', '2020-11-22 00:00:00', 'uploads/Buy/IMG_41803.JPG', '1', '0', '0', null, '1', null, 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('46', 'CM2009001', null, null, 'IMG_4835.JPG', 'ODB86', '16', '16', '0', null, '2020-09-28 00:00:00', '2020-09-23 14:39:48', '2020-09-26 11:25:35', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4835.JPG', '2', '0', '0', null, '0', 'Not Satisfired (ODB86)\r\n', 'You can buy GT Document.', null, '1', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('47', 'CM2009001', null, null, 'IMG_4836.JPG', 'ODB86', '16', '16', '0', null, '2020-09-28 00:00:00', '2020-09-23 14:39:48', '2020-09-26 11:25:35', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4836.JPG', '2', '0', '0', null, '0', 'Not Satisfired (ODB86)\r\n', 'You can buy GT Document.', null, '1', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('48', 'CM2009001', null, null, 'IMG_4837.JPG', 'ODB86', '16', '16', '0', null, '2020-09-28 00:00:00', '2020-09-23 14:39:48', '2020-09-26 11:25:35', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4837.JPG', '2', '0', '0', null, '0', 'Not Satisfired (ODB86)\r\n', 'You can buy GT Document.', null, '1', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('49', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file75.docx', 'ODB87', '60', '54', '10', null, '2020-09-29 00:00:00', '2020-09-24 12:11:49', '2020-09-24 12:12:30', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file75.docx', '1', '0', '0', null, '1', null, 'gg', null, '1', null, '0', '1', 'rewrite', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('50', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file76.docx', 'ODB88', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-24 16:51:17', '2020-09-24 18:42:00', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file76.docx', '2', '0', '0', null, '1', '', '', null, '1', null, '3', '1', null, '1', '0', '1', '0', null, '0', '0', '0', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('51', 'CM2009001', null, null, '23963_200923.jpg', 'ODB89', '10', '9', '10', null, '2020-09-26 00:00:00', '2020-09-24 18:11:06', '2020-09-26 10:43:15', '2020-11-23 00:00:00', 'uploads/Buy/23963_200923.jpg', '2', '0', '0', null, '0', '', 'More details.', null, '1', null, '1', '1', null, '0', '1', '1', '0', null, '0', '0', '0', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('52', 'CM2009001', null, null, '3.png', 'ODB89', '10', '9', '10', null, '2020-09-26 00:00:00', '2020-09-24 18:11:06', '2020-09-26 10:43:15', '2020-11-23 00:00:00', 'uploads/Buy/3.png', '2', '0', '0', null, '0', '', 'More details.', null, '1', null, '1', '1', null, '0', '0', '1', '0', null, '0', '0', '0', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('53', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file77.docx', 'ODB90', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-24 18:14:35', '2020-09-24 18:15:06', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file77.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('54', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file78.docx', 'ODB91', '60', null, null, null, '2020-09-25 00:00:00', '2020-09-24 18:30:32', '2020-09-24 18:30:50', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file78.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('55', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file79.docx', 'ODB92', '40', '40', '0', null, '2020-09-25 00:00:00', '2020-09-24 18:33:27', '2020-09-24 18:33:43', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file79.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('56', 'CM2009002', null, null, 'The_Lighthouse_More_file1.docx', 'ODB93', '20', '20', '0', null, '2020-09-25 00:00:00', '2020-09-24 18:38:08', '2020-09-26 20:21:40', '2020-11-23 00:00:00', 'uploads/Buy/The_Lighthouse_More_file1.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('57', 'CM2009002', null, null, 'White_Lies_Sell_22.docx', 'ODB94', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-24 18:51:43', '2020-09-24 18:51:51', '2020-11-23 00:00:00', 'uploads/Buy/White_Lies_Sell_22.docx', '2', '0', '0', null, '1', '', '', null, '1', null, '5', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('58', 'CM2009002', null, null, 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN.docx', 'ODB95', '10', '10', '0', null, '2020-09-25 00:00:00', '2020-09-24 19:09:56', '2020-09-24 19:10:29', '2020-11-23 00:00:00', 'uploads/Buy/Night_Terrors_in_Cairo_FEEDBACK_ADMIN.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('59', 'CM2009002', null, null, 'Umbrella_Sell_12.docx', 'ODB96', '10', '10', '0', null, '2020-09-25 00:00:00', '2020-09-24 19:22:07', '2020-09-24 19:34:37', '2020-11-23 00:00:00', 'uploads/Buy/Umbrella_Sell_12.docx', '2', '0', '0', null, '1', '', '', null, '1', null, '3', '1', null, '1', '0', '1', '0', null, '0', '0', '1', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('60', 'CM2009001', null, null, '23963_200923_0.jpg', 'ODB97', '30', '27', '10', null, '2020-09-30 00:00:00', '2020-09-24 19:32:08', '2020-09-24 19:33:05', '2020-11-23 00:00:00', 'uploads/Buy/23963_200923_0.jpg', '1', '0', '0', null, '0', null, 'More details.', null, '1', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '1', 'D', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('61', 'CM2009001', null, null, '23963_200923_1.jpg', 'ODB97', '30', '27', '10', null, '2020-09-30 00:00:00', '2020-09-24 19:32:08', '2020-09-24 19:33:05', '2020-11-23 00:00:00', 'uploads/Buy/23963_200923_1.jpg', '1', '0', '0', null, '0', null, 'More details.', null, '1', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '1', 'D', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('62', 'CM2009001', null, null, '23963_2009231.jpg', 'ODB98', '20', '20', '0', null, '2020-09-27 00:00:00', '2020-09-24 20:08:26', '2020-09-24 20:10:08', '2020-11-23 00:00:00', 'uploads/Buy/23963_2009231.jpg', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '0', 'C', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('63', 'CM2009002', null, null, 'Shards_of_Glass_Feedback_client.docx', 'ODB99', '10', '10', '0', null, '2020-10-29 00:00:00', '2020-09-25 12:40:10', '2020-09-25 16:33:33', '2020-11-24 00:00:00', 'uploads/Buy/Shards_of_Glass_Feedback_client.docx', '1', '0', '0', null, '0', null, 'aaa', null, '1', null, '1', '1', 'notcomplete', '1', '0', '1', '0', null, '0', '0', '0', 'A', '5', null, '2021-03-24', '2020-11-29', null, '1', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('64', 'CM2009001', null, null, 'Data_input.docx', 'ODB100', '10', '10', '0', null, '2020-09-29 00:00:00', '2020-09-26 11:39:09', '2020-09-26 11:39:27', '2020-11-25 00:00:00', 'uploads/Buy/Data_input.docx', '2', '0', '0', null, '1', 'Not Satisfired (ODB100)\r\n', '* อธิบายการสั่งOrder', null, '1', null, '0', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('65', 'CM2009001', null, null, 'Finalist_Report_project1.docx', 'ODB101', null, null, null, null, '2020-10-01 00:00:00', '2020-09-26 15:46:51', '2020-09-26 15:46:49', null, 'uploads/Buy/Finalist_Report_project1.docx', '0', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('66', 'CM2009001', null, null, 'LINE_P25630805_160042399.png', 'ODB102', '30', null, null, null, '2020-09-29 00:00:00', '2020-09-26 16:26:29', '2020-09-26 22:12:21', '2020-11-25 00:00:00', 'uploads/Buy/LINE_P25630805_160042399.png', '1', '0', '0', null, '0', null, 'More details.', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'D', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('67', 'CM2009001', null, null, 'Finalist_Report_project2.docx', 'ODB103', '50', null, null, null, '2020-09-29 00:00:00', '2020-09-26 16:52:50', '2020-09-26 16:52:50', '2020-11-25 00:00:00', 'uploads/Buy/Finalist_Report_project2.docx', '1', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'C', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('68', 'CM2009001', null, null, 'Finalist_Report_100820_Programmer_.docx', 'ODB104', '3000', null, null, null, '2020-09-27 00:00:00', '2020-09-26 18:56:34', '2020-09-26 19:03:14', '2020-11-25 00:00:00', 'uploads/Buy/Finalist_Report_100820_Programmer_.docx', '1', '0', '0', null, '0', null, 'ดเดเดเดเ', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'B', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('69', 'CM2009001', null, null, 'Option_ทั้งหมดสำหรับระบบ_บันทึกออเดอร์หลังร้า.docx', 'ODB105', '5000', null, null, null, '2020-09-27 00:00:00', '2020-09-26 19:00:19', '2020-09-26 19:02:46', '2020-11-25 00:00:00', 'uploads/Buy/Option_ทั้งหมดสำหรับระบบ_บันทึกออเดอร์หลังร้า.docx', '1', '0', '0', null, '0', null, '5555', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('70', 'A20200504', 'Jimmyner', 'kuhaku0879871121@gmail.com', 'Data_input1.docx', 'ODB106', '0', null, null, null, '2020-09-28 00:00:00', '2020-09-26 23:41:31', null, null, 'uploads/Buy/Data_input1.docx', '1', '1', '0', null, '0', null, '', null, '1', null, '0', null, 'complete', '0', null, null, '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '0', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('71', 'CM2009002', null, null, 'The_Lighthouse_More_file2.docx', 'ODB107', '10', null, null, null, '2020-09-29 00:00:00', '2020-09-27 11:26:27', '2020-09-27 11:27:10', '2020-11-26 00:00:00', 'uploads/Buy/The_Lighthouse_More_file2.docx', '2', '0', '0', null, '0', '', 'aa', null, '0', null, '0', '0', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0');
INSERT INTO `tbl_upload_order` VALUES ('72', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file80.docx', 'ODB108', '20', null, null, null, '2020-09-28 00:00:00', '2020-09-27 11:30:08', '2020-09-27 11:30:30', '2020-11-26 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file80.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '0', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0');

-- ----------------------------
-- Table structure for `tbl_upload_order_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_order_team`;
CREATE TABLE `tbl_upload_order_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_upload_team_uot` int(11) DEFAULT NULL COMMENT 'id หลักของตาราง tbl_upload_team',
  `teamId` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT '',
  `order_id` varchar(110) DEFAULT '' COMMENT 'OR00001',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `note_feedback` varchar(255) DEFAULT NULL,
  `status_admin` int(2) DEFAULT '0',
  `status_approved_upload` int(2) DEFAULT '0',
  `relive_status` varchar(11) DEFAULT '0',
  `status_upload_admin_cp` int(2) DEFAULT '0' COMMENT ' 0 == user // 1 == admin ที่อัพโหลดไฟล์มา',
  `group` varchar(10) DEFAULT NULL COMMENT 'การแยกหมวดหมู่ของเอกสาร',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_order_team
-- ----------------------------
INSERT INTO `tbl_upload_order_team` VALUES ('1', '2', 'TM2009002', 'Moving_On_Delivery26.docx', 'ODB62', '2020-09-20 14:03:17', null, 'uploads/Team/Moving_On_Delivery26.docx', null, '0', '0', '0', '0', null);
INSERT INTO `tbl_upload_order_team` VALUES ('2', '2', 'TM2009002', 'Moving_On_Delivery27.docx', 'ODB68', '2020-09-20 16:10:23', null, 'uploads/Team/Moving_On_Delivery27.docx', null, '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('3', '3', 'TM2009002', 'Moving_On_Delivery28.docx', 'ODB67', '2020-09-20 16:14:03', null, 'uploads/Team/Moving_On_Delivery28.docx', null, '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('4', '4', 'TM2009002', 'Find_Me_GT_file.docx', 'ODB62', '2020-09-20 16:40:00', null, 'uploads/Team/Find_Me_GT_file.docx', null, '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('5', '4', 'TM2009002', 'The_Lighthouse_More_file1.docx', 'ODB62', '2020-09-20 16:43:52', null, 'uploads/Team/The_Lighthouse_More_file1.docx', null, '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('6', '9', 'TM2009002', 'Moving_On_Delivery29.docx', 'ODB69', '2020-09-20 18:22:12', null, 'uploads/Team/Moving_On_Delivery29.docx', null, '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('7', '10', 'TM2009002', 'Shards_of_Glass_Feedback_client.docx', 'ODB74', '2020-09-20 21:35:08', null, 'uploads/Team/Shards_of_Glass_Feedback_client.docx', null, '0', '0', '0', '0', '2');
INSERT INTO `tbl_upload_order_team` VALUES ('8', '10', 'TM2009002', 'Moving_On_Delivery30.docx', 'ODB74', '2020-09-20 21:35:08', null, 'uploads/Team/Moving_On_Delivery30.docx', null, '0', '0', '0', '0', '2');
INSERT INTO `tbl_upload_order_team` VALUES ('9', null, 'TM2009002', 'Shards_of_Glass_Feedback_client1.docx', 'ODB74', '2020-09-20 21:54:52', null, 'uploads/Team/Shards_of_Glass_Feedback_client1.docx', null, '0', '0', '0', '1', null);
INSERT INTO `tbl_upload_order_team` VALUES ('10', '10', 'TM2009002', 'Moving_On_Delivery31.docx', 'ODB74', '2020-09-20 22:42:34', null, 'uploads/Team/Moving_On_Delivery31.docx', null, '0', '0', '0', '0', '2');
INSERT INTO `tbl_upload_order_team` VALUES ('11', '10', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN1.docx', 'ODB74', '2020-09-20 22:58:28', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN1.docx', null, '0', '0', '0', '0', '2');
INSERT INTO `tbl_upload_order_team` VALUES ('12', '11', 'TM2009001', 'บัตรสมาชิก.pdf', 'ODB76', '2020-09-21 11:04:00', null, 'uploads/Team/บัตรสมาชิก.pdf', null, '0', '0', '0', '0', '3');
INSERT INTO `tbl_upload_order_team` VALUES ('13', '11', 'TM2009001', 'test-Donut.pdf', 'ODB76', '2020-09-21 13:48:10', null, 'uploads/Team/test-Donut.pdf', null, '0', '0', '0', '0', '3');
INSERT INTO `tbl_upload_order_team` VALUES ('14', '15', 'TM2009001', 'test-Donut1.pdf', 'ODB78', '2020-09-21 13:49:08', null, 'uploads/Team/test-Donut1.pdf', null, '0', '0', '0', '0', '3');
INSERT INTO `tbl_upload_order_team` VALUES ('15', '14', 'TM2009001', 'Checklist_Programmer_20-09-20.xlsx', 'ODB74', '2020-09-21 16:16:54', null, 'uploads/Team/Checklist_Programmer_20-09-20.xlsx', null, '0', '0', '0', '0', '3');
INSERT INTO `tbl_upload_order_team` VALUES ('16', '14', 'TM2009001', 'messageImage_1600504324765.jpg', 'ODB74', '2020-09-21 16:16:56', null, 'uploads/Team/messageImage_1600504324765.jpg', null, '0', '0', '0', '0', '4');
INSERT INTO `tbl_upload_order_team` VALUES ('17', '14', 'TM2009001', 'company_profile.pdf', 'ODB74', '2020-09-21 16:17:00', null, 'uploads/Team/company_profile.pdf', null, '0', '0', '0', '0', '4');
INSERT INTO `tbl_upload_order_team` VALUES ('18', '14', 'TM2009001', 'Programmer_แก้ไข_200920.docx', 'ODB74', '2020-09-21 16:17:01', null, 'uploads/Team/Programmer_แก้ไข_200920.docx', null, '0', '0', '0', '0', '3');
INSERT INTO `tbl_upload_order_team` VALUES ('19', '16', 'TM2009001', 'messageImage_16005043247651.jpg', 'ODB79', '2020-09-21 16:24:18', null, 'uploads/Team/messageImage_16005043247651.jpg', null, '0', '0', '0', '0', '4');
INSERT INTO `tbl_upload_order_team` VALUES ('20', '16', 'TM2009001', 'Checklist_Programmer_20-09-201.xlsx', 'ODB79', '2020-09-21 16:24:18', null, 'uploads/Team/Checklist_Programmer_20-09-201.xlsx', null, '0', '0', '0', '0', '3');
INSERT INTO `tbl_upload_order_team` VALUES ('21', '16', 'TM2009001', 'company_profile1.pdf', 'ODB79', '2020-09-21 16:24:20', null, 'uploads/Team/company_profile1.pdf', null, '0', '0', '0', '0', '4');
INSERT INTO `tbl_upload_order_team` VALUES ('22', '16', 'TM2009001', 'Programmer_แก้ไข_2009201.docx', 'ODB79', '2020-09-21 16:24:23', null, 'uploads/Team/Programmer_แก้ไข_2009201.docx', null, '0', '0', '0', '0', '3');
INSERT INTO `tbl_upload_order_team` VALUES ('23', '26', 'TM2009001', '23963_200923.jpg', 'ODB77', '2020-09-24 08:11:22', null, 'uploads/Team/23963_200923.jpg', null, '0', '0', '0', '0', '5');
INSERT INTO `tbl_upload_order_team` VALUES ('24', '26', 'TM2009001', '3.png', 'ODB77', '2020-09-24 08:11:26', null, 'uploads/Team/3.png', null, '0', '0', '0', '0', '5');
INSERT INTO `tbl_upload_order_team` VALUES ('25', '26', 'TM2009001', '011.png', 'ODB77', '2020-09-24 08:11:26', null, 'uploads/Team/011.png', null, '0', '0', '0', '0', '6');
INSERT INTO `tbl_upload_order_team` VALUES ('26', '27', 'TM2009002', 'And_When_Did_You_Last_See_Your_Father__Main_file1.docx', 'ODB66', '2020-09-24 11:39:33', null, 'uploads/Team/And_When_Did_You_Last_See_Your_Father__Main_file1.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('27', '28', 'TM2009002', 'And_When_Did_You_Last_See_Your_Father__Main_file2.docx', 'ODB87', '2020-09-24 12:34:10', null, 'uploads/Team/And_When_Did_You_Last_See_Your_Father__Main_file2.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('28', '29', 'TM2009002', 'Moving_On_Delivery32.docx', 'ODB88', '2020-09-24 16:54:59', null, 'uploads/Team/Moving_On_Delivery32.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('29', '30', 'TM2009001', '23963_200923_1.jpg', 'ODB89', '2020-09-24 18:14:33', null, 'uploads/Team/23963_200923_1.jpg', null, '0', '0', '0', '0', '6');
INSERT INTO `tbl_upload_order_team` VALUES ('30', '30', 'TM2009001', '23963_2009231.jpg', 'ODB89', '2020-09-24 18:14:33', null, 'uploads/Team/23963_2009231.jpg', null, '0', '0', '0', '0', '5');
INSERT INTO `tbl_upload_order_team` VALUES ('31', '31', 'TM2009002', 'Find_Me_GT_file.docx', 'ODB90', '2020-09-24 18:19:47', null, 'uploads/Team/Find_Me_GT_file.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('32', '29', 'TM2009002', 'Moving_On_Delivery33.docx', 'ODB88', '2020-09-24 18:36:18', null, 'uploads/Team/Moving_On_Delivery33.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('33', '32', 'TM2009002', 'The_Dream_Asylum_Rewrite.docx', 'ODB92', '2020-09-24 18:36:55', null, 'uploads/Team/The_Dream_Asylum_Rewrite.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('34', '33', 'TM2009002', 'The_Lighthouse_More_file2.docx', 'ODB93', '2020-09-24 18:41:08', null, 'uploads/Team/The_Lighthouse_More_file2.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('35', '34', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN2.docx', 'ODB94', '2020-09-24 18:54:12', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN2.docx', null, '0', '0', '0', '0', '8');
INSERT INTO `tbl_upload_order_team` VALUES ('36', '35', 'TM2009002', 'Shards_of_Glass_Feedback_client2.docx', 'ODB95', '2020-09-24 19:12:46', null, 'uploads/Team/Shards_of_Glass_Feedback_client2.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('37', '35', 'TM2009002', 'The_Dream_Asylum_Rewrite1.docx', 'ODB95', '2020-09-24 19:12:46', null, 'uploads/Team/The_Dream_Asylum_Rewrite1.docx', null, '0', '0', '0', '0', '8');
INSERT INTO `tbl_upload_order_team` VALUES ('38', '36', 'TM2009002', 'Shards_of_Glass_Feedback_client3.docx', 'ODB96', '2020-09-24 19:25:05', null, 'uploads/Team/Shards_of_Glass_Feedback_client3.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('39', '36', 'TM2009002', 'White__Sell_31.docx', 'ODB96', '2020-09-24 19:25:05', null, 'uploads/Team/White__Sell_31.docx', null, '0', '0', '0', '0', '8');
INSERT INTO `tbl_upload_order_team` VALUES ('40', '36', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN3.docx', 'ODB96', '2020-09-24 19:33:00', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN3.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('41', '37', 'TM2009001', '23963_200923_0.jpg', 'ODB98', '2020-09-24 20:20:27', null, 'uploads/Team/23963_200923_0.jpg', null, '0', '0', '0', '0', '9');
INSERT INTO `tbl_upload_order_team` VALUES ('42', '37', 'TM2009001', '23963_200923_11.jpg', 'ODB98', '2020-09-24 20:20:27', null, 'uploads/Team/23963_200923_11.jpg', null, '0', '0', '0', '0', '9');
INSERT INTO `tbl_upload_order_team` VALUES ('43', '38', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN4.docx', 'ODB99', '2020-09-25 12:51:04', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN4.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('44', '38', 'TM2009002', 'Moving_On_Delivery34.docx', 'ODB99', '2020-09-25 12:53:42', null, 'uploads/Team/Moving_On_Delivery34.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('45', '38', 'TM2009002', 'White_Lies_Sell_24.docx', 'ODB99', '2020-09-25 14:46:46', null, 'uploads/Team/White_Lies_Sell_24.docx', null, '0', '0', '0', '0', '8');
INSERT INTO `tbl_upload_order_team` VALUES ('46', '38', 'TM2009002', 'White__Sell_32.docx', 'ODB99', '2020-09-25 14:46:46', null, 'uploads/Team/White__Sell_32.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('47', '38', 'TM2009002', 'The_Dream_Asylum_Rewrite2.docx', 'ODB99', '2020-09-25 15:10:14', null, 'uploads/Team/The_Dream_Asylum_Rewrite2.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('48', '38', 'TM2009002', 'The_Lighthouse_More_file11.docx', 'ODB99', '2020-09-25 15:23:36', null, 'uploads/Team/The_Lighthouse_More_file11.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('49', '38', 'TM2009002', 'The_Lighthouse_More_file12.docx', 'ODB99', '2020-09-25 16:26:14', null, 'uploads/Team/The_Lighthouse_More_file12.docx', null, '0', '0', '0', '0', '7');
INSERT INTO `tbl_upload_order_team` VALUES ('50', '25', 'TM2009001', 'Finalist_Report_project.docx', 'ODB84', '2020-09-26 11:48:58', null, 'uploads/Team/Finalist_Report_project.docx', null, '0', '0', '0', '0', '11');
INSERT INTO `tbl_upload_order_team` VALUES ('51', '25', 'TM2009001', '2018-07-30-08-21-44.jpg', 'ODB84', '2020-09-26 11:49:06', null, 'uploads/Team/2018-07-30-08-21-44.jpg', null, '0', '0', '0', '0', '10');
INSERT INTO `tbl_upload_order_team` VALUES ('52', '25', 'TM2009001', 'LINE_P25630805_160042399.png', 'ODB84', '2020-09-26 21:37:05', null, 'uploads/Team/LINE_P25630805_160042399.png', null, '0', '0', '0', '0', '12');
INSERT INTO `tbl_upload_order_team` VALUES ('53', '25', 'TM2009001', 'Programmer_แก้ไข_25-09-20.docx', 'ODB84', '2020-09-26 21:37:06', null, 'uploads/Team/Programmer_แก้ไข_25-09-20.docx', null, '0', '0', '0', '0', '13');
INSERT INTO `tbl_upload_order_team` VALUES ('54', '25', 'TM2009001', 'Data_input.docx', 'ODB84', '2020-09-26 21:40:59', null, 'uploads/Team/Data_input.docx', null, '0', '0', '0', '0', '15');
INSERT INTO `tbl_upload_order_team` VALUES ('55', '25', 'TM2009001', 'slide_lanna_0.jpg', 'ODB84', '2020-09-26 21:41:00', null, 'uploads/Team/slide_lanna_0.jpg', null, '0', '0', '0', '0', '14');
INSERT INTO `tbl_upload_order_team` VALUES ('56', '30', 'TM2009001', 'Programmer_แก้ไข_2009202.docx', 'ODB89', '2020-09-26 21:42:19', null, 'uploads/Team/Programmer_แก้ไข_2009202.docx', null, '0', '0', '0', '0', '16');
INSERT INTO `tbl_upload_order_team` VALUES ('57', '25', 'TM2009001', 'Data_input1.docx', 'ODB84', '2020-09-26 21:42:57', null, 'uploads/Team/Data_input1.docx', null, '0', '0', '0', '0', '16');

-- ----------------------------
-- Table structure for `tbl_upload_orderGT`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_orderGT`;
CREATE TABLE `tbl_upload_orderGT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `more_id` int(11) DEFAULT NULL,
  `order_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `file_name_GT` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `path_GT` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status_admin_gt` int(11) NOT NULL COMMENT 'เช็คสถานะที่เช็คว่าเป็น Adminหรือป่าว',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload_orderGT
-- ----------------------------
INSERT INTO `tbl_upload_orderGT` VALUES ('1', '1', 'ODB51', 'IMG_4214.png', 'uploads/Buy/GT/IMG_4214.png', '0', '2020-09-20 11:20:14', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('2', '7', 'ODB57', 'Pinnacle_Attendance_(3)1.xlsx', 'uploads/Buy/GT/Pinnacle_Attendance_(3)1.xlsx', '0', '2020-09-20 12:21:15', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('3', '24', 'ODB74', 'G_Client.docx', 'uploads/Buy/GT/G_Client.docx', '0', '2020-09-20 19:04:49', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('4', '25', 'ODB74', 'G_Team.docx', 'uploads/Buy/GT/G_Team.docx', '0', '2020-09-20 19:12:00', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('5', '26', 'ODB74', 'The_Lighthouse_More000.docx', 'uploads/Buy/GT/The_Lighthouse_More000.docx', '0', '2020-09-20 20:01:01', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('6', '26', 'ODB74', 'The_Dream_Asylum_Rewrite000.docx', 'uploads/Buy/GT/The_Dream_Asylum_Rewrite000.docx', '0', '2020-09-20 21:14:19', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('7', '27', 'ODB75', 'แก้ไข_·3.pdf', 'uploads/Buy/GT/แก้ไข_·3.pdf', '0', '2020-09-21 10:14:32', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('8', '28', 'ODB76', 'feedback_Depa_Vocher_27082020.pdf', 'uploads/Buy/GT/feedback_Depa_Vocher_27082020.pdf', '0', '2020-09-21 10:14:53', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('9', '31', 'ODB79', 'Programmer_แก้ไข_200920.docx', 'uploads/Buy/GT/Programmer_แก้ไข_200920.docx', '0', '2020-09-21 16:22:20', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('10', '32', 'ODB80', 'Programmer_แก้ไข_200920199.docx', 'uploads/Buy/GT/Programmer_แก้ไข_200920199.docx', '0', '2020-09-21 16:54:28', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('11', '34', 'ODB82', 'IMG_4159.JPG', 'uploads/Buy/GT/IMG_4159.JPG', '0', '2020-09-21 23:40:12', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('12', '34', 'ODB82', 'IMG_4158.JPG', 'uploads/Buy/GT/IMG_4158.JPG', '0', '2020-09-21 23:40:13', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('13', '35', 'ODB83', 'IMG_4192.PNG', 'uploads/Buy/GT/IMG_4192.PNG', '0', '2020-09-21 23:44:12', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('14', '35', 'ODB83', 'IMG_4213.JPG', 'uploads/Buy/GT/IMG_4213.JPG', '0', '2020-09-21 23:44:12', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('15', '35', 'ODB83', 'IMG_42141.PNG', 'uploads/Buy/GT/IMG_42141.PNG', '0', '2020-09-21 23:44:12', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('16', '37', 'ODB85', 'IMG_4145.JPG', 'uploads/Buy/GT/IMG_4145.JPG', '0', '2020-09-23 14:37:18', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('17', '37', 'ODB85', 'IMG_4139.PNG', 'uploads/Buy/GT/IMG_4139.PNG', '0', '2020-09-23 14:37:19', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('18', '37', 'ODB85', 'IMG_4631.JPG', 'uploads/Buy/GT/IMG_4631.JPG', '0', '2020-09-23 14:37:19', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('19', '37', 'ODB85', 'IMG_4630.JPG', 'uploads/Buy/GT/IMG_4630.JPG', '0', '2020-09-23 14:37:23', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('20', '37', 'ODB85', 'IMG_41581.JPG', 'uploads/Buy/GT/IMG_41581.JPG', '0', '2020-09-23 14:37:24', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('21', '38', 'ODB86', 'IMG_4940.JPG', 'uploads/Buy/GT/IMG_4940.JPG', '0', '2020-09-23 14:39:44', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('22', '38', 'ODB86', 'IMG_4941.JPG', 'uploads/Buy/GT/IMG_4941.JPG', '0', '2020-09-23 14:39:46', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('23', '39', 'ODB87', 'Find_Me_GT_file16.docx', 'uploads/Buy/GT/Find_Me_GT_file16.docx', '0', '2020-09-24 12:11:47', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('24', '40', 'ODB88', 'Find_Me_GT_file17.docx', 'uploads/Buy/GT/Find_Me_GT_file17.docx', '0', '2020-09-24 16:51:14', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('25', '41', 'ODB89', '23963_200923_0.jpg', 'uploads/Buy/GT/23963_200923_0.jpg', '0', '2020-09-24 18:11:03', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('26', '42', 'ODB90', 'Find_Me_GT_file18.docx', 'uploads/Buy/GT/Find_Me_GT_file18.docx', '0', '2020-09-24 18:14:33', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('27', '49', 'ODB97', '23963_200923_01.jpg', 'uploads/Buy/GT/23963_200923_01.jpg', '0', '2020-09-24 19:32:07', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('28', '51', 'ODB99', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN.docx', 'uploads/Buy/GT/Night_Terrors_in_Cairo_FEEDBACK_ADMIN.docx', '0', '2020-09-25 12:40:08', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('29', '52', 'ODB100', 'LINE_P25630805_160042399.png', 'uploads/Buy/GT/LINE_P25630805_160042399.png', '0', '2020-09-26 11:39:07', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('30', '52', 'ODB100', 'LINE_P25630805_160507710.png', 'uploads/Buy/GT/LINE_P25630805_160507710.png', '0', '2020-09-26 11:39:07', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('31', '53', 'ODB101', 'LINE_P25630805_1600423991.png', 'uploads/Buy/GT/LINE_P25630805_1600423991.png', '0', '2020-09-26 15:46:49', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('32', '55', 'ODB103', 'LINE_P25630805_1600423992.png', 'uploads/Buy/GT/LINE_P25630805_1600423992.png', '0', '2020-09-26 16:45:02', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('33', '56', 'ODB104', 'Data_input.docx', 'uploads/Buy/GT/Data_input.docx', '0', '2020-09-26 18:56:32', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('34', '57', 'ODB105', 'Data_input1.docx', 'uploads/Buy/GT/Data_input1.docx', '0', '2020-09-26 19:00:17', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('35', '58', 'ODB106', 'LINE_P25630806_112922591.png', 'uploads/Buy/GT/LINE_P25630806_112922591.png', '0', '2020-09-26 23:41:31', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('36', '59', 'ODB107', 'The_Dream_Asylum_Rewrite1.docx', 'uploads/Buy/GT/The_Dream_Asylum_Rewrite1.docx', '0', '2020-09-27 11:26:24', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('37', '60', 'ODB108', 'Find_Me_GT_file19.docx', 'uploads/Buy/GT/Find_Me_GT_file19.docx', '0', '2020-09-27 11:30:05', null);

-- ----------------------------
-- Table structure for `tbl_upload_store`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_store`;
CREATE TABLE `tbl_upload_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL,
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
  `is_accept` int(11) DEFAULT '0',
  `price_file_read` varchar(100) NOT NULL,
  `section` varchar(100) DEFAULT '0',
  `status_chack` varchar(100) DEFAULT '0' COMMENT '0 // not 1//yes',
  `relive_status` int(2) DEFAULT '0' COMMENT '0// 1//',
  `notify_user` tinyint(1) DEFAULT NULL,
  `status_delivery_upload` varchar(10) DEFAULT '0',
  `notify_admin` tinyint(1) DEFAULT NULL,
  `status_check_drop` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_store
-- ----------------------------
INSERT INTO `tbl_upload_store` VALUES ('3', 'CM2009002', 'ODS1', 'White_Lies_Sell_217.docx', '0', '2020-09-18 16:43:05', '2020-09-18 16:54:19', 'uploads/Store/White_Lies_Sell_217.docx', '0', 'ffff', 'no', 'complete', '1', '0', '', '3', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('4', 'CM2009002', 'ODS2', 'White_Lies_Sell_218.docx', '0', '2020-09-18 16:57:19', '2020-09-18 16:57:35', 'uploads/Store/White_Lies_Sell_218.docx', '50', '', 'A', 'complete', '1', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('5', 'CM2009001', 'ODS3', 'IMG_4192.PNG', '0', '2020-09-19 11:42:00', '2020-09-19 13:31:36', 'uploads/Store/IMG_4192.PNG', '50', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', 'A', 'complete', '1', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('6', 'CM2009001', 'ODS3', 'IMG_4221.JPG', '0', '2020-09-19 11:42:00', '2020-09-19 15:50:28', 'uploads/Store/IMG_4221.JPG', '50', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', 'A', 'complete', '1', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('7', 'CM2009001', 'ODS3', 'IMG_4249.JPG', '0', '2020-09-19 11:42:00', '2020-09-19 16:08:25', 'uploads/Store/IMG_4249.JPG', '0', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', 'no', 'notcomplete', '1', '0', '', '3', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('8', 'CM2009001', 'ODS3', 'IMG_4214.PNG', '0', '2020-09-19 11:42:00', '2020-09-19 16:18:17', 'uploads/Store/IMG_4214.PNG', '20', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', 'B', 'notcomplete', '1', '0', '', '4', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('9', 'CM2009001', 'ODS3', 'IMG_4213.JPG', '0', '2020-09-19 11:42:00', '2020-09-22 15:09:58', 'uploads/Store/IMG_4213.JPG', '50', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', 'A', 'complete', '0', '0', '', '5', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('10', 'CM2009002', 'ODS4', 'Umbrella_Sell_125.docx', '1', '2020-09-19 13:29:53', '2020-09-19 15:43:34', 'uploads/Store/Umbrella_Sell_125.docx', null, '', null, null, '0', '0', '', '0', '0', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('12', 'CM2009002', 'ODS5', 'Umbrella_Sell_126.docx', '0', '2020-09-19 15:17:39', null, 'uploads/Store/Umbrella_Sell_126.docx', null, 'sss', null, null, '0', '0', '', '0', '0', '0', null, '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('13', 'CM2009002', 'ODS6', 'White__Sell_312.docx', '0', '2020-09-19 15:20:36', '2020-09-19 15:51:08', 'uploads/Store/White__Sell_312.docx', '50', '', 'A', 'complete', '1', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('14', 'CM2009002', 'ODS6', 'White_Lies_Sell_219.docx', '0', '2020-09-19 15:20:36', '2020-09-19 16:00:46', 'uploads/Store/White_Lies_Sell_219.docx', '0', '', 'no', 'notcomplete', '1', '0', '', '3', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('15', 'CM2009002', 'ODS6', 'Umbrella_Sell_127.docx', '0', '2020-09-19 15:20:36', '2020-09-19 15:58:27', 'uploads/Store/Umbrella_Sell_127.docx', '0', '', 'no', 'notcomplete', '1', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('17', 'CM2009001', 'ODS7', 'LINE_P25630806_112845383.png', '0', '2020-09-19 15:26:30', null, 'uploads/Store/LINE_P25630806_112845383.png', null, 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', null, null, '0', '0', '', '0', '0', '0', null, '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('18', 'CM2009002', 'ODS8', 'White_Lies_Sell_220.docx', '0', '2020-09-19 15:30:06', '2020-09-19 15:59:51', 'uploads/Store/White_Lies_Sell_220.docx', '0', '', 'no', 'notcomplete', '1', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('19', 'CM2009002', 'ODS9', 'Umbrella_Sell_128.docx', '0', '2020-09-19 15:53:05', '2020-09-19 16:17:37', 'uploads/Store/Umbrella_Sell_128.docx', '0', '', 'no', 'notcomplete', '1', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('20', 'CM2009002', 'ODS10', 'The_Lighthouse_More_file6.docx', '0', '2020-09-19 16:47:42', '2020-09-19 16:49:48', 'uploads/Store/The_Lighthouse_More_file6.docx', '20', '', 'B', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('21', 'CM2009002', 'ODS10', 'White_Lies_Sell_218.docx', '0', '2020-09-19 16:47:42', '2020-09-19 16:49:48', 'uploads/Store/White_Lies_Sell_218.docx', '20', '', 'B', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('22', 'CM2009002', 'ODS10', 'White__Sell_313.docx', '0', '2020-09-19 16:47:42', '2020-09-19 16:49:56', 'uploads/Store/White__Sell_313.docx', '10', '', 'C', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('23', 'CM2009002', 'ODS10', 'Umbrella_Sell_129.docx', '0', '2020-09-19 16:47:42', '2020-09-19 16:49:56', 'uploads/Store/Umbrella_Sell_129.docx', '10', '', 'C', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('24', 'CM2009002', 'ODS11', 'The_Lighthouse_More_file7.docx', '0', '2020-09-19 16:48:57', '2020-09-22 15:06:46', 'uploads/Store/The_Lighthouse_More_file7.docx', '50', '', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('25', 'CM2009002', 'ODS11', 'White__Sell_314.docx', '0', '2020-09-19 16:48:57', '2020-09-22 15:07:17', 'uploads/Store/White__Sell_314.docx', '20', '', 'B', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('26', 'CM2009002', 'ODS11', 'White_Lies_Sell_221.docx', '0', '2020-09-19 16:48:57', '2020-09-22 15:07:17', 'uploads/Store/White_Lies_Sell_221.docx', '20', '', 'B', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('27', 'CM2009002', 'ODS11', 'Umbrella_Sell_130.docx', '0', '2020-09-19 16:48:57', '2020-09-22 15:07:22', 'uploads/Store/Umbrella_Sell_130.docx', '10', '', 'C', 'notcomplete', '0', '0', '', '3', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('28', 'CM2009002', 'ODS12', 'The_Lighthouse_More_file8.docx', '0', '2020-09-19 16:50:39', '2020-09-19 16:53:48', 'uploads/Store/The_Lighthouse_More_file8.docx', '20', '', 'B', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('29', 'CM2009002', 'ODS12', 'Umbrella_Sell_131.docx', '0', '2020-09-19 16:50:39', '2020-09-19 16:53:48', 'uploads/Store/Umbrella_Sell_131.docx', '20', '', 'B', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('30', 'CM2009002', 'ODS12', 'White_Lies_Sell_222.docx', '0', '2020-09-19 16:50:39', '2020-09-19 16:54:05', 'uploads/Store/White_Lies_Sell_222.docx', '10', '', 'C', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('31', 'CM2009002', 'ODS12', 'White__Sell_315.docx', '0', '2020-09-19 16:50:39', '2020-09-19 16:54:05', 'uploads/Store/White__Sell_315.docx', '10', '', 'C', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('32', 'CM2009001', 'ODS13', 'IMG_4174.PNG', '0', '2020-09-19 16:51:11', '2020-09-19 16:53:55', 'uploads/Store/IMG_4174.PNG', '20', '\nYou can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'B', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('33', 'CM2009001', 'ODS13', 'IMG_4175.JPG', '0', '2020-09-19 16:51:13', '2020-09-19 16:53:55', 'uploads/Store/IMG_4175.JPG', '20', '\nYou can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'B', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('34', 'CM2009001', 'ODS13', 'IMG_4181.PNG', '0', '2020-09-19 16:51:17', '2020-09-19 16:53:55', 'uploads/Store/IMG_4181.PNG', '20', '\nYou can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'B', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('35', 'CM2009001', 'ODS13', 'IMG_4179.JPG', '0', '2020-09-19 16:51:19', '2020-09-19 16:54:08', 'uploads/Store/IMG_4179.JPG', '10', '\nYou can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'C', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('36', 'CM2009001', 'ODS13', 'IMG_4177.JPG', '0', '2020-09-19 16:51:19', '2020-09-19 16:54:08', 'uploads/Store/IMG_4177.JPG', '10', '\nYou can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'C', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('37', 'CM2009001', 'ODS13', 'IMG_4180.JPG', '0', '2020-09-19 16:51:19', '2020-09-19 16:54:08', 'uploads/Store/IMG_4180.JPG', '10', '\nYou can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'C', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('38', 'CM2009002', 'ODS14', 'The_Lighthouse_More_file9.docx', '0', '2020-09-19 17:02:22', '2020-09-19 17:03:22', 'uploads/Store/The_Lighthouse_More_file9.docx', '50', '', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('39', 'CM2009002', 'ODS14', 'White_Lies_Sell_223.docx', '0', '2020-09-19 17:02:22', '2020-09-19 17:03:22', 'uploads/Store/White_Lies_Sell_223.docx', '50', '', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('40', 'CM2009002', 'ODS14', 'Umbrella_Sell_132.docx', '0', '2020-09-19 17:02:22', '2020-09-19 17:03:28', 'uploads/Store/Umbrella_Sell_132.docx', '20', '', 'B', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('41', 'CM2009002', 'ODS14', 'White__Sell_316.docx', '0', '2020-09-19 17:02:23', '2020-09-19 17:03:28', 'uploads/Store/White__Sell_316.docx', '20', '', 'B', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('42', 'CM2009002', 'ODS15', 'Umbrella_Sell_133.docx', '0', '2020-09-19 22:13:55', '2020-09-19 22:22:52', 'uploads/Store/Umbrella_Sell_133.docx', '10', '', 'C', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('43', 'CM2009002', 'ODS15', 'White_Lies_Sell_224.docx', '0', '2020-09-19 22:13:56', '2020-09-19 22:22:52', 'uploads/Store/White_Lies_Sell_224.docx', '10', '', 'C', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('44', 'CM2009002', 'ODS15', 'White__Sell_317.docx', '0', '2020-09-19 22:13:56', '2020-09-19 22:22:58', 'uploads/Store/White__Sell_317.docx', '20', '', 'B', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('45', 'CM2009002', 'ODS16', 'The_Lighthouse_More_file10.docx', '0', '2020-09-19 22:23:40', '2020-09-19 22:24:09', 'uploads/Store/The_Lighthouse_More_file10.docx', '50', '', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('46', 'CM2009002', 'ODS16', 'Umbrella_Sell_134.docx', '0', '2020-09-19 22:23:41', '2020-09-19 22:24:09', 'uploads/Store/Umbrella_Sell_134.docx', '50', '', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('47', 'CM2009002', 'ODS16', 'White_Lies_Sell_225.docx', '0', '2020-09-19 22:23:41', '2020-09-19 22:24:16', 'uploads/Store/White_Lies_Sell_225.docx', '50', '', 'A', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('48', 'CM2009002', 'ODS16', 'White__Sell_318.docx', '0', '2020-09-19 22:23:41', '2020-09-19 22:24:16', 'uploads/Store/White__Sell_318.docx', '50', '', 'A', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('49', '', null, 'Moving_On_Delivery2.docx', '0', '2020-09-20 15:57:14', null, 'uploads/Store/Moving_On_Delivery2.docx', null, null, null, null, '1', '0', '', '0', '1', '1', null, '0', null, '11');
INSERT INTO `tbl_upload_store` VALUES ('50', '', null, 'Programmer_แก้ไข_200920.docx', '0', '2020-09-21 17:04:50', null, 'uploads/Store/Programmer_แก้ไข_200920.docx', null, null, null, null, '1', '0', '', '0', '1', '1', null, '0', null, '11');
INSERT INTO `tbl_upload_store` VALUES ('51', 'CM2009001', 'ODS17', 'IMG_41741.PNG', '0', '2020-09-22 15:13:28', '2020-09-22 15:14:42', 'uploads/Store/IMG_41741.PNG', '50', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('52', 'CM2009001', 'ODS17', 'IMG_41751.JPG', '0', '2020-09-22 15:13:28', '2020-09-22 15:14:42', 'uploads/Store/IMG_41751.JPG', '50', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('53', 'CM2009001', 'ODS17', 'IMG_41791.JPG', '0', '2020-09-22 15:13:29', null, 'uploads/Store/IMG_41791.JPG', null, 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', null, null, '0', '0', '', '4', '1', '0', null, '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('54', 'CM2009001', 'ODS17', 'IMG_41771.JPG', '0', '2020-09-22 15:13:29', '2020-09-22 15:20:38', 'uploads/Store/IMG_41771.JPG', '20', 'You can store document. ( คุณสามารถDrop ได้จำนวนสูงสุด 30 File ไม่เกิน 500 MB)', 'B', 'complete', '0', '0', '', '3', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('55', 'CM2009001', 'ODS18', 'IMG_4149.JPG', '0', '2020-09-22 15:29:45', '2020-09-22 15:31:57', 'uploads/Store/IMG_4149.JPG', '50', '', 'A', 'complete', '0', '0', '', '1', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('56', 'CM2009001', 'ODS18', 'IMG_41752.JPG', '0', '2020-09-22 15:29:45', '2020-09-22 15:32:26', 'uploads/Store/IMG_41752.JPG', '20', '', 'B', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('57', 'CM2009001', 'ODS18', 'IMG_41772.JPG', '0', '2020-09-22 15:29:46', '2020-09-22 15:32:26', 'uploads/Store/IMG_41772.JPG', '20', '', 'B', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('58', 'CM2009001', 'ODS19', 'IMG_41792.JPG', '0', '2020-09-22 15:29:56', '2020-09-22 15:43:13', 'uploads/Store/IMG_41792.JPG', '50', '', 'A', 'complete', '0', '0', '', '2', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('59', 'CM2009001', 'ODS19', 'IMG_41773.JPG', '0', '2020-09-22 15:30:01', '2020-09-22 15:43:28', 'uploads/Store/IMG_41773.JPG', '50', '', 'A', 'complete', '0', '0', '', '3', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('60', 'CM2009001', 'ODS19', 'IMG_41811.PNG', '0', '2020-09-22 15:30:01', '2020-09-22 15:43:35', 'uploads/Store/IMG_41811.PNG', '50', '', 'A', 'complete', '0', '0', '', '4', '1', '0', '1', '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('61', 'CM2009001', 'ODS19', 'IMG_41801.JPG', '0', '2020-09-22 15:30:02', '2020-09-22 15:43:35', 'uploads/Store/IMG_41801.JPG', '50', '', 'A', 'complete', '0', '0', '', '4', '1', '0', '1', '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_upload_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_team`;
CREATE TABLE `tbl_upload_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `position` int(11) DEFAULT NULL,
  `wage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `note` text CHARACTER SET utf8,
  `status` varchar(255) CHARACTER SET utf8 DEFAULT '0' COMMENT 'status เช็ค my task  0 = Processing  / 1 = Complete / 2 = Feedback / 3 = Re Feedback / 4 = Not complete / 5 = กรณีที่โดน re feedback และกำลังรอ admin เช็ค derilery ให้ลูกค้า',
  `teamId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status_dashboard` varchar(100) CHARACTER SET utf8 DEFAULT '0',
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_confirm` datetime DEFAULT NULL,
  `status_informal` int(3) DEFAULT '0' COMMENT 'สถานะเช็คการรับงานของทีมงานนอกระบบ 0 = ยังไม่ได้รับ / 1 = ทีมงานนอกระบบรับงาน ',
  `status_check_team` int(11) DEFAULT '0' COMMENT 'รอทีมกดรับ 1=waiting 2=procrssing 3=complete 4=ไม่รับ',
  `status_out` int(2) DEFAULT '0' COMMENT '0 = เวลาที่ยังไม่เคยหมด // 1 = เวลาที่เคยบวก 12 ชั่วโมงไปแล้ว',
  `stars_score_team` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT 'การให้คะแนนความพึ่งพอใจ ฝั่งทีมงาน',
  `note_approved_team` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `check_popup_nocom` int(2) DEFAULT '0' COMMENT 'สถานะการเช็ค popup ให้แสเดงหน้า my task ตอนที่ admin กด Not complete | 0 = ยังไม่ได้กด / 1 = กดแล้วไม่ต้องแสดง popup อีก',
  `check_deduct_full` int(2) DEFAULT '0' COMMENT 'ไม่ส่งDelivery และไม่กดยกเลิกหัก $20 Auto  0 = ยังไม่ได้หักเงิน $20 / 1 = หักเงินเรียบร้อยแล้ว ไม่ต้องหักอีก',
  `check_past` int(2) DEFAULT '0' COMMENT 'ใช้สำหรับทำสัญลักษณ์เฉยๆมาคไว้ให้ Admin คนต่อไปทราบว่าOrder นี้เช็คแล้ว  0 ยังไม่เช็ก / 1 เช็คแล้ว',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload_team
-- ----------------------------
INSERT INTO `tbl_upload_team` VALUES ('1', 'ODB65', '0', '0', 'sss', '0', null, '0', '2020-09-20 13:20:52', null, null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('2', 'ODB68', '1', '4', 'bb', '5', 'TM2009002', '1', '2020-09-20 16:10:23', '2020-09-20 16:10:23', '2020-09-20 16:09:52', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('3', 'ODB67', '1', '2', '', '5', 'TM2009002', '1', '2020-09-20 16:14:03', '2020-09-20 16:14:03', '2020-09-20 16:13:49', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('4', 'ODB62', '1', '30', '', '5', 'TM2009002', '1', '2020-09-20 16:43:52', '2020-09-20 16:43:52', '2020-09-20 16:39:44', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('5', 'ODB62', '1', '30', '', '5', '', '0', '2020-09-20 16:43:52', '2020-09-20 16:43:52', null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('6', 'ODB62', '1', '30', '', '5', 'TM2009002', '0', '2020-09-20 16:43:52', '2020-09-20 16:43:52', null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('7', 'ODB62', '1', '30', '', '0', '', '0', '2020-09-20 16:53:50', null, null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('8', 'ODB62', '1', '30', '', '0', 'TM2009002', '0', '2020-09-20 16:54:44', null, null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('9', 'ODB69', '1', '4.9', '', '5', 'TM2009002', '1', '2020-09-20 18:22:12', '2020-09-20 18:22:12', '2020-09-20 17:49:47', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('10', 'ODB74', '1', '2', 'Complete', '5', 'TM2009001', '1', '2020-09-21 16:16:07', '2020-09-21 16:16:07', '2020-09-21 16:16:07', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('11', 'ODB76', '1', '2', '7777', '5', 'TM2009001', '1', '2020-09-22 14:21:29', '2020-09-22 14:21:30', '2020-09-21 11:03:14', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('12', 'ODB76', '2', '2', 'ffffff', '5', '', '0', '2020-09-22 14:21:29', '2020-09-22 14:21:30', null, '0', '1', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('13', 'ODB76', '1', '2', 'dfdfdfdf', '5', '', '0', '2020-09-22 14:21:29', '2020-09-22 14:21:30', null, '0', '1', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('14', 'ODB74', '1', '5', 'Team file All', '5', 'TM2009001', '1', '2020-09-21 16:16:54', '2020-09-21 16:16:54', '2020-09-21 16:16:07', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('15', 'ODB78', '1', '1.5', '', '5', 'TM2009001', '1', '2020-09-21 13:49:08', '2020-09-21 13:49:08', '2020-09-21 13:48:26', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('16', 'ODB79', '1', '1.2', '', '5', 'TM2009001', '1', '2020-09-23 13:34:29', '2020-09-23 13:34:30', '2020-09-21 16:23:53', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('17', 'ODB82', '1', '3', '', '0', null, '0', '2020-09-21 23:42:55', null, null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('18', 'ODB83', '3', '1.3', '', '4', 'TM2009002', '1', '2020-09-23 13:36:14', '2020-09-23 13:36:14', '2020-09-23 13:35:43', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('19', 'ODB83', '3', '1.5', '-', '4', 'TM2009002', '1', '2020-09-23 13:36:16', '2020-09-23 13:36:16', '2020-09-23 13:35:43', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('20', 'ODB83', '3', '2', 'Info (ODB83)', '0', 'TM2009001', '1', '2020-09-23 13:35:42', '2020-09-23 13:35:42', '2020-09-23 13:35:43', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('21', 'ODB81', '1', '3', null, '0', null, '0', null, null, null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('22', 'ODB85', '1', '5', 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File Note Team', '1', 'TM2009001', '1', '2020-09-24 08:10:41', '2020-09-24 08:10:41', '2020-09-23 15:11:43', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('23', 'ODB85', '1', '6', 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File Note Team', '1', 'TM2009001', '1', '2020-09-24 08:10:40', '2020-09-24 08:10:40', '2020-09-23 15:11:43', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('24', 'ODB85', '1', '5', 'ffff', '0', 'TM2009001', '1', '2020-09-24 14:10:06', '2020-09-24 14:10:06', '2020-09-24 14:10:07', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('25', 'ODB84', '1', '2', '', '2', 'TM2009001', '1', '2020-09-27 00:48:58', '2020-09-27 00:48:59', '2020-09-24 14:10:31', '0', '0', '1', null, null, '0', '0', '1');
INSERT INTO `tbl_upload_team` VALUES ('26', 'ODB77', '2', '5', '', '2', 'TM2009001', '1', '2020-09-27 00:12:23', '2020-09-27 00:12:23', '2020-09-24 08:10:47', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('27', 'ODB66', '1', '20', 'sss', '5', 'TM2009002', '1', '2020-09-24 11:39:33', '2020-09-24 11:39:33', '2020-09-24 11:38:20', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('28', 'ODB87', '1', '40', 'dd', '5', 'TM2009002', '1', '2020-09-24 12:34:10', '2020-09-24 12:34:10', '2020-09-24 12:33:49', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('29', 'ODB88', '1', '20', '', '5', 'TM2009002', '1', '2020-09-24 18:36:18', '2020-09-24 18:36:18', '2020-09-24 16:54:38', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('30', 'ODB89', '1', '5', '', '1', 'TM2009001', '1', '2020-09-27 01:31:45', '2020-09-27 01:31:45', '2020-09-24 18:14:13', '0', '0', '1', '5', 'แสดงความคิดเห็น (คุณอยากบอกอะไรเรา) Withdraw (ODB89)', '1', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('31', 'ODB90', '1', '2', '', '5', 'TM2009002', '1', '2020-09-24 18:19:47', '2020-09-24 18:19:47', '2020-09-24 18:18:50', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('32', 'ODB92', '1', '4', '', '5', 'TM2009002', '1', '2020-09-25 12:50:41', '2020-09-25 12:50:41', '2020-09-24 18:36:32', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('33', 'ODB93', '1', '2', '', '5', 'TM2009002', '1', '2020-09-25 12:50:41', '2020-09-25 12:50:41', '2020-09-24 18:40:43', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('34', 'ODB94', '1', '2', '', '5', 'TM2009002', '1', '2020-09-24 18:54:12', '2020-09-24 18:54:12', '2020-09-24 18:53:27', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('35', 'ODB95', '1', '50', '', '5', 'TM2009002', '1', '2020-09-25 12:50:41', '2020-09-25 12:50:41', '2020-09-24 19:12:16', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('36', 'ODB96', '1', '10', '', '5', 'TM2009002', '1', '2020-09-25 12:50:41', '2020-09-25 12:50:41', '2020-09-24 19:24:35', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('37', 'ODB98', '1', '5', '', '5', 'TM2009001', '1', '2020-09-27 00:48:58', '2020-09-27 00:48:59', '2020-09-24 20:19:44', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('38', 'ODB99', '1', '1', 'ss', '5', 'TM2009002', '1', '2020-09-26 13:38:13', '2020-09-26 13:38:13', '2020-09-25 12:49:25', '0', '0', '0', '5', 'error', '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('39', 'ODB100', '1', '5', 'Upload To Team (ODB100)\r\n', '4', null, '0', '2020-09-26 15:14:37', '2020-09-26 15:14:37', null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('40', 'ODB100', '1', '5', 'Info (ODB100)\r\n', '0', 'TM2009001', '0', '2020-09-26 15:14:37', null, null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('41', 'ODB63', '1', '5', '-', '0', null, '0', '2020-09-26 20:38:20', null, null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('42', 'ODB106', '0', '0', '', '0', null, '0', '2020-09-26 23:41:31', null, null, '0', '0', '0', null, null, '0', '0', '0');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` varchar(255) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `cash` decimal(22,2) NOT NULL DEFAULT '0.00',
  `score` decimal(11,0) DEFAULT '0',
  `commission` decimal(22,2) DEFAULT '0.00',
  `email` varchar(255) DEFAULT '',
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `free_forever` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `forgot_password` varchar(255) DEFAULT NULL,
  `time_forgot_password` datetime DEFAULT NULL,
  `block_user` int(11) NOT NULL DEFAULT '0',
  `package_user` varchar(100) DEFAULT NULL COMMENT 'เก็บ id package ไว้เพื่อนำไปเช็คว่าใครซื้อแพ๊กเกจไหนมา',
  `package_start` date DEFAULT NULL,
  `package_end` date DEFAULT NULL COMMENT 'วันหมดอายุของ package',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'CM2009001', '218', '675.00', '80', '0.00', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e3d00986182c0c42dd0f5bb4c6dc91fa', null, '1', '2020-09-28 11:34:36', '2020-09-28 11:34:36', null, null, '0', '2', '2020-09-26', '2021-09-26');
INSERT INTO `tbl_user` VALUES ('2', 'CM2009002', '218', '7.80', '20', '9.80', 'wut.088english@gmail.com', '0652074798', 'Wuttipat', '344fa21e68dc853cf99572e2616d1f7f', 'public/frontend/assets/img/profile/phpto-1600915607.jpg', '1', '2020-09-27 17:17:48', '2020-09-27 17:17:48', null, null, '0', '3', '2020-09-18', '2021-09-18');
INSERT INTO `tbl_user` VALUES ('3', 'CM2009003', '218', '0.00', '0', '0.00', 'kuhaku0925623256@gmail.com', '0925623256', 'kuhaku', 'e3d00986182c0c42dd0f5bb4c6dc91fa', null, '0', '2020-09-26 15:23:05', '2020-09-26 15:23:05', null, null, '0', '2', '2020-09-26', '2021-09-26');

-- ----------------------------
-- Table structure for `tbl_vdo`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_vdo`;
CREATE TABLE `tbl_vdo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `vdo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_vdo
-- ----------------------------
INSERT INTO `tbl_vdo` VALUES ('1', 'https://www.youtube.com/embed/', 'rdzdbNKs0fQ', '2020-03-13 16:16:56');

-- ----------------------------
-- Table structure for `tbl_withdraw`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_withdraw`;
CREATE TABLE `tbl_withdraw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT '1' COMMENT '1 = กำลังดำเนินการ , 2 = เสร็จสิ้น , 3 = ล้มเหลว',
  `note` varchar(255) DEFAULT '-',
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `bill_id` varchar(255) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL COMMENT 'วันโอนเงิน',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `tel_wd` varchar(100) DEFAULT NULL COMMENT 'เบอร์โทร',
  `paypal_or_bank_wd` varchar(100) DEFAULT NULL COMMENT 'เลย paypal หรือ bank',
  `bank_name_wd` varchar(100) DEFAULT NULL COMMENT 'ชื่อธนาคาร เฉพาะคนไทย',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_withdraw
-- ----------------------------
INSERT INTO `tbl_withdraw` VALUES ('8', 'CM2009001', '10', '1', '-', null, null, 'WD-8', null, '2020-09-20 13:28:46', '2020-09-20 13:28:46', '0925623256', '0123456789', null);
INSERT INTO `tbl_withdraw` VALUES ('9', '2', '100', '1', '-', null, null, null, null, '2020-09-20 15:51:49', '2020-09-20 15:51:49', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('10', '1', '2000', '1', '-', null, null, null, null, '2020-09-21 10:36:10', '2020-09-21 10:36:10', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('11', '2', '100', '1', '-', null, null, null, null, '2020-09-24 20:07:35', '2020-09-24 20:07:35', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('12', 'CM2009001', '1000', '2', '-', 'slide_lanna21.jpg', 'uploads/Withdraw/slide_lanna21.jpg', 'WD-12', '0000-00-00 00:00:00', '2020-09-27 01:14:50', '2020-09-27 01:25:14', '0925623256', '1234567890', null);
INSERT INTO `tbl_withdraw` VALUES ('13', 'CM2009002', '50', '2', '-', null, null, 'WD-13', '0000-00-00 00:00:00', '2020-09-27 17:17:48', '2020-09-27 17:17:48', '06512345', '1234', null);
INSERT INTO `tbl_withdraw` VALUES ('14', '1', '100', '1', '-', null, null, null, null, '2020-09-28 11:33:46', '2020-09-28 11:33:46', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('15', 'CM2009001', '300', '1', '-', null, null, 'WD-15', null, '2020-09-28 11:34:36', '2020-09-28 11:34:36', '0925623256', '1234567890', null);

-- ----------------------------
-- Table structure for `tbl_withdraw_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_withdraw_team`;
CREATE TABLE `tbl_withdraw_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamId` varchar(11) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `price` varchar(65) DEFAULT NULL,
  `status` int(10) DEFAULT '1' COMMENT '1 = กำลังดำเนินการ , 2 = เสร็จสิ้น , 3 = ล้มเหลว',
  `bill_id` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_withdraw_team
-- ----------------------------
INSERT INTO `tbl_withdraw_team` VALUES ('1', 'TM2009002', 'ODB99', '1', '2', 'BILL-1', 'LINE_P25630806_112845383.png', 'uploads/WithdrawTeam/LINE_P25630806_112845383.png', '2020-09-26 12:22:00', '2020-09-26 15:13:27', '2020-09-27 01:34:00');
INSERT INTO `tbl_withdraw_team` VALUES ('2', 'TM2009001', 'ODB89', '5', '2', 'BILL-2', null, null, '2020-09-30 12:12:00', '2020-09-27 01:31:45', null);
