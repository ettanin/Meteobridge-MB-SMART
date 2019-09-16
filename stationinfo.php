<?php  

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################

include('settings.php');$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['SERVER_NAME'];?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Weather34 Weather Station Hardware Info card</title>  
 <style>
 @charset "UTF-8";/*!
 * Bio Card /Info page css for MB-SMART version July 2019*/
 @font-face{font-family:system;font-style:normal;src:local("Arial")} 
 @font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(css/fonts/verbatim-regular.woff2) format("woff2"),url(css/fonts/verbatim-regular.ttf) format("truetype")}
 *,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}
 body{font-family:Arial, Helvetica, sans-serif,system;margin:0}
 .container{display:flex;padding-left:1rem;padding-right:1rem;width:100%;margin:auto 0;justify-content:center;} 
 html{font-size:15px} 
 .card{display:flex;flex-direction:column;margin:1rem 0;background-color:#fff;}
 .card .card\:header{display:flex;width:450px;padding:1rem;background-color:rgba(86, 95, 103, 1.000);color:#eee}
 .card .card\:header .card\:info{height:60px;display:flex;flex-direction:column;justify-content:center}
 .card .card\:header .card\:info h3{margin:0 0 5px;font-weight:500;line-height:1}.card .card\:header .card\:info p{margin:0;font-weight:300;line-height:1}.card .card\:header .card\:image{display:flex;align-items:center;height:57px;margin-left:auto}.card .card\:header .card\:image img{width:auto;height:57px;border-radius:0;border:0}
 .card .card\:content ul{margin:0;padding:0;list-style:none}.card .card\:content ul li{height:80px;border-bottom:1px solid #eee;display:flex;padding:1rem 1.5rem;text-decoration:none;outline:0}.card .card\:content ul li,.card .card\:content ul li a:focus{background-color:rgba(45,56,68,.04)}.card .card\:content ul li .collection{display:flex;flex-direction:row}.card .card\:content ul li .collection .collection\:icon{display:flex;align-items:center;width:43px;height:47px}.card .card\:content ul li .collection .collection\:data{display:flex;flex-direction:column;justify-content:center;height:47px;margin-left:1.5rem}
 .card .card\:content ul li .collection .collection\:data h3{margin:0;font-size:1.1rem;color:rgba(86, 95, 103, 1.000)}
 .card .card\:content ul li .collection .collection\:data span{font-size:.875rem;font-weight:500;color:rgba(45,56,68,.75)}
 .card .card\:content ul li .collection svg{max-width:43px;height:calc(80px - 2rem)}
 .card .card\:content ul li .collection svg.ghost{height:calc(70px - 2rem)}
 .card .card\:content ul li:last-of-type{border-bottom:0;padding:calc(1rem + .5px) 1.5rem}
 a{text-decoration:none;color:rgba(61, 70, 77, 1.000);font-size:.75rem;font-weight:500;}a:hover{color:rgba(208, 95, 45, 1.000);}
 a{color:#aaa;text-decoration:none} 
.weather34darkbrowser{position:relative;background:0;width:94%;height:30px;margin:auto;margin-top:3px;margin-left:10px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}orange{color:#d35d4e}blue{color:#44a6b5}
.davishardwaresvg{position:absolute;margin-left:240px;}.nanohardwaresvg{position:absolute;margin-left:270px;}body{text-shadow:1px 1px 3px rgba(61,70,77,.2)}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo $stationlocation ?> Weather Station Information"></div>
 
  <div class="container">
            <div class="card" style="margin-top:50px;overflow:hidden;max-height:370px;">
                <div class="card:header">                   
                    <div class="card:info">
                        <h3><?php echo $stationName;?></h3>
                        <p>Weather Station Hardware</p>
                    </div>
                    <div class="card:image">
                        <img src="img/weather34-mbsmart-logo.svg" alt="weather34 logo" title="weather34 logo">
                    </div>                    
                </div>
                <div class="card:content">
                    <ul>
                    
                        <li>
                            <a href="https://www.davisinstruments.com/solution/vantage-pro2/" target="_blank" title="https://www.davisinstruments.com/solution/vantage-pro2/">
                                <div class="collection">
                                    <div class="collection:icon">
                                    
                                    <svg id="i-info" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="rgba(255, 93, 46, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M16 14 L16 23 M16 8 L16 10" />
    <circle cx="16" cy="16" r="14" />
</svg>

                                    </div>
                                    
                                    
                                    <div class="collection:data">
                                        <h3>Weather Station <blue> Davis</blue></h3>
                                        <span>Model:<?php echo $weatherhardware?></span>
                                        <img src="img/<?php 
										if($weatherhardware=='Davis Vantage Vue'){echo 'davisvue';}
										else if($weatherhardware=='Davis Vantage Pro2'){echo 'weather34-davis-vp2';}
										else if($weatherhardware=='Davis Vantage Pro2 Plus'){echo 'weather34-davis-vp2';}
										else if($weatherhardware=='Davis Envoy8x'){echo 'designedfordavisenvoy8x';}
										else echo 'davisw34';?>.svg" width="80px" height="80px" alt="Davis Instruments" title="Davis Instruments" class="davishardwaresvg" >
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://wiki.meteobridge.com/wiki/index.php/Home" target="_blank" title="https://wiki.meteobridge.com/wiki/index.php/Home">
                                <div class="collection">
                                    <div class="collection:icon">
                                     <svg id="i-options" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M28 6 L4 6 M28 16 L4 16 M28 26 L4 26 M24 3 L24 9 M8 13 L8 19 M20 23 L20 29" />
</svg>
                                    </div>
                                    <div class="collection:data">
                                        <h3>Interface <blue> Meteobridge</blue></h3>
                                        <span>Type:<?php echo $mbplatform?> </span>
                                       <img src="img/<?php 
										if($mbplatform=='Meteobridge Pro'){echo 'MeteobridgePRO';}
										else echo 'nano';?>.svg" width="60px" height="60px" alt="Davis Instruments" title="Davis Instruments" class="davishardwaresvg" >
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" alt="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" title="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" target="_blank">
                                <div class="collection">
                                    <div class="collection:icon">
                                        
     <img src="img/weather34-mbsmart-logo.svg" alt="weather34 logo" title="weather34 logo" width="50px" height="50px">
    
                                    </div>
                                    <div class="collection:data">
                                        <h3><blue>MB-SMART</blue> Info Page </h3>
                                        <a href="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" alt="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" title="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" target="_blank">MB-SMART Info Page</a>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        
        </div>
    </div>
</div>

</body>

</html>
