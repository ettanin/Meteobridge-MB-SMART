<?php  

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################


//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
require_once('livedata.php');require_once('common.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<style>
.thearrow2{-webkit-transform:rotate(<?php echo $weather["wind_direction"];?>deg);-moz-transform:rotate(<?php echo $weather["wind_direction"];?>deg);-o-transform:rotate(<?php echo $weather["wind_direction"];?>deg);-ms-transform:rotate(<?php echo $weather["wind_direction"];?>deg);transform:rotate(<?php echo $weather["wind_direction"];?>deg);position:absolute;z-index:200;top:0;left:50%;margin-left:-5px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}
.thearrow2:after{content:'';position:absolute;left:50%;top:0;height:10px;width:10px;background-color:NONE;width:0;height:0;border-style:solid;border-width:14px 9px 0 9px;border-color:rgba(208, 95, 45, 1.000) transparent transparent transparent;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s}
.thearrow2:before{content:'      ';color:rgba(208, 95, 45, 1.000);font-family:Arial, Helvetica, sans-serif;font-size:.85em;width:5px;height:5px;position:absolute;z-index:9;left:2px;top:-5px;border:1px solid RGBA(255,255,255,1);-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}

.thearrow1{-webkit-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-moz-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-o-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-ms-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);position:absolute;z-index:200;top:0;left:50%;margin-left:-5px;width:10px;height:50%;-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-o-transform-origin:50% 100%;-ms-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s;z-index:90;font-size:.6em;color:rgba(132, 151, 167, 1.000);font-family::Arial, Helvetica, sans-serif,sytem;}
.thearrow1:after{content:'';position:absolute;text-align:left;left:50%;top:0;width:0;height:0;-webkit-border-radius:0;border-radius:0;border-left:6px solid transparent;border-right:6px solid transparent;border-top:12px solid #06a2b1;border-bottom:0;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-transition-duration:3s;-moz-transition-duration:3s;-o-transition-duration:3s;-ms-transition-duration:3s;transition-duration:3s;background:0;z-index:90;}
.thearrow1:before{content:'Avg';width:5px;height:5px;position:absolute;z-index:90;left:-2px;top:-18px;border:0;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%}
.avgw{ width:27px; height:27px;	margin-left:35px;-webkit-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-moz-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-o-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);-ms-transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);transform:rotate(<?php echo $weather["wind_direction_avg"];?>deg);}
spancalm{postion:relative;font-family:weathertext,Arial;font-size:26px;}</style>
<div class="moduleupdatetime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div> <br />
<div class="windspeedvalues"><div class="windspeedvalue">
<?php  
//weather34-windspeed avg
if ($weather["wind_speed"]<10){echo "&nbsp;".number_format($weather["wind_speed"],1);}else echo number_format($weather["wind_speed"],1);?>
<div class="windunitidspeed"><?php echo $lang['Average'];?></div><div class="windunitspeed"><?php echo $weather["wind_units"]?></div></div>
<div class="windgustvalue">
<?php 
//weather34-windgust
if ($weather["wind_gust_speed"]*$toKnots>=26.9978){echo "<windred>",number_format($weather["wind_gust_speed"],1),"</span>";}else if ($weather["wind_gust_speed"]*$toKnots>=21.5983){echo "<windorange>",number_format($weather["wind_gust_speed"],1),"</span>";}else if ($weather["wind_gust_speed"]*$toKnots>=16.1987){echo "<windgreen>",number_format($weather["wind_gust_speed"],1),"</span>";}else if ($weather["wind_gust_speed"]<10){echo "&nbsp;",number_format($weather["wind_gust_speed"],1);}else echo number_format($weather["wind_gust_speed"],1);?>
<div class="windunitgust"><?php echo  $weather["wind_units"]?></div>
<div class="windunitidgust"><?php echo $lang['Currently']; ?></div></span></div></div>
<div class="maxwindgust"><a class="weather34tipmax" data-weather34tipmax="<?php echo "Max ".$weather["windymax"]." ".$weather["wind_units"]."&nbsp; &nbsp;".$weather["windymaxtime"]?>">
<?php echo "<valuetext>Max (".$weather["winddmaxtime"].")<br>"."<maxred>".number_format($weather["wind_gust_speed_max"],1)."</maxred> ".$weather["wind_units"];?></a></div>
<div class="windconverter"><?php 
//weather34-convert kmh to mph
if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]*$toKnots>=26.9978){echo "<div class=windconvertercirclered1><tred>".number_format($weather["wind_gust_speed"]*0.621371,1)." </tred><smallrainunit>mph
</smallrainunit>";}
else if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]*$toKnots>=21.5983){echo "<div class=windconvertercircleorange1><torange>".number_format($weather["wind_gust_speed"]*0.621371,1)." </torange><smallrainunit>mph</smallrainunit>";}
else if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]*$toKnots>=16.1987){echo "<div class=windconvertercirclegreen1><tgreen>".number_format($weather["wind_gust_speed"]*0.621371,1)." </tgreen><smallrainunit>mph</smallrainunit>";}
else if ($weather["wind_units"]=="km/h" && $weather["wind_gust_speed"]*$toKnots<16.1987){echo "<div class=windconvertercircleblue1>".number_format($weather["wind_gust_speed"]*0.621371,1)." <smallrainunit>mph
</smallrainunit>";}
//weather34-convert mph to kmh
else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]*$toKnots>=26.9978){echo "<div class=windconvertercirclered1><tred>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." </tred><smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]*$toKnots>=21.5983){echo "<div class=windconvertercircleorange1><torange>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." </torange><smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]*$toKnots>=16.1987){echo "<div class=windconvertercircleblue1>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." <smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="mph" && $weather["wind_gust_speed"]*$toKnots<16.1987){echo "<div class=windconvertercirclegreen1><tgreen>".number_format($weather["wind_gust_speed"]*1.609343502101025,1)." </tgreen><smallrainunit>kmh</smallrainunit>";}
//weather34-convert ms to kmh
else if ($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]*$toKnots>=26.9978){echo "<div class=windconvertercirclered1><tred>".number_format($weather["wind_gust_speed"]*3.60000288,1)." </tred><smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]*$toKnots>=21.5983){echo "<div class=windconvertercircleorange1><torange>".number_format($weather["wind_gust_speed"]*3.60000288,1)." </torange><smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]*$toKnots>=16.1987){echo "<div class=windconvertercircleblue1>".number_format($weather["wind_gust_speed"]*3.60000288,1)." <smallrainunit>kmh</smallrainunit>";}
else if ($weather["wind_units"]=="m/s" && $weather["wind_gust_speed"]*$toKnots<16.1987){echo "<div class=windconvertercirclegreen1><tgreen>".number_format($weather["wind_gust_speed"]*3.60000288,1)." </tgreen><smallrainunit>kmh</smallrainunit>";}?>
</div></div>
<div class="homeweathercompass1"><div class="homeweathercompass-line1"><div class="thearrow2"></div><div class="thearrow1"></div></div>
<div class="text1"><div class="windvalue1" id="windvalue"><?php echo $weather["wind_direction"],'&deg;';?></div> </div>
<div class="windirectiontext1">
<?php  //weather34 wind direction value output   
if($weather["wind_direction"]<=11.25){echo $lang['Northdir'] ;}else if($weather["wind_direction"]<=33.75){echo $lang['NNEdir'];}else if($weather["wind_direction"]<=56.25){echo $lang['NEdir'];}else if($weather["wind_direction"]<=78.75){echo $lang['ENEdir'];}else if($weather["wind_direction"]<=101.25){echo $lang['Eastdir'];}else if($weather["wind_direction"]<=123.75){echo $lang['ESEdir'];}else if($weather["wind_direction"]<=146.25){echo $lang['SEdir'];}else if($weather["wind_direction"]<=168.75){echo $lang['SSEdir'];}else if($weather["wind_direction"]<=191.25){echo $lang['Southdir'];}  else if($weather["wind_direction"]<=213.75){echo $lang['SSWdir'];}else if($weather["wind_direction"]<=236.25){echo $lang['SWdir'];}else if($weather["wind_direction"]<=258.75){echo $lang['WSWdir'];}else if($weather["wind_direction"]<=281.25){echo $lang['Westdir'];}else if($weather["wind_direction"]<=303.75){echo $lang['WNWdir'];}else if($weather["wind_direction"]<=326.25){echo $lang['NWdir'];}else if($weather["wind_direction"]<=348.75){echo $lang['NWNdir'];}else {echo $lang['Northdir'];}?>
 </div> 

 <averwordwindword><?php echo "Avg ";if( $weather["wind_direction_avg"]<=11.25){echo $lang['North'];}
else if( $weather["wind_direction_avg"]<=33.75){echo $lang['NNE'];} else if( $weather["wind_direction_avg"]<=56.25){echo $lang['NE'];}
else if( $weather["wind_direction_avg"]<=78.75){echo $lang['ENE'];}else if( $weather["wind_direction_avg"]<=101.25){echo $lang['East'];}else if( $weather["wind_direction_avg"]<=123.75){echo $lang['ESE'];}
else if( $weather["wind_direction_avg"]<=146.25){echo $lang['SE'];}else if( $weather["wind_direction_avg"]<=168.75){echo $lang['SSE'];}else if( $weather["wind_direction_avg"]<=191.25){echo $lang['South'];}
else if( $weather["wind_direction_avg"]<=213.75){echo $lang['SSW'];}else if( $weather["wind_direction_avg"]<=236.25){echo $lang['SW'];}else if( $weather["wind_direction_avg"]<=258.75){echo $lang['WSW'];}
else if( $weather["wind_direction_avg"]<=281.25){echo $lang['West'];}else if( $weather["wind_direction_avg"]<=303.75){echo $lang['WNW'];}else if( $weather["wind_direction_avg"]<=326.25){echo $lang['NW'];}
else if( $weather["wind_direction_avg"]<=348.75){echo $lang['NWN'];}else if( $weather["wind_direction_avg"]<=360){echo $lang['North'];}"&deg;"?></averwordwindword></div> 
<?php echo ' <div class=weather34windrun>'.$windrunicon.' &nbsp;<grey><valuetext1>',number_format($weather['wind_speed_avgday'],1)."<weather34windrunspan>" .$weather["wind_units"];?>
<grey></valuetext>
</weather34windrunspan>
</div></div><br /><div class=windrun1><?php echo  'Avg Speed Today'?></div>
<?php ///weather34 beaufort
if ($weather["wind_speed_bft"] >= 12) {
  echo '<div class=weather34beaufort6>' . $beaufort12 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 11) {
  echo '<div class=weather34beaufort6>' . $beaufort11 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 10) {
  echo '<div class=weather34beaufort6>' . $beaufort10 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 9) {
  echo '<div class=weather34beaufort6>' . $beaufort9 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 8) {
  echo '<div class=weather34beaufort6>' . $beaufort8 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 7) {
  echo '<div class=weather34beaufort6>' . $beaufort7 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 6) {
  echo '<div class=weather34beaufort6>' . $beaufort6 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 5) {
  echo '<div class=weather34beaufort4-5>' . $beaufort5 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 4) {
  echo '<div class=weather34beaufort4-5>' . $beaufort4 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 3) {
  echo '<div class=weather34beaufort3-4>' . $beaufort3 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 2) {
  echo '<div class=weather34beaufort1-3>' . $beaufort2 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 1) {
  echo '<div class=weather34beaufort1-3>' . $beaufort1 . "&nbsp; " . $weather["wind_speed_bft"];
} else if ($weather["wind_speed_bft"] >= 0) {
  echo '<div class=weather34beaufort1-3>' . $beaufort0 . "&nbsp; " . $weather["wind_speed_bft"];
}
?>
 <weather34bftspan>BFT<weather34bftspan></div>
<div class="beaufort1"><?php
if ($weather["wind_speed_bft"] == 0) {
  echo "Calm";
} else if ($weather["wind_speed_bft"] == 1) {
  echo "Light Air";
} else if ($weather["wind_speed_bft"] == 2) {
  echo "Light Breeze";
} else if ($weather["wind_speed_bft"] == 3) {
  echo "Gentle Breeze";
} else if ($weather["wind_speed_bft"] == 4) {
  echo "Moderate Breeze";
} else if ($weather["wind_speed_bft"] == 5) {
  echo "Fresh Breeze";
} else if ($weather["wind_speed_bft"] == 6) {
  echo "Strong Breeze";
} else if ($weather["wind_speed_bft"] == 7) {
  echo "Near Gale " . $alert . "";
} else if ($weather["wind_speed_bft"] == 8) {
  echo "Gale Force " . $alert . "";
} else if ($weather["wind_speed_bft"] == 9) {
  echo "Strong Gale " . $alert . "";
} else if ($weather["wind_speed_bft"] == 10) {
  echo "Storm Force " . $alert . "";
} else if ($weather["wind_speed_bft"] == 11) {
  echo "Violent Storm " . $alert . "";
} else if ($weather["wind_speed_bft"] >= 12) {
  echo "Hurricane Force " . $alert . "";
}
?>
</div>