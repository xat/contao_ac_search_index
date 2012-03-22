<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
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
 * @copyright  Leo Unglaub 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    ac_search_index
 * @license    LGPL
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['ac_search_index'] = '
{title_legend},name,headline,type;
{ac_search_index_legend},ac_si_language,ac_si_root_sites,ac_si_blacklist,ac_si_minLength,ac_si_width,ac_si_maxChoices,ac_si_zIndex,ac_si_delay,ac_si_separator,ac_si_defaultValue,ac_si_autoSubmit,ac_si_selectFirst,ac_si_multiple,ac_si_autoTrim;
{redirect_legend},jumpTo;
{protected_legend:hide},protected;
{expert_legend:hide},guests,cssID,space';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_language'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_language'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'options_callback'	=> array('AcSearchIndexHelper', 'getSiteLanguages'),
	'eval'				=> array('tl_class'=>'long clr', 'multiple'=>true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_root_sites'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_root_sites'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'options_callback'	=> array('AcSearchIndexHelper', 'getRootSites'),
	'eval'				=> array('tl_class'=>'long clr', 'multiple'=>true)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_blacklist'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_blacklist'],
	'exclude'			=> true,
	'inputType'			=> 'textarea',
	'load_callback'		=> array(array('AcSearchIndexHelper', 'loadIgnoreWords')),
	'save_callback'		=> array(array('AcSearchIndexHelper', 'saveIgnoreWords')),
	'eval'				=> array('tl_class'=>'clr long', 'style'=>'height:100px;')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_minLength'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_minLength'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'default'			=> 2,
	'eval'				=> array('tl_class'=>'w50', 'rgxp'=>'digit')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_width'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_width'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'default'			=> 'inherit',
	'eval'				=> array('tl_class'=>'w50', 'rgxp'=>'alnum')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_maxChoices'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_maxChoices'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'default'			=> 10,
	'eval'				=> array('tl_class'=>'w50', 'rgxp'=>'digit')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_zIndex'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_zIndex'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'default'			=> 42,
	'eval'				=> array('tl_class'=>'w50', 'rgxp'=>'alnum')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_delay'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_delay'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'default'			=> 400,
	'eval'				=> array('tl_class'=>'w50', 'rgxp'=>'alnum')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_autoSubmit'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_autoSubmit'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'default'			=> 0,
	'eval'				=> array('tl_class'=>'w50 m12 clr')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_selectFirst'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_selectFirst'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'default'			=> 0,
	'eval'				=> array('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_multiple'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_multiple'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'default'			=> 0,
	'eval'				=> array('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_separator'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_separator'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'default'			=> ' ',
	'eval'				=> array('tl_class'=>'w50', 'rgxp'=>'alnum', 'maxlength'=>250)
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_autoTrim'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_autoTrim'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'default'			=> 0,
	'eval'				=> array('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['ac_si_defaultValue'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_module']['ac_si_defaultValue'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('tl_class'=>'w50', 'rgxp'=>'alnum', 'maxlength'=>250)
);

?>