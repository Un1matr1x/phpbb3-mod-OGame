<?php
/**
*
* groups [Czech]
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

// This is for OGame.cz

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Suroviny.na(.){1,25}\[(.+?)odvrácení.špionáže(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Kov).{1,}(Krystaly)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energie)/",

	'OG_ACTIVITY'					=> "/(Aktivita)\b(?!( znamená| na))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivita znamená, [^\.]*\./",
	'OG_BUILD'						=> "/(Budovy)/",
	'OG_CHANCE'						=> "/(Šance na odvrácení)(.*)/",
	'OG_DEFFENCE'					=> "/(Obrana)\b/",
	'OG_FLEET'						=> "/(letek)\b/iu",
	'OG_HEADER'						=> "/(Suroviny na .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Špionáž neukázala .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Špionáž neukázala .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Výzkum)\b/",
));
?>