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
</head>
<body>
<!-- weather34 NANOSD console flex layout -->
<div class="weather34-tablet">
<div class="container">
<div class="nav-top"> 
<div class="weather34-indoor">
<?php echo $timeicon?> <div id="weather34clock4"></div>
<div class="desktoplinkicon"><a href="../index.php" alt="desktop version" title="desktop version"><?php echo $desktop?></a>
</div></div>


<div class="desktoplink3"><?php echo $headerlocation?> <?php echo $stationName?></div>
<div class="online"><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>


</div>
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

 
  <div class="nav-bottom">
  <a href="console/console-setup.php" target="_blank" alt="Setup Screen" title="Setup Screen"> <?php echo $settingsicon ?></a>

<a href=<?php if ($theme == 'dark') { echo '?theme=light';} else {echo '?theme=dark';} ?>>
  <?php
    if ($theme == 'dark') {echo '<div class="weather34-sphere-dark"></div><bottom-bar-text>Light</bottom-bar-text>
     ';} 
    else {echo '<div class="weather34-sphere-dark"></div><bottom-bar-text>Dark</bottom-bar-text>
     ';}?></a>
     

<?php 
  if ($units=='us') {     
     echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
     <div class="weather34-sphere-orange"></div><bottom-bar-text>&deg;C km/h</bottom-bar-text></a>';  

    echo '<a href="?units=scandinavia" alt="MS Units" title="MS Units"> 
   <div class="weather34-sphere-blue"></div><bottom-bar-text>&deg;C ms</bottom-bar-text></a>';  
    
  }
  if ($units=='uk'){
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-sphere-orange"></div><bottom-bar-text>&deg;F mph</bottom-bar-text></a>';  

     echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
    <div class="weather34-sphere-blue"></div><bottom-bar-text>&deg;C km/h</bottom-bar-text></a>';  
   
  }  
  if ($units=='metric'){
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-sphere-orange"></div><bottom-bar-text>&deg;F mph</bottom-bar-text></a>';  

     echo '<a href="?units=uk" alt="UK Units" title="UK Units"> 
     <div class="weather34-sphere-blue"></div><bottom-bar-text>&deg;C mph</bottom-bar-text></a>';  
    
  }  

  if ($units=='scandinavia'){
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-sphere-orange"></div><bottom-bar-text>&deg;F mph</bottom-bar-text></a>';  

     echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
     <div class="weather34-sphere-blue"></div><bottom-bar-text>&deg;C km/h</bottom-bar-text></a>';     
      
  }  
  else if ($units==''){   
    echo '<a  href="?units=us" alt="Imperial Units" title="Imperial Units">
    <div class="weather34-sphere-orange"></div><bottom-bar-text>&deg;F mph</bottom-bar-text></a>';  
    
     echo '<a  href="?units=metric" alt="Metric Units" title="Metric Units">
     <div class="weather34-sphere-blue"></div><bottom-bar-text>&deg;C km/h</bottom-bar-text></a>';  
   
   }
?>

<a href="consolecharts.php" alt="Daily Charts" title="Daily Charts">
<div class="weather34-sphere-yellow"></div><bottom-bar-text>Charts</bottom-bar-text></a>


<a href="outlookwu.php" data-lity alt="5 day Forecast" title="5 day Forecast">
<div class="weather34-sphere-orangefore"></div>
  <bottom-bar-textfore>Forecast</bottom-bar-textfore></a>

  <a href="outlookwutext.php" data-lity alt="Summary Forecast" title="Summary Forecast">
  <div class="weather34-sphere-red"></div>
  <bottom-bar-textfore>Summary</bottom-bar-textfore></a>

  <div class="weather34-refreshicon">
<a href="consoledavis.php" alt="refresh this dashboard " title="weather34 refresh this dashboard ">
<?php echo $weather34refreshicon?></a></div>

  <a class="desktoplink" href="info.html" data-lity alt="weather34 info console " title="info console">      
       <div class="logofooter">
        <img src="Wxsoft34-appsmall.png" width="25px"height="25px" alt="weather34 &copy;2015-<?php echo date('Y')?>" title="weather34 &copy;2015-<?php echo date('Y')?>"></div></div>
       </a></div> 
 </body></html>