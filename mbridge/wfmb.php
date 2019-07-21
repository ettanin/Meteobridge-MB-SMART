<?php ####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

ini_set ('display_errors', 'Off'); error_reporting(E_ALL);
// Original script courtesy of Wim Van der Kuil updated 26 FEB 2018 for weaherflow meteobridge API//
$filename = "wfrealtime.txt";if( isset($_GET['d']) ) {$string=$_GET['d'];file_put_contents($filename, $string);header('Content-Type: text/plain');echo "success";};?>
