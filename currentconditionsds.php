<?php  

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');?>
<?php error_reporting(0); 
$result = date_sun_info(time(), $lat, $lon);
$sunr=date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);
$suns=date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$sunr1=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $rise_zenith, $UTC);
$suns1=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, $set_zenith, $UTC);
$tw=date_sunrise(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);
$twe=date_sunset(strtotime('+1 day', time()), SUNFUNCS_RET_STRING, $lat, $lon, 96, $UTC);
$suns2 =date('G.i', $result['sunset']);
$sunr2 =date('G.i', $result['sunrise']);
$suns3 =date('G.i', $result['sunset']);
$sunr3 =date('G.i', $result['sunrise']);
$sunrisehour =date('G', $result['sunrise']);
$sunsethour =date('G', $result['sunset']);
$twighlight_begin =date('G:i', $result['civil_twilight_begin']);
$twighlight_end =date('G:i', $result['civil_twilight_end']);
$now =date('G.i');

		  $rainsvg= '<svg id="weather34 raindrop" x="0px" y="0px" viewBox="0 0 512 512" width="8px" fill="#01a4b5" stroke="#01a4b5" stroke-width="3%"><g><g><path d="M348.242,124.971C306.633,58.176,264.434,4.423,264.013,3.889C262.08,1.433,259.125,0,256,0	c-3.126,0-6.079,1.433-8.013,3.889c-0.422,0.535-42.621,54.287-84.229,121.083c-56.485,90.679-85.127,161.219-85.127,209.66
			C78.632,432.433,158.199,512,256,512c97.802,0,177.368-79.567,177.368-177.369C433.368,286.19,404.728,215.65,348.242,124.971z
			 M256,491.602c-86.554,0-156.97-70.416-156.97-156.97c0-93.472,123.907-263.861,156.971-307.658
			C289.065,70.762,412.97,241.122,412.97,334.632C412.97,421.185,342.554,491.602,256,491.602z"/></g></g><g>
	<g><path d="M275.451,86.98c-1.961-2.815-3.884-5.555-5.758-8.21c-3.249-4.601-9.612-5.698-14.215-2.45
			c-4.601,3.249-5.698,9.613-2.45,14.215c1.852,2.623,3.75,5.328,5.688,8.108c1.982,2.846,5.154,4.369,8.377,4.369
			c2.012,0,4.046-0.595,5.822-1.833C277.536,97.959,278.672,91.602,275.451,86.98z"/></g></g><g>	<g>
		<path d="M362.724,231.075c-16.546-33.415-38.187-70.496-64.319-110.213c-3.095-4.704-9.42-6.01-14.126-2.914
			c-4.706,3.096-6.01,9.421-2.914,14.127c25.677,39.025,46.9,75.379,63.081,108.052c1.779,3.592,5.391,5.675,9.148,5.675
			c1.521,0,3.064-0.342,4.517-1.062C363.159,242.241,365.224,236.123,362.724,231.075z"/>
	</g></svg>';
	

?><head>
<div class="moduleupdatetime">
<?php $forecastime=filemtime('jsondata/darksky.txt');
	$weather34wuurl = file_get_contents("jsondata/dark.txt");
	if(filesize('jsondata/darksky.txt')<1){echo "".$offline. " Offline<br>";}else echo $online,"";echo " ",	date($timeFormat,$forecastime);	?></div>
 <div class="darkskyiconcurrent">
 <span1><?php 
  
//lightning
if ($weather["lightningtimeago"]>0 && $weather["lightningtimeago"]<600 && $weather["rain_rate"]>0){echo "<img rel='prefetch' src='css/icons/tstorm.svg' width='60px' height='55px' alt='weather34 rain lightning icon'>";}
else if ($weather["lightningtimeago"]>0 && $weather["lightningtimeago"]<600 ){echo "<img rel='prefetch' src='css/icons/lightning.svg' width='60px' height='55px' alt='weather34 rain lightning icon'>";}
//rain
else if ($result <20 && $weather["rain_rate"]>0) {echo "<img rel='prefetch' src='css/icons/tstorm.svg' width='60px' height='55px' alt='weather34 lightning icon'>";}
else if ($result <20){echo "<img rel='prefetch' src='css/icons/lightning.svg' width='60px' height='55px' alt='weather34 lightning icon'>";}
//homeweatherstation weather34 current conditions using hardware values

//rain-weather34
else if($weather["rain_rate"]>10){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60px' height='55px' alt='weather34 heavy rain icon'>";}
else if($weather["rain_rate"]>0){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60px' height='55px' alt='weather34 rain icon'>";}

else if($weather["rain_rate2"]>10){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60px' height='55px' alt='weather34 heavy rain icon'>";}
else if($weather["rain_rate2"]>0){echo "<img rel='prefetch' src='css/icons/rain.svg' width='60px' height='55px' alt='weather34 rain icon'>";}


else if($now >$suns2){echo "
 <img rel='prefetch' src='css/darkskyicons/nt_".$darkskycurIcon.".svg' width='60px' height='55px' alt='weather34 icon'>";}
else if($now <$sunr2){echo "
 <img rel='prefetch' src='css/darkskyicons/nt_".$darkskycurIcon.".svg' width='60px' height='55px' alt='weather34icon'>";}
else echo "
 <img rel='prefetch' src='css/darkskyicons/".$darkskycurIcon.".svg' width='60px' height='55px' alt='weather34 icon'>";?> 
 
 </div></div><div class="darkskysummary"><span>
<?php 

echo '';
//lightning
if ($weather["lightningtimeago"]>0 && $weather["lightningtimeago"]<600){echo "<oorange>Nearby Lightning  ".$alert."</oorange> <br>".$lang['Conditions']."" ;}

//rain-weather34
else if($weather["rain_rate"]>=7){echo "".$lang['Heavyrain'].""; echo '<br>';echo "".$lang['Flooding']."";}
else if($weather["rain_rate"]>=5){echo "".$lang['Heavyrain'].""; echo '<br>';}
else if($weather["rain_rate"]>0){echo "".$lang['Rain']."";echo '<br>';}


//darksky conditions
else echo '<uppercase>',$darkskycurSummary.'<br>'.$lang['Conditions'].'</uppercase> '; ?>
</span></div>
<!-- weather34 Meteobridge generated Data--> 
<div class="averagestext" style="margin-top:75px">
<?php //weather34 average station data 
echo "Average <oorange>Temperature</oorange> last 60 minutes ";if($weather["temp_avg"]>=20){echo "<oorange>" .$weather["temp_avg"]."</oorange>°<valuetext>".$tempunit;} else if($weather["temp_avg"]<=10){echo "<oblue>" .$weather["temp_avg"]."</oblue>°<valuetext>".$tempunit;}else if($weather["temp_avg"]<20){echo "<ogreen>" .$weather["temp_avg"]."</ogreen>°<valuetext>".$tempunit;}echo "</valuetext><br>";
echo  "Max <oblue>Wind Speed</oblue> ";
if($weather["wind_speed_max"]>=50){echo "<ored>" .$weather["wind_speed_max"]."</ored> ".$windunit;}
else if($weather["wind_speed_max"]>=30){echo "<oorange>" .$weather["wind_speed_max"]."</oorange><valuetext> ".$windunit;}
else if($weather["wind_speed_max"]>=0){echo "<ogreen>" .$weather["wind_speed_max"]."</ogreen><valuetext> ".$windunit;}echo " </valuetext>last 10 minutes ";
echo  " <br>Average <oblue>Wind Speed</oblue> last 60 minutes ";if($weather["wind_speed_avg"]>=30){echo "<ored>" .$weather["wind_speed_avg"]."</ored> ".$windunit;}else if($weather["wind_speed_avg"]>=20){echo "<oorange>" .$weather["wind_speed_avg"]."</oorange><valuetext> ".$windunit;}
else if($weather["wind_speed_avg"]>=0){echo "<ogreen>" .$weather["wind_speed_avg"]."</ogreen><valuetext> ".$windunit;}
echo  "</valuetext><br>Average Direction <oorange>";
if($weather["wind_direction_avg"]<=11.25){echo "North";}else if($weather["wind_direction_avg"]<=33.75){echo "NNE";}else if($weather["wind_direction_avg"]<=56.25){echo "NE";}else if($weather["wind_direction_avg"]<=78.75){echo "ENE";}else if($weather["wind_direction_avg"]<=101.25){echo "East";}else if($weather["wind_direction_avg"]<=123.75){echo "ESE";}else if($weather["wind_direction_avg"]<=146.25){echo "SE";}
else if($weather["wind_direction_avg"]<=168.75){echo "SSE";}else if($weather["wind_direction_avg"]<=191.25){echo "South";}else if($weather["wind_direction_avg"]<=213.75){echo "SSW";}else if($weather["wind_direction_avg"]<=236.25){echo "SW";}else if($weather["wind_direction_avg"]<=258.75){echo "WSW";}else if($weather["wind_direction_avg"]<=281.25){echo "West";}else if($weather["wind_direction_avg"]<=303.75){echo "WNW";}else if($weather["wind_direction_avg"]<=326.25){echo "NW";}else if($weather["wind_direction_avg"]<=348.75){echo "NNW";}else{echo "North";}
echo " </oorange><oblue> ".$weather["wind_direction_avg"]."</oblue>°";
echo "</oorange><br><oblue>Rainfall</oblue> for the last hour <oblue> " .$weather["rain_lasthour"]."</oblue><valuetext> " .$rainunit;
?></valuetext></div></div></div>