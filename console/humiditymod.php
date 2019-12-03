<?php include('livedata.php');?>
<div
style="position:relative;left:-70px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:100px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-20px">
Humidity <blue>%</blue></div>
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
if($weather["humidity_trend"]<0){echo '&nbsp;&nbsp;Falling';}
//rising
else if($weather["humidity_trend"]>0){echo '&nbsp;&nbsp;Rising';}
//steady
else echo '&nbsp;&nbsp;&nbsp;Steady';?>
</span></div></div></div>


<div class="heatcircle"><div class="heatcircle-content">
<?php //humidity max yesterday
if ($weather["humidity_ydmax"]>75){
    echo "<valuetextheading1>Yesterday Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmax"]>60){
    echo "<valuetextheading1>Yesterday Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmax"]>50){
    echo "<valuetextheading1>Yesterday Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmax"]>0){
    echo "<valuetextheading1>Yesterday Max</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["humidity_ydmax"]."<smalltempunit2>%";
}
?><smalltempunit2></div></div></div>


<div class="heatcircle2"><div class="heatcircle-content">
<?php //humidity min yesterday
if ($weather["humidity_ydmin"]>75){
    echo "<valuetextheading1>Yesterday Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmin"]>60){
    echo "<valuetextheading1>Yesterday Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmin"]>50){
    echo "<valuetextheading1>Yesterday Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ydmin"]>0){
    echo "<valuetextheading1>Yesterday Min</valuetextheading1><br>
<div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["humidity_ydmin"]."<smalltempunit2>%";
}
?>
</smalltempunit2></div></div></div></div></div>