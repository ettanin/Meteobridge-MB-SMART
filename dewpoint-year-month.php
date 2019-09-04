<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear">
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["dewymin"]>30){echo "<maxtempred>",$weather["dewymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymin"]>24){echo "<maxtemporange>",$weather["dewymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymin"]>20){echo "<maxtemporange>",$weather["dewymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymin"]>18){echo "<maxtempyellow>",$weather["dewymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymin"]>12){echo "<maxtempyellow>",$weather["dewymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymin"]>=10){ echo "<maxtempgreen>", $weather["dewymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymin"]>-50){ echo "<maxtempblue>", $weather["dewymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["dewymin"]>86){echo "<maxtempred>",$weather["dewymin"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymin"]>75.2){echo "<maxtemporange>",$weather["dewymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymin"]>68){echo "<maxtemporange>",$weather["dewymin"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymin"]>64.4){echo "<maxtempyellow>",$weather["dewymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymin"]>53.6){echo "<maxtempyellow>",$weather["dewymin"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymin"]>=42.8){ echo "<maxtempgreen>", $weather["dewymin"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymin"]>-50){ echo "<maxtempblue>", $weather["dewymin"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></div></tunit1>
<div class="tmonthmax" style="margin-left:0px;"><?php echo $weather["dewymintime2"]?></div>
<div class="tmonthconv"><?php echo $lang['Lowest']?></div>



<div class="tempavgthisyear" >

<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["dewmmax"]>30){echo "<maxtempred>",$weather["dewmmax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>24){echo "<maxtemporange>",$weather["dewmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>20){echo "<maxtemporange>",$weather["dewmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>18){echo "<maxtempyellow>",$weather["dewmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>12){echo "<maxtempyellow>",$weather["dewmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>=10){ echo "<maxtempgreen>", $weather["dewmmax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewmmax"]>-50){ echo "<maxtempblue>", $weather["dewmmax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["dewmmax"]>86){echo "<maxtempred>",$weather["dewmmax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>75.2){echo "<maxtemporange>",$weather["dewmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>68){echo "<maxtemporange>",$weather["dewmmax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>64.4){echo "<maxtempyellow>",$weather["dewmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>53.6){echo "<maxtempyellow>",$weather["dewmmax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>=42.8){ echo "<maxtempgreen>", $weather["dewmmax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewmmax"]>-50){ echo "<maxtempblue>", $weather["dewmmax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?></div></tunit>

<div class="tyearavg">&nbsp;<?php echo strftime('%B',time());?></div>
<div class="tavgconv" style="margin-left:-9px;"><?php echo $lang['Lowest']?>&nbsp; <?php echo "<maxtempblue>".$weather["dewmmin"];echo "</maxtempblue>";?>
</div>




<div class="yearwordtempbig">Dewpoint</div>
<div class="tempmaxthisyear">
<?php //temperture min year
 if ($weather["temp_units"]=='C' && $weather["dewymax"]>30){echo "<maxtempred>",$weather["dewymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymax"]>24){echo "<maxtemporange>",$weather["dewymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymax"]>20){echo "<maxtemporange>",$weather["dewymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymax"]>18){echo "<maxtempyellow>",$weather["dewymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymax"]>12){echo "<maxtempyellow>",$weather["dewymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymax"]>=10){ echo "<maxtempgreen>", $weather["dewymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='C' && $weather["dewymax"]>-50){ echo "<maxtempblue>", $weather["dewymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 //non metric
 if ($weather["temp_units"]=='F' && $weather["dewymax"]>86){echo "<maxtempred>",$weather["dewymax"]  ;echo "</maxtempred><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymax"]>75.2){echo "<maxtemporange>",$weather["dewymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymax"]>68){echo "<maxtemporange>",$weather["dewymax"]  ;echo "</maxtemporange><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymax"]>64.4){echo "<maxtempyellow>",$weather["dewymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymax"]>53.6){echo "<maxtempyellow>",$weather["dewymax"]  ;echo "</maxtempyellow><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymax"]>=42.8){ echo "<maxtempgreen>", $weather["dewymax"]  ;echo "</maxtempgreen><tunit1>&deg;".$weather["temp_units"] ; }
 else if ($weather["temp_units"]=='F' && $weather["dewymax"]>-50){ echo "<maxtempblue>", $weather["dewymax"]  ;echo "</maxtempblue><tunit1>&deg;".$weather["temp_units"] ; }
 ?>
</div></tunit1>
<div class="tyearmax" style="margin-left:0px;"><?php echo $weather["dewymaxtime2"]?></div>
<div class="tyearconv" style="margin-left:3px;"><?php echo $lang['Highest']?></div>
