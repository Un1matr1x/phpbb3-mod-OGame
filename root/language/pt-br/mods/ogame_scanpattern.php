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

//	'OG_FIRST_LINE'					=> take a look at PT
//	'OG_SECOND_LINE'				=> take a look at PT

	'OG_ACTIVITY'					=> "/(Atividade)\b(?!( indica| no))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Atividade indica [^\.]*\./",
//	'OG_BUILD'						=> take a look at PT,
//	'OG_CHANCE'						=> take a look at PT,
//	'OG_DEFFENCE'					=> take a look at PT,
//	'OG_FLEET'						=> take a look at PT,
	'OG_HEADER'						=> "/(Recursos no .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
//	'OG_PROBS'						=> take a look at PT,
//	'OG_PROBS_ACTIVITY'				=> take a look at PT,
//	'OG_RESEARCH'					=> take a look at PT,
));
?>