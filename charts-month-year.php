<?php include('livedata.php');
// pure csv without mysql extras built September 2018//
date_default_timezone_set($TZ);
$date = date_create();
$year=date('Y');
//disable error logging if you get server errors
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);ini_set("display_errors","off");
//$weatherchartfile = "result2.txt";
$weatherchartfilemonth ="weather34charts/".$year."/".date('M').".csv";
$weatherchartfileyear = "weather34charts/".date('Y').".csv";
//(date),MAX(outsideTemp),MIN(outsideTemp),MAX(dewpoint),MIN(dewpoint),MAX(raintoday),MAX(windspeed),ROUND(AVG(windSpeed),2),MAX(barometer),MIN(barometer)
$id=0;
//create the current month file
$weather34chartdata   = date('j M').",".$meteobridgeapi[26].",".$meteobridgeapi[28].",".$meteobridgeapi[63].",".$meteobridgeapi[65].",".$meteobridgeapi[9].",".$meteobridgeapi[30].",".$meteobridgeapi[158].",".$meteobridgeapi[34].",".$meteobridgeapi[36].""."\r\n";
$output=$weatherchartfilemonth;
$fp = fopen($weatherchartfilemonth, 'a'); 
echo fwrite($fp,$weather34chartdata); 
fclose($weatherchartfilemonth);

//create the year file
//(date),MAX(outsideTemp),MIN(outsideTemp),MAX(dewpoint),MIN(dewpoint),MAX(raintoday),MAX(windgustmph),ROUND(AVG(windSpeed),2),MAX(barometer),MIN(barometer)
$weather34chartdata   = date('j M').",".$meteobridgeapi[26].",".$meteobridgeapi[28].",".$meteobridgeapi[63].",".$meteobridgeapi[65].",".$meteobridgeapi[9].",".$meteobridgeapi[30].",".$meteobridgeapi[158].",".$meteobridgeapi[34].",".$meteobridgeapi[36].""."\r\n";
$output=$weatherchartfileyear;
$fp = fopen($weatherchartfileyear, 'a'); 
echo fwrite($fp,$weather34chartdata); 
fclose($weatherchartfileyear);
?>


