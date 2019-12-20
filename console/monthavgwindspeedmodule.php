  
 <?php include('livedata.php');include('common.php')?>
 <div class="modulecaptionchart"><?php echo $lang['Average'], " ", $lang['Windspeed']?>  <?php echo $weather["wind_units"]; ?></div> 
 <iframe  class="charttempmodule" src="../weather34charts/monthavgwindspeedmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint"><?php echo date('F')?></div>