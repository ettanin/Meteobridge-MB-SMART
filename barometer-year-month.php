<?php 
    ####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019		Revised november 2019                                              #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe"><main class="gridhistory"> 
<weather34top> 
<thedate><?php echo $weather["thb0seapressyearmintime"] ?></thedate>
<thevalue>
<?php // min
echo "<maxtempblue>".$weather["thb0seapressymin"];echo "</maxtempblue><tunit1>".$weather["barometer_units"];
?>
</tunit1></thevalue>
<maxlow><?php echo $lang['Lowest']?></maxlow>
</weather34top>

<weather34top> 
<thedate><?php echo strftime('%b',time())." ".date('Y');?></thedate></thedate>
<thevalue>
<?php echo "<maxtemporange>".$weather["thb0seapressmmax"];echo "</maxtemporange><tunit1>".$weather["barometer_units"];?>
</tunit1></thevalue>
<maxlow>Lo <?php echo "<maxtempblue>".$weather["thb0seapressmmin"];echo "</maxtempblue>";?>
</maxlow>
</weather34top>

<weather34top> 
<thedate><?php echo $weather["thb0seapressyearmaxtime"] ?></thedate>
<thevalue>
<?php // max
echo "<maxtempred>".$weather["thb0seapressymax"];echo "</maxtempred><tunit1>".$weather["barometer_units"];
?>
</tunit1></thevalue>
<maxlow><?php echo $lang['Highest']?></maxlow>
</weather34top>
</main>