<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption"><?php echo $lang['Rainfall']?>  <blue1><?php echo $weather["rain_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'><blue>". $weather["rain_lasthour"]."</blue><smalltempunit4>&nbsp; ".$weather["rain_units"]."</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'><blue>".$weather["rain_rate"]."</blue><smalltempunit4>&nbsp;".$weather["rain_units"]."</smalltempunit4></div>";?>
<?php echo "<div class='hidata'>".$lang['Last Hour']."</div>";?> 
<?php echo "<div class='lodata'>Rate</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if ($weather["rain_units"]=="mm"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],1).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
if ($weather["rain_units"]=="in"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],2).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
?>
</div></smalltempunit>
<div class="temptrendphrase" style="margin-left:80%;width:200px">
<?php 
if($weather["rain_rate"]>20){echo '<trendmovementrisingx><valuebeaufort> &nbsp;'.$lang['Heavy Rain-Metar'];echo $preciprain;}
else if($weather["rain_rate"]>10){echo '<trendmovementrisingx> <valuebeaufort>&nbsp;'.$lang['Moderate Rain-Metar'];echo $preciprain;}
else if($weather["rain_rate"]>5){echo '<trendmovementrisingx> <valuebeaufort>&nbsp;'.$lang['Steady'], $lang['Rainfall'];echo $preciprain;}
else if($weather["rain_rate"]>0){echo '<trendmovementrisingx> <valuebeaufort>&nbsp;'.$lang['Light Rain-Metar'];echo $preciprain;}
//steady
else echo '<trendmovementrisingx> <valuebeaufort>&nbsp;No ' .$lang['Rainfall'].'</trendmovementrisingx>';?>
</span></div>
</div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
echo "<valuetextheading1>&nbsp;&nbsp;&nbsp;".$lang['Last-Twenty-Four-Hour']." </valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["rain_24hrs"]."&nbsp;<smalltempunit2>".$weather["rain_units"];

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo date('Y')?> <?php echo $lang['Total']?></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["rain_year"]."&nbsp;<smalltempunit2>".$weather["rain_units"];
?>
</smalltempunit2></div></div></div></div></div>