<?php include_once('livedata.php');include('common.php');error_reporting(0); date_default_timezone_set($TZ);
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
	####################################################################################################
	#	METEOBRIDGE WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17-18-19                          #
	#	CREATED FOR MB-SMART TEMPLATE at https://weather34.com/homeweatherstation/  				   # 
	# 	Precipitation FORECAST:  Released November 2019										           #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//start the wu output
$json='jsondata/wuforecast.txt';
$weather34wuurl=file_get_contents($json);
$parsed_weather34wujson = json_decode($weather34wuurl,false);
{    if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[1];	
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[1];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[1];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[1];	 
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];	 
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 
	 }	 
	 else {
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[0];	
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[0];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[0];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[0];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[0];	 
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[0];	 
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[0];	  
	 }
	 $wuskydaynight1 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydaynight2 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[2]; 
	 //rain
	 $wuskyrain1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];	
	 //snow
	 $wuskysnow1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	
	 
	 }?>
<div class="moduleupdatetime"><span><?php if(file_exists('jsondata/wuforecast.txt') && time() - filemtime('jsondata/wuforecast.txt')<1800) {
  echo $online." ".date($timeFormat, filemtime('jsondata/wuforecast.txt'));
  } else {
  echo $offline. '<offline> Offline </offline>';
  }?></div> 
<div class="airqualitywordbig">Precipitation</div>
<div class="tempconverter2">
<?php //WEATHER34 type
if ($wuskydayPrecipProb>=0){echo "<div class=tempconvertercircleblue style='text-transform:uppercase;'>".$wuskydayPrecipType; }
?>
</div></div></div>

<div class="airqualitymoduleposition">
<div class="tempcontainer">
<?php //WEATHER34 probability
if ($wuskydayPrecipProb>=0){echo "<div class=air300 style='background:RGBA(1,164,181,1.00)'>".$wuskydayPrecipProb."%"; }
?></div>
<div style="postion:absolute;margin-left:-10px;margin-top:10px;font-size:.7em;z-index:999;">
<?php 
 //WEATHER34 probability description
 if ($wuskydayPrecipProb>=70){echo "&nbsp;High Probability";}
 else if ($wuskydayPrecipProb>=40){echo "Medium Probability";}
 else if ($wuskydayPrecipProb>=20){echo "Possible Probability";}
 else if ($wuskydayPrecipProb>=0){echo "&nbsp;&nbsp;Low Probability";}
 ?>
 <blue>
 <?php 
 if ($wuskydaysnow>=0){ echo $wuskydaysnow ." cm";}
 else if ($wuskydayprecipIntensity>=0){ echo $wuskydayprecipIntensity ." ".$rainunit;} 
 ?>
 </blue>
</div></div></div>

</body>