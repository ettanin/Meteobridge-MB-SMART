
<?php include_once('livedata.php');?>
<div class="topframe">
<div class="weather34thetime-small">&nbsp; <div id="theTime"></div></div>
<?php //meteobridge uptime
$nanosduptime = $meteobridgeapi[81];function convert($nanosduptime){$weather34nanotimeago = "";
$days1 = intval(intval($nanosduptime) / (3600*24));
$hours1 = (intval($nanosduptime) / 3600) % 24;
$minutes1 = (intval($nanosduptime) / 60) % 60;$seconds1 = (intval($nanosduptime)) % 60;
if($days1> 1){$weather34nanotimeago .= "$days1 Days ";}
else {if($days1>0){$weather34nanotimeago .= "$days1 Day ";}
if($hours1 > 1){$weather34nanotimeago .= "$hours1 hrs ";}
else if($hours1 >=0){$weather34nanotimeago .= "$hours1 hr ";}
}

return $weather34nanotimeago;}?>
<div class="nanouptime3" > <?php if ($mbplatform=="Pro"){echo "Meteobridge-".$mbplatform;}else echo "MB-".$mbplatform;?> Uptime&nbsp;<oblue> <?php echo convert($nanosduptime)?></oblue></div></div></div>