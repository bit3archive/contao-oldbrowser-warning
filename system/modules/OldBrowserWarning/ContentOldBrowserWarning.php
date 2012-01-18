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
 * Class ContentOldBrowserWarning
 *
 *
 * @copyright  InfinitySoft 2010,2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    OldBrowserWarning
 */
abstract class ContentOldBrowserWarning extends ContentElement
{
	public function getBrowserDetails($browser, $versions = null)
	{
		$details = new stdClass();

		$strKey             = 'oldbrowserwarning_browser_' . $browser . '_support';
		$details->supported = $this->$strKey ? true : false;

		$strKey                    = 'oldbrowserwarning_browser_' . $browser . '_version';
		$details->supportedVersion = $this->$strKey;

		if ($versions) {
			$intLength            = count(explode('.', $this->details->supportedVersion));
			$details->usedVersion = implode('.', array_slice($versions, 0, $intLength));
		} else {
			$details->usedVersion = '';
		}

		$strKey         = 'oldbrowserwarning_browser_' . $browser . '_title';
		$details->title = $this->$strKey
			? $this->$strKey
			: $GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_' . $browser . '_title'];

		$strKey               = 'oldbrowserwarning_browser_' . $browser . '_description';
		$details->description = $this->$strKey
			? $this->$strKey
			: $GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_' . $browser . '_description'];

		$strKey        = 'oldbrowserwarning_browser_' . $browser . '_icon';
		$details->icon = $this->$strKey
			? $this->$strKey
			: ($GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_' . $browser . '_icon']
				? $GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_' . $browser . '_icon']
				: sprintf('system/modules/OldBrowserWarning/html/' . $browser . '.png'));

		$details->url = $GLOBALS['TL_CONFIG']['oldbrowserwarning_browser_' . $browser . '_url'];

		return $details;
	}


	public function extendBrowserVersions(stdClass &$ua)
	{
		foreach ($GLOBALS['TL_CONFIG']['browser'] as $v)
		{
			if ($v['browser'] == $ua->browser) {
				$ua->versions = explode('.', preg_replace($v['version'], '$1', $ua->string));
				return;
			}
		}
		$ua->versions = array(0, 0, 0);
	}
}
