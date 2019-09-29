<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');
//current eq
date_default_timezone_set($TZ);
$json = file_get_contents('jsondata/eqnotification.txt'); 
$data = json_decode($json,true);
// change the variable name to devices which is clearer.
//echo $data['features'][0]['properties']['mag'];
$magnitude = $data['features'][0]['properties']['mag'];
$eqtitle = $data['features'][0]['properties']['flynn_region'];
$depth = $data['features'][0]['properties']['depth'];
$time = $data['features'][0]['properties']['time'];
$lati = $data['features'][0]['properties']['lat'];
$longi = $data['features'][0]['properties']['lon'];
//$eventime =$data['features'][0]['properties']['time'];
$eventime=date('jS,M,D H:i',strtotime($time) );
$eqdist= round(distance($lat, $lon, $lati, $longi)) ;?>
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

if ($magnitude <= 4.2 && $eqdist<150) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>".number_format($magnitude,1)."</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minor</div></div>
	<div class='eqtext2'><regionalred>Local Alert $heatindexalert8 </regionalred><br><blue> $eqtitle </blue><br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred> from<br> $stationlocation</div>";
} 



else if ($magnitude <= 4.2 && $eqdist<150) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>".number_format($magnitude,1)."</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minor</div></div>
	<div class='eqtext2'><regionalred>Awareness Alert $heatindexalert8 </regionalred><br><blue> $eqtitle </blue><br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred> from<br> $stationlocation</div>";
} 



else if ($magnitude <= 4.2 ) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>".number_format($magnitude,1)."</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minor</div></div>
	<div class='eqtext'><blue>$eqtitle </blue><br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred>  from<br> $stationlocation</div>";
} 

else if ($magnitude <= 5 && $eqdist<150) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>".number_format($magnitude,1)."</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;Moderate</div></div>
	<div class='eqtext2'><regionalred>Local High Alert $heatindexalert8 </regionalred><br><blue> $eqtitle </blue> <br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred>  from<br> $stationlocation</div>";	
}

else if ($magnitude <= 5) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday4-5>".number_format($magnitude,1)."</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;Moderate</div></div>
	<div class='eqtext'> <blue>$eqtitle </blue> <br>$eventime<br>
	Epicenter: <maxred>$eqdist</maxred>  from<br> $stationlocation</div>";	
} 

else if ($magnitude<= 6 && $eqdist<150) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday6-8>".number_format($magnitude,1)."</div>	
	<div class='eqt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strong</div></div>
	<div class='eqtext2'><regionalred>Local Dangerous Alert<br> $heatindexalert8 </regionalred><blue> $eqtitle </blue> <br>$eventime<br>
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
	<div class='eqtext2'><regionalred>Dangerous Alert $heatindexalert8 </regionalred><br><blue> $eqtitle </blue> <br>$eventime<br><depth>depth:$depth km</depth><br>
	Epicenter: <maxred>$eqdist</maxred></maxred> from<br> $stationlocation</div>";
}

else if ($magnitude <= 10) {
    echo "<div class='eqcaution'>Magnitude</div><div class=eqtoday9-10>${magnitude}</div>	
	<div class='eqt'>&nbsp;&nbsp;Very Strong</div></div>
	<div class='eqtext'><blue>$eqtitle </blue> <br>$eventime<br><depth>depth:$depth km</depth><br>
	Epicenter: <maxred>$eqdist</maxred></maxred> from<br> $stationlocation</div>";
}

?></div></div>