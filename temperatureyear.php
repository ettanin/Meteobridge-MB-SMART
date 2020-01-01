<?php 
    ####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019		Revised november 2019                                              #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">
<main class="gridhistory"> 
<weather34top> 
<thedate><?php echo $weather["tempymintime2"]?></thedate>
<thevalue>
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["tempymin"]>30){echo "<maxtempred>",$weather["tempymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>24){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>20){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>18){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>12){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>=7){ echo "<maxtempgreen>", $weather["tempymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>-50){ echo "<maxtempblue>", $weather["tempymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempymin"]>86){echo "<maxtempred>",$weather["tempymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>75.2){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>68){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>64.4){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>53.6){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>=44.6){ echo "<maxtempgreen>", $weather["tempymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>-50){ echo "<maxtempblue>", $weather["tempymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></tunit1></thevalue>
 <maxlow><?php echo $lang['Lowest']?></maxlow>
</weather34top>

<weather34top> 
<thedate><?php echo strftime('%b',time())." ".date('Y')?></thedate>
<thevalue>
<?php //temperAture max curent month
 if ($weather["temp_units"]=='C' && $weather["tempmmax"]>30){echo "<maxtempred>",$weather["tempmmax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>24){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>20){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>18){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>12){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>=7){ echo "<maxtempgreen>", $weather["tempmmax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempmmax"]>-50){ echo "<maxtempblue>", $weather["tempmmax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempmmax"]>86){echo "<maxtempred>",$weather["tempmmax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>75.2){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>68){echo "<maxtemporange>",$weather["tempmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>64.4){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>53.6){echo "<maxtempyellow>",$weather["tempmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>=44.6){ echo "<maxtempgreen>", $weather["tempmmax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempmmax"]>-50){ echo "<maxtempblue>", $weather["tempmmax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></tunit1></thevalue>
 <maxlow><?php echo $lang['Lowest']?><value1>

 <?php //temperature min current month
 if ($weather["temp_units"]=='C' && $weather["tempmmin"]>30){echo "<maxtempred>",$weather["tempmmin"];echo "</maxtempred>&deg;";}
 else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>24){echo "<maxtemporange>",$weather["tempmmin"];echo "</maxtemporange>&deg;";}
 else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>20){echo "<maxtemporange>",$weather["tempmmin"];echo "</maxtemporange>&deg;";}
 else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>18){echo "<maxtempyellow>",$weather["tempmmin"];echo "</maxtempyellow>&deg;";}
 else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>12){echo "<maxtempyellow>",$weather["tempmmin"];echo "</maxtempyellow>&deg;";}
 else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>=7){ echo "<maxtempgreen>", $weather["tempmmin"];echo "</maxtempgreen>&deg;";}
 else if ($weather["temp_units"]=='C' && $weather["tempmmin"]>-50){ echo "<valuesmall>", $weather["tempmmin"];echo "</valuesmall>&deg;";}
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempmmin"]>86){echo "<maxtempred>",$weather["tempmmin"];echo "</maxtempred>&deg;";}
 else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>75.2){echo "<maxtemporange>",$weather["tempmmin"];echo "</maxtemporange>&deg;";}
 else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>68){echo "<maxtemporange>",$weather["tempmmin"];echo "</maxtemporange>&deg;";}
 else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>64.4){echo "<maxtempyellow>",$weather["tempmmin"];echo "</maxtempyellow>&deg;";}
 else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>53.6){echo "<maxtempyellow>",$weather["tempmmin"];echo "</maxtempyellow>&deg;";}
 else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>=44.6){ echo "<maxtempgreen>", $weather["tempmmin"];echo "</maxtempgreen>&deg;";}
 else if ($weather["temp_units"]=='F' && $weather["tempmmin"]>-50){ echo "<valuesmall>", $weather["tempmmin"];echo "</valuesmall>&deg;";}
 ?></tunit1></value1>


 </maxlow>
</weather34top>


<weather34top> 
<thedate><?php echo $weather["tempymaxtime2"]?></thedate>
<thevalue>
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["tempymax"]>30){echo "<maxtempred>",$weather["tempymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>24){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>20){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>18){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>12){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>=7){ echo "<maxtempgreen>", $weather["tempymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>-50){ echo "<maxtempblue>", $weather["tempymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempymax"]>86){echo "<maxtempred>",$weather["tempymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>75.2){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>68){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>64.4){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>53.6){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>=44.6){ echo "<maxtempgreen>", $weather["tempymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>-50){ echo "<maxtempblue>", $weather["tempymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></tunit1></thevalue>
 <maxlow><?php echo $lang['Highest']?></maxlow>
</weather34top>
