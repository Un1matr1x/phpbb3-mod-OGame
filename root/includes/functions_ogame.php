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

global $phpbb_root_path, $config;

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


if ($config['ogame_spy_conv'])
{
	$scanpattern					= array();
	$scanpattern['de']				= "/Rohstoffe.auf(.){1,25}\[(.+?)Spionageabwehr(.+?)\%/s";
	$scanpattern['org']				= "/Resources.at(.){1,25}\[(.+?)counter-espionage(.+?)\%/s";
	$scanpattern['fr']				= "/Ressources.sur(.){1,25}\[(.+?)contre-espionnage(.+?)\%/s";
	$scanpattern['hr']				= "/Resursi.na(.){1,25}\[(.+?)špijunaže(.+?)\%/s";
	$scanpattern['es']				= "/Recursos.en(.){1,25}\[(.+?)contra-espionaje(.+?)\%/s";
	$scanpattern['es_ar']			= "/Recursos.en(.){1,25}\[(.+?)Posibilidad.de.captura(.+?)\%/s";
	$scanpattern['pt']				= "/Recursos.em(.){1,25}\[(.+?)contra-espionagem(.+?)\%/s";
	$scanpattern['pt_br']			= "/Recursos.no(.){1,25}\[(.+?)contra-espionagem(.+?)\%/s";
	$scanpattern['cz']				= "/Suroviny.na(.){1,25}\[(.+?)odvrácení.špionáže(.+?)\%/s";
	$scanpattern['dk']				= "/Ressurcer.på(.){1,25}\[(.+?)spionage.forsvar(.+?)\%/s";
	$scanpattern['fi']				= "/Resurssit(.){1,25}\[(.+?)Vastavakoilun.mahdollisuus(.+?)\%/s";
	$scanpattern['hu']				= "/Nyersanyagok.itt(.){1,25}\[(.+?)Esély.a.kémelhárításra(.+?)\%/s";
	$scanpattern['nl']				= "/Grondstoffen.op(.){1,25}\[(.+?)contraspionage(.+?)\%/s";
	$scanpattern['no']				= "/Ressurser.på(.){1,25}\[(.+?)spionasjeforsvar(.+?)\%/s";
	$scanpattern['sk']				= "/Zdroje.na(.){1,25}\[(.+?)špionáže(.+?)\%/s";
	$scanpattern['se']				= "/Resurser.på(.){1,25}\[(.+?)upptäckt(.+?)\%/s";
	$scanpattern['ro']				= "/Resurse.la(.){1,25}\[(.+?)contra-spionaj(.+?)\%/s";
	$scanpattern['it']				= "/Risorse.su(.){1,25}\[(.+?)controspionaggio(.+?)\%/s";
	$scanpattern['lt']				= "/Resursų(.){1,25}\[(.+?)Kontra-šnipinėjimo(.+?)\%/s";
	$scanpattern['lv']				= "/Resursi.uz(.){1,25}\[(.+?)Pretspiegošanas(.+?)\%/s";

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

				//English (org & us)
				$line_1[1]				= "/(Metal).{1,}(Crystal)/";
				$line_2[1]				= "/(Deuterium).{1,}(Energy)/";
				$header['org']			= "/(Resources at .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['org']		= "/(Activity)\b(?!( on| within| means))/";
				$activity_exp['org']	= "/Activity means that the scanned player has been active on that planet or another player had fleet contact with the planet you scanned\./";
				$probs_act['org']		= "/(Your espionage .*)([1-5][0-9])(.*)\./";
				$probs['org']			= "/(Your espionage .*)\./";
				$fleet['org']			= "/(fleets)\b/";
				$fleet['org_1']			= "/(Fleets)\b/";
				$def['org']				= "/(Defense)\b/";
				$build['org']			= "/(Building)\b/";
				$research['org']		= "/(Research)\b(?!( Lab| Network))/";
				$chance['org']			= "/(Chance)\b(.*)/";

				//German
				$line_1[0]				= "/(Metall).{1,}(Kristall)/";
				$line_2[0]				= "/(Deuterium).{1,}(Energie)/";
				$header['de']			= "/(Rohstoffe auf .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['de']			= "/(Aktivit".utf8_encode('ä')."t)\b(?!( auf| bedeutet))/";
				$activity['de_1']		= "/(Aktivit&auml;t)\b(?!( auf| bedeutet|  innerhalb))/";
				$activity['de_2']		= "/(Aktivität)\b(?!( auf| bedeutet| innerhalb))/";
				$activity_exp['de']		= "/Aktivität bedeutet, dass entweder der gescannte Spieler in dieser Zeit auf dem Planeten aktiv war oder ein anderer Spieler mit diesem Planeten Flottenkontakt hatte\./";
				$probs_act['de']		= "/(Dein Sondenscan .*)([1-5][0-9])(.*)\./";
				$probs['de']			= "/(Dein Sondenscan .*)\./";
				$fleet['de']			= "/(Flotten)\b/";
				$def['de']				= "/(Verteidigung)\b/";
				$build['de']			= "/(Geb&auml;ude)\b/";
				$build['de_1']			= "/(Geb".utf8_encode("ä")."ude)\b/";
				$build['de_2']			= "/(Gebäude)\b/";
				$research['de']			= "/(Forschung)\b/";
			//	$chance['de']			take a look at org

				//French
				$line_1[2]				= "/(M".utf8_encode('é')."tal).{1,}(Cristal)/";
				$line_1[3]				= "/(Métal).{1,}(Cristal)/";
				$line_2[2]				= "/(Deut".utf8_encode('é')."rium).{1,}(Energie)/";
				$line_2[3]				= "/(Deutérium).{1,}(Energie)/";
				$header['fr']			= "/(Ressources sur .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['fr']			= "/(Activité)(?!( signifie| sur| means))/";
				$activity['fr_1']		= "/(Activit".utf8_encode('é').")(?!( signifie| sur| means))/";
				$activity_exp['fr']		= "/Activité signifie que le joueur scanné était actif sur la planète au moment du scan ou qu`un autre joueur a eu un contact de flotte avec cette planète à ce moment là\./";
				$probs_act['fr']		= "/(Le scanner .*)([1-5][0-9])(.*)\./";
				$probs['fr']			= "/(Le scanner .*)\./";
				$fleet['fr']			= "/(Flottes)\b/";
				$def['fr']				= "/(Défense)\b/";
				$build['fr']			= "/(Bâtiment)\b/";
				$research['fr']			= "/(?<!de )(Recherche)\b/";
				$chance['fr']			= "/(Probabilité)(.*)/";

				//Croatian
				$line_1[4]				= "/(Metal).{1,}(Kristal)/";
				$line_2[4]				= "/(Deuterij).{1,}(Energija)/";
				$header['hr']			= "/(Resursi na .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['hr']			= "/(Aktivnost)\b(?!( znači| na))/";
				$activity_exp['hr']		= "/Aktivnost znači da je skenirani igrač bio aktivan na toj planeti ili je neki drugi igrač imao kontakt flotom sa planetom koju ste skenirali\./";
				$activity_exp['hr_1']	= "/Aktivnost zna".utf8_encode('č')."i da je skenirani igra".utf8_encode('č')." bio aktivan na toj planeti ili je neki drugi igra".utf8_encode('č')." imao kontakt flotom sa planetom koju ste skenirali\./";
				$probs_act['hr']		= "/(Vaša špijunaža .*)([1-5][0-9])(.*)\./";
				$probs['hr']			= "/(Vaša špijunaža .*)\./";
				$fleet['hr']			= "/(Slotovi)\b/";
			//	$def['hr']				take a look at cz
				$build['hr']			= "/(Gradi se)/";
				$research['hr']			= "/((?<!za )Istraživanje)\b(?! mreža)/";
				$chance['hr']			= "/(Šansa za obranu od špijunaže)\b(.*)/";

				//Spanish (+Argentine +Mexican)
				$line_1[5]				= "/(Metal).{1,}(Cristal)/";
				$line_1[6]				= "/(Metal).{1,}(Cristal)/";
				$line_1[7]				= "/(Metal).{1,}(Cristal)/";
				$line_2[5]				= "/(Deuterio).{1,}(Energia)/";
				$line_2[6]				= "/(Deuterio).{1,}(Energía)/";
				$line_2[7]				= "/(Deuterio).{1,}(Energ".utf8_encode('í')."a)/";
				$header['es']			= "/(Recursos en .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['es']			= "/(Actividad)\b(?!( significa| en))/";
				$activity_exp['es']		= "/Actividad significa que el jugador escaneado ha estado activo en el planeta o que otro jugador tuvo contacto de flota con el planeta escaneado\./";
				$activity_exp['es_ar']	= "/La actividad significa que el jugador espiado estubo activo en el planeta o que otro jugador hiso contacto de flota con el planeta escaneado\./";
				$activity_exp['es_mx']	= "/Actividad significa, que el jugador espiado ha estado activo en el planeta o que otro jugador tuvo contacto de flota con el planeta espiado\./";
				$probs_act['es']		= "/(Tu sonda .*)([1-5][0-9])(.*)\./";
				$probs_act['es_ar']		= "/(Tu espionaje .*)([1-5][0-9])(.*)\./";
				$probs['es']			= "/(Tu sonda .*)\./";
				$probs['es_ar']			= "/(Tu espionaje .*)\./";
				$fleet['es']			= "/(Flotas)\b/";
				$fleet['es_1']			= "/(flotas)\b/";
				$fleet['es_ar']			= "/(Escuadrón)\b/";
				$fleet['ar_1']			= "/(Escuadr".utf8_encode('ó')."n)\b/";
				$def['es']				= "/(Defensa)\b/";
				$build['es']			= "/(Edificio)\b/";
				$research['es']			= "/(?<!de )(Investigación)\b/";
				$research['es_1']		= "/(?<!de )(Investigaci".utf8_encode('ó')."n)\b/";
				$chance['es']			= "/(Posibilidades)\b(.*)/";
				$chance['es_ar']		= "/(Posibilidad)\b(.*)/";

				//Portuguese (+Brazilian)
				$line_1[8]				= "/(Metal).{1,}(Cristal)/";
				$line_1[9]				= "/(Metal).{1,}(Cristal)/";
				$line_2[8]				= "/(Deutério).{1,}(Energia)/";
				$line_2[9]				= "/(Deut".utf8_encode('é')."rio).{1,}(Energia)/";
				$header['pt']			= "/(Recursos em .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$header['pt_br']		= "/(Recursos no .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['pt']			= "/(Actividade)\b(?!( indica| existente))/";
				$activity['pt_br']		= "/(Atividade)\b(?!( indica| no))/";
				$activity_exp['pt']		= "/Actividade indica que o jogador esteve activo naquele planeta ou que houve contacto de outra frota, de um outro jogador, com o planeta espiado\./";
				$activity_exp['pt_br']	= "/Atividade indica que o jogador espiado esteve ativo naquele planeta ou que houve contato de outra frota, de um outro jogador, no planeta espiado\./";
				$probs_act['pt']		= "/(A sua espionagem .*)([1-5][0-9])(.*)\./";
				$probs['pt']			= "/(A sua espionagem .*)\./";
				$fleet['pt']			= "/(Frotas)\b/";
				$def['pt']				= "/(Defesas\b)/";
				$build['pt']			= "/(Edifícios)\b/";
				$build['pt_1']			= "/(Edif".utf8_encode('í')."cios)\b/";
				$research['pt']			= "/(?<!de )(Pesquisas)\b/";
				$chance['pt']			= "/(Probabilidade)\b(.*)/";

				//Czech
				$line_1[10]				= "/(Kov).{1,}(Krystaly)/";
				$line_2[10]				= "/(Deuterium).{1,}(Energie)/";
				$header['cz']			= "/(Suroviny na .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['cz']			= "/(Aktivita)\b(?!( znamená| na))/";
				$activity_exp['cz']		= "/Aktivita znamená, že oskenovaný hráč byl aktivní na dané planetě, nebo že někdo jiný měl kontakt svojí letky s planetou, kterou jste skenovali\./";
				$probs_act['cz']		= "/(Špionáž neukázala .*)([1-5][0-9])(.*)\./";
				$probs['cz']			= "/(Špionáž neukázala .*)\./";
				$fleet['cz']			= "/(letek)\b/";
				$fleet['cz_1']			= "/(Letek)\b/";
				$def['cz_sk_hr']		= "/(Obrana)\b/";
				$build['cz_sk']			= "/(Budovy)/";
				$research['cz']			= "/(Výzkum)\b/";
				$chance['cz']			= "/(Šance na odvrácení)(.*)/";

				//Danish
				$line_1[11]				= "/(Metal).{1,}(Krystal)/";
				$line_2[11]				= "/(Deuterium).{1,}(Energi)/";
				$header['dk']			= "/(Ressurcer på .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['dk_no_se']	= "/(Aktivitet)\b(?!( betyder| ved| betyr| på| menas| där))/";
				$activity_exp['dk']		= "/Aktivitet betyder at den scannede spiller har været aktiv på den planet, eller en anden spiller har haft flådekontakt med den planet du har scannet\./";
				$probs_act['dk']		= "/(Din spionage .*)([1-5][0-9])(.*)\./";
				$probs['dk']			= "/(Din spionage .*)\./";
				$fleet['dk']			= "/(Flåder)\b/";
				$def['dk_no']			= "/(?<!spionage )(Forsvar(?!:))\b/";
				$build['dk_no']			= "/(Bygning)\b/";
				$research['dk_no_se']	= "/(Forskning)\b/";
				$chance['dk']			= "/(Chancen)\b(.*)/";

				//Finnish
				$line_1[12]				= "/(Metalli).{1,}(Kristalli)/";
				$line_2[12]				= "/(Deuterium).{1,}(Energia)/";
				$header['fi']			= "/(Resurssit .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['fi']			= "/(Aktiivisuus)\b(?!( tarkoittaa| viimeiseen))/";
				$activity_exp['fi']		= "/Aktiivisuus tarkoittaa, että skannattu pelaaja on ollut aktiivinen kyseisellä planeetalla, tai toisella pelaajalla on yhteys skannaamaasi planeettaan\./";
				$probs_act['fi']		= "/(Vakoilutoimintasi ei .*)([1-5][0-9])(.*)\./";
				$probs['fi']			= "/(Vakoilutoimintasi ei .*)\./";
				$fleet['fi']			= "/(laivueet)\b/";
				$fleet['fi_1']			= "/(Laivueet)\b/";
				$def['fi']				= "/(Puolustus)\b/";
				$build['fi']			= "/(Rakennus)\b/";
				$research['fi']			= "/(Tutkimus)\b/";
				$chance['fi']			= "/(Vastavakoilun)\b(.*)/";

				//Hungarian
				$line_1[13]				= "/(Fém).{1,}(Kristály)/";
				$line_2[13]				= "/(Deutérium).{1,}(Energia)/";
				$header['hu']			= "/(Nyersanyagok itt.*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['hu']			= "/(Aktivitás)\b(?!( azt| a))/";
				$activity_exp['hu']		= "/Az aktivitás azt jelenti, hogy a megvizsgált bolygó aktív volt vagy egy másik játékos flottája kapcsolatban állt a megvizsgált bolygóval\./";
				$probs_act['hu']		= "/(A Kémed nem .*)([1-5][0-9])(.*)\./";
				$probs['hu']			= "/(A Kémed nem .*)\./";
				$fleet['hu']			= "/(Flották)\b/";
				$def['hu']				= "/(Védelem)\b/";
				$build['hu']			= "/(Építés)\b/";
				$research['hu']			= "/(Kutatás)\b/";
				$chance['hu']			= "/(Esély a kémelhárításra)(.*)/";

				//Dutch
				$line_1[14]				= "/(Metaal).{1,}(Kristal)/";
				$line_2[14]				= "/(Deuterium).{1,}(Energie)/";
				$header['nl']			= "/(Grondstoffen op.*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['nl']			= "/(Activiteit)\b(?!( betekent| in))/";
				$activity_exp['nl']		= "/Activiteit betekent dat de gescande speler actief was op deze planeet of dat er een andere speler vlootcontact heeft gemaakt met deze planeet\./";
				$probs_act['nl']		= "/(Je spionage .*)([1-5][0-9])(.*)\./";
				$probs['nl']			= "/(Je spionage .*)\./";
				$fleet['nl']			= "/(vloten)\b/";
				$fleet['nl_1']			= "/(Vloten)\b/";
				$def['nl']				= "/(Verdediging)\b/";
				$build['nl']			= "/(Gebouw)\b/";
				$research['nl']			= "/(Onderzoek)\b/";
				$chance['nl']			= "/(Kans op contraspionage)(.*)/";

				//Norwegian
				$line_1[15]				= "/(Metall).{1,}(Krystall)/";
				$line_2[15]				= "/(Deuterium).{1,}(Energi)/";
				$header['no']			= "/(Ressurser på.*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
			//	$activity['no']			take a look at dk
				$activity_exp['no']		= "/Aktivitet betyr at spilleren du skannet har vært aktiv på planeten eller en annen spiller har hatt flåtekontakt med planeten du skannet\./";
				$probs_act['no']		= "/(Din spionasje .*)([1-5][0-9])(.*)\./";
				$probs['no']			= "/(Din spionasje .*)\./";
				$fleet['no']			= "/(flåter)\b/";
				$fleet['no_1']			= "/(Flåter)\b/";
			//	$def['no']				take a look at dk
			//	$build['no']			take a look at dk
			//	$research['no']			take a look at dk
				$chance['no']			= "/(Sjanse for spionasjeforsvar)(.*)/";

				//Slovak
				$line_1[16]				= "/(Kovy).{1,}(Kryštály)/";
				$line_2[16]				= "/(Deutérium).{1,}(Energia)/";
				$header['sk']			= "/(Zdroje na .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['sk']			= "/(Aktivity)\b(?!( betekent| in))/";
				$activity_exp['sk']		= "/Aktivitou sa rozumie, že skenovaný hráč vykonal nejaké zmeny na planéte, alebo že flotila iného hráča je v kontakte so skenovanou planétou\./";
				$probs_act['sk']		= "/(Výsledky špionáže .*)([1-5][0-9])(.*)\./";
				$probs['sk']			= "/(Výsledky špionáže .*)\./";
				$fleet['sk']			= "/(flotily)\b/";
				$fleet['sk_1']			= "/(Flotily)\b/";
			//	$def['sk']				take a look at cz
			//	$build['sk']			take a look at cz
				$research['sk']			= "/(Výskum)\b/";
				$chance['sk']			= "/(Šanca na odvrátenie špionáže)(.*)/";

				//Swedish
			//	$line_1					take a look at no
			//	$line_2					take a look at no
				$header['se']			= "/(Resurser på .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
			//	$activity['se']			take a look at dk
				$activity_exp['se']		= "/Aktivitet menas att den scannade spelaren har varit aktiv på den planeten eller att en annan spelare har haft flottkontakt med planeten du scannade\./";
				$probs_act['se']		= "/(Din spionagerapport .*)([1-5][0-9])(.*)\./";
				$probs['se']			= "/(Din spionagerapport .*)\./";
				$fleet['se']			= "/(flottor)\b/";
				$fleet['se_1']			= "/(Flottor)\b/";
				$def['se']				= "/(Försvar)\b/";
				$build['se']			= "/(Byggnader)/";
			//	$research['se']			take a look at dk
				$chance['se']			= "/(Chans för upptäckt)(.*)/";

				//Romanian
				$line_1[17]				= "/(Metal).{1,}(Cristal)/";
				$line_2[17]				= "/(Deuteriu).{1,}(Energie)/";
				$header['ro']			= "/(Resurse la .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['ro']			= "/(Activitate)\b(?! pe)/";
				$activity_exp['ro']		= "/Activitatea inseamna ca jucatorul scanat a fost activ pe planeta sau un alt jucator a avut contact cu flota pe planeta scanata de tine\./";
				$probs_act['ro']		= "/(Proba ta de spionaj .*)([1-5][0-9])(.*)\./";
				$probs['ro']			= "/(Proba ta de spionaj .*)\./";
				$fleet['ro_lv']			= "/(Flote)\b/";
				$fleet['ro_lv_1']		= "/(flote)\b/";
				$def['ro']				= "/(Aparare)\b/";
				$build['ro']			= "/(Cladire)\b/";
				$research['ro']			= "/(?<!de )(Cercetari)\b/";
				$chance['ro']			= "/(Sansa de contra-spionaj)(.*)/";

				//Italian
				$line_1[18]				= "/(Metallo).{1,}(Cristallo)/";
				$line_2[18]				= "/(Deuterio).{1,}(Energia)/";
				$header['it']			= "/(Risorse su .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['it']			= "/(Attivit".utf8_encode('à').")(?!( significa| sul))/";
				$activity['it_1']		= "/(Attività)(?!( significa| sul))/";
				$activity_exp['it']		= "/Attività significa che il giocatore spiato è stato attivo su quel pianeta o un altro giocatore ha avuto un contatto di flotta con il pianeta spiato\./";
				$activity_exp['it_1']	= "/Attività  significa che il giocatore spiato è stato attivo su quel pianeta o un altro giocatore ha avuto un contatto di flotta con il pianeta spiato\./";
				$probs_act['it']		= "/(Il tuo spionaggio .*)([1-5][0-9])(.*)\./";
				$probs['it']			= "/(Il tuo spionaggio .*)\./";
				$fleet['it']			= "/(Flotte)\b/";
				$def['it']				= "/(Difesa)\b/";
				$build['it']			= "/(Edifici)\b/";
				$research['it']			= "/(?<!di )(Ricerca)\b/";
				$chance['it']			= "/(Possibilità di controspionaggio)(.*)/";

				//Lithuanian
				$line_1[19]				= "/(Metalas).{1,}(Kristalai)/";
				$line_2[19]				= "/(Deuteris).{1,}(Energija)/";
				$header['lt']			= "/(Resursų .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['lt']			= "/(Aktyvumas)\b/";
				$activity_exp['lt']		= "/Veiklumas reiškia, kad skanuotasis žaidėjas buvo aktyvus toje planetoje arba kito žaidėjo laivynas turėjo kontaktą su nuskanuotuoju\./";
				$probs_act['lt']		= "/(Jūsų šnipinėjimo .*)([1-5][0-9])(.*)\./";
				$probs['lt']			= "/(Jūsų šnipinėjimo .*)\./";
				$fleet['lt']			= "/(Laivynai)\b/";
				$def['lt']				= "/(Gynyba)\b/";
				$build['lt']			= "/(Pastatas)\b/";
				$research['lt']			= "/(Išradimai)\b/";
				$chance['lt']			= "/(Kontra-šnipinėjimo šansas)(.*)/";

				//Latvian
				$line_1[20]				= "/(Metāls).{1,}(Kristāls)/";
				$line_2[20]				= "/(Deitērijs).{1,}(Enerģija)/";
				$header['lv']			= "/(Resursi uz .*)\[([1-9]{1,2}:[0-9]{1,3}:[0-9]{1,2})\](.*)/";
				$activity['lv']			= "/(Aktivitāte)\b(?!( nozīmē| sul))/";
				$activity_exp['lv']		= "/Aktivitāte nozīmē, ka spēlētājs ir bijis aktīvs uz šīs planētas, vai arī ir bijis kuģu kontakts no cita spēlētāja ar planētu, kuru jūs skanējat\./";
				$probs_act['lv']		= "/(Jūsu spiegošana .*)([1-5][0-9])(.*)\./";
				$probs['lv']			= "/(Jūsu spiegošana .*)\./";
			//	$fleet['lv']			take a look at ro
				$def['lv']				= "/(Aizsardzība)\b/";
				$build['lv']			= "/(Celtne)\b/";
				$research['lv']			= "/(Pētniecība)\b/";
				$chance['lv']			= "/(Pretspiegošanas iespēja)(.*)/";

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

				//We don't need lines without content
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

	$text = preg_replace_callback($scanpattern,'ogame_scan',$text);
}
?>