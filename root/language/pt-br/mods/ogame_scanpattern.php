<?php
/**
*
* groups [Brazilian Portuguese]
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

// This is for OGame.com.br

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Recursos.no(.){1,25}\[(.+?)contra-espionagem(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metal).{1,}(Cristal)/",
	'OG_SECOND_LINE'				=> "/(Deutério).{1,}(Energia)/",

	'OG_ACTIVITY'					=> "/(Atividade)\b(?!( indica| no))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Atividade indica [^\.]*\./",
	'OG_BUILD'						=> "/(Edifícios)\b/",
	'OG_CHANCE'						=> "/(Probabilidade)\b(.*)/",
	'OG_DEFFENCE'					=> "/(Defesas\b)/",
	'OG_FLEET'						=> "/(Frotas)\b/iu",
	'OG_HEADER'						=> "/(Recursos no .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(A sua espionagem .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(A sua espionagem .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(?<!de )(Pesquisas)\b/",
));
?>