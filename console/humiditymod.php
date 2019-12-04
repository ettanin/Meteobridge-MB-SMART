<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption"><?php echo $lang['Humidity']?> <blue1>%</blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>". $weather["humidity_min"]."%</div>";?> 
<?php echo "<div class='mindata'>".$weather["humidity_max"]."%</div>";?>
<?php echo "<div class='hidata'>Min</div>";?> 
<?php echo "<div class='lodata'>Max</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if($weather['humidity']<30){echo '<div class=outside26-30>'.number_format($weather['humidity'],0).'<smalltempunit>%</smalltempunit>';}
else if($weather['humidity']<50){echo '<div class=outside6-10>'.number_format($weather['humidity'],0).'<smalltempunit>%</smalltempunit>';}
else if($weather['humidity']<70){echo '<div class=outside6-10>'.number_format($weather['humidity'],0).'<smalltempunit>%</smalltempunit>';}
else if($weather['humidity']<100){echo '<div class=outsidezero>'.number_format($weather['humidity'],0).'<smalltempunit>%</smalltempunit>';}

?>
</div></smalltempunit>
<div class="temptrendx">
<?php echo $weather["humidity_trend"]." </span>\n";
//falling
if($weather["humidity_trend"]<0){echo '<trendmovementfallingx>'.$fallingsymbol.' '.number_format($weather["humidity_trend"],1).'%</trendmovementfallingx>';}
//rising
else if($weather["humidity_trend"]>0){echo '<trendmovementrisingx>'.$risingsymbol.' +'.number_format($weather["humidity_trend"],1).'%</trendmovementfallingx>';}
//steady
else echo '<trendmovementsteadyx>'.$steadysymbol.'</trendmovementsteadyx>';?>
</span></div>


<div class="temptrendphrase">
<?php 
//falling
if($weather["humidity_trend"]<0){echo '&nbsp;&nbsp;'.$lang['Falling'];}
//rising
else if($weather["humidity_trend"]>0){echo '&nbsp;&nbsp;'.$lang['Rising'];}
//steady
else echo '&nbsp;&nbsp;&nbsp;'.$lang['Steady'];?>
</span></div></div></div>


<div class="heatcircle"><div class="heatcircle-content">
<?php //humidity max yesterday
if ($weather["humidity_ydmax"]>75){
    echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmax"]>60){
    echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmax"]>50){
    echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmax"]>0){
    echo "<valuetextheading1>".$lang['Yesterday']." Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}
?><smalltempunit2></div></div></div>


<div class="heatcircle2"><div class="heatcircle-content">
<?php //humidity min yesterday
if ($weather["humidity_ydmin"]>75){
    echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmin"]>60){
    echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmin"]>50){
    echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmin"]>0){
    echo "<valuetextheading1>".$lang['Yesterday']." Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}
?>
</smalltempunit2></div></div></div></div></div>