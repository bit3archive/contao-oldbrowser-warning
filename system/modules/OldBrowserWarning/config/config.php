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


/** @var Input $Input */
$Input = Input::getInstance();


/**
 * Backport browser information
 */
if (version_compare(VERSION, '2.11', '<')) {
	/**
	 * Browsers (check OmniWeb before Safari and Opera Mini/Mobi before Opera!)
	 */
	$GLOBALS['TL_CONFIG']['browser'] = array
	(
		'MSIE'       => array('browser'=> 'ie',
		                      'shorty' => 'ie',
		                      'version'=> '/^.*?MSIE (\d+(\.\d+)*).*$/'),
		'Firefox'    => array('browser'=> 'firefox',
		                      'shorty' => 'fx',
		                      'version'=> '/^.*Firefox\/(\d+(\.\d+)*).*$/'),
		'Chrome'     => array('browser'=> 'chrome',
		                      'shorty' => 'ch',
		                      'version'=> '/^.*Chrome\/(\d+(\.\d+)*).*$/'),
		'OmniWeb'    => array('browser'=> 'omniweb',
		                      'shorty' => 'ow',
		                      'version'=> '/^.*Version\/(\d+(\.\d+)*).*$/'),
		'Safari'     => array('browser'=> 'safari',
		                      'shorty' => 'sf',
		                      'version'=> '/^.*Version\/(\d+(\.\d+)*).*$/'),
		'Opera Mini' => array('browser'=> 'opera-mini',
		                      'shorty' => 'oi',
		                      'version'=> '/^.*Opera Mini\/(\d+(\.\d+)*).*$/'),
		'Opera Mobi' => array('browser'=> 'opera-mobile',
		                      'shorty' => 'om',
		                      'version'=> '/^.*Version\/(\d+(\.\d+)*).*$/'),
		'Opera'      => array('browser'=> 'opera',
		                      'shorty' => 'op',
		                      'version'=> '/^.*Version\/(\d+(\.\d+)*).*$/'),
		'IEMobile'   => array('browser'=> 'ie-mobile',
		                      'shorty' => 'im',
		                      'version'=> '/^.*IEMobile (\d+(\.\d+)*).*$/'),
		'Camino'     => array('browser'=> 'camino',
		                      'shorty' => 'ca',
		                      'version'=> '/^.*Camino\/(\d+(\.\d+)*).*$/'),
		'Konqueror'  => array('browser'=> 'konqueror',
		                      'shorty' => 'ko',
		                      'version'=> '/^.*Konqueror\/(\d+(\.\d+)*).*$/')
	);
}


/**
 * System settings
 */
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie_title']                 = 'Internet Explorer';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie_url']                   = 'http://windows.microsoft.com/de-DE/internet-explorer/downloads/ie';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie_description']           = 'Standard Windows Browser von Microsoft.';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie_icon']                  = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_firefox_title']            = 'Mozilla Firefox';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_firefox_url']              = 'http://www.mozilla.com/de/firefox/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_firefox_description']      = 'Stark erweiterbarer und anpassbarer Open-Source-Browser.';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_firefox_icon']             = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_chrome_title']             = 'Google Chrome';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_chrome_url']               = 'http://www.google.com/chrome/intl/de/landing_tv.html';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_chrome_description']       = 'Kompakter und schneller Browser von Google mit automatischer Updatefunktion.';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_chrome_icon']              = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_omniweb_title']            = 'OmniWeb';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_omniweb_url']              = 'http://www.omnigroup.com/products/omniweb/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_omniweb_description']      = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_omniweb_icon']             = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_safari_title']             = 'Apple Safari';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_safari_url']               = 'http://www.apple.com/de/safari/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_safari_description']       = 'Komfortabler Browser von Apple für Mac OS und Windows.';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_safari_icon']              = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mini_title']         = 'Opera Mini';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mini_url']           = 'http://www.opera.com/mobile/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mini_description']   = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mini_icon']          = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mobile_title']       = 'Opera Mobile';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mobile_url']         = 'http://www.opera.com/mobile/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mobile_description'] = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera-mobile_icon']        = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera_title']              = 'Opera';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera_url']                = 'http://de.opera.com/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera_description']        = 'Umfangreicher Browser mit vielen Extrafunktionen.';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_opera_icon']               = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie-mobile_title']          = 'Internet Explorer Mobile';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie-mobile_url']            = 'http://www.microsoft.com/windowsphone/en-us/features/default.aspx#internet-explorer';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie-mobile_description']    = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_ie-mobile_icon']           = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_camino_title']             = 'Camino Browser';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_camino_url']               = 'http://caminobrowser.org/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_camino_description']       = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_camino_icon']              = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_konqueror_title']          = 'Konqueror';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_konqueror_url']            = 'http://www.konqueror.org/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_konqueror_description']    = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_konqueror_icon']           = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_rekonq_title']             = 'Rekonq';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_rekonq_url']               = 'http://rekonq.kde.org/';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_rekonq_description']       = '';
$GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_rekonq_icon']              = '';


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['oldbrowserwarning'] = array(
	'oldbrowserwarning_version'      => 'ContentOldBrowserWarningVersion',
	'oldbrowserwarning_alternatives' => 'ContentOldBrowserWarningAlternatives'
);


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('OldBrowserWarning', 'hookAddCustomRegexp');


/**
 * Show warning if htaccess is not installed
 */
if (TL_MODE == 'BE'
	&& $GLOBALS['TL_CONFIG']['oldbrowserwarning_use_htaccess']
	&& !in_array('htaccess', $this->getActiveModules())
) {
	foreach (array('en', $_SESSION['TL_LANGUAGE']) as $strLang) {
		$strFile = __DIR__ . '/../languages/' . $strLang . '/oldbrowserwarning.php';
		if (file_exists($strFile)) {
			include($strFile);
		}
	}
	$_SESSION['TL_ERROR'][] = $GLOBALS['TL_LANG']['oldbrowserwarning']['htaccess_missing'];
}


/**
 * Update dynamic database fields
 */
if (TL_MODE == 'BE' && (
	$Input->get('do') == 'repository_manager'
		&& $Input->get('update') == 'database'
		|| preg_match('#/contao/install.php$#', $_SERVER['SCRIPT_FILENAME']))
) {
	include(__DIR__ . '/../OldBrowserWarningDynamicFields.php');
	include(__DIR__ . '/../../library/File.php');
	$objDynamicFields = new OldBrowserWarningDynamicFields();
	$objDynamicFields->updateDynamicFields();
}
