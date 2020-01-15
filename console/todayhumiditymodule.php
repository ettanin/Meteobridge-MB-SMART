<?php include('livedata.php');include('common.php');
 $file_live=file_get_contents("../mbridge/MBrealtimeupload.txt");
 $meteobridgeapi=explode(" ",$file_live);	
 $weather["humidity_max"]=number_format($meteobridgeapi[59],0);
 ?>  
 <div class="modulecaptionchart"><?php echo $lang['Humidity']?> &nbsp;<blue1>%</blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todayhumiditymodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 
 <div class="legenddewpoint" style="background:<?php 
 if ($weather["humidity_max"]<=100 ){echo '#4ba0ad';}
 else if ($weather["humidity_max"]<70 ){echo '#9bbc2f';}
 else if ($weather["humidity_max"]<60 ){echo'#e6a141';}
 else if ($weather["humidity_max"]<40 ){echo'#ec5732';}
 else if ($weather["humidity_max"]<35 ){echo'#d35f50';}?>
 " ><?php echo $lang['Humidity']?></div>