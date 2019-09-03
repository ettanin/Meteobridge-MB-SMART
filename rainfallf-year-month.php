<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019						  	                                               #
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

<div class="wmonthmax"style="margin-left:-5px;"><?php echo strftime('%B',time());?></div>
<div class="tmonthconv" style="margin-left:-12px;"><?php echo $lang['Accumulation']?></div>


<div class="rainavgthisyear">
<?php //rain last month
if($weather["rainlastmonth"]>=1000){ echo "<maxtempblue>".round($weather["rainlastmonth"],0)  ;}
else  echo "<maxtempblue>".$weather["rainlastmonth"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];
?>
</div></wunit>

<div class="ryearavg">&nbsp;<?php $lastMonth = strftime('%B',time()- 31*3600*24);echo $lastMonth; ?></div>
<div class="tavgconv" style="margin-left:-10px;"><?php echo $lang['Accumulation']?></div>




<div class="yearwordwindbig">Rainfall</div>
<div class="rainmaxthisyear">
<?php //rain year 
if($weather["rainymax"]>=1000){ echo "<maxtempblue>".round($weather["rainymax"],0)  ;}
if ($weather["rain_units"] =='in'){echo "<maxtempblue>&nbsp;&nbsp;".$weather["rainymax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];}
else  echo "<maxtempblue>".$weather["rainymax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];
?>
</div></wunit>
<div class="wyearmax">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y')?></div>
<div class="tyearconv" style="margin-left:-8px;"><?php echo $lang['Accumulation']?></div>