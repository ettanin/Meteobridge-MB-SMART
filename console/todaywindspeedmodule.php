  
 <?php include_once('common.php');include('livedata.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Wind']; ?> <?php echo $weather["wind_units"]; ?></div> 
 <iframe  class="charttempmodule" src="../weather34charts/todaywindspeedmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendtemp"><?php echo $lang['Windspeed']; ?></div>