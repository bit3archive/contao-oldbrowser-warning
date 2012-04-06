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


$this->loadLanguageFile('oldbrowserwarning');

/**
 * Content element
 */
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['oldbrowserwarning_version']          = array(
	'type'              => array('type', 'headline'),
	'oldbrowserwarning' => array('size'),
	'protected'         => array('protected'),
	'expert'            => array('guests,invisible,cssID,space')
);
$GLOBALS['TL_DCA']['tl_content']['metapalettes']['oldbrowserwarning_alternatives']     = array(
	'type'                                             => array('type', 'headline'),
	'oldbrowserwarning'                                => array('size', 'oldbrowserwarning_show_unsupported', 'oldbrowserwarning_fixed_sorting'),
	'oldbrowserwarning_fixed_sorting' => array('size', 'oldbrowserwarning_fixed_sorting', 'oldbrowserwarning_sorting'),
	'protected'                                        => array('protected'),
	'expert'                                           => array('guests,invisible,cssID,space')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_show_unsupported'] = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_show_unsupported'],
	'inputType' => 'checkbox',
	'eval'      => array('tl_class'=> 'clr w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_fixed_sorting']    = array(
	'label'     => &$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_fixed_sorting'],
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange'=>true, 'tl_class'=> 'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_sorting']          = array(
	'label'            => &$GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_sorting'],
	'inputType'        => 'checkboxWizard',
	'options_callback' => array('tl_content_oldbrowserwarning', 'getSortOptions'),
	'eval'             => array('tl_class'=> 'clr')
);

/**
 * Walk over browser configuration and add dca fields
 */
foreach ($GLOBALS['TL_CONFIG']['browser'] as $title=> $browser) {
	$name = $browser['browser'];

	$GLOBALS['TL_DCA']['tl_content']['metapalettes']['oldbrowserwarning_version']['oldbrowserwarning'][] = 'oldbrowserwarning_browser_' . $name . '_support';

	$GLOBALS['TL_DCA']['tl_content']['metapalettes']['oldbrowserwarning_alternatives']['oldbrowserwarning'][]                                = 'oldbrowserwarning_browser_' . $name . '_support';
	$GLOBALS['TL_DCA']['tl_content']['metapalettes']['oldbrowserwarning_alternatives']['oldbrowserwarningoldbrowserwarning_fixed_sorting'][] = 'oldbrowserwarning_browser_' . $name . '_support';

	$GLOBALS['TL_DCA']['tl_content']['metasubpalettes']['oldbrowserwarning_browser_' . $name . '_support'] = array(
		'oldbrowserwarning_browser_' . $name . '_version',
		'oldbrowserwarning_browser_' . $name . '_title',
		'oldbrowserwarning_browser_' . $name . '_description',
		'oldbrowserwarning_browser_' . $name . '_icon'
	);

	$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_browser_' . $name . '_support']     = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_support'][0], $title),
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_support'][1], $title)
		),
		'inputType' => 'checkbox',
		'eval'      => array('submitOnChange'=> true,
		                     'tl_class'      => 'clr')
	);
	$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_browser_' . $name . '_version']     = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_version'][0], $title),
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_version'][1], $title)
		),
		'inputType' => 'text',
		'eval'      => array('mandatory'=> true,
		                     'tl_class' => 'w50',
		                     'maxlength'=> 255,
		                     'rgxp'     => 'version')
	);
	$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_browser_' . $name . '_title']       = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_title'][0],
				$title,
				isset($GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_title'])
					? $GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_title']
					: ''),
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_title'][1],
				$title,
				isset($GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_title'])
					? $GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_title']
					: '')
		),
		'inputType' => 'text',
		'eval'      => array('tl_class' => 'w50',
		                     'maxlength'=> 255)
	);
	$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_browser_' . $name . '_description'] = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_description'][0],
				$title,
				isset($GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_description'])
					? $GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_description']
					: ''),
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_description'][1],
				$title,
				isset($GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_description'])
					? $GLOBALS['TL_CONFIG']['oldbrowserwarning']['browser_' . $name . '_description']
					: '')
		),
		'inputType' => 'text',
		'eval'      => array('tl_class' => 'clr long',
		                     'maxlength'=> 255)
	);
	$GLOBALS['TL_DCA']['tl_content']['fields']['oldbrowserwarning_browser_' . $name . '_icon']        = array(
		'label'     => array(
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_icon'][0], $title),
			sprintf($GLOBALS['TL_LANG']['tl_content']['oldbrowserwarning_browser_X_icon'][1], $title)
		),
		'inputType' => 'fileTree',
		'eval'      => array('files'     => true,
		                     'filesOnly' => true,
		                     'extensions'=> 'jpeg,jpg,gif,bmp',
		                     'fieldType' => 'radio')
	);
}

class tl_content_oldbrowserwarning
{
	public function getSortOptions()
	{
		$options = array();
		foreach ($GLOBALS['TL_CONFIG']['browser'] as $k=> $v)
		{
			$options[$v['browser']] = $k;
		}
		return $options;
	}
}
