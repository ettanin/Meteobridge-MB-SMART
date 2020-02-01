<?php include('settings.php');include('common.php');?>
<script src="js/jquery.js"></script>

<script>
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("monthavgwindspeedmodule.php");var b=setInterval(function(){c.load("monthavgwindspeedmodule.php")},1130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("monthwindspeedmodule.php");var b=setInterval(function(){c.load("monthwindspeedmodule.php")},1130000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");c.load("monthtemperaturemodule.php");var b=setInterval(function(){c.load("monthtemperaturemodule.php")},1130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("monthdewpointmodule.php");var b=setInterval(function(){c.load("monthdewpointmodule.php")},1130000)})})(jQuery);


(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("monthrainfallmodule.php");var b=setInterval(function(){c.load("monthrainfallmodule.php")},1130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("monthbarometermodule.php");var b=setInterval(function(){c.load("monthbarometermodule.php")},11300000 )})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#moon").show()}});var c=a("#moon");c.load("weather34-dayforecast.php");var b=setInterval(function(){c.load("<?php echo $consoleforecast ?>")},80000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#sun").show()}});var c=a("#sun");c.load("weather34-indoormod.php");var b=setInterval(function(){c.load("weather34-sunmod.php")},72000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#time-date").show()}});var c=a("#time-date");c.load("weather34-sunmod.php");var b=setInterval(function(){c.load("weather34-sunmod.php")},1300000)})})(jQuery);
</script>

<script type="text/javascript">
var clockID;var yourTimeZoneFrom='<?php echo $UTC?>';var d=new Date();
var weekdays=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var months=["January","Febuary","March","April","May","June","July","August","September","October","November","December"];
var tzDifference=yourTimeZoneFrom*60+d.getTimezoneOffset();var offset=tzDifference*60*1000;function UpdateClock(){var e=new Date(new Date().getTime()+offset);var c=e.getHours();var a=e.getMinutes();var g=e.getSeconds();var f=e.getFullYear();var h=months[e.getMonth()];var b=e.getDate();var b=e.getDate();
var suffix = "";switch(b) {case 1: case 21: case 31: suffix = 'st'; break;case 2: case 22: suffix = 'nd'; break;case 3: case 23: suffix = 'rd'; break;default: suffix = 'th';}
var i=weekdays[e.getDay()];if(a<10){a="0"+a}if(g<10){g="0"+g}if(c<10){c="0"+c}
document.getElementById("weather34clock4").innerHTML="<div class='thedate3'> "+i+" "+h+" "+b+suffix+" "+f+" </div><div class='clock3'><time> "+c+":"+a+":"+g}
function StartClock(){clockID=setInterval(UpdateClock,500)}function KillClock(){clearTimeout(clockID)}window.onload=function(){StartClock()}(jQuery);</script></time>
</div></div>
</div></div>