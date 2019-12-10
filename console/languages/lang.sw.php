<?php
/*
-----------------
Language Translation File for Weather34 MB SMART 
Language: Swedish
Translated by: Robert Magnusson
Developed By: Brian Underdown/Erik M Madsen
October/November 2016
Revised: August 2019

-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day                             = date("l");
$day2                            = date("l", time() + 86400);
$daynum                          = date("j");
$monthtrans                      = date("F");
$year                            = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------

$lang                            = array();
// Menu
$lang['Settings']                = 'Inställningar';
$lang['Layout']                  = 'Layout';
$lang['Lighttheme']              = 'Ljust tema';
$lang['Darktheme']               = 'Mörkt tema';
$lang['Nonmetric']               = 'US (F) ';
$lang['Metric']                  = 'Metriskt (C)';
$lang['UKmetric']                = 'BG (MPH - Metriskt) ';
$lang['Scandinavia']             = 'Scandinavien(M/S)';
$lang['Menu Options']            = 'Menyalternativ';
$lang['Worldwideearthquakes']    = 'Jordbävningar';
$lang['Toggle']                  = 'Fullskärm';
$lang['Contactinfo']             = 'Station- & kontaktinfo';
$lang['Templateinfo']            = 'Mallinfo';
$lang['language']                = 'SPRÅK';
$lang['Weatherstationinfo']      = 'Väderstation Info';
$lang['Webdesigninfo']           = 'Mallinfo';
$lang['Contact']                 = 'Kontact';
//days
$lang['Monday']                  = 'Måndag';
$lang['Tuesday']                 = 'Tisdag';
$lang['Wednesday']               = 'Onsdag';
$lang['Thursday']                = 'Torsdag';
$lang['Friday']                  = 'Fredag';
$lang['Saturday']                = 'Lördag';
$lang['Sunday']                  = 'Söndag';
//months
$lang['January']                 = 'Jan';
$lang['Febuary']                 = 'Feb';
$lang['March']                   = 'Mar';
$lang['April']                   = 'Apr';
$lang['May']                     = 'Maj';
$lang['June']                    = 'Juni';
$lang['July']                    = 'Juli';
$lang['August']                  = 'Aug';
$lang['September']               = 'Sep';
$lang['October']                 = 'Okt';
$lang['November']                = 'Nov';
$lang['December']                = 'Dec';
//temperature
$lang['Temperature']             = 'Temperatur';
$lang['Feelslike']               = 'Känns som';
$lang['Humidity']                = 'Luftfuktighet';
$lang['Dewpoint']                = 'Daggpunkt';
$lang['Trend']                   = 'trend ';
$lang['Heatindex']               = 'Värmeindex';
$lang['Windchill']               = 'Avkylningsindex';
$lang['Tempfactors']             = 'Temp faktor';
$lang['Nocautions']              = 'Inga varningar';
$lang['Wetbulb']                 = 'Wet Bulb';
$lang['dry']                     = '& torrt';
$lang['verydry']                 = '& mycket torrt';
//new feature temperature feels
$lang['FreezingCold']            = 'Iskallt';
$lang['FeelingVeryCold']         = 'Mycket kallt';
$lang['FeelingCold']             = 'Kallt';
$lang['FeelingCool']             = 'Kyligt';
$lang['FeelingComfortable']      = 'Komfortablelt';
$lang['FeelingWarm']             = 'Varmt';
$lang['FeelingHot']              = 'Ganska varmt';
$lang['FeelingUncomfortable']    = 'Okomfortabelt';
$lang['FeelingVeryHot']          = 'Mycket varmt';
$lang['FeelingExtremelyHot']     = 'Extremt varmt';
//wind
$lang['Windspeed']               = 'Vindhastighet';
$lang['Gust']                    = 'Vindbyar';
$lang['Direction']               = 'Riktning';
$lang['Gusting']                 = 'Byar vid';
$lang['Blowing']                 = 'Blåser från';
$lang['Wind']                    = 'Vind';
$lang['Wind Run']                = 'Wind Run';
$lang['AvgSpeedToday']			 = 'Medelvind idag';
$lang['10 minutes']				= '10 min';
$lang['Avg Wind']			    = 'Medelvind';
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                    = 'Stiltje';
$lang['Lightair']                = 'Nästan stiltje';
$lang['Lightbreeze']             = 'Lätt bris';
$lang['Gentelbreeze']            = 'Lätt bris';
$lang['Moderatebreeze']          = 'God bris';
$lang['Freshbreeze']             = 'Frisk bris';
$lang['Strongbreeze']            = 'Styv bris';
$lang['Neargale']                = 'Frisk kuling';
$lang['Galeforce']               = 'Styv kuling';
$lang['Stronggale']              = 'Hård kuling';
$lang['Storm']                   = 'Storm';
$lang['Violentstorm']            = 'Svår Storm';
$lang['Hurricane']               = 'Orkan';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']          = 'Lugnt';
$lang['LightBreezeattimes']      = 'Svag vind';
$lang['MildBreezeattimes']       = 'Svag vind';
$lang['ModerateBreezeattimes']   = 'Måttlig vind';
$lang['FreshBreezeattimes']      = 'Måttlig vind';
$lang['StrongBreezeattimes']     = 'Frisk vind';
$lang['NearGaleattimes']         = 'Frisk vind';
$lang['GaleForceattimes']        = 'Hård vind';
$lang['StrongGaleattimes']       = 'Mycket hård vind';
$lang['StormConditions']         = 'Storm';
$lang['ViolentStormConditions']  = 'Svår storm';
$lang['HurricaneConditions']     = 'Orkan';
$lang['Avg']                     = 'Medel';
$lang['Avg-Dir']                 = 'Ø';//used for compass

//wind direction compass
$lang['Northdir']                = '&nbsp;<span>Nordlig<br></span>';
$lang['NNEdir']                  = 'Nord Nord <br><span>Ost</span>';
$lang['NEdir']                   = 'Nord <span> Ost<br></span>';
$lang['ENEdir']                  = 'Ost Nord<br><span>Ost</span>';
$lang['Eastdir']                 = '&nbsp;<span>Ostlig<br></span>';
$lang['ESEdir']                  = 'Ost Syd<br><span>Ost</span>';
$lang['SEdir']                   = 'Syd <span> Ost</span>';
$lang['SSEdir']                  = 'Syd Syd<br><span>Ost</span>';
$lang['Southdir']                = '&nbsp<span>Sydlig</span>';
$lang['SSWdir']                  = 'Syd Syd<br><span>Väst</span>';
$lang['SWdir']                   = 'Syd <span> Väst</span>';
$lang['WSWdir']                  = 'Väst Syd<br><span>Väst</span>';
$lang['Westdir']                 = '&nbsp;<span>Västlig</span>';
$lang['WNWdir']                  = 'Väst Nord<br><span>Väst</span>';
$lang['NWdir']                   = 'Nord <span> Väst</span>';
$lang['NNWdir']                  = 'Nord Nord<br><span>Väst</span>';
//wind direction avg
$lang['North']                   = 'Norr';
$lang['NNE']                     = 'NNO';
$lang['NE']                      = 'NO';
$lang['ENE']                     = 'ONO';
$lang['East']                    = 'Ost';
$lang['ESE']                     = 'OSO';
$lang['SE']                      = 'SO';
$lang['SSE']                     = 'SSO';
$lang['South']                   = 'Syd';
$lang['SSW']                     = 'SSV';
$lang['SW']                      = 'SV';
$lang['WSW']                     = 'VSV';
$lang['West']                    = 'Väst';
$lang['WNW']                     = 'VNV';
$lang['NW']                      = 'NV';
$lang['NNW']                     = 'NNV';
// extra wind direction average top module
$lang['NEdirs']                   = 'Nord Ost';
$lang['SEdirs']                   = 'Syd Ost';
$lang['SWdirs']                   = 'Syd Väst';
$lang['NWdirs']                   = 'Nord Väst';
//rain
$lang['raintoday']               = 'Regn idag';
$lang['Rate']                    = 'Regnintensitet';
$lang['Rainfall']                = 'Regn';
$lang['Precip']                  = 'Regn'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                    = 'Regn';
$lang['Heavyrain']               = 'Kraftigt regn';
$lang['Flooding']                = 'Mycket kraftigt regn';
$lang['Rainbow']                 = 'Regnbåge';
$lang['Windy']                   = 'Blåsigt';
$lang['Last Hour']				 = 'Senaste timmen';
$lang['Last-Twenty-Four-Hour']   = 'Senaste 24 tim';
$lang['Last-Ten-Minutes']  		 = 'Senaste 10 min';
$lang['Snow Accumulation']		 = 'Snö total';
$lang['Rain Accumulation']		 = 'Regn total';
$lang['Thunderstorm']			 = 'Åska';
$lang['Accumulation']			 = '&nbsp;&nbsp;&nbsp;Total';
//sun -moon-daylight-darkness
$lang['Sun']                     = 'Sol';
$lang['Moon']                    = 'Måne';
$lang['Sunrise']                 = 'Soluppgång';
$lang['Sunset']                  = 'Solnedgång';
$lang['Moonrise']                = 'Månen går upp';
$lang['Moonset']                 = 'Månen går ner';
$lang['Night']                   = 'Natt';
$lang['Day']                     = 'Dag';
$lang['Nextnewmoon']             = 'Nästa nymåne';
$lang['Nextfullmoon']            = 'Nästa fullmåne';
$lang['Luminance']               = 'Upplyst';
$lang['Moonphase']               = 'Månfas';
$lang['Estimated']               = '&nbsp;Beräknat';
$lang['Daylight']                = 'Dagsljus';
$lang['Daylight1']               = '&nbsp;&nbsp;Dagsljus';
$lang['Darkness']                = 'Mörker';
$lang['Darkness1']               = '&nbsp;&nbsp;Mörker';
$lang['Daysold']                 = 'dagar gammal';
$lang['Belowhorizon']            = 'under<br>horisonten';
$lang['Mintill']                 = ' minuter till';
$lang['Till']                    = 'Tills ';
$lang['Minago']                  = ' minuter sedan';
$lang['Hrs']                     = ' tim';
$lang['Min']                     = ' min';
$lang['TotalDarkness']           = 'Totalt mörker';
$lang['TotalDaylight']           = 'Totalt dagsljus';
$lang['First Light']			 = 'Gryning';
$lang['Last Light']				 = 'Skymning';
$lang['Below']                   = 'är under horisonten';
$lang['Newmoon']                 = 'Nymåne';
$lang['Waxingcrescent']          = 'Tilltagande skära';
$lang['Firstquarter']            = 'Halvmåne (1a kvarteret)';
$lang['Waxinggibbous']           = 'Tilltagande halvmåne';
$lang['Fullmoon']                = 'Fullmåne';
$lang['Waninggibbous']           = 'Avtagande halvmåne';
$lang['Lastquarter']             = 'Halvmåne (3e kvarteret)';
$lang['Waningcrescent']          = 'Avtagande skära';
$lang['Set']        			 = 'Uppgång';
$lang['Rise']        		     = 'Nedgång';
$lang['Daylight Left'] 			= '&nbsp;&nbsp;&nbsp;Solnedgång';
$lang['Darkness Left'] 			= '&nbsp;&nbsp;&nbsp;Soluppgång';

//trends
$lang['Falling']                 = 'Sjunker';
$lang['Rising']                  = 'Stiger';
$lang['Steady']                  = 'Stabilt';
$lang['Rapidly']                 = 'Snabbt';
$lang['Temp']                    = 'Temp';
//Solar-UV
//uv
$lang['Nocaution']               = 'No <color>caution</color> required';
$lang['Wearsunglasses']          = 'Bär <color>solglasögon</color> soliga dagar';
$lang['Stayinshade']             = 'Stanna i skuggan mitt på dagen när <color>solen</color> är som starkast';
$lang['Reducetime']              = 'Minska tid i<color>solen</color> mellan kl.10-14 ';
$lang['Minimize']                = 'Minska tid i <color>solen</color> mellan kl.10-16 ';
$lang['Trytoavoid']              = 'Undvik vistas i <color>solen</color> mellan kl.10-16 ';

//solar
$lang['Poor']                    = 'Svag<color> <br>Strålning</color>';
$lang['Low']                     = 'Låg <br><color>Strålning</color>';
$lang['Moderate']                = 'Medel <br><color>Strålning</color>';
$lang['Good']                    = 'Hög <br><color>Strålning</color>';
$lang['Solarradiation']          = 'Solstrålning';
//current sky
$lang['Currentsky']              = 'Förhållanden';
$lang['Currently']               = 'Nuvarande';
$lang['Cloudcover']              = 'Molntäcke';
//Notifications
$lang['Nocurrentalert']          = 'Inga väder <span>varningar :)</span>';
$lang['Windalert']               = 'Vindbyar upp mot';
$lang['Tempalert']               = 'Hög temperatur';
$lang['Heatindexalert']          = 'Värmeindex varning';
$lang['Windchillalert']          = 'Köldindex varning';
$lang['Dewpointalert']           = 'Hög luftfuktighet';
$lang['Dewpointcolderalert']     = 'Daggpunkt varning';
$lang['Feelslikecolderalert']    = 'Känns kallare';
$lang['Feelslikewarmeralert']    = 'Känns varmare';
$lang['Rainratealert']           = 'per/tim<span> Kraftig nederbörd ';
//Earthquake Notifications
$lang['Regional']                = 'Lokal jordbävning';
$lang['Significant']             = 'Signifikant jordbävning';
$lang['Nosignificant']           = 'Inga Signifikanta jordbävningar';
//Main page
$lang['Barometer']               = 'Barometer';
$lang['UVSOLAR']                 = 'UV-Sol';
$lang['Earthquake']              = 'Jordbävning';
$lang['Daynight']                = 'Dag- och nattinfo';
$lang['SunPosition']             = 'Solens position';
$lang['Location']                = 'Placering ';
$lang['Hardware']                = 'Hårdvara';
$lang['Rainfalltoday']           = 'Regn idag';
//$lang['Windspeed']               = 'Vindhastighet'; // Doublet. See "wind" above
$lang['Winddirection']           = 'Vindriktning';
$lang['Measured']                = 'Uppmätt idag';
$lang['Forecast']                = 'Prognos';
$lang['Forecastahead']           = 'Prognos framåt';
$lang['Forecastsummary']         = 'Översiktlig prognos';
$lang['WindGust']                = 'Vindhastighet | Byar';
$lang['Hourlyforecast']          = 'Timmesprognos ';
$lang['Significantearthquake']   = 'Signifikant jordbävning';
$lang['Regionalearthquake']      = 'Lokal jordbävning';
$lang['Average']                 = 'Medel';
$lang['Notifications']           = 'Väder <span>Varning</span>';
$lang['Indoor']                  = 'Inomhus';
$lang['Today']                   = 'Idag';
$lang['Tonight']                 = 'Ikväll';
$lang['Tomorrow']                = 'Imorgon';
$lang['Tomorrownight']           = 'Imorgon kväll';
$lang['Updated']                 = 'Uppdaterad';
$lang['Meteor']                  = 'Meteorskurar';
$lang['Firerisk']                = 'Brandrisk';
$lang['Localtime']               = 'Lokal <span2>Tid</span2>';
$lang['Nometeor']                = 'Inga meteorskurar';
$lang['LiveWebCam']              = 'Live Webbkamera';
$lang['Online']                  = 'Online';
$lang['Offline']                 = 'Offline';
$lang['Weatherstation']          = 'Väderstation';
$lang['Cloudbase']               = 'Molnbas';
$lang['uvalert']                 = 'Varning högt UVINDEX';
$lang['Max']                     = 'Max';
$lang['Min']                     = 'Min';
$lang['Almanac'] 				 = 'Historik';
$lang['Weather Data Provided By']='Väderinformation från';
$lang['Airport']='Flygplats Metar';
$lang['Weather Station'] ='Väderstation';
$lang['Information'] ='Information';
$lang['Operational Since'] ='I drift sedan';
$lang['Battery'] ='Batteri';
$lang['Installed']='Installerad';
$lang['Interface Uptime']='Interface Uptime';
$lang['Meteobridge Interface']='Meteobridge Interface';
//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Mikro jordbävning';
$lang['MinorE']                  = 'Mycket liten jordbävning';
$lang['LightE']                  = 'Mindre jordbävning';
$lang['ModerateE']               = 'Lätt jordbävning';
$lang['StrongE']                 = 'Medel jordbävning';
$lang['MajorE']                  = 'Stark jordbävning';
$lang['GreatE']                  = 'Större jordbävning';
$lang['RegionalE']               = 'Lokal';
$lang['Conditions']              = 'Förhållanden';
$lang['Cloudbase Height']        = 'Molnbas höjd';
$lang['Station']                 = 'Station';
$lang['Detailed Forecast']       = 'Detaljerad prognos';
$lang['Summary Outlook']         = 'Sammanfattning';
//Air Quality
$lang['Hazordous']               = 'Farlig luftkvalitet';
$lang['VeryUnhealthy']           = 'Mycket ohälsosam luftkvalitet';
$lang['Unhealthy']               = 'Ohälsosam luftkvalitet';
$lang['UnhealthyFS']             = 'Ohälsosam luft för känsliga personer';
$lang['Moderate']                = 'Medelbra luftkvalitet ';
$lang['Good']                    = 'Bra luftkvalitet ';
$lang['Air Quality']			 = 'Luftkvalitet ';
#notification additions
$lang['notifyTitle']             = 'Notifikation';
$lang['notifyAlert']             = "Varning";
$lang['notifyLowBatteryAlert']   = "Varning för lågt batteri";
$lang['notifyConsoleLowBattery'] = "Konsollens batteri är dåligt";
$lang['notifyStationLowBattery'] = "Stationens batteri är dåligt";
$lang['GoodBattery']             = 'Bra';
$lang['ReplaceBattery']          = 'Byt';
$lang['ConditionBattery']		 = 'Kondition';
$lang['notifyUVIndex']           = "UV-Index Varning";
$lang['notifyUVExposure']        = "Minska solexponering";
$lang['notifyHeatExaustion']     = "Värmeslag";
$lang['notifyExtremeWind']       = "Varning för hård vind";
$lang['notifyGustUpTo']          = "Byar upp mot";
$lang['notifySeekShelter']       = "Sök skydd <notifyred><b>omedelbart!</b></notifyred>";
$lang['notifyHighWindWarning']   = "Varning för kraftig vind";
$lang['notifySustainedAvg']      = "Ihållande medel";
$lang['notifyWindAdvisory']      = "Möjligen kraftig vind";
$lang['notifyFreezing']          = "Risk för frost";
#weatherflow lightning
$lang['Last Three Hours']        = "Senaste 3 timmar";
$lang['Distance']          		 = "Avstånd";
$lang['Detected']          		 = "Senast detekterad";
$lang['Strikes']           		 = "&nbsp;blixtar";
$lang['Strikes Recorded']        = "Antal blixtar";
$lang['Total']        			 = "Totalt";
$lang['Last Strike Detected']   = "Senaste blixt detekterad ";
$lang['Lightning Today']        = "&nbsp;&nbsp;Idag";//today
$lang['Quiet']        			= "Tyst";
$lang['Active']        			= "Aktiv";
$lang['Ago']        			= "Sedan";
$lang['Now']        			= "Nu";
#metar conditions
$lang['Snow-Metar']				= "Snö";
$lang['Light Rain-Metar']		= "Lätt regn";
$lang['Heavy Rain-Metar']		= "Kraftigt regn";
$lang['Moderate Rain-Metar']	= "Regn";
$lang['Light Snow-Metar']		= "Lätt snöfall";
$lang['Moderate Snow-Metar']	= "Snöfall";
$lang['Snow Grains-Metar']		= "Kornsnö";
$lang['Sleet-Metar']			= "Snöblandat regn";
$lang['Foggy-Metar']			= "Dimma";
$lang['Misty-Metar']			= "Duggregn";
$lang['Hail and Rain-Metar']	= "Hagel och regn";
$lang['Ice Crystals-Metar']		= "Iskristaller";
$lang['Ice Pellets-Metar']		= "Iskorn";
$lang['Thunderstorm-Metar']		= "Åska";
$lang['Sand Storm-Metar']		= "Sand Storm";
$lang['Volcanic Ash-Metar']		= "Vulkanisk aska";
$lang['Tornado-Metar']			= "Tornado";
$lang['Water Sprout-Metar']		= "Tromb";
$lang['Clear-Metar']			= "Klart";
$lang['Mostly Clear-Metar']		= "Nästan klart";
$lang['Partly Cloudy-Metar']	= "Halvklart";
$lang['Mostly Scattered-Metar']	= "Växlande molnighet";
$lang['Mostly Cloudy-Metar']	= "Övervägande molnigt";
$lang['Overcast-Metar']			= "Molnigt";
$lang['Clouds-Metar']			= "Molnigt";
$lang['Conditions-Metar']		= " ";
$lang['Showers-Metar']			= "Regnbyar";
$lang['Rain-Metar']				= "Regn";
$lang['Lowest']					='&nbsp;Min';
$lang['Highest']				='&nbsp;Max';
$lang['Yesterday']				='Igår';

//time ago 
$lang['Years']='År';
$lang['Year']='År';
$lang['Months']='Månader';
$lang['Month']='Månad';
$lang['Day']='Dag';
$lang['Days']='Dagar';
$lang['Hours']='Timmar';
$lang['Hour']='Timme';
$lang['Minute']='Minut';
$lang['Minutes']='Minuter';
$lang['Last Rainfall']='Senaste regn';
//more extras
$lang['Particle Info']          = 'Particle Info';
$lang['Guide']                  = 'Guide';
$lang['GOOD']                   = 'GOOD';
$lang['MODERATE']               = 'MODERATE';
$lang['Unhealthy for Sensitive Groups'] = 'Unhealthy for Sensitive Groups';
$lang['Unhealthy'] = 'Unhealthy';
$lang['(Precautions Required)'] = '(Precautions Required)';
$lang['Very Unhealthy'] ='Very Unhealthy';
$lang['(Critical Conditions)'] ='(Critical Conditions)';
$lang['Hazardous'] = 'Hazardous';
$lang['(Life Threatening)'] = '(Life Threatening)';
$lang['from'] = 'från';
$lang['*Regional'] = '*Regionala';
$lang['*Warning Nearby'] = '*Warning Nearby';
$lang['Recent Earthquake'] = 'Recent Jordbävningar';
$lang['Regional Recent Earthquakes'] = 'Regionala Jordbävningar';

?>