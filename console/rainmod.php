<?php include('livedata.php');?>
<div
style="position:relative;left:-70px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:140px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-20px">
Rainfall <blue><?php echo $weather["rain_units"]?></blue></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'><blue>". $weather["rain_lasthour"]."</blue><smalltempunit4>&nbsp; ".$weather["rain_units"]."</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'><blue>".$weather["rain_rate"]."</blue><smalltempunit4>&nbsp;".$weather["rain_units"]."</smalltempunit4></div>";?>
<?php echo "<div class='hidata'>Last Hour</div>";?> 
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
if($weather["rain_rate"]>20){echo '<trendmovementrisingx><valuebeaufort> &nbsp;Heavy Rainfall ';echo $preciprain;}
else if($weather["rain_rate"]>10){echo '<trendmovementrisingx> <valuebeaufort>&nbsp;Moderate Rainfall ';echo $preciprain;}
else if($weather["rain_rate"]>5){echo '<trendmovementrisingx> <valuebeaufort>&nbsp;Steady Rainfall ';echo $preciprain;}
else if($weather["rain_rate"]>0){echo '<trendmovementrisingx> <valuebeaufort>&nbsp;Light Rain ';echo $preciprain;}
//steady
else echo '<trendmovementrisingx> <valuebeaufort>&nbsp;No Rain at present</trendmovementrisingx>';?>
</span></div>
</div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
echo "<valuetextheading1>&nbsp;&nbsp;&nbsp;Last 24 hours </valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["rain_24hrs"]."&nbsp;<smalltempunit2>".$weather["rain_units"];

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Annual Total</valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["rain_year"]."&nbsp;<smalltempunit2>".$weather["rain_units"];
?>
</smalltempunit2></div></div></div></div></div>