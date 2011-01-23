<?php
/**
 *
 * @author Unimatrix_0 (Falk Seidel) unimatrix_0@gmx.net
 * @copyright (c) 2011 Un1matr1x
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'OGame Mod';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'ogm_version';


// The language file which will be included when installing
//$language_file = 'mods/ogame';


/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(

	//Version 0.0.1 First Version
	// https://github.com/Un1matr1x/phpbb3-mod-OGame/zipball/0.0.1
	'0.0.1 -dev' => array(

		'table_column_add' => array(
			array('phpbb_users', 'user_mmogame', array('VCHAR:20', '')),
			array('phpbb_users', 'user_cr_hosting', array('VCHAR:20', '')),
		),
	),
	
	// Version 0.0.2 MMOCard & CRHosting-Signature Version
	// https://github.com/Un1matr1x/phpbb3-mod-OGame/zipball/0.0.2
	'0.0.2 -dev'	=> array(
	),

	// Version 0.0.3 ACP-Page
	// https://github.com/Un1matr1x/phpbb3-mod-OGame/zipball/0.0.3
	'0.0.3 -dev'	=> array(
	
		'config_add' => array(
			array('ogame_mmogame_show', 1),
			array('ogame_cr_hosting_show', 1),
		),
		
		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'OGAME'),

			array('acp', 'OGAME', array(
					'module_basename'	=> 'ogame',
					'module_langname'	=> 'OGAME_CONFIG',
					'module_mode'		=> 'overview',
					'module_auth'		=> 'acl_a_board',
				),
			),
			
		),
	
	),
	
	// Version 0.1.0 CR-Hosting Link Replacement
	// https://github.com/Un1matr1x/phpbb3-mod-OGame/zipball/0.1.0
	'0.1.0 -dev'	=> array(
	),
	
	// Version 0.2.0 ScannBB added and improved
	// https://github.com/Un1matr1x/phpbb3-mod-OGame/zipball/0.2.0
	'0.2.0 -dev'	=> array(
	),
	
	// Version 0.2.1 more ACP setings added
	// https://github.com/Un1matr1x/phpbb3-mod-OGame/zipball/0.2.1
	'0.2.1 -dev'	=> array(
	
		'config_add' => array(
			array('ogame_mmogame_card_style', 1),
			array('ogame_mmogame_card_profile_show', 1),
			array('ogame_mmogame_card_mouseover_show', 1),
			array('ogame_cr_hosting_card_profile_show', 1),
			array('ogame_cr_hosting_card_mouseover_show', 1),
		),
	),
	
	// Version 0.2.2 more languages & some fixes
	// https://github.com/Un1matr1x/phpbb3-mod-OGame/zipball/0.2.2
	'0.2.2 -dev'	=> array(
	),
	
);

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>