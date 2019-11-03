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
include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');	?>


<?php // lets rotate for Tony (Beaumaris-Weather) down under
if ($hemisphere==0){echo '<style>.weather34moonphasesvg{position:relative;-webkit-transform: rotate('.$hemisphere.'deg);transform: rotate('.$hemisphere.'deg);
top:7px;left:20px}
</style>';}
if ($hemisphere==180){echo '<style>.weather34moonphasesvg{position:relative;-webkit-transform: rotate('.$hemisphere.'deg);transform: rotate('.$hemisphere.'deg);top:-22px;left:0px}
</style>';}
?>
<div class="topframe">
<div class="weather34moonphasesvg"><div id="weather34moonphase"></div>
<svg id="weather34 simple moonphase svg" viewBox="0 0 60 60" width="60px"><circle cx="20" cy="20" r="20" fill="rgba(86,95,103,.8)"/><path id="weather34themoon" fill="rgba(230, 232, 239, .3)"/></svg></div>    
<script>
// simple weather34 svg moonphase small module//
function showMoon(){var t=(Date.now()/864e5-Date.UTC(2018,0,17,2,17,0,0)/864e5)%29.530588853,e=String;document.getElementById("weather34moonphase");var a,n=Math.min(3-t/30*4,1),o=Math.abs(20*n),h=n<0?"0":"1",m=Math.min(3+(t-30)/30*4,1),M=Math.abs(20*m),r=m<0?"0":"1";a="M 20,0 a "+e(o)+",20 0 0 "+h+" 0,40 a "+e(M)+",20 0 0 "+r+" 0,-40",document.getElementById("weather34themoon").setAttribute("d",a)}showMoon();</script>
</div>
<div class="moonrise2">
<?php echo $lang['Moonrise']?>:<blue><?php  echo $weather['moonrise'];?></blue></div>
<div class="moonset2">
<?php echo $lang['Moonset']?>:<orange><?php echo  $weather['moonset'];?></orange></div>
<div class="phase2">
<?php //2019-2020 lunar events 
echo " ";{$day = date('l jS F Y');
if($day===date("l jS F Y",strtotime('2019-12-26'))){echo 'Event: Lunar <blue>Eclipse</blue>';}
else if($day===date("l jS F Y",strtotime('2020-1-10'))){echo 'Event: Lunar <blue>Eclipse</blue>';}
else if($day===date("l jS F Y",strtotime('2020-2-9'))){echo 'Event: Super <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-3-9'))){echo 'Event: Super <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-4-8'))){echo 'Event: Super <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-6-5'))){echo 'Event: Lunar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-6-21'))){echo 'Event: Solar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-7-5'))){echo 'Event: Lunar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-10-31'))){echo 'Event: Blue <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-11-30'))){echo 'Event: Lunar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-12-14'))){echo 'Event: Total <blue>Eclipse</blue>';}			
// weather34 moonphase no scraping its calculated from the livedata !
	else echo $lang['Moonphase'].": <blue>" .$weather['moonphase']."</blue>";}?>  </div>
<div class="luminance2">
<?php echo $lang['Luminance']?>:<blue><?php echo $weather["luminance"]?>%</div></div>