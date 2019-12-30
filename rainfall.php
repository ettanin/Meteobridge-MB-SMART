<?php  //weather34 rain module 15th Feb 2019 //
include_once('livedata.php');include('common.php');?>
<div class="moduleupdatetime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<div class="weather34i-rairate-bar"><div id="raincontainer"><div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php if ($weather["rain_units"] =='mm' && $weather["rain_today"]){echo $weather["rain_today"]*2.5+1;}else if ($weather["rain_units"] =='in' && $weather["rain_today"]){echo $weather["rain_today"]*25.4*2.5;}?>px;">      
</div></div></div></div>  
<div class="raincontainer1">
<?php if ($weather["rain_units"] =='in'){	echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)."<sup><smallrainunita> ".$weather["rain_units"];}else if ($weather["rain_units"] =='mm' && $weather["rain_today"]<10){echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)."<sup><smallrainunita>".$weather["rain_units"];}else if ($weather["rain_units"] =='mm'){echo '<div class=raintoday1>'.number_format($weather["rain_today"],1)."<sup><smallrainunita>".$weather["rain_units"];}
?></sup></smallrainunita></div></div>
<div class="heatcircle"><div class="heatcircle-content">
<?php  //rain year
echo " &nbsp;<valuetextheading1>".date('Y')."</valuetextheading1> <br><div class=tempconverter1><div class=rainmodulehome><raiblue>";if($weather["rain_year"]>=1000){echo number_format($weather["rainymax"],1,'.','');}else if($weather["rain_year"]<1000){echo $weather["rain_year"];}echo "</raiblue><smallrainunit2>".$weather["rain_units"];?>
<smallrainunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content">
<?php  //rain month
echo " &nbsp;&nbsp;&nbsp;<valuetextheading1 style='text-transform:capitalize'>".strftime('%B',time())."</valuetextheading1> <br><div class=tempconverter1><div class=rainmodulehome><raiblue>".$weather["rain_month"]."</raiblue><smallrainunit2>".$weather["rain_units"];?>

</smallrainunit2></div></div></div></div>
<div class="heatcircle3"><div class="heatcircle-content">
<?php  //rain last hour
echo " &nbsp;&nbsp;<valuetextheading1>".$lang['Last Hour']."</valuetextheading1><br><div class=tempconverter1><div class=rainmodulehome><raiblue>".$weather["rain_lasthour"]."</raiblue><smallrainunit2>".$weather["rain_units"];?>
</smallrainunit2></div></div></div></div>
<div class="heatcircle4"><div class="heatcircle-content">
<?php  //rain last 24 hours
echo " &nbsp;&nbsp;<valuetextheading1>".$lang['Last-Twenty-Four-Hour']."</valuetextheading1><br><div class=tempconverter1><div class=rainmodulehome><raiblue>".$weather["rain_24hrs"]."</raiblue><smallrainunit2>".$weather["rain_units"];?>
</smallrainunit2></div></div></div></div></div>
<div class="rainconverter">
<?php if ($weather["rain_units"] =='in'){echo "<div class=rainconvertercircle>".number_format($weather["rain_today"]*25.400013716,1)."<smallrainunit>mm";}else if ($weather["rain_units"] =='mm'){echo "<div class=rainconvertercircle>".number_format($weather["rain_today"]*0.0393701,2)."<smallrainunit>in";}?></span>
</div></div></div></div>

<div class="rainrateextra">
<div class="rainratetextheading"><?php echo $lang['Rate']?> per/hr</div>
<div class=rainratebar>
<div class="weather34ratebar" style="width:
<?php //weather34 rain rate bar 
if ($weather["rain_rate"]>=0.96999 && $weather["rain_units"] =='in'){echo 'background: rgb(58,139,156);
background: linear-gradient(90deg, rgba(58,139,156,1) 0%, rgba(58,139,156,1) 57%, rgba(238,95,117,0.03632478632478631) 100%);';}
if ($weather["rain_rate"]>=25 && $weather["rain_units"] =='mm'){echo 'background: rgb(58,139,156);
background: linear-gradient(90deg, rgba(58,139,156,1) 0%, rgba(58,139,156,1) 57%, rgba(238,95,117,0.03632478632478631) 100%);';}  
else if ($weather["rain_units"] =='mm'){echo $weather["rain_rate"]*3.5;}
else if ($weather["rain_units"] =='in'){echo $weather["rain_rate"]*75;}?>px;">
<rainratevalue><blue>
<?php echo $weather["rain_rate"]."</blue><smallrainunit2>".$weather["rain_units"]."</smallrainunit2>";?></rainratevalue>
</div></div>

<?php //weather34 clean simple notifications 
date_default_timezone_set($TZ);
$json = file_get_contents('jsondata/eqnotification.txt'); 
$data = json_decode($json,true);
$magnitude = $data['features'][0]['properties']['mag'];
$eqtitle = $data['features'][0]['properties']['flynn_region'];
$depth = $data['features'][0]['properties']['depth'];
$time = $data['features'][0]['properties']['time'];
$lati = $data['features'][0]['properties']['lat'];
$longi = $data['features'][0]['properties']['lon'];
$eventime=date('jS M D H:i',strtotime($time) );
$eqdist= round(distance($lat, $lon, $lati, $longi)) ;
 if ($notifications=="yes") {
     //earthquake less than 150km in distance from weather station location
     if ($eqdist>0 && $eqdist<150 && $magnitude>5) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
      <p>Earthquake <orange>'.$eqdist.' </orange>km </p>
        <valuealertwarm>'.$magnitude.' <alertunit2>magnitude</alertunit2></valuealertwarm></alertunit>
      </div>
    </div>';
     } elseif ($eqdist>0 && $eqdist<150 && $magnitude>4) {
         echo '
        <div class="weather34alert" id="weather34message">
          <div class="weather34alert-icon">
            '.$warmalert.'
          </div>
          <div class="weather34alert-body">
            <p>Earthquake <orange>'.$eqdist.' </orange>km </p>
            <valuealertyellow>'.$magnitude.' <alertunit2>magnitude</alertunit2></valuealertyellow></alertunit>
          </div>
        </div>';
     } elseif ($eqdist>0 && $eqdist<150) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
      <p>Earthquake <orange>'.$eqdist.' </orange>km </p>
        <valuealertcold>'.$magnitude.' <alertunit2>magnitude</alertunit2></valuealertcold></alertunit>
      </div>
    </div>';
     }

     //snowfall
     elseif ($weather["temp_units"]=='C' &&  $weather["rain_rate"]>0 && $weather["temp"]<2) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$snowalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert</p>
        <valuealertcold>Snow/Sleet</valuealertwarm></alertunit>
      </div>
    </div>';
     }
     //F
     elseif ($weather["temp_units"]=='F' &&  $weather["rain_rate"]>0 && $weather["temp"]<35) {
         echo '
      <div class="weather34alert" id="weather34message">
        <div class="weather34alert-icon">
          '.$snowalert.'
        </div>
        <div class="weather34alert-body">
          <p>Alert</p>
          <valuealertcold>Snow/Sleet</valuealertwarm></alertunit>
        </div>
      </div>';
     }

     //fog
     elseif ($weather["temp_units"]=='C' && $weather["temp"]>12 && $weather["temp"]-$weather["dewpoint"]<1) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Fog Alert</p>
        <valuealertcold>Fog/Mist</valuealertwarm></alertunit>
      </div>
    </div>';
     }

     //wind chill
     elseif ($weather["temp_units"]=='C' && $weather["windchill"]<0) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$snowalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Windchill</p>
      <valuealertcold>'.$weather["windchill"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';
     }
  
     //F
     elseif ($weather["temp_units"]=='F' && $weather["windchill"]<32) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$snowalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Windchill</p>
        <valuealertcold>'.$weather["windchill"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';
     }


     //real feel
     elseif ($weather["temp_units"]=='C' && $weather['realfeel']<0) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$snowalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Feels</p>
      <valuealertcold>'.$weather['realfeel'].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';
     }
  
     //F
     elseif ($weather["temp_units"]=='F' && $weather['realfeel']<32) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$snowalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Feels</p>
        <valuealertcold>'.$weather['realfeel'].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';
     }
  


     //cold temp
     elseif ($weather["temp_units"]=='C' && $weather["temp"]<2) {
         echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$snowalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Temperature</p>
    <valuealertcold>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
  </div>
</div>';
     }

     //F
     elseif ($weather["temp_units"]=='F' && $weather["temp"]<35) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$snowalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Temperature</p>
      <valuealertcold>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';
     }

     

     //high dewpoint
     elseif ($weather["temp_units"]=='C' && $weather["dewpoint"]>20) {
         echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$warmalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Dewpoint '.$heatindexalert8.'</p>
    <valuealertwarm>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
  </div>
</div>';
     }

     //F
     elseif ($weather["temp_units"]=='F' && $weather["dewpoint"]>68) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Dewpoint '.$heatindexalert8.'</p>
      <valuealertwarm>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
    </div>
  </div>';
     }

     //low dewpoint
     elseif ($weather["temp_units"]=='C' && $weather["dewpoint"]<2) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Alert Dewpoint '.$heatindexalert8.'</p>
        <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
      </div>
    </div>';
     }

     //F
     elseif ($weather["temp_units"]=='F' && $weather["dewpoint"]<35) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Dewpoint '.$heatindexalert8.'</p>
      <valuealertcold>'.$weather["dewpoint"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertcold></alertunit>
    </div>
  </div>';
     }

     //high temperature
     elseif ($weather["temp_units"]=='C' && $weather["temp"]>30) {
         echo '
<div class="weather34alert" id="weather34message">
  <div class="weather34alert-icon">
    '.$warmalert.'
  </div>
  <div class="weather34alert-body">
    <p>Alert Temperature '.$heatindexalert8.'</p>
    <valuealertwarm>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
  </div>
</div>';
     }

     //F
     elseif ($weather["temp_units"]=='F' && $weather["temp"]>90) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Alert Temperature '.$heatindexalert8.'</p>
      <valuealertwarm>'.$weather["temp"].'&deg;<alertunit>'.$weather["temp_units"].'</valuealertwarm></alertunit>
    </div>
  </div>';
     }

     //rainfall
     elseif ($weather["rain_units"]=='mm' && $weather["rain_rate"]>20) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Flooding Possible</p>
        <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertwarm></alertunit>
      </div>
    </div>';
     }

     //inches
     elseif ($weather["rain_units"]=='in' && $weather["rain_rate"]>0.7) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Flooding Possible</p>
      <valuealertcold>'.$weather["rain_rate"].'<alertunit>'.$weather["rain_units"].' per/hr</valuealertwarm></alertunit>
    </div>
  </div>';
     }

    

     //Wind Gust Speed above 60kmh or 37mph
     elseif ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>60) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gale Force</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';
     }

     //mph
     elseif ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>37) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gale Force</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';
     }

     //kts
     elseif ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>32) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gale Force</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';
     }
  
  
     //ms
     elseif ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>16.6) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gale Force</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';
     }



     //Wind Gust Speed above 55kmh or 34mph
     elseif ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>55) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';
     }

     //mph
     elseif ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>34) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$warmalert.'
      </div>
      <div class="weather34alert-body">
        <p>Strong Winds</p>
        <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
      </div>
    </div>';
     }


     //kts
     elseif ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>29.6) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';
     }


     //ms
     elseif ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>15.2) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$warmalert.'
    </div>
    <div class="weather34alert-body">
      <p>Strong Winds</p>
      <valuealertwarm>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertwarm></alertunit>
    </div>
  </div>';
     }




     //MAX 10 MIN Wind Gust Speed above 45kmh
     elseif ($weather["wind_units"]=='km/h' && $weather["wind_speed_max"]>45) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';
     }


     //mph
     elseif ($weather["wind_units"]=='mph' && $weather["wind_speed_max"]>27.9) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Winds</p>
        <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';
     }


     //kts
     elseif ($weather["wind_units"]=='kts' && $weather["wind_speed_max"]>24.2) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';
     }


     //ms
     elseif ($weather["wind_units"]=='m/s' && $weather["wind_speed_max"]>12.5) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Winds</p>
      <valuealertcold>'.$weather["wind_speed_max"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';
     }




     //Wind Gust Speed above 50kmh or 31mph
     elseif ($weather["wind_units"]=='km/h' && $weather["wind_gust_speed"]>50) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Strong Winds</p>
        <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';
     }

     //mph
     elseif ($weather["wind_units"]=='mph' && $weather["wind_gust_speed"]>31) {
         echo '
      <div class="weather34alert" id="weather34message">
        <div class="weather34alert-icon">
          '.$coldalert.'
        </div>
        <div class="weather34alert-body">
          <p>Strong Winds</p>
          <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
        </div>
      </div>';
     }

     //ms
     elseif ($weather["wind_units"]=='m/s' && $weather["wind_gust_speed"]>13) {
         echo '
        <div class="weather34alert" id="weather34message">
          <div class="weather34alert-icon">
            '.$coldalert.'
          </div>
          <div class="weather34alert-body">
            <p>Strong Winds</p>
            <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
          </div>
        </div>';
     }

     //kts
     elseif ($weather["wind_units"]=='kts' && $weather["wind_gust_speed"]>26) {
         echo '
          <div class="weather34alert" id="weather34message">
            <div class="weather34alert-icon">
              '.$coldalert.'
            </div>
            <div class="weather34alert-body">
              <p>Strong Winds</p>
              <valuealertcold>'.$weather["wind_gust_speed"].'<alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
            </div>
          </div>';
     }

     //Wind Speed 10 min Average 25kmh or 15mph
     elseif ($weather["wind_units"]=='km/h' && $weather["wind_speed"]>25) {
         echo '
  <div class="weather34alert" id="weather34message">
    <div class="weather34alert-icon">
      '.$coldalert.'
    </div>
    <div class="weather34alert-body">
      <p>Gusty Conditions</p>
      <valuealertcold>40-50+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
    </div>
  </div>';
     }
     //mph
     elseif ($weather["wind_units"]=='mph' && $weather["wind_speed"]>15) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>30-40+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';
     }

     //kts
     elseif ($weather["wind_units"]=='kts' && $weather["wind_speed"]>13) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>16-26+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';
     }

     //ms
     elseif ($weather["wind_units"]=='m/s' && $weather["wind_speed"]>6.9) {
         echo '
    <div class="weather34alert" id="weather34message">
      <div class="weather34alert-icon">
        '.$coldalert.'
      </div>
      <div class="weather34alert-body">
        <p>Gusty Conditions</p>
        <valuealertcold>11-13+ <alertunit>'.$weather["wind_units"].' </valuealertcold></alertunit>
      </div>
    </div>';
     }
 }

?>
<script> //fire the weather34 notification
function closeweather34alert(el) { el.addClass('is-hidden');}
$('.js-messageClose').on('click', function(e) { closeweather34alert($(this).closest('.weather34alert'));});
$(document).ready(function() {  setTimeout(function() { closeweather34alert($('#weather34message')); }, 10000);});
</script>