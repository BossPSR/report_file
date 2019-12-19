/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-19 10:11:51
*/

SET FOREIGN_KEY_CHECKS=0;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_paypal
-- ----------------------------
INSERT INTO `tbl_paypal` VALUES ('1', '5XG65837WK7507415', 'J3GJEC9GX23VS', '1', 'USD', '3', 'John', 'Doe', '2019-10-01 11:50:00');

-- ----------------------------
-- Table structure for `tbl_upload`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload`;
CREATE TABLE `tbl_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `search_item` varchar(255) DEFAULT '',
  `select_item` varchar(255) DEFAULT '',
  `code` text DEFAULT NULL,
  `topic` text DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_upload_full`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_full`;
CREATE TABLE `tbl_upload_full` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `upload_id` varchar(110) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_full
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_upload_preview`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_preview`;
CREATE TABLE `tbl_upload_preview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `upload_id` varchar(110) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_preview
-- ----------------------------

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
