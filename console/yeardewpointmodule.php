  
 <?php include('livedata.php');include('common.php')?>
 <div class="modulecaptionchart"><?php echo $lang['Dewpoint']?> <blue1>&deg;<?php echo $weather["temp_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="../weather34charts/yeardewpointmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint">Min</div> 
 <div class="legendwetbulb" style="background:<?php 
 if ($weather["dewymax"]<=5 ){echo '#4ba0ad';}
 else if ($weather["dewymax"]<10 ){echo '#9bbc2f';}
 else if ($weather["dewymax"]<15 ){echo'#e6a141';}
 else if ($weather["dewymax"]<25 ){echo'#ec5732';}
 else if ($weather["dewymax"]<50 ){echo'#d35f50';}?>
 " >Max</div>