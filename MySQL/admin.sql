/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : rbac

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-02-19 05:25:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员自增ID',
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) DEFAULT NULL COMMENT '管理员的密码',
  `nickname` varchar(255) DEFAULT NULL COMMENT '管理员的昵称',
  `status` tinyint(1) DEFAULT '1' COMMENT '用户状态 0：禁用； 1：正常 ；',
  `email` varchar(255) DEFAULT '' COMMENT '邮箱',
  `lastloginip` varchar(16) DEFAULT NULL COMMENT '最后登录ip',
  `lastlogintime` int(10) DEFAULT NULL COMMENT '最后登录时间',
  `create_time` int(10) DEFAULT '0' COMMENT '注册时间',
  `update_time` int(10) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1028 DEFAULT CHARSET=utf8 COMMENT='后台管理员表';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1001', 'admin', '339a1a78531e29eb5a63fdc8db3a1c41', null, '1', 'admin@qq.com', '114.88.197.96', '1432525525', '1432525525', '1432525525');
