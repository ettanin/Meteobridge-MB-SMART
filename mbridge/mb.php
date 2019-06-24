<?php
ini_set ('display_errors', 'On');
error_reporting(E_ALL);
include('../livedata.php');

// Original script courtesy of Wim Van der Kuil updated 29th May 2017 for meteobridge API//
$filename = "MBrealtimeupload.txt";
if( isset($_GET['d']) ) {
	$string=$_GET['d'];
	file_put_contents($filename, $string);
	header('Content-Type: text/plain');
	echo "success";
}
if ($weatherflowoption=='yes'){
	$section1 = file_get_contents('https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key='.$somethinggoeshere.'');
	file_put_contents('jsondata/weatherflow.txt', $section1);
}
?>