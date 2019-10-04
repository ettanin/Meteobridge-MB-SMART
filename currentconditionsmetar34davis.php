<!DOCTYPE html>
<title>weather34 current conditions</title>
<style>
uppercase{ text-transform:capitalize;}
</style>
<?php 


	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: August 2019	revised September 2019					  	                           #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################




//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('metar34get.php');error_reporting(0);$weather34["cloudbase"] = round((anyToC($weather["temp"]) - anyToC($weather["dewpoint"])) *400) ;
$result = date_sun_info(time(), $lat, $lon);$sunr=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);$suns=date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$sunr1=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);$suns1=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$tw=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);$twe=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);
$suns2 =date('G.i', $result['sunset']);$sunr2 =date('G.i', $result['sunrise']);$suns3 =date('G.i', $result['sunset']);$sunr3 =date('G.i', $result['sunrise']);$sunrisehour =date('G', $result['sunrise']);
$sunsethour =date('G', $result['sunset']);$twighlight_begin =date('G:i', $result['civil_twilight_begin']);$twighlight_end =date('G:i', $result['civil_twilight_end']);$now =date('G.i');
?>
<div class="moduleupdatetime">
<?php $forecastime=filemtime('jsondata/metar34.txt');$weather34wuurl = file_get_contents("jsondata/metar34.txt");if(filesize('jsondata/metar34.txt')<10){echo  $online;}
else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
<div class="cloudconverter">
<?php //cloudbase-weather34
if ($weather['temp_units']=='C' && $weather34["cloudbase"]>=1999){echo "<div class=cloudconvertercircle2000>Clouds<tyellow> ".round($weather34["cloudbase"])."</tyellow><smalltempunit2> ft</tblue><smalltempunit2>" ;}
else if ($weather['temp_units']=='C' && $weather34["cloudbase"]<1999){echo "<div class=cloudconvertercircle>Clouds<tblue> ".round($weather34["cloudbase"])."</tblue><smalltempunit2> ft</tblue><smalltempunit2>" ;}
else if ($weather['temp_units']=='F' && $weather34["cloudbase"]*0.3048>=609){echo "<div class=cloudconvertercircle2000>Clouds<tyellow> ".round($weather34["cloudbase"]*0.3048,0)."</tyellow><smalltempunit2> m<smalltempunit2>" ;}
else if ($weather['temp_units']=='F' && $weather34["cloudbase"]*0.3048<609){echo "<div class=cloudconvertercircle>Clouds<tblue> ".round($weather34["cloudbase"]*0.3048,0)."</tblue><smalltempunit2> m</tblue><smalltempunit2>" ;}
?></div></div><br>
<div class="cwxiconcurrent"><span1>
<?php 
//homeweatherstation weather34 current conditions using hardware values
//rain-weather34
if($weather["rain_rate"]>0 && $weather["wind_speed_avg"]>15){echo "<img rel='prefetch' src='css/icons/windyrain.svg' width='50' height='50' alt='weather34 windy rain icon'>";}
else if($weather["rain_rate"]>10){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60' height='50' alt='weather34 heavy rain icon'>";}
else if($weather["rain_rate"]>0){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60' height='50' alt='weather34 rain icon'>";}
else if($weather["rain_rate2"]>10){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60' height='50' alt='weather34 heavy rain icon'>";}
else if($weather["rain_rate2"]>0){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60' height='50' alt='weather34 rain icon'>";}
//fog-weather34
else if($weather["temp"] -$weather["dewpoint"] <0.8  && $now >$suns2 && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='60' height='50' alt='weather34 fog icon'>";}
else if($weather["temp"] -$weather["dewpoint"] <0.8  && $now <$sunr2 && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/nt_fog.svg' width='60' height='50' alt='weather34 fog icon'>";}
else if($weather["temp"] -$weather["dewpoint"] <0.8  && $weather["temp"]>5){echo "<img rel='prefetch' src='css/icons/fog.svg' width='60' height='50' alt='weather34 fog'>";}
//windy moderate-weather34
else if($weather["wind_speed_avg"]>=15 && $now >$suns2 && $sky_icon=='clear' ){echo "<img rel='prefetch' src='css/icons/nt_windyclear.svg' width='60' height='50' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>=15 && $now <$sunr2 && $sky_icon=='clear'){echo "<img rel='prefetch' src='css/icons/nt_windyclear.svg' width='60' height='50' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>=15 && $sky_icon=='clear'){echo "<img rel='prefetch' src='css/icons/windyclear.svg' width='60' height='50' alt='weather34 windy icon'>";}
//windy moderate-weather34
else if($weather["wind_speed_avg"]>=15 && $now >$suns2){echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='60' height='50' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>=15 && $now <$sunr2){echo "<img rel='prefetch' src='css/icons/nt_windy.svg' width='60' height='50' alt='weather34 windy icon'>";}
else if($weather["wind_speed_avg"]>=15){echo "<img rel='prefetch' src='css/icons/windy.svg' width='60' height='50' alt='weather34 windy icon'>";}
//metar with darksky fallback-weather34
else if(filesize('jsondata/metar34.txt')<160){
echo "<img rel='prefetch' src='css/icons/offline.svg'width='60' height='50' alt='weather34 offline icon'>";} 	
else echo "<img rel='prefetch' src='css/icons/".$sky_icon."' width='60' height='50'>";
?></div>
<div class="cwxiconsummary"><span>
<?php echo '';

//rain-weather34
if($weather["rain_rate"]>0 && $weather["wind_speed_avg"]>15){echo $lang['Wind']." & ". $lang['Rain']; echo '<br>';echo $lang['Showers-Metar'];}
else if($weather["rain_rate"]>=10){echo $lang['Heavy Rain-Metar']; echo '<br>';echo $lang['Showers-Metar'];}
else if($weather["rain_rate"]>=5){echo $lang['Moderate Rain-Metar']; echo '<br>';echo $lang['Showers-Metar'];}
else if($weather["rain_rate"]>0){echo $lang['Light Rain-Metar']; echo '<br>';echo $lang['Showers-Metar'];}
//fog-weather34
else if($weather["temp"] - $weather["dewpoint"] <0.5  && $now >$suns2 && $weather["temp"]>5){echo $lang['Foggy-Metar'].'<br>'.$lang['Conditions']. " $alert";}
else if($weather["temp"] - $weather["dewpoint"] <0.5  && $now <$sunr2 && $weather["temp"]>5) {echo $lang['Foggy-Metar'].'<br>'.$lang['Conditions']. " $alert";}
else if($weather["temp"] - $weather["dewpoint"] <0.5  && $weather["temp"]>5){echo $lang['Foggy-Metar'].'<br>'.$lang['Conditions']. " $alert";}

else if($weather["temp"] - $weather["dewpoint"] <0.8  && $now >$suns2 && $weather["temp"]>5){echo $lang['Misty-Metar'].'<br>'.$lang['Conditions']. " $alert";}
else if($weather["temp"] - $weather["dewpoint"] <0.8  && $now <$sunr2 && $weather["temp"]>5) {echo $lang['Misty-Metar'].'<br>'.$lang['Conditions']. " $alert";}
else if($weather["temp"] - $weather["dewpoint"] <0.8  && $weather["temp"]>5){echo $lang['Misty-Metar'].'<br>'.$lang['Conditions']. " $alert";}
//windy-weather34
else if($weather["wind_speed_avg"]>=45){echo $lang['Neargale'].'<br>'.$lang['Conditions']. " $alert";}
else if($weather["wind_speed_avg"]>=22){echo $lang['Windy'].'<br>'.$lang['Conditions']. " $alert";}
else if($weather["wind_speed_avg"]>=15){echo "Breezy <br>Conditions";}
else if(filesize('jsondata/metar34.txt')<160){echo "<uppercase>Conditions<br>Not Available</uppercase>";} 
//metar conditions-weather34
else echo '<uppercase>',$sky_desc.'</uppercase><br>'; 
?>
</span></div>
 <!-- weather34 Meteobridge generated Data--> 
<div class="averagestext">
<?php //weather34 average station data 
echo $lang['Average']." <oorange>".$lang['Temperature']."</oorange> ".$lang['Last Hour']." ";
if($weather["temp_avg"]>=20){echo "<oorange>" .$weather["temp_avg"]."</oorange>°<valuetext>".$tempunit;} 
else if($weather["temp_avg"]<=10){echo "<oblue>" .$weather["temp_avg"]."</oblue>°<valuetext>".$tempunit;}
else if($weather["temp_avg"]<20){echo "<ogreen>" .$weather["temp_avg"]."</ogreen>°<valuetext>".$tempunit;}echo "</valuetext><br>";

echo  "Max <oblue>".$lang['Windspeed']."</oblue> ";
if($weather["wind_speed_max"]>=50){echo "<ored>" .number_format($weather["wind_speed_max"],1)."</ored> ".$windunit;}
else if($weather["wind_speed_max"]>=30){echo "<oorange>" .number_format($weather["wind_speed_max"],1)."</oorange><valuetext> ".$windunit;}
else if($weather["wind_speed_max"]>=0){echo "<ogreen>" .number_format($weather["wind_speed_max"],1)."</ogreen><valuetext> ".$windunit;}

echo " </valuetext>".$lang['Last-Ten-Minutes']."";


echo  " <br>".$lang['Average']." <oblue>".$lang['Windspeed']." </oblue> ".$lang['Last Hour']." ";
if($weather["wind_speed_avg"]>=30){echo "<ored>" .number_format($weather["wind_speed_avg"],1)."</ored> ".$windunit;}
else if($weather["wind_speed_avg"]>=20){echo "<oorange>" .number_format($weather["wind_speed_avg"],1)."</oorange><valuetext> ".$windunit;}
else if($weather["wind_speed_avg"]>=0){echo "<ogreen>" .number_format($weather["wind_speed_avg"],1)."</ogreen><valuetext> ".$windunit;}


echo  "</valuetext><br>".$lang['Average']." ".$lang['Direction']." <oorange>";
if($weather["wind_direction_avg"]<=11.25){echo $lang['North'];}
else if($weather["wind_direction_avg"]<=33.75){echo $lang['NNE'];}
else if($weather["wind_direction_avg"]<=56.25){echo $lang['NE'];}
else if($weather["wind_direction_avg"]<=78.75){echo $lang['ENE'];}
else if($weather["wind_direction_avg"]<=101.25){echo $lang['East'];}
else if($weather["wind_direction_avg"]<=123.75){echo $lang['ESE'];}
else if($weather["wind_direction_avg"]<=146.25){echo $lang['SE'];}
else if($weather["wind_direction_avg"]<=168.75){echo $lang['SSE'];}
else if($weather["wind_direction_avg"]<=191.25){echo $lang['South'];}
else if($weather["wind_direction_avg"]<=213.75){echo $lang['SSW'];}
else if($weather["wind_direction_avg"]<=236.25){echo $lang['SW'];}
else if($weather["wind_direction_avg"]<=258.75){echo $lang['WSW'];}
else if($weather["wind_direction_avg"]<=281.25){echo $lang['West'];}
else if($weather["wind_direction_avg"]<=303.75){echo $lang['WNW'];}
else if($weather["wind_direction_avg"]<=326.25){echo $lang['NW'];}
else if($weather["wind_direction_avg"]<=348.75){echo $lang['NNW'];}
else{echo $lang['North'];}
echo " </oorange><oblue> ".$weather["wind_direction_avg"]."</oblue>°";

echo "</oorange><br><oblue>".$lang['Rainfall']."</oblue> ".$lang['Last Hour']." <oblue> " .$weather["rain_lasthour"]."</oblue><valuetext> " .$rainunit;
?></valuetext></div></div></div>