<?php 
include_once('livedata.php');
include_once('updater2.php');
include_once('common.php');
include_once('console-settings.php');
?>
<!DOCTYPE html><html><head>
<title><?php echo $stationName; ?></title>
<meta name="title" content="<?php echo $stationName; ?>">
<meta name="description" content="<?php echo $stationName; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#01a4b4">
<meta name="apple-mobile-web-app-title" content="Weather34 Console">
<meta name="application-name" content="Weather34 Console">
<meta name="msapplication-TileColor" content="#f8f8f8">
<meta name="theme-color" content="#ffffff">
<link href="console-style.min.css?version=<?php echo filemtime('console-style.min.css')?>" rel="stylesheet prefetch">
<link rel="preload" href="fonts/clock3-webfont.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-regular.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/verbatim-medium.woff" as="font" type="font/woff" crossorigin>
<link rel="preload" href="fonts/HelveticaNeue-Medium.woff" as="font" type="font/woff" crossorigin>
</head>
<body>
<!-- weather34 NANOSD console flex layout -->
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
  </ul>
  <a href="console-setup.php" target="_blank" class="consolesetup"> <?php echo $settingsicon?> Web App Setup</a>
  <a href="console-setup.php" target="_blank" class="designedby"> <?php echo $info?> Weather<blue>34</blue> Designed</a>
  <center style="font-size:0.65em">
  <img src='Wxsoft34-app.png' width='20px'> <?php echo "2015-"; ?><?php echo date('Y'); ?> &copy;
  WEATHER34 Davis Alternative Console</center>
</div>  
</body>
</html>