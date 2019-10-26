<?php header('Content-type: text/html; charset=utf-8');error_reporting(0);
    ####################################################################################################
    #	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
    # https://weather34.com/homeweatherstation/index.html 											   #
    # 	                                                                                               #
    # 	Release: Revised September 2019						  	                                       #
    # 	                                                                                               #
    #   https://www.weather34.com 	                                                                   #
    ####################################################################################################
//original weather34 MB-SMART script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include_once('livedata.php');include_once('common.php');include_once('settings1.php'); date_default_timezone_set($TZ);?>
 <!DOCTYPE html><html><head>
<!-- Primary Meta Tags -->
<title><?php echo $stationlocation;?> Home Weather Station</title>
<meta name="title" content="<?php echo $stationlocation;?> Home Weather Station">
<meta name="description" content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>">
<!-- Twitter -->
<meta property="twitter:card" content="img/weather34_template-min.png">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="<?php echo $stationlocation;?> Home Weather Station">
<meta property="twitter:description" content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>">
<meta property="twitter:image" content="img/weather34_template-min.png">
<meta content=website property=og:type>
<meta content="7 days" name=revisit-after>
<meta content=web name=distribution><meta content="<?php echo $stationlocation;?>" name=author>
<meta content=INDEX,FOLLOW name=robots>
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/site.webmanifest">
<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#01a4b4">
<meta name="apple-mobile-web-app-title" content="Weather34 MB-SMART">
<meta name="application-name" content="Weather34 MB-SMART">
<meta name="msapplication-TileColor" content="#f8f8f8">
<meta name="msapplication-TileImage" content="img/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="preload" href="css/fonts/clock3-webfont.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="css/fonts/verbatim-regular.woff" as="font" type="font/woff" crossorigin>
<link href="css/weather34dashboard.<?php echo $theme?>.css?version=<?php echo filemtime('css/weather34dashboard.'.$theme.'.css')?>" rel="stylesheet prefetch">
</head>
<!-- Weather34 top moudles begin -->
<div class="maincontainer">
 <main class="grid">
  <weather34topmodule>
 <div class="weather34box">
 <div class="weather34title2"><weather34homepagetop></weather34homepagetop> &nbsp;<?php echo $lang['Temperature']." ". $lang['Almanac'];?> <?php echo date('Y')?></div>
 <div id=temperature-year></div></div></weather34topmodule>

  <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop> &nbsp;<?php echo $lang['Windspeed']." ". $lang['Almanac'];?> <?php echo date('Y')?></div>
  <div id=windspeed-year></div></div></weather34topmodule>

  <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop> &nbsp;<?php echo $lang['Rain']." ". $lang['Almanac'];?> <?php echo date('Y')?></div>
  <div id=rainfall-year></div></div>
  </weather34topmodule>

  <weather34topmodule>
   <div class="weather34box">
   <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;<?php if ($positionconsole=='forecast-small.php'){echo $lang['Forecast'];} else echo "Davis Console ".$lang['Forecastsummary'];?> </div>
  <div id=dewpoint-year></div></div>
  </weather34topmodule>
  </main>

<!-- Weather34 tmain moudles begin -->
  <main class="grid1">

  <weather34module> <!-- Weather34 Main Module 1 Temperature-->
  <div class=actualt><?php echo $lang['Temperature']; ?> (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>) </div>
  <div class=weather34chartlinks>
 	<a href=tempalmanac.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Almanac'];?></a>&nbsp;&nbsp;
	<a href=temperaturechart.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Temperature'];?></a>&nbsp;&nbsp;
	<a href=dewpointchart.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Dewpoint'];?></a>&nbsp;&nbsp;
	<a href=todaytemperaturechart.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Today']; ?> </a></div>
  <div id=temperature></div></weather34module>


  <weather34module> <!-- Main Module 2 Forecast-->
  <div class=actualt><?php echo $lang['Forecast'] ;?>  (<valuetitleunit>&deg;<?php echo $weather["temp_units"] ;?></valuetitleunit>) </div>
  <div class=weather34chartlinks>

<?php echo ' <a href="outlookwu.php" data-lity><weather34homepagelinks></weather34homepagelinks> '.$lang['Forecast']." </a>&nbsp;";?>
<?php  echo ' <a href="outlookwutext.php" data-lity><weather34homepagelinks></weather34homepagelinks> '.$lang['Forecastsummary']." </a>&nbsp;";?>

</span></div>
 <div id=currentfore></div></weather34module>

  <weather34module> <!-- Weather34 Main Module 3 Current-->
  <div class=actualt><?php echo $lang['Currentsky'];?></div>
  <div class=weather34chartlinks>
  <a href="metarnearby.php" data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Airport'];?> (<blue><?php echo $icao1?></blue>) <?php if (filesize('jsondata/metar34.txt')<160) {
    echo "(<ored>Offline</ored>)";
} else {
    echo "";
} ?></a>&nbsp;
  <a href="windyradar.php" class="weather34tiplink" data-weather34tiplink="Windy.com Radar" data-lity><weather34homepagelinks></weather34homepagelinks> Radar</a>&nbsp;
  <a href="windywind.php" class="weather34tiplink" data-weather34tiplink="Windy.com Wind Map" data-lity><weather34homepagelinks></weather34homepagelinks> Wind Map</a>
  </div>
 <div id=currentsky></div></weather34module>

  <weather34module> <!-- Main Module 4 Wind-->
  <div class=actualt><?php echo $lang['Direction'];?> | <?php echo $lang['Windspeed'];?></div>
  <div class=weather34chartlinks>
 	<a href=windalmanac.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Almanac'];?></a>&nbsp;&nbsp;
	<a href=windchart.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Windspeed'];?></a>&nbsp;&nbsp;
	<a href=todaywindcharts.php data-lity><weather34homepagelinks></weather34homepagelinks>  <?php echo $lang['Today']; ?></a></div>
 <div id=windspeed></div></weather34module>

  <weather34module> <!-- Weather34 Main Module 5 Barometer-->
  <div class=actualt><?php echo $lang['Barometer']," (<valuetitleunit>",$weather["barometer_units"]; ?></valuetitleunit>)</div>
  <div class=weather34chartlinks>
 	<a href=barometeralmanac.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Almanac'];?></a>&nbsp;&nbsp;
	<a href=barometerchart.php data-lity><weather34homepagelinks></weather34homepagelinks>  <?php echo $lang['Barometer']?></a></div>
 <div id=barometer></div></weather34module>

  <weather34module> <!-- Weather34 Main Module 6 Sky-->
 <div class=actualt><?php echo $lang['SunPosition']; ?></div>
 <div class=weather34chartlinks>
    <?php if ($positionlastmodule=='moonphase.php') {
    echo '<a href=meteorshowers.php data-lity><chartinfocolor><weather34homepagelinks></weather34homepagelinks></chartinfocolor> '.$lang['Meteor'].' </a>&nbsp;&nbsp;</span>';
} else {
    echo'&nbsp;
	<a href="mooninfo.php" data-lity><weather34homepagelinks></weather34homepagelinks> '.$lang['Moon'].' Data </a>&nbsp;&nbsp;</span>
	<a href=meteorshowers.php data-lity><chartinfocolor><weather34homepagelinks></weather34homepagelinks></chartinfocolor> '.$lang['Meteor'];
}?></a></div>
 <div id=moonphase></div></weather34module>


  <weather34module> <!-- Weather34 Main Module 7 Rainfall-->
  <div class=actualt><?php echo $lang['Rainfalltoday']," (<valuetitleunit>".$weather["rain_units"]?></valuetitleunit>)</div>
  <div class=weather34chartlinks>
 	<a href=rainfallalmanac.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Almanac'];?></a>&nbsp;&nbsp;
	<a href=rainfallchart.php data-lity><weather34homepagelinks></weather34homepagelinks> <?php echo $lang['Rainfall'];?></a>&nbsp;&nbsp;
	<a href=todayrainchart.php data-lity><weather34homepagelinks></weather34homepagelinks>  <?php echo $lang['Today']; ?></a></div>
 <div id=rainfall></div></weather34module>

  <weather34module> <!-- Weather34 Main Module 8 Optional-->
  <div class=actualt><?php echo $position12title?></div>
  <div class=weather34chartlinks>
 	<?php
if ($position12=='moonphase.php') {
    echo'<a href="mooninfo.php" data-lity><weather34homepagelinks></weather34homepagelinks> '.$lang['Moon'].' Data</a></span>';
}
if ($position12=='webcamsmall.php') {
    echo '&nbsp;<a href="cam.php" data-lity><weather34homepagelinks></weather34homepagelinks> Live Webcam </a></span>';
}
if ($position12=='airqualitymodule.php') {
    echo ' <a href="purpleair.php" data-lity><weather34homepagelinks></weather34homepagelinks> '.$lang['Air Quality']. " </a>&nbsp;&nbsp;</span>";
}
if ($position12=='airqualityluftdaten.php') {
    echo ' <a href="luftdaten.php" data-lity><weather34homepagelinks></weather34homepagelinks>  Luftdaten '.$lang['Air Quality']. " </a>&nbsp;&nbsp;</span>";
}
if ($position12=='weather34uvsolar.php') {
    echo ' <a href="uvalmanac.php" data-lity><weather34homepagelinks></weather34homepagelinks>  UV '.$lang['Almanac']. "</a>&nbsp;&nbsp;</span>";
}
if ($position12=='weather34uvsolar.php') {
    echo '&nbsp;<a href="solaralmanac.php" data-lity><weather34homepagelinks></weather34homepagelinks> Solar '.$lang['Almanac']. "</a>&nbsp;&nbsp;</span>";
}
if ($position12=='solaruvwu.php') {
    echo '<a href="uvindexwu.php" data-lity><weather34homepagelinks></weather34homepagelinks> UV Guide </a></span>';
}
if ($position12=='solaruvwu.php') {
    echo ' &nbsp;<a href="solaralmanac.php" data-lity><weather34homepagelinks></weather34homepagelinks> Solar '.$lang['Almanac']. "</a>&nbsp;&nbsp;</span>";
}
?>
	</div>
 <div id=solar></div></weather34module>

  <weather34module>   <!-- Weather34 Main Module 9 Optional-->
  <div class=actualt><?php echo $positionlastmoduletitle?></div>
  <div class=weather34chartlinks>
 	<?php
if ($positionlastmodule=='webcamsmall.php') {
    echo'<a href="cam.php" data-lity><weather34homepagelinks></weather34homepagelinks> Live Webcam </a></span> ';
}
if ($positionlastmodule=='moonphase.php') {
    echo'<a href="mooninfo.php" data-lity><weather34homepagelinks></weather34homepagelinks> '.$lang['Moon'].' Data</a></span>';
}
if ($positionlastmodule=='airqualitymodule.php') {
    echo ' <a href="purpleair.php" data-lity><weather34homepagelinks></weather34homepagelinks>  '.$lang['Air Quality']. " </a>&nbsp;&nbsp;</span>";
}
if ($positionlastmodule=='airqualityluftdaten.php') {
    echo ' <a href="luftdaten.php" data-lity><weather34homepagelinks></weather34homepagelinks>  Luftdaten '.$lang['Air Quality']. " </a>&nbsp;&nbsp;</span>";
}
if ($positionlastmodule=='lightning34.php') {
    echo ' <a href="luftdaten.php" data-lity><weather34homepagelinks></weather34homepagelinks>  Luftdaten '.$lang['Air Quality']. " </a>&nbsp;&nbsp;</span>";
}
if ($positionlastmodule=='lightning34.php') {
    echo ' <a href="eqlist.php" data-lity><weather34homepagelinks></weather34homepagelinks> Regional '.$lang['Earthquake']."</a>&nbsp;&nbsp;</span>";
}
if ($positionlastmodule=='weather34uvsolar.php') {
    echo ' <a href="uvalmanac.php" data-lity><weather34homepagelinks></weather34homepagelinks>   UV '.$lang['Almanac']. '  </a></span>&nbsp;&nbsp;';
}
if ($positionlastmodule=='weather34uvsolar.php') {
    echo ' <a href="solaralmanac.php" data-lity><weather34homepagelinks></weather34homepagelinks>  Solar '.$lang['Almanac']. '  </a></span>';
}
if ($positionlastmodule=='solaruvwu.php') {
    echo ' <a href="uvindexwu.php" data-lity><weather34homepagelinks></weather34homepagelinks> UV Guide </a></span>';
}
if ($positionlastmodule=='solaruvwu.php') {
    echo ' <a href="solaralmanac.php" data-lity><weather34homepagelinks></weather34homepagelinks>  Solar '.$lang['Almanac']. "</a>&nbsp;&nbsp;</span>";
}
if ($positionlastmodule=='airqualitymodule.php') {
    echo '<a href="eqlist.php" data-lity><weather34homepagelinks></weather34homepagelinks> Regional '.$lang['Earthquake']. "</a>&nbsp;&nbsp;</span>";
}?>
	</div>
 <div id=dldata></div></weather34module>

 <weather34module2><div class=actualt><?php echo $lang['Weather Station']." ".$lang['Information']?></div>
 <div id=logo></div></weather34module>
  </main>

 <!-- Weather34 Barometer small module -->
 <main class="grid3">
 <weather34topmodule>
 <div class="weather34box">
 <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;<?php echo $lang['Barometer']?>&nbsp;<?php echo $lang['Almanac']?> <?php echo date('Y')?></div>
 <div id=barometer-year></div></div></weather34topmodule>

  <!-- Weather34 Humidity small module -->
  <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;<?php echo $lang['Humidity']?>&nbsp;<?php echo $lang['Almanac']?> <?php echo date('Y')?></div>
  <div id=humidity-year></div></div></weather34topmodule>

  <!-- Weather34 Console Forecast -->
  <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;<?php echo $lang['Dewpoint']?>&nbsp;<?php echo $lang['Almanac']?> <?php echo date('Y')?></div>
  <div id=consoledavis></div></div></weather34topmodule>

  <!-- Weather34 moonphase or earthquake -->
  <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;
  <?php // 3 options
  if ($positionmooneq=='weather34-moonphase.php') {
      echo $lang['Moonphase'];
  } elseif ($positionmooneq=='luftdaten-small.php') {
      echo $lang['Air Quality'];
  } elseif ($positionmooneq=='heat-chill-year-month.php') {
      echo $lang['Heatindex']." | ".$lang['Windchill']." ".date('Y');
  }?>
  </div>
  <div id=option></div></div>
  </weather34topmodule>
  </main>

  <main class="grid4">
  <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp; Recent Regional <?php echo $lang['Earthquake']?></div>
  <div id=earthquake></div></div></weather34topmodule>

  <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;<?php echo $lang['Weather Station'] ." Power";?></div>
  <div id=battery></div></div></weather34topmodule>

   <weather34topmodule>
   <div class="weather34box">
   <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;<?php echo $lang['Meteobridge Interface']?> </div>
   <div id=interface></div></div></weather34topmodule>

   <weather34topmodule>
  <div class="weather34box">
  <div class="weather34title2"><weather34homepagetop></weather34homepagetop>&nbsp;<?php echo $lang['Weather Station']?> Info</div>
  <div id=hardwareinfo2></div></div></weather34topmodule>

  <!-- Weather34 bottom small moudles end -->
   <!-- Weather34 Footer -->
  <main class="gridfooter">
  <weather34footer>
  <div class=footertext>
  <div class="weather34-mbsmartlogo"><a class="weather34tipfooter" href="https://weather34.com/homeweatherstation/" data-weather34tipfooter="WEATHER34 MB-SMART" target="_blank"><img src="img/weather34-logo.svg" width="47em" height="45em"> <span>weather<ored>34</ored> designed</span></a>
  </div>
  <weather34menumarkerbluegrey></weather34menumarkerbluegrey>&nbsp;<?php echo $lang['Weather Data Provided By']?>&nbsp;<?php echo $stationlocation?> Home Weather Station
  <?php echo "<img src=img/flags/".$flag.".svg width='15em' height='10em'>"?>

  </div>
  <div class="weather34refresh"><a href="<?php $_SERVER['PHP_SELF']; ?>"> <?php echo $weather34refreshicon;?></a></div></div>
  </main>
 </body><?php include_once('updater.php');include_once('menu.php');?><div id=lightningalert></div>