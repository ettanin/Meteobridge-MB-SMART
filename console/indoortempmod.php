<?php include('livedata.php');?>
<div
style="position:relative;left:-60px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:180px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-20px">
Indoor Temperature &deg;<blue><?php echo $weather["temp_units"]?></blue>    </div>


<div class="tempcontainer" style="margin-left:23px;">
<?php //weather34 sez lets make the temperature look nice 
if($weather["temp_units"]=='C' && $weather["temp_indoor"]<-10){echo '<div class=outsideminus10>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<-5){echo '<div class=outsideminus5>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<0){echo '<div class=outsidezero>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<5){echo '<div class=outside0-5>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<10){echo '<div class=outside6-10>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<15){echo '<div class=outside11-15>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<20){echo '<div class=outside16-20>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<25){echo '<div class=outside21-25>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<30){echo '<div class=outside26-30>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<35){echo '<div class=outside31-35>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<40){echo '<div class=outside36-40>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<45){echo '<div class=outside41-45>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor"]<100){echo '<div class=outside50>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
//Fahrenheit
if($weather["temp_units"]=='F' && $weather["temp_indoor"]<14){echo '<div class=outsideminus10>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<23){echo '<div class=outsideminus5>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<32){echo '<div class=outsidezero>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<41){echo '<div class=outside0-5>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<50){echo '<div class=outside6-10>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<59){echo '<div class=outside11-15>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<68){echo '<div class=outside16-20>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<77){echo '<div class=outside21-25>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<86){echo '<div class=outside26-30>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<95){echo '<div class=outside31-35>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<104){echo '<div class=outside36-40>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<113){echo '<div class=outside41-45>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather["temp_indoor"]<212){echo '<div class=outside50>'.number_format($weather["temp_indoor"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
?>
</div></smalltempunit>
<div class="temptrendx">
<?php echo $weather["temp_indoor_trend"]." </span>\n";
//falling
if($weather["temp_indoor_trend"]<0){echo '<trendmovementfallingx>'.$fallingsymbol.' '.number_format($weather["temp_indoor_trend"],1).'&deg;</trendmovementfallingx>';}
//rising
else if($weather["temp_indoor_trend"]>0){echo '<trendmovementrisingx>'.$risingsymbol.' +'.number_format($weather["temp_indoor_trend"],1).'&deg;</trendmovementfallingx>';}
//steady
else echo '<trendmovementsteadyx>'.$steadysymbol.'</trendmovementsteadyx>';?>
</span></div>


<div class="temptrendphrase">
<?php 
//falling
if($weather["temp_indoor_trend"]<0){echo '&nbsp;&nbsp;Falling';}
//rising
else if($weather["temp_indoor_trend"]>0){echo '&nbsp;&nbsp;Rising';}
//steady
else echo '&nbsp;&nbsp;&nbsp;Steady';?>
</span></div></div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
if ($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=35){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=30){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=25){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=20){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=15 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome15-20c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=10 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=5 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>=0 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>-10 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["temp_indoor_feel"]>-50 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-50-10c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}



// F
if ($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=95){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=86){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=77){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=68){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=59 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome15-20c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=50 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=41 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>=32 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>14 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["temp_indoor_feel"]>-50 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-50-10c>".$weather["temp_indoor_feel"]."&deg;<smalltempunit2>".$weather["temp_units"];}
?><smalltempunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Humidity</valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome-50-10c>". $weather["humidity_indoor"]."<smalltempunit2>%";
?>
</smalltempunit2></div></div></div></div>
</div>
