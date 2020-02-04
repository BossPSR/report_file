/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-02-04 13:47:42
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_bookmark
-- ----------------------------
