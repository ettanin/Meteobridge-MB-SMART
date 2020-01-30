<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption"><?php echo $lang['Solarradiation']?></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>&nbsp;&nbsp;&nbsp;&nbsp;". $weather["solardmax"]."<smalltempunit4>&nbsp;wm/2</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'>".$weather["solardmaxtime"]."</div>";?>
<?php echo "<div class='hidata'>Max</div>";?> 
<?php echo "<div class='lodata'>Time</div>";?>
<?php 
if ($weather["solar"]>800) {echo '<div class=windbox style="color:#d05f2d;font-size:2.1em" >'.number_format($weather["solar"],0)."<smalltempunit>&nbsp;wm/2";}
else if ($weather["solar"]>=0){echo '<div class=windbox style="color:#e6a141;font-size:2.1em">'.number_format($weather["solar"],0)."<smalltempunit>&nbsp;wm/2";}
?>
</div></smalltempunit2>

<?php //uv indicator
echo "<uvman>";
if($weather["solar"]>500){ echo "<orange>".$uvicon."</orange>";}
else if($weather["solar"]>0){ echo "<yellow>".$uvicon."</yellow>";}
echo "</uvman>";
 ?>


</div></div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //solar
echo "<valuetextheading1>".date('Y')." Max <blue>".$weather["solarymaxtime"]."</blue></valuetextheading1><br>";
if ($weather["solarymax"]>=500){
    echo "
<div class=tempconverter1><div class=tempmodulehome20-25c >".$weather["solarymax"]."<smalltempunit2>&nbsp;wm/2";
}
else if ($weather["solarymax"]>0){
    echo "
<div class=tempconverter1><div class=tempmodulehome10-15c >".$weather["solarymax"]."<smalltempunit2>&nbsp;wm/2";
}
else if ($weather["solarymax"]>=0){
    echo "
<div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["solarymax"]."<smalltempunit2>&nbsp;wm/2";
}
?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>&nbsp;<?php echo $lang['Luminance']?></valuetextheading1>
<?php //lux
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["lux"]."<smalltempunit2>&nbsp;Lux";
?>
</smalltempunit2></div></div>


<div class=thetrendgap>
<?php 
if ($weather["solar"]>=800) {echo "<div class=theuvpurple>".$uviclear.$lang['Good'];}
else if ($weather["solar"]>=500) {echo "<div class=theuvred>".$uviclear.$lang['High'];}
else if ($weather["solar"]>=200) {echo "<div class=theuvorange>".$uviclear.$lang['Moderate'];}
else if ($weather["solar"]>=0) {echo "<div class=theuvyellow>".$uviclear.$lang['Low'];}

?>
</div></div></div></div>