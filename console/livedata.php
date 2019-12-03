<?php include('console-settings.php');include('shared.php'); 
    
if ($livedataFormat=='meteobridge-api'&&$livedata) {
    $file_live=file_get_contents($livedata);
    $meteobridgeapi=explode(" ", $file_live);
    $meteobridgeapi1=explode("_", $file_live);
    $year=substr($meteobridgeapi[0], 6);
    if ($livedataFormat=='meteobridge-api') {
        if (isset($meteobridgeapi[23])) {
            $meteobridgeapi[23]=(float)(1*$meteobridgeapi[23]);
            $meteobridgeapi[23]=number_format((float)$meteobridgeapi[23], 0, '.', '');
        }
    }
    $recordDate=mktime(substr($meteobridgeapi[1], 0, 2), substr($meteobridgeapi[1], 3, 2), substr($meteobridgeapi[1], 6, 2), substr($meteobridgeapi[0], 3, 2), substr($meteobridgeapi[0], 0, 2), $year);
    $weather["datetime"]=$recordDate;
    $weather["date"]=date($dateFormat, $recordDate);
    $weather["time"]=date($timeFormat, $recordDate);
    //barometer
    $weather["barometer"]=$meteobridgeapi[10];
    $weather["barometer_trendt"]=$meteobridgeapi[34];
    $weather["barometer_max"]=$meteobridgeapi[34];
    $weather["barometer_min"]=$meteobridgeapi[36];
    $weather["barometer_units"]=$meteobridgeapi[15];
    $weather["barometer_trend"]=$meteobridgeapi[10] - $meteobridgeapi[18];
    $weather["barometer_24h"]=$meteobridgeapi[192];
    //outdoor temp
    $weather["temp"]=$meteobridgeapi[2];
    $weather["temp_avg"]=$meteobridgeapi[123];
    $weather["temp_avgtoday"]=$meteobridgeapi[152];
    $weather["temp_units"]=$meteobridgeapi[14];
    $weather["temp_today_high"]=$meteobridgeapi[26];
    $weather["temp_today_low"]=$meteobridgeapi[28];
    //temp related
    $weather["dewpoint"]=number_format($meteobridgeapi[4], 1);
    $weather["windchill"]=$meteobridgeapi[24];
    $weather["humidity"]=number_format($meteobridgeapi[3], 0);
    //indoor
    $weather["temp_indoor"]=$meteobridgeapi[22];
    $weather["temp_indoormax"]=$meteobridgeapi[120];
    $weather["temp_indoormin"]=$meteobridgeapi[121];
    $weather["humidity_indoor"]=$meteobridgeapi[23];
    $weather["humidity_indoor15"]=$meteobridgeapi[71];
    $weather["humidity_indoortrend"]=$meteobridgeapi[23]-$meteobridgeapi[71];
    $weather["temp_indoor_feel"]=heatIndex($meteobridgeapi[22], $meteobridgeapi[23]);
    $weather["temp_indoor_feel2"]=heatIndex($weatherflow[2], $weatherflow[3]);
    //rain
    $weather["rain_rate"]=number_format($meteobridgeapi[8], 1);
    $weather["rain_today"]=$meteobridgeapi[9];
    $weather["rain_lasthour"]=$meteobridgeapi[47];
    $weather["rain_month"]=$meteobridgeapi[19];
    $weather["rain_year"]=$meteobridgeapi[20];
    $weather["rain_24hrs"]=$meteobridgeapi[44];    
    $weather["rain_units"]=$meteobridgeapi[16];
    $weather["rain_10min"]=$meteobridgeapi[191];
    //heat index
    $weather["heat_index"]=$meteobridgeapi[180];
    $weather["heat_indexdmax"]=$meteobridgeapi[181];   
    //uv solar
    $weather["uv"]                 = $meteobridgeapi[43];
    $weather["solar"]              = round($meteobridgeapi[45],1);
    $weather["maxsolar"]           = number_format($meteobridgeapi[80],0);
    $weather["maxuv"]              = $meteobridgeapi[58];
    $weather["lux"] 			   = number_format($meteobridgeapi[45]*126.7,0, '.', '');
    //alamanac solar
	$solaroriginalDate = $meteobridgeapi[108];
    $solarydmaxtime = date("H:i", strtotime($solaroriginalDate));	
	$solaroriginalDate2 = $meteobridgeapi[110];
    $solarmmaxtime = date($dateFormat, strtotime($solaroriginalDate2));	
	$solaroriginalDate4 = $meteobridgeapi[112];
    $solarymaxtime = date($dateFormat, strtotime($solaroriginalDate4));	
	$solaroriginalDate6 = $meteobridgeapi[106];
    $solardmaxtime = date($dateFormat, strtotime($solaroriginalDate6));		
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
		  
    //wind speed-direction
    $weather["wind_speed_avg"]=round($meteobridgeapi[72], 1);
    $weather["wind_direction"]=number_format($meteobridgeapi[7], 0);
    $weather["wind_direction_avg"]=number_format($meteobridgeapi[46], 0);
    $weather["wind_speed"]=$meteobridgeapi[17];
    $weather["wind_speed_bft"]=$meteobridgeapi[12];
    $weather["wind_gust_speed"]=$meteobridgeapi[6];
    $weather["wind_speed_max"]=round($meteobridgeapi[40], 1);
    $weather["wind_gust_speed_max"]=number_format($meteobridgeapi[32], 1);
    $weather["wind_units"]=$meteobridgeapi[13];
    $weather["wind_speed_avg15"]=$meteobridgeapi[5];
    $weather["wind__speed_max10"]=number_format($meteobridgeapi[188], 1);
    $weather["wind__speed_avg10"]=number_format($meteobridgeapi[189], 1);
    $weather["wind_direction_avg10"]=number_format($meteobridgeapi[190], 1);
    $weather['winddir6h']=$meteobridgeapi[72];
    $weather["dirtrend"]=$dirtrend[0];
    $weather['wind_speed_avg30']=$meteobridgeapi[158];
    $weather['wind_speed_avgday']=$weather['wind_speed_avg30'];
    $weather['wind_direction_avgmonth']=$meteobridgeapi[179];
    if ($weather["wind_gust_speed"]==0) {
        $weather["wind_gust_speed"]=$weather["wind__speed_avg10"];
    }
    if ($weather["wind_direction"]==0) {
        $weather["wind_direction"]=$weather["wind_direction_avg"];
    }
    //weather34 windrun based on daily average
    $windrunhr=date('G');
    $windrunmin=(($windrunmin=date('i')/60));
    $windrunformula=$windrunhr=date('G')+$windrunmin;
    $weather["windrun34"]=$weather['wind_speed_avg30']*number_format($windrunformula, 1);
    $weather["sunny"]=$meteobridgeapi[57];    
    //real feel
    $weather['realfeel']=round(($weather['temp'] + 0.33*($weather['humidity']/100)*6.105*exp(17.27*$weather['temp']/(237.7+$weather['temp']))- 0.70*$weather["wind_speed"] - 4.00), 1);
    $t=7.5*$weather["temp"]/(237.7+$weather["temp"]);
    $et=pow(10, $t);
    $e=6.112*$et*($weather["humidity"]/100);    
    //humidex
    $weather["humidex"]=number_format($weather["temp"]+(5/9)*($e-10), 1);
    $weather["cloudbase"]=round(($weather["temp"] - $weather["dewpoint"])*400, 1);
    $weather["cloudbase_units"]='ft';
    $weather["wind_run"]=$meteobridgeapi[17]/12;
    //system
    $weather["swversion"]=$meteobridgeapi[38];
    $weather["build"]=$meteobridgeapi[39];
    $weather["hardware"]='Davis Vantage Pro 2';
    $weather["actualhardware"]='Vantage';
    $weather["mbplatform"]=$meteobridgeapi[41];    
    // temp almanac
    $originalDate=$meteobridgeapi[83];
    $tempydmaxtime=date("H:i", strtotime($originalDate));//yesterday max time
    $originalDate1=$meteobridgeapi[85];
    $tempydmintime=date("H:i", strtotime($originalDate1));//yesterday min time
    $originalDate2=$meteobridgeapi[87];    
    $originalDate6=$meteobridgeapi[27];
    $tempdmaxtime=date('H:i', strtotime($originalDate6));
    $originalDate7=$meteobridgeapi[29];
    $tempdmintime=date('H:i', strtotime($originalDate7));
    $originalDatea9=$meteobridgeapi[126];
    $tempamaxtime=date("jS M Y", strtotime($originalDatea9));
    $weather["tempydmax"]=$meteobridgeapi[82];
    $weather["tempydmaxtime"]=$tempydmaxtime;


    $weather["tempydmin"]=$meteobridgeapi[84];
    $weather["tempydmintime"]=$tempydmintime;   
    $weather["tempdmax"]=$meteobridgeapi[26];
    $weather["tempdmaxtime"]=$tempdmaxtime;
    $weather["tempdmin"]=$meteobridgeapi[28];
    $weather["tempdmintime"]=$tempdmintime;       
    $originalDate46=$meteobridgeapi[64];
    $dewmaxtime=date('H:i', strtotime($originalDate46));
    $originalDate47=$meteobridgeapi[66];
    $dewmintime=date('H:i', strtotime($originalDate47));
    $weather["dewmax"]=$meteobridgeapi[63];
    $weather["dewmaxtime"]=$dewmaxtime;
    $weather["dewmin"]=$meteobridgeapi[65];
    $weather["dewmintime"]=$dewmintime;
    $originalDate74=$meteobridgeapi[49];
    $dewmmaxtime=date('jS M', strtotime($originalDate74));
    $originalDate75=$meteobridgeapi[51];
    $dewmmintime=date('jS M', strtotime($originalDate75));
    $weather["dewmmax"]=$meteobridgeapi[48];
    $weather["dewmmaxtime"]=$dewmmaxtime;
    $weather["dewmmin"]=$meteobridgeapi[50];
    $weather["dewmmintime"]=$dewmmintime;
    $originalDate84=$meteobridgeapi[53];
    $dewydmaxtime=date('H:i', strtotime($originalDate84));
    $originalDate85=$meteobridgeapi[121];
    $dewydmintime=date('H:i', strtotime($originalDate85));
    $weather["dewydmax"]=$meteobridgeapi[52];
    $weather["dewydmaxtime"]=$dewydmaxtime;
    $weather["dewydmin"]=$meteobridgeapi[120];
    $weather["dewydmintime"]=$dewydmintime;
    $originalDate8=$meteobridgeapi[95];


    $originalDate11=$meteobridgeapi[33];
    $winddmaxtime=date('H:i', strtotime($originalDate11));
    $originalavgDate=$meteobridgeapi[31];
    $windavgdmaxtime=date("H:i", strtotime($originalavgDate));    
    $weather["winddmax"]=$meteobridgeapi[32];
    $weather["winddmaxtime"]=$winddmaxtime;
    $originalDate12=$meteobridgeapi[102];
    $rainmmaxtime=date("jS M H:i", strtotime($originalDate12));
    $originalDate13=$meteobridgeapi[104];
    $rainymaxtime=date("jS M Y", strtotime($originalDate13));
    $originalDate124=$meteobridgeapi[124];
    $rainlasttime=date("jS M Y ", strtotime($originalDate124));
    $rainlasttime1=date("jS M ", strtotime($originalDate124));
    $rainlasttime2=date("Y", strtotime($originalDate124));
    $originalDate25=$meteobridgeapi[124];
    $rainlastmonth=date("F", strtotime($originalDate25));
    $originalDate26=$meteobridgeapi[124];
    $rainlasttoday=date("H:i", strtotime($originalDate26));
    $originalDate27=$meteobridgeapi[124];
    $rainlasttoday1=date("jS", strtotime($originalDate27));
    $weather["rainydmax"]=$meteobridgeapi[100];
    $weather["rainmmax"]=$meteobridgeapi[101];
    $weather["rainmmaxtime"]=$rainmmaxtime;
    $weather["rainymax"]=$meteobridgeapi[103];
    $weather["rainymaxtime"]=$rainymaxtime;
    $baromaxoriginalDateb0=$meteobridgeapi[136];
    $baromaxtimeyest=date("H:i", strtotime($baromaxoriginalDateb0));
    $barominoriginalDateb1=$meteobridgeapi[138];
    $baromintimeyest=date("H:i", strtotime($barominoriginalDateb1));
    $weather["thb0seapressydmaxtime"]=$baromaxtimeyest;
    $weather["thb0seapressydmintime"]=$baromintimeyest;
    $weather["thb0seapressydmax"]=$meteobridgeapi[135];
    $weather["thb0seapressydmin"]=$meteobridgeapi[137];
    $baromaxoriginalDateb2=$meteobridgeapi[140];
    $baromaxtimemonth=date("jS M", strtotime($baromaxoriginalDateb2));
    $barominoriginalDateb3=$meteobridgeapi[142];
    $baromintimemonth=date("jS M", strtotime($barominoriginalDateb3));
    $weather["thb0seapressmonthmaxtime"]=$baromaxtimemonth;
    $weather["thb0seapressmonthmintime"]=$baromintimemonth;
    $weather["thb0seapressmmax"]=$meteobridgeapi[139];
    $weather["thb0seapressmmin"]=$meteobridgeapi[141];
    $baromaxoriginalDateb4=$meteobridgeapi[144];
    $baromaxtimeyear=date("jS M", strtotime($baromaxoriginalDateb4));
    $barominoriginalDateb5=$meteobridgeapi[146];
    $baromintimeyear=date("jS M", strtotime($barominoriginalDateb5));
    $weather["thb0seapressyearmaxtime"]=$baromaxtimeyear;
    $weather["thb0seapressyearmintime"]=$baromintimeyear;
    $weather["thb0seapressymax"]=$meteobridgeapi[143];
    $weather["thb0seapressymin"]=$meteobridgeapi[145];
    $baromaxoriginalDateb6=$meteobridgeapi[148];
    $baromaxtimeall=date("jS M Y", strtotime($baromaxoriginalDateb6));
    $barominoriginalDateb7=$meteobridgeapi[150];
    $baromintimeall=date("jS M Y", strtotime($barominoriginalDateb7));
    $weather["thb0seapressamaxtime"]=$baromaxtimeall;
    $weather["thb0seapressamintime"]=$baromintimeall;
    $weather["thb0seapressamax"]=$meteobridgeapi[147];
    $weather["thb0seapressamin"]=$meteobridgeapi[149];
    $baromaxoriginalDate=$meteobridgeapi[35];
    $baromaxtime=date("H:i", strtotime($baromaxoriginalDate));
    $barominoriginalDate=$meteobridgeapi[37];
    $baromintime=date("H:i", strtotime($barominoriginalDate));
    $weather["thb0seapressmaxtime"]=$baromaxtime;
    $weather["thb0seapressmintime"]=$baromintime;
    //trends
    $weather["temp_trend"]=number_format($meteobridgeapi[2], 1)- number_format($meteobridgeapi[67], 1);
    $weather["humidity_trend"]=number_format($meteobridgeapi[3], 0)- number_format($meteobridgeapi[68], 0);
    $weather["dewpoint_trend"]=number_format($meteobridgeapi[4], 1)- number_format($meteobridgeapi[69], 1);
    $weather["temp_indoor_trend"]=number_format($meteobridgeapi[22], 1)- number_format($meteobridgeapi[70], 1);
    $weather["temp_humidity_trend"]=number_format($meteobridgeapi[23], 1)- number_format($meteobridgeapi[71], 1);
    $weather["barotrend"]=$meteobridgeapi[10] - $barotrend[0];   
    
    //hum max
    $weather["humidity_max"]=number_format($meteobridgeapi[59], 0);
    $originalDate734=$meteobridgeapi[60];
    $hummaxtime=date('H:i', strtotime($originalDate734));
    $weather["humidity_maxtime"]=$hummaxtime;
    //hum min
    $weather["humidity_min"]=number_format($meteobridgeapi[61], 0);
    $originalDate774=$meteobridgeapi[62];
    $hummintime=date('H:i', strtotime($originalDate774));
    $weather["humidity_mintime"]=$hummintime;   
    //hum yesterday max
    $weather["humidity_ydmax"]=number_format($meteobridgeapi[167], 0);
    $originalDate758=$meteobridgeapi[168];
    $humydmaxtime=date('H:i', strtotime($originalDate758));
    $weather["humidity_ydmaxtime"]=$humydmaxtime;
    //hum yesterday min
    $weather["humidity_ydmin"]=number_format($meteobridgeapi[169], 0);
    $originalDate759=$meteobridgeapi[170];
    $humydmintime=date('H:i', strtotime($originalDate759));
    $weather["humidity_ydmintime"]=$humydmintime;

    //weather34 start meteobridge conversions
    if ($weather["barometer_units"]=="in") {
        $weather["barometer_units"]="inHg";
    }
} if ($tempunit!=$weather["temp_units"]) {
    if ($tempunit=="C") {
        fToC($weather, "temp_indoor");
        fToC($weather, "indoor2");
        fToC($weather, "temp_indoormax");
        fToC($weather, "temp_indoormin");
        fToC($weather, "temp");
        fToC($weather, "temp2");
        fToC($weather, "temp_avg");
        fToC($weather, "windchill");
        fToC($weather, "heat_index");
        fToC($weather, "heat_indexymax");
        fToC($weather, "heat_indexdmax");
        fToC($weather, "windchillymin");
        fToC($weather, "windchilldmin");
        fToC($weather, "dewpoint");
        fToC($weather, "temp_indoor_feel");
        fToC($weather, "temp_indoor_feel2");
        fToC($weather, "temp_feel");
        fToC($weather, "temp_today_high");
        fToC($weather, "temp_today_low");
        fToC($weather, "avgtemp");
        fToC($weather, "temp_avgtoday");
        fToC($weather, "tempydmax");
        fToC($weather, "tempydmin");
        fToC($weather, "tempmmax");
        fToC($weather, "tempmmin");
        fToC($weather, "tempymax");
        fToC($weather, "tempymin");
        fToC($weather, "tempyearavg");
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
        fToCrel($weather, "temp_trend");
        fToCrel($weather, "dewpoint_trend");
        fToCrel($weather, "humidex");
        $weather["temp_units"]=$tempunit;
    } elseif ($tempunit=="F") {
        cToF($weather, "temp_indoor");
        cToF($weather, "temp");
        cToF($weather, "indoor2");
        cToF($weather, "temp2");
        cToF($weather, "temp_avg");
        cToF($weather, "temp_indoormax");
        cToF($weather, "temp_indoormin");
        cToF($weather, "windchill");
        cToF($weather, "heat_index");
        cToF($weather, "heat_indexdmax");
        cToF($weather, "heat_indexymax");
        cToF($weather, "windchillymin");
        cToF($weather, "windchilldmin");
        cToF($weather, "dewpoint");
        cToF($weather, "temp_indoor_feel");
        cToF($weather, "temp_indoor_feel2");
        cToF($weather, "temp_feel");
        cToF($weather, "temp_today_high");
        cToF($weather, "temp_today_low");
        cToF($weather, "avgtemp");
        cToF($weather, "temp_avgtoday");
        cToF($weather, "tempydmax");
        cToF($weather, "tempydmin");
        cToF($weather, "tempamax");
        cToF($weather, "tempamin");
        cToF($weather, "tempmmax");
        cToF($weather, "tempmmin");
        cToF($weather, "tempymax");
        cToF($weather, "tempymin");
        cToF($weather, "tempyearavg");
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
        cToFrel($weather, "temp_trend");
        cToFrel($weather, "dewpoint_trend");
        cToFrel($weather, "humidex");
        $weather["temp_units"]=$tempunit;
    }
}
if ($rainunit!=$weather["rain_units"]) {
    if ($rainunit=="mm") {
        inTomm($weather, "rain_rate");
        inTomm($weather, "rain_today");
        inTomm($weather, "rain_month");
        inTomm($weather, "rain_year");
        inTomm($weather, "rainydmax");
        inTomm($weather, "rain_lasthour");
        inTomm($weather, "rainymax");
        inTomm($weather, "rainmmax");
        inTomm($weather, "rain_24hrs");
        inTomm($weather, "rain_alltime");
        inTomm($weather, "rainlastmonth");
        inTomm($weather, "rainlastyear");
        $weather["rain_units"]=$rainunit;
    } elseif ($rainunit=="in") {
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
        mmToin($weather, "rain_alltime");
        $weather["rain_units"]=$rainunit;
    }
}


if ($pressureunit!=$weather["barometer_units"]) {
    if (($pressureunit=='hPa'&&$weather["barometer_units"]=='mb')||($pressureunit=='mb'&&$weather["barometer_units"]=='hPa')) {
        $weather["barometer_units"]=$pressureunit;
    } elseif ($pressureunit=="inHg"&&($weather["barometer_units"]=='mb'||$weather["barometer_units"]=='hPa')) {
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
        mbToin($weather, "barometer_24h");
        mbToin($weather, "barometer_trendt");
        $weather["barometer_units"]=$pressureunit;
    } elseif (($pressureunit=="mb"||$pressureunit=='hPa')&&$weather["barometer_units"]=='inHg') {
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
        inTomb($weather, "barotrend_24h");
        inTomb($weather, "barometer_trendt");
        $weather["barometer_units"]=$pressureunit;
    }
}

if ($windunit!=$weather["wind_units"]) {
    if ($windunit=='mph'&&$weather["wind_units"]=='kts') {
        ktsTomph($weather, "wind_speed");
        ktsTomph($weather, "wind_speed2");
        ktsTomph($weather, "wind_speed_trend");
        ktsTomph($weather, "wind_gust_speed");
        ktsTomph($weather, "wind_gust_speed2");
        ktsTomph($weather, "wind_gust_speed_trend");
        ktsTomph($weather, "wind_speed_max");
        ktsTomph($weather, "wind_gust_speed_max");
        ktsTomph($weather, "wind_run");
        ktsTomph($weather, "wind_speed_avg");
        ktsTomph($weather, "wind_speed_avg15");
        ktsTomph($weather, "wind_speed_avg30");        
        ktsTomph($weather, "windrun34");
        ktsTomph($weather, "winddmax");             
        ktsTomph($weather, "windrun34");
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='mph'&&$weather["wind_units"]=='km/h') {
        kmhTomph($weather, "wind_speed");
        kmhTomph($weather, "wind_speed2");
        kmhTomph($weather, "wind_speed_trend");
        kmhTomph($weather, "wind_gust_speed");
        kmhTomph($weather, "wind_gust_speed2");
        kmhTomph($weather, "wind_gust_speed_trend");
        kmhTomph($weather, "wind_speed_max");
        kmhTomph($weather, "wind_gust_speed_max");
        kmhTomph($weather, "wind_run");
        kmhTomph($weather, "wind_speed_avg");
        kmhTomph($weather, "wind_speed_avg15");
        kmhTomph($weather, "wind_speed_avg30");        
        kmhTomph($weather, "winddmax");        
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='mph'&&$weather["wind_units"]=='m/s') {
        msTomph($weather, "wind_speed");
        msTomph($weather, "wind_speed2");
        msTomph($weather, "wind_speed_trend");
        msTomph($weather, "wind_gust_speed");
        msTomph($weather, "wind_gust_speed2");
        msTomph($weather, "wind_gust_speed_trend");
        msTomph($weather, "wind_speed_max");
        msTomph($weather, "wind_gust_speed_max");
        msTomph($weather, "wind_run");
        msTomph($weather, "wind_speed_avg");
        msTomph($weather, "wind_speed_avg15");
        msTomph($weather, "wind_speed_avg30");
        msTomph($weather, "winddmax");
        msTomph($weather, "windrun34");       
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='km/h'&&$weather["wind_units"]=='kts') {
        ktsTokmh($weather, "wind_speed");
        ktsTokmh($weather, "wind_speed2");
        ktsTokmh($weather, "wind_speed_trend");
        ktsTokmh($weather, "wind_gust_speed");
        ktsTokmh($weather, "wind_gust_speed2");
        ktsTokmh($weather, "wind_gust_speed_trend");
        ktsTokmh($weather, "wind_speed_max");
        ktsTokmh($weather, "wind_gust_speed_max");
        ktsTokmh($weather, "wind_run");
        ktsTokmh($weather, "wind_speed_avg");
        ktsTokmh($weather, "wind_speed_avg15");
        ktsTokmh($weather, "wind_speed_avg30");
        ktsTokmh($weather, "winddmax");
        ktsTokmh($weather, "windrun34");        
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='km/h'&&$weather["wind_units"]=='mph') {
        mphTokmh($weather, "wind_speed");
        mphTokmh($weather, "wind_speed2");
        mphTokmh($weather, "wind_speed_trend");
        mphTokmh($weather, "wind_gust_speed");
        mphTokmh($weather, "wind_gust_speed2");
        mphTokmh($weather, "wind_gust_speed_trend");
        mphTokmh($weather, "wind_speed_max");
        mphTokmh($weather, "wind_gust_speed_max");
        mphTokmh($weather, "wind_run");
        mphTokmh($weather, "wind_speed_avg");
        mphTokmh($weather, "wind_speed_avg15");
        mphTokmh($weather, "wind_speed_avg30");
        mphTokmh($weather, "winddmax");
        mphTokmh($weather, "windrun34");        
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='km/h'&&$weather["wind_units"]=='m/s') {
        msTokmh($weather, "wind_speed");
        msTokmh($weather, "wind_speed2");
        msTokmh($weather, "wind_speed_trend");
        msTokmh($weather, "wind_gust_speed");
        msTokmh($weather, "wind_gust_speed2");
        msTokmh($weather, "wind_gust_speed_trend");
        msTokmh($weather, "wind_speed_max");
        msTokmh($weather, "wind_gust_speed_max");
        msTokmh($weather, "wind_run");
        msTokmh($weather, "wind_speed_avg");
        msTokmh($weather, "wind_speed_avg15");
        msTokmh($weather, "wind_speed_avg30");
        msTokmh($weather, "winddmax");
        msTokmh($weather, "windrun34");        
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='m/s'&&$weather["wind_units"]=='kts') {
        ktsToms($weather, "wind_speed");
        ktsToms($weather, "wind_speed2");
        ktsToms($weather, "wind_speed_trend");
        ktsToms($weather, "wind_gust_speed");
        ktsToms($weather, "wind_gust_speed2");
        ktsToms($weather, "wind_gust_speed_trend");
        ktsToms($weather, "wind_speed_max");
        ktsToms($weather, "wind_gust_speed_max");
        ktsTomph($weather, "wind_gust_speed1");
        ktsToms($weather, "wind_run");
        ktsToms($weather, "wind_speed_avg");
        ktsToms($weather, "wind_speed_avg15");
        ktsToms($weather, "wind_speed_avg30");
        ktsToms($weather, "winddmax");
        ktsToms($weather, "windrun34");        
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='m/s'&&$weather["wind_units"]=='mph') {
        mphToms($weather, "wind_speed");
        mphToms($weather, "wind_speed2");
        mphToms($weather, "wind_speed_trend");
        mphToms($weather, "wind_gust_speed");
        mphToms($weather, "wind_gust_speed2");
        mphToms($weather, "wind_gust_speed_trend");
        mphToms($weather, "wind_speed_max");
        mphToms($weather, "wind_gust_speed_max");
        mphToms($weather, "wind_run");
        mphToms($weather, "wind_speed_avg");
        mphToms($weather, "wind_speed_avg15");
        mphToms($weather, "wind_speed_avg30");
        mphToms($weather, "winddmax");
        mphToms($weather, "windrun34");       
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='m/s'&&$weather["wind_units"]=='km/h') {
        kmhToms($weather, "wind_speed");
        kmhToms($weather, "wind_speed2");
        kmhToms($weather, "wind_speed_trend");
        kmhToms($weather, "wind_gust_speed");
        kmhToms($weather, "wind_gust_speed2");
        kmhToms($weather, "wind_gust_speed_trend");
        kmhToms($weather, "wind_speed_max");
        kmhToms($weather, "wind_gust_speed_max");
        kmhToms($weather, "wind_run");
        kmhToms($weather, "wind_speed_avg");
        kmhToms($weather, "wind_speed_avg15");
        kmhToms($weather, "wind_speed_avg30");
        kmhToms($weather, "winddmax");
        kmhToms($weather, "windrun34");        
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='kts'&&$weather["wind_units"]=='m/s') {
        msTokts($weather, "wind_speed");
        msTokts($weather, "wind_speed2");
        msTokts($weather, "wind_speed_trend");
        msTokts($weather, "wind_gust_speed");
        msTokts($weather, "wind_gust_speed2");
        msTokts($weather, "wind_gust_speed_trend");
        msTokts($weather, "wind_speed_max");
        msTokts($weather, "wind_gust_speed_max");
        msTokts($weather, "wind_run");
        msTokts($weather, "wind_speed_avg");
        msTokts($weather, "wind_speed_avg15");
        msTokts($weather, "wind_speed_avg30");
        msTokts($weather, "winddmax");
        msTokts($weather, "windrun34");        
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='kts'&&$weather["wind_units"]=='mph') {
        mphTokts($weather, "wind_speed");
        mphTokts($weather, "wind_speed2");
        mphTokts($weather, "wind_speed_trend");
        mphTokts($weather, "wind_gust_speed");
        mphTokts($weather, "wind_gust_speed2");
        mphTokts($weather, "wind_gust_speed_trend");
        mphTokts($weather, "wind_speed_max");
        mphTokts($weather, "wind_gust_speed_max");
        mphTokts($weather, "wind_run");
        mphTokts($weather, "wind_speed_avg");
        mphTokts($weather, "wind_speed_avg15");
        mphTokts($weather, "wind_speed_avg30");
        mphTokts($weather, "winddmax");
        mphTokts($weather, "windrun34");       
        $weather["wind_units"]=$windunit;
    } elseif ($windunit=='kts'&&$weather["wind_units"]=='km/h') {
        kmhTokts($weather, "wind_speed");
        kmhTokts($weather, "wind_speed2");
        kmhTokts($weather, "wind_speed_trend");
        kmhTokts($weather, "wind_gust_speed");
        kmhTokts($weather, "wind_gust_speed2");
        kmhTokts($weather, "wind_gust_speed_trend");
        kmhTokts($weather, "wind_speed_max");
        kmhTokts($weather, "wind_gust_speed_max");
        kmhTokts($weather, "wind_run");
        kmhTokts($weather, "wind_speed_avg");
        kmhTokts($weather, "wind_speed_avg15");
        kmhTokts($weather, "wind_speed_avg30");
        kmhTokts($weather, "winddmax");
        kmhTokts($weather, "windrun34");        
        $weather["wind_units"]=$windunit;
    }
}$toKnots=1;
if ($weather["wind_units"]=='mph') {
    $toKnots=0.868976;
} elseif ($weather["wind_units"]=='km/h') {
    $toKnots=0.539957;
} elseif ($weather["wind_units"]=='m/s') {
    $toKnots=1.94384;
}date_default_timezone_set($TZ);