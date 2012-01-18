<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Old Browser Warning
 * Copyright (C) 2010,2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  InfinitySoft 2010,2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    OldBrowserWarning
 * @license    LGPL
 * @filesource
 */


/**
 * Class OldBrowserWarningDynamicFields
 *
 * @copyright  InfinitySoft 2010,2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    OldBrowserWarning
 */
class OldBrowserWarningDynamicFields
{
	public function updateDynamicFields()
	{
		$strSql = '';
		foreach ($GLOBALS['TL_CONFIG']['browser'] as $browser) {
			$strSql .= sprintf("`oldbrowserwarning_browser_%s_support` char(1) NOT NULL default '',\n",
				$browser['browser']);
			$strSql .= sprintf("`oldbrowserwarning_browser_%s_version` varchar(255) NOT NULL default '',\n",
				$browser['browser']);
			$strSql .= sprintf("`oldbrowserwarning_browser_%s_title` varchar(255) NOT NULL default '',\n",
				$browser['browser']);
			$strSql .= sprintf("`oldbrowserwarning_browser_%s_description` varchar(255) NOT NULL default '',\n",
				$browser['browser']);
			$strSql .= sprintf("`oldbrowserwarning_browser_%s_icon` blob NULL,\n",
				$browser['browser']);
		}

		$objFile = new File('system/modules/OldBrowserWarningFields/config/database.sql');
		$objFile->write('-- ********************************************************
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
' . $strSql . ') ENGINE=MyISAM DEFAULT CHARSET=utf8;
');
		$objFile->close();
	}
}
