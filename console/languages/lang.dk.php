<?php
/*
-----------------
Language Translation File for Weather34 MB SMART 
Language: English
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
$lang['Settings']                = 'Indstillinger';
$lang['Layout']                  = 'Skift sprog';
$lang['Lighttheme']              = 'Lyst Tema';
$lang['Darktheme']               = 'Mørkt Tema';
$lang['Nonmetric']               = 'US (F) ';
$lang['Metric']                  = 'Metrisk (C)';
$lang['UKmetric']                = 'UK (MPH - Metrisk) ';
$lang['Scandinavia']             = 'Skandinavien(M/S)';
$lang['Worldwideearthquakes']    = 'Jordskælv hele verden';
$lang['Menu Options']            = 'MENU INDSTILLINGER ';
$lang['Contactinfo']             = 'Stations & Kontakt Info';
$lang['Templateinfo']            = 'Skabelon Info';
$lang['language']                = 'SPROG';
$lang['Weatherstationinfo']      = 'Vejrstations Info';
$lang['Webdesigninfo']           = 'Skabelon Info';
$lang['Contact']                 = 'Kontakt';
//days
$lang['Monday']                  = 'Mandag';
$lang['Tuesday']                 = 'Tirsdag';
$lang['Wednesday']               = 'Onsdag';
$lang['Thursday']                = 'Torsdag';
$lang['Friday']                  = 'Fredag ';
$lang['Saturday']                = 'Lørdag';
$lang['Sunday']                  = 'Søndag';
//months
$lang['January']                 = 'Jan';
$lang['Febuary']                 = 'Feb';
$lang['March']                   = 'Marts';
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
$lang['Feelslike']               = 'Føles';
$lang['Humidity']                = 'Fughtighed';
$lang['Dewpoint']                = 'Dugpunkt';
$lang['Trend']                   = 'trend ';
$lang['Heatindex']               = 'Hedeindeks';
$lang['Windchill']               = 'Kuldeindeks ';
$lang['Tempfactors']             = 'Temp Faktorer';
$lang['Nocautions']              = 'Ingen varsler';
$lang['Wetbulb']                 = 'Vådtemperatur';
$lang['dry']                     = '& tørt';
$lang['verydry']                 = '& meget tørt';
//new feature temperature feels
$lang['FreezingCold']            = 'Frysende';
$lang['FeelingVeryCold']         = 'Meget koldt';
$lang['FeelingCold']             = 'Koldt';
$lang['FeelingCool']             = 'Koldt';
$lang['FeelingComfortable']      = 'Behageligt ';
$lang['FeelingWarm']             = 'Varm';
$lang['FeelingHot']              = 'Varm';
$lang['FeelingUncomfortable']    = 'Ikke behageligt';
$lang['FeelingVeryHot']          = 'Meget varm';
$lang['FeelingExtremelyHot']     = 'Ekstrem varm';
//wind
$lang['Windspeed']               = 'Vindhastighed';
$lang['Gust']                    = 'Vindstød';
$lang['Direction']               = 'Retning';
$lang['Gusting']                 = 'Vindstød på';
$lang['Blowing']                 = 'Blæser på';
$lang['Wind']                    = 'Vind';
$lang['Wind Run']                = 'Løbebane';
$lang['AvgSpeedToday']			 = 'Gns hastighed i dag';
$lang['10 minutes']				= '10 min';
$lang['Avg Wind']			    = 'Gennemsnit';
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                    = 'Stille';
$lang['Lightair']                = 'Næsten stille';
$lang['Lightbreeze']             = 'Svag vind';
$lang['Gentelbreeze']            = 'Let vind';
$lang['Moderatebreeze']          = 'Jævn vind';
$lang['Freshbreeze']             = 'Frisk vind';
$lang['Strongbreeze']            = 'Hård vind';
$lang['Neargale']                = 'Stiv kuling';
$lang['Galeforce']               = 'Hård kuling';
$lang['Stronggale']              = 'Stormende kuling';
$lang['Storm']                   = 'Storm';
$lang['Violentstorm']            = 'Stærk storm';
$lang['Hurricane']               = 'Orkan';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']          = 'Stille forhold';
$lang['LightBreezeattimes']      = 'Svag vind til tider';
$lang['MildBreezeattimes']       = 'Let vind til tider ';
$lang['ModerateBreezeattimes']   = 'Jævn vind til tider';
$lang['FreshBreezeattimes']      = 'Frisk vind til tider';
$lang['StrongBreezeattimes']     = 'Hård vind til tider';
$lang['NearGaleattimes']         = 'Stiv kuling til tider';
$lang['GaleForceattimes']        = 'Hård kuling til tider';
$lang['StrongGaleattimes']       = 'Stormende kuling til tider';
$lang['StormConditions']         = 'Stormende forhold';
$lang['ViolentStormConditions']  = 'Stærkt stormende forhold';
$lang['HurricaneConditions']     = 'Orkan';
$lang['Avg']                     = 'Gns.';
$lang['Avg-Dir']                 = 'Gns';//used for compass

//wind direction compass
$lang['Northdir']                = 'Stik <span>Nord<br></span>';
$lang['NNEdir']                  = 'Nord Nord <br><span>Øst</span>';
$lang['NEdir']                   = 'Nord <span> Øst<br></span>';
$lang['ENEdir']                  = 'Øst Nord<br><span>Øst</span>';
$lang['Eastdir']                 = "Stik <span> Øst<br></span>";
$lang['ESEdir']                  = 'Øst Syd<br><span>Øst</span>';
$lang['SEdir']                   = 'Syd <span> Øst</span>';
$lang['SSEdir']                  = 'Syd Syd<br><span>Øst</span>';
$lang['Southdir']                = 'Stik <span> Syd</span>';
$lang['SSWdir']                  = 'Syd Syd<br><span>Vest</span>';
$lang['SWdir']                   = 'Syd <span> Vest</span>';
$lang['WSWdir']                  = 'Vest Syd<br><span>Vest</span>';
$lang['Westdir']                 = 'Stik <span> Vest</span>';
$lang['WNWdir']                  = 'Vest Nord<br><span>Vest</span>';
$lang['NWdir']                   = 'Nord <span> Vest</span>';
$lang['NNWdir']                  = 'Nord Nord<br><span>Vest</span>';
//wind direction avg
$lang['North']                   = 'Nord';
$lang['NNE']                     = 'NNØ';
$lang['NE']                      = 'NØ';
$lang['ENE']                     = 'ØNØ';
$lang['East']                    = 'Øst';
$lang['ESE']                     = 'ØSØ';
$lang['SE']                      = 'SØ';
$lang['SSE']                     = 'SSØ';
$lang['South']                   = 'Syd';
$lang['SSW']                     = 'SSV';
$lang['SW']                      = 'SV';
$lang['WSW']                     = 'VSV';
$lang['West']                    = 'Vest';
$lang['WNW']                     = 'VNV';
$lang['NW']                      = 'NV';
$lang['NNW']                     = 'NNV';
// extra wind direction average top module
$lang['NEdirs']                   = 'Nord Øst';
$lang['SEdirs']                   = 'Syd Øst';
$lang['SWdirs']                   = 'Syd Vest';
$lang['NWdirs']                   = 'Nord Vest';
//rain
$lang['raintoday']               = 'Regn i dag';
$lang['Rate']                    = 'Regn Rate';
$lang['Rainfall']                = 'Regn';
$lang['Precip']                  = 'nedbør'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                    = 'Regn';
$lang['Heavyrain']               = 'Kraftig regn';
$lang['Flooding']                = 'Mulighed for oversvømmelse';
$lang['Rainbow']                 = 'Regnbue';
$lang['Windy']                   = 'Blæsende';
$lang['Last Hour']				 = 'Sidste time';
$lang['Last-Twenty-Four-Hour']   = 'Sidste 24t';
$lang['Last-Ten-Minutes']  		 = 'Sidste 10 min';
$lang['Snow Accumulation']		 = 'Sne akkumulering';
$lang['Rain Accumulation']		 = 'Regn total';
$lang['Thunderstorm']			 = 'Torden';
$lang['Accumulation']			 = 'Akkumulering';
//sun -moon-daylight-darkness
$lang['Sun']                     = 'Sol';
$lang['Moon']                    = 'Måne';
$lang['Sunrise']                 = 'Sol opgang';
$lang['Sunset']                  = 'Sol nedgang';
$lang['Moonrise']                = 'Måne op';
$lang['Moonset']                 = 'Måne ned';
$lang['Night']                   = 'Nat';
$lang['Day']                     = 'Dag';
$lang['Nextnewmoon']             = 'Næste nymåne';
$lang['Nextfullmoon']            = 'Næste fuldmåne';
$lang['Luminance']               = 'Luminans';
$lang['Moonphase']               = 'Månefase';
$lang['Estimated']               = 'Estimeret';
$lang['Daylight']                = 'Dagslys';
$lang['Daylight1']               = '&nbsp;&nbsp;Dagslys';
$lang['Darkness']                = 'Mørke';
$lang['Darkness1']               = '&nbsp;&nbsp;Mørke';
$lang['Daysold']                 = 'Dage gammel';
$lang['Belowhorizon']            = 'under<br>horisonten';
$lang['Mintill']                 = ' min til';
$lang['Till']                    = 'Til ';
$lang['Minago']                  = ' min siden';
$lang['Hrs']                     = ' tim';
$lang['Min']                     = ' min';
$lang['TotalDarkness']           = 'Total mørke';
$lang['TotalDaylight']           = 'Total dagslys';
$lang['First Light']			 = 'Første lys';
$lang['Last Light']				 = 'Sidste lys';
$lang['Below']                   = 'er under horisonten';
$lang['Newmoon']                 = 'Nymåne';
$lang['Waxingcrescent']          = 'Tiltagende halvmåne';
$lang['Firstquarter']            = 'Første kvartal';
$lang['Waxinggibbous']           = 'Tiltagende måne';
$lang['Fullmoon']                = 'Fuldmåne';
$lang['Waninggibbous']           = 'Aftagende måne';
$lang['Lastquarter']             = 'Sidste kvartal';
$lang['Waningcrescent']          = 'Aftagende halvmåne';
$lang['Set']        			 = 'Ned';
$lang['Rise']        		     = 'Op';
$lang['Daylight Left'] 			 = '&nbsp;&nbsp;&nbsp;Dagslys tilbage';
$lang['Darkness Left'] 			 = '&nbsp;&nbsp;&nbsp;Mørke tilbage';

//trends
$lang['Falling']                 = 'Falder';
$lang['Rising']                  = 'Stiger';
$lang['Steady']                  = 'Stabil';
$lang['Rapidly']                 = 'Hurtigt';
$lang['Temp']                    = 'Temp';
//Solar-UV
//uv
$lang['Nocaution']               = 'Ingen <color>beskyttelse</color> påkrævet';
$lang['Wearsunglasses']          = 'Brug <color>solbriller</color> på en klar dag';
$lang['Stayinshade']             = 'Bliv i skyggen omkring middag når <color>solen</color> er stærkest';
$lang['Reducetime']              = 'Reducer tiden i <color>solen</color> mellem 10 og 16 ';
$lang['Minimize']                = 'Minimer tiden i <color>solen</color> mellem 10 og 16 ';
$lang['Trytoavoid']              = 'Prøv at undgå <color>solen</color> mellem 10 og 16 ';

//solar
$lang['Poor']                    = 'Ingen<color> <br>Stråling</color>';
$lang['Low']                     = 'Lav <br><color>Stråling</color>';
$lang['Moderate']                = 'Moderat <br><color>Stråling</color>';
$lang['Good']                    = 'God <br><color>Stråling</color>';
$lang['Solarradiation']          = 'Solstråling';
//current sky
$lang['Currentsky']              = 'Aktuelle forhold';
$lang['Currently']               = 'Aktuelt';
$lang['Cloudcover']              = 'Skydække';
//Notifications
$lang['Nocurrentalert']          = 'Ingen aktuelle vejr <span>varsler</span>';
$lang['Windalert']               = 'Vindhastighed på';
$lang['Tempalert']               = 'Høj temperatur';
$lang['Heatindexalert']          = 'Hede Indeks varsel';
$lang['Windchillalert']          = 'Kuldeindeks varsel';
$lang['Dewpointalert']           = 'Ubehaglig luftfugtighed';
$lang['Dewpointcolderalert']     = 'Dugpunkt varsel';
$lang['Feelslikecolderalert']    = 'Føles koldere';
$lang['Feelslikewarmeralert']    = 'Føles varmere';
$lang['Rainratealert']           = 'per/t<span> Kraftig regn ';
//Earthquake Notifications
$lang['Regional']                = 'Regionale Jordskælv';
$lang['Significant']             = 'Signifikante Jordskælv';
$lang['Nosignificant']           = 'Ingen Signifikante Jordskælv';
//Main page
$lang['Barometer']               = 'Barometer';
$lang['UVSOLAR']                 = 'UVI-Solar';
$lang['Earthquake']              = 'Jordskælv';
$lang['Daynight']                = 'Dagslys & Natte Info';
$lang['SunPosition']             = 'Sol Position';
$lang['Location']                = 'Placering';
$lang['Hardware']                = 'Hardware';
$lang['Rainfalltoday']           = 'Regn i dag';
$lang['Windspeed']               = 'Vindhastighed';
$lang['Winddirection']           = 'Vind retning';
$lang['Measured']                = 'Målt i dag';
$lang['Forecast']                = 'Vejrudsigt';
$lang['Forecastahead']           = 'Prognose fremad';
$lang['Forecastsummary']         = 'Prognoseoversigt';
$lang['WindGust']                = 'Hastighed | Stød';
$lang['Hourlyforecast']          = 'Timebaseret prognose ';
$lang['Significantearthquake']   = 'Signifikante Jordskælv';
$lang['Regionalearthquake']      = 'Regionale Jordskælv';
$lang['Average']                 = 'Gns';
$lang['Notifications']           = 'Vejr <span>Varsel</span>';
$lang['Indoor']                  = 'Indendørs';
$lang['Today']                   = 'I dag';
$lang['Tonight']                 = 'I nat';
$lang['Tomorrow']                = 'I morgen';
$lang['Tomorrownight']           = 'I morgen nat';
$lang['Updated']                 = 'Opdateret';
$lang['Meteor']                  = 'Meteorregn Info';
$lang['Firerisk']                = 'Brandvarsel';
$lang['Localtime']               = 'Lokal <span2>Tid</span2>';
$lang['Nometeor']                = 'Ingen Meteorregn';
$lang['LiveWebCam']              = 'Live Web Cam';
$lang['Online']                  = 'Online';
$lang['Offline']                 = 'Offline';
$lang['Weatherstation']          = 'Vejrstation';
$lang['Cloudbase']               = 'Skydække';
$lang['uvalert']                 = 'Advarsel Højt UVINDEX';
$lang['Max']                     = 'Max';
$lang['Min']                     = 'Min';
$lang['Almanac'] 				 = 'Almanak';
$lang['Weather Data Provided By']='Vejr data leveret af';
$lang['Airport']='Lufthavns Metar';
$lang['Weather Station'] ='Vejrstation';
$lang['Information'] ='Information';
$lang['Operational Since'] ='Operationel Siden';
$lang['Battery'] ='Batteri';
$lang['Installed']='Installeret';
$lang['Interface Uptime']='Interface oppetid';
$lang['Meteobridge Interface']='Meteobridge Interface';
//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Mikro Jordskælv';
$lang['MinorE']                  = 'Mindre Jordskælv';
$lang['LightE']                  = 'Let Jordskælv';
$lang['ModerateE']               = 'Moderat Jordskælv';
$lang['StrongE']                 = 'Kraftigt Jordskælv';
$lang['MajorE']                  = 'Meget kraftigt Jordskælv';
$lang['GreatE']                  = 'Stort Jordskælv';
$lang['RegionalE']               = 'Regionalt';
$lang['Conditions']              = 'Forhold';
$lang['Cloudbase Height']        = 'Skydække højde';
$lang['Station']                 = 'Station';
$lang['Detailed Forecast']       = 'Detaljeret Prognose';
$lang['Summary Outlook']         = 'Opsummering';
//Air Quality
$lang['Hazordous']               = 'Farlige forhold';
$lang['VeryUnhealthy']           = 'Meget usundt';
$lang['Unhealthy']               = 'Usund luftkvalitet';
$lang['UnhealthyFS']             = 'Usundt for nogen';
$lang['Moderate']                = 'Moderat Luftkvalitet ';
$lang['Good']                    = 'God luftkvalitet ';
$lang['Air Quality']			 = 'Luftkvalitet';
#notification additions
$lang['notifyTitle']             = 'Beskeder';
$lang['notifyAlert']             = "Advarsel";
$lang['notifyLowBatteryAlert']   = "Advarsel: Lavt Batteri";
$lang['notifyConsoleLowBattery'] = "Konsolens batteri er lavt";
$lang['notifyStationLowBattery'] = "Stations batteri er lavt";
$lang['GoodBattery']             = 'God';
$lang['ReplaceBattery']          = 'Udskift';
$lang['ConditionBattery']		 = 'Condition';
$lang['notifyUVIndex']           = "UV-Indeks varsel";
$lang['notifyUVExposure']        = "Reducer sol eksponering";
$lang['notifyHeatExaustion']     = "Solstik";
$lang['notifyExtremeWind']       = "Varsel om ekstreme vinde";
$lang['notifyGustUpTo']          = "Vindstød op til";
$lang['notifySeekShelter']       = "Søg ly <notifyred><b>øjeblikkelig</b></notifyred>";
$lang['notifyHighWindWarning']   = "Varsel om kraftig vind";
$lang['notifySustainedAvg']      = "Opnået gns";
$lang['notifyWindAdvisory']      = "Vind information";
$lang['notifyFreezing']          = "Under frysepunktet";
#weatherflow lightning
$lang['Last Three Hours']        = "Sidste 3 timer";
$lang['Distance']          		 = "Distance";
$lang['Detected']          		 = "Sidst registreret";
$lang['Strikes']           		 = "&nbsp;Lyn";
$lang['Strikes Recorded']        = "Lyn registreret";
$lang['Total']        			 = "Total";
$lang['Last Strike Detected']   = "Sidste lyn registreret ";
$lang['Lightning Today']        = "&nbsp;&nbsp;I dag";//today
$lang['Quiet']        			= "Stille";
$lang['Active']        			= "Aktiv";
$lang['Ago']        			= "Siden";
$lang['Now']        			= "Nu";
#metar conditions
$lang['Snow-Metar']					= "Sne";
$lang['Light Rain-Metar']				= "Let regn";
$lang['Heavy Rain-Metar']				= "Kraftig regn";
$lang['Moderate Rain-Metar']			= "Moderat regn";
$lang['Light Snow-Metar']				= "Let sne";
$lang['Moderate Snow-Metar']			= "Moderat sne";
$lang['Snow Grains-Metar']			= "Snefug";
$lang['Sleet-Metar']					= "Slud";
$lang['Foggy-Metar']					= "Tåget";
$lang['Misty-Metar']					= "Diset";
$lang['Hail and Rain-Metar']			= "Hagl og Regn";
$lang['Ice Crystals-Metar']			= "Is krystaller";
$lang['Ice Pellets-Metar']			= "Is piller";
$lang['Thunderstorm-Metar']			= "Torden";
$lang['Sand Storm-Metar']				= "Sand Storm";
$lang['Volcanic Ash-Metar']			= "Vulkansk aske";
$lang['Tornado-Metar']			    = "Orkan";
$lang['Water Sprout-Metar']			= "Vandsprøjt";
$lang['Clear-Metar']					= "Klart";
$lang['Mostly Clear-Metar']			= "Overvejende klart";
$lang['Partly Cloudy-Metar']			= "Delvis skyet";
$lang['Mostly Scattered-Metar']		= "Mest skyet";
$lang['Mostly Cloudy-Metar']			= "Mest skyet";
$lang['Overcast-Metar']			    = "Overskyet";
$lang['Clouds-Metar']			  		= "Skyer";
$lang['Conditions-Metar']			    = "Forhold";
$lang['Showers-Metar']			    = "Byger";
$lang['Rain-Metar']					= "Regn";
$lang['Lowest']						='Lavest';
$lang['Highest']					='Højst';
$lang['Yesterday']				    ='I går';
//time ago 
$lang['Years']='År';
$lang['Year']='År';
$lang['Months']='Måneder';
$lang['Month']='Måned';
$lang['Day']='Dag';
$lang['Days']='Dage';
$lang['Hours']='Timer';
$lang['Hour']='Time';
$lang['Minute']='Minut';
$lang['Minutes']='Minutter';
$lang['Last Rainfall']='Sidst regnet';
$lang['Particle Info']          = 'Partikel Info';
$lang['Guide']                  = 'Guide';
$lang['GOOD']                   = 'GOD';
$lang['MODERATE']               = 'MODERAT';
$lang['Unhealthy for Sensitive Groups'] = 'Usundt for sensitive grupper';
$lang['Unhealthy'] = 'Usundt';
$lang['(Precautions Required)'] = '(Forholdsregler påkrævet)';
$lang['Very Unhealthy'] ='Meget usundt';
$lang['(Critical Conditions)'] ='(Kritiske forhold)';
$lang['Hazardous'] = 'Farligt';
$lang['(Life Threatening)'] = '(Livstruende)';
$lang['from'] = 'fra';
$lang['*Regional'] = '*Regional';
$lang['*Warning Nearby'] = '*Advarsel i nærheden';
$lang['Recent Earthquake'] = 'Seneste jordskælv';
$lang['Regional Recent Earthquakes'] = 'Seneste regionale jordskælv';

?>
