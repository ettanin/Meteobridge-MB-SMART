<?php include_once('livedata.php');include('common.php')?>
<div class="topframe">
  <div class="mbtype2" ><weather34menumarkerblue></weather34menumarkerblue> <?php echo $mbplatform?>:<blue><?php echo $weather["mbplatform"];?></blue></div>
  <?php //meteobridge and station hardware 
$nanosduptime = $meteobridgeapi[81];function convert($nanosduptime){$weather34nanotimeago = "";$days1 = intval(intval($nanosduptime) / (3600*24));$hours1 = (intval($nanosduptime) / 3600) % 24;$minutes1 = (intval($nanosduptime) / 60) % 60;$seconds1 = (intval($nanosduptime)) % 60;if($days1> 1){$weather34nanotimeago .= "$days1 Days ";}else {if($days1>0){$weather34nanotimeago .= "$days1 Day ";}if($hours1 > 1){$weather34nanotimeago .= "$hours1 hrs ";}else if($hours1 >=0){$weather34nanotimeago .= "$hours1 hr ";}if($minutes1 > 1){$weather34nanotimeago .= "$minutes1 mins ";}else if($minutes1 >=0){$weather34nanotimeago .= "$minutes1 min ";}}return $weather34nanotimeago;}?>
  <div class="nanouptime2" ><weather34menumarkerblue></weather34menumarkerblue> Uptime:<oblue> <?php echo convert($nanosduptime)?></oblue></div>  
  <div class="hardware2"><weather34menumarkerblue></weather34menumarkerblue> Firmware:<blue><?php echo $weather["swversion"]."-" .$weather["build"]?></blue></div>
  <?php 
  if ($mbplatform=='NanoSD' || $mbplatform=='Nano'){echo '<div class="nanoimg2"><img src=img/nano.svg width="30rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/></div>';}
  if ($mbplatform=='Pro' ){echo '<div class="proimg2"><img src=img/MeteobridgePRO.svg width="60rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/></div>';}
 
  ?>  
  <?php //WEATHER34 pop up alert 
  if ($weather["mbplatform"]=="VOCORE2" || $weather["mbplatform"]=="CARAMBOLA2"){echo "";}
  else if ($weather["mbplatform"]="  "){?>  
<div style=";position:absolute;font-size:.3em;color:white;margin-left:-80px;z-index:9999999;text-align:left;width:180px;top:0px;background:#01a4b5;border-radius:3px;padding:5px;"> THE HARDWARE LOGGER DEVICE/SOFTWARE IS NOT COMPATIBLE WITH THIS TEMPLATE </div>
<?php ;}?>
  </div>