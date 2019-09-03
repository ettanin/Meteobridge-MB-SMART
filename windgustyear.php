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

<div class="tempavgthisyear" style="margin-left:-5px;">
<?php //wind max month
if ($weather["wind_units"]=='km/h' && $weather["windspeedyearavg"]>60){echo "<maxtempred>",$weather["windspeedyearavg"]."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windspeedyearavg"]>40){echo "<maxtemporange>",$weather["windspeedyearavg"]."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windspeedyearavg"]>30){echo "<maxtempyellow>",$weather["windspeedyearavg"]."</maxtempyellow><wunit>".$weather["wind_units"] ; } 
 else if ($weather["wind_units"]=='km/h' && $weather["windspeedyearavg"]>0){ echo "<maxtempblue>", $weather["windspeedyearavg"]."</maxtempblue><wunit>".$weather["wind_units"] ; }
 
 if ($weather["wind_units"]=='mph' && $weather["windspeedyearavg"]>40){echo "<maxtempred>",number_format($weather["windspeedyearavg"],2)."</maxtempred><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windspeedyearavg"]>24){echo "<maxtemporange>",number_format($weather["windspeedyearavg"],2)."</maxtemporange><wunit>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windspeedyearavg"]>18){echo "<maxtempyellow>",number_format($weather["windspeedyearavg"],2)."</maxtempyellow><wunit>".$weather["wind_units"] ; } 
 else if ($weather["wind_units"]=='mph' && $weather["windspeedyearavg"]>-50){ echo "<maxtempblue>", number_format($weather["windspeedyearavg"],2)."</maxtempblue><wunit>".$weather["wind_units"] ; }

 ;?></div></wunit>
<div class="tyearavg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y');?></div>
<div class="tavgconv"  style="margin-left:-3px;"><?php echo $lang['Average']?></div>

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

