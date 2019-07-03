<?php
	
	####################################################################################################
	#	WUDATACHARTS by BRIAN UNDERDOWN 2016                                                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: 4th October 2016  	                                                   #
	# 	                                                                                               #
	#   http://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('preload.php');
	$weatherfile = date('F');
	$conv = 1;
	if ($pressureunit == 'inHg') {$conv= '0.02953';}	
	else if ($pressureunit == 'hPa'){$conv= '1';}	
	$int = 1;
	if ($pressureunit == 'hPa') {$int= '5';}
	else if ($pressureunit == 'inHg') {$int= '0.25';}	
	$ymax = 1;
	if ($pressureunit == 'hPa') {$ymax= '1045';}
	else if ($pressureunit == 'inHg') {$ymax= '31.6';}		
	$limit = '0';
	if ($pressureunit == 'inHg') {$limit= '20';}
	else if ($pressureunit == 'hPa') {$limit= '930';}
	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR Barometer YEAR CHART</title>	
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
			url: "<?php echo date('Y')?>/<?php echo $weatherfile;?>.csv",
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
		var chart = new CanvasJS.Chart("chartContainer2", {
		  backgroundColor: "rgba(40, 45, 52,.4)",
		 animationEnabled: false,
		 margin: 0,
		 
		title: {
            text: " ",
			fontSize: 0,
			fontColor:' #555',
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
		    labelFontSize: 6,
			labelFontColor:' #aaa',
			lineThickness: 1,
			gridThickness: 1,
			gridDashType: "dot",	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			minimum:-0.5,
			interval:2,
			intervalType:"month",
			xValueType: "dateTime",	
			crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#009bab",
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelMaxWidth: 60,
			labelBackgroundColor: "#009bab",
		}
			
			},
			
		axisY:{
		title: "",
		titleFontColor: "#555",
		titleFontSize: 0,
        titleWrap: false,
		margin: 5,
		lineThickness: 1,		
		gridThickness: 1,
		gridDashType: "dot",
		
		interval:<?php echo $int;?>,	
        includeZero: false,
		gridColor: "#333",	
		labelFontSize: 7,
		labelFontColor:' #aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",		
		labelFormatter: function ( e ) {
        return e.value .toFixed(<?php if ($pressureunit == 'hPa'){echo '0';} else echo '1';?>) ;
         },		
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#009bab",
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelBackgroundColor: "#44a6b5",
			labelMaxWidth: 60,
			valueFormatString:"##.#",
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
			color:"rgba(255, 124, 57, 1.000)",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
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
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
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
<body>
<div id="chartContainer2" style="width:auto;height:125px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02); box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;backgroundColor:rgba(40, 45, 52,.4)"></div></div></body></html>