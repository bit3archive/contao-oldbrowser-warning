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
 * Error messages
 */
$GLOBALS['TL_LANG']['oldbrowserwarning']['htaccess_missing'] = 'Das Modul <strong>Warnung für veraltete Browser</strong> ist so eingestellt, dass es die .htaccess Datei verwenden soll. Dafür ist die <a href="http://www.contao.org/de/extension-list/view/htaccess.html">htaccess</a> Erweiterung notwendig. Bitte <a href="contao/main.php?do=repository_catalog&view=htaccess">installieren</a> oder <a href="contao/main.php?do=settings">aktivieren</a> Sie die htaccess Erweiterung!';


/**
 * Frontend output
 */
$GLOBALS['TL_LANG']['oldbrowserwarning']['used_browser']        = '<strong>Sie verwenden:</strong><br>%s %s';
$GLOBALS['TL_LANG']['oldbrowserwarning']['featured_browser']    = '<strong>Unsere Empfehlung:</strong><br>%s <strong>%s</strong> oder neuer';
$GLOBALS['TL_LANG']['oldbrowserwarning']['update_browser']      = 'Aktualisieren Sie jetzt und surfen Sie <strong>sicherer</strong>, <strong>schneller</strong> und <strong>komfortabler</strong> als bisher!';
$GLOBALS['TL_LANG']['oldbrowserwarning']['supported_browser']   = 'Ihr Browser wird von uns unterstützt!';
$GLOBALS['TL_LANG']['oldbrowserwarning']['unsupported_browser'] = 'Ihr Browser wird von uns leider nicht unterstützt!';