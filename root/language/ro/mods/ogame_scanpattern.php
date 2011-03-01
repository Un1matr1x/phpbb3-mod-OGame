<?php
/**
*
* groups [Romanian]
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

// This is for OGame.ro

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Resurse.la(.){1,25}\[(.+?)contra-spionaj(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metal).{1,}(Cristal)/",
	'OG_SECOND_LINE'				=> "/(Deuteriu).{1,}(Energie)/",

	'OG_ACTIVITY'					=> "/(Activitate)\b(?! pe)/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Activitatea inseamna ca [^\.]*\./",
	'OG_BUILD'						=> "/(Cladire)\b/",
	'OG_CHANCE'						=> "/(Sansa de contra-spionaj)(.*)/",
	'OG_DEFFENCE'					=> "/(Aparare)\b/",
	'OG_FLEET'						=> "/(Flote)\b/",
	'OG_HEADER'						=> "/(Resurse la .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Proba ta de spionaj .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Proba ta de spionaj .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(?<!de )(Cercetari)\b/",
));
?>