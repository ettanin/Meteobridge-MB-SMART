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
if ($hemisphere==0){echo '<style>.weather34moonphasesvg1{-webkit-transform: rotate('.$hemisphere.'deg);transform: rotate('.$hemisphere.'deg);}
</style>';}
if ($hemisphere==180){echo '<style>.weather34moonphasesvg1{-webkit-transform: rotate('.$hemisphere.'deg);transform: rotate('.$hemisphere.'deg); top:0px;}
</style>';}
?>
<svg id="weather34moonphase" viewBox="0 0 200 200" version="1.1"/></svg></div>
<script>
function moon_day(e){var t,a,n,r,o,i,h,s,u,c,l=function(e){return e-Math.floor(e)},m=(new Date).getJulian(),d=e.getFullYear(),f=3.14159265/180;o=2415020+29*(t=Math.floor(12.3685*(d-1900))),i=1178e-7*(n=(a=(d-1899.5)/100)*a)-1.55e-7*(r=a*a*a)+(.75933+.53058868*t)-(837e-6*a+335e-6*n),h=360*l(.08084821133*t)+359.2242-333e-7*n-347e-8*r,s=360*l(.07171366128*t)+306.0253+.0107306*n+1236e-8*r,u=360*l(.08519585128*t)+21.2964-.0016528*n-239e-8*r;for(var p=0,w=0;w<m;){var g=i+1.530588*p,M=(h+29.10535608*p)*f,v=(s+385.81691806*p)*f,b=(u+390.67050646*p)*f;g-=.4068*Math.sin(v)+(.1734-393e-6*a)*Math.sin(M),g+=.0161*Math.sin(2*v)+.0104*Math.sin(2*b),g-=.0074*Math.sin(M-v)-.0051*Math.sin(M+v),g+=.0021*Math.sin(2*M)+.001*Math.sin(2*b-v),g+=.5/1440,c=w,w=o+28*p+Math.floor(g),p++}return(m-c)/29.53059}function phase_junk(e){var t,a=[];e<=.25?(a=[1,0],t=20-20*e*4):e<=.5?(a=[0,0],t=20*(e-.25)*4):e<=.75?(a=[1,1],t=20-20*(e-.5)*4):e<=1?(a=[0,1],t=20*(e-.75)*4):exit;var n=document.getElementById("weather34moonphase");if(0!=n&&null!=n){if(document.createElementNS&&document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect){var r="m100,0 ";r=(r=r+"a"+t+",20 0 1,"+a[0]+" 0,150 ")+"a20,20 0 1,"+a[1]+" 0,-150";var o="http://www.w3.org/2000/svg",i=document.createElementNS(o,"path"),h=document.createElementNS(o,"path");h.setAttribute("class","weather34moonbackground"),h.setAttribute("d","m100,0 a20,20 0 1,1 0,150 a20,20 0 1,1 0,-150"),i.setAttribute("class","weather34moonforeground"),i.setAttribute("d",r),n.appendChild(h),n.appendChild(i)}}}Date.prototype.getJulian=function(){return (this/86400000)-(this.getTimezoneOffset()/1440) +2440587.5},phase_junk(moon_day(new Date));</script>
</div>

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
<?php echo'<div class="weather34moonphasem2">Moon Phase<br>'.$weather["moonphase"].'</div>
<div class="weather34luminancem2">Luminance<br>'.$weather["luminance"].'% </div>';?>