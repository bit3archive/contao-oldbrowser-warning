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
 * Class ContentOldBrowserWarningAlternatives
 *
 *
 * @copyright  InfinitySoft 2010,2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    OldBrowserWarning
 */
class ContentOldBrowserWarningAlternatives extends ContentOldBrowserWarning
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_oldbrowserwarning_alternatives';


	/**
	 * Compile the current element
	 */
	protected function compile()
	{
		$ua = $this->Environment->agent;
		if (!isset($ua->versions)) {
			$this->extendBrowserVersions($ua);
		}

		$browsers = array();
		foreach ($GLOBALS['TL_CONFIG']['browser'] as $v)
		{
			// skip current browser
			if ($ua->browser != $v['browser']) {
				continue;
			}

			$details = $this->getBrowserDetails($v['browser']);

			// only add if show unsupported browsers or the browser is supported
			if ($this->oldbrowserwarning_show_unsupported
				|| $this->oldbrowserwarning_fixed_sorting
				|| $details->supported) {
				$browsers[$v['browser']] = $details;
			}
		}

		if ($this->oldbrowserwarning_fixed_sorting) {
			$sorting = deserialize($this->oldbrowserwarning_sorting, true);
			$buffer = array();
			foreach ($sorting as $sort) {
				if (isset($browsers[$sort])) {
					$buffer[$sort] = $browsers[$sort];
				}
			}
			$browsers = $buffer;
		} else {
			shuffle($browsers);
		}

		$this->Template->agent    = $ua;
		$this->Template->browsers = $browsers;
	}
}
