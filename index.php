<?php header('Content-type: text/html; charset=utf-8');error_reporting(0); 



	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
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
 	<a class="weather34tiplink" data-weather34tiplink="Temperature Almanac" href=tempalmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Temperature <?php echo date('Y');?>"  href=temperaturechart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Temperature</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Dewpoint <?php echo date('Y');?>"  href=dewpointchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Dewpoint</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Today Charts"  href=todaytemperaturechart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> <?php echo $lang['Today']; ?> </a></div>
  <div id=temperature></div></weather34module> 
  
  
  <weather34module> <!-- Main Module 2 Forecast-->
  <div class=actualt><?php echo $position6title ;?>  (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>) </div>  
  <div class=weather34chartlinks> 

<?php if ($position6=='forecast3wu.php' || $position6=='forecast3wularge.php') {echo ' <a class="weather34tiplink" data-weather34tiplink="10 Day Forecast" href="outlookwu.php" data-lity>'. $chartinfo. " Daily Forecast </a>&nbsp;";}?>
<?php if ($position6=='forecast3wu.php' || $position6=='forecast3wularge.php') {echo ' <a class="weather34tiplink" data-weather34tiplink="Forecast Summary" href="outlookwutext.php" data-lity>'. $chartinfo. "  Forecast Summary</a>&nbsp;";}?>
</span></div>
 <div id=currentfore></div></weather34module> 
  
  <weather34module> <!-- Weather34 Main Module 3 Current-->
  <div class=actualt><?php echo $lang['Currentsky'];?></div>  
  <div class=weather34chartlinks>
  <a class="weather34tiplink" data-weather34tiplink="Metar Conditions" href="metarnearby.php" data-lity><?php echo $chartinfo?> <?php echo 'Nearby Metar';?> <?php if(filesize('jsondata/metar34.txt')<160){echo "(<ored>Offline</ored>)";}else echo "" ?></a>&nbsp;
  <a href="windyradar.php" class="weather34tiplink" data-weather34tiplink="Windy.com Radar" data-lity><?php echo $chartinfo?> Radar</a>&nbsp;
  <a href="windywind.php" class="weather34tiplink" data-weather34tiplink="Windy.com Wind Map" data-lity><?php echo $chartinfo?> Wind Map</a>
  </div>
 <div id=currentsky></div></weather34module> 
  
  <weather34module> <!-- Main Module 4 Wind-->
  <div class=actualt><?php echo $lang['Direction'];?> | <?php echo $lang['Windspeed'] ," (<valuetitleunit>",$weather["wind_units"];?></valuetitleunit>)</div>  
  <div class=weather34chartlinks> 
 	<a class="weather34tiplink" data-weather34tiplink="Wind Speed Almanac" href=windalmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Wind Speed <?php echo date('Y');?>" href=windchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Wind-Speed</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Wind Speed Today" href=todaywindcharts.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> <?php echo $lang['Today']; ?></a></div>
 <div id=windspeed></div></weather34module> 
  
  <weather34module> <!-- Weather34 Main Module 5 Barometer-->
  <div class=actualt><?php echo $lang['Barometer']," (<valuetitleunit>",$weather["barometer_units"]; ?></valuetitleunit>)</div>  
  <div class=weather34chartlinks> 
 	<a class="weather34tiplink" data-weather34tiplink="Barometer Almanac" href=barometeralmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Barometer Charts" href=barometerchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Barometer</a></div>
 <div id=barometer></div></weather34module> 
 
  <weather34module> <!-- Weather34 Main Module 6 Sky-->
 <div class=actualt><?php echo $lang['Daylight']. " | ". $lang['Darkness'];?></div> 
 <div class=weather34chartlinks> 
 	<a class="weather34tiplink" data-weather34tiplink="Moon Phase Data" href=mooninfo.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Moon Information</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Meteor Shower Data" href=meteorshowers.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Meteor Showers</a></div>	
 <div id=moonphase></div></weather34module> 
 
  
  <weather34module> <!-- Weather34 Main Module 7 Rainfall-->
  <div class=actualt><?php echo $lang['Rainfalltoday']," (<valuetitleunit>".$weather["rain_units"]?></valuetitleunit>)</div>  
  <div class=weather34chartlinks> 
 	<a class="weather34tiplink" data-weather34tiplink="Rainfall Almanac" href=rainfallalmanac.php data-lity><chartinfocolor><?php echo $chartinfo?></chartinfocolor> Almanac</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Rainfall <?php echo date('Y');?>" href=rainfallchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> Rainfall</a>&nbsp;&nbsp;
	<a class="weather34tiplink" data-weather34tiplink="Rainfall Today Charts" href=todayrainchart.php data-lity><chartinfocolor><?php echo $menucharticonpage?></chartinfocolor> <?php echo $lang['Today']; ?></a></div>
 <div id=rainfall></div></weather34module> 
  
  <weather34module> <!-- Weather34 Main Module 8 Optional-->
  <div class=actualt><?php echo $position12title?></div>  
  <div class=weather34chartlinks> 
 	<?php if ($position12=='webcamsmall.php' OR $position12=='indoortemperature.php' OR $position12=='moonphase.php'){echo'&nbsp;<a class="weather34tiplink" data-weather34tiplink="Webcam" href="cam.php" data-lity>'. $webcamicon. ' Live Webcam </a></span>
  &nbsp; <a class="weather34tiplink" data-weather34tiplink="Indoor Data" href="homeindoor.php" data-lity>'. $chartinfo. ' Indoor Guide </a></span>
  &nbsp; <a class="weather34tiplink" data-weather34tiplink="Moon Phase Data" href="mooninfo.php" data-lity>'. $chartinfo. ' Moon Info </a></span>';}
if ($position12=='airqualitymodule.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Air Quality Data" href="purpleair.php" data-lity>'. $chartinfo. " Air Quality | Cloudbase </a></span>";}
if ($position12=='airqualityluftdaten.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Air Quality Data" href="luftdaten.php" data-lity>'. $chartinfo. " Luftdaten Air Quality | Cloudbase </a></span>";}
if ($position12=='weather34uvsolar.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="UV Almanac" href="uvalmanac.php" data-lity>&nbsp;'. $chartinfo. " UV Almanac </a></span>";}
if ($position12=='weather34uvsolar.php') {echo '&nbsp; <a class="weather34tiplink" data-weather34tiplink="Solar Almanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Almanac </a></span>";}
if ($position12=='solaruvwu.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="UV Index Guide" href="uvindexwu.php" data-lity>'. $chartinfo. " UV Guide </a></span>";}
if ($position12=='solaruvwu.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Solar Almanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Almanac </a></span>";}
if ($position12=='solaruvwu.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Solar Chart" href="mbcharts/todaysolar.php" data-lity>&nbsp;'. $menucharticonpage. " Solar chart </a></span>";}
if ($position12=='eq.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Recent World Wide Earthquakes" href="eqlist.php" data-lity>'. $chartinfo. " Worldwide Earthquakes </a></span>";}?>	
	</div> 
 <div id=solar></div></weather34module> 
  
  <weather34module>   <!-- Weather34 Main Module 9 Optional-->
  <div class=actualt><?php echo $positionlastmoduletitle?></div> 
  <div class=weather34chartlinks> 
 	<?php if ($positionlastmodule=='webcamsmall.php' OR $positionlastmodule=='indoortemperature.php' OR $positionlastmodule=='moonphase.php'){echo'&nbsp;<a class="weather34tiplink" data-weather34tiplink="Webcam" href="cam.php" data-lity>'. $webcamicon. ' Live Webcam </a></span>
  &nbsp; <a class="weather34tiplink" data-weather34tiplink="Indoor Data" href="homeindoor.php" data-lity>'. $chartinfo. ' Indoor Guide </a></span>
  &nbsp; <a class="weather34tiplink" data-weather34tiplink="Moon Phase Data" href="mooninfo.php" data-lity>'. $chartinfo. ' Moon Info </a></span>';}
if ($positionlastmodule=='airqualitymodule.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Air Quality Data" href="purpleair.php" data-lity>'. $chartinfo. " Air Quality | Cloudbase </a></span>";}
if ($positionlastmodule=='airqualityluftdaten.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Air Quality Data" href="luftdaten.php" data-lity>'. $chartinfo. " Luftdaten Air Quality | Cloudbase </a></span>";}
if ($positionlastmodule=='weather34uvsolar.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="UV Index Guide" href="uvindex.php" data-lity>'. $chartinfo. " UV Guide  </a></span>";}
if ($positionlastmodule=='weather34uvsolar.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="UV Almanac" href="uvalmanac.php" data-lity>&nbsp;'. $chartinfo. " UV Almanac </a></span>";}
if ($positionlastmodule=='weather34uvsolar.php') {echo '&nbsp; <a class="weather34tiplink" data-weather34tiplink="Solar Almanac" data-lity>'. $chartinfo. " Solar Almanac </a></span>";}
if ($positionlastmodule=='solaruvwu.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="UV Guide" href="uvindexwu.php" data-lity>'. $chartinfo. " UV Guide </a></span>";}
if ($positionlastmodule=='solaruvwu.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Solar Almanac" href="solaralmanac.php" data-lity>'. $chartinfo. " Solar Almanac </a></span>";}
if ($positionlastmodule=='solaruvwu.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Solar Chart" href="mbcharts/todaysolar.php" data-lity>&nbsp;' .$menucharticonpage. " Solar chart </a></span>";}
if ($positionlastmodule=='eq.php') {echo ' &nbsp;<a class="weather34tiplink" data-weather34tiplink="Recent World Wide Earthquakes" href="eqlist.php" data-lity>'. $chartinfo. " Worldwide Earthquakes </a></span>";}
if ($positionlastmodule=='airqualitymodule.php') {echo '&nbsp;<a class="weather34tiplink" data-weather34tiplink="Recent World Wide Earthquakes" href="eqlist.php" data-lity>'. $chartinfo. " Worldwide Earthquakes </a></span>";}?>
	</div>
 <div id=dldata></div></weather34module> 
  <!-- Weather34 main moudles end -->
 
   <!-- Weather34 Footer -->
 
  <main class="gridhardware">
  <weather34infoboxes>
  <div class=hardwareimg1>
  <a href="https://www.meteobridge.com/wiki/index.php/Home" alt="https://www.meteobridge.com/wiki/index.php/Home" title="https://www.meteobridge.com/wiki/index.php/Home">
<?php
if ($mbplatform== "Meteobridge Pro"){echo '<img src="img/MeteobridgePRO.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width=60px height=50px >';}
else if ($mbplatform== "Meteobridge Nano"){echo '<img src="img/nano.svg" alt="Meteobridge TP-LINK" title="Meteobridge Nano"  width=60px height=50px >';}
else if ($mbplatform== "Meteobridge NanoSD"){echo '<img src="img/nano.svg" alt="Meteobridge D-LINK" title="Meteobridge NanoSD"  width=60px height=50px" >';}
?></a> </div>
  
  <div class=mbtype> <?php echo $info?>&nbsp;<?php echo $mbplatform?>: <?php echo $weather["mbplatform"]?></div>
  <div class=mbfirmware> <?php echo $info?>&nbsp;Firmware Rev:<oblue><?php echo $weather["swversion"];echo "-",$weather["build"]?><oblue></div>
<?php //meteobridge device uptime
$nanosduptime = $meteobridgeapi[81];function convert($nanosduptime){$weather34nanotimeago = "";$days1 = intval(intval($nanosduptime) / (3600*24));$hours1 = (intval($nanosduptime) / 3600) % 24;$minutes1 = (intval($nanosduptime) / 60) % 60;$seconds1 = (intval($nanosduptime)) % 60;if($days1> 1){$weather34nanotimeago .= "$days1 Days ";}else {if($days1>0){$weather34nanotimeago .= "$days1 Day ";}if($hours1 > 1){$weather34nanotimeago .= "$hours1 hrs ";}else if($hours1 >=0){$weather34nanotimeago .= "$hours1 hr ";}if($minutes1 > 1){$weather34nanotimeago .= "$minutes1 mins ";}else if($minutes1 >=0){$weather34nanotimeago .= "$minutes1 min ";}}return $weather34nanotimeago;}?>  
  <div class=nanouptime> <?php echo $info?>&nbsp;Interface Uptime:<oblue> <?php echo convert($nanosduptime)?></oblue></div>
  </weather34infoboxes>
  
  <weather34infoboxes>
  <div class=hardwareimg2>
  <?php
if ($weatherhardware== "Davis Vantage Vue"){echo '<img src="img/davisvue.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="90px" height="55px" >';}
else if ($weatherhardware== "Davis Envoy8x"){echo '<img src="img/designedfordavisenvoy8x.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="90px" height="55px" >';}
else if ($davis=="Yes"){echo '<img src="img/logoDAVISCONSOLEVECTOR.svg" alt="Davis Instruments-Meteobridge" title="Davis Instruments-Meteobridge"  width="90px" height="55px" >';}?></div>
  <div class=hardware><?php echo $info?>&nbsp;<?php echo $weatherhardware;?></div>
  <div class=hardwareinfo><?php echo $info?>&nbsp;Installed: <?php echo $hardwareinstalled;?></div>
  <div class=hardwareuptime><?php echo $info?>&nbsp;Power Console:<?php echo $weather['indoorbattery']?> <?php echo $info?>ISS:<?php echo $weather['outdoorbattery']?></div>  
  </weather34infoboxes>
  
  <weather34infoboxes> 
  <div class=locinfo><?php echo $info?>&nbsp;Operational Since:<?php echo $since;?></div>
  <div class=locinfo2><?php echo $info?>&nbsp;<?php echo $stationlocation?> <img src="img/flags/<?php echo $flag ;?>.svg" width="15px" ></div>
  <div class=locinfo3><?php echo $info?>&nbsp;<?php echo $designedby;?>&nbsp;&copy;2015-<?php echo date('Y');?></div>  
  </weather34infoboxes></div></div>
  <div class="footercontainer">
  <main class="gridfooter">
  <weather34footer>
  <div class=footertext><?php echo $info?>&nbsp;Realtime Weather Data Provided By:&nbsp;<?php echo $stationlocation?> Home Weather Station</div>
 </weather34footer></main></div>
 
 </body><?php include_once('updater.php');include_once('menu.php');?><div id=lightningalert></div>