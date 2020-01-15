<?php include('livedata.php');include('common.php');?>
 <div class="modulecaptionchart"><?php echo $lang['Dewpoint']?> <blue1> &nbsp;&deg;<?php echo $weather["temp_units"]?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/todaydewpointmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 <div class="legendtemp" style="background:<?php 
 if ($weather["dewmin"]<=5 ){echo '#4ba0ad';}
 else if ($weather["dewmin"]<10 ){echo '#9bbc2f';}
 else if ($weather["dewmin"]<15 ){echo'#e6a141';}
 else if ($weather["dewmin"]<25 ){echo'#ec5732';}
 else if ($weather["dewmin"]<50 ){echo'#d35f50';}?>
 " ><?php echo $lang['Dewpoint']?></div>