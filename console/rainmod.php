<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class="modulecaption">
<?php echo $lang['Rainfall']?> <blue1><?php echo $weather["rain_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata' style='margin-left:10px'><blue>". $weather["rain_lasthour"]."</blue><smalltempunit4>&nbsp; ".$weather["rain_units"]."</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'><blue>".$weather["rain_rate"]."</blue><smalltempunit4>&nbsp;".$weather["rain_units"]."</smalltempunit4></div>";?>
<?php echo "<div class='hidata'>".$lang['Last Hour']."</div>";?> 
<?php echo "<div class='lodata'>Rate</div>";?>
<?php //weather34 sez lets make the temperature look nice 
if ($weather["rain_units"]=="mm"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],1).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
if ($weather["rain_units"]=="in"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],2).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
?>
</div></smalltempunit></span></div>
</div></div>



<div class="heatcircle"><div class="heatcircle-content">
<?php  //heat-index/real feel
echo "<valuetextheading1>".$lang['Last-Twenty-Four-Hour']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c ><blue>".$weather["rain_24hrs"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];

?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo date('Y');?> <?php echo $lang['Total']?></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c><blue>". $weather["rain_year"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
?>
</smalltempunit2></div></div></div>

<div class="heatcirclerainmonth"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Month'];?> <?php echo $lang['Total']?></valuetextheading1>
<?php //avg today
echo "<div class=tempconverter1><div class=tempmodulehome0-5c><blue>". $weather["rain_month"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
?>
</smalltempunit2></div></div>


<div class=theraingap>
<div class=thetrendboxblue>
<?php 
if($weather["rain_rate"]>20){echo '&nbsp;'.$lang['Heavy Rain-Metar'];echo $preciprain;}
else if($weather["rain_rate"]>10){echo '&nbsp;'.$lang['Moderate Rain-Metar'] ;echo $preciprain;}
else if($weather["rain_rate"]>=0.4){echo '&nbsp;'.$lang['Steady']." ".$lang['Rain'] ;echo $preciprain;}
else if($weather["rain_rate"]>0){echo '&nbsp;'.$lang['Light Rain-Metar'];echo $preciprain;}
//steady
else if($meteobridgeapi[124]>0){
    echo $lang['Rain'];
if ($seconds_ago >= 172800) {echo '&nbsp;<blue> '.intval($seconds_ago / 86400) . ' </blue>&nbsp;<tunit1> '.$lang['Days'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>&nbsp;".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago >= 86400) {echo '&nbsp;<blue> '.intval($seconds_ago / 86400) . ' </blue>&nbsp;<tunit1> '.$lang['Day'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>&nbsp;".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago >= 7200) {echo '&nbsp;<blue> '.intval($seconds_ago / 3600) . ' </blue>&nbsp;<tunit1> '.$lang['Hours'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>&nbsp;".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago >= 3600) {echo '&nbsp;<blue> '.intval($seconds_ago / 3600) . ' </blue>&nbsp;<tunit1> '.$lang['Hour'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>&nbsp;".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago > 60) {echo '&nbsp;<blue> '.intval($seconds_ago / 60) . ' </blue>&nbsp;<tunit1> '.$lang['Minutes'].'</tunit1></blue1></thevalue>
    ';echo "<maxlow>&nbsp;".$lang['Ago']."</maxlow></weather34top>";}
else if ($seconds_ago <= 60) {echo '&nbsp;<blue> '.intval($seconds_ago / 60) . ' </blue>&nbsp;<tunit1> '.$lang['Minute'].'</tunit1></blue1></thevalue>
    '; echo "<maxlow>&nbsp;".$lang['Ago']."</maxlow></weather34top>";}
else echo "";

}
?>
</div></div>

<?php //weather34 clean notifications 
//snowfall
if ($weather["temp_units"]=='C' &&  $weather["rain"]>0 && $weather["temp"]<2){echo '
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
    '.$snowalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Temperature</p>
    <valuealertcold>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
  </div>
</div>';}

//F
else if ($weather["temp_units"]=='F' && $weather["temp"]<35){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$snowalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Temperature</p>
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
      <p>Alert Dewpoint '.$heatindexalert8.'</p>
      <valuealertwarm>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
    </div>
  </div>';}

//low dewpoint
else if ($weather["temp_units"]=='C' && $weather["dewpoint"]<2 ){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Dewpoint '.$heatindexalert8.'</p>
        <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';}

  //F
else if ($weather["temp_units"]=='F' && $weather["dewpoint"]<35 ){echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Dewpoint '.$heatindexalert8.'</p>
      <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
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
        <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertwarm></alertunit>
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
      <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertwarm></alertunit>
    </div>
  </div>';} 

//Wind Speed above 50kmh or 31mph 
  else if ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed"]>50){echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Strong Winds</p>
        <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
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
          <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
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
            <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
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
              <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
            </div>
          </div>';}   

?>
<script> //fire the weather34 notification
function closeweather34alert(el) { el.addClass('is-hidden');}
$('.js-messageClose').on('click', function(e) { closeweather34alert($(this).closest('.weather34alert'));});
$(document).ready(function() {  setTimeout(function() { closeweather34alert($('#weather34message')); }, 10000);});
</script>