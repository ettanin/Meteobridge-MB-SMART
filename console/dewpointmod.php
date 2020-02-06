<?php include('livedata.php');include('common.php');?>
<div class="modulecaption"><?php echo $lang['Dewpoint']?></div>
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
<?php //dewpoint man
echo "<tempman>";
//c
if($weather["temp_units"]=='C' && $weather["dewpoint"]<-10){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<-5){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<0){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<5){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<10){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<16){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<20){ echo "<icon-16-20>".$tempman."</icon-16-20>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<25){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<30){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<35){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<40){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='C' && $weather["dewpoint"]<100){ echo "<icon-41-45>".$tempman."<icon-41-45>";}

//f
if($weather["temp_units"]=='F' && $weather["dewpoint"]<14){ echo "<icon-minus10>".$tempman."</icon-minus10 >";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<23){ echo "<icon-minus5>".$tempman."</icon-minus5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<32){ echo "<icon-zero>".$tempman."</icon-zero>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<41){ echo "<icon-0-5>".$tempman."</icon-0-5>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<50){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<60.1){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<68){ echo "<icon-16-20>".$tempman."</icon-16-20>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<77){ echo "<icon-21-25>".$tempman."</icon-21-25>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<86){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<95){ echo "<icon-31-35>".$tempman."</icon-31-35>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<104){ echo "<icon-36-40>".$tempman."</icon-36-40>";}
else if($weather["temp_units"]=='F' && $weather["dewpoint"]<300){ echo "<icon-41-45>".$tempman."<icon-41-45>";}

echo "</tempman>";
 ?>
</div>
</div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //dewpoint max Year
echo "<valuetextheading1>".date('Y')." Max <blue>".$weather["dewymaxtime"]."</blue></valuetextheading1><br>";
if ($weather["temp_units"]=='F' && $weather["dewymax"]>75.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}    
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>66.2) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}     
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}     
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>44.6) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}    
    else if ($weather["temp_units"]=='F' && $weather["dewymax"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//C
if ($weather["temp_units"]=='C' && $weather["dewymax"]>24) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>19) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>10) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}  
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>7) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='C' && $weather["dewymax"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["dewymax"]."&deg;<smalltempunit2>".$weather["temp_units"];}

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content">
<?php  //dewpoint min year
echo "<valuetextheading1>".date('Y')." Min <blue>".$weather["dewymintime"]."</blue></valuetextheading1><br>";
if ($weather["temp_units"]=='F' && $weather["dewymin"]>75.2) {
echo "
<div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>66.2) {
echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>50) {
echo "
<div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}  
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>44.6) {
echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
else if ($weather["temp_units"]=='F' && $weather["dewymin"]>-50) {
echo "
<div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
//c
if ($weather["temp_units"]=='C' && $weather["dewymin"]>24) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome25-30c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>19) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>10) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome10-15c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}  
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>7) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    else if ($weather["temp_units"]=='C' && $weather["dewymin"]>-50) {
    echo "
    <div class=tempconverter1><div class=tempmodulehome-10-0c>".$weather["dewymin"]."&deg;<smalltempunit2>".$weather["temp_units"];}
    

?>
</smalltempunit2></div></div>

<div class="thetrendgap">
<?php 
//falling
if($weather["dewpoint_trend"]<0){echo '<div class=thetrendboxblue>'.$lang['Falling'].'';echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["dewpoint_trend"],1).'</blue>&deg;';}
//rising
else if($weather["dewpoint_trend"]>0){echo '<div class=thetrendboxorange>'.$lang['Rising'].'';echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["dewpoint_trend"],1).'</orange>&deg;';}
//steady
else echo '<div class=thetrendboxblue>'.$lang['Steady'].''.$steadysymbol.'';?>
</div></div>