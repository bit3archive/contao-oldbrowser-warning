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
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_show_unsupported']      = array('Nicht-unterstützte Browser auflisten', 'Zeigt auch die Browser auf, die nicht als "unterstützt" gekennzeichnet sind.');
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_fixed_sorting']         = array('Vordefinierte Reihenfolge', 'Die Browser in einer vordefinierten Reihenfolge ausgeben und nicht zufällig sortieren.');
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_sorting']               = array('Reihenfolge', 'Wählen Sie hier die angezeigten Browser aus und definieren Sie deren Anzeigereihenfolge.');
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_support']     = array('Den Browser %s unterstützen', 'Wählen Sie diese Option, wenn Sie den Browser %s unterstützen wollen.');
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_version']     = array('Unterstütze Version des Browsers %s', 'Geben Sie hier die unterstütze Version ein.');
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_title']       = array('Benutzerdefinierter Titel für den Browser %s', 'Geben Sie hier einen benutzerdefinierten Titel für den Browser %s an, ansonsten wird "%s" ausgegeben.');
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_description'] = array('Benutzerdefinierter Anreißer für den Browser %s', 'Geben Sie hier einen benutzerdefinierten Anreißer für den Browser %s an, ansonsten wird "%2$s" ausgegeben.');
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_icon']        = array('Benutzerdefiniertes Icon für den Browser %s', 'Wählen Sie hier ein eigenes Icon für den Browser %s aus.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_legend'] = 'Warnung für veraltete Browser';
