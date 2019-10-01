<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019						  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class="topframe">
<div class="rainmaxthismonth">
<?php //rain month
if($weather["rainmmax"]<10 && $weather["rain_units"] =='mm'){ echo "<maxtempblue>".number_format($weather["rainmmax"],2,'.','');echo "</maxtempblue><wunit>".$weather["rain_units"];}
if($weather["rainmmax"]>=10 && $weather["rain_units"] =='mm'){ echo "<maxtempblue>".number_format($weather["rainmmax"],1,'.','');echo "</maxtempblue><wunit>".$weather["rain_units"];}
if ($weather["rain_units"] =='in'){echo "<maxtempblue>".$weather["rainmmax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];}
?>
</div></wunit>

<div class="wmonthmax" ><?php echo strftime('%B',time());?></div>
<div class="tmonthconv" style="margin-left:-12px;"><?php echo $lang['Accumulation']?></div>


<div class="rainavgthisyear">
<maxtempblue>
<?php 
//weather34 last month
if($meteobridgeapi[124]=='--'){	
echo "<maxtempblue>".$weather["rainlastmonth"]."</maxtempblue><wunit style='top:0'>".$weather["rain_units"].'</div></wunit>';
echo ' <div class="ryearavg">'.$lastMonth = strftime('%B',strtotime("-1 month")) .$lastMonth; 
echo '</div><div class="tavgconv" style="margin-left:-12px;">'.$lang['Accumulation'].'</div>';}
//weather34 last rainfall simple standard php method
else if ($seconds_ago >= 31536000) { echo '&nbsp;'.intval($seconds_ago / 31536000) . ' <lastrain>'.$lang['Year'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">'.$lang['Last Rainfall'].'</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;'.$lang['Ago'].'</div>';}
else if ($seconds_ago >= 4838400) {echo '&nbsp;'.intval($seconds_ago / 2419200) . ' <lastrain>'.$lang['Months'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">'.$lang['Last Rainfall'].'</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;'.$lang['Ago'].'</div>';}
else if ($seconds_ago >= 2419200) {echo '&nbsp;'.intval($seconds_ago / 2419200) . ' <lastrain>'.$lang['Month'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">'.$lang['Last Rainfall'].'</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;'.$lang['Ago'].'</div>';}
else if ($seconds_ago >= 172800) {echo '&nbsp;'.intval($seconds_ago / 86400) . '<lastrain>&nbsp;&nbsp;&nbsp;'.$lang['Days'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">'.$lang['Last Rainfall'].'</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;'.$lang['Ago'].'</div>';}
else if ($seconds_ago >= 86400) {echo '&nbsp;'.intval($seconds_ago / 86400) . ' <lastrain>&nbsp;&nbsp;&nbsp;'.$lang['Day'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">'.$lang['Last Rainfall'].'</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;'.$lang['Ago'].'</div>';}
else if ($seconds_ago >= 7200) {echo '&nbsp;'.intval($seconds_ago / 3600) . ' <lastrain>&nbsp;'.$lang['Hours'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">'.$lang['Last Rainfall'].'</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;'.$lang['Ago'].'</div>';}
else if ($seconds_ago >= 3600) {echo '&nbsp;'.intval($seconds_ago / 3600) . ' <lastrain>&nbsp;&nbsp;'.$lang['Hour'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">'.$lang['Last Rainfall'].'</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;'.$lang['Ago'].'</div>';}
else if ($seconds_ago >= 60) {echo '&nbsp;'.intval($seconds_ago / 60) . ' <lastrain>'.$lang['Minutes'].'</lastrain></maxtempblue></div></wunit><div class="ryearavg">Last Rainfall</div><div class="tavgconv">&nbsp;&nbsp;&nbsp;Ago</div>';
} ?>


<div class="yearwordwindbig">Rainfall</div>
<div class="rainmaxthisyear">
<?php //rain year 
if($weather["rainymax"]>=0 && $weather["rain_units"] =='mm'){ echo "<maxtempblue>".number_format($weather["rainymax"],1,'.','');echo "</maxtempblue><wunit>".$weather["rain_units"];}if ($weather["rain_units"] =='in'){echo "<maxtempblue>".$weather["rainymax"]  ;echo "</maxtempblue><wunit>".$weather["rain_units"];}
?>
</div></wunit>
<div class="wyearmax">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('Y')?></div>
<div class="tyearconv" style="margin-left:-8px;"><?php echo $lang['Accumulation']?></div>