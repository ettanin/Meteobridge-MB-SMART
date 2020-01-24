<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017                                #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at 													   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	WEATHER STATION TEMPLATE 2015-2017                 										       #
	# 	     MB SMART Version Revised September 2019 								                   #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');	?>
<div class="moonblock">
<div class="indoortemp-mod"> 
<?php //indoor temp
//c
if($weather["temp_units"]=='C' && $weather["temp_indoor"]<15) {
echo '<blue>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</blue>';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]>24) {
echo '<red>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</red>';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]>19) {
echo '<orange>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</orange>';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]>=15) {
echo '<yellow>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</yellow>';}
//f
if($weather["temp_units"]=='F' && $weather["temp_indoor"]<59) {
    echo '<blue>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</blue>';}
    else if($weather["temp_units"]=='F' && $weather["temp_indoor"]>75.2) {
    echo '<red>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</red>';}
    else if($weather["temp_units"]=='F' && $weather["temp_indoor"]>66.2) {
    echo '<orange>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</orange>';}
    else if($weather["temp_units"]=='F' && $weather["temp_indoor"]>=15) {
    echo '<yellow>'.$hometemp1.'&nbsp;<value>'.$weather["temp_indoor"].'&deg;</yellow>';}
?></value>
</div>

<indoor-temp-trend>
<?php if($weather["temp_indoor_trend"] >0)echo "<orange>".$lang['Rising']."</orange>&nbsp; ". $risingsymbolsmall;
else if($weather["temp_indoor_trend"]<0)echo "<blue>".$lang['Falling']."</blue>&nbsp; ". $fallingsymbolsmall;
else echo $lang['Steady']." &nbsp;";?>
</indoor-temp-trend>


<div class="indoorhumidity-mod"> 
<?php //indoor humidity
if($weather["humidity_indoor"]>70) {
echo '<blue>'.$hometemp.'&nbsp;</blue>'.$lang['Humidity'].'&nbsp; <blue>'.$weather["humidity_indoor"].'</blue><smalltempunit2>%</smalltempunit2>';}
else if($weather["humidity_indoor"]>=40) {
echo '<green>'.$hometemp.'&nbsp;</green>'.$lang['Humidity'].'&nbsp; <green>'.$weather["humidity_indoor"].'</green><smalltempunit2>%</smalltempunit2>';}
else if($weather["humidity_indoor"]<40) {
echo '<red>'.$hometemp.'&nbsp;</red>'.$lang['Humidity'].'&nbsp; <red>'.$weather["humidity_indoor"].'</red><smalltempunit2>%</smalltempunit2>';}
if($weather["humidity_indoortrend"] >0)echo $risingsymbolsmall;
else if($weather["humidity_indoortrend"]<0)echo $fallingsymbolsmall;?>
</div>



<div class="indoorfeels-mod"> 
<?php //indoor feels
//c
if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]<15) {
echo '<blue>'.$hometemp.'</blue>&nbsp;'.$lang['Feelslike'].' &nbsp;<blue>'.$weather["temp_indoor_feel"].'</blue>&deg;';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>24) {
echo '<red>'.$hometemp.'</red>&nbsp;'.$lang['Feelslike'].' &nbsp;<red>'.$weather["temp_indoor_feel"].'</red>&deg;';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>19) {
echo '<orange>'.$hometemp.'</orange>&nbsp;'.$lang['Feelslike'].' &nbsp;<orange>'.$weather["temp_indoor_feel"].'</orange>&deg;';}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=15) {
echo '<yellow>'.$hometemp.'</yellow>&nbsp;'.$lang['Feelslike'].' &nbsp;<yellow>'.$weather["temp_indoor_feel"].'</yellow>&deg;';}
//f
if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]<59) {
echo '<blue>'.$hometemp.'</blue>&nbsp;'.$lang['Feelslike'].' &nbsp;<blue>'.$weather["temp_indoor_feel"].'</blue>&deg;';}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>75.2) {
echo '<red>'.$hometemp.'</red>&nbsp;'.$lang['Feelslike'].' &nbsp;<red>'.$weather["temp_indoor_feel"].'</red>&deg;';}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>66.2) {
echo '<orange>'.$hometemp.'</orange>&nbsp;'.$lang['Feelslike'].' &nbsp;<orange>'.$weather["temp_indoor_feel"].'</orange>&deg;';}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=59) {
echo '<yellow>'.$hometemp.'</yellow>&nbsp;'.$lang['Feelslike'].' &nbsp;<yellow>'.$weather["temp_indoor_feel"].'</yellow>&deg;';}
if($weather["temp_indoor_trend"] >0)echo $risingsymbolsmall;
else if($weather["temp_indoor_trend"]<0)echo $fallingsymbolsmall;?>
</div>