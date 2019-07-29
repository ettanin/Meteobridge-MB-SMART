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


//(date month-year-0)),MAX(Temp-1),MIN(Temp-2),MAX(Dewpoint-3),MIN(Dewpoint-4),TOTAL(Raintoday-5),MAX(Windspeed-6),AVG(Day WindSpeed-7),AVG(Temp-8),MAX(Barometer-9),MIN(Barometer-10)
//create the current month file example folder/file path = weathercharts/2019/July.csv

//path is weathercharts/year/month.csv (eg: weathercharts/2019/June.csv )
$weatherchartfilemonth ="weather34charts/".$year."/".date('F').".csv";
$weather34chartdata   = date('j M').",".$meteobridgeapi[26].",".$meteobridgeapi[28].",".$meteobridgeapi[63].",".$meteobridgeapi[65].",".$meteobridgeapi[9].",".$meteobridgeapi[32].",".$meteobridgeapi[158].",".$meteobridgeapi[123].",".$meteobridgeapi[34].",".$meteobridgeapi[36].""."\r\n";
//$output=$weatherchartfilemonth;
$fp = fopen($weatherchartfilemonth, 'a'); 
fwrite($fp,$weather34chartdata); 
fclose($weatherchartfilemonth);

//create the year file example folder/file path = weathercharts/2019.csv
//(date month-year-0)),MAX(Temp-1),MIN(Temp-2),MAX(Dewpoint-3),MIN(Dewpoint-4),TOTAL(Raintoday-5),MAX(Windspeed-6),AVG(Day WindSpeed-7),AVG(Temp-8),MAX(Barometer-9),MIN(Barometer-10)
//path is weathercharts/year.csv (eg: weathercharts/2019.csv )
$weatherchartfileyear = "weather34charts/".date('Y').".csv";
$weather34chartdata1   = date('j M').",".$meteobridgeapi[26].",".$meteobridgeapi[28].",".$meteobridgeapi[63].",".$meteobridgeapi[65].",".$meteobridgeapi[9].",".$meteobridgeapi[32].",".$meteobridgeapi[158].",".$meteobridgeapi[123].",".$meteobridgeapi[34].",".$meteobridgeapi[36].""."\r\n";
//$output1=$weatherchartfileyear;
$fp1 = fopen($weatherchartfileyear, 'a'); 
fwrite($fp1,$weather34chartdata1); 
fclose($weatherchartfileyear);
?>


