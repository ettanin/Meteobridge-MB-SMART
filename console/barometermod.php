<?php include_once('livedata.php');include('common.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />

<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.5;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.5;
}?>deg);z-index:99}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_min"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.5;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_min"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.5;
}?>deg);z-index:9}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_max"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.5;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_max"]*0.02953*50.5;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.5;
}?>deg);z-index:9}
valuetextba{font-size:1em}valuetextbc{font-size:1.1em}valuetexttr{font-size:8px}
</style>
<div class="modulecaptionpressure">Pressure &nbsp;<blue1><?php echo $weather["barometer_units"]?></blue1></div>



<div class=barometerpos >
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
<div class="text2"><?php echo "<blue>".$weather["barometer"],"</blue><smalltempunit2>".$weather["barometer_units"]."</smalltempunit2>";?>

<thetrend>
<?php 
//falling
if($weather["barometer_trend"]<0){echo $fallingsymbolx.' <blue>'.number_format($weather["barometer_trend"],2).'</blue>';}
//rising
else if($weather["barometer_trend"]>0){echo $risingsymbolx.' <orange> + '.number_format($weather["barometer_trend"],2).'</orange>';}
//steady
else echo 'Steady'.$steadysymbol.'';?>
</thetrend>
</div></div></div>

<div class="heatcircleindoor" style="margin-top:-3px;margin-left:156px">
<div class="heatcircle-content"><?php echo date('Y')?> Max <blue><?php echo $weather["thb0seapressyearmaxtime"]?></blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome20-25c>". $weather["thb0seapressymax"]."<smalltempunit2>".$weather["barometer_units"];?></smalltempunit2></div></div>



<div class="heatcircle-content" style="margin-top:5px"><?php echo date('Y')?> Min <blue><?php echo $weather["thb0seapressyearmintime"]?></blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["thb0seapressymin"]."<smalltempunit2>".$weather["barometer_units"];?></smalltempunit2></div></div>


<div class="heatcircle-content" style="margin-top:5px"><?php echo $lang['Today']?> <orange>Max</orange>-<blue>Min</blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome15-20c style='font-size:.6rem'>". $weather["barometer_max"]."<smalltempunit2>".$weather["barometer_units"]."</smalltempunit2>&nbsp;|&nbsp; ";
echo $weather["barometer_min"]."<smalltempunit2>".$weather["barometer_units"] 
?></smalltempunit2></div></div>

<?php
//weather34 console vue-vp2 Davis forecast icon
if (preg_match("/Snow/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<-1)  {echo '<img rel="prefetch" src="forecasticons/snow.svg" class="consoleicon1"  alt="snow forecasted" title="snow forecasted">';} 
else if (preg_match("/Sleet/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<1)  {echo '<img rel="prefetch" src="forecasticons/sleet.svg" class="consoleicon1" alt="sleet forecasted" title="sleet forecasted">';} 
else if (preg_match("/Rain/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon1" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Precipitation/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon1" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Windy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/windy.svg" class="consoleicon1" alt="windy forecasted" title="windy forecasted">';} 
else if (preg_match("/clear/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/clear.svg" class="consoleicon1" alt="clear forecasted" title="clear forecasted">';}
else if (preg_match("/Partly/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/partly-cloudy-day.svg" class="consoleicon1" alt="partly cloudy forecasted" title="partly cloudy forecasted">';} 
else if (preg_match("/Mostly cloudy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/mostlycloudy.svg" class="consoleicon1" alt="mostly cloudy forecasted" title="mostly cloudy forecasted">';} 
else if (preg_match("/Scattered/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/scatteredclouds.svg" class="consoleicon1" alt="scattered clouds forecasted" title="scattered clouds forecasted">';} 
?>