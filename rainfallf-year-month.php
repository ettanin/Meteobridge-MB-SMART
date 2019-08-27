<?php  

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">
<div class="rainmaxthismonth">
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


<div class="rainavgthisyear">
<?php //rain last month
if($weather["rainlastmonth"]<0.1){ echo " &nbsp;&nbsp;N/A";}
if($weather["rainlastmonth"]>=1000){ echo "<maxtempblue>".round($weather["rainlastmonth"],0)  ;}
else if ($weather["rainlastmonth"]>0){echo "<maxtempblue>".$weather["rainlastmonth"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];}
?>
</div></wunit>

<div class="ryearavg"><?php $lastMonth = date("M Y", mktime() - 31*3600*24);echo $lastMonth?></div>
<div class="tavgconv"><?php 
if ($weather["rain_units"] =='mm'){ echo number_format($weather["rainlastmonth"]*0.0393701,2)."in";}
else if ($weather["rain_units"] =='in'){echo number_format($weather["rainlastmonth"]*25.400013716,1)."mm";}
?></div>




<div class="yearwordwindbig">Rainfall</div>
<div class="rainmaxthisyear">
<?php //rain year 
if($weather["rainymax"]>=1000){ echo "<maxtempblue>".round($weather["rainymax"],0)  ;}
else  echo "<maxtempblue>".$weather["rainymax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];
?>
</div></wunit>
<div class="wyearmax"><?php echo $lang['Rain']."  ".date('Y')?></div>
<div class="tyearconv"><?php 
if ($weather["rain_units"] =='mm'){ echo number_format($weather["rainymax"]*0.0393701,2)."in";}
else if ($weather["rain_units"] =='in'){echo number_format($weather["rainymax"]*25.400013716,1)."mm";}
?></div>