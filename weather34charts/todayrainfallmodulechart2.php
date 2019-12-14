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
	$conv = 1;
	if ($rainunit == 'in') {$conv= '0.0393701';}	
	else if ($rainunit == 'mm'){$conv= '1';}
	$interval = 1;
	if ($rainunit == 'in') {$interval= '0.5';}	
	else if ($rainunit == 'mm'){$interval= '5';}
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR RAINFALL DATABASE CHART</title>	
		<script src=../js/jquery.js></script>
		
		
	';
	
	$date= date('D jS Y');$weatherfile = date('Y')."/".date('jMY');?>
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
				if ( rowData[4]>-1)
					dataPoints1.push({label: rowData[1],y:parseFloat(rowData[4]<?php echo "*". $conv ?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[8]>-1)
					dataPoints2.push({label: rowData[1],y:parseFloat(rowData[10]<?php echo "*". $conv ?>)});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

		function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer2", {
		 backgroundColor: "rgba(40, 45, 52,0)",
		 animationEnabled: false,		
		
		title: {
            text: " ",
			fontSize: 0,
			fontColor:' #aaa',
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
			lineThickness: 1,
			gridThickness: 1,
			gridDashType: "dot",	
			labelFontColor:' #888',
			labelFontFamily: "Arial",
			labelFontWeight: "bold",
			labelFontSize:7.5,
			interval: 18,
   			intervalType: "hour",
			minimum:0,
			crosshair: {
			enabled: true,
			snapToDataPoint: true,				
			labelFontSize:7,
			labelBackgroundColor: "#44a6b5",
			labelMaxWidth: 60,
		}
			
			},
			
		axisY:{
		title: "",
		titleFontColor: "#555",
		titleFontSize: 0,
        titleWrap: false,
		margin: 3,
		lineThickness: 1,	
		interval:1,	
		gridThickness: 1,	
		gridDashType: "dot",	
        includeZero:true,		
		gridColor: "#333",
		labelFontSize: 8,
		labelFontColor:' #888',
		labelFontFamily: "Arial",
		labelFontWeight: "bold",
		labelFormatter: function ( e ) {
        return e.value .toFixed(<?php if ($rainunit == 'mm'){echo '0';} else echo '1';?>) + " <?php echo $rainunit ;?> " ;  
         },		 
		 crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#009bab",
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelBackgroundColor: "#44a6b5",
			labelMaxWidth: 60,
			valueFormatString:"##.##",
		}	
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		
		data: [
		{
			//type: "spline",
			type: "column",
			color:"RGBA(1, 164, 180, 1)",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "circle",
			name:" Rainfall Accumulation <?php echo $rainunit ;?>",
			dataPoints: dataPoints1,
			yValueFormatString: "##.## <?php echo $rainunit ;?>",
			
		},
		{
			
			
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