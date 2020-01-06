<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class="modulecaption" style="margin-top:6px;">Rainfall <blue1><?php echo $weather["rain_units"]?></blue1></div>

<div class="tempcontainer">
<div class="weather34i-rairate-bar">
<div id="raincontainer">
<div id="weather34rainbeaker">
<div id="weather34rainwater" style="height:<?php if ($weather["rain_units"] =='mm' && $weather["rain_today"]){echo $weather["rain_today"]*2.5+1;}
else if ($weather["rain_units"] =='in' && $weather["rain_today"]){echo $weather["rain_today"]*25.4*2.5;}?>px;">      
</div></div></div></div> 


<div class="raincontainer1">
<?php if ($weather["rain_units"] =='in'){	echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)."<smallrainunit2b> ".$weather["rain_units"];}
else if ($weather["rain_units"] =='mm' && $weather["rain_today"]<10){echo '<div class=raintoday1>'.number_format($weather["rain_today"],2)." <smallrainunit2b>".$weather["rain_units"];}
  else if ($weather["rain_units"] =='mm'){
  echo '<div class=raintoday1>'.number_format($weather["rain_today"],1)."<smallrainunit2b>".$weather["rain_units"];}
?></smallrainunit2b></div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //last 24 hours rainfall or current rain rate
if ($weather["rain_rate"]>0){
  echo "<valuetextheading1>".$lang['Rain']." Rate </valuetextheading1><br><div class=tempconverter1>
  <div class=tempmodulehome0-5c ><blue>".$weather["rain_rate"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
}
else echo "<valuetextheading1>".$lang['Last-Twenty-Four-Hour']." </valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c ><blue>".$weather["rain_24hrs"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div></div>
<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo date('Y');?> <?php echo $lang['Total']?></valuetextheading1>
<?php //rainfall year
echo "<div class=tempconverter1><div class=tempmodulehome0-5c><blue>". $weather["rain_year"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];?>
</smalltempunit2></div></div></div>
<div class="heatcirclerainmonth"><div class="heatcircle-content"><valuetextheading1><?php echo $lang['Month'];?> <?php echo $lang['Total']?></valuetextheading1>
<?php //rainfall month current
echo "<div class=tempconverter1><div class=tempmodulehome0-5c><blue>". $weather["rain_month"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];?>
</smalltempunit2></div></div>

<div class=theraingap>
<div class=thetrendboxblue style="margin-left:-120px">
<?php
  // *rainfall hours or minutes ago if within last 24 hours
  // *rain yesterday if greater than 0 is displayed if no rain last 24 hours 
  // *if then rain yesterday is 0 rain last month is displayed 
  if ($seconds_ago >= 86400) {
  // rain yesterday if greater than 0 is displayed if no rain last 24 hours 
  if ($weather["rainydmax"]>0) {echo $lang['Yesterday'].'&nbsp;<blue>'.$weather["rainydmax"]. '</blue>&nbsp;<smalltempunit2>'.$weather["rain_units"].'</smalltempunit2>';}
  // yesterday is 0 rain last month is displayed 
  else echo $lastMonth = date('F', strtotime("-1 month")) .$lastMonth.'&nbsp;<blue>'.$weather["rainlastmonth"]. '</blue>&nbsp;<smalltempunit2>'.$weather["rain_units"].'</smalltempunit2>';}
  // weather34 sez lets get rainfall hours or minutes ago if within last 24 hours
  else if ($seconds_ago >= 7200) {   
  echo $lang['Rainfall'].'&nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp;'.$lang['Hours'];echo "&nbsp;".$lang['Ago'];}
  else if ($seconds_ago >= 3600) {
  echo $lang['Rainfall'].'&nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp;'.$lang['Hour'];echo "&nbsp;".$lang['Ago'];}
  else if ($seconds_ago > 60) {
  echo $lang['Rainfall'].'&nbsp;<blue>'.intval($seconds_ago / 60) .'</blue>&nbsp;'.$lang['Minutes'];echo "&nbsp;".$lang['Ago'];}
  else if ($seconds_ago <= 60) {
  echo $lang['Rainfall'].'&nbsp;<blue>'.intval($seconds_ago / 3600) .'</blue>&nbsp;'.$lang['Minute'];echo "&nbsp;".$lang['Ago'];}
?>
</div></div>