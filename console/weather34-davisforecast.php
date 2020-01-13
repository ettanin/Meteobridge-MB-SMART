<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 										       #
	# 	     MB SMART Version Revised September 2019 								                   #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');header('Content-type: text/html; charset=utf-8');	?>
<div class="moonblock">
<div class="consoleforecast">
<?php  //weather34 script Davis forecast outlook
$weather["vpforecasttext"]	=str_replace('within', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('ending', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('likely', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('with', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('possible', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and warmer.', '<oorange>Warmer </oorange>period expected .<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and cooler.', '<blue>Cooler </blue>period expected.<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and ending', 'for', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('to the', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('shift', 'becoming', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('wind shifting', 'shifting', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('wind becoming', 'becoming', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Windy', '<oorange>Windy</oorange>', $weather["vpforecasttext"]);
if (anyToC($weather["temp"])<-1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Risk of <blue>Snow</blue>.', $weather["vpforecasttext"]);}
else if (anyToC($weather["temp"])<1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue> & <blue>Sleet</blue>.', $weather["vpforecasttext"]);}
$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Increasing clouds', 'Periods of <blue>Scattered Clouds</blue><br> ', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and windy', '<oorange>Windy</oorange>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly clear', '<oorange>Mostly Clear </oorange> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Partly cloudy', '<blue>Partly Cloudy</blue> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly cloudy', '<blue>Mostly Cloudy </blue> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('24 to 48 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('6 to 12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 to 24 hours', '', $weather["vpforecasttext"]);  
$weather["vpforecasttext"]	=str_replace('48 to 72 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('6 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South West', 'SW', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South East', 'SE', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('W, NW, or N', 'W,NW,to N', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('little temperature change.', 'No <oorange>Significant </oorange> change in temperature.<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace(', possibly heavy at times', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('becoming', '', $weather["vpforecasttext"]);echo $weather["vpforecasttext"]; 

//weather34 console vue-vp2 Davis forecast icon
if (preg_match("/Snow/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<-1)  {echo '<img rel="prefetch" src="forecasticons/snow.svg" class="consoleicon"  alt="snow forecasted" title="snow forecasted">';} 
else if (preg_match("/Sleet/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<1)  {echo '<img rel="prefetch" src="forecasticons/sleet.svg" class="consoleicon" alt="sleet forecasted" title="sleet forecasted">';} 
else if (preg_match("/Rain/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Precipitation/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Windy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/windy.svg" class="consoleicon" alt="windy forecasted" title="windy forecasted">';} 
else if (preg_match("/clear/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/clear.svg" class="consoleicon" alt="clear forecasted" title="clear forecasted">';}
else if (preg_match("/Partly/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/partly-cloudy-day.svg" class="consoleicon" alt="partly cloudy forecasted" title="partly cloudy forecasted">';} 
else if (preg_match("/Mostly cloudy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/mostlycloudy.svg" class="consoleicon" alt="mostly cloudy forecasted" title="mostly cloudy forecasted">';} 
else if (preg_match("/Scattered/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/scatteredclouds.svg" class="consoleicon" alt="scattered clouds forecasted" title="scattered clouds forecasted">';} 

?></div></div>