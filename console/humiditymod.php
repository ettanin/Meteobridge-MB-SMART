<?php include('livedata.php');include('common.php');?>
<div class="modulecaption"><?php echo $lang['Humidity']?></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>". $weather["humidity_min"]."%</div>";?> 
<?php echo "<div class='mindata'>".$weather["humidity_max"]."%</div>";?>
<?php echo "<div class='hidata'>Min</div>";?> 
<?php echo "<div class='lodata'>Max</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if($weather['humidity']<30){echo '<div class=outside26-30>'.number_format($weather['humidity'],0).'<smallhumidityunit>%</smallhumidityunit>';}
else if($weather['humidity']<50){echo '<div class=outside6-10>'.number_format($weather['humidity'],0).'<smallhumidityunit>%</smallhumidityunit>';}
else if($weather['humidity']<70){echo '<div class=outside11-15>'.number_format($weather['humidity'],0).'<smallhumidityunit>%</smallhumidityunit>';}
else if($weather['humidity']<=100){echo '<div class=outsidezero>'.number_format($weather['humidity'],0).'<smallhumidityunit>%</smallhumidityunit>';}
?>
</div>
<?php //humidity man
echo "<tempman>";
if($weather['humidity']<30){ echo "<icon-26-30>".$tempman."</icon-26-30>";}
else if($weather['humidity']<50){ echo "<icon-6-10>".$tempman."</icon-6-10>";}
else if($weather['humidity']<70){ echo "<icon-11-15>".$tempman."</icon-11-15>";}
else if($weather['humidity']<100){ echo "<icon-zero>".$tempman."</icon-zero>";}
echo "</tempman>";
 ?></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php //humidity max year
echo "<valuetextheading1>".date('Y')." Max <blue>".$weather["humidity_ymaxtime"]."</blue></valuetextheading1><br>";
if ($weather["humidity_ymax"]>75){
    echo "<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["humidity_ymax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ymax"]>60){
    echo "<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["humidity_ymax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ymax"]>50){
    echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["humidity_ymax"]."<smalltempunit2>%";
}

else if ($weather["humidity_ymax"]>=0){
    echo "
<div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["humidity_ymax"]."<smalltempunit2>%";
}
?><smalltempunit2></div></div></div>


<div class="heatcircle2"><div class="heatcircle-content">
<?php //humidity min yesterday
echo "<valuetextheading1>".date('Y')." Min <blue>".$weather["humidity_ymintime"]."</blue></valuetextheading1><br>";
if ($weather["humidity_ymin"]>75){
    echo "
<div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["humidity_ymin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ymin"]>60){
    echo "
<div class=tempconverter1><div class=tempmodulehome5-10c>".$weather["humidity_ymin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ymin"]>50){
    echo "
<div class=tempconverter1><div class=tempmodulehome20-25c>".$weather["humidity_ymin"]."<smalltempunit2>%";
}

else if ($weather["humidity_ymin"]>=0){
    echo "
<div class=tempconverter1><div class=tempmodulehome30-35c>".$weather["humidity_ymin"]."<smalltempunit2>%";
}
?>
</smalltempunit2></div></div>

<div class="thetrendgap">
<?php 
//falling
if($weather["humidity_trend"]<0){echo '<div class=thetrendboxblue>'.$lang['Falling'].'';echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["humidity_trend"],1).'</blue><smalltempunit2>%';}
//rising
else if($weather["humidity_trend"]>0){echo '<div class=thetrendboxorange>'.$lang['Rising'].'';echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["humidity_trend"],1).'</orange><smalltempunit2>%';}
//steady
else echo '<div class=thetrendboxblue>'.$lang['Steady'].''.$steadysymbol.'';?></smalltempunit2>
</div></div>