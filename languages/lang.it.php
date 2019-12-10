<?php
/* 
-----------------
Language Translation File for Weather34 MB SMART 
Language: Italian
Translated by: Antonio Angelotti 
Developed By: Brian Underdown/Erik M Madsen
October/November 2016
Revised: August 2019
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
setlocale(LC_TIME, "it_IT.UTF-8");
$lang                           = array();
// Menu
$lang['Settings']               = 'Impostazioni';
$lang['Layout']                 = 'Cambia Tema';
$lang['Lighttheme']             = 'Tema Light';
$lang['Darktheme']              = 'Tema Dark';
$lang['Nonmetric']              = 'US (F) ';
$lang['Metric']                 = 'Metrico (C)';
$lang['UKmetric']               = 'UK (MPH - Metrico) ';
$lang['Scandinavia']            = 'Scandinavia(M/S)';
$lang['Menu Options']            = 'Opzioni del Menu';
$lang['Worldwideearthquakes']   = 'Terremoti Mondo';
$lang['Toggle']                 = 'Schermo intero';
$lang['Contactinfo']            = 'Stazione & Informazioni';
$lang['Templateinfo']           = 'Contributori';
$lang['language']               = 'Seleziona la lingua';
$lang['Weatherstationinfo']     = 'Info Stazione Meteo';
$lang['Webdesigninfo']          = 'Info Template';
$lang['Contact']                = 'Contatti';
//days
$lang['Monday']                 = 'Lunedi';
$lang['Tuesday']                = 'Martedì';
$lang['Wednesday']              = 'Mercoledì';
$lang['Thursday']               = 'Giovedi';
$lang['Friday']                 = 'Venerdì';
$lang['Saturday']               = 'Sabato';
$lang['Sunday']                 = 'Domenica';
//months
$lang['January']                = 'Gen';
$lang['Febuary']                = 'Feb';
$lang['March']                  = 'Mar';
$lang['April']                  = 'Apr';
$lang['May']                    = 'Mag';
$lang['June']                   = 'Giugno';
$lang['July']                   = 'Luglio';
$lang['August']                 = 'Agosto';
$lang['September']              = 'Sett';
$lang['October']                = 'Ott';
$lang['November']               = 'Nov';
$lang['December']               = 'Dicem';
//temperature
$lang['Temperature']            = 'Temperatura';
$lang['Feelslike']              = 'Percepita';
$lang['Humidity']               = 'Umidità';
$lang['Dewpoint']               = 'Punto di rugiada';
$lang['Trend']                  = 'trend ';
$lang['Heatindex']              = 'Indice Calore';
$lang['Windchill']              = 'Percepita ';
$lang['Tempfactors']            = 'Fattore Temp';
$lang['Nocautions']             = 'Nessuna Cautela';
$lang['Wetbulb']                = 'Wet Bulb';
$lang['dry']                    = '& Dry';
$lang['verydry']                = '& Very Dry';
//new feature temperature feels
$lang['FreezingCold']           = 'Freddo Glaciale';
$lang['FeelingVeryCold']        = 'Si Sente molto freddo';
$lang['FeelingCold']            = 'Si Sente Freddo';
$lang['FeelingCool']            = 'Si Sente Fresco';
$lang['FeelingComfortable']     = 'Si Sente a proprio agio ';
$lang['FeelingWarm']            = 'Si Sente Caldo';
$lang['FeelingHot']             = 'Si Sente molto Caldo';
$lang['FeelingUncomfortable']   = 'Si Sente a Disagio';
$lang['FeelingVeryHot']         = 'Si Sente molto Caldo';
$lang['FeelingExtremelyHot']    = 'Si Sente Estremamente Caldo';
//wind
$lang['Windspeed']              = 'Velocità Vento';
$lang['Gust']                   = '&nbsp;&nbsp;Raffica';
$lang['Direction']              = 'Direzione';
$lang['Gusting']                = 'Raffica';
$lang['Blowing']                = 'Soffia';
$lang['Wind']                   = 'Velocità';
$lang['Wind Run']               = 'Velocità Run';
$lang['AvgSpeedToday']			='Media Oggi';
$lang['Avg Wind']			    ='Media Vento';
$lang['10 minutes']				 = '10 min';
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                   = 'Calma';
$lang['Lightair']               = 'Bava di Vento';
$lang['Lightbreeze']            = 'Brezza Leggera';
$lang['Gentelbreeze']           = 'Brezza tesa';
$lang['Moderatebreeze']         = 'Vento moderato';
$lang['Freshbreeze']            = 'Vento teso';
$lang['Strongbreeze']           = 'Vento fresco';
$lang['Neargale']               = 'Vicino a burrasca';
$lang['Galeforce']              = 'Gale Burrasca';
$lang['Stronggale']             = 'Burrasca forte';
$lang['Storm']                  = 'Tempesta';
$lang['Violentstorm']           = 'Tempesta violenta';
$lang['Hurricane']              = 'Uragano';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']         = 'Condizioni di Calma';
$lang['LightBreezeattimes']     = 'Bava di Vento ';
$lang['MildBreezeattimes']      = 'Brezza Leggera ';
$lang['ModerateBreezeattimes']  = 'Brezza Tesa';
$lang['FreshBreezeattimes']     = 'Vento Moderato';
$lang['StrongBreezeattimes']    = 'Vento Teso';
$lang['NearGaleattimes']        = 'Vento Fresco';
$lang['GaleForceattimes']       = 'Vento Forte';
$lang['StrongGaleattimes']      = 'Burrasca';
$lang['StormConditions']        = 'Tempesta';
$lang['ViolentStormConditions'] = 'Tempesta Violenta';
$lang['HurricaneConditions']    = 'Uragano';
$lang['Avg']                    = 'Media';
$lang['Avg-Dir']                = 'Media';//used for compass

//wind direction compass
$lang['Northdir']               = 'Da <span>Nord<br></span>';
$lang['NNEdir']                 = 'Nord Nord <br><span>Est</span>';
$lang['NEdir']                  = 'Nord <span> Est<br></span>';
$lang['ENEdir']                 = 'Est Nord<br><span>Est</span>';
$lang['Eastdir']                = "Da <span> Est<br></span>";
$lang['ESEdir']                 = 'Est Sud<br><span>Est</span>';
$lang['SEdir']                  = 'Sud <span> Est</span>';
$lang['SSEdir']                 = 'Sud Sud<br><span>Est</span>';
$lang['Southdir']               = 'Da <span> Sud</span>';
$lang['SSWdir']                 = 'Sud Sud<br><span>Ovest</span>';
$lang['SWdir']                  = 'Sud <span> Ovest</span>';
$lang['WSWdir']                 = 'Ovest Sud<br><span>Ovest</span>';
$lang['Westdir']                = 'Da <span> Ovest</span>';
$lang['WNWdir']                 = 'Ovest Nord<br><span>Ovest</span>';
$lang['NWdir']                  = 'Nord <span> Ovest</span>';
$lang['NNWdir']                 = 'Nord Nord<br><span>Ovest</span>';
//wind direction avg
$lang['North']                  = 'Nord';
$lang['NNE']                    = 'NNE';
$lang['NE']                     = 'NE';
$lang['ENE']                    = 'ENE';
$lang['East']                   = 'Est ';
$lang['ESE']                    = 'ESE';
$lang['SE']                     = 'SE';
$lang['SSE']                    = 'SSE';
$lang['South']                  = 'Sud';
$lang['SSW']                    = 'SSO';
$lang['SW']                     = 'SO';
$lang['WSW']                    = 'OSO';
$lang['West']                   = 'Ovest';
$lang['WNW']                    = 'ONO';
$lang['NW']                     = 'NO';
$lang['NNW']                    = 'NNO';
// extra wind direction average top module
$lang['NEdirs']                   = 'Nord Est';
$lang['SEdirs']                   = 'Sud Est';
$lang['SWdirs']                   = 'Sud Ovest';
$lang['NWdirs']                   = 'Nord Ovest';
//rain
$lang['raintoday']              = 'Precipitazioni Oggi';
$lang['Rate']                   = 'Tasso';
$lang['Rainfall']               = 'Precipitazioni';
$lang['Precip']                 = 'precip'; // must be short name do not use full precipitation !!!! ///
$lang['Rain']                   = 'Pioggia';
$lang['Heavyrain']              = 'Pioggia forte';
$lang['Flooding']               = 'Possibili Inondazioni';
$lang['Rainbow']                = 'Rainbow';
$lang['Windy']                  = 'Windy';
$lang['Last Hour']				= 'Ultima ora';
$lang['Last-Twenty-Four-Hour']  = 'Ultime 24 ore';
$lang['Last-Ten-Minutes']  		= 'Ultima 10 min';
$lang['Snow Accumulation']		= 'Accumulo Neve';
$lang['Rain Accumulation']		= 'Accumulo Pioggia';
$lang['Accumulation']			= '&nbsp;&nbsp Accumulo';
$lang['Thunderstorm']			= 'Tuono';
//sun -moon-daylight-darkness
$lang['Sun']                    = 'Sole';
$lang['Moon']                   = 'Luna';
$lang['Sunrise']                = 'Alba';
$lang['Sunset']                 = 'Tramonto';
$lang['Moonrise']               = 'Sorgere della luna ';
$lang['Moonset']                = 'Tramonto Luna';
$lang['Night']                  = 'Notte ';
$lang['Day']                    = 'Giorno';
$lang['Nextnewmoon']            = 'Luna nuova';
$lang['Nextfullmoon']           = 'Luna Piena';
$lang['Luminance']              = 'Luminanza';
$lang['Moonphase']              = 'Fase Lunare';
$lang['Estimated']              = '&nbsp;Stimato';
$lang['Daylight']               = 'Luce';
$lang['Daylight1']              = '&nbsp;&nbsp;&nbsp;&nbsp;Luce';
$lang['Darkness']               = 'Oscurità';
$lang['Darkness1']              = '&nbsp;Oscurità';
$lang['First Light']			= 'Prima Luce';
$lang['Last Light']				= 'Ultima Luce';
$lang['Daysold']                = 'Vecchia';
$lang['Belowhorizon']           = 'sotto<br>orizzonte';
$lang['Mintill']                = '<br>min fino';
$lang['Till']                   = 'a ';
$lang['Minago']                 = ' min fa';
$lang['Hrs']                    = ' ore';
$lang['Min']                    = ' min';
$lang['TotalDarkness']          = 'Ore notte';
$lang['TotalDaylight']          = 'Ore giorno';
$lang['Below']                  = '&egrave; sotto orizzonte';
$lang['Newmoon']                = 'Luna Nuova';
$lang['Waxingcrescent']         = 'Luna Crescente';
$lang['Firstquarter']           = 'Primo Quarto';
$lang['Waxinggibbous']          = 'Gibbosa Crescente';
$lang['Fullmoon']               = 'Luna Piena';
$lang['Waninggibbous']          = 'Gibbosa Calante';
$lang['Lastquarter']            = 'Ultimo Quarto';
$lang['Waningcrescent']         = 'Luna Calante';
$lang['Set']        			= 'Set';
$lang['Rise']        		    = 'Alba';
$lang['Daylight Left'] 			= '&nbsp;&nbsp;&nbsp;Al Tramonto';
$lang['Darkness Left'] 			= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Al Alba';
//trends
$lang['Falling']                = 'Diminuz';
$lang['Rising']                 = 'Aumento';
$lang['Steady']                 = 'Costante';
$lang['Rapidly']                = 'Rapidamente';
$lang['Temp']                   = 'Temp';
//Solar-UV
//uv
$lang['Nocaution']              = 'Nessuna <color>cautela</color> necessaria';
$lang['Wearsunglasses']         = 'Indossare <color>occhiali da sole</color> in giornate luminose';
$lang['Stayinshade']            = 'Rimani all ombra vicino mezzogiorno quando il <color>sole</color> è più forte';
$lang['Reducetime']             = 'Ridurre il tempo al <color>sole</color> tra le 10am-4pm ';
$lang['Minimize']               = 'Ridurre al minimo esposizione al <color>sole</color> tra le 10am-4pm ';
$lang['Trytoavoid']             = 'Cercate di evitare esposizione al <color>sole</color> tra le 10am-4pm ';
//solar
$lang['Poor']                   = 'Scarsa<color> <br>Radiazione</color>';
$lang['Low']                    = 'Bassa<br><color>Radiazione</color>';
$lang['Moderate']               = 'Moderata <br><color>Radiazione</color>';
$lang['Good']                   = 'Forte <br><color>Radiazione</color>';
$lang['Solarradiation']         = 'Radiazione solare';
//current sky
$lang['Currentsky']             = 'Condizioni Attuali';
$lang['Currently']              = 'Attualmente';
$lang['Cloudcover']             = 'Coperto dalle Nuvole';
//Notifications
$lang['Nocurrentalert']         = 'Nessuna allerta';
$lang['Windalert']              = 'Raffiche di vento';
$lang['Tempalert']              = 'Alta temperatura';
$lang['Heatindexalert']         = 'Allerta Indice di calore';
$lang['Windchillalert']         = 'Allerta Temperatura';
$lang['Dewpointalert']          = 'disagio Umidità';
$lang['Dewpointcolderalert']    = 'Allerta Punto di rugiada';
$lang['Feelslikecolderalert']   = 'Si sente più freddo';
$lang['Feelslikewarmeralert']   = 'Si sente più caldo';
$lang['Rainratealert']          = 'per/hr<span> Precipitazione ';
//Earthquake Notifications
$lang['Regional']               = 'Terremoti Regionali';
$lang['Significant']            = 'Significativi';
$lang['Nosignificant']          = 'Nessun Terremoto Significativo';
//Main page
$lang['Barometer']              = 'Barometro';
$lang['UVSOLAR']                = 'UV | <span style="color:#f26c4f">Dati Solari</span>';
$lang['Earthquake']             = 'Dati Terremoto';
$lang['Daynight']               = 'Info Giorno & Notte';
$lang['SunPosition']            = 'Sun Position';
$lang['Location']               = 'Posizione ';
$lang['Hardware']               = 'Hardware';
$lang['Rainfalltoday']          = 'Pioggia Giornaliera';
$lang['Winddirection']          = 'La direzione del vento';
$lang['Measured']               = 'Giorno Misurato';
$lang['Forecast']               = 'Previsione';
$lang['Forecastahead']          = 'Previsione 10 Giorni';
$lang['Forecastsummary']        = 'Previsione Sommaria';
$lang['WindGust']               = 'Raffica';
$lang['Hourlyforecast']         = 'Previsione Oraria';
$lang['Significantearthquake']  = 'Terremoto Significativi';
$lang['Regionalearthquake']     = 'Terremoto Regionali';
$lang['Average']                = 'Media';
$lang['Notifications']          = 'Notifiche di Allerta';
$lang['Indoor']                 = 'Interno';
$lang['Today']                  = 'Oggi';
$lang['Tonight']                = 'Notte';
$lang['Tomorrow']               = 'Domani';
$lang['Tomorrownight']          = 'Domani notte';
$lang['Updated']                = 'Aggiornato';
$lang['Meteor']                 = 'Info Sciame meteorico';
$lang['Firerisk']               = 'Rischio Incendio';
$lang['Localtime']              = 'Ora Locale';
$lang['Nometeor']               = 'Nessun Sciame meteorico';
$lang['LiveWebCam']             = 'WebCam';
$lang['Online']                 = 'Online';
$lang['Offline']                = 'Offline';
$lang['Weatherstation']         = 'Weather Station';
$lang['Cloudbase']              = 'Cloudbase';
$lang['uvalert']                = 'Caution High UVINDEX';
$lang['Max']                    = 'Max';
$lang['Min']                    = 'Min';
$lang['Almanac'] 				= 'Almanacco';
$lang['Weather Data Provided By']='Weather Data Provided By';
$lang['Airport']='Aeroporto Metar';
$lang['Weather Station'] ='Stazione Metereologica';
$lang['Information'] ='Weerstation';
$lang['Operational Since'] ='Operativo Dal';
$lang['Battery'] ='Batteria';
$lang['Installed']='Installato';
$lang['Interface Uptime']='Tempo di attività';
$lang['Meteobridge Interface']='Meteobridge Interfaccia';
$lang['GoodBattery']             = 'Buono';
$lang['ReplaceBattery']          = 'Sostituire';
$lang['ConditionBattery']		 = 'Condizione';

//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Micro Earthquake';
$lang['MinorE']                  = 'Minor Earthquake';
$lang['LightE']                  = 'Light Earthquake';
$lang['ModerateE']               = 'Moderate Earthquake';
$lang['StrongE']                 = 'Strong Earthquake';
$lang['MajorE']                  = 'Major Earthquake';
$lang['GreatE']                  = 'Great Earthquake';
$lang['RegionalE']              = 'Regional';
$lang['Conditions']             = 'Condizioni';
$lang['Cloudbase Height']       = 'Altezza Nuvole';
$lang['Station']                = 'Stazione';
$lang['Detailed Forecast']      = 'Dettagli Previsione';
$lang['Summary Outlook']        = 'Riepilogo Previsione';
//Air Quality
$lang['Hazordous']              = 'Hazardous Conditions';
$lang['VeryUnhealthy']          = 'Very Unhealthy';
$lang['Unhealthy']              = 'Unhealthy Air Quality';
$lang['UnhealthyFS']            = 'Unhealthy For Some';
$lang['Moderate']               = 'Moderate Air Quality ';
$lang['Good']                   = 'Good Air Quality ';
$lang['Air Quality']			= 'Qualità dell Aria';

#notification additions
$lang['notifyTitle']            = 'Notifiche';
$lang['notifyAlert']             = "Alert";
$lang['notifyLowBatteryAlert']   = "Low Battery Alert";
$lang['notifyConsoleLowBattery'] = "Console's battery is low";
$lang['notifyStationLowBattery'] = "Station's battery is low";
$lang['notifyUVIndex']           = "UV-Index Caution";
$lang['notifyUVExposure']        = "Reduce Sun Exposure";
$lang['notifyHeatExaustion']     = "Heat Exhaustion";
$lang['notifyExtremeWind']       = "Extreme Wind Warning";
$lang['notifyGustUpTo']          = "Gusts up to";
$lang['notifySeekShelter']       = "Seek shelter <notifyred><b>immediately</b></notifyred>";
$lang['notifyHighWindWarning']   = "High Wind Warning";
$lang['notifySustainedAvg']      = "Sustained avg";
$lang['notifyWindAdvisory']      = "Wind Advisory";
$lang['notifyFreezing']          = "Below Freezing";
#weatherflow lightning
$lang['Last Three Hours']        = "Ultime 3 Ore";
$lang['Distance']          		 = "Distanza";
$lang['Detected']          		 = "Ultime Rilevato";
$lang['Strikes']           		 = "&nbsp;&nbsp;Fulmini";
$lang['Strikes Recorded']        = "Fulmini Totale";
$lang['Total']        			 = "Totale";
$lang['Last Strike Detected']   = "Ultime Fulmini Rilevato ";
$lang['Lightning Today']        = "&nbsp;&nbsp;Oggi";//today
$lang['Quiet']        			= "Silenzioso";
$lang['Active']        			= "Active";
$lang['Ago']        			= "Fa";
$lang['Now']        			= "Adesso";
#metar conditions
$lang['Snow-Metar']					= "Neve";
$lang['Light Rain-Metar']				= "Pioggia Leggera";
$lang['Heavy Rain-Metar']				= "Pioggia Forte";
$lang['Moderate Rain-Metar']			= "Pioggia Moderata";
$lang['Light Snow-Metar']				= "Neve Leggera";
$lang['Moderate Snow-Metar']			= "Neve Moderata";
$lang['Snow Grains-Metar']			= "Grani Di Neve";
$lang['Sleet-Metar']					= "Nevischio";
$lang['Foggy-Metar']					= "Nebbioso";
$lang['Misty-Metar']					= "Nebbioso";
$lang['Hail and Rain-Metar']			= "Ave e Pioggia";
$lang['Ice Crystals-Metar']			= "Cristalli di Ghiaccio";
$lang['Ice Pellets-Metar']			= "Cristalli di Ghiaccio";
$lang['Thunderstorm-Metar']			= "Tuono";
$lang['Sand Storm-Metar']				= "Tempesta di Sabbia";
$lang['Volcanic Ash-Metar']			= "Cenere Vulcanica";
$lang['Tornado-Metar']			    = "Tornado";
$lang['Water Sprout-Metar']			= "Tornado";
$lang['Clear-Metar']					= "Cielo Sereno";
$lang['Mostly Clear-Metar']			= "Cielo Sereno";
$lang['Partly Cloudy-Metar']			= "Parzialmente Nuvoloso";
$lang['Mostly Scattered-Metar']		= "Nubi Sparse";
$lang['Mostly Cloudy-Metar']			= "Prevalentemente Nuvoloso";
$lang['Overcast-Metar']			    = "Nuvoloso";
$lang['Clouds-Metar']			  		= "Nuvoloso";
$lang['Conditions-Metar']			    = "Condizioni";
$lang['Showers-Metar']			    = "";
$lang['Rain-Metar']						= "Pioggia";
$lang['Lowest']							='Basso';
$lang['Highest']						='&nbsp;&nbsp;Alto';
$lang['Yesterday']				    ='Ieri';
//time ago 
$lang['Years']='Anni';
$lang['Year']='Anno';
$lang['Months']='Mesi';
$lang['Month']='Mese';
$lang['Day']='Giorno';
$lang['Days']='Giorni';
$lang['Hours']='Ore';
$lang['Hour']='Ore';
$lang['Minute']='Minuta';
$lang['Minutes']='Minuta';
$lang['Last Rainfall']='Ultime Pioggia';
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
$lang['from'] = 'da';
$lang['*Regional'] = '*Regionali';
$lang['*Warning Nearby'] = '*Warning Nearby';
$lang['Recent Earthquake'] = 'Recent Terremoti';
$lang['Regional Recent Earthquakes'] = 'Terremoti Regionali';
?>