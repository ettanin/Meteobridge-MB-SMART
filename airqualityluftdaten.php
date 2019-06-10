<body>
<?php  include('shared.php');include('common.php');

$url = 'jsondata/luftdaten.txt'; // luftdaten JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$weather34luftdaten = json_decode($data,true); // decode the JSON feed
foreach ($weather34luftdaten as $weather34luftdatenaqi) {
	//echo $weather34luftdatenaqi['sensordatavalues'][0]['value'];
}
$aqiweather["aqi"]=$weather34luftdatenaqi['sensordatavalues'][0]['value'];
$aqiweather["pm"]=$weather34luftdatenaqi['sensordatavalues'][0]['value_type'];
if($aqiweather["pm"]=="P1"){$aqiweather["pm"]="PM10";}
if($aqiweather["pm"]=="P2"){$aqiweather["pm"]="PM2.5";}
?>
<div class="moduleupdatetime"><span><?php if(file_exists('jsondata/luftdaten.txt') && time() - filemtime('jsondata/luftdaten.txt')<1800) {
  echo $online." ".date($timeFormat, filemtime('jsondata/luftdaten.txt'));
  } else {
  echo $offline. '<offline> Offline </offline>';
  }?></div> 
<div class="airqualitywordbig">Luftdaten Air</div>
<div class="tempconverter2">
<?php //WEATHER34 AIR QAULITY SVG
if ($aqiweather["aqi"]>200){echo "<div class=tempconvertercirclepurple>".$aqiweather["pm"].""; }

else if ($aqiweather["aqi"]>150){echo "<div class=tempconvertercirclered>".$aqiweather["pm"].""; }
else if ($aqiweather["aqi"]>100){echo "<div class=tempconvertercircleorange>".$aqiweather["pm"].""; }
else if ($aqiweather["aqi"]>50){echo "<div class=tempconvertercircleyellow>".$aqiweather["pm"].""; }
else if ($aqiweather["aqi"]>=0){echo "<div class=tempconvertercirclegreen>".$aqiweather["pm"].""; }
?>


</div></div></div>

<div class="airqualitymoduleposition">
<div class="tempcontainer">
<?php //WEATHER34 AIR QAULITY SVG
if ($aqiweather["aqi"]>300){echo "<div class=air300><img src='css/aqi/hazair.svg?ver=1.4' width='110px' height='100px' alt='weather34 hazardous air quality' title='weather34 hazardous air quality' "; }
else if ($aqiweather["aqi"]>200){echo "<div class=air200><img src='css/aqi/vhair.svg?ver=1.4' width='110px' height='100px' alt='weather34 very unhealthy air quality' title='weather34 very unhealthy air quality'" ; }
else if ($aqiweather["aqi"]>150){echo "<div class=air150><img src='css/aqi/uhair.svg?ver=1.4' width='110px' height='100px' alt='weather34 unhealthy air quality' title='weather34 unhealthy air quality'" ; }
else if ($aqiweather["aqi"]>100){echo "<div class=air100><img src='css/aqi/uhfsair.svg?ver=1.4' width='110px' height='100px'  alt='weather34 unhealthy for some air quality' title='weather34 unhealthy for some air quality'" ; }
else if ($aqiweather["aqi"]>50){echo "<div class=air50><img src='css/aqi/modair.svg?ver=1.4' width='110px' height='100px' alt='weather34 moderate air quality' title='weather34 moderate air quality'" ; }
else if ($aqiweather["aqi"]>=0){echo "<div class=air0><img src='css/aqi/goodair.svg?ver=1.4' width='110px' height='100px' alt='weather34 good air quality' title='weather34 good air quality'" ; }

?>
</div></div></div>
  
<div class="airsvg">
<?php 
if ($aqiweather["aqi"]>300){echo "<div class=dottedcirclered>" ; }
else if ($aqiweather["aqi"]>200){echo "<div class=dottedcirclepurple>" ; }
else if ($aqiweather["aqi"]>150){echo "<div class=dottedcirclered>" ; }
else if ($aqiweather["aqi"]>100){echo "<div class=dottedcircleorange>" ; }
else if ($aqiweather["aqi"]>50){echo "<div class=dottedcircleyellow>" ; }
else if ($aqiweather["aqi"]>=0){echo "<div class=dottedcirclegreen>" ; }
?>
<div class="airvalue">
<?php //WEATHER34 AIR QAULITY VALUE
 if ($aqiweather["aqi"] >300){echo $aqiweather["aqi"] ;echo "" ; } 
 else if ($aqiweather["aqi"] >200){echo $aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >150){echo $aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >100){echo $aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >50){echo $aqiweather["aqi"] ;echo "" ; }
 else if ($aqiweather["aqi"] >=0){echo $aqiweather["aqi"] ;echo "" ; }
 //WEATHER34 air quality description
 if ($aqiweather["aqi"]>300){echo "<br><airdescription><indoorred>&nbsp;".$lang['Hazordous']."</airdescription>";}
 else if ($aqiweather["aqi"]>200){echo "<br><airdescription><indoorpurple>".$lang['VeryUnhealthy']."</airdescription>  ";}
 else if ($aqiweather["aqi"]>150){echo "<br><airdescription><indoorred>&nbsp;".$lang['Unhealthy']."</airdescription>";}
 else if ($aqiweather["aqi"]>100){echo "<br><airdescription><indoororange>".$lang['UnhealthyFS']."</airdescription>";} 
 else if ($aqiweather["aqi"]>50){echo "<br><airdescription><indooryellow>&nbsp;".$lang['Moderate']."</airdescription>";} 
 else if ($aqiweather["aqi"]>=0){echo "<br><airdescription><indoorgreen>&nbsp; &nbsp;".$lang['Good']."</airdescription>";} 
 ?>
</div></div></div>
<div class="airwarning"><?php 
if($aqiweather["aqi"]>300)echo $airalertred ;
else if($aqiweather["aqi"]>200)echo $airalertpurple ;
else if($aqiweather["aqi"]>150)echo $airalertred ;
else if($aqiweather["aqi"]>100)echo $airalertorange ;
else if($aqiweather["aqi"]>50)echo $airokyellow ;
else echo $airok ;?></div>


</body>