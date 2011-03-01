<?php
/**
*
* groups [Danish]
*
* @package - OGame-Mod
* @copyright (c) Un1matr1x ( http://un1matr1x.de/ )
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

// This is for OGame.dk

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Ressurcer.på(.){1,25}\[(.+?)spionage.forsvar(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metal).{1,}(Krystal)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energi)/",

	'OG_ACTIVITY'					=> "/(Aktivitet)\b(?!( betyder| ved| betyr| på| menas| där))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivitet betyder [^\.]*\./",
	'OG_BUILD'						=> "/(Bygning)\b/",
	'OG_CHANCE'						=> "/(Chancen)\b(.*)/",
	'OG_DEFFENCE'					=> "/(?<!spionage )(Forsvar)\b/",
	'OG_FLEET'						=> "/(Flåder)\b/iu",
	'OG_HEADER'						=> "/(Ressurcer på .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Din spionage .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Din spionage .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Forskning)\b/",
));
?>