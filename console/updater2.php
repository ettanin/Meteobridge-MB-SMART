<?php include('settings.php');include('common.php');?>
<script src="js/jquery.js"></script>

<script>
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("windmod.php");var b=setInterval(function(){c.load("windmod.php")},11000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("gustmod.php");var b=setInterval(function(){c.load("gustmod.php")},11000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#direction").show()}});var c=a("#direction");c.load("directionmod.php");var b=setInterval(function(){c.load("directionmod.php")},10000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("rainmod.php");var b=setInterval(function(){c.load("rainmod.php")},50000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");c.load("temperaturemod.php");var b=setInterval(function(){c.load("temperaturemod.php")},70000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("dewpointmod.php");var b=setInterval(function(){c.load("dewpointmod.php")},71000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#uvindex").show()}});var c=a("#uvindex");c.load("<?php echo $uvsensor ?>");var b=setInterval(function(){c.load("<?php echo $uvsensor ?>")},120000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("barometermod.php");var b=setInterval(function(){c.load("barometermod.php")},1300000 )})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity").show()}});var c=a("#humidity");c.load("humiditymod.php");var b=setInterval(function(){c.load("humiditymod.php")},62000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#moon").show()}});var c=a("#moon");c.load("weather34-moonphasemod.php");var b=setInterval(function(){c.load("weather34-moonphasemod.php")},265000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#sun").show()}});var c=a("#sun");c.load("weather34-sunmod.php");var b=setInterval(function(){c.load("weather34-sunmod.php")},262000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#time-date").show()}});var c=a("#time-date");c.load("weather34-clockmod.php");var b=setInterval(function(){c.load("weather34-clockmod.php")},1300000)})})(jQuery);

//weather34 alternative clock for dashboard display 
function clock() {
  const fullDate = new Date();
// weather34 day of week translate
var day = new Array();
day[0] = "<?php echo $lang['Sunday']?>" ;
day[1] = "<?php echo $lang['Monday']?>" ;
day[2] = "<?php echo $lang['Tuesday']?>" ;
day[3] = "<?php echo $lang['Wednesday']?>";
day[4] = "<?php echo $lang['Thursday']?>";
day[5] = "<?php echo $lang['Friday']?>";
day[6] = "<?php echo $lang['Saturday']?>";
var day = day[fullDate.getDay()];
//month weather34 translate
var month = new Array();
month[0] = "<?php echo $lang['January']?>";
month[1] = "<?php echo $lang['February']?>";
month[2] = "<?php echo $lang['March']?>";
month[3] = "<?php echo $lang['April']?>";
month[4] = "<?php echo $lang['May']?>";
month[5] = "<?php echo $lang['June']?>";
month[6] = "<?php echo $lang['July']?>";
month[7] = "<?php echo $lang['August']?>";
month[8] = "<?php echo $lang['September']?>";
month[9] = "<?php echo $lang['October']?>";
month[10] = "<?php echo $lang['November']?>";
month[11] = "<?php echo $lang['December']?>";
var month = month[fullDate.getMonth()];

  var date = fullDate.getDate(); //weather34 date  
  var year = fullDate.getFullYear(); //weather34 year
  var hours = fullDate.getHours();
  var mins = fullDate.getMinutes();
  var secs = fullDate.getSeconds();

  if (hours < 10) {
    hours = "0" + hours;
  }
  if (mins < 10) {
    mins = "0" + mins;
  }
  if (secs < 10) {
    secs = "0" + secs;
  }
//weather34 output the time
  document.getElementById("hour").innerHTML = hours;
  document.getElementById("minute").innerHTML =":" +  mins;
  document.getElementById("second").innerHTML =":" + secs;
// weather34 output the date 
  document.getElementById("date").innerHTML =" &nbsp;" + date;
  document.getElementById("day").innerHTML =" &nbsp;" + day;
  document.getElementById("month").innerHTML =" &nbsp;" + month;
  document.getElementById("year").innerHTML =" &nbsp;" + year;
}
setInterval(clock,100);
</script>
</div></div>