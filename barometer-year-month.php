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
<?php // min
echo "<maxtempblue>".$weather["thb0seapressymin"];echo "</maxtempblue><wunit>".$weather["barometer_units"];
?>
</div></wunit>
<div class="wmonthmax"><?php echo $weather["thb0seapressyearmintime"] ?></div>
<div class="tmonthconv">&nbsp;<?php echo $lang['Lowest']?></div>


<div class="rainavgthisyear">


<?php echo "<maxtemporange>".$weather["thb0seapressmmax"];echo "</maxtemporange><wunit>".$weather["barometer_units"];?>
</div></wunit>

<div class="ryearavg">&nbsp;<?php echo strftime('%B',time());?></div>
<div class="tavgconv" style="margin-left:-12px;">&nbsp;<?php echo $lang['Lowest']?>&nbsp; <?php echo "<maxtempblue>".$weather["thb0seapressmmin"];echo "</maxtempblue>";?>
</div>





<div class="yearwordwindbig">Pressure</div>
<div class="rainmaxthisyear">
<?php // max
echo "<maxtemporange>".$weather["thb0seapressymax"];echo "</maxtemporange><wunit>".$weather["barometer_units"];
?>
</div></wunit>
<div class="wyearmax"><?php echo $weather["thb0seapressyearmaxtime"] ?></div>
<div class="tyearconv">&nbsp;<?php echo $lang['Highest']?></div>