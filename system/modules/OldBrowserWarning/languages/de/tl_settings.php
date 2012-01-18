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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_use_htaccess']          = array('.htaccess verwenden', 'Anstatt bei jedem Aufruf den Browser via PHP zu überprüfen, kann dies auch über eine Rewrite Regel in der .htaccess erfolgen. Hierfür ist die Erweiterung <a href="http://www.contao.org/de/extension-list/view/htaccess.html">htaccess</a> erforderlich!');
$GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_title']       = array('Standard Titel für den Browser %s', 'Geben Sie hier den Standard Titel an für den Browser %s an.');
$GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_url']         = array('Update URL für den Browser %s', 'Geben Sie hier eine Update URL für den Browser %s ein.');
$GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_description'] = array('Standard Anreißer für den Browser %s', 'Geben Sie hier den Standard Anreißer an für den Browser %s an.');
$GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_icon']        = array('Standard Icon für den Browser %s', 'Wählen Sie hier ein eigenes Icon für den Browser %s aus.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_legend'] = 'Warnung für veraltete Browser';
