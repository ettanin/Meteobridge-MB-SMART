<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption"><?php echo $lang['Avg Wind'];?> 10 min <blue1><?php echo $weather["wind_units"]?></blue1></div>
<div class="tempcontainer" style="left:-75px;">
<?php 
//kmh
if ($weather["wind_speed"]>75 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Stronggale']."</div>";}
else if ($weather["wind_speed"]>62 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Galeforce']."</div>";}
else if ($weather["wind_speed"]>38 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Strongbreeze']."</div>";}
else if ($weather["wind_speed"]>20 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Moderatebreeze']."</div>";}
else if ($weather["wind_speed"]>6 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Lightbreeze']." </div>";}
else if ($weather["wind_speed"]>0 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Calm']."</div>";}
//mph
if ($weather["wind_speed"]>47 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Stronggale']."</div>";}
else if ($weather["wind_speed"]>32 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Galeforce']."</div>";}
else if ($weather["wind_speed"]>25 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Strongbreeze']."</div>";}
else if ($weather["wind_speed"]>13 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Moderatebreeze']."</div>";}
else if ($weather["wind_speed"]>4 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Lightbreeze']." </div>";}
else if ($weather["wind_speed"]>0 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Calm']."</div>";}
//kts
if ($weather["wind_speed"]>41 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Stronggale']."</div>";}
else if ($weather["wind_speed"]>34 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Galeforce']."</div>";}
else if ($weather["wind_speed"]>22 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Strongbreeze']."</div>";}
else if ($weather["wind_speed"]>11 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Moderatebreeze']."</div>";}
else if ($weather["wind_speed"]>4 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Lightbreeze']." </div>";}
else if ($weather["wind_speed"]>0 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Calm']."</div>";}

?> 
<?php echo "<div class='hidata'></div>";?> 

<?php //weather34 sez lets look nice 
//kmh
if( $weather["wind_speed"]<=5 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=10 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=30 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=35 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=40 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=75 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=150 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
//mph
if( $weather["wind_speed"]<=3.1 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<6.21 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=18.64 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=21.74 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=24.85 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=46.6 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=94 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
//kts
if( $weather["wind_speed"]<2.6 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<5.3 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<6.4 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<19 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<21.5 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<39 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<81 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
//ms
if( $weather["wind_speed"]<1.3 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<2.7 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<5.5 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<9.7 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<11.1 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<20.8 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<41 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}



?>
</div></smalltempunit2>
</div></div>

<div class="heatcircle" ><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Wind Run']." ".$lang['Today'];?></valuetextheading1>
<?php 
//windchill offline with real feel 
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather["windrun34"]."<smalltempunit2>".$distanceunit;

?><smalltempunit2></div></div></div>


<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Avg Wind'];?> <?php echo $lang['Today'];?></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c>". $weather["wind_speed_avg30"]."<smalltempunit2>". $weather["wind_units"]."</smalltempunit2>";
?>
</smalltempunit2></div></div></div></div></div>