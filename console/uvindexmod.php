<?php include('livedata.php');?>
<div
style="position:relative;left:-70px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:100px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-20px">
UV-Index <blue>UVI</blue></div>
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
<div class="temptrendphrase">

<?php if ($weather["uv"]>=10) {echo $uviclear.'<span>UVI</span> Extreme';}
else if ($weather["uv"]>=8) {echo $uviclear.'<span>UVI</span> Very High';}
else if ($weather["uv"]>=6) {echo $uviclear.'<span>UVI</span> High';}
else if ($weather["uv"]>=3) {echo $uviclear.'<span>UVI</span> Moderate';}
else if ($weather["uv"]>0 ) {echo $uviclear,'<span>UVI</span> Low';}
else if ($weather["uv"]==0 ) {echo $uviclear,'<span>Overcast-Darkness</span> ';}?></div>
</span></div>
</div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
echo "<valuetextheading1>&nbsp;&nbsp;Solar Radiation </valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome20-25c >".$weather["solar"]."<smalltempunit2>wm/2";

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>&nbsp;Luminance Lux</valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["lux"]."<smalltempunit2>Lux";
?>
</smalltempunit2></div></div></div></div></div>
