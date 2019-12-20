  
 <?php include('livedata.php');include('common.php')?>
 <div class="modulecaptionchart"><?php echo $lang['Temperature']?> <?php echo $weather["temp_units"]; ?></div> 
 <iframe  class="charttempmodule" src="../weather34charts/monthtemperaturemodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendtemp"><?php echo date('F')?></div>