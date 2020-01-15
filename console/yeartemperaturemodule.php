  
 <?php include('livedata.php');include('common.php');
 $file_live=file_get_contents("../mbridge/MBrealtimeupload.txt");
 $meteobridgeapi=explode(" ",$file_live); 
 $weather["tempymax"]=$meteobridgeapi[90]; ?>
 <div class="modulecaptionchart"><?php echo $lang['Temperature']?> <blue1>&deg;<?php echo $weather["temp_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/yeartemperaturemodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 
 
 <div class="legenddewpoint">Min</div><div class="legendwetbulb" style="background-color:<?php 
 if ($weather["tempymax"]<=5 ){echo '#4ba0ad';}
 else if ($weather["tempymax"]<10 ){echo '#9bbc2f';}
 else if ($weather["tempymax"]<15 ){echo'#e6a141';}
 else if ($weather["tempymax"]<25 ){echo'#ec5732';}
 else if ($weather["tempymax"]<50 ){echo'#d35f50';}?>
 " >Max</div>
 
 