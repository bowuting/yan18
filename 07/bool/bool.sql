#布尔商城sql语句
/Applications/MAMP/Library/bin/mysql

#栏目表
create table category (
cat_id int auto_increment primary key,
cat_name varchar(20) not null default'',
intro varchar(100) not null default '',
parent_id int not null default 0
)engine myisam charset utf8;


#商品表
CREATE TABLE IF NOT EXISTS `goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_sn` char(15) NOT NULL DEFAULT '',
  `cat_id` smallint(6) NOT NULL DEFAULT '0',
  `brand_id` smallint(6) NOT NULL DEFAULT '0',
  `goods_name` varchar(30) NOT NULL DEFAULT '',
  `shop_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `market_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `goods_number` smallint(6) NOT NULL DEFAULT '1',
  `click_count` mediumint(9) NOT NULL DEFAULT '0',
  `goods_weight` decimal(6,3) NOT NULL DEFAULT '0.000',
  `goods_brief` varchar(100) NOT NULL DEFAULT '',
  `goods_desc` text NOT NULL,
  `thumb_img` varchar(30) NOT NULL DEFAULT '',
  `goods_img` varchar(30) NOT NULL DEFAULT '',
  `ori_img` varchar(30) NOT NULL DEFAULT '',
  `is_on_sale` tinyint(4) NOT NULL DEFAULT '1',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `is_best` tinyint(4) NOT NULL DEFAULT '0',
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_update` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`),
  UNIQUE KEY `goods_sn` (`goods_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


create table user (
user_id int unsigned not null auto_increment primary key,
username varchar(16) not null default '',
email varchar(30) not null default '',
passwd char(32) not null default '',
regtime int unsigned not null default 0,
lastlogin int unsigned not null default 0
) engine myisam charset utf8;
