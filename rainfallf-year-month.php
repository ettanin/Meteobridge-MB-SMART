<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">
<div class="windmaxthismonth">
<?php //rain month 
if($weather["rainmmax"]>=1000){ echo "<maxtempblue>".round($weather["rainmmax"],0)  ;}
else  echo "<maxtempblue>".$weather["rainmmax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];
?>
</div></wunit>

<div class="wmonthmax"><?php echo date('M Y')?></div>
<div class="tmonthconv"><?php 
if ($weather["rain_units"] =='mm'){ echo number_format($weather["rainmmax"]*0.0393701,2)."in";}
else if ($weather["rain_units"] =='in'){echo number_format($weather["rainmmax"]*25.400013716,1)."mm";}
?></div>

<div class="yearwordwindbig">Rainfall</div>
<div class="tempmaxthisyear">
<?php //rain year 
if($weather["rainymax"]>=1000){ echo "<maxtempblue>".round($weather["rainymax"],0)  ;}
else  echo "<maxtempblue>".$weather["rainymax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];
?>
</div></wunit>
<div class="wyearmax"><?php echo $weather["windymaxtime2"]?></div>
<div class="tyearconv"><?php 
if ($weather["rain_units"] =='mm'){ echo number_format($weather["rainymax"]*0.0393701,2)."in";}
else if ($weather["rain_units"] =='in'){echo number_format($weather["rainymax"]*25.400013716,1)."mm";}
?></div>