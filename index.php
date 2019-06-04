<?php header('Content-type: text/html; charset=utf-8');error_reporting(0); 

####################################################################################################
# HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2017-2018-2019                    			   #
# CREATED FOR HOMEWEATHERSTATION TEMPLATE at                									   #
#   https://weather34.com/homeweatherstation/index.html                                            #
#  WEATHER STATION TEMPLATE 2017-2018-2019 Meteobridge.     									   #
#  Weatherflow Meteobridge Version  June 2019  									                   #
#   https://github.com/weather34/Weather34-Weatherflow                                             #
####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include_once('livedata.php');include_once('common.php');include_once('settings1.php'); date_default_timezone_set($TZ);?>
 <!DOCTYPE html><html><head>
<!-- Primary Meta Tags -->
<title><?php echo $stationlocation;?> Home Weather Station</title>
<meta name="title" content="<?php echo $stationlocation;?> Home Weather Station">
<meta name="description" content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>">
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="<?php echo $stationlocation;?> Home Weather Station">
<meta property="twitter:description" content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>">
<meta property="twitter:image" content="img/weather34_template-min.png">
<meta content=website property=og:type>
<meta content="7 days" name=revisit-after>
<meta content=web name=distribution><meta content="<?php echo $stationlocation;?>" name=author>
<meta content=INDEX,FOLLOW name=robots><meta name=mobile-web-app-capable content=yes>
<meta name=apple-mobile-web-app-capable content=yes>
<meta name=apple-mobile-web-app-title content=HOME WEATHER STATION>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<link rel=apple-touch-icon sizes=180x180 href=img/apple-touch-icon.png>
<link href=favicon.ico rel="shortcut icon" type=image/x-icon><link href=favicon.ico rel=icon type=image/x-icon>
<link rel="preload" href="css/fonts/clock3-webfont.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="css/fonts/verbatim-regular.woff" as="font" type="font/woff" crossorigin>
<link href="css/weather34dashboard.<?php echo $theme?>.css?version=<?php echo filemtime('css/weather34dashboard.'.$theme.'.css')?>" rel="stylesheet prefetch">
</head>
<!-- Weather34 top moudles begin -->
<div class="maincontainer">
 <main class="grid">  
 <weather34topmodule> <!-- Weather34 Module 1 -->
 <div class="weather34box">
 <div class="weather34title2"><?php echo $info?> &nbsp;<?php echo $position1title ;?></div>
 <div id="position1"></div></div></weather34topmodule> 
  
  <weather34topmodule> <!-- Weather34 Module 2 -->
  <div class="weather34box">  
  <div class="weather34title2"><?php echo $info?>  &nbsp;<?php echo $position2title ;?></div>
  <div id="position2"></div></div></weather34topmodule> 
  
  <weather34topmodule> <!-- Weather34 Module 3 -->
  <div class="weather34box">
  <div class="weather34title2"><?php echo $info?>  &nbsp;<?php echo $position3title ;?></div>
  <div id="position3"></div></div>  
  </weather34topmodule> 
  
 <weather34topmodule> <!-- Weather34 Module 3 -->
  <div class="weather34box">
  <div class="weather34title2"><?php echo $info?>  &nbsp;<?php echo $position4title ;?></div>
  <div id="position4"></div></div>  
  </weather34topmodule> 
  </main>
  
<!-- Weather34 tmain moudles begin -->
  <main class="grid1">
  
  <weather34module> <!-- Weather34 Main Module 1 Temperature-->
  <div class=actualt><?php echo $lang['Temperature']; ?> (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>) </div>  
  <div class=weather34chartlinks> 
 	<a alt="Temperature almanac" title="Temperature Almanac" href=tempalmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;
	<a alt="yearly Temperature " title="Yearly Temperature " href=temperaturechart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Temperature</a>&nbsp;
	<a alt="yearly Dewpoint " title="Yearly Temperature " href=dewpointchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Dewpoint</a>&nbsp;
	<a alt="Temperature today" title="Temperature Today" href=todaytemperaturechart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> <?php echo $lang['Today']; ?> </a></div>
  <div id=temperature></div></weather34module> 
  
  
  <weather34module> <!-- Main Module 2 Forecast-->
  <div class=actualt><?php echo $position6title ;?>  (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>) </div>  
  <div class=weather34chartlinks> 
<?php if ($position6=='forecast3ds.php'){echo'<a alt="Dark Sky Forecast " title="Dark Sky Forecast " href="outlookds.php" data-lity>'. $chartinfo. " Daily Forecast </a>";}?>
<?php if ($position6=='forecast3wu.php' || $position6=='forecast3wularge.php') {echo ' <a alt="weather underground forecast" title="weather underground forecast" href="outlookwu.php" data-lity>'. $chartinfo. " Daily Forecast </a>";}?>
<?php if ($position6=='forecast3ds.php' || ($apikey!= '11111111111111' && ($position6=='forecast3wu.php' || $position6=='forecast3wularge.php'))) {echo '<a alt="Hourly Forecast" title="Hourly Forecast" href="forecastdshour.php" data-lity>&nbsp;'. $chartinfo. " Hourly Forecast</a>";}?></span></div>
 <div id=currentfore></div></weather34module> 
  
  <weather34module> <!-- Weather34 Main Module 3 Current-->
  <div class=actualt><?php echo $lang['Currentsky'];?></div>  
  <div class=weather34chartlinks>
  <a alt="nearby metar station" title="nearby metar station" href="metarnearby.php" data-lity><?php echo $chartinfo?> <?php echo 'Nearby Metar';?> <?php if(filesize('jsondata/metar34.txt')<160){echo "(<ored>Offline</ored>)";}else echo "" ?></a>
  <a href="windyradar.php" title="Windy.com Radar" alt="Windy.com Radar" data-lity><?php echo $chartinfo?> Radar</a>
  <a href="windywind.php" title="Windy.com Wind Map" alt="Windy.com Wind Map" data-lity><?php echo $chartinfo?> Wind Map</a>
  </div>
 <div id=currentsky></div></weather34module> 
  
  <weather34module> <!-- Main Module 4 Wind-->
  <div class=actualt><?php echo $lang['Direction'];?> | <?php echo $lang['Windspeed'] ," (<valuetitleunit>",$weather["wind_units"];?></valuetitleunit>)</div>  
  <div class=weather34chartlinks> 
 	<a alt="Wind-Speed almanac" title="Temperature Almanac" href=windalmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;
	<a alt="yearly Wind-Speed " title="Yearly Wind-Speed " href=windchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Wind-Speed</a>&nbsp;
	<a alt="Wind-Speed today" title="Wind-Speed Today" href=todaywindcharts.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> <?php echo $lang['Today']; ?></a></div>
 <div id=windspeed></div></weather34module> 
  
  <weather34module> <!-- Weather34 Main Module 5 Barometer-->
  <div class=actualt><?php echo $lang['Barometer']," (<valuetitleunit>",$weather["barometer_units"]; ?></valuetitleunit>)</div>  
  <div class=weather34chartlinks> 
 	<a alt="Barometer almanac" title="Barometer Almanac" href=barometeralmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;
	<a alt="yearly Barometer " title="Yearly Barometer " href=barometerchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Barometer</a>&nbsp;</div>
 <div id=barometer></div></weather34module> 
 
  <weather34module> <!-- Weather34 Main Module 6 Sky-->
 <div class=actualt><?php echo $lang['Daylight']. " | ". $lang['Darkness'];?></div> 
 <div class=weather34chartlinks> 
 	<a alt="Moon Information" title="Moon Information" href=mooninfo.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Moon Information</a>&nbsp;
	<a alt="Meteor Showers" title="Meteor Showers " href=meteorshowers.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Meteor Showers</a>&nbsp;</div>	
 <div id=moonphase></div></weather34module> 
 
  
  <weather34module> <!-- Weather34 Main Module 7 Rainfall-->
  <div class=actualt><?php echo $lang['Rainfalltoday']," (<valuetitleunit>".$weather["rain_units"]?></valuetitleunit>)</div>  
  <div class=weather34chartlinks> 
 	<a alt="Rainfall almanac" title="Rainfall Almanac" href=rainfallalmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;	
	<a alt="yearly Rainfall " title="Yearly Rainfall " href=rainfallchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Rainfall</a>&nbsp;
	<a alt="Rainfall today" title="Rainfall Today" href=todayrainchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> <?php echo $lang['Today']; ?></a></div>
 <div id=rainfall></div></weather34module> 
  
  <weather34module> <!-- Weather34 Main Module 8 Optional-->
  <div class=actualt><?php echo $position12title?></div>  
  <div class=weather34chartlinks> 
 	<?php if ($position12=='webcamsmall.php' OR $position12=='indoortemperature.php' OR $position12=='moonphase.php'){echo'<span class="yearpopup"><a alt="Webcam " title="Webcam " href="cam.php" data-lity>'. $webcamicon. ' Live Webcam </a></span>
  <span class="yearpopup"> <a alt="Indoor Guide" title="Indoor Guide" href="homeindoor.php" data-lity>'. $chartinfo. ' Indoor Guide </a></span>
  <span class="yearpopup"> <a alt="Moon Info" title="Moon Info" href="mooninfo.php" data-lity>'. $chartinfo. ' Moon Info </a></span>';}
if ($position12=='airqualitymodule.php') {echo ' <span class="yearpopup"><a alt="air quality information" title="air quality information" href="purpleair.php" data-lity>'. $chartinfo. " Air Quality | Cloudbase </a></span>";}
if ($position12=='weather34uvsolar.php') {echo ' <span class="yearpopup"><a alt="UV Guide" title="UV Guide" href="uvindex.php" data-lity>'. $chartinfo. " UV Guide  </a></span>";} 
if ($position12=='weather34uvsolar.php') {echo ' <span class="yearpopup"><a alt="UV Alamanac" title="UV Alamanac" href="uvalmanac.php" data-lity>&nbsp;'. $chartinfo. " UV Alamanac </a></span>";}
if ($position12=='weather34uvsolar.php') {echo '<span class="yearpopup"> <a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Alamanac </a></span>";}
if ($position12=='solaruvds.php') {echo ' <span class="yearpopup"><a alt="UV Guide" title="UV Guide" href="uvindexds.php" data-lity>'. $chartinfo. " UV Guide </a></span>";}
if ($position12=='solaruvds.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Alamanac </a></span>";}
if ($position12=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="UV Guide" title="UV Guide" href="uvindexwu.php" data-lity>'. $chartinfo. " UV Guide </a></span>";}
if ($position12=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Alamanac </a></span>";}
if ($position12=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="Solar Chart" title="Solar Chart" href="mbcharts/todaysolar.php" data-lity>&nbsp;'. $menucharticonpage. " Solar chart </a></span>";}
if ($position12=='eq.php') {echo ' <span class="yearpopup"><a alt="Earthquakes Worldwide" title="Earthquakes Worldwide" href="eqlist.php" data-lity>'. $chartinfo. " Worldwide Earthquakes </a></span>";}?>	
	</div> 
 <div id=solar></div></weather34module> 
  
  <weather34module>   <!-- Weather34 Main Module 9 Optional-->
  <div class=actualt><?php echo $positionlastmoduletitle?></div> 
  <div class=weather34chartlinks> 
 	<?php if ($positionlastmodule=='webcamsmall.php' OR $positionlastmodule=='indoortemperature.php' OR $positionlastmodule=='moonphase.php'){echo'<span class="yearpopup"><a alt="Webcam " title="Webcam " href="cam.php" data-lity>'. $webcamicon. ' Live Webcam </a></span>
  <span class="yearpopup"> <a alt="Indoor Guide" title="Indoor Guide" href="homeindoor.php" data-lity>'. $chartinfo. ' Indoor Guide </a></span>
  <span class="yearpopup"> <a alt="Moon Info" title="Moon Info" href="mooninfo.php" data-lity>'. $chartinfo. ' Moon Info </a></span>';}
if ($positionlastmodule=='airqualitymodule.php') {echo ' <span class="yearpopup"><a alt="air quality" title="air quality" href="purpleair.php" data-lity>'. $chartinfo. " Air Quality | Cloudbase </a></span>";}
if ($positionlastmodule=='weather34uvsolar.php') {echo ' <span class="yearpopup"><a alt="UV Guide" title="UV Guide" href="uvindex.php" data-lity>'. $chartinfo. " UV Guide  </a></span>";}
if ($positionlastmodule=='weather34uvsolar.php') {echo ' <span class="yearpopup"><a alt="UV Alamanac" title="UV Alamanac" href="uvalmanac.php" data-lity>&nbsp;'. $chartinfo. " UV Alamanac </a></span>";}
if ($positionlastmodule=='weather34uvsolar.php') {echo '<span class="yearpopup"> <a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Alamanac </a></span>";}
if ($positionlastmodule=='solaruvds.php') {echo ' <span class="yearpopup"><a alt="UV Guide" title="UV Guide" href="uvindexds.php" data-lity>'. $chartinfo. " UV Guide </a></span>";}
if ($positionlastmodule=='solaruvds.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Alamanac </a></span>";}
if ($positionlastmodule=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="UV Guide" title="UV Guide" href="uvindexwu.php" data-lity>'. $chartinfo. " UV Guide </a></span>";}
if ($positionlastmodule=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="Solar Alamanac" title="Solar Alamanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Alamanac </a></span>";}
if ($positionlastmodule=='solaruvwu.php') {echo ' <span class="yearpopup"><a alt="Solar Chart" title="Solar Chart" href="mbcharts/todaysolar.php" data-lity>&nbsp;' .$menucharticonpage. " Solar chart </a></span>";}
if ($positionlastmodule=='eq.php') {echo ' <span class="yearpopup"><a alt="Earthquakes Worldwide" title="Earthquakes Worldwide" href="eqlist.php" data-lity>'. $chartinfo. " Worldwide Earthquakes </a></span>";}
if ($positionlastmodule=='airqualitymodule.php') {echo '<span class="yearpopup"><a alt="Earthquakes Worldwide" title="Earthquakes Worldwide" href="eqlist.php" data-lity>'. $chartinfo. " Worldwide Earthquakes </a></span>";}?>
	</div>
 <div id=dldata></div></weather34module> 
  <!-- Weather34 main moudles end -->
 
   <!-- Weather34 Footer -->
 
  <main class="gridhardware">
  <weather34infoboxes>
  <div class=hardwareimg1><a href=https://wiki.meteobridge.com/wiki/index.php/Home target=_blank title=https://wiki.meteobridge.com/wiki/index.php/Home><img src=img/nano.svg width=90px height=50px alt=meteobridge></a></div>
  
  <div class=mbtype> <?php echo $info?>&nbsp;Meteobridge NanoSD:<?php echo $weather["mbplatform"]?></div>
  <div class=mbfirmware> <?php echo $info?>&nbsp;Firmware:<oblue><?php echo $weather["swversion"];echo "-",$weather["build"]?><oblue></div>
  <div class=nanouptime> <?php echo $info?>&nbsp;Uptime:<?php echo "<orange>", $uptimedays;echo " </orange> Days";?></div>
  </weather34infoboxes>
  
  <weather34infoboxes>
  <div class=hardwareimg2><a href=https://wiki.meteobridge.com/wiki/index.php/Home target=_blank title=https://wiki.meteobridge.com/wiki/index.php/Home><img src=img/davisvp2proconsole.svg width=90px height=50px alt=meteobridge></a></div>
  <div class=hardware><?php echo $info?>&nbsp;<?php echo $weatherhardware;?></div>
  <div class=hardwareinfo><?php echo $info?>&nbsp;Installed: <?php echo $hardwareinstalled;?></div>
  <div class=hardwareuptime><?php echo $info?>&nbsp;Power Console:<?php echo $weather['indoorbattery']?> <?php echo $info?>ISS:<?php echo $weather['outdoorbattery']?></div>  
  </weather34infoboxes>
  
  <weather34infoboxes> 
  <div class=locinfo><?php echo $info?>&nbsp;Operational Since:<?php echo $since;?></div>
  <div class=locinfo2><?php echo $info?>&nbsp;<?php echo $stationlocation?></div>
  <div class=locinfo3><?php echo $info?>&nbsp;Designed by Weather<orange>34</orange>&nbsp;&copy;2015-<?php echo date('Y');?></div>  
  </weather34infoboxes>
  
  <!-- Weather34 fotter ends -->
</main>
</div>
<div id=lightningalert></div></body><?php include_once('updater.php');include_once('menu.php')?></html>
