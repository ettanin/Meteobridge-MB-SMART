<?php
	
	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Release: July 2019						  	                                                   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	
	
	include('preload.php');

	$file_live=file_get_contents("../mbridge/MBrealtimeupload.txt");
	$meteobridgeapi=explode(" ",$file_live);	
	$weather["temp"]=$meteobridgeapi[2];  
	$weather["temp_avgtoday"]=$meteobridgeapi[152]; 
	$weather["temp_today_high"]=$meteobridgeapi[26];
    $weather["temp_today_low"]=$meteobridgeapi[28];   
    $weather["dewpoint"]=number_format($meteobridgeapi[4], 1);    
	$weather["humidity"]=number_format($meteobridgeapi[3], 0);
	$weather["wind_speed"]=$meteobridgeapi[17];
	//real feel
    $weather['realfeel']=round(($weather['temp'] + 0.33*($weather['humidity']/100)*6.105*exp(17.27*$weather['temp']/(237.7+$weather['temp']))- 0.70*$weather["wind_speed"] - 4.00), 1);
    $t=7.5*$weather["temp"]/(237.7+$weather["temp"]);
    $et=pow(10, $t);
	$e=6.112*$et*($weather["humidity"]/100);  
	
	$conv = 1;
	if ($tempunit  == 'F') {$conv= '(1.8) +32';}	
	if ($tempunit  =='F') {$interval= '10';}
	if ($tempunit  =='C') {$interval= '5';}
	if ($tempunit  == 'F') {$unit= 'F';}
	if ($tempunit  == 'C') {$unit= 'C';}	


	//F
    if ($tempunit='F') {
        if ($weather["temp_today_high"]<=41 ) {
            $tempcolor= '#4ba0ad';
        } elseif ($weather["temp_today_high"]<50 ) {
            $tempcolor= '#9bbc2f';
        } elseif ($weather["temp_today_high"]<59 ) {
            $tempcolor= '#e6a141';
        } elseif ($weather["temp_today_high"]<77 ) {
            $tempcolor= '#ec5732';
        } elseif ($weather["temp_today_high"]<150 ) {
            $tempcolor= '#d35f50';
        }
    }
	//C
    if ($tempunit='C') {
        if ($weather["temp_today_high"]<=5 ) {
            $tempcolor= '#4ba0ad';
        } elseif ($weather["temp_today_high"]<10 ) {
            $tempcolor= '#9bbc2f';
        } elseif ($weather["temp_today_high"]<15 ) {
            $tempcolor= '#e6a141';
        } elseif ($weather["temp_today_high"]<25 ) {
            $tempcolor= '#ec5732';
        } elseif ($weather["temp_today_high"]<50 ) {
            $tempcolor= '#d35f50';
        }
    }

	//F
    if ($tempunit='F') {
        if ($weather["dewpoint"]<=41) {
            $dewcolor= '#4ba0ad';
        } elseif ($weather["dewpoint"]<50) {
            $dewcolor= '#9bbc2f';
        } elseif ($weather["dewpoint"]<59) {
            $dewcolor= '#e6a141';
        } elseif ($weather["dewpoint"]<77) {
            $dewcolor= '#ec5732';
        } elseif ($weather["dewpoint"]<150) {
            $dewcolor= '#d35f50';
        }
    }
	//C
    if ($tempunit='C') {
        if ($weather["dewpoint"]<=5) {
            $tempcolor= '#4ba0ad';
        } elseif ($weather["dewpoint"]<10) {
            $dewcolor= '#9bbc2f';
        } elseif ($weather["dewpoint"]<15) {
            $dewcolor= '#e6a141';
        } elseif ($weather["dewpoint"]<25) {
            $dewcolor= '#ec5732';
        } elseif ($weather["dewpoint"]<50) {
            $dewcolor= '#d35f50';
        }
    }
	
	
	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR TEMPERATURE DATABASE CHART</title>	
		<script src=../js/jquery.js></script>
		
		
	';
	date_default_timezone_set($TZ);
	$date= date('D jS Y');$weatherfile =date('Y')."/".date('jMY');?>
    <br>
    	<script type="text/javascript">
		// today temperature
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "<?php echo $weatherfile?>.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[2] >-50)
					dataPoints1.push({label: rowData[1],y:parseFloat(rowData[2]*<?php echo $conv ;?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[7] >-50)
					dataPoints2.push({label: rowData[1],y:parseFloat(rowData[9]*<?php echo $conv ;?>)});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

		function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer2", {
		 backgroundColor: "rgba(40, 45, 52,0)",
		 animationEnabled: false,
		 margin: 0,
		
		title: {
            text: "From 00:00 - <?php echo date('H:i')?>",
			fontSize: 0,
			fontColor:' #777',
			fontFamily: "arial",
			margin: -25,
        },
		zoomEnabled: false,
		dataPointWidth: 1,
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "rgba(40, 45, 52,1)",	
			   fontColor: '#aaa',	
			   fontSize: 11,	   
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label} ",
			   shared: true, 
 },
		axisX: {
			gridColor: "#555",
		    labelFontSize: 0,
			labelFontColor:' #777',
			lineThickness: 1,
			gridThickness: 0,
			gridDashType: "dot",	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			interval: 360,
   			intervalType: "hour",
			minimum:0,
			crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#fff",
			labelFontColor: "#fff",
			labelFontSize:9,
			labelBackgroundColor: "#44a6b5",
			labelMaxWidth: 60,
			
		}
			
			},
			
		axisY:{
		margin: 0,
		interval:'auto',
		//maximum: <?php echo $max ;?>,		
		lineThickness: 1,		
		gridThickness: 0,	
		gridDashType: "dot",	
        includeZero: false,
		gridColor: "#555",
		labelFontSize: 8,
		labelFontColor:' #888',		
		labelFontFamily: "Arial",
		labelFontWeight: "bold",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0);  
         },	
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#9aba2f",
			labelFontColor: "#fff",
			labelFontSize:9,
			labelBackgroundColor: "RGBA(208,95,45,1.00)",
			labelMaxWidth: 60,
			valueFormatString: "#0.#",
		}	 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
	  margin: 0,
  
 },
		
		
		data: [
		
		{
			
			type: "spline",			          
			color:"<?php echo $tempcolor?>",
			markerSize:1,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
			markerType: "circle",
			name:" Temperature",
			dataPoints: dataPoints1,
			yValueFormatString: "#0.# °<?php echo $unit ;?>",
			
		},
		{
			type: "spline",
			lineDashType: "dash",
			color:"<?php echo $dewcolor?>",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
			markerType: "circle",
			name:" Dewpoint",
			dataPoints: dataPoints2,
			yValueFormatString: "#0.# °<?php echo $unit ;?>",
			
		}
		

		]
		});
		

		chart.render();
	}
});</script>
<body>

<div id="chartContainer2" style=" height:68px;-webkit-border-radius:4px;border-radius:4px;"></div></div></body></html>