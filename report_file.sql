/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-01-06 16:52:53
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
-- Table structure for `tbl_package`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_package`;
CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_pk` varchar(200) DEFAULT NULL,
  `price_pk` varchar(100) DEFAULT '',
  `description_pk` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `userId_pk` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT 0,
  `time_pk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_package
-- ----------------------------
INSERT INTO `tbl_package` VALUES ('1', 'Annual', '9.95', 'เหมาะสำหรับเว็บไซต์ส่วนตัวเว็บบริษัทขนาดเล็ก Natus erro at congue massa commodo sit', '2020-01-06 00:00:00', null, null, '0', 'mo');
INSERT INTO `tbl_package` VALUES ('2', 'Quarterly', '19.95', 'เหมาะสำหรับเว็บไซต์ทั่วไป\r\nNatus erro at congue massa commodo sit', '2020-01-06 00:00:00', null, null, '0', 'mo');
INSERT INTO `tbl_package` VALUES ('3', 'Monthly', '39.95', 'เหมาะสำหรับเว็บไซต์ขนาดใหญ่\r\nจำนวนข้อมูลหรือมีผู้เข้าชมจำนวนมาก Natus erro at congue massa commodo sit', '2020-01-06 00:00:00', null, null, '0', 'mo');

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
-- Table structure for `tbl_rejected`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rejected`;
CREATE TABLE `tbl_rejected` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookid_rj` int(11) DEFAULT NULL,
  `userId_rj` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(2) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_rejected
-- ----------------------------
INSERT INTO `tbl_rejected` VALUES ('7', '7', '4', '2020-01-06 16:50:55', null, '1');

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
  `merchant_id` int(11) NOT NULL,
  `upload_id` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ip_address` varchar(200) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload
-- ----------------------------
INSERT INTO `tbl_upload` VALUES ('4', '4', '1', 'อาหารไทย เมนูอาหาร สูตรอาหารง่ายๆ สำหรับคนรักการทำอาหาร', 'อาหาร', 'ZXC001', 'สำหรับคนรักการทำอาหาร', '2020-01-04 14:09:31', null);
INSERT INTO `tbl_upload` VALUES ('5', '4', '2', 'เอกสารสำคัญ - โปรแกรม ร้าน ค้า ปลีก', 'คณิตศาสตร์', 'ZXV33', 'โปรแกรม ร้าน ค้า ปลีก', '2020-01-04 14:10:10', null);
INSERT INTO `tbl_upload` VALUES ('7', '6', '8', 'Test the integration', 'รัฐบาล', 'MX00113', 'Log in to the developer dashboard and create a new sandbox test account.\r\nClick the Smart Payment Buttons. Make sure to also test the credit card buttons.\r\nLog in to PayPal using the test buyer account you created.\r\nComplete a transaction.', '2020-01-06 14:53:20', null);

-- ----------------------------
-- Table structure for `tbl_upload_full`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_upload_full`;
CREATE TABLE `tbl_upload_full` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `upload_id` varchar(110) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 1,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_full
-- ----------------------------
INSERT INTO `tbl_upload_full` VALUES ('5', '4', '4', 'sample-3pp_(1)1.pdf', '1', '2020-01-04 14:09:41', null, 'uploads/full/sample-3pp_(1)1.pdf');
INSERT INTO `tbl_upload_full` VALUES ('6', '4', '5', 'ข้อเสนอโครงการ.pdf', '1', '2020-01-04 14:11:24', '2020-01-04 14:11:57', 'uploads/full/ข้อเสนอโครงการ.pdf');
INSERT INTO `tbl_upload_full` VALUES ('8', '6', '7', 'การแชร์_เอกสาร_(Google_Doc)1.pdf', '1', '2020-01-06 14:53:32', null, 'uploads/full/การแชร์_เอกสาร_(Google_Doc)1.pdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_preview
-- ----------------------------
INSERT INTO `tbl_upload_preview` VALUES ('2', '4', '4', '091025621.pdf', '2020-01-04 14:09:36', null, 'uploads/Preview/091025621.pdf');
INSERT INTO `tbl_upload_preview` VALUES ('3', '4', '5', 'ห้างหุ้นส่วนจำกัด_อินฟินิตี้_ฟีโนมีนอล_ซอฟท์แวร์_QT2019110001_บริษัท_ตัวอย่าง_จำกัด_Test.pdf', '2020-01-04 14:10:22', null, 'uploads/Preview/ห้างหุ้นส่วนจำกัด_อินฟินิตี้_ฟีโนมีนอล_ซอฟท์แวร์_QT2019110001_บริษัท_ตัวอย่าง_จำกัด_Test.pdf');
INSERT INTO `tbl_upload_preview` VALUES ('5', '6', '7', 'กำหนดการโครงการอบรมการใช้_google_ในการบริหารจัดการสำนักงานสำหรับพนักงาน1.pdf', '2020-01-06 14:53:29', null, 'uploads/Preview/กำหนดการโครงการอบรมการใช้_google_ในการบริหารจัดการสำนักงานสำหรับพนักงาน1.pdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', '1659900740516', '0', 'famnoii2550@gmail.com', '0968138751', 'worapong srisawan', '94d2be2e13cce22e63f410e98d6d59a9', null, '2019-12-11 04:07:28');
INSERT INTO `tbl_user` VALUES ('2', '1269900232221', '0', 'jame0925623256@gmail.com', '0925623256', 'Nattaphon Kiattikul', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', '2019-12-25 15:19:48');
INSERT INTO `tbl_user` VALUES ('3', '123456789', '0', 'infinityp.soft@gmail.com', '0618096661', 'admin@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/1.png', '2019-12-23 19:29:15');
INSERT INTO `tbl_user` VALUES ('4', '4444555666112', '8', 'test@gmail.com', '0877777887', 'เทสอย่าง มีระบบ', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/7.png', '2020-01-06 13:35:29');
INSERT INTO `tbl_user` VALUES ('5', '123123', '96', 'tt@gmail.com', '123123', 'a123', '202cb962ac59075b964b07152d234b70', null, '2020-01-06 11:27:08');
INSERT INTO `tbl_user` VALUES ('6', '987456123', '94', 'test2@gmail.com', '0879874444', 'ทดสอบ รูปแบบที่ 2', 'e10adc3949ba59abbe56e057f20f883e', 'public/frontend/assets/img/profile/2.png', '2020-01-06 13:27:49');
