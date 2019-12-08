<?php include('settings.php');?>
<script src="js/jquery.js"></script>
<script>
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("windmod.php");var b=setInterval(function(){c.load("windmod.php")},10000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("gustmod.php");var b=setInterval(function(){c.load("gustmod.php")},10000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#direction").show()}});var c=a("#direction");c.load("directionmod.php");var b=setInterval(function(){c.load("directionmod.php")},10000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("rainmod.php");var b=setInterval(function(){c.load("rainmod.php")},50000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");c.load("temperaturemod.php");var b=setInterval(function(){c.load("temperaturemod.php")},60000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("dewpointmod.php");var b=setInterval(function(){c.load("dewpointmod.php")},61000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#uvindex").show()}});var c=a("#uvindex");c.load("<?php echo $uvsensor?>");var b=setInterval(function(){c.load("<?php echo $uvsensor?>")},65000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("barometermod.php");var b=setInterval(function(){c.load("barometermod.php")},1300000 )})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity").show()}});var c=a("#humidity");c.load("humiditymod.php");var b=setInterval(function(){c.load("humiditymod.php")},60000)})})(jQuery);

 //weather34 alternative clock for dashboard display 
function clock() {
  const fullDate = new Date();
// weather34 day of week
var day = new Array();
day[0] = "Sunday";
day[1] = "Monday";
day[2] = "Tuesday";
day[3] = "Wednesday";
day[4] = "Thursday";
day[5] = "Friday";
day[6] = "Saturday";
var day = day[fullDate.getDay()];
//month weather34
var month = new Array();
month[0] = "January";
month[1] = "February";
month[2] = "March";
month[3] = "April";
month[4] = "May";
month[5] = "June";
month[6] = "July";
month[7] = "August";
month[8] = "September";
month[9] = "October";
month[10] = "November";
month[11] = "December";
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