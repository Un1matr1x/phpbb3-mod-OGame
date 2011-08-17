<?php
/**
*
* groups [German]
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

// This is for OGame.de

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Rohstoffe.auf(.){1,25}\[(.+?)Spionageabwehr(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metall).{1,}(Kristall)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energie)/",

	'OG_ACTIVITY'					=> "/(Aktivität)\b(?!( auf| bedeutet| innerhalb))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivität bedeutet,/",
	'OG_BUILD'						=> "/(Gebäude)\b/",
	'OG_CHANCE'						=> "/(Chance)\b(.*)/",
	'OG_DEFFENCE'					=> "/(Verteidigung)\b/",
	'OG_FLEET'						=> "/(Flotten)\b/iu",
	'OG_HEADER'						=> "/(Rohstoffe auf .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Dein Sondenscan .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Dein Sonden-Scan .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Forschung)\b/",
));
?>