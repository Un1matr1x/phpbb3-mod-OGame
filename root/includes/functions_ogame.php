<?php

/**
*
* @package - OGame-Mod
* @copyright (c) Un1matr1x ( http://un1matr1x.de/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

global $phpbb_root_path, $config, $phpEx;
	
//Replace CR-Links with nicer Images
$search_kb 		= array();
$search_kb[0] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?show=([0-9]+)&amp;pw=[a-zA-Z0-9]{6}&amp;lang=[a-z_]{2,11}<#'; //?show= &pw= &lang= 
$search_kb[1] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?show=([0-9]+)&amp;lang=[a-z_]{2,11}&amp;pw=[a-zA-Z0-9]{6}<#'; //?show= &lang= &pw= 
$search_kb[11] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?show=([0-9]+)&amp;lang=[a-z_]{2,11}&amp;pw=<#'; //?show= &lang= &pw=
$search_kb[2] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?pw=[a-zA-Z0-9]{6}&amp;show=([0-9]+)&amp;lang=[a-z_]{2,11}<#'; //?pw= &show= &lang= 
$search_kb[3] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?pw=[a-zA-Z0-9]{6}&amp;lang=[a-z_]{2,11}&amp;show=([0-9]+)<#'; //?pw= &lang= &show= 
$search_kb[12] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?lang=[a-z_]{2,11}&amp;show=([0-9]+)&amp;pw=[a-zA-Z0-9]{6}<#'; //?lang= &show= &pw= 
$search_kb[4] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?lang=[a-z_]{2,11}&amp;show=([0-9]+)&amp;pw=<#'; //?lang= &show= &pw= 
$search_kb[5] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?lang=[a-z_]{2,11}&amp;pw=[a-zA-Z0-9]{6}&amp;show=([0-9]+)<#'; //?lang= &pw= &show=
$search_kb[6] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?show=([0-9]+)&amp;pw=[a-zA-Z0-9]{6}<#'; //show= &pw=  
$search_kb[10] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?lang=[a-z_]{2,11}&amp;show=([0-9]+)<#'; //?lang= &show= 
$search_kb[7] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?show=([0-9]+)&amp;lang=[a-z_]{2,11}<#'; //show= &lang= 
$search_kb[8] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?show=([0-9]+)&amp;pw=<#'; //?show= &pw=
$search_kb[9] 	= '#[^"]http://kb.un1matr1x.de/kb\.php\?show=([0-9]+)<#'; //?show= 

if (extension_loaded('gd') && function_exists('ImageCreateFromPNG') && function_exists('ImageAlphaBlending') && function_exists('ImageSaveAlpha') && function_exists('ImageColorAllocate') && function_exists('ImageTTFText'))
{
	$replace_kb = '><img src="' . $phpbb_root_path . 'cr_image.php?cr_id=\\1" alt="\\1" /><';
}
else
{
	$replace_kb = '><img src="' . $phpbb_root_path . 'images/ogame/cr_no_gd.png" alt="\\1" /><b>\\1</b><';
}

$text = preg_replace($search_kb, $replace_kb, $text);


if ($config['ogame_spy_conv'])
{
	$scanpattern = array();

	$dp = @opendir("{$phpbb_root_path}language");

		if ($dp)
		{
			while (($file = readdir($dp)) !== false)
			{
				if ($file[0] == '.' || !is_dir($phpbb_root_path . 'language/' . $file))
				{
					continue;
				}

				if (file_exists("{$phpbb_root_path}language/$file/mods/ogame_scanpattern.$phpEx"))
				{
					include ("{$phpbb_root_path}language/$file/mods/ogame_scanpattern.$phpEx");
					$scanpattern[$file] = $lang['OG_SCANPATTERN'];
				}
			}
			closedir($dp);
		}

	if (!function_exists('ogame_scan'))
	{
		function ogame_scan($treffer)
		{
				$line_1					= array();
				$line_2					= array();
				$header					= array();
				$activity				= array();
				$activity_exp			= array();
				$probs					= array();
				$probs_act				= array();
				$fleet					= array();
				$def					= array();
				$build					= array();
				$research				= array();
				$chance					= array();

				$dp = @opendir("{$phpbb_root_path}language");

				if ($dp)
				{
					$c = 0;
					while (($file = readdir($dp)) !== false)
					{
						if ($file[0] == '.' || !is_dir($phpbb_root_path . 'language/' . $file))
						{
							continue;
						}

						if (file_exists("{$phpbb_root_path}language/$file/mods/ogame_scanpattern.$phpEx"))
						{
							include ("{$phpbb_root_path}language/$file/mods/ogame_scanpattern.$phpEx");
																					  $line_1[$c]			= $lang['OG_FIRST_LINE'];
																					  $line_2[$c]			= $lang['OG_SECOND_LINE'];
							(!in_array($lang['OG_HEADER'],$header))					? $header[$file]		= $lang['OG_HEADER']			: '';
							(!in_array($lang['OG_ACTIVITY'],$activity))				? $activity[$file]		= $lang['OG_ACTIVITY']			: '';
							(!in_array($lang['OG_ACTIVITY_EXPLAIN'],$activity_exp))	? $activity_exp[$file]	= $lang['OG_ACTIVITY_EXPLAIN']	: '';
							(!in_array($lang['OG_PROBS_ACTIVITY'],$probs_act))		? $probs_act[$file]		= $lang['OG_PROBS_ACTIVITY']	: '';
							(!in_array($lang['OG_PROBS'],$probs))					? $probs[$file]			= $lang['OG_PROBS']				: '';
							(!in_array($lang['OG_FLEET'],$fleet))					? $fleet[$file]			= $lang['OG_FLEET']				: '';
							(!in_array($lang['OG_DEFFENCE'],$def))					? $def[$file]			= $lang['OG_DEFFENCE'] 			: '';
							(!in_array($lang['OG_BUILD'],$build))					? $build[$file]			= $lang['OG_BUILD']				: '';
							(!in_array($lang['OG_RESEARCH'],$research))				? $research[$file]		= $lang['OG_RESEARCH']			: '';
							(!in_array($lang['OG_CHANCE'],$chance))					? $chance[$file]		= $lang['OG_CHANCE']			: '';
							$c++;
						}
					}
					closedir($dp);
				}

			$txt=$treffer[0];

			//Array has to be build up
			if(substr_count($txt,"<br />")>0) 
			{
				$rows=explode("<br />",$txt);
			}
			else
			{
				$rows=explode("\n",$txt);
			}

			$countrows=count($rows);
			for ($i=0; $i<$countrows; $i++)
			{
				//Why the hell does the GF use . & , for thousands separator? lets fix this
				$rows[$i]=preg_replace("/([0-9]),([0-9])/",'\\1.\\2',$rows[$i]);

				//remove double whitespaces
				$rows[$i]=preg_replace("/  /",' ',$rows[$i]);

				//We don't need lines without content
				$rows[$i] = trim($rows[$i]);
				if (!$rows[$i])
				{
					unset ($rows[$i]);
				}
			}
			$rows = $rowsold = array_values(array_unique($rows));
			$countrows = count($rows);
			$precount = count($line_1);
			$p1 = $p2 = 0;
			for ($i=0; $i<$precount; $i++)
			{
				if (!$p1 && ($countrows > 1))
				{
					$p1 = preg_match($line_1[$i], $rows[1]);
				}
				if (!$p2 && ($countrows > 1))
				{
					$p2 = preg_match($line_2[$i], $rows[2]);
				}
			}

			if ($countrows>3 && $countrows<42 && $p1 && $p2){
			for ($i=0; $i<$countrows; $i++)
				{
					$rows[$i]=preg_replace($header,'<tr><th class="area esp_header" colspan="6">\\1[<span class="coords">\\2</span>]\\3</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace($activity,'<tr><th class="area esp_activ" colspan="6">\\1</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace($activity_exp,'',$rows[$i]);
					$rows[$i]=preg_replace($probs_act,'<tr><td colspan="4" class="activity">\\1<font color="red">\\2</font>\\3</td></tr>',$rows[$i]);
					$rows[$i]=preg_replace($probs,'<tr><td colspan="4" class="activity">\\1</td></tr>',$rows[$i]);
					$rows[$i]=preg_replace($fleet,'<tr><th class="area esp_fleet" colspan="6">\\1</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace($def,'<tr><th class="area esp_def" colspan="6">\\1</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace($build,'<tr><th class="area esp_build" colspan="6">\\1</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace($research,'<tr><th class="area esp_research" colspan="6">\\1</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace($chance,'<tr><th class="defense" colspan="4">\\1\\2</th></tr>',$rows[$i]);
					if($rowsold[$i]==$rows[$i])
					{
						preg_match_all("/(-?(?:\.?\d)+)/",$rows[$i],$dots, PREG_SET_ORDER);
						if(count($dots)==2) $rows[$i]=preg_replace("/(\D+)(-?(?:\.?\d)+)(\D+)(-?(?:\.?\d)+)/",'<tr><td class="key">\\1</td><td class="value">\\2</td><td class="key">\\3</td><td class="value">\\4</td></tr>',$rows[$i]);
						if(count($dots)==1) $rows[$i]=preg_replace("/(\D+)(-?(?:\.?\d)+)/",'<tr><td class="key">\\1</td><td class="value">\\2</td><td> </td><td> </td></tr>',$rows[$i]);
					}
				}
					$txt=join('',$rows);
					$txt='<div class="textWrapper"><div class="node"><table cellpadding="0" cellspacing="0" class="material spy">'.$txt.'</table></div></div>';
				}
			return $txt;
		}
	}

	$text = preg_replace_callback($scanpattern, 'ogame_scan', $text);
}

