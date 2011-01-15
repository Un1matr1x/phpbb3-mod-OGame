<?php
/**
*
* groups [German]
*
* @author Unmatr1x admin@un1matr1x.de - http://un1matr1x.de
*
* @package language
* @version $Id$
* @copyright (c) 2007 Deine Gruppe
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(

	'CR_HOSTING'					=> 'CR-Hosting',
	'CR_HOSTING_EXPLAIN'			=> 'Enter your CR-Hosting-User-ID.<br /> In case of  http://kb.un1matr1x.de/memberlist.php?mode=viewprofile&u=<b>2</b> choose 2',
	'CR_HOSTING_S_EXPLAIN'			=> 'Show the CR-Hosting-ID & Signature',

	'IMG_ICON_CONTACT_MMOGAME'		=> 'MMOGame',
	'IMG_ICON_CONTACT_CR_HOSTING'	=> 'CR-Hosting',

	'MMOGAME'						=> 'MMOGame',
	'MMOGAME_EXPLAIN'				=> 'Enter your MMOGame-ID.<br /> In case of http://de.mmogame.com/profile/show/Un1matr1x-<b>47634</b> choose 47634',
	'MMOGAME_S_EXPLAIN'				=> 'Show the MMOGame-ID & MMOCard',

	'OGAME'							=> 'OGame',
	'OGAME_CONFIG'					=> 'Configuration',
	'OGAME_SAVED'					=> 'saved setup',
	
	'UCP_MMOGAME'					=> 'MMOGame-ID',
	'UCP_CR_HOSTING'				=> 'CR-Hosting-Profile-ID',
	
	'VIEW_MMOGAME'					=> 'visit MMOGame-Profile',
	'VIEW_CR_HOSTING'				=> 'visit CR-Hosting-Profile',
	
	'WRONG_DATA_MMOGAME'			=> 'Your MMOGame-ID should only contain Integer.',
	'WRONG_DATA_CR_HOSTING'			=> 'Your CR-Hosting-User-ID should only contain Integer.',
));
?>