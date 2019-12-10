<?php include('settings1.php');?>
<script src="js/jquery.js"></script>
<script Defer>
//update the modules
  
// outdoor temp
var refreshId;$(document).ready(function(){temperature()});function temperature(){$.ajax({cache:false,success:function(a){$("#temperature").html(a);<?php if ($tempRefresh > 0) {
    echo 'setTimeout(temperature,' . 1000*$tempRefresh.')';
} ?>},type:"GET",url:"<?php echo $temperaturemodule;?>"})};
//current conditions icon
var refreshId;$(document).ready(function(){currentsky()});function currentsky(){$.ajax({cache:false,success:function(a){$("#currentsky").html(a);<?php if ($skyRefresh > 0) {
    echo 'setTimeout(currentsky,' . 1000*$skyRefresh.')';
} ?>},type:"GET",url:"<?php echo $currentconditions ;?>"})};
/// wind speed / direction 
var refreshId;$(document).ready(function(){windspeed()});function windspeed(){$.ajax({cache:false,success:function(a){$("#windspeed").html(a);<?php if ($windSpeedRefresh > 0) {
    echo 'setTimeout(windspeed,' . 1000*$windSpeedRefresh.')';
} ?>},type:"GET",url:"windspeeddirection.php"})};     
//barometer
var refreshId;$(document).ready(function(){barometer()});function barometer(){$.ajax({cache:false,success:function(a){$("#barometer").html(a);<?php if ($baroRefresh > 0) {
    echo 'setTimeout(barometer,' . 1000*$baroRefresh.')';
} ?>},type:"GET",url:"barometer.php"})};
// moonphase
var refreshId;$(document).ready(function(){moonphase()});function moonphase(){$.ajax({cache:false,success:function(a){$("#sun").html(a);<?php if ($moonRefresh > 0) {
    echo 'setTimeout(moonphase,' . 1000*$moonRefresh .')';
} ?>},type:"GET",url:"sun3.php"})};
// rainfall
var refreshId;$(document).ready(function(){rainfall()});function rainfall(){$.ajax({cache:false,success:function(a){$("#rainfall").html(a);<?php if ($rainRefresh > 0) {
    echo 'setTimeout(rainfall,' . 1000*$rainRefresh.')';
} ?>},type:"GET",url:"rainfall.php"})};
// position12
var refreshId;$(document).ready(function(){solar()});function solar(){$.ajax({cache:false,success:function(a){$("#solar").html(a);<?php 
if ($position12 == 'webcamsmall.php') {
    echo 'setTimeout(solar,'. 1000*$camRefresh.')';
}else if ($position12 != 'webcamsmall.php' && $p12Refresh > 0) {
    echo 'setTimeout(solar,'. 1000*$p12Refresh.')';
} ?>},type:"GET",url:'<?php echo $position12?>'})};

var refreshId;$(document).ready(function(){dldata()});function dldata(){$.ajax({cache:false,success:function(a){$("#dldata").html(a);<?php
if ($positionlastmodule == 'webcamsmall.php') {
    echo 'setTimeout(dldata,'. 1000*$camRefresh.')';
} else if ($positionlastmodule != 'webcamsmall.php' && $p13Refresh > 0) {
    echo 'setTimeout(dldata,' . 1000*$p13Refresh.')';
} ?>}, type:"GET",url:"<?php echo $positionlastmodule?>"})};

//extra modules some are fixed
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#temperature-year").show()}});var c=a("#temperature-year");c.load("temperatureyear.php");var b=setInterval(function(){c.load("temperatureyear.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rainfall-year").show()}});var c=a("#rainfall-year");c.load("rainfallf-year-month.php");var b=setInterval(function(){c.load("rainfallf-year-month.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#windspeed-year").show()}});var c=a("#windspeed-year");c.load("windgustyear.php");var b=setInterval(function(){c.load("windgustyear.php")},380000)})})(jQuery);
//option
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint-year").show()}});var c=a("#dewpoint-year");c.load("<?php echo $positionconsole?>");var b=setInterval(function(){c.load("<?php echo $positionconsole?>")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer-year").show()}});var c=a("#barometer-year");c.load("barometer-year-month.php");var b=setInterval(function(){c.load("barometer-year-month.php")},680000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity-year").show()}});var c=a("#humidity-year");c.load("humidity-year-month.php");var b=setInterval(function(){c.load("humidity-year-month.php")},680000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#consoledavis").show()}});var c=a("#consoledavis");c.load("dewpoint-year-month.php");var b=setInterval(function(){c.load("dewpoint-year-month.php")},380000)})})(jQuery);
//option 
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#option").show()}});var c=a("#option");c.load("<?php echo $positionmooneq?>");var b=setInterval(function(){c.load("<?php echo $positionmooneq?>")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#precip").show()}});var c=a("#precip");c.load("<?php echo $positionprecip?>");var b=setInterval(function(){c.load("<?php echo $positionprecip?>")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#battery").show()}});var c=a("#battery");c.load("battery.php");var b=setInterval(function(){c.load("battery.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#moon").show()}});var c=a("#moon");c.load("weather34-moonphase.php");var b=setInterval(function(){c.load("weather34-moonphase.php")},2360000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#hardwareinfo2").show()}});var c=a("#hardwareinfo2");c.load("hardware.php");var b=setInterval(function(){c.load("hardware.php")},22380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#logo").show()}});var c=a("#logo");c.load("logo.php");var b=setInterval(function(){c.load("logo.php")},22380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#temp1").show()}});var c=a("#temp1");c.load("todaytempmodule.php");var b=setInterval(function(){c.load("todaytempmodule.php")},1360000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind1").show()}});var c=a("#wind1");c.load("todaywindmodule.php");var b=setInterval(function(){c.load("todaywindmodule.php")},1360000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain1").show()}});var c=a("#rain1");c.load("todayrainmodule.php");var b=setInterval(function(){c.load("todayrainmodule.php")},1360000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity1").show()}});var c=a("#humidity1");c.load("todayhumiditymodule.php");var b=setInterval(function(){c.load("todayhumiditymodule.php")},1360000)})})(jQuery);

//weather34 current day-night forecast
var refreshId;$(document).ready(function(){currentfore()});function currentfore(){$.ajax({cache:false,success:function(a){$("#currentfore").html(a);setTimeout(currentfore,360000)},type:"GET",url:"forecast3wularge.php"})};

</script>
<script>
//weather34  simple javascript clock
var clockID;
var yourTimeZoneFrom=<?php echo $UTC?>;
var d=new Date();

//weather34  translate days
var weekdays=["<?php echo $lang['Sunday']?>","<?php echo $lang['Monday']?>","<?php echo $lang['Tuesday']?>","<?php echo $lang['Wednesday']?>",
"<?php echo $lang['Thursday']?>","<?php echo $lang['Friday']?>","<?php echo $lang['Saturday']?>"];

//weather34  translate months
var months=["<?php echo $lang['January']?>","<?php echo $lang['Febuary']?>","<?php echo $lang['March']?>","<?php echo $lang['April']?>","<?php echo $lang['May']?>",
"<?php echo $lang['June']?>","<?php echo $lang['July']?>","<?php echo $lang['August']?>","<?php echo $lang['September']?>",
"<?php echo $lang['October']?>","<?php echo $lang['November']?>","<?php echo $lang['December']?>"];

var tzDifference=yourTimeZoneFrom*60+d.getTimezoneOffset();
var offset=tzDifference*60*1000;
function UpdateClock(){
var e=new Date(new Date().getTime()+offset);
var c=e.getHours()<?php if ($clockformat == '12') { echo '% 12 || 12';} else { echo '% 24 || 00';}?>;
<?php if($clockformat=='12') {echo "if(e.getHours()<12){amorpm=' am'}else{amorpm=' pm'}";} else {echo "amorpm='';";}?>
var a=e.getMinutes();var g=e.getSeconds();var f=e.getFullYear();var h=months[e.getMonth()];var b=e.getDate();
var suffix = "";switch(b) {case 1: case 21: case 31: suffix = 'st'; break;case 2: case 22: suffix = 'nd'; break;case 3: case 23: suffix = 'rd'; break;default: suffix = 'th';}
var i=weekdays[e.getDay()];
if(a<10){a="0"+a}if(g<10){g="0"+g}if(c<10){c="0"+c}
document.getElementById("theTime").innerHTML=" "+i+" "+b+suffix+" "+h+" "+f+" &nbsp;"+c+":"+a+":"+g+amorpm}
function StartClock(){clockID=setInterval(UpdateClock,500)}
function KillClock(){clearTimeout(clockID)}
window.onload=function(){StartClock()};
</script>