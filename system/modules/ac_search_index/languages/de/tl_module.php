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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['ac_si_language']		= array('Sprachen', 'Bitte wählen Sie alle Sprachen aus die Verwendet werden sollen.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_blacklist']		= array('Sperrliste', 'Hier können Sie eine komma getrennte Liste von Wörtern eingeben welche nicht vervollständigt werden sollen.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_minLength']		= array('Mindestlänge', 'Bitte geben Sie eine Mindestlänge ein. Erst wenn diese Anzahl von Buchstaben überschritten wird, werdne Such-Vorschläge angezeigt.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_width']			= array('Breite', 'Bitte geben Sie eine Breite der Suchvorschläge ein.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_maxChoices']	= array('Maximale Vorschläge', 'Bitte geben Sie an wie viele Suchvorschläge auf einmal angezeigt werden sollen.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_zIndex']		= array('zIndex', 'Bitte geben Sie einen zIndex für die Vorschläge an.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_delay']			= array('Verzögerung', 'Bitte geben Sie die Verzögerung (in Milisekunden) an. Erst wenn keine neuen Buchstaben mehr eingegeben werden wird nach Ablauf der Verzögerung der Ajax Request gestartet.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_autoSubmit']	= array('automatisch Abschicken', 'Aktivieren Sie diese Option um das Suchformular automatisch nach der Auswahl eines Treffers abzuschicken.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_selectFirst']	= array('ersten Treffer markieren', 'Aktivieren Sie diese Option um den ersten Treffer automatisch zu markieren.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_multiple']		= array('mehrere Wörter erlauben', 'Aktivieren Sie diese Option um mehrere Wörter zu erlauben. Das Trennzeichen können Sie weiter oben definieren.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_separator']		= array('Trennzeichen', 'Bitte geben Sie das Trennzeichen ein, dass verwendet werden soll wenn mehrere Wörter erlaubt sind.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_autoTrim']		= array('Leerzeichen entfernen', 'Aktivieren Sie diese Option um Leerzeichen vor und am ende eines Wortes automatisch zu entfernen.');
$GLOBALS['TL_LANG']['tl_module']['ac_si_defaultValue']	= array('Standardwert', 'Bitte geben Sie einen Standard-Wert für das Suchformular ein. Dieser Wert wird automatisch entfernt sobald das Feld den "fokus" bekommt.');


/**
 * Palettes
 */
$GLOBALS['TL_LANG']['tl_module']['ac_search_index_legend'] = 'Auto Vervollständigung';

?>