/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : jobth

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-11-07 12:01:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `user_Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'Admin-studio', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2018-12-11 11:48:36', '2018-12-11 05:48:36');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('3', 'ธุรการ');
INSERT INTO `tbl_category` VALUES ('4', 'ฝ่ายบุคคล');
INSERT INTO `tbl_category` VALUES ('5', 'ฝ่ายผลิต');

-- ----------------------------
-- Table structure for `tbl_typejob`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_typejob`;
CREATE TABLE `tbl_typejob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_job` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_typejob
-- ----------------------------
INSERT INTO `tbl_typejob` VALUES ('5', 'งานประจำ');
INSERT INTO `tbl_typejob` VALUES ('6', 'พาร์ไทม์');
INSERT INTO `tbl_typejob` VALUES ('7', 'พนักงานฝึกงาน');
INSERT INTO `tbl_typejob` VALUES ('8', 'อาสาสมัคร');
INSERT INTO `tbl_typejob` VALUES ('9', 'งานสัญญาจ้าง');
