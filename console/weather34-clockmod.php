<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');	?>
<div class="online">
<?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>
<div id="weather34clock4"></div>
<script type="text/javascript">
var clockID;var yourTimeZoneFrom='<?php echo $UTC?>';var d=new Date();
var weekdays=[
//translate weather34 day
"<?php echo $lang['Sunday']?>",
"<?php echo $lang['Monday']?>",
"<?php echo $lang['Tuesday']?>",
"<?php echo $lang['Wednesday']?>",
"<?php echo $lang['Thursday']?>",
"<?php echo $lang['Friday']?>",
"<?php echo $lang['Saturday']?>"];
//translate weather34 month
var months=[
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
//calculte the weather34 date-time UTC
var tzDifference=yourTimeZoneFrom*60+d.getTimezoneOffset();
var offset=tzDifference*60*1000;
function UpdateClock(){
var e=new Date(new Date().getTime()+offset);
var a=e.getMinutes();
var g=e.getSeconds();
var f=e.getFullYear();
var h=months[e.getMonth()];
var b=e.getDate();
<?php if($clockformat=='12') {echo "if(e.getHours()<12){amorpm=' am'}else{amorpm=' pm'}";} else {echo "amorpm='';";}?>
// add the weather34 date prefix
var suffix = "";switch(b) {case 1: case 21: case 31: suffix = 'st'; break;case 2: case 22: suffix = 'nd'; break;case 3: case 23: suffix = 'rd'; break;default: suffix = 'th';}
var i=weekdays[e.getDay()];if(a<10){a="0"+a}if(g<10){g="0"+g}if(c<10){c="0"+c}
//weather34 option to use 24/12 hour format
var c=e.getHours()<?php if ($clockformat == '12') { echo '% 12 || 12';} else { echo '% 24 || 00';}?>;
document.getElementById("weather34clock4").innerHTML="<div class='thedate3'> "+i+" "+h+" "+b+suffix+" "+f+" </div><div class='clock3'> "+c+":"+a+":"+g+
"<?php if($clockformat=='12') {echo "<smalltempunit2>".date('a')."</smalltempunit2>";} else {echo "";}?>"}
function StartClock(){clockID=setInterval(UpdateClock,500)}
function KillClock(){clearTimeout(clockID)}window.onload=function(){StartClock()}(jQuery);</script>
</div></div>
