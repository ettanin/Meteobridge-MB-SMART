<?php ini_set ('display_errors', 'On'); error_reporting(E_ALL);
// Original script courtesy of Wim Van der Kuil updated 2nd Mar 2018 for meteobridge API//
$filename = "weatherflow.txt";if( isset($_GET['d']) ) {$string=$_GET['d'];file_put_contents($filename, $string);header('Content-Type: text/plain');echo "success";};?>

