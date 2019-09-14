<?php 

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');?>
<div class="hometemperatureindoor">
<?php 
 //weather34 wind kmh
 if ($weather["temp_units"]=='C' && $weather["wind_speed_max"]>-50){echo "<div class=\"circlemaxwind\">", number_format($weather["wind_speed_max"],1) ;
 echo " <spanmaxwind>". $weather["wind_units"]."</spanmaxwind> <spanwindtitle> ".$lang['Wind']." </spanwindtitle>
 </div> " ;}  
 //weather34 wind mph
 else if ( $weather["wind_speed_max"]>-50){echo "<div class=\"circlemaxwind\">", number_format($weather["wind_speed_max"],1) ;
 echo " <spanmaxwind>". $weather["wind_units"]."</spanmaxwind> <spanwindtitle>".$lang['Wind']." </spanwindtitle>
 </div> " ;} 
?>
<?php 
 //weather34 wind gust kmh
 if ($weather["temp_units"]=='C' && $weather["wind_gust_speed_max"]>-50){echo "<div class=\"circlemaxgust\">", number_format($weather["wind_gust_speed_max"],1) ;
 echo " <spanmaxwind>". $weather["wind_units"]."</spanmaxwind> <spanwindtitle> ".$lang['Gust']." </spanwindtitle> </div> " ;}   
 //weather34 wind gust mphh
 else if ($weather["temp_units"]=='F' && $weather["wind_gust_speed_max"]>-50){echo "<div class=\"circlemaxgust\">", number_format($weather["wind_gust_speed_max"],1) ;
 echo "  <spanmaxwind>". $weather["wind_units"]."</spanmaxwind> <spanwindtitle> ".$lang['Gust']." </spanwindtitle> </div> " ;}  
?>
</div>