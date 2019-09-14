<?php include('livedata.php');include('common.php');date_default_timezone_set($TZ);header('Content-type: text/html; charset=utf-8');error_reporting(0);?>
<body>
<?php 
 //weather34 weatherflow air lightning API only
$url2 = 'https://swd.weatherflow.com/swd/rest/observations/station/'.$weatherflowID.'?api_key=5675886d-24b0-2a37-107e-b5076d5e1d9f'; 
$ch2 = curl_init($url2);$filename2 = 'jsondata/weatherflow.txt';$complete_save_loc2 = $filename2; 
$fp2 = fopen($complete_save_loc2, 'wb'); curl_setopt($ch2, CURLOPT_FILE, $fp2);curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_exec($ch2);curl_close($ch2);fclose($fp2);?>
<?php 
//weather34 weatherflow air lightning
$file1 = 'jsondata/weatherflow.txt';$url = $file1;$content = file_get_contents($url);$json = json_decode($content, true); 
foreach($json['obs'] as $item){$weatherflow['lastlightningtime']  = $item['lightning_strike_last_epoch'];   $weatherflow['lightningdistance']  = $item['lightning_strike_last_distance'];
$weatherflow['lightning']  = $item['lightning_strike_count'];   $weatherflow['lightning3hr']  = $item['lightning_strike_count_last_3hr'];}?>
<div class="topframe">
<div class="wfstrike">
<?php //weather34 wf lightning
 echo "<wfstriketoday>",$weatherflow["lightning3hr"]  ;?></wfstriketoday></div>
 
<div class="strikes-today"><?php echo $lang['Strikes'];?></div></div>
<div class="last-three-hrs"><?php echo $lang['Last Three Hours'];?></div>
<div class="yearwordlightningbig">Lightning Strikes</div> 

<div class='wflaststrike'>
<?php 
if ($windunit == 'mph'){echo "<spanfeelstitle>".$lang['Distance']."<orange> " .number_format($weatherflow['lightningdistance']*0.621371,1). "  </orange>mi";}else  echo "<spanfeelstitle>".$lang['Distance']."<orange> " .$weatherflow['lightningdistance']. "  </orange>km";?>
<br>
<?php
	echo "<spanfeelstitle>".$lang['Detected']."<orange> ";
 	//Revised August 2019 now shows time passed since last strike for weathrflow AIR 
	$weather34timeago=date('Y-m-d H:i:s',$weatherflow['lastlightningtime']);
	$weather34timepassed = timeAgo($weather34timeago); //$weather34timeago is in timestamp (Y-m-d H:i:s)
	//Lets make it time passed for weatherflow strikes 
	function timeAgo($weather34timeago){
    $weather34timeago = strtotime($weather34timeago); $cur_time   = time(); $weather34timepassed = $cur_time - $weather34timeago;
    $seconds = $weather34timepassed ; $minutes = round($weather34timepassed / 60 ); $hours = round($weather34timepassed / 3600);
    $days = round($weather34timepassed / 86400 );$weeks = round($weather34timepassed / 604800);
    $months = round($weather34timepassed / 2600640 );$years = round($weather34timepassed / 31207680 );
    // Strike Seconds Just Now	
	if($seconds <= 60){return "Just Now!";}
    // Strike Minutes
    else if($minutes <=60){if($minutes==1){return "1 min ago";}else{echo "$minutes mins $minutesago";}}
    //Strike Hours
    else if($hours <=24){if($hours==1){return "1 hr ago";}else{echo "$hours hrs ago";}}
    //Strike Days
    else if($days <= 1000){if($days==1){return "Yesterday";}else{echo "$days days ago";}}}
	//weather34 weather34 last detected ago
	echo " </orange>";
	//echo $weatherflow['lastlightningtime'];
?></div>