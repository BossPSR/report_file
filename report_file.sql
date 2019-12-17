/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-17 15:05:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_upload`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload`;
CREATE TABLE `tbl_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `search_item` varchar(255) DEFAULT '',
  `code` text DEFAULT NULL,
  `search_code` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `select_item` varchar(255) DEFAULT NULL,
  `topic` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload
-- ----------------------------
INSERT INTO `tbl_upload` VALUES ('1', '2', 'TEST', 'Butters & Eggs', 'TEST', '2019-12-13 08:26:02', null, null, null);
INSERT INTO `tbl_upload` VALUES ('2', '2', 'TEST', 'Butters & Eggs', 'TEST', '2019-12-13 08:27:47', null, null, null);
INSERT INTO `tbl_upload` VALUES ('3', '2', 'TEST', 'Butters & Eggs', 'TEST', '2019-12-13 08:28:27', null, null, null);
INSERT INTO `tbl_upload` VALUES ('4', '2', 'TEST', 'Tablets', 'TEST', '2019-12-13 10:01:27', null, null, null);
INSERT INTO `tbl_upload` VALUES ('5', '2', 'TEST', 'Butters & Eggs', 'TEST', '2019-12-14 03:52:42', null, null, null);
INSERT INTO `tbl_upload` VALUES ('6', '2', 'TEST', 'Accessories & More', 'TEST', '2019-12-14 05:26:24', null, null, null);
INSERT INTO `tbl_upload` VALUES ('7', '2', 'TEST', 'Accessories & More', 'TEST', '2019-12-14 06:08:18', null, null, null);
INSERT INTO `tbl_upload` VALUES ('8', '2', 'TEST', 'Accessories', 'TESTT', '2019-12-14 07:11:05', null, null, null);
INSERT INTO `tbl_upload` VALUES ('9', '2', 'YRDY', 'Butters & Eggs', 'YRDY', '2019-12-14 09:53:53', null, null, null);
INSERT INTO `tbl_upload` VALUES ('10', '2', 'TEST', 'Accessories & More', 'TESTTEST', '2019-12-17 05:15:28', null, null, null);
INSERT INTO `tbl_upload` VALUES ('11', '2', 'TEST', '', null, '2019-12-17 08:56:07', null, 'Accessories', 'TEST');
INSERT INTO `tbl_upload` VALUES ('12', '2', 'TEST Item', 'Put Your code', 'Search code', '2019-12-17 09:05:01', null, 'Accessories & More', 'Put Your topic');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `passport` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', '1659900740516', 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', '94d2be2e13cce22e63f410e98d6d59a9', '2019-12-11 04:07:28');
INSERT INTO `tbl_user` VALUES ('2', '1269900232221', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', '2019-12-13 08:25:38');
