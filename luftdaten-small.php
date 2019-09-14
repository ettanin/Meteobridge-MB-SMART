<body>
<?php  
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019						  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('common.php');
$url = 'jsondata/luftdaten.txt'; // luftdaten JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$weather34luftdaten = json_decode($data,true); // decode the JSON feed
foreach ($weather34luftdaten as $weather34luftdatenaqi) {}
$aqiweather["aqi"]=$weather34luftdatenaqi['sensordatavalues'][0]['value'];
$aqiweather["pm"]=$weather34luftdatenaqi['sensordatavalues'][0]['value_type'];
if($aqiweather["pm"]=="P1"){$aqiweather["pm"]="PM10";}
if($aqiweather["pm"]=="P2"){$aqiweather["pm"]="PM2.5";}
?>
<div class="topframe">
<div class="luftairqualitymoduleposition">
<?php //WEATHER34 LUFTDATEN AIR QAULITY SVG
if ($aqiweather["aqi"]>300){echo "<purpleluft><img src='css/aqi/hazair.svg' width='80px' height='60px' alt='weather34 hazardous air quality' title='weather34 hazardous air quality'> </purpleluft>"; }
else if ($aqiweather["aqi"]>200){echo "<redluft><img src='css/aqi/vhair.svg'width='80px' height='60px' alt='weather34 very unhealthy air quality' title='weather34 very unhealthy air quality'></redluft>" ; }
else if ($aqiweather["aqi"]>150){echo "<redluft><img src='css/aqi/uhair.svg' width='80px' height='60px' alt='weather34 unhealthy air quality' title='weather34 unhealthy air quality'></redluft>" ; }
else if ($aqiweather["aqi"]>100){echo "<orangeluft><img src='css/aqi/uhfsair.svg' width='80px' height='60px'  alt='weather34 unhealthy for some air quality' title='weather34 unhealthy for some air quality'></orangeluft>" ; }
else if ($aqiweather["aqi"]>50){echo "<yellowluft><img src='css/aqi/modair.svg' width='80px' height='60px' alt='weather34 moderate air quality' title='weather34 moderate air quality'></yellowluft>" ; }
else if ($aqiweather["aqi"]>=0){echo "<greenluft><img src='css/aqi/goodair.svg' width='80px' height='60px' alt='weather34 good air quality' title='weather34 good air quality'></greenluft>" ; }
?>
</div>
<div class="luftairvalueaq">
<?php //WEATHER34 LUFTDATEN AIR QAULITY VALUE
 if ($aqiweather["aqi"] >300){echo "<luftpurple>".$aqiweather["aqi"] ;echo "<luftairvalueaqpm>".$aqiweather["pm"] ; } 
 else if ($aqiweather["aqi"] >200){echo "<luftred>".$aqiweather["aqi"] ;echo "<luftairvalueaqpm>".$aqiweather["pm"] ; } 
 else if ($aqiweather["aqi"] >150){echo "<luftred>".$aqiweather["aqi"] ;echo "<luftairvalueaqpm>".$aqiweather["pm"] ; } 
 else if ($aqiweather["aqi"] >100){echo "<luftorange>".$aqiweather["aqi"] ;echo "<luftairvalueaqpm>".$aqiweather["pm"] ; } 
 else if ($aqiweather["aqi"] >50){echo "<luftyellow>".$aqiweather["aqi"] ;echo "<luftairvalueaqpm>".$aqiweather["pm"] ; } 
 else if ($aqiweather["aqi"] >=0){echo "<luftgreen>".$aqiweather["aqi"] ;echo "<luftairvalueaqpm>".$aqiweather["pm"] ; } ?>
 </div>
 <div class="luftairvalue">
 <?php //WEATHER34 LUFTDATEN AIR QAULITY description
 if ($aqiweather["aqi"]>300){echo "&nbsp;".$lang['Hazordous']."";}
 else if ($aqiweather["aqi"]>200){echo "".$lang['VeryUnhealthy']."";}
 else if ($aqiweather["aqi"]>150){echo "&nbsp;".$lang['Unhealthy']."";}
 else if ($aqiweather["aqi"]>100){echo "".$lang['UnhealthyFS']."";} 
 else if ($aqiweather["aqi"]>50){echo "&nbsp;".$lang['Moderate']."";} 
 else if ($aqiweather["aqi"]>=0){echo "&nbsp; &nbsp;".$lang['Good']."";} 
 ?>
</div></div></div>
</body>