  
 <?php include_once('common.php');include('livedata.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Indoor']; ?> <blue1>&deg;<?php echo $weather["temp_units"]?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todayindoormodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendtemp"><?php echo $lang['Temperature']; ?></div>