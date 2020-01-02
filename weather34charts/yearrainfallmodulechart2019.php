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
	
	include('preload.php');include('../console-settings.php');
	$weatherfile = date('F');
	$file_live=file_get_contents("../mbridge/MBrealtimeupload.txt");
	$meteobridgeapi=explode(" ",$file_live);
	$weather["rain_today"] = $meteobridgeapi[9];

	$conv = 1;
	if ($rainunit == "in") {$conv= 0.0393701;}	
	else if ($rainunit == "mm"){$conv= 1;}
	$interval = 1;
	if ($rainunit == "in") {$interval= 0.5;}	
	else if ($rainunit == "mm"){$interval= 5;}

//interval Y
$raininterval= $weather["rain_today"];
if ($raininterval>=40 ){$raininterval='10';}
else if ($raininterval>=20 ){$raininterval='5';}
else if ($raininterval>=10 ){$raininterval='2';}
else if ($raininterval>=5 ){$raininterval='1';}
else if ($raininterval>=0.1 ){$raininterval='.5';}
else if ($raininterval==0 ){$raininterval='1';}
//Inches
if ($raininterval>=1 && $rainunit == 'in'){$raininterval='2';}
else if ($raininterval>=0.5 && $rainunit == 'in'){$raininterval='2.5';}
else if ($raininterval>=0 && $rainunit == 'in'){$raininterval='1';}
	
	
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
			url: "2019.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[1] >-100)		
				dataPoints1.push({label:rowData[0],y:parseFloat(rowData[5]<?php echo "*". $conv ?>)});
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[1] >-100)		
				dataPoints2.push({label: rowData[0],y:parseFloat(rowData[5]<?php echo "*". $conv ?>)});
				
				
			}
			drawChart(dataPoints1,dataPoints2 );
		}
	}

	
	function drawChart( dataPoints1) {
		var chart = new CanvasJS.Chart("chartContainer2", {
		backgroundColor: "rgba(40, 45, 52,0)",
		animationEnabled: false,
		 
		title: {
            text: " ",
			fontSize: 0,
			fontColor:' #aaa',
			fontFamily: "arial",
        },
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
			gridColor: "#333",
		    labelFontSize: 7.5,
			labelFontColor:' #888',
			lineThickness: 1,
			gridThickness: 1,
			gridDashType: "dot",	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			minimum:-1,		
			interval:50	,
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
		margin: 0,
		interval: 5,			
		lineThickness: 1,		
		gridThickness: 1,	
		gridDashType: "dot",	
        includeZero: false,
		gridColor: "#333",
		labelFontSize: 8,
		labelFontColor:' #888',
		labelFontFamily: "Arial",
		labelFontWeight: "bold",
		labelFormatter: function ( e ) {
        return e.value .toFixed(<?php if ($rainunit == 'mm'){echo '0';} else echo '1';?>);  
         },		 
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#44a6b5",
			labelFontColor: "#fff",
			labelFontSize:8,
			labelBackgroundColor: "#44a6b5",
			labelMaxWidth: 60,
			valueFormatString: "#",
		}	 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
	  margin: 0,
  
 },
		
		
 data: [
		{
			//Barometer
			type: "column",
			color:"#00A4B4",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "none",
			name:"Rainfall",
			dataPoints: dataPoints1,
			yValueFormatString:"##.## <?php echo $rainunit ;?>",
		}

		]
		});

		chart.render();
		
	}
});</script>
<body>
</script>
<div id="chartContainer2" style=" height:150px;margin-top:20px;-webkit-border-radius:4px;border-radius:4px;"></div></div>



</body></html>