<?php include_once('livedata.php');?>
<div class="topframe">
<script>
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
  document.getElementById("hour1").innerHTML = hours;
  document.getElementById("minute1").innerHTML =":" +  mins;
  document.getElementById("second1").innerHTML =":" + secs;
// weather34 output the date 
  document.getElementById("date1").innerHTML =" &nbsp;" + date;
  document.getElementById("day1").innerHTML =" &nbsp;" + day;
  document.getElementById("month1").innerHTML =" &nbsp;" + month;
  document.getElementById("year1").innerHTML =" &nbsp;" + year;
}
setInterval(clock,100);</script>

<div class="clock2">
  <span id="hour1"></span>
  <span id="minute1"></span>
  <span id="second1"></span> 
</div>   
  <div class="thedate2">
  <span id="year1"></span>
  <span id="month1"></span>
  <span id="date1"></span>
  <span id="day1"></span>
  </div>



  <?php //meteobridge and station hardware 
$nanosduptime = $meteobridgeapi[81];function convert($nanosduptime){$weather34nanotimeago = "";$days1 = intval(intval($nanosduptime) / (3600*24));$hours1 = (intval($nanosduptime) / 3600) % 24;$minutes1 = (intval($nanosduptime) / 60) % 60;$seconds1 = (intval($nanosduptime)) % 60;if($days1> 1){$weather34nanotimeago .= "$days1 Days ";}else {if($days1>0){$weather34nanotimeago .= "$days1 Day ";}if($hours1 > 1){$weather34nanotimeago .= "$hours1 hrs ";}else if($hours1 >=0){$weather34nanotimeago .= "$hours1 hr ";}if($minutes1 > 1){$weather34nanotimeago .= "$minutes1 mins ";}else if($minutes1 >=0){$weather34nanotimeago .= "$minutes1 min ";}}return $weather34nanotimeago;}?>
  <div class="nanouptime2" ><weather34menumarkerblue></weather34menumarkerblue> NanoSD Uptime:<oblue> <?php echo convert($nanosduptime)?></oblue></div>  
  <div class="hardware2"><weather34menumarkerblue></weather34menumarkerblue> Station:<blue>Davis Vantage Pro2</blue></div>
  <div class="hardwareinfo2"><weather34menumarkerblue></weather34menumarkerblue> Station Uptime:<blue><?php echo"<oblue>", $davisvp2install->diff($now)->days;echo "</oblue> Days";?></blue></div>  
  
  </div>