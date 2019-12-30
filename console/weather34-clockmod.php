<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');	?>
<div class="online">
<?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>
<div class="indoorclock">  <?php echo $hometemp." " .$weather["temp_indoor"] . '<smalltempunit2>&deg;'.$weather["temp_units"] ?></smalltempunit2>
<?php 
if($weather["temp_indoor_trend"] >0)echo $risingsymbolsmall;
else if($weather["temp_indoor_trend"]<0)echo $fallingsymbolsmall;?>
</div> 
<div id="weather34clock"></div>
<script type="text/javascript">
//weather34 convert to languages
var tday=[
"<?php echo $lang['Sunday']?>",
"<?php echo $lang['Monday']?>",
"<?php echo $lang['Tuesday']?>",
"<?php echo $lang['Wednesday']?>",
"<?php echo $lang['Thursday']?>",
"<?php echo $lang['Friday']?>",
"<?php echo $lang['Saturday']?>"];
//months
var tmonth=[
"<?php echo $lang['January']?>",
"<?php echo $lang['February']?>",
"<?php echo $lang['March']?>",
"<?php echo $lang['April']?>",
"<?php echo $lang['May']?>",
"<?php echo $lang['June']?>",
"<?php echo $lang['July']?>",
"<?php echo $lang['August']?>",
"<?php echo $lang['September']?>",
"<?php echo $lang['October']?>",
"<?php echo $lang['November']?>",
"<?php echo $lang['December']?>"];

function weather34clock(){
var d=new Date();
var dx=d.toGMTString();
dx=dx.substr(0,dx.length -3);
d.setTime(Date.parse(dx))
d.setSeconds(d.getSeconds() + <?php date_default_timezone_set('$TZ'); echo date('Z'); ?>);
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
if(nhour==0){ap=" AM";nhour=12;}else if(nhour<12){ap=" AM";}else if(nhour==12){ap=" PM";}else if(nhour>12){ap=" PM";nhour-=12;}if(nmin<=9) nmin="0"+nmin;if(nsec<=9) nsec="0"+nsec;
var clocktext=
"<div class='thedate3'>"+tday[nday]+","+tmonth[nmonth]+" "+ndate+", "+nyear+" </div><div class='clock3'>"+nhour+":"+nmin+":"+nsec+"<smalltempunit2>"+ap+"</div>";
document.getElementById('weather34clock').innerHTML=clocktext;}weather34clock();setInterval(weather34clock,1000);
</script>
  </div></div>