/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-26 18:55:50
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_paypal
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_select_item
-- ----------------------------
INSERT INTO `tbl_select_item` VALUES ('1', 'อาหาร', '2019-12-26 13:31:33', null);
INSERT INTO `tbl_select_item` VALUES ('2', 'คณิตศาสตร์', '2019-12-26 18:02:22', null);

-- ----------------------------
-- Table structure for `tbl_unlocks`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_unlocks`;
CREATE TABLE `tbl_unlocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `upload_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `file_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', '1659900740516', 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', '94d2be2e13cce22e63f410e98d6d59a9', null, '2019-12-11 04:07:28');
INSERT INTO `tbl_user` VALUES ('2', '1269900232221', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', '2019-12-25 15:19:48');
INSERT INTO `tbl_user` VALUES ('3', '123456789', 'infinityp.soft@gmail.com', '0618096661', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/1.png', '2019-12-23 19:29:15');
INSERT INTO `tbl_user` VALUES ('4', '4444555666112', 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', null, '2019-12-25 17:14:08');
INSERT INTO `tbl_user` VALUES ('5', '123123', 'tt@gmail.com', '123123', 'a123', '202cb962ac59075b964b07152d234b70', null, '2019-12-25 17:23:11');
