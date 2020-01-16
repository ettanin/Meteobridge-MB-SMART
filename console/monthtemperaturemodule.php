  
 <?php include('livedata.php');include('common.php');
 $file_live=file_get_contents("../mbridge/MBrealtimeupload.txt");
 $meteobridgeapi=explode(" ",$file_live);	
 $weather["tempydmin"]=$meteobridgeapi[84];    
 $weather["tempmmax"]=$meteobridgeapi[86];    
 $weather["tempmmin"]=$meteobridgeapi[88];
 $weather["tempymax"]=$meteobridgeapi[90];
 ?>
 <div class="modulecaptionchart"><?php echo $lang['Temperature']?> &nbsp;<blue1>&deg;<?php echo $weather["temp_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/monthtemperaturemodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 

 <div class="legenddewpoint">Min</div><div class="legendwetbulb" style="background-color:<?php 
 if ($weather["tempmmax"]<=5 ){echo '#4ba0ad';}
 else if ($weather["tempmmax"]<10 ){echo '#9bbc2f';}
 else if ($weather["tempmmax"]<15 ){echo'#e6a141';}
 else if ($weather["tempmmax"]<25 ){echo'#ec5732';}
 else if ($weather["tempmmax"]<50 ){echo'#d35f50';}?>
 " >Max</div>