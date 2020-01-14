  
 <?php include('livedata.php');include('common.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Temperature']?><blue1> &nbsp;&deg;<?php echo $weather["temp_units"]?></blue1></div>  
 <iframe  class="charttempmodule" src="../weather34charts/todaytempmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendtemp" style="background:<?php 
if($tempunit=='F'){
if ($weather['temp_today_high']<=41 ){echo '#4ba0ad';}
 else if ($weather['temp_today_high']<50 ){echo '#9bbc2f';}
 else if ($weather['temp_today_high']<59 ){echo'#e6a141';}
 else if ($weather['temp_today_high']<77 ){echo'#ec5732';}
 else if ($weather['temp_today_high']<150 ){echo'#d35f50';}}
if ($tempunit=='C') {
if ($weather['temp_today_high']<=5) {    echo '#4ba0ad';} 
 elseif ($weather['temp_today_high']<10) {echo '#9bbc2f';} 
 elseif ($weather['temp_today_high']<15) {echo'#e6a141';} 
 elseif ($weather['temp_today_high']<25) {echo'#ec5732';} 
 elseif ($weather['temp_today_high']<50) {echo'#d35f50';}
 }?>" ><?php echo $lang['Temperature']?></div>
 
  