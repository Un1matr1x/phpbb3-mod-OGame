<?php
/**
*
* @package acp
* @version $Id: mod_version_check_version.php 51 2007-10-30 04:40:42Z Handyman $
* @copyright (c) 2007 StarTrekGuide
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package mod_version_check
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

class ogame_mod_version
{
	function version()
	{
		return array(
			'author'	=> 'Un1matr1x',
			'title'		=> 'OGame-Mod',
			'tag'		=> 'ogame_mod',
			'version'	=> '1.1.4',
			'file'		=> array('un1matr1x.de', 'check', 'ogm.xml'),
		);
	}
}

?>