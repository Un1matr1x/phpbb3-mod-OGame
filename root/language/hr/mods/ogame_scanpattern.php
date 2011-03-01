<?php
/**
*
* groups [Croatian]
*
* @author Unmatr1x admin@un1matr1x.de - http://un1matr1x.de
*
* @package language
* @copyright (c) 2011 Un1matr1x
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// This is for hr.OGame.org

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Resursi.na(.){1,25}\[(.+?)špijunaže(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metal).{1,}(Kristal)/",
	'OG_SECOND_LINE'				=> "/(Deuterij).{1,}(Energija)/",

	'OG_ACTIVITY'					=> "/(Aktivnost)\b(?!( znači| na))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivnost znači [^\.]*\./",
	'OG_BUILD'						=> "/(Gradi se)/",
	'OG_CHANCE'						=> "/(Šansa za obranu od špijunaže)\b(.*)/",
//	'OG_DEFFENCE'					=> take a look at CZ
	'OG_FLEET'						=> "/(Slotovi)\b/",
	'OG_HEADER'						=> "/(Resursi na .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Vaša špijunaža .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Vaša špijunaža .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/((?<!za )Istraživanje)\b(?! mreža)/",
));
?>