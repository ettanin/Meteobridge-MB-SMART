<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear">
<a class="weather34tipdewm" data-weather34tipdewm=" Dewpoint Min  <?php echo $weather["dewymin"]."&deg;".$weather["temp_units"]?>  <?php echo $weather["dewymintime"]?>">
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["tempymin"]>30){echo "<maxtempred>",$weather["tempymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>24){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>20){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>18){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>12){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>=10){ echo "<maxtempgreen>", $weather["tempymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymin"]>-50){ echo "<maxtempblue>", $weather["tempymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempymin"]>86){echo "<maxtempred>",$weather["tempymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>75.2){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>68){echo "<maxtemporange>",$weather["tempymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>64.4){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>53.6){echo "<maxtempyellow>",$weather["tempymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>=42.8){ echo "<maxtempgreen>", $weather["tempymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymin"]>-50){ echo "<maxtempblue>", $weather["tempymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></div></tunit1></a>
<div class="tmonthmax"><?php echo $weather["tempymintime2"]?></div>
<div class="tmonthconv"><?php 
if ($weather["temp_units"]=='C'){ echo anyToF($weather["tempymin"])."&deg;F";}
else if ($weather["temp_units"]=='F'){echo anyToC($weather["tempymin"])."&deg;C";}
?></div>



<div class="tempavgthisyear">
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["tempyearavg"]>30){echo "<maxtempred>",$weather["tempyearavg"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempyearavg"]>24){echo "<maxtemporange>",$weather["tempyearavg"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempyearavg"]>20){echo "<maxtemporange>",$weather["tempyearavg"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempyearavg"]>18){echo "<maxtempyellow>",$weather["tempyearavg"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempyearavg"]>12){echo "<maxtempyellow>",$weather["tempyearavg"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempyearavg"]>=10){ echo "<maxtempgreen>", $weather["tempyearavg"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempyearavg"]>-50){ echo "<maxtempblue>", $weather["tempyearavg"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempyearavg"]>86){echo "<maxtempred>",$weather["tempyearavg"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempyearavg"]>75.2){echo "<maxtemporange>",$weather["tempyearavg"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempyearavg"]>68){echo "<maxtemporange>",$weather["tempyearavg"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempyearavg"]>64.4){echo "<maxtempyellow>",$weather["tempyearavg"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempyearavg"]>53.6){echo "<maxtempyellow>",$weather["tempyearavg"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempyearavg"]>=42.8){ echo "<maxtempgreen>", $weather["tempyearavg"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempyearavg"]>-50){ echo "<maxtempblue>", $weather["tempyearavg"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></div></tunit>

<div class="tyearavg" >Average</div>
<div class="tavgconv"><?php 
if ($weather["temp_units"]=='C'){ echo anyToF($weather["tempyearavg"])."&deg;F";}
else if ($weather["temp_units"]=='F'){echo anyToC($weather["tempyearavg"])."&deg;C";}
?></div>





<div class="yearwordtempbig">Temperature</div>
<div class="tempmaxthisyear">
<a class="weather34tipdewh" data-weather34tipdewh=" Dewpoint Max  <?php echo $weather["dewymax"]."&deg;".$weather["temp_units"]?>  <?php echo $weather["dewymaxtime"]?>">
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["tempymax"]>30){echo "<maxtempred>",$weather["tempymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>24){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>20){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>18){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>12){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>=10){ echo "<maxtempgreen>", $weather["tempymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["tempymax"]>-50){ echo "<maxtempblue>", $weather["tempymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["tempymax"]>86){echo "<maxtempred>",$weather["tempymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>75.2){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>68){echo "<maxtemporange>",$weather["tempymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>64.4){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>53.6){echo "<maxtempyellow>",$weather["tempymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>=42.8){ echo "<maxtempgreen>", $weather["tempymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["tempymax"]>-50){ echo "<maxtempblue>", $weather["tempymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?>
</div></tunit1></a>
<div class="tyearmax">&nbsp;<?php echo $weather["tempymaxtime2"]?></div>
<div class="tyearconv"><?php 
if ($weather["temp_units"]=='C'){ echo anyToF($weather["tempymax"])."&deg;F";}
else if ($weather["temp_units"]=='F'){echo anyToC($weather["tempymax"])."&deg;C";}
?></div>
