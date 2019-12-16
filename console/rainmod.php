<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class="modulecaption">
<?php echo $lang['Rainfall']?> <blue1><?php echo $weather["rain_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata' style='margin-left:10px'><blue>". $weather["rain_lasthour"]."</blue><smalltempunit4>&nbsp; ".$weather["rain_units"]."</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'><blue>".$weather["rain_rate"]."</blue><smalltempunit4>&nbsp;".$weather["rain_units"]."</smalltempunit4></div>";?>
<?php echo "<div class='hidata'>".$lang['Last Hour']."</div>";?> 
<?php echo "<div class='lodata'>".$lang['Rate']."</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if ($weather["rain_units"]=="mm"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],1).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
if ($weather["rain_units"]=="in"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],2).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
?>
</div></smalltempunit>
<div class="temptrendphrase" style="margin-left:20px;width:200px;font-size:11px">
<?php 
if($weather["rain_rate"]>20){echo '<trendmovementrisingx> &nbsp;'.$lang['Heavy Rain-Metar'];echo $preciprain;}
else if($weather["rain_rate"]>10){echo '<trendmovementrisingx> &nbsp;'.$lang['Moderate Rain-Metar'] ;echo $preciprain;}
else if($weather["rain_rate"]>=0.4){echo '<trendmovementrisingx> &nbsp;'.$lang['Steady']." ".$lang['Rainfall'] ;echo $preciprain;}
else if($weather["rain_rate"]>0){echo '<trendmovementrisingx> &nbsp;'.$lang['Light Rain-Metar'];echo $preciprain;}
//steady
else if($meteobridgeapi[124]>0){
    echo $lang['Last Rainfall'];
if ($seconds_ago >= 172800) {echo '<blue> '.intval($seconds_ago / 86400) . ' </blue><tunit1> '.$lang['Days'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago >= 86400) {echo '<blue> '.intval($seconds_ago / 86400) . ' </blue><tunit1> '.$lang['Day'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago >= 7200) {echo '<blue> '.intval($seconds_ago / 3600) . ' </blue><tunit1> '.$lang['Hours'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago >= 3600) {echo '<blue> '.intval($seconds_ago / 3600) . ' </blue><tunit1> '.$lang['Hour'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago > 60) {echo '<blue> '.intval($seconds_ago / 60) . ' </blue><tunit1> '.$lang['Minutes'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago <= 60) {echo '<blue> '.intval($seconds_ago / 60) . ' </blue><tunit1> '.$lang['Minute'].'</tunit1></blue1></thevalue>
    '; echo "<maxlow>".$lang['Ago']."</maxlow></weather34top>";}
else echo "";

}
?>


</span></div>
</div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
echo "<valuetextheading1>".$lang['Last-Twenty-Four-Hour']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c ><blue>".$weather["rain_24hrs"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo date('Y');?> <?php echo $lang['Total']?></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c><blue>". $weather["rain_year"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
?>
</smalltempunit2></div></div></div>

<div class="heatcirclerainmonth"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Month'];?> <?php echo $lang['Total']?></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c><blue>". $weather["rain_month"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
?>
</smalltempunit2></div></div></div>

</div></div>