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
<!---simple svg moonphase-->
<?php 
if ($meteobridgeapi[153]==0 && $weather['luminance']<=2.5){echo '<img src="css/moonphases/NEW-MOON.svg" class="moonphaseing">';}
else if ($meteobridgeapi[153]==2 && $weather['luminance']<55 && $weather['luminance']>45) {echo '<img src="css/moonphases/FIRST-QUARTER.svg" class="moonphaseing">';}
else if ($meteobridgeapi[153]==4 && $weather['luminance']<=2.5) {echo '<img src="css/moonphases/FULL-MOON.svg" class="moonphaseing">';}
else if ($meteobridgeapi[153]==6 && $weather['luminance']<55 && $weather['luminance']>45) {echo '<img src="css/moonphases/LAST-QUARTER.svg" class="moonphaseing">';}
else {echo '<div class="weather34moonphasesvg"><svg id="weather34moonphase" viewBox="0 0 200 200" version="1.1"/></svg></div>
<script>
Date.prototype.getJulian=function(){return((this/86400000)-(this.getTimezoneOffset()/1440)+2440586.1)};function moon_day(u){var h=function(v){return(v-Math.floor(v))};var l=u.getJulian();var m=u.getFullYear();var c=3.14159265/180;var o,g,q,p,d,t,f,e,k,s;o=Math.floor((m-1900)*12.3685);g=(m-1899.5)/100;q=g*g;p=g*g*g;d=2415020+29*o;t=0.0001178*q-1.55e-7*p+(0.75933+0.53058868*o)-(0.000837*g+0.000335*q);f=360*(h(o*0.08084821133))+359.2242-0.0000333*q-0.00000347*p;e=360*(h(o*0.07171366128))+306.0253+0.0107306*q+0.00001236*p;k=360*(h(o*0.08519585128))+21.2964-(0.0016528*q)-(0.00000239*p);var i=0;var r=0;while(r<l){var n=t+1.530588*i;var b=(f+i*29.10535608)*c;var a=(e+i*385.81691806)*c;var j=(k+i*390.67050646)*c;n-=0.4068*Math.sin(a)+(0.1734-0.000393*g)*Math.sin(b);n+=0.0161*Math.sin(2*a)+0.0104*Math.sin(2*j);n-=0.0074*Math.sin(b-a)-0.0051*Math.sin(b+a);n+=0.0021*Math.sin(2*b)+0.001*Math.sin(2*j-a);n+=0.5/1440;s=r;r=d+28*i+Math.floor(n);i++}return(((l-s)/29.53059))}function phase_junk(h){var i=[];var c;if(h<=0.25){i=[1,0];c=20-20*h*4}else{if(h<=0.5){i=[0,0];c=20*(h-0.25)*4}else{if(h<=0.75){i=[1,1];c=20-20*(h-0.5)*4}else{if(h<=1){i=[0,1];c=20*(h-0.75)*4}else{exit}}}}var k;document.title=document.title+" "+k;var e=document.getElementById("weather34moonphase");if(e!=false&&e!=null){function f(){return !!document.createElementNS&&!!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect}if(f()){var g="m100,0 ";g=g+"a"+c+",20 0 1,"+i[0]+" 0,150 ";g=g+"a20,20 0 1,"+i[1]+" 0,-150";var a="http://www.w3.org/2000/svg";var j=document.createElementNS(a,"path");var b=document.createElementNS(a,"path");b.setAttribute("class","weather34moonbackground");b.setAttribute("d","m100,0 a20,20 0 1,1 0,150 a20,20 0 1,1 0,-150");j.setAttribute("class","weather34moonforeground");j.setAttribute("d",g);e.appendChild(b);e.appendChild(j)}}}phase_junk(moon_day(new Date()));</script>
';}?>
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