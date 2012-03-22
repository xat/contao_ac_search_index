-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `ac_si_language` blob NULL,
  `ac_si_root_sites` blob NULL,
  `ac_si_blacklist` text NULL,
  `ac_si_minLength` int(10) NOT NULL default '2',
  `ac_si_width` varchar(20) NOT NULL default 'inherit',
  `ac_si_maxChoices` int(10) NOT NULL default '10',
  `ac_si_zIndex` int(10) NOT NULL default '42',
  `ac_si_delay` int(10) NOT NULL default '400',
  `ac_si_autoSubmit` char(1) NOT NULL default '0',
  `ac_si_selectFirst` char(1) NOT NULL default '0',
  `ac_si_multiple` char(1) NOT NULL default '0',
  `ac_si_separator` varchar(250) NOT NULL default '',
  `ac_si_autoTrim` char(1) NOT NULL default '0',
  `ac_si_defaultValue` varchar(250) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------


-- 
-- Table `tl_search_index`
-- 

CREATE TABLE `tl_search_index` (
  `rootPage` int(10) NOT NULL default '0',
  KEY `language` (`language`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;