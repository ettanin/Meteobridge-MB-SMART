<?php
/*
-----------------
Language Translation File for Weather34 MB SMART 
Language: German
Translated by: <Your Name Here>
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
setlocale(LC_TIME, "de_DE.UTF-8");
$lang                           = array();
// Menu
$lang['Settings']               = 'Einstellungen';
$lang['Layout']                 = 'Layout Wechseln';
$lang['Lighttheme']             = 'Helles Theme';
$lang['Darktheme']              = 'Dunkles Theme';
$lang['Nonmetric']              = 'US (F) ';
$lang['Metric']                 = 'Metric (C)';
$lang['UKmetric']               = 'UK (MPH - Metric) ';
$lang['Scandinavia']            = 'Scandinavia(M/S)';
$lang['Worldwideearthquakes']   = 'Welt Erdbeben';
$lang['Toggle']                 = 'Toggle Fullscreen ';
$lang['Contactinfo']            = 'Kontaktinformation';
$lang['Templateinfo']           = 'Contributors';
$lang['language']               = 'Sprache Auswählen';
$lang['Weatherstationinfo']     = 'Wetter Station Info';
$lang['Webdesigninfo']          = 'Template Info';
$lang['Contact']                = 'Contact';
//days
$lang['Monday']                 = 'Monday';
$lang['Tuesday']                = 'Tuesday';
$lang['Wednesday']              = 'Wednesday';
$lang['Thursday']               = 'Thursday';
$lang['Friday']                 = 'Friday ';
$lang['Saturday']               = 'Saturday';
$lang['Sunday']                 = 'Sunday';
//months
$lang['January']                = 'January';
$lang['Febuary']                = 'Febuary';
$lang['March']                  = 'March';
$lang['April']                  = 'April';
$lang['May']                    = 'May';
$lang['June']                   = 'June';
$lang['July']                   = 'July';
$lang['August']                 = 'August';
$lang['September']              = 'September';
$lang['October']                = 'October';
$lang['November']               = 'November';
$lang['December']               = 'December';
//temperature
$lang['Temperature']            = 'Temperatur';
$lang['Feelslike']              = 'Gefühlt';
$lang['Humidity']               = 'Feuchtigkeit';
$lang['Dewpoint']               = 'Taupunkt';
$lang['Trend']                  = 'Trend ';
$lang['Heatindex']              = 'Hitzeindex';
$lang['Windchill']              = 'Gefühlt ';
$lang['Tempfactors']            = 'Temp Faktor';
$lang['Nocautions']             = 'Mitwirkende';
$lang['Wetbulb']                = 'Wet Bulb';
$lang['dry']                    = '& Dry';
$lang['verydry']                = '& Very Dry';
//new feature temperature feels
$lang['FreezingCold']           = 'Sehr kalt';
$lang['FeelingVeryCold']        = 'Gefühlt sehr kalt';
$lang['FeelingCold']            = 'Gefühlt kalt';
$lang['FeelingCool']            = 'Gefühlt kühl';
$lang['FeelingComfortable']     = 'Gefühlt komfortabel ';
$lang['FeelingWarm']            = 'Gefühlt warm';
$lang['FeelingHot']             = 'Gefühlt heiss';
$lang['FeelingUncomfortable']   = 'Gefühlt unkomfortabel';
$lang['FeelingVeryHot']         = 'Gefühlt sehr heiss';
$lang['FeelingExtremelyHot']    = 'Gefühlt extrem heiss';
//wind
$lang['Windspeed']              = 'Wind Speed';
$lang['Gust']                   = 'Wind Böeen';
$lang['Direction']              = 'Richtung';
$lang['Gusting']                = 'in Böeen';
$lang['Blowing']                = 'Wehen';
$lang['Wind']                   = 'Wind';
$lang['Wind Run']               = 'Wehen Run';
$lang['AvgSpeedToday']			 ='Durchschn Heute';
$lang['Avg Wind']			    = 'Durchschn';
$lang['10 minutes']				 = '10 min';

// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                   = 'Windstill';
$lang['Lightair']               = 'Nahezu Windstill';
$lang['Lightbreeze']            = 'Leichte Brise ';
$lang['Gentelbreeze']           = 'Mässige Brise';
$lang['Moderatebreeze']         = 'Mittlere Brise';
$lang['Freshbreeze']            = 'Auffrischende Brise';
$lang['Strongbreeze']           = 'Starke Brise';
$lang['Neargale']               = 'Steifer Wind';
$lang['Galeforce']              = 'Stürmischer Wind';
$lang['Stronggale']             = 'Stark stürmisch';
$lang['Storm']                  = 'Schwerer Sturm';
$lang['Violentstorm']           = 'Kräftiger Sturm';
$lang['Hurricane']              = 'Orkan';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']         = 'Windstill';
$lang['LightBreezeattimes']     = 'Teils Leichter Wind ';
$lang['MildBreezeattimes']      = 'Teils Leichter Wind ';
$lang['ModerateBreezeattimes']  = 'Teils Mässiger Wind';
$lang['FreshBreezeattimes']     = 'Teils Frischer Wind';
$lang['StrongBreezeattimes']    = 'Teils Starker Wind';
$lang['NearGaleattimes']        = 'Tteils Steifer Wind';
$lang['GaleForceattimes']       = 'Tteils Stürmischer Wind';
$lang['StrongGaleattimes']      = ' Teils Stark stürmisch';
$lang['StormConditions']        = 'Stürmische Bedingungen';
$lang['ViolentStormConditions'] = 'Heftige Sturmbedingungen';
$lang['HurricaneConditions']    = 'Hurricane Conditions';
$lang['Avg']                    = 'Schnitt';
$lang['Avg-Dir']                = 'Schnitt';//used for compass

//wind direction compass
$lang['Northdir']               = '<span>Nord<br></span>';
$lang['NNEdir']                 = 'Nord Nord <br><span>Ost</span>';
$lang['NEdir']                  = 'Nord <span> Ost<br></span>';
$lang['ENEdir']                 = 'Ost Nord<br><span>Ost</span>';
$lang['Eastdir']                = "<span> Ost<br></span>";
$lang['ESEdir']                 = 'Ost Süd<br><span>Ost</span>';
$lang['SEdir']                  = 'Süd <span> Ost</span>';
$lang['SSEdir']                 = 'Süd Süd<br><span>Ost</span>';
$lang['Southdir']                = '<span> Süd</span>';
$lang['SSWdir']                 = 'Süd Süd<br><span>West</span>';
$lang['SWdir']                  = 'Süd <span> West</span>';
$lang['WSWdir']                 = 'West Süd<br><span>West</span>';
$lang['Westdir']                = '<span> West</span>';
$lang['WNWdir']                 = 'West Nord<br><span>West</span>';
$lang['NWdir']                  = 'Nord <span> West</span>';
$lang['NNWdir']                 = 'Nord Nord<br><span>West</span>';
//wind direction avg
$lang['North']                  = 'Nord';
$lang['NNE']                    = 'NNE';
$lang['NE']                     = 'NE';
$lang['ENE']                    = 'ENE';
$lang['East']                   = 'Ost ';
$lang['ESE']                    = 'ESE';
$lang['SE']                     = 'SE';
$lang['SSE']                    = 'SSE';
$lang['South']                  = 'Süd';
$lang['SSW']                    = 'SSW';
$lang['SW']                     = 'SW';
$lang['WSW']                    = 'WSW';
$lang['West']                   = 'West';
$lang['WNW']                    = 'WNW';
$lang['NW']                     = 'NW';
$lang['NNW']                    = 'NNW';
// extra wind direction average top module
$lang['NEdirs']                   = 'Nord Ost';
$lang['SEdirs']                   = 'Süd Ost';
$lang['SWdirs']                   = 'Süd West';
$lang['NWdirs']                   = 'Nord West';

//rain
$lang['raintoday']              = 'Regen Heute';
$lang['Rate']                   = 'Rate';
$lang['Rainfall']               = 'Regen';
$lang['Precip']                 = 'Regen'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                   = 'Regen';
$lang['Heavyrain']              = 'Starker Regen';
$lang['Flooding']               = 'Überschwemmung möglich';
$lang['Rainbow']                = 'Rainbow';
$lang['Windy']                  = 'Windy';
$lang['Last Hour']				= 'Letzte Stunde';
$lang['Last-Twenty-Four-Hour']	= 'Letzte 24h';
$lang['Last-Ten-Minutes']  		= 'Letzte 10 min';
$lang['Snow Accumulation']		 = 'Schnee Ansammlung';
$lang['Rain Accumulation']		 = 'Regen Ansammlung';
$lang['Accumulation']		 	= 'Ansammlung';
$lang['Thunderstorm']			 = 'Donner';

//sun -moon-daylight-darkness
$lang['Sun']                    = 'Sonne';
$lang['Moon']                   = 'Mond';
$lang['Sunrise']                = 'Sonnenaufgang';
$lang['Sunset']                 = 'Sonnenuntergang';
$lang['Moonrise']               = 'Mondaufgang ';
$lang['Moonset']                = 'Monduntergang';
$lang['Night']                  = 'Nacht ';
$lang['Day']                    = 'Tag';
$lang['Nextnewmoon']            = 'Neumond';
$lang['Nextfullmoon']           = 'Vollmond';
$lang['Luminance']              = 'Luminanz';
$lang['Moonphase']              = 'Mond Phase';
$lang['Estimated']              = 'Geschätzt';
$lang['Daylight']               = 'Tageslicht';
$lang['Daylight1']              = 'Tageslicht';
$lang['Darkness']               = 'Dunkelheit';
$lang['Darkness1']              = 'Dunkelheit';
$lang['Daysold']                = 'Tage alt';
$lang['Belowhorizon']           = 'below<br>horizon';
$lang['Mintill']                = '<br>Minuten bis';
$lang['Till']                   = 'Till ';
$lang['Minago']                 = ' Minuten vor';
$lang['Hrs']                    = ' Std';
$lang['Min']                    = ' Min';
$lang['TotalDarkness']          = 'Total Dunkelheit';
$lang['TotalDaylight']          = 'Total Tageslicht';
$lang['First Light']			= 'Erstes Licht';
$lang['Last Light']				= 'Letztes Licht';
$lang['Below']                  = 'is below the horizon';
$lang['Newmoon']                = 'Neumond';
$lang['Waxingcrescent']         = 'zunehmend 1.Viertel';
$lang['Firstquarter']           = 'Erstes Viertel';
$lang['Waxinggibbous']          = 'zunehmend 2.Viertel';
$lang['Fullmoon']               = 'Vollmond';
$lang['Waninggibbous']          = 'abnehmend 3.Viertel';
$lang['Lastquarter']            = 'Letztes Viertel';
$lang['Waningcrescent']         = 'abnehmender Mond';
$lang['Set']        			= 'Gesetzt';
$lang['Rise']        		    = 'Steigen';
$lang['Daylight Left'] 			= 'Tageslicht übrig';
$lang['Darkness Left'] 			= 'Dunkelheit übrig';
//trends
$lang['Falling']                = 'Fallend';
$lang['Rising']                 = 'Steigend';
$lang['Steady']                 = 'Stetig';
$lang['Rapidly']                = 'Schnell';
$lang['Temp']                   = 'Temp';
//Solar-UV
//uv
$lang['Nocaution']              = 'keine <color>Warnung</color> notwendig';
$lang['Wearsunglasses']         = 'Tragen Sie eine <color>Sonnebrille</color> an hellen Tagen';
$lang['Stayinshade']            = 'Bleiben Sie mittags im Schatten,wenn die <color>Sonne</color> am stärksten ist';
$lang['Reducetime']             = 'Reduzieren Sie die Zeit in der <color>Sonne</color> zwischen 10Uhr-14Uhr ';
$lang['Minimize']               = '<color>Meiden Sie die Sonne</color> zwischen 10Uhr-14Uhr ';
$lang['Trytoavoid']             = 'Meiden Sie die <color>Sonne</color> zwischen 10Uhr-14Uhrm ';
//solar
$lang['Poor']                   = 'Schwache Solar<color> <br>Radiation</color>';
$lang['Low']                    = 'Niedrige Solar<br><color>Radiation</color>';
$lang['Moderate']               = 'Mässige Solar <br><color>Radiation</color>';
$lang['Good']                   = 'Starke Solar <br><color>Radiation</color>';
$lang['Solarradiation']         = 'Solar Radiation';
//current sky
$lang['Currentsky']             = 'Aktuelle Bedingungen';
$lang['Currently']              = 'Gegenwärtig';
$lang['Cloudcover']             = 'Wolkendecke';
//Notifications
$lang['Nocurrentalert']         = 'Keine aktuellen Hinweise';
$lang['Windalert']              = 'Windböen bis';
$lang['Tempalert']              = 'steigende Temperaturen';
$lang['Heatindexalert']         = 'steigender Wärmeindex';
$lang['Windchillalert']         = 'es ist gefühlt frisch';
$lang['Dewpointalert']          = 'unangenehme Feuchtigkeit';
$lang['Dewpointcolderalert']    = 'es ist gefühlt kälter';
$lang['Feelslikecolderalert']   = 'es ist gefühlt kälter';
$lang['Feelslikewarmeralert']   = 'es ist gefühlt wärmer';
$lang['Rainratealert']          = 'per/hr<span> Regen möglich ';
//Earthquake Notifications
$lang['Regional']               = 'Regional Erdbeben';
$lang['Significant']            = 'Bedeutende Erdbeben';
$lang['Nosignificant']          = 'keine bedeutende Erdbeben';
//Main page
$lang['Barometer']              = 'Barometer';
$lang['UVSOLAR']                = 'UV | Solar';
$lang['Earthquake']             = 'Erdbebendaten';
$lang['Daynight']               = 'Tageslicht & Nacht Info';
$lang['SunPosition']            = 'Sun Position';
$lang['Location']               = 'Position ';
$lang['Hardware']               = 'Hardware';
$lang['Rainfalltoday']          = 'Regen heute';
$lang['Windspeed']              = 'Windspeed';
$lang['Winddirection']          = 'Windrichtung';
$lang['Measured']               = 'Gemessen heute';
$lang['Forecast']               = 'Prognose';
$lang['Forecastahead']          = 'Prognose 10 Tage';
$lang['Forecastsummary']        = 'Prognose  Text';
$lang['WindGust']               = 'Windspeed | Böen';
$lang['Hourlyforecast']         = 'Stündliche Prognose ';
$lang['Significantearthquake']  = 'Bedeutende Erdbeben';
$lang['Regionalearthquake']     = 'Regionale Erdbeben';
$lang['Average']                = 'Schnitt';
$lang['Notifications']          = 'Benachrichtigungen';
$lang['Indoor']                 = 'Innen';
$lang['Today']                  = 'Heute';
$lang['Tomorrow']               = 'Morgen';
$lang['Tonight']                = 'Nacht';
$lang['Tomorrownight']          = 'Morgen Nacht';
$lang['Updated']                = 'Updated';
$lang['Meteor']                 = 'Meteor Shower Info';
$lang['Firerisk']               = 'Feuerrisiko';
$lang['Localtime']              = 'Lokale Zeit';
$lang['Nometeor']               = 'Keine Meteor Showers';
$lang['LiveWebCam']             = 'Live Web Cam';
$lang['Online']                 = 'Online';
$lang['Offline']                = 'Offline';
$lang['Weatherstation']         = 'Weather Station';
$lang['Cloudbase']              = 'Cloudbase';
$lang['uvalert']                = 'Caution High UVINDEX';
$lang['Max']                    = 'Max';
$lang['Min']                    = 'Min';
$lang['Almanac'] 				= 'Almanach';
$lang['Weather Data Provided By']='Weather Data Provided By';
$lang['Airport']='Flughafen Metar';
$lang['Weather Station'] ='Wetterstation';
$lang['Information'] ='Information';
$lang['Operational Since'] ='Betriebsbereit Seit';
$lang['Battery'] ='Batterie';
$lang['Installed']='Eingerichtet';
$lang['Interface Uptime']='die Betriebszeit';

//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Micro Earthquake';
$lang['MinorE']                  = 'Minor Earthquake';
$lang['LightE']                  = 'Light Earthquake';
$lang['ModerateE']               = 'Moderate Earthquake';
$lang['StrongE']                 = 'Strong Earthquake';
$lang['MajorE']                  = 'Major Earthquake';
$lang['GreatE']                  = 'Great Earthquake';
$lang['RegionalE']              = 'Regional';
$lang['Conditions']             = 'Conditions';
$lang['Cloudbase Height']       = 'Cloudbase Height';
$lang['Station']                = 'Station';
$lang['Detailed Forecast']      = 'Detailed Forecast';
$lang['Summary Outlook']        = 'Summary';
//Air Quality
$lang['Hazordous']              = 'Hazardous Conditions';
$lang['VeryUnhealthy']          = 'Very Unhealthy';
$lang['Unhealthy']              = 'Unhealthy Air Quality';
$lang['UnhealthyFS']            = 'Unhealthy For Some';
$lang['Moderate']               = 'Moderate Air Quality ';
$lang['Good']                   = 'Good Air Quality ';
$lang['Air Quality']			= 'Air Quality ';
#notification additions
$lang['notifyTitle']            = 'Wetter Station Hinweis';
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
$lang['Last Three Hours']        = "Letzte 3 Stunde";
$lang['Distance']          		 = "Entfernung";
$lang['Detected']          		 = "Letzte Erkannt";
$lang['Strikes']           		 = "&nbsp;&nbsp;Streiks";
$lang['Strikes Recorded']        = "Streiks Erkannt";
$lang['Total']        			 = "Total";
$lang['Last Strike Detected']   = "Letzte Streik Erkannt";
$lang['Lightning Today']        = "&nbsp;&nbsp;Heute";//today
$lang['Quiet']        			= "Still";
$lang['Active']        			= "Active";
$lang['Ago']        			= "Vor";
$lang['Now']        			= "Jetzt";
#metar conditions
$lang['Snow-Metar']					= "Schnee";
$lang['Light Rain-Metar']				= "Leichter Regen";
$lang['Heavy Rain-Metar']				= "Stark Regen";
$lang['Moderate Rain-Metar']			= "Mäßiger Regen";
$lang['Light Snow-Metar']				= "Leichter Schnee";
$lang['Moderate Snow-Metar']			= "Mäßiger Schnee";
$lang['Snow Grains-Metar']			= "Schneekörner";
$lang['Sleet-Metar']					= "Schneeregen";
$lang['Foggy-Metar']					= "Nebelig";
$lang['Misty-Metar']					= "Nebelig";
$lang['Hail and Rain-Metar']			= "Hagel und Regen";
$lang['Ice Crystals-Metar']			= "Eiskristalle";
$lang['Ice Pellets-Metar']			= "Eiskristalle";
$lang['Thunderstorm-Metar']			= "Donner";
$lang['Sand Storm-Metar']				= "Sandsturm";
$lang['Volcanic Ash-Metar']			= "Vulkanasche";
$lang['Tornado-Metar']			    = "Tornado";
$lang['Water Sprout-Metar']			= "Tornado";
$lang['Clear-Metar']					= "Klarer Himmel";
$lang['Mostly Clear-Metar']			= "Weitestgehend Klar";
$lang['Partly Cloudy-Metar']			= "Teilweise Bewölkt";
$lang['Mostly Scattered-Metar']		= "Meist Vereinzelte ";
$lang['Mostly Cloudy-Metar']			= "Meist Bewölkt";
$lang['Overcast-Metar']			    = "Bewölkt";
$lang['Clouds-Metar']			  		= "Bewölkt";
$lang['Conditions-Metar']			    = "Bedingungen";
$lang['Showers-Metar']			    = "Schauer";
$lang['Rain-Metar']					= "Regen";
$lang['Lowest']						='Niedrig';
$lang['Highest']					='&nbsp;&nbsp;Hoch';
$lang['Yesterday']				    ='Gestern';

//time ago 
$lang['Years']='Jahre';
$lang['Year']='Jahr';
$lang['Months']='Monate';
$lang['Month']='Monat';
$lang['Day']='Tag';
$lang['Days']='Tage';
$lang['Hours']='Std';
$lang['Hour']='Std';
$lang['Minute']='Minute';
$lang['Minutes']='Minute';
$lang['Last Rainfall']='Letzte Regen';
?>