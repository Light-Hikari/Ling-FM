DROP TABLE IF EXISTS `Ling_fm`;
CREATE TABLE IF NOT EXISTS `Ling_fm` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `url` varchar(128) NOT NULL DEFAULT '',
  `img` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;