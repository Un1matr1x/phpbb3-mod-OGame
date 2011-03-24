<?php
/**
*
* groups [English]
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

	'CR_HOSTING'						=> 'CR-Hosting',
	'CR_HOSTING_EXPLAIN'				=> 'Enter your CR-Hosting-User-ID.<br /> In case of  http://kb.un1matr1x.de/memberlist.php?mode=viewprofile&u=<b>123</b> choose 123',
	'CR_HOSTING_MOUSEOVER_SHOW'			=> 'CR-Hosting-Sigi on miniprofile',
	'CR_HOSTING_MOUSEOVER_SHOW_EXPLAIN' => 'Display the CR-Hosting-Sigi on mouseover the CR-Hosting-Icon',
	'CR_HOSTING_PROFILE_SHOW'			=> 'Allow CR-Hosting-Sigi on profile',
	'CR_HOSTING_PROFILE_SHOW_EXPLAIN'	=> 'Show the CR-Hosting-Sigi underneath the signature or contact data on the memberlist viewprofile tab',
	'CR_HOSTING_S'						=> 'Allow CR-Hosting connection',
	'CR_HOSTING_S_EXPLAIN'				=> 'Activate CR-Hosting-UCP settings and show the CR-Hosting-User-ID on (mini-)profiles.',

	'IMG_ICON_CONTACT_MMOGAME'			=> 'Gameforge',
	'IMG_ICON_CONTACT_CR_HOSTING'		=> 'CR-Hosting',

	'MMOGAME'							=> 'Gameforge-ID',
	'MMOGAME_EXPLAIN'					=> 'Enter your G-ID.<br />Choose "My Gameforge » Profile" and copy & past your G-ID or take a look at the url and in case of http://gameforge.com/profile/show/Nickname-<b>123</b> choose 123',
	'MMOGAME_MOUSEOVER_SHOW'			=> 'G-Card on miniprofile',
	'MMOGAME_MOUSEOVER_SHOW_EXPLAIN'	=> 'Display the G-Card on mouseover for the G-Icon',
	'MMOGAME_PROFILE_SHOW'				=> 'Allow G-Card on profile',
	'MMOGAME_PROFILE_SHOW_EXPLAIN'		=> 'Show the G-Card underneath the signature or contact data on the memberlist viewprofile tab',
	'MMOGAME_S'							=> 'Allow Gameforge Portal connection',
	'MMOGAME_S_EXPLAIN'					=> 'Activate G-UCP settings and show the Gameforge-ID on (mini-)profiles',
	'MMOGAME_STYLE'						=> 'Standard G-Card Design',
	'MMOGAME_STYLE_EXPLAIN'				=> 'Standard G-Card has the dimensions 225px x 150px , non-standard would be the slim on with 452px x 102px',

	'OGAME'								=> 'OGame',
	'OGAME_CONFIG'						=> 'Configuration',
	'OGAME_MOD'							=> 'Ogame Mod',
	'OGAME_SAVED'						=> 'saved setup',

	'SPY_CONV'							=> 'Prettify espionage reports',
	'SPY_CONV_EXPLAIN'					=> 'Convert supported espionage reports into a nicer looking.',

	'UCP_MMOGAME'						=> 'Gameforge ID',
	'UCP_CR_HOSTING'					=> 'CR-Hosting-Profile ID',

	'VIEW_MMOGAME'						=> 'visit Gameforge-Profile',
	'VIEW_CR_HOSTING'					=> 'visit CR-Hosting-Profile',

	'WRONG_DATA_MMOGAME'				=> 'The number you entered is not a valid G-ID.',
	'WRONG_DATA_CR_HOSTING'				=> 'The number you entered is not a valid CR-Hosting-User-ID.',
));
?>