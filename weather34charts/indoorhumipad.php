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
	if ($windunit == 'mph') {$conv= '(1.8) +32';}
	if ($units == 'uk' && $windunit == 'mph') {$conv= '1';}
	else if ($windunit == 'm/s') {$conv= '1';}
	else if ($windunit == 'km/h'){$conv= '1';}
	$interval = 1;
	if ($windunit == 'mph') {$interval= '0.5';}
	else if ($windunit == 'm/s') {$interval= '1';}
	else if ($windunit == 'km/h'){$interval= '1';}
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>INDOOR | HUMIDITY TEMPERATURE DATABASE CHART</title>	
		<script src=../js/jquery.js></script>
		
		
	';
	
	$date= date('D jS Y');$we;$weatherfile =date('Y')."/".date('jMY');?>

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
					dataPoints1.push({label: rowData[1],y:parseFloat(rowData[12]*<?php echo $conv ;?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData[2]>-50)
					dataPoints2.push({label: rowData[1],y:parseFloat(rowData[13])});
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

		function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer2", {
		backgroundColor: "rgba(40, 45, 52,.4)",
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
		    labelFontSize: 10,
			labelFontColor:' #aaa',
			lineThickness: 1,
			gridThickness: 1,	
			gridDashType: "dot",
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			interval:6,
   			intervalType: "hour",
			minimum:0,
			crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#4a636f",
			labelFontColor: "#F8F8F8",
			labelFontSize:7,
			labelMaxWidth: 60,
			labelBackgroundColor: "#d05f2d",
		}
			
			},
			
		axisY:{
		title: "",
		titleFontColor: "#aaa",
		titleFontSize:0,
        titleWrap: false,
		margin: 0,
		interval:5,
		lineThickness: 1,		
		gridThickness: 0,	
		gridDashType: "dot",	
        includeZero: false,
		gridColor: "#333",
		labelFontSize: 10,
		labelFontColor:' #aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
          return e.value .toFixed(0) + "%" ;  
		},
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#3b9cac",
			labelFontColor: "#fff",
			labelFontSize:7,
			labelBackgroundColor: "#3b9cac",
			valueFormatString: "#'%'",
		}	 
      },
	  
	  
	   axisY2:{
		title: "",
		titleFontColor: "#aaa",
		titleFontSize: 8,
        titleWrap: false,
		margin: 3,
		interval:10,
		//maximum:100,
		lineThickness: 1,		
		gridThickness: 1,	
		gridDashType: "dot",	
        includeZero: false,
		gridColor: "#333",
		labelFontSize: 8,
		labelFontColor:' #aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
         return e.value .toFixed(0) + "%" ;  
		},
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#3b9cac",
			labelFontColor: "#fff",
			labelFontSize:7,
			labelBackgroundColor: "#3b9cac",
			valueFormatString: "#'%'",
		}	 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#aaa",
  	  fontSize: 0,
 },
		
		
		
		
		data: [
		{
			
			type: "spline",
			color:"#00A4B4",
			markerSize:0,
			showInLegend:false,				
			lineThickness: 1,
			markerType: "circle",
			name:"Humidity",
			dataPoints: dataPoints2,
			yValueFormatString: "# '%'",
			
		},
		{
			
			
		}

		]
		});

		chart.render();
	}
});


</script>
<body>
<div id="chartContainer2" style="width:100%;height:100px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02); box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;background:rgba(40, 45, 52,.4)"></div></div></body></html>