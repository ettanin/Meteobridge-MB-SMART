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
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#01a4b4">
<meta name="apple-mobile-web-app-title" content="Weather34 Console">
<meta name="application-name" content="Weather34 Console">
<link rel="apple-touch-icon" sizes="57x57" href="appicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="appicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="appicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="appicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="appicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="appicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="appicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="appicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="appicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="appicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="appicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="appicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="appicons/favicon-16x16.png">
<link rel="manifest" href="site.webmanifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="appicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-TileColor" content="#f8f8f8">
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
  </ul>

 
    <div class="nav">
    <a href="console-setup.php" target="_blank" class="consolesetup" alt="Setup Screen" title="Setup Screen"> <?php echo $settingsicon ?></a>

    <a  class="consoleunits" href=<?php if($theme=='dark'){echo'?theme=light';}else{echo'?theme=dark';}?>>
    <?php if($theme=='dark'){echo '<iconcolor>'.$toggle.' </iconcolor><vspan2>Light</vspan2>';} else{echo '<iconcolor>'.$toggle.' </iconcolor><vspan2>Dark</vspan2>';}?> </a>

<?php
  if ($units!='us') {
      echo '<a  class="consoleunits" href="?units=us" alt="Imperial" title="Imperial"><iconcolor2>'.$toggle.' </iconcolor2><vspan2>&deg;F </vspan2></a>';
  }
  if ($units!='metric') {
    echo '<a  class="consoleunits" href="?units=metric" alt="Metric" title="Metric"><iconcolor2>'.$toggle.' </iconcolor2><vspan2>&deg;C</vspan2></a>';
  }
  if ($units!='uk') {
    echo '<a class="consoleunits"  href="?units=uk" alt="UK Units" title="UK Units"><iconcolor2>'.$toggle.' </iconcolor2><vspan2>UK</vspan2></a>';
  }
  else if ($units!='scandinavia') {
    echo '<a class="consoleunits"  href="?units=scandinavia" alt="m/s wind" title="m/s wind"><iconcolor2>'.$toggle.' </iconcolor2><vspan2>M/S</vspan2></a>';
  }  
?>

<a class="consoleunits" href="consolecharts.php" alt="Daily Charts" title="Daily Charts"><iconcolor><?php echo $tothecharts ?></iconcolor><vspan3>Charts</vspan3>  </a>
<a class="desktoplink" href="../index.php" alt="Desktop Version" title="Desktop Version"><iconcolor><?php echo $desktopicon ?></iconcolor><vspan3>Desktop</vspan3>  </a>
</div>
 </body></html>