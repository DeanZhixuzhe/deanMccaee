CREATE TABLE IF NOT EXISTS `sysconfig`(
   `id` INT(6) NOT NULL COMMENT '自增长主键' AUTO_INCREMENT,
   `varname` VARCHAR(100) NOT NULL COMMENT '变量名',
   `info` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '变量说明',
   `group` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '分组名',
   `type` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '变量类型',
   `value` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '变量值',
   `create_time` INT(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
   `update_time` INT(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
   PRIMARY KEY ( `id` )
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `sysconfig` VALUES ('1', 'webname', '网站名称', 'website', 'string', '我的网站', '0', '0');
INSERT INTO `sysconfig` VALUES ('2', 'title', '网站标题', 'website', 'string', '我的网站', '0', '0');
INSERT INTO `sysconfig` VALUES ('3', 'keywords', '站点关键词', 'website', 'string', '', '0', '0');
INSERT INTO `sysconfig` VALUES ('4', 'description', '站点描述', 'website', 'string', '', '0', '0');
INSERT INTO `sysconfig` VALUES ('5', 'domain', '域名', 'website', 'string', '', '0', '0');
INSERT INTO `sysconfig` VALUES ('6', 'copyright', '版权信息', 'website', 'string', 'Copyright &copy;liliuqinxian 1900 - 2018', '0', '0');
INSERT INTO `sysconfig` VALUES ('7', 'beian', '备案信息', 'website', 'string', '', '0', '0');
INSERT INTO `sysconfig` VALUES ('8', 'defaultclick', '文档默认点击数（随机数，用-分割两个数字）', 'website', 'number', '100-500', '0', '0');
INSERT INTO `sysconfig` VALUES ('9', 'style', '主题风格', 'website', 'string', 'default', '0', '0');
