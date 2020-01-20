/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-01-20 15:02:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_withdraw`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_withdraw`;
CREATE TABLE `tbl_withdraw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `
bill_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_withdraw
-- ----------------------------

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
  `
bill_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_deposit
-- ----------------------------
