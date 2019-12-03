<?php include('livedata.php');?>
<div
style="position:relative;left:-70px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:140px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-20px">
Temperature &deg;<blue><?php echo $weather["temp_units"]?></blue>    </div>


<div class="tempcontainer">
<?php echo "<div class='maxdata'>". $weather["temp_today_low"]."&deg;</div>";?> 
<?php echo "<div class='mindata'>".$weather["temp_today_high"]."&deg;</div>";?>
<?php echo "<div class='hidata'>Min</div>";?> 
<?php echo "<div class='lodata'>Max</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if($weather["temp_units"]=='C' && $weather['temp']<-10){echo '<div class=outsideminus10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<-5){echo '<div class=outsideminus5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<0){echo '<div class=outsidezero>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<5){echo '<div class=outside0-5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<10){echo '<div class=outside6-10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<15){echo '<div class=outside11-15>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<20){echo '<div class=outside16-20>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<25){echo '<div class=outside21-25>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<30){echo '<div class=outside26-30>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<35){echo '<div class=outside31-35>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<40){echo '<div class=outside36-40>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='C' && $weather['temp']<45){echo '<div class=outside41-45>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather['temp']<100){echo '<div class=outside50>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
//Fahrenheit
if($weather["temp_units"]=='F' && $weather['temp']<14){echo '<div class=outsideminus10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<23){echo '<div class=outsideminus5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<32){echo '<div class=outsidezero>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<41){echo '<div class=outside0-5>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<50){echo '<div class=outside6-10>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<59){echo '<div class=outside11-15>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<68){echo '<div class=outside16-20>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<77){echo '<div class=outside21-25>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather['temp']<86){echo '<div class=outside26-30>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<95){echo '<div class=outside31-35>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<104){echo '<div class=outside36-40>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<113){echo '<div class=outside41-45>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}else if($weather["temp_units"]=='F' && $weather['temp']<212){echo '<div class=outside50>'.number_format($weather['temp'],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
?>
</div></smalltempunit>
<div class="temptrendx">
<?php echo $weather["temp_trend"]." </span>\n";
//falling
if($weather["temp_trend"]<0){echo '<trendmovementfallingx>'.$fallingsymbol.' '.number_format($weather["temp_trend"],1).'&deg;</trendmovementfallingx>';}
//rising
else if($weather["temp_trend"]>0){echo '<trendmovementrisingx>'.$risingsymbol.' +'.number_format($weather["temp_trend"],1).'&deg;</trendmovementfallingx>';}
//steady
else echo '<trendmovementsteadyx>'.$steadysymbol.'</trendmovementsteadyx>';?>
</span></div>


<div class="temptrendphrase">
<?php 
//falling
if($weather["temp_trend"]<0){echo '&nbsp;&nbsp;Falling';}
//rising
else if($weather["temp_trend"]>0){echo '&nbsp;&nbsp;Rising';}
//steady
else echo '&nbsp;&nbsp;&nbsp;Steady';?>
</span></div></div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
if(anyToC($weather["heat_index"])>=35){echo " <valuetextheading1>Heat Index</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome40-50c>".$weather["heat_index"]."&deg;<smalltempunit2>".$weather["temp_units"]." ".$heatindexalert8;}
else if(anyToC($weather["heat_index"])>=30 ){echo " <valuetextheading1>Heat Index</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather["heat_index"]."&deg;<smalltempunit2>".$weather["temp_units"]." ".$heatindexalert8;}

//windchill offline with real feel 
else if ($weather["temp_units"]=='C' && $weather["windchill"]<0){ echo "<valuetextheading1>Windchill</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["windchill"]."&deg;<smalltempunit2>".$weather["temp_units"]." ".$windchillalert8;}
else if ($weather["temp_units"]=='C' && $weather["realfeel"]>=35){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["realfeel"]>=30){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=25){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=20){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=15 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome15-20c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=10 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=5 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>=0 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>-10 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["realfeel"]>-50 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-50-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}



// F
else if ($weather["temp_units"]=='F' && $weather["windchill"]<=32){ echo "<valuetextheading1>Windchill</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["windchill"]."&deg;<smalltempunit2>".$weather["temp_units"]." ".$windchillalert8;}
else if ($weather["temp_units"]=='F' && $weather["realfeel"]>=95){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome35-40c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["realfeel"]>=86){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=77){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome25-30c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=68){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=59 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome15-20c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=50 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=41 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>=32 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>14 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["realfeel"]>-50 ){ echo "<valuetextheading1>Real Feel</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome-50-10c>".$weather['realfeel']."&deg;<smalltempunit2>".$weather["temp_units"];}
?><smalltempunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Average Today</valuetextheading1>
<?php //avg today
if ($weather["temp_units"]=='C' &&  $weather["temp_avgtoday"]>=40){echo "<div class=tempconverter1><div class=tempmodulehome40-50c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' &&  $weather["temp_avgtoday"]>=35){echo "<div class=tempconverter1><div class=tempmodulehome35-40c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' &&  $weather["temp_avgtoday"]>=30){echo "<div class=tempconverter1><div class=tempmodulehome30-35c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=25){echo "<div class=tempconverter1><div class=tempmodulehome25-30c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=20){echo "<div class=tempconverter1><div class=tempmodulehome20-25c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=15){echo "<div class=tempconverter1><div class=tempmodulehome15-20c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=10){echo "<div class=tempconverter1><div class=tempmodulehome10-15c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>5){echo "<div class=tempconverter1><div class=tempmodulehome5-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>=0){echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>-10){echo "<div class=tempconverter1><div class=tempmodulehome-10-0c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["temp_avgtoday"]>-50){echo "<div class=tempconverter1><div class=tempmodulehome-50-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}

//non metric avg today


if ($weather["temp_units"]=='F' &&  $weather["temp_avgtoday"]>=104){echo "<div class=tempconverter1><div class=tempmodulehome40-50c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' &&  $weather["temp_avgtoday"]>=95){echo "<div class=tempconverter1><div class=tempmodulehome35-40c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' &&  $weather["temp_avgtoday"]>=86){echo "<div class=tempconverter1><div class=tempmodulehome30-35c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=77){echo "<div class=tempconverter1><div class=tempmodulehome25-30c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=68){echo "<div class=tempconverter1><div class=tempmodulehome20-25c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=59){echo "<div class=tempconverter1><div class=tempmodulehome15-20c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=50){echo "<div class=tempconverter1><div class=tempmodulehome10-15c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>41){echo "<div class=tempconverter1><div class=tempmodulehome5-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>=32){echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>14){echo "<div class=tempconverter1><div class=tempmodulehome-10-0c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["temp_avgtoday"]>-50){echo "<div class=tempconverter1><div class=tempmodulehome-50-10c>". $weather["temp_avgtoday"]."&deg;<smalltempunit2>".$weather["temp_units"];}?>
</smalltempunit2></div></div></div></div>
</div>
