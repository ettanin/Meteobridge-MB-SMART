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

<div class="maxbox"><orange>Max &nbsp;</orange> <?php echo $weather["barometer_max"] ?> <?php echo $weather["barometer_units"]; ?> <blue>&nbsp;<?php echo $weather["thb0seapressmaxtime"]; ?></div></blue>
<div class="minbox"><blue>Min &nbsp; </blue> <?php echo $weather["barometer_min"] ?> <?php echo $weather["barometer_units"]; ?> <blue>&nbsp;<?php echo $weather["thb0seapressmintime"]; ?></blue></div>


<div class=barometerpos >
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
<div class="text2"><?php echo "<blue>".$weather["barometer"],"</blue><span>".$weather["barometer_units"]."</span>";?> </div></div></div>

<div class="heatcircleindoor" style="margin-top:0px;margin-left:156px">
<div class="heatcircle-content"><?php echo date('Y')?> Max <blue><?php echo $weather["thb0seapressyearmaxtime"]?></blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome20-25c>". $weather["thb0seapressymax"]."<smalltempunit2>".$weather["barometer_units"];?></smalltempunit2></div></div>



<div class="heatcircle-content" style="margin-top:5px"><?php echo date('Y')?> Min <blue><?php echo $weather["thb0seapressyearmintime"]?></blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["thb0seapressymin"]."<smalltempunit2>".$weather["barometer_units"];?></smalltempunit2></div></div>


<div class="heatcircle-content" style="margin-top:5px"><?php echo $lang['Year']?> <orange>Max</orange>-<blue>Min</blue>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome15-20c style='font-size:.6rem'>". $weather["thb0seapressmmax"]."<smalltempunit2>".$weather["barometer_units"]."</smalltempunit2>&nbsp;|&nbsp; ";
echo $weather['thb0seapressmmin']."<smalltempunit2>".$weather["barometer_units"] 
?></smalltempunit2></div></div>

<div class="btrend">
<?php 
//falling
if($weather["barometer_trend"]<0){echo '';echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["barometer_trend"],2).'</blue>';}
//rising
else if($weather["barometer_trend"]>0){echo '&nbsp;';echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["barometer_trend"],2).'</orange>';}
//steady
else echo $lang['Steady'].''.$steadysymbol.'';?>
</div></div></div></div>


</div><div>



