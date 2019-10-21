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
if ($meteobridgeapi[43]=='--'){$meteobridgeapi[43]=0;}
if ($meteobridgeapi[45]=='--'){$meteobridgeapi[45]=0;}
$weather34chartdata   = $id.",".date('H:i').",".$meteobridgeapi[2].",".$meteobridgeapi[10].",". $meteobridgeapi[9].",".$meteobridgeapi[43].",".$meteobridgeapi[40].",".$meteobridgeapi[17].",".$meteobridgeapi[45].",".$meteobridgeapi[4].",".$meteobridgeapi[8].",".$meteobridgeapi[7].",".$meteobridgeapi[22].",".$meteobridgeapi[23].",".date('j M').",".$weather['realfeel'].",".$weather['wetbulb'].",".$weather["humidity"].",".$weather['cloudbase'].""."\r\n";
$output=$weatherchartfile;
$fp = fopen($weatherchartfile, 'a+'); 
fwrite($fp,$weather34chartdata); 
fclose($fp);
?>


<?php  // PURPLE AIR additional conversion script included by Andrew Billits 24 April 2018 charts

if($purpleairhardware=='yes'){
function pm25_to_aqi($pm25){
	if ($pm25 > 500.5) {
	  $aqi = 500;
	} else if ($pm25 > 350.5 && $pm25 <= 500.5 ) {
	  $aqi = map($pm25, 350.5, 500.5, 400, 500);
	} else if ($pm25 > 250.5 && $pm25 <= 350.5 ) {
	  $aqi = map($pm25, 250.5, 350.5, 300, 400);
	} else if ($pm25 > 150.5 && $pm25 <= 250.5 ) {
	  $aqi = map($pm25, 150.5, 250.5, 200, 300);
	} else if ($pm25 > 55.5 && $pm25 <= 150.5 ) {
	  $aqi = map($pm25, 55.5, 150.5, 150, 200);
	} else if ($pm25 > 35.5 && $pm25 <= 55.5 ) {
	  $aqi = map($pm25, 35.5, 55.5, 100, 150);
	} else if ($pm25 > 12 && $pm25 <= 35.5 ) {
	  $aqi = map($pm25, 12, 35.5, 50, 100);
	} else if ($pm25 > 0 && $pm25 <= 12 ) {
	  $aqi = map($pm25, 0, 12, 0, 50);
	}
	return $aqi;
}
function map($value, $fromLow, $fromHigh, $toLow, $toHigh){
    $fromRange = $fromHigh - $fromLow;
    $toRange = $toHigh - $toLow;
    $scaleFactor = $toRange / $fromRange;

    // Re-zero the value within the from range
    $tmpValue = $value - $fromLow;
    // Rescale the value to the to range
    $tmpValue *= $scaleFactor;
    // Re-zero back to the to range
    return $tmpValue + $toLow;
}
$json_string             = file_get_contents("jsondata/purpleair.txt");
$parsed_json             = json_decode($json_string);
//$aqiweather["aqi"]       = $parsed_json->{'results'}[1]->{'PM2_5Value'};
$aqiweather["aqi"]       = number_format(pm25_to_aqi(($parsed_json->{'results'}[0]->{'PM2_5Value'} + $parsed_json->{'results'}[1]->{'PM2_5Value'}) / 2),1);
//path is weathercharts/2019/airquality24Jun2019airquality.csv )
$airchartfile = "weather34charts/".date('Y')."/".date('jMY')."airquality.csv";
$airchartdata   = $id.",".date('H:i').",".$aqiweather["aqi"].""."\r\n";
$output=$airchartfile;
$fp2 = fopen($airchartfile, 'a+'); 
fwrite($fp2,$airchartdata); 
fclose($fp2);
}
else "do nothing";
?>


<?php  // Luftdaten additional conversion script 
if($luftdatenhardware=='yes'){
$url = 'jsondata/luftdaten.txt'; // luftdaten JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$weather34luftdaten = json_decode($data,true); // decode the JSON feed
foreach ($weather34luftdaten as $weather34luftdatenaqi) {
}
$aqiweather1["aqi"]       = $weather34luftdatenaqi['sensordatavalues'][0]['value'];
//path is weathercharts/2019/airquality24Jun2019luftdaten.csv )
$airchartfile1 = "weather34charts/".date('Y')."/".date('jMY')."luftdaten.csv";
$airchartdata1   = $id.",".date('H:i').",".$aqiweather1["aqi"].""."\r\n";
$output=$airchartfile1;
$fp3 = fopen($airchartfile1, 'a+'); 
fwrite($fp3,$airchartdata1); 
fclose($fp3);
}
else "do nothing";
?>