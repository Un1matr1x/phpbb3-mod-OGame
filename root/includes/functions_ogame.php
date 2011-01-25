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

//EspionageReports
if (!isset($scanpattern))
{
	$scanpattern					= array();
	$scanpattern['de']				= "/Rohstoffe.auf(.){1,25}\[(.+?)Spionageabwehr(.+?)\%/s";
	$scanpattern['org']				= "/Resources.at(.){1,25}\[(.+?)counter-espionage(.+?)\%/s";
	$scanpattern['fr']				= "/Ressources.sur(.){1,25}\[(.+?)contre-espionnage(.+?)\%/s";
	$scanpattern['hr']				= "/Resursi.na(.){1,25}\[(.+?)špijunaže(.+?)\%/s";
	$scanpattern['es_ar']				= "/Recursos.en(.){1,25}\[(.+?)Posibilidad.de.captura(.+?)\%/s";
	$scanpattern['es']				= "/Recursos.en(.){1,25}\[(.+?)contra-espionaje(.+?)\%/s";
}

if(!function_exists('ogame_scan'))
{
	function ogame_scan($treffer)
	{

			$line_1					= array();
			$line_2					= array();
			$header					= array();
			$activity				= array();
			$activity_exp			= array();
			$probs					= array();
			$fleet					= array();
			$def					= array();
			$build					= array();
			$research				= array();
			$chance					= array();

			//English
			$line_1[1]				= "/(Metal).{1,}(Crystal)/";
			$line_2[1]				= "/(Deuterium).{1,}(Energy)/";
			$header['org']			= "/(Resources at .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
			$activity['org']		= "/(Activity)(?!( on| within| means))/";
			$activity_exp['org']	= "/Activity means that the scanned player has been active on that planet or another player had fleet contact with the planet you scanned\./";
			$probs_act['org']		= "/(Your espionage .*)([1-5][0-9])(.*)\./";
			$probs['org']			= "/(Your espionage .*)\./";
			$fleet['org']			= "/(fleets)/";
			$fleet['org_1']			= "/(Fleets)/";
			$def['org']				= "/(Defense)/";
			$build['org']			= "/(Building)/";
			$research['org']		= "/(Research)(?!( Lab| Network))/";
			$chance['org']			= "/(Chance)(.*)/";

			//German
			$line_1[0]				= "/(Metall).{1,}(Kristall)/";
			$line_2[0]				= "/(Deuterium).{1,}(Energie)/";
			$header['de']			= "/(Rohstoffe auf .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
			$activity['de']			= "/(Aktivit".utf8_encode('ä')."t)(?!( auf| bedeutet))/";
			$activity['de_1']		= "/(Aktivit&auml;t)(?!( auf| bedeutet|  innerhalb))/";
			$activity['de_2']		= "/(Aktivität)(?!( auf| bedeutet| innerhalb))/";
			$activity_exp['de']		= "/Aktivität bedeutet, dass entweder der gescannte Spieler in dieser Zeit auf dem Planeten aktiv war oder ein anderer Spieler mit diesem Planeten Flottenkontakt hatte\./";
			$probs_act['de']		= "/(Dein Sondenscan .*)([1-5][0-9])(.*)\./";
			$probs['de']			= "/(Dein Sondenscan .*)\./";
			$fleet['de']			= "/(Flotten)/";
			$def['de']				= "/(Verteidigung)/";
			$build['de']			= "/(Geb&auml;ude)/";
			$build['de_1']			= "/(Geb".utf8_encode("ä")."ude)/";
			$build['de_2']			= "/(Gebäude)/";
			$research['de']			= "/(Forschung)\b/";
			$chance['de']			= "/(Chance)(.*)/";

			//French
			$line_1[2]				= "/(M".utf8_encode('é')."tal).{1,}(Cristal)/";
			$line_1[3]				= "/(Métal).{1,}(Cristal)/";
			$line_2[2]				= "/(Deut".utf8_encode('é')."rium).{1,}(Energie)/";
			$line_2[3]				= "/(Deutérium).{1,}(Energie)/";
			$header['fr']			= "/(Ressources sur .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
			$activity['fr']			= "/(Activité)(?!( signifie| sur| means))/";
			$activity_exp['fr']		= "/Activité signifie que le joueur scanné était actif sur la planète au moment du scan ou qu`un autre joueur a eu un contact de flotte avec cette planète à ce moment là\./";
			$probs_act['fr']		= "/(Le scanner .*)([1-5][0-9])(.*)\./";
			$probs['fr']			= "/(Le scanner .*)\./";
			$fleet['fr']			= "/(Flottes)/";
			$def['fr']				= "/(Défense)/";
			$build['fr']			= "/(Bâtiment)/";
			$research['fr']			= "/(?<!Laboratoire de )(Recherche)(?! intergalactique)/";
			$chance['fr']			= "/(Probabilité)(.*)/";

			//Croatian
			$line_1[4]				= "/(Metal).{1,}(Kristal)/";
			$line_2[4]				= "/(Deuterij).{1,}(Energija)/";
			$header['hr']			= "/(Resursi na .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
			$activity['hr']			= "/(Aktivnost)(?!( znači| na))/";
			$activity_exp['hr']		= "/Aktivnost znači da je skenirani igrač bio aktivan na toj planeti ili je neki drugi igrač imao kontakt flotom sa planetom koju ste skenirali\./";
			$activity_exp['hr_1']	= "/Aktivnost zna".utf8_encode('č')."i da je skenirani igra".utf8_encode('č')." bio aktivan na toj planeti ili je neki drugi igra".utf8_encode('č')." imao kontakt flotom sa planetom koju ste skenirali\./";
			$probs_act['hr']		= "/(Vaša špijunaža .*)([1-5][0-9])(.*)\./";
			$probs['hr']			= "/(Vaša špijunaža .*)\./";
			$fleet['hr']			= "/(Slotovi)/";
			$def['hr']				= "/(Obrana)/";
			$build['hr']			= "/(Gradi se)/";
			$research['hr']			= "/(Istraživanje)/";
			$chance['hr']			= "/(Šansa za obranu od špijunaže)(.*)/";

			//Spanish (+ Argentine +Mexican)
			$line_1[5]				= "/(Metal).{1,}(Cristal)/";
			$line_1[6]				= "/(Metal).{1,}(Cristal)/";
			$line_1[7]				= "/(Metal).{1,}(Cristal)/";
			$line_2[5]				= "/(Deuterio).{1,}(Energia)/";
			$line_2[6]				= "/(Deuterio).{1,}(Energía)/";
			$line_2[7]				= "/(Deuterio).{1,}(Energ".utf8_encode('í')."a)/";
			$header['es']			= "/(Recursos en .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
			$activity['es']			= "/(Actividad)(?!( significa| en))/";
			$activity_exp['es']		= "/Actividad significa que el jugador escaneado ha estado activo en el planeta o que otro jugador tuvo contacto de flota con el planeta escaneado\./";
			$activity_exp['es_ar']	= "/La actividad significa que el jugador espiado estubo activo en el planeta o que otro jugador hiso contacto de flota con el planeta escaneado\./";
			$activity_exp['es_mx']	= "/Actividad significa, que el jugador espiado ha estado activo en el planeta o que otro jugador tuvo contacto de flota con el planeta espiado\./";
			$probs_act['es']		= "/(Tu sonda .*)([1-5][0-9])(.*)\./";
			$probs_act['es_ar']		= "/(Tu espionaje .*)([1-5][0-9])(.*)\./";
			$probs['es']			= "/(Tu sonda .*)\./";
			$probs['es_ar']			= "/(Tu espionaje .*)\./";
			$fleet['es']			= "/(Flotas)/";
			$fleet['es_1']			= "/(flotas)/";
			$fleet['es_ar']			= "/(Escuadrón)/";
			$fleet['ar_1']			= "/(Escuadr".utf8_encode('ó')."n)/";
			$def['es']				= "/(Defensa)/";
			$build['es']			= "/(Edificio)/";
			$research['es']			= "/(?<!Laboratorio de )(Investigación)(?! inter)/";
			$research['es1']		= "/(?<!Laboratorio de )(Investigaci".utf8_encode('ó')."n)(?! inter)/";
			$chance['es']			= "/(Posibilidades)(.*)/";
			$chance['es_ar']		= "/(Posibilidad)(.*)/";

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
		
		//Remove FF-c&p-generated parts
		$countrows=count($rows);
		for ($i=0; $i<$countrows; $i++)
		{
			$rows[$i] = trim($rows[$i]);
			if (!$rows[$i])
			{
				unset ($rows[$i]);
			}
		}
		$rows = $rowsold = array_values(array_unique($rows));
		//print_r ($rows);
		$countrows=count($rows);
		$precount = count($line_1);
		$p1 = $p2 = 0;
		for ($i=0; $i<$precount; $i++)
		{
			if (!$p1)
			{
				$p1=preg_match($line_1[$i],$rows[1]);
			}

			if (!$p2)
			{
				$p2=preg_match($line_2[$i],$rows[2]);
			}
		}
		if ($countrows>3 && $countrows<42 && $p1 && $p2){
		for ($i=0; $i<$countrows; $i++)
			{
				$rows[$i]=preg_replace($header,'<tr><th class="area" colspan="6">\\1[<span class="coords">\\2</span>]\\3</th></tr>',$rows[$i]);
				$rows[$i]=preg_replace($activity,'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
				$rows[$i]=preg_replace($activity_exp,'',$rows[$i]);
				$rows[$i]=preg_replace($probs_act,'<tr><td colspan="4" class="activity">\\1<font color="red">\\2</font>\\3</td></tr>',$rows[$i]);
				$rows[$i]=preg_replace($probs,'<tr><td colspan="4" class="activity">\\1</td></tr>',$rows[$i]);
				$rows[$i]=preg_replace($fleet,'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
				$rows[$i]=preg_replace($def,'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
				$rows[$i]=preg_replace($build,'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
				$rows[$i]=preg_replace($research,'<tr><th class="area" colspan="6">\\1</th></tr>',$rows[$i]);
				$rows[$i]=preg_replace($chance,'<tr><th class="defense" colspan="4">\\1\\2</th></tr>',$rows[$i]);
				if($rowsold[$i]==$rows[$i])
				{
					preg_match_all("/(-?(?:\.?\d)+)/",$rows[$i],$dots, PREG_SET_ORDER);
					if(count($dots)==2) $rows[$i]=preg_replace("/([A-Za-zž:`".utf8_encode("ßöäüáàâéèêíìîóòôúùûÈÉž")."\-\t&; ]+)(-?(?:\.?\d)+)([A-Za-zž:`".utf8_encode("ßöäüáàâéèêíìîóòôúùûÈÉž")."\-\t&; ]+)(-?(?:\.?\d)+)/",'<tr><td class="key">\\1</td><td class="value">\\2</td><td class="key">\\3</td><td class="value">\\4</td></tr>',$rows[$i]);
					if(count($dots)==1) $rows[$i]=preg_replace("/([A-Za-zž:`".utf8_encode("ßöäüáàâéèêíìîóòôúùûÈÉž")."\-\t&; ]+)(-?(?:\.?\d)+)/",'<tr><td class="key">\\1</td><td class="value">\\2</td><td> </td><td> </td></tr>',$rows[$i]);
				}
			}
				$txt=join('',$rows);
				$txt='<div class="textWrapper"><div class="node"><table cellpadding="0" cellspacing="0" class="material spy">'.$txt.'</table></div></div>';
			}
		return $txt;
		}
}

$text = preg_replace_callback($scanpattern,'ogame_scan',$text);
?>