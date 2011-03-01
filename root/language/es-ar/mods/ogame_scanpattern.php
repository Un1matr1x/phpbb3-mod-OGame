<?php
/**
*
* groups [Spanish - Argentine Republic]
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

// This is for OGame.com.ar

$lang = array_merge($lang, array(

	'OG_SCANPATTERN'				=> "/Recursos.en(.){1,25}\[(.+?)Posibilidad.de.captura(.+?)\%/s",

	'OG_FIRST_LINE'					=> "/(Metal).{1,}(Cristal)/",
	'OG_SECOND_LINE'				=> "/(Deuterio).{1,}(Energia)/",

//	'OG_ACTIVITY'					=> take a look at ES
	'OG_ACTIVITY_EXPLAIN'			=> "/La actividad significa [^\.]*\./",
//	'OG_BUILD'						=> take a look at ES
	'OG_CHANCE'						=> "/(Posibilidad)\b(.*)/",
//	'OG_DEFFENCE'					=> take a look at ES
	'OG_FLEET'						=> "/(Escuadrón)\b/",
//	'OG_HEADER'						=> take a look at ES
	'OG_PROBS'						=> "/(Tu espionaje .*\..*)\./",
	'OG_PROBS_ACTIVITY'				=> "/(Tu espionaje .*)([1-5][0-9])(.*)\./",
//	'OG_RESEARCH'					=> take a look at ES
));
?>