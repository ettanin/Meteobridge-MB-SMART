<?php 
	####################################################################################################
	#	HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018-2019                      #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at https://weather34.com/homeweatherstation            # 
	# 	                                                                                               #
	# 	                                                                                               #
	# 	updated Mar 2019 LIVEDATA.PHP ITS WHERE A LOT HAPPENS SO DONT MESS IT UP	  		           #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
 //original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
 include('settings.php');include('shared.php');error_reporting(0); 
 	date_default_timezone_set($TZ);
	
//meteobridge - api October 1st 2017

if ($livedataFormat == 'meteobridge-api' && $livedata) {
	$file_live = file_get_contents($livedata);
	$meteobridgeapi = explode(" ", $file_live);
	$meteobridgeapi1 = explode("_",$file_live);//split for davis consoe forecast
	
		$year = substr($meteobridgeapi[0], 6);
	if ($livedataFormat == 'meteobridge-api') {
		// For Meteobridge api, remove decimal places from indoor humidity March 30th 2017
		if (isset($meteobridgeapi[23])) {
			$meteobridgeapi[23] = (float)(1*$meteobridgeapi[23]);
			$meteobridgeapi[23] = number_format((float)$meteobridgeapi[23],0,'.','');
		}	
	}
	// Meteobridge api starts record with dd/mm/yyyy hh:mm:ss
	$recordDate = mktime(substr($meteobridgeapi[1], 0, 2), substr($meteobridgeapi[1], 3, 2), substr($meteobridgeapi[1], 6, 2),
	substr($meteobridgeapi[0], 3, 2), substr($meteobridgeapi[0], 0, 2), $year);
	$weather["datetime"]           = $recordDate;
	$weather["date"]               = date($dateFormat, $recordDate);
	$weather["time"]               = date($timeFormat, $recordDate);
	$weather["barometer"]          = $meteobridgeapi[10];
	$weather["barometer_max"]      = $meteobridgeapi[34];
	$weather["barometer_min"]      = $meteobridgeapi[36];
	$weather["barometer_units"]    = $meteobridgeapi[15]; // mb or hPa or in	
	$weather["barometer_trend"]    = $meteobridgeapi[10] - $meteobridgeapi[18];
	$weather["temp_units"]         = 'C'; // C
	$weather["temp_indoor"]        = $meteobridgeapi[22];
	$weather["temp_indoor_feel"]   = heatIndex($meteobridgeapi[22], $meteobridgeapi[23]); // must set temp_units first
	$weather["temp_indoormax"]     = $meteobridgeapi[120];
	$weather["temp_indoormin"]     = $meteobridgeapi[121];
	$weather["humidity_indoor"]    = $meteobridgeapi[23];
	$weather["rain_rate"]          = $meteobridgeapi[8];
	$weather["dewpoint"]           = number_format($meteobridgeapi[4],1);
	$weather["rain_today"]         = $meteobridgeapi[9];
	$weather["rain_lasthour"]      = $meteobridgeapi[47];
	$weather["rain_month"]         = $meteobridgeapi[19];
	$weather["rain_year"]          = $meteobridgeapi[20];
	$weather["rain_24hrs"]         = $meteobridgeapi[44];
	$weather["rain_units"]         = $meteobridgeapi[16]; // mm or in
	$weather["uv"]                 = $meteobridgeapi[43];
	$weather["uvdatetime"]         = $recordDate;
	$weather["solar"]              = round($meteobridgeapi[45],1);
	$weather["temp"]               = $meteobridgeapi[2];
	$weather["temp_feel"]          = heatIndex($meteobridgeapi[2], $meteobridgeapi[3]); // must set temp_units first
	$weather["heat_index"]         = $weather["temp_feel"]; // must set temp_units first
	//$weather["heat_index"]         = $meteobridgeapi[42];
	$weather["windchill"]          = $meteobridgeapi[24];
	$weather["humidity"]           = number_format($meteobridgeapi[3],0);	
	$weather["temp_today_high"]    = $meteobridgeapi[26];
	$weather["temp_today_low"]     = $meteobridgeapi[28];
	$weather["temp_avg15"]         = $meteobridgeapi[67];
	$weather["temp_avg"]           = $meteobridgeapi[123]; // last 60 minutes
	$weather["wind_speed_avg"]     = $meteobridgeapi[5];
	$weather["wind_direction"]     = number_format($meteobridgeapi[7],0);
	$weather["wind_direction_avg"] = number_format($meteobridgeapi[46],0);
	$weather["wind_speed"]         = number_format($meteobridgeapi[5]);
	$weather["wind_gust_speed"]    = $meteobridgeapi[6];
	$weather["wind_speed_bft"]     = $meteobridgeapi[12];
	$weather["wind_speed_max"]     = $meteobridgeapi[40];	
	$weather["wind_gust_speed_max"]= $meteobridgeapi[32];	
	$weather["wind_units"]         = 'm/s'; // m/s or mph or km/h or kts
	$weather["wind_speed_avg15"]   = $meteobridgeapi[72];
	$weather["wind_speed_avg30"]   = $meteobridgeapi[73];
	$weather["sunshine"]           = $meteobridgeapi[55];
	$weather["maxsolar"]           = number_format($meteobridgeapi[80],0);
	$weather["maxuv"]              = $meteobridgeapi[58];	
	$weather["sunny"]          	   = $meteobridgeapi[57];
	$weather["lux"] 			   = number_format($meteobridgeapi[45]*126.7,0, '.', '');
	$weather["maxtemptime"]        = date($timeFormatShort, $meteobridgeapi[27]);
	$weather["lowtemptime"]        = date($timeFormatShort, $meteobridgeapi[29]);
	$weather["maxwindtime"]        = date($timeFormatShort, $meteobridgeapi[31]);
	$weather["maxgusttime"]        = date($timeFormatShort, $meteobridgeapi[33]);
	$weather["cloudbase"]          = round(($weather["temp"] - $weather["dewpoint"] ) *400,1) ; 
	$weather["cloudbase_units"]    = 'ft' ;	
	$weather["wind_run"]           = number_format($weather["wind_speed"]/24,3); //10 minute wind run
	$weather["swversion"]		   = $meteobridgeapi[38];
	$weather["build"]			   = $meteobridgeapi[39];
	$weather["actualhardware"]	   = $meteobridgeapi[42];
	$weather["mbplatform"]	       = $meteobridgeapi[41];
	$weather["uptime"]		       = $meteobridgeapi[81];//uptime in seconds
	$weather["vpforecasttext"]	   = $meteobridgeapi1[1];//davis console forecast text
	$weather["temp_avgtoday"]=$meteobridgeapi[152];
	//$weather['wind_speed_avg30']=$meteobridgeapi[158];
	$weather['wind_speed_avgday']=$meteobridgeapi[158];
	$weather['tempyearavg']=$meteobridgeapi[184];
	$weather['windspeedyearavg']=$meteobridgeapi[185];
	$weather['wind_direction_avgmonth']=$meteobridgeapi[191];
			
	//weather34 windrun based on daily average
    $windrunhr=date('G');$windrunmin=(($windrunmin=date('i')/60));$windrunformula=$windrunhr=date('G')+$windrunmin;
	$weather["windrun34"]=$weather['wind_speed_avg30']*number_format($windrunformula,1);
	
	//weather34 meteobridge real feel 02-08-2018 based on cumulus forum formula (THW)
	$weather['realfeel'] = round(($weather['temp'] + 0.33*($weather['humidity']/100)*6.105*exp(17.27*$weather['temp']/(237.7+$weather['temp']))- 0.70*$weather["wind_speed"] - 4.00),1);
	//ken true version from cumulus version
	//$weather["realfeel"]=apparent_temperature($weather['temp'],$weather['humidity'],$weather['wind_speed']);
	
	//uptimealt
	$convertuptimemb34 = $weather["uptime"];$uptimedays = floor($convertuptimemb34 / 86400);$uptimehours = floor(($convertuptimemb34 -($uptimedays*86400)) / 3600);
	//amusing indoor real feel
	$weather["dewpoint2"] = round(((pow(($weather["humidity_indoor"]/100), 0.125))*(112+0.9*$weather["temp_indoor"] )+(0.1*$weather["temp_indoor"] )-112),1);
	//humidex josep
	$t=7.5*$weather["temp"]/(237.7+$weather["temp"]); $et= pow(10,$t);$e=6.112*$et*($weather["humidity"]/100);$weather["humidex"] =number_format($weather["temp"]+(5/9)*($e-10),1);	
	

//weather34 meteobridge moon data
$weather["moonphase"]=$meteobridgeapi[153];
$weather["luminance"]=$meteobridgeapi[154];
$weather["daylight"]=$meteobridgeapi[155];
if ($meteobridgeapi[156]=='--') {
    $weather["moonrise"]='In Transit';
} else {
    $weather["moonrise"]=date('g:ia', strtotime($meteobridgeapi[156]));
}
$weather["moonset"]=date('g:ia', strtotime($meteobridgeapi[157]));
if ($weather['luminance']>99.9) {
    $weather['luminance']=100;
}
if ($weather['luminance']<100) {
    $weather['luminance']=$weather['luminance'];
}
//weather34 convert meteobridge lunar segment
if ($weather["moonphase"]==0) {
    $weather["moonphase"]=' New Moon';
} elseif ($weather["moonphase"]==1) {
    $weather["moonphase"]=' Waxing Crescent';
} elseif ($weather["moonphase"]==2) {
    $weather["moonphase"]=' First Quarter';
} elseif ($weather["moonphase"]==3) {
    $weather["moonphase"]=' Waxing Gibbous';
} elseif ($weather["moonphase"]==4) {
    $weather["moonphase"]=' Full Moon';
} elseif ($weather["moonphase"]==5) {
    $weather["moonphase"]=' Waning Gibbous';
} elseif ($weather["moonphase"]==6) {
    $weather["moonphase"]=' Last Quarter';
} elseif ($weather["moonphase"]==7) {
    $weather["moonphase"]=' Waning Crescent';
}
	//temperature
	$originalDate = $meteobridgeapi[83];
    $tempydmaxtime = date("H:i", strtotime($originalDate));
	$originalDate1 = $meteobridgeapi[85];
    $tempydmintime = date("H:i", strtotime($originalDate1));
	$originalDate2 = $meteobridgeapi[87];
    $tempmmaxtime = date($dateFormat, strtotime($originalDate2));
	$tempmmaxtime2 = date($dateFormat, strtotime($originalDate2));
	$originalDate3 = $meteobridgeapi[89];
    $tempmmintime =  date($dateFormat, strtotime($originalDate3));
	$originalDate4 = $meteobridgeapi[91];
    $tempymaxtime = date($dateFormat, strtotime($originalDate4));
	$tempymaxtime2 = date($dateFormat, strtotime($originalDate4));
	$originalDate5 = $meteobridgeapi[93];
    $tempymintime =  date($dateFormat, strtotime($originalDate5));
	$tempymintime2 =  date($dateFormat, strtotime($originalDate5));		
	$originalDate6 = $meteobridgeapi[27];
    $tempdmaxtime = date('H:i', strtotime($originalDate6));
	$originalDate7 = $meteobridgeapi[29];
    $tempdmintime =  date('H:i', strtotime($originalDate7));
	
	$originalDatea9 = $meteobridgeapi[126];
    $tempamaxtime = date($dateFormat, strtotime($originalDatea9));
	$weather["tempamax"]		    = $meteobridgeapi[125]; //temp alltime
	$weather["tempamaxtime"]		= $tempamaxtime; //seconds
	
	$originalDatea10 = $meteobridgeapi[128];
    $tempamintime = date($dateFormat, strtotime($originalDatea10));
	$weather["tempamin"]		    = $meteobridgeapi[127]; //temp alltime
	$weather["tempamintime"]		= $tempamintime; //seconds
	$weather["tempydmax"]		    = $meteobridgeapi[82]; //temp max yesterday
	$weather["tempydmaxtime"]		= $tempydmaxtime; //seconds
	$weather["tempydmin"]		    = $meteobridgeapi[84]; //temp min yesterday
	$weather["tempydmintime"]		= $tempydmintime; //seconds
	$weather["tempmmax"]		    = $meteobridgeapi[86]; //temp max month
	$weather["tempmmaxtime"]		= $tempmmaxtime; //date
	$weather["tempmmaxtime2"]		= $tempmmaxtime2; //date
	$weather["tempmmin"]		    = $meteobridgeapi[88]; //temp min month
	$weather["tempmmintime"]		= $tempmmintime; //date
	$weather["tempymax"]		    = $meteobridgeapi[90]; //temp max year
	$weather["tempymaxtime"]		= $tempymaxtime; //seconds
	$weather["tempymaxtime2"]		= $tempymaxtime2; //seconds
	$weather["tempymin"]		    = $meteobridgeapi[92]; //temp min year
	$weather["tempymintime"]		= $tempymintime; //seconds	
	$weather["tempymintime2"]		= $tempymintime2; //seconds	
	$weather["tempdmax"]		    = $meteobridgeapi[26]; //temp max today
	$weather["tempdmaxtime"]		= $tempdmaxtime; //seconds	
	$weather["tempdmin"]		    = $meteobridgeapi[28]; //temp max today
	$weather["tempdmintime"]		= $tempdmintime; //seconds	
	
	//dewpoint year/month/yesterday alltime
	//all time
	$originalDatea11 = $meteobridgeapi[130];
    $dewamaxtime = date($dateFormat, strtotime($originalDatea11));
	$weather["dewamax"]		    = $meteobridgeapi[129]; //temp alltime
	$weather["dewamaxtime"]		= $dewamaxtime; //seconds	
	$originalDatea12 = $meteobridgeapi[132];
    $dewamintime = date($dateFormat, strtotime($originalDatea12));
	$weather["dewamin"]		    = $meteobridgeapi[131]; //temp alltime
	$weather["dewamintime"]		= $dewamintime; //seconds	
	//dewpoint year
	$originalDate44 = $meteobridgeapi[55];
    $dewymaxtime = date($dateFormat, strtotime($originalDate44));	
	$dewymaxtime2 = date($dateFormat, strtotime($originalDate44));	
	$originalDate45 = $meteobridgeapi[57];
    $dewymintime =  date($dateFormat, strtotime($originalDate45));
	$dewymintime2 = date($dateFormat, strtotime($originalDate45));		
	$weather["dewymax"]		    = $meteobridgeapi[54]; //temp max year
	$weather["dewymaxtime"]		= $dewymaxtime; //seconds
	$weather["dewymaxtime2"]	= $dewymaxtime2; //seconds	
	$weather["dewymin"]		    = $meteobridgeapi[56]; //temp min year
	$weather["dewymintime"]		= $dewymintime; //seconds	
	$weather["dewymintime2"]	= $dewymintime2; //seconds	
	//dewpoint today
	$originalDate46 = $meteobridgeapi[64];
    $dewmaxtime = date('H:i', strtotime($originalDate46));	
	$originalDate47 = $meteobridgeapi[66];
    $dewmintime =  date('H:i', strtotime($originalDate47));
	$weather["dewmax"]		    = $meteobridgeapi[63]; //temp max year
	$weather["dewmaxtime"]		= $dewmaxtime; //seconds	
	$weather["dewmin"]		    = $meteobridgeapi[65]; //temp min year
	$weather["dewmintime"]		= $dewmintime; //seconds
	//dewpoint month
	$originalDate74 = $meteobridgeapi[49];
    $dewmmaxtime = date($dateFormat, strtotime($originalDate74));	
	$originalDate75 = $meteobridgeapi[51];
    $dewmmintime =  date($dateFormat, strtotime($originalDate75));	
	$weather["dewmmax"]		    = $meteobridgeapi[48]; //dew max month
	$weather["dewmmaxtime"]		= $dewmmaxtime; //seconds	
	$weather["dewmmin"]		    = $meteobridgeapi[50]; //dew min month
	$weather["dewmmintime"]		= $dewmmintime; //seconds	
	//dewpoint yesterday
	$originalDate84 = $meteobridgeapi[53];
    $dewydmaxtime = date('H:i', strtotime($originalDate84));	
	$originalDate85 = $meteobridgeapi[121];
    $dewydmintime =  date('H:i', strtotime($originalDate85));	
	$weather["dewydmax"]		    = $meteobridgeapi[52]; //temp max year
	$weather["dewydmaxtime"]		= $dewydmaxtime; //seconds	
	$weather["dewydmin"]		    = $meteobridgeapi[120]; //temp min year
	$weather["dewydmintime"]		= $dewydmintime; //seconds	
		
	//humidity almanac	
	//hum max
$weather["humidity_max"]=number_format($meteobridgeapi[59],0);
$originalDate734=$meteobridgeapi[60];
$hummaxtime=date('H:i',strtotime($originalDate734));
$weather["humidity_maxtime"]=$hummaxtime;
	//hum min
$weather["humidity_min"]=number_format($meteobridgeapi[61],0);
$originalDate774=$meteobridgeapi[62];
$hummintime=date('H:i',strtotime($originalDate774));
$weather["humidity_mintime"]=$hummintime;
	//hum year max
$weather["humidity_ymax"]=number_format($meteobridgeapi[163],0);
$originalDate754=$meteobridgeapi[164];
$humymaxtime=date($dateFormat,strtotime($originalDate754));
$weather["humidity_ymaxtime"]=$humymaxtime;
$humymaxtime2=date($dateFormat,strtotime($originalDate754));
$weather["humidity_ymaxtime2"]=$humymaxtime2;
	//hum year min
$weather["humidity_ymin"]=number_format($meteobridgeapi[165],0);
$originalDate755=$meteobridgeapi[166];
$humymintime=date($dateFormat,strtotime($originalDate755));
$weather["humidity_ymintime"]=$humymintime;
$humymintime2=date($dateFormat,strtotime($originalDate755));
$weather["humidity_ymintime2"]=$humymintime2;
	//hum month max
$weather["humidity_mmax"]=number_format($meteobridgeapi[159],0);
$originalDate756=$meteobridgeapi[160];
$hummmaxtime=date($dateFormat,strtotime($originalDate756));
$weather["humidity_mmaxtime"]=$hummmaxtime;
	//hum month min
$weather["humidity_mmin"]=number_format($meteobridgeapi[161],0);
$originalDate757=$meteobridgeapi[162];
$hummmintime=date($dateFormat,strtotime($originalDate757));
$weather["humidity_mmintime"]=$hummmintime;
	//hum yesterday max
$weather["humidity_ydmax"]=number_format($meteobridgeapi[167],0);
$originalDate758=$meteobridgeapi[168];
$humydmaxtime=date('H:i',strtotime($originalDate758));
$weather["humidity_ydmaxtime"]=$humydmaxtime;
	//hum yesterday min
$weather["humidity_ydmin"]=number_format($meteobridgeapi[169],0);
$originalDate759=$meteobridgeapi[170];
$humydmintime=date('H:i',strtotime($originalDate759));
$weather["humidity_ydmintime"]=$humydmintime;

//heat index
$weather["heat_indexymax"]=$meteobridgeapi[192];
$weather["heat_indexymaxtime"]=$meteobridgeapi[193];
$originalDateheat=$meteobridgeapi[193];
$heatindindexmaxtime=date($dateFormat,strtotime($originalDateheat));
$heatindindexmaxtime2=date($dateFormat,strtotime($originalDateheat));

//windchill
$weather["windchillymin"]=$meteobridgeapi[194];
$weather["windchillymintime"]=$meteobridgeapi[195];
$originalDatechill=$meteobridgeapi[195];
$windchillmintime=date($dateFormat,strtotime($originalDatechill));
$windchillmintime2=date($dateFormat,strtotime($originalDatechill));
	//wind 
	$originalDate8 = $meteobridgeapi[95];
    $windydmaxtime = date("H:i", strtotime($originalDate8));	
	$originalDate9 = $meteobridgeapi[97];
    $windmmaxtime = date($dateFormat, strtotime($originalDate9));
	$windmmaxtime2 = date($dateFormat, strtotime($originalDate9));
	$originalDate10 = $meteobridgeapi[99];
    $windymaxtime =  date($dateFormat, strtotime($originalDate10));   
	$windymaxtime2 =  date($dateFormat, strtotime($originalDate10)); 	
	$originalDate11 = $meteobridgeapi[33];
    $winddmaxtime =  date('H:i', strtotime($originalDate11));		
	$originalavgDate = $meteobridgeapi[31];
    $windavgdmaxtime = date("H:i", strtotime($originalavgDate));
	
	$originalDate8a = $meteobridgeapi[134];
    $windamaxtime = date($dateFormat, strtotime($originalDate8a));	
	$weather["windamax"]		    = $meteobridgeapi[133]; //wind max yesterday
	$weather["windamaxtime"]		= $windamaxtime; //seconds			
	$weather["windavgdmaxtime"]		= $windavgdmaxtime; //seconds		
	$weather["windydmax"]		    = $meteobridgeapi[94]; //wind max yesterday
	$weather["windydmaxtime"]		= $windydmaxtime; //seconds	
	$weather["windmmax"]		    = $meteobridgeapi[96]; //wind max month
	$weather["windmmaxtime"]		= $windmmaxtime; //seconds	
	$weather["windmmaxtime2"]		= $windmmaxtime2; //seconds	
	$weather["windymax"]		    = $meteobridgeapi[98]; //wind max year
	$weather["windymaxtime"]		= $windymaxtime; //seconds
	$weather["windymaxtime2"]		= $windymaxtime2; //seconds
	$weather["winddmax"]		    = $meteobridgeapi[32]; //wind max year
	$weather["winddmaxtime"]		= $winddmaxtime ; //seconds
	
	//rain
	$originalDate12 = $meteobridgeapi[102];
    $rainmmaxtime = date($dateFormat, strtotime($originalDate12));	
	$originalDate13 = $meteobridgeapi[104];
    $rainymaxtime = date($dateFormat, strtotime($originalDate13));	
	
	$originalDate124 = $meteobridgeapi[124];
    $rainlasttime=date($dateFormat,strtotime($originalDate124));
    $rainlasttime1=date($dateFormat,strtotime($originalDate124));
    $rainlasttime2=date("Y",strtotime($originalDate124));
	
    $originalDate25=$meteobridgeapi[124];
    $rainlastmonth=date("F",strtotime($originalDate25));			
	$originalDate25 = $meteobridgeapi[124];
    $rainlastmonth = date("F", strtotime($originalDate25));		
	$originalDate26 = $meteobridgeapi[124];
    $rainlasttoday = date("H:i", strtotime($originalDate26));
	$originalDate27 = $meteobridgeapi[124];
    $rainlasttoday1 = date("jS", strtotime($originalDate27));
	$weather["rainydmax"]		    = $meteobridgeapi[100]; //rain max yesterday
	$weather["rainmmax"]		    = $meteobridgeapi[101]; //wind max month
	$weather["rainmmaxtime"]		= $rainmmaxtime; //seconds	
	$weather["rainymax"]		    = $meteobridgeapi[103]; //wind max year
	$weather["rainymaxtime"]		= $rainymaxtime; //seconds	
	$weather['rainlastmonth']=$meteobridgeapi[173];
	$weather['rainlastyear']=$meteobridgeapi[174];
	
	//pressure	
	//yesterday
	$baromaxoriginalDateb0 = $meteobridgeapi[136];
    $baromaxtimeyest = date("H:i", strtotime($baromaxoriginalDateb0));	
	$barominoriginalDateb1 = $meteobridgeapi[138];
    $baromintimeyest = date("H:i", strtotime($barominoriginalDateb1));	
	$weather["thb0seapressydmaxtime"]	= $baromaxtimeyest; //seconds	
	$weather["thb0seapressydmintime"]	= $baromintimeyest; //seconds
	$weather["thb0seapressydmax"]	= $meteobridgeapi[135]; //max yesterday
	$weather["thb0seapressydmin"]	= $meteobridgeapi[137]; //min yesterday
	
	
	//month
	$baromaxoriginalDateb2 = $meteobridgeapi[140];
    $baromaxtimemonth = date($dateFormat, strtotime($baromaxoriginalDateb2));	
	$barominoriginalDateb3 = $meteobridgeapi[142];
    $baromintimemonth = date($dateFormat, strtotime($barominoriginalDateb3));		
	$weather["thb0seapressmonthmaxtime"]	= $baromaxtimemonth; //seconds	
	$weather["thb0seapressmonthmintime"]	= $baromintimemonth; //seconds
	$weather["thb0seapressmmax"]	= $meteobridgeapi[139]; //max month
	$weather["thb0seapressmmin"]	= $meteobridgeapi[141]; //min month
	
	//year
	$baromaxoriginalDateb4 = $meteobridgeapi[144];
    $baromaxtimeyear = date($dateFormat, strtotime($baromaxoriginalDateb4));	
	$barominoriginalDateb5 = $meteobridgeapi[146];
    $baromintimeyear = date($dateFormat, strtotime($barominoriginalDateb5));		
	$weather["thb0seapressyearmaxtime"]	= $baromaxtimeyear; //seconds	
	$weather["thb0seapressyearmintime"]	= $baromintimeyear; //seconds
	$weather["thb0seapressymax"]	= $meteobridgeapi[143]; //max year
	$weather["thb0seapressymin"]	= $meteobridgeapi[145]; //min year
	
	//all time
	$baromaxoriginalDateb6 = $meteobridgeapi[148];
    $baromaxtimeall = date($dateFormat, strtotime($baromaxoriginalDateb6));	
	$barominoriginalDateb7 = $meteobridgeapi[150];
    $baromintimeall = date($dateFormat, strtotime($barominoriginalDateb7));		
	$weather["thb0seapressamaxtime"]	= $baromaxtimeall; //seconds	
	$weather["thb0seapressamintime"]	= $baromintimeall; //seconds
	$weather["thb0seapressamax"]	= $meteobridgeapi[147]; //max all time
	$weather["thb0seapressamin"]	= $meteobridgeapi[149]; //min all time
	
	
	//today
	$baromaxoriginalDate = $meteobridgeapi[35];
    $baromaxtime = date("H:i", strtotime($baromaxoriginalDate));	
	$barominoriginalDate = $meteobridgeapi[37];
    $baromintime = date("H:i", strtotime($barominoriginalDate));	
	$weather["thb0seapressmaxtime"]	= $baromaxtime; //seconds	
	$weather["thb0seapressmintime"]	= $baromintime; //seconds
	
	//alamanac solar
	$solaroriginalDate = $meteobridgeapi[108];
    $solarydmaxtime = date("H:i", strtotime($solaroriginalDate));	
	$solaroriginalDate2 = $meteobridgeapi[110];
    $solarmmaxtime = date($dateFormat, strtotime($solaroriginalDate2));	
	$solaroriginalDate4 = $meteobridgeapi[112];
    $solarymaxtime = date($dateFormat, strtotime($solaroriginalDate4));	
	$solaroriginalDate6 = $meteobridgeapi[106];
    $solardmaxtime = date("H:i", strtotime($solaroriginalDate6));	
	
	$weather["solarydmax"]		    = number_format($meteobridgeapi[107],0, '.', ''); //temp max yesterday
	$weather["solarydmaxtime"]		= $solarydmaxtime; //seconds	
	$weather["solarmmax"]		    = number_format($meteobridgeapi[109],0, '.', ''); //temp max month
	$weather["solarmmaxtime"]		= $solarmmaxtime; //date	
	$weather["solarymax"]		    = number_format($meteobridgeapi[111],0, '.', ''); //temp max year
	$weather["solarymaxtime"]		= $solarymaxtime; //seconds	
	$weather["solardmax"]		    = number_format($meteobridgeapi[105],0, '.', ''); //temp max today
	$weather["solardmaxtime"]		= $solardmaxtime; //seconds	
	
	
	
	//alamanac uv	
	$uvoriginalDate = $meteobridgeapi[115];
    $uvydmaxtime = date("H:i", strtotime($uvoriginalDate));	
	$uvoriginalDate2 = $meteobridgeapi[117];
    $uvmmaxtime = date($dateFormat, strtotime($uvoriginalDate2));	
	$uvoriginalDate4 = $meteobridgeapi[119];
    $uvymaxtime = date($dateFormat, strtotime($uvoriginalDate4));	
	$uvoriginalDate6 = $meteobridgeapi[113];
    $uvdmaxtime = date('H:i', strtotime($uvoriginalDate6));	
	
	$weather["uvydmax"]		    = number_format($meteobridgeapi[114],1); //temp max yesterday
	$weather["uvydmaxtime"]		= $uvydmaxtime; //seconds	
	$weather["uvmmax"]		    = number_format($meteobridgeapi[116],1); //temp max month
	$weather["uvmmaxtime"]		= $uvmmaxtime; //date	
	$weather["uvymax"]		    = number_format($meteobridgeapi[118],1); //temp max year
	$weather["uvymaxtime"]		= $uvymaxtime; //seconds	
	$weather["uvdmax"]		    = number_format($meteobridgeapi[58],1); //temp max today
	$weather["uvdmaxtime"]		= $uvdmaxtime; //seconds	
	
		
	//trends will update 15 minutes after a reboot or power failure
	$weather["temp_trend"]         =  number_format($meteobridgeapi[2],1) -  number_format($meteobridgeapi[67],1) ;
	$weather["humidity_trend"]     =  number_format($meteobridgeapi[3],0) -  number_format($meteobridgeapi[68],0);
	$weather["dewpoint_trend"]     =  number_format($meteobridgeapi[4],1) -  number_format($meteobridgeapi[69],1);
	$weather["temp_indoor_trend"]  =  number_format($meteobridgeapi[22],1) - number_format($meteobridgeapi[70],1);//indoor
	$weather["temp_humidity_trend"] = number_format($meteobridgeapi[23],1) - number_format($meteobridgeapi[71],1);//indoor
	$weather["barotrend"] =   $meteobridgeapi[10] -  $barotrend[0];	
	$weather['barometer6h'] = $meteobridgeapi[10] - $meteobridgeapi[73];
	$weather['winddir6h'] =	 $meteobridgeapi[72];
	$weather["dirtrend"] =$dirtrend[0];
	
	
	
	//barometer units
	if ($weather["barometer_units"] == "in") {
		// standardize format
		$weather["barometer_units"] = "inHg";}}
// Convert temperatures if necessary
if ($tempunit != $weather["temp_units"]) {
	if ($tempunit == "C") {
		fToC($weather, "temp_indoor");
		fToC($weather, "temp_indoormax");
		fToC($weather, "temp_indoormin");
		fToC($weather, "temp");	
		fToC($weather, "temp2");
		fToC($weather, "temp_avg");				
		fToC($weather, "windchill");
		fToC($weather, "windchillymin");		
		fToC($weather, "heat_index");
		fToC($weather, "heat_indexymax");		
		fToC($weather, "dewpoint");
		fToC($weather, "temp_indoor_feel");
		fToC($weather, "temp_indoor_feel2");
		fToC($weather, "temp_feel");
		fToC($weather, "temp_today_high");
		fToC($weather, "temp_today_low");
		fToC($weather, "temp_avgtoday");		
		fToC($weather, "avgtemp");
		fToC($weather, "tempydmax");
		fToC($weather, "tempydmin");
		fToC($weather, "tempmmax");
		fToC($weather, "tempmmin");
		fToC($weather, "tempymax");
		fToC($weather, "tempymin");
		fToC($weather, "tempdmax");
		fToC($weather, "tempdmin");
		fToC($weather, "tempamax");
		fToC($weather, "tempamin");
		fToC($weather, "dewmax");
		fToC($weather, "dewmin");
		fToC($weather, "dewamax");
		fToC($weather, "dewamin");
		fToC($weather, "dewmmax");
		fToC($weather, "dewmmin");
		fToC($weather, "dewymax");
		fToC($weather, "dewymin");
		fToC($weather, "dewydmax");
		fToC($weather, "dewydmin");
		fToC($weather, "dewpoint2");
		fToC($weather, "realfeel");	
		fToC($weather,"tempyearavg");	
		fToCrel($weather, "temp_trend");
		fToCrel($weather, "dewpoint_trend");	
		fToCrel($weather, "humidex");				
		$weather["temp_units"] = $tempunit;
	}
	else if ($tempunit == "F") {
		cToF($weather, "temp_indoor");
		cToF($weather, "temp");
		cToF($weather, "temp2");
		cToF($weather, "temp_avg");	
		cToF($weather, "temp_indoormax");
		cToF($weather, "temp_indoormin");				
		cToF($weather, "windchill");
		cToF($weather, "windchillymin");		
		cToF($weather, "heat_index");
		cToF($weather, "heat_indexymax");			
		cToF($weather, "dewpoint");		
		cToF($weather, "temp_indoor_feel");
		cToF($weather, "temp_indoor_feel2");
		cToF($weather, "temp_feel");		
		cToF($weather, "temp_today_high");
		cToF($weather, "temp_today_low");
		cToF($weather, "temp_avgtoday");	
		cToF($weather, "avgtemp");
		cToF($weather, "tempydmax");
		cToF($weather, "tempydmin");
		cToF($weather, "tempamax");
		cToF($weather, "tempamin");
		cToF($weather, "tempmmax");
		cToF($weather, "tempmmin");
		cToF($weather, "tempymax");
		cToF($weather, "tempymin");
		cToF($weather, "tempdmax");
		cToF($weather, "tempdmin");
		cToF($weather, "dewmax");
		cToF($weather, "dewmin");
		cToF($weather, "dewamax");
		cToF($weather, "dewamin");
		cToF($weather, "dewmmax");
		cToF($weather, "dewmmin");
		cToF($weather, "dewymax");		
		cToF($weather, "dewymin");
		cToF($weather, "dewydmax");
		cToF($weather, "dewydmin");
		cToF($weather, "dewpoint2");
		cToF($weather, "realfeel");
		cToF($weather,"tempyearavg");
		cToFrel($weather, "temp_trend");
		cToFrel($weather, "dewpoint_trend");	
		cToFrel($weather, "humidex");	
		$weather["temp_units"] = $tempunit;
	}
}

// Convert rainfall units if necessary
if ($rainunit != $weather["rain_units"]) {
	if ($rainunit == "mm") {
		inTomm($weather, "rain_rate");
		inTomm($weather, "rain_today");
		inTomm($weather, "rain_month");
		inTomm($weather, "rain_year");
		inTomm($weather, "rainydmax");
		inTomm($weather, "rain_lasthour");
		inTomm($weather, "rainymax");		
		inTomm($weather, "rainmmax");
		inTomm($weather, "rain_24hrs");	
		inTomm($weather, "rainlastmonth");	
		inTomm($weather, "rainlastyear");
		
		$weather["rain_units"] = $rainunit;
	}
	else if ($rainunit == "in") {
		mmToin($weather, "rain_rate");
		mmToin($weather, "rain_today");
		mmToin($weather, "rain_month");
		mmToin($weather, "rain_year");
		mmToin($weather, "rainydmax");
		mmToin($weather, "rain_lasthour");
		mmToin($weather, "rainymax");		
		mmToin($weather, "rainmmax");
		mmToin($weather, "rain_24hrs");	
		mmToin($weather, "rainlastmonth");	
		mmToin($weather, "rainlastyear");			
		$weather["rain_units"] = $rainunit;
	}
}

// Convert pressure units if necessary
if ($pressureunit != $weather["barometer_units"]) {
	if (($pressureunit == 'hPa' && $weather["barometer_units"] == 'mb') ||
		($pressureunit == 'mb' && $weather["barometer_units"] == 'hPa')) {
		// 1 mb = 1 hPa so just change the unit being displayed
		$weather["barometer_units"] = $pressureunit;
	}
	else if ($pressureunit == "inHg" && ($weather["barometer_units"] == 'mb' || $weather["barometer_units"] == 'hPa')) {
		mbToin($weather, "barometer");	
		mbToin($weather, "thb0seapressamax");
		mbToin($weather, "thb0seapressamin");
		mbToin($weather, "thb0seapressymax");
		mbToin($weather, "thb0seapressymin");
		mbToin($weather, "thb0seapressydmax");
		mbToin($weather, "thb0seapressydmin");
		mbToin($weather, "thb0seapressmmax");
		mbToin($weather, "thb0seapressmmin");			
		mbToin($weather, "barometer_trend");
		mbToin($weather, "barometer_trend1");
		mbToin($weather, "barometermovement");
		mbToin($weather, "barometer_max");
		mbToin($weather, "barometer_min");
		mbToin($weather, "barometer_avg");
		mbToin($weather, "barometert");
		mbToin($weather, "barotrend");		
		mbToin($weather, "barometer_trendt");
		
		$weather["barometer_units"] = $pressureunit;
	}
	else if (($pressureunit == "mb" || $pressureunit == 'hPa') && $weather["barometer_units"] == 'inHg') {
		inTomb($weather, "barometer");	
		inTomb($weather, "thb0seapressamax");
		inTomb($weather, "thb0seapressamin");
		inTomb($weather, "thb0seapressymax");
		inTomb($weather, "thb0seapressymin");
		inTomb($weather, "thb0seapressydmax");
		inTomb($weather, "thb0seapressydmin");
		inTomb($weather, "thb0seapressmmax");
		inTomb($weather, "thb0seapressmmin");	
		inTomb($weather, "barometer_trend");
		inTomb($weather, "barometer_trend1");
		inTomb($weather, "barometermovement");
		inTomb($weather, "barometer_max");
		inTomb($weather, "barometer_min");
		inTomb($weather, "barometer_avg");
		inTomb($weather, "barometert");
		inTomb($weather, "barotrend");
		inTomb($weather, "barometer_trendt");
		
		$weather["barometer_units"] = $pressureunit;
	}
}

// Convert wind speed units if necessary

if($windunit!=$weather["wind_units"]){
	
if($windunit=='mph'&&$weather["wind_units"]=='kts'){ktsTomph($weather,"wind_speed");ktsTomph($weather,"wind_speed2");ktsTomph($weather,"wind_speed_trend");ktsTomph($weather,"wind_gust_speed");ktsTomph($weather,"wind_gust_speed2");ktsTomph($weather,"wind_gust_speed_trend");ktsTomph($weather,"wind_speed_max");ktsTomph($weather,"wind_gust_speed_max");ktsTomph($weather,"wind_run");ktsTomph($weather,"wind_speed_avg");ktsTomph($weather,"wind_speed_avg15");ktsTomph($weather,"wind_speed_avg30");ktsTomph($weather,"windrun34");ktsTomph($weather,"windamax");ktsTomph($weather,"winddmax");ktsTomph($weather,"windydmax");ktsTomph($weather,"windmmax");ktsTomph($weather,"windymax");
ktsTomph($weather,"windrun34");$weather["wind_units"]=$windunit;}else if($windunit=='mph'&&$weather["wind_units"]=='km/h'){kmhTomph($weather,"wind_speed");kmhTomph($weather,"wind_speed2");kmhTomph($weather,"wind_speed_trend");kmhTomph($weather,"wind_gust_speed");kmhTomph($weather,"wind_gust_speed2");kmhTomph($weather,"wind_gust_speed_trend");kmhTomph($weather,"wind_speed_max");kmhTomph($weather,"wind_gust_speed_max");kmhTomph($weather,"wind_run");kmhTomph($weather,"wind_speed_avg");kmhTomph($weather,"wind_speed_avg15");kmhTomph($weather,"wind_speed_avg30");kmhTomph($weather,"windamax");kmhTomph($weather,"winddmax");kmhTomph($weather,"windydmax");kmhTomph($weather,"windmmax");kmhTomph($weather,"windrun34");kmhTomph($weather,"windymax");kmhTomph($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='mph'&&$weather["wind_units"]=='m/s'){msTomph($weather,"wind_speed");msTomph($weather,"wind_speed2");msTomph($weather,"wind_speed_trend");msTomph($weather,"wind_gust_speed");msTomph($weather,"wind_gust_speed2");msTomph($weather,"wind_gust_speed_trend");msTomph($weather,"wind_speed_max");msTomph($weather,"wind_gust_speed_max");msTomph($weather,"wind_run");msTomph($weather,"wind_speed_avg");msTomph($weather,"wind_speed_avg15");msTomph($weather,"wind_speed_avg30");msTomph($weather,"winddmax");msTomph($weather,"windrun34");msTomph($weather,"windamax");msTomph($weather,"windydmax");msTomph($weather,"windmmax");msTomph($weather,"windymax");msTomph($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='km/h'&&$weather["wind_units"]=='kts'){ktsTokmh($weather,"wind_speed");ktsTokmh($weather,"wind_speed2");ktsTokmh($weather,"wind_speed_trend");ktsTokmh($weather,"wind_gust_speed");ktsTokmh($weather,"wind_gust_speed2");ktsTokmh($weather,"wind_gust_speed_trend");ktsTokmh($weather,"wind_speed_max");ktsTokmh($weather,"wind_gust_speed_max");ktsTokmh($weather,"wind_run");ktsTokmh($weather,"wind_speed_avg");ktsTokmh($weather,"wind_speed_avg15");ktsTokmh($weather,"wind_speed_avg30");ktsTokmh($weather,"winddmax");ktsTokmh($weather,"windrun34");ktsTokmh($weather,"windamax");ktsTokmh($weather,"windydmax");ktsTokmh($weather,"windmmax");ktsTokmh($weather,"windymax");ktsTokmh($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='km/h'&&$weather["wind_units"]=='mph'){mphTokmh($weather,"wind_speed");mphTokmh($weather,"wind_speed2");mphTokmh($weather,"wind_speed_trend");mphTokmh($weather,"wind_gust_speed");mphTokmh($weather,"wind_gust_speed2");mphTokmh($weather,"wind_gust_speed_trend");mphTokmh($weather,"wind_speed_max");mphTokmh($weather,"wind_gust_speed_max");mphTokmh($weather,"wind_run");mphTokmh($weather,"wind_speed_avg");mphTokmh($weather,"wind_speed_avg15");mphTokmh($weather,"wind_speed_avg30");mphTokmh($weather,"winddmax");mphTokmh($weather,"windrun34");mphTokmh($weather,"windamax");mphTokmh($weather,"windydmax");mphTokmh($weather,"windmmax");mphTokmh($weather,"windymax");mphTokmh($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='km/h'&&$weather["wind_units"]=='m/s'){msTokmh($weather,"wind_speed");msTokmh($weather,"wind_speed2");msTokmh($weather,"wind_speed_trend");msTokmh($weather,"wind_gust_speed");msTokmh($weather,"wind_gust_speed2");msTokmh($weather,"wind_gust_speed_trend");msTokmh($weather,"wind_speed_max");msTokmh($weather,"wind_gust_speed_max");msTokmh($weather,"wind_run");msTokmh($weather,"wind_speed_avg");msTokmh($weather,"wind_speed_avg15");msTokmh($weather,"wind_speed_avg30");msTokmh($weather,"winddmax");msTokmh($weather,"windrun34");msTokmh($weather,"windamax");msTokmh($weather,"windydmax");msTokmh($weather,"windmmax");msTokmh($weather,"windymax");msTokmh($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='m/s'&&$weather["wind_units"]=='kts'){ktsToms($weather,"wind_speed");ktsToms($weather,"wind_speed2");ktsToms($weather,"wind_speed_trend");ktsToms($weather,"wind_gust_speed");ktsToms($weather,"wind_gust_speed2");ktsToms($weather,"wind_gust_speed_trend");ktsToms($weather,"wind_speed_max");ktsToms($weather,"wind_gust_speed_max");ktsTomph($weather,"wind_gust_speed1");ktsToms($weather,"wind_run");ktsToms($weather,"wind_speed_avg");ktsToms($weather,"wind_speed_avg15");ktsToms($weather,"wind_speed_avg30");ktsToms($weather,"winddmax");ktsToms($weather,"windrun34");ktsToms($weather,"windamax");ktsToms($weather,"windydmax");ktsToms($weather,"windmmax");ktsToms($weather,"windymax");ktsToms($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='m/s'&&$weather["wind_units"]=='mph'){mphToms($weather,"wind_speed");mphToms($weather,"wind_speed2");mphToms($weather,"wind_speed_trend");mphToms($weather,"wind_gust_speed");mphToms($weather,"wind_gust_speed2");mphToms($weather,"wind_gust_speed_trend");mphToms($weather,"wind_speed_max");mphToms($weather,"wind_gust_speed_max");mphToms($weather,"wind_run");mphToms($weather,"wind_speed_avg");mphToms($weather,"wind_speed_avg15");mphToms($weather,"wind_speed_avg30");mphToms($weather,"winddmax");mphToms($weather,"windrun34");mphToms($weather,"windamax");mphToms($weather,"windydmax");mphToms($weather,"windmmax");mphTokmh($weather,"windymax");mphToms($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='m/s'&&$weather["wind_units"]=='km/h'){kmhToms($weather,"wind_speed");kmhToms($weather,"wind_speed2");kmhToms($weather,"wind_speed_trend");kmhToms($weather,"wind_gust_speed");kmhToms($weather,"wind_gust_speed2");kmhToms($weather,"wind_gust_speed_trend");kmhToms($weather,"wind_speed_max");kmhToms($weather,"wind_gust_speed_max");kmhToms($weather,"wind_run");kmhToms($weather,"wind_speed_avg");kmhToms($weather,"wind_speed_avg15");kmhToms($weather,"wind_speed_avg30");kmhToms($weather,"winddmax");kmhToms($weather,"windrun34");kmhToms($weather,"windamax");kmhToms($weather,"windydmax");kmhToms($weather,"windmmax");kmhToms($weather,"windymax");kmhToms($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='kts'&&$weather["wind_units"]=='m/s'){msTokts($weather,"wind_speed");msTokts($weather,"wind_speed2");msTokts($weather,"wind_speed_trend");msTokts($weather,"wind_gust_speed");msTokts($weather,"wind_gust_speed2");msTokts($weather,"wind_gust_speed_trend");msTokts($weather,"wind_speed_max");msTokts($weather,"wind_gust_speed_max");msTokts($weather,"wind_run");msTokts($weather,"wind_speed_avg");msTokts($weather,"wind_speed_avg15");msTokts($weather,"wind_speed_avg30");msTokts($weather,"winddmax");msTokts($weather,"windrun34");msTokts($weather,"windamax");msTokts($weather,"windydmax");msTokts($weather,"windmmax");msTokts($weather,"windymax");msTokts($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='kts'&&$weather["wind_units"]=='mph'){mphTokts($weather,"wind_speed");mphTokts($weather,"wind_speed2");mphTokts($weather,"wind_speed_trend");mphTokts($weather,"wind_gust_speed");mphTokts($weather,"wind_gust_speed2");mphTokts($weather,"wind_gust_speed_trend");mphTokts($weather,"wind_speed_max");mphTokts($weather,"wind_gust_speed_max");mphTokts($weather,"wind_run");mphTokts($weather,"wind_speed_avg");mphTokts($weather,"wind_speed_avg15");mphTokts($weather,"wind_speed_avg30");mphTokts($weather,"winddmax");mphTokts($weather,"windrun34");mphTokts($weather,"windamax");mphTokts($weather,"windydmax");mphTokts($weather,"windmmax");mphTokts($weather,"windymax");mphTokts($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}

else if($windunit=='kts'&&$weather["wind_units"]=='km/h'){kmhTokts($weather,"wind_speed");kmhTokts($weather,"wind_speed2");kmhTokts($weather,"wind_speed_trend");kmhTokts($weather,"wind_gust_speed");kmhTokts($weather,"wind_gust_speed2");kmhTokts($weather,"wind_gust_speed_trend");kmhTokts($weather,"wind_speed_max");kmhTokts($weather,"wind_gust_speed_max");kmhTokts($weather,"wind_run");kmhTokts($weather,"wind_speed_avg");kmhTokts($weather,"wind_speed_avg15");kmhTokts($weather,"wind_speed_avg30");kmhTokts($weather,"winddmax");kmhTokts($weather,"windrun34");kmhTokts($weather,"windamax");kmhTokts($weather,"windydmax");kmhTokts($weather,"windmmax");kmhTokts($weather,"windymax");kmhTokts($weather,"windspeedyearavg");$weather["wind_units"]=$windunit;}}
// Keep track of the conversion factor for windspeed to knots because it is useful in multiple places
$toKnots = 1;
if ($weather["wind_units"] == 'mph') {
	$toKnots = 0.868976;
} else if ($weather["wind_units"] == 'km/h') {
	$toKnots = 0.5399568;
} else if ($weather["wind_units"] == 'm/s') {
	$toKnots = 1.943844;
}
$o='Designed by weather34.com';
$designedby='Designed by weather34.com';
?>
<?php 
$uptime=$weather["uptime"];function convert_uptime($uptime) {$dt1 = new DateTime("@0");$dt2 = new DateTime("@$uptime");  return $dt1->diff($dt2)->format('%a day(s) %h hrs %i min');}
// firerisk based on cumulus forum thread http://sandaysoft.com/forum/viewtopic.php?f=14&t=2789&sid=77ffab8f6f2359e09e6c58d8b13a0c3c&start=30
$firerisk = number_format((((110 - 1.373 * $weather["humidity"] ) - 0.54 * (10.20 - $weather["temp"] )) * (124 * pow(10,(-0.0142 * $weather["humidity"] ))))/60,0);
//wetbulb
$Tc =($weather['temp']);$P = $weather['barometer'];$RH = $weather['humidity'];
$Tdc = (($Tc - (14.55 + 0.114 * $Tc) * (1 - (0.01 * $RH)) - pow((2.5 + 0.007 * $Tc) * (1 - (0.01 * $RH)) , 3) - (15.9 + 0.117 * $Tc) * pow(1 - (0.01 * $RH),  14)));
$E = (6.11 * pow(10 , (7.5 * $Tdc / (237.7 + $Tdc))));
$wetbulbcalc = (((0.00066 * $P) * $Tc) + ((4098 * $E) / pow(($Tdc + 237.7) , 2) * $Tdc)) / ((0.00066 * $P) + (4098 * $E) / pow(($Tdc + 237.7) , 2));
$wetbulbx =number_format($wetbulbcalc,1);
$weather['wetbulb']=$wetbulbx;
# Convert Start times for Pro and Nano SD, Other MBs unforunately don't provide this data
if (is_numeric($meteobridgeapi[186]) && $meteobridgeapi[186] != '--') {
	$weather['tempStartTime']	= date('M jS Y', strtotime($meteobridgeapi[186]));
	$weather['windStartTime']	= date('M jS Y', strtotime($meteobridgeapi[187]));
	$weather['pressStartTime']	= date('M jS Y', strtotime($meteobridgeapi[188]));
	$weather['rainStartSec']	= strtotime($meteobridgeapi[189]);
	$weather['rainStartTime']	= date('M jS Y', $weather['rainStartSec']);
} else {
	$weather['tempStartTime']	= 'All Time';
	$weather['windStartTime']	= 'All Time';
	$weather['pressStartTime']	= 'All Time';
	$weather['rainStartTime']	= 'All Time';
}
//battery
	$weather['indoorbattery']=$meteobridgeapi[171];
	$weather['outdoorbattery']=$meteobridgeapi[172];
?>