<?php include('livedata.php');
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

// weather34 pure csv without mysql extras built September 2018 finished June 2019//
date_default_timezone_set($TZ);
$date = date_create();
$year=date('Y');
//disable error logging if you get server errors
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);ini_set("display_errors","off");
//path is weathercharts/year/month.csv (eg: weathercharts/2019/June.csv )
$weatherchartfilemonth ="weather34charts/".$year."/".date('F').".csv";
//path is weathercharts/year.csv (eg: weathercharts/2019.csv )
$weatherchartfileyear = "weather34charts/".date('Y').".csv";

//(date month-year)),MAX(Temp),MIN(Temp),MAX(Dewpoint),MIN(Dewpoint),TOTAL(Raintoday),MAX(Windspeed),AVG(Day WindSpeed),MAX(Barometer),MIN(Barometer)
//create the current month file example folder/file path = weathercharts/2019/July.csv
$weather34chartdata   = date('j M').",".$meteobridgeapi[26].",".$meteobridgeapi[28].",".$meteobridgeapi[63].",".$meteobridgeapi[65].",".$meteobridgeapi[9].",".$meteobridgeapi[30].",".$meteobridgeapi[158].",".$meteobridgeapi[34].",".$meteobridgeapi[36].""."\r\n";
$output=$weatherchartfilemonth;
$fp = fopen($weatherchartfilemonth, 'a'); 
echo fwrite($fp,$weather34chartdata); 
fclose($weatherchartfilemonth);

//create the year file example folder/file path = weathercharts/2019.csv
//(date month-year)),MAX(Temp),MIN(Temp),MAX(Dewpoint),MIN(Dewpoint),TOTAL(Raintoday),MAX(Windspeed),AVG(Day WindSpeed),MAX(Barometer),MIN(Barometer)
$weather34chartdata   = date('j M').",".$meteobridgeapi[26].",".$meteobridgeapi[28].",".$meteobridgeapi[63].",".$meteobridgeapi[65].",".$meteobridgeapi[9].",".$meteobridgeapi[30].",".$meteobridgeapi[158].",".$meteobridgeapi[34].",".$meteobridgeapi[36].""."\r\n";
$output=$weatherchartfileyear;
$fp = fopen($weatherchartfileyear, 'a'); 
echo fwrite($fp,$weather34chartdata); 
fclose($weatherchartfileyear);
?>


