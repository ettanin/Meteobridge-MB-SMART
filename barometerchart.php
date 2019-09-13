<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Barometer Charts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 2fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  
  }
.grid > article {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
}

.grid1 { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(340px, 2fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  margin-top:5px
  
  }

.grid1 > articlegraph {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:160px  
}
  
 a{color:#aaa;text-decoration:none} 
.weather34darkbrowser{position:relative;background:0;width:96%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 
 
 
 
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.temperaturecontainer1{position:relative;left:10px;margin-top:0px}
.temperaturecontainer2{position:relative;left:10px;margin-top:0px}
smalluvunit{font-size:.6rem;font-family:Arial,Helvetica,system;}
.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
.lotemp{color:#aaa;font-size:0.65rem;}.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}
.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:300px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.actualt temp{background:rgba(208, 95, 45, 1.000);padding:2px;webkit-border-radius:3px;border-radius:3px;color:#fff;margin-right:5px}
.actualt feel{background:rgba(211, 93, 78, 1.000);padding:2px;webkit-border-radius:3px;border-radius:3px;color:#fff;margin-left:5px}
.actualt dewpoint{background:rgba(6, 162, 177, 1.000);padding:2px;webkit-border-radius:3px;border-radius:3px;color:#fff}
.actualt wetbulb{background:rgba(241, 107, 79, .8);padding:2px;webkit-border-radius:3px;border-radius:3px;color:#fff;margin-left:5px}
.actual{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;
padding:5px;font-family:Arial, Helvetica, sans-serif;width:95%;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.mbsmartlogo{position:relative;float:right;top:-5px;}
</style>
<div class="weather34darkbrowser" url="Barometer Charts <?php echo $pressureunit ;?>"></div>
<main class="grid1">
  <articlegraph> 
  <div class=actualt>Today <blue>Barometer</blue>
  
  <temp><?php echo "Max ",$weather["barometer_max"]." <smalluvunit>".$pressureunit?> </smalluvunit></temp> 
  <dewpoint><?php echo "Min ",$weather["barometer_min"]." <smalluvunit>".$pressureunit?> </smalluvunit></dewpoint>
  
  
  </div>  
  <iframe  src="weather34charts/todaybarometersmall.php" frameborder="0" scrolling="no" width="100%"></iframe>
   
  </articlegraph> 
  
  
  <articlegraph> 
  <div class=actualt><?php echo date('M Y');?> <blue>Barometer </blue>
  
  <temp><?php echo "Max ",$weather["thb0seapressmmax"]." <smalluvunit>".$pressureunit?></smalluvunit> </temp> 
  <dewpoint><?php echo "Min ",$weather["thb0seapressmmin"]." <smalluvunit>".$pressureunit?> </smalluvunit></dewpoint>
  
  
  </div>  
  <iframe  src="weather34charts/monthlybarometersmall.php" frameborder="0" scrolling="no" width="100%"></iframe>
   
  </articlegraph> 
  
  <articlegraph> 
  <div class=actualt><?php echo date('Y');?> <blue>Barometer </blue>
  <temp><?php echo "Max ",$weather["thb0seapressymax"]." <smalluvunit>".$pressureunit?> </smalluvunit></temp> 
  <dewpoint><?php echo "Min ",$weather["thb0seapressymin"]." <smalluvunit>".$pressureunit?> </smalluvunit></dewpoint>
  
  </div>  
  <iframe  src="weather34charts/yearlybarometersmall.php" frameborder="0" scrolling="no" width="100%"></iframe>
   
  </articlegraph> 
   <articlegraph> 
  <div class=actualt><?php echo date('Y', strtotime('last year'));?> <blue>Barometer <?php echo "<smalluvunit>",$pressureunit ;?></smalluvunit></blue></div>  
  <iframe  src="weather34charts/yearlybarometerprevious.php" frameborder="0" scrolling="no" width="100%"></iframe>
   
  </articlegraph> 
  
 
   <articlegraph style="height:15px;">  
  <div class="lotemp">
  <?php echo $info?> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank" style="font-size:7px;"> Charts <?php echo $creditschart ;?> </a></span>
  </div>
  </articlegraph> 
  <articlegraph style="height:15px;"   
  <div class="lotemp">
  <?php echo $info?> <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:7px;">CSS/SVG/PHP scripts developed by weather34.com &copy; 2015-<?php echo date('Y');?>
  </a>  </div>
   <div class="mbsmartlogo"><img src="img/weather34-mbsmart-logo.svg" alt="weather34 mb-smart" title="weather34 mb-smart" width="24px"></div>
  </articlegraph> 
  
  
</main>