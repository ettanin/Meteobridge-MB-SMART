<?php include('settings.php');include('livedata.php');
	####################################################################################################
	#	HOME WEATHER STATION MB SMART TEMPLATE by BRIAN UNDERDOWN 2015-19                              #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 Meteor Shower: 25TH JANUARY 2018  	                                               #
	# 	   revised September 2019                                                                      #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
date_default_timezone_set($TZ);
// meteor shower alternative by betejuice cumulus forum
$meteor_default="No Meteor";
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 1, 5),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2019),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2020),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2020),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2021),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2021),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2022),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2022),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2023),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2023),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2024),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 28,2024),"event_title"=>"Quadrantids Meteor","event_end"=>mktime(23, 59, 59, 1, 2,2025),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 9),"event_title"=>"Lyrids Meteor","event_end"=>mktime(20, 59, 59, 4, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 4, 21),"event_title"=>"Lyrids Meteor","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 5, 5),"event_title"=>"ETA Aquarids","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 20),"event_title"=>"Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 28),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 7, 29),"event_title"=>"Delta Aquarids","event_end"=>mktime(23, 59, 59, 7, 30),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 1),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 11),"event_title"=>"Perseids Meteor <br><peak>".$info." For Next Two Days Peak Viewing Period</peak>","event_end"=>mktime(23, 59, 59, 8, 13),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 8, 14),"event_title"=>"Perseids Meteor","event_end"=>mktime(23, 59, 59, 8, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 6),"event_title"=>"Draconids","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 10, 20),"event_title"=>"Orionids Meteor","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 4),"event_title"=>"South Taurids","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 11),"event_title"=>"North Taurids","event_end"=>mktime(23, 59, 59, 11, 13),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 13),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 16),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 17),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 19),"event_title"=>"Leonids Meteor","event_end"=>mktime(23, 59, 59, 11, 29),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 11, 30),"event_title"=>"Geminids Meteor","event_end"=>mktime(23, 59, 59, 12, 12),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 13),"event_title"=>"Geminids Meteor","event_end"=>mktime(23, 59, 59, 12, 14),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 16),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 20),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 21),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 22),);
$meteor_events[]=array("event_start"=>mktime(0, 0, 0, 12, 23),"event_title"=>"Ursids Meteor","event_end"=>mktime(23, 59, 59, 12, 25),);
$meteorNow=time();
$meteorOP=false;
foreach ($meteor_events as $meteor_check) {if ($meteor_check["event_start"]<=$meteorNow&&$meteorNow<=$meteor_check["event_end"]) {$meteorOP=true;$meteor_default=$meteor_check["event_title"];}};
//end meteor
//weather34 next meteor event original idea betejuice of cumulus forum..
//weather34 next meteor event original idea betejuice of cumulus forum..
$meteor_nextevent="No Meteor Shower<br>s";
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 23,19),"event_title"=>"Meteor Shower<br> <orange1>Quadrantids</orange1><div class=date><br>Active Dec 28th-Jan 12th
<br><green>Estimated ZHR: </green><orange>120 <br> Peaks <orange>Jan 3rd-4th</orange></div></div>","event_end"=>mktime(23, 59, 59, 1, 2,20),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 24),"event_title"=>"Meteor Shower<br> <orange1>Quadrantids</orange1><div class=date><br>Active Dec 28th-Jan 12th
<br><green>Estimated ZHR: </green><orange>120 <br>Peaks <orange>Jan 3rd-4th</orange></div></div>","event_end"=>mktime(23, 59, 59, 1, 2),);
$meteor_eventsnext[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>"Meteor Shower<br> <orange1>Quadrantids</orange1><div class=date><br>Peak Viewing Now<br><div class=date>
<br><green>Estimated ZHR: </green><orange>120</div></div>","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 1, 2),"event_title"=>"Meteor Shower<br> <orange1>&nbsp; &nbsp;Lyrids</orange1><div class=date><br>Active Apr 18th-Apr 25th<br>
<green>Estimated ZHR: </green><orange>18</orange><br>Peaks <orange>Apr 23rd</orange></div></div>","event_end"=>mktime(23, 59, 59, 4, 20),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 4, 20),"event_title"=>"Meteor Shower<br> <orange1>Lyrids</orange1> <div class=date><br>Peak Viewing Now<br>
<green>Estimated ZHR: </green><orange>18</orange><br>Peaks <orange>Apr 23rd</orange></div></div>","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 4, 22),"event_title"=>"Meteor Shower<br> <orange1>&nbsp; &nbsp;ETA Aquarids </orange1><br><div class=date><br>Active Apr 24th-May 19th<br><green>Estimated ZHR: </green><orange>55 </orange><br> Peaks <orange>May 6th</orange></div></div>","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 5, 6),"event_title"=>"Meteor Shower<br> <orange1>&nbsp; &nbsp;Delta Aquarids</orange1><div class=date><br>Active Jul 21st-Aug 23rd<br><green>Estimated ZHR: </green><orange>16</orange><br> Peaks <orange>Jul 28th</orange></div></div>","event_end"=>mktime(23, 59, 59, 7, 27),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 7, 27),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;Perseids</orange1><div class=date><br>Active Jul 13th-Aug 26th<br>
<green>Estimated ZHR: </green><orange>100</orange><br> Peaks <orange>Aug 11th-13th</orange></div>","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_eventsnext[]=array("event_start"=>mktime(0, 0, 0, 8, 11),"event_title"=>"Meteor Shower<br><orange1> &nbsp; &nbsp;Perseids</orange1> <br><div class=date><br>
<green>Estimated ZHR: </green><orange>100</orange><br> Peaks <orange>Aug 11th-13th</orange></div></div>","event_end"=>mktime(23, 59, 59, 8, 13),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 8, 13),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;Draconids</orange1><div class=date><br>Active October 6th-10th<br>
<green>Estimated ZHR: </green><orange>5</orange><br> Peaks <orange>Oct 9th</orange></div></div>","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 10, 7),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;Orionids</orange1><div class=date><br>Active Oct 21st-Oct 22nd<br>
<green>Estimated ZHR: </green><orange>25</orange><br> Peaks <orange>Oct 22nd</orange></div></div>","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 10, 21),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;South Taurids</orange1><div class=date><br>Active Nov 4th- Nov 5th<br><green>Estimated ZHR: </green><orange>5</orange><br> Peaks <orange>Nov 5th</orange></div></div>","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 5),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;North Taurids</orange1><div class=date><br>Active Nov 11th<br>
<green>Estimated ZHR: </green><orange>5</orange><br> Peaks <orange>Nov 12-13th</orange></div></div>","event_end"=>mktime(23, 59, 59, 11, 13),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 13),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;Leonids</orange1><div class=date><br>Active Nov 5th-Dec 3rd<br>
<green>Estimated ZHR: </green><orange>15</orange><br> Peaks <orange>Nov 18th</orange></div></div>","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 18),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;Geminids</orange1><div class=date><br>Active Nov 30th-Dec 17th<br>
<green>Estimated ZHR: </green><orange>120</orange><br> Peaks <orange>Dec 14th</orange></div></div>","event_end"=>mktime(23, 59, 59, 12, 16),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 15),"event_title"=>"Meteor Shower<br> <orange1> &nbsp; &nbsp;Ursids</orange1><div class=date><br>Active Dec 17th-Dec 24th<br>
<green>Estimated ZHR: </green><orange>5-10</orange><br> Peaks <orange>Dec 23rd</orange></div></div>","event_end"=>mktime(23, 59, 59, 12, 18),);
$meteorNext=time();$meteorOP=false;
foreach ($meteor_eventsnext as $meteor_check) {if ($meteor_check["event_start"]<=$meteorNext&&$meteorNext<=$meteor_check["event_end"]) {$meteorOP=true;$meteor_nextevent=$meteor_check["event_title"];}};
//end meteor nevt event
$meteorinfo3="<svg width='22px' height='22px' viewBox='0 0 16 16'><path fill='#aaa' d='M0 0l14.527 13.615s.274.382-.081.764c-.355.382-.82.055-.82.055L0 0zm4.315 1.364l11.277 10.368s.274.382-.081.764c-.355.382-.82.055-.82.055L4.315 1.364zm-3.032 2.92l11.278 10.368s.273.382-.082.764c-.355.382-.819.054-.819.054L1.283 4.284zm6.679-1.747l7.88 7.244s.19.267-.058.534-.572.038-.572.038l-7.25-7.816zm-5.68 5.13l7.88 7.244s.19.266-.058.533-.572.038-.572.038l-7.25-7.815zm9.406-3.438l3.597 3.285s.094.125-.029.25c-.122.125-.283.018-.283.018L11.688 4.23zm-7.592 7.04l3.597 3.285s.095.125-.028.25-.283.018-.283.018l-3.286-3.553z'/></svg>";

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Meteor Shower<br>s</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
<style>
@font-face{font-family:weathertext;src:url(css/fonts/SFUIDisplay-Medium.woff2) format("woff2");}
html,body{font-size:13px;font-family:Arial, sans-serif;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f8f8f8
  }
.grid > article {
  border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:10px;
  font-size:10px;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;
  -webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  line-height:1
}
.grid > article img {
  max-width: 100%;
}
 
  a{color:#aaa;text-decoration:none} 
.weather34darkbrowser{position:relative;background:0;width:96%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}meteotextshowertext{font-size:1.2rem;color:#009bb4}meteorsvgicon{color:#f5f7fc}  
.moonphasetext{font-size:1.1rem;color:#f5f7fc;position:absolute;display:inline;left:140px;top:80px}
moonphaseriseset{font-size:.9rem;}credit{position:relative;font-size:.8em;top:10%;line-height:.9}
.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:weathertext;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0;line-height:.9}
.actualw{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:weathertext;width:100px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;border-bottom:2px solid rgba(56,56,60,1);
align-items:center;justify-content:center;margin-bottom:10px;top:0}
peak{color:silver;font-size:.8rem}
.mbsmartlogo{position:relative;float:right;top:5px;}
</style>

</style>
<div class="weather34darkbrowser" url="<?php echo date('Y')?> Meteor Showers "></div> 
  
<main class="grid">
  <article>       
<meteotextshowertext>
<?php if ($meteor_default)  {	echo "<meteorsvgicon>".$meteorinfo3."</meteorsvgicon> ".$meteor_default;} 
?></meteotextshowertext><br>Shower Currently Visible<br>
 <?php	echo date('D jS M Y');?>       
</article>  
  
  <article>
  <?php if ($meteor_nextevent)  {echo $meteorinfo3 ," Next ",$meteor_nextevent ;} ?>    
  </article> 
  
  <article>  
   <?php echo $info ;?> <orange>Guide to</orange> <green><?php echo date('Y');?> Major Meteor Showers<br></green> <br>
       <?php echo $meteorinfo;?> <green>Quadrantids</green> Dec 28-Jan 12<br>
       <?php echo $meteorinfo;?> <green>Lyrids</green> Apr 18-Apr 25<br>
       <?php echo $meteorinfo;?> <green>Perseids</green> Jul 13-Aug 26<br>
       <?php echo $meteorinfo;?> <green>Leonids</green> Nov 05-Dec 03<br>
       <?php echo $meteorinfo;?> <green>Geminids</green> Nov 30-Dec 17<br>
       <?php echo $meteorinfo;?> <green>Ursids</green> Dec 17-Dec 24<br>        
   </article> 
   
    <article>
   <?php echo $info ;?> <orange>Viewing Guide</orange><br><green>Meteors</green> are best viewed during the night hours, though meteors enter the atmosphere at any time of the day. They are just harder to see in the daylight apart from dawn and dusk. Any nearby ambient light,Moon light can make it difficult viewing . Meteor showers are best viewed away from the city lights.<br>
              
  </article>  
  
  <article>
   <?php echo $info ;?> <orange>Radio Ham Guide</orange><br>Meteor scatter communications can be used by Ham Radio VHF enthusiasts. Using meteor scatter propagation enables ham radio enthusiasts and also commercial radio communications contacts .Meteor scatter communications using specialised operating techniques allows communications distances up to 2000 km or more on the VHF frequencies.<br>
              
  </article> 
  <article>
  <div class=actualt> &copy; Information</div>  
  <?php echo $info?> CSS/SVG/PHP scripts were developed by <a href="https://weather34.com" title="weather34.com" target="_blank" style="font-size:9px;">weather34.com</a>  for use in the weather34 template &copy; 2015-<?php echo date('Y');?></span>
  <br><br><?php echo $info ;?> Data Provided by <a href="https://en.wikipedia.org/wiki/Meteor_shower" title="https://en.wikipedia.org/wiki/Meteor_shower" target="_blank">International Meteor Organization</a> 
  <div class="mbsmartlogo"><img src="img/weather34-mbsmart-logo.svg" alt="weather34 mb-smart" title="weather34 mb-smart" width="30px"></div>
  </article> 
</main>