<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');
//current eq
date_default_timezone_set($TZ);
//$json_string=file_get_contents('http://earthquake-report.com/feeds/recent-eq?json');
$json_string=file_get_contents('jsondata/eqnotification.txt');$parsed_json=json_decode($json_string,true);$magnitude1=$parsed_json{0}{'magnitude'};$magnitude=number_format($magnitude1,1);$title=$parsed_json{0}['title'];$eqtitle=$parsed_json{0}['location'];$depth=$parsed_json{0}['depth'];$time1=$parsed_json{0}['date_time'];$lati=$parsed_json{0}['latitude'];$longi=$parsed_json{0}['longitude'];$eventime=date( $dateFormat . " " . $timeFormatShort, strtotime("$time1") );$shorttime=date( $timeFormatShort, strtotime("$time1") );?>
<?php
// CALCULATE THE DISTANCE OF LATEST EARTHQUAKE //
// de LOCATION OF HOMEWEATHER STATION //
// Brian Underdown July 28th 2016 revised September 2019//
$eqdist;if ($weather["wind_units"] == 'mph') {$eqdist = round(distance($lat, $lon, $lati, $longi) * 0.621371) ."mi";} else {$eqdist = round(distance($lat, $lon, $lati, $longi)) ."km";}
$eqdista;if ($weather["wind_units"] == 'mph') {$eqdista = round(distance($lat, $lon, $lati, $longi) * 0.621371) ."<smallrainunit>mi";} else {$eqdista = round(distance($lat, $lon, $lati, $longi)) ."<smallrainunit>km";} ?>  
<div class="topframe">
<div class='eqcontainer1' >
<!-- EQ homeweather station earthquakes now with value values 27th July 2016--> 
<?php
// EQ Latest earthquake 
if ($magnitude <= 0) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday1-3>${magnitude}</div>	
	<div class='eqtext'>  <blue> $eqtitle </blue> <br>$eventime<br>	Epicenter: <grey>$eqdist from<br> $stationlocation</div>";
	
} 

else if ($magnitude <= 4.2 && $eqdist<800) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minor</div></div>
	<div class='eqtext2'><regionalred>Regional Alert $heatindexalert8 </regionalred><br><blue> $eqtitle </blue><br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred>from<br> $stationlocation</div>";
} 



else if ($magnitude <= 4.2 ) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minor</div></div>
	<div class='eqtext'><blue>$eqtitle </blue><br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred>  from<br> $stationlocation</div>";
} 

else if ($magnitude <= 5 && $eqdist<800) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;Moderate</div></div>
	<div class='eqtext2'><regionalred>Regional Alert $heatindexalert8 </regionalred><br><blue> $eqtitle </blue> <br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred>  from<br> $stationlocation</div>";	
}

else if ($magnitude <= 5) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;Moderate</div></div>
	<div class='eqtext'> <blue>$eqtitle </blue> <br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred>  from<br> $stationlocation</div>";	
} 

else if ($magnitude<= 6 && $eqdist<800) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday6-8>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strong</div></div>
	<div class='eqtext2'><regionalred>Regional Alert<br> $heatindexalert8 </regionalred><blue> $eqtitle </blue> <br>$eventime<br>
	<maxred>$eqdist</maxred> from<br> $stationlocation</div>";
} 

else if ($magnitude<= 6) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday6-8>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strong</div></div>
	
	<div class='eqtext'><blue> $eqtitle</blue> <br>$eventime<br>
	<maxred>$eqdist</maxred> from<br> $stationlocation</div>";
} 

else if ($magnitude <= 10 && $eqdist<800) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday9-10>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;Very Strong</div></div>
	<div class='eqtext2'><regionalred>Regional Alert $heatindexalert8 </regionalred><br><blue> $eqtitle </blue> <br>$eventime<br><depth>depth:$depth km</depth><br>
	Epicenter: <maxred>$eqdist</maxred></maxred> from<br> $stationlocation</div>";
}

else if ($magnitude <= 10) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday9-10>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;Very Strong</div></div>
	<div class='eqtext'><blue>$eqtitle </blue> <br>$eventime<br><depth>depth:$depth km</depth><br>
	Epicenter: <maxred>$eqdist</maxred></maxred> from<br> $stationlocation</div>";
}

?></div></div>