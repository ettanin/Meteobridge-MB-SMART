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
<div class="weather34topbarmail">
<div class="topbar34-circle1"><div class="topbar34-circle2"></div></div>
<a href="stationinfo.php" data-lity title="WEATHERSTATION Info"><topbarimperialf>&nbsp;Info&nbsp;</topbarimperialf></a>&nbsp;&nbsp;&nbsp;
<a href="bio.php" data-lity title="Contact WEATHERSTATION Info">
<svg version="1.1" id="email icon weather34" width="24" height="24" opacity="0.5" x="0px" y="0px" viewBox="0 0 419.284 419.284" stroke-width="1"><g>
<g><path fill="#aeb6bf" stroke="#aeb6bf" stroke-width="1" d="M363.284,126.616h-199.28c-6.352-45.063-48.032-76.444-93.095-70.092s-76.444,48.032-70.092,93.095
c4.303,30.527,25.287,56.099,54.387,66.278v91.68c0,27.04,14.72,56,56,56h252.08c27.04,0,56-14.72,56-56v-125.04 C419.204,141.256,390.324,126.616,363.284,126.616z M165.044,138.456h198.24c9.825-0.036,19.446,2.8,27.68,8.16l-153.76,99.6 l-36.4-24c-0.643-0.586-1.408-1.023-2.24-1.28l-50.64-32.8C158.931,173.906,164.947,156.447,165.044,138.456z M12.004,138.136 c0-38.881,31.519-70.4,70.4-70.4c38.881,0,70.4,31.519,70.4,70.4s-31.519,70.4-70.4,70.4 C43.541,208.492,12.048,176.999,12.004,138.136z M67.284,307.576h-0.08v-88.4c26.266,5.051,53.34-3.077,72.48-21.76l47.2,30.56 l-107.76,112C71.237,331.053,67.009,319.482,67.284,307.576z M362.564,351.736l-251.44-0.24c-7.604,0.192-15.152-1.34-22.08-4.48 l108.08-112l36.72,24h0.4c0.795,0.401,1.67,0.619,2.56,0.64c0.89-0.021,1.765-0.239,2.56-0.64h0.4l36.96-24l108,112 C377.759,350.153,370.203,351.763,362.564,351.736z M395.444,339.576l-107.76-112l112-72.56c5.268,8.093,7.869,17.633,7.44,27.28  v125.28C407.845,319.403,403.614,330.996,395.444,339.576z"/></g></g><g><g><path fill="#2f9dac" stroke="#aeb6bf" stroke-width="1" d="M132.241,108.322c-0.077-0.091-0.156-0.179-0.237-0.265c-2.205-2.474-5.997-2.692-8.471-0.488 c-0.003,0.003-0.006,0.005-0.009,0.008l-53.92,48l-27.28-38.64c-1.922-2.717-5.683-3.362-8.4-1.44 c-2.717,1.922-3.362,5.683-1.44,8.4l31.12,44.16c0.995,1.394,2.538,2.296,4.24,2.48h0.72c1.475,0.002,2.899-0.539,4-1.52 l58.96-52.24C134.057,114.64,134.378,110.854,132.241,108.322z"/></g></svg></a>
&nbsp;&nbsp;&nbsp;
<?php //metric/non-metric/uk
if($units!='us'){echo '<a  href="./?units=us"> <metricgrey>US</metricgrey> <topbarimperialf>&deg;F</topbarimperialf>&nbsp;&nbsp;</a> ';}
if($units!='metric'){echo '<a  href="./?units=metric"> <metricgrey>KM/H</metricgrey> <topbarmetricc>&deg;C</topbarmetricc>&nbsp;&nbsp;</a>';}
if($units!='uk'){echo '<a  href="./?units=uk">  <metricgrey>UK</metricgrey> <topbarmetricc>&deg;C</topbarmetricc>&nbsp;&nbsp;</a>';}
?>
</div>

<weather34toptitle><?php echo $stationName;?>&nbsp;Weather Station</weather34toptitle>
<div class="weather34toolbar">
<div class="weather34toolbar__right"><weather34thetime><?php echo $menuclocksvg;?>&nbsp; <div id="theTime"></weather34thetime></div></div>
 <div class="weather34-theme-switch-wrapper"><div class="weather34-theme-switch">
  <a class="weather34-slider round" href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>><?php if($theme=='dark'){echo 'Light';}else{echo ' &nbsp;Dark';}?> </a>
  </div></div></div></div></div>


 <input type="checkbox" class="openweather34sidebarMenu" id="openweather34sidebarMenu">
  <label for="openweather34sidebarMenu" class="weather34sidebarIconToggle">
    <div class="weather34spinner weather34cross part-1"></div>
    <div class="weather34spinner weather34horizontal"></div>
    <div class="weather34spinner weather34cross part-2"></div>    
  </label>
 <div id="weather34sidebarMenu">
<ul class="weather34sidebarMenuInner">
<br /><p>
<div class=weather34thinborder>--</div>
<li><a href="#"><weather34menumarkerlightb></weather34menumarkerlightb> TOOLS</a></li>
<li><a href="mb-smart-setup.php" target="_blank" title="Weather34 MB SMART Setup Screen"><?php echo " <weather34menumarkerbluegrey></weather34menumarkerbluegrey> ",$lang['Settings']; ?> 
<?php if ($password==""){echo ' <svg id="weather34 unlocked"  viewBox="0 0 32 32"  width="12" height="12" fill="none" stroke="#f16b4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 7 9 3 16 3 23 3 23 8 23 9 M16 20 L16 23" /><circle cx="16" cy="24" r="1" /></svg> <menuinfobox>Password Not Set</menuinfobox>';}
else echo ' <svg id="weather34 locked" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#06a2b1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 9 9 5 16 5 23 5 23 9 23 15 M16 20 L16 23" /><circle cx="16" cy="24" r="1" /></svg> <menuinfobox>Locked</menuinfobox>';
?> </a></li><p>
<div class=weather34thinborder>--</div>
<li><a href="#"><weather34menumarkerlightb></weather34menumarkerlightb> UI THEME</a></li>
<li><a href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>>
<?php if($theme=='dark'){echo' <weather34menumarkerlight></weather34menumarkerlight> Light <menuinfobox>Mode</menuinfobox>';}else{echo'<weather34menumarkerbluegrey></weather34menumarkerbluegrey> Dark <menuinfobox>Mode</menuinfobox>';}?></a></li>
<p><div class=weather34thinborder>--</div>
<li><a href="#"><weather34menumarkerlightb></weather34menumarkerlightb> UNITS</a></li>
<?php 
  if($units!='us'){echo '<li> <a  href="./?units=us"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey>  Imperial  <menuinfobox>MPH</menuinfobox> 
  <menuinfobox>&deg;F</menuinfobox> </a><br />  ';}
  if($units!='metric'){echo '<li> <a  href="./?units=metric"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> Metric <menuinfobox>KM/H</menuinfobox> <menuinfobox>&deg;C</menuinfobox></a><br />  ';}
  if($units!='uk'){echo '<li> <a  href="./?units=uk">  <weather34menumarkerbluegrey></weather34menumarkerbluegrey> UK <menuinfobox>MPH</menuinfobox>  
  <menuinfobox>&deg;C</menuinfobox></a><br /> ';}
  if($units!='scandinavia'){echo '<li> <a  href="./?units=scandinavia"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> Scandinavia <menuinfobox>M/S</menuinfobox> <menuinfobox>&deg;C</menuinfobox></a>';}
?></li></p>
<div class=weather34thinborder>--</div>

<li><a href="#"><weather34menumarkerlightb></weather34menumarkerlightb> EXTRAS</a></li>
<!--webcam--->
<?php if($webcamurl==''){;} 
else echo '<li> <a href="cam.php" data-lity title="WEATHERSTATION WEBCAM"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> Web Cam <menuinfobox>Stream</menuinfobox></a></li>';?>

<li><!--contact info---> <a href="bio.php" data-lity title="Weather Station Owner Contact Card Info"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> Contact <menuinfobox>Info</menuinfobox> </a></li> 
<li><!--hardware info---> <a href="stationinfo.php" data-lity title="Hardware Weather Station Hardware Info"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> Hardware <menuinfobox>Info</menuinfobox></a></li>  
<p>
<!---languages---> 
   <?php if($languages=="yes") echo '
   <div class=weather34thinborder>--</div>
   
   <li><a href="">
   
   <weather34menumarkerlightb></weather34menumarkerlightb>  '.$lang["language"], '</a></li>','
     <br>
  <div class="languages34">
  <a href="index.php?lang=en"><img src="img/flags/en.svg"  title="English" width="25px" height="25px"></a>&nbsp;
  <a href="index.php?lang=fr"><img src="img/flags/fr.svg"  title="French" width="25px" height="25px"></a>&nbsp; 
  <a href="index.php?lang=dl"><img src="img/flags/dl.svg"  title="German" width="25px" height="25px"></a>&nbsp; 
  <a href="index.php?lang=nl"><img src="img/flags/nl.svg"  title="Dutch" width="25px" height="25px"></a>&nbsp; <br> 
  <a href="index.php?lang=it"><img src="img/flags/it.svg"  title="Italian" width="25px" height="25px"></a>&nbsp;  
  <a href="index.php?lang=sp"><img src="img/flags/sp.svg"  title="Spanish" width="25px" height="25px"></a>&nbsp; 
  <a href="index.php?lang=sw"><img src="img/flags/sw.svg"  title="Swedish" width="25px" height="25px"></a>&nbsp;  
   '?>
   
 <div class=weather34thinborder>--</div>  
  <li><a href="#"><weather34menumarkerlightb></weather34menumarkerlightb> CREDITS & INFO</a></li> 
      <!---credits | download info please do not remove credits if so no support is given it is not much to ask---> 
<?php  //suppliers
if ($suppliers =='Weather Spares'){echo '<li><a href="https://weatherspares.co.uk" title="https://weatherspares.co.uk" target="_blank"><weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$suppliers.' <menuinfobox>UK</menuinfobox>';}
if ($suppliers =='Prodata Weather Systems'){echo '<li><a href="https://shop.weatherstations.co.uk" target="_blank"><weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$suppliers.' <menuinfobox>UK</menuinfobox>';}
if ($suppliers =='Weerspecialist'){echo '<li><a href="https://www.weerstationkopen.nl" title="https://www.weerstationkopen.nl" target="_blank"><weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$suppliers.' <menuinfobox>Netherlands</menuinfobox>';}
if ($suppliers =='Weerhuisje'){echo '<li><a href="https://weerhuisje.nl" title="https://weerhuisje.nl" target="_blank"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$suppliers.' <menuinfobox>Netherlands</menuinfobox>';}
if ($suppliers =='Soluzionimeteo'){echo '<li><a href="https://www.soluzionimeteo.it/content/category/1-home" title="https://www.soluzionimeteo.it/content/category/1-home" target="_blank"><weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$suppliers.' <menuinfobox>Italy</menuinfobox>';}
if ($suppliers =='Scaled Instruments'){echo '<li><a href="https://www.scaledinstruments.com" title="https://www.scaledinstruments.com" target="_blank"><weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$suppliers.' <menuinfobox>USA</menuinfobox>';}
if ($suppliers =='Ambient Weather'){echo '<li><a href="https://www.ambientweather.com" title="https://www.ambientweather.com" target="_blank"><weather34menumarkerbluegrey></weather34menumarkerbluegrey> '.$suppliers.' <menuinfobox>USA</menuinfobox>';}
if ($suppliers =='None'){echo '';}?></a></li> 

<li><!--hardware info---> <a href="licence.php" data-lity title="Weather34 MB-SMART Licence Info and Download"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> Download MB-SMART <menuinfobox><?php echo $mbsmartversion?></menuinfobox></a></li> 
<li><!--hardware info---> <a href="meteocloud.php" data-lity title="View the Meteocloud Network"> <weather34menumarkerbluegrey></weather34menumarkerbluegrey> Meteocloud <menuinfobox>Network</menuinfobox></a></li> 
<li><a href="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" data-title="Weather34 MB-Smart Version" target="_blank"><weather34menumarkerbluegrey></weather34menumarkerbluegrey> Weather34 Designed <menuinfobox>&copy;2015-<?php echo date('Y');?></menuinfobox></a></li>    
<p><div class=weather34thinborder>--</div>
</div></div></header>  