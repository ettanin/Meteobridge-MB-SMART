<?php include_once('livedata.php');include('common.php');?>
<script>
    //weather34 alternative clock for dashboard display 
function clock() {
  const fullDate = new Date();
// weather34 day of week
var day = new Array();
day[0] = "<?php echo $lang['Sunday']?>";
day[1] = "<?php echo $lang['Monday']?>";
day[2] = "<?php echo $lang['Tuesday']?>";
day[3] = "<?php echo $lang['Wednesday']?>";
day[4] = "<?php echo $lang['Thursday']?>";
day[5] = "<?php echo $lang['Friday']?>";
day[6] = "<?php echo $lang['Saturday']?>";
var day = day[fullDate.getDay()];
//month weather34
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
<br>
<div class="nanoinfo2">
  <div class=mbtype><weather34menumarkerblue></weather34menumarkerblue>  
  <?php if ($mbplatform=="Pro"){echo "MB-".$mbplatform;}else echo "MB-".$mbplatform;?>:<oblue><?php echo $weather["mbplatform"]?></div>
  <div class=mbfirmware><weather34menumarkerorange></weather34menumarkerorange>&nbsp;Firmware Rev:<oblue><?php echo $weather["swversion"];echo "-",$weather["build"]?></oblue> </div>
<?php //meteobridge device uptime
$nanosduptime = $meteobridgeapi[81];function convert($nanosduptime){$weather34nanotimeago = "";$days1 = intval(intval($nanosduptime) / (3600*24));$hours1 = (intval($nanosduptime) / 3600) % 24;$minutes1 = (intval($nanosduptime) / 60) % 60;$seconds1 = (intval($nanosduptime)) % 60;if($days1> 1){$weather34nanotimeago .= "$days1 Days ";}else {if($days1>0){$weather34nanotimeago .= "$days1 Day ";}if($hours1 > 1){$weather34nanotimeago .= "$hours1 hrs ";}else if($hours1 >=0){$weather34nanotimeago .= "$hours1 hr ";}if($minutes1 > 1){$weather34nanotimeago .= "$minutes1 mins ";}else if($minutes1 >=0){$weather34nanotimeago .= "$minutes1 min ";}}return $weather34nanotimeago;}?>
  <div class=nanouptime><weather34menumarkerred></weather34menumarkerred>  
  <?php if ($mbplatform=="Pro"){echo "MB-".$mbplatform;}else echo "MB-".$mbplatform;?> Uptime:<oblue> <?php echo convert($nanosduptime)?> 
  </oblue></div>
  <div class=hardwareinfobig><weather34menumarkeryellow></weather34menumarkeryellow>&nbsp;Hardware:<oblue> <?php echo $weatherhardware?></oblue></div>



</div>
  
  