<?php include_once('livedata.php');include('common.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />

<style>
.weather34barometerarrowactual{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.6;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer"]*50.6;
}?>deg);z-index:99}
.weather34barometerarrowmin{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_min"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.6;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_min"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_min"]*50.6;
}?>deg);z-index:9}
.weather34barometerarrowmax{-webkit-transform:rotate(<?php
if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_max"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.6;
}?>deg);
transform:rotate(<?php if ($weather["barometer_units"]=='mb' or $weather["barometer_units"]=="hPa") {
    echo $weather["barometer_max"]*0.02953*50.6;
} elseif ($weather["barometer_units"]=='inHg') {
    echo $weather["barometer_max"]*50.6;
}?>deg);z-index:9}
valuetextba{font-size:1em}valuetextbc{font-size:1.1em}valuetexttr{font-size:8px}
</style>

<div class="modulecaptionpressure">
<?php echo $lang['Barometer']?> <blue1><?php echo $weather["barometer_units"]?></blue1></div>

<div class=barometerpos >
<div class="homeweathercompass2" >
<div class="homeweathercompass-line2">
<div class="weather34barometerarrowactual"></div>
<div class="weather34barometerarrowmin"></div>
<div class="weather34barometerarrowmax"></div>
</div>


<div class="text2">
<?php echo "<blue>".$weather["barometer"],"</blue><span>".$weather["barometer_units"]."</span>";?> 
</div>

<div class="heatcircle3">
<br><div class="consoleforecast">
<?php  //weather34 script Davis forecast outlook
$weather["vpforecasttext"]	=str_replace('within', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('ending', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('likely', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('with', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('possible', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and warmer.', '<oorange>Warmer </oorange>period expected .<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and cooler.', '<blue>Cooler </blue>period expected.<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and ending', 'for', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('to the', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('shift', 'becoming', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('wind shifting', 'shifting', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('wind becoming', 'becoming', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Windy', '<oorange>Windy</oorange>', $weather["vpforecasttext"]);
if (anyToC($weather["temp"])<-1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Risk of <blue>Snow</blue>.', $weather["vpforecasttext"]);}
else if (anyToC($weather["temp"])<1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue> & <blue>Sleet</blue>.', $weather["vpforecasttext"]);}
$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Increasing clouds', 'Periods of <blue>Scattered Clouds</blue><br> ', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and windy', '<oorange>Windy</oorange>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly clear', '<oorange>Mostly Clear </oorange> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Partly cloudy', '<blue>Partly Cloudy</blue> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly cloudy', '<blue>Mostly Cloudy </blue> Conditions<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('24 to 48 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('6 to 12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 to 24 hours', '', $weather["vpforecasttext"]);  
$weather["vpforecasttext"]	=str_replace('48 to 72 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('6 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South West', 'SW', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South East', 'SE', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('W, NW, or N', 'W,NW,to N', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('little temperature change.', 'No <oorange>Significant </oorange> change in temperature.<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace(', possibly heavy at times', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('becoming', '', $weather["vpforecasttext"]);echo $weather["vpforecasttext"]	; 

//weather34 console vue-vp2 Davis forecast icon
if (preg_match("/Snow/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<-1)  {echo '<img rel="prefetch" src="forecasticons/snow.svg" class="consoleicon"  alt="snow forecasted" title="snow forecasted">';} 
else if (preg_match("/Sleet/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<1)  {echo '<img rel="prefetch" src="forecasticons/sleet.svg" class="consoleicon" alt="sleet forecasted" title="sleet forecasted">';} 
else if (preg_match("/Rain/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Precipitation/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/rainvp.svg" class="consoleicon" alt="rain forecasted" title="rain forecasted">';} 
else if (preg_match("/Windy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/windy.svg" class="consoleicon" alt="windy forecasted" title="windy forecasted">';} 
else if (preg_match("/clear/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/clear.svg" class="consoleicon" alt="clear forecasted" title="clear forecasted">';}
else if (preg_match("/Partly/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/partly-cloudy-day.svg" class="consoleicon" alt="partly cloudy forecasted" title="partly cloudy forecasted">';} 
else if (preg_match("/Mostly cloudy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/mostlycloudy.svg" class="consoleicon" alt="mostly cloudy forecasted" title="mostly cloudy forecasted">';} 
else if (preg_match("/Scattered/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="forecasticons/scatteredclouds.svg" class="consoleicon" alt="scattered clouds forecasted" title="scattered clouds forecasted">';} 
?>
</div></div>

<smalltempunit2></div></div></div>

<div class="maxbox"><orange>Max &nbsp;</orange> <?php echo $weather["barometer_max"] ?> <?php echo $weather["barometer_units"]; ?> <blue>&nbsp;<?php echo $weather["thb0seapressmaxtime"]; ?></div></blue>
<div class="minbox"><blue>Min &nbsp; </blue> <?php echo $weather["barometer_min"] ?> <?php echo $weather["barometer_units"]; ?> <blue>&nbsp;<?php echo $weather["thb0seapressmintime"]; ?></blue></div>

<?php 
//falling
if($weather["barometer_trend"]<0){echo '<div class=thetrendboxbluebaro>'.$lang['Falling'];
echo '&nbsp;'.$fallingsymbolx.'&nbsp;<blue> '.number_format($weather["barometer_trend"],2).' </blue>&nbsp;<smalltempunit2> '.$weather["barometer_units"];}
//rising
else if($weather["barometer_trend"]>0){echo '<div class=thetrendboxorangebaro>&nbsp;'.$lang['Rising'];
echo '&nbsp;'.$risingsymbolx.'&nbsp;<orange> + '.number_format($weather["barometer_trend"],2).' </orange>&nbsp;<smalltempunit2> '.$weather["barometer_units"];}
//steady
else echo '<div class=thetrendboxbluebaro>'.$lang['Steady'].''.$steadysymbol.'';?>
</smalltempunit2></div></div></div></div>

<?php //weather34 clean notifications 

//offline if no data last 15 minutes
if(file_exists($livedata)&&time()- filemtime($livedata)>300){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Check Hardware '.$heatindexalert8.'</p>
      <valuealertwarm>Data Offline</valuealertwarm></alertunit>
    </div>
  </div>';}

//snowfall
else if ($weather["temp_units"]=='C' &&  $weather["rain"]>0 && $weather["temp"]<2){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$snowalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert</p>
        <valuealertcold>Snow/Sleet</valuealertwarm></alertunit>
      </div>
    </div>';}
//F
  else if ($weather["temp_units"]=='F' &&  $weather["rain"]>0 && $weather["temp"]<35){echo '
      <div class="weather34alert" id="weather34message">
        <div class="weather34alert-icon">
          '.$snowalert.'
        </div>
        <div class="weather34alert-body">
          <p>Alert</p>
          <valuealertcold>Snow/Sleet</valuealertwarm></alertunit>
        </div>
      </div>';}

 //fog
else if ($weather["temp_units"]=='C' && $weather["temp"]>12 && $weather["temp"]-$weather["dewpoint"]<1){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Fog Alert</p>
        <valuealertcold>Fog/Mist</valuealertwarm></alertunit>
      </div>
    </div>';}

//cold temp
else if ($weather["temp_units"]=='C' && $weather["temp"]<2){echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$coldalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Temperature '.$snowflakesvg.'</p>
    <valuealertcold>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
  </div>
</div>';}

//F
else if ($weather["temp_units"]=='F' && $weather["temp"]<35){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Temperature '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}

//high dewpoint
else if ($weather["temp_units"]=='C' && $weather["dewpoint"]>20 ){echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$warmalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Dewpoint '.$heatindexalert8.'</p>
    <valuealertwarm>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
  </div>
</div>';}

//F
else if ($weather["temp_units"]=='F' && $weather["dewpoint"]>68 ){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Dewpoint </p>
      <valuealertwarm>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
    </div>
  </div>';}

//low dewpoint
else if ($weather["temp_units"]=='C' && $weather["dewpoint"]<=1 ){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Dewpoint</p>
        <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';}

  //F
else if ($weather["temp_units"]=='F' && $weather["dewpoint"]<=33.8 ){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Dewpoint '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}

//windchill
else if ($weather["temp_units"]=='C' && $weather["windchill"]<0){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Windchill '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["windchill"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}

  else if ($weather["temp_units"]=='F' && $weather["windchill"]<32){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Windchill '.$snowflakesvg.'</p>
        <valuealertcold>'.$weather["windchill"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';}


  //feels like cold
else if ($weather["temp_units"]=='C' && $weather["realfeel"]<0){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Feels '.$snowflakesvg.'</p>
      <valuealertcold>'.$weather["realfeel"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';}

  else if ($weather["temp_units"]=='F' && $weather["realfeel"]<32){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Feels '.$snowflakesvg.'</p>
        <valuealertcold>'.$weather["realfeel"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';}  



//high temperature
else if ($weather["temp_units"]=='C' && $weather["temp"]>30){echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$warmalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Temperature '.$heatindexalert8.'</p>
    <valuealertwarm>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
  </div>
</div>';}

//F
else if ($weather["temp_units"]=='F' && $weather["temp"]>90){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Temperature '.$heatindexalert8.'</p>
      <valuealertwarm>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
    </div>
  </div>';}

//rainfall
else if ($weather["rain_units"]=='mm' && $weather["rain_rate"]>20){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Flooding Possible</p>
        <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertcold></alertunit>
      </div>
    </div>';}

  //inches
else if ($weather["rain_units"]=='in' && $weather["rain_rate"]>0.7){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Flooding Possible</p>
      <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertcold></alertunit>
    </div>
  </div>';} 

//Wind Gust Speed above 60kmh or 37mph 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>60){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gale Force</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';} 

//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>37){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gale Force</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';} 

 //kts
 else if ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>32){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gale Force</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';} 
  
  
  //ms
  else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>16.6){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gale Force</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';} 



 //Wind Gust Speed above 55kmh or 34mph 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>55){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';}  

//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>34){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Strong Winds</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';}  


 //kts
 else if ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>29.6){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';}    


  //ms
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>15.2){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';}  




//MAX 10 MIN Wind Gust Speed above 45kmh 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>45){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';} 


//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>27.9){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Winds</p>
        <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 


 //kts
 else if ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>24.2){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';}    


  //ms
 else if ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>12.5){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';}    




//Wind Gust Speed above 50kmh or 31mph 
  else if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed"]>50){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Strong Winds</p>
        <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

   //mph
    else if ($weather["wind_units"]=='mph' && $weather["wind_gust_speed"]>31){echo '
      <div class="weather34alert" id="weather34message">
        <div class="weather34alert-icon">
          '.$coldalert.'
        </div>
        <div class="weather34alert-body">
          <p>Strong Winds</p>
          <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
        </div>
      </div>';}  

    //ms
      else if ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed"]>13){echo '
        <div class="weather34alert" id="weather34message">
          <div class="weather34alert-icon">
            '.$coldalert.'
          </div>
          <div class="weather34alert-body">
            <p>Strong Winds</p>
            <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
          </div>
        </div>';}   

    //kts
        else if ($weather["wind_units"]=='kts' && $weather["wind_gust_speed"]>26){echo '
          <div class="weather34alert" id="weather34message">
            <div class="weather34alert-icon">
              '.$coldalert.'
            </div>
            <div class="weather34alert-body">
              <p>Strong Winds</p>
              <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
            </div>
          </div>';}   

//Wind Speed 10 min Average 25kmh or 15mph 
else if ($weather["wind_units"]=='km/h' && $weather["wind_speed"]>25){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Conditions</p>
      <valuealertcold>40-50+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';} 
//mph
  else if ($weather["wind_units"]=='mph' && $weather["wind_speed"]>15){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>30-40+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

    //kts
  else if ($weather["wind_units"]=='kts' && $weather["wind_speed"]>13){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>16-26+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

    //ms
  else if ($weather["wind_units"]=='m/s' && $weather["wind_speed"]>6.9){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>11-13+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';} 

?>
<script> //fire the weather34 notification
function closeweather34alert(el) { el.addClass('weather34alert-hide');}
$('.js-messageClose').on('click', function(e) { closeweather34alert($(this).closest('.weather34alert'));});
$(document).ready(function() {  setTimeout(function() { closeweather34alert($('#weather34message')); }, 10000);});
</script>

