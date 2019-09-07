<?php include('livedata.php');error_reporting(0);?>
<style>body{background:rgba(30, 31, 35, 1.000);}
.webcamlarge{
-webkit-border-radius:4px;	-moz-border-radius:4px;	-o-border-radius:4px;	-ms-border-radius:4px;border-radius:4px;border:solid RGBA(84, 85, 86, 1.00) 2px;	width:98%; 	height:380px;}
a{color:#aaa;text-decoration:none} 
.weather34darkbrowser{position:relative;background:0;width:96%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box;font-family:Arial, Helvetica, sans-serif}
</style>
<link rel="stylesheet" href="weather34chartstyle.css">
</head>
<body>
<?php
  echo '<div class="weather34darkbrowser" url="Radar for '.$stationlocation.'"></div>';

  echo '<iframe width="100%" height="82%" scrolling="no" src="https://embed.windy.com/embed2.html?lat='.$lat.'&lon='.$lon.'&zoom=8&level=surface&overlay=radar&menu=&message=true&marker=&calendar=&pressure=&type=map&location=coordinates&detail=&detailLat='.$lat.'&detailLon='.$lon.'&metricWind='.$weather['wind_units'].'&metricTemp=%C2%B0'.$weather['temp_units'].'&metricRain='.$weather['rain_units'].'&radarRange=-1" frameborder="0"></iframe>';
  
echo "</span>";
  ?>
<div class="weather34browser-footer">
<span style="position:absolute;color:#aaa;font-size:10px;font-family:arial;padding-top:13px;margin-left:40px;display:block;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
Radar/Map provided by Windy.com</span>

</div>
