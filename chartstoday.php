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
$id=00;
//disable error logging if you get server errors
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);ini_set("display_errors","off");
//path is weathercharts/year/day.csv (eg: weathercharts/2019/24Jun2019.csv )
$weatherchartfile = "weather34charts/".date('Y')."/".date('jMY').".csv";
//ID-0,time(1),outsideTemp(2),barometer(3),raintoday(4),UV(5),windgustmph(6),windSpeedAvg(7),radiation(8),dewpoint(9),rainrate(10),direction(11),indoortemp(12),indoorhumidity(13),date(14),dewpoint(15),wetbulb(16),humidity(17),cloudbase(18)
$weather34chartdata   = $id.",".date('H:i').",".$meteobridgeapi[2].",".$meteobridgeapi[10].",". $meteobridgeapi[9].",".$meteobridgeapi[43].",".$meteobridgeapi[40].",".$meteobridgeapi[17].",".$meteobridgeapi[45].",".$meteobridgeapi[4].",".$meteobridgeapi[8].",".$meteobridgeapi[7].",".$meteobridgeapi[22].",".$meteobridgeapi[23].",".date('j M').",".$weather['realfeel'].",".$weather['wetbulb']."".",".$weather["humidity"].",".$weather['cloudbase'].""."\r\n";
$output=$weatherchartfile;
$fp = fopen($weatherchartfile, 'a'); 
fwrite($fp,$weather34chartdata); 
fclose($weatherchartfile);
?>