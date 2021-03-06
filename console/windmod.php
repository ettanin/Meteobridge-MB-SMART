<?php include('livedata.php');include('common.php');?>
<div class="modulecaption"><?php echo $lang['Avg Wind'];?></div>
<div class="tempcontainer" style="left:-73px;">
<?php 
//kmh
if ($weather["wind_speed"]>75 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Stronggale'] ."</div>";}
else if ($weather["wind_speed"]>=62 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Galeforce'] ."</div>";}
else if ($weather["wind_speed"]>=38 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Strongbreeze']  ."</div>";}
else if ($weather["wind_speed"]>=15 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Moderatebreeze']  ."</div>";}
else if ($weather["wind_speed"]>=8 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Lightbreeze']."</div>";}
else if ($weather["wind_speed"]>=0 && $weather["wind_units"]=="km/h"){echo "<div class='maxdatawind'>".$lang['Calm']."</div>";}
//mph
if ($weather["wind_speed"]>47 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Stronggale'] ."</div>";}
else if ($weather["wind_speed"]>=32 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Galeforce'] ."</div>";}
else if ($weather["wind_speed"]>=25 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Strongbreeze']  ."</div>";}
else if ($weather["wind_speed"]>=9.3 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Moderatebreeze']  ."</div>";}
else if ($weather["wind_speed"]>=4.9 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Lightbreeze']."</div>";}
else if ($weather["wind_speed"]>=0 && $weather["wind_units"]=="mph"){echo "<div class='maxdatawind'>".$lang['Calm']."</div>";}
//kts
if ($weather["wind_speed"]>47 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Stronggale'] ."</div>";}
else if ($weather["wind_speed"]>=32 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Galeforce'] ."</div>";}
else if ($weather["wind_speed"]>=25 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Strongbreeze']  ."</div>";}
else if ($weather["wind_speed"]>=9.3 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Moderatebreeze']  ."</div>";}
else if ($weather["wind_speed"]>=4.9 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Lightbreeze']."</div>";}
else if ($weather["wind_speed"]>=0 && $weather["wind_units"]=="kts"){echo "<div class='maxdatawind'>".$lang['Calm']."</div>";}
//ms
if ($weather["wind_speed"]>47 && $weather["wind_units"]=="m/s"){echo "<div class='maxdatawind'>".$lang['Stronggale'] ."</div>";}
else if ($weather["wind_speed"]>=32 && $weather["wind_units"]=="m/s"){echo "<div class='maxdatawind'>".$lang['Galeforce'] ."</div>";}
else if ($weather["wind_speed"]>=25 && $weather["wind_units"]=="m/s"){echo "<div class='maxdatawind'>".$lang['Strongbreeze']  ."</div>";}
else if ($weather["wind_speed"]>=9.3 && $weather["wind_units"]=="m/s"){echo "<div class='maxdatawind'>".$lang['Moderatebreeze']  ."</div>";}
else if ($weather["wind_speed"]>=4.9 && $weather["wind_units"]=="m/s"){echo "<div class='maxdatawind'>".$lang['Lightbreeze']."</div>";}
else if ($weather["wind_speed"]>=0 && $weather["wind_units"]=="m/s"){echo "<div class='maxdatawind'>".$lang['Calm']."</div>";}
?> 

<?php echo "<div class='hidata'></div>";?> 

<?php //weather34 sez lets look nice 
//kmh
if( $weather["wind_speed"]<=5 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=10 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=30 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=35 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=40 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=75 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=150 && $weather["wind_units"]=="km/h"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
//mph
if( $weather["wind_speed"]<=3.1 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<6.21 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=18.64 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=21.74 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=24.85 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=46.6 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=94 && $weather["wind_units"]=="mph"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
//kts
if( $weather["wind_speed"]<=2.69 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<5.39 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=16.19 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=18.89 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=21.59 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=40.4&& $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=200 && $weather["wind_units"]=="kts"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}

//ms
if( $weather["wind_speed"]<=1.3 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#3b9cac">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<2.7 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#9aba2f">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=8.3333 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#e6a141;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=9.72 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#ec5a34;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=11.11 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d05f2d;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=20.833 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d65b4a;">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
else if( $weather["wind_speed"]<=200 && $weather["wind_units"]=="m/s"){echo '<div class=windbox style="color:#d05f2d;"">'.number_format($weather["wind_speed"],1).'<smalltempunit>'.$weather["wind_units"];}
?>
</div></smalltempunit2>

<?php //windindicator
echo "<windindicator>";
//kmh
if($weather["wind_speed"]<=5 && $weather["wind_units"]=="km/h"){ echo "<blue>".$walkingman."</blue>";}
else if($weather["wind_speed"]<=10 && $weather["wind_units"]=="km/h"){ echo "<green>".$walkingman."</green>";}
else if($weather["wind_speed"]<=40 && $weather["wind_units"]=="km/h"){ echo "<yellow>".$runningslow."</yellow>";}
else if($weather["wind_speed"]<=50 && $weather["wind_units"]=="km/h"){ echo "<orange>".$runningfast."</orange>";}
else if($weather["wind_speed"]<=200 && $weather["wind_units"]=="km/h"){ echo "<red>".$runningfast."</red>";}
//mph
if($weather["wind_speed"]<=3.1 && $weather["wind_units"]=="mph"){ echo "<blue>".$walkingman."</blue>";}
else if($weather["wind_speed"]<=6.21 && $weather["wind_units"]=="mph"){ echo "<green>".$walkingman."</green>";}
else if($weather["wind_speed"]<=21.74 && $weather["wind_units"]=="mph"){ echo "<yellow>".$runningslow."</yellow>";}
else if($weather["wind_speed"]<=75 && $weather["wind_units"]=="mph"){ echo "<orange>".$runningfast."</orange>";}
else if($weather["wind_speed"]<=200 && $weather["wind_units"]=="mph"){ echo "<red>".$runningfast."</red>";}

//ms
if($weather["wind_speed"]<=1.3 && $weather["wind_units"]=="m/s"){ echo "<blue>".$walkingman."</blue>";}
else if($weather["wind_speed"]<=2.7 && $weather["wind_units"]=="m/s"){ echo "<green>".$walkingman."</green>";}
else if($weather["wind_speed"]<=8.33 && $weather["wind_units"]=="m/s"){ echo "<yellow>".$runningslow."</yellow>";}
else if($weather["wind_speed"]<=13.888 && $weather["wind_units"]=="m/s"){ echo "<orange>".$runningfast."</orange>";}
else if($weather["wind_speed"]<=200 && $weather["wind_units"]=="m/s"){ echo "<red>".$runningfast."</red>";}
//kts
if($weather["wind_speed"]<=2.699 && $weather["wind_units"]=="kts"){ echo "<blue>".$walkingman."</blue>";}
else if($weather["wind_speed"]<=5.39 && $weather["wind_units"]=="kts"){ echo "<green>".$walkingman."</green>";}
else if($weather["wind_speed"]<=21.59 && $weather["wind_units"]=="kts"){ echo "<yellow>".$runningslow."</yellow>";}
else if($weather["wind_speed"]<=26.99 && $weather["wind_units"]=="kts"){ echo "<orange>".$runningfast."</orange>";}
else if($weather["wind_speed"]<=200 && $weather["wind_units"]=="kts"){ echo "<red>".$runningfast."</red>";}
echo "</windindicator>";?>

</div></div>

<div class="heatcircle" ><div class="heatcircle-content"><valuetextheading1>Beaufort</valuetextheading1>
<?php  //heat-index/real feel

if ($weather['wind_speed_bft']>=12) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. "&nbsp; $beaufort12";}
else if ($weather['wind_speed_bft']>=11) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. "&nbsp; $beaufort11";}
else if ($weather['wind_speed_bft']>=10) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " &nbsp;$beaufort10";}
else if ($weather['wind_speed_bft']>=9) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " $beaufort9";}
else if ($weather['wind_speed_bft']>=8) {
    echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " $beaufort8";}
    
else if ($weather['wind_speed_bft']>=7) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome30-35c>".$weather['wind_speed_bft']. " &nbsp;$beaufort7";}
else if ($weather['wind_speed_bft']>=6) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['wind_speed_bft']. " &nbsp;$beaufort6";}
else if ($weather['wind_speed_bft']>=5) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome20-25c>".$weather['wind_speed_bft']. " &nbsp;$beaufort5";} 
else if ($weather['wind_speed_bft']>=4) {
        echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['wind_speed_bft']. " &nbsp;$beaufort4";}   
        
else if ($weather['wind_speed_bft']>=3) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome10-15c>".$weather['wind_speed_bft']. " &nbsp;$beaufort3";}
else if ($weather['wind_speed_bft']>=2) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort2";}
else if ($weather['wind_speed_bft']>=1) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort1";} 
else if ($weather['wind_speed_bft']==0) {
            echo "<br><div class=tempconverter1><div class=tempmodulehome0-5c>".$weather['wind_speed_bft']. " &nbsp;$beaufort0";}   
?><smalltempunit2></div></div></div>



<div class="heatcircle2"><div class="heatcircle-content"><valuetextheading1>Beaufort</valuetextheading1>
<?php //weather34 beaufort word description
if ( $weather['wind_speed_bft']>=12){echo "<div class=tempconverter1><div class=tempmodulehome40-50c><valuebeaufort>".$lang['Hurricane'];echo $heatindexalert8;}
else if (  $weather['wind_speed_bft']>=11){echo "<div class=tempconverter1><div class=tempmodulehome35-40c><valuebeaufort>".$lang['Violentstorm'];echo $heatindexalert8;}
else if (  $weather['wind_speed_bft']>=10){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Storm'] ;echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=9){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Stronggale'];echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=8){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Galeforce'];echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=7){echo "<div class=tempconverter1><div class=tempmodulehome30-35c><valuebeaufort>".$lang['Neargale']; echo $heatindexalert8;}
else if ( $weather['wind_speed_bft']>=6){echo "<div class=tempconverter1><div class=tempmodulehome20-25c><valuebeaufort>".$lang['Strongbreeze'];}
else if ( $weather['wind_speed_bft']>=5){echo "<div class=tempconverter1><div class=tempmodulehome20-25c><valuebeaufort>".$lang['Freshbreeze'];}
else if ( $weather['wind_speed_bft']>=4){echo "<div class=tempconverter1><div class=tempmodulehome10-15c><valuebeaufort>".$lang['Moderatebreeze'];}
else if ( $weather['wind_speed_bft']>=3){echo "<div class=tempconverter1><div class=tempmodulehome10-15c><valuebeaufort>".$lang['Gentelbreeze'];}
else if ( $weather['wind_speed_bft']>=2){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Lightbreeze'];}
else if ( $weather['wind_speed_bft']>=1){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Lightair'];}
else if ( $weather['wind_speed_bft']>=0){echo "<div class=tempconverter1><div class=tempmodulehome0-5c><valuebeaufort>".$lang['Calm'];}
?>
</smalltempunit2></div></div>

<div class=thetrendgap>
<?php 
//windrun
echo '<div class=thetrendboxblue>'.$lang['Avg'].' '.$lang['Today'].'';echo '&nbsp;<blue>'.number_format($weather["wind_speed_avg30"],1).'</blue><smalltempunit2>&nbsp;'.$weather["wind_units"].'</smalltempunit2>';?>
</div></div></div></div>

<div class="maxwind">
<?php  //60 Min Avg
echo "60 Min&nbsp;".$lang['Avg']."&nbsp;";
//kmh
if($weather["wind_speed_avg"]>=50 && $weather["wind_units"]=="km/h"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=30 && $weather["wind_units"]=="km/h"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=10 && $weather["wind_units"]=="km/h"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="km/h"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}
//mph
if($weather["wind_speed_avg"]>=31 && $weather["wind_units"]=="mph"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=18.6 && $weather["wind_units"]=="mph"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=6.2 && $weather["wind_units"]=="mph"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="mph"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}
//kts
if($weather["wind_speed_avg"]>=26.9 && $weather["wind_units"]=="kts"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=16.1 && $weather["wind_units"]=="kts"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=5.3 && $weather["wind_units"]=="kts"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="kts"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}
//ms
if($weather["wind_speed_avg"]>=13.8 && $weather["wind_units"]=="m/s"){echo "<red>" .number_format($weather["wind_speed_avg"],1)."</red>&nbsp;<smalltempunit2> ".$windunit;}
else if($weather["wind_speed_avg"]>=8.3 && $weather["wind_units"]=="m/s"){echo "<orange>" .number_format($weather["wind_speed_avg"],1)."</orange>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=2.7 && $weather["wind_units"]=="m/s"){echo "<yellow>" .number_format($weather["wind_speed_avg"],1)."</yellow>&nbsp;<smalltempunit2>".$windunit;}
else if($weather["wind_speed_avg"]>=0 && $weather["wind_units"]=="m/s"){echo "<blue>" .number_format($weather["wind_speed_avg"],1)."</blue>&nbsp;<smalltempunit2>".$windunit;}
?>
</div>