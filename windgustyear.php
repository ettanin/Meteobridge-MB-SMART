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
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>18){echo "<maxtempyellow>",$weather["windmmax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>6){ echo "<maxtempgreen>", $weather["windmmax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>-50){ echo "<maxtempblue>", $weather["windmmax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }

 ;?></div></wunit>
<div class="wmonthmax"> <?php echo strftime('%B',time());?></div>
<div class="wmonthconv">&nbsp;&nbsp;<?php echo $lang['Highest']?></div>

<div class="tempavgthisyear">
<wind-dir-avgmonth>
<?php //month direction average
if ($weather['wind_direction_avgmonth']<=11.25) {
    echo "&nbsp;&nbsp;&nbsp;".$lang['North'];
} elseif ($weather['wind_direction_avgmonth']<=33.75) {
    echo $lang['NNE'];
} elseif ($weather['wind_direction_avgmonth']<=56.25) {
    echo $lang['NEdirs'];
} elseif ($weather['wind_direction_avgmonth']<=78.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['ENE'];
} elseif ($weather['wind_direction_avgmonth']<=101.25) {
    echo "&nbsp;&nbsp;&nbsp;".$lang['East'];
} elseif ($weather['wind_direction_avgmonth']<=123.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['ESE'];
} elseif ($weather['wind_direction_avgmonth']<=146.25) {
    echo $lang['SEdirs'];
} elseif ($weather['wind_direction_avgmonth']<=168.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['SSE'];
} elseif ($weather['wind_direction_avgmonth']<=191.25) {
    echo "&nbsp;&nbsp;&nbsp;".$lang['South'];
} elseif ($weather['wind_direction_avgmonth']<=213.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['SSW'];
} elseif ($weather['wind_direction_avgmonth']<=236.25) {
    echo $lang['SWdirs'];
} elseif ($weather['wind_direction_avgmonth']<=258.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['WSW'];
} elseif ($weather['wind_direction_avgmonth']<=281.25) {
    echo "&nbsp;&nbsp;&nbsp;".$lang['West'];
} elseif ($weather['wind_direction_avgmonth']<=303.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['WNW'];
} elseif ($weather['wind_direction_avgmonth']<=326.25) {
    echo $lang['NWdirs'];
} elseif ($weather['wind_direction_avgmonth']<=348.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['NNW'];
} elseif ($weather['wind_direction_avgmonth']<=360) {
    echo "&nbsp;&nbsp;&nbsp;".$lang['North'];
}"&deg;"?></wind-dir-avgmonth></div>
<div class="tyearavg" style="margin-left:5px;">&nbsp;<?php echo strftime('%B',time());?></div>
<div class="tavgconv" style="margin-left:-10px;"><?php echo $lang['Avg-Dir']." " .$lang['Direction']?></div>

<div class="yearwordwindbig">Wind Data</div>
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

