<?php include_once('livedata.php');?>
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
.weather34barometerarrow24:after{content:'';position:absolute;text-align:left;left:50%;top:0;width:0;height:0;-webkit-border-radius:0;border-radius:0;border-left:4px solid transparent;border-right:4px solid transparent;border-top:8px solid rgba(6, 162, 177, 1.000);border-bottom:0;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s;background:0;z-index:90;}
.weather34barometerarrow24:before{content:'24H';width:5px;height:5px;position:absolute;z-index:10;left:-2px;top:-16px;border:0;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;font-size:.65em;color:rgba(132, 151, 167, 1.000);font-family:Arial, Helvetica, sans-serif,system;}
valuetextba{font-size:1em}
</style>
<div
style="position:relative;left:-75px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:140px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-60px">
Pressure <blue><?php echo $weather["barometer_units"]?></blue></div>
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
else echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";?></div></div></div></div></div></div>



<div class="heatcircle3"><div class="heatcircle-content"><valuetextheading1>Max Today</valuetextheading1>

<?php  //heat-index/real feel
echo "<br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["barometer_max"]." <smalltempunit2>hPa";

?><smalltempunit2></div></div></div>


<div class="heatcircle4"><div class="heatcircle-content"><valuetextheading1>Low Today</valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["barometer_min"]." <smalltempunit2>hPa";
?>
</smalltempunit2></div></div></div></div>