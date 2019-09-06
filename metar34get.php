<?php

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Updated Release: August 2019						  	                                       #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

//weather34 original metarnearby script 2018-2019 checkwx attribution must be in tact//
include('settings.php');include('livedata.php');include('common.php');error_reporting(0); 
$result = date_sun_info(time(), $lat, $lon);
$sunr=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);
$suns=date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$suns2 =date('G.i', $result['sunset']);
$sunrs2 =date('G.i', $result['sunrise']);
$now =date('G.i');
 //weather34 wxcheck API aviation metar script May 2018 
$json_string             = file_get_contents("jsondata/metar34.txt");
$parsed_json             = json_decode($json_string);
$metar34time       = $parsed_json->{'data'}[0]->{'observed'};
$metar34raw       = $parsed_json->{'data'}[0]->{'raw_text'};
$metar34stationid       = $parsed_json->{'data'}[0]->{'icao'};	
//$metar34stationname       = $airport1;
$metar34stationname       = $parsed_json->{'data'}[0]->{'station'}->{'name'};
$metar34pressurehg       = $parsed_json->{'data'}[0]->{'barometer'}->{'hg'};	
$metar34pressuremb       = $parsed_json->{'data'}[0]->{'barometer'}->{'mb'};
$metar34conditions         = $parsed_json->{'data'}[0]->{'conditions'}[0]->{'code'};
$metar34conditionstext         = $parsed_json->{'data'}[0]->{'conditions'}[0]->{'text'};
$metar34conditions1         = $parsed_json->{'data'}[0]->{'conditions'}[1]->{'code'};
$metar34conditionstext1         = $parsed_json->{'data'}[0]->{'conditions'}[1]->{'text'};
$metar34clouds          = $parsed_json->{'data'}[0]->{'clouds'}[0]->{'code'};
$metar34cloudstext          = $parsed_json->{'data'}[0]->{'clouds'}[0]->{'text'};
$metar34dewpointc          = $parsed_json->{'data'}[0]->{'dewpoint'}->{'celsius'};
$metar34dewpointf          = $parsed_json->{'data'}[0]->{'dewpoint'}->{'fahrenheit'};
$metar34temperaturec          = $parsed_json->{'data'}[0]->{'temperature'}->{'celsius'};
$metar34temperaturef          = $parsed_json->{'data'}[0]->{'temperature'}->{'fahrenheit'};
$metar34humidity          = $parsed_json->{'data'}[0]->{'humidity'}->{'percent'};
$metar34visibility        = $parsed_json->{'data'}[0]->{'visibility'}->{'meters'};
$metar34windir          = $parsed_json->{'data'}[0]->{'wind'}->{'degrees'};
$metar34windspeedmph          = $parsed_json->{'data'}[0]->{'wind'}->{'speed_mph'};
$metar34windspeedkmh          = number_format($metar34windspeedmph*1.60934,0);//kmh
$metar34windspeedkts          = $parsed_json->{'data'}[0]->{'wind'}->{'speed_kts'};
$metar34windspeedms          = number_format($metar34windspeedmph*0.44704,1);
$metar34raininches          = $parsed_json->{'data'}[0]->{'rain_in'};
$metar34rainmm          = number_format($metar34raininches*25.4,2) ;
$metar34rainin          = number_format($metar34raininches*1,2) ;
$metar34visibility=str_replace(',', '', $metar34visibility);
$metar34visibility=str_replace('+', '', $metar34visibility);
$metar34vismiles        = number_format($metar34visibility*0.000621371,1) ;
$metar34viskm        = number_format($metar34visibility*0.001,1) ;
// start the weather34 icon output and descriptions


//snow
if($metar34conditions1=='SN' || $metar34conditions1 =='-RASN' || $metar34conditions1 =='-SN' || $metar34conditions1 =='+SN' || $metar34conditions1 =='SG'){
if ($now >$suns2 ){$sky_icon='nt_snow.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_snow.svg';} 
else $sky_icon='snow.svg'; 
$sky_desc=$lang['Snow-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//LIGHT RAIN
else if($metar34conditions =='-SHRA' || $metar34conditions =='SHRA' || $metar34conditions=='-RA'){
if ($now >$suns2 ){$sky_icon='nt_rain.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_rain.svg';} 
else $sky_icon='rain.svg'; 
$sky_desc=$lang['Light Rain-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//rain heavy
else if($metar34conditions =='+SHRA'){
if ($now >$suns2 ){$sky_icon='nt_rain.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_rain.svg';} 
else $sky_icon='rain.svg'; 
$sky_desc=$lang['Heavy Rain-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//rain moderate
else if($metar34conditions=='+RA'){
if ($now >$suns2 ){$sky_icon='nt_rain.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_rain.svg';} 
else $sky_icon='rain.svg'; 
$sky_desc=$lang['Moderate Rain-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//rain
else if($metar34conditions=='RA' || $metar34conditions=='SQ'){
if ($now >$suns2 ){$sky_icon='nt_rain.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_rain.svg';} 
else $sky_icon='rain.svg'; 
$sky_desc=$lang['Rain-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//snow light
else if($metar34conditions=='-SN'){
if ($now >$suns2 ){$sky_icon='snow.svg';} 
else if ($now <$sunrs2 ){$sky_icon='snow.svg';} 
else $sky_icon='snow.svg'; 
$sky_desc=$lang['Light Snow-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//snow moderate
else if($metar34conditions=='+SN'){
if ($now >$suns2 ){$sky_icon='nt_snow.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_snow.svg';} 
else $sky_icon='snow.svg'; 
$sky_desc=$lang['Moderate Snow-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//snow
else if($metar34conditions=='SN'){
if ($now >$suns2 ){$sky_icon='nt_snow.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_snow.svg';} 
else $sky_icon='snow.svg'; 
$sky_desc=$lang['Snow-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//snow
else if($metar34conditions1=='SN'){
if ($now >$suns2 ){$sky_icon='nt_snow.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_snow.svg';} 
else $sky_icon='snow.svg'; 
$sky_desc=$lang['Snow-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//snow grains
else if($metar34conditions=='SG'){
if ($now >$suns2 ){$sky_icon='snow.svg';} 
else if ($now <$sunrs2 ){$sky_icon='snow.svg';} 
else $sky_icon='snow.svg'; 
$sky_desc=$lang['Snow Grains-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//snow grains
else if($metar34conditions=='SNINCR'){
if ($now >$suns2 ){$sky_icon='nt_snow.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_snow.svg';} 
else $sky_icon='snow.svg'; 
$sky_desc=$lang['Snow-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//sleet
else if($metar34conditions=='IP' || $metar34conditions =='-RASN'){
if ($now >$suns2 ){$sky_icon='nt_sleet.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_sleet.svg';} 
else $sky_icon='sleet.svg'; 
$sky_desc=$lang['Sleet-Metar'].'<br>'.$lang['Showers-Metar'].'';
}
//Haze
else if($metar34conditions=='HZ'){
if ($now >$suns2 ){$sky_icon='nt_haze.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_haze.svg';} 
else $sky_icon='haze.svg'; 
$sky_desc=$lang['Hazy-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//Batches Fog
else if($metar34conditions=='FG' || $metar34conditions=='NFG' || $metar34conditions=='BCFG'){
if ($now >$suns2 ){$sky_icon='nt_fog.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_fog.svg';} 
else $sky_icon='fog.svg'; 
$sky_desc=$lang['Foggy-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//Mist
else if($metar34conditions=='BR' || $metar34conditions=='NBR'){
if ($now >$suns2 ){$sky_icon='nt_fog.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_fog.svg';} 
else $sky_icon='fog.svg'; 
$sky_desc=$lang['Misty-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//Hail
else if($metar34conditions=='GR' || $metar34conditions=='GS'){
if ($now >$suns2 ){$sky_icon='nt_hail.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_hail.svg';} 
else $sky_icon='hail.svg'; 
$sky_desc=$lang['Hail and Rain-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//ICE CYSTALS
else if($metar34conditions=='IC'){
if ($now >$suns2 ){$sky_icon='nt_hail.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_hail.svg';} 
else $sky_icon='hail.svg'; 
$sky_desc=$lang['Ice Crystals-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//ICE PELLETS
else if($metar34conditions=='PL'){
if ($now >$suns2 ){$sky_icon='nt_hail.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_hail.svg';} 
else $sky_icon='hail.svg'; 
$sky_desc=$lang['Ice Pellets-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//Thunderstorms
else if($metar34conditions=='TS' || $metar34conditions=='-TS' || $metar34conditions=='+TS' || $metar34conditions=='TSRA' || $metar34conditions=='SCTTSRA' || $metar34conditions=='NTSRA'){
if ($now >$suns2 ){$sky_icon='nt_tstorm.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_tstorm.svg';} 
else $sky_icon='tstorm.svg'; 
$sky_desc=$lang['Thunderstorm-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//Dust-Sand
else if($metar34conditions=='DS' || $metar34conditions=='DU' || $metar34conditions=='PO' || $metar34conditions=='SA' || $metar34conditions=='SS'){
if ($now >$suns2 ){$sky_icon='nt_dust.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_dust.svg';} 
else $sky_icon='dust.svg'; 
$sky_desc=$lang['Sand Storm-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//Volcanic Ash
else if($metar34conditions=='VA'){
if ($now >$suns2 ){$sky_icon='volcanoe.svg';} 
else if ($now <$sunrs2 ){$sky_icon='volcanoe.svg';} 
else $sky_icon='volcanoe.svg'; 
$sky_desc=$lang['Volcanic Ash-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//+FC
else if($metar34conditions=='+FC'){
if ($now >$suns2 ){$sky_icon='nsvrtsa.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nsvrtsa.svg';} 
else $sky_icon='nsvrtsat.svg'; 
$sky_desc='Tornado <br> Water Sprout';
}
else if($metar34conditions=='NSC'){
if ($now >$suns2 ){$sky_icon='nt_clear.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_clear.svg';} 
else $sky_icon='clear.svg'; 
$sky_desc=$lang['Clear-Metar'].'<br>'.$lang['Conditions'].'';
}
//2nd part clouds
//clear
//clear
else if($metar34clouds=='SKC' || $metar34clouds=='CLR' || $metar34clouds=='NSC'){
if ($now >$suns2 ){$sky_icon='nt_clear.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_clear.svg';} 
else $sky_icon='clear.svg'; 
$sky_desc=$lang['Clear-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
else if($metar34clouds=='CAVOK'){
if ($now >$suns2 ){$sky_icon='clear-night.svg';} 
else if ($now <$sunrs2 ){$sky_icon='clear-night.svg';} 
else $sky_icon='clear-day.svg'; 
$sky_desc=$lang['Mostly Clear-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//few
else if($metar34clouds=='FEW'){
if ($now >$suns2 ){$sky_icon='nt_partlycloudy.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_partlycloudy.svg';} 
else $sky_icon='partlysunny.svg'; 
$sky_desc=$lang['Partly Cloudy-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//scattered clouds
else if($metar34clouds=='SCT'){
if ($now >$suns2 ){$sky_icon='nt_scatteredclouds.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_scatteredclouds.svg';} 
else $sky_icon='scatteredclouds.svg'; 	
$sky_desc=$lang['Mostly Scattered-Metar'].'<br>'.$lang['Clouds-Metar'].'';
}
//mostly cloudy
else if($metar34clouds=='BKN'){		
if ($now >$suns2 ){$sky_icon='nt_mostlycloudy.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_mostlycloudy.svg';} 
else $sky_icon='mostlycloudy.svg'; 	
$sky_desc=$lang['Mostly Cloudy-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//overcast
else if($metar34clouds=='OVC'){
if ($now >$suns2 ){$sky_icon='nt_overcast.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_overcast.svg';} 
else $sky_icon='overcast.svg'; 
$sky_desc=$lang['Overcast-Metar'].'<br>'.$lang['Conditions-Metar'].'';

}
//overcast
else if($metar34clouds=='OVX'){
if ($now >$suns2 ){$sky_icon='nt_overcast.svg';} 
else if ($now <$sunrs2 ){$sky_icon='nt_overcast.svg';} 
else $sky_icon='overcast.svg'; 
$sky_desc=$lang['Overcast-Metar'].'<br>'.$lang['Conditions-Metar'].'';
}
//offline
else{
	$sky_icon='offline.svg';
	$sky_desc='Data <br>Offline';
};
//end weather34 metar aviation script API	
?>