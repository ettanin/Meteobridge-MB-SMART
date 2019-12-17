<?php include_once('livedata.php');include('common.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />

<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php 
if ($weather["temp_units"]=='C'){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["temp_units"]=='C'){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer"]*50.6;}?>deg);z-index:200}
.weather34barometerarrow24{z-index:10;height:50%;-webkit-transform-origin:50% 100%;-o-transform-origin:50% 100%;transform-origin:50% 100%;z-index:10;}
.weather34barometerarrow24{-webkit-transform:rotate(<?php 
if ($weather["temp_units"]=='C' ){echo $weather["barometer_24h"]*0.02953*50.6;}
else if ($weather["temp_units"]=='F'){echo $weather["barometer_24h"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["temp_units"]=='C' ){echo $weather["barometer_24h"]*0.02953*50.6;}
else if ($weather["temp_units"]=='F'){echo $weather["barometer_24h"]*50.6;}?>deg);}
.weather34barometerarrow24{position:absolute;top:0;left:50%;margin-left:0;width:8px;-moz-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrow24:after{content:'';position:absolute;text-align:left;left:50%;top:0;width:0;height:0;-webkit-border-radius:0;border-radius:0;
    border-left:4px solid transparent;
    border-right:4px solid transparent;
    border-top:8px solid #00a4b3;
    border-bottom:0;
    -webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s;background:0;z-index:90;}
.weather34barometerarrow24:before{content:'24H';width:5px;height:5px;position:absolute;z-index:10;left:-5px;top:-15px;
    border:0;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;font-size:.65em;color:rgba(132, 151, 167, 1.000);font-family:Arial, Helvetica, sans-serif,system;}
valuetextba{font-size:1em}
</style>
<div class="modulecaptionpressure"><?php echo $lang['Barometer']?> <blue1><?php echo $weather["barometer_units"]?></blue1></div>
<div class=barometerpos >
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>

</div>
<div class="text2">
<?php echo "<blue>".$weather["barometer"],"</blue><span>".$weather["barometer_units"]."</span>";?> 
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


<?php 
//falling
if($weather["barometer_trend"]<0){echo '<div class=thetrendboxbluebaro>'.$lang['Falling'];
echo '&nbsp;'.$fallingsymbolx.'&nbsp; '.number_format($weather["barometer_trend"],2).' &nbsp;<smalltempunit2> '.$weather["barometer_units"];}
//rising
else if($weather["barometer_trend"]>0){echo '<div class=thetrendboxorangebaro>&nbsp;'.$lang['Rising'];
echo '&nbsp;'.$risingsymbolx.'&nbsp; + '.number_format($weather["barometer_trend"],2).' &nbsp;<smalltempunit2> '.$weather["barometer_units"];}
//steady
else echo '<div class=thetrendboxbluebaro>'.$lang['Steady'].''.$steadysymbol.'';?>
</smalltempunit2></div></div></div></div>

