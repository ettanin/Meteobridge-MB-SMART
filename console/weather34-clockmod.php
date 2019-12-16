<?php include('livedata.php');header('Content-type: text/html; charset=utf-8');	?>
<div class="online">
<?php if(file_exists($livedata)&&time()- filemtime($livedata)>300)echo $wirelessoffline;else echo $wireless?></div>
<div class="indoorclock">  <?php echo $hometemp." " .$weather["temp_indoor"] . '<smalltempunit2>&deg;'.$weather["temp_units"] ?></smalltempunit2>
<?php 
if($weather["temp_indoor_trend"] >0)echo $risingsymbolsmall;
else if($weather["temp_indoor_trend"]<0)echo $fallingsymbolsmall;?>
</div>  
  <div class="clock">
  <span id="hour"></span>
  <span id="minute"></span>
  <span id="second"></span> 
 </div>   
  <div class="thedate">
  <span id="year"></span>
  <span id="month"></span>
  <span id="date"></span>
  <span id="day"></span>
  </div></div>