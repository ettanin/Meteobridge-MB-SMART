  
 <?php include('livedata.php');include('common.php')?>
 <div class="modulecaptionchart"><?php echo $lang['Rainfall']?> <?php echo $weather["rain_units"]; ?></div> 
 <iframe  class="charttempmodule" src="../weather34charts/monthrainfallmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint"><?php echo $themonth?></div>