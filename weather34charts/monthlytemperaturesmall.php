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
	$file_live=file_get_contents("../mbridge/MBrealtimeupload.txt");
	$meteobridgeapi=explode(" ",$file_live);	
	$weather["tempmmax"]		    = $meteobridgeapi[86]; //temp max month	
	$weather["tempmmin"]		    = $meteobridgeapi[88]; //temp min month
	
	
	$conv = 1;
	if ($tempunit  == 'F') {$conv= '(1.8) +32';}	
	$max = 50;
	if ($tempunit  == 'F') {$max= '120';}	
	$interval = 5;
	if ($tempunit  == 'F') {$interval= '10';}



	//F
    if ($tempunit='F') {
        if ($weather["tempmmax"]<=41 ) {
            $tempcolor= '#4ba0ad';
        } elseif ($weather["tempmmax"]<50 ) {
            $tempcolor= '#9bbc2f';
        } elseif ($weather["tempmmax"]<59 ) {
            $tempcolor= '#e6a141';
        } elseif ($weather["tempmmax"]<77 ) {
            $tempcolor= '#ec5732';
        } elseif ($weather["tempmmax"]<150 ) {
            $tempcolor= '#d35f50';
        }
    }
	//C
    if ($tempunit='C') {
        if ($weather["tempmmax"]<=5 ) {
            $tempcolor= '#4ba0ad';
        } elseif ($weather["tempmmax"]<10 ) {
            $tempcolor= '#9bbc2f';
        } elseif ($weather["tempmmax"]<15 ) {
            $tempcolor= '#e6a141';
        } elseif ($weather["tempmmax"]<25 ) {
            $tempcolor= '#ec5732';
        } elseif ($weather["tempmmax"]<50 ) {
            $tempcolor= '#d35f50';
        }
    }

	$weatherfile = date('F');
	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR TEMP MONTH CHART</title>	
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
			url: "<?php echo date('Y');?>/<?php echo $weatherfile;?>.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>-50){
			//hi
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >7)
					dataPoints1.push({label: rowData[0],y:parseFloat(rowData[1]*<?php echo $conv ;?>)});
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>-50){
			//lo
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >7)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[2]*<?php echo $conv ;?>)});
				
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
			fontColor:' #aaa',
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
			gridColor: "#333",
		    labelFontSize: 7,
			labelFontColor:' #aaa',
			lineThickness: 1,
			gridThickness: 1,
			gridDashType: "dot",	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",
			minimum:-0.5,
			interval:1,		
			xValueType: "dateTime",	
			crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "#9aba2f",
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelMaxWidth: 60,
			labelBackgroundColor: "#FF8841",
		}
			
			},
			
		axisY:{
		title: "",
		titleFontColor: "#333",
		titleFontSize: 0,
        titleWrap: false,
		margin: 0,
		lineThickness: 1,		
		gridThickness: 1,	
		gridDashType: "dot",	
        includeZero: false,	
		interval:<?php if ($tempunit=='F'){echo 10 ;} else echo '5';?>,	
		gridColor: "#333",
		labelFontSize: 8,
		labelFontColor:' #aaa',
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) + "°<?php echo $tempunit ;?>" ;  
         },		 
		 crosshair: {
			enabled: true,
			snapToDataPoint: true,
			color: "rgba(255, 124, 57, 1.000)",
			labelFontColor: "#F8F8F8",
			labelFontSize:8,
			labelBackgroundColor: "#FF8841",
			labelMaxWidth: 60,
			valueFormatString: "#0.#",
		}	
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		data: [
		{
			type: "column",
	   		indexLabelLineThickness: 0,       
       		indexLabel: "{y}",
	   		indexLabelFontSize: 10,
	   		indexLabelFontColor: "#fff",	  
	   		indexLabelMaxWidth: 60,
			indexLabelMaxHeight: 60,
	   		indexLabelFontWeight: "bold",
       		indexLabelWrap: true,
	   		indexLabelPlacement: "outside",			
			color:"<?php echo $tempcolor?>",
			markerSize:0,			
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "circle",
			lineThickness: 0,
			markerType: "circle",
			name:" Hi Temp °<?php echo $tempunit;?>",
			dataPoints: dataPoints1,
			yValueFormatString: "##.#",
			
		},
		{
			
			type: "spline",
			indexLabelLineThickness: 0,
      
       indexLabel: "{y}",
	   indexLabelFontSize: 8,
	   indexLabelFontColor: "#fff",	   
	   //indexLabelBackgroundColor: "0",
	   indexLabelMaxWidth: 30,
	   indexLabelFontWeight: "bold",
       indexLabelWrap: true,
	   indexLabelPlacement: "auto",
            lineDashType: "dash",
			color:"#44a6b5",
			markerSize:3,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 1,
			markerType: "circle",
			name:" Lo Temp °<?php echo $tempunit;?>",
			dataPoints: dataPoints2,
			yValueFormatString: "##.#",
			
		}

		]
		});

		chart.render();
	}
});</script>
<body>
<div id="chartContainer2" style="width:auto;height:125px;padding:0;margin-top:-25px;border-radius:3px;border: 1px solid rgba(245, 247, 252,.02); box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;backgroundColor:rgba(40, 45, 52,.4)"></div></div></body></html>