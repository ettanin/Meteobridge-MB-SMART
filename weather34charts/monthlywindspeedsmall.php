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
	$weatherfile = date('F');
	$conv = 1;
	if ($windunit == 'mph') {$conv= '2.23694';}
	else if ($windunit == 'm/s') {$conv= '1';}
	else if ($windunit == 'kts') {$conv= '1.94384';}
	else if ($windunit == 'km/h'){$conv= '3.6';}
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR WIND Month CHART</title>	
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
				if ( rowData.length >1)
					dataPoints1.push({label: rowData[0],y:parseFloat(rowData[6]*<?php echo $conv;?>)});
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
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
			fontSize: 0,
			fontColor:' #555',
			fontFamily: "arial",
        },
		dataPointWidth: 10,
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
			
		    labelFontSize: 7,
			labelFontColor:' #aaa',
			lineThickness: 1,
			gridColor: "#333",		
			gridThickness: 1,	
			gridDashType: "dot",
			titleFontFamily: "arial",	
			labelFontFamily: "arial",	
			minimum:-0.5,
			interval:1,
			intervalType:"date",
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
		titleFontColor: "#aaa",
		titleFontSize: 8,
        titleWrap: false,
		margin: 0,		
		lineThickness: 1,		
		includeZero:true,		
		gridColor: "#333",		
		gridThickness: 1,	
		gridDashType: "dot",
		interval:10,
		labelFontSize: 8,
		labelFontColor:' #aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) ;  
         },		
			 
		 crosshair: {
			enabled: true,
			snapToDataPoint: true,			
			labelFontColor: "#F8F8F8",
			color: "#009bab",
			labelFontSize:8,
			labelBackgroundColor: "#44a6b5",
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
			// max wind speed
			type: "column",
			indexLabelLineThickness: 0,       
       indexLabel: "{y}",
	   indexLabelFontSize: 10,
	   indexLabelFontColor: "#fff",
	   //indexLabelBackgroundColor: "rgba(211, 93, 78, 1.000)",
	   indexLabelMaxWidth: 30,
	   indexLabelFontWeight: "bold",
       indexLabelWrap: true,
	   indexLabelPlacement: "outside",
			color:"#d35d4e",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "circle",
			name:"Max Wind Speed <?php echo $windunit;?>",
			dataPoints: dataPoints1,
			yValueFormatString:"##.#",
		},
		{
			// average wind speed
			type: "spline",
			indexLabelLineThickness: 0,       
       indexLabel: "{y}",
	   indexLabelFontSize: 10,
	   indexLabelFontColor: "#fff",
	   indexLabelBackgroundColor: "0",
	   indexLabelMaxWidth: 30,
	   indexLabelFontWeight: "bold",
       indexLabelWrap: true,
	   indexLabelPlacement: "outside",
            lineDashType: "dash",
			color:"#44a6b5",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
			markerType: "circle",
			name:"Average Wind Speed <?php echo $windunit;?>",
			dataPoints: dataPoints2,
			yValueFormatString:"##.#",
		}

		]
		});

		chart.render();
	}
});</script>
<body>
<div id="chartContainer2" style="width:auto;height:125px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02); box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;backgroundColor:rgba(40, 45, 52,.4)"></div></div></body></html>