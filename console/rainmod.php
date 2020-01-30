<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class=modulecaptionrainrate>
<?php
// *rainfall hours or minutes ago if within last 24 hours
// *rain yesterday if greater than 0 is displayed if no rain last 24 hours 
if ($seconds_ago >= 86400) {
// rain last 24hr is displayed 
echo $lang['Last-Twenty-Four-Hour'].'&nbsp;<blue>'.$weather["rain_24hrs"]. '</blue>&nbsp;<smalltempunit2>'.$weather["rain_units"].'</smalltempunit2>';}
// weather34 sez lets get rainfall hours or minutes ago if within last 24 hours
else if ($seconds_ago >= 7200) {   
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp; Hours Ago'; }
else if ($seconds_ago >= 3600) {
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp; Hour Ago'; }
else if ($seconds_ago > 60) {
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 60) .'</blue>&nbsp; Mins Ago'; }
else if ($seconds_ago <= 60) {
  echo 'Rainfall &nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp; Min Ago'; }
?>
</div>
<div class="modulecaptionrain"><?php echo $lang['Rainfall']?></div>

<div class="tempcontainer" style="margin-left:40px;margin-right:35px;">
<div class="weather34i-rairate-bar">
<div id="raincontainer">
<div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php if ($weather["rain_units"] =='mm' && $weather["rain_today"]){echo $weather["rain_today"]*2.5+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]){echo $weather["rain_today"]*25.4*2.5;}?>px;">      
</div></div></div></div> 

<?php //if rain last hour show rain umbrella icon
echo "<umbrella>";if($weather["rain_lasthour"]>0){ echo "<blue>".$umbrella."</blue>";}echo "</umbrella>";?>

<div class="raincontainer1">
<?php if ($weather["rain_units"] =='in'){	echo '<div class=raintoday1>'.number_format($weather["rain_today"],2);}
else if ($weather["rain_units"] =='mm' && $weather["rain_today"]<10){echo '<div class=raintoday1>'.number_format($weather["rain_today"],2);}
else if ($weather["rain_units"] =='mm'){  echo '<div class=raintoday1>'.number_format($weather["rain_today"],1);}
?></div>
<?php //rain units
if ($weather["rain_units"] =='mm'){echo "<rainunitmm>mm </rainunitmm>";}
if ($weather["rain_units"] =='in'){echo "<rainunitin>in </rainunitin>";}
?></div>

<div class="heatcirclerain" style="margin-left:100px;"><div class="heatcircle-content">
<?php  //Current Year Total
echo "<valuetextheading1>".date('Y')." ".$lang['Total']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c ><blue>".$weather["rain_year"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content">
<valuetextheading1><?php echo $lang['Month'];?> <?php echo $lang['Total']?></valuetextheading1>
<?php //Current Month Total
echo "<div class=tempconverter1><div class=tempmodulehome0-5c><blue>". $weather["rain_month"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];?>
</smalltempunit2></div></div></div>

<div class="heatcirclerain1" ><div class="heatcircle-content">
<div class="rainrateextra">
<valuetextheading1><?php echo $lang['Rain']?> Rate per/hr</valuetextheading1>
<div class=rainratebar>
<div class="weather34ratebar" style="width:
<?php //weather34 rain rate bar 
if ($weather["rain_rate"]>1.1811 && $weather["rain_units"] =='in'){echo 'background: rgb(58,139,156);
background: linear-gradient(90deg, rgba(58,139,156,1) 0%, rgba(58,139,156,1) 57%, rgba(238,95,117,0.03632478632478631) 100%);';}
if ($weather["rain_rate"]>30 && $weather["rain_units"] =='mm'){echo 'background: rgb(58,139,156);
background: linear-gradient(90deg, rgba(58,139,156,1) 0%, rgba(58,139,156,1) 57%, rgba(238,95,117,0.03632478632478631) 100%);';}  
else if ($weather["rain_units"] =='mm'){echo $weather["rain_rate"]*3;}
else if ($weather["rain_units"] =='in'){echo $weather["rain_rate"]*80;}?>px;">
<rainratevalue>
<?php echo $weather["rain_rate"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"]."</smalltempunit2>";?></rainratevalue>
</div></div></div>
