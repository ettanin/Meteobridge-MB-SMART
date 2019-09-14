<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');include('common.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 UV-INDEX Almanac Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(fonts/verbatim-regular.woff2) format("woff2"),url(fonts/verbatim-regular.ttf) format("truetype")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(160px, 2fr));
  grid-gap: 10px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
 
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:20px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:45px
}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(160px, 2fr));
  grid-gap: 10px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
 
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:20px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:45px
}
.grid1 { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  margin-top:5px
  
  }

.grid1 > articlegraph {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
 padding-top:5px;
  padding-right:5px;
  padding-left:5px;
  font-size:0.75em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:255px  
}
  
  
 a{color:#aaa;text-decoration:none} 
.weather34darkbrowser{position:relative;background:0;width:96%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
orange{color:#009bb4}orange1{color:rgba(255, 131, 47, 1.000);}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}blue{color:rgba(0, 154, 171, 1.000)}
smalluvunit{font-size:.9rem;font-family:Arial,Helvetica,system;}
.uvcontainer1{left:70px;top:0}.uvtoday1,.uvtoday1-3,.uvtoday11,.uvtoday4-5,.uvtoday6-8,.uvtoday9-10{font-family:weathertext2,Arial,Helvetica,system;width:4.25rem;height:1.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;font-weight:normal;font-size:.9rem;padding-top:3px;color:#fff;border-bottom:5px solid rgba(56,56,60,1);align-items:center;justify-content:center;text-align:center;border-radius:3px;}
.uvcaution,.uvtrend{position:absolute;font-size:1rem}
.uvtoday1,.uvtoday1-3{background:#9aba2f}
.uvtoday4-5{background:#ff7c39;background:-webkit-linear-gradient(90deg,#90b12a,#ff7c39);background:linear-gradient(90deg,#90b12a,#ff7c39)}
.uvtoday6-8{background:#efa80f;background:-webkit-linear-gradient(90deg,#efa80f,#d86858);background:linear-gradient(90deg,#efa80f,#d86858)}
.uvtoday9-10{background:#d05f2d;background:-webkit-linear-gradient(90deg,#d65b4a,#ac2816);background:linear-gradient(90deg,#d65b4a,#ac2816)}
.uvtoday11{background:#95439f;background:-webkit-linear-gradient(90deg,#95439f,#a475cb);background:linear-gradient(90deg,#95439f,#a475cb)}
.higust{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;width:70px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-33px;margin-left:66px;padding-left:3px;line-height:11px;font-size:9px}
.uvcaution{margin-left:120px;margin-top:112px;font-family:Arial,Helvetica,system}.uvtrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}.simsekcontainer{float:left;font-family:weathertext,system;-o-font-smoothing:antialiasedleft:0;bottom:0;right:0;position:relative;margin:40px 10px 10px 40px;left:-10px;top:13px}.simsek{font-size:1.55rem;padding-top:12px;color:#f8f8f8;background:rgba(230,161,65,1);border-bottom:18px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px}
smalluvunit{font-size:.65rem;font-family:Arial,Helvetica,system;}
sup{font-size:1em}supwm2{font-size:0.7em;vertical-align:super}
.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:9px}
.actualt{position:relative;left:0;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:0px;top:-15px;text-transform:capitalize}
.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0px}
.mbsmartlogo{position:relative;float:right;top:-18px;}
</style>
<div class="weather34darkbrowser" url="<?php echo "UV ".$lang['Almanac'];?> "></div>
  
<main class="grid">
  <article>  
   <div class=actualt><?php echo $lang['Today'];?> </div>        
   <div class="temperaturecontainer">
	
             <?php
	// UV INDEX
	if ($weather["uvdmax"]>=10)  {
	echo "<div class='uvtoday11'>",$weather["uvdmax"] . "</value>";} 	
	else if ($weather["uvdmax"]>=8)  {
	echo "<div class='uvtoday9-10'>",$weather["uvdmax"] . "</value>";}
	else if ($weather["uvdmax"]>=5)  {
	echo "<div class='uvtoday6-8'>",$weather["uvdmax"] . "</value>";}
	else if ($weather["uvdmax"]>=3)  {
	echo "<div class='uvtoday4-5'>",$weather["uvdmax"] . "</value>";} 		
	else if ($weather["uvdmax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["uvdmax"] . "</value>";}		
	echo "<smalluvunit> UVI</smalluvunit>"
?>

</div>

<div class="higust">Max<br><blue><?php echo $weather["uvdmaxtime"];?></blue></div>



</article> 

 <article> 
  <div class=actualt><?php echo $lang['Yesterday'];?> </div>        
   <div class="temperaturecontainer">
	
            <?php
	// UV INDEX
	if ($weather["uvydmax"]>=10)  {
	echo "<div class='uvtoday11'>",$weather["uvydmax"] . "</value>";} 	
	else if ($weather["uvydmax"]>=8)  {
	echo "<div class='uvtoday9-10'>",$weather["uvydmax"] . "</value>";}
	else if ($weather["uvydmax"]>=5)  {
	echo "<div class='uvtoday6-8'>",$weather["uvydmax"] . "</value>";}
	else if ($weather["uvydmax"]>=3)  {
	echo "<div class='uvtoday4-5'>",$weather["uvydmax"] . "</value>";} 		
	else if ($weather["uvydmax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["uvydmax"] . "</value>";}		
	echo "<smalluvunit> UVI</smalluvunit>"
?>

</div>

<div class="higust">Max<br><blue><?php echo $weather["uvydmaxtime"];?></blue></div>



</article>  
  
 
  
  <article> 
  <div class=actualt><?php echo strftime('%B',time());?> </div>        
   <div class="temperaturecontainer">
	
            <?php
	// UV INDEX
	if ($weather["uvmmax"]>=10)  {
	echo "<div class='uvtoday11'>",$weather["uvmmax"] . "</value>";} 	
	else if ($weather["uvmmax"]>=8)  {
	echo "<div class='uvtoday9-10'>",$weather["uvmmax"] . "</value>";}
	else if ($weather["uvmmax"]>=5)  {
	echo "<div class='uvtoday6-8'>",$weather["uvmmax"] . "</value>";}
	else if ($weather["uvmmax"]>=3)  {
	echo "<div class='uvtoday4-5'>",$weather["uvmmax"] . "</value>";} 		
	else if ($weather["uvmmax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["uvmmax"] . "</value>";}		
	echo "<smalluvunit> UVI</smalluvunit>"
?>

</div>

<div class="higust">Max<br><blue><?php echo $weather["uvmmaxtime"];?></blue></div>



</article>  
  
  
    <article> 
  <div class=actualt><?php echo date('Y')?> </div>        
   <div class="temperaturecontainer">
	
            <?php
	// UV INDEX
	if ($weather["uvymax"]>=10)  {
	echo "<div class='uvtoday11'>",$weather["uvymax"] . "</value>";} 	
	else if ($weather["uvymax"]>=8)  {
	echo "<div class='uvtoday9-10'>",$weather["uvymax"] . "</value>";}
	else if ($weather["uvymax"]>=5)  {
	echo "<div class='uvtoday6-8'>",$weather["uvymax"] . "</value>";}
	else if ($weather["uvymax"]>=3)  {
	echo "<div class='uvtoday4-5'>",$weather["uvymax"] . "</value>";} 		
	else if ($weather["uvymax"]>=-0) {
	echo "<div class='uvtoday1'>",$weather["uvymax"] . "</value>";}		
	echo "<smalluvunit> UVI</smalluvunit>"
?>

</div>

<div class="higust">Max<br><blue><?php echo $weather["uvymaxtime"];?></blue></div>


</article>  
</main>

 <main class="grid1">
  <articlegraph> 
  <div class=actualw><?php echo $lang['Today'];?> <span style="color:#ff9350">UV-INDEX</div>  
  <iframe  src="weather34charts/todayuvmedium.php" frameborder="0" scrolling="no"  width="100%" height="245px"></iframe>
   
  </articlegraph> 
  
  <articlegraph style="height:20px">  
  <div class="lotemp">
  <?php echo $info?> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank" style="font-size:8px;"> Charts <?php echo $creditschart ;?> </a></span>
  
  <?php echo $info?> <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:8px;">CSS/SVG/PHP scripts were developed by weather34.com  &copy; 2015-<?php echo date('Y');?>
  </a></div>
   <div class="mbsmartlogo"><img src="img/weather34-mbsmart-logo.svg" alt="weather34 mb-smart" title="weather34 mb-smart" width="25px"></div>
  </articlegraph> 
  
</main>