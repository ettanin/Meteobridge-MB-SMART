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
<div class="text2">
<?php echo "<blue>".$weather["barometer"],"</blue><span>".$weather["barometer_units"]."</span>";?>
</div></div></div>
</span>
</div></div>


<?php if ($weather["barometer_trend"] < 0) {
    echo '<div class="pressuretext" style="width:200px;">'.$fallingsymbol.' '.number_format($weather["barometer_trend"],2).'</div>';
} elseif ($weather["barometer_trend"] > 0) {
    echo '<div class="pressuretext" style="width:200px;">'.$risingsymbol.' +'.number_format($weather["barometer_trend"],2).'</div>';
} else {
    echo '<div class="pressuretext">'.$lang['Steady'].'</div>';
}?>
</div>
<smalltempunit2></div></div>

<div class="maxbox">Max <?php echo $weather["barometer_max"] ?> <?php echo $weather["barometer_units"]; ?> <?php echo $weather["thb0seapressmaxtime"]; ?></div>
<div class="minbox">Min <?php echo $weather["barometer_min"] ?> <?php echo $weather["barometer_units"]; ?> <?php echo $weather["thb0seapressmintime"]; ?></div>

