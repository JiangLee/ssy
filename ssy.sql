/*用户表*/
drop table if exists ssy_user;
CREATE TABLE `ssy_user` (
  `user_id` int(11) auto_increment NOT NULL,
  `login_name` varchar(64) NOT NULL,
  `login_password` varchar(64) NOT NULL,
  `pay_password` varchar(64) default '',
  `qq` bigint(20) NOT NULL, 
  `real_name` varchar(64) default '',
  `person_ID` varchar(64) default '',
  `person_pic_id` varchar(64) default '',
  `address` varchar(256) default '',
  `phone_num` bigint(20) default 0,
  `mail_address` varchar(64) default '',
  `score` int(11) default 0,
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*用户代金券*/
drop table if exists ssy_user_coupons;
CREATE TABLE `ssy_user_coupons` (
  `user_id` int(11) NOT NULL,
  `coupons_id` int(11),
  `get_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `retire_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*代金券*/
drop table if exists ssy_coupons;
CREATE TABLE `ssy_coupons` (
  `coupons_id` int(11) not null,
  `replace_score` int(11) default 0,
  `replace_money` int(11) default 0,
  `start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `retire_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`coupons_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*绑定银行卡*/
drop table if exists ssy_user_bank_card;
CREATE TABLE `ssy_user_bank_card` (
  `user_id` int(11) NOT NULL,
  `bank_id` int(4) not null,
  `bank_card` int(11) default 0,
  `account` varchar(64) not null,
  `account_province` int(4) not null,
  `account_city` int(4) not null,
  `account_status` int(4) not null,  /*0表示绑定银行卡，1表示绑定支付宝账号，都采用account保存*/
  `realtion_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*绑定银行类型*/
drop table if exists ssy_bank;
CREATE TABLE `ssy_bank` (
  `bank_id` int(4) not null,
  `bank_name` varchar(64) not null,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*商品表*/
drop table if exists ssy_goods;
CREATE TABLE `ssy_goods` (
  `goods_id` int(11) auto_increment not null,
  `publish_user_id` int(11) NOT NULL,
  `goods_name` varchar(64) not null,
  `game_id` int(4) not null,
  `goods_channel_id` int(4) not null,
  `goods_area_id` int(4) not null,
  `goods_desc` varchar(1024) not null,
  `goods_pic` varchar(256) not null,
  PRIMARY KEY (`goods_id`,`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*游戏类型表*/
drop table if exists ssy_game;
CREATE TABLE `ssy_game` (
  `game_id` int(4) auto_increment not null, 
  `game_name` varchar(64) not null,
  `game_type` int(4) not null,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*游戏区表*/
drop table if exists ssy_game_area;
CREATE TABLE `ssy_game_area` (
  `game_area_id` int(4) not null,
  `game_id` int(4) not null, 
  `game_area_name` varchar(64) not null,
  PRIMARY KEY (`game_area_id`,`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*游戏渠道表*/
drop table if exists ssy_game_channel;
CREATE TABLE `ssy_game_channel` (
  `game_channel_id` int(4) not null,
  `game_channel_name` varchar(64) not null,
  PRIMARY KEY (`game_channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*商品支付信息表*/
drop table if exists ssy_pay_info;
CREATE TABLE `ssy_pay_info` (
  `pay_id` int(11) auto_increment not null,
  `pay_channel_id` int(4) not null,
  `pay_money` int(11) not null,
  `pay_status` int(4) not null,
  `goods_id` int(11) not null,
  `pay_user_id` int(11) not null,
  PRIMARY KEY (`pay_id`,`pay_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*支付渠道表*/
drop table if exists ssy_pay_channel;
CREATE TABLE `ssy_pay_channel` (
  `pay_channel_id` int(4) not null,
  `pay_channel_name` varchar(64) not null,
  PRIMARY KEY (`pay_channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;