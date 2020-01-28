<?php include('livedata.php');include('common.php');?>
<div class="modulecaption"><?php echo $lang['Windspeed'];?></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata'>". number_format($weather["winddmax"],1). "<smalltempunit2>".$weather["wind_units"]."</smalltempunit2></div>";?> 
<?php echo "<div class='mindata'>".$weather["winddmaxtime"]."</div>";?>
<?php echo "<div class='hidata'>Max</div>";?> 
<?php echo "<div class='lodata'>Time</div>";?>
<?php //weather34 sez lets look nice 
//kmh
if( $weather["wind_gust_speed"]<=5 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=10 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=30 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=35 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=40 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=75 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=150 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
//mph
if( $weather["wind_gust_speed"]<=3.1 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<6.21 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=18.64 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=21.74 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=24.85 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=46.6 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=94 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}

//kts
if( $weather["wind_gust_speed"]<=3.1 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<6.21 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=18.64 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=21.74 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=24.85 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=46.6 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=94 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}

//ms
if( $weather["wind_gust_speed"]<=3.1 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<6.21 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=18.64 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=21.74 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=24.85 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=46.6 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_gust_speed"]<=94 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_gust_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
?>
</div></smalltempunit></div></div>

<div class="heatcircle" ><div class="heatcircle-content"><valuetextheading1><?php echo date('Y');?> Max <blue><?php echo $weather["windymaxtime"]?></blue></valuetextheading1>
<?php  //wind year max
//kmh
if ($weather['windymax']>=75 && $weather["wind_units"]=="km/h") {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=40 && $weather["wind_units"]=="km/h") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=30 && $weather["wind_units"]=="km/h") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windymax']>=10 && $weather["wind_units"]=="km/h") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=0 && $weather["wind_units"]=="km/h") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}

//mph
if ($weather['windymax']>=46 && $weather["wind_units"]=="mph") {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=24.8 && $weather["wind_units"]=="mph") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=18.6 && $weather["wind_units"]=="mph") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windymax']>=6.2 && $weather["wind_units"]=="mph") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=0 && $weather["wind_units"]=="mph") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}

//ms
if ($weather['windymax']>=20.8 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=11.1 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=8.3 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windymax']>=2.7 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=0 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//kts
if ($weather['windymax']>=40.4 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=21.5 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=16.1 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windymax']>=5.3 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windymax']>=0 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windymax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}


?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Month'];?> Max <blue><?php echo $weather["windmmaxtime"]?></blue></valuetextheading1>
<?php  //month wind max
if ($weather['windmmax']>=75 && $weather["wind_units"]=="km/h") {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=40 && $weather["wind_units"]=="km/h") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=30 && $weather["wind_units"]=="km/h") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=10 && $weather["wind_units"]=="km/h") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=0 && $weather["wind_units"]=="km/h") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//mph
if ($weather['windmmax']>=46 && $weather["wind_units"]=="mph") {
                echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=24.8 && $weather["wind_units"]=="mph") {
                    echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=18.6 && $weather["wind_units"]=="mph") {
                    echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=6.2 && $weather["wind_units"]=="mph") {
                        echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=0 && $weather["wind_units"]=="mph") {
                        echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}

//ms
if ($weather['windmmax']>=20.8 && $weather["wind_units"]=="m/s") {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=11.1 && $weather["wind_units"]=="m/s") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=8.3 && $weather["wind_units"]=="m/s") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=2.7 && $weather["wind_units"]=="m/s") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=0 && $weather["wind_units"]=="m/s") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//kts
if ($weather['windmmax']>=40.4 && $weather["wind_units"]=="kts") {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=21.5 && $weather["wind_units"]=="kts") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=16.6 && $weather["wind_units"]=="kts") {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windmmax']>=5.3 && $weather["wind_units"]=="kts") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windmmax']>=0 && $weather["wind_units"]=="kts") {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windmmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}


?>
</valuebeaufort></div></div>

<div class=thetrendgap>
<?php 
//windrun
echo '<div class=thetrendboxblue>'.$lang['Wind'].' Run';echo '&nbsp;<blue>'.number_format($weather["windrun34"],1).'</blue><smalltempunit2>&nbsp;';if ($weather["wind_units"]=='km/h'){echo 'km';}else echo 'mi';?>
</div></div></div></div>

<div class="maxwind">
<?php  //max last 10 mins
echo "10 Min Max ";
//kmh
if($weather["wind_speed_max"]>=50 && $weather["wind_units"]=="km/h"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_max"]>=30 && $weather["wind_units"]=="km/h"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=10 && $weather["wind_units"]=="km/h"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="km/h"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$windunit;}
//mph
if($weather["wind_speed_max"]>=31 && $weather["wind_units"]=="mph"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_max"]>=18.6 && $weather["wind_units"]=="mph"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=6.2 && $weather["wind_units"]=="mph"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="mph"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$windunit;}
//kts
if($weather["wind_speed_max"]>=26.9 && $weather["wind_units"]=="kts"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_max"]>=16.1 && $weather["wind_units"]=="kts"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=5.3 && $weather["wind_units"]=="kts"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="kts"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$windunit;}
//ms
if($weather["wind_speed_max"]>=13.8 && $weather["wind_units"]=="m/s"){echo "<red>" .number_format($weather["wind_speed_max"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_max"]>=8.3 && $weather["wind_units"]=="m/s"){echo "<orange>" .number_format($weather["wind_speed_max"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=2.7 && $weather["wind_units"]=="m/s"){echo "<yellow>" .number_format($weather["wind_speed_max"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_max"]>=0 && $weather["wind_units"]=="m/s"){echo "<green>" .number_format($weather["wind_speed_max"],1)."</green>&nbsp;<smalltempunit2>".$windunit;}
?>
</div>


<div class="heatcircle2" style="margin-top:80px"><div class="heatcircle-content"><valuetextheading2><?php echo $lang['Yesterday']?> Max </valuetextheading2>
<?php  //today wind max compared to yesterday max
if ($weather['windydmax']>=75 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=40 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=30 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}     
else if ($weather['windydmax']>=10 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=0 && $weather["wind_units"]=="km/h") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
//mph
if ($weather['windydmax']>=46 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=24.8 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=18.6 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windydmax']>=6.2 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=0 && $weather["wind_units"]=="mph") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}

//ms
if ($weather['windydmax']>=20.8 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=11.1 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=8.3 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windydmax']>=2.7 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=0 && $weather["wind_units"]=="m/s") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
  
//kts
if ($weather['windydmax']>=40.4 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=21.5 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=16.1 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}        
else if ($weather['windydmax']>=5.3 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome5-10c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if ($weather['windydmax']>=0 && $weather["wind_units"]=="kts") {
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['windydmax']. "&nbsp;<smalltempunit2>".$weather["wind_units"];}
    
//greater or less than today
if ($weather['windydmax'] < $weather["winddmax"]){echo " ".$fallingsymbolsmall;}
else if ($weather['windydmax'] > $weather["winddmax"]){echo " ".$risingsymbolsmall;}

?>
</div>
