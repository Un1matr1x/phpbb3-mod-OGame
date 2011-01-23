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

global $phpbb_root_path;

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

	if (extension_loaded('gd') && function_exists('gd_info'))
	{
		$replace_kb = '><img src="' . $phpbb_root_path . 'images/ogame/cr.php?cr_id=\\1" alt="\\1" /><';
	}
	else
	{
		$replace_kb = '><img src="' . $phpbb_root_path . 'images/ogame/cr_no_gd.png" alt="\\1" /><b>\\1</b><';
	}
	
	$text = preg_replace($search_kb, $replace_kb, $text);

if(!function_exists('ogame_scan_de'))
{
	function ogame_scan_de($treffer)
	{
            $txt=$treffer[0];
            if(substr_count($txt,"<br />")>0) $rows=split("<br />",$txt);
            else $rows=split("\n",$txt);
            $rowsold=$rows;
            $countrows=count($rows);
            $p1=preg_match("/(Metall).{1,}(Kristall)/",$rows[1]);
            $p2=preg_match("/(Deuterium).{1,}(Energie)/",$rows[2]);
            if ($countrows>3 && $countrows<42 && $p1 && $p2){
                for ($i=0; $i<$countrows; $i++){
                    $rows[$i]=preg_replace("/(Rohstoffe auf .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",'<tr><th class="area" colspan="6">\\1[<span class="coords">\\2</span>]\\3</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace("/(Dein Sondenscan .*)\./",'<tr><th class="area" colspan="6">Aktivit'.utf8_encode("ä").'t</th></tr><tr><td colspan="4" class="activity">\\1</td></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Flotten)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Verteidigung)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Geb".utf8_encode("ä")."ude)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Geb&auml;ude)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Forschung)\b/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Chance)(.*)/",'<tr><th class="defense" colspan="4">\\1\\2</th></tr>',$rows[$i]);
                    if($rowsold[$i]==$rows[$i]){
                        preg_match_all("/(-?(?:\.?\d)+)/",$rows[$i],$dots, PREG_SET_ORDER);
                        if(count($dots)==2) $rows[$i]=preg_replace("/([A-Za-z:".utf8_encode("ßöäü")."\t&; ]+)(-?(?:\.?\d)+)([A-Za-z:".utf8_encode("ßöäü")."\t&; ]+)(-?(?:\.?\d)+)/",'<tr><td class="key">\\1</td><td class="value">\\2</td><td class="key">\\3</td><td class="value">\\4</td></tr>',$rows[$i]);
                        if(count($dots)==1) $rows[$i]=preg_replace("/([A-Za-z:".utf8_encode("ßöäü")."\t&; ]+)(-?(?:\.?\d)+)/",'<tr><td class="key" colspan="3">\\1</td><td class="value" colspan="1">\\2</td></tr>',$rows[$i]);
                    }
                }
				//Aktivität eliminieren
				$rows[3] = '';
                $txt=join('',$rows);
                $txt='<div class="textWrapper"><div class="node"><table cellpadding="0" cellspacing="0" class="material spy">'.$txt.'</table></div></div>';
            }				
        return $txt;
        }
}

$scanpattern="/Rohstoffe.auf(.){1,25}\[(.+?)Spionageabwehr(.+?)\%/s";
$text = preg_replace_callback($scanpattern,'ogame_scan_de',$text);

if(!function_exists('ogame_scan_org'))
{
	function ogame_scan_org($treffer)
	{
            $txt=$treffer[0];
            if(substr_count($txt,"<br />")>0) $rows=split("<br />",$txt);
            else $rows=split("\n",$txt);
            $rowsold=$rows;
            $countrows=count($rows);
            $p1=preg_match("/(Metal).{1,}(Crystal)/",$rows[1]);
            $p2=preg_match("/(Deuterium).{1,}(Energy)/",$rows[2]);
            if ($countrows>3 && $countrows<42 && $p1 && $p2){
                for ($i=0; $i<$countrows; $i++){
                    $rows[$i]=preg_replace("/(Resources at .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/",'<tr><th class="area" colspan="6">\\1[<span class="coords">\\2</span>]\\3</th></tr>',$rows[$i]);
					$rows[$i]=preg_replace("/(Your espionage .*)\./",'<tr><th class="area" colspan="6">Activity</th></tr><tr><td colspan="4" class="activity">\\1</td></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(fleets)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Fleets)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Defense)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Building)/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Research)(?!( Lab| Network))/",'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
                    $rows[$i]=preg_replace("/(Chance)(.*)/",'<tr><th class="defense" colspan="4">\\1\\2</th></tr>',$rows[$i]);
                    if($rowsold[$i]==$rows[$i]){
                        preg_match_all("/(-?(?:\.?\d)+)/",$rows[$i],$dots, PREG_SET_ORDER);
                        if(count($dots)==2) $rows[$i]=preg_replace("/([\-A-Za-z:".utf8_encode("ßöäü")."\t&; ]+)(-?(?:\.?\d)+)([\-A-Za-z:".utf8_encode("ßöäü")."\t&; ]+)(-?(?:\.?\d)+)/",'<tr><td class="key">\\1</td><td class="value">\\2</td><td class="key">\\3</td><td class="value">\\4</td></tr>',$rows[$i]);
                        if(count($dots)==1) $rows[$i]=preg_replace("/([\-A-Za-z:".utf8_encode("ßöäü")."\t&; ]+)(-?(?:\.?\d)+)/",'<tr><td class="key" colspan="3">\\1</td><td class="value" colspan="1">\\2</td></tr>',$rows[$i]);
                    }
                }
				//Aktivität eliminieren
				$rows[3] = '';
                $txt=join('',$rows);
                $txt='<div class="textWrapper"><div class="node"><table cellpadding="0" cellspacing="0" class="material spy">'.$txt.'</table></div></div>';
            }				
        return $txt;
        }
}

$scanpattern="/Resources.at(.){1,25}\[(.+?)counter-espionage(.+?)\%/s";
$text = preg_replace_callback($scanpattern,'ogame_scan_org',$text);
?>