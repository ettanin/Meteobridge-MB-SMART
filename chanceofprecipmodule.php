<?php include_once('livedata.php');error_reporting(0); date_default_timezone_set($TZ);
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
	####################################################################################################
	#	METEOBRIDGE WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2016-17-18-19                          #
	#	CREATED FOR MB-SMART TEMPLATE at https://weather34.com/homeweatherstation/  				   # 
	# 	Precipitation FORECAST:  Released November 2019										           #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
$precipsnow='
<svg x="0px" y="0px" viewBox="0 0 298 298" fill="#01A4B5" width="26px" ><g>	<path d="M289.5,140.5h-24.606l11.031-11.03c2.93-2.929,2.93-7.678,0.001-10.606c-2.929-2.929-7.678-2.93-10.606-0.001
		L243.681,140.5h-36.369l16.182-17.392c2.821-3.032,2.65-7.777-0.383-10.6c-1.243-1.156-2.775-1.802-4.345-1.961
		c-0.952-0.047-21.495-0.003-21.495-0.003L221.315,86.5H251.5c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5h-15.186l17.69-17.69
		c2.929-2.93,2.929-7.678,0-10.608c-2.93-2.928-7.844-2.928-10.774,0L225.167,61.1V45.5c0-4.143-3.357-7.5-7.5-7.5
		c-4.143,0-7.5,3.357-7.5,7.5v30.601l-24.837,25.004l-0.415-22.645c-0.001-0.036,0.035-0.07,0.034-0.106
		c-0.035-1.824-0.704-3.641-2.07-5.059c-2.873-2.982-7.778-3.07-10.761-0.194l-15.951,15.226V53.107l21.47-21.304
		c2.929-2.93,3.012-7.678,0.083-10.607c-2.93-2.928-7.803-2.928-10.732,0l-10.821,10.696V7.5c0-4.143-3.357-7.5-7.5-7.5
		c-4.143,0-7.5,3.357-7.5,7.5v24.393l-10.53-10.696c-2.93-2.928-7.594-2.928-10.524,0c-2.929,2.93-3.054,7.678-0.125,10.607
		l21.179,21.304v35.421l-16.176-15.475c-3.009-2.847-7.67-2.718-10.52,0.289c-1.075,1.136-1.683,2.52-1.914,3.955
		c-0.142,0.583-0.203,1.188-0.201,1.811l-0.088,21.229l-25.1-24.944V45.5c0-4.143-3.357-7.5-7.5-7.5s-7.5,3.357-7.5,7.5v14.894
		L55.142,43.202c-2.93-2.928-7.594-2.928-10.524,0c-2.929,2.93-2.887,7.678,0.042,10.608L62.392,71.5H46.5
		c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5h30.892l24.744,24.744l-23.057,0.831c-4.021,0.146-7.524,3.435-7.563,7.418
		c-0.004,0.112-0.349,0.225-0.349,0.337c0,0.003,0,0.007,0,0.011c0,0.008,0.345,0.017,0.345,0.024
		c0.045,1.875,0.955,3.736,2.395,5.158L89.748,140.5H55.025l-21.638-21.638c-2.93-2.928-7.678-2.928-10.607,0
		c-2.929,2.93-2.929,7.678,0,10.607l11.03,11.03H8.5c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5h25.02L22.78,166.239
		c-2.929,2.93-2.929,7.678,0,10.607c1.465,1.464,3.385,2.196,5.304,2.196c1.919,0,3.839-0.732,5.304-2.196L54.734,155.5h35.027
		l-15.253,16.394c-2.821,3.032-2.65,7.777,0.383,10.6c1.444,1.344,3.277,2.009,5.106,2.009c0.034,0,0.068-0.005,0.103-0.005
		c0.022,0,0.044,0.003,0.065,0.003c0.018,0,0.037,0,0.055,0l22.005-0.125L77.101,209.5H46.5c-4.143,0-7.5,3.357-7.5,7.5
		s3.357,7.5,7.5,7.5h15.601l-17.399,17.399c-2.929,2.93-2.929,7.678,0,10.607c1.465,1.464,3.385,2.196,5.304,2.196
		c1.919,0,3.672-0.732,5.137-2.196l17.025-17.191V250.5c0,4.143,3.357,7.5,7.5,7.5s7.5-3.357,7.5-7.5v-30.185l25.445-25.278
		l0.977,24.39c0.148,4.046,3.517,7.306,7.532,7.225c1.364-0.027,2.844-0.465,4.312-1.543c1.063-0.781,15.734-15.812,15.734-15.812
		v35.385l-20.971,21.137c-2.93,2.929-2.846,7.678,0.082,10.607c1.465,1.465,3.425,2.197,5.345,2.197
		c1.919,0,3.693-0.732,5.157-2.196l10.387-10.532V290.5c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5v-25.31l11.404,11.237
		c1.465,1.464,3.468,2.196,5.387,2.196c1.919,0,3.881-0.732,5.345-2.196c2.929-2.93,2.783-7.678-0.146-10.607l-21.99-21.845v-35.7
		c0,0,13.729,12.896,15.896,14.976c2.167,2.08,3.942,3.25,6.525,3.25c0.015,0,0.03,0,0.046,0c4.142,0,7.48-3.604,7.455-7.746
		l-0.306-23.696l24.384,24.551V250.5c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5v-15.891l18.064,17.897
		c1.465,1.464,3.467,2.196,5.387,2.196c1.919,0,3.88-0.732,5.345-2.196c2.929-2.93,2.95-7.678,0.021-10.607L236.605,224.5H251.5
		c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5h-29.894l-25.742-25.742l23.059-0.831c0.082-0.003,0.162-0.016,0.243-0.021
		c0.03-0.002,0.06-0.005,0.09-0.008c3.977-0.319,7.037-3.709,6.892-7.736c-0.087-2.424-1.32-4.531-3.155-5.837L209.138,155.5h34.835
		l21.345,21.346c1.465,1.465,3.384,2.197,5.304,2.197c1.919,0,3.839-0.732,5.303-2.196c2.93-2.929,2.93-7.678,0.001-10.606
		l-10.74-10.74H289.5c4.143,0,7.5-3.357,7.5-7.5S293.643,140.5,289.5,140.5z M200.795,125.483L186.823,140.5h-19.507l15.002-15.002
		L200.795,125.483z M170.21,95.784l0.356,20.002l-14.399,14.315V109.16L170.21,95.784z M127.263,95.865l13.904,13.323v20.205
		l-13.925-14.008L127.263,95.865z M96.862,126.444l19.762-0.712l14.768,14.768h-20.299L96.862,126.444z M97.246,169.477
		L110.25,155.5h20.851l-13.841,13.841L97.246,169.477z M127.863,201.599l-0.854-21.042l14.158-14.241v21.604L127.863,201.599z
		 M170.819,201.264l-14.652-13.478v-22.179l14.442,14.359L170.819,201.264z M200.991,168.564l-19.614,0.706l-13.77-13.77h20.292
		L200.991,168.564z"/></g></svg>';	
		$preciprain='<svg x="0px" y="0px" width="26px" viewBox="0 0 345.13 345.13" ><g> <path style="fill:#01A4B5;" opacity=".8"  d="M264.25,301.7c-2.45,3.01-5.08,5.91-7.88,8.71c-23.14,23.14-53.47,34.72-83.8,34.72 
		s-60.66-11.58-83.81-34.72c-22.86-22.86-34.71-53.2-34.71-83.84c0-21.31,5.74-42.77,17.5-61.94l21.16-34.48L172.57,0l31.67,51.62
		l24.28,39.56l45.06,73.45C300.18,207.99,295.971,263.03,264.25,301.7z"/><path style="fill:#01A4B5;" d="M264.25,301.7L92.71,130.15L172.57,0l31.67,51.62l24.28,39.56l45.06,73.45 C300.18,207.99,295.971,263.03,264.25,301.7z"/></g>';
	
//start the wu output
$json='jsondata/wuforecast.txt';
$weather34wuurl=file_get_contents($json);
$parsed_weather34wujson = json_decode($weather34wuurl,false);
{    if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[1];	
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[1];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[1];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[1];	 
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];	 
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 
	 }	 
	 else {
	 $wuskydayTime = $parsed_weather34wujson->{'daypart'}[0]->{'daypartName'}[0];	
	 $wuskydayacumm = $parsed_weather34wujson->{'daypart'}[0]->{'snowRange'}[0];
	 $wuskydayPrecipType = $parsed_weather34wujson->{'daypart'}[0]->{'precipType'}[0];
	 $wuskydayprecipIntensity = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[0];
	 $wuskydayPrecipProb = $parsed_weather34wujson->{'daypart'}[0]->{'precipChance'}[0];	 
	 $wuskydaysnow = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[0];	 
	 $wuskydaynight = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[0];	  
	 }
	 $wuskydaynight1 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[1];
	 $wuskydaynight2 = $parsed_weather34wujson->{'daypart'}[0]->{'dayOrNight'}[2]; 
	 //rain
	 $wuskyrain1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpf'}[1];	
	 //snow
	 $wuskysnow1 = $parsed_weather34wujson->{'daypart'}[0]->{'qpfSnow'}[1];
	
	 
	 }?>
<body>
<div class="moduleupdatetime"><?php $forecastime=filemtime('jsondata/wuforecast.txt');$weather34wuurl = file_get_contents("jsondata/wuforecast.txt");if(filesize('jsondata/wuforecast.txt')<1){echo $offline." Offline<br>";}else echo $online. " ".date($timeFormat,$forecastime);?></div>  
<div class="simsekcontainer">

<div class="simsekdata" style="width:50px;margin-left:-8px">Probability</div>
<?php //weather34 sez lets make nice 
if($wuskydayPrecipProb>=0){echo '<div class=simsek style="background:RGBA(1,164,181,1.00)">'.$wuskydayPrecipProb.'%';}
?>
</smalltempunit></div>
<div class="rainprob" > <?php echo $wuskydayTime?><valuetext>
</valuetext></div></div></div></div></div>

<div class="precipinfo">
<?php  //weather precip
if ($wuskydaysnow>0){ echo 'Possible <blue>Snowfall</blue>';}
 else if ($wuskydayPrecipProb>20){ echo 'Possible <blue>Rainfall</blue>';}
 else if ($wuskydayPrecipProb>10){ echo 'Chance of <blue>Rainfall</blue>';}
 else echo 'No <blue>Precipitation</blue> expected'; ?><br>
<?php 
if ($wuskydayPrecipProb>=70){echo "High <blue>Probability</blue>";}
 else if ($wuskydayPrecipProb>=40){echo "Medium <blue>Probability</blue>";}
 else if ($wuskydayPrecipProb>=10){echo "Low <blue>Probability</blue>";}
 else if ($wuskydayPrecipProb>=0){echo "No <blue>Probability</blue>";}
?><br> 
Accumulation<blue>
<?php 
 if ($wuskydaysnow>0){ echo $wuskydaysnow ." cm";}
 else if ($wuskydayprecipIntensity>0){ echo $wuskydayprecipIntensity ." ".$rainunit;} 
 else echo "0 ".$rainunit;
 ?></blue> 
 <br><span style="float:right;margin-top:-25px;">
 <?php 
 if ($wuskydaysnow>0){echo $precipsnow;}
 else if ($wuskydayPrecipProb>0){echo $preciprain;}
 else echo $preciprain;?>
 </span> 
</div>
<div class="rainconverter" style="text-transform:uppercase">
<?php
//active-quiet
if($wuskydayPrecipProb>0){echo "<div class=rainconvertercircle>".$wuskydayPrecipType ;}else echo "<div class=rainconvertercircle>Low";?></div>