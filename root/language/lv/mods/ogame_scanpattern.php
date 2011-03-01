<?php
/**
*
* groups [Latvian]
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

// This is for OGame.lv

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Resursi.uz(.){1,25}\[(.+?)Pretspiegošanas(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metāls).{1,}(Kristāls)/",
	'OG_SECOND_LINE'				=> "/(Deitērijs).{1,}(Enerģija)/",

	'OG_ACTIVITY'					=> "/(Aktivitāte)\b(?!( nozīmē| sul))/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Aktivitāte nozīmē, [^\.]*\./",
	'OG_BUILD'						=> "/(Celtne)\b/",
	'OG_CHANCE'						=> "/(Pretspiegošanas iespēja)(.*)/",
	'OG_DEFFENCE'					=> "/(Aizsardzība)\b/",
//	'OG_FLEET'						=> take a look at RO
	'OG_HEADER'						=> "/(Resursi uz .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Jūsu spiegošana .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Jūsu spiegošana .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Pētniecība)\b/",
));
?>