<?php require_once('livedata.php');require_once('common.php');date_default_timezone_set($TZ);
$raintimeago=$originalDate124;$seconds_ago = (time() - strtotime($raintimeago));?>
<div class="modulecaption"><?php echo $lang['Rainfall']?>  <blue1><?php echo $weather["rain_units"]?></blue1></div>
<div class="tempcontainer">
<?php echo "<div class='maxdata' style='margin-left:10px'><blue>". $weather["rain_lasthour"]."</blue><smalltempunit4>&nbsp; ".$weather["rain_units"]."</smalltempunit4></div>";?> 
<?php echo "<div class='mindata'><blue>".$weather["rain_rate"]."</blue><smalltempunit4>&nbsp;".$weather["rain_units"]."</smalltempunit4></div>";?>
<?php echo "<div class='hidata'>".$lang['Last Hour']."</div>";?> 
<?php echo "<div class='lodata'>Rate</div>";?>
<?php //weather34 sez lets make the rain look nice 
if ($weather["rain_units"]=="mm"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],1).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
if ($weather["rain_units"]=="in"){
echo '<div class=rainbox >'.number_format($weather['rain_today'],2).'<smalltempunit4> '.$weather["rain_units"].'</smalltempunit4>';}
?>
</div></smalltempunit>
<div class="temptrendphrase" style="font-size:.7em;margin-left:15px;width:200px">
<?php  //last rain 
    if ($seconds_ago >= 200000 && $meteobridgeapi[124]>0) {
    echo $preciprain;
     } else if ($seconds_ago >= 172800 && $meteobridgeapi[124]>0) {
         echo $lang['Last Rainfall']. ' <blue>'.intval($seconds_ago / 86400) . ' </blue><tunit1>'.$lang['Days'].'</tunit1></blue> '.$lang['Ago'].'</thevalue>';
     } elseif ($seconds_ago >= 86400 && $meteobridgeapi[124]>0) {
         echo $lang['Last Rainfall']. ' <blue>'.intval($seconds_ago / 86400) . ' </blue><tunit1>'.$lang['Day'].'</tunit1></blue> '.$lang['Ago'].'</thevalue>';
     } elseif ($seconds_ago >= 7200 && $meteobridgeapi[124]>0) {
         echo $lang['Last Rainfall']. ' <blue>'.intval($seconds_ago / 3600) . ' </blue><tunit1>'.$lang['Hours'].'</tunit1></blue> '.$lang['Ago'].'</thevalue>';
     } elseif ($seconds_ago >= 3600 && $meteobridgeapi[124]>0) {
         echo $lang['Last Rainfall']. ' <blue>'.intval($seconds_ago / 3600) . ' </blue><tunit1>'.$lang['Hour'].'</tunit1></blue> '.$lang['Ago'].'</thevalue>';
     } elseif ($seconds_ago > 60 && $meteobridgeapi[124]>0) {
         echo $lang['Last Rainfall']. ' <blue>'.intval($seconds_ago / 60) . ' </blue><tunit1>'.$lang['Minutes'].'</tunit1></blue> '.$lang['Ago'].'</thevalue>';
     } elseif ($seconds_ago <= 60 && $meteobridgeapi[124]>0) {
         echo $lang['Last Rainfall']. ' <blue>'.intval($seconds_ago / 60) . ' </blue><tunit1>'.$lang['Minutes'].'</tunit1></blue> '.$lang['Ago'].'</thevalue>';} ?>
</span></div>
</div></div>

<div class="heatcircle"><div class="heatcircle-content">
<?php  //last 24hrs
echo "<valuetextheading1>&nbsp;&nbsp;&nbsp;".$lang['Last-Twenty-Four-Hour']." </valuetextheading1>
<br><div class=tempconverter1><div class=tempmodulehome0-5c >".$weather["rain_24hrs"]."&nbsp;<smalltempunit2>".$weather["rain_units"];
?><smalltempunit2></div></div></div>

<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1><?php echo date('Y')?> <?php echo $lang['Total']?></valuetextheading1>
<div class=tempconverter1><div class=tempmodulehome0-5c>
<?php //year total
echo $weather["rain_year"]."&nbsp;<smalltempunit2>". $weather["rain_units"];?>
</smalltempunit2></div></div></div></div></div>