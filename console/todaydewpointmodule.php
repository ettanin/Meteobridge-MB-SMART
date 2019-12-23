  
 <?php include_once('common.php');include('livedata.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Dewpoint']; ?> <blue1>&deg;<?php echo $weather["temp_units"]?></blue1></div> 
 <iframe  class="charttempmodule" src="../weather34charts/todaydewpointmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint"><?php echo $lang['Dewpoint']; ?></div><div class="legendwetbulb"><?php echo $lang['Wetbulb']; ?></div>