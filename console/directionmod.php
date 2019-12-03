<?php include_once('livedata.php');?>
<meta http-equiv="Content-Type: text/html; charset=UTF-8" />
<head>
<style>
.thearrow2 {
        -webkit-transform: rotate(<?php echo $weather["wind_direction"]; ?>deg);
        -moz-transform: rotate(<?php echo $weather["wind_direction"]; ?>deg);
        -o-transform: rotate(<?php echo $weather["wind_direction"]; ?>deg);
        -ms-transform: rotate(<?php echo $weather["wind_direction"]; ?>deg);
        transform: rotate(<?php echo $weather["wind_direction"]; ?>deg);
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
        content: '      ';
        color: rgba(208, 95, 45, 1.000);
        font-family: headingtext;
        font-size: .85em;
        width: 5px;
        height: 5px;
        position: absolute;
        z-index: 9;
        left: 2px;
        top: -5px;
        border: 1px solid RGBA(255, 255, 255, 1);
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -o-border-radius: 100%;
        -ms-border-radius: 100%;
        border-radius: 100%
    }

    .thearrow1 {
        -webkit-transform: rotate(<?php echo $weather["wind_direction_avg"]; ?>deg);
        -moz-transform: rotate(<?php echo $weather["wind_direction_avg"]; ?>deg);
        -o-transform: rotate(<?php echo $weather["wind_direction_avg"]; ?>deg);
        -ms-transform: rotate(<?php echo $weather["wind_direction_avg"]; ?>deg);
        transform: rotate(<?php echo $weather["wind_direction_avg"]; ?>deg);
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
<?php if($weather["wind_direction"]<=11.25){echo "Due <span>North<br></span>";}else if($weather["wind_direction"]<=33.75){echo "North North <br><span>East</span>";}else if($weather["wind_direction"]<=56.25){echo "North <span> East<br></span>";}else if($weather["wind_direction"]<=78.75){echo "East North<br><span>East</span>";}else if($weather["wind_direction"]<=101.25){echo "Due <span> East<br></span>";}
else if($weather["wind_direction"]<=123.75){echo "East South<br><span>East</span>";}else if($weather["wind_direction"]<=146.25){echo "South <span> East</span>";}else if($weather["wind_direction"]<=168.75){echo "South South<br><span>East</span>";}else if($weather["wind_direction"]<=191.25){echo "Due <span> South</span>";}else if($weather["wind_direction"]<=213.75){echo "South South<br><span>West</span>";}else if($weather["wind_direction"]<=236.25){echo "South <span> West</span>";}else if($weather["wind_direction"]<=258.75){echo "West South<br><span>West</span>";}else if($weather["wind_direction"]<=281.25){echo "Due <span> West</span>";}else if($weather["wind_direction"]<=303.75){echo "West North<br><span>West</span>";}else if($weather["wind_direction"]<=326.25){echo "North <span> West</span>";}else if($weather["wind_direction"]<=348.75){echo "North North<br><span>West</span>";}else{echo "Due <span> North</span>";}?></div>
<averwordwindword><?php echo "Avg ";if( $weather["wind_direction_avg"]<=11.25){echo "North";}else if( $weather["wind_direction_avg"]<=33.75){echo "NNE";}else if( $weather["wind_direction_avg"]<=56.25){echo "NE";}
else if( $weather["wind_direction_avg"]<=78.75){echo "ENE";}else if( $weather["wind_direction_avg"]<=101.25){echo "East";}else if( $weather["wind_direction_avg"]<=123.75){echo "ESE";}
else if( $weather["wind_direction_avg"]<=146.25){echo "SE";}else if( $weather["wind_direction_avg"]<=168.75){echo "SSE";}else if( $weather["wind_direction_avg"]<=191.25){echo "South";}
else if( $weather["wind_direction_avg"]<=213.75){echo "SSW";}else if( $weather["wind_direction_avg"]<=236.25){echo "SW";}else if( $weather["wind_direction_avg"]<=258.75){echo "WSW";}
else if( $weather["wind_direction_avg"]<=281.25){echo "West";}else if( $weather["wind_direction_avg"]<=303.75){echo "WNW";}else if( $weather["wind_direction_avg"]<=326.25){echo "NW";}
else if( $weather["wind_direction_avg"]<=348.75){echo "NNW";}else if( $weather["wind_direction_avg"]<=360){echo "North";}"&deg;"?></averwordwindword>
</div></div></div></div></div></div></div>




<div class="heatcircle5" ><div class="heatcircle-content"><valuetextheading1>&nbsp;&nbsp;&nbsp;Average Today</valuetextheading1>
<?php 
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>" .number_format($weather['wind_direction_avg'],0)."&deg; &nbsp;";
if( $weather["wind_direction_avg"]<=11.25){echo "North";}else if( $weather["wind_direction_avg"]<=33.75){echo "NNE";}else if( $weather["wind_direction_avg"]<=56.25){echo "NE";}
else if( $weather["wind_direction_avg"]<=78.75){echo "ENE";}else if( $weather["wind_direction_avg"]<=101.25){echo "East";}else if( $weather["wind_direction_avg"]<=123.75){echo "ESE";}
else if( $weather["wind_direction_avg"]<=146.25){echo "SE";}else if( $weather["wind_direction_avg"]<=168.75){echo "SSE";}else if( $weather["wind_direction_avg"]<=191.25){echo "South";}
else if( $weather["wind_direction_avg"]<=213.75){echo "SSW";}else if( $weather["wind_direction_avg"]<=236.25){echo "SW";}else if( $weather["wind_direction_avg"]<=258.75){echo "WSW";}
else if( $weather["wind_direction_avg"]<=281.25){echo "West";}else if( $weather["wind_direction_avg"]<=303.75){echo "WNW";}else if( $weather["wind_direction_avg"]<=326.25){echo "NW";}
else if( $weather["wind_direction_avg"]<=348.75){echo "NNW";}else if( $weather["wind_direction_avg"]<=360){echo "North";}
?><smalltempunit2></div></div></div>


<div class="heatcircle6"><div class="heatcircle-content"><valuetextheading1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Average <?php echo date('F')?></valuetextheading1>
<?php 
echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>" .number_format($weather['wind_direction_avgmonth'],0)."&deg; &nbsp;";
if( $weather['wind_direction_avgmonth']<=11.25){echo "North";}else if( $weather['wind_direction_avgmonth']<=33.75){echo "NNE";}else if( $weather['wind_direction_avgmonth']<=56.25){echo "NE";}
else if( $weather['wind_direction_avgmonth']<=78.75){echo "ENE";}else if( $weather['wind_direction_avgmonth']<=101.25){echo "East";}else if( $weather['wind_direction_avgmonth']<=123.75){echo "ESE";}
else if( $weather['wind_direction_avgmonth']<=146.25){echo "SE";}else if( $weather['wind_direction_avgmonth']<=168.75){echo "SSE";}else if( $weather['wind_direction_avgmonth']<=191.25){echo "South";}
else if( $weather['wind_direction_avgmonth']<=213.75){echo "SSW";}else if($weather['wind_direction_avgmonth']<=236.25){echo "SW";}else if( $weather['wind_direction_avgmonth']<=258.75){echo "WSW";}
else if( $weather['wind_direction_avgmonth']<=281.25){echo "West";}else if( $weather['wind_direction_avgmonth']<=303.75){echo "WNW";}else if( $weather['wind_direction_avgmonth']<=326.25){echo "NW";}
else if( $weather['wind_direction_avgmonth']<=348.75){echo "NNW";}else if( $weather['wind_direction_avgmonth']<=360){echo "North";}
?>
</smalltempunit2></div></div></div></div></div>


<div
style="position:relative;left:80px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;
font-family:Headingtext;width:100px;height:13px;font-size:13px;padding-top:2px;color:#aaa;
align-items:left;justify-content:left;margin-bottom:-5px;top:-85px;display:block">
Wind Direction</div></div>

