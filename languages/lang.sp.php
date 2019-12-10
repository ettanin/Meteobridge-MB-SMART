<?php
/* 
-----------------
Language Translation File for Weather34 MB SMART 
Language: Spanish
Translated by: Your Name Here
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
setlocale(LC_TIME, "es_ES.UTF-8");
$lang                           = array();
// Menu
$lang['Settings']               = 'Ajustes';
$lang['Layout']                 = 'Cambiar de tema';
$lang['Lighttheme']             = 'Tema Claro';
$lang['Darktheme']              = 'Tema oscuro';
$lang['Nonmetric']              = 'US (F) ';
$lang['Metric']                 = 'Metrico (C)';
$lang['UKmetric']               = 'UK (MPH - Metrico) ';
$lang['Scandinavia']            = 'Scandinavia(M/S)';
$lang['Menu Options']            = 'Opciones de Menú';
$lang['Worldwideearthquakes']   = 'Terremotos en el mundo';
$lang['Toggle']                 = 'Pantalla entera ';
$lang['Contactinfo']            = 'Estación & Informacion de contacto';
$lang['Templateinfo']           = 'Colboradores';
$lang['language']               = 'Seleccione el idioma';
$lang['Weatherstationinfo']     = 'Información de la estación';
$lang['Webdesigninfo']          = 'Información de la plantilla';
$lang['Contact']                = 'Contact';
//days
$lang['Monday']                 = 'Lunes';
$lang['Tuesday']                = 'Martes';
$lang['Wednesday']              = 'Miércoles';
$lang['Thursday']               = 'Jueves';
$lang['Friday']                 = 'Viernes';
$lang['Saturday']               = 'Sábado';
$lang['Sunday']                 = 'Domingo';
//months
$lang['January']                = 'Enero';
$lang['Febuary']                = 'Feb';
$lang['March']                  = 'Mar';
$lang['April']                  = 'Abr';
$lang['May']                    = 'Mayo';
$lang['June']                   = 'Jun';
$lang['July']                   = 'Jul';
$lang['August']                 = 'Ago';
$lang['September']              = 'Sep';
$lang['October']                = 'Oct';
$lang['November']               = 'Nov';
$lang['December']               = 'Diciem';
//temperature
$lang['Temperature']            = 'Temperatura';
$lang['Feelslike']              = 'Sensacion';
$lang['Humidity']               = 'Humedad';
$lang['Dewpoint']               = 'Punto de rocío';
$lang['Trend']                  = 'Tend ';
$lang['Heatindex']              = 'Índice Calor';
$lang['Windchill']              = 'Sensacion ';
$lang['Tempfactors']            = 'Factor de temp';
$lang['Nocautions']             = 'Sin precauciones';
$lang['Wetbulb']                = 'T. condensación';
$lang['dry']                    = '& Seco';
$lang['verydry']                = '& Muy seco';
//new feature temperature feels
$lang['FreezingCold']           = 'Helada';
$lang['FeelingVeryCold']        = 'Mucho frío';
$lang['FeelingCold']            = 'Frio';
$lang['FeelingCool']            = 'Sensacion de frio';
$lang['FeelingComfortable']     = 'Agradable ';
$lang['FeelingWarm']            = 'Calor';
$lang['FeelingHot']             = 'Sensacion de Calor';
$lang['FeelingUncomfortable']   = 'Sensacion incomoda';
$lang['FeelingVeryHot']         = 'Calor elevado';
$lang['FeelingExtremelyHot']    = 'Calor extremo';
//wind
$lang['Windspeed']              = 'Velocidad';
$lang['Gust']                   = '&nbsp;&nbsp;&nbsp;Ráfaga';
$lang['Direction']              = 'Direccion';
$lang['Gusting']                = 'Racheado a';
$lang['Blowing']                = 'Soplando a';
$lang['Wind']                   = 'Viento';
$lang['Wind Run']               = 'Viento Run';
$lang['AvgSpeedToday']			 ='Promedio Hoy';
$lang['10 minutes']				= '10 min';
$lang['Avg Wind']			    = 'Promedio';

// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                   = 'Calma';
$lang['Lightair']               = 'Viento ligero';
$lang['Lightbreeze']            = 'Brisa ligera ';
$lang['Gentelbreeze']           = 'Brisa suave';
$lang['Moderatebreeze']         = 'Brisa moderada';
$lang['Freshbreeze']            = 'Brisa fresca';
$lang['Strongbreeze']           = 'Brisa fuerte';
$lang['Neargale']               = 'Vendaval';
$lang['Galeforce']              = 'Vendaval';
$lang['Stronggale']             = 'Fuerte vendaval';
$lang['Storm']                  = 'Tormenta';
$lang['Violentstorm']           = 'Tormenta violenta';
$lang['Hurricane']              = 'Huracán';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']         = 'Calma';
$lang['LightBreezeattimes']     = 'Viento ligero ';
$lang['MildBreezeattimes']      = 'Brisa suave ';
$lang['ModerateBreezeattimes']  = 'Brisa moderada';
$lang['FreshBreezeattimes']     = 'Brisa fresca';
$lang['StrongBreezeattimes']    = 'Brisa fuerte';
$lang['NearGaleattimes']        = 'Frescachón';
$lang['GaleForceattimes']       = 'Temporal';
$lang['StrongGaleattimes']      = 'Temporal fuerte';
$lang['StormConditions']        = 'Temporal duro';
$lang['ViolentStormConditions'] = 'Temporal muy duro';
$lang['HurricaneConditions']    = 'Temporal huracanado';
$lang['Avg']                    = 'Medio';
$lang['Avg-Dir']                = 'Promedio';//used for compass
//wind direction compass
$lang['Northdir']               = 'Del <span>Norte<br></span>';
$lang['NNEdir']                 = 'Norte Norte <br><span>Este</span>';
$lang['NEdir']                  = 'Norte <span> Este<br></span>';
$lang['ENEdir']                 = 'Este Norte<br><span>Este</span>';
$lang['Eastdir']                = "Del <span> Este<br></span>";
$lang['ESEdir']                 = 'Este Sur<br><span>Este</span>';
$lang['SEdir']                  = 'Sur <span> Este</span>';
$lang['SSEdir']                 = 'Sur Sur<br><span>Este</span>';
$lang['Southdir']               = 'Del <span> Sur</span>';
$lang['SSWdir']                 = 'Sur Sur<br><span>Oeste</span>';
$lang['SWdir']                  = 'Sur <span> Oeste</span>';
$lang['WSWdir']                 = 'Del <span> Oeste</span>';
$lang['Westdir']                = 'Oeste Norte<br><span>Oeste</span>';
$lang['WNWdir']                 = 'Oeste Norte<br><span>Oeste</span>';
$lang['NWdir']                  = 'Norte <span> Oeste</span>';
$lang['NNWdir']                 = 'Norte Norte<br><span>Oeste</span>';
//wind direction avg
$lang['North']                  = 'Norte';
$lang['NNE']                    = 'NNE';
$lang['NE']                     = 'NE';
$lang['ENE']                    = 'ENE';
$lang['East']                   = 'Este ';
$lang['ESE']                    = 'ESE';
$lang['SE']                     = 'SE';
$lang['SSE']                    = 'SSE';
$lang['South']                  = 'Sur';
$lang['SSW']                    = 'SSO';
$lang['SW']                     = 'SO';
$lang['WSW']                    = 'OSO';
$lang['West']                   = 'Oeste';
$lang['WNW']                    = 'ONO';
$lang['NW']                     = 'NO';
$lang['NNW']                    = 'NNO';
// extra wind direction average top module
$lang['NEdirs']                   = 'Norte Este';
$lang['SEdirs']                   = 'Sur Este';
$lang['SWdirs']                   = 'Sur Oeste';
$lang['NWdirs']                   = 'Norte Oeste';
//rain
$lang['raintoday']              = 'Lluvia hoy';
$lang['Rate']                   = 'Velocidad';
$lang['Rainfall']               = 'Lluvia';
$lang['Precip']                 = 'precip'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                   = 'Luvia';
$lang['Heavyrain']              = 'Lluvia intensa';
$lang['Flooding']               = 'Posible inundación';
$lang['Rainbow']                = 'Arcoiris';
$lang['Windy']                  = 'Ventoso';
$lang['Last Hour']				= 'Ultima Hora';
$lang['Last-Twenty-Four-Hour']  = 'Ultima 24 Horas';
$lang['Last-Ten-Minutes']  		= 'Ultima 10 min';
$lang['Snow Accumulation']		 = 'Acumulación Nieve';
$lang['Rain Accumulation']		 = 'Acumulación Luvia';
$lang['Accumulation']		 	 = 'Acumulación';
$lang['Thunderstorm']			 = 'Trueno';
//sun -moon-daylight-darkness
$lang['Sun']                    = 'Sol';
$lang['Moon']                   = 'Luna';
$lang['Sunrise']                = 'Amanecer';
$lang['Sunset']                 = 'Puesta de sol';
$lang['Moonrise']               = 'Salida de luna ';
$lang['Moonset']                = 'Puesta de luna';
$lang['Night']                  = 'Noche ';
$lang['Day']                    = 'Dia';
$lang['Nextnewmoon']            = 'Luna nueva';
$lang['Nextfullmoon']           = 'Luna llena';
$lang['Luminance']              = 'Iluminacion';
$lang['Moonphase']              = 'Fase lunar';
$lang['Estimated']              = 'Estimada';
$lang['Daylight']               = 'Luz de dia';
$lang['Daylight1']              = 'Luz de dia';
$lang['Darkness']               = 'Oscuridad';
$lang['Darkness1']              = 'Oscuridad';
$lang['Daysold']                = 'días de antigüedad';
$lang['Belowhorizon']           = 'debajo del<br>horizonte';
$lang['Mintill']                = '<br>Mins hasta';
$lang['Till']                   = 'Para ';
$lang['Minago']                 = 'Hace mins';
$lang['Hrs']                    = ' hrs';
$lang['Min']                    = ' min';
$lang['TotalDarkness']          = 'Oscuridad total';
$lang['TotalDaylight']          = 'Luz del día total';
$lang['First Light']			= 'Primera Luz';
$lang['Last Light']				= 'Última Luz';
$lang['Below']                  = 'Está por debajo del horizonte';
$lang['Newmoon']                = 'Luna nueva';
$lang['Waxingcrescent']         = 'Luna creciente';
$lang['Firstquarter']           = 'Cuarto creciente';
$lang['Waxinggibbous']          = 'Luna menguante';
$lang['Fullmoon']               = 'Luna llena';
$lang['Waninggibbous']          = 'Gibbosa menguante';
$lang['Lastquarter']            = 'Cuarto menguante';
$lang['Waningcrescent']         = 'Creciente menguante';
$lang['Set']        			= 'Conjunto';
$lang['Rise']        		    = 'Aumento';
$lang['Daylight Left'] 			= 'Al Puesta de sol';
$lang['Darkness Left'] 			= '&nbsp;&nbsp;&nbsp;Al Amanecer';
//trends
$lang['Falling']                = 'Bajando';
$lang['Rising']                 = 'Subiendo';
$lang['Steady']                 = 'Estable';
$lang['Rapidly']                = 'Rapidamente';
$lang['Temp']                   = 'Temp';
//Solar-UV
//uv
$lang['Nocaution']              = 'Sin <color>precaucion</color> requerida';
$lang['Wearsunglasses']         = 'Use <color>gafas de sol</color> en días soleados';
$lang['Stayinshade']            = 'Permanecer en la sombra cerca del medio día cuando el <color>sol</color> es fuerte';
$lang['Reducetime']             = 'Reducir el tiempo en el <color>s0l</color> entre 10am-4pm ';
$lang['Minimize']               = 'Reducir al mínimo <color>sol</color> exposicion entre 10am-4pm ';
$lang['Trytoavoid']             = 'Tratar de evitar el <color>sol</color> exposicion entre 10am-4pm ';
//solar
$lang['Poor']                   = 'Radiación<color> <br>Pobre</color>';
$lang['Low']                    = 'Radiación<br><color>Baja</color>';
$lang['Moderate']               = 'Radiación<br><color>Moderada</color>';
$lang['Good']                   = 'Radiación<br><color>Fuerte</color>';
$lang['Solarradiation']         = 'Radiación Solar';
//current sky
$lang['Currentsky']             = 'Con. actuales';
$lang['Currently']              = 'Actualmente';
$lang['Cloudcover']             = 'Cubierto de nubes';
//Notifications
$lang['Nocurrentalert']         = 'No hay alertas meteorológicas';
$lang['Windalert']              = 'Ráfagas de viento en';
$lang['Tempalert']              = 'Alta temperatura';
$lang['Heatindexalert']         = 'Precaución de calor ';
$lang['Windchillalert']         = 'Precaución sensación térmica';
$lang['Dewpointalert']          = 'Humedad incómoda';
$lang['Dewpointcolderalert']    = 'Humedad incómoda';
$lang['Feelslikecolderalert']   = 'Sensacion de Frio';
$lang['Feelslikewarmeralert']   = 'Sensacion de Calor';
$lang['Rainratealert']          = 'por/hr<span> Lluvia ';
//Earthquake Notifications
$lang['Regional']               = 'Terremoto regional';
$lang['Significant']            = 'Terremotos importantes';
$lang['Nosignificant']          = 'Terremotos no significativos';
//Main page
$lang['Barometer']              = 'Barometro';
$lang['UVSOLAR']                = 'UV | Datos Sol';
$lang['Earthquake']             = ' Terratremols';
$lang['Daynight']               = 'Dia & Noche Info';
$lang['SunPosition']            = 'Sun Position';
$lang['Location']               = 'Ubicación';
$lang['Hardware']               = 'Hardware';
$lang['Rainfalltoday']          = 'Lluvia hoy';
//$lang['Windspeed']              = ' Viento';
$lang['Winddirection']          = 'Direccion del Viento';
$lang['Measured']               = 'Medido hoy';
$lang['Forecast']               = 'Prevision';
$lang['Forecastahead']          = 'Pronostico proximo';
$lang['Forecastsummary']        = 'Resumen prevision';
$lang['WindGust']               = 'Vel. Viento | Rachas';
$lang['Hourlyforecast']         = 'Prevision horaria';
$lang['Significantearthquake']  = 'Terremotos importantes';
$lang['Regionalearthquake']     = 'Terremoto regional';
$lang['Average']                = 'Avisos';
$lang['Notifications']          = 'Notificacion de Alerta';
$lang['Indoor']                 = 'Interior';
$lang['Today']                  = 'Hoy';
$lang['Tonight']                = 'Noche';
$lang['Tomorrow']               = 'Mañana';
$lang['Tomorrownight']          = 'Mañana noche';
$lang['Updated']                = 'Actualizado';
$lang['Meteor']                 = 'Meteorito Información';
$lang['Firerisk']               = 'Riesgo de incendio';
$lang['Localtime']              = 'Tiempo local';
$lang['Nometeor']               = 'Sin meteoritos';
$lang['LiveWebCam']             = 'Webcam en vivo';
$lang['Online']                 = 'En linea';
$lang['Offline']                = 'fuera de linea';
$lang['Weatherstation']         = 'Estacion';
$lang['Cloudbase']              = 'Base Nubes';
$lang['uvalert']                = 'Precaucion UVINDEX';
$lang['Max']                    = 'Max';
$lang['Min']                    = 'Min';
$lang['Almanac'] 				= 'Almanaque';
$lang['Weather Data Provided By']='Weather Data Provided By';
$lang['Airport']='Aeropuerto Metar';
$lang['Weather Station'] ='Estación Meteorológica';
$lang['Information'] ='Información';
$lang['Operational Since'] ='Operacional Desde';
$lang['Battery'] ='Batería';
$lang['Installed']='Instalado';
$lang['Interface Uptime']='Tiempo de actividad';
$lang['Meteobridge Interface']='Meteobridge Interfaz';
$lang['GoodBattery']             = 'Bueno';
$lang['ReplaceBattery']          = 'Cambio';
$lang['ConditionBattery']		 = 'Condición';

//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Micro Earthquake';
$lang['MinorE']                  = 'pequeño Terremoto';
$lang['LightE']                  = 'Light Earthquake';
$lang['ModerateE']               = 'Terremoto moderado';
$lang['StrongE']                 = 'Fuerte terremoto';
$lang['MajorE']                  = 'Major Earthquake';
$lang['GreatE']                  = 'Great Earthquake';
$lang['RegionalE']              = 'Regional';
$lang['Conditions']             = 'Condiciones';
$lang['Cloudbase Height']       = 'Base de nubes';
$lang['Station']                = 'Estacion';
$lang['Detailed Forecast']      = 'Prevision detallada';
$lang['Summary Outlook']        = 'Resumen';
//Air Quality
$lang['Hazordous']              = 'Condiciones perligrosas';
$lang['VeryUnhealthy']          = 'Muy insalubre ';
$lang['Unhealthy']              = 'Aire Insalubre';
$lang['UnhealthyFS']            = 'Insalubre';
$lang['Moderate']               = 'Moderada calidad del Aire ';
$lang['Good']                   = 'Buena calitat del Aire ';
$lang['Air Quality']			= 'Calidad del Aire';
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
$lang['Last Three Hours']        = "Últimas 3 horas";
$lang['Distance']          		 = "Distancia";
$lang['Detected']          		 = "Últimas Detectado";
$lang['Strikes']           		 = "Detectado";
$lang['Strikes Recorded']        = "Rayo Grabado";
$lang['Total']        			 = "Total";
$lang['Last Strike Detected']   = " Últimas Detectado";
$lang['Lightning Today']        = "&nbsp;&nbsp;&nbsp;Hoy";//today
$lang['Quiet']        			= "Tranquil";
$lang['Active']        			= "Active";
$lang['Ago']        			= "Hace";
$lang['Now']        			= "Ahora";
#metar conditions
$lang['Snow-Metar']					= "Nieve";
$lang['Light Rain-Metar']				= "Lluvia Ligera";
$lang['Heavy Rain-Metar']				= "Lluvia Pesada";
$lang['Moderate Rain-Metar']			= "Lluvia Moderada";
$lang['Light Snow-Metar']				= "Nieve Ligera";
$lang['Moderate Snow-Metar']			= "Nieve Moderada";
$lang['Snow Grains-Metar']			= "Granos de Nieve";
$lang['Sleet-Metar']					= "Aguanieve";
$lang['Foggy-Metar']					= "Brumoso";
$lang['Misty-Metar']					= "Brumoso";
$lang['Hail and Rain-Metar']			= "Granizo y Lluvia";
$lang['Ice Crystals-Metar']			= "Cristales de Hielo";
$lang['Ice Pellets-Metar']			= "Cristales de Hielo";
$lang['Thunderstorm-Metar']			= "Trueno";
$lang['Sand Storm-Metar']				= "Tormenta de Arena";
$lang['Volcanic Ash-Metar']			= "Ceniza Volcánica";
$lang['Tornado-Metar']			    = "Tornado";
$lang['Water Sprout-Metar']			= "Tornado";
$lang['Clear-Metar']					= "Cielo Limpio";
$lang['Mostly Clear-Metar']			= "Cielo Despejado";
$lang['Partly Cloudy-Metar']			= "Parcialmente Nublado";
$lang['Mostly Scattered-Metar']		= "Parcialmente Nublado";
$lang['Mostly Cloudy-Metar']			= "Mayormente Nublado";
$lang['Overcast-Metar']			    = "Nublado";
$lang['Clouds-Metar']			  		= "Nublado";
$lang['Conditions-Metar']			    = "Condiciones";
$lang['Showers-Metar']			    = "";
$lang['Rain-Metar']						= "Lluvia";
$lang['Lowest']						='&nbsp;&nbsp;Bajo';
$lang['Highest']					='&nbsp;&nbsp;Alto';
$lang['Yesterday']				    ='Ayer';
//time ago 
$lang['Years']='Años';
$lang['Year']='Ano';
$lang['Months']='Meses';
$lang['Month']='Mes';
$lang['Day']='Dia';
$lang['Days']='Dias';
$lang['Hours']='Horas';
$lang['Hour']='Hora';
$lang['Minute']='Minutos';
$lang['Minutes']='Minutos';
$lang['Last Rainfall']='Últimas Lluvia';
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
$lang['*Regional'] = '*Regionales';
$lang['*Warning Nearby'] = '*Warning Nearby';
$lang['Recent Earthquake'] = 'Recent Terremotos';
$lang['Regional Recent Earthquakes'] = 'Terremotos Regionales';
?>