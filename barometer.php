<?php include_once('livedata.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />


<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php 
if ($weather["temp_units"]=='C'){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["temp_units"]=='C'){echo $weather["barometer"]*0.02953*50.6;}else if ($weather["temp_units"]=='F'){echo $weather["barometer"]*50.6;}?>deg);z-index:200}

.weather34barometerarrow24{z-index:10;height:50%;-webkit-transform-origin:50% 100%;-o-transform-origin:50% 100%;z-index:10;}
.weather34barometerarrow24{-webkit-transform:rotate(<?php 
if ($weather["temp_units"]=='C' ){echo $weather["barometer_24h"]*0.02953*50.6;}
else if ($weather["temp_units"]=='F'){echo $weather["barometer_24h"]*50.6;}?>deg);
transform:rotate(<?php if ($weather["temp_units"]=='C' ){echo $weather["barometer_24h"]*0.02953*50.6;}
else if ($weather["temp_units"]=='F'){echo $weather["barometer_24h"]*50.6;}?>deg);}
.weather34barometerarrow24{position:absolute;top:0;left:50%;margin-left:0;width:8px;-moz-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%}
.weather34barometerarrow24:after{content:'';position:absolute;text-align:left;left:50%;top:0;width:0;height:0;-webkit-border-radius:0;border-radius:0;border-left:4px solid transparent;border-right:4px solid transparent;border-top:8px solid rgba(6, 162, 177, 1.000);border-bottom:0;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s;background:0;z-index:90;}
.weather34barometerarrow24:before{content:'24H';width:5px;height:5px;position:absolute;z-index:10;left:-2px;top:-16px;border:0;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;font-size:.65em;color:rgba(132, 151, 167, 1.000);font-family:Arial, Helvetica, sans-serif,system;}
valuetextba{font-size:1em}
</style>

<div class="moduleupdatetime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo '<offlinenew></offlinenew> Offline';else echo "<onlinenew></onlinenew> ".$weather["time"];?></div> 
<div class='maxpressure'><a class="weather34tipmax" data-weather34tipmax="<?php echo "Max ".$weather["thb0seapressymax"]." ".$weather["barometer_units"]."&nbsp; ".$weather["thb0seapressyearmaxtime"]?>">
<?php echo '<valuetext>Max ('.$weather["thb0seapressmaxtime"].')<br><maxred>',$weather["barometer_max"],'&nbsp;</maxred><pressureunits>',$weather["barometer_units"],' </pressureunits></supmb></valuetext></div>';?></a></div>
<div class='minpressure'><a class="weather34tipmin" data-weather34tipmin="<?php echo "Min ".$weather["thb0seapressymin"]." ".$weather["barometer_units"]."&nbsp; ".$weather["thb0seapressyearmintime"]?>">
<?php echo '<valuetext>Min ('.$weather["thb0seapressmintime"].')<br><minblue>',$weather["barometer_min"],'&nbsp;</minblue><pressureunits>',$weather["barometer_units"],' </pressureunits></valuetext></div>';?></a></div>
<div class="trendpressure">
<?php  echo "<valuetext>&nbsp;Tendency (hr)";
if ($weather["barometer_trend"] < 0) {echo '<fall> '.$fallingsymbol.'&nbsp;</fall><valuetextba>';
echo number_format($weather["barometer_trend"],2), '</valuetextba><pressureunits>';}
else if ($weather["barometer_trend"] > 0) {
echo '<rising><rise> '.$risingsymbol.'&nbsp;</rise><valuetextba>+ ';echo number_format($weather["barometer_trend"],2), ' </valuetextba>';}
else echo '<ogreen> '.$steadysymbol.'</ogreen><valuetextba>'.number_format($weather["barometer_trend"],2).'</valuetextba></div>';?></valuetext>
</div>
<div class="barometerconverter">
<?php echo "";
if ($weather["temp_units"]=='C'){echo "<div class=barometerconvertercircleblue>" .number_format($weather["barometer"]*0.029529983071445,2),"<smallrainunit>inHg</smallrainunit>";}
else if ($weather["temp_units"]=='F'){echo "<div class=barometerconvertercircleblue>".round($weather["barometer"]*33.863886666667,1),"<smallrainunit>hPa</smallrainunit>";}
?></div></div>

<div class=barometerpos>
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrow24"></div>

</div>
<div class="text2">
<?php if ($weather["barometer_trend"]>20){echo '<div class="pressuretext"> <ogreen>Steady</ogreen> </div>';}
else if ($weather["barometer_trend"] < -1.3) {
echo '<div class="pressuretextfast"><oblue>Falling Rapidly</oblue> <fall> '.$fallingsymbol.'</fall></div>';}
else if ($weather["barometer_trend"] < 0) {
echo '<div class="pressuretext"><oblue>Falling</oblue> <fall> '.$fallingsymbol.'</fall></div>';}
else if ($weather["barometer_trend"] > 1.3) {
echo '<div class="pressuretextfast">Rising Rapidly<rise> '.$risingsymbol.' </rise></div>';}	  
else if ($weather["barometer_trend"] > 0) {
echo '<div class="pressuretext"> <oorange>Rising</orange> <rise> '.$risingsymbol.' </rise></div>';}	  
else echo '<div class="pressuretext"> <ogreen>Steady</ogreen> </div>';?>
<?php echo "<darkgrey>".$weather["barometer"],"</darkgrey>&nbsp;<span>".$weather["barometer_units"]."</span>";?>
</div></div></div>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["temp_units"]=='C'){echo "<weather34-barometerlimitmin><value>950</weather34-barometerlimitmin><weather34-barometerlimitmax><value>1050</weather34-barometerlimitmax>";}
else echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";?></div></div></div>

<?php //WEATHER34 pure css temperature dense fog pop up alert 
 if($weather["lightning2timeago"]>180 && $weather["temp"] -$weather["dewpoint"] <0.5){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "<img rel='prefetch' src='css/icons/foggywarning.svg' width='30px' alt='weather34 foggy'>Dense Fog Conditions <br><notifyblue>Caution Required<notifyblue>"?>
<?php ;}?></notifyorange></div></div>
<?php //WEATHER34 pure css temperature fog pop up alert 
 if($weather["lightning2timeago"]>180 && $weather["temp"] -$weather["dewpoint"] <1.2){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "<img rel='prefetch' src='css/icons/foggywarning.svg' width='30px' alt='weather34 foggy'>Fog Conditions <br>Developing <notifyblue>Caution<notifyblue>"?>
<?php ;}?></notifyorange></div></div>
<?php //WEATHER34 pure css temperature heat index above 30c/84F  pop up alert 
 if($weather["lightning2timeago"]>180 && anyToC($weather["heat_index"])>=30){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "Heat Index Caution<br>Heat Exhaustion <notifyorange> <value>" .$weather["heat_index"],"&deg;",$weather["temp_units"]?>
<?php ;}?></value></notifyorange></div></div>
<?php //WEATHER34 pure css temperature UVINDEX 8+
 if($weather["lightning2timeago"]>180 && anyToC($weather["uv"])>=8){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content"><?php echo "<notifyorange> <value>" .number_format($weather["uv"],1). "</value></notifyorange> UVINDEX <br>Reduce Sun Exposure" ?>
<?php ;}?></div></div>
<?php //WEATHER34 pure css wind gusts of 40kmh  pop up alert 
 if($weather["lightning2timeago"]>180 && $weather["wind_speed_max"]*$toKnots>=26 && $weather["wind_gust_speed"]*$toKnots<33){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "Wind Gusts Strong <br>Caution <notifyorange> <value>" .$weather["wind_speed_max"]," ", $weather["wind_units"]?>
<?php ;}?></value></notifyorange></div></div>
<?php //WEATHER34 pure css wind gusts of Gale Force  pop up alert 
 if($weather["lightning2timeago"]>180 && $weather["wind_gust_speed"]*$toKnots>=33){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "Wind Gusts Reaching <br>Gale Force  <notifyorange><value>" .$weather["wind_gust_speed"],"</notifyorange> ", $weather["wind_units"];?>
<?php ;}?></value>


<?php //WEATHER34 pure css ISS battlery low  pop up alert 
 if($weather['outdoorbattery']==1){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content">     
<?php echo "Outside Station Battery is Low   <notifyorange><value>Replace </notifyorange><span style='position:absolute;top:14px;'>".$weather34batterylow."";?>
<?php ;}?></value>
<?php //WEATHER34 pure css temperature  below 0c/32F  pop up alert 
 if($weather["lightning2timeago"]>180 && anyToC($weather["temp"])<0){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content"><?php echo $freezing."Temperature Caution<br>Below Freezing <notifyblue><value>" .$weather["temp"],"&deg;",$weather["temp_units"]?>
<?php ;}?></notifyblue></div></div>
<?php //WEATHER34 pure css temperature dewpoint below 0c/32F  pop up alert 
 if($weather["lightning2timeago"]>180 && anyToC($weather["dewpoint"])>=0 && anyToC($weather["dewpoint"])<1){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content"><?php echo $freezing." Dewpoint Caution<br>Near Freezing <notifyblue> <value>" .$weather["dewpoint"]," &deg;",$weather["temp_units"]?>
<?php ;}?></value></notifyblue></div></div>
<?php //WEATHER34 pure css temperature dewpoint below 0c/32F  pop up alert 
 if($weather["lightning2timeago"]>180 && anyToC($weather["dewpoint"])<0){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content"><?php echo $freezing." Dewpoint Caution<br>Below Freezing <notifyblue><value>" .$weather["dewpoint"],"&deg;",$weather["temp_units"]?>
<?php ;}?></value></notifyblue></div></div>
<?php //WEATHER34 pure css temperature dewpoint below 0c/32F  pop up alert 
 if($weather["lightning2timeago"]>180 && anyToC($weather["dewpoint"])<0){?><div id="weather34lightningdialog-notify">  <div class="weather34lightningdialog-box">
<div class="weather34lightningbackground-alert"></div><div class="header"> <div class="weather34lightningbackground-alert"></div>
<div class="weather34lightningcontents"><div class="left"><?php echo $notification ?> Notification</div>
<div class="right"><?php echo date ("D H:i")?></div></div></div>
<div class="weather34lightningcontents weather34lightningmain-content"><?php echo $freezing." Dewpoint Caution<br>Below Freezing <notifyblue><value>" .$weather["dewpoint"],"&deg;",$weather["temp_units"]?>
<?php ;}?></value></notifyblue></div></div>