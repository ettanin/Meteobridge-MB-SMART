<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019		Revised November 2019                                              #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);
$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class="topframe">
<main class="gridhistory"> 
<weather34top> 
<thedate><?php echo strftime('%b',time())." ".date('Y');?></thedate>
<thevalue>
<?php //rain month
if($weather["rainmmax"]>=0 && $weather["rain_units"] =='mm'){ echo "<maxtempblue>".number_format($weather["rainmmax"],1,'.','');echo "</maxtempblue><tunit1>".$weather["rain_units"];}if ($weather["rain_units"] =='in'){echo "<maxtempblue>".$weather["rainmmax"]  ;echo "</maxtempblue><tunit1>".$weather["rain_units"];}?>
</tunit1></thevalue>
<maxlow><?php echo $lang['Total']?></maxlow>
</weather34top>

<weather34top> 
<thedate>
<?php echo $lang['Yesterday']?>
 <thevalue><maxtempblue>
<?php echo $weather["rainydmax"]."</maxtempblue><tunit1>".$weather["rain_units"]?>
</tunit1></thevalue>
<maxlow><?php echo $lang['Total']?></maxlow>
</weather34top>

<weather34top> 
 <thedate><?php echo $lang['Rainfall']?></thedate>
 <thevalue>
<?php //rain year 
if($weather["rainymax"]>=0 && $weather["rain_units"] =='mm'){ 
    echo "<maxtempblue>".number_format($weather["rainymax"],1,'.','');
    echo "</maxtempblue><tunit1>".$weather["rain_units"];}
if ($weather["rain_units"] =='in'){
    echo "<maxtempblue>".$weather["rainymax"]  ;
    echo "</maxtempblue><tunit1>".$weather["rain_units"];}
?>
</tunit1></thevalue>
<maxlow>
<?php echo date('Y')?> <?php echo $lang['Total']?></maxlow>
</weather34top>
</main>