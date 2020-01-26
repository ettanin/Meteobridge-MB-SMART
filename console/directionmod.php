<?php require_once('livedata.php');require_once('common.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<head>
<style>
.thearrow2 {
        -webkit-transform: rotate(<?php echo $weather["wind_direction"]+45; ?>deg);
        -moz-transform: rotate(<?php echo $weather["wind_direction"]+45; ?>deg);
        -o-transform: rotate(<?php echo $weather["wind_direction"]+45; ?>deg);
        -ms-transform: rotate(<?php echo $weather["wind_direction"]+45; ?>deg);
        transform: rotate(<?php echo $weather["wind_direction"]+45; ?>deg);
        position: absolute;
        z-index: 200;
        top: 0;
        left: 50%;
        margin-left: -5px;
        width: 10px;
        height: 50%;
        -webkit-transform-origin: 50% 100%;
        -moz-transform-origin: 50% 100%;
        -o-transform-origin: 50% 100%;
        -ms-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        -webkit-transition-duration: 3s;
        -moz-transition-duration: 3s;
        -o-transition-duration: 3s;
        -ms-transition-duration: 3s;
        transition-duration: 3s
    }

    .thearrow2:after {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        background-color: NONE;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 14px 9px 0 9px;
        border-color: rgba(208, 95, 45, 1.000) transparent transparent transparent;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition-duration: 3s;
        -moz-transition-duration: 3s;
        -o-transition-duration: 3s;
        -ms-transition-duration: 3s;
        transition-duration: 3s
    }

    .thearrow2:before {
        content:'';
        color: rgba(208, 95, 45, 1.000);
        font-family: headingtext;
        font-size:0;
        width: .5em;
        height: .5em;
        position: absolute;
        z-index: 9;
        margin-left: -2px;
        top: -5px;
        border: 2px solid RGBA(255, 255, 255, .8);
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -o-border-radius: 100%;
        -ms-border-radius: 100%;
        border-radius: 100%
    }

    .thearrow1 {
        -webkit-transform: rotate(<?php echo $weather["wind_direction_avg"]+45; ?>deg);
        -moz-transform: rotate(<?php echo $weather["wind_direction_avg"]+45; ?>deg);
        -o-transform: rotate(<?php echo $weather["wind_direction_avg"]+45; ?>deg);
        -ms-transform: rotate(<?php echo $weather["wind_direction_avg"]+45; ?>deg);
        transform: rotate(<?php echo $weather["wind_direction_avg"]+45; ?>deg);
        position: absolute;
        z-index: 200;
        top: 0;
        left: 50%;
        margin-left: -5px;
        width: 10px;
        height: 50%;
        -webkit-transform-origin: 50% 100%;
        -moz-transform-origin: 50% 100%;
        -o-transform-origin: 50% 100%;
        -ms-transform-origin: 50% 100%;
        transform-origin: 50% 100%;
        -webkit-transition-duration: 3s;
        -moz-transition-duration: 3s;
        -o-transition-duration: 3s;
        -ms-transition-duration: 3s;
        transition-duration: 3s;
        z-index: 90;
        font-size: .6em;
        color: rgba(132, 151, 167, 1.000);
        font-family: headingtext;
    }

    .thearrow1:after {
        content: '';
        position: absolute;
        text-align: left;
        left: 50%;
        top: 0;
        width: 0;
        height: 0;
        -webkit-border-radius: 0;
        border-radius: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 12px solid #06a2b1;
        border-bottom: 0;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition-duration: 3s;
        -moz-transition-duration: 3s;
        -o-transition-duration: 3s;
        -ms-transition-duration: 3s;
        transition-duration: 3s;
        background: 0;
        z-index: 90;
    }

    .thearrow1:before {
        content: 'Avg';
        width: 5px;
        height: 5px;
        position: absolute;
        z-index: 90;
        left: -2px;
        top: -18px;
        border: 0;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -o-border-radius: 100%;
        -ms-border-radius: 100%;
        border-radius: 100%;        
    }

    spancalm {
        position: relative;
        font-family: headingtext;
        font-size: 26px;
    }</style>

</head>

<div class="homeweathercompass1">
<div class="homeweathercompass-line1"><div class="thearrow2"></div><div class="thearrow1"></div></div>
<div class="text1"><div class="windvalue1" id="windvalue"><?php echo $weather["wind_direction"],"&deg;";?></div></div>

<div class="windirectiontext1"> 
<?php  //weather34 wind direction value output
if ($weather["wind_direction"]<=11.25) {
    echo $lang['Northdir'] ;
} elseif ($weather["wind_direction"]<=33.75) {
    echo $lang['NNEdir'];
} elseif ($weather["wind_direction"]<=56.25) {
    echo $lang['NEdir'];
} elseif ($weather["wind_direction"]<=78.75) {
    echo $lang['ENEdir'];
} elseif ($weather["wind_direction"]<=101.25) {
    echo $lang['Eastdir'];
} elseif ($weather["wind_direction"]<=123.75) {
    echo $lang['ESEdir'];
} elseif ($weather["wind_direction"]<=146.25) {
    echo $lang['SEdir'];
} elseif ($weather["wind_direction"]<=168.75) {
    echo $lang['SSEdir'];
} elseif ($weather["wind_direction"]<=191.25) {
    echo $lang['Southdir'];
} elseif ($weather["wind_direction"]<=213.75) {
    echo $lang['SSWdir'];
} elseif ($weather["wind_direction"]<=236.25) {
    echo $lang['SWdir'];
} elseif ($weather["wind_direction"]<=258.75) {
    echo $lang['WSWdir'];
} elseif ($weather["wind_direction"]<=281.25) {
    echo $lang['Westdir'];
} elseif ($weather["wind_direction"]<=303.75) {
    echo $lang['WNWdir'];
} elseif ($weather["wind_direction"]<=326.25) {
    echo $lang['NWdir'];
} elseif ($weather["wind_direction"]<=348.75) {
    echo $lang['NNWdir'];
} else {
    echo $lang['Northdir'];
}?></div>


<averwordwindword><?php echo $lang['Avg-Dir']." "; if ($weather["wind_direction_avg"]<=11.25) {
    echo $lang['North'];
} elseif ($weather["wind_direction_avg"]<=33.75) {
    echo $lang['NNE'];
} elseif ($weather["wind_direction_avg"]<=56.25) {
    echo $lang['NE'];
} elseif ($weather["wind_direction_avg"]<=78.75) {
    echo $lang['ENE'];
} elseif ($weather["wind_direction_avg"]<=101.25) {
    echo $lang['East'];
} elseif ($weather["wind_direction_avg"]<=123.75) {
    echo $lang['ESE'];
} elseif ($weather["wind_direction_avg"]<=146.25) {
    echo $lang['SE'];
} elseif ($weather["wind_direction_avg"]<=168.75) {
    echo $lang['SSE'];
} elseif ($weather["wind_direction_avg"]<=191.25) {
    echo $lang['South'];
} elseif ($weather["wind_direction_avg"]<=213.75) {
    echo $lang['SSW'];
} elseif ($weather["wind_direction_avg"]<=236.25) {
    echo $lang['SW'];
} elseif ($weather["wind_direction_avg"]<=258.75) {
    echo $lang['WSW'];
} elseif ($weather["wind_direction_avg"]<=281.25) {
    echo $lang['West'];
} elseif ($weather["wind_direction_avg"]<=303.75) {
    echo $lang['WNW'];
} elseif ($weather["wind_direction_avg"]<=326.25) {
    echo $lang['NW'];
} elseif ($weather["wind_direction_avg"]<=348.75) {
    echo $lang['NNW'];
} elseif ($weather["wind_direction_avg"]<=360) {
    echo $lang['North'];
}"&deg;"?></averwordwindword>
</div></div></div></div></div></div></div>




<div class="heatcircle5" style="margin-left:55px;"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Avg']?> 10 Min</valuetextheading1>
<?php 
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>" .number_format($weather['wind_direction_avg'],0)."&deg; &nbsp;";
if( $weather['wind_direction_avg']<=11.25){echo $lang['North'];}
else if( $weather["wind_direction_avg"]<=33.75){echo $lang['NNE'];}
else if( $weather["wind_direction_avg"]<=56.25){echo $lang['NE'];}
else if( $weather["wind_direction_avg"]<=78.75){echo $lang['ENE'];}
else if( $weather["wind_direction_avg"]<=101.25){echo $lang['East'];}
else if( $weather["wind_direction_avg"]<=123.75){echo $lang['ESE'];}
else if( $weather["wind_direction_avg"]<=146.25){echo $lang['SE'];}
else if( $weather["wind_direction_avg"]<=168.75){echo $lang['SSE'];}
else if( $weather["wind_direction_avg"]<=191.25){echo $lang['South'];}
else if( $weather["wind_direction_avg"]<=213.75){echo $lang['SSW'];}
else if( $weather["wind_direction_avg"]<=236.25){echo $lang['SW'];}
else if( $weather["wind_direction_avg"]<=258.75){echo $lang['WSW'];}
else if( $weather["wind_direction_avg"]<=281.25){echo $lang['West'];}
else if( $weather["wind_direction_avg"]<=303.75){echo $lang['WNW'];}
else if( $weather["wind_direction_avg"]<=326.25){echo $lang['NW'];}
else if( $weather["wind_direction_avg"]<=348.75){echo $lang['NNW'];}
else if( $weather["wind_direction_avg"]<=360){echo $lang['North'];}
?><smalltempunit2></div></div></div>


<div class="heatcircle6"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Avg-Dir']?> <?php echo date('F')?></valuetextheading1>
<?php 
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>" .number_format($weather['wind_direction_avgmonth'],0)."&deg; &nbsp;";
if( $weather['wind_direction_avgmonth']<=11.25){echo $lang['North'];}
else if( $weather['wind_direction_avgmonth']<=33.75){echo $lang['NNE'];}
else if( $weather['wind_direction_avgmonth']<=56.25){echo $lang['NE'];}
else if( $weather['wind_direction_avgmonth']<=78.75){echo $lang['ENE'];}
else if( $weather['wind_direction_avgmonth']<=101.25){echo $lang['East'];}
else if( $weather['wind_direction_avgmonth']<=123.75){echo $lang['ESE'];}
else if( $weather['wind_direction_avgmonth']<=146.25){echo $lang['SE'];}
else if( $weather['wind_direction_avgmonth']<=168.75){echo $lang['SSE'];}
else if( $weather['wind_direction_avgmonth']<=191.25){echo $lang['South'];}
else if( $weather['wind_direction_avgmonth']<=213.75){echo $lang['SSW'];}
else if( $weather['wind_direction_avgmonth']<=236.25){echo $lang['SW'];}
else if( $weather['wind_direction_avgmonth']<=258.75){echo $lang['WSW'];}
else if( $weather['wind_direction_avgmonth']<=281.25){echo $lang['West'];}
else if( $weather['wind_direction_avgmonth']<=303.75){echo $lang['WNW'];}
else if( $weather['wind_direction_avgmonth']<=326.25){echo $lang['NW'];}
else if( $weather['wind_direction_avgmonth']<=348.75){echo $lang['NNW'];}
else if( $weather['wind_direction_avgmonth']<=360){echo $lang['North'];}
?>
</smalltempunit2></div></div></div></div></div>
<div class="modulecaptiondirection"><?php echo $lang['Wind']; echo " ".$lang['Direction'];?></div></div>