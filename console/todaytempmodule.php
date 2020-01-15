  
 <?php include('livedata.php');include('common.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Temperature']?><blue1> &nbsp;&deg;<?php echo $weather["temp_units"]?></blue1></div>  
 <iframe  class="charttempmodule" src="weather34charts/todaytempmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendtemp" style="background:<?php 
 if ($weather["temp_avgtoday"]<=5 ){echo '#4ba0ad';}
 else if ($weather["temp_avgtoday"]<10 ){echo '#9bbc2f';}
 else if ($weather["temp_avgtoday"]<15 ){echo'#e6a141';}
 else if ($weather["temp_avgtoday"]<25 ){echo'#ec5732';}
 else if ($weather["temp_avgtoday"]<50 ){echo'#d35f50';}?>
 " ><?php echo $lang['Temperature']?></div>
 
  