<?php
/**
*
* groups [Slovak]
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

// This is for OGame.sk

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'						=> "/Zdroje.na(.){1,25}\[(.+?)špionáže(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Kovy).{1,}(Kryštály)/",
	'OG_SECOND_LINE'				=> "/(Deutérium).{1,}(Energia)/",

	'OG_ACTIVITY'					=> "/(Aktivity)\b(?!( betekent| in))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivitou sa rozumie, [^\.]*\./",
	'OG_BUILD'						=> "/(Budovy)/",
	'OG_CHANCE'						=> "/(Šanca na odvrátenie špionáže)(.*)/",
	'OG_DEFFENCE'					=> "/(Obrana)\b/",
	'OG_FLEET'						=> "/(Flotily)\b/iu",
	'OG_HEADER'						=> "/(Zdroje na .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Výsledky špionáže .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Výsledky špionáže .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Výskum)\b/",
));
?>