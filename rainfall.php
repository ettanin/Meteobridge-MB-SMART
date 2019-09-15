<?php  //weather34 rain module 15th Feb 2019 //
include_once('livedata.php');include('common.php');?>
<div class="moduleupdatetime"><span><?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $offline. '<offline> Offline </offline>';else echo $online." ".$weather["time"];?></div>  
<div class="weather34i-rairate-bar"><div id="raincontainer"><div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php if ($weather["rain_units"] =='mm' && $weather["rain_today"]){echo $weather["rain_today"]*2.5+1;}else if ($weather["rain_units"] =='in' && $weather["rain_today"]){echo $weather["rain_today"]*25.4*2.5;}?>px;">      
</div></div></div></div>  
<div class="raincontainer1">
<?php if ($weather["rain_units"] =='in'){	echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)."<sup><smallrainunita> ".$weather["rain_units"];}else if ($weather["rain_units"] =='mm' && $weather["rain_today"]<10){echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)."<sup><smallrainunita>".$weather["rain_units"];}else if ($weather["rain_units"] =='mm'){echo '<div class=raintoday1>'.number_format($weather["rain_today"],1)."<sup><smallrainunita>".$weather["rain_units"];}
?></sup></smallrainunita></div></div>
<div class="heatcircle"><div class="heatcircle-content">
<?php  //rain year
echo " &nbsp;<valuetextheading1>".date('Y')."</valuetextheading1> <br><div class=tempconverter1><div class=rainmodulehome><raiblue>";if($weather["rain_year"]>=1000){echo round($weather["rain_year"],0);}else if($weather["rain_year"]<1000){echo $weather["rain_year"];}echo "</raiblue><smallrainunit2>".$weather["rain_units"];?>
<smallrainunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content">
<?php  //rain month
echo " &nbsp;&nbsp;&nbsp;<valuetextheading1 style='text-transform:capitalize'>".strftime('%B',time())."</valuetextheading1> <br><div class=tempconverter1><div class=rainmodulehome><raiblue>".$weather["rain_month"]."</raiblue><smallrainunit2>".$weather["rain_units"];?>

</smallrainunit2></div></div></div></div>
<div class="heatcircle3"><div class="heatcircle-content">
<?php  //rain last hour
echo " &nbsp;&nbsp;<valuetextheading1>".$lang['Last Hour']."</valuetextheading1><br><div class=tempconverter1><div class=rainmodulehome><raiblue>".$weather["rain_lasthour"]."</raiblue><smallrainunit2>".$weather["rain_units"];?>
</smallrainunit2></div></div></div></div>
<div class="heatcircle4"><div class="heatcircle-content">
<?php  //rain last 24 hours
echo " &nbsp;&nbsp;<valuetextheading1>".$lang['Last-Twenty-Four-Hour']."</valuetextheading1><br><div class=tempconverter1><div class=rainmodulehome><raiblue>".$weather["rain_24hrs"]."</raiblue><smallrainunit2>".$weather["rain_units"];?>
</smallrainunit2></div></div></div></div></div>
<div class="rainconverter">
<?php if ($weather["rain_units"] =='in'){echo "<div class=rainconvertercircle>".number_format($weather["rain_today"]*25.400013716,1)."<smallrainunit>mm";}else if ($weather["rain_units"] =='mm'){echo "<div class=rainconvertercircle>".number_format($weather["rain_today"]*0.0393701,2)."<smallrainunit>in";}?></span>
</div></div></div></div>

<div class="rainrateextra">
<div class="rainratetextheading"><?php echo $lang['Rate']?> <?php if ($weather["rain_rate"]>0)echo "<ratevalue>".$weather["rain_rate"]."</ratevalue><smallrainrateunit>".$weather["rain_units"]?></smallrainrateunit></div><div class=rainratebar>
<div class="weather34ratebar" style="width:<?php if ($weather["rain_units"] =='in'){ echo $weather["rain_rate"]*40;}else if ($weather["rain_units"] =='mm'){ echo $weather["rain_rate"]*1.75;}?>px;">
<?php if ($weather["rain_rate"]==0)echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$weather["rain_rate"]."<smallrainrateunit>".$weather["rain_units"]?></smallrainrateunit></div></div>
</div></div></div></div>