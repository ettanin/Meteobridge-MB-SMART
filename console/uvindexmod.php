<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption">UV-Index <blue1>UVI</blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>". $weather["uvdmax"]."<smalltempunit4>uvi</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'>".$weather["uvdmaxtime"]."</div>";?>
<?php echo "<div class='hidata'>Max</div>";?> 
<?php echo "<div class='lodata'>Time</div>";?>
<?php 
if ($weather["uv"]>10) {echo '<div class=windbox style="color:#8781bd">'.number_format($weather["uv"],1)."<smalltempunit> &nbsp;UVI";}
else if ($weather["uv"]>8) {echo '<div class=windbox style="color:#d35d4e">'.number_format($weather["uv"],1)."<smalltempunit> &nbsp;UVI";}
else if ($weather["uv"]>5) {echo '<div class=windbox style="color:#d05f2d">'.number_format($weather["uv"],1)."<smalltempunit> &nbsp;UVI";}
else if ($weather["uv"]>=3) {echo '<div class=windbox style="color:#e6a141">'.number_format($weather["uv"],1)."<smalltempunit> &nbsp;UVI";}
else if ($weather["uv"]>=0) {echo '<div class=windbox style="color:#90b12a">'.number_format($weather["uv"],1)."<smalltempunit> &nbsp;UVI";}?>
</div></smalltempunit>
<div class="temptrendphrase" style="font-size:0.75em;margin-top:3px">
</div>
</span></div>
</div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
echo "<valuetextheading1>&nbsp;&nbsp;".$lang['Solarradiation']." </valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c >".$weather["solar"]."<smalltempunit2>wm/2";

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>&nbsp;<?php echo $lang['Luminance']?> Lux</valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["lux"]."<smalltempunit2>Lux";
?>
</smalltempunit2></div></div></div></div></div>
