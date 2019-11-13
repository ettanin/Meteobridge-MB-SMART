
<div class="weather34admin"><header class="weather34admin__header">
<div class="weather34topbarmail">
<div class="topbar34-circle1"><div class="topbar34-circle2"></div></div>
<a href="weather34stationhardware.php" data-lity title="WEATHERSTATION Info"><topbarinfo>&nbsp;Info&nbsp;</topbarinfo></a>&nbsp;&nbsp;&nbsp;
<a href="bio.php" data-lity title="Contact WEATHERSTATION Info"><svg version="1.1" id="email icon weather34" width="24" height="24"  x="0px" y="0px" viewBox="0 0 419.284 419.284" stroke-width="1"><g>
	<g><path fill="#aeb6bf" stroke="#aeb6bf" stroke-width="1" opacity="0.5" d="M363.284,126.616h-199.28c-6.352-45.063-48.032-76.444-93.095-70.092s-76.444,48.032-70.092,93.095
c4.303,30.527,25.287,56.099,54.387,66.278v91.68c0,27.04,14.72,56,56,56h252.08c27.04,0,56-14.72,56-56v-125.04 C419.204,141.256,390.324,126.616,363.284,126.616z M165.044,138.456h198.24c9.825-0.036,19.446,2.8,27.68,8.16l-153.76,99.6 l-36.4-24c-0.643-0.586-1.408-1.023-2.24-1.28l-50.64-32.8C158.931,173.906,164.947,156.447,165.044,138.456z M12.004,138.136
c0-38.881,31.519-70.4,70.4-70.4c38.881,0,70.4,31.519,70.4,70.4s-31.519,70.4-70.4,70.4 C43.541,208.492,12.048,176.999,12.004,138.136z M67.284,307.576h-0.08v-88.4c26.266,5.051,53.34-3.077,72.48-21.76l47.2,30.56 l-107.76,112C71.237,331.053,67.009,319.482,67.284,307.576z M362.564,351.736l-251.44-0.24c-7.604,0.192-15.152-1.34-22.08-4.48 l108.08-112l36.72,24h0.4c0.795,0.401,1.67,0.619,2.56,0.64c0.89-0.021,1.765-0.239,2.56-0.64h0.4l36.96-24l108,112 C377.759,350.153,370.203,351.763,362.564,351.736z M395.444,339.576l-107.76-112l112-72.56c5.268,8.093,7.869,17.633,7.44,27.28 v125.28C407.845,319.403,403.614,330.996,395.444,339.576z"/></g></g><g><g><path fill="#2f9dac" stroke="#aeb6bf" stroke-width="1" d="M132.241,108.322c-0.077-0.091-0.156-0.179-0.237-0.265c-2.205-2.474-5.997-2.692-8.471-0.488 c-0.003,0.003-0.006,0.005-0.009,0.008l-53.92,48l-27.28-38.64c-1.922-2.717-5.683-3.362-8.4-1.44 c-2.717,1.922-3.362,5.683-1.44,8.4l31.12,44.16c0.995,1.394,2.538,2.296,4.24,2.48h0.72c1.475,0.002,2.899-0.539,4-1.52 l58.96-52.24C134.057,114.64,134.378,110.854,132.241,108.322z"/></g></svg></a>
&nbsp;&nbsp;&nbsp;
<?php //metric/non-metric/uk
if($units!='us'){echo '<a  href="./?units=us"> <metricgrey>US</metricgrey> <topbarimperialf>&deg;F</topbarimperialf>&nbsp;&nbsp;</a> ';}
if($units!='metric'){echo '<a  href="./?units=metric"> <metricgrey>KM/H</metricgrey> <topbarmetricc>&deg;C</topbarmetricc>&nbsp;&nbsp;</a>';}
?>
</div>
<weather34toptitle>Weather34 Private Weather Station</weather34toptitle>
<div class="weather34toolbar">
<div class="weather34toolbar__right"><weather34thetime><?php echo $menuclocksvg;?>&nbsp; <div id="theTime"></weather34thetime></div></div>
<div class="weather34-theme-switch-wrapper"><div class="weather34-theme-switch">
<a class="weather34-slider round" href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>><?php if($theme=='dark'){echo ' Light Mode';}else{echo ' &nbsp;Dark Mode';}?> </a></div></div></div></div></div>
<!-- start the weather34 pure css menu-->
<nav>    
  <a href="#" class="iconcolor"><div style="margin-left:10px;"><svg id="weather34 dot menu icon" width="24" height="24" fill="currentcolor" x="0px" y="0px" viewBox="0 0 1000 1000" >
<g><path d="M123.1,386.9C60.6,386.9,10,437.5,10,500c0,62.5,50.6,113.1,113.1,113.1S236.2,562.5,236.2,500C236.2,437.5,185.5,386.9,123.1,386.9z M500,386.9c-62.5,0-113.1,50.6-113.1,113.1c0,62.5,50.6,113.1,113.1,113.1c62.5,0,113.1-50.6,113.1-113.1C613.1,437.5,562.5,386.9,500,386.9z M876.9,386.9c-62.5,0-113.1,50.6-113.1,113.1c0,62.5,50.6,113.1,113.1,113.1c62.5,0,113.1-50.6,113.1-113.1C990,437.5,939.4,386.9,876.9,386.9z"/><path d="M123.1,726.2C60.6,726.2,10,776.8,10,839.2c0,62.5,50.6,113.1,113.1,113.1s113.1-50.6,113.1-113.1C236.2,776.8,185.5,726.2,123.1,726.2z M500,726.2c-62.5,0-113.1,50.6-113.1,113.1c0,62.5,50.6,113.1,113.1,113.1c62.5,0,113.1-50.6,113.1-113.1C613.1,776.8,562.5,726.2,500,726.2z M876.9,726.2c-62.5,0-113.1,50.6-113.1,113.1c0,62.5,50.6,113.1,113.1,113.1c62.5,0,113.1-50.6,113.1-113.1C990,776.8,939.4,726.2,876.9,726.2z"/><path d="M123.1,47.7C60.6,47.7,10,98.3,10,160.8s50.6,113.1,113.1,113.1s113.1-50.6,113.1-113.1S185.5,47.7,123.1,47.7z M500,47.7c-62.5,0-113.1,50.6-113.1,113.1S437.5,273.8,500,273.8c62.5,0,113.1-50.6,113.1-113.1S562.5,47.7,500,47.7z M876.9,47.7c-62.5,0-113.1,50.6-113.1,113.1s50.6,113.1,113.1,113.1c62.5,0,113.1-50.6,113.1-113.1S939.4,47.7,876.9,47.7z"/></g>
</svg></div></a>
<ul><br>

<!-- menu options-->
<div class="weather34themenuicon2">
    <svg id="weather34 options icon" width="24" height="24" viewBox="0 0 24 24">
    <path fill="currentcolor" d="M4 11h5V5H4v6zm0 7h5v-6H4v6zm6 0h5v-6h-5v6zm6 0h5v-6h-5v6zm-6-7h5V5h-5v6zm6-6v6h5V5h-5z"/>
    <path d="M0 0h24v24H0z" fill="none"/></svg><weather34themenu><?php echo $lang['Menu Options'];?></weather34themenu></div>
<div class=weather34thinborder>--</div>

<!--tools-->
<li><a href="#"><weather34themenusection> TOOLS</weather34themenusection></a></li>
<li><a href="mb-smart-setup.php" target="_blank" title="Weather34 MB SMART Setup Screen"><?php echo " <weather34menumarkerdot></weather34menumarkerdot> ",$lang['Settings']; ?> 
<?php if ($password=="") {
    echo ' <svg id="weather34 unlocked"  viewBox="0 0 32 32"  width="12" height="12" fill="none" stroke="#f16b4f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 7 9 3 16 3 23 3 23 8 23 9 M16 20 L16 23" /><circle cx="16" cy="24" r="1" /></svg> <menuinfobox>Password Not Set</menuinfobox>';
} else {
    echo ' <svg id="weather34 locked" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="#06a2b1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5 15 L5 30 27 30 27 15 Z M9 15 C9 9 9 5 16 5 23 5 23 9 23 15 M16 20 L16 23" /><circle cx="16" cy="24" r="1" /></svg> <menuinfobox>Locked</menuinfobox>';
}?> </a></li>
<div class=weather34thinborder>--</div>

<!-- theme-->
<li><a href="#"><weather34themenusection> UI THEME</weather34themenusection></a></li>
<li><a href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>>
<?php //theme
if($theme=='dark'){echo' <weather34menumarkerdotmode></weather34menumarkerdotmode> Light <menuinfobox>Mode</menuinfobox>';}
else{echo'<weather34menumarkerdot></weather34menumarkerdot> Dark <menuinfobox>Mode</menuinfobox>';}?></a></li>
</a></li>
<div class=weather34thinborder>--</div>
<li><a href="#"><weather34themenusection> UNITS</weather34themenusection></a></li>

<!-- units -->
<?php //units
if($units!='us'){echo '<li> <a  href="./?units=us"> <weather34menumarkerdot></weather34menumarkerdot>  
Imperial <menuinfobox>MPH</menuinfobox> <menuinfobox>&deg;F</menuinfobox> </a>';}
if($units!='metric'){echo '<li> <a  href="./?units=metric"> <weather34menumarkerdot></weather34menumarkerdot> Metric <menuinfobox>KM/H</menuinfobox> 
<menuinfobox>&deg;C</menuinfobox></a> ';}
if($units!='uk'){echo '<li> <a  href="./?units=uk">  <weather34menumarkerdot></weather34menumarkerdot> UK <menuinfobox>MPH</menuinfobox> <menuinfobox>&deg;C</menuinfobox></a>';}?>
</li>
<div class=weather34thinborder>--</div>

<!-- info-->
<li><a href="#"><weather34themenusection> STATION INFO</weather34themenusection></a></li>
<li><!--contact info--> <a href="bio.php" data-lity title="Contact WEATHERSTATION Info">
<weather34menumarkerdot></weather34menumarkerdot> 
Contact <menuinfobox>Info</menuinfobox></a></li> 
<li><!--hardware info--> <a href="weather34stationhardware.php" data-lity title="Hardware WEATHERSTATION Info">
<weather34menumarkerdot></weather34menumarkerdot> 
Hardware <menuinfobox>Info</menuinfobox></a></li>
<div class=weather34thinborder>--</div>

<!---languages---> 
<?php if ($languages=="yes") {
    echo '   
   <li><a href="">   
   <weather34themenusection>'.$lang["language"], '</weather34themenusection>  </a></li>','    
  <center>
  <a href="index.php?lang=en"><img src="img/flags/en.svg"  title="English" width="20px" height="20px"></a>&nbsp;
  <a href="index.php?lang=fr"><img src="img/flags/fr.svg"  title="French" width="20px" height="20px"></a>&nbsp; 
  <a href="index.php?lang=dl"><img src="img/flags/dl.svg"  title="German" width="20px" height="20px"></a>&nbsp; 
  <a href="index.php?lang=nl"><img src="img/flags/nl.svg"  title="Dutch" width="20px" height="20px"></a>&nbsp; 
  <a href="index.php?lang=it"><img src="img/flags/it.svg"  title="Italian" width="20px" height="20px"></a>&nbsp;  
  <a href="index.php?lang=sp"><img src="img/flags/sp.svg"  title="Spanish" width="20px" height="20px"></a>&nbsp; 
  <a href="index.php?lang=sw"><img src="img/flags/sw.svg"  title="Swedish" width="20px" height="20px"></a>&nbsp;  
   ';
}?></center>      
 <div class=weather34thinborder>--</div> </div>

<!-- credits-->
<li><a href="#"><weather34themenusection> CREDITS & INFO</weather34themenusection></a></li>
<!---credits | download info--> 
<?php // please do not remove this and if so no support is given it is not much to ask //?>
<li><!--supplier info--> <a href="https://weatherspares.co.uk" title="Weatherspares UK" target="_blank"><weather34menumarkerdot></weather34menumarkerdot> Weatherspares <menuinfobox>UK</menuinfobox></a></li>
<li><!--Licence Info--> <a href="licence.php" data-lity title="Licence & Download Info"><weather34menumarkerdot></weather34menumarkerdot> Licence & Download <menuinfobox>Rev 1.05</menuinfobox></a></li> 
<li><!--copyright--> <a href="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" title="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" target="_blank"><weather34menumarkerdot></weather34menumarkerdot> Weather34 Designed <menuinfobox>&copy;2015-<?php echo date('Y');?></menuinfobox></a></li>
</ul></nav></header>