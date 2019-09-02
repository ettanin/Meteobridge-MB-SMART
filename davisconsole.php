<?php 
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: September 2019						  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
include('livedata.php');?> 
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;  
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:5px;
  font-size:1.5em;
  -webkit-border-radius:4px;
  border-radius:4px;
  height:200px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
}
.grid1 { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  margin-top:5px  
  }
.grid1 > articlegraph {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:10px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:20px  
}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}
 .weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:99%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:95%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#009bb4}.actualt{position:relative;left:0px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:320px;height:0.85em;font-size:0.8rem;padding-top:1px;color:#aaa;align-items:center;justify-content:center;margin-bottom:10px;top:0}           
.mbsmartlogo{position:relative;float:right;top:-20px;}


.forecastimg{
 position:absolute;
 display:flex;
  width:20%;float:right;margin-top:30px;right:30px;
  background: 0; 
  align-items:center;justify-content:center;
  
  }
  
  
  .davishardwareimg{position:absolute;display:block;width:100px;float:right;margin-top:170px;right:30px;border: 1px solid rgba(245, 247, 252, 0.02);
  border-width: thin;
  border-radius: 2px;
  background: 0;
  box-shadow: 2px 2px 6px 0 rgba(0, 0, 0, 0.6);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;}
  
  
   @media screen and (max-width: 960px) {	
   
   .forecastimg{
 
  width:15%;float:right;margin-top:30px;right:30px;
  
  
  }  
	
  .davishardwareimg{display:none}
  } 
  
  
  @media screen and (max-width: 640px) {	  
	.forecastimg{
     margin-top:80px;right:20px; }
  .davishardwareimg{display:none}
  } 
  
  
  
  
</style>
<div class="weather34darkbrowser" url="Davis VP2 Console Forecast"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>Console Forecast Generated Based on Station Data</div>        
<?php  //weather34 script Davis forecast outlook
$weather["vpforecasttext"]	=str_replace('within', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('likely', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('with', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('possible', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and warmer.', '<orange>Warmer </orange>period expected .<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and cooler.', '<blue>Cooler </blue>period expected.<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and ending', 'for', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('to the', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('shift', 'shifting', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('wind shifting', 'shifting', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Windy', '<orange>Windy</orange>', $weather["vpforecasttext"]);
if (anyToC($weather["temp"])<-1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Risk of <blue>Snow</blue> Showers', $weather["vpforecasttext"]);}
else if (anyToC($weather["temp"])<1){$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue> & <blue>Sleet</blue>', $weather["vpforecasttext"]);}
$weather["vpforecasttext"]	=str_replace('Precipitation',  'Chance of <blue>Rain</blue> Showers', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Increasing clouds', 'Periods of <blue>Scattered</blue> Clouds<br> ', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('and windy', '<orange>Winds strengthening</orange> at times', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly clear', 'Becoming or remaining <orange>Mostly Clear</orange><br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Partly cloudy', 'Becoming or remaining <blue>Partly</blue> Cloudy</blue><br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('Mostly cloudy', 'Becoming or remaining <blue>Mostly Cloudy</blue> <br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('24 to 48 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('6 to 12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 to 24 hours', '', $weather["vpforecasttext"]);  
$weather["vpforecasttext"]	=str_replace('48 to 72 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('12 hours', '', $weather["vpforecasttext"]); 
$weather["vpforecasttext"]	=str_replace('6 hours', '', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South West', 'SW', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('South East', 'SE', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('W, NW, or N', 'W, NW to North', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace('little temperature change.', 'No <orange>Significant </orange> change in temperature<br>', $weather["vpforecasttext"]);
$weather["vpforecasttext"]	=str_replace(', possibly heavy at times', '', $weather["vpforecasttext"]);
echo "</div>";
//weather34 console vue-vp2 Davis forecast icon
if (preg_match("/Snow/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<-1)  {echo '<img rel="prefetch" src="css/icons/snow.svg" class="forecastimg">';} 
else if (preg_match("/Sleet/i", $weather["vpforecasttext"]) && anyToC($weather["temp"])<1)  {echo '<img rel="prefetch" src="css/icons/sleet.svg" class="forecastimg">';} 
else if (preg_match("/Rain/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="css/icons/rainvp.svg" class="forecastimg">';} 
else if (preg_match("/Precipitation/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="css/icons/rainvp.svg" class="forecastimg">';} 
else if (preg_match("/Windy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="css/icons/windy.svg" class="forecastimg">';} 
else if (preg_match("/clear/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="css/icons/clear.svg" class="forecastimg">';}
else if (preg_match("/Partly/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="css/icons/partly-cloudy-day.svg" class="forecastimg">';} 
else if (preg_match("/Mostly cloudy/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="css/icons/mostlycloudy.svg" class="forecastimg">';} 
else if (preg_match("/Scattered/i", $weather["vpforecasttext"])) {echo '<img rel="prefetch" src="css/icons/scatteredclouds.svg" class="forecastimg">';} 
echo $weather["vpforecasttext"]	; ?>
<img src="img/weather34-davis-vp2.svg" class="davishardwareimg"/>

</div></div>
</article>
</main>
<main class="grid1">
<articlegraph>  
  <div class="lotemp">
  <?php echo $info?> <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:8px;">CSS/SVG/PHP scripts were developed by weather34.com  for use in the weather34 template &copy; 2015-<?php echo date('Y');?>
  </a></div>
    <div class="mbsmartlogo"><img src="img/weather34-mbsmart-logo.svg" alt="weather34 mb-smart" title="weather34 mb-smart" width="30px"></div>
  </articlegraph> 