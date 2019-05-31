<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">
<div class="windmaxthismonth">
<?php //rain month 
if($weather["rainmmax"]>=1000){ echo "<maxtempblue>".round($weather["rainmmax"],0)  ;}
else  echo "<maxtempblue>".$weather["rainmmax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];
?>
</div></wunit>

<div class="wmonthmax"><?php echo date('M Y')?></div>

<div class="yearwordwindbig">Rainfall</div>
<div class="tempmaxthisyear">
<?php //rain year 
if($weather["rainymax"]>=1000){ echo "<maxtempblue>".round($weather["rainymax"],0)  ;}
else  echo "<maxtempblue>".$weather["rainymax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];
?>
</div></wunit>
<div class="wyearmax"><?php echo $weather["windymaxtime2"]?></div></div>
