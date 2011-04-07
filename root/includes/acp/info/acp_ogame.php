<?php
/**
*
* @package - OGame-Mod
* @copyright (c) Un1matr1x ( http://un1matr1x.de/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package module_install
*/
class acp_ogame_info
{
	function module()
	{		
		return array(
			'filename'	=> 'acp_ogame',
			'title'		=> 'OGAME',
			'version'	=> '1.1.3',
			'modes'		=> array(
				'adjust_news'	=> array(
					'title'		=> 'OGAME_CONFIG',
					'auth'		=> 'acl_a_board',
					'cat'		=> array('ACP_BOARD_CONFIGURATION'),
				),
			),
		);
	}
}

?>