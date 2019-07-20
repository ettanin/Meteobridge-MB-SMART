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
	$weatherfile = date('Y');
	$conv = 1;
	if ($windunit == 'mph') {$conv= '2.23694';}
	else if ($windunit == 'm/s') {$conv= '1';}
	else if ($windunit == 'km/h'){$conv= '3.6';}
	
	//echo $conv;
?>
    
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR WIND YEAR CHART</title>	
		<script src=../js/jquery.js></script>
		
	
	
    <br>
    <script type="text/javascript">
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "<?php echo $weatherfile;?>.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�/g,'').split(',');
				if ( rowData.length >1)
					dataPoints1.push({label: rowData[0],y:parseFloat(rowData[6]*<?php echo $conv;?>)});
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�/g,'').split(',');
				if ( rowData.length >1)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[7]*<?php echo $conv;?>)});
					//parseFloat(rowData[13])});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

	
	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer2", {
		  backgroundColor: "rgba(40, 45, 52,.4)",
		 animationEnabled: false,
		 margin: 0,
		 
		title: {
            text: " ",
			fontSize: 10,
			fontColor:' #555',
			fontFamily: "arial",
        },
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
			gridColor: "#333",	
		    labelFontSize: 6,
			labelFontColor:' #aaa',
			lineThickness: 1,
			gridThickness: 1,	
			gridDashType: "dot",
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			minimum:-0.5,
			interval:'auto',
			intervalType:"month",
			xValueType: "dateTime",	
			crosshair: {
			enabled: true,
			snapToDataPoint: true,
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelMaxWidth: 60,
			labelBackgroundColor: "#44a6b5",
		}			
			},
			
		axisY:{
			
		title: "",
		titleFontColor: "#555",
		titleFontSize: 0,
        titleWrap: false,
		margin: 10,
		lineThickness: 1,		
		gridThickness: 1,
		gridDashType: "dot",		
        includeZero: true,
		minimum:0,
		interval:'auto',
		gridColor: "#333",	
		labelFontSize: 7,
		labelFontColor:' #aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0);  
         },		
			 
		 crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#39739f",
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelBackgroundColor: "#d35d4e",
			labelMaxWidth: 60,
			valueFormatString:"#0.#",
		}	
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		
		data: [
		{
			//wind gust
			type: "column",
			color:"#d35d4e",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "none",
			name:"Max Wind Speed",
			dataPoints: dataPoints1,
			yValueFormatString:"#0.# <?php echo $windunit ;?>",
		},
		{
			// wind speed
			type: "column",
            lineDashType: "dashed",
			color:"#44a6b5",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 3,
			markerType: "circle",
			name:"Average Wind Speed",
			dataPoints: dataPoints2,
			yValueFormatString:"#0.# <?php echo $windunit ;?>",
		}

		]
		});

		chart.render();
	}
});

   </script>
<body>
<div id="chartContainer2" style="width:auto;height:125px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02);box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;"></div></div></body>
</html>