-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `oldbrowserwarning_show_unsupported` char(1) NOT NULL default '',
  `oldbrowserwarning_fixed_sorting` char(1) NOT NULL default '',
  `oldbrowserwarning_sorting` blob NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
