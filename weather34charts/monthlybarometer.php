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
	$weatherfile = date('F');
	$conv = 1;
	if ($pressureunit  == "hPa"){$conv= '1';}
	else if ($pressureunit == 'inHg') {$conv= '0.02953';}	
	$int = 1;
	if ($pressureunit == 'hPa') {$int= '5';}
	else if ($pressureunit == 'inHg') {$int= '0.25';}
	$ymax = 1;
	if ($pressureunit == 'hPa') {$ymax= '1045';}
	else if ($pressureunit == 'inHg') {$ymax= '31.6';}		
	$limit = '0';
	if ($pressureunit == 'inHg') {$limit= '20';}
	else if ($pressureunit  == "hPa") {$limit= '930';}
	
	
	
	
	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR Barometer CHART</title>	
		<script src=../js/jquery.js></script>
		
	';	
	?>
    <br>
    <script type="text/javascript">
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "<?php echo date('Y');?>/<?php echo $weatherfile;?>.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[8] >0)
					dataPoints1.push({label:rowData[0],y:parseFloat(rowData[8]*<?php echo $conv ;?>)});	
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[9] >0)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[9]*<?php echo $conv ;?>)});
					//parseFloat(rowData[13])});
				
			}
			drawChart(dataPoints1,dataPoints2 );
		}
	}

	
	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: "#f5f7fc",
		  animationEnabled: false,
		 
		title: {
            text: " ",
			fontSize: 12,
			fontColor:' #555',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "#f5f7fc",
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label}",
			   shared: true, 
 },
		axisX: {
			gridColor: "#ccc",
		    labelFontSize: 10,
			labelFontColor:' #555',
			lineThickness: 1,
			gridThickness: 1,
			gridDashType: "dot",	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			minimum:0,		
			intervalType:"day",
			xValueType: "dateTime",	
			crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#009bab",
			labelFontColor: "#F8F8F8",
			labelFontSize:10,
			labelBackgroundColor: "#009bab",
		}
			
			},
			
		axisY:{
		title: "Barometer (<?php echo $pressureunit ;?>) Recorded",
		titleFontColor: "#555",
		titleFontSize: 10,
        titleWrap: false,
		margin: 5,
		lineThickness: 1,		
		gridThickness: 1,
		maximum:<?php echo $ymax;?>,
		interval:<?php echo $int;?>,		
        includeZero: false,
		gridColor: "#ccc",
		gridDashType: "dot",
		labelFontSize: 10,
		labelFontColor:' #555',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		enabled: true,
		snapToDataPoint: true,
		labelFormatter: function ( e ) {
        return e.value .toFixed(<?php if ($pressureunit == 'hPa'){echo '0';} else echo '1';?>) + " <?php echo $pressureunit ;?> " ;  
         },		
		crosshair: {
			enabled: true,
			snapToDataPoint: true,	
			color: "#009bab",		
			labelFontColor: "#F8F8F8",
			labelFontSize:12,
			labelBackgroundColor: "#ff832f",
			valueFormatString:"##.## <?php echo $pressureunit ;?>",
		}		 
		
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		
		data: [
		{
			//Barometer
			type: "spline",
			color:"#FF8841",
			markerSize:0,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "none",
			name:"Hi Barometer",
			dataPoints: dataPoints1,
			yValueFormatString:"##.## <?php echo $pressureunit ;?>",
		},
		{
			// not used
			type: "spline",			
			color:"#00A4B4",
			markerSize:0,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "none",
			name:"Lo Barometer",
			dataPoints: dataPoints2,
			yValueFormatString:"##.## <?php echo $pressureunit ;?>",
		}

		]
		});

		chart.render();
	}
});

    </script>
    <link rel="stylesheet" href="weather34chartstyle.css?ver=<?php echo date('jSHi') ;?>">
<body>
<div class="weather34darkbrowser" url="Barometer <?php echo date('F Y') ;?> | Hi: <?php echo $weather["thb0seapressmmax"];?> <?php echo $pressureunit ;?> Lo: <?php echo $weather["thb0seapressmmin"];?> <?php echo $pressureunit ;?>"></div> 
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
<div class="weather34browser-footerlogo"><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="../img/weatherlogo34.svg" width="35px"</img></a></div></div></body></html>