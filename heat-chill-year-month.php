<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019						  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear" style="margin-left:5px;">
<?php //heat index year 
 if ( $weather["temp_units"]=='C' && $weather["heat_indexymax"]> 30){echo "<maxtempred>",$weather["heat_indexymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["heat_indexymax"]>25){echo "<maxtemporange>",$weather["heat_indexymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["heat_indexymax"]>20){echo "<maxtempyellow>",$weather["heat_indexymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["heat_indexymax"]>10){echo "<maxtempgreen>",$weather["heat_indexymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["heat_indexymax"]>-50){echo "<maxtempblue>",$weather["heat_indexymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];} 
 //non metric
 if ( $weather["temp_units"]=='F' && $weather["heat_indexymax"]> 86){echo "<maxtempred>",$weather["heat_indexymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["heat_indexymax"]>75.2){echo "<maxtemporange>",$weather["heat_indexymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["heat_indexymax"]>64.4){echo "<maxtempyellow>",$weather["heat_indexymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["heat_indexymax"]>42.8){echo "<maxtempgreen>",$weather["heat_indexymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["heat_indexymax"]>-50){echo "<maxtempblue>",$weather["heat_indexymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];} 
 ?></div></tunit1>
<div class="tmonthmax" style="margin-left:0px;"><?php echo $heatindindexmaxtime2 ;?></div>
<div class="tmonthconv" style="margin-left:-10px;">Max Heat Index</div>

<div class="yearwordtempbig">Heat Index | Wind Chill</div>
<div class="tempmaxthisyear" style="margin-left:-7px;">
<?php //wind chill min year 
 if ($weather["temp_units"]=='C' && $weather["windchillymin"]> 30){echo "<maxtempred>",$weather["windchillymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["windchillymin"]>25){echo "<maxtemporange>",$weather["windchillymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["windchillymin"]>20){echo "<maxtempyellow>",$weather["windchillymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["windchillymin"]>10){echo "<maxtempgreen>",$weather["windchillymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='C' && $weather["windchillymin"]>-50){echo "<maxtempblue>",$weather["windchillymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];}
 //non metric
 if ($weather["temp_units"]=='F' && $weather["windchillymin"]> 86){echo "<maxtempred>",$weather["windchillymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["windchillymin"]>75.2){echo "<maxtemporange>",$weather["windchillymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["windchillymin"]>68){echo "<maxtemporange>",$weather["windchillymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["windchillymin"]>64.4){echo "<maxtempyellow>",$weather["windchillymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["windchillymin"]>53.6){echo "<maxtempyellow>",$weather["windchillymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["windchillymin"]>42.8){echo "<maxtempgreen>",$weather["windchillymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"];}
 else if ($weather["temp_units"]=='F' && $weather["windchillymin"]>-50){echo "<maxtempblue>",$weather["windchillymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"];} 
 ?>
</div></tunit1>
<div class="tyearmax" style="margin-left:-7px;"><?php echo $windchillmintime2;?></div>
<div class="tyearconv" style="margin-left:-15px;">Min Wind Chill</div>
