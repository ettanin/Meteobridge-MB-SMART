<?php require_once('livedata.php');require_once('common.php');?>
<div class="modulecaption"><?php echo $lang['Windspeed'];?> <blue1><?php echo $weather["wind_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>". number_format($weather["winddmax"],1)."</div>";?> 
<?php echo "<div class='mindata'>".$weather["winddmaxtime"]."</div>";?>
<?php echo "<div class='hidata'>Max</div>";?> 
<?php echo "<div class='lodata'>Time</div>";?>
<?php //weather34 sez lets make the temperature look nice 
//weather34-windgust
if ($weather["wind_gust_speed"]*$toKnots>=26.9978) {echo "<div class=windbox style='color:#d05f2d;'>",number_format($weather["wind_gust_speed"], 1),'<smalltempunit>'.$weather["wind_units"];}
elseif ($weather["wind_gust_speed"]*$toKnots>=21.5983) { echo "<div class=windbox style='color:#d65b4a;'>",number_format($weather["wind_gust_speed"], 1),'<smalltempunit>'.$weather["wind_units"];}
elseif ($weather["wind_gust_speed"]*$toKnots>=16.1987) { echo "<div class=windbox style='color:#d05f2d;'>",number_format($weather["wind_gust_speed"], 1),'<smalltempunit>'.$weather["wind_units"];}
elseif ($weather["wind_gust_speed"]*$toKnots<16.1987 && $weather["wind_gust_speed"]*$toKnots>=5.39957) {echo "<div class=windbox style='color:#00a4b4'>",number_format($weather["wind_gust_speed"],1),'<smalltempunit>'.$weather["wind_units"];} 
elseif ($weather["wind_gust_speed"]<=10) {echo"<div class=windbox style='color:#00a4b4'>". number_format($weather["wind_gust_speed"],1),'<smalltempunit>'.$weather["wind_units"];} 
elseif ($weather["wind_gust_speed"]<=1) { echo"<div class=windbox style='color:#00a4b4'>;". number_format($weather["wind_gust_speed"],1),'<smalltempunit>'.$weather["wind_units"];}
?>
</div></smalltempunit></div></div>

<div class="heatcircle" ><div class="heatcircle-content"><valuetextheading1>Beaufort</valuetextheading1>
<?php  //weather34 beaufort symbol
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
<?php //weather34 beaufort word description
if ( $weather['wind_speed_bft']>=12){echo "<div class=tempconverter1><div class=tempmodulehome40-50c><valuebeaufort>".$lang['Hurricane'];echo $heatindexalert8;}
else if (  $weather['wind_speed_bft']>=11){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>".$lang['Violentstorm'];echo $heatindexalert8;}
else if (  $weather['wind_speed_bft']>=10){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Storm'] ;echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=9){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Stronggale'];echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=8){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Galeforce'];echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=7){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Neargale']; echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=6){echo "<div class=tempconverter1><div class=tempmodulehome20-25c><valuebeaufort>".$lang['Strongbreeze'];}
else if ( $weather['wind_speed_bft']>=5){echo "<div class=tempconverter1><div class=tempmodulehome20-25c><valuebeaufort>".$lang['Freshbreeze'];}
else if ( $weather['wind_speed_bft']>=4){echo "<div class=tempconverter1><div class=tempmodulehome10-15c><valuebeaufort>".$lang['Moderatebreeze'];}
else if ( $weather['wind_speed_bft']>=3){echo "<div class=tempconverter1><div class=tempmodulehome10-15c><valuebeaufort>".$lang['Gentelbreeze'];}
else if ( $weather['wind_speed_bft']>=2){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Lightbreeze'];}
else if ( $weather['wind_speed_bft']>=1){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Lightair'];}
else if ( $weather['wind_speed_bft']>=0){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Calm'];}
?>
</valuebeaufort></div></div></div></div></div>