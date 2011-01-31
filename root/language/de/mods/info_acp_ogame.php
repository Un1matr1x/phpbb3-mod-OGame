<?php
/**
*
* groups [German]
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

	'CR_HOSTING'						=> 'KB-Hosting',
	'CR_HOSTING_EXPLAIN'				=> 'Gib deine KB-Hosting-Benutzer-ID ein.<br /> Bei http://kb.un1matr1x.de/memberlist.php?mode=viewprofile&u=<b>2</b> wäre es 2',
	'CR_HOSTING_MOUSEOVER_SHOW'			=> 'KB-Hosting-Sigi im Miniprofil',
	'CR_HOSTING_MOUSEOVER_SHOW_EXPLAIN' => 'zeige die KB-Hosting-Sigi beim MouseOver über das KB-Hosting-Icon an',
	'CR_HOSTING_PROFILE_SHOW'			=> 'KB-Hosting-Sigi im Profil',
	'CR_HOSTING_PROFILE_SHOW_EXPLAIN'	=> 'zeige die KB-Hosting-Sigi unter der Signatur oder den Kontaktdaten in der Mitgliederliste an',
	'CR_HOSTING_S'						=> 'erlaube KB-Hosting Verbindung',
	'CR_HOSTING_S_EXPLAIN'				=> 'aktiviert die KB-Hosting Einstellungen und zeigt die KB-Hosting-Benutzer-ID im (Mini-)Profil an',

	'IMG_ICON_CONTACT_MMOGAME'			=> 'Gameforge',
	'IMG_ICON_CONTACT_CR_HOSTING'		=> 'KB-Hosting',

	'MMOGAME'							=> 'Gameforge',
	'MMOGAME_EXPLAIN'					=> 'Gib deine Gameforge-ID ein.<br /> Bei http://gameforge.com/profile/show/Nickname-<b>47634</b> wäre es 47634',
	'MMOGAME_MOUSEOVER_SHOW'			=> 'G-Card im Miniprofil',
	'MMOGAME_MOUSEOVER_SHOW_EXPLAIN'	=> 'zeige die G-Card beim MouseOver über das G-Icon an',
	'MMOGAME_PROFILE_SHOW'				=> 'G-Card im Profil',
	'MMOGAME_PROFILE_SHOW_EXPLAIN'		=> 'zeige die G-Card unter der Signatur oder den Kontaktdaten in der Mitgliederliste an',
	'MMOGAME_S'							=> 'erlaube Gameforge Portal Verbindung',
	'MMOGAME_S_EXPLAIN'					=> 'aktiviert die Gameforge Einstellungen und zeigt die Gameforge-Benutzer-ID im (Mini-)Profil an',
	'MMOGAME_STYLE'						=> 'Standard G-Card Design',
	'MMOGAME_STYLE_EXPLAIN'				=> 'die Standart G-Card hat die Größe von 225px x 150px , die Slim-Variante ist nicht standart mit 452px x 102px',

	'OGAME'								=> 'OGame',
	'OGAME_CONFIG'						=> 'Einstellung',
	'OGAME_SAVED'						=> 'Einstellung gespeichert',

	'SPY_CONV'							=> 'Spioangeberichte verschönern',
	'SPY_CONV_EXPLAIN'					=> 'Konvertiert Spioberichte die mit "Ressourcen auf" beginnen und mit der Spioangeabwehr-Chance enden in ein schöneres Format.',


	'UCP_MMOGAME'						=> 'Gameforge-ID',
	'UCP_CR_HOSTING'					=> 'KB-Hosting-Profil-ID',

	'VIEW_MMOGAME'						=> 'Gameforge Profil ansehen',
	'VIEW_CR_HOSTING'					=> 'KB-Hosting Profil ansehen',

	'WRONG_DATA_MMOGAME'				=> 'Deine Gameforge-ID darf nur aus ganzen Zahlen bestehen.',
	'WRONG_DATA_CR_HOSTING'				=> 'Deine KB-Hosting-Benutzer-ID darf nur aus ganzen Zahlen bestehen.',
));
?>