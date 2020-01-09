<?php 
  ####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											                           #
	# https://weather34.com/homeweatherstation/index.html 											                       # 
	# 	                                                                                               #
	# 	Release: December 2019	            				  	                                               #
	# 	  Console Version                                                                              #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
include_once('livedata.php');include_once('updater2.php');
?>

<!DOCTYPE html><html><head>
<title><?php echo $stationName;?> </title>
<meta name="title" content="<?php echo $stationName;?>">
<meta name="description" content="Providing current weather conditions for <?php echo $stationName?>">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<meta name="apple-mobile-web-app-title" content="Weather34">
<meta name="application-name" content="Weather34">
<link href="console-<?php echo $theme?>.css?version=<?php echo filemtime('console-'.$theme.'.css')?>" rel="stylesheet prefetch">
<link rel="preload" href="fonts/clock3-webfont.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-medium.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/HelveticaNeue-Medium.woff" as="font" type="font/woff" crossorigin>
<script>function pageLoaded() {document.querySelector("body").style.opacity = 1;}window.onload = pageLoaded;</script>
</head>
<body>
<!-- weather34 NANOSD console flex layout -->
<div class="fade-in">
<div class="container">
  <ul class="grid-container">
    <li><div id=temperature></div></li>
    <li><div id=humidity></div></li>
    <li><div id=dewpoint></div></li>
    <li><div id=wind></div></li>
    <li><div id=direction></div></li>
    <li><div id=gust></div></li>
    <li><div id=rain></div></li>
    <li><div id=barometer></div></li>
    <li><div id=uvindex></div></li>
    <li2><div id=moon></div></li2> 
    <li2><div id=sun></div></li2> 
    <li2><div id=time-date></div></li2>  
    <li3><div id=clock-date></div></li3>
  </ul>

 
    <div class="nav">
    <a href="console-setup.php" target="_blank" class="consolesetup" alt="Setup Screen" title="Setup Screen"> <?php echo $settingsicon ?></a>

    <a class="consoleunits" href=<?php if ($theme == 'dark') { echo '?theme=light';} else {echo '?theme=dark';} ?>>
      <?php
        if ($theme == 'dark') {echo '<div class="weather34-toggle">
          <div class="circleblob"></div> 
        
         <div class="tog red">Light</div>
         </div>';} 
        else {echo '<div class="weather34-toggle">
          <div class="circleblob"></div> 
         <div class="tog red">Dark</div>
         </div>';}?></a>


<?php
  if ($units != 'us') {echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-togglegreen">
      <div class="circleblob"></div> 
     <div class="tog red">&deg;F</div>
     </div>
    
    </a> '; }
  if ($units != 'metric') {echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    <div class="weather34-toggleblue">
    <div class="circleblob"></div> 
   <div class="tog red">&deg;C</div>
   </div></a>';}
  if ($units!='uk') {
    echo '<a href="?units=uk" alt="UK Units" title="UK Units"> 
    <div class="weather34-toggleblue">
    <div class="circleblob"></div> 
   <div class="tog red">UK</div></div></a>';
  }
  else if ($units!='scandinavia') {
    echo '<a  href="?units=scandinavia" alt="m/s wind" title="m/s wind"> 
    <div class="weather34-toggleyellow">
    <div class="circleblob"></div> 
   <div class="tog red">M/S</div></div></a>';
  }  
?>

<a href="consolecharts.php" alt="Daily Charts" title="Daily Charts">
        <div class="weather34-toggleyellow">
        <div class="circleblob"></div> 
       <div class="tog red">Charts</div>
       </div></a>


      <a class="desktoplink" href="../index.php" alt="Desktop Version" title="Desktop Version">
      <div class="weather34-toggled">
        <div class="circleblob"></div> 
       <div class="tog red">Desktop</div></div>
       <div class="logofooter"><img src="Wxsoft34-appsmall.png" width="25px" alt="weather34 &copy;2015-<?php echo date('Y')?>" title="weather34 &copy;2015-<?php echo date('Y')?>"></div></div>
       </div> </a>
     
 </body></html>