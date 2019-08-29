<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);?>
<div class="moduleupdatetime"><span><?php if(file_exists($livedata2)&&time()- filemtime($livedata2)>300)echo '<offlinenew></offlinenew> Offline';else echo "<onlinenew></onlinenew> ".$weather["time"];?></div>  
<?php 
$livedata2 = 'weatherflow/weatherflow.txt';
$livedataFormat2=='meteobridge-wf';
$file_live2=file_get_contents($livedata2);
$weatherflow=explode(" ",$file_live2);
$year=substr($weatherflow[0],6);
$weather["wftime"]=filemtime($livedata2);
//first air sensor
$weather["lightning2"]=$weatherflow[76];
$weather["lightning2km"]=$weatherflow[75];
$weather["lightning2max"]=$weatherflow[77];
$weather["lightning2maxdist"]=$weatherflow[75];
$weather["lightning2timeago"]=$weatherflow[76];
$weather["lightning2month"]=$weatherflow[78];
$weather["lightning2year"]=$weatherflow[79];
$weather["lightning2last10"]=$weatherflow[192];
if ($weatherflow[192]=="--"){$weatherflow[192]=0;}
?>
 
<?php //weather34 timeago lightning
$lightningseconds = $weather["lightning2timeago"];function convert($lightningseconds){$weather34timeago = "";$days = intval(intval($lightningseconds) / (3600*24));
$hours = (intval($lightningseconds) / 3600) % 24;$minutes = (intval($lightningseconds) / 60) % 60;$seconds = (intval($lightningseconds)) % 60;
if($days> 1){$weather34timeago .= "$days Days ";}
else {if($days>0){$weather34timeago .= "$days Day ";}
if($hours > 1){$weather34timeago .= "$hours hrs ";}
else if($hours >=0){$weather34timeago .= "$hours hr ";}
if($minutes > 1){$weather34timeago .= "$minutes minutes ";}
else if($minutes >=0){$weather34timeago .= "$minutes minute ";}
}return $weather34timeago;}

?>
<body>
<div class="lightningdistconverter">
<?php
//distance
if($weather["lightning2km"]=='--'){echo "<div class=tempconvertercirclegreen>".$lang['Quiet']."<smallrainunit></smallrainunit>";}
else if($weather["lightning2km"]<5){echo "<div class=tempconvertercirclered>".$weather["lightning2km"]."<smallrainunit>km</smallrainunit>" ;}
else if($weather["lightning2km"]<30){echo "<div class=tempconvertercircleorange>".$weather["lightning2km"]."<smallrainunit>km</smallrainunit>" ;}
else if($weather["lightning2km"]<100){echo "<div class=tempconvertercircleyellow>".$weather["lightning2km"]."<smallrainunit>km</smallrainunit>" ;}
?></div></div>



<div class="simsekcontainer">
<a class="weather34tipl" data-weather34tipl="<?php echo date('Y').":"?><?php echo $weather["lightning2year"]+$weather["lightning3year"]?> <?php echo date('F').":"?><?php echo $weather["lightning2month"]+$weather["lightning3month"]?>">
<div class="simsekdata"><?php echo $lang['Strikes']?></div>

<?php //weather34 sez lets make the temperature look nice 
if($weather["lightning2max"]>0){echo '<div class=simsek>'.number_format($weather["lightning2max"]+$weather["lightning3max"],0,',','');}
else if($weather["lightning2max"]==0){echo '<div class=simsek>'.number_format($weather["lightning2max"]+$weather["lightning3max"],0,',','');}?>
</smalltempunit></div>
<div class="simsektoday"><?php echo $lang['Lightning Today']?></div></div></div></div></div></a>

<div class="lightninginfo">
<?php echo $lang['Strikes Recorded']?>
<?php //weatherflow air lightning month current
echo "<lightningannualx>".strftime('%B',time()).":<lorange> " .str_replace(",","",$weather["lightning2month"])." </lorange></lightningannual>";?>
<?php  //weatherflow air lightning year current
echo "<lightningannualx1>".$lang['Total']." ".date('Y').":<lorange> " .str_replace(",","",$weather["lightning2year"])." </lorange>";?>
<?php  //weatherflow air lightning output
if ($lightningseconds <61 ){ echo "<timeago>".$lang['Last Strike Detected']."<br> <agolightning>Now ";}
else if ($lightningseconds >=61 ) echo "<timeago>".$lang['Last Strike Detected']."<br> <agolightning>", convert($lightningseconds)," ago";?>
</div>