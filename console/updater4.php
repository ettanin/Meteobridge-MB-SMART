<?php include('settings.php');include('common.php');?>
<script src="js/jquery.js"></script>

<script>
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("monthavgwindspeedmodule.php");var b=setInterval(function(){c.load("monthavgwindspeedmodule.php")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("monthwindspeedmodule.php");var b=setInterval(function(){c.load("monthwindspeedmodule.php")},130000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");
c.load("monthtemperaturemodule.php");var b=setInterval(function(){c.load("monthtemperaturemodule.php")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("monthdewpointmodule.php");var b=setInterval(function(){c.load("monthdewpointmodule.php")},130000)})})(jQuery);


(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("monthrainfallmodule.php");var b=setInterval(function(){c.load("monthrainfallmodule.php")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("monthbarometermodule.php");var b=setInterval(function(){c.load("monthbarometermodule.php")},1300000 )})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#moon").show()}});var c=a("#moon");c.load("weather34-moonphasemod.php");var b=setInterval(function(){c.load("weather34-moonphasemod.php")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#sun").show()}});var c=a("#sun");c.load("weather34-sunmod.php");var b=setInterval(function(){c.load("weather34-sunmod.php")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#time-date").show()}});var c=a("#time-date");c.load("weather34-clockmod.php");var b=setInterval(function(){c.load("weather34-clockmod.php")},11162000)})})(jQuery);

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