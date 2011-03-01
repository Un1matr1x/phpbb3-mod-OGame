<?php
/**
*
* groups [Lithuanian]
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

// This is for OGame.lt

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Resursų(.){1,25}\[(.+?)Kontra-šnipinėjimo(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metalas).{1,}(Kristalai)/",
	'OG_SECOND_LINE'				=> "/(Deuteris).{1,}(Energija)/",

	'OG_ACTIVITY'					=> "/(Aktyvumas)\b/",
	'OG_ACTIVITY_EXPLAIN'			=> "/Veiklumas reiškia, [^\.]*\./",
	'OG_BUILD'						=> "/(Pastatas)\b/",
	'OG_CHANCE'						=> "/(Kontra-šnipinėjimo šansas)(.*)/",
	'OG_DEFFENCE'					=> "/(Gynyba)\b/",
	'OG_FLEET'						=> "/(Laivynai)\b/iu",
	'OG_HEADER'						=> "/(Resursų .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",
	'OG_PROBS'						=> "/(Jūsų šnipinėjimo .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Jūsų šnipinėjimo .*)([1-5][0-9])(.*)\./",
	'OG_RESEARCH'					=> "/(Išradimai)\b/",
));
?>