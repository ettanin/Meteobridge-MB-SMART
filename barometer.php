<?php
    ####################################################################################################
    #	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   
    # https://weather34.com/homeweatherstation/index.html 											   
    # 	                                                                                               
    # 	Release: July 2019	Revised November 2019					  	                                                   
    # 	                                                                                               
    #   https://www.weather34.com 	                                                                   
    ####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include_once('common.php');include_once('livedata.php');
# 27th Jan 2019 file edited by Ken True based on barometer units for non standard configurations by lightmaster https://www.wxforum.net/index.php?topic=36011.0
header('Content-type: text/html; charset=utf-8');?>
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
</style>
<div class="moduleupdatetime"><span><?php if (file_exists($livedata)&&time()- filemtime($livedata)>300) {
    echo $offline. '<offline> Offline </offline>';
} else {
    echo $online." ".$weather["time"];
}?></div>

<div class='maxpressure'>
<?php echo '<valuetext> Hi ('.$weather["thb0seapressmaxtime"].')<br><maxred>',$weather["barometer_max"],'&nbsp;</maxred><pressureunits>',$weather["barometer_units"],' </pressureunits></supmb></valuetext></div>';?></div>
<div class='minpressure'>
<?php echo '<valuetext> Lo ('.$weather["thb0seapressmintime"].')<br><minblue>',$weather["barometer_min"],'&nbsp;</minblue><pressureunits>',$weather["barometer_units"],' </pressureunits></valuetext></div>';?></div>

<div class="trendpressure">
<?php  echo "<valuetexttr>".$lang['Last Hour']."<valuetexttr>";
if ($weather["barometer_trend"] < 0) {
    echo '<br><fall> '.$fallingsymbol.'</fall>&nbsp;<valuetextba>';
    echo number_format($weather["barometer_trend"], 3), '</valuetextba><pressureunits>';
} elseif ($weather["barometer_trend"] > 0) {
    echo '<br><rising><rise> '.$risingsymbol.'&nbsp;</rise>+<valuetextba> ';
    echo number_format($weather["barometer_trend"], 3), ' </valuetextba>';
} else {
    echo '<br><ogreen> '.$steadysymbol.'</ogreen><valuetextba>'.number_format($weather["barometer_trend"], 3).'</valuetextba></div>';
}?></valuetext>
</div>
<div class="barometerconverter">
<?php echo "";
if ($weather["temp_units"]=='C') {
    echo "<div class=barometerconvertercircleblue>" .number_format($weather["barometer"]*0.029529983071445, 3),"<smallrainunit>inHg</smallrainunit>";
} elseif ($weather["temp_units"]=='F') {
    echo "<div class=barometerconvertercircleblue>".round($weather["barometer"]*33.863886666667, 1),"<smallrainunit>hPa</smallrainunit>";
}
?></div></div>
<div class=barometerpos>
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>
<div class="text2"><?php if ($weather["barometer_trend"]>20) {
    echo '<div class="pressuretext"> <ogreen>Steady</ogreen> </div>';
} elseif ($weather["barometer_trend"] < 0) {
    echo '<div class="pressuretext"> <oblue>'.$lang['Falling'].'</oblue> <fall> '.$fallingsymbol.'</fall></div>';
} elseif ($weather["barometer_trend"] > 0) {
    echo '<div class="pressuretext"> <oorange>'.$lang['Rising'].'</orange> <rise> '.$risingsymbol.' </rise></div>';
} else {
    echo '<div class="pressuretext"> <ogreen>'.$lang['Steady'].'</ogreen> </div>';
}?>
<?php echo "<darkgrey>".$weather["barometer"],"&nbsp;<span>".$weather["barometer_units"]."</span>";?>
</div></div></div>
</span>
<div class="barometerlimits"><div class='weather34-barometerruler'>
<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo "<weather34-barometerlimitmin><value>950</weather34-barometerlimitmin><weather34-barometerlimitmax><value>1050</weather34-barometerlimitmax>";
} else {
    echo "<weather34-barometerlimitminf><value>28</barometerlimitminf><weather34-barometerlimitmaxf><value>31</weather34-barometerlimitmaxf>";
}?></div></div></div>