<?php

$installer = $this;

$installer->startSetup();

$installer->run("

DROP TABLE IF EXISTS {$this->getTable('mlayer')};
CREATE TABLE {$this->getTable('mlayer')} (
  `mlayer_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `content` text NULL,
  `status` smallint(6) NOT NULL default '0',
  `contentpos` smallint(6) NOT NULL default '0',
  `weblink` varchar(255) NULL,
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  `stores` text default '',
  `is_home` tinyint(1) NOT NULL default '0',
  `categories` text default '',
  PRIMARY KEY (`mlayer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `mlayer` (`mlayer_id`, `title`, `filename`, `content`, `status`, `contentpos`, `weblink`, `created_time`, `update_time`, `stores`, `is_home`, `categories`) VALUES
(7, 'Clearance Sale', 'banner-img01.jpg', 'Dolor sit amet consectetur adipiscing elit. Aliquam neque est gravida vel sagittis vel accumsan eu nunliquam quis porttitor orci.Dolor sit amet consectetur adipiscing elit. Aliquam neque est gravida vel sagittis.', 1, 1, 'https://www.google.co.uk/', '2013-12-16 07:53:16', '2013-12-16 07:53:16', '0', 0, NULL),
(8, 'Save Upto 30%', 'banner-img02.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam neque est, gravida vel sagittis vel, accumsan eu nunc. Aliquam quis porttitor orci,. Lorem ipsum dolor sit amet, consectetur adipiscing.', 1, 1, 'https://www.google.co.uk/', '2013-12-16 07:54:26', '2013-12-16 07:54:26', '0', 0, NULL),
(9, 'New Collection', 'banner-img03.jpg', 'Dolor sit amet consectetur adipiscing elit. Aliquam neque est gravida vel sagittis vel accumsan eu nunliquam quis porttitor orci.Dolor sit amet consectetur adipiscing elit. Aliquam neque est gravida vel sagittis vel accumsan.', 1, 1, 'https://www.google.co.uk/', '2013-12-16 07:55:15', '2013-12-16 07:55:15', '0', 0, NULL);

");

$installer->endSetup();