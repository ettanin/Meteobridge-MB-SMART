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
var refreshId;$(document).ready(function(){moonphase()});function moonphase(){$.ajax({cache:false,success:function(a){$("#moonphase").html(a);<?php if ($moonRefresh > 0) {
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

//last module
var refreshId;$(document).ready(function(){dldata()});function dldata(){$.ajax({cache:false,success:function(a){$("#dldata").html(a);<?php
if ($positionlastmodule == 'webcamsmall.php') {
    echo 'setTimeout(dldata,'. 1000*$camRefresh.')';
} else if ($positionlastmodule != 'webcamsmall.php' && $p13Refresh > 0) {
    echo 'setTimeout(dldata,' . 1000*$p13Refresh.')';
} ?>}, type:"GET",url:"<?php echo $positionlastmodule?>"})};

//extra modules fixed

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#temperature-year").show()}});var c=a("#temperature-year");c.load("temperatureyear.php");var b=setInterval(function(){c.load("temperatureyear.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rainfall-year").show()}});var c=a("#rainfall-year");c.load("rainfallf-year-month.php");var b=setInterval(function(){c.load("rainfallf-year-month.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#windspeed-year").show()}});var c=a("#windspeed-year");c.load("windgustyear.php");var b=setInterval(function(){c.load("windgustyear.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint-year").show()}});var c=a("#dewpoint-year");c.load("dewpoint-year-month.php");var b=setInterval(function(){c.load("dewpoint-year-month.php")},680000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer-year").show()}});var c=a("#barometer-year");c.load("barometer-year-month.php");var b=setInterval(function(){c.load("barometer-year-month.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity-year").show()}});var c=a("#humidity-year");c.load("humidity-year-month.php");var b=setInterval(function(){c.load("humidity-year-month.php")},680000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#consoledavis").show()}});var c=a("#consoledavis");c.load("consoleoutlook.php");var b=setInterval(function(){c.load("consoleoutlook.php")},380000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#earthquake").show()}});var c=a("#earthquake");c.load("eq.php");var b=setInterval(function(){c.load("eq.php")},380000)})})(jQuery);


//current day-night forecast
var refreshId;$(document).ready(function(){currentfore()});function currentfore(){$.ajax({cache:false,success:function(a){$("#currentfore").html(a);setTimeout(currentfore,360000)},type:"GET",url:"forecast3wularge.php"})};

</script>
<script>
//simple javascript clock
var clockID;
var yourTimeZoneFrom=<?php echo $UTC?>;
var d=new Date();
var weekdays=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var months=["Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
var tzDifference=yourTimeZoneFrom*60+d.getTimezoneOffset();
var offset=tzDifference*60*1000;
function UpdateClock(){
var e=new Date(new Date().getTime()+offset);
var c=e.getHours()<?php if ($clockformat == '12') { echo '% 12 || 12';} else { echo '% 24 || 24';}?>;
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