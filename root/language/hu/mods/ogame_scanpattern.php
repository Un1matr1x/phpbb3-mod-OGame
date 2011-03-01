<?php
/**
*
* groups [Hungarian]
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

// This is for OGame.hu

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Nyersanyagok.itt(.){1,25}\[(.+?)Esély.a.kémelhárításra(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Fém).{1,}(Kristály)/",
	'OG_SECOND_LINE'				=> "/(Deutérium).{1,}(Energia)/",

	'OG_ACTIVITY'					=> "/(Aktivitás)\b(?!( azt| a))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Az aktivitás azt jelenti, [^\.]*\./",
	'OG_BUILD'						=> "/(Építés)\b/",
	'OG_CHANCE'						=> "/(Esély a kémelhárításra)(.*)/",
	'OG_DEFFENCE'					=> "/(Védelem)\b/",
	'OG_FLEET'						=> "/(Flották)\b/",
	'OG_HEADER'						=> "/(Nyersanyagok itt.*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(A Kémed nem .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(A Kémed nem .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Kutatás)\b/",
));
?>