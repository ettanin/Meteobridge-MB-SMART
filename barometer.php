<?php 

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################


//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include_once('common.php');include_once('livedata.php');
# 27th Jan 2019 file edited by Ken True based on barometer units for non standard configurations by lightmaster https://www.wxforum.net/index.php?topic=36011.0
header('Content-type: text/html; charset=utf-8');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa"){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa"){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer"]*50.6;}?>deg);z-index:99}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_min"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_min"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_min"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_min"]*50.6;}?>deg);z-index:9}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php 
if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_max"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_max"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa" ){echo $weather["barometer_max"]*0.02953*50.6;}else if ($weather["barometer_units"]=='inHg'){echo $weather["barometer_max"]*50.6;}?>deg);z-index:9}
valuetextba{font-size:1em}valuetextbc{font-size:1.1em}valuetexttr{font-size:8px}
</style>
<div class="moduleupdatetime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>

<div class='maxpressure'><a class="weather34tipmax" data-weather34tipmax="<?php echo "Max ".$weather["thb0seapressymax"]." ".$weather["barometer_units"]."&nbsp; ".$weather["thb0seapressyearmaxtime"]?>">
<?php echo '<valuetext>Max ('.$weather["thb0seapressmaxtime"].')<br><maxred>',$weather["barometer_max"],'&nbsp;</maxred><pressureunits>',$weather["barometer_units"],' </pressureunits></supmb></valuetext></div>';?></a></div>
<div class='minpressure'><a class="weather34tipmin" data-weather34tipmin="<?php echo "Min ".$weather["thb0seapressymin"]." ".$weather["barometer_units"]."&nbsp; ".$weather["thb0seapressyearmintime"]?>">
<?php echo '<valuetext>Min ('.$weather["thb0seapressmintime"].')<br><minblue>',$weather["barometer_min"],'&nbsp;</minblue><pressureunits>',$weather["barometer_units"],' </pressureunits></valuetext></div>';?></a></div>



<div class="trendpressure">
<?php  echo "<valuetexttr>".$lang['Last Hour']."<valuetexttr>";
if ($weather["barometer_trend"] < 0) {echo '<br><fall> '.$fallingsymbol.'</fall>&nbsp;<valuetextba>';
echo number_format($weather["barometer_trend"],3), '</valuetextba><pressureunits>';}
else if ($weather["barometer_trend"] > 0) {
echo '<br><rising><rise> '.$risingsymbol.'&nbsp;</rise>+<valuetextba> ';echo number_format($weather["barometer_trend"],3), ' </valuetextba>';}
else echo '<br><ogreen> '.$steadysymbol.'</ogreen><valuetextba>'.number_format($weather["barometer_trend"],3).'</valuetextba></div>';?></valuetext>
</div>
<div class="barometerconverter">
<?php echo "";
if ($weather["temp_units"]=='C'){echo "<div class=barometerconvertercircleblue>" .number_format($weather["barometer"]*0.029529983071445,3),"<smallrainunit>inHg</smallrainunit>";}
else if ($weather["temp_units"]=='F'){echo "<div class=barometerconvertercircleblue>".round($weather["barometer"]*33.863886666667,1),"<smallrainunit>hPa</smallrainunit>";}
?></div></div>
<div class=barometerpos>
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
<div class="text2"><?php if ($weather["barometer_trend"]>20){echo '<div class="pressuretext"> <ogreen>Steady</ogreen> </div>';}
else if ($weather["barometer_trend"] < 0) {
echo '<div class="pressuretext"> <oblue>'.$lang['Falling'].'</oblue> <fall> '.$fallingsymbol.'</fall></div>';}
else if ($weather["barometer_trend"] > 0) {
echo '<div class="pressuretext"> <oorange>'.$lang['Rising'].'</orange> <rise> '.$risingsymbol.' </rise></div>';}
else echo '<div class="pressuretext"> <ogreen>'.$lang['Steady'].'</ogreen> </div>';?>
<?php echo "<darkgrey>".$weather["barometer"],"&nbsp;<span>".$weather["barometer_units"]."</span>";?>
</div></div></div>


</span>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["barometer_units"]=='mb' OR $weather["barometer_units"]=="hPa"){echo "<weather34-barometerlimitmin><value>950</weather34-barometerlimitmin><weather34-barometerlimitmax><value>1050</weather34-barometerlimitmax>";}
else echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";?></div></div></div>

<?php //WEATHER34 pure css UV-Index above 8  pop up alert 
 if ($notifications=='yes' && $weather["uv"]>=8){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "UV-Index Caution<br>Reduce Sun Exposure <notifyorange>" .$weather["uv"],"</notifyorange>",$uvisvg?>
<?php ;}?></div></div>
<?php //WEATHER34 pure css temperature heat index above 30c/84F  pop up alert 
 if($notifications=='yes' && anyToC($weather["heat_index"])>=30){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "Heat Index Caution<br>Heat Exhaustion <notifyorange>" .$weather["heat_index"],"&deg;",$weather["temp_units"]?>
<?php ;}?></notifyorange></div></div>
<?php //WEATHER34 pure css wind gusts of 40kmh to Gale Force pop up alert 
 if($notifications=='yes' && $weather["wind_speed"]*$toKnots>23){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php if($notifications=='yes' && $weather["wind_gust_speed"]*$toKnots>34) {echo "Wind Gusts Reaching <br>Gale Force  <notifyorange>" .$weather["wind_gust_speed"],"</notifyorange> ", $weather["wind_units"];}
else if( $notifications=='yes' && $weather["wind_speed"]*$toKnots>34) {echo "Wind Gusts Reaching <br>Gale Force  <notifyorange>" .$weather["wind_speed"],"</notifyorange> ", $weather["wind_units"];}
else echo "Wind Gusts Becoming Strong Caution Required <notifyorange>" .$weather["wind_speed"],"</notifyorange> ", $weather["wind_units"]?>
<?php ;}?></div></div>

<?php //WEATHER34 pure css temperature  below 0c/32F  pop up alert 
 if($notifications=='yes' && anyToC($weather["temp"])<0){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content"><?php echo $freezing."Temperature Caution<br>Below Freezing <notifyblue>" .$weather["temp"],"&deg;",$weather["temp_units"]?>
<?php ;}?></notifyblue></div></div>

<?php //WEATHER34 pure css near freezing dewpoint below 0c/32F  pop up alert 
 if($notifications=='yes' && anyToC($weather["dewpoint"])<0){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content"><?php echo $freezing."Dewpoint Caution<br>Below Freezing <notifyblue>" .$weather["dewpoint"],"&deg;",$weather["temp_units"]?>
<?php ;}?>

</div></div></div>
</notifyblue></div></div>
<?php //WEATHER34 pop up alert 
  if ($weather["mbplatform"]=="VOCORE2" || $weather["mbplatform"]=="CARAMBOLA2"){echo "";}
  else if ($weather["mbplatform"]="  "){?>  
<div style=";position:absolute;font-size:.8em;color:white;margin-left:0px;z-index:9999999;text-align:left;width:180px;top:420px;background:#01a4b5;border-radius:3px;padding:5px;"> THE HARDWARE LOGGER DEVICE/SOFTWARE IS NOT COMPATIBLE WITH THIS TEMPLATE </div>
<?php ;}?>