<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-19                                       #
	#	CREATED FOR HOMEWEATHERSTATION MB-SMART TEMPLATE 	 										   #
	#   https://weather34.com/homeweatherstation/index.html 										   # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 HARDWARE: 22nd September 2019	                                           			   #
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
  <title>Weather Station Hardware Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  overflow:hidden
  
  }
.grid > article {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:275px ;
  overflow:hidden
}
 a{color:#aaa;text-decoration:none} 
.weather34darkbrowser{position:relative;background:0;width:97%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 
  
 
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:160px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.hardwareimage{position:relative;display:flex;margin:0 auto;margin-top:-0px;}
.hardwareimagewf{position:relative;display:flex;margin:0 auto;margin-top:10px;opacity:.8}
.hardwareimagenano{position:relative;display:flex;margin:0 auto;margin-top:10px;}
.hardwareimageups{position:relative;display:flex;margin:0 auto;margin-top:5px;
border:solid 2px #4b545c;border-bottom:solid 5px #4b545c;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;}
.hardwareimageaq{position:relative;display:flex;margin:0 auto;margin-top:10px;
border:solid 2px #4b545c;border-bottom:solid 15px #4b545c;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;padding-right:3px;opacity:.8}


</style>
<div class="weather34darkbrowser" url="<?php echo $stationlocation?> Weather Station Hardware Info"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>Main Hardware</div> 
    Station Hardware:<blue><?php echo $weatherhardware?></blue><br>
    Installed Since:<blue><?php echo $hardwareinstalled?></blue><br>
    <?php  
  if ($weatherhardware=='Davis Vantage Pro2+'){echo ' 
  <img src=img/weather34-davis-vp2.svg width="265rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/>';}  
  else if ($weatherhardware=='Davis Vantage Pro2'){echo ' 
  <img src=img/weather34-davis-vp2.svg width="265rem" alt="Davis Vantage Pro2" title="Davis Vantage Pro2"/>';}  
  else if ($weatherhardware=='Davis Vantage Vue' ){echo ' 
  <img src=img/davisvue.svg width="260rem" alt="Davis Vantage Vue" title="Davis Vantage Vue" style="margin-top:5px;"/>';}  
  else if ($weatherhardware=='Davis Envoy8x' ){echo ' 
  <img src=img/designedfordavisenvoy8x.svg width="260rem" alt="Davis Envoy8x" title="Davis Envoy8x" style="margin-top:5px;"/>';}
  ?>
 
  
  <div style="position:relative;float:left;margin-left:0;top:40px">
 <?php echo $info?> Davis&reg; Vantage&#8482; <a href="https://www.davisinstruments.com/product/wireless-vantage-pro2-plus-including-uv-solar-radiation-sensors/" title="https://www.davisinstruments.com/product/wireless-vantage-pro2-plus-including-uv-solar-radiation-sensors/" target="_blank"> <?php echo $chartinfo?> Information</a>.<br> 
 <?php echo $info?> Davis&reg; <a href="https://www.davisinstruments.com" title="https://www.davisinstruments.com" target="_blank"> <?php echo $chartinfo?> Information</a>.
 </span></div>
  
</article> 



 <article>  
  <div class=actualt>Meteobridge</div> 
  
  <?php //meteobridge and station hardware 
$nanosduptime = $meteobridgeapi[81];function convert($nanosduptime){$weather34nanotimeago = "";$days1 = intval(intval($nanosduptime) / (3600*24));$hours1 = (intval($nanosduptime) / 3600) % 24;$minutes1 = (intval($nanosduptime) / 60) % 60;$seconds1 = (intval($nanosduptime)) % 60;if($days1> 1){$weather34nanotimeago .= "$days1 Days ";}else {if($days1>0){$weather34nanotimeago .= "$days1 Day ";}if($hours1 > 1){$weather34nanotimeago .= "$hours1 hrs ";}else if($hours1 >=0){$weather34nanotimeago .= "$hours1 hr ";}if($minutes1 > 1){$weather34nanotimeago .= "$minutes1 mins ";}else if($minutes1 >=0){$weather34nanotimeago .= "$minutes1 min ";}}return $weather34nanotimeago;}?>
  
    Interface:Meteobridge <blue><?php echo $mbplatform?> </blue><?php echo $weather["mbplatform"]?><br>
    Interface Uptime :<blue><?php echo convert($nanosduptime)?></blue><br>
    Firmware:<blue><?php echo $weather["swversion"]."-" .$weather["build"]?></blue><br>
    <div style="position:absolute;display:inline-block;margin-left:45px;margin-top:15px;">
    <?php 
  if ($mbplatform=='NanoSD' || $mbplatform=='Nano'){echo '<div class="nanoimg2"><img src=img/nano.svg width="120rem" alt="Meteobridge NANO(SD)" title="Meteobridge NANO(SD)"/></div>';}
  if ($mbplatform=='Pro' ){echo '<div class="proimg2"><img src=img/MeteobridgePRO.svg width="180rem" alt="Meteobridge Pro" title="Meteobridge Pro2"/></div>';}
  ?>  </div> </div> 
  
  <div style="position:relative;float:left;margin-left:0;top:165px">
 <?php echo $info?> NANOSD <?php echo $chartinfo?> <a href="https://www.meteobridge.com/wiki/index.php/Meteobridge_NANO_SD" title="https://www.meteobridge.com/wiki/index.php/Meteobridge_NANO_SD" target="_blank">Information</a>.<br> 
 <?php echo $info?> Meteobridge <?php echo $chartinfo?> <a href="https://www.meteobridge.com" title="https://www.meteobridge.com" target="_blank">Information</a>.
 </span></div>
  </article> 
<article>  
   <div class=actualt>Hardware Power</div> 
   
   
   <div style="position:absolute;display:inline;margin-left:15px;">
   
    <div style="position:absolute;display:inline;margin-left:15px;width:100px">Console Power</div>
    
    <?php //battery console
 if ($weather['indoorbattery']==1){echo "<div style='margin-left:10px;font-size:1rem;margin-top:23px'><red>&nbsp;&nbsp;&nbsp;No Power !!";}
 else if ($weather['indoorbattery']==0){echo "<div  style='margin-left:25px;font-size:2rem;margin-top:23px'><blue>5V</blue>&nbsp; 
 <span style='font-size:.35em;margin-top:5px;margin-left:-18px;'>DC</span></div>";}?>
    
<div class="davisbattery" style="margin-left:8px;">
<svg id="weather34 power plug" width="63pt" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
<g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path fill="#3e4a57" d="M4482.4,4879.1c-850.3-87.4-1743.2-444.1-2440-970.8c-255.1-193.7-666.1-595.2-866.9-845.6C266.1,1919.5-90.5,452.7,197.6-976.4C469.3-2325.1,1307.8-3506.1,2503-4217.1c394.5-233.8,956.6-467.7,1124.3-467.7c269.3,2.4,510.2,281.1,463,538.5c-37.8,210.2-139.4,307.1-451.2,427.5c-569.2,222-999.1,496-1403,899.9C1650.3-2240,1298.3-1604.7,1130.6-829.9c-337.8,1570.7,323.6,3210,1662.9,4112.3c1993.6,1344,4707.5,611.8,5765.7-1554.2c689.7-1414.9,472.4-3115.5-550.3-4298.9C7560.1-3088,6759.4-3574.6,6353.1-3574.6c-522,0-843.3,571.6-895.2,1594.4l-14.2,283.4l210.2,40.2c326,61.4,566.9,191.3,812.5,441.7c151.2,151.2,224.4,248,288.2,380.3C6905.8-530,6915.2-452,6915.2,495.2v843.3H5002H3088.8V495.2c0-944.8,9.4-1025.1,155.9-1320.4c203.1-413.3,581.1-708.6,1046.4-819.6l207.9-49.6l14.2-321.2c61.4-1313.3,529.1-2154.2,1351.1-2425.8c264.6-87.4,689.7-92.1,968.4-11.8c503.1,144.1,1247.2,600,1677,1032.2c1443.2,1438.5,1807,3748.5,883.4,5595.6C8471.8,4017,6525.5,5087,4482.4,4879.1z"/>
<path fill="#2f9dac" d="M3851.7,2944.6c-40.1-23.6-87.4-66.1-99.2-92.1c-16.5-28.3-26-262.2-26-625.9v-581.1H4069h342.5v585.8c0,640.1-2.4,654.3-141.7,725.1C4170.6,3008.4,3943.8,3001.3,3851.7,2944.6z"/>
<path fill="#2f9dac" d="M5717.7,2944.6c-40.2-23.6-87.4-66.1-99.2-92.1c-16.5-28.3-26-262.2-26-625.9v-581.1H5935h342.5v585.8c0,640.1-2.4,654.3-141.7,725.1C6036.6,3008.4,5809.8,3001.3,5717.7,2944.6z"/></g></g></svg>
<div style="margin-left:23px;margin-top:10px"><?php //power console
 if ($weather['indoorbattery']==1){echo "<red style='font-size:.85rem;margin-left:-15px;margin-top:35px;'>Check Power";} else echo"<blue>Stable"?></div></div></div></div>
 
 
 <div style="position:absolute;display:inline;margin-left:115px;">
 
  <div style="position:absolute;display:inline;margin-left:30px;width:100px">ISS Power</div>
    
    <?php //battery console
 if ($weather['outdoorbattery']==1){echo "<div style='margin-left:25px;font-size:1rem;margin-top:23px'><red>No Power";}
 else if ($weather['outdoorbattery']==0){echo "<div  style='margin-left:32px;font-size:1rem;margin-top:25px'><blue>Good 
 </div>";}?>
    
<div class="davisbattery" style="margin-left:15px;margin-top:0;">
<?php if ($weather['outdoorbattery']==0){echo '
<svg width="52pt"  viewBox="0 0 434 631" version="1.1" id"weather34 good battery">
<path fill="#e2e2e3" stroke="#e2e2e3" stroke-width="0.09375" opacity="1.00" d=" M 146.63 57.58 C 148.60 54.45 152.30 52.71 155.97 52.99 C 196.35 53.03 236.72 52.97 277.10 53.02 C 281.99 52.91 286.50 57.01 286.91 61.87 C 287.10 64.24 286.99 66.62 287.00 69.00 C 239.67 69.00 192.33 69.00 145.00 69.00 C 145.13 65.19 144.34 60.93 146.63 57.58 Z" />
<path fill="#01a4b4" stroke="#01a4b4" stroke-width="0.09375" opacity="1.00" d=" M 84.40 70.36 C 88.78 68.93 93.47 69.59 97.99 69.04 C 113.65 68.94 129.33 69.03 145.00 69.00 C 192.33 69.00 239.67 69.00 287.00 69.00 C 305.02 69.19 323.06 68.54 341.06 69.48 C 348.50 69.92 354.95 75.62 357.59 82.38 C 358.22 89.15 357.27 96.00 358.12 102.76 C 358.77 115.83 358.23 128.93 358.40 142.01 C 358.32 153.25 358.58 164.48 358.26 175.71 C 262.77 175.69 167.28 175.61 71.79 175.75 C 71.30 151.10 71.80 126.43 71.54 101.76 C 71.71 95.52 72.45 89.31 72.29 83.05 C 73.92 77.19 78.78 72.50 84.40 70.36 M 214.43 96.43 C 214.41 103.07 214.44 109.71 214.42 116.36 C 207.76 116.40 201.11 116.30 194.46 116.42 C 194.49 119.91 194.49 123.41 194.51 126.90 C 201.15 126.89 207.78 126.88 214.42 126.90 C 214.43 133.57 214.44 140.24 214.41 146.91 C 217.73 146.96 221.05 146.96 224.37 146.96 C 224.37 140.31 224.43 133.67 224.33 127.02 C 230.94 126.76 237.56 126.95 244.17 126.89 C 244.26 123.36 244.18 119.84 244.09 116.31 C 237.54 116.43 231.00 116.31 224.46 116.40 C 224.31 109.76 224.39 103.12 224.41 96.48 C 221.08 96.42 217.76 96.41 214.43 96.43 Z" />
<path fill="#e2e2e3" stroke="#e2e2e3" stroke-width="0.09375" opacity="1.00" d=" M 214.43 96.43 C 217.76 96.41 221.08 96.42 224.41 96.48 C 224.39 103.12 224.31 109.76 224.46 116.40 C 231.00 116.31 237.54 116.43 244.09 116.31 C 244.18 119.84 244.26 123.36 244.17 126.89 C 237.56 126.95 230.94 126.76 224.33 127.02 C 224.43 133.67 224.37 140.31 224.37 146.96 C 221.05 146.96 217.73 146.96 214.41 146.91 C 214.44 140.24 214.43 133.57 214.42 126.90 C 207.78 126.88 201.15 126.89 194.51 126.90 C 194.49 123.41 194.49 119.91 194.46 116.42 C 201.11 116.30 207.76 116.40 214.42 116.36 C 214.44 109.71 214.41 103.07 214.43 96.43 Z" />
<path fill="#393c44" stroke="#393c44" stroke-width="0.09375" opacity="1.00" d=" M 70.99 182.06 C 71.90 155.31 70.94 128.52 71.54 101.76 C 71.80 126.43 71.30 151.10 71.79 175.75 C 167.28 175.61 262.77 175.69 358.26 175.71 C 358.58 164.48 358.32 153.25 358.40 142.01 C 358.23 128.93 358.77 115.83 358.12 102.76 C 358.37 103.80 358.54 104.85 358.62 105.91 C 358.83 131.62 358.24 157.34 359.01 183.03 C 359.00 305.71 358.98 428.38 359.03 551.06 C 359.11 552.34 358.81 553.52 358.12 554.62 C 357.84 561.93 358.07 569.25 358.00 576.58 C 356.48 579.20 354.00 581.10 352.60 583.80 C 351.40 584.28 350.21 584.79 349.02 585.28 C 349.01 585.69 348.98 586.53 348.97 586.95 C 347.85 587.00 346.73 587.07 345.61 587.15 C 343.34 588.58 340.55 587.86 338.03 588.02 C 256.03 587.98 174.02 588.00 92.02 588.01 C 89.15 587.82 86.04 588.62 83.39 587.20 C 82.91 587.13 81.95 586.98 81.47 586.91 C 80.25 585.65 78.89 584.54 77.43 583.57 C 75.78 581.11 73.54 579.11 72.00 576.57 C 71.90 571.39 72.21 566.19 71.89 561.03 C 71.70 560.62 71.31 559.80 71.12 559.38 C 70.83 433.62 71.10 307.84 70.99 182.06 M 218.04 230.81 C 216.20 225.84 211.36 222.57 206.15 222.18 C 200.18 221.82 193.37 221.34 188.39 225.29 C 183.62 229.36 182.53 236.02 182.06 241.94 C 181.81 250.76 181.61 260.53 187.02 268.02 C 190.78 272.86 197.36 273.23 202.99 273.03 C 202.99 269.40 202.99 265.76 203.00 262.13 C 199.39 261.88 194.70 261.88 192.72 258.23 C 189.91 252.73 190.06 246.11 191.15 240.17 C 193.19 232.20 203.97 231.28 210.03 235.02 C 215.18 239.21 213.89 246.49 214.00 252.34 C 216.83 252.34 219.67 252.34 222.51 252.36 C 222.91 246.82 221.28 240.63 224.75 235.77 C 227.79 231.09 234.25 230.83 239.20 231.78 C 244.19 232.94 246.63 238.11 246.89 242.84 C 247.11 248.38 247.65 254.56 244.42 259.42 C 241.67 263.41 236.38 263.45 232.04 263.50 C 231.99 267.24 231.99 270.98 232.04 274.72 C 238.61 274.88 246.46 274.47 250.69 268.65 C 255.94 260.88 255.74 250.97 255.49 241.98 C 254.91 235.86 253.93 229.14 249.58 224.46 C 244.72 219.58 237.24 219.72 230.87 220.23 C 224.87 220.64 219.55 224.96 218.04 230.81 M 187.75 291.72 C 182.69 297.10 182.01 305.00 181.97 312.04 C 181.89 319.97 182.43 328.85 187.90 335.12 C 192.16 339.92 199.06 339.79 204.94 339.72 C 205.03 335.98 205.01 332.24 204.93 328.50 C 201.21 328.52 196.81 328.93 193.98 326.01 C 191.10 322.79 190.53 318.20 190.50 314.05 C 190.49 309.93 190.38 305.31 193.09 301.92 C 195.94 298.59 200.86 298.05 204.94 298.81 C 208.60 299.44 210.40 303.04 212.04 305.97 C 215.71 313.10 218.80 320.51 222.40 327.68 C 224.55 332.11 227.27 336.88 232.20 338.61 C 239.42 340.92 247.13 339.71 254.57 339.96 C 254.56 322.36 254.46 304.76 254.63 287.16 C 251.75 287.11 248.88 287.10 246.01 287.10 C 246.00 301.08 246.01 315.07 246.01 329.06 C 240.99 329.08 234.71 328.96 231.79 324.11 C 226.30 314.64 223.40 303.83 217.27 294.69 C 214.84 291.03 211.11 288.00 206.61 287.54 C 200.20 286.94 192.73 287.00 187.75 291.72 M 183.07 356.41 C 183.25 360.80 182.39 365.40 183.47 369.67 C 188.07 376.36 192.68 383.07 197.51 389.60 C 200.47 390.16 202.91 387.52 205.55 386.52 C 205.56 385.49 205.57 384.47 205.59 383.45 C 201.81 378.08 197.97 372.76 194.11 367.45 C 214.25 367.54 234.39 367.44 254.52 367.50 C 254.55 363.81 254.54 360.12 254.56 356.44 C 230.73 356.45 206.90 356.50 183.07 356.41 M 228.02 403.34 C 224.66 403.86 222.10 406.27 220.47 409.12 C 218.22 404.76 213.84 401.62 208.83 401.61 C 202.77 401.52 196.20 400.74 190.66 403.75 C 185.32 406.74 183.02 413.13 183.00 418.98 C 183.01 431.55 182.99 444.12 183.03 456.69 C 206.87 456.65 230.72 456.66 254.57 456.68 C 254.54 452.93 254.54 449.18 254.57 445.44 C 244.89 445.47 235.22 445.44 225.55 445.45 C 225.66 437.65 225.32 429.83 225.69 422.04 C 225.83 417.62 229.92 414.77 233.95 414.15 C 240.78 412.96 247.77 413.08 254.60 411.85 C 254.52 407.89 254.53 403.92 254.56 399.96 C 245.80 401.71 236.79 401.66 228.02 403.34 M 237.97 472.35 C 237.63 475.84 239.94 478.62 241.35 481.59 C 245.40 489.41 247.70 498.89 244.42 507.40 C 242.47 512.48 236.98 514.92 232.00 515.99 C 223.14 517.66 213.92 517.71 205.08 515.90 C 200.55 514.94 195.81 512.68 193.73 508.30 C 190.22 501.01 191.45 492.54 193.81 485.10 C 194.91 481.14 197.27 477.45 197.03 473.21 C 193.83 472.26 190.65 471.23 187.48 470.17 C 182.59 481.70 180.88 494.50 182.50 506.92 C 183.32 512.27 185.25 517.79 189.61 521.29 C 196.88 527.37 206.81 528.40 215.94 528.64 C 225.83 528.72 236.47 528.58 245.15 523.17 C 249.62 520.55 252.85 516.13 254.12 511.12 C 257.81 496.61 254.89 480.63 246.28 468.38 C 243.50 469.68 240.76 471.07 237.97 472.35 Z" />
<path fill="#e2e2e3" stroke="#e2e2e3" stroke-width="0.09375" opacity="1.00" d=" M 218.04 230.81 C 219.55 224.96 224.87 220.64 230.87 220.23 C 237.24 219.72 244.72 219.58 249.58 224.46 C 253.93 229.14 254.91 235.86 255.49 241.98 C 255.74 250.97 255.94 260.88 250.69 268.65 C 246.46 274.47 238.61 274.88 232.04 274.72 C 231.99 270.98 231.99 267.24 232.04 263.50 C 236.38 263.45 241.67 263.41 244.42 259.42 C 247.65 254.56 247.11 248.38 246.89 242.84 C 246.63 238.11 244.19 232.94 239.20 231.78 C 234.25 230.83 227.79 231.09 224.75 235.77 C 221.28 240.63 222.91 246.82 222.51 252.36 C 219.67 252.34 216.83 252.34 214.00 252.34 C 213.89 246.49 215.18 239.21 210.03 235.02 C 203.97 231.28 193.19 232.20 191.15 240.17 C 190.06 246.11 189.91 252.73 192.72 258.23 C 194.70 261.88 199.39 261.88 203.00 262.13 C 202.99 265.76 202.99 269.40 202.99 273.03 C 197.36 273.23 190.78 272.86 187.02 268.02 C 181.61 260.53 181.81 250.76 182.06 241.94 C 182.53 236.02 183.62 229.36 188.39 225.29 C 193.37 221.34 200.18 221.82 206.15 222.18 C 211.36 222.57 216.20 225.84 218.04 230.81 Z" />
<path fill="#e2e2e3" stroke="#e2e2e3" stroke-width="0.09375" opacity="1.00" d=" M 187.75 291.72 C 192.73 287.00 200.20 286.94 206.61 287.54 C 211.11 288.00 214.84 291.03 217.27 294.69 C 223.40 303.83 226.30 314.64 231.79 324.11 C 234.71 328.96 240.99 329.08 246.01 329.06 C 246.01 315.07 246.00 301.08 246.01 287.10 C 248.88 287.10 251.75 287.11 254.63 287.16 C 254.46 304.76 254.56 322.36 254.57 339.96 C 247.13 339.71 239.42 340.92 232.20 338.61 C 227.27 336.88 224.55 332.11 222.40 327.68 C 218.80 320.51 215.71 313.10 212.04 305.97 C 210.40 303.04 208.60 299.44 204.94 298.81 C 200.86 298.05 195.94 298.59 193.09 301.92 C 190.38 305.31 190.49 309.93 190.50 314.05 C 190.53 318.20 191.10 322.79 193.98 326.01 C 196.81 328.93 201.21 328.52 204.93 328.50 C 205.01 332.24 205.03 335.98 204.94 339.72 C 199.06 339.79 192.16 339.92 187.90 335.12 C 182.43 328.85 181.89 319.97 181.97 312.04 C 182.01 305.00 182.69 297.10 187.75 291.72 Z" />
<path fill="#e2e2e3" stroke="#e2e2e3" stroke-width="0.09375" opacity="1.00" d=" M 183.07 356.41 C 206.90 356.50 230.73 356.45 254.56 356.44 C 254.54 360.12 254.55 363.81 254.52 367.50 C 234.39 367.44 214.25 367.54 194.11 367.45 C 197.97 372.76 201.81 378.08 205.59 383.45 C 205.57 384.47 205.56 385.49 205.55 386.52 C 202.91 387.52 200.47 390.16 197.51 389.60 C 192.68 383.07 188.07 376.36 183.47 369.67 C 182.39 365.40 183.25 360.80 183.07 356.41 Z" />
<path fill="#e2e2e3" stroke="#e2e2e3" stroke-width="0.09375" opacity="1.00" d=" M 228.02 403.34 C 236.79 401.66 245.80 401.71 254.56 399.96 C 254.53 403.92 254.52 407.89 254.60 411.85 C 247.77 413.08 240.78 412.96 233.95 414.15 C 229.92 414.77 225.83 417.62 225.69 422.04 C 225.32 429.83 225.66 437.65 225.55 445.45 C 235.22 445.44 244.89 445.47 254.57 445.44 C 254.54 449.18 254.54 452.93 254.57 456.68 C 230.72 456.66 206.87 456.65 183.03 456.69 C 182.99 444.12 183.01 431.55 183.00 418.98 C 183.02 413.13 185.32 406.74 190.66 403.75 C 196.20 400.74 202.77 401.52 208.83 401.61 C 213.84 401.62 218.22 404.76 220.47 409.12 C 222.10 406.27 224.66 403.86 228.02 403.34 M 192.57 423.04 C 192.48 430.51 192.59 437.98 192.54 445.45 C 200.37 445.45 208.19 445.46 216.01 445.45 C 215.96 437.95 216.09 430.45 215.97 422.95 C 215.85 418.94 213.87 414.45 209.74 413.20 C 206.53 412.48 203.16 412.64 199.91 412.99 C 195.23 413.73 192.57 418.62 192.57 423.04 Z" />
<path fill="#393c44" stroke="#393c44" stroke-width="0.09375" opacity="1.00" d=" M 192.57 423.04 C 192.57 418.62 195.23 413.73 199.91 412.99 C 203.16 412.64 206.53 412.48 209.74 413.20 C 213.87 414.45 215.85 418.94 215.97 422.95 C 216.09 430.45 215.96 437.95 216.01 445.45 C 208.19 445.46 200.37 445.45 192.54 445.45 C 192.59 437.98 192.48 430.51 192.57 423.04 Z" />
<path fill="#e2e2e3" stroke="#e2e2e3" stroke-width="0.09375" opacity="1.00" d=" M 237.97 472.35 C 240.76 471.07 243.50 469.68 246.28 468.38 C 254.89 480.63 257.81 496.61 254.12 511.12 C 252.85 516.13 249.62 520.55 245.15 523.17 C 236.47 528.58 225.83 528.72 215.94 528.64 C 206.81 528.40 196.88 527.37 189.61 521.29 C 185.25 517.79 183.32 512.27 182.50 506.92 C 180.88 494.50 182.59 481.70 187.48 470.17 C 190.65 471.23 193.83 472.26 197.03 473.21 C 197.27 477.45 194.91 481.14 193.81 485.10 C 191.45 492.54 190.22 501.01 193.73 508.30 C 195.81 512.68 200.55 514.94 205.08 515.90 C 213.92 517.71 223.14 517.66 232.00 515.99 C 236.98 514.92 242.47 512.48 244.42 507.40 C 247.70 498.89 245.40 489.41 241.35 481.59 C 239.94 478.62 237.63 475.84 237.97 472.35 Z" />
</svg>';}
else echo '<span style="margin-left:-20px">
<svg id="weather34 low battery" width="52pt" viewBox="0 0 408 591" version="1.1">
<path fill="#e4e6e9" stroke="#e4e6e9" stroke-width="0.09375" opacity="1.00" d=" M 136.61 48.60 C 138.57 45.48 142.26 43.74 145.91 44.00 C 185.97 44.00 226.03 44.00 266.09 44.00 C 269.96 43.72 273.89 45.71 275.74 49.17 C 277.62 52.45 276.87 56.37 276.97 59.96 C 229.66 59.82 182.34 59.82 135.03 59.96 C 135.11 56.17 134.37 51.95 136.61 48.60 Z" />
<path fill="#d65b4a" stroke="#d65b4a" stroke-width="0.09375" opacity="1.00" d=" M 62.07 72.18 C 64.95 67.09 69.33 62.35 74.99 60.36 C 76.98 60.17 78.97 60.03 80.96 60.00 C 98.98 59.97 117.01 60.05 135.03 59.96 C 182.34 59.82 229.66 59.82 276.97 59.96 C 296.12 60.25 315.30 59.58 334.44 60.30 C 339.19 61.52 343.13 65.13 345.89 69.10 C 346.72 70.33 348.17 71.37 347.99 73.03 C 348.26 81.02 347.35 89.09 348.82 97.01 C 348.95 120.26 348.80 143.53 348.89 166.79 C 252.96 166.73 157.04 166.72 61.11 166.79 C 61.17 143.53 61.13 120.26 61.13 97.00 C 61.21 93.14 60.58 89.22 61.41 85.40 C 62.55 81.08 61.70 76.58 62.07 72.18 Z" />
<path fill="#393c44" stroke="#393c44" stroke-width="0.09375" opacity="1.00" d=" M 61.11 166.79 C 157.04 166.72 252.96 166.73 348.89 166.79 C 349.16 290.86 348.89 414.94 349.03 539.02 C 349.21 543.06 347.79 546.94 347.97 550.98 C 347.78 556.53 348.45 562.14 347.71 567.65 C 344.48 573.35 339.00 578.91 332.00 578.99 C 247.00 579.01 161.99 578.99 76.99 579.00 C 71.14 579.14 67.21 574.27 63.81 570.20 C 60.82 566.84 62.33 562.05 62.02 558.00 C 62.36 553.61 60.83 549.39 60.97 545.02 C 61.11 418.94 60.83 292.86 61.11 166.79 M 79.80 201.00 C 80.67 202.50 81.55 204.00 82.51 205.45 C 106.16 239.48 129.71 273.58 153.32 307.64 C 164.78 324.46 176.72 340.96 187.92 357.95 C 163.07 394.35 137.72 430.42 112.70 466.70 C 101.48 483.15 89.74 499.25 78.85 515.92 C 90.15 515.99 101.46 516.21 112.74 515.81 C 142.88 472.56 172.73 429.11 202.77 385.80 C 203.36 384.88 204.12 384.17 205.05 383.66 C 206.46 383.66 207.20 385.07 208.01 386.01 C 237.15 428.83 266.51 471.52 295.64 514.34 C 296.90 516.62 299.83 515.84 301.98 516.05 C 312.09 515.88 322.21 516.18 332.32 515.89 C 330.01 511.61 326.99 507.78 324.25 503.78 C 290.93 455.48 257.34 407.37 224.14 359.00 C 259.97 307.28 296.20 255.82 332.16 204.18 C 332.84 203.12 333.48 202.05 334.13 200.97 C 322.84 200.75 311.52 200.54 300.24 201.06 C 270.06 244.63 240.01 288.29 209.93 331.91 C 209.21 333.26 207.87 333.76 206.43 333.87 C 177.93 292.27 149.53 250.59 121.04 208.97 C 119.24 206.40 117.73 203.62 115.59 201.31 C 112.82 200.44 109.85 200.84 107.00 200.76 C 97.93 200.96 88.86 200.51 79.80 201.00 Z" />
<path fill="#d65b4a" stroke="#d65b4a" stroke-width="0.09375" opacity="1.00" d=" M 79.80 201.00 C 88.86 200.51 97.93 200.96 107.00 200.76 C 109.85 200.84 112.82 200.44 115.59 201.31 C 117.73 203.62 119.24 206.40 121.04 208.97 C 149.53 250.59 177.93 292.27 206.43 333.87 C 207.87 333.76 209.21 333.26 209.93 331.91 C 240.01 288.29 270.06 244.63 300.24 201.06 C 311.52 200.54 322.84 200.75 334.13 200.97 C 333.48 202.05 332.84 203.12 332.16 204.18 C 296.20 255.82 259.97 307.28 224.14 359.00 C 257.34 407.37 290.93 455.48 324.25 503.78 C 326.99 507.78 330.01 511.61 332.32 515.89 C 322.21 516.18 312.09 515.88 301.98 516.05 C 299.83 515.84 296.90 516.62 295.64 514.34 C 266.51 471.52 237.15 428.83 208.01 386.01 C 207.20 385.07 206.46 383.66 205.05 383.66 C 204.12 384.17 203.36 384.88 202.77 385.80 C 172.73 429.11 142.88 472.56 112.74 515.81 C 101.46 516.21 90.15 515.99 78.85 515.92 C 89.74 499.25 101.48 483.15 112.70 466.70 C 137.72 430.42 163.07 394.35 187.92 357.95 C 176.72 340.96 164.78 324.46 153.32 307.64 C 129.71 273.58 106.16 239.48 82.51 205.45 C 81.55 204.00 80.67 202.50 79.80 201.00 Z" />
</svg>';?>
<div style="margin-left:-20px;margin-top:5px;font-size:.8rem"><?php //power console
 if ($weather['outdoorbattery']==1){echo "<red style='margin-left:0;font-size:.85rem;margin-top:6px'>Check Battery";} else echo"<blue style='margin-left:32px;'>Condition"?></div>
 
 </div></div></div>
 <div style="position:relative;float:left;margin-left:0;top:200px">
 <?php echo $info?> Source is a <a href="https://www.davisinstruments.com/product/power-adapter-for-vantage-family-consoles/" title="https://www.davisinstruments.com/product/power-adapter-for-vantage-family-consoles/" target="_blank"> <?php echo $chartinfo?> 120/240V AC TO 5V DC adapter</a>.<br> 
 <?php echo $info?> ISS solar charged 3V <a href="https://www.davisinstruments.com/product/lithium-battery-3-volt/" title="https://www.davisinstruments.com/product/lithium-battery-3-volt/" target="_blank"><?php echo $chartinfo?> CR123 Lithium</a>.
 </span></div>
 
 
 </article> 



  <article style="height:15px;width:450px">  
  
  <div class="lotemp">
  <?php echo $info?> <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:8px;">CSS/SVG/PHP scripts were developed by weather34.com  for use in the weather34 template &copy; 2015-<?php echo date('Y');?>
  </a></div>
  </article> 
</main>
  