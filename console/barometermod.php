<?php include_once('livedata.php');include('common.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />

<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.6;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.6;
}?>deg);z-index:99}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_min"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.6;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_min"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.6;
}?>deg);z-index:9}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_max"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.6;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_max"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.6;
}?>deg);z-index:9}
valuetextba{font-size:1em}valuetextbc{font-size:1.1em}valuetexttr{font-size:8px}
valuetextba{font-size:1em}
</style>
<div class="modulecaptionpressure"><?php echo $lang['Barometer']?> <blue1><?php echo $weather["barometer_units"]?></blue1></div>
<div class=barometerpos>
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div></div>
</div>

<div class="text2">
<?php echo "<blue>".$weather["barometer"],"</blue><span>".$weather["barometer_units"]."</span>";?>

<?php if ($weather["barometer_trend"] < 0) {
    echo '<div class="pressuretext" style="width:100px;">'.$fallingsymbol.' '.number_format($weather["barometer_trend"],2).'</div>';
} elseif ($weather["barometer_trend"] > 0) {
    echo '<div class="pressuretext" style="width:100px;">'.$risingsymbol.' +'.number_format($weather["barometer_trend"],2).'</div>';
} else {
    echo '<div class="pressuretext">Steady</div>';
}?>
</div>

<div class="heatcircle3">
<br><div class="consoleforecast">
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
$weather["vpforecasttext"]	=str_replace('becoming', '', $weather["vpforecasttext"]);
echo $weather["vpforecasttext"]	; ?></div></div>

<smalltempunit2></div></div></div>

<div class="maxbox"><orange>Max &nbsp;</orange> <?php echo $weather["barometer_max"] ?> <?php echo $weather["barometer_units"]; ?> <blue>&nbsp;<?php echo $weather["thb0seapressmaxtime"]; ?></div></blue>
<div class="minbox"><blue>Min &nbsp; </blue> <?php echo $weather["barometer_min"] ?> <?php echo $weather["barometer_units"]; ?> <blue>&nbsp;<?php echo $weather["thb0seapressmintime"]; ?></blue></div>
