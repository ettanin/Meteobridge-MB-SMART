<?php  include('shared.php');include('common.php');
date_default_timezone_set($TZ);
    ####################################################################################################
    #	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
    # https://weather34.com/homeweatherstation/index.html 											   #
    # 	                                                                                               #
    # 	Release: February 2020					  	                                                   #
    # 	                                                                                               #
    #   https://www.weather34.com 	                                                                   #
    ####################################################################################################


// PURPLE AIR additional conversion script included by Andrew Billits 24 April 2018
function pm25_to_aqi($pm25)
{
    if ($pm25 > 500.5) {
        $aqi = 500;
    } elseif ($pm25 > 350.5 && $pm25 <= 500.5) {
        $aqi = map($pm25, 350.5, 500.5, 400, 500);
    } elseif ($pm25 > 250.5 && $pm25 <= 350.5) {
        $aqi = map($pm25, 250.5, 350.5, 300, 400);
    } elseif ($pm25 > 150.5 && $pm25 <= 250.5) {
        $aqi = map($pm25, 150.5, 250.5, 200, 300);
    } elseif ($pm25 > 55.5 && $pm25 <= 150.5) {
        $aqi = map($pm25, 55.5, 150.5, 150, 200);
    } elseif ($pm25 > 35.5 && $pm25 <= 55.5) {
        $aqi = map($pm25, 35.5, 55.5, 100, 150);
    } elseif ($pm25 > 12 && $pm25 <= 35.5) {
        $aqi = map($pm25, 12, 35.5, 50, 100);
    } elseif ($pm25 > 0 && $pm25 <= 12) {
        $aqi = map($pm25, 0, 12, 0, 50);
    }
    return $aqi;
}
function map($value, $fromLow, $fromHigh, $toLow, $toHigh)
{
    $fromRange = $fromHigh - $fromLow;
    $toRange = $toHigh - $toLow;
    $scaleFactor = $toRange / $fromRange;

    // Re-zero the value within the from range
    $tmpValue = $value - $fromLow;
    // Rescale the value to the to range
    $tmpValue *= $scaleFactor;
    // Re-zero back to the to range
    return $tmpValue + $toLow;
}
$json_string             = file_get_contents("../jsondata/purpleair.txt");
$parsed_json             = json_decode($json_string);
$aqiweather["aqi"]       = number_format(pm25_to_aqi(($parsed_json->{'results'}[0]->{'PM2_5Value'} + $parsed_json->{'results'}[1]->{'PM2_5Value'}) / 2), 1);
$aqiweather["aqiozone"]  = 'N/A';
$aqiweather["time2"]     = $parsed_json->{'results'}[0]->{'LastSeen'};
$aqiweather["time"]      = date($timeFormat, $aqiweather["time2"]);
$aqiweather["city"]      = $parsed_json->{'results'}[0]->{'ID'};
$aqiweather["label"]     = $parsed_json->{'results'}[0]->{'Label'};
$a=""; if ($aqiweather["aqi"]==$a) {
    $aqiweather["aqi"] = "0" ;
}
?>

<?php 
echo '<div class="sunblock">';
echo '<div class="wudesc">Purple Air Quality</div>

<div class="aqicon">';
//aq icon
if ($aqiweather["aqi"]>=300){echo "<purple><img src='aqi/hazair.svg?ver=1.4' width='110px' height='100px'>";}
else if ($aqiweather["aqi"]>=250){echo "<darkred><img src='aqi/vhair.svg?ver=1.4' width='110px' height='100px'>";}
else if ($aqiweather["aqi"]>=200){echo "<red><img src='aqi/vhair.svg?ver=1.4' width='110px' height='100px'>";}
else if ($aqiweather["aqi"]>=150){echo "<red><img src='aqi/uhair.svg?ver=1.4' width='110px' height='100px'>";}
else if ($aqiweather["aqi"]>=100){echo "<orange><img src='aqi/uhfsair.svg?ver=1.4' width='110px' height='100px'>";}
else if ($aqiweather["aqi"]>=50){echo "<yellow><img src='aqi/modair.svg?ver=1.4' width='110px' height='100px'>";}
else if ($aqiweather["aqi"]>=0){echo "<purple><img src='aqi/goodair.svg?ver=1.4' width='110px' height='100px'>";}
//aq icon

// icon description
echo '</div>
<div class="wuicondesc">';
//aq value
if ($aqiweather["aqi"]>=300){echo "Hazardous Conditions Caution".$aqalert;}
else if ($aqiweather["aqi"]>=250){echo "Very Unhealthy Conditions Caution".$aqalert;}
else if ($aqiweather["aqi"]>=200){echo "Very Unhealthy Conditions Caution".$aqalert;}
else if ($aqiweather["aqi"]>=150){echo "Unhealthy Conditions Caution".$aqalert;}
else if ($aqiweather["aqi"]>=100){echo "Unhealthy For Sensitive Groups";}
else if ($aqiweather["aqi"]>=50){echo "Moderate Conditions Caution";}
else if ($aqiweather["aqi"]>=0){echo "Good Conditions No Caution</green>";}
echo'</div><br>


<div class="wutemp">';
//aq value
if ($aqiweather["aqi"]>=300){echo "<purple>".$aqiweather["aqi"]."</purple>";}
else if ($aqiweather["aqi"]>=250){echo "<darkred>".$aqiweather["aqi"]."</darkred>";}
else if ($aqiweather["aqi"]>=200){echo "<red>".$aqiweather["aqi"]."</red>";}
else if ($aqiweather["aqi"]>=150){echo "<red>".$aqiweather["aqi"]."</red>";}
else if ($aqiweather["aqi"]>=100){echo "<orange>".$aqiweather["aqi"]."</orange";}
else if ($aqiweather["aqi"]>=50){echo "<yellow>".$aqiweather["aqi"]."</yellow>";}
else if ($aqiweather["aqi"]>=0){echo "<green>".$aqiweather["aqi"]."</green>";}
echo '<br>';



//aq description
echo '<div class=wuahead>PM 2.5';?></div></div></div></div>