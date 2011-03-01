<?php
/**
*
* groups [Italian]
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

// This is for OGame.it

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Risorse.su(.){1,25}\[(.+?)controspionaggio(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metallo).{1,}(Cristallo)/",
	'OG_SECOND_LINE'				=> "/(Deuterio).{1,}(Energia)/",

	'OG_ACTIVITY'					=> "/(Attività)(?!( significa| sul))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Attività significa [^\.]*\./",
	'OG_BUILD'						=> "/(Edifici)\b/",
	'OG_CHANCE'						=> "/(Possibilità di controspionaggio)(.*)/",
	'OG_DEFFENCE'					=> "/(Difesa)\b/",
	'OG_FLEET'						=> "/(Flotte)\b/iu",
	'OG_HEADER'						=> "/(Risorse su .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Il tuo spionaggio .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Il tuo spionaggio .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(?<!di )(Ricerca)\b/",
));
?>