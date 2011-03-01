<?php
/**
*
* groups [French]
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

// This is for OGame.fr

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Ressources.sur(.){1,25}\[(.+?)contre-espionnage(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Métal).{1,}(Cristal)/",
	'OG_SECOND_LINE'				=> "/(Deutérium).{1,}(Energie)/",

	'OG_ACTIVITY'					=> "/(Activité)(?!( signifie| sur| means))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Activité signifie [^\.]*\./",
	'OG_BUILD'						=> "/(Bâtiment)\b/",
	'OG_CHANCE'						=> "/(Probabilité)(.*)/",
	'OG_DEFFENCE'					=> "/(Défense)\b/",
	'OG_FLEET'						=> "/(Flottes)\b/iu",
	'OG_HEADER'						=> "/(Ressources sur .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Le scanner .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Le scanner .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(?<!de )(Recherche)\b/",
));
?>