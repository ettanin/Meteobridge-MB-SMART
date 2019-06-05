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

	include('chartslivedata.php');include('./chart_theme.php');header('Content-type: text/html; charset=utf-8');
	$weatherfile = date('M');

	$conv = 1;
	if ($windunit == 'mph') {
		$conv= '2.23694';
	} else if ($windunit == 'm/s') {
		$conv= '1';
	} else if ($windunit == 'km/h'){
		$conv= '3.6';
	}
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
		url: "<?php echo date('Y');?>.csv",
		dataType: "text",
		cache:false,
		success: function(data) {processData1(data),processData2(data);}
	});
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData.length >1){
					dataPoints1.push({label: rowData[0],y:parseFloat(rowData[6]*<?php echo $conv;?>)});
				}
			}
		}
		requestTempCsv();
	}
	function requestTempCsv(){

	}
	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData.length >1) {
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[7]*<?php echo $conv;?>)});
				}
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
				text: "",
				fontSize: 0,
				fontColor: '#aaa',
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
				gridColor: '#333',
				labelFontSize: 8,
				labelFontColor: '#aaa',
				lineThickness: 1,
				gridThickness: 1,
				titleFontFamily: "arial",
				labelFontFamily: "arial",
				minimum:-0.5,
				gridDashType: "dot",
				interval:28,
				intervalType:"day",
				includezero: false,
				crosshair: {
					enabled: true,
					snapToDataPoint: true,
					color: '#44a6b5',
					labelFontColor: "#F8F8F8",
					labelFontSize:8,
					labelBackgroundColor: '#44a6b5',
				}
			},
			axisY:{
				title: "",
				titleFontColor: '#aaa',
				titleFontSize: 8,
				titleWrap: false,
				margin: 0,
				interval: 'auto',
				gridDashType: "dot",
				lineThickness: 1,
				gridThickness: 1,
				includeZero: true,
				gridColor: '#333',
				labelFontSize: 8,
				labelFontColor: '#aaa',
				titleFontFamily: "arial",
				labelFontFamily: "arial",
				labelFormatter: function ( e ) {
					return e.value .toFixed(0);
				},
				crosshair: {
					enabled: true,
					snapToDataPoint: true,
					color: '<?php echo $ycrosshaircolor;?>',
					labelFontColor: "#F8F8F8",
					labelFontSize:8,
					labelBackgroundColor: '#44a6b5',
					labelMaxWidth: 60,
					valueFormatString: "#0.#",
				}
			},
			legend:{
				fontFamily: "arial",
				fontColor: '#aaa',
			},
			data: [{
				type: "column",
			color:"#F05E40",
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "none",
			name:"Gusts",
			dataPoints: dataPoints1,
			yValueFormatString:"#0.# <?php echo $windunit ;?>",
			},
			{
				// Average Wind Speed
				type: "spline",
				color: '#44a6b5',
				markerSize:0,
				markerColor: '#44a6b5',
				showInLegend:false,
				legendMarkerType: "circle",
				lineThickness: 0,
				lineColor:  '#44a6b5',
				markerType: "circle",
				name:"Avg Wind Speed",
				dataPoints: dataPoints2,
				yValueFormatString:"#0.# <?php echo $windunit ;?>",
			}]
		});
		chart.render();
	}
});
 </script>

<body>
<div id="chartContainer2" class="chartContainer2" style="width:100%;height:125px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);"></div></div>

</body>
<script src='canvasJs.js'></script>
</html>