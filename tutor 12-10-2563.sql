/*
Navicat MySQL Data Transfer

Source Server         : Report file
Source Server Version : 50643
Source Host           : 163.44.198.63:3306
Source Database       : cp486987_report

Target Server Type    : MYSQL
Target Server Version : 50643
File Encoding         : 65001

Date: 2020-10-12 12:41:22
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
INSERT INTO `tbl_admin` VALUES ('4', 'test01@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', '2020-10-10 20:57:27', '3', 'A20200504');
INSERT INTO `tbl_admin` VALUES ('5', 'wut.088english@gmail.com', '0222222222', 'wut', 'e10adc3949ba59abbe56e057f20f883e', '2020-10-11 12:01:37', '3', 'A20200505');

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
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;

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
INSERT INTO `tbl_bookmark` VALUES ('83', 'CM2009001', 'ODB109', 'DM5.1.3', '2020-09-28 19:09:22', null);
INSERT INTO `tbl_bookmark` VALUES ('84', 'CM2009001', 'ODB109', 'DM5.2.4', '2020-09-28 19:09:22', null);
INSERT INTO `tbl_bookmark` VALUES ('85', 'CM2009001', 'ODB110', 'DM4.2.2', '2020-09-28 19:11:45', null);
INSERT INTO `tbl_bookmark` VALUES ('86', 'CM2009001', 'ODB110', 'DM5.1.2', '2020-09-28 19:11:45', null);
INSERT INTO `tbl_bookmark` VALUES ('87', 'CM2009002', 'ODB111', 'DM4.1.1', '2020-09-29 07:08:30', null);
INSERT INTO `tbl_bookmark` VALUES ('88', 'CM2009002', 'ODB112', 'DM4.1.1', '2020-09-29 07:16:10', null);
INSERT INTO `tbl_bookmark` VALUES ('89', 'CM2009002', 'ODB113', 'DM4.1.1', '2020-09-29 07:17:24', null);
INSERT INTO `tbl_bookmark` VALUES ('90', 'CM2009002', 'ODB114', 'DM5.2.5', '2020-09-29 07:18:57', null);
INSERT INTO `tbl_bookmark` VALUES ('91', 'CM2009002', 'ODB115', 'DM4.1.1', '2020-09-29 07:19:50', null);
INSERT INTO `tbl_bookmark` VALUES ('92', 'CM2009002', 'ODB116', 'DM4.1.1', '2020-09-29 07:20:42', null);
INSERT INTO `tbl_bookmark` VALUES ('93', 'CM2009002', 'ODB118', 'DM4.1.1', '2020-09-29 07:24:03', null);
INSERT INTO `tbl_bookmark` VALUES ('94', 'CM2009002', 'ODB121', 'DM4.1.1', '2020-09-29 07:28:01', null);
INSERT INTO `tbl_bookmark` VALUES ('95', 'CM2009007', 'ODB123', 'DM4.1.1', '2020-09-30 14:53:41', null);
INSERT INTO `tbl_bookmark` VALUES ('96', 'CM2009007', 'ODB123', 'DM4.2.2', '2020-09-30 14:53:41', null);
INSERT INTO `tbl_bookmark` VALUES ('97', 'CM2009005', 'ODB124', 'DM4.2.2', '2020-09-30 17:14:22', null);
INSERT INTO `tbl_bookmark` VALUES ('98', 'CM2009005', 'ODB124', 'DM5.1.2', '2020-09-30 17:14:22', null);
INSERT INTO `tbl_bookmark` VALUES ('99', 'CM2009005', 'ODB124', 'DM4.2.2', '2020-09-30 17:14:22', null);
INSERT INTO `tbl_bookmark` VALUES ('100', 'CM2009005', 'ODB124', 'DM5.1.2', '2020-09-30 17:14:22', null);
INSERT INTO `tbl_bookmark` VALUES ('101', 'CM2009005', 'ODB125', 'DM4.2.2', '2020-09-30 18:02:27', null);
INSERT INTO `tbl_bookmark` VALUES ('102', 'CM2009005', 'ODB125', 'DM5.1.2', '2020-09-30 18:02:27', null);
INSERT INTO `tbl_bookmark` VALUES ('103', 'CM2009002', 'ODB127', 'DM4.1.1', '2020-09-30 22:11:03', null);
INSERT INTO `tbl_bookmark` VALUES ('104', 'CM2009002', 'ODB126', 'DM5.2.5', '2020-09-30 22:22:14', null);
INSERT INTO `tbl_bookmark` VALUES ('105', 'CM2009002', 'ODN136', 'DM4.1.1', '2020-10-06 17:30:51', null);
INSERT INTO `tbl_bookmark` VALUES ('106', 'CM2009002', 'ODN137', 'DM4.2.2', '2020-10-07 08:06:36', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_cancel
-- ----------------------------
INSERT INTO `tbl_cancel` VALUES ('1', 'ODB89', 'TM2009001', '10', '1', 'Cancel Order (ODB89)', '0', 'Team cancel', '2020-09-26', null, '2020-10-26', '1');
INSERT INTO `tbl_cancel` VALUES ('2', 'ODB128', 'TM2009002', '10', '1', 'nvn ', '0', 'Team cancel', '2020-10-05', null, '2020-11-04', '1');
INSERT INTO `tbl_cancel` VALUES ('3', 'ODN134', 'TM2009001', '10', '1', 'ยกเลิกออเดอร์ (ODN134)', '0', 'Team cancel', '2020-10-08', null, '2020-11-07', '1');
INSERT INTO `tbl_cancel` VALUES ('4', 'ODB125', 'TM2009002', '10', '1', 'jljb', '0', 'Team cancel', '2020-10-09', null, '2020-11-08', '1');
INSERT INTO `tbl_cancel` VALUES ('5', 'ODB129', 'TM2009002', '', '1', 'hvkhv', '0', 'Team cancel', '2020-10-09', null, '2020-11-08', '1');
INSERT INTO `tbl_cancel` VALUES ('6', 'ODB133', 'TN20109', '', '1', 'ทีมงานยกเลิกออร์เดอร์ ODB133', '0', 'Team cancel', '2020-10-09', null, '2020-11-08', '1');
INSERT INTO `tbl_cancel` VALUES ('7', 'ODN143', 'TN20109', '10', '1', 'ยกเลิกออร์เดอร์ (ODN143) ครั้งที่ 2', '0', 'Team cancel', '2020-10-09', null, '2020-11-08', '0');

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
  `commission_value` decimal(22,2) DEFAULT NULL COMMENT 'คะแนนที่ได้รับจากค่า commission',
  `create_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_commission
-- ----------------------------
INSERT INTO `tbl_commission` VALUES ('1', 'CM2009002', 'CM2009001', '3', '2020-10-05 20:07:28', '49.00', '39.20', '9.80', '2020-10-05 20:07:28');
INSERT INTO `tbl_commission` VALUES ('11', 'CM2009003', 'CM2009006', '3', '2020-10-05 20:07:29', '49.00', '39.20', '9.80', '2020-10-05 20:07:29');
INSERT INTO `tbl_commission` VALUES ('10', 'CM2009001', 'CM2009006', '2', '2020-10-05 20:07:34', '19.00', '15.20', '3.80', '2020-10-05 20:07:34');

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
) ENGINE=MyISAM AUTO_INCREMENT=1314 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct
-- ----------------------------
INSERT INTO `tbl_deduct` VALUES ('1304', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:53:14', null, null);
INSERT INTO `tbl_deduct` VALUES ('1305', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:53:24', null, null);
INSERT INTO `tbl_deduct` VALUES ('1306', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:53:34', null, null);
INSERT INTO `tbl_deduct` VALUES ('1307', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:53:44', null, null);
INSERT INTO `tbl_deduct` VALUES ('1308', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:53:54', null, null);
INSERT INTO `tbl_deduct` VALUES ('1309', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:54:04', null, null);
INSERT INTO `tbl_deduct` VALUES ('1310', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:54:14', null, null);
INSERT INTO `tbl_deduct` VALUES ('1311', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:54:24', null, null);
INSERT INTO `tbl_deduct` VALUES ('1312', '', 'TN20109', '10', 'ODB133', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-09 14:54:34', null, null);
INSERT INTO `tbl_deduct` VALUES ('1313', 'CM2009001', 'TM2009001', '10', 'ODB132', 'ระบบได้หักรายได้ $10 ของท่าน เนื่องจากเวลาของออเดอร์ ได้เกินกำหนดส่ง จึงมีการเพิ่มเวลาทำการ 12 ชม.สุดท้ายในการส่งออเดอร์ ', null, null, '2020-10-10 11:13:50', null, null);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct_score
-- ----------------------------
INSERT INTO `tbl_deduct_score` VALUES ('1', null, 'TM2009001', '5', null, 'โดนหักคะแนน', 'Deduct_score-1602147251.jpg', 'uploads/deduct/Deduct_score-1602147251.jpg', '2020-10-08 15:54:11', null, '4');

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
  `admin_by_dti` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct_team_income
-- ----------------------------
INSERT INTO `tbl_deduct_team_income` VALUES ('1', 'TM2009001', 'ไม่ส่ง Delivery และไม่กดยกเลิก', '20', 'ODB89', null, null, 'ไม่ส่ง Delivery และไม่กดยกเลิกหัก $20', '2020-09-28 21:21:06', null, null);
INSERT INTO `tbl_deduct_team_income` VALUES ('2', 'TN20109', null, '10', null, 'Deduct-1602226814.png', 'uploads/deduct/Deduct-1602226814.png', 'หักคะแนน 10 หน่วย', '2020-10-09 14:00:14', null, '4');
INSERT INTO `tbl_deduct_team_income` VALUES ('3', 'TM2009002', null, '20', null, 'And When Did You Last See Your Father__Main file.docx', 'uploads/deduct/And When Did You Last See Your Father__Main file.docx', 'aaaa', '2020-10-09 15:47:07', null, '4');
INSERT INTO `tbl_deduct_team_income` VALUES ('4', 'TM2009002', 'ไม่ส่ง Delivery และไม่กดยกเลิก', '20', 'ODB125', null, null, 'ไม่ส่ง Delivery และไม่กดยกเลิกหัก $20', '2020-10-10 11:19:38', null, null);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_deduct_team_score
-- ----------------------------
INSERT INTO `tbl_deduct_team_score` VALUES ('1', 'TM2009001', '5', 'ODB1', 'หักคะแนน', null, null, '2020-10-08 15:55:48', null, '1');
INSERT INTO `tbl_deduct_team_score` VALUES ('2', 'TN20109', '10', null, 'คุณโดนหักคะแนน', 'Deduct_score-1602225460.png', 'uploads/deduct/Deduct_score-1602225460.png', '2020-10-09 13:37:40', null, '4');
INSERT INTO `tbl_deduct_team_score` VALUES ('3', 'TM2009002', '2', null, 'sss', 'Find Me_GT file.docx', 'uploads/deduct/Find Me_GT file.docx', '2020-10-09 17:56:31', null, '4');

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
  `check_new_d` int(2) DEFAULT '1' COMMENT '0 = ไฟล์เก่า / 1 ไฟล์ใหม่ NEW',
  PRIMARY KEY (`id_d`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_delivery_file
-- ----------------------------
INSERT INTO `tbl_delivery_file` VALUES ('1', 'ODB110', 'IMG_4175.JPG', 'uploads/Store/IMG_4175.JPG', '2020-09-28 21:06:32', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('2', 'ODB110', 'IMG_4181.PNG', 'uploads/Store/IMG_4181.PNG', '2020-09-28 21:06:32', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('3', 'ODB110', 'Umbrella_Sell_128.docx', 'uploads/Store/Umbrella_Sell_128.docx', '2020-09-28 21:06:32', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('4', 'ODB110', 'Screenshot_21.png', 'uploads/Team/Screenshot_21.png', '2020-09-28 21:06:32', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('5', 'ODB110', 'Screenshot_22.png', 'uploads/Team/Screenshot_22.png', '2020-09-28 21:06:32', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('6', 'ODB123', 'White_Lies_Sell_222.docx', 'uploads/Store/White_Lies_Sell_222.docx', '2020-09-30 15:16:18', null, '0');
INSERT INTO `tbl_delivery_file` VALUES ('7', 'ODB123', 'White__Sell_315.docx', 'uploads/Store/White__Sell_315.docx', '2020-09-30 15:16:18', null, '0');
INSERT INTO `tbl_delivery_file` VALUES ('8', 'ODB123', 'รายการแก้ไขเว็บไซต์ของลานนาคำสปา_3.docx', 'uploads/Team/รายการแก้ไขเว็บไซต์ของลานนาคำสปา_3.docx', '2020-09-30 15:16:18', null, '0');
INSERT INTO `tbl_delivery_file` VALUES ('9', 'ODB123', 'IMG_4175.JPG', 'uploads/Store/IMG_4175.JPG', '2020-09-30 16:32:49', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('10', 'ODB123', 'IMG_4181.PNG', 'uploads/Store/IMG_4181.PNG', '2020-09-30 16:32:49', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('11', 'ODB123', 'รายการแก้ไขเว็บไซต์ของลานนาคำสปา_3.docx', 'uploads/Team/รายการแก้ไขเว็บไซต์ของลานนาคำสปา_3.docx', '2020-09-30 16:32:49', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('12', 'ODB123', 'รายการแก้ไขเว็บไซต์ของโรงเรียนเชียงใหม่(1).docx', 'uploads/Team/รายการแก้ไขเว็บไซต์ของโรงเรียนเชียงใหม่(1).docx', '2020-09-30 16:32:49', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('13', 'ODB128', 'Moving_On_Delivery36.docx', 'uploads/Team/Moving_On_Delivery36.docx', '2020-09-30 22:35:10', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('21', 'ODB132', '20190919042454_pic_square_th_.jpg', 'uploads/Team/20190919042454_pic_square_th_.jpg', '2020-10-06 11:37:46', null, '0');
INSERT INTO `tbl_delivery_file` VALUES ('22', 'ODB132', '9786167897561l.jpg', 'uploads/Team/9786167897561l.jpg', '2020-10-06 11:37:46', null, '0');
INSERT INTO `tbl_delivery_file` VALUES ('23', 'ODB132', 'เงื่อนไข_ทีมงาน_Programmer.docx', 'uploads/Team/เงื่อนไข_ทีมงาน_Programmer.docx', '2020-10-06 14:24:17', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('18', 'ODB125', 'IMG_4175.JPG', 'uploads/Store/IMG_4175.JPG', '2020-10-01 10:54:50', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('19', 'ODB125', 'IMG_4181.PNG', 'uploads/Store/IMG_4181.PNG', '2020-10-01 10:54:50', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('20', 'ODB125', 'LINE_P25630806_112845383.png', 'uploads/Store/LINE_P25630806_112845383.png', '2020-10-01 10:54:50', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('24', 'ODB132', 'เงื่อนไข_ลูกค้า_Programmer.docx', 'uploads/Team/เงื่อนไข_ลูกค้า_Programmer.docx', '2020-10-06 14:24:17', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('25', 'ODB135', 'Moving_On_Delivery37.docx', 'uploads/Team/Moving_On_Delivery37.docx', '2020-10-06 16:25:30', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('26', 'ODN134', '11.png', 'uploads/Team/11.png', '2020-10-06 16:26:09', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('27', 'ODN134', '3.png', 'uploads/Team/3.png', '2020-10-06 16:26:09', null, '1');
INSERT INTO `tbl_delivery_file` VALUES ('28', 'ODN136', 'White_Lies_Sell_25.docx', 'uploads/Team/White_Lies_Sell_25.docx', '2020-10-06 17:38:30', null, '0');
INSERT INTO `tbl_delivery_file` VALUES ('29', 'ODN136', 'White__Sell_33.docx', 'uploads/Team/White__Sell_33.docx', '2020-10-06 17:48:31', null, '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

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
INSERT INTO `tbl_feedback` VALUES ('59', 'TM2009001', 'แก้ไขงานต่อ (ODB132) ครั้งที่ 3', 'ODB132', 'CM2009001', '2020-10-06 16:46:45', '2020-10-07 14:58:05', '1', '1', '2020-10-17', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('18', null, 'cvcvcv', 'ODB75', 'CM2009001', '2020-09-21 11:11:37', '2020-09-21 11:54:19', '0', '2', '2020-09-30', '1', '0', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('19', null, 'wweewewewe', 'ODB76', 'CM2009001', '2020-09-21 11:12:08', null, '1', '0', '2020-09-30', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('20', null, null, 'ODB75', 'CM2009001', '2020-09-24 18:03:17', null, '0', '0', null, '1', '0', '0', '0', '1');
INSERT INTO `tbl_feedback` VALUES ('21', null, '', 'ODB88', 'CM2009002', '2020-09-24 18:25:35', '2020-09-24 18:42:00', '1', '0', '2020-09-27', '1', '2', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('22', 'TM2009002', 'aaaa', 'ODB96', 'CM2009002', '2020-09-24 19:28:54', '2020-09-24 19:31:20', '1', '1', '2020-09-27', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('23', 'TM2009002', 'fff', 'ODB99', 'CM2009002', '2020-09-25 12:52:47', '2020-09-25 16:33:33', '1', '1', '2020-09-26', '0', '2', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('24', null, 'fffff', 'ODB99', 'CM2009002', '2020-09-25 13:31:28', '2020-09-25 16:33:33', '1', '1', '2020-10-20', '1', '2', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('25', 'TM2009002', 'aa', 'ODB99', 'CM2009002', '2020-09-25 14:53:21', '2020-09-25 16:33:33', '1', '1', '2020-09-26', '1', '2', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('26', 'TM2009002', 'jhhh', 'ODB99', 'CM2009002', '2020-09-25 15:20:21', '2020-09-25 16:33:33', '1', '1', '2020-09-28', '1', '2', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('27', 'TM2009002', 'kkk', 'ODB99', 'CM2009002', '2020-09-25 15:45:34', '2020-09-25 16:33:33', '1', '1', '2020-09-29', '1', '2', '1', '1', '1');
INSERT INTO `tbl_feedback` VALUES ('28', 'TM2009001', 'Feedback (ODB84)', 'ODB84', 'CM2009001', '2020-09-26 12:38:56', '2020-09-26 13:41:58', '1', '1', '2020-09-30', '0', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('29', 'TM2009001', 'Feedback (ODB84) ครั้ง 2\n', 'ODB84', 'CM2009001', '2020-09-26 12:40:03', '2020-09-26 13:41:58', '1', '1', '2020-10-02', '0', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('31', null, 'Feedback (ODB89)', 'ODB89', 'CM2009001', '2020-09-26 14:04:07', null, '1', '0', '2020-10-01', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('32', 'TM2009001', 'Feedback (ODB84)', 'ODB84', 'CM2009001', '2020-09-26 14:04:57', '2020-09-26 14:05:55', '1', '1', '2020-09-29', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('33', 'TM2009001', 'Feedback (ODB84) Admin\n ', 'ODB84', 'CM2009001', '2020-09-26 21:39:58', null, '1', '1', '2020-09-29', '0', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('34', 'TM2009001', 'Feedback (ODB84)\nAdmin', 'ODB84', 'CM2009001', '2020-09-26 21:41:40', null, '1', '1', '2020-09-30', '0', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('36', null, 'Feedback (ODB77)', 'ODB77', 'CM2009001', '2020-09-27 00:12:24', null, '1', '0', '2020-10-04', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('35', 'TM2009001', 'Feedback (ODB84)\n admin', 'ODB84', 'CM2009001', '2020-09-26 21:46:28', null, '1', '1', '2020-09-29', '0', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('37', 'TM2009001', 'Feedback (ODB77)', 'ODB77', 'CM2009001', '2020-09-27 00:17:21', '2020-09-28 12:04:10', '1', '1', '2020-10-06', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('38', null, 'Feedback (ODB77)', 'ODB77', 'CM2009001', '2020-09-27 00:17:25', null, '1', '0', '2020-10-06', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('39', null, 'Feedback (ODB77) 8', 'ODB77', 'CM2009001', '2020-09-27 00:17:39', null, '1', '0', '2020-10-08', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('40', null, 'Feedback (ODB77) 8', 'ODB77', 'CM2009001', '2020-09-27 00:17:43', null, '1', '0', '2020-10-08', '1', '1', '0', '0', '0');
INSERT INTO `tbl_feedback` VALUES ('43', 'TM2009001', 'แก้ไขงาน (ODB132) ครั้งที่1', 'ODB132', 'CM2009001', '2020-10-06 11:53:29', '2020-10-06 14:24:17', '1', '1', '2020-10-10', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('42', 'TM2009002', 'notcompletent', 'ODB128', 'CM2009002', '2020-09-30 22:37:07', '2020-09-30 22:41:47', '1', '1', '2020-10-09', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('44', 'TM2009001', 'แก้ไขงาน (ODB132) ครั้งที่ 2', 'ODB132', 'CM2009001', '2020-10-06 11:53:50', '2020-10-06 14:24:17', '1', '1', '2020-10-11', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('45', 'TM2009001', 'แก้ไขงาน (ODB132) ครั้ง 3', 'ODB132', 'CM2009001', '2020-10-06 11:55:27', '2020-10-06 14:24:17', '1', '1', '2020-10-12', '1', '1', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('47', 'TM2009002', 'ggg', 'ODB135', 'CM2009002', '2020-10-06 14:36:47', '2020-10-06 16:25:30', '1', '1', '2020-10-09', '0', '2', '1', '1', '0');
INSERT INTO `tbl_feedback` VALUES ('92', 'TM2009001', 'ระบุรายละเอียดเพิ่มเติม :', 'ODB132', 'CM2009001', '2020-10-07 14:10:52', '2020-10-07 15:19:40', '1', '1', '2020-10-18', '1', '1', '1', '1', '1');
INSERT INTO `tbl_feedback` VALUES ('93', 'TM2009001', '', 'ODN139', '', '2020-10-08 13:27:37', null, '1', '1', '2020-10-08', '0', '0', '1', '0', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

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
INSERT INTO `tbl_feedback_file` VALUES ('33', '42', 'Shards_of_Glass_Feedback_client13.docx', 'uploads/Feedback/Shards_of_Glass_Feedback_client13.docx', '2020-09-30 22:41:47', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('34', '43', '20190919042454_pic_square_th_.jpg', 'uploads/Feedback/20190919042454_pic_square_th_.jpg', '2020-10-06 11:53:29', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('35', '44', '20190919042454_pic_square_th_1.jpg', 'uploads/Feedback/20190919042454_pic_square_th_1.jpg', '2020-10-06 11:53:51', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('36', '45', 'photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', 'uploads/Feedback/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', '2020-10-06 11:55:27', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('37', '47', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN9.docx', 'uploads/Feedback/Night_Terrors_in_Cairo_FEEDBACK_ADMIN9.docx', '2020-10-06 14:36:47', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('38', '56', 'messageImage_1575004181330.jpg', 'uploads/Feedback/messageImage_1575004181330.jpg', '2020-10-06 16:26:36', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('39', '56', 'messageImage_1575003698384.jpg', 'uploads/Feedback/messageImage_1575003698384.jpg', '2020-10-06 16:26:36', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('40', '61', '12.jpg', 'uploads/Feedback/12.jpg', '2020-10-06 16:49:17', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('41', '92', '3.png', 'uploads/Feedback/3.png', '2020-10-07 14:10:52', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('42', '92', '11.png', 'uploads/Feedback/11.png', '2020-10-07 14:10:52', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('43', '93', '20190919042454_pic_square_th_2.jpg', 'uploads/Feedback/20190919042454_pic_square_th_2.jpg', '2020-10-08 13:27:37', '0000-00-00 00:00:00');
INSERT INTO `tbl_feedback_file` VALUES ('44', '93', '9786167897561l.jpg', 'uploads/Feedback/9786167897561l.jpg', '2020-10-08 13:27:37', '0000-00-00 00:00:00');

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_folder
-- ----------------------------
INSERT INTO `tbl_folder` VALUES ('1', 'TM2009002', 't1', '2020-09-20 21:34:16', '2020-09-20 21:34:16', '1');
INSERT INTO `tbl_folder` VALUES ('2', 'TM2009002', 'T1', '2020-09-24 11:39:12', '2020-09-24 11:39:12', '1');
INSERT INTO `tbl_folder` VALUES ('3', 'TM2009001', 'ทดสอบ', '2020-09-22 12:14:14', '2020-09-22 12:14:14', '1');
INSERT INTO `tbl_folder` VALUES ('4', 'TM2009001', 'ทดสอบ 2', '2020-09-22 12:14:16', '2020-09-22 12:14:16', '1');
INSERT INTO `tbl_folder` VALUES ('5', 'TM2009001', 'TEST1', '2020-09-24 20:20:07', '2020-09-24 20:20:07', '1');
INSERT INTO `tbl_folder` VALUES ('6', 'TM2009001', 'TEST2', '2020-09-24 20:20:09', '2020-09-24 20:20:09', '1');
INSERT INTO `tbl_folder` VALUES ('7', 'TM2009002', 'Task1', '2020-09-30 22:38:26', '2020-09-30 22:38:26', '1');
INSERT INTO `tbl_folder` VALUES ('8', 'TM2009002', 'task2', '2020-09-29 07:41:11', '2020-09-29 07:41:11', '1');
INSERT INTO `tbl_folder` VALUES ('9', 'TM2009001', 'YOU', '2020-09-26 11:48:21', '2020-09-26 11:48:21', '1');
INSERT INTO `tbl_folder` VALUES ('10', 'TM2009001', 'News', '2020-09-26 21:34:31', '2020-09-26 21:34:31', '1');
INSERT INTO `tbl_folder` VALUES ('11', 'TM2009001', 'ORO', '2020-09-26 21:34:33', '2020-09-26 21:34:33', '1');
INSERT INTO `tbl_folder` VALUES ('12', 'TM2009001', 'ROOM', '2020-09-26 21:40:19', '2020-09-26 21:40:19', '1');
INSERT INTO `tbl_folder` VALUES ('13', 'TM2009001', 'SOS', '2020-09-26 21:40:22', '2020-09-26 21:40:22', '1');
INSERT INTO `tbl_folder` VALUES ('14', 'TM2009001', 'Gold', '2020-09-26 21:41:57', '2020-09-26 21:41:57', '1');
INSERT INTO `tbl_folder` VALUES ('15', 'TM2009001', 'Silver', '2020-09-26 21:41:55', '2020-09-26 21:41:55', '1');
INSERT INTO `tbl_folder` VALUES ('16', 'TM2009001', 'Demon', '2020-09-28 16:39:14', '2020-09-28 16:39:14', '1');
INSERT INTO `tbl_folder` VALUES ('17', 'TM2009001', 'moon', '2020-09-28 20:22:34', '2020-09-28 20:22:34', '1');
INSERT INTO `tbl_folder` VALUES ('18', 'TM2009001', 'sun', '2020-09-28 20:22:36', '2020-09-28 20:22:36', '1');
INSERT INTO `tbl_folder` VALUES ('19', 'TM2009001', 'Koi', '2020-10-06 11:36:45', '2020-10-06 11:36:45', '1');
INSERT INTO `tbl_folder` VALUES ('20', 'TM2009001', 'Japan', '2020-10-06 11:36:43', '2020-10-06 11:36:43', '1');
INSERT INTO `tbl_folder` VALUES ('21', 'TM2009004', 'วรพงษ์ ศรีสวรรค์', '2020-09-30 16:15:26', '2020-09-30 16:15:26', '1');
INSERT INTO `tbl_folder` VALUES ('22', 'TM2009004', 'test by bus', '2020-09-30 16:15:44', null, '0');
INSERT INTO `tbl_folder` VALUES ('23', 'TM2009002', 'T2', '2020-10-06 20:02:05', '2020-10-06 20:02:05', '1');
INSERT INTO `tbl_folder` VALUES ('24', 'TM2009001', 'BUS', '2020-10-06 14:23:03', '2020-10-06 14:23:03', '1');
INSERT INTO `tbl_folder` VALUES ('25', 'TM2009001', 'MOMO', '2020-10-06 14:23:06', '2020-10-06 14:23:06', '1');
INSERT INTO `tbl_folder` VALUES ('26', 'TM2009001', 'feedback', '2020-10-06 16:24:33', '2020-10-06 16:24:33', '1');
INSERT INTO `tbl_folder` VALUES ('27', 'TM2009001', 'food', '2020-10-07 15:05:08', '2020-10-07 15:05:08', '1');
INSERT INTO `tbl_folder` VALUES ('28', 'TM2009001', 'Mon', '2020-10-08 12:06:42', '2020-10-08 12:06:42', '1');
INSERT INTO `tbl_folder` VALUES ('29', 'TM2009001', 'hotdog', '2020-10-08 12:07:12', '2020-10-08 12:07:12', '1');
INSERT INTO `tbl_folder` VALUES ('30', 'TM2009001', 'sun', '2020-10-08 12:07:33', '2020-10-08 12:07:33', '1');
INSERT INTO `tbl_folder` VALUES ('31', 'TM2009001', 'developer', '2020-10-08 12:07:57', '2020-10-08 12:07:57', '1');
INSERT INTO `tbl_folder` VALUES ('32', 'TM2009001', 'Book', '2020-10-08 12:10:07', '2020-10-08 12:10:07', '1');
INSERT INTO `tbl_folder` VALUES ('33', 'TM2009001', 'rocking', '2020-10-08 15:48:20', '2020-10-08 15:48:20', '1');
INSERT INTO `tbl_folder` VALUES ('34', 'TM2009002', 's', '2020-10-08 12:53:13', '2020-10-08 12:53:13', '1');
INSERT INTO `tbl_folder` VALUES ('35', 'TM2009002', 'dd', '2020-10-08 16:38:10', null, '0');

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
  `color_item` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_item_position
-- ----------------------------
INSERT INTO `tbl_item_position` VALUES ('1', 'Business management', '#124455', '2019-12-26 13:31:33', '2020-10-02 14:01:04');
INSERT INTO `tbl_item_position` VALUES ('2', 'Marketing ', '#112544', '2019-12-26 18:02:22', '2020-10-02 14:02:39');
INSERT INTO `tbl_item_position` VALUES ('3', 'Accounting management ', '#215111', '2020-01-03 14:48:42', '2020-10-02 14:03:05');
INSERT INTO `tbl_item_position` VALUES ('4', 'Financial ', '#985231', '2020-01-03 14:48:48', '2020-10-02 14:03:22');
INSERT INTO `tbl_item_position` VALUES ('5', 'Computer network /IT        ', '#725411', '2020-01-03 14:48:59', '2020-10-02 14:03:39');
INSERT INTO `tbl_item_position` VALUES ('6', 'Hospitality management            ', '#655977', '2020-01-03 14:49:10', '2020-10-02 14:03:57');
INSERT INTO `tbl_item_position` VALUES ('7', 'HR management        ', '#111499', '2020-01-03 14:51:22', '2020-10-02 14:04:07');
INSERT INTO `tbl_item_position` VALUES ('8', 'Graphic design', '#866651', '2020-01-03 14:51:31', '2020-10-10 17:19:04');

-- ----------------------------
-- Table structure for `tbl_job_position`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_job_position`;
CREATE TABLE `tbl_job_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_team` int(11) DEFAULT NULL,
  `job_position` varchar(150) DEFAULT NULL,
  `status_approve` varchar(11) DEFAULT '0',
  `date_interview` datetime DEFAULT NULL COMMENT 'วันที่นัดสัมภาษณ์',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `count_email` decimal(10,0) DEFAULT '0' COMMENT 'เก็บจำนวนครั้งการส่งเมล์',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_job_position
-- ----------------------------
INSERT INTO `tbl_job_position` VALUES ('1', '1', '1', '1', '0000-00-00 00:00:00', '2020-09-19 17:47:00', null, '0');
INSERT INTO `tbl_job_position` VALUES ('2', '1', '2', '1', null, '2020-09-19 17:47:00', null, '0');
INSERT INTO `tbl_job_position` VALUES ('3', '1', '3', '1', null, '2020-09-19 17:47:00', null, '0');
INSERT INTO `tbl_job_position` VALUES ('4', '2', '1', '1', null, '2020-09-20 16:05:13', null, '0');
INSERT INTO `tbl_job_position` VALUES ('5', '2', '3', '0', null, '2020-09-25 19:03:35', null, '0');
INSERT INTO `tbl_job_position` VALUES ('6', '3', '1', '0', null, '2020-09-26 17:26:49', null, '0');
INSERT INTO `tbl_job_position` VALUES ('7', '3', '3', '0', null, '2020-09-26 17:26:49', null, '0');
INSERT INTO `tbl_job_position` VALUES ('8', '4', '2', '1', null, '2020-09-30 15:06:28', null, '0');
INSERT INTO `tbl_job_position` VALUES ('9', '4', '5', '1', null, '2020-09-30 15:06:28', null, '0');
INSERT INTO `tbl_job_position` VALUES ('10', '4', '7', '1', null, '2020-09-30 15:06:28', null, '0');
INSERT INTO `tbl_job_position` VALUES ('11', '5', '2', '1', null, '2020-09-30 16:18:09', null, '0');
INSERT INTO `tbl_job_position` VALUES ('12', '5', '3', '1', null, '2020-09-30 16:18:09', null, '0');
INSERT INTO `tbl_job_position` VALUES ('13', '5', '5', '1', null, '2020-09-30 16:18:09', null, '0');
INSERT INTO `tbl_job_position` VALUES ('14', '6', '1', '0', null, '2020-10-05 22:51:22', null, '0');
INSERT INTO `tbl_job_position` VALUES ('15', '6', '2', '0', null, '2020-10-05 22:51:22', null, '0');
INSERT INTO `tbl_job_position` VALUES ('16', '6', '3', '1', null, '2020-10-05 22:51:22', null, '0');
INSERT INTO `tbl_job_position` VALUES ('17', '2', '4', '0', null, '2020-10-06 11:10:07', null, '0');
INSERT INTO `tbl_job_position` VALUES ('18', '2', '8', '0', null, '2020-10-06 11:11:01', null, '0');
INSERT INTO `tbl_job_position` VALUES ('19', '2', '7', '0', null, '2020-10-06 11:19:23', null, '0');
INSERT INTO `tbl_job_position` VALUES ('21', '7', '1', '0', null, '2020-10-06 22:34:05', null, '0');
INSERT INTO `tbl_job_position` VALUES ('22', '7', '3', '0', null, '2020-10-06 22:34:05', null, '0');
INSERT INTO `tbl_job_position` VALUES ('23', '7', '4', '0', null, '2020-10-06 22:34:05', null, '0');
INSERT INTO `tbl_job_position` VALUES ('24', '8', '4', '1', null, '2020-10-06 22:40:20', null, '0');
INSERT INTO `tbl_job_position` VALUES ('25', '8', '6', '1', null, '2020-10-06 22:40:20', null, '0');
INSERT INTO `tbl_job_position` VALUES ('26', '8', '7', '0', '2020-10-10 11:30:00', '2020-10-06 22:40:20', null, '1');
INSERT INTO `tbl_job_position` VALUES ('27', '9', '1', '1', null, '2020-10-08 22:56:32', null, '0');
INSERT INTO `tbl_job_position` VALUES ('28', '9', '2', '1', null, '2020-10-08 22:56:32', null, '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

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
INSERT INTO `tbl_morefile_GT` VALUES ('61', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, 'ODB109', 'CM2009001', '2020-09-28 19:06:56', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('62', null, 'Choose the date to pick up the document.', null, 'ODB110', 'CM2009001', '2020-09-28 19:11:26', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('63', null, 'aaa', null, 'ODB111', 'CM2009002', '2020-09-29 07:07:56', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('64', null, 'sss', null, 'ODB112', 'CM2009002', '2020-09-29 07:15:50', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('65', null, 'ss', null, 'ODB113', 'CM2009002', '2020-09-29 07:17:06', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('66', null, '', null, 'ODB114', 'CM2009002', '2020-09-29 07:18:33', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('67', null, '', null, 'ODB115', 'CM2009002', '2020-09-29 07:19:31', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('68', null, '', null, 'ODB116', 'CM2009002', '2020-09-29 07:20:20', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('69', null, '', null, 'ODB117', 'CM2009002', '2020-09-29 07:21:20', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('70', null, '', null, 'ODB118', 'CM2009002', '2020-09-29 07:23:39', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('71', null, '', null, 'ODB119', 'CM2009002', '2020-09-29 07:25:30', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('72', null, '', null, 'ODB120', 'CM2009002', '2020-09-29 07:26:30', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('73', null, '', null, 'ODB121', 'CM2009002', '2020-09-29 07:27:43', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('74', null, 'aaa', null, 'ODB122', 'CM2009002', '2020-09-29 07:35:22', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('75', null, '', null, 'ODB123', 'CM2009007', '2020-09-30 14:42:15', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('76', null, 'More details.', null, 'ODB124', 'CM2009005', '2020-09-30 17:09:59', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('77', '', 'You can buy Document. ', null, 'ODB125', 'CM2009005', '2020-09-30 18:02:03', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('78', '', 'GT Document ODB125', null, 'ODB125', 'CM2009005', '2020-09-30 18:20:19', '2020-09-30 18:32:36', '0', '1', '11', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('79', null, 'reference', null, 'ODB126', 'CM2009002', '2020-09-30 18:54:22', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('80', null, 'rework', null, 'ODB127', 'CM2009002', '2020-09-30 22:10:30', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('81', null, '', null, 'ODB128', 'CM2009002', '2020-09-30 22:30:33', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('82', null, 'Add_my_stock_admin Client', null, 'ODB129', null, '2020-10-01 20:05:08', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('83', null, 'sdsd', null, 'ODB130', 'CM2009005', '2020-10-02 18:47:31', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('84', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODB131', 'CM2009001', '2020-10-05 20:29:52', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('85', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODB132', 'CM2009001', '2020-10-06 10:33:11', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('86', null, 'ะบุรายละเอียดเพิ่มเติม (ถ้ามี) 01', null, 'ODB133', 'CM2009001', '2020-10-06 10:34:02', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('87', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODN134', 'CM2009001', '2020-10-06 11:10:51', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('88', null, 'rrrr', null, 'ODB135', 'CM2009002', '2020-10-06 14:21:50', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('89', null, 'Hello', null, 'ODN136', 'CM2009002', '2020-10-06 17:30:05', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('90', null, 'check plagiarism please', null, 'ODN137', 'CM2009002', '2020-10-07 08:05:48', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('91', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODN138', 'CM2009001', '2020-10-07 10:18:24', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('92', null, 'Note Client', null, 'ODN139', null, '2020-10-08 12:05:02', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('93', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODN140', 'CM2009001', '2020-10-09 15:40:31', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('94', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODN141', 'CM2009001', '2020-10-09 15:40:48', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('95', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODN142', 'CM2009001', '2020-10-09 15:41:03', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('96', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี) ', null, 'ODN143', 'CM2009001', '2020-10-09 16:10:11', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('97', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี) ', null, 'ODN144', 'CM2009001', '2020-10-09 16:12:19', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('98', null, 'กรุณาตรวจสอบไฟล์ของท่านเพื่อให้แน่ใจว่าไฟล์ทั้งหมดคืองานเดียวกัน', null, 'ODN145', 'CM2009001', '2020-10-09 16:12:53', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('99', null, '', null, 'ODN146', 'CM2009001', '2020-10-10 21:57:29', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('100', null, '', null, 'ODN147', 'CM2009001', '2020-10-10 21:58:17', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('101', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, 'ODN148', 'CM2009001', '2020-10-10 22:04:29', null, '0', '0', '0', '0');
INSERT INTO `tbl_morefile_GT` VALUES ('102', null, '', null, 'ODN149', 'CM2009002', '2020-10-11 13:49:47', null, '0', '0', '0', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8;

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
INSERT INTO `tbl_order_f` VALUES ('109', 'ODB109', '2020-09-28', '1');
INSERT INTO `tbl_order_f` VALUES ('110', 'ODB110', '2020-09-28', '1');
INSERT INTO `tbl_order_f` VALUES ('111', 'ODB111', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('112', 'ODB112', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('113', 'ODB113', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('114', 'ODB114', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('115', 'ODB115', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('116', 'ODB116', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('117', 'ODB117', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('118', 'ODB118', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('119', 'ODB119', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('120', 'ODB120', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('121', 'ODB121', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('122', 'ODB122', '2020-09-29', '1');
INSERT INTO `tbl_order_f` VALUES ('123', 'ODB123', '2020-09-30', '1');
INSERT INTO `tbl_order_f` VALUES ('124', 'ODB124', '2020-09-30', '1');
INSERT INTO `tbl_order_f` VALUES ('125', 'ODB125', '2020-09-30', '1');
INSERT INTO `tbl_order_f` VALUES ('126', 'ODB126', '2020-09-30', '1');
INSERT INTO `tbl_order_f` VALUES ('127', 'ODB127', '2020-09-30', '1');
INSERT INTO `tbl_order_f` VALUES ('128', 'ODB128', '2020-09-30', '1');
INSERT INTO `tbl_order_f` VALUES ('129', 'ODB129', '2020-10-01', '1');
INSERT INTO `tbl_order_f` VALUES ('130', 'ODB130', '2020-10-02', '1');
INSERT INTO `tbl_order_f` VALUES ('131', 'ODB131', '2020-10-05', '1');
INSERT INTO `tbl_order_f` VALUES ('132', 'ODB132', '2020-10-06', '1');
INSERT INTO `tbl_order_f` VALUES ('133', 'ODB133', '2020-10-06', '1');
INSERT INTO `tbl_order_f` VALUES ('134', 'ODN134', '2020-10-06', '1');
INSERT INTO `tbl_order_f` VALUES ('135', 'ODB135', '2020-10-06', '1');
INSERT INTO `tbl_order_f` VALUES ('136', 'ODN136', '2020-10-06', '1');
INSERT INTO `tbl_order_f` VALUES ('137', 'ODN137', '2020-10-07', '1');
INSERT INTO `tbl_order_f` VALUES ('138', 'ODN138', '2020-10-07', '1');
INSERT INTO `tbl_order_f` VALUES ('139', 'ODN139', '2020-10-08', '1');
INSERT INTO `tbl_order_f` VALUES ('140', 'ODN140', '2020-10-09', '1');
INSERT INTO `tbl_order_f` VALUES ('141', 'ODN141', '2020-10-09', '1');
INSERT INTO `tbl_order_f` VALUES ('142', 'ODN142', '2020-10-09', '1');
INSERT INTO `tbl_order_f` VALUES ('143', 'ODN143', '2020-10-09', '1');
INSERT INTO `tbl_order_f` VALUES ('144', 'ODN144', '2020-10-09', '1');
INSERT INTO `tbl_order_f` VALUES ('145', 'ODN145', '2020-10-09', '1');
INSERT INTO `tbl_order_f` VALUES ('146', 'ODN146', '2020-10-10', '1');
INSERT INTO `tbl_order_f` VALUES ('147', 'ODN147', '2020-10-10', '1');
INSERT INTO `tbl_order_f` VALUES ('148', 'ODN148', '2020-10-10', '1');
INSERT INTO `tbl_order_f` VALUES ('149', 'ODN149', '2020-10-11', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

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
INSERT INTO `tbl_order_s` VALUES ('20', 'ODS20', '2020-10-07', '1');
INSERT INTO `tbl_order_s` VALUES ('21', 'ODS21', '2020-10-07', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_paypal
-- ----------------------------
INSERT INTO `tbl_paypal` VALUES ('1', '4NP861472G5505525', 'J3GJEC9GX23VS', '49', 'USD', 'CM2009002', 'John', 'Doe', '2020-09-18 15:54:57', '2020-10-18 15:54:57', '1', '3');
INSERT INTO `tbl_paypal` VALUES ('4', '7F682199LX1379621', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-19 10:11:02', '2020-10-19 10:11:02', '1', '2');
INSERT INTO `tbl_paypal` VALUES ('5', '1H574693A18787748', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-26 14:51:34', '2020-09-26 14:51:34', '0', '2');
INSERT INTO `tbl_paypal` VALUES ('6', '6M468564PP159191Y', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009003', 'John', 'Doe', '2020-09-26 15:22:32', '2020-09-26 15:22:32', '0', '2');
INSERT INTO `tbl_paypal` VALUES ('7', '8BL847027K401061V', 'J3GJEC9GX23VS', '9', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-29 15:52:41', '2020-09-29 15:52:41', '0', '1');
INSERT INTO `tbl_paypal` VALUES ('8', '2DA35158DH534050D', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-29 15:53:28', '2020-09-29 15:53:28', '0', '2');
INSERT INTO `tbl_paypal` VALUES ('9', '9RD09150KS725064V', 'J3GJEC9GX23VS', '9', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-29 15:56:22', '2020-09-29 15:56:22', '0', '1');
INSERT INTO `tbl_paypal` VALUES ('10', '67M43487JH353583S', 'J3GJEC9GX23VS', '19', 'USD', 'CM2009001', 'John', 'Doe', '2020-09-29 16:06:21', '2020-09-29 16:06:21', '0', '2');
INSERT INTO `tbl_paypal` VALUES ('20', '54F05272HT0436913', 'J3GJEC9GX23VS', '49', 'USD', 'CM2009005', 'John', 'Doe', '2020-09-29 17:51:14', '2020-09-29 17:51:14', '0', '3');
INSERT INTO `tbl_paypal` VALUES ('21', '6Y143361DY041530M', 'J3GJEC9GX23VS', '49', 'USD', '', 'John', 'Doe', '2020-09-30 14:38:05', '2020-09-30 14:38:05', '0', '3');
INSERT INTO `tbl_paypal` VALUES ('22', '1N318721MA798852W', 'J3GJEC9GX23VS', '49', 'USD', 'CM2009007', 'John', 'Doe', '2020-09-30 14:38:57', '2020-09-30 14:38:57', '0', '3');
INSERT INTO `tbl_paypal` VALUES ('29', '9YX67410PD925700U', 'J3GJEC9GX23VS', '15', 'USD', 'CM2009006', 'John', 'Doe', '2020-09-30 16:11:51', '2020-09-30 16:11:51', '0', '2');
INSERT INTO `tbl_paypal` VALUES ('30', '01464195TJ750512U', 'J3GJEC9GX23VS', '39', 'USD', 'CM2009006', 'John', 'Doe', '2020-09-30 16:12:53', '2020-09-30 16:12:53', '0', '3');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_score
-- ----------------------------
INSERT INTO `tbl_score` VALUES ('1', 'bonus', 'CM2004001', 'TM1', '100', 'ODB1', 'ยินดีด้วย', '1', '2020-09-17 13:19:24', null);
INSERT INTO `tbl_score` VALUES ('2', 'score', 'CM2009001', null, '10', 'ODB110', 'ยินดีด้วยคุณได้รับ 10 Score จากการปิดออเดอร์ได้', '0', '2020-09-28 22:13:10', null);
INSERT INTO `tbl_score` VALUES ('3', 'score', 'CM2009007', null, '10', 'ODB123', 'ยินดีด้วยคุณได้รับ 10 Score จากการปิดออเดอร์ได้', '0', '2020-09-30 16:35:04', null);
INSERT INTO `tbl_score` VALUES ('4', 'score', 'CM2009002', null, '10', 'ODN136', 'ยินดีด้วยคุณได้รับ 10 Score จากการปิดออเดอร์ได้', '0', '2020-10-06 20:03:46', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_send_email_team
-- ----------------------------
INSERT INTO `tbl_send_email_team` VALUES ('1', 'photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', 'uploads/T3/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', 'TM2009002', '2020-10-07 21:11:51', null);
INSERT INTO `tbl_send_email_team` VALUES ('2', 'pdf_open_parameters4.pdf', 'uploads/T3/pdf_open_parameters4.pdf', 'TN20108', '2020-10-07 21:12:07', null);
INSERT INTO `tbl_send_email_team` VALUES ('3', 'messageImage_1575003698384.jpg', 'uploads/T3/messageImage_1575003698384.jpg', 'TN20108', '2020-10-07 21:12:39', null);
INSERT INTO `tbl_send_email_team` VALUES ('4', 'messageImage_1575004181330.jpg', 'uploads/T3/messageImage_1575004181330.jpg', 'TN20108', '2020-10-07 21:12:41', null);
INSERT INTO `tbl_send_email_team` VALUES ('5', 'messageImage_15750036983841.jpg', 'uploads/T3/messageImage_15750036983841.jpg', 'TN20108', '2020-10-07 21:19:50', null);
INSERT INTO `tbl_send_email_team` VALUES ('6', 'messageImage_15750041813301.jpg', 'uploads/T3/messageImage_15750041813301.jpg', 'TN20108', '2020-10-07 21:19:52', null);
INSERT INTO `tbl_send_email_team` VALUES ('7', 'photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖1.jpg', 'uploads/T3/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖1.jpg', 'TN20108', '2020-10-08 11:10:05', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;

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
INSERT INTO `tbl_session_admin` VALUES ('140', 'A20200504', 'Login', '2020-09-28 14:22:34');
INSERT INTO `tbl_session_admin` VALUES ('141', 'A20200504', 'Login', '2020-09-28 16:19:45');
INSERT INTO `tbl_session_admin` VALUES ('142', 'A20200504', 'Login', '2020-09-28 16:40:02');
INSERT INTO `tbl_session_admin` VALUES ('143', 'A20200504', 'Login', '2020-09-28 19:07:13');
INSERT INTO `tbl_session_admin` VALUES ('144', 'A20200502', 'Login', '2020-09-28 19:33:49');
INSERT INTO `tbl_session_admin` VALUES ('145', 'A20200502', 'Logout', '2020-09-28 19:33:54');
INSERT INTO `tbl_session_admin` VALUES ('146', 'A20200504', 'Login', '2020-09-28 19:33:58');
INSERT INTO `tbl_session_admin` VALUES ('147', 'A20200504', 'Login', '2020-09-28 21:02:44');
INSERT INTO `tbl_session_admin` VALUES ('148', 'A20200504', 'Login', '2020-09-28 21:35:12');
INSERT INTO `tbl_session_admin` VALUES ('149', 'A20200504', 'Login', '2020-09-28 21:57:00');
INSERT INTO `tbl_session_admin` VALUES ('150', 'A20200504', 'Login', '2020-09-28 22:30:16');
INSERT INTO `tbl_session_admin` VALUES ('151', 'A20200504', 'Login', '2020-09-29 07:06:55');
INSERT INTO `tbl_session_admin` VALUES ('152', 'A20200504', 'Login', '2020-09-29 08:17:40');
INSERT INTO `tbl_session_admin` VALUES ('153', 'A20200504', 'Login', '2020-09-29 11:21:57');
INSERT INTO `tbl_session_admin` VALUES ('154', 'A20200504', 'Login', '2020-09-29 12:11:07');
INSERT INTO `tbl_session_admin` VALUES ('155', 'A20200504', 'Login', '2020-09-29 13:16:45');
INSERT INTO `tbl_session_admin` VALUES ('156', 'A20200504', 'Login', '2020-09-29 14:24:03');
INSERT INTO `tbl_session_admin` VALUES ('157', 'A20200504', 'Login', '2020-09-29 14:25:20');
INSERT INTO `tbl_session_admin` VALUES ('158', 'A20200504', 'Login', '2020-09-29 15:33:39');
INSERT INTO `tbl_session_admin` VALUES ('159', 'A20200504', 'Login', '2020-09-29 19:46:56');
INSERT INTO `tbl_session_admin` VALUES ('160', 'A20200504', 'Login', '2020-09-30 10:03:44');
INSERT INTO `tbl_session_admin` VALUES ('161', 'A20200504', 'Login', '2020-09-30 14:34:03');
INSERT INTO `tbl_session_admin` VALUES ('162', 'A20200504', 'Login', '2020-09-30 14:40:41');
INSERT INTO `tbl_session_admin` VALUES ('163', 'A20200504', 'Login', '2020-09-30 15:53:28');
INSERT INTO `tbl_session_admin` VALUES ('164', 'A20200504', 'Login', '2020-09-30 15:56:00');
INSERT INTO `tbl_session_admin` VALUES ('165', 'A20200504', 'Login', '2020-09-30 16:40:30');
INSERT INTO `tbl_session_admin` VALUES ('166', 'A20200504', 'Login', '2020-09-30 16:42:32');
INSERT INTO `tbl_session_admin` VALUES ('167', 'A20200504', 'Login', '2020-09-30 16:50:19');
INSERT INTO `tbl_session_admin` VALUES ('168', 'A20200502', 'Login', '2020-09-30 16:54:03');
INSERT INTO `tbl_session_admin` VALUES ('169', 'A20200502', 'Logout', '2020-09-30 16:54:13');
INSERT INTO `tbl_session_admin` VALUES ('170', 'A20200504', 'Login', '2020-09-30 16:55:05');
INSERT INTO `tbl_session_admin` VALUES ('171', 'A20200504', 'Login', '2020-09-30 17:00:45');
INSERT INTO `tbl_session_admin` VALUES ('172', 'A20200504', 'Login', '2020-09-30 17:10:20');
INSERT INTO `tbl_session_admin` VALUES ('173', 'A20200504', 'Login', '2020-09-30 17:11:03');
INSERT INTO `tbl_session_admin` VALUES ('174', 'A20200504', 'Login', '2020-09-30 18:00:32');
INSERT INTO `tbl_session_admin` VALUES ('175', 'A20200504', 'Login', '2020-09-30 18:22:13');
INSERT INTO `tbl_session_admin` VALUES ('176', 'A20200504', 'Login', '2020-09-30 18:56:29');
INSERT INTO `tbl_session_admin` VALUES ('177', 'A20200504', 'Login', '2020-09-30 22:07:17');
INSERT INTO `tbl_session_admin` VALUES ('178', 'A20200504', 'Login', '2020-10-01 10:28:10');
INSERT INTO `tbl_session_admin` VALUES ('179', 'A20200504', 'Login', '2020-10-01 10:51:09');
INSERT INTO `tbl_session_admin` VALUES ('180', 'A20200504', 'Login', '2020-10-01 13:46:21');
INSERT INTO `tbl_session_admin` VALUES ('181', 'A20200504', 'Login', '2020-10-01 13:51:31');
INSERT INTO `tbl_session_admin` VALUES ('182', 'A20200504', 'Login', '2020-10-01 19:19:42');
INSERT INTO `tbl_session_admin` VALUES ('183', 'A20200504', 'Login', '2020-10-01 19:40:35');
INSERT INTO `tbl_session_admin` VALUES ('184', 'A20200504', 'Login', '2020-10-02 11:15:55');
INSERT INTO `tbl_session_admin` VALUES ('185', 'A20200504', 'Login', '2020-10-02 18:47:10');
INSERT INTO `tbl_session_admin` VALUES ('186', 'A20200504', 'Login', '2020-10-03 11:30:29');
INSERT INTO `tbl_session_admin` VALUES ('187', 'A20200504', 'Login', '2020-10-03 11:46:20');
INSERT INTO `tbl_session_admin` VALUES ('188', 'A20200504', 'Login', '2020-10-03 14:10:32');
INSERT INTO `tbl_session_admin` VALUES ('189', 'A20200504', 'Login', '2020-10-03 14:19:29');
INSERT INTO `tbl_session_admin` VALUES ('190', 'A20200504', 'Login', '2020-10-03 14:38:50');
INSERT INTO `tbl_session_admin` VALUES ('191', 'A20200504', 'Login', '2020-10-03 17:42:35');
INSERT INTO `tbl_session_admin` VALUES ('192', 'A20200504', 'Login', '2020-10-03 23:02:23');
INSERT INTO `tbl_session_admin` VALUES ('193', 'A20200504', 'Login', '2020-10-04 10:14:17');
INSERT INTO `tbl_session_admin` VALUES ('194', 'A20200504', 'Login', '2020-10-04 10:16:01');
INSERT INTO `tbl_session_admin` VALUES ('195', 'A20200504', 'Login', '2020-10-04 13:18:10');
INSERT INTO `tbl_session_admin` VALUES ('196', 'A20200504', 'Login', '2020-10-04 20:14:54');
INSERT INTO `tbl_session_admin` VALUES ('197', 'A20200504', 'Login', '2020-10-05 11:00:46');
INSERT INTO `tbl_session_admin` VALUES ('198', 'A20200504', 'Login', '2020-10-05 16:03:49');
INSERT INTO `tbl_session_admin` VALUES ('199', 'A20200504', 'Login', '2020-10-05 17:15:58');
INSERT INTO `tbl_session_admin` VALUES ('200', 'A20200504', 'Login', '2020-10-05 19:55:37');
INSERT INTO `tbl_session_admin` VALUES ('201', 'A20200504', 'Login', '2020-10-05 20:30:12');
INSERT INTO `tbl_session_admin` VALUES ('202', 'A20200504', 'Login', '2020-10-05 21:39:47');
INSERT INTO `tbl_session_admin` VALUES ('203', 'A20200504', 'Login', '2020-10-06 10:31:27');
INSERT INTO `tbl_session_admin` VALUES ('204', 'A20200504', 'Login', '2020-10-06 10:33:31');
INSERT INTO `tbl_session_admin` VALUES ('205', 'A20200504', 'Login', '2020-10-06 10:54:41');
INSERT INTO `tbl_session_admin` VALUES ('206', 'A20200504', 'Login', '2020-10-06 14:22:02');
INSERT INTO `tbl_session_admin` VALUES ('207', 'A20200504', 'Login', '2020-10-06 14:34:07');
INSERT INTO `tbl_session_admin` VALUES ('208', 'A20200504', 'Login', '2020-10-06 14:39:54');
INSERT INTO `tbl_session_admin` VALUES ('209', 'A20200504', 'Login', '2020-10-06 15:21:21');
INSERT INTO `tbl_session_admin` VALUES ('210', 'A20200504', 'Login', '2020-10-06 16:07:07');
INSERT INTO `tbl_session_admin` VALUES ('211', 'A20200504', 'Login', '2020-10-06 16:21:47');
INSERT INTO `tbl_session_admin` VALUES ('212', 'A20200504', 'Login', '2020-10-06 16:25:14');
INSERT INTO `tbl_session_admin` VALUES ('213', 'A20200504', 'Login', '2020-10-06 17:36:09');
INSERT INTO `tbl_session_admin` VALUES ('214', 'A20200504', 'Login', '2020-10-06 17:38:39');
INSERT INTO `tbl_session_admin` VALUES ('215', 'A20200504', 'Login', '2020-10-06 17:41:54');
INSERT INTO `tbl_session_admin` VALUES ('216', 'A20200504', 'Login', '2020-10-06 17:47:47');
INSERT INTO `tbl_session_admin` VALUES ('217', 'A20200504', 'Login', '2020-10-06 20:04:04');
INSERT INTO `tbl_session_admin` VALUES ('218', 'A20200504', 'Login', '2020-10-06 22:41:44');
INSERT INTO `tbl_session_admin` VALUES ('219', 'A20200504', 'Login', '2020-10-06 23:04:01');
INSERT INTO `tbl_session_admin` VALUES ('220', 'A20200504', 'Login', '2020-10-07 08:04:00');
INSERT INTO `tbl_session_admin` VALUES ('221', 'A20200504', 'Login', '2020-10-07 10:17:34');
INSERT INTO `tbl_session_admin` VALUES ('222', 'A20200504', 'Login', '2020-10-07 10:32:30');
INSERT INTO `tbl_session_admin` VALUES ('223', 'A20200504', 'Login', '2020-10-07 12:35:48');
INSERT INTO `tbl_session_admin` VALUES ('224', 'A20200504', 'Login', '2020-10-07 16:25:11');
INSERT INTO `tbl_session_admin` VALUES ('225', 'A20200504', 'Login', '2020-10-07 16:47:47');
INSERT INTO `tbl_session_admin` VALUES ('226', 'A20200504', 'Login', '2020-10-07 17:08:18');
INSERT INTO `tbl_session_admin` VALUES ('227', 'A20200504', 'Login', '2020-10-07 17:29:51');
INSERT INTO `tbl_session_admin` VALUES ('228', 'A20200504', 'Login', '2020-10-07 20:09:47');
INSERT INTO `tbl_session_admin` VALUES ('229', 'A20200504', 'Login', '2020-10-08 10:47:23');
INSERT INTO `tbl_session_admin` VALUES ('230', 'A20200504', 'Login', '2020-10-08 10:59:58');
INSERT INTO `tbl_session_admin` VALUES ('231', 'A20200504', 'Login', '2020-10-08 11:43:37');
INSERT INTO `tbl_session_admin` VALUES ('232', 'A20200504', 'Login', '2020-10-08 15:49:55');
INSERT INTO `tbl_session_admin` VALUES ('233', 'A20200504', 'Login', '2020-10-08 15:56:50');
INSERT INTO `tbl_session_admin` VALUES ('234', 'A20200504', 'Login', '2020-10-08 22:58:04');
INSERT INTO `tbl_session_admin` VALUES ('235', 'A20200504', 'Login', '2020-10-09 09:52:03');
INSERT INTO `tbl_session_admin` VALUES ('236', 'A20200504', 'Login', '2020-10-09 12:13:17');
INSERT INTO `tbl_session_admin` VALUES ('237', 'A20200504', 'Login', '2020-10-09 15:39:15');
INSERT INTO `tbl_session_admin` VALUES ('238', 'A20200504', 'Login', '2020-10-09 15:49:09');
INSERT INTO `tbl_session_admin` VALUES ('239', 'A20200504', 'Login', '2020-10-09 16:10:37');
INSERT INTO `tbl_session_admin` VALUES ('240', 'A20200504', 'Login', '2020-10-09 17:48:53');
INSERT INTO `tbl_session_admin` VALUES ('241', 'A20200504', 'Login', '2020-10-09 22:25:40');
INSERT INTO `tbl_session_admin` VALUES ('242', 'A20200504', 'Login', '2020-10-10 11:16:51');
INSERT INTO `tbl_session_admin` VALUES ('243', 'A20200504', 'Login', '2020-10-10 11:16:52');
INSERT INTO `tbl_session_admin` VALUES ('244', 'A20200504', 'Login', '2020-10-10 11:18:44');
INSERT INTO `tbl_session_admin` VALUES ('245', 'A20200504', 'Login', '2020-10-10 12:18:12');
INSERT INTO `tbl_session_admin` VALUES ('246', 'A20200504', 'Login', '2020-10-10 12:53:36');
INSERT INTO `tbl_session_admin` VALUES ('247', 'A20200504', 'Login', '2020-10-10 14:48:48');
INSERT INTO `tbl_session_admin` VALUES ('248', 'A20200504', 'Login', '2020-10-10 16:07:27');
INSERT INTO `tbl_session_admin` VALUES ('249', 'A20200504', 'Login', '2020-10-10 17:46:37');
INSERT INTO `tbl_session_admin` VALUES ('250', 'A20200504', 'Logout', '2020-10-10 17:46:44');
INSERT INTO `tbl_session_admin` VALUES ('251', 'A20200504', 'Login', '2020-10-10 17:47:14');
INSERT INTO `tbl_session_admin` VALUES ('252', 'A20200504', 'Login', '2020-10-10 17:47:15');
INSERT INTO `tbl_session_admin` VALUES ('253', 'A20200504', 'Login', '2020-10-10 22:05:07');
INSERT INTO `tbl_session_admin` VALUES ('254', 'A20200505', 'Login', '2020-10-11 12:01:44');
INSERT INTO `tbl_session_admin` VALUES ('255', 'A20200505', 'Login', '2020-10-11 13:17:36');
INSERT INTO `tbl_session_admin` VALUES ('256', 'A20200505', 'Login', '2020-10-11 17:19:32');

-- ----------------------------
-- Table structure for `tbl_status_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_status_admin`;
CREATE TABLE `tbl_status_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdAdmin` varchar(255) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_status_admin
-- ----------------------------
INSERT INTO `tbl_status_admin` VALUES ('252', 'A20200505', '2020-10-11 21:51:09');
INSERT INTO `tbl_status_admin` VALUES ('251', 'A20200505', '2020-10-11 21:51:09');
INSERT INTO `tbl_status_admin` VALUES ('250', 'A20200505', '2020-10-11 21:51:09');
INSERT INTO `tbl_status_admin` VALUES ('249', 'A20200504', '2020-10-10 22:05:07');
INSERT INTO `tbl_status_admin` VALUES ('248', 'A20200504', '2020-10-10 17:47:15');
INSERT INTO `tbl_status_admin` VALUES ('247', 'A20200504', '2020-10-10 17:47:14');

-- ----------------------------
-- Table structure for `tbl_status_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_status_team`;
CREATE TABLE `tbl_status_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTeam` varchar(255) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=220 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_status_team
-- ----------------------------
INSERT INTO `tbl_status_team` VALUES ('191', 'TN20109', '2020-10-09 18:45:00');
INSERT INTO `tbl_status_team` VALUES ('188', 'TN20109', '2020-10-09 18:45:00');
INSERT INTO `tbl_status_team` VALUES ('77', 'TM2009005', '2020-09-30 17:00:40');
INSERT INTO `tbl_status_team` VALUES ('78', 'TM2009004', '2020-10-01 09:31:56');
INSERT INTO `tbl_status_team` VALUES ('79', 'TM2009004', '2020-10-01 09:31:56');

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
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

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
INSERT INTO `tbl_store_for_buy_email` VALUES ('34', 'Screenshot_11.png,Screenshot_21.png,Screenshot_3.png', 'ODB110', '10', '0', '', '10', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-28 19:12:14', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('35', 'And_When_Did_You_Last_See_Your_Father__Main_file91.docx', 'ODB121', '90', '0', '', '90', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-29 14:18:19', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('36', 'LINE_P25630805_160042399.png', 'ODB102', '30', '0', '', '30', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-09-29 14:18:47', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('37', 'thai-lottery-01.jpg,photo-2.jpg,aw-rg+fx4-20p-bro-jun2020-Jun1.pdf', 'ODB123', '20', '0', '', '20', 'CM2009007', 'chinnawat0098@gmail.com', '0', '', null, '2020-09-30 14:55:09', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('38', 'Screenshot_12.png,Screenshot_22.png', 'ODB125', '20', '0', '', '20', 'CM2009005', 'jame0925623256@gmail.com', '0', '', null, '2020-09-30 18:07:14', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('39', 'And_When_Did_You_Last_See_Your_Father__Main_file94.docx', 'ODB127', '10', '0', '', '10', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-30 22:12:47', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('40', 'And_When_Did_You_Last_See_Your_Father__Main_file93.docx', 'ODB126', '25', '0', '', '25', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-30 22:22:38', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('41', 'The_Lighthouse_More_file11.docx', 'ODB128', '30', '0', '', '30', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-09-30 22:31:11', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('42', 'Screenshot_31.png', 'ODB131', '10', '0', '', '10', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-10-05 20:31:25', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('43', 'Finalist_Report_project(ใหม่)2.docx', 'ODB133', '30', '0', '', '30', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-10-06 10:43:55', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('44', '1.jpg,photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖6.jpg', 'ODB132', '20', '0', '', '20', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-10-06 11:11:55', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('45', '12.jpg', 'ODN134', '30', '0', '', '30', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-10-06 11:11:59', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('46', 'And_When_Did_You_Last_See_Your_Father__Main_file95.docx', 'ODB135', '20', '0', '', '20', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-10-06 14:27:10', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('47', 'And_When_Did_You_Last_See_Your_Father__Main_file96.docx', 'ODN136', '40', '0', '', '40', 'CM2009002', 'wut.088english@gmail.com', '0', '', null, '2020-10-06 17:31:58', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('48', '4367764.jpg', 'ODN145', '25', '0', '', '25', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-10-09 16:13:47', null);
INSERT INTO `tbl_store_for_buy_email` VALUES ('49', 'home-bg1.png', 'ODN143', '30', '0', '', '30', 'CM2009001', 'jame0925623256@gmail.com', '0', '', null, '2020-10-09 16:14:06', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_store_team
-- ----------------------------
INSERT INTO `tbl_store_team` VALUES ('1', 'TM2009001', '20', 'ODB1', '2020-10-08 15:53:34', '2020-10-08 15:53:34', 'ได้รับรายได้จากระบบ');
INSERT INTO `tbl_store_team` VALUES ('2', 'TN20109', '10', null, '2020-10-09 12:46:58', null, 'ได้รับโบนัสเพิ่มเติม');
INSERT INTO `tbl_store_team` VALUES ('3', 'TM2009002', '10', null, '2020-10-09 15:44:07', null, 'aa');

-- ----------------------------
-- Table structure for `tbl_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `IdTeam` varchar(255) DEFAULT NULL,
  `income` decimal(65,0) DEFAULT '0',
  `income_thai` decimal(22,0) DEFAULT '0',
  `team_score` decimal(11,0) DEFAULT '0',
  `educational` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `email` varchar(150) DEFAULT '',
  `phone` varchar(150) DEFAULT NULL,
  `title_name` varchar(100) DEFAULT NULL COMMENT 'คำนำหน้า',
  `name` varchar(150) DEFAULT '',
  `lastname_user` varchar(255) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0 == approve //  == non-approve',
  `update_at` datetime DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `forgot_password` varchar(255) DEFAULT NULL,
  `time_forgot_password` datetime DEFAULT NULL,
  `notify_admin` tinyint(1) DEFAULT NULL,
  `status_notification_ban` varchar(11) DEFAULT '0',
  `notification_ban` text,
  `line` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL COMMENT 'ชื่อธนาคาร',
  `bank_number` varchar(100) DEFAULT NULL COMMENT 'เลขธนาคาร',
  `file_name` varchar(255) DEFAULT NULL COMMENT 'รูป Profile',
  `resume_file` varchar(255) DEFAULT NULL,
  `file_name_bookbank` varchar(255) DEFAULT NULL COMMENT 'รูปสมุดบัญชี',
  `file_name_passport` varchar(255) DEFAULT NULL COMMENT 'รูปถ่ายบัตรประชาชน',
  `file_name_user_passport` varchar(255) DEFAULT NULL COMMENT 'รูปถ่ายกับบัตรประชาชน',
  `address_passport` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่ตามบัตรประชาชน',
  `passport` varchar(255) DEFAULT NULL COMMENT 'เลขบัตรประชาชน',
  `amphoe` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `email_lang_team` varchar(10) DEFAULT NULL COMMENT '1 = ภาษาไทย / 2 = ภาษาอังกฤษ',
  `popshow` varchar(2) DEFAULT '0' COMMENT '0 = สมัครเข้ามาใหม่ / 1 = เคยเข้า login แล้ว | ไว้เช็ค popup ให้ขึ้นแค่รอบเดี๋ยว และ pop-up เกรณ์ ให้ขึ้นตอนที่ loging เข้ามาอีกรอบ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_team
-- ----------------------------
INSERT INTO `tbl_team` VALUES ('1', 'TM2009001', '40', '1080', '200', 'Ph.D', '218', 'jame0879871121@gmail.com', '0925623256', null, 'นายณัฐพนธ์ เกัยรติกุล', null, 'e3d00986182c0c42dd0f5bb4c6dc91fa', '1', '2020-10-10 11:13:50', '1234567890', null, null, '1', '0', null, null, null, null, 'public/frontend/assets/img/profile/phpto-1602257602.JPG', 'Finalist_Report_project.docx', null, null, null, null, null, null, null, null, null, '2020-09-19 17:47:00', null, '2');
INSERT INTO `tbl_team` VALUES ('2', 'TM2009002', '60', '0', '8', 'B.A.', '218', 'pat.088english@gmail.com', '0652074798', null, 'wut', null, '44aa52cca5725e90d714f0106180176f', '1', '2020-10-09 17:56:30', '12345', null, null, '1', '0', null, null, null, null, 'public/frontend/assets/img/profile/phpto-1600920798.jpg', 'And_When_Did_You_Last_See_Your_Father__Main_file1.docx', null, null, null, null, null, null, null, null, null, '2020-09-20 16:05:13', null, '2');
INSERT INTO `tbl_team` VALUES ('3', 'TM2009003', '0', '0', '0', 'B.A.', '13', 'chutwut.088english@gmail.com', '0652074798', null, 'chut', null, '2a4811e4bcd0ff53a933ab036ad32d26', '1', null, '', null, null, '1', '0', null, null, null, null, 'uploads/resume/The_Dream_Asylum_Rewrite.docx', 'The_Dream_Asylum_Rewrite.docx', null, null, null, null, null, null, null, null, null, '2020-09-26 17:26:49', null, '0');
INSERT INTO `tbl_team` VALUES ('4', 'TM2009004', '0', '0', '0', 'MCM', '218', 'chinnawat_buzz@hotmail.co.th', '0879879871', null, 'ชินวัตร แก้วเมืองฝาง', null, '25f9e794323b453885f5181f1b624d0b', '1', null, 'ชินวัตร แก้วเมืองฝาง', null, null, '1', '0', null, null, null, null, 'uploads/resume/resume_BUS_(1).pdf', 'resume_BUS_(1).pdf', null, null, null, null, null, null, null, null, null, '2020-09-30 15:06:28', null, '0');
INSERT INTO `tbl_team` VALUES ('5', 'TM2009005', '0', '0', '0', 'Master\'s Degree', null, 'testgood@testgood.com', '123213213213', null, 'test123213213123', null, 'e807f1fcf82d132f9bb018ca6738a19f', '1', null, '', null, null, '1', '0', null, null, null, null, 'public/frontend/assets/img/profile/phpto-1601457862.jpg', 'Programmer_แก้ไข_200920.docx', null, null, null, null, null, null, null, null, null, '2020-09-30 16:18:09', null, '0');
INSERT INTO `tbl_team` VALUES ('6', 'TN20106', '0', '0', '0', 'Ph.D', '218', 'test123@gmail.com', '0123456789', null, 'สมุม', 'ติฐาน', '25f9e794323b453885f5181f1b624d0b', '1', null, '', null, null, '1', '0', null, 'jamebz', 'ไทยพาณิชย์', '9876543210', null, 'ข้อความหน้าแรก_ทีมงาน1.docx', null, null, null, '123 m.1', '123456789123', 'สันทราย', 'หนองหาร', 'เชียงใหม่', '50290', '2020-10-05 22:51:22', null, '0');
INSERT INTO `tbl_team` VALUES ('7', 'TN20107', '0', '0', '0', 'CWA', '218', 'test01@gmail.com', '0888888888', null, 'TEST01', 'TEST02', '25f9e794323b453885f5181f1b624d0b', '1', null, '', null, null, '1', '0', null, 'jamebz', 'ไทยพาณิชย์', '112141251474', null, 'ข้อความหน้าแรก_ทีมงาน2.docx', 'uploads/bookbank/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', 'uploads/card/banner03.png', 'uploads/carduser/banner02.png', '123', '123456789123', 'สันทราย', 'หนองหาร', 'เชียงใหม่', '50290', '2020-10-06 22:34:05', null, '0');
INSERT INTO `tbl_team` VALUES ('8', 'TN20108', '0', '0', '0', 'CWA', '218', 'test05@gmail.com', '0999999999', null, 'test03', 'test04', '25f9e794323b453885f5181f1b624d0b', '0', null, '', null, null, '0', '0', null, 'jamebz', 'กสิกรไทย', '112141251474', 'public/frontend/assets/img/profile/12.jpg', 'ข้อความหน้าแรก_ทีมงาน3.docx', 'uploads/bookbank/1.jpg', 'uploads/card/11.png', 'uploads/carduser/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', '321', '123456789123', 'สันทราย', 'หนองหาร', 'เชียงใหม่', '50290', '2020-10-06 22:40:20', null, '0');
INSERT INTO `tbl_team` VALUES ('9', 'TN20109', '100', '0', '10', null, '218', 'test987@gmail.com', '08798744544', 'นาย', 'สมชาเขียว', 'นามสมุติ', '25f9e794323b453885f5181f1b624d0b', '1', '2020-10-09 14:54:34', '', null, null, '1', '0', null, 'jamebz01', 'ไทยพาณิชย์', '1122454544478', 'public/frontend/assets/img/profile/12.jpg', 'Finalist_Report_project.pdf', 'uploads/bookbank/1.jpg', 'uploads/card/11.png', 'uploads/carduser/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', '555', '1122335566478', 'นางรอง', 'หนองกง', 'บุรีรัมย์', '31110', '2020-10-08 22:56:31', '1', '2');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
INSERT INTO `tbl_upload_backup_gt` VALUES ('9', '44', 'ODB110', 'Screenshot_21.png', 'uploads/Buy/GT/Screenshot_21.png', '2020-09-28 19:33:44', null);
INSERT INTO `tbl_upload_backup_gt` VALUES ('10', '46', 'ODB123', 'eden-hazard-real-madrid_1j7r7a4hcquh51a5l7r0k5f2vi.jpg', 'uploads/Buy/GT/eden-hazard-real-madrid_1j7r7a4hcquh51a5l7r0k5f2vi.jpg', '2020-09-30 15:03:02', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload_backup_main
-- ----------------------------
INSERT INTO `tbl_upload_backup_main` VALUES ('1', '19', 'ODB83', 'IMG_42142.PNG', 'uploads/Buy/IMG_42142.PNG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('2', '19', 'ODB83', 'IMG_4249.JPG', 'uploads/Buy/IMG_4249.JPG', '2020-09-21 23:53:37', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('3', '20', 'ODB83', 'IMG_42142.PNG', 'uploads/Buy/IMG_42142.PNG', '2020-09-23 11:32:45', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('4', '23', 'ODB85', 'IMG_41813.PNG', 'uploads/Buy/IMG_41813.PNG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('5', '23', 'ODB85', 'IMG_41821.PNG', 'uploads/Buy/IMG_41821.PNG', '2020-09-23 14:57:52', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('6', '24', 'ODB85', 'IMG_41821.PNG', 'uploads/Buy/IMG_41821.PNG', '2020-09-23 16:04:38', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('7', '44', 'ODB110', 'Screenshot_11.png', 'uploads/Buy/Screenshot_11.png', '2020-09-28 19:33:44', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('8', '44', 'ODB110', 'Screenshot_21.png', 'uploads/Buy/Screenshot_21.png', '2020-09-28 19:33:44', null);
INSERT INTO `tbl_upload_backup_main` VALUES ('9', '46', 'ODB123', 'thai-lottery-01.jpg', 'uploads/Buy/thai-lottery-01.jpg', '2020-09-30 15:03:02', null);

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
  `video_lang` varchar(100) DEFAULT NULL COMMENT '1  = ไทย / 2 = อังกฤษ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_order
-- ----------------------------
INSERT INTO `tbl_upload_order` VALUES ('1', 'CM2009001', null, null, 'Member1.xlsx', 'ODB51', '10', null, null, null, '2020-09-22 00:00:00', '2020-09-20 08:33:40', '2020-09-20 11:34:38', '2020-11-19 00:00:00', 'uploads/Buy/Member1.xlsx', '1', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('2', 'CM2009001', null, null, 'Finalist_Report_project(ใหม่).docx', 'ODB52', '20', null, null, null, '2020-09-21 00:00:00', '2020-09-20 09:33:40', '2020-09-20 11:37:50', '2020-11-19 00:00:00', 'uploads/Buy/Finalist_Report_project(ใหม่).docx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('3', 'CM2009001', null, null, 'IMG_4353.jfif', 'ODB54', '5', null, null, null, '2020-09-21 00:00:00', '2020-09-20 10:33:40', '2020-09-20 11:43:34', '2020-11-19 00:00:00', 'uploads/Buy/IMG_4353.jfif', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('4', 'CM2009001', null, null, 'ดาวน์โหลด.png', 'ODB55', '20', null, null, null, '2020-09-21 00:00:00', '2020-09-21 11:32:21', '2020-09-20 12:13:02', '2020-11-19 00:00:00', 'uploads/Buy/ดาวน์โหลด.png', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'C', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('5', 'CM2009001', null, null, 'IMG_43531.jfif', 'ODB56', '20', null, null, null, '2020-09-21 00:00:00', '2020-09-20 12:20:56', '2020-09-20 12:21:57', '2020-11-19 00:00:00', 'uploads/Buy/IMG_43531.jfif', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('6', 'CM2009001', null, null, 'Finalist_Report_project(ใหม่)1.docx', 'ODB57', '100', null, null, null, '2020-09-21 00:00:00', '2020-09-20 12:42:48', '2020-09-20 12:42:48', '2020-11-19 00:00:00', 'uploads/Buy/Finalist_Report_project(ใหม่)1.docx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('7', 'CM2009001', null, null, 'Member2.xlsx', 'ODB58', '20', null, null, null, '2020-10-21 00:00:00', '2020-09-20 12:21:46', '2020-09-20 16:12:06', '2020-11-19 00:00:00', 'uploads/Buy/Member2.xlsx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('8', 'CM2009001', null, null, 'Member3.xlsx', 'ODB59', '25', null, null, null, '2020-09-25 00:00:00', '2020-09-20 12:27:28', '2020-09-20 12:27:29', '2020-11-19 00:00:00', 'uploads/Buy/Member3.xlsx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('9', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file61.docx', 'ODB60', '25', null, null, null, '2020-09-26 00:00:00', '2020-09-20 12:52:28', '2020-09-20 12:52:28', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file61.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('10', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file62.docx', 'ODB61', '50', null, null, null, '2020-09-29 00:00:00', '2020-09-20 13:08:46', '2020-09-20 13:08:46', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file62.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('12', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file64.docx', 'ODB63', '20', '18', '10', null, '2020-09-28 00:00:00', '2020-09-20 12:49:32', '2020-09-20 15:02:47', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file64.docx', '1', '0', '0', null, '0', null, '-', null, '1', null, '4', '1', 'complete', '0', '0', '1', '0', null, '0', '0', '1', 'A', '10', null, null, '2020-11-24', null, '1', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('13', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file65.docx', 'ODB64', '60', null, null, null, '2020-09-29 00:00:00', '2020-09-20 13:14:13', '2020-09-20 13:14:44', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file65.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('15', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file67.docx', 'ODB66', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-20 15:48:09', '2020-09-20 15:48:54', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file67.docx', '1', '0', '0', null, '1', null, 'ff', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('19', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file71.docx', 'ODB70', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-20 18:31:26', '2020-09-20 18:32:55', '2020-11-19 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file71.docx', '1', '0', '0', null, '0', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('20', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file72.docx', 'ODB71', '10', null, null, null, '2020-09-29 00:00:00', '2020-09-20 18:31:37', '2020-09-21 13:41:02', '2020-11-20 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file72.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('22', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file74.docx', 'ODB73', '10', null, null, null, '2020-10-01 00:00:00', '2020-09-20 18:32:00', '2020-09-21 16:20:48', '2020-11-20 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file74.docx', '2', '0', '0', null, '0', '', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('25', 'CM2009001', null, null, 'Flow_Chart_ระบบหลังร้าน_Quli_-_AutoRecovered.pdf', 'ODB75', '20', '20', '0', null, '2020-09-22 00:00:00', '2020-09-21 10:14:34', '2020-09-21 10:47:51', '2020-11-23 00:00:00', 'uploads/Buy/Flow_Chart_ระบบหลังร้าน_Quli_-_AutoRecovered.pdf', '1', '0', '0', null, '0', null, '545454545454', null, '1', null, '4', '1', 'complete', '0', '0', '0', '0', null, '0', '0', '1', 'B', '10', null, null, '2020-11-25', null, '1', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('26', 'CM2009001', null, null, 'ผลงานเบื้องต้น.pdf', 'ODB75', '20', '20', '0', null, '2020-09-22 00:00:00', '2020-09-21 10:14:34', '2020-09-21 10:47:51', '2020-11-23 00:00:00', 'uploads/Buy/ผลงานเบื้องต้น.pdf', '1', '0', '0', null, '0', null, '545454545454', null, '1', null, '4', '1', 'complete', '0', '0', '0', '0', null, '0', '0', '0', 'B', '10', null, null, '2020-11-25', null, '1', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('29', 'CM2009001', null, null, 'Programmer_แก้ไข_200999.docx', 'ODB77', '10', '10', '0', null, '2020-09-29 00:00:00', '2020-09-21 13:42:12', '2020-09-28 16:43:42', '2020-11-27 00:00:00', 'uploads/Buy/Programmer_แก้ไข_200999.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '3', '1', 'complete', '1', '1', '1', '0', null, '0', '0', '1', 'A', null, null, '2021-03-25', '2020-12-02', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('31', 'CM2009001', '', '', 'Programmer_แก้ไข_200920.docx', 'ODB77', '10', '10', '0', null, '2020-09-29 00:00:00', '2020-09-21 14:57:56', '2020-09-28 16:43:42', '2020-11-27 00:00:00', 'uploads/Main/Programmer_แก้ไข_200920.docx', '1', '0', '0', '', '1', null, '', null, '1', null, '3', '1', 'complete', '1', '1', '1', '0', null, '0', '1', '1', null, null, null, '2021-03-25', '2020-12-02', null, '0', '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('34', 'CM2009001', null, null, 'Checklist_Programmer_20-09-202.xlsx', 'ODB80', '10', '10', '0', null, '2020-09-25 00:00:00', '2020-09-21 16:54:29', '2020-09-21 16:55:04', '2020-11-20 00:00:00', 'uploads/Buy/Checklist_Programmer_20-09-202.xlsx', '1', '0', '0', null, '0', null, '', null, '1', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('42', 'CM2009001', null, null, 'IMG_4177301.JPG', 'ODB84', '20', '20', '0', null, '2020-09-27 00:00:00', '2020-09-21 23:50:12', '2020-09-28 23:01:10', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4177301.JPG', '1', '0', '0', null, '1', null, '1111', null, '1', null, '5', '1', 'rewrite', '0', '0', '1', '0', null, '0', '0', '1', 'A', null, null, '2021-03-25', '2020-11-30', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('43', 'CM2009001', null, null, 'IMG_41813.PNG', 'ODB85', '20', '18', '10', null, '2020-09-27 00:00:00', '2020-09-23 14:37:27', '2020-09-23 16:04:38', '2020-11-22 00:00:00', 'uploads/Buy/IMG_41813.PNG', '1', '0', '0', null, '1', null, 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('44', 'CM2009001', null, null, 'IMG_41821.PNG', 'ODB85', '20', '18', '10', null, '2020-09-27 00:00:00', '2020-09-23 14:37:27', '2020-09-23 16:04:38', '2020-11-22 00:00:00', 'uploads/Buy/IMG_41821.PNG', '1', '0', '0', null, '1', null, 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('45', 'CM2009001', null, null, 'IMG_41803.JPG', 'ODB85', '20', '18', '10', null, '2020-09-27 00:00:00', '2020-09-23 14:37:27', '2020-09-23 16:04:38', '2020-11-22 00:00:00', 'uploads/Buy/IMG_41803.JPG', '1', '0', '0', null, '1', null, 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('46', 'CM2009001', null, null, 'IMG_4835.JPG', 'ODB86', '16', '16', '0', null, '2020-10-10 00:00:00', '2020-09-23 14:39:48', '2020-09-26 11:25:35', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4835.JPG', '2', '0', '0', null, '1', 'Not Satisfired (ODB86)\r\n', 'You can buy GT Document.', null, '1', null, '0', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('47', 'CM2009001', null, null, 'IMG_4836.JPG', 'ODB86', '16', '16', '0', null, '2020-10-10 00:00:00', '2020-09-23 14:39:48', '2020-09-26 11:25:35', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4836.JPG', '2', '0', '0', null, '1', 'Not Satisfired (ODB86)\r\n', 'You can buy GT Document.', null, '1', null, '0', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('48', 'CM2009001', null, null, 'IMG_4837.JPG', 'ODB86', '16', '16', '0', null, '2020-10-10 00:00:00', '2020-09-23 14:39:48', '2020-09-26 11:25:35', '2020-11-25 00:00:00', 'uploads/Buy/IMG_4837.JPG', '2', '0', '0', null, '1', 'Not Satisfired (ODB86)\r\n', 'You can buy GT Document.', null, '1', null, '0', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('49', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file75.docx', 'ODB87', '60', '54', '10', null, '2020-09-29 00:00:00', '2020-09-24 12:11:49', '2020-09-24 12:12:30', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file75.docx', '1', '0', '0', null, '1', null, 'gg', null, '1', null, '0', '1', 'rewrite', '0', null, '1', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('50', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file76.docx', 'ODB88', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-24 16:51:17', '2020-09-24 18:42:00', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file76.docx', '2', '0', '0', null, '1', '', '', null, '1', null, '3', '1', null, '1', '1', '1', '0', null, '0', '0', '0', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('51', 'CM2009001', null, null, '23963_200923.jpg', 'ODB89', '10', '9', '10', null, '2020-09-26 00:00:00', '2020-09-24 18:11:06', '2020-09-26 10:43:15', '2020-11-23 00:00:00', 'uploads/Buy/23963_200923.jpg', '2', '0', '0', null, '0', '', 'More details.', null, '1', null, '1', '1', null, '1', '1', '1', '0', null, '0', '0', '0', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('52', 'CM2009001', null, null, '3.png', 'ODB89', '10', '9', '10', null, '2020-09-26 00:00:00', '2020-09-24 18:11:06', '2020-09-26 10:43:15', '2020-11-23 00:00:00', 'uploads/Buy/3.png', '2', '0', '0', null, '0', '', 'More details.', null, '1', null, '1', '1', null, '1', '1', '1', '0', null, '0', '0', '0', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('53', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file77.docx', 'ODB90', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-24 18:14:35', '2020-09-24 18:15:06', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file77.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('54', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file78.docx', 'ODB91', '60', null, null, null, '2020-09-25 00:00:00', '2020-09-24 18:30:32', '2020-09-24 18:30:50', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file78.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('55', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file79.docx', 'ODB92', '40', '40', '0', null, '2020-09-25 00:00:00', '2020-09-24 18:33:27', '2020-09-24 18:33:43', '2020-11-23 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file79.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('56', 'CM2009002', null, null, 'The_Lighthouse_More_file1.docx', 'ODB93', '20', '20', '0', null, '2020-09-25 00:00:00', '2020-09-24 18:38:08', '2020-09-26 20:21:40', '2020-11-23 00:00:00', 'uploads/Buy/The_Lighthouse_More_file1.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('57', 'CM2009002', null, null, 'White_Lies_Sell_22.docx', 'ODB94', '20', '20', '0', null, '2020-09-29 00:00:00', '2020-09-24 18:51:43', '2020-09-24 18:51:51', '2020-11-23 00:00:00', 'uploads/Buy/White_Lies_Sell_22.docx', '2', '0', '0', null, '1', '', '', null, '1', null, '5', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('58', 'CM2009002', null, null, 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN.docx', 'ODB95', '10', '10', '0', null, '2020-09-25 00:00:00', '2020-09-24 19:09:56', '2020-09-24 19:10:29', '2020-11-23 00:00:00', 'uploads/Buy/Night_Terrors_in_Cairo_FEEDBACK_ADMIN.docx', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('59', 'CM2009002', null, null, 'Umbrella_Sell_12.docx', 'ODB96', '10', '10', '0', null, '2020-09-25 00:00:00', '2020-09-24 19:22:07', '2020-09-24 19:34:37', '2020-11-23 00:00:00', 'uploads/Buy/Umbrella_Sell_12.docx', '2', '0', '0', null, '1', '', '', null, '1', null, '3', '1', null, '1', '1', '1', '0', null, '0', '0', '1', null, null, null, null, '2020-11-28', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('60', 'CM2009001', null, null, '23963_200923_0.jpg', 'ODB97', '30', '27', '10', null, '2020-09-30 00:00:00', '2020-09-24 19:32:08', '2020-09-24 19:33:05', '2020-11-23 00:00:00', 'uploads/Buy/23963_200923_0.jpg', '1', '0', '0', null, '0', null, 'More details.', null, '1', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '1', 'D', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('61', 'CM2009001', null, null, '23963_200923_1.jpg', 'ODB97', '30', '27', '10', null, '2020-09-30 00:00:00', '2020-09-24 19:32:08', '2020-09-24 19:33:05', '2020-11-23 00:00:00', 'uploads/Buy/23963_200923_1.jpg', '1', '0', '0', null, '0', null, 'More details.', null, '1', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '1', 'D', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('62', 'CM2009001', null, null, '23963_2009231.jpg', 'ODB98', '20', '20', '0', null, '2020-09-27 00:00:00', '2020-09-24 20:08:26', '2020-09-24 20:10:08', '2020-11-23 00:00:00', 'uploads/Buy/23963_2009231.jpg', '1', '0', '0', null, '1', null, '', null, '1', null, '0', '1', 'notcomplete', '0', null, '1', '0', null, '0', '0', '0', 'C', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('63', 'CM2009002', null, null, 'Shards_of_Glass_Feedback_client.docx', 'ODB99', '10', '10', '0', null, '2020-10-29 00:00:00', '2020-09-25 12:40:10', '2020-09-25 16:33:33', '2020-11-24 00:00:00', 'uploads/Buy/Shards_of_Glass_Feedback_client.docx', '1', '0', '0', null, '0', null, 'aaa', null, '1', null, '1', '1', 'notcomplete', '1', '1', '1', '0', null, '0', '0', '0', 'A', '5', null, '2021-03-24', '2020-11-29', null, '1', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('64', 'CM2009001', null, null, 'Data_input.docx', 'ODB100', '10', '10', '0', null, '2020-09-29 00:00:00', '2020-09-26 11:39:09', '2020-09-26 11:39:27', '2020-11-25 00:00:00', 'uploads/Buy/Data_input.docx', '2', '0', '0', null, '1', 'Not Satisfired (ODB100)\r\n', '* อธิบายการสั่งOrder', null, '1', null, '0', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('65', 'CM2009001', null, null, 'Finalist_Report_project1.docx', 'ODB101', null, null, null, null, '2020-10-01 00:00:00', '2020-09-26 15:46:51', '2020-09-29 07:26:06', null, 'uploads/Buy/Finalist_Report_project1.docx', '0', '0', '1', 'เอการของคุณโดน reject', '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('66', 'CM2009001', null, null, 'LINE_P25630805_160042399.png', 'ODB102', '30', '30', '0', null, '2020-09-29 00:00:00', '2020-09-26 16:26:29', '2020-09-26 22:12:21', '2020-11-25 00:00:00', 'uploads/Buy/LINE_P25630805_160042399.png', '1', '0', '0', null, '0', null, 'More details.', null, '1', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'D', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('67', 'CM2009001', null, null, 'Finalist_Report_project2.docx', 'ODB103', '50', null, null, null, '2020-09-29 00:00:00', '2020-09-26 16:52:50', '2020-09-26 16:52:50', '2020-11-25 00:00:00', 'uploads/Buy/Finalist_Report_project2.docx', '1', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'C', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('68', 'CM2009001', null, null, 'Finalist_Report_100820_Programmer_.docx', 'ODB104', '3000', null, null, null, '2020-09-27 00:00:00', '2020-09-26 18:56:34', '2020-09-26 19:03:14', '2020-11-25 00:00:00', 'uploads/Buy/Finalist_Report_100820_Programmer_.docx', '1', '0', '0', null, '0', null, 'ดเดเดเดเ', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'B', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('69', 'CM2009001', null, null, 'Option_ทั้งหมดสำหรับระบบ_บันทึกออเดอร์หลังร้า.docx', 'ODB105', '5000', null, null, null, '2020-09-27 00:00:00', '2020-09-26 19:00:19', '2020-09-26 19:02:46', '2020-11-25 00:00:00', 'uploads/Buy/Option_ทั้งหมดสำหรับระบบ_บันทึกออเดอร์หลังร้า.docx', '1', '0', '0', null, '0', null, '5555', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'B', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('70', 'A20200504', 'Jimmyner', 'kuhaku0879871121@gmail.com', 'Data_input1.docx', 'ODB106', '0', null, null, null, '2020-09-28 00:00:00', '2020-09-26 23:41:31', null, null, 'uploads/Buy/Data_input1.docx', '1', '1', '0', null, '0', null, '', null, '1', null, '0', null, 'complete', '0', null, null, '0', '2020-10-11', '6', '0', '1', 'B', null, null, null, null, null, '0', '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('71', 'CM2009002', null, null, 'The_Lighthouse_More_file2.docx', 'ODB107', '10', null, null, null, '2020-09-29 00:00:00', '2020-09-27 11:26:27', '2020-09-27 11:27:10', '2020-11-26 00:00:00', 'uploads/Buy/The_Lighthouse_More_file2.docx', '2', '0', '0', null, '0', '', 'aa', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('72', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file80.docx', 'ODB108', '20', null, null, null, '2020-09-28 00:00:00', '2020-09-27 11:30:08', '2020-09-27 11:30:30', '2020-11-26 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file80.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('73', 'CM2009001', null, null, 'คุณกิร.docx', 'ODB109', '20', null, null, null, '2020-10-04 00:00:00', '2020-09-28 19:07:01', '2020-09-28 19:09:22', '2020-11-27 00:00:00', 'uploads/Buy/คุณกิร.docx', '1', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'D', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('74', 'CM2009001', null, null, 'Screenshot_2.png', 'ODB109', '20', null, null, null, '2020-10-04 00:00:00', '2020-09-28 19:07:01', '2020-09-28 19:09:22', '2020-11-27 00:00:00', 'uploads/Buy/Screenshot_2.png', '1', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'D', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('75', 'CM2009001', null, null, 'Screenshot_1.png', 'ODB109', '20', null, null, null, '2020-10-04 00:00:00', '2020-09-28 19:07:01', '2020-09-28 19:09:22', '2020-11-27 00:00:00', 'uploads/Buy/Screenshot_1.png', '1', '0', '0', null, '0', null, 'You can buy Document. ( คุณสามารถDrop ได้จำนวนสูงสุด 10 File )', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'D', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('76', 'CM2009001', null, null, 'Screenshot_11.png', 'ODB110', '10', '10', '0', null, '2020-10-08 00:00:00', '2020-09-28 19:11:30', '2020-09-28 21:06:32', '2020-11-27 00:00:00', 'uploads/Buy/Screenshot_11.png', '1', '0', '0', null, '1', null, 'Choose the date to pick up the document.', null, '1', null, '1', '1', 'notcomplete', '1', '1', '0', '0', '2020-10-11', '6', '0', '0', 'C', null, 'Approved (ODB110)', null, '2020-12-02', '5', '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('77', 'CM2009001', null, null, 'Screenshot_21.png', 'ODB110', '10', '10', '0', null, '2020-10-08 00:00:00', '2020-09-28 19:11:30', '2020-09-28 21:06:32', '2020-11-27 00:00:00', 'uploads/Buy/Screenshot_21.png', '1', '0', '0', null, '1', null, 'Choose the date to pick up the document.', null, '1', null, '1', '1', 'notcomplete', '1', '1', '0', '0', '2020-10-11', '6', '0', '0', 'C', null, 'Approved (ODB110)', null, '2020-12-02', '5', '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('78', 'CM2009001', null, null, 'Screenshot_3.png', 'ODB110', '10', '10', '0', null, '2020-10-08 00:00:00', '2020-09-28 19:11:30', '2020-09-28 21:06:32', '2020-11-27 00:00:00', 'uploads/Buy/Screenshot_3.png', '1', '0', '0', null, '1', null, 'Choose the date to pick up the document.', null, '1', null, '1', '1', 'notcomplete', '1', '1', '0', '0', '2020-10-11', '6', '0', '0', 'C', null, 'Approved (ODB110)', null, '2020-12-02', '5', '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('79', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file81.docx', 'ODB111', '10', null, null, null, '2020-10-30 00:00:00', '2020-09-29 07:07:59', '2020-09-29 07:08:30', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file81.docx', '1', '0', '0', null, '0', null, 'aaa', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('80', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file82.docx', 'ODB112', '20', null, null, null, '2020-10-30 00:00:00', '2020-09-29 07:15:55', '2020-09-29 07:16:10', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file82.docx', '1', '0', '0', null, '0', null, 'sss', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('81', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file83.docx', 'ODB113', '20', null, null, null, '2020-10-30 00:00:00', '2020-09-29 07:17:08', '2020-09-29 07:17:24', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file83.docx', '1', '0', '0', null, '0', null, 'ss', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('82', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file84.docx', 'ODB114', '25', null, null, null, '2020-09-30 00:00:00', '2020-09-29 07:18:35', '2020-09-29 07:18:57', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file84.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('83', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file85.docx', 'ODB115', '25', null, null, null, '2020-09-30 00:00:00', '2020-09-29 07:19:34', '2020-09-29 07:19:50', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file85.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'notcomplete', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('84', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file86.docx', 'ODB116', '25', null, null, null, '2020-09-30 00:00:00', '2020-09-29 07:20:23', '2020-09-29 07:20:42', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file86.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('85', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file87.docx', 'ODB117', '28', null, null, null, '2020-09-30 00:00:00', '2020-09-29 07:21:22', '2020-09-29 07:21:36', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file87.docx', '2', '0', '0', null, '0', 'ssss', '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('86', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file88.docx', 'ODB118', '50', null, null, null, '2020-09-30 00:00:00', '2020-09-29 07:23:41', '2020-09-29 07:24:03', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file88.docx', '1', '0', '0', null, '0', null, '', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('87', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file89.docx', 'ODB119', null, null, null, null, '2020-09-30 00:00:00', '2020-09-29 07:25:33', '2020-09-29 07:26:02', null, 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file89.docx', '0', '0', '1', 'เอการของคุณโดน reject', '0', null, '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('88', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file90.docx', 'ODB120', null, null, null, null, '2020-09-30 00:00:00', '2020-09-29 07:26:33', '2020-09-29 07:27:14', null, 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file90.docx', '0', '0', '1', 'เอการของคุณโดน reject', '0', null, '', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('89', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file91.docx', 'ODB121', '90', '90', '0', null, '2020-09-30 00:00:00', '2020-09-29 07:27:45', '2020-09-29 07:28:01', '2020-11-28 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file91.docx', '1', '0', '0', null, '0', null, '', null, '1', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('90', 'A20200504', 'wut', 'wut.088english@gmail.com', 'And_When_Did_You_Last_See_Your_Father__Main_file92.docx', 'ODB122', '20', null, null, null, '2020-10-29 00:00:00', '2020-09-29 07:35:22', null, null, 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file92.docx', '1', '1', '0', null, '1', null, 'aaa', null, '1', null, '0', null, 'rewrite', '0', null, null, '0', null, '0', '0', '0', 'D', null, null, null, null, null, '0', '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('91', 'CM2009007', null, null, 'thai-lottery-01.jpg', 'ODB123', '20', '20', '0', null, '2020-10-04 00:00:00', '2020-09-30 14:42:44', '2020-09-30 16:32:49', '2020-11-29 00:00:00', 'uploads/Buy/thai-lottery-01.jpg', '1', '0', '0', null, '1', null, '', null, '1', null, '1', '0', 'notcomplete', '1', '0', '0', '0', null, '0', '0', '0', 'B', null, 'test by bus', null, '2020-12-04', '5', '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('92', 'CM2009007', null, null, 'photo-2.jpg', 'ODB123', '20', '20', '0', null, '2020-10-04 00:00:00', '2020-09-30 14:42:44', '2020-09-30 16:32:49', '2020-11-29 00:00:00', 'uploads/Buy/photo-2.jpg', '1', '0', '0', null, '1', null, '', null, '1', null, '1', '0', 'notcomplete', '1', '0', '0', '0', null, '0', '0', '0', 'B', null, 'test by bus', null, '2020-12-04', '5', '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('93', 'CM2009007', null, null, 'aw-rg+fx4-20p-bro-jun2020-Jun1.pdf', 'ODB123', '20', '20', '0', null, '2020-10-04 00:00:00', '2020-09-30 14:42:44', '2020-09-30 16:32:49', '2020-11-29 00:00:00', 'uploads/Buy/aw-rg+fx4-20p-bro-jun2020-Jun1.pdf', '1', '0', '0', null, '1', null, '', null, '1', null, '1', '0', 'notcomplete', '1', '0', '0', '0', null, '0', '0', '0', 'B', null, 'test by bus', null, '2020-12-04', '5', '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('94', 'CM2009005', null, null, 'Screenshot_2.png', 'ODB124', '20', null, null, null, '2020-10-14 00:00:00', '2020-09-30 17:14:00', '2020-09-30 17:14:22', '2020-11-29 00:00:00', 'uploads/Buy/Screenshot_2.png', '1', '0', '0', null, '0', null, 'More details.', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'C', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('95', 'CM2009005', null, null, 'Screenshot_3.png', 'ODB124', '20', null, null, null, '2020-10-14 00:00:00', '2020-09-30 17:14:00', '2020-09-30 17:14:22', '2020-11-29 00:00:00', 'uploads/Buy/Screenshot_3.png', '1', '0', '0', null, '0', null, 'More details.', null, '0', null, '0', '1', 'complete', '0', null, '0', '0', null, '0', '0', '1', 'C', null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('96', 'CM2009005', null, null, 'Screenshot_12.png', 'ODB125', '20', '20', '0', null, '2020-10-09 00:00:00', '2020-09-30 18:02:05', '2020-10-09 09:09:38', '2020-11-30 00:00:00', 'uploads/Buy/Screenshot_12.png', '1', '0', '0', null, '0', null, 'You can buy Document. ', null, '1', null, '0', '1', 'complete', '1', '0', '0', '0', null, '0', '0', '1', 'D', null, null, null, '2020-12-05', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('97', 'CM2009005', null, null, 'Screenshot_22.png', 'ODB125', '20', '20', '0', null, '2020-10-09 00:00:00', '2020-09-30 18:02:05', '2020-10-09 09:09:38', '2020-11-30 00:00:00', 'uploads/Buy/Screenshot_22.png', '1', '0', '0', null, '0', null, 'You can buy Document. ', null, '1', null, '0', '1', 'complete', '1', '0', '0', '0', null, '0', '0', '1', 'D', null, null, null, '2020-12-05', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('98', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file93.docx', 'ODB126', '25', '25', '0', null, '2020-10-10 00:00:00', '2020-09-30 18:54:29', '2020-09-30 22:24:16', '2020-11-29 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file93.docx', '1', '0', '0', null, '0', null, 'reference', null, '1', null, '0', '1', 'complete', '1', '0', '0', '0', null, '0', '0', '1', 'A', null, null, null, '2020-12-04', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('99', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file94.docx', 'ODB127', '10', '10', '0', null, '2020-10-10 00:00:00', '2020-09-30 22:10:33', '2020-09-30 22:15:51', '2020-11-29 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file94.docx', '1', '0', '0', null, '0', null, 'rework', null, '1', null, '1', '1', 'complete', '1', '0', '0', '0', null, '0', '0', '1', 'A', null, '', null, '2020-12-04', '5', '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('100', 'CM2009002', null, null, 'The_Lighthouse_More_file11.docx', 'ODB128', '30', '30', '0', null, '2020-10-10 00:00:00', '2020-09-30 22:30:35', '2020-10-05 11:32:53', '2020-11-29 00:00:00', 'uploads/Buy/The_Lighthouse_More_file11.docx', '2', '0', '0', null, '0', 'dddd', '', null, '1', null, '3', '1', null, '0', '0', '1', '0', null, '0', '0', '0', null, null, null, null, '2020-12-04', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('101', 'A20200504', 'TEST02', 'jame0925623256@gmail.com', 'Screenshot_1.png', 'ODB129', '10', null, null, null, '2020-10-11 00:00:00', '2020-10-01 20:05:08', '2020-10-01 20:22:40', null, 'uploads/Buy/Screenshot_1.png', '1', '1', '0', null, '1', null, 'Add_my_stock_admin Client', null, '1', null, '0', null, 'notcomplete', '0', null, null, '0', '2020-10-11', '3', '0', '0', 'D', null, null, null, null, null, '0', '0', '0', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('102', 'CM2009005', null, null, 'ACFrOgCWE1Wo747_EvAE9oS4bwwaUXD3vI0dsqDi_pWyZ7V9bfMatKQYjbjYGp2Tz6GXhKCL0Zl_LiSou5I9WamCpOGNjDuPv0zpUJQuTAnLWy01KuSct6loYlhwKi9khs_OtyxGUOTij_pR6s7N.pdf', 'ODB130', '500', null, null, null, '2020-10-03 00:00:00', '2020-10-02 18:47:38', '2020-10-02 18:47:44', '2020-12-01 00:00:00', 'uploads/Buy/ACFrOgCWE1Wo747_EvAE9oS4bwwaUXD3vI0dsqDi_pWyZ7V9bfMatKQYjbjYGp2Tz6GXhKCL0Zl_LiSou5I9WamCpOGNjDuPv0zpUJQuTAnLWy01KuSct6loYlhwKi9khs_OtyxGUOTij_pR6s7N.pdf', '2', '0', '0', null, '0', '5565', 'sdsd', null, '0', null, '0', '1', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('103', 'CM2009001', null, null, 'Screenshot_31.png', 'ODB131', '10', '10', '0', null, '2020-10-09 00:00:00', '2020-10-05 20:29:54', '2020-10-05 20:30:47', '2020-12-04 00:00:00', 'uploads/Buy/Screenshot_31.png', '2', '0', '0', null, '1', 'Not Satisfired (ODB131)', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '1', null, '0', '1', null, '0', null, '1', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('104', 'CM2009001', null, null, '1.jpg', 'ODB132', '20', '20', '0', null, '2020-10-10 00:00:00', '2020-10-06 10:33:17', '2020-10-06 14:24:17', '2020-12-05 00:00:00', 'uploads/Buy/1.jpg', '2', '0', '0', null, '0', '', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)(ODB132)', null, '1', null, '3', '0', null, '0', '0', '1', '0', null, '0', '0', '0', null, '10', null, '2021-04-05', '2020-12-10', null, '1', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('105', 'CM2009001', null, null, 'photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖6.jpg', 'ODB132', '20', '20', '0', null, '2020-10-10 00:00:00', '2020-10-06 10:33:17', '2020-10-06 14:24:17', '2020-12-05 00:00:00', 'uploads/Buy/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖6.jpg', '2', '0', '0', null, '0', '', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)(ODB132)', null, '1', null, '3', '0', null, '0', '0', '1', '0', null, '0', '0', '0', null, '10', null, '2021-04-05', '2020-12-10', null, '1', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('106', 'CM2009001', null, null, 'Finalist_Report_project(ใหม่)2.docx', 'ODB133', '30', '30', '0', null, '2020-10-15 00:00:00', '2020-10-06 10:34:05', '2020-10-06 10:42:21', '2020-12-05 00:00:00', 'uploads/Buy/Finalist_Report_project(ใหม่)2.docx', '2', '0', '0', null, '0', '', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี) (ODB133)\r\n', null, '1', null, '0', '1', null, '0', null, '1', '0', '2020-10-11', '3', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('107', 'CM2009001', null, null, '12.jpg', 'ODN134', '30', '30', '0', null, '2020-10-10 00:00:00', '2020-10-06 11:10:54', '2020-10-08 12:08:45', '2020-12-05 00:00:00', 'uploads/Buy/12.jpg', '2', '0', '0', null, '0', 'Not Satisfired (ODN134)\r\n', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี) ', null, '1', null, '3', '0', null, '0', '0', '1', '0', null, '0', '0', '0', null, null, null, '2021-04-04', '2020-12-10', null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('108', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file95.docx', 'ODB135', '20', '20', '0', null, '2020-10-10 00:00:00', '2020-10-06 14:21:52', '2020-10-06 16:25:30', '2020-12-05 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file95.docx', '2', '0', '0', null, '1', 'ff', 'rrrr', null, '1', null, '5', '1', null, '1', '1', '1', '0', null, '0', '0', '0', null, null, null, '2021-04-04', '2020-12-10', null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('109', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file96.docx', 'ODN136', '40', '40', '0', null, '2020-10-10 00:00:00', '2020-10-06 17:30:08', '2020-10-06 17:48:30', '2020-12-05 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file96.docx', '1', '0', '0', null, '1', null, 'Hello', null, '1', null, '1', '1', 'rewrite', '1', '1', '0', '0', null, '0', '0', '0', 'A', null, 'จัดรูปแบบไม่เรียบร้อย', '2021-04-04', '2020-12-10', '1', '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('110', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file97.docx', 'ODN137', '50', null, null, null, '2020-10-15 00:00:00', '2020-10-07 08:05:52', '2020-10-07 08:06:36', '2020-12-06 00:00:00', 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file97.docx', '1', '0', '0', null, '0', null, 'check plagiarism please', null, '0', null, '0', '1', 'rewrite', '0', null, '0', '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('111', 'CM2009001', null, null, 'messageImage_1575003698384.jpg', 'ODN138', null, null, null, null, '2020-10-10 00:00:00', '2020-10-07 10:18:27', '2020-10-07 10:18:24', null, 'uploads/Buy/messageImage_1575003698384.jpg', '0', '0', '0', null, '0', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('112', 'CM2009001', null, null, 'InkedmessageImage_1575004181330_LI.jpg', 'ODN138', null, null, null, null, '2020-10-10 00:00:00', '2020-10-07 10:18:27', '2020-10-07 10:18:24', null, 'uploads/Buy/InkedmessageImage_1575004181330_LI.jpg', '0', '0', '0', null, '0', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('113', 'A20200504', 'Nattaphon Kiattikul', 'jame0925623256@gmail.com', '11.png', 'ODN139', '100', null, null, null, '2020-10-30 00:00:00', '2020-10-08 12:05:02', null, null, 'uploads/Buy/11.png', '1', '1', '0', null, '1', null, 'Note Client', null, '1', null, '4', null, 'notcomplete', '0', null, null, '0', null, '0', '0', '0', 'A', null, null, null, null, null, '0', '0', '0', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('114', 'CM2009001', null, null, 'banner02.png', 'ODN140', '15', null, null, null, '2020-10-15 00:00:00', '2020-10-09 15:40:36', '2020-10-09 15:50:19', '2020-12-08 00:00:00', 'uploads/Buy/banner02.png', '2', '0', '0', null, '0', 'Not Satisfired (ODN140)\r\n', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '0', null, '0', '0', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('115', 'CM2009001', null, null, 'home-bg.png', 'ODN140', '15', null, null, null, '2020-10-15 00:00:00', '2020-10-09 15:40:36', '2020-10-09 15:50:19', '2020-12-08 00:00:00', 'uploads/Buy/home-bg.png', '2', '0', '0', null, '0', 'Not Satisfired (ODN140)\r\n', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '0', null, '0', '0', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('116', 'CM2009001', null, null, '342387-PA9PVN-610.jpg', 'ODN142', '10', null, null, null, '2020-10-17 00:00:00', '2020-10-09 15:41:07', '2020-10-09 15:50:32', '2020-12-08 00:00:00', 'uploads/Buy/342387-PA9PVN-610.jpg', '2', '0', '0', null, '0', 'Not Satisfired (ODN142)\r\n', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '0', null, '0', '0', null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('117', 'CM2009001', null, null, 'home-bg1.png', 'ODN143', '30', '30', '0', null, '2020-10-16 00:00:00', '2020-10-09 16:12:31', '2020-10-09 17:43:52', '2020-12-08 00:00:00', 'uploads/Buy/home-bg1.png', '2', '0', '0', null, '1', 'Not Satisfired (ODN143)', 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี) ', null, '1', null, '0', '0', null, '0', null, '1', '0', '2020-10-10', '1', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('118', 'CM2009001', null, null, '4367764.jpg', 'ODN145', '25', '25', '0', null, '2020-10-22 00:00:00', '2020-10-09 16:12:58', '2020-10-09 16:13:27', '2020-12-08 00:00:00', 'uploads/Buy/4367764.jpg', '2', '0', '0', null, '0', 'Not Satisfired (ODN145)\r\n', 'กรุณาตรวจสอบไฟล์ของท่านเพื่อให้แน่ใจว่าไฟล์ทั้งหมดคืองานเดียวกัน', null, '1', null, '0', '0', null, '0', null, '1', '0', '2020-10-11', '2', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('119', 'CM2009001', null, null, 'IMG_41772.JPG', 'ODN146', null, null, null, null, '2020-10-11 00:00:00', '2020-10-10 21:57:32', '2020-10-10 21:57:29', null, 'uploads/Buy/IMG_41772.JPG', '0', '0', '0', null, '0', null, '', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('120', 'CM2009001', null, null, 'IMG_41751.JPG', 'ODN147', null, null, null, null, '2020-10-11 00:00:00', '2020-10-10 21:58:20', '2020-10-10 21:58:18', null, 'uploads/Buy/IMG_41751.JPG', '0', '0', '0', null, '0', null, '', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');
INSERT INTO `tbl_upload_order` VALUES ('121', 'CM2009001', null, null, 'IMG_4179.JPG', 'ODN148', null, null, null, null, '2020-10-14 00:00:00', '2020-10-10 22:04:32', '2020-10-10 22:04:30', null, 'uploads/Buy/IMG_4179.JPG', '0', '0', '0', null, '0', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('122', 'CM2009001', null, null, 'IMG_41773.JPG', 'ODN148', null, null, null, null, '2020-10-14 00:00:00', '2020-10-10 22:04:32', '2020-10-10 22:04:30', null, 'uploads/Buy/IMG_41773.JPG', '0', '0', '0', null, '0', null, 'ระบุรายละเอียดเพิ่มเติม (ถ้ามี)', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '1');
INSERT INTO `tbl_upload_order` VALUES ('123', 'CM2009002', null, null, 'And_When_Did_You_Last_See_Your_Father__Main_file98.docx', 'ODN149', null, null, null, null, '2020-10-12 00:00:00', '2020-10-11 13:49:52', '2020-10-11 13:49:49', null, 'uploads/Buy/And_When_Did_You_Last_See_Your_Father__Main_file98.docx', '0', '0', '0', null, '0', null, '', null, '0', null, '0', null, null, '0', null, '0', '0', null, '0', '0', '0', null, null, null, null, null, null, '0', '0', '1', '0', '0', '2');

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
  `check_new` int(2) DEFAULT '1' COMMENT '0 = ไฟล์เก่า / 1 = ไฟล์ที่พึ่งเข้ามาใหม่',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_order_team
-- ----------------------------
INSERT INTO `tbl_upload_order_team` VALUES ('1', '2', 'TM2009002', 'Moving_On_Delivery26.docx', 'ODB62', '2020-09-20 14:03:17', null, 'uploads/Team/Moving_On_Delivery26.docx', null, '0', '0', '0', '0', null, '0');
INSERT INTO `tbl_upload_order_team` VALUES ('2', '2', 'TM2009002', 'Moving_On_Delivery27.docx', 'ODB68', '2020-09-20 16:10:23', null, 'uploads/Team/Moving_On_Delivery27.docx', null, '0', '0', '0', '0', '1', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('3', '3', 'TM2009002', 'Moving_On_Delivery28.docx', 'ODB67', '2020-09-20 16:14:03', null, 'uploads/Team/Moving_On_Delivery28.docx', null, '0', '0', '0', '0', '1', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('4', '4', 'TM2009002', 'Find_Me_GT_file.docx', 'ODB62', '2020-09-20 16:40:00', null, 'uploads/Team/Find_Me_GT_file.docx', null, '0', '0', '0', '0', '1', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('5', '4', 'TM2009002', 'The_Lighthouse_More_file1.docx', 'ODB62', '2020-09-20 16:43:52', null, 'uploads/Team/The_Lighthouse_More_file1.docx', null, '0', '0', '0', '0', '1', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('6', '9', 'TM2009002', 'Moving_On_Delivery29.docx', 'ODB69', '2020-09-20 18:22:12', null, 'uploads/Team/Moving_On_Delivery29.docx', null, '0', '0', '0', '0', '1', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('7', '10', 'TM2009002', 'Shards_of_Glass_Feedback_client.docx', 'ODB74', '2020-09-20 21:35:08', null, 'uploads/Team/Shards_of_Glass_Feedback_client.docx', null, '0', '0', '0', '0', '2', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('8', '10', 'TM2009002', 'Moving_On_Delivery30.docx', 'ODB74', '2020-09-20 21:35:08', null, 'uploads/Team/Moving_On_Delivery30.docx', null, '0', '0', '0', '0', '2', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('9', null, 'TM2009002', 'Shards_of_Glass_Feedback_client1.docx', 'ODB74', '2020-09-20 21:54:52', null, 'uploads/Team/Shards_of_Glass_Feedback_client1.docx', null, '0', '0', '0', '1', null, '0');
INSERT INTO `tbl_upload_order_team` VALUES ('10', '10', 'TM2009002', 'Moving_On_Delivery31.docx', 'ODB74', '2020-09-20 22:42:34', null, 'uploads/Team/Moving_On_Delivery31.docx', null, '0', '0', '0', '0', '2', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('11', '10', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN1.docx', 'ODB74', '2020-09-20 22:58:28', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN1.docx', null, '0', '0', '0', '0', '2', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('12', '11', 'TM2009001', 'บัตรสมาชิก.pdf', 'ODB76', '2020-09-21 11:04:00', null, 'uploads/Team/บัตรสมาชิก.pdf', null, '0', '0', '0', '0', '3', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('13', '11', 'TM2009001', 'test-Donut.pdf', 'ODB76', '2020-09-21 13:48:10', null, 'uploads/Team/test-Donut.pdf', null, '0', '0', '0', '0', '3', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('14', '15', 'TM2009001', 'test-Donut1.pdf', 'ODB78', '2020-09-21 13:49:08', null, 'uploads/Team/test-Donut1.pdf', null, '0', '0', '0', '0', '3', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('15', '14', 'TM2009001', 'Checklist_Programmer_20-09-20.xlsx', 'ODB74', '2020-09-21 16:16:54', null, 'uploads/Team/Checklist_Programmer_20-09-20.xlsx', null, '0', '0', '0', '0', '3', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('16', '14', 'TM2009001', 'messageImage_1600504324765.jpg', 'ODB74', '2020-09-21 16:16:56', null, 'uploads/Team/messageImage_1600504324765.jpg', null, '0', '0', '0', '0', '4', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('17', '14', 'TM2009001', 'company_profile.pdf', 'ODB74', '2020-09-21 16:17:00', null, 'uploads/Team/company_profile.pdf', null, '0', '0', '0', '0', '4', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('18', '14', 'TM2009001', 'Programmer_แก้ไข_200920.docx', 'ODB74', '2020-09-21 16:17:01', null, 'uploads/Team/Programmer_แก้ไข_200920.docx', null, '0', '0', '0', '0', '3', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('19', '16', 'TM2009001', 'messageImage_16005043247651.jpg', 'ODB79', '2020-09-21 16:24:18', null, 'uploads/Team/messageImage_16005043247651.jpg', null, '0', '0', '0', '0', '4', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('20', '16', 'TM2009001', 'Checklist_Programmer_20-09-201.xlsx', 'ODB79', '2020-09-21 16:24:18', null, 'uploads/Team/Checklist_Programmer_20-09-201.xlsx', null, '0', '0', '0', '0', '3', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('21', '16', 'TM2009001', 'company_profile1.pdf', 'ODB79', '2020-09-21 16:24:20', null, 'uploads/Team/company_profile1.pdf', null, '0', '0', '0', '0', '4', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('22', '16', 'TM2009001', 'Programmer_แก้ไข_2009201.docx', 'ODB79', '2020-09-21 16:24:23', null, 'uploads/Team/Programmer_แก้ไข_2009201.docx', null, '0', '0', '0', '0', '3', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('23', '26', 'TM2009001', '23963_200923.jpg', 'ODB77', '2020-09-24 08:11:22', null, 'uploads/Team/23963_200923.jpg', null, '0', '0', '0', '0', '5', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('24', '26', 'TM2009001', '3.png', 'ODB77', '2020-09-24 08:11:26', null, 'uploads/Team/3.png', null, '0', '0', '0', '0', '5', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('25', '26', 'TM2009001', '011.png', 'ODB77', '2020-09-24 08:11:26', null, 'uploads/Team/011.png', null, '0', '0', '0', '0', '6', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('26', '27', 'TM2009002', 'And_When_Did_You_Last_See_Your_Father__Main_file1.docx', 'ODB66', '2020-09-24 11:39:33', null, 'uploads/Team/And_When_Did_You_Last_See_Your_Father__Main_file1.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('27', '28', 'TM2009002', 'And_When_Did_You_Last_See_Your_Father__Main_file2.docx', 'ODB87', '2020-09-24 12:34:10', null, 'uploads/Team/And_When_Did_You_Last_See_Your_Father__Main_file2.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('28', '29', 'TM2009002', 'Moving_On_Delivery32.docx', 'ODB88', '2020-09-24 16:54:59', null, 'uploads/Team/Moving_On_Delivery32.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('29', '30', 'TM2009001', '23963_200923_1.jpg', 'ODB89', '2020-09-24 18:14:33', null, 'uploads/Team/23963_200923_1.jpg', null, '0', '0', '0', '0', '6', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('30', '30', 'TM2009001', '23963_2009231.jpg', 'ODB89', '2020-09-24 18:14:33', null, 'uploads/Team/23963_2009231.jpg', null, '0', '0', '0', '0', '5', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('31', '31', 'TM2009002', 'Find_Me_GT_file.docx', 'ODB90', '2020-09-24 18:19:47', null, 'uploads/Team/Find_Me_GT_file.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('32', '29', 'TM2009002', 'Moving_On_Delivery33.docx', 'ODB88', '2020-09-24 18:36:18', null, 'uploads/Team/Moving_On_Delivery33.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('33', '32', 'TM2009002', 'The_Dream_Asylum_Rewrite.docx', 'ODB92', '2020-09-24 18:36:55', null, 'uploads/Team/The_Dream_Asylum_Rewrite.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('34', '33', 'TM2009002', 'The_Lighthouse_More_file2.docx', 'ODB93', '2020-09-24 18:41:08', null, 'uploads/Team/The_Lighthouse_More_file2.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('35', '34', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN2.docx', 'ODB94', '2020-09-24 18:54:12', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN2.docx', null, '0', '0', '0', '0', '8', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('36', '35', 'TM2009002', 'Shards_of_Glass_Feedback_client2.docx', 'ODB95', '2020-09-24 19:12:46', null, 'uploads/Team/Shards_of_Glass_Feedback_client2.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('37', '35', 'TM2009002', 'The_Dream_Asylum_Rewrite1.docx', 'ODB95', '2020-09-24 19:12:46', null, 'uploads/Team/The_Dream_Asylum_Rewrite1.docx', null, '0', '0', '0', '0', '8', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('38', '36', 'TM2009002', 'Shards_of_Glass_Feedback_client3.docx', 'ODB96', '2020-09-24 19:25:05', null, 'uploads/Team/Shards_of_Glass_Feedback_client3.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('39', '36', 'TM2009002', 'White__Sell_31.docx', 'ODB96', '2020-09-24 19:25:05', null, 'uploads/Team/White__Sell_31.docx', null, '0', '0', '0', '0', '8', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('40', '36', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN3.docx', 'ODB96', '2020-09-24 19:33:00', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN3.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('41', '37', 'TM2009001', '23963_200923_0.jpg', 'ODB98', '2020-09-24 20:20:27', null, 'uploads/Team/23963_200923_0.jpg', null, '0', '0', '0', '0', '9', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('42', '37', 'TM2009001', '23963_200923_11.jpg', 'ODB98', '2020-09-24 20:20:27', null, 'uploads/Team/23963_200923_11.jpg', null, '0', '0', '0', '0', '9', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('43', '38', 'TM2009002', 'Night_Terrors_in_Cairo_FEEDBACK_ADMIN4.docx', 'ODB99', '2020-09-25 12:51:04', null, 'uploads/Team/Night_Terrors_in_Cairo_FEEDBACK_ADMIN4.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('44', '38', 'TM2009002', 'Moving_On_Delivery34.docx', 'ODB99', '2020-09-25 12:53:42', null, 'uploads/Team/Moving_On_Delivery34.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('45', '38', 'TM2009002', 'White_Lies_Sell_24.docx', 'ODB99', '2020-09-25 14:46:46', null, 'uploads/Team/White_Lies_Sell_24.docx', null, '0', '0', '0', '0', '8', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('46', '38', 'TM2009002', 'White__Sell_32.docx', 'ODB99', '2020-09-25 14:46:46', null, 'uploads/Team/White__Sell_32.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('47', '38', 'TM2009002', 'The_Dream_Asylum_Rewrite2.docx', 'ODB99', '2020-09-25 15:10:14', null, 'uploads/Team/The_Dream_Asylum_Rewrite2.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('48', '38', 'TM2009002', 'The_Lighthouse_More_file11.docx', 'ODB99', '2020-09-25 15:23:36', null, 'uploads/Team/The_Lighthouse_More_file11.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('49', '38', 'TM2009002', 'The_Lighthouse_More_file12.docx', 'ODB99', '2020-09-25 16:26:14', null, 'uploads/Team/The_Lighthouse_More_file12.docx', null, '0', '0', '0', '0', '7', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('50', '25', 'TM2009001', 'Finalist_Report_project.docx', 'ODB84', '2020-09-26 11:48:58', null, 'uploads/Team/Finalist_Report_project.docx', null, '0', '0', '0', '0', '11', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('51', '25', 'TM2009001', '2018-07-30-08-21-44.jpg', 'ODB84', '2020-09-26 11:49:06', null, 'uploads/Team/2018-07-30-08-21-44.jpg', null, '0', '0', '0', '0', '10', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('52', '25', 'TM2009001', 'LINE_P25630805_160042399.png', 'ODB84', '2020-09-26 21:37:05', null, 'uploads/Team/LINE_P25630805_160042399.png', null, '0', '0', '0', '0', '12', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('53', '25', 'TM2009001', 'Programmer_แก้ไข_25-09-20.docx', 'ODB84', '2020-09-26 21:37:06', null, 'uploads/Team/Programmer_แก้ไข_25-09-20.docx', null, '0', '0', '0', '0', '13', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('54', '25', 'TM2009001', 'Data_input.docx', 'ODB84', '2020-09-26 21:40:59', null, 'uploads/Team/Data_input.docx', null, '0', '0', '0', '0', '15', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('55', '25', 'TM2009001', 'slide_lanna_0.jpg', 'ODB84', '2020-09-26 21:41:00', null, 'uploads/Team/slide_lanna_0.jpg', null, '0', '0', '0', '0', '14', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('56', '30', 'TM2009001', 'Programmer_แก้ไข_2009202.docx', 'ODB89', '2020-09-26 21:42:19', null, 'uploads/Team/Programmer_แก้ไข_2009202.docx', null, '0', '0', '0', '0', '16', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('57', '25', 'TM2009001', 'Data_input1.docx', 'ODB84', '2020-09-26 21:42:57', null, 'uploads/Team/Data_input1.docx', null, '0', '0', '0', '0', '16', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('58', null, '', '', '', null, null, null, null, '0', '0', '0', '0', null, '0');
INSERT INTO `tbl_upload_order_team` VALUES ('59', '26', 'TM2009001', 'Screenshot_1.png', 'ODB77', '2020-09-28 16:39:51', null, 'uploads/Team/Screenshot_1.png', null, '0', '0', '0', '0', '18', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('60', '26', 'TM2009001', 'Screenshot_3.png', 'ODB77', '2020-09-28 16:39:52', null, 'uploads/Team/Screenshot_3.png', null, '0', '0', '0', '0', '17', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('61', '25', 'TM2009001', 'Screenshot_1.png', 'ODB84', '2020-09-28 20:01:39', null, 'uploads/Team/Screenshot_1.png', null, '0', '0', '0', '0', '17', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('62', '25', 'TM2009001', 'Screenshot_2.png', 'ODB84', '2020-09-28 20:01:39', null, 'uploads/Team/Screenshot_2.png', null, '0', '0', '0', '0', '17', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('63', '44', 'TM2009001', 'Screenshot_11.png', 'ODB110', '2020-09-28 20:23:04', null, 'uploads/Team/Screenshot_11.png', null, '0', '0', '0', '0', '19', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('64', '44', 'TM2009001', 'Screenshot_21.png', 'ODB110', '2020-09-28 20:23:05', null, 'uploads/Team/Screenshot_21.png', null, '0', '0', '0', '0', '20', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('65', '44', 'TM2009001', 'Screenshot_22.png', 'ODB110', '2020-09-28 20:23:05', null, 'uploads/Team/Screenshot_22.png', null, '0', '0', '0', '0', '19', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('66', '44', 'TM2009001', 'Screenshot_3.png', 'ODB110', '2020-09-28 20:23:05', null, 'uploads/Team/Screenshot_3.png', null, '0', '0', '0', '0', '20', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('67', '45', 'TM2009002', 'The_Dream_Asylum_Rewrite3.docx', 'ODB122', '2020-09-29 07:41:58', null, 'uploads/Team/The_Dream_Asylum_Rewrite3.docx', null, '0', '0', '0', '0', '7', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('68', '45', 'TM2009002', 'Moving_On_Delivery35.docx', 'ODB122', '2020-09-29 07:41:59', null, 'uploads/Team/Moving_On_Delivery35.docx', null, '0', '0', '0', '0', '7', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('69', '46', 'TM2009004', 'รายการแก้ไขเว็บไซต์ของลานนาคำสปา_3.docx', 'ODB123', '2020-09-30 15:10:46', null, 'uploads/Team/รายการแก้ไขเว็บไซต์ของลานนาคำสปา_3.docx', null, '0', '0', '0', '0', '21', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('70', '46', 'TM2009004', 'รายการแก้ไขเว็บไซต์ของโรงเรียนเชียงใหม่(1).docx', 'ODB123', '2020-09-30 15:10:46', null, 'uploads/Team/รายการแก้ไขเว็บไซต์ของโรงเรียนเชียงใหม่(1).docx', null, '0', '0', '0', '0', '21', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('71', '46', 'TM2009004', 'screencapture-ip-soft-co-th-lanna-come-spa-checkout-2020-09-29-13_30_30.png', 'ODB123', '2020-09-30 16:16:04', null, 'uploads/Team/screencapture-ip-soft-co-th-lanna-come-spa-checkout-2020-09-29-13_30_30.png', null, '0', '0', '0', '0', '22', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('72', '46', 'TM2009004', 'screencapture-cmspaschool-2020-09-29-10_45_18.png', 'ODB123', '2020-09-30 16:16:05', null, 'uploads/Team/screencapture-cmspaschool-2020-09-29-10_45_18.png', null, '0', '0', '0', '0', '22', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('73', '46', 'TM2009004', 'screencapture-cmspaschool-2020-09-29-10_35_42.png', 'ODB123', '2020-09-30 16:16:05', null, 'uploads/Team/screencapture-cmspaschool-2020-09-29-10_35_42.png', null, '0', '0', '0', '0', '22', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('74', '48', 'TM2009002', 'Moving_On_Delivery36.docx', 'ODB128', '2020-09-30 22:34:14', null, 'uploads/Team/Moving_On_Delivery36.docx', null, '0', '0', '0', '0', '7', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('75', '48', 'TM2009002', 'The_Dream_Asylum_Rewrite4.docx', 'ODB128', '2020-09-30 22:38:54', null, 'uploads/Team/The_Dream_Asylum_Rewrite4.docx', null, '0', '0', '0', '0', '23', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('76', '55', 'TM2009001', '20190919042454_pic_square_th_.jpg', 'ODB132', '2020-10-06 11:37:26', '2020-10-07 15:19:40', 'uploads/Team/20190919042454_pic_square_th_.jpg', null, '0', '0', '0', '0', '25', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('77', '55', 'TM2009001', '9786167897561l.jpg', 'ODB132', '2020-10-06 11:37:26', '2020-10-07 15:19:40', 'uploads/Team/9786167897561l.jpg', null, '0', '0', '0', '0', '24', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('78', '55', 'TM2009001', '20190919042454_pic_square_th_1.jpg', 'ODB132', '2020-10-06 11:37:27', '2020-10-07 15:19:40', 'uploads/Team/20190919042454_pic_square_th_1.jpg', null, '0', '0', '0', '0', '24', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('79', '55', 'TM2009001', 'เงื่อนไข_ทีมงาน_Programmer.docx', 'ODB132', '2020-10-06 14:23:40', '2020-10-07 15:19:40', 'uploads/Team/เงื่อนไข_ทีมงาน_Programmer.docx', null, '0', '0', '0', '0', '26', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('80', '55', 'TM2009001', 'เงื่อนไข_ลูกค้า_Programmer.docx', 'ODB132', '2020-10-06 14:23:40', '2020-10-07 15:19:40', 'uploads/Team/เงื่อนไข_ลูกค้า_Programmer.docx', null, '0', '0', '0', '0', '26', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('81', '57', 'TM2009002', 'Moving_On_Delivery37.docx', 'ODB135', '2020-10-06 14:30:35', null, 'uploads/Team/Moving_On_Delivery37.docx', null, '0', '0', '0', '0', '23', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('82', '54', 'TM2009001', '11.png', 'ODN134', '2020-10-06 16:24:58', null, 'uploads/Team/11.png', null, '0', '0', '0', '0', '27', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('83', '54', 'TM2009001', '3.png', 'ODN134', '2020-10-06 16:24:58', null, 'uploads/Team/3.png', null, '0', '0', '0', '0', '27', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('84', '58', 'TM2009002', 'White_Lies_Sell_25.docx', 'ODN136', '2020-10-06 17:35:57', '2020-10-06 17:42:34', 'uploads/Team/White_Lies_Sell_25.docx', null, '0', '0', '0', '0', '23', '0');
INSERT INTO `tbl_upload_order_team` VALUES ('85', '58', 'TM2009002', 'White__Sell_33.docx', 'ODN136', '2020-10-06 17:46:34', null, 'uploads/Team/White__Sell_33.docx', null, '0', '0', '0', '0', '23', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('86', '60', 'TM2009001', 'photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', 'ODB132', '2020-10-08 12:06:39', null, 'uploads/Team/photo_๒๐๑๙-๑๑-๑๒_๐๙-๐๖-๔๖.jpg', null, '0', '0', '0', '0', '28', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('87', '52', 'TM2009001', 'ต้องการขาย.docx', 'ODB86', '2020-10-08 12:07:29', null, 'uploads/Team/ต้องการขาย.docx', null, '0', '0', '0', '0', '30', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('88', '24', 'TM2009001', 'Dashboard_Draft.xlsx', 'ODB85', '2020-10-08 12:07:56', null, 'uploads/Team/Dashboard_Draft.xlsx', null, '0', '0', '0', '0', '31', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('89', '40', 'TM2009001', 'ต้องการขาย-0.docx', 'ODB100', '2020-10-08 12:08:18', null, 'uploads/Team/ต้องการขาย-0.docx', null, '0', '0', '0', '0', '32', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('90', '62', 'TM2009001', 'ข้อความหน้าแรก_ทีมงาน.docx', 'ODN139', '2020-10-08 12:10:32', null, 'uploads/Team/ข้อความหน้าแรก_ทีมงาน.docx', null, '0', '0', '0', '0', '33', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('91', '62', 'TM2009001', 'ข้อความหน้าแรก_ลูกค้า.docx', 'ODN139', '2020-10-08 12:10:32', null, 'uploads/Team/ข้อความหน้าแรก_ลูกค้า.docx', null, '0', '0', '0', '0', '33', '1');
INSERT INTO `tbl_upload_order_team` VALUES ('92', '53', 'TM2009002', 'And_When_Did_You_Last_See_Your_Father__Main_file3.docx', 'ODB131', '2020-10-08 16:38:25', null, 'uploads/Team/And_When_Did_You_Last_See_Your_Father__Main_file3.docx', null, '0', '0', '0', '0', '35', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

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
INSERT INTO `tbl_upload_orderGT` VALUES ('38', '61', 'ODB109', 'คุณณัฎชพล.docx', 'uploads/Buy/GT/คุณณัฎชพล.docx', '0', '2020-09-28 19:06:57', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('39', '61', 'ODB109', 'Screenshot_2.png', 'uploads/Buy/GT/Screenshot_2.png', '0', '2020-09-28 19:06:57', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('40', '61', 'ODB109', 'Screenshot_3.png', 'uploads/Buy/GT/Screenshot_3.png', '0', '2020-09-28 19:06:59', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('41', '62', 'ODB110', 'Screenshot_21.png', 'uploads/Buy/GT/Screenshot_21.png', '0', '2020-09-28 19:11:27', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('42', '62', 'ODB110', 'Screenshot_1.png', 'uploads/Buy/GT/Screenshot_1.png', '0', '2020-09-28 19:11:27', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('43', '63', 'ODB111', 'Find_Me_GT_file20.docx', 'uploads/Buy/GT/Find_Me_GT_file20.docx', '0', '2020-09-29 07:07:57', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('44', '64', 'ODB112', 'Find_Me_GT_file21.docx', 'uploads/Buy/GT/Find_Me_GT_file21.docx', '0', '2020-09-29 07:15:50', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('45', '65', 'ODB113', 'And_When_Did_You_Last_See_Your_Father__Main_file1.docx', 'uploads/Buy/GT/And_When_Did_You_Last_See_Your_Father__Main_file1.docx', '0', '2020-09-29 07:17:06', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('46', '74', 'ODB122', 'Umbrella_Sell_12.docx', 'uploads/Buy/GT/Umbrella_Sell_12.docx', '0', '2020-09-29 07:39:10', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('47', '75', 'ODB123', 'eden-hazard-real-madrid_1j7r7a4hcquh51a5l7r0k5f2vi.jpg', 'uploads/Buy/GT/eden-hazard-real-madrid_1j7r7a4hcquh51a5l7r0k5f2vi.jpg', '0', '2020-09-30 14:42:40', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('48', '75', 'ODB123', 'GettyImages-1165426527.jpg', 'uploads/Buy/GT/GettyImages-1165426527.jpg', '0', '2020-09-30 14:42:40', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('49', '75', 'ODB123', 'QR.jpg', 'uploads/Buy/GT/QR.jpg', '0', '2020-09-30 14:42:40', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('50', '77', 'ODB125', 'Screenshot_22.png', 'uploads/Buy/GT/Screenshot_22.png', '0', '2020-09-30 18:02:03', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('51', '78', 'ODB125', 'Screenshot_11.png', 'uploads/Buy/GT/Screenshot_11.png', '0', '2020-09-30 18:20:19', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('52', '78', 'ODB125', 'Screenshot_23.png', 'uploads/Buy/GT/Screenshot_23.png', '0', '2020-09-30 18:20:19', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('53', '78', 'ODB125', 'กสิกร.png', 'uploads/Buy/GT/กสิกร.png', '0', '2020-09-30 18:20:19', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('54', '80', 'ODB127', 'Find_Me_GT_file22.docx', 'uploads/Buy/GT/Find_Me_GT_file22.docx', '0', '2020-09-30 22:10:31', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('55', '83', 'ODB130', 'flash_sale_2.pdf', 'uploads/Buy/GT/flash_sale_2.pdf', '0', '2020-10-02 18:47:37', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('56', '85', 'ODB132', 'InkedmessageImage_1575003698384_LI.jpg', 'uploads/Buy/GT/InkedmessageImage_1575003698384_LI.jpg', '0', '2020-10-06 10:33:15', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('57', '85', 'ODB132', 'InkedmessageImage_1575004181330_LI.jpg', 'uploads/Buy/GT/InkedmessageImage_1575004181330_LI.jpg', '0', '2020-10-06 10:33:15', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('58', '86', 'ODB133', 'ข้อความหน้าแรก_ทีมงาน.docx', 'uploads/Buy/GT/ข้อความหน้าแรก_ทีมงาน.docx', '0', '2020-10-06 10:34:04', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('59', '90', 'ODN137', 'Find_Me_GT_file23.docx', 'uploads/Buy/GT/Find_Me_GT_file23.docx', '0', '2020-10-07 08:05:50', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('60', '92', 'ODN139', 'messageImage_1575003698384.jpg', 'uploads/Buy/GT/messageImage_1575003698384.jpg', '0', '2020-10-08 12:05:02', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('61', '93', 'ODN140', 'home-bg.png', 'uploads/Buy/GT/home-bg.png', '0', '2020-10-09 15:40:35', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('62', '96', 'ODN143', 'home-bgback.png', 'uploads/Buy/GT/home-bgback.png', '0', '2020-10-09 16:10:51', null);
INSERT INTO `tbl_upload_orderGT` VALUES ('63', '101', 'ODN148', 'IMG_41772.JPG', 'uploads/Buy/GT/IMG_41772.JPG', '0', '2020-10-10 22:04:30', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

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
INSERT INTO `tbl_upload_store` VALUES ('62', 'CM2009002', 'ODS20', 'Umbrella_Sell_135.docx', '0', '2020-10-07 12:26:36', null, 'uploads/Store/Umbrella_Sell_135.docx', null, '', null, null, '0', '0', '', '0', '0', '0', null, '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('63', 'CM2009002', 'ODS20', 'The_Lighthouse_More_file11.docx', '0', '2020-10-07 12:26:36', null, 'uploads/Store/The_Lighthouse_More_file11.docx', null, '', null, null, '0', '0', '', '0', '0', '0', null, '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('64', 'CM2009002', 'ODS20', 'White_Lies_Sell_226.docx', '0', '2020-10-07 12:26:36', null, 'uploads/Store/White_Lies_Sell_226.docx', null, '', null, null, '0', '0', '', '0', '0', '0', null, '0', '0', null);
INSERT INTO `tbl_upload_store` VALUES ('65', 'CM2009002', 'ODS20', 'White__Sell_319.docx', '0', '2020-10-07 12:26:36', null, 'uploads/Store/White__Sell_319.docx', null, '', null, null, '0', '0', '', '0', '0', '0', null, '0', '0', null);

-- ----------------------------
-- Table structure for `tbl_upload_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_team`;
CREATE TABLE `tbl_upload_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `position` int(11) DEFAULT NULL,
  `wage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `wage_thai` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ค่าจ้างแบบไทย',
  `note` text CHARACTER SET utf8,
  `status` varchar(255) CHARACTER SET utf8 DEFAULT '0' COMMENT 'status เช็ค my task  0 = Processing  / 1 = Complete / 2 = Feedback / 3 = Re Feedback / 4 = Not complete / 5 = กรณีที่โดน re feedback และกำลังรอ admin เช็ค derilery ให้ลูกค้า  / 6 = ฉันยกเลิกแล้ว',
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
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_upload_team
-- ----------------------------
INSERT INTO `tbl_upload_team` VALUES ('1', 'ODB65', '0', '0', '100', 'sss', '0', null, '0', '2020-10-06 21:34:55', '2020-10-06 21:34:55', null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('2', 'ODB68', '1', '4', '110', 'bb', '5', 'TM2009002', '1', '2020-10-06 21:34:56', '2020-10-06 21:34:56', '2020-09-20 16:09:52', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('3', 'ODB67', '1', '2', '120', '', '5', 'TM2009002', '1', '2020-10-06 21:34:57', '2020-10-06 21:34:57', '2020-09-20 16:13:49', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('4', 'ODB62', '1', '30', '90', '', '5', 'TM2009002', '1', '2020-10-06 21:34:59', '2020-10-06 21:34:59', '2020-09-20 16:39:44', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('5', 'ODB62', '1', '30', '50', '', '5', '', '0', '2020-10-06 21:35:00', '2020-10-06 21:35:00', null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('6', 'ODB62', '1', '30', '30', '', '5', 'TM2009002', '0', '2020-10-06 21:35:02', '2020-10-06 21:35:02', null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('7', 'ODB62', '1', '30', '70', '', '0', '', '0', '2020-10-06 21:35:04', '2020-10-06 21:35:04', null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('8', 'ODB62', '1', '30', '150', '', '0', 'TM2009002', '0', '2020-10-06 21:35:05', '2020-10-06 21:35:05', null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('9', 'ODB69', '1', '4.9', '160', '', '5', 'TM2009002', '1', '2020-10-06 21:35:06', '2020-10-06 21:35:06', '2020-09-20 17:49:47', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('10', 'ODB74', '1', '2', '140', 'Complete', '5', 'TM2009001', '1', '2020-10-06 21:35:08', '2020-10-06 21:35:08', '2020-09-21 16:16:07', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('11', 'ODB76', '1', '2', '200', '7777', '5', 'TM2009001', '1', '2020-10-06 21:35:10', '2020-10-06 21:35:10', '2020-09-21 11:03:14', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('12', 'ODB76', '2', '2', '200', 'ffffff', '5', '', '0', '2020-10-06 21:35:13', '2020-10-06 21:35:13', null, '0', '1', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('13', 'ODB76', '1', '2', '100', 'dfdfdfdf', '5', '', '0', '2020-10-06 21:35:15', '2020-10-06 21:35:15', null, '0', '1', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('14', 'ODB74', '1', '5', '120', 'Team file All', '5', 'TM2009001', '1', '2020-10-06 21:35:16', '2020-10-06 21:35:16', '2020-09-21 16:16:07', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('15', 'ODB78', '1', '1.5', '130', '', '5', 'TM2009001', '1', '2020-10-06 21:35:17', '2020-10-06 21:35:17', '2020-09-21 13:48:26', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('16', 'ODB79', '1', '1.2', '150', '', '5', 'TM2009001', '1', '2020-10-06 21:35:18', '2020-10-06 21:35:18', '2020-09-21 16:23:53', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('17', 'ODB82', '1', '3', '190', '', '0', null, '0', '2020-10-06 21:35:19', '2020-10-06 21:35:19', null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('18', 'ODB83', '3', '1.3', '200', '', '4', 'TM2009002', '1', '2020-10-06 21:35:22', '2020-10-06 21:35:22', '2020-09-23 13:35:43', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('19', 'ODB83', '3', '1.5', '110', '-', '4', 'TM2009002', '1', '2020-10-06 21:35:28', '2020-10-06 21:35:28', '2020-09-23 13:35:43', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('20', 'ODB83', '3', '2', '100', 'Info (ODB83)', '0', 'TM2009001', '1', '2020-10-06 21:35:29', '2020-10-06 21:35:29', '2020-09-23 13:35:43', '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('21', 'ODB81', '1', '3', '140', null, '0', null, '0', '2020-10-06 21:35:31', '2020-10-06 21:35:31', null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('22', 'ODB85', '1', '5', '170', 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File Note Team', '1', 'TM2009001', '1', '2020-10-07 15:04:05', '2020-10-07 15:04:07', '2020-09-23 15:11:43', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('23', 'ODB85', '1', '6', '180', 'คุณสามารถDrop ได้จำนวนสูงสุด 10 File Note Team', '1', 'TM2009001', '1', '2020-10-07 15:04:05', '2020-10-07 15:04:07', '2020-09-23 15:11:43', '0', '1', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('24', 'ODB85', '1', '5', '190', 'ffff', '1', 'TM2009001', '1', '2020-10-08 12:07:54', '2020-10-08 12:07:54', '2020-09-24 14:10:07', '0', '1', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('25', 'ODB84', '1', '2', '200', '', '1', 'TM2009001', '1', '2020-10-06 21:35:36', '2020-10-06 21:35:36', '2020-09-24 14:10:31', '0', '0', '1', null, null, '0', '0', '1');
INSERT INTO `tbl_upload_team` VALUES ('26', 'ODB77', '2', '5', '210', '', '1', 'TM2009001', '1', '2020-10-10 15:08:37', '2020-10-10 15:08:37', '2020-09-24 08:10:47', '0', '0', '0', '4', 'ถอนรายได้ (ODB77)', '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('27', 'ODB66', '1', '20', '200', 'sss', '5', 'TM2009002', '1', '2020-10-06 21:35:39', '2020-10-06 21:35:39', '2020-09-24 11:38:20', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('28', 'ODB87', '1', '40', '220', 'dd', '5', 'TM2009002', '1', '2020-10-06 21:35:40', '2020-10-06 21:35:40', '2020-09-24 12:33:49', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('29', 'ODB88', '1', '20', '230', '', '5', 'TM2009002', '1', '2020-10-06 21:35:43', '2020-10-06 21:35:43', '2020-09-24 16:54:38', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('30', 'ODB89', '1', '5', '250', '', '1', 'TM2009001', '1', '2020-10-06 21:35:49', '2020-10-06 21:35:49', '2020-09-24 18:14:13', '0', '0', '1', '5', 'แสดงความคิดเห็น (คุณอยากบอกอะไรเรา) Withdraw (ODB89)', '1', '1', '0');
INSERT INTO `tbl_upload_team` VALUES ('31', 'ODB90', '1', '2', '260', '', '5', 'TM2009002', '1', '2020-10-06 21:35:50', '2020-10-06 21:35:50', '2020-09-24 18:18:50', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('32', 'ODB92', '1', '4', '270', '', '5', 'TM2009002', '1', '2020-10-06 21:35:52', '2020-10-06 21:35:52', '2020-09-24 18:36:32', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('33', 'ODB93', '1', '2', '280', '', '5', 'TM2009002', '1', '2020-10-06 21:35:53', '2020-10-06 21:35:53', '2020-09-24 18:40:43', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('34', 'ODB94', '1', '2', '290', '', '5', 'TM2009002', '1', '2020-10-06 21:35:53', '2020-10-06 21:35:53', '2020-09-24 18:53:27', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('35', 'ODB95', '1', '50', '300', '', '5', 'TM2009002', '1', '2020-10-06 21:35:55', '2020-10-06 21:35:55', '2020-09-24 19:12:16', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('36', 'ODB96', '1', '10', '310', '', '5', 'TM2009002', '1', '2020-10-06 21:35:56', '2020-10-06 21:35:56', '2020-09-24 19:24:35', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('37', 'ODB98', '1', '5', '320', '', '1', 'TM2009001', '1', '2020-10-06 21:35:57', '2020-10-06 21:35:57', '2020-09-24 20:19:44', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('38', 'ODB99', '1', '1', '320', 'ss', '5', 'TM2009002', '1', '2020-10-06 21:35:58', '2020-10-06 21:35:58', '2020-09-25 12:49:25', '0', '0', '0', '5', 'error', '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('39', 'ODB100', '1', '5', '330', 'Upload To Team (ODB100)\r\n', '1', null, '0', '2020-10-08 12:08:17', '2020-10-08 12:08:17', null, '0', '0', '1', null, null, '1', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('40', 'ODB100', '1', '5', '340', 'Info (ODB100)\r\n', '1', 'TM2009001', '0', '2020-10-08 12:08:17', '2020-10-08 12:08:17', null, '0', '1', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('41', 'ODB63', '1', '5', '350', '-', '0', null, '0', '2020-10-06 21:36:06', '2020-10-06 21:36:06', null, '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('42', 'ODB106', '0', '0', '360', '', '0', null, '0', '2020-10-06 21:36:07', '2020-10-06 21:36:07', null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('43', 'ODB110', '1', '5', '370', 'Upload to team (ODB110)', '1', '', '0', '2020-10-06 21:36:09', '2020-10-06 21:36:09', null, '0', '1', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('44', 'ODB110', '1', '5', '380', 'Upload to team (ODB110)', '1', 'TM2009001', '1', '2020-10-06 21:36:12', '2020-10-06 21:36:12', '2020-09-28 20:01:59', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('45', 'ODB122', '1', '5', '390', 'sss', '1', 'TM2009002', '1', '2020-10-06 21:36:14', '2020-10-06 21:36:14', '2020-09-29 07:38:00', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('46', 'ODB123', '2', '5', '400', '', '1', 'TM2009004', '1', '2020-10-06 21:36:15', '2020-10-06 21:36:15', '2020-09-30 15:08:45', '0', '0', '0', '5', 'test by bus', '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('47', 'ODB125', '1', '5', '410', 'Upload to team (ODB125)', '4', 'TM2009002', '1', '2020-10-10 11:19:38', '2020-10-10 11:19:38', '2020-10-04 15:44:01', '0', '0', '1', null, null, '1', '1', '0');
INSERT INTO `tbl_upload_team` VALUES ('48', 'ODB128', '1', '50', '420', 'fff', '4', 'TM2009002', '1', '2020-10-06 21:36:18', '2020-10-06 21:36:18', '2020-09-30 22:32:51', '0', '0', '0', null, null, '1', '0', '1');
INSERT INTO `tbl_upload_team` VALUES ('49', 'ODB129', '1', '5', '430', 'Add_my_stock_admin team', '4', null, '0', '2020-10-09 09:19:02', '2020-10-09 09:19:02', '2020-10-09 09:19:02', '0', '0', '0', null, null, '1', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('50', 'ODB129', '1', '6', '440', 'Add_my_stock_admin team TTTT', '4', '', '0', '2020-10-09 09:19:02', '2020-10-09 09:19:02', '2020-10-09 09:19:02', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('51', 'ODB129', '1', '6', '450', 'Add_my_stock_admin team TT', '4', 'TM2009002', '1', '2020-10-09 09:19:07', '2020-10-09 09:19:07', '2020-10-09 09:19:02', '0', '0', '0', null, null, '1', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('52', 'ODB86', '1', '2', '460', 'You can buy Note Team', '1', 'TM2009001', '1', '2020-10-08 12:07:28', '2020-10-08 12:07:28', '2020-10-05 17:50:38', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('53', 'ODB131', '1', '2', '470', '', '1', 'TM2009002', '1', '2020-10-08 16:38:25', '2020-10-08 16:38:25', '2020-10-06 09:38:03', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('54', 'ODN134', '1', '5', '480', 'Upload To Team (ODN134)', '4', 'TM2009001', '1', '2020-10-08 12:08:49', '2020-10-08 12:08:49', '2020-10-06 16:24:28', '0', '0', '0', null, null, '1', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('55', 'ODB132', '1', '10', '490', 'Upload To Team (ODB132)', '5', 'TM2009001', '1', '2020-10-10 11:13:50', '2020-10-10 11:13:50', '2020-10-06 11:18:12', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('56', 'ODB133', '1', '5', '500', 'Upload To Team (ODB133)\r\n', '0', null, '1', '2020-10-09 15:18:36', '2020-10-09 15:18:36', '2020-10-09 15:07:19', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('57', 'ODB135', '1', '80', '510', 'dddd', '1', 'TM2009002', '1', '2020-10-06 21:36:33', '2020-10-06 21:36:33', '2020-10-06 14:29:17', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('58', 'ODN136', '1', '70', '520', 'Glade', '1', 'TM2009002', '1', '2020-10-06 21:36:35', '2020-10-06 21:36:35', '2020-10-06 17:35:00', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('60', 'ODB132', '1', '5', '245', null, '5', 'TM2009001', '1', '2020-10-10 11:13:50', '2020-10-10 11:13:50', '2020-10-06 11:18:12', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('61', 'ODB132', '1', '5', '245', null, '5', 'TM2009001', '1', '2020-10-10 11:13:50', '2020-10-10 11:13:50', '2020-10-06 11:18:12', '0', '0', '1', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('62', 'ODN139', '1', '20', '600', 'Note Team', '3', 'TM2009001', '1', '2020-10-08 13:27:37', '2020-10-08 13:27:37', '2020-10-08 12:09:22', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('63', 'ODN143', '1', '5', '300', 'Upload To Team (ODN143)\r\n', '6', 'TN20109', '1', '2020-10-09 17:43:52', '2020-10-09 17:43:52', '2020-10-09 16:20:06', '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('64', 'ODN145', '1', '10', '150', '', '0', null, '0', '2020-10-09 16:19:38', '2020-10-09 16:19:38', null, '0', '0', '0', null, null, '0', '0', '0');
INSERT INTO `tbl_upload_team` VALUES ('65', 'ODN143', '1', '5', '300', 'Upload To Team (ODN143)\r\n', '0', 'TM2009002', '1', '2020-10-10 12:11:29', '2020-10-10 12:11:29', '2020-10-10 12:11:29', '0', '0', '0', null, null, '0', '0', '0');

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
  `email_lang_user` varchar(10) DEFAULT NULL COMMENT '1 = ภาษาไทย / 2 = ภาษาอังกฤษ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'CM2009001', '218', '619.20', '80', '3.80', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e3d00986182c0c42dd0f5bb4c6dc91fa', null, '1', '2020-10-06 16:26:09', '2020-10-06 16:26:09', null, null, '0', '2', '2020-09-29', '2021-09-29', null);
INSERT INTO `tbl_user` VALUES ('2', 'CM2009002', '218', '26.80', '36', '9.80', 'wut.088english@gmail.com', '0652074798', 'Wuttipat', '344fa21e68dc853cf99572e2616d1f7f', 'public/frontend/assets/img/profile/phpto-1600915607.jpg', '1', '2020-10-11 18:02:49', '2020-10-11 18:02:49', null, null, '0', '3', '2020-09-18', '2021-09-18', null);
INSERT INTO `tbl_user` VALUES ('3', 'CM2009003', '218', '3.80', '0', '3.80', 'kuhaku0925623256@gmail.com', '0925623256', 'kuhaku', 'e3d00986182c0c42dd0f5bb4c6dc91fa', null, '0', '2020-09-30 16:12:53', '2020-09-30 16:12:53', null, null, '0', '2', '2020-09-26', '2021-09-26', null);
INSERT INTO `tbl_user` VALUES ('5', 'CM2009005', '218', '60.00', '0', '0.00', 'jame09256232566@gmail.com', '0925623256', 'jimmynerTR', '25f9e794323b453885f5181f1b624d0b', null, '0', '2020-10-05 10:47:21', '2020-10-05 10:47:21', null, null, '0', '3', '2020-09-29', '2021-09-29', null);
INSERT INTO `tbl_user` VALUES ('6', 'CM2009006', '218', '0.00', '0', '0.00', 'boss3075030750@gmail.com', '123456', 'testgood', 'e807f1fcf82d132f9bb018ca6738a19f', null, '0', '2020-09-30 16:12:53', '2020-09-30 16:12:53', null, null, '0', '3', '2020-09-30', '2021-09-30', null);
INSERT INTO `tbl_user` VALUES ('7', 'CM2009007', '218', '60.00', '0', '0.00', 'chinnawat0098@gmail.com', '0631147470', 'Chinnawat K.', '25f9e794323b453885f5181f1b624d0b', null, '0', '2020-09-30 16:32:49', '2020-09-30 16:32:49', null, null, '0', '3', '2020-09-30', '2021-09-30', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

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
INSERT INTO `tbl_withdraw` VALUES ('15', 'CM2009001', '300', '2', '-', 'download.jfif', 'uploads/money/download.jfif', 'WD-15', null, '2020-09-30 17:49:13', '2020-09-28 11:34:36', '0925623256', '1234567890', null);
INSERT INTO `tbl_withdraw` VALUES ('16', '2', '92', '1', '-', null, null, null, null, '2020-09-29 07:12:03', '2020-09-29 07:12:03', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('17', '2', '92', '1', '-', null, null, null, null, '2020-09-29 07:13:02', '2020-09-29 07:13:02', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('18', '7', '100', '1', '-', null, null, null, null, '2020-09-30 14:54:58', '2020-09-30 14:54:58', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('19', '5', '100', '1', '-', null, null, null, null, '2020-09-30 18:06:53', '2020-09-30 18:06:53', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('20', 'CM2009002', '50', '1', '-', null, null, null, null, '2020-10-07 08:10:34', '2020-10-07 08:10:34', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('21', 'CM2009002', '50', '1', '-', null, null, null, null, '2020-10-07 08:11:40', '2020-10-07 08:11:40', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('22', 'CM2009002', '20', '1', '-', null, null, null, null, '2020-10-07 08:14:40', '2020-10-07 08:14:40', null, null, null);
INSERT INTO `tbl_withdraw` VALUES ('23', 'CM2009002', '100', '1', '-', null, null, null, null, '2020-10-08 12:39:13', '2020-10-08 12:39:13', null, null, null);

-- ----------------------------
-- Table structure for `tbl_withdraw_team`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_withdraw_team`;
CREATE TABLE `tbl_withdraw_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teamId` varchar(11) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `price` varchar(65) DEFAULT NULL,
  `status` varchar(10) DEFAULT '1' COMMENT '1 = กำลังดำเนินการ , 2 = เสร็จสิ้น , 3 = ล้มเหลว',
  `bill_id` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_withdraw_team
-- ----------------------------
INSERT INTO `tbl_withdraw_team` VALUES ('1', 'TM2009002', 'ODB99', '1', '2', 'BILL-1', 'LINE_P25630806_112845383.png', 'uploads/WithdrawTeam/LINE_P25630806_112845383.png', '2020-09-26 12:22:00', '2020-09-26 15:13:27', '2020-09-27 01:34:00');
INSERT INTO `tbl_withdraw_team` VALUES ('2', 'TM2009001', 'ODB89', '5', '2', 'BILL-2', 'LINE_P25630806_112845383.png', 'uploads/WithdrawTeam/LINE_P25630806_112845383.png', '2020-09-30 12:12:00', '2020-09-27 01:31:45', null);
INSERT INTO `tbl_withdraw_team` VALUES ('3', 'TM2009004', 'ODB123', '5', '2', 'BILL-3', 'Screenshot_2.png', 'uploads/money/team/Screenshot_2.png', null, '2020-09-30 17:16:30', null);
INSERT INTO `tbl_withdraw_team` VALUES ('4', 'TM2009001', 'ODB77', '5', '1', 'BILL-4', null, null, null, '2020-10-10 15:04:32', null);
