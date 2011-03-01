<?php
/**
*
* groups [Swedish]
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

// This is for OGame.se

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Resurser.på(.){1,25}\[(.+?)upptäckt(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metall).{1,}(Krystall)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energi)/",

	'OG_ACTIVITY'					=> "/(Aktivitet)\b(?!( betyder| ved| betyr| på| menas| där))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivitet menas att [^\.]*\./",
	'OG_BUILD'						=> "/(Byggnader)/",
	'OG_CHANCE'						=> "/(Chans för upptäckt)(.*)/",
	'OG_DEFFENCE'					=> "/(Försvar)\b/",
	'OG_FLEET'						=> "/(Flottor)\b/iu",
	'OG_HEADER'						=> "/(Resurser på .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Din spionagerapport .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Din spionagerapport .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Forskning)\b/",
));
?>