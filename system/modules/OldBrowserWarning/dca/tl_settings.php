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
 * System configuration
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{oldbrowserwarning_legend:hide},';

$arrMetaPalette = array(
	'oldbrowserwarning' => array(':hide', 'oldbrowserwarning_use_htaccess')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['oldbrowserwarning_use_htaccess'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_use_htaccess'],
	'inputType' => 'checkbox'
);

foreach ($GLOBALS['TL_CONFIG']['browser'] as $title=> $browser) {
	$name = $browser['browser'];

	$arrMetaPalette['oldbrowserwarning'][] = 'oldbrowserwarning_browser_' . $name . '_title';
	$arrMetaPalette['oldbrowserwarning'][] = 'oldbrowserwarning_browser_' . $name . '_url';
	$arrMetaPalette['oldbrowserwarning'][] = 'oldbrowserwarning_browser_' . $name . '_description';
	$arrMetaPalette['oldbrowserwarning'][] = 'oldbrowserwarning_browser_' . $name . '_icon';

	$GLOBALS['TL_DCA']['tl_settings']['fields']['oldbrowserwarning_browser_' . $name . '_title'] = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_title'][0], $title),
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_title'][1], $title)
		),
		'inputType' => 'text',
		'eval'      => array('tl_class'=>'w50', 'maxlength'=>255)
	);
	$GLOBALS['TL_DCA']['tl_settings']['fields']['oldbrowserwarning_browser_' . $name . '_url'] = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_url'][0], $title),
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_url'][1], $title)
		),
		'inputType' => 'text',
		'eval'      => array('rgxp'=> 'url', 'tl_class'=>'w50')
	);
	$GLOBALS['TL_DCA']['tl_settings']['fields']['oldbrowserwarning_browser_' . $name . '_description'] = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_description'][0], $title),
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_description'][1], $title)
		),
		'inputType' => 'text',
		'eval'      => array('tl_class'=>'clr long', 'maxlength'=>255)
	);
	$GLOBALS['TL_DCA']['tl_settings']['fields']['oldbrowserwarning_browser_' . $name . '_icon']        = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_icon'][0], $title),
			sprintf($GLOBALS['TL_LANG']['tl_settings']['oldbrowserwarning_browser_X_icon'][1], $title)
		),
		'inputType' => 'fileTree',
		'eval'      => array('files'     => true,
		                     'filesOnly' => true,
		                     'extensions'=> 'jpeg,jpg,gif,bmp',
		                     'fieldType' => 'radio')
	);
}

MetaPalettes::appendTo('tl_settings', $arrMetaPalette);
