<?php
/*
-----------------
Language Translation File for Weather34 MB SMART 
Language: Dutch
Translated by: Piet Kampen
Developed By: Brian Underdown/Erik M Madsen
October/November 2016
Revised: 05 September 2019
-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day        = date("l");
$day2       = date("l", time() + 86400);
$daynum     = date("j");
$monthtrans = date("F");
$year       = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
setlocale(LC_TIME, "nl_NL.UTF-8");
$lang                           = array();
// Menu
$lang['Settings']               = 'Instellingen';
$lang['Layout']                 = 'Verander Lay-out';
$lang['Lighttheme']             = 'Lichte Topic';
$lang['Darktheme']              = 'Donkere Topic';
$lang['Nonmetric']              = 'US (F) ';
$lang['Metric']                 = 'Metric (C)';
$lang['UKmetric']               = 'UK (MPH - Metric) ';
$lang['Scandinavia']            = 'Scandinavië(M/S)';
$lang['Worldwideearthquakes']   = 'Aarbevingen wereld wijd';
$lang['Toggle']                 = 'Volledig scherm activeren ';
$lang['Menu Options']           = 'Menu Opties';
$lang['Contactinfo']            = 'Station & Contact Info';
$lang['Templateinfo']           = 'Medewerkers';
$lang['language']               = 'Selecteer Taal';
$lang['Weatherstationinfo']     = 'Weerstation informatie';
$lang['Webdesigninfo']          = 'Webdesign info';
$lang['Contact']                = 'Contact';
//days
$lang['Monday']                 = 'Maandag';
$lang['Tuesday']                = 'Dinsdag';
$lang['Wednesday']              = 'Woensdag';
$lang['Thursday']               = 'Donderdag';
$lang['Friday']                 = 'Vrijdag ';
$lang['Saturday']               = 'Zaterdag';
$lang['Sunday']                 = 'Zondag';
//months
$lang['January']                = 'Jan';
$lang['Febuary']                = 'Feb';
$lang['March']                  = 'Maart';
$lang['April']                  = 'April';
$lang['May']                    = 'Mei';
$lang['June']                   = 'Juni';
$lang['July']                   = 'Juli';
$lang['August']                 = 'Aug';
$lang['September']              = 'Sep';
$lang['October']                = 'Okt';
$lang['November']               = 'Nov';
$lang['December']               = 'Dec';
//temperature
$lang['Temperature']            = 'Temperatuur';
$lang['Feelslike']              = 'Voelt als';
$lang['Humidity']               = 'Vochtigheid';
$lang['Dewpoint']               = 'Dauwpunt';
$lang['Trend']                  = 'trend ';
$lang['Heatindex']              = 'Warmte Index';
$lang['Windchill']              = 'Windchill ';
$lang['Tempfactors']            = 'Temp Factors';
$lang['Nocautions']             = 'Geen waarschuwingen';
$lang['Wetbulb']                = 'Natte bol';
$lang['dry']                    = '& Droog';
$lang['verydry']                = '& Erg Droog';
//new feature temperature feels
$lang['FreezingCold']           = 'Vries koud';
$lang['FeelingVeryCold']        = 'Voelt erg koud aan';
$lang['FeelingCold']            = 'Voelt koud aan';
$lang['FeelingCool']            = 'Koel';
$lang['FeelingComfortable']     = 'Comfortabel';
$lang['FeelingWarm']            = 'Warm';
$lang['FeelingHot']             = 'Heet';
$lang['FeelingUncomfortable']   = 'Oncomfortabel';
$lang['FeelingVeryHot']         = 'Erg heet';
$lang['FeelingExtremelyHot']    = 'Extreem heet';
//wind
$lang['Windspeed']              = 'Wind Snelheid';
$lang['Gust']                   = 'Windvlaag';
$lang['Direction']              = 'Richting';
$lang['Gusting']                = 'Windvlaag';
$lang['Blowing']                = 'Wind';
$lang['Wind']                   = 'Wind';
$lang['Wind Run']               = 'Wind Run';
$lang['AvgSpeedToday']			= 'Gem Vandaag';
$lang['10 minutes']				= '10 min';
$lang['Avg Wind']			    = 'Gem Wind';
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                   = 'Kalm';
$lang['Lightair']               = 'Zeer zwak ';
$lang['Lightbreeze']            = 'Zwak';
$lang['Gentelbreeze']           = 'Vrij matig';
$lang['Moderatebreeze']         = 'Matig ';
$lang['Freshbreeze']            = 'Vrij krachtig ';
$lang['Strongbreeze']           = 'Krachtig ';
$lang['Neargale']               = 'Hard ';
$lang['Galeforce']              = 'Stormachtig ';
$lang['Stronggale']             = 'Sterke storm ';
$lang['Storm']                  = 'Zware storm ';
$lang['Violentstorm']           = 'Orkaanachtig ';
$lang['Hurricane']              = 'Orkaan ';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']         = 'Rustige Condities';
$lang['LightBreezeattimes']     = 'Soms een lichte briesje';
$lang['MildBreezeattimes']      = 'Soms een mild briesje';
$lang['ModerateBreezeattimes']  = 'Soms een matige wind';
$lang['FreshBreezeattimes']     = 'Soms een frisse wind';
$lang['StrongBreezeattimes']    = 'Soms een stevige wind';
$lang['NearGaleattimes']        = 'Soms een harde wind';
$lang['GaleForceattimes']       = 'Soms een stormachtige wind';
$lang['StrongGaleattimes']      = 'Soms een sterke stormachtige wind';
$lang['StormConditions']        = 'Stormachtige Condities';
$lang['ViolentStormConditions'] = 'Orkaanachtig Condities';
$lang['HurricaneConditions']    = 'Orkaan Condities';
$lang['Avg']                    = 'Gem';
$lang['Avg-Dir']                = 'Gem';//used for compass
//wind direction compass
$lang['Northdir']               = 'Pal <span>Noord<br></span>';
$lang['NNEdir']                 = 'Noord Noord <br><span>Oost</span>';
$lang['NEdir']                  = 'Noord <span> Oost<br></span>';
$lang['ENEdir']                 = 'Oost Noord<br><span>Oost</span>';
$lang['Eastdir']                = 'Pal <span> Oost<br></span>';
$lang['ESEdir']                 = 'Oost Zuid<br><span>Oost</span>';
$lang['SEdir']                  = 'Zuid <span> Oost</span>';
$lang['SSEdir']                 = 'Zuid Zuid<br><span>Oost</span>';
$lang['Southdir']               = 'Pal <span> Zuid</span>';
$lang['SSWdir']                 = 'Zuid Zuid<br><span>West</span>';
$lang['SWdir']                  = 'Zuid <span> West</span>';
$lang['WSWdir']                 = 'West Zuid<br><span>West</span>';
$lang['Westdir']                = 'Pal <span> West</span>';
$lang['WNWdir']                 = 'West Noord<br><span>West</span>';
$lang['NWdir']                  = 'Noord <span> West</span>';
$lang['NNWdir']                 = 'Noord Noord<br><span>West</span>';
//wind direction avg
$lang['North']                  = 'Noord';
$lang['NNE']                    = 'NNO';
$lang['NE']                     = 'NO';
$lang['ENE']                    = 'ONO';
$lang['East']                   = 'Oost ';
$lang['ESE']                    = 'OZO';
$lang['SE']                     = 'ZO';
$lang['SSE']                    = 'ZZO';
$lang['South']                  = 'Zuid';
$lang['SSW']                    = 'ZZW';
$lang['SW']                     = 'ZW';
$lang['WSW']                    = 'WZW';
$lang['West']                   = 'West';
$lang['WNW']                    = 'WNW';
$lang['NW']                     = 'NW';
$lang['NNW']                    = 'NNW';
// extra wind direction average top module
$lang['NEdirs']                   = 'Noord Oost';
$lang['SEdirs']                   = 'Zuid Oost';
$lang['SWdirs']                   = 'Zuid West';
$lang['NWdirs']                   = 'Noord West';
//rain
$lang['raintoday']              = 'Regen vandaag';
$lang['Rate']                   = 'Intensiteit';
$lang['Rainfall']               = 'Neerslag';
$lang['precip']                 = 'Neerslag'; // must be short name do not use full precipatation or I will remove it if it does not align !!!! ///
$lang['Rain']                   = 'Regen';
$lang['HeavyRain']              = 'Hevige regen';
$lang['Rainbow']                = 'Regenboog';
$lang['Windy']                  = 'Winderig';
$lang['Last Hour']				= 'Laatste uur';
$lang['Last-Twenty-Four-Hour']	= 'Laatste 24uur';
$lang['Last-Ten-Minutes']  		= 'Laatste 10 minuten';
$lang['Snow Accumulation']		= 'Sneeuw Accumulatie';
$lang['Rain Accumulation']		= 'Regen Accumulatie';
$lang['Accumulation']		    = 'Accumulatie';
$lang['Thunderstorm']			= 'Onweer';
//sun -moon-daylight-darkness
$lang['Sun']                    = 'Zon';
$lang['Moon']                   = 'Maan';
$lang['Sunrise']                = '&nbsp;Zonsopkomst';
$lang['Sunset']                 = '&nbsp;Zonsondergang';
$lang['Moonrise']               = 'Maanopkomst ';
$lang['Moonset']                = 'Maanondergang';
$lang['Night']                  = 'Nacht ';
$lang['Day']                    = 'Dag';
$lang['Nextnewmoon']            = 'Nieuwe maan';
$lang['Nextfullmoon']           = 'Volle maan';
$lang['Luminance']              = 'Helderheid';
$lang['Moonphase']              = 'Maanfase';
$lang['Estimated']              = 'Geschatte';
$lang['Daylight']               = 'Daglicht';
$lang['Daylight1']              = '&nbsp;&nbsp;Daglicht';
$lang['Darkness']               = 'Donker';
$lang['Darkness1']              = '&nbsp;&nbsp;Donker';
$lang['First Light']			= 'Eerste Licht';
$lang['Last Light']				= 'Laatste Licht';
$lang['Daysold']                = 'Dagen oud';
$lang['Belowhorizon']           = 'achter de<br>horizon';
$lang['Mintill']                = 'min tot';
$lang['Till']                   = 'Tot';
$lang['Minago']                 = 'min geleden';
$lang['Hrs']                    = ' hrs';
$lang['Min']                    = ' min';
$lang['TotalDarkness']          = 'Totale Duisternis';
$lang['TotalDaylight']          = 'Totale Daglicht';
$lang['Below']                  = 'is achter de horizon';
$lang['Newmoon']                = 'Nieuwe maan';
$lang['Waxingcrescent']         = 'Wassende maan';
$lang['Firstquarter']           = 'Eerste kwartier';
$lang['Waxinggibbous']          = 'Wassende maan';
$lang['Fullmoon']               = 'Volle maan';
$lang['Waninggibbous']          = 'Afnemende maan';
$lang['Lastquarter']            = 'Laatste kwartier';
$lang['Waningcrescent']         = 'Afnemende maan';
$lang['Set']        			= 'Ondergang';
$lang['Rise']        		    = 'Opkomst';
$lang['Daylight Left'] 			= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nog licht';
$lang['Darkness Left'] 			= '&nbsp;&nbsp;&nbsp;Nog donker';
//trends
$lang['Falling']                = ' Dalend';
$lang['Rising']                 = ' Stijgend';
$lang['Steady']                 = ' Stabiel';
$lang['Rapidly']                = 'Snel';
$lang['Temp']                   = 'Temp';
//solar
$lang['Poor']                   = 'Zonnestraling<br><color2> Pover</color>';
$lang['Low']                    = 'Zonnestraling<br><color2> Laag</color>';
$lang['Moderate']               = 'Zonnestraling<br><color1> Matig</color>';
$lang['Good']                   = 'Zonnestraling<br><color> Sterk</color>';
$lang['Solarradiation']         = 'Zonnestraling';
//current sky
$lang['Currentsky']             = 'Huidige Situatie';
$lang['Currently']              = 'Momenteel';
$lang['Cloudcover']             = 'Bewolking';
//Notifications
$lang['Nocurrentalert']         = 'Geen actuele waarschuwingen';
$lang['Windalert']              = 'Windvlagen';
$lang['Tempalert']              = 'Hoge temperatuur';
$lang['Heatindexalert']         = 'Warmte Index (Oppassen)';
$lang['Windchillalert']         = 'Koude wind (Oppassen)';
$lang['Dewpointalert']          = 'Onkonfortabele luchtvochtigheid';
$lang['Dewpointcolderalert']    = 'Dauwpunt het voelt kouder aan';
$lang['Feelslikecolderalert']   = 'Het voelt kouder aan';
$lang['Feelslikewarmeralert']   = 'Het voelt warmer aan';
$lang['Rainratealert']          = 'per/hr<span> neerslag ';
//Earthquake Notifications
$lang['Regional']               = 'Regionale aardbeving';
$lang['Significant']            = 'Betekenisvolle aardbevingen';
$lang['Nosignificant']          = 'Geen betekenisvolle aardbevingen';

//Main page
$lang['Barometer']              = 'Barometer';
$lang['UVSOLAR']                = 'UV-Solar';
$lang['Earthquake']             = 'Aardbevings data';
$lang['Daynight']               = 'Dag & Nacht Info';
$lang['SunPosition']            = 'Positie van de Zon';
$lang['Location']               = 'Locatie ';
$lang['Hardware']               = 'Hardware';
$lang['Rainfalltoday']          = 'Neerslag Vandaag';
$lang['Windspeed']              = 'Wind Snelheid';
$lang['Winddirection']          = 'Wind Richting';
$lang['Measured']               = 'Gemeten Vandaag';
$lang['Forecast']               = 'Voorspelling';
$lang['Forecastahead']          = 'Voorspelling';
$lang['Forecastsummary']        = 'Samenvatting';
$lang['WindGust']               = 'Wind snelheid | Vlaag';
$lang['Hourlyforecast']         = 'Voorspelling per uur ';
$lang['Significantearthquake']  = 'Veelzeggende aardbeving';
$lang['Regionalearthquake']     = 'Regionale aardbeving';
$lang['Average']                = 'Gemiddeld';
$lang['Notifications']          = 'Waarschuwingen';
$lang['Indoor']                 = 'Binnen';
$lang['Today']                  = 'Vandaag';
$lang['Tonight']                = 'Vannacht';
$lang['Tomorrow']               = 'Morgen';
$lang['Tomorrownight']          = 'Morgen nacht';
$lang['Updated']                = 'Updated';
$lang['Meteor']                 = 'Vallende Sterren Info';
$lang['Firerisk']               = 'Brandgevaar';
$lang['Localtime']              = 'Local <span2>Time</span2>';
$lang['Nometeor']               = 'Geen vallende Sterren';
$lang['LiveWebCam']             = 'Live Web Cam';
$lang['Online']                 = 'Online';
$lang['Offline']                = 'Offline';
$lang['Weatherstation']         = 'Weerstation';
$lang['Cloudbase']              = 'Wolkenbasis';
$lang['uvalert']                = 'Let op Hoge UV';
$lang['Max']                    = 'Max';
$lang['Min']                    = 'Min';
$lang['Almanac'] 				= 'Almanak';
$lang['Weather Data Provided By']='Weersgegevens geleverd door Weerstation -';
$lang['Airport']			='Luchthaven Metar';
$lang['Weather Station'] ='Weerstation';
$lang['Information'] ='Informatie';
$lang['Operational Since'] ='Operationeel Sinds';
$lang['Battery'] ='Batterij';
$lang['Installed']='Geïnstalleerd';
$lang['Interface Uptime']='Aantal dagen geleden';
$lang['Meteobridge Interface']='Meteobridge Interface';
$lang['GoodBattery']             = 'In goede';
$lang['ReplaceBattery']          = 'Vervangen';
$lang['ConditionBattery']		 = '&nbsp;&nbsp;Staat';


//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Micro-aardbeving';
$lang['MinorE']                  = 'Kleine aardbeving';
$lang['LightE']                  = 'Lichte aardbeving';
$lang['ModerateE']               = 'Matige aardbeving';
$lang['StrongE']                 = 'Sterke aardbeving';
$lang['MajorE']                  = 'Grote aardbeving';
$lang['GreatE']                  = 'Zeer sterke aardbeving';
$lang['RegionalE']              = 'Regionale';
$lang['Conditions']             = 'Condities';
$lang['Cloudbase Height']       = 'Hoogte wolkenbasis';
$lang['Station']                = 'Station';
$lang['Detailed Forecast']      = 'Gedetailleerde voorspelling';
$lang['Summary Outlook']        = 'Samenvatting';
//Air Quality
$lang['Hazardous']              = 'Gevaarlijk';
$lang['Very Unhealthy']          = 'Heel ongezond';
$lang['UnhealthyFS']            = 'Ongezond voor sommigen';
$lang['Moderate']               = 'Gematigde luchtkwaliteit ';
$lang['Good']                   = 'Goede luchtkwaliteit ';
$lang['Air Quality']	       	= 'Luchtkwaliteit';
$lang['Particle Info']          = 'Info';
$lang['Guide']                  = 'Gids';
$lang['GOOD']                   = 'Goed';
$lang['MODERATE']               = 'Gematigd';
$lang['Unhealthy for Sensitive Groups'] = 'Ongezond voor gevoelige groepen';
$lang['Unhealthy']              = 'Ongezond';
$lang['(Precautions Required)'] = '(Voorzichtigheid vereist)';
$lang['(Critical Conditions)'] = '(Kritieke situatie)';
$lang['(Life Threatening)'] = '(Levensbedreigend)';


#notification additions
$lang['notifyTitle']             = 'Weerstation Meldingen';
$lang['notifyAlert']             = "Alarm";
$lang['notifyLowBatteryAlert']   = "Batterij bijna leeg";
$lang['notifyConsoleLowBattery'] = "De batterij van de console is bijna leeg";
$lang['notifyStationLowBattery'] = "De batterij van het station is bijna leeg";
$lang['notifyUVIndex']           = "UV-index Let op";
$lang['notifyUVExposure']        = "Blootstelling aan de zon verminderen";
$lang['notifyHeatExaustion']     = "Oververhitting";
$lang['notifyExtremeWind']       = "Waarschuwing extreme wind";
$lang['notifyGustUpTo']          = "Windstoten tot";
$lang['notifySeekShelter']       = "Zoek direct een <notifyred><b>schuilplaats</b></notifyred>";
$lang['notifyHighWindWarning']   = "Waarschuwing harde wind";
$lang['notifySustainedAvg']      = "Aanhoudende gem";
$lang['notifyWindAdvisory']      = "Windadvies";
$lang['notifyFreezing']          = "Onder het vriespunt";
#weatherflow lightning
$lang['Last Three Hours']        = "Laatste 3 uur";
$lang['Distance']          		 = "Afstand";
$lang['Detected']          		 = "Laatste";
$lang['Strikes']           		 = "&nbsp;Aantal";
$lang['Strikes Recorded']        = "Inslagen Gemeten";
$lang['Total']        			 = "Totaal";
$lang['Last Strike Detected']   = "Laatste Inslag Waargenomen";
$lang['Lightning Today']        = "Vandaag";//today
$lang['Quiet']        			= "Stil";
$lang['Active']        			= "Active";
$lang['Ago']        			= "Geleden";
$lang['Now']        			= "Nu";
#metar conditions
$lang['Snow-Metar']						= "Sneeuw";
$lang['Light Rain-Metar']				= "Lichte Regen";
$lang['Heavy Rain-Metar']				= "Zware Regen";
$lang['Moderate Rain-Metar']			= "Regelmatige Regen";
$lang['Light Snow-Metar']				= "Lichte Sneeuw";
$lang['Moderate Snow-Metar']			= "Regelmatige Sneeuw";
$lang['Snow Grains-Metar']				= "Hagel";
$lang['Sleet-Metar']					= "Sneeuw en Regen";
$lang['Foggy-Metar']					= "Mistig";
$lang['Misty-Metar']					= "Mistig";
$lang['Hail and Rain-Metar']			= "Hagel en Regen";
$lang['Ice Crystals-Metar']				= "Ijzel";
$lang['Ice Pellets-Metar']				= "Ijzel";
$lang['Thunderstorm-Metar']				= "Onweer";
$lang['Sand Storm-Metar']				= "Zandstorm";
$lang['Volcanic Ash-Metar']				= "Vulkaan";
$lang['Tornado-Metar']			   		= "Tornado";
$lang['Water Sprout-Metar']				= "Water Sprout";
$lang['Clear-Metar']					= "Heldere Lucht";
$lang['Mostly Clear-Metar']				= "Voornamelijk Helder";
$lang['Partly Cloudy-Metar']			= "Gedeeltelijk Bewolkt";
$lang['Mostly Scattered-Metar']		    = "Verspreide Bewolking";
$lang['Mostly Cloudy-Metar']			= "Voornamelijk Bewolkt";
$lang['Overcast-Metar']			        = "Bewolking";
$lang['Clouds-Metar']			  		= "Wolken";
$lang['Conditions-Metar']			    = "";
$lang['Showers-Metar']			        = "Bui";
$lang['Rain-Metar']						= "Regen";
$lang['Lowest']							='&nbsp;&nbsp;Laag';
$lang['Highest']						='&nbsp;&nbsp;Hoog';
$lang['Yesterday']				        ='Gisteren';
//time ago 
$lang['Years']='Jaren';
$lang['Year']=' Jaar';
$lang['Months']=' Maanden';
$lang['Month']=' Maand';
$lang['Day']=' Dag';
$lang['Days']=' Dagen';
$lang['Hours']=' Uur';
$lang['Hour']=' Uur';
$lang['Minute']=' Minuut';
$lang['Minutes']=' Minuten';
$lang['Last Rainfall']='Laatste Regen';

//Diversen
$lang['Pressure']='Barometer';
$lang['Console Forecast']='Console voorspelling';
$lang['Wind Data'] ='Wind data';
$lang['Battery'] = 'Batterij';
$lang['from'] = 'van';
$lang['*Regional'] = '*Regionaal';
$lang['*Warning Nearby'] = '*Waarschuwing in de buurt';
$lang['Recent Earthquake'] = 'Recente aardbeving';
$lang['Regional Recent Earthquakes'] = 'Recente regionale aardbevingen';

//uv
$lang['Low Caution']='Laag Risico';
$lang['Moderate Caution']='Matig Risico';
$lang['High Caution']='Hoog Risico';
$lang['Very High Caution']='Hoog Risico';
$lang['Extreme Caution']='Extreem Risico';

$lang['Chart Data']='Grafiekgegevens';
?>
