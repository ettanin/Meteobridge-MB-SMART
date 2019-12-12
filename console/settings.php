<?php //settings.php December 2016 // 
  include('console-settings.php');      
 //set the theme color
if (array_key_exists('theme', $_GET) && ($_GET['theme'] == 'dark' || $_GET['theme'] == 'light')){SetCookie('theme', $_GET['theme'], time()+15552000);
$theme = $_GET['theme'];} else if (array_key_exists('theme', $_COOKIE) && ($_COOKIE['theme'] == 'dark' || $_COOKIE['theme'] == 'light')) {
$theme = $_COOKIE['theme'];}
//set the units 
 $units = ""; if (array_key_exists('units', $_COOKIE)) { $units = $_COOKIE['units']; } 
 if (array_key_exists('units', $_GET) && ($_GET['units'] == 'us' || $_GET['units'] == 'uk' || $_GET['units'] == 'metric' || $_GET['units'] == 'scandinavia')) { setcookie('units', $_GET['units']); $units = $_GET['units']; } 
 if ($units == 'uk') { $windunit = 'mph'; $tempunit = 'C'; $rainunit = 'mm'; $pressureunit = "hPa"; } 
 else if ($units == 'scandinavia') { $windunit = 'm/s'; $tempunit = 'C'; $rainunit = 'mm'; $pressureunit = "hPa"; } 
 else if ($units == 'metric') { $windunit = 'km/h'; $tempunit = 'C'; $rainunit = 'mm'; $pressureunit = "hPa"; } 
 else if ($units == 'us') { $windunit = 'mph'; $tempunit = 'F'; $rainunit = 'in'; $pressureunit = "inHg"; } ?>