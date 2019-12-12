<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption"><?php echo $lang['Dewpoint']?> &deg;<blue1><?php echo $weather["temp_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>". $weather["dewmin"]."&deg;</div>";?> 
<?php echo "<div class='mindata'>".$weather["dewmax"]."&deg;</div>";?>
<?php echo "<div class='hidata'>Min</div>";?> 
<?php echo "<div class='lodata'>Max</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if($weather["temp_units"]=='C' && $weather["dewpoint"]<-10){echo '<div class=outsideminus10>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<-5){echo '<div class=outsideminus5>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<0){echo '<div class=outsidezero>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<5){echo '<div class=outside0-5>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<10){echo '<div class=outside6-10>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<15){echo '<div class=outside11-15>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<20){echo '<div class=outside16-20>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<25){echo '<div class=outside21-25>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<30){echo '<div class=outside26-30>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<35){echo '<div class=outside31-35>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<40){echo '<div class=outside36-40>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<45){echo '<div class=outside41-45>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<100){echo '<div class=outside50>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}

//Fahrenheit
if($weather["temp_units"]=='F' && $weather["dewpoint"]<14){echo '<div class=outsideminus10>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<23){echo '<div class=outsideminus5>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<32){echo '<div class=outsidezero>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<41){echo '<div class=outside0-5>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<50){echo '<div class=outside6-10>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<59){echo '<div class=outside11-15>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<68){echo '<div class=outside16-20>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<77){echo '<div class=outside21-25>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<86){echo '<div class=outside26-30>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<95){echo '<div class=outside31-35>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<104){echo '<div class=outside36-40>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<113){echo '<div class=outside41-45>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<212){echo '<div class=outside50>'.number_format($weather["dewpoint"],1).'<smalltempunit>&deg;'.$weather["temp_units"];}
?>
</div></smalltempunit>
<div class="temptrendx">
<?php echo $weather["dewpoint_trend"]." </span>\n";
//falling
if($weather["dewpoint_trend"]<0){echo '<trendmovementfallingx>'.$fallingsymbol.' '.number_format($weather["dewpoint_trend"],1).'&deg;</trendmovementfallingx>';}
//rising
else if($weather["dewpoint_trend"]>0){echo '<trendmovementrisingx>'.$risingsymbol.' +'.number_format($weather["dewpoint_trend"],1).'&deg;</trendmovementfallingx>';}
//steady
else echo '<trendmovementsteadyx>'.$steadysymbol.'</trendmovementsteadyx>';?>
</span></div>


<div class="temptrendphrase">
<?php 
//falling
if($weather["dewpoint_trend"]<0){echo '&nbsp;&nbsp;'.$lang['Falling'];}
//rising
else if($weather["dewpoint_trend"]>0){echo '&nbsp;&nbsp;'.$lang['Rising'];}
//steady
else echo '&nbsp;&nbsp;&nbsp;'.$lang['Steady'];?>
</span></div></div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //dewpoint max yesterday
if ($weather["dewydmax"]>24) {
echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewydmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

else if ($weather["dewydmax"]>19) {
echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewydmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    

else if ($weather["dewydmax"]>10) {
echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewydmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}  

else if ($weather["dewydmax"]>7) {
echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewydmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

else if ($weather["dewydmax"]>-50) {
echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewydmax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content">
<?php  //dewpoint min yesterday
if ($weather["dewydmin"]>24) {
echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewydmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

else if ($weather["dewydmin"]>19) {
echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewydmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    

else if ($weather["dewydmin"]>10) {
echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewydmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}  

else if ($weather["dewydmin"]>7) {
echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewydmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

else if ($weather["dewydmin"]>-50) {
echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewydmin"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?>
</smalltempunit2></div></div></div></div></div>