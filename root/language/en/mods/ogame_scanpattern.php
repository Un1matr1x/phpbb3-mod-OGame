<?php
/**
*
* groups [English]
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

// This is for OGame.org

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Resources.at(.){1,25}\[(.+?)counter-espionage(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metal).{1,}(Crystal)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energy)/",

	'OG_ACTIVITY'					=> "/(Activity)\b(?!( on| within| means))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Activity means [^\.]*\./",
	'OG_BUILD'						=> "/(Building)\b/",
	'OG_CHANCE'						=> "/(Chance)\b(.*)/",
	'OG_DEFFENCE'					=> "/(Defense)\b/",
	'OG_FLEET'						=> "/(Fleets)\b/",
	'OG_HEADER'						=> "/(Resources at .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Your espionage .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Your espionage .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Research)\b(?!( Lab| Network))/",
));
?>