<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear" style="margin-left:10px;">
<?php //heat index year 
 if ($weather["heat_indexymax"]> 30){echo "<maxtempred>",$weather["heat_indexymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>25){echo "<maxtemporange>",$weather["heat_indexymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>20){echo "<maxtempyellow>",$weather["heat_indexymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>10){echo "<maxtempgreen>",$weather["heat_indexymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>-50){echo "<maxtempblue>",$weather["heat_indexymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];}
 
 ?></div></tunit1>
<div class="tmonthmax" style="margin-left:0px;"><?php echo $heatindindexmaxtime2 ;?></div>
<div class="tmonthconv" style="margin-left:-7px;">Max Heat Index</div>


<div class="yearwordtempbig">Heat Index | Wind Chill</div>
<div class="tempmaxthisyear" style="margin-left:-7px;">
<?php //wind chill min year
 if ($weather["windchillymin"]> 30){echo "<maxtempred>",$weather["windchillymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>25){echo "<maxtemporange>",$weather["windchillymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>20){echo "<maxtempyellow>",$weather["windchillymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>10){echo "<maxtempgreen>",$weather["windchillymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>-50){echo "<maxtempblue>",$weather["windchillymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];}
 ?>
</div></tunit1>
<div class="tyearmax" style="margin-left:-7px;"><?php echo $windchillmintime2;?></div>
<div class="tyearconv" style="margin-left:-10px;">Min Wind Chill</div>
