  
 <?php include('livedata.php');include('common.php')?>
 <div class="modulecaptionchart"><?php echo $lang['Barometer']?> <?php echo $weather["barometer_units"]; ?></div> 
 <iframe  class="charttempmodule" src="../weather34charts/yearbarometermodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint"><?php echo date('Y')?></div>