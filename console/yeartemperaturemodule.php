  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Temperature <blue1>&deg;<?php echo $weather["temp_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="../weather34charts/yeartemperaturemodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendtemp"><?php echo date('Y')?></div>