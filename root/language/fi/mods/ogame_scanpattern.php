<?php
/**
*
* groups [Finnish]
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

// This is for fi.OGame.org

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Resurssit(.){1,25}\[(.+?)Vastavakoilun.mahdollisuus(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metalli).{1,}(Kristalli)/",
	'OG_SECOND_LINE'				=> "/(Deuterium).{1,}(Energia)/",

	'OG_ACTIVITY'					=> "/(Aktiivisuus)\b(?!( tarkoittaa| viimeiseen))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktiivisuus tarkoittaa, [^\.]*\./",
	'OG_BUILD'						=> "/(Rakennus)\b/",
	'OG_CHANCE'						=> "/(Vastavakoilun)\b(.*)/",
	'OG_DEFFENCE'					=> "/(Puolustus)\b/",
	'OG_FLEET'						=> "/(Laivueet)\b/",
	'OG_HEADER'						=> "/(Resurssit .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Vakoilutoimintasi ei .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Vakoilutoimintasi ei .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Tutkimus)\b/",
));
?>