<?php include_once('livedata.php');include('common.php');?>
  <div class="topframe">
  <div class="mbtype2"><weather34menumarkerblue></weather34menumarkerblue> <?php echo $lang['Installed']?>:<blue><?php echo $hardwareinstalled?></blue></div>
  <div class="nanouptime2"><weather34menumarkerblue></weather34menumarkerblue> <?php echo $lang['Station'] ?>:<blue><?php echo $weatherhardware?></blue></div>
  <div class="hardware2"><weather34menumarkerblue></weather34menumarkerblue> 	
  <?php echo $lang['Battery']?>:<blue>
  <?php  if ($weather['indoorbattery']<1){echo "OK";}else echo "<ored>Poor</ored>";?></blue> 
	ISS:<blue>
  <?php  if ($weather['outdoorbattery']<1){echo "OK";}else echo "<ored>Poor</ored>";?></blue></div>  
  <div class="davisimg2"><img src=img/weather34-davis-vp2.svg width="85rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/></div>  
  </div>