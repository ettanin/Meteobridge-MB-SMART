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
  <title>Weather34 Windspeed Charts</title>
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
  grid-template-columns: repeat(auto-fill, minmax(365px, 2fr));
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




.windcontainer1{left:5px;top:0}
.windtoday,.windtoday10,.windtoday30,.windtoday40,.windtoday60{font-family:weathertext2,Arial,Helvetica,system;width:6rem;height:2.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;}.windtoday,.windtoday10,.windtoday30,.windtoday40,.windtoday60{font-size:1.25rem;padding-top:15px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;text-align:center;border-radius:3px;}

.windcaution,.windtrend{position:absolute;font-size:1rem}
.windtoday{background:#9aba2f}
.windtoday10{background:rgba(230,161,65,1)}.windtoday30{background:rgba(255,124,57,.8)}.windtoday40{background:rgba(255, 124, 57, 0.8)}.windtoday60{background:rgba(211, 93, 78, 1.000)}
.windcaution{margin-left:120px;margin-top:112px;font-family:Arial,Helvetica,system}
.windtrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}
smalluvunit{font-size:.6rem;font-family:Arial,Helvetica,system;}
.almanac{font-size:1.25em;margin-top:30px;color:rgba(56, 56, 60, 1.000);width:12em}
metricsblue{color:#44a6b5;font-family:"weathertext2",Helvetica, Arial, sans-serif;background:rgba(86, 95, 103, 0.5);-webkit-border-radius:2px;border-radius:2px;align-items:center;justify-content:center;font-size:.9em;left:10px;padding:0 3px 0 3px;}
.w34convertrain{position:relative;font-size:.7em;top:13px;color:#c0c0c0;margin-left:5px}

.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:11px;width:70px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-34px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}

.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:200px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:180px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.svgimage{background:rgba(0, 155, 171, 1.000);-webit-border-radius:2px;border-radius:2px;}

</style>
<div class="weather34darkbrowser" url="Windspeed Charts"></div>
  
 <main class="grid1">
  <articlegraph> 
  <div class=actualt>Today <span style="color:#d35d4e">Wind Speed <?php echo "<smalluvunit>",$weather["wind_units"]?></smalluvunit></span> | <blue>Average <smalluvunit><?php echo "<smalluvunit>",$weather["wind_units"]?></smalluvunit></blue></div>  
  <iframe  src="weather34charts/todaywindspeedsmall.php" frameborder="0" scrolling="no" width="375px"></iframe>
   
  </articlegraph> 
  
  <articlegraph> 
  <div class=actualt>Today Wind Direction <blue><?php echo "<smalluvunit>Degrees";?></smalluvunit></span> </blue></div>  
  <iframe  src="weather34charts/todaywinddirectionsmall.php" frameborder="0" scrolling="no" width="375px"></iframe>
   
  </articlegraph> 
  <articlegraph> 
  <div class=actualt><?php echo date('M Y');?> <span style="color:#d35d4e"> Wind Speed <?php echo "<smalluvunit>",$weather["wind_units"]?></smalluvunit></span> | <blue>Average <smalluvunit><?php echo "<smalluvunit>",$weather["wind_units"]?></smalluvunit></blue></div>  
  <iframe  src="weather34charts/monthlywindspeedgustsmall.php" frameborder="0" scrolling="no" width="375px"></iframe>
   
  </articlegraph> 
  
  <articlegraph> 
  <div class=actualt><?php echo date('Y');?> <span style="color:#d35d4e"> Wind Speed <?php echo "<smalluvunit>",$weather["wind_units"]?></smalluvunit></span> | <blue>Average <smalluvunit><?php echo "<smalluvunit>",$weather["wind_units"]?></smalluvunit></blue></div>  
  <iframe  src="weather34charts/yearlywindspeedsmall.php" frameborder="0" scrolling="no" width="375px"></iframe>
   
  </articlegraph> 
  
   <articlegraph style="height:30px">  
  <div class="lotemp">
  <?php echo $info?> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank" style="font-size:9px;"> Charts rendered and compiled using <?php echo $creditschart ;?> </a></span>
  </div>
  </articlegraph> 
  <articlegraph style="height:30px">   
  <div class="lotemp">
  <?php echo $info?> <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;">CSS/SVG/PHP scripts were developed by weather34.com  for use in the weather34 template &copy; 2015-<?php echo date('Y');?>
  </a></div>
   
  </articlegraph> 
  
</main>