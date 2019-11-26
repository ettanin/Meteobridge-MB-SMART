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
include('weather34skydata.php');include('common.php');header('Content-type: text/html; charset=utf-8');	?>

<div class="moduleupdatetime"><span><?php if(file_exists($livedata2)&&time()- filemtime($livedata2)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></span></div>
<div class="moonphasemoduleposition">
<div class="moonrise1">
<svg id="weather34 moon rise" viewBox="0 0 32 32" width="6" height="6" fill="none" stroke="#ff9350" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">    <path d="M30 20 L16 8 2 20" /></svg> <?php echo $lang['Moonrise'];?> <br /><blueu><?php  echo $weather['moonrise'];?>
<!---simple svg moonphase 6.1 or 7.5-->
<div class="weather34moonphasesvg1">
<?php // lets rotate for Tony (Beaumaris-Weather) down under
if ($hemisphere==0){echo '<style>.weather34moonphasesvg1{-webkit-transform: rotate('.$hemisphere.'deg);transform: rotate('.$hemisphere.'deg);left:105px;top:22px;}
</style>';}
if ($hemisphere==180){echo '<style>.weather34moonphasesvg1{-webkit-transform: rotate('.$hemisphere.'deg);transform: rotate('.$hemisphere.'deg);left:85px; top:10px;}
</style>';}
?>
<p id="weather34moonphase"></p>
<svg id="weather34 simple moonphase svg" viewBox="0 0 120 120" width="120px"><circle cx="50" cy="50" r="49.5" fill="rgba(86,95,103,.8)"/><path id="weather34themoon" fill="rgba(230, 232, 239, .3)"/></svg>
<script>
function showMoon(){var t=(Date.now()/864e5-Date.UTC(2018,0,17,2,17,0,0)/864e5)%29.530588853+1,e=String;document.getElementById("weather34moonphase");var a,n=Math.min(3-t/30*4,1),o=Math.abs(50*n),h=n<0?"0":"1",m=Math.min(3+(t-30)/30*4,1),M=Math.abs(50*m),r=m<0?"0":"1";a="M 50,0 a "+e(o)+",50 0 0 "+h+" 0,100 a "+e(M)+",50 0 0 "+r+" 0,-100",document.getElementById("weather34themoon").setAttribute("d",a)}showMoon();</script></div></div>

<div class="fullmoon1">
<svg id="weather34 full moon" viewBox="0 0 32 32" width="6" height="6" fill="#aaa" stroke="#aaa" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg>
<?php echo $lang['Nextfullmoon'];?>	<br /> <div class="nextfullmoon"><value><moonm>
<?php  // homeweatherstation fullmoon info output 18th Aug
$now1 = time();
$moon1 = new MoonPhase();
echo "";
if ($now1 < $moon1->full_moon()) {echo date($dateFormat, $moon1->full_moon() );}
else echo date( $dateFormat, $moon1->next_full_moon() );
?></value></div></span></div>

<div class="newmoon1">
<svg id="weather34 new moon" viewBox="0 0 32 32" width="6" height="6" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /> <path d="M6 6 L26 26" /></svg>
<?php echo $lang['Nextnewmoon'];?> <div class="nextnewmoon"><value><moonm>
<?php // homeweatherstation create an instance of the next new moon
$moon = new MoonPhase();
$nextnewmoon = date( $dateFormat, $moon->next_new_moon() );
//$nextnewmoon = date( 'jS-M', $moon->next_new_moon() );
echo "$nextnewmoon";
?></value></div></span></div>
<div class="moonset1">&nbsp;
<svg id="weather34 moon set" viewBox="0 0 32 32" width="6" height="6" fill="none" stroke="#f26c4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%">
    <path d="M30 12 L16 24 2 12" /></svg>
<?php echo $lang['Moonset']?><div class="nextnewmoon">
<?php echo  $weather['moonset'];?></span>
</div></div>
<?php echo'<div class="weather34moonphasem2">';
//2019-2020 lunar events 
echo " ";{$day = date('l jS F Y');
if($day===date("l jS F Y",strtotime('2019-12-26'))){echo 'Event <br>Lunar <blue>Eclipse</blue>';}
else if($day===date("l jS F Y",strtotime('2020-1-10'))){echo 'Event <br>Lunar <blue>Eclipse</blue>';}
else if($day===date("l jS F Y",strtotime('2020-2-9'))){echo 'Event <br>Super <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-3-9'))){echo 'Event <br>Super <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-4-8'))){echo 'Event <br>Super <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-6-5'))){echo 'Event <br>Lunar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-6-21'))){echo 'Event <br>Solar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-7-5'))){echo 'Event <br>Lunar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-10-31'))){echo 'Event <br>Blue <blue>Moon</blue>';}
else if($day===date("l jS F Y",strtotime('2020-11-30'))){echo 'Event <br>Lunar <blue>Eclipse</blue>';}	
else if($day===date("l jS F Y",strtotime('2020-12-14'))){echo 'Event <br>Total <blue>Eclipse</blue>';}			
// weather34 moonphase no scraping its calculated from the livedata !
	else echo $lang['Moonphase']."<br><blue>" .$weather['moonphase']."</blue>";}
	echo '</div>
<div class="weather34luminancem2">'.$lang['Luminance'].'<blue><br>'.$weather["luminance"].'</blue>% </div>';?>