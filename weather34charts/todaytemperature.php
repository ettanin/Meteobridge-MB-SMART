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
	
	include('chartslivedata.php');header('Content-type: text/html; charset=utf-8');
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
	
	
	$conv = 1;
	if ($tempunit  == 'F') {$conv= '(1.8) +32';}	
	$max = 50;
	if ($tempunit  == 'F') {$max= '120';}	
	$interval = 5;
	if ($tempunit  == 'F') {$interval= '10';}

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
	
	$date= date('D jS Y');$weatherfile = date('dmY');?>
    <br>
    	<script type="text/javascript">
		// today temperature
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "result2.csv",
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
					dataPoints2.push({label: rowData[1],y:parseFloat(rowData[7]*<?php echo $conv ;?>)});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

		function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: "#f5f7fc",
		 animationEnabled: false,
		 margin: 10,
		
		title: {
            text: "",
			fontSize: 11,
			fontColor:' #555',
			fontFamily: "arial",
			margin: 10,
        },
		dataPointWidth: 1,
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "#f5f7fc",				   		   
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label} ",
			   shared: true, 
			   
			   
    
 },
		axisX: {
			gridColor: "#aaa",
		    labelFontSize: 10,
			labelFontColor:' #555',
			lineThickness: 1,
			gridThickness: 1,
			gridDashType: "dot",	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			interval: 6,
   			intervalType: "hour",
			minimum:0,
			crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#4a636f",
			labelFontColor: "#F8F8F8",
			labelFontSize:10,
			labelBackgroundColor: "#44a6b5",
			
		}
			
			},
			
		axisY:{
		title: "Temperature | Dewpoint (°<?php echo $tempunit ;?>) Recorded",
		titleFontColor: "#555",
		titleFontSize: 10,
        titleWrap: false,
		margin: 10,
		interval:1,
		//maximum: <?php echo $max ;?>,		
		lineThickness: 1,		
		gridThickness: 1,	
		gridDashType: "dot",	
        includeZero: false,
		gridColor: "#aaa",
		labelFontSize: 11,
		labelFontColor:' #555',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) + "°<?php echo $tempunit ;?>" ;  
         },		 
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#9aba2f",
			labelFontColor: "#fff",
			labelFontSize:12,
			labelBackgroundColor: "#ff832f",
			valueFormatString: "#0.# °<?php echo $tempunit ;?>",
		}	 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
	  margin: 10,
  
 },
		
		
		data: [
		{
			type: "spline",
			color:"#ff8841",
			markerSize:0,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "circle",
			name:" Temperature",
			dataPoints: dataPoints1,
			yValueFormatString: "#0.# °<?php echo $tempunit ;?>",
			
		},
		{
			
			color:"#00A4B4",
			type: "spline",			
			markerSize:0,
			showInLegend:true,
			legendMarkerType: "triangle",
			lineThickness: 2,
			markerType: "circle",
			name:" DewPoint",
			dataPoints: dataPoints2,
			yValueFormatString: "#0.# °<?php echo $tempunit ;?>",
			
		}

		]
		});

		chart.render();
	}
});

    </script>
    
</head>
<link rel="stylesheet" href="weather34chartstyle.css?ver=<?php echo date('jSHi') ;?>">
<body>
<div class="weather34darkbrowser" url="<?php echo date('l') ;?> Temp Hi:<?php echo $weather["temp_today_high"]. "$tempunit" ;?> Temp Lo:<?php echo $weather["temp_today_low"]. "$tempunit" ;?> | Dew Hi:<?php echo $weather["dewmax"]. "$tempunit" ;?> Dew Lo:<?php echo $weather["dewmin"]."$tempunit" ;?>"></div> 
<div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
<div id="chartContainer" class="chartContainer"></div></div>
<div class="weather34browser-footer">
<span style="position:absolute;color:#fff;font-family:arial;padding-top:5px;margin-left:25px;border-radius:3px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>
<a href="https://weather34.com/homeweatherstation/" title="https://weather34.com" target="_blank"> 
<span style="color:#00A4B4;"><?php echo $chartversionmysql  ;?> CSS & PHP scripts by weather34</span> </a></span>
<span style="position:absolute;color:#aaa;font-family:arial;padding-top:5px;margin-left:25px;display:block;margin-top:12px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank"><?php echo $creditschart ;?> </a></span>
<div class="weather34browser-footerlogo"><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="../img/weatherlogo34.svg" width="35px"</img></a></div></div>
</body>
<script src='canvasJs.js'></script>
</html>