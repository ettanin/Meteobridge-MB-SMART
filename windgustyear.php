<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019						  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);
$windicon='<svg id="weather34 windir icon top module" width="12px" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 769 695"><path fill="#aaa" fill-rule="nonzero" stroke="#aaa" stroke-width=".09" d="M227.73 625.28c32.4 18.47 68.23 30.67 105 36.63a314 314 0 0 0 116.74-3.71 315.33 315.33 0 0 0 87.86-34.1l-.21-.32c-6.95-11.08-13.17-22.61-19.72-33.94a273.02 273.02 0 0 1-113 35.33c-58.07 4.9-117.51-9.57-167.09-40.15a272.94 272.94 0 0 1-92.58-95.85c-11.36 6.49-22.53 13.34-34.13 19.4l-.35.17c27.84 48.4 68.76 89.22 117.48 116.54z"/><path fill="#aaa" fill-rule="nonzero" stroke="#afb0b0" stroke-width=".09" d="M110.6 508.56c11.6-6.05 22.77-12.9 34.13-19.39-23.76-40.16-36.07-86.85-36.54-133.44-.38-54.59 15.83-109.26 46.15-154.68 23.36-34.67 54.52-64.36 91.12-84.72-6.59-11.3-12.75-22.88-19.75-33.92A308.93 308.93 0 0 0 137.53 158C98.28 206.7 74.4 267.56 69.9 329.93c-4.66 61.82 9.59 124.99 40.69 178.63zM517.4 589.84c6.55 11.33 12.77 22.86 19.72 33.94 60.94-34.67 109.27-90.78 134.87-156.02a313.6 313.6 0 0 0 18.85-71.69c9.54-67.97-4.13-139.05-38.59-198.44-11.63 6-22.76 12.91-34.15 19.37 30.86 52.3 42.58 115.42 33.63 175.42-6.35 42.03-22.07 82.77-46.59 117.59-22.96 32.53-52.87 60.44-87.74 79.83z"/><use width="3.34" height="2.63" x="388.73" y="191.43" transform="matrix(.83557 0 0 .87532 0 0)" xlink:href="#_Image1"/><path fill="#01a4b5" d="M376.01 381.67l143.5-299.2-273.88-5.95 130.38 305.15z"/><path fill="#aaa" fill-rule="nonzero" stroke="#aaa" stroke-width=".09" d="M304.11 50.15c36.09-9.39 73.86-11.82 110.91-7.99a314 314 0 0 1 111.74 34.03 315.33 315.33 0 0 1 75.93 55.83l-.29.25c-9.6 8.89-18.61 18.4-27.89 27.63a273.02 273.02 0 0 0-99.87-63.58c-54.79-19.88-115.95-21.4-171.78-4.81a272.93 272.93 0 0 0-114.37 68.39c-9.28-9.22-18.28-18.75-27.9-27.62l-.29-.26c39.5-39.46 89.65-68.2 143.81-81.87z" transform="matrix(-.9657 -.25968 -.26133 .97182 841.72 110.42)"/></svg>';
?>
<style>
.weather34-rotate{-webkit-transform:rotate(<?php echo $weather['wind_direction_avgmonth']?>deg);transform:rotate(<?php echo $weather['wind_direction_avgmonth']?>deg);display:inline-block;padding-left:2px}
</style>
<div class="topframe">
<div class="windmaxthismonth">
<?php //wind max month
if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>60){echo "<maxtempred>",$weather["windmmax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>40){echo "<maxtemporange>",$weather["windmmax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>30){echo "<maxtempyellow>",$weather["windmmax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>10){ echo "<maxtempgreen>", $weather["windmmax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>0){ echo "<maxtempblue>", $weather["windmmax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }
 //mph
 if ($weather["wind_units"]=='mph' && $weather["windmmax"]>40){echo "<maxtempred>",$weather["windmmax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>24){echo "<maxtemporange>",$weather["windmmax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>18){echo "<maxtempyellow>",$weather["windmmax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>6){ echo "<maxtempgreen>", $weather["windmmax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>-50){ echo "<maxtempblue>", $weather["windmmax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }
 
 //ms
 if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>16.6){echo "<maxtempred>",$weather["windmmax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>11.1){echo "<maxtemporange>",$weather["windmmax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>8.3){echo "<maxtempyellow>",$weather["windmmax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>2.7){ echo "<maxtempgreen>", $weather["windmmax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>-50){ echo "<maxtempblue>", $weather["windmmax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }
  ;?></div></wunit>
<div class="wmonthmax"> &nbsp;<?php echo strftime('%b',time())." ".date('Y');?></div>
<div class="wmonthconv">&nbsp;&nbsp;<?php echo $lang['Highest']?></div>

<div class="tempavgthisyear">
<wind-dir-avgmonth>
<?php //month direction average
if ($weather['wind_direction_avgmonth']<=11.25) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['North'];
} elseif ($weather['wind_direction_avgmonth']<=33.75) {
    echo $lang['NNE'];
} elseif ($weather['wind_direction_avgmonth']<=56.25) {
    echo $lang['NEdirs'];
} elseif ($weather['wind_direction_avgmonth']<=78.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['ENE'];
} elseif ($weather['wind_direction_avgmonth']<=101.25) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['East'];
} elseif ($weather['wind_direction_avgmonth']<=123.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['ESE'];
} elseif ($weather['wind_direction_avgmonth']<=146.25) {
    echo $lang['SEdirs'];
} elseif ($weather['wind_direction_avgmonth']<=168.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['SSE'];
} elseif ($weather['wind_direction_avgmonth']<=191.25) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['South'];
} elseif ($weather['wind_direction_avgmonth']<=213.75) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['SSW'];
} elseif ($weather['wind_direction_avgmonth']<=236.25) {
    echo "&nbsp;".$lang['SWdirs'];
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
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$lang['North'];
}"&deg;"?>
<div class="weather34-rotate"><?php echo $windicon;?></div>
</wind-dir-avgmonth>


</div>
<div class="tyearavg" >&nbsp; <?php echo strftime('%b',time())." ".date('Y');?></div>
<div class="tavgconv" style="margin-left:-5px;"><?php echo $lang['Avg-Dir']." " .$lang['Direction']?></div>

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
 
 if ($weather["wind_units"]=='m/s' && $weather["windymax"]>16.6){echo "<maxtempred>",$weather["windymax"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>11.1){echo "<maxtemporange>",$weather["windymax"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>8.3){echo "<maxtempyellow>",$weather["windymax"]."</maxtempyellow><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>2.7){ echo "<maxtempgreen>", $weather["windymax"]."</maxtempgreen><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>-50){ echo "<maxtempblue>", $weather["windymax"]."</maxtempblue><wunit>".$weather["wind_units"] ; }


 ;?></div></wuunit>
<div class="wyearmax"><?php echo $weather["windymaxtime2"]?></div>
<div class="wyearconv"><?php echo $lang['Highest']?></div>

