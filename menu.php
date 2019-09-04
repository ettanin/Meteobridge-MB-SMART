<?php  

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

?>
<div class="weather34admin"><header class="weather34admin__header">
<weather34toptitle><?php echo $stationName;?>&nbsp;Weather Station</weather34toptitle>
<div class="weather34toolbar">
<div class="weather34toolbar__right"><weather34thetime> <div id="theTime"></div></div></weather34thetime>

<a href="#">
<?php if($units!='us'){echo' <a href="./?units=us" class="weather34tipfah"><topbarimperial>&deg;F</topbarimperial></a></div>';}
else if($units!='metric'){echo' <a  class="weather34tipcelsius"  href="./?units=metric"><topbarmetric>&deg;C</topbarmetric></a></div>';}
else echo' <div class="menucolor"><a href="./?units=metric">Units</a></div>';?>
</a></div></div>


 <input type="checkbox" class="openweather34sidebarMenu" id="openweather34sidebarMenu">
  <label for="openweather34sidebarMenu" class="weather34sidebarIconToggle">
    <div class="weather34spinner weather34cross part-1"></div>
    <div class="weather34spinner weather34horizontal"></div>
    <div class="weather34spinner weather34cross part-2"></div>    
  </label>
 <div id="weather34sidebarMenu">
<ul class="weather34sidebarMenuInner">
<br /><br /><p>
<li><a href="mb-smart-setup.php" target="_blank" title="Weather34 MB SMART Setup Screen"><?php echo " <weather34menumarkeryellow></weather34menumarkeryellow> ",$lang['Settings']; ?> 
<?php if ($password==""){echo '<svg id="weather34 unlocked"  viewBox="0 0 32 32"  width="12" height="12" fill="none" stroke="#f16b4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 7 9 3 16 3 23 3 23 8 23 9 M16 20 L16 23" /><circle cx="16" cy="24" r="1" /></svg>';}
else echo '<svg id="weather34 locked" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#06a2b1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 9 9 5 16 5 23 5 23 9 23 15 M16 20 L16 23" /><circle cx="16" cy="24" r="1" /></svg>';
?></a></li> <p>
<li><a href="index.php" title="WEATHERSTATION HOME PAGE"> <weather34menumarkergreen></weather34menumarkergreen> Home </a></li>  
<li><a href="#">UI THEME</a></li>
<li><a href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>>
<?php if($theme=='dark'){echo' <weather34menumarkerlight></weather34menumarkerlight> Light Mode';}else{echo'<weather34menumarkerbluegrey></weather34menumarkerbluegrey> Dark Mode';}?></a></li>
<p>
<li><a href="#">UNITS</a></li>
<?php 
  if($units!=Null && $units!='default'){echo '<li> <a  href="./?units=default"> <weather34menumarkerred></weather34menumarkerred> Default Units '.(($tempunit=='F')?'<topbarimperialf>&deg;F</topbarimperialf>':'<topbarmetricc>&deg;C</topbarmetricc>').'</a><br />';}
  if($units!='us'){echo '<li> <a  href="./?units=us"> <weather34menumarkerorange></weather34menumarkerorange>  Imperial  <topbarimperialf>&deg;F</topbarimperialf> </a><br />  ';}
  if($units!='metric'){echo '<li> <a  href="./?units=metric"> <weather34menumarkerblue></weather34menumarkerblue> Metric <topbarmetricc>&deg;C</topbarmetricc></a><br />  ';}
  if($units!='uk'){echo '<li> <a  href="./?units=uk">  <weather34menumarkeryellow></weather34menumarkeryellow> UK ( MPH)  <topbarmetricc>&deg;C</topbarmetricc></a><br /> ';}
  if($units!='scandinavia'){echo '<li> <a  href="./?units=scandinavia"> <weather34menumarkerred></weather34menumarkerred> M/S  <topbarmetricc>&deg;C</topbarmetricc></a>';}
?>

<li><a href="#">EXTRAS</a></li>
<!--webcam--->
<?php if($webcamurl==''){;} 
else echo '<li> <a href="cam.php" data-lity title="WEATHERSTATION WEBCAM"> <weather34menumarkeryellow></weather34menumarkeryellow> Web Cam </a></li>';?>

<li><!--contact info---> <a href="bio.php" data-lity title="Weather Station Owner Contact Card Info"> <weather34menumarkerorange></weather34menumarkerorange> Contact Card</a></li> 
<li><!--hardware info---> <a href="stationinfo.php" data-lity title="Hardware Weather Station Hardware Info"> <weather34menumarkerred></weather34menumarkerred> Hardware Info</a></li>  

<!---languages---> 
  <br>   <?php if($languages=="yes") echo '<li><a href="">
   
   <weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$lang["language"], '</a></li>','
     <br>
  <div class="languages34">
  <a href="index.php?lang=en"><img src="img/flags/en.svg"  title="English" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=fr"><img src="img/flags/fr.svg"  title="French" width="25px" height="25px"></a>&nbsp; 
  <a href="index.php?lang=dl"><img src="img/flags/dl.svg"  title="German" width="25px" height="25px"></a>&nbsp; 
  <a href="index.php?lang=nl"><img src="img/flags/nl.svg"  title="Dutch" width="25px" height="25px"></a>&nbsp;  
  <a href="index.php?lang=it"><img src="img/flags/it.svg"  title="Italian" width="25px" height="25px"></a>&nbsp;  
  <a href="index.php?lang=sp"><img src="img/flags/sp.svg"  title="Spanish" width="25px" height="25px"></a>&nbsp;  
   <br> '?>
      <!---credits | download info please do not remove credits if so no support is given it is not much to ask---> 
<?php  //suppliers
if ($suppliers =='Weather Spares UK'){echo '<li><a href="https://weatherspares.co.uk" title="https://weatherspares.co.uk" target="_blank"><weather34menumarkeryellow></weather34menumarkeryellow> '.$suppliers.'';}
if ($suppliers =='Prodata Weather Systems UK'){echo '<li><a href="https://shop.weatherstations.co.uk" target="_blank"><weather34menumarkeryellow></weather34menumarkeryellow> '.$suppliers.'';}
if ($suppliers =='Weerspecialist Netherlands'){echo '<li><a href="https://www.weerstationkopen.nl" title="https://www.weerstationkopen.nl" target="_blank"><weather34menumarkeryellow></weather34menumarkeryellow> '.$suppliers.'';}
if ($suppliers =='Weerhuisje Netherlands'){echo '<li><a href="https://weerhuisje.nl" title="https://weerhuisje.nl" target="_blank"><weather34menumarkeryellow></weather34menumarkeryellow> '.$suppliers.'';}
if ($suppliers =='Soluzionimeteo Italy'){echo '<li><a href="https://www.soluzionimeteo.it/content/category/1-home" title="https://www.soluzionimeteo.it/content/category/1-home" target="_blank"><weather34menumarkeryellow></weather34menumarkeryellow> '.$suppliers.'';}
if ($suppliers =='Scaled Instruments USA'){echo '<li><a href="https://www.scaledinstruments.com" title="https://www.scaledinstruments.com" target="_blank"><weather34menumarkeryellow></weather34menumarkeryellow> '.$suppliers.'';}
if ($suppliers =='Ambient Weather USA'){echo '<li><a href="https://www.ambientweather.com" title="https://www.ambientweather.com" target="_blank"><weather34menumarkeryellow></weather34menumarkeryellow> '.$suppliers.'';}
if ($suppliers =='None'){echo '';}?></a></li> 
<li><!--hardware info---> <a href="licence.php" data-lity title="Weather34 MB-SMART Licence Info and Download"> <weather34menumarkerred></weather34menumarkerred> Download MB-SMART(<?php echo $mbsmartversion?>)</a></li> 
<li><a href="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" data-title="Weather34 MB-Smart Version" target="_blank"><weather34menumarkerblue></weather34menumarkerblue> Designed by weather34.com</a></li>    
</div></div></header>  