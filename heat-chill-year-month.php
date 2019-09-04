<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear" style="margin-left:4px;">
<?php //heat index year 
 if ($weather["heat_indexymax"]> 30){echo "<maxtempred>",$weather["heat_indexymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>25){echo "<maxtemporange>",$weather["heat_indexymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>20){echo "<maxtempyellow>",$weather["heat_indexymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>10){echo "<maxtempgreen>",$weather["heat_indexymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexymax"]>-50){echo "<maxtempblue>",$weather["heat_indexymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];}
 
 ?></div></tunit1>
<div class="tmonthmax" style="margin-left:-5px;"><?php echo $heatindindexmaxtime2 ;?></div>
<div class="tmonthconv" style="margin-left:-5px;">Heat Index</div>


<div class="tempavgthisyear" style="margin-left:-12px;"><heatindexword>Heat Index</heatindexword>

<?php //heat index 
  if ($weather["heat_indexdmax"]> 30){echo "<maxtempred>",$weather["heat_indexdmax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexdmax"]>25){echo "<maxtemporange>",$weather["heat_indexdmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexdmax"]>24){echo "<maxtempyellow>",$weather["heat_indexdmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["heat_indexdmax"]>-50){echo "<maxtempyellow>N/A";}
 
 ?></div></tunit>

<div class="tyearavg" style="margin-left:10px;">Today</div>
<div class="tavgconv" style="margin-left:-12px;">&nbsp;Wind Chill&nbsp; 
<?php if ($weather["windchilldmin"]>10){echo "<maxtempblue>N/A";}
 else if ($weather["windchilldmin"]>-50){echo "<maxtempblue>",$weather["windchilldmin"]  ;echo "</maxtempblue>";echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}?>
</div>




<div class="yearwordtempbig">Heat Index Chill</div>
<div class="tempmaxthisyear">
<?php //wind chill min year
 if ($weather["windchillymin"]> 30){echo "<maxtempred>",$weather["windchillymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>25){echo "<maxtemporange>",$weather["windchillymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>20){echo "<maxtempyellow>",$weather["windchillymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>10){echo "<maxtempgreen>",$weather["windchillymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["windchillymin"]>-50){echo "<maxtempblue>",$weather["windchillymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];}
 ?>
</div></tunit1>
<div class="tyearmax" style="margin-left:-2px;"><?php echo $windchillmintime2;?></div>
<div class="tyearconv">Wind Chill</div>
