<?php include('livedata.php');?>
<div
style="position:relative;left:-70px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:140px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-20px">
Wind Gusts <blue><?php echo $weather["wind_units"]?></blue></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>". $weather["winddmax"]."</div>";?> 
<?php echo "<div class='mindata'>".$weather["winddmaxtime"]."</div>";?>
<?php echo "<div class='hidata'>Max</div>";?> 
<?php echo "<div class='lodata'>Time</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if( $weather["wind_gust_speed"]<5){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<10){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<20){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<35){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<40){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<75){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<150){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
?>
</div></smalltempunit></div></div>

<div class="heatcircle" ><div class="heatcircle-content"><valuetextheading1>Beaufort</valuetextheading1>
<?php  //heat-index/real feel

if ($weather['wind_speed_bft']>=12) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. "&nbsp; $beaufort12";}
else if ($weather['wind_speed_bft']>=11) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. "&nbsp; $beaufort11";}
else if ($weather['wind_speed_bft']>=10) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " &nbsp;$beaufort10";}
else if ($weather['wind_speed_bft']>=9) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " $beaufort9";}
else if ($weather['wind_speed_bft']>=8) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " $beaufort8";}
    
else if ($weather['wind_speed_bft']>=7) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " &nbsp;$beaufort7";}
else if ($weather['wind_speed_bft']>=6) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['wind_speed_bft']. " &nbsp;$beaufort6";}
else if ($weather['wind_speed_bft']>=5) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['wind_speed_bft']. " &nbsp;$beaufort5";} 
else if ($weather['wind_speed_bft']>=4) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['wind_speed_bft']. " &nbsp;$beaufort4";}   
        
else if ($weather['wind_speed_bft']>=3) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['wind_speed_bft']. " &nbsp;$beaufort3";}
else if ($weather['wind_speed_bft']>=2) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort2";}
else if ($weather['wind_speed_bft']>=1) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort1";} 
else if ($weather['wind_speed_bft']==0) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort0";}   

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Beaufort</valuetextheading1>
<?php //avg today
if ( $weather['wind_speed_bft']>=12){echo "<div class=tempconverter1><div class=tempmodulehome40-50c><valuebeaufort>Hurricane";}
else if (  $weather['wind_speed_bft']>=11){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Violent Storm";}
else if (  $weather['wind_speed_bft']>=10){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Storm";}
else if ( $weather['wind_speed_bft']>=9){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Strong Gale";}
else if ( $weather['wind_speed_bft']>=8){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Gale Force";}
else if ( $weather['wind_speed_bft']>=7){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Near Gale "; echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=6){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Strong Breeze";}
else if ( $weather['wind_speed_bft']>=5){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Fresh Breeze";}
else if ( $weather['wind_speed_bft']>=4){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Moderate Breeze";}
else if ( $weather['wind_speed_bft']>=3){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Gentle Breeze";}
else if ( $weather['wind_speed_bft']>=2){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Light Breeze";}
else if ( $weather['wind_speed_bft']>=1){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Light Winds";}
else if ( $weather['wind_speed_bft']>=0){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>Calm ";}

?>
</valuebeaufort></div></div></div></div>

</div>