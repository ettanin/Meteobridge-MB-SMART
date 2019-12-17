<?php include('livedata.php');include('common.php');?>
<div class="modulecaption"><?php echo $lang['Windspeed'];?> <blue1><?php echo $weather["wind_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata' style='margin-left:10px'>". number_format($weather["winddmax"],1). "<smalltempunit>".$weather["wind_units"]."</smalltempunit></div>";?> 
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
?>
</div></smalltempunit></div></div>

<div class="heatcircle" ><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Month'];?> Max <blue><?php echo $weather["windymaxtime"]?></blue></valuetextheading1>
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

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo date('Y');?> Max <blue><?php echo $weather["windmmaxtime"]?></blue></valuetextheading1>
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
echo '<div class=thetrendboxblue>'.$lang['Wind'].' Run';echo '&nbsp;'.number_format($weather["windrun34"],1).'<smalltempunit2>&nbsp;';if ($weather["wind_units"]=='km/h'){echo 'km';}else echo 'mi';?>
</div></div></div></div>