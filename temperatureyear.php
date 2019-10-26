<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019						  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear">
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["tempymin"]>30){echo "<maxtempred>",$weather["tempymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>24){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>20){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>18){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>12){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>=10){ echo "<maxtempgreen>", $weather["tempymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>-50){ echo "<maxtempblue>", $weather["tempymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempymin"]>86){echo "<maxtempred>",$weather["tempymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>75.2){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>68){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>64.4){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>53.6){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>=42.8){ echo "<maxtempgreen>", $weather["tempymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>-50){ echo "<maxtempblue>", $weather["tempymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></div></tunit1>
<div class="tmonthmax" style="margin-left:-5px;"><?php echo $weather["tempymintime2"]?></div>
<div class="tmonthconv" style="margin-left:-3px;"><?php echo $lang['Lowest']?></div>

<div class="tempavgthisyear" >
<?php //temperture max current month
 if ($weather["temp_units"]=='C' && $weather["tempmmax"]>30){echo "<maxtempred>",$weather["tempmmax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>24){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>20){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>18){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>12){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>=10){ echo "<maxtempgreen>", $weather["tempmmax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>-50){ echo "<maxtempblue>", $weather["tempmmax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempmmax"]>86){echo "<maxtempred>",$weather["tempmmax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>75.2){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>68){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>64.4){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>53.6){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>=42.8){ echo "<maxtempgreen>", $weather["tempmmax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>-50){ echo "<maxtempblue>", $weather["tempmmax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></div></tunit>

<div class="tyearavg"><?php echo strftime('%b',time())." ".date('Y')?></div>
<div class="tavgconv" style="margin-left:-9px;"><?php echo $lang['Lowest']?>&nbsp; <?php echo "<maxtempblue>".$weather["tempmmin"]."</maxtempblue>&deg";?>
</div>

<div class="yearwordtempbig">Temperature</div>
<div class="tempmaxthisyear">

<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["tempymax"]>30){echo "<maxtempred>",$weather["tempymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>24){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>20){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>18){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>12){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>=10){ echo "<maxtempgreen>", $weather["tempymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>-50){ echo "<maxtempblue>", $weather["tempymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempymax"]>86){echo "<maxtempred>",$weather["tempymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>75.2){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>68){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>64.4){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>53.6){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>=42.8){ echo "<maxtempgreen>", $weather["tempymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>-50){ echo "<maxtempblue>", $weather["tempymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?>
</div></tunit1>
<div class="tyearmax">&nbsp;<?php echo $weather["tempymaxtime2"]?></div>
<div class="tyearconv"><?php echo $lang['Highest']?></div>

<?php //WEATHER34 pop up alert 
  if ($weather["mbplatform"]=="VOCORE2" || $weather["mbplatform"]=="CARAMBOLA2"){echo "";}
  else if ($weather["mbplatform"]="  "){?>  
<div style=";position:absolute;font-size:.3em;color:white;margin-left:0px;z-index:9999999;text-align:left;width:180px;top:0px;background:#01a4b5;border-radius:3px;padding:5px;"> THE HARDWARE LOGGER DEVICE/SOFTWARE IS NOT COMPATIBLE WITH THIS TEMPLATE </div>
<?php ;}?>
