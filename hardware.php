<?php include_once('livedata.php');include('common.php');?>
<?php //meteobridge and station hardware 
$nanosduptime = $meteobridgeapi[81];function convert($nanosduptime){$weather34nanotimeago = "";$days1 = intval(intval($nanosduptime) / (3600*24));$hours1 = (intval($nanosduptime) / 3600) % 24;$minutes1 = (intval($nanosduptime) / 60) % 60;$seconds1 = (intval($nanosduptime)) % 60;if($days1> 1){$weather34nanotimeago .= "$days1 Days ";}else {if($days1>0){$weather34nanotimeago .= "$days1 Day ";}if($hours1 > 1){$weather34nanotimeago .= "$hours1 hrs ";}else if($hours1 >=0){$weather34nanotimeago .= "$hours1 hr ";}if($minutes1 > 1){$weather34nanotimeago .= "$minutes1 mins ";}else if($minutes1 >=0){$weather34nanotimeago .= "$minutes1 min ";}}return $weather34nanotimeago;}?>
  <div class="topframe">
  <div class="mbtype2"><weather34menumarkerblue></weather34menumarkerblue> <?php echo $lang['Installed']?>:<blue><?php echo $hardwareinstalled?></blue></div>
  <div class="nanouptime2"><weather34menumarkerblue></weather34menumarkerblue> <?php echo $lang['Station'] ?>:<blue><?php echo $weatherhardware?></blue></div>
  <div class="hardware2"><weather34menumarkerblue></weather34menumarkerblue> 	
  Interface: <blue><?php echo $mbplatform?> </blue> <?php echo $weather["swversion"]."-" .$weather["build"]?></div>
  <div class="hardware2" style="margin-top:37px"><weather34menumarkerblue></weather34menumarkerblue> 	
  Uptime: <blue><?php echo convert($nanosduptime)?></blue></div>   
  <div class="davisimg2">
  <?php  
  if ($weatherhardware=='Davis Vantage Pro2+'){echo ' 
  <img src=img/weather34-davis-vp2.svg width="80rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/>';}  
  else if ($weatherhardware=='Davis Vantage Pro2'){echo ' 
  <img src=img/weather34-davis-vp2.svg width="80rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/>';}  
  else if ($weatherhardware=='Davis Vantage Vue' ){echo ' 
  <img src=img/davisvue.svg width="80rem" alt="Davis Vantage Vue" title="Davis Vantage Vue" style="margin-top:5px;"/>';}  
  else if ($weatherhardware=='Davis Envoy8x' ){echo ' 
  <img src=img/designedfordavisenvoy8x.svg width="85rem" alt="Davis Envoy8x" title="Davis Envoy8x" style="margin-top:5px;"/>';}
  ?>
  
  
  </div>  
  </div>