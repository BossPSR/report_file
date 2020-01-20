/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-01-20 11:24:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_upload_store`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_store`;
CREATE TABLE `tbl_upload_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `store_id` varchar(110) DEFAULT '' COMMENT 'ST00001',
  `file_name` varchar(255) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_store
-- ----------------------------
INSERT INTO `tbl_upload_store` VALUES ('2', '4', '4', '091025621.pdf', '2020-01-04 14:09:36', null, 'uploads/Preview/091025621.pdf');
INSERT INTO `tbl_upload_store` VALUES ('3', '4', '5', 'ห้างหุ้นส่วนจำกัด_อินฟินิตี้_ฟีโนมีนอล_ซอฟท์แวร์_QT2019110001_บริษัท_ตัวอย่าง_จำกัด_Test.pdf', '2020-01-04 14:10:22', null, 'uploads/Preview/ห้างหุ้นส่วนจำกัด_อินฟินิตี้_ฟีโนมีนอล_ซอฟท์แวร์_QT2019110001_บริษัท_ตัวอย่าง_จำกัด_Test.pdf');

-- ----------------------------
-- Table structure for `tbl_upload_order`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_order`;
CREATE TABLE `tbl_upload_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `order_id` varchar(110) DEFAULT '' COMMENT 'OR00001',
  `file_name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 1,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_order
-- ----------------------------
INSERT INTO `tbl_upload_order` VALUES ('5', '4', '4', 'sample-3pp_(1)1.pdf', '1', '2020-01-04 14:09:41', null, 'uploads/full/sample-3pp_(1)1.pdf');
INSERT INTO `tbl_upload_order` VALUES ('6', '4', '5', 'ข้อเสนอโครงการ.pdf', '1', '2020-01-04 14:11:24', '2020-01-04 14:11:57', 'uploads/full/ข้อเสนอโครงการ.pdf');
