/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-01-03 17:20:45
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload
-- ----------------------------
INSERT INTO `tbl_upload` VALUES ('1', '4', '1', 'อาหารไทย เมนูอาหาร สูตรอาหารง่ายๆ สำหรับคนรักการทำอาหาร', 'อาหาร', 'MX001', 'เมนูอาหาร อาหารไทยง่ายๆ ทำกินเองที่บ้านได้ กับข้าว อาหารไทยมีอะไรบ้าง สูตรอาหาร เมนูผัด เมนูแกง เมนูทอด เมนูนึ่ง เมนูปิ้งย่าง เมนูหมู เมนูปลา เมนูไก่ เมนูปลาหมึก เมนูกุ้ง', '2020-01-03 15:00:33', null);
INSERT INTO `tbl_upload` VALUES ('2', '4', '3', 'ดนตรี - วิกิพีเดีย', 'ดาราศาสตร์', 'MX002', 'ดนตรี (อังกฤษ: music) คือ เสียงและโครงสร้างที่จัดเรียงอย่างเป็นระเบียบแบบแผน ซึ่งมนุษย์ใช้ประกอบกิจกรรมศิลปะที่เกี่ยวข้องกับเสียง โดยดนตรีนั้นแสดงออกมาในด้านระดับเสียง', '2020-01-03 15:10:49', null);
INSERT INTO `tbl_upload` VALUES ('3', '4', '1', 'ผลการค้นหา ผลการค้นเว็บ อาหารไทย เมนูอาหาร สูตรอาหารง่ายๆ สำหรับคนรักการทำอาหาร', 'อาหาร', 'MX004', 'เมนูอาหาร อาหารไทยง่ายๆ ทำกินเองที่บ้านได้ กับข้าว อาหารไทยมีอะไรบ้าง สูตรอาหาร เมนูผัด เมนูแกง เมนูทอด เมนูนึ่ง เมนูปิ้งย่าง เมนูหมู เมนูปลา เมนูไก่ เมนูปลาหมึก เมนูกุ้ง', '2020-01-03 15:27:58', null);
INSERT INTO `tbl_upload` VALUES ('4', '4', '8', 'สำนักงานสลากกินแบ่งรัฐบาล ช่วยราษฎร์ เสริมรัฐ ยืนหยัดยุติธรรม', 'รัฐบาล', 'MX0010', 'รางวัลที่ 1, เลขหน้า 3 ตัว, เลขท้าย 3 ตัว, เลขท้าย 2 ตัว. 510541, 116 382, 250 140, 81. พิมพ์หมายเลขเพื่อตรวจรางวัลงวดปัจจุบันด้านล่าง : ตรวจผลรางวัลงวดปัจจุบัน ยกเลิก', '2020-01-03 16:18:50', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_full
-- ----------------------------
INSERT INTO `tbl_upload_full` VALUES ('1', '4', '1', 'sample-3pp.pdf', '2020-01-03 15:00:42', null, 'uploads/full/sample-3pp.pdf');
INSERT INTO `tbl_upload_full` VALUES ('2', '4', '2', 'สรุป_พรบ.วิธีปฏิบัติราชการทางปกครอง_2539.pdf', '2020-01-03 15:10:57', null, 'uploads/full/สรุป_พรบ.วิธีปฏิบัติราชการทางปกครอง_2539.pdf');
INSERT INTO `tbl_upload_full` VALUES ('3', '4', '3', 'pdf_open_parameters.pdf', '2020-01-03 15:28:13', null, 'uploads/full/pdf_open_parameters.pdf');
INSERT INTO `tbl_upload_full` VALUES ('4', '4', '4', 'ข้อเสนอโครงการ.pdf', '2020-01-03 16:18:56', null, 'uploads/full/ข้อเสนอโครงการ.pdf');

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
  `cash` varchar(200) NOT NULL DEFAULT '0',
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
INSERT INTO `tbl_user` VALUES ('1', '1659900740516', '0', 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', '94d2be2e13cce22e63f410e98d6d59a9', null, '2019-12-11 04:07:28');
INSERT INTO `tbl_user` VALUES ('2', '1269900232221', '0', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', '2019-12-25 15:19:48');
INSERT INTO `tbl_user` VALUES ('3', '123456789', '0', 'infinityp.soft@gmail.com', '0618096661', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/1.png', '2019-12-23 19:29:15');
INSERT INTO `tbl_user` VALUES ('4', '4444555666112', '0', 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', null, '2019-12-25 17:14:08');
INSERT INTO `tbl_user` VALUES ('5', '123123', '0', 'tt@gmail.com', '123123', 'a123', '202cb962ac59075b964b07152d234b70', null, '2019-12-25 17:23:11');
