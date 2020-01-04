<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class="modulecaption">
<?php echo $lang['Rainfall']?> <blue1><?php echo $weather["rain_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata' style='margin-left:10px'><blue>". $weather["rain_lasthour"]."</blue><smalltempunit4>&nbsp; ".$weather["rain_units"]."</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'><blue>".$weather["rain_rate"]."</blue><smalltempunit4>&nbsp;".$weather["rain_units"]."</smalltempunit4></div>";?>
<?php echo "<div class='hidata'>".$lang['Last Hour']."</div>";?> 
<?php echo "<div class='lodata'>Rate</div>";?>
<?php //weather34 sez lets make the rain total for today look nice 
if ($weather["rain_units"]=="mm"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],1).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
if ($weather["rain_units"]=="in"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],2).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
?>
</div></smalltempunit></span></div>
</div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //last 24hrs
echo "<valuetextheading1>".$lang['Last-Twenty-Four-Hour']."</valuetextheading1><br><div class=tempconverter1><div class=tempmodulehome0-5c ><blue>".$weather["rain_24hrs"]."</blue>&nbsp;<smalltempunit2>".$weather["rain_units"];
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
<div class=thetrendboxblue>
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