<?php
/*
-----------------
Language Translation File for Weather34 MB SMART
Language: German
Translated by: Torsten
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
$lang['Layout']                 = 'Layout wechseln';
$lang['Lighttheme']             = 'Helles Theme';
$lang['Darktheme']              = 'Dunkles Theme';
$lang['Nonmetric']              = 'US (F) ';
$lang['Metric']                 = 'Metric (C)';
$lang['UKmetric']               = 'UK (MPH - Metric) ';
$lang['Scandinavia']            = 'Scandinavia(M/S)';
$lang['Menu Options']           = 'Optionen';
$lang['Worldwideearthquakes']   = 'Weltweite Erdbeben';
$lang['Toggle']                 = 'Wechsel Vollbild ';
$lang['Contactinfo']            = 'Kontakt Information';
$lang['Templateinfo']           = 'Mitwirkende';
$lang['language']               = 'Sprache Auswählen';
$lang['Weatherstationinfo']     = 'Wetter Station Info';
$lang['Webdesigninfo']          = 'Template Info';
$lang['Contact']                = 'Kontakt';
//days
$lang['Monday']                 = 'Montag';
$lang['Tuesday']                = 'Dienstag';
$lang['Wednesday']              = 'Mittwoch';
$lang['Thursday']               = 'Donnerstag';
$lang['Friday']                 = 'Freitag';
$lang['Saturday']               = 'Sonnabend';
$lang['Sunday']                 = 'Sonntag';
//months
$lang['January']                = 'Jan';
$lang['Febuary']                = 'Feb';
$lang['March']                  = 'März';
$lang['April']                  = 'Apr';
$lang['May']                    = 'Mai';
$lang['June']                   = 'Juni';
$lang['July']                   = 'Juli';
$lang['August']                 = 'Aug';
$lang['September']              = 'Sepr';
$lang['October']                = 'Okt';
$lang['November']               = 'Nov';
$lang['December']               = 'Dez';
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
$lang['Wetbulb']                = 'nass';
$lang['dry']                    = '& trocken';
$lang['verydry']                = '& sehr trocken';
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
$lang['Windspeed']              = 'Wind';
$lang['Gust']                   = 'Wind Böen';
$lang['Direction']              = 'Richtung';
$lang['Gusting']                = 'in Böen';
$lang['Blowing']                = 'Wehen';
$lang['Wind']                   = 'Wind';
$lang['Wind Run']               = 'Wehen';
$lang['AvgSpeedToday'] ='Durchschn Heute';
$lang['Avg Wind']    = 'Durchschn';
$lang['10 minutes'] = '10 min';

// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                   = 'Windstill';
$lang['Lightair']               = 'Nahezu windstill';
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
$lang['LightBreezeattimes']     = 'Teils leichter Wind ';
$lang['MildBreezeattimes']      = 'Teils leichter Wind ';
$lang['ModerateBreezeattimes']  = 'Teils mässiger Wind';
$lang['FreshBreezeattimes']     = 'Teils frischer Wind';
$lang['StrongBreezeattimes']    = 'Teils starker Wind';
$lang['NearGaleattimes']        = 'Teils steifer Wind';
$lang['GaleForceattimes']       = 'Teils stürmischer Wind';
$lang['StrongGaleattimes']      = 'Teils stark stürmisch';
$lang['StormConditions']        = 'Stürmische Bedingungen';
$lang['ViolentStormConditions'] = 'Heftige Sturmbedingungen';
$lang['HurricaneConditions']    = 'Hurrikan';
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
$lang['NNE']                    = 'NNO';
$lang['NE']                     = 'NO';
$lang['ENE']                    = 'ENO';
$lang['East']                   = 'Ost ';
$lang['ESE']                    = 'ESO';
$lang['SE']                     = 'SO';
$lang['SSE']                    = 'SSO';
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
$lang['Rainbow']                = 'Regenbogen';
$lang['Windy']                  = 'Windig';
$lang['Last Hour']= 'Letzte Stunde';
$lang['Last-Twenty-Four-Hour']= 'Letzte 24h';
$lang['Last-Ten-Minutes']  = 'Letzte 10 min';
$lang['Snow Accumulation'] = 'Schnee Menge';
$lang['Rain Accumulation'] = 'Regen Menge';
$lang['Accumulation'] = 'Gesamtmenge';
$lang['Thunderstorm'] = 'Donner';

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
$lang['Belowhorizon']           = 'Unterhalb <br>des Hotizonts';
$lang['Mintill']                = '<br>Minuten bis';
$lang['Till']                   = 'bis ';
$lang['Minago']                 = ' Minuten vor';
$lang['Hrs']                    = ' Std';
$lang['Min']                    = ' Min';
$lang['TotalDarkness']          = 'Totale Dunkelheit';
$lang['TotalDaylight']          = 'Totale Tageslicht';
$lang['First Light']= 'Erstes Licht';
$lang['Last Light']= 'Letztes Licht';
$lang['Below']                  = 'ist unterhalb des Horizonts';
$lang['Newmoon']                = 'Neumond';
$lang['Waxingcrescent']         = 'zunehmend 1.Viertel';
$lang['Firstquarter']           = 'Erstes Viertel';
$lang['Waxinggibbous']          = 'zunehmend 2.Viertel';
$lang['Fullmoon']               = 'Vollmond';
$lang['Waninggibbous']          = 'abnehmend 3.Viertel';
$lang['Lastquarter']            = 'Letztes Viertel';
$lang['Waningcrescent']         = 'abnehmender Mond';
$lang['Set']        = 'Gesetzt';
$lang['Rise']            = 'Steigen';
$lang['Daylight Left'] = 'Tageslicht übrig';
$lang['Darkness Left'] = 'Dunkelheit übrig';
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
$lang['Stayinshade']            = 'Bleiben Sie mittags im Schatten, wenn die <color>Sonne</color> am stärksten ist';
$lang['Reducetime']             = 'Reduzieren Sie die Zeit in der <color>Sonne</color> zwischen 10Uhr-14Uhr ';
$lang['Minimize']               = '<color>Meiden Sie die Sonne</color> zwischen 10Uhr-14Uhr ';
$lang['Trytoavoid']             = 'Meiden Sie die <color>Sonne</color> zwischen 10Uhr-14Uhr ';
//solar
$lang['Poor']                   = 'Schwache Sonnen<color> <br>Strahlung</color>';
$lang['Low']                    = 'Niedrige Sonnen<br><color>Strahlung</color>';
$lang['Moderate']               = 'Mässige Sonnen <br><color>Strahlung</color>';
$lang['Good']                   = 'Starke Sonnen <br><color>Strahlung</color>';
$lang['Solarradiation']         = 'Sonnen Strahlung';
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
$lang['SunPosition']            = 'Sonnen Position';
$lang['Location']               = 'Position ';
$lang['Hardware']               = 'Hardware';
$lang['Rainfalltoday']          = 'Regen heute';
$lang['Windspeed']              = 'Windgeschw';
$lang['Winddirection']          = 'Windrichtung';
$lang['Measured']               = 'Gemessen heute';
$lang['Forecast']               = 'Prognose';
$lang['Forecastahead']          = 'Prognose 10 Tage';
$lang['Forecastsummary']        = 'Prognose  Text';
$lang['WindGust']               = 'Windgeschw | Böen';
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
$lang['Updated']                = 'aktualisiert';
$lang['Meteor']                 = 'Meteor Schauer Info';
$lang['Firerisk']               = 'Feuerrisiko';
$lang['Localtime']              = 'Lokale Zeit';
$lang['Nometeor']               = 'Keine Meteor Schauer';
$lang['LiveWebCam']             = 'Live Web Cam';
$lang['Online']                 = 'Online';
$lang['Offline']                = 'Offline';
$lang['Weatherstation']         = 'Wetter Station';
$lang['Cloudbase']              = 'Wolkenbasis';
$lang['uvalert']                = 'Achtung hoher UV-Index';
$lang['Max']                    = 'Max';
$lang['Min']                    = 'Min';
$lang['Almanac'] = 'Almanach';
$lang['Weather Data Provided By']='Wetter Daten bereitgestellt von';
$lang['Airport']='Flughafen Metar';
$lang['Weather Station'] ='Wetterstation';
$lang['Information'] ='Information';
$lang['Operational Since'] ='Betriebsbereit seit';
$lang['Battery'] ='Batterie';
$lang['Installed']='Eingerichtet';
$lang['Interface Uptime']='Laufzeit';
$lang['Meteobridge Interface']='Meteobridge';
$lang['GoodBattery']             = 'Gut';
$lang['ReplaceBattery']          = 'Ersetzen';
$lang['ConditionBattery'] = 'Zustand';

//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Mikro Erdbeben';
$lang['MinorE']                  = 'Mini Erdbeben';
$lang['LightE']                  = 'Leichtes Erdbeben';
$lang['ModerateE']               = 'Moderates Erdbeben';
$lang['StrongE']                 = 'Starkes Erdbeben';
$lang['MajorE']                  = 'Haupterdbeben';
$lang['GreatE']                  = 'Grosses Erdbeben';
$lang['RegionalE']              = 'Regional';
$lang['Conditions']             = 'Bedingungen';
$lang['Cloudbase Height']       = 'Hohe Wolkenbasis';
$lang['Station']                = 'Station';
$lang['Detailed Forecast']      = 'Detail Vorhersage';
$lang['Summary Outlook']        = 'Summe';
//Air Quality
$lang['Hazordous']              = 'Gefährliche Bedingungen';
$lang['VeryUnhealthy']          = 'Sehr ungesund';
$lang['Unhealthy']              = 'Ungesunde Luft Qualität';
$lang['UnhealthyFS']            = 'etwas ungesund';
$lang['Moderate']               = 'akzeptable Luft Qualität ';
$lang['Good']                   = 'Gute Luft Qualität ';
$lang['Air Quality']= 'Luft Qualität ';
#notification additions
$lang['notifyTitle']            = 'Wetter Station Hinweis';
$lang['notifyAlert']             = "Nachricht";
$lang['notifyLowBatteryAlert']   = "Geringe Batterie";
$lang['notifyConsoleLowBattery'] = "Konsole Batterie niedrig";
$lang['notifyStationLowBattery'] = "Station Batterie niedrig";
$lang['notifyUVIndex']           = "UV-Index Warnung";
$lang['notifyUVExposure']        = "Reduziere Sonne";
$lang['notifyHeatExaustion']     = "Hitze Strahlung";
$lang['notifyExtremeWind']       = "Extremer Wind";
$lang['notifyGustUpTo']          = "Wind wird stärker";
$lang['notifySeekShelter']       = "Suche Schutz <notifyred><b>SOFORT</b></notifyred>";
$lang['notifyHighWindWarning']   = "Starker Wind";
$lang['notifySustainedAvg']      = "Anhaltender Durchschnitt";
$lang['notifyWindAdvisory']      = "Wind Nachricht";
$lang['notifyFreezing']          = "frierend";
#weatherflow lightning
$lang['Last Three Hours']        = "Letzte 3 Stunden";
$lang['Distance']           = "Entfernung";
$lang['Detected']           = "erkannt";
$lang['Strikes']            = "&nbsp;&nbsp;Wettergefahr";
$lang['Strikes Recorded']        = "Wettergefahr erkannt";
$lang['Total']         = "Total";
$lang['Last Strike Detected']   = "Letzte Wettergefahr erkannt";
$lang['Lightning Today']        = "&nbsp;&nbsp;Heute";//today
$lang['Quiet']        = "Still";
$lang['Active']        = "Aktiv";
$lang['Ago']        = "Vor";
$lang['Now']        = "Jetzt";
#metar conditions
$lang['Snow-Metar']= "Schnee";
$lang['Light Rain-Metar']= "Leichter Regen";
$lang['Heavy Rain-Metar']= "Stark Regen";
$lang['Moderate Rain-Metar']= "Mäßiger Regen";
$lang['Light Snow-Metar']= "Leichter Schnee";
$lang['Moderate Snow-Metar']= "Mäßiger Schnee";
$lang['Snow Grains-Metar']= "Schneekörner";
$lang['Sleet-Metar']= "Schneeregen";
$lang['Foggy-Metar']= "Nebelige";
$lang['Misty-Metar']= "Nebelige";
$lang['Hail and Rain-Metar']= "Hagel und Regen";
$lang['Ice Crystals-Metar']= "Eiskristalle";
$lang['Ice Pellets-Metar']= "Eisgraupel";
$lang['Thunderstorm-Metar']= "Donner";
$lang['Sand Storm-Metar']= "Sandsturm";
$lang['Volcanic Ash-Metar']= "Vulkanasche";
$lang['Tornado-Metar']    = "Tornado";
$lang['Water Sprout-Metar']= "Tornado";
$lang['Clear-Metar']= "Klarer Himmel";
$lang['Mostly Clear-Metar']= "Weitestgehend klar";
$lang['Partly Cloudy-Metar']= "Teilweise bewölkt";
$lang['Mostly Scattered-Metar']= "Meist vereinzelt ";
$lang['Mostly Cloudy-Metar']= "Meist bewölkt";
$lang['Overcast-Metar']    = "Bewölkt";
$lang['Clouds-Metar']  = "Bewölkt";
$lang['Conditions-Metar']    = "Bedingungen";
$lang['Showers-Metar']    = "Schauer";
$lang['Rain-Metar']= "Regen";
$lang['Lowest']='Niedrig';
$lang['Highest']='&nbsp;&nbsp;Hoch';
$lang['Yesterday']    ='Gestern';

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
$lang['Last Rainfall']='Letzter Regen';

//more extras
$lang['Particle Info']          = 'Partikel Info';
$lang['Guide']                  = 'Anleitung';
$lang['GOOD']                   = 'Gut';
$lang['MODERATE']               = 'Moderat';
$lang['Unhealthy for Sensitive Groups'] = 'Ungesund für empfindliche Gruppen';
$lang['Unhealthy'] = 'Ungesund';
$lang['(Precautions Required)'] = '(Vorsicht gegeben)';
$lang['Very Unhealthy'] ='Sehr ungesund';
$lang['(Critical Conditions)'] ='(Kritische Bedingungen)';
$lang['Hazardous'] = 'Gefährlich';
$lang['(Life Threatening)'] = '(Lebensbedrohlich)';
$lang['from'] = 'von';
$lang['*Regional'] = '*Regionale';
$lang['*Warning Nearby'] = '*Warnung nah';
$lang['Recent Earthquake'] = 'kürzliches Erdbeben';
$lang['Regional Recent Earthquakes'] = 'Regionales Erdbeben';

//uv
$lang['Low Caution']='Niedriges Risiko';
$lang['Moderate Caution']='Moderates Risiko';
$lang['High Caution']='Hohes Risiko';
$lang['Very High Caution']='Hohes Risiko';
$lang['Extreme Caution']='Extremes Risiko';

$lang['Chart Data']='Diagrammdaten';

?>