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
<thedate><?php echo $weather["humidity_ymintime2"]?></thedate>
<thevalue>
<?php //humidity min year 
 if ($weather["humidity_ymin"]>70){echo "<maxtempblue>",$weather["humidity_ymin"]  ;echo "</maxtempblue><tunit1>%"; }
 else if ($weather["humidity_ymin"]>60){echo "<maxtempyellow>",$weather["humidity_ymin"]  ;echo "</maxtemporange><tunit1>%"; }
 else if ($weather["humidity_ymin"]>40){echo "<maxtempgreen>",$weather["humidity_ymin"]  ;echo "</maxtempgreen><tunit1>%"; }
 else if ($weather["humidity_ymin"]>0){echo "<maxtempred>",$weather["humidity_ymin"]  ;echo "</maxtempred><tunit1>%"; } 
 ?></tunit1></thevalue>
<maxlow><?php echo $lang['Lowest']?></maxlow>
</weather34top>

<weather34top> 
<thedate><?php echo strftime('%b',time())." ".date('Y')?></thedate>
<thevalue>
<?php //humidity max current month
 if ($weather["humidity_mmax"]>70){echo "<maxtempblue>",$weather["humidity_mmax"]  ;echo "</maxtempblue><tunit1>%"; }
 else if ($weather["humidity_mmax"]>60){echo "<maxtempyellow>",$weather["humidity_mmax"]  ;echo "</maxtempyellow><tunit1>%"; }
 else if ($weather["humidity_mmax"]>40){echo "<maxtempgreen>",$weather["humidity_mmax"]  ;echo "</maxtempgreen><tunit1>%"; }
 else if ($weather["humidity_mmax"]>0){echo "<maxtempred>",$weather["humidity_mmax"]  ;echo "</maxtempred><tunit1>%"; }
 ?></tunit1></thevalue>
<maxlow><?php echo $lang['Lowest']?><value1>
<?php //humidity min current month
 if ($weather["humidity_mmin"]>70){echo "<valuesmall>",$weather["humidity_mmin"]  ;echo "</valuesmall>%"; }
 else if ($weather["humidity_mmin"]>60){echo "<maxtempyellow>",$weather["humidity_mmin"]  ;echo "</maxtempyellow>%"; }
 else if ($weather["humidity_mmin"]>40){echo "<maxtempgreen >",$weather["humidity_mmin"]  ;echo "</maxtempgreen>%"; }
 else if ($weather["humidity_mmin"]>0){echo "<maxtempred>",$weather["humidity_mmin"]  ;echo "</maxtempred>%"; }?>
</maxlow></value1>
</weather34top>

<weather34top> 
<thedate><?php echo $weather["humidity_ymaxtime2"]?></thedate>
<thevalue>
<?php //humidty min year
 if ($weather["humidity_ymax"]>70){echo "<maxtempblue>",$weather["humidity_ymax"]  ;echo "</maxtempblue><tunit1>%"; }
 else if ($weather["humidity_ymax"]>60){echo "<maxtempyellow>",$weather["humidity_ymax"]  ;echo "</maxtemporange><tunit1>%"; }
 else if ($weather["humidity_ymax"]>40){echo "<maxtempgreen>",$weather["humidity_ymax"]  ;echo "</maxtempgreen><tunit1>%"; }
 else if ($weather["humidity_ymax"]>0){echo "<maxtempred>",$weather["humidity_ymax"]  ;echo "</maxtempred><tunit1>%"; }
 ?>
</tunit1></thevalue>
<maxlow><?php echo $lang['Highest']?></maxlow>
</weather34top>
</main>