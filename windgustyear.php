<?php 
    ####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019		Revised november 2019                                              #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);
?>
<div class="topframe">
<main class="gridhistory"> 
<weather34top> 
<thedate><?php echo strftime('%b',time())." ".date('Y');?></thedate>
<thevalue>
<?php //wind max month
//kmh
if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>60){echo "<maxtempred>",number_format($weather["windmmax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>40){echo "<maxtemporange>",number_format($weather["windmmax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>30){echo "<maxtempyellow>",number_format($weather["windmmax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>10){ echo "<maxtempgreen>", number_format($weather["windmmax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>0){ echo "<maxtempblue>", number_format($weather["windmmax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }
 //mph
 if ($weather["wind_units"]=='mph' && $weather["windmmax"]>40){echo "<maxtempred>",number_format($weather["windmmax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>24){echo "<maxtemporange>",number_format($weather["windmmax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>18){echo "<maxtempyellow>",number_format($weather["windmmax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>6){ echo "<maxtempgreen>", number_format($weather["windmmax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>-50){ echo "<maxtempblue>", number_format($weather["windmmax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }
//ms
 if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>40){echo "<maxtempred>",number_format($weather["windmmax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>24){echo "<maxtemporange>",number_format($weather["windmmax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>18){echo "<maxtempyellow>",number_format($weather["windmmax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>6){ echo "<maxtempgreen>", number_format($weather["windmmax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>-50){ echo "<maxtempblue>", number_format($weather["windmmax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }
//kts
 if ($weather["wind_units"]=='kts' && $weather["windmmax"]>40){echo "<maxtempred>",number_format($weather["windmmax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windmmax"]>24){echo "<maxtemporange>",number_format($weather["windmmax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windmmax"]>18){echo "<maxtempyellow>",number_format($weather["windmmax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windmmax"]>6){ echo "<maxtempgreen>", number_format($weather["windmmax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windmmax"]>-50){ echo "<maxtempblue>", number_format($weather["windmmax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }


 ;?></tunit1></thevalue>
<maxlow><?php echo $lang['Highest']?></maxlow>
</weather34top>

<weather34top> 
<thedate><?php echo strftime('%b',time())." ".date('Y');?></thedate>
<thevalue><maxtempblue><value2>
<?php //month direction average
if( $weather['wind_direction_avgmonth']<=11.25){echo $lang['North'];}
else if( $weather['wind_direction_avgmonth']<=33.75){echo $lang['NNE'];}
else if( $weather['wind_direction_avgmonth']<=56.25){echo $lang['NE'];}
else if( $weather['wind_direction_avgmonth']<=78.75){echo $lang['ENE'];}
else if( $weather['wind_direction_avgmonth']<=101.25){echo $lang['East'];}
else if( $weather['wind_direction_avgmonth']<=123.75){echo $lang['ESE'];}
else if( $weather['wind_direction_avgmonth']<=146.25){echo $lang['SE'];}
else if( $weather['wind_direction_avgmonth']<=168.75){echo $lang['SSE'];}
else if( $weather['wind_direction_avgmonth']<=191.25){echo $lang['South'];}
else if( $weather['wind_direction_avgmonth']<=213.75){echo $lang['SSW'];}
else if( $weather['wind_direction_avgmonth']<=236.25){echo $lang['SW'];}
else if( $weather['wind_direction_avgmonth']<=258.75){echo $lang['WSW'];}
else if( $weather['wind_direction_avgmonth']<=281.25){echo $lang['West'];}
else if( $weather['wind_direction_avgmonth']<=303.75){echo $lang['WNW'];}
else if( $weather['wind_direction_avgmonth']<=326.25){echo $lang['NW'];}
else if( $weather['wind_direction_avgmonth']<=348.75){echo $lang['NNW'];}
else if( $weather['wind_direction_avgmonth']<=360){echo $lang['North'];}?>
</value2></maxtempblue>
</thevalue>
<maxlow><?php echo $lang['Avg']?><valuesmall> <?php echo number_format($weather['wind_direction_avgmonth'],0)?></valuesmall>&deg;</maxlow>
</weather34top>

<weather34top>
<thedate><?php echo $weather["windymaxtime2"]?></thedate>
<thevalue>
<?php //wind max year
//kmh
if ($weather["wind_units"]=='km/h' && $weather["windymax"]>60){echo "<maxtempred>",number_format($weather["windymax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>40){echo "<maxtemporange>",number_format($weather["windymax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>30){echo "<maxtempyellow>",number_format($weather["windymax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>10){ echo "<maxtempgreen>",number_format($weather["windymax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>0){ echo "<maxtempblue>", number_format($weather["windymax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }
 //mph
 if ($weather["wind_units"]=='mph' && $weather["windymax"]>40){echo "<maxtempred>",number_format($weather["windymax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>24){echo "<maxtemporange>",number_format($weather["windymax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>18){echo "<maxtempyellow>",number_format($weather["windymax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>6){ echo "<maxtempgreen>", number_format($weather["windymax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='mph' && $weather["windymax"]>-50){ echo "<maxtempblue>",number_format($weather["windymax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }
//ms
 if ($weather["wind_units"]=='m/s' && $weather["windymax"]>40){echo "<maxtempred>",number_format($weather["windymax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>24){echo "<maxtemporange>",number_format($weather["windymax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>18){echo "<maxtempyellow>",number_format($weather["windymax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>6){ echo "<maxtempgreen>", number_format($weather["windymax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>-50){ echo "<maxtempblue>",number_format($weather["windymax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }
//kts
 if ($weather["wind_units"]=='kts' && $weather["windymax"]>40){echo "<maxtempred>",number_format($weather["windymax"],1)."</maxtempred><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windymax"]>24){echo "<maxtemporange>",number_format($weather["windymax"],1)."</maxtemporange><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windymax"]>18){echo "<maxtempyellow>",number_format($weather["windymax"],1)."</maxtempyellow><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windymax"]>6){ echo "<maxtempgreen>", number_format($weather["windymax"],1)."</maxtempgreen><tunit1>".$weather["wind_units"] ; }
 else if ($weather["wind_units"]=='kts' && $weather["windymax"]>-50){ echo "<maxtempblue>",number_format($weather["windymax"],1)."</maxtempblue><tunit1>".$weather["wind_units"] ; }

 ;?></wuunit></thevalue>
<maxlow><?php echo $lang['Highest']?></maxlow>
</weather34top>
</main>