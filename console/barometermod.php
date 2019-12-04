<?php require_once('livedata.php');require_once('common.php');?>
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
<div class="modulecaptionpressure" ><?php echo $lang['Barometer']?> <blue1><?php echo $weather["barometer_units"]?></blue1></div>
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
<?php echo "<blue>".$weather["barometer"],"</blue>&nbsp;<span>".$weather["barometer_units"]."</span>";?>
</div></div></div>
</span>
</div></div>

<div class="heatcircle3"><div class="heatcircle-content"><valuetextheading1>Max <?php echo $lang['Today']?></valuetextheading1>

<?php  //heat-index/real feel
echo "<br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["barometer_max"]." <smalltempunit2>hPa";

?><smalltempunit2></div></div></div>


<div class="heatcircle4"><div class="heatcircle-content"><valuetextheading1>Low <?php echo $lang['Today']?></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["barometer_min"]." <smalltempunit2>hPa";
?>
</smalltempunit2></div></div></div></div>