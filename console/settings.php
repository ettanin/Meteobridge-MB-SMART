<?php //Console NANOSD settings.php December 2019 //   
 include('settings1.php');
 $TZconf = $TZ;// PLEASE LEAVE it is fixed 
 $rise_zenith = 90+ 40/60; // try 50/60 or something/60 until it matches correctly to your sunrise .this allows you to fine tune the sunrise
 $set_zenith = 90+ 36/60;  // try 50/60 or something/60 until it matches correctly to your sunset .this allows you to fine tune the sunset


//set the theme color
if (array_key_exists('theme', $_GET) && ($_GET['theme'] == 'dark' || $_GET['theme'] == 'light')){SetCookie('theme', $_GET['theme'], time()+15552000);
  $theme = $_GET['theme'];} else if (array_key_exists('theme', $_COOKIE) && ($_COOKIE['theme'] == 'dark' || $_COOKIE['theme'] == 'light')) {
  $theme = $_COOKIE['theme'];}



 if (array_key_exists('units', $_COOKIE)) { $units = $_COOKIE['units']; } 
 if (array_key_exists('units', $_GET) && ($_GET['units'] == 'us' || $_GET['units'] == 'uk' || $_GET['units'] == 'metric' || $_GET['units'] == 'scandinavia')) 
 { setcookie('units', $_GET['units']); $units = $_GET['units']; } 
 if ($units == 'uk') { $windunit = 'mph'; $tempunit = 'C'; $rainunit = 'mm'; $pressureunit = "hPa"; } 
 else if ($units == 'scandinavia') { $windunit = 'm/s'; $tempunit = 'C'; $rainunit = 'mm'; $pressureunit = "hPa"; } 
 else if ($units == 'metric') { $windunit = 'km/h'; $tempunit = 'C'; $rainunit = 'mm'; $pressureunit = "hPa"; } 
 else if ($units == 'us') { $windunit = 'mph'; $tempunit = 'F'; $rainunit = 'in'; $pressureunit = "inHg"; } 
 
 
 
 ?>