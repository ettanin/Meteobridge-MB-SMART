  
 <?php include('livedata.php');include('common.php');
 $file_live=file_get_contents("../mbridge/MBrealtimeupload.txt");
 $meteobridgeapi=explode(" ",$file_live);	
 $weather["dewmmax"]=$meteobridgeapi[48];
 ?>
 <div class="modulecaptionchart"><?php echo $lang['Dewpoint']?> &nbsp;<blue1>&deg;<?php echo $weather["temp_units"]; ?></blue1></div> 
 <iframe  class="charttempmodule" src="../weather34charts/monthdewpointmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legenddewpoint">Min</div>

 <div class="legendwetbulb" style="background:<?php 
if($tempunit=='F'){
if ($weather['dewmmax']<=41 ){echo '#4ba0ad';}
 else if ($weather['dewmmax']<50 ){echo '#9bbc2f';}
 else if ($weather['dewmmax']<59 ){echo'#e6a141';}
 else if ($weather['dewmmax']<77 ){echo'#ec5732';}
 else if ($weather['dewmmax']<150 ){echo'#d35f50';}}
if ($tempunit=='C') {
if ($weather['dewmmax']<=5) {    echo '#4ba0ad';} 
 elseif ($weather['dewmmax']<10) {echo '#9bbc2f';} 
 elseif ($weather['dewmmax']<15) {echo'#e6a141';} 
 elseif ($weather['dewmmax']<25) {echo'#ec5732';} 
 elseif ($weather['dewmmax']<50) {echo'#d35f50';}
 }?>">Max</div>