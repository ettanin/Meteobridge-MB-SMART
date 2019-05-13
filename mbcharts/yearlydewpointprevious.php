<?php

	####################################################################################################
	#	DATACHARTS by BRIAN UNDERDOWN 2017                                                      	   #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation/index.html #
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS quality Stored								               #
	# 	                                                                                               #
	# 	3rd General Release: updated : 4th Nov 2017  	                                      		   #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
	include('chartslivedata.php');header('Content-type: text/html; charset=utf-8');
	$weatherfile = date('Y', strtotime('last year'));

	if ($tempunit == 'F') {
	$conv = '(9 / 5) + 32';
	} else {
	$conv = '1';
	}

	$animationduration = '500';
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>DEWPOINT TEMP YEAR CHART</title>
		<script src=../js/jquery.js></script>

	';
	?>
    <br>
    <script type="text/javascript">
		// today temperature
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
			//hi
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData.length >7)
					dataPoints1.push({label: rowData[0],y:parseFloat(rowData[3]*<?php echo $conv ;?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			//lo
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].replace(/�|\"/g,'').split(',');
				if ( rowData.length >7)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[4]*<?php echo $conv ;?>)});

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
			fontSize: 11,
			fontColor: '#aaa',
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
			gridColor: '#333',
		    labelFontSize: 7,
			labelFontColor: '#aaa',
			lineThickness: 0.5,
			gridThickness: 1,
      gridDashType: "dot",
			titleFontFamily: "arial",
			labelFontFamily: "arial",
			minimum:0,
			interval:'auto',
			intervalType:"day",
			//xValueType: "dateTime",
			crosshair: {
        enabled: true,
        snapToDataPoint: true,
        color: '#44a6b5',
        labelFontColor: "#fff",
        labelFontSize:8,
        labelBackgroundColor: "#44a6b5",
      }

			},

		axisY:{
		title: "",
		titleFontColor: '#aaa',
		titleFontSize: 8,
        titleWrap: false,
		margin: 0,
		lineThickness: 0.5,
		gridThickness: 1,
        gridDashType: "dot",
        includeZero: false,
		interval: 'auto',
		gridColor: '#333',
		labelFontSize: 8,
		labelFontColor: '#aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) + " °<?php echo $tempunit ;?>" ;
         },
		crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#ff9350",
			labelFontColor: "#fff",
			labelFontSize:8,
			labelBackgroundColor: "#d05f2d",
			labelMaxWidth: 60,
			valueFormatString: "##0.#",
		}
      },

	  legend:{
      fontFamily: "arial",
      fontColor: '<?php echo $fontcolor;?>',

 },


		data: [
		{
			type: "spline",			
			color: '#ff832f',
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
			markerType: "circle",
			name:" Hi Dewpoint",
			dataPoints: dataPoints1,
			yValueFormatString: "#0.# °<?php echo $tempunit ;?>",

		},
		{

			type: "spline",
			color: '#44a6b5>',
			markerSize:0,
            markerColor: '#44a6b5',
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
      		lineColor: '#44a6b5',
			markerType: "circle",
			name:" Lo Dewpoint",
			dataPoints: dataPoints2,
			yValueFormatString: "#0.# °<?php echo $tempunit ;?>",

		}

		]
		});

		chart.render();
	}
});

    </script>

<body>
<div id="chartContainer2" style="width:auto;height:125px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;font-size:10px;color:#aaa;font-family:Arial, Helvetica, sans-serif">NO DATA AVAILABLE FOR <?php echo date('Y', strtotime('last year'));?></div></div></body>
<script src='canvasJs.js'></script>
</html>