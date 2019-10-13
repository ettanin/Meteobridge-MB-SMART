<?php  

	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: July 2019	revised : October 2019 	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
//weather34 solar and uvindex module 27th Jan 2017 //
include_once('livedata.php');include('common.php');
$hi = 0;foreach ($darkskyhourlyCond as $cond) {$darkskyhourlyuv = $cond['uvIndex']; if ($hi++ == 0) break; }$weather["uv3"]=$darkskyhourlyuv ;
$result = date_sun_info(time(), $lat, $lon); '<pre>'.time().print_r($result,true); $nextday = time() + 24*60*60; $result2 = date_sun_info($nextday,$lat, $lon); '<pre>'.print_r($result2,true); 
$nextrise = $result['sunrise']; $now = time(); if ($now > $nextrise) { $nextrise = date('H:i',$result2['sunrise']);} else {$nextrise = date('H:i',$nextrise);} 
$nextset = $result['sunset']; if ($now > $nextset) { $nextset = date('H:i',$result2['sunset']);} else {$nextset = date('H:i',$nextset);} $firstrise = $result['sunrise']; $secondrise = $result2['sunrise']; $firstset = $result ['sunset']; if ($now < $firstrise) { $time = $firstrise - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time);;} elseif ($now < $firstset) { $time = $firstset - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time); } else { $time = $secondrise - $now; $hrs = gmdate ('G',$time); $min = gmdate ('i',$time);}$sunset=date('Hi',$firstset);$sunrise=date('Gi',$firstrise);
$nextset = $result['sunset']; if ($now > $nextset) { $nextset = date('H:i',$result2['sunset']);}?>
<div class="moduleupdatetime"><span><?php if(file_exists($livedata2)&&time()- filemtime($livedata2)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<?php
$json='jsondata/wuforecast.txt';
$weather34wuurl=file_get_contents($json);
$parsed_weather34wujson = json_decode($weather34wuurl,false);
$parsed_weather34wujson1 = json_decode($weather34wuurl,true);
{    if ($parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0]==null){
	 $wuskydayUV = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[1];
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[1];}	 
	 else {
	 $wuskydayIcon=$parsed_weather34wujson->{'daypart'}[0]->{'iconCode'}[0];	 
	 $wuskydayUV = $parsed_weather34wujson->{'daypart'}[0]->{'uvIndex'}[0];
	 $wuskydayUVdesc = $parsed_weather34wujson->{'daypart'}[0]->{'uvDescription'}[0];	 
	 }}	 
?>

<div class="uvcontainer1"><?php 
if ($wuskydayUV>10) {echo '<div class=uvtoday11>'.number_format($wuskydayUV,0)."<smalluvunit> &nbsp;UVI";}
else if ($wuskydayUV>8) {echo '<div class=uvtoday9-10>'.number_format($wuskydayUV,0)."<smalluvunit> &nbsp;UVI";}
else if ($wuskydayUV>5) {echo '<div class=uvtoday6-8>'.number_format($wuskydayUV,0)."<smalluvunit> &nbsp;UVI";}
else if ($wuskydayUV>3) {echo '<div class=uvtoday4-5>'.number_format($wuskydayUV,0)."<smalluvunit> &nbsp;UVI";}
else if (date('Hi')>$sunset && $wuskydayUV==0) {echo '<div class=uvtodaydark>'.number_format($wuskydayUV,0)."<smalluvunit> &nbsp;UVI";}
else if (date('Gi')<$sunrise && $wuskydayUV==0) {echo '<div class=uvtodaydark>'.number_format($wuskydayUV,0)."<smalluvunit> &nbsp;UVI";}
else if ($wuskydayUV>=0) {echo '<div class=uvtoday1-3>'.number_format($wuskydayUV,0)."<smalluvunit> &nbsp;UVI";}?></smallrainunit></div></div>
<div class="uvtrend"><?php echo "UV INDEX"?></div>  
<div class="uvcaution" style="font-size:.6rem;"><value>&nbsp;&nbsp;<?php echo "UVI ",$lang['Forecast'];?><value></div>



<div class="uvcautionbig"><?php if ($wuskydayUV>=10) {echo $uviclear.'<span>UVI</span> Extreme';}else if ($wuskydayUV>=8) {echo $uviclear.'<span>UVI</span> Very High';}else if ($wuskydayUV>=6) {echo $uviclear.'<span>UVI</span> High';}else if ($wuskydayUV>=3) {echo $uviclear.'<span>UVI</span> Moderate';}
else if (date('Hi')>$sunset && $wuskydayUV>=0 ) {echo $uviclear,"Below Horizon";}else if (date('Gi')<$sunrise && $wuskydayUV>=0 ) {echo $uviclear,"Below Horizon";}else if ($wuskydayUV>=0 ) {echo $uviclear,'<span>UVI</span> Low';}else if ($wuskydayUV>=0 ) {echo $uviclear,'<span>UVI</span> Very Low';}?></div>

<div class="solarextra">
<div class="rainratetextheading">Solar Radiation W/m²</div>
<div class=solarbar>
<div class="weather34solarbar" style="width:<?php echo $weather["solar"]/12;?>px;background: rgba(208, 95, 45, 0.9);">
</div></div><solarbox><?php echo $weather["solar"]?></solarbox></div></div>

<div class="rainrateextra" style="margin-top:90px;margin-left:125px">
<div class="rainratetextheading"><?php echo $lang['Luminance']?> Lux</div>
<div class=rainratebar style="width:6rem">
<div class="weather34ratebar" style="width:<?php echo $weather["lux"]/1400;?>px;background:rgba(1, 164, 181, .9)">
</div></div>
<luxbox><?php echo $weather["lux"]?></luxbox></div></div>