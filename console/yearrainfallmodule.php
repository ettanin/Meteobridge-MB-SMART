  
 <?php include('livedata.php');include('common.php')?>
 <div class="modulecaptionchart"><?php echo $lang['Rainfall']?> <blue1><?php echo $weather["rain_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/yearrainfallmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint"><?php echo $lang['Day'] ." ". $lang['Total']?></div>