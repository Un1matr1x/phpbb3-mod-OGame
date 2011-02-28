<?php
/**
*
* groups [Croatian]
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

// This is for OGame.com.hr

$lang = array_merge($lang, array(

	'SCANPATTERN'						=> "/Resursi.na(.){1,25}\[(.+?)špijunaže(.+?)\%/s",

));
?>