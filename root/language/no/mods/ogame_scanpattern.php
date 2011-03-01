<?php
/**
*
* groups [Norwegian]
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

// This is for OGame.no

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Ressurser.på(.){1,25}\[(.+?)spionasjeforsvar(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metall).{1,}(Krystall)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energi)/",

	'OG_ACTIVITY'					=> "/(Aktivitet)\b(?!( betyder| ved| betyr| på| menas| där))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivitet betyr at [^\.]*\./",
	'OG_BUILD'						=> "/(Bygning)\b/",
	'OG_CHANCE'						=> "/(Sjanse for spionasjeforsvar)(.*)/",
	'OG_DEFFENCE'					=> "/(?<!spionage )(Forsvar)\b/",
	'OG_FLEET'						=> "/(Flåter)\b/iu",
	'OG_HEADER'						=> "/(Ressurser på.*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Din spionasje .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Din spionasje .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Forskning)\b/",
));
?>