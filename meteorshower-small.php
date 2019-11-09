<?php include('settings.php');include('livedata.php');
	####################################################################################################
	#	HOME WEATHER STATION MB SMART TEMPLATE by BRIAN UNDERDOWN 2015-19                              #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	WEATHER34 Meteor Shower: 25TH JANUARY 2018  	                                               #
	# 	   revised November 2019                                                                       #
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
$meteor_nextevent="No Meteor Shower<br>s";
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 23,19),"event_title"=>" Quadrantids <ored>Dec 28th-Jan 12th</ored>","event_end"=>mktime(23, 59, 59, 1, 2,20),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 24),"event_title"=>" Quadrantids <ored>Dec 28th-Jan 12th</ored>","event_end"=>mktime(23, 59, 59, 1, 2),);
$meteor_eventsnext[]=array("event_start"=>mktime(0, 0, 0, 1, 3),"event_title"=>" Quadrantids <ored>Peak Now</ored>","event_end"=>mktime(23, 59, 59, 1, 4),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 1, 2),"event_title"=>" Lyrids Apr <ored>18th-Apr 25th</ored>","event_end"=>mktime(23, 59, 59, 4, 20),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 4, 20),"event_title"=>" Lyrids <ored>Peak Now</ored>","event_end"=>mktime(23, 59, 59, 4, 22),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 4, 22),"event_title"=>" ETA Aquarids <ored>Apr 24th-May 19th</ored>","event_end"=>mktime(23, 59, 59, 5, 6),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 5, 6),"event_title"=>" Delta Aquarids <ored>Jul 21st-Aug 23rd</ored>","event_end"=>mktime(23, 59, 59, 7, 27),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 7, 27),"event_title"=>" Perseids Jul <ored>13th-Aug 26th</ored>","event_end"=>mktime(23, 59, 59, 8, 10),);
$meteor_eventsnext[]=array("event_start"=>mktime(0, 0, 0, 8, 11),"event_title"=>" Perseids <ored>Peak Now","event_end</ored>"=>mktime(23, 59, 59, 8, 13),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 8, 13),"event_title"=>" Draconids October <ored>6th-10th</ored>","event_end"=>mktime(23, 59, 59, 10, 7),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 10, 7),"event_title"=>" Orionids Oct <ored>21st-Oct 22nd</ored>","event_end"=>mktime(23, 59, 59, 10, 21),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 10, 21),"event_title"=>" South Taurids <ored>Nov 4th- Nov 5th</ored>","event_end"=>mktime(23, 59, 59, 11, 5),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 5),"event_title"=>" North Taurids <ored>Nov 11th</ored>","event_end"=>mktime(23, 59, 59, 11, 13),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 13),"event_title"=>" Leonids Nov <ored>5th-Dec 3rd</ored>","event_end"=>mktime(23, 59, 59, 11, 18),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 11, 18),"event_title"=>" Geminids Nov <ored>30th-Dec 17th</ored>","event_end"=>mktime(23, 59, 59, 12, 16),);
$meteor_eventsnext[]=array("event_start"=>mktime(23, 59, 59, 12, 15),"event_title"=>" Ursids Dec <ored>17th-Dec 24th</ored>","event_end"=>mktime(23, 59, 59, 12, 18),);
$meteorNext=time();$meteorOP=false;
foreach ($meteor_eventsnext as $meteor_check) {if ($meteor_check["event_start"]<=$meteorNext&&$meteorNext<=$meteor_check["event_end"]) {$meteorOP=true;$meteor_nextevent=$meteor_check["event_title"];}};
//end meteor nevt event
$meteorinfo3="<svg width='22px' height='22px' viewBox='0 0 16 16'><path fill='#01A4B5' d='M0 0l14.527 13.615s.274.382-.081.764c-.355.382-.82.055-.82.055L0 0zm4.315 1.364l11.277 10.368s.274.382-.081.764c-.355.382-.82.055-.82.055L4.315 1.364zm-3.032 2.92l11.278 10.368s.273.382-.082.764c-.355.382-.819.054-.819.054L1.283 4.284zm6.679-1.747l7.88 7.244s.19.267-.058.534-.572.038-.572.038l-7.25-7.816zm-5.68 5.13l7.88 7.244s.19.266-.058.533-.572.038-.572.038l-7.25-7.815zm9.406-3.438l3.597 3.285s.094.125-.029.25c-.122.125-.283.018-.283.018L11.688 4.23zm-7.592 7.04l3.597 3.285s.095.125-.028.25-.283.018-.283.018l-3.286-3.553z'/></svg>";

?>


 <div class="topframe">
 <div class="meteorsvgicon"> <?php echo $meteorinfo3?></div>
<div class=meteotextshowertext>
<?php if ($meteor_default)  {	echo $meteor_default;} 
?> Shower Currently Visible   
</div>
<div class=nextmeteotextshowertext>
  <?php if ($meteor_nextevent)  {echo " <br>Next Meteor Shower<peak>",$meteor_nextevent ;} ?>    
 </div>