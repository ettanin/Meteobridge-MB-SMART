<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption">UV-Index</div>
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

<?php //uv indicator
echo "<uvman>";
//c
if($weather["uv"]>10){ echo "<purple>".$uvicon."</purple>";}
else if($weather["uv"]>8){ echo "<darkred>".$uvicon."</darkred>";}
else if($weather["uv"]>5){ echo "<orange>".$uvicon."</orange>";}
else if($weather["uv"]>3){ echo "<yellow>".$uvicon."</yellow>";}
else if($weather["uv"]>0){ echo "<green>".$uvicon."</green>";}
echo "</uvman>";
 ?>
</div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //solar
echo "<valuetextheading1>&nbsp;&nbsp;".$lang['Solarradiation']."</valuetextheading1><br>";
if ($weather["solar"]>800){
    echo "
<div class=tempconverter1><div class=tempmodulehome30-35c >".$weather["solar"]."<smalltempunit2>&nbsp;wm/2";
}
else if ($weather["solar"]>=500){
    echo "
<div class=tempconverter1><div class=tempmodulehome20-25c >".$weather["solar"]."<smalltempunit2>&nbsp;wm/2";
}
else if ($weather["solar"]>0){
    echo "
<div class=tempconverter1><div class=tempmodulehome10-15c >".$weather["solar"]."<smalltempunit2>&nbsp;wm/2";
}
else if ($weather["solar"]>=0){
    echo "
<div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["solar"]."<smalltempunit2>&nbsp;wm/2";
}
?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>&nbsp;<?php echo $lang['Luminance']?></valuetextheading1>
<?php //lux
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["lux"]."<smalltempunit2>&nbsp;Lux";
?>
</smalltempunit2></div></div>


<div class=thetrendgap>
<?php 
if ($weather["uv"]>=10) {echo "<div class=theuvpurple>".$uviclear.$lang['Extreme Caution'];}
else if ($weather["uv"]>=8) {echo "<div class=theuvred>".$uviclear.$lang['Very High Caution'];}
else if ($weather["uv"]>=6) {echo "<div class=theuvorange>".$uviclear.$lang['High Caution'];}
else if ($weather["uv"]>=3) {echo "<div class=theuvyellow>".$uviclear.$lang['Moderate Caution'];}
else if ($weather["uv"]>=0 ) {echo "<div class=theuvgreen>".$uviclear,$lang['Low Caution'];}
?>
</div></div></div></div>