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
<div class="windmaxthismonth">
<?php //wind max month
if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>60){echo "<maxtempred>",$weather["windmmax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>40){echo "<maxtemporange>",$weather["windmmax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>30){echo "<maxtempyellow>",$weather["windmmax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>10){ echo "<maxtempgreen>", $weather["windmmax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>0){ echo "<maxtempblue>", $weather["windmmax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }
 
 if ($weather["wind_units"]=='mph' && $weather["windmmax"]>40){echo "<maxtempred>",$weather["windmmax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>24){echo "<maxtemporange>",$weather["windmmax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>18){echo "<maxtempyellow>",$weather["windmmax"]."</maxtempyellow>><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>6){ echo "<maxtempgreen>", $weather["windmmax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>-50){ echo "<maxtempblue>", $weather["windmmax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }

 ;?></div></wunit>
<div class="wmonthmax"> <?php echo strftime('%B',time());?></div>
<div class="wmonthconv">&nbsp;&nbsp;<?php echo $lang['Highest']?></div>

<div class="tempavgthisyear">
<wind-dir-avgmonth>
<?php //month direction average
if ($weather['wind_direction_avgmonth']<=11.25) {
    echo $lang['North'];
} elseif ($weather['wind_direction_avgmonth']<=33.75) {
    echo $lang['NNE'];
} elseif ($weather['wind_direction_avgmonth']<=56.25) {
    echo "&nbsp;&nbsp;".$lang['NE'];
} elseif ($weather['wind_direction_avgmonth']<=78.75) {
    echo "&nbsp;".$lang['ENE'];
} elseif ($weather['wind_direction_avgmonth']<=101.25) {
    echo $lang['East'];
} elseif ($weather['wind_direction_avgmonth']<=123.75) {
    echo "&nbsp;".$lang['ESE'];
} elseif ($weather['wind_direction_avgmonth']<=146.25) {
    echo "&nbsp;&nbsp;".$lang['SE'];
} elseif ($weather['wind_direction_avgmonth']<=168.75) {
    echo "&nbsp;".$lang['SSE'];
} elseif ($weather['wind_direction_avgmonth']<=191.25) {
    echo $lang['South'];
} elseif ($weather['wind_direction_avgmonth']<=213.75) {
    echo "&nbsp;".$lang['SSW'];
} elseif ($weather['wind_direction_avgmonth']<=236.25) {
    echo "&nbsp;&nbsp;".$lang['SW'];
} elseif ($weather['wind_direction_avgmonth']<=258.75) {
    echo "&nbsp;".$lang['WSW'];
} elseif ($weather['wind_direction_avgmonth']<=281.25) {
    echo $lang['West'];
} elseif ($weather['wind_direction_avgmonth']<=303.75) {
    echo "&nbsp;".$lang['WNW'];
} elseif ($weather['wind_direction_avgmonth']<=326.25) {
    echo "&nbsp;&nbsp;".$lang['NW'];
} elseif ($weather['wind_direction_avgmonth']<=348.75) {
    echo "&nbsp;".$lang['NNW'];
} elseif ($weather['wind_direction_avgmonth']<=360) {
    echo $lang['North'];
}"&deg;"?></wind-dir-avgmonth></div>
<div class="tyearavg" style="margin-left:5px;">&nbsp;<?php echo strftime('%B',time());?></div>
<div class="tavgconv" style="margin-left:0px;"><?php echo $lang['Average']?></div>

<div class="yearwordwindbig">Wind Speed</div>
<div class="windmaxthisyear">
<?php //wind max year
if ($weather["wind_units"]=='km/h' && $weather["windymax"]>60){echo "<maxtempred>",$weather["windymax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>40){echo "<maxtemporange>",$weather["windymax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>30){echo "<maxtempyellow>",$weather["windymax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>10){ echo "<maxtempgreen>", $weather["windymax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>0){ echo "<maxtempblue>", $weather["windymax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }
 
 if ($weather["wind_units"]=='mph' && $weather["windymax"]>40){echo "<maxtempred>",$weather["windymax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>24){echo "<maxtemporange>",$weather["windymax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>18){echo "<maxtempyellow>",$weather["windymax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>6){ echo "<maxtempgreen>", $weather["windymax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>-50){ echo "<maxtempblue>", $weather["windymax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }

 ;?></div></wuunit>
<div class="wyearmax"style="margin-left:2px;"><?php echo $weather["windymaxtime2"]?></div>
<div class="wyearconv" style="margin-left:5px;"><?php echo $lang['Highest']?></div>

