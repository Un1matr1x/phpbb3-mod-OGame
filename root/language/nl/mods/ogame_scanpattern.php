<?php
/**
*
* groups [Dutch]
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

// This is for OGame.nl

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Grondstoffen.op(.){1,25}\[(.+?)contraspionage(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metaal).{1,}(Kristal)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energie)/",

	'OG_ACTIVITY'					=> "/(Activiteit)\b(?!( betekent| in))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Activiteit betekent [^\.]*\./",
	'OG_BUILD'						=> "/(Gebouw)\b/",
	'OG_CHANCE'						=> "/(Kans op contraspionage)(.*)/",
	'OG_DEFFENCE'					=> "/(Verdediging)\b/",
	'OG_FLEET'						=> "/(Vloten)\b/iu",
	'OG_HEADER'						=> "/(Grondstoffen op.*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Je spionage .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Je spionage .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Onderzoek)\b/",
));
?>