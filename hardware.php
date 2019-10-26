<?php include_once('livedata.php');include('common.php');?>
  <div class="topframe">
  <div class="mbtype2"><weather34menumarkerblue></weather34menumarkerblue> <?php echo $lang['Installed']?>:<blue><?php echo $hardwareinstalled?></blue></div>
  <div class="nanouptime2"><weather34menumarkerblue></weather34menumarkerblue> <?php echo $lang['Station'] ?>:<blue><?php echo $weatherhardware?></blue></div>
  <div class="hardware2"><weather34menumarkerblue></weather34menumarkerblue> 	
  <?php echo $lang['Battery']?>:<blue>
  <?php  if ($weather['indoorbattery']<1){echo "OK";}else echo "<ored>Poor</ored>";?></blue> 
	ISS:<blue>
  <?php  if ($weather['outdoorbattery']<1){echo "OK";}else echo "<ored>Poor</ored>";?></blue></div>  
  <div class="davisimg2">
  <?php  
  if ($weatherhardware=='Davis Vantage Pro2+'){echo ' 
  <img src=img/weather34-davis-vp2.svg width="85rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/>';}  
  else if ($weatherhardware=='Davis Vantage Pro2'){echo ' 
  <img src=img/weather34-davis-vp2.svg width="85rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/>';}  
  else if ($weatherhardware=='Davis Vantage Vue' ){echo ' 
  <img src=img/davisvue.svg width="80rem" alt="Davis Vantage Vue" title="Davis Vantage Vue" style="margin-top:5px;"/>';}  
  else if ($weatherhardware=='Davis Envoy8x' ){echo ' 
  <img src=img/designedfordavisenvoy8x.svg width="90rem" alt="Davis Envoy8x" title="Davis Envoy8x" style="margin-top:5px;"/>';}
  ?>
  <?php //WEATHER34 pop up alert 
  if ($weather["mbplatform"]=="VOCORE2" || $weather["mbplatform"]=="CARAMBOLA2"){echo "";}
  else if ($weather["mbplatform"]="  "){?>  
<div style=";position:absolute;font-size:.3em;color:white;margin-left:-80px;z-index:9999999;text-align:left;width:180px;top:0px;background:#01a4b5;border-radius:3px;padding:5px;"> THE HARDWARE LOGGER DEVICE/SOFTWARE IS NOT COMPATIBLE WITH THIS TEMPLATE </div>
<?php ;}?>
  
  </div>  
  </div>