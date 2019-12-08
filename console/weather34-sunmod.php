<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 										       #
	# 	     MB SMART Version Revised September 2019 								                   #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');header('Content-type: text/html; charset=utf-8');
$TZconf = $TZ; 
$rise_zenith = 90+ 40/60;  
$set_zenith = 90+ 36/60; 
date_default_timezone_set($TZ);
# heavily modified version of Wim weather display version cleaner output 
$result = date_sun_info(time(), $lat, $lon);time();$nextday = time() + 24*60*60;$result2 = date_sun_info($nextday,$lat, $lon);
//weather34 sunrise 
$nextrise = $result['sunrise']; $now = time(); if ($now > $nextrise) { $nextrise = date('H:i',$result2['sunrise']);$nextrisetxt = 'Tomorrow';} else { $nextrisetxt = 'Today';$nextrise = date('H:i',$nextrise);} 
//weather34 sunset
$nextset = $result['sunset'];if ($now > $nextset) { $nextset = date('H:i',$result2['sunset']);
$nextsettxt = 'Tomorrow';}else { $nextsettxt = 'Today'; $nextset = date('H:i',$nextset);} 
//weather34 sunrise firstlight
$nextfirstlight = $result['civil_twilight_begin']; $now = time();if ($now > $nextfirstlight) {$nextfirstlight = date('H:i',$result2['civil_twilight_begin']); } else {$nextfirstlight = date('H:i',$nextfirstlight);} 
//weather34 sunset last light
$nextlastlight = $result['civil_twilight_end'];if ($now > $nextlastlight) { $nextlastlight = date('H:i',$result2['civil_twilight_end']);}else {$nextlastlight = date('H:i',$nextlastlight);}
$firstrise = $result['sunrise']; $secondrise = $result2['sunrise']; $firstset = $result ['sunset'];if ($now < $firstrise) { $time = $firstrise - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time); $txt = '<sunsetvalue>Till Sunrise';} elseif ($now < $firstset) { $time = $firstset - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time); $txt = ' <sunsetvalue>Till Sunset';} else { $time = $secondrise - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time); $txt ='<sunsetvalue>Till Sunrise';}echo "</sunsetvalue>";

?>
<div class="sunblock">
</div>

<div class="sunrise1">
<?php echo $sunuphalf.' '.$nextrisetxt.' '.$nextrise.'  <br>'.$sunuphalf. ' First Light (<blue>'.$nextfirstlight.'</blue>)';?>

</div>

<div class="sunset1">
<?php echo $sundownhalf.' '.$nextsettxt.' '.$nextset.'  <br>'.$sundownhalf. ' Last Light (<blue>'.$nextlastlight.'</blue>)';?>
</div>
<div class="daylight1"><?php 
if (date('now') > $result['sunrise']) echo $sunlight;
else echo  "<belowthehorizon>Sun is now below the horizon</belowthehorizon>";?>
</div>

