<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear" style="margin-left:10px;">
<?php //humidity min year 
 if ($weather["humidity_ymin"]>70){echo "<maxtempblue>",$weather["humidity_ymin"]  ;echo "</maxtempred><tunit1>%"; }
 else if ($weather["humidity_ymin"]>60){echo "<maxtempyellow>",$weather["humidity_ymin"]  ;echo "</maxtemporange><tunit1>%"; }
 else if ($weather["humidity_ymin"]>40){echo "<maxtempgreen>",$weather["humidity_ymin"]  ;echo "</maxtempgreen><tunit1>%"; }
 else if ($weather["humidity_ymin"]>0){echo "<maxtempred>",$weather["humidity_ymin"]  ;echo "</maxtempred><tunit1>%"; } 
 ?></div></tunit1>
<div class="tmonthmax" style="margin-left:0px;"><?php echo $weather["humidity_ymintime2"]?></div>
<div class="tmonthconv"><?php echo $lang['Lowest']?></div>


<div class="tempavgthisyear" >
<?php //humidity max month
 if ($weather["humidity_mmax"]>70){echo "<maxtempblue>",$weather["humidity_mmax"]  ;echo "</maxtempblue><tunit1>%"; }
 else if ($weather["humidity_mmax"]>60){echo "<maxtempyellow>",$weather["humidity_mmax"]  ;echo "</maxtempyellow><tunit1>%"; }
 else if ($weather["humidity_mmax"]>40){echo "<maxtempgreen>",$weather["humidity_mmax"]  ;echo "</maxtempgreen><tunit1>%"; }
 else if ($weather["humidity_mmax"]>0){echo "<maxtempred>",$weather["humidity_mmax"]  ;echo "</maxtempred><tunit1>%"; }
 ?></div></tunit1>

<div class="tyearavg" style="margin-left:0;"><?php echo strftime('%B',time());?></div>
<div class="tavgconv" style="margin-left:-12px;"><?php echo $lang['Lowest']?>&nbsp; <?php 
 if ($weather["humidity_mmin"]>70){echo "<maxtempblue>",$weather["humidity_mmin"]  ;echo "</maxtempblue>%"; }
 else if ($weather["humidity_mmin"]>60){echo "<maxtempyellow>",$weather["humidity_mmin"]  ;echo "</maxtempyellow>%"; }
 else if ($weather["humidity_mmin"]>40){echo "<maxtempgreen>",$weather["humidity_mmin"]  ;echo "</maxtempgreen>%"; }
 else if ($weather["humidity_mmin"]>0){echo "<maxtempred>",$weather["humidity_mmin"]  ;echo "</maxtempred>%"; }?>
</div>

<div class="yearwordtempbig">Humidity</div>
<div class="tempmaxthisyear">
<?php //temperture min year
 if ($weather["humidity_ymax"]>70){echo "<maxtempblue>",$weather["humidity_ymax"]  ;echo "</maxtempblue><tunit1>%"; }
 else if ($weather["humidity_ymax"]>60){echo "<maxtempyellow>",$weather["humidity_ymax"]  ;echo "</maxtemporange><tunit1>%"; }
 else if ($weather["humidity_ymax"]>40){echo "<maxtempgreen>",$weather["humidity_ymax"]  ;echo "</maxtempgreen><tunit1>%"; }
 else if ($weather["humidity_ymax"]>0){echo "<maxtempred>",$weather["humidity_ymax"]  ;echo "</maxtempred><tunit1>%"; }
 ?>
</div></tunit1>
<div class="tyearmax" style="margin-left:-5px;"><?php echo $weather["humidity_ymaxtime2"]?></div>
<div class="tyearconv" style="margin-left:-5px;"><?php echo $lang['Highest']?></div>