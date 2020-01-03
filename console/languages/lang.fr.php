<?php
/* 
-----------------
Language Translation File for Weather34 MB SMART 
Language: French
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
setlocale(LC_TIME, "fr_FR.UTF-8");
$lang                           = array();
// Menu
$lang['Settings']               = 'Paramètres';
$lang['Layout']                 = 'Disposition';
$lang['Light Theme']            = 'Thème clair';
$lang['Darktheme']              = 'Thème foncé';
$lang['Nonmetric']              = 'Affichage température en (F) ';
$lang['Metric']                 = 'Affichage température en (C)';
$lang['UKmetric']               = 'Affichage du vent en MPH ';
$lang['Scandinavia']            = 'Affichage du vent en M/S';
$lang['Menu Options']            = 'Options de Menu';
$lang['Worldwideearthquakes']   = 'Tremblement de terre';
$lang['Toggle']                 = 'Basculer en plein écran ';
$lang['Contactinfo']            = 'Informations de contact';
$lang['Templateinfo']           = 'Contributeurs';
$lang['language']               = 'Choisir la langue';
$lang['Weatherstationinfo']     = 'Info de la station';
$lang['Webdesigninfo']          = 'Template Info';
$lang['Contact']                = 'Contact';
//days
$lang['Monday']                  = 'Lundi';
$lang['Tuesday']                 = 'Mardi';
$lang['Wednesday']               = 'Mercredi';
$lang['Thursday']                = 'Jeudi';
$lang['Friday']                  = 'Vendredi';
$lang['Saturday']                = 'Samedi';
$lang['Sunday']                  = 'Dimanche';
//months
$lang['January']                 = 'Jan';
$lang['Febuary']                 = 'Fev';
$lang['March']                   = 'Mars';
$lang['April']                   = 'Avril';
$lang['May']                     = 'Mai';
$lang['June']                    = 'Juin';
$lang['July']                    = 'Juil';
$lang['August']                  = 'Août';
$lang['September']               = 'Sep';
$lang['October']                 = 'Oct';
$lang['November']                = 'Nov';
$lang['December']                = 'Déc';
//temperature
$lang['Temperature']            = 'Température';
$lang['Feelslike']              = 'Ressenti';
$lang['Humidity']               = 'Humidité';
$lang['Dewpoint']               = 'Point de rosée';
$lang['Trend']                  = 'Tendance';
$lang['Heatindex']              = 'Indice de chaleur';
$lang['Windchill']              = 'Facteur vent ';
$lang['Tempfactors']            = 'Facteur temp.';
$lang['Nocautions']             = 'Aucune alerte';
$lang['Wetbulb']                = 'Humidex';
$lang['dry']                    = '& Sec';
$lang['verydry']                = '& Très Sec';
//new feature temperature feels
$lang['FreezingCold']           = 'Ressenti froid glacial';
$lang['FeelingVeryCold']        = 'Ressenti très froid';
$lang['FeelingCold']            = 'Ressenti froid';
$lang['FeelingCool']            = 'Ressenti chaud';
$lang['FeelingComfortable']     = 'Ressenti agréable';
$lang['FeelingWarm']            = 'Ressenti tiède';
$lang['FeelingHot']             = 'Ressenti chaud ';
$lang['FeelingUncomfortable']   = 'Ressenti inconfortable';
$lang['FeelingVeryHot']         = 'Ressenti très chaud';
$lang['FeelingExtremelyHot']    = 'Ressenti extrèmement chaud';
//wind
$lang['Windspeed']              = 'Vitesse Vent';
$lang['Gust']                   = '&nbsp;&nbsp;&nbsp;Rafale';
$lang['Direction']              = 'Direction';
$lang['Gusting']                = 'Rafale de';
$lang['Blowing']                = 'Souffler à';
$lang['Wind']                   = 'Vitesse';
$lang['Wind Run']               = 'Vitesse Run';
$lang['AvgSpeedToday']			 ='Moyen Du jour';
$lang['Avg Wind']			    = 'Moyen Vent';
$lang['10 minutes']				 = '10 min';
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                   = 'Calme';
$lang['Lightair']               = 'Calme';
$lang['Lightbreeze']            = 'Légère brise ';
$lang['Gentelbreeze']           = 'Petite Brise';
$lang['Moderatebreeze']         = 'Jolie brise';
$lang['Freshbreeze']            = 'Bonne brise ';
$lang['Strongbreeze']           = 'Forte brise';
$lang['Neargale']               = 'Tempete proche';
$lang['Galeforce']              = 'Force du Vent';
$lang['Stronggale']             = 'Forte tempête';
$lang['Storm']                  = 'Orage';
$lang['Violentstorm']           = 'Orage violent';
$lang['Hurricane']              = 'Ouragan';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']         = 'Condition calme';
$lang['LightBreezeattimes']     = 'Légère brise par moment';
$lang['MildBreezeattimes']      = 'Légère brise à certains moment';
$lang['ModerateBreezeattimes']  = 'Brise modérée par moment';
$lang['FreshBreezeattimes']     = 'Fraiche brise par moment';
$lang['StrongBreezeattimes']    = 'Forte brise par momemt';
$lang['NearGaleattimes']        = 'Coup de vent par moment';
$lang['GaleForceattimes']       = 'Fort coup de vent par moment';
$lang['StrongGaleattimes']      = 'Vent fort par moment';
$lang['StormConditions']        = 'Conditions météorologiques violentes';
$lang['ViolentStormConditions'] = 'Conditions de violente tempête';
$lang['HurricaneConditions']    = 'Conditions pour un ouragan';
$lang['Avg']                    = 'Moy';
$lang['Avg-Dir']                = 'Moy';//used for compass
//wind direction compass
$lang['Northdir']               = 'Dir <span>Nord<br></span>';
$lang['NNEdir']                 = 'Nord Nord <br><span>Est</span>';
$lang['NEdir']                  = 'Nord <span> Est<br></span>';
$lang['ENEdir']                 = 'Est Nord<br><span>Est</span>';
$lang['Eastdir']                = "Dir <span> Est<br></span>";
$lang['ESEdir']                 = 'Est Sud<br><span>Est</span>';
$lang['SEdir']                  = 'Sud <span> Est</span>';
$lang['SSEdir']                 = 'Sud Sud<br><span>Est</span>';
$lang['Southdir']               = 'Dir <span> Sud</span>';
$lang['SSWdir']                 = 'Sud Sud<br><span>Ouest</span>';
$lang['SWdir']                  = 'Sud <span> Ouest</span>';
$lang['WSWdir']                 = 'Ouest Sud<br><span>Ouest</span>';
$lang['Westdir']                = 'Dir <span> Ouest</span>';
$lang['WNWdir']                 = 'Ouest Nord<br><span>Ouest</span>';
$lang['NWdir']                  = 'Nord <span> Ouest</span>';
$lang['NNWdir']                 = 'Nord Nord<br><span>Ouest</span>';
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
$lang['West']                   = 'Ouest';
$lang['WNW']                    = 'ONO';
$lang['NW']                     = 'NO';
$lang['NNW']                    = 'NNO';
// extra wind direction average top module
$lang['NEdirs']                   = 'Noord Est';
$lang['SEdirs']                   = 'Sud Est';
$lang['SWdirs']                   = 'Sud Ouest';
$lang['NWdirs']                   = 'Nord Ouest';
//rain
$lang['raintoday']              = 'Précipitations';
$lang['Rate']                   = 'Pluie Taux';
$lang['Rainfall']               = 'Précipitations';
$lang['Precip']                 = 'précip'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                   = 'Pluie';
$lang['Heavyrain']              = 'Faible pluie';
$lang['Flooding']               = 'Inondation possible';
$lang['Rainbow']                = 'Arc en ciel';
$lang['Windy']                  = 'Venteux';
$lang['Last Hour']				= 'Dernier Hora';
$lang['Last-Twenty-Four-Hour']  = 'Dernier 24h';
$lang['Last-Ten-Minutes']  		= 'Dernier 10 min';
$lang['Snow Accumulation']		 = 'Accumulation Neige';
$lang['Rain Accumulation']		 = 'Accumulation Pluie';
$lang['Accumulation']			 = 'Accumulation';
$lang['Thunderstorm']			 = 'Orage';
//sun -moon-daylight-darkness
$lang['Sun']                    = 'Soleil';
$lang['Moon']                   = 'Lune';
$lang['Sunrise']                = 'Lever du soleil';
$lang['Sunset']                 = 'Coucher du soleil';
$lang['Moonrise']               = 'Lever de lune ';
$lang['Moonset']                = 'Coucher de lune';
$lang['Night']                  = 'Nuit ';
$lang['Day']                    = 'Le Jour';
$lang['Nextnewmoon']            = 'Nouvelle lune';
$lang['Nextfullmoon']           = 'Pleine lune';
$lang['Luminance']              = 'Luminance';
$lang['Moonphase']              = 'Ephémérides';
$lang['Estimated']              = '&nbsp;&nbsp;Estimé';
$lang['Daylight']               = 'Du Jour';
$lang['Darkness']               = 'Restant';
$lang['Darkness1']              = '&nbsp;&nbsp;Restant';
$lang['Daylight1']              = '&nbsp;&nbsp;Du Jour';
$lang['Daysold']                = 'Jours précedents';
$lang['First Light']			= 'Prem Lum';
$lang['Last Light']				= 'La Dern Lum';
$lang['Belowhorizon']           = 'Sous l horizon';
$lang['Mintill']                = '<br>Jusqu à min:';
$lang['Till']                   = 'à ';
$lang['Minago']                 = ' Il y a min:';
$lang['Hrs']                    = ' Hrs';
$lang['Min']                    = ' Min';
$lang['TotalDarkness']          = 'Obscurité <br>totale';
$lang['TotalDaylight']          = 'Journée très <br>ensoleillée';
$lang['Below']                  = 'is below the horizon';
$lang['Newmoon']                = 'Nouvelle lune';
$lang['Waxingcrescent']         = 'Montante';
$lang['Firstquarter']           = 'Premier quarter';
$lang['Waxinggibbous']          = 'Gibbeuse';
$lang['Fullmoon']               = 'Pleine lune';
$lang['Waninggibbous']          = 'Gibbeuse Décroissante';
$lang['Lastquarter']            = 'Dernier quartier';
$lang['Waningcrescent']         = 'Descendante';
$lang['Set']        			= 'Coucher';
$lang['Rise']        		    = 'Lever';
$lang['Daylight Left'] 			= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Au Soleil';
$lang['Darkness Left'] 			= '&nbsp;&nbsp;Lever du Soleil';
//trends
$lang['Falling']                = 'Chute';
$lang['Rising']                 = 'Hausse';
$lang['Steady']                 = 'Stable';
$lang['Rapidly']                = 'Rapidement';
$lang['Temp']                   = 'Temp.';
//Solar-UV
//uv
$lang['Nocaution']              = 'Faible<color> risque</color> à etre exposé ';
$lang['Wearsunglasses']         = 'Porter des <color> lunettes de soleil</color> ';
$lang['Stayinshade']            = 'Protéger vous <color> du </color> soleil';
$lang['Reducetime']             = 'Réduire son exposition au <color> soleil</color> entre 10H et 16H ';
$lang['Minimize']               = '<color>Vous pouvez vous</color> exposer entre 10H et 16 H ';
$lang['Trytoavoid']             = 'Eviter de vous <color> exposer</color> entre 10H et 16 H ';
//solar
$lang['Poor']                   = 'Radiations<color><br>Faibles</color>';
$lang['Low']                    = 'Radiations<color><br>Modérées<color>';
$lang['Moderate']               = 'Radiations<color><br>Fortes <br></color>';
$lang['Good']                   = 'Radiations<color><br>Extrème <br></color>';
$lang['Solarradiation']         = 'Radiations solaire';
//current sky
$lang['Currentsky']             = 'Conditions Actuelles';
$lang['Currently']              = 'Actuellement';
$lang['Cloudcover']             = 'Couverture nuageuse';
//Notifications
$lang['Nocurrentalert']         = 'Aucune Alerte météo ';
$lang['Windalert']              = 'Rafales de vent à';
$lang['Tempalert']              = 'Température maxi.';
$lang['Heatindexalert']         = 'Indice de chaleur elevé  ';
$lang['Windchillalert']         = 'Refroidissement éolien elevé ';
$lang['Dewpointalert']          = 'Humidité Inconfortable';
$lang['Dewpointcolderalert']    = 'Point de rosée bas';
$lang['Feelslikecolderalert']   = 'Ressenti plus froid';
$lang['Feelslikewarmeralert']   = 'Ressenti plus chaud';
$lang['Rainratealert']          = 'par/hr<span> Chute de pluie ';
//Earthquake Notifications
$lang['Regional']               = 'Tremblement de terre régionaux';
$lang['Significant']            = 'Tremblements de terre importants';
$lang['Nosignificant']          = 'Pas de tremblement de terre important';
//Main page
$lang['Barometer']              = 'Baromètre';
$lang['UVSOLAR']                = 'UV | Solaires';
$lang['Earthquake']             = 'TREMBLEMENTS DE TERRE ';
$lang['Daynight']               = 'Ephémérides';
$lang['SunPosition']            = 'Sun Position';
$lang['Location']               = 'Location';
$lang['Hardware']               = 'Hardware';
$lang['Rainfalltoday']          = 'Précipitations';
$lang['Winddirection']          = 'Direction du vent';
$lang['Measured']               = 'Mesuré ce jour';
$lang['Forecast']               = 'Prévisions';
$lang['Forecastahead']          = 'Prévisions à 10 jours ';
$lang['Forecastsummary']        = 'Prévisions Résumé';
$lang['WindGust']               = 'Rafale de vent';
$lang['Hourlyforecast']         = 'Prévisions horaires ';
$lang['Significantearthquake']  = 'Tremblements de terre importants';
$lang['Regionalearthquake']     = 'Tremblements de terre régionaux';
$lang['Average']                = 'Moyenne';
$lang['Notifications']          = 'Notifications des alertes';
$lang['Indoor']                 = 'Intérieur';
$lang['Today']                  = 'Du jour';
$lang['Tonight']                = 'Du soir';
$lang['Tomorrow']               = 'Demain';
$lang['Tomorrownight']          = 'Demain soir';
$lang['Updated']                = 'Mise à jour';
$lang['Meteor']                 = 'Pluie de météorites';
$lang['Firerisk']               = 'Risque de feux de forêts';
$lang['Localtime']              = 'Heure locale';
$lang['Nometeor']               = 'Pas de pluies de météorites';
$lang['LiveWebCam']             = 'Webcam';
$lang['Online']                 = 'En ligne';
$lang['Offline']                = 'Hors ligne';
$lang['Weatherstation']         = 'Station méteo';
$lang['Cloudbase']              = 'Base des nuages';
$lang['uvalert']                = 'Caution UVINDEX Fort';
$lang['Max']                    = 'Max';
$lang['Min']                    = 'Min';
$lang['Almanac'] 				= 'Almanach';
$lang['Weather Data Provided By']='Weather Data Provided By';
$lang['Airport']='Aéroport Metar';
$lang['Weather Station'] ='Station Météo';
$lang['Information'] ='Information';
$lang['Operational Since'] ='Opérationnel Depuis';
$lang['Battery'] ='Batterie';
$lang['Installed']='Installé';
$lang['Interface Uptime']='La durée de fonctionnent';
$lang['Meteobridge Interface']='Meteobridge Interface';
$lang['GoodBattery']             = '&nbsp;Bien';
$lang['ReplaceBattery']          = 'Replacer';
$lang['ConditionBattery']		 = '&nbsp;&nbsp;&nbsp;&nbsp;État';

//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Micro Earthquake';
$lang['MinorE']                 = 'Tremblement de terre mineur';
$lang['LightE']                  = 'Light Earthquake';
$lang['ModerateE']              = 'Tremblement de terre modéré';
$lang['StrongE']                = 'Tremblement de terre fort';
$lang['MajorE']                  = 'Major Earthquake';
$lang['GreatE']                  = 'Great Earthquake';
$lang['RegionalE']              = 'Regionale';
$lang['Conditions']             = 'Conditions';
$lang['Cloudbase Height']       = 'Base des nuages';
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
$lang['notifyTitle']             = 'Notifications';
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
$lang['Last Three Hours']        = "3 Dernières Hrs";
$lang['Distance']          		 = "Distance";
$lang['Detected']          		 = "Dernière Détecté";
$lang['Strikes']           		 = "La foudre";
$lang['Strikes Recorded']        = "la foudre Détecté";
$lang['Total']        			 = "Totale";
$lang['Last Strike Detected']   = "Dernière Détecté";
$lang['Lightning Today']        = "&nbsp;Du jour";//today
$lang['Quiet']        			= "Tranquille";
$lang['Active']        			= "Active";
$lang['Ago']        			= "Depuis";
$lang['Now']        			= "À Présent";
#metar conditions
$lang['Snow-Metar']					    = "Neige";
$lang['Light Rain-Metar']				= "Pluie Légère";
$lang['Heavy Rain-Metar']				= "Forte Pluie";
$lang['Moderate Rain-Metar']			= "Pluie Modérée";
$lang['Light Snow-Metar']				= "Neige Légère";
$lang['Moderate Snow-Metar']			= "Neige Modérée";
$lang['Snow Grains-Metar']			    = "Grains de Neige";
$lang['Sleet-Metar']					= "Neige Fondue";
$lang['Foggy-Metar']					= "Brumeux";
$lang['Misty-Metar']					= "Brumeux";
$lang['Hail and Rain-Metar']			= "Grêle et Pluie";
$lang['Ice Crystals-Metar']			= "Granulés de Glace";
$lang['Ice Pellets-Metar']			= "Granulés de Glace";
$lang['Thunderstorm-Metar']			= "Tonnerre";
$lang['Sand Storm-Metar']			= "Tempête de Sable";
$lang['Volcanic Ash-Metar']			= "Cendre Volcanique";
$lang['Tornado-Metar']			    = "Tornade";
$lang['Water Sprout-Metar']			= "Tornade";
$lang['Clear-Metar']				= "Ciel Clair";
$lang['Mostly Clear-Metar']			= "Un Ciel Clair";
$lang['Partly Cloudy-Metar']		= "Partiellement Nuageux";
$lang['Mostly Scattered-Metar']		= "Epars";
$lang['Mostly Cloudy-Metar']		= "Plutôt Nuageux";
$lang['Overcast-Metar']			    = "Sombre";
$lang['Clouds-Metar']			  	= "Des nuages";
$lang['Conditions-Metar']			= "Conditions";
$lang['Showers-Metar']			    = "";
$lang['Rain-Metar']					= "Pluie";
$lang['Lowest']						='&nbsp;&nbsp;&nbsp;Bas';
$lang['Highest']					='&nbsp;&nbsp;Haut';
$lang['Yesterday']				    ='Hier';
//time ago 
$lang['Years']='Ans';
$lang['Year']='Année';
$lang['Months']='Mois';
$lang['Month']='Mois';
$lang['Day']='Journées';
$lang['Days']='Journées';
$lang['Hours']='Heures';
$lang['Hour']='Heure';
$lang['Minute']='Minute';
$lang['Minutes']='Minute';
$lang['Last Rainfall']='Pluie Dernière';
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
$lang['from'] = 'de';
$lang['*Regional'] = '*Régionaux';
$lang['*Warning Nearby'] = '*Warning Nearby';
$lang['Recent Earthquake'] = 'Recent Séismes';
$lang['Regional Recent Earthquakes'] = 'Séismes Régionaux';

//uv
$lang['Low Caution']='Faible Risque';
$lang['Moderate Caution']='Risque Modéré';
$lang['High Caution']='Risque élevé';
$lang['Very High Caution']='Risque élevé';
$lang['Extreme Caution']='Risque extrême';

$lang['Chart Data']='Graphique';



?>