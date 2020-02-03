<?php include_once('livedata.php');include_once('updater3.php');?>
<!DOCTYPE html><html><head>
<title> <?php echo $stationName;?> Console Charts</title>
<meta name="title" content="<?php echo $stationName;?> Console Charts">
<meta name="description" content="Charts for <?php echo $stationName;?>">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#01a4b4">
<meta name="apple-mobile-web-app-title" content="Weather34 Console Charts">
<meta name="application-name" content="Weather34 Console Charts">
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
<div class="nav-top">   
<div class="weather34-indoor"><?php echo $timeicon?> <div id="weather34clock4"></div></div>
<div class="desktoplink2"><a href="../index.php" alt="desktop version" title="desktop version"><?php echo $desktop?></a>
<div class="online"><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>
</div></div> 

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
    <li3><div id=
    <?php 
    if ($chartoption=='todayuvindexmodule.php'){echo "indoor";}
    else if ($chartoption=='todaysolarmodule.php'){echo "indoor";}
    else if ($chartoption=='todayindoormodule.php'){echo "";}
?> indoor></div></li3>
    

    <li2><div id=moon></div></li2> 
    <li2><div id=sun></div></li2> 
    <li2><div id=time-date></div></li2>  
  </ul>
    <div class="nav">
    <a href="consoledavis.php" alt="previous page" title="previous page"><?php echo $backhome?></a>
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

<a href="consolecharts-month.php" alt="<?php echo date('F');?> Charts" title="<?php echo date('F');?> Charts">
        <div class="weather34-togglechartdate">
        <div class="circleblob"></div> 
       <div class="tog red"><?php echo strftime("%B",time()); ?></div>
       </div></a>

       <a href="consolecharts-year.php" alt="<?php echo date('Y');?> Charts" title="<?php echo date('Y');?> Charts">
        <div class="weather34-toggleyellow">
        <div class="circleblob"></div> 
       <div class="tog red"><?php echo date('Y');?></div>
       </div></a>

       <?php if ($display2019=='yes'){echo '
        <a href="consolecharts-2019.php">
        <div class="weather34-toggleorange">
        <div class="circleblob"></div> 
       <div class="tog red">2019</div>
       </div></a>';}
       ?>
       
       <chartpage><?php echo $lang['Updated'] ?> <green><?php 
       $dayfile=date('Y')."/".date('jMY');$forecastime=filemtime('../weather34charts/'.$dayfile.'.csv');echo strftime("%A %d %B %Y %l:%M",$forecastime);?>     
      </green></chartpage>

      <a class="desktoplink" href="#" alt="weather34 designed" title="weather34 designed">
      <div class="weather34-toggled">
        <div class="circleblob"></div> 
       <div class="tog red">&copy;weather34</div></div>
       <div class="logofooter"><img src="Wxsoft34-appsmall.png" width="25px" alt="weather34 &copy;2015-<?php echo date('Y')?>" title="weather34 &copy;2015-<?php echo date('Y')?>"></div></div>
       </div> </a>
     
 </body></html>