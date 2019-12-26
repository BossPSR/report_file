/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : report_file

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-25 18:59:23
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
-- Table structure for `tbl_select_item`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_select_item`;
CREATE TABLE `tbl_select_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_item` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_select_item
-- ----------------------------
INSERT INTO `tbl_select_item` VALUES ('1', 'หนังสือ', '2019-12-25 15:25:32', null);
INSERT INTO `tbl_select_item` VALUES ('2', 'เกม', '2019-12-25 15:25:40', null);
INSERT INTO `tbl_select_item` VALUES ('3', 'ภาพยนต์', '2019-12-25 15:25:43', null);
INSERT INTO `tbl_select_item` VALUES ('4', 'วรรณกรรม', '2019-12-25 15:25:45', null);
INSERT INTO `tbl_select_item` VALUES ('5', 'ประวัติศาสตร์', '2019-12-25 15:25:46', null);
INSERT INTO `tbl_select_item` VALUES ('6', 'คณิตศาสตร์', '2019-12-25 18:34:06', null);
INSERT INTO `tbl_select_item` VALUES ('7', 'ดาราศาสตร์', '2019-12-25 18:37:03', null);
INSERT INTO `tbl_select_item` VALUES ('8', 'ภาษาไทย', '2019-12-25 18:41:06', null);
INSERT INTO `tbl_select_item` VALUES ('9', 'อาหาร', '2019-12-25 18:43:11', null);

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
INSERT INTO `tbl_upload` VALUES ('1', '2', '0', 'ปัญญาประดิษฐ์ (AI : Artificial Intelligence) คืออะไร ???', 'Electronic', 'MX001', 'เครื่องจักร(machine) ที่มีฟังก์ชันทีมีความสามารถในการทำความเข้าใจ เรียนรู้องค์ความรู้ต่างๆ อาทิเช่น การรับรู้  การเรียนรู้ การให้เหตุผล และการแก้ปัญหาต่างๆ  เครื่องจักรที่มีความสามารถเหล่านี้ก็ถือว่าเป็น ปัญญาประดิษฐ์  (AI : Artificial Intelligence) นั่นเอง\r\n\r\nเพราะฉะนั้นจึงสามารถกล่าวได้ว่า AI ถือกำเนิดขึ้นเมื่อเครื่องจักรมีความสามารถที่จะเรียนรู้นั่นเอง  ซึ่ง AI ก็ถูกแบ่งออกเป็นหลายระดับตามความสามารถหรือความฉลาด  โดยจะวัดจากความสามารถในการ ให้เหตุผล การพูด และทัศนคติของ AI ตัวนั้นๆ เมื่อเปรียบเทียบกับมนุษย์อย่างเราๆ', '2019-12-24 10:21:54', null);
INSERT INTO `tbl_upload` VALUES ('2', '2', '3', 'เอกสารสำคัญ - โปรแกรม ร้าน ค้า ปลีก', 'ภาพยนต์', 'MX0032', 'โปรแกรมร้านค้าปลีก ค้าส่งราคา 2000 บาท ใช้งานง่าย บริการหลังการขายฟรี มีครบทั้ง ระบบขายสินค้า สต๊อกสินค้า บัญชี บาร์โค้ด รายงานยอดขาย ฯลฯ เอกสารสำคัญ ใบเสนอราคา ...', '2019-12-25 11:26:16', '2019-12-25 17:10:25');
INSERT INTO `tbl_upload` VALUES ('3', '2', '1', 'Can I have two jquery onclick events in one element? - Stack Overflow', 'หนังสือ', 'MX008', '20 มิ.ย. 2556 - 3 คำตอบ - I know this has been asked before but I can\'t quite get the syntax of how to add my particular functions in one onclick even. Current onclick code', '2019-12-25 15:41:57', null);
INSERT INTO `tbl_upload` VALUES ('4', '2', '9', 'อาหารไทย', 'อาหาร', 'อาหารไทย', 'อาหารไทย', '2019-12-25 18:47:00', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_full
-- ----------------------------
INSERT INTO `tbl_upload_full` VALUES ('1', '2', '2', 'ใบเสนอราคาfurnitmall_31-10-2562_(2).pdf', '2019-12-25 11:26:26', '2019-12-25 12:02:19', 'uploads/full/ใบเสนอราคาfurnitmall_31-10-2562_(2).pdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_upload_preview
-- ----------------------------
INSERT INTO `tbl_upload_preview` VALUES ('4', '2', '2', 'หน้าเว็บของแอดมิน.pdf', '2019-12-25 11:26:22', '2019-12-25 12:02:52', 'uploads/Preview/หน้าเว็บของแอดมิน.pdf');

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
