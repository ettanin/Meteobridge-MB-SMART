<?php error_reporting(0);
// Speed
function msTokmh(&$weather, $field){if(!isset($weather[$field])) return;$weather[$field] = number_format(3.6*$weather[$field],1);}
function msTokts(&$weather, $field){if(!isset($weather[$field])) return;$weather[$field] = round((float)(1.943844*$weather[$field]), 1);}
function msTomph(&$weather, $field){if(!isset($weather[$field])) return;$weather[$field] = number_format(2.236936*$weather[$field], 2);}
// Temperature
function cToF(&$weather, $field){if(!isset($weather[$field])) return;$weather[$field] = cToFDirect($weather[$field]);}
function fToC(&$weather, $field){if(!isset($weather[$field])) return;$weather[$field] = fToCDirect($weather[$field]);}
function cToFrel(&$weather, $field){if(!isset($weather[$field])) return;	$weather[$field] = round((float)(1.8*$weather[$field]), 1);}
function fToCrel(&$weather, $field){if(!isset($weather[$field])) return;$weather[$field] = round((float)(0.55555556*($weather[$field])), 1);}
function fToCDirect($field){return round((float)(0.55555556*($field - 32)), 1);}
function cToFDirect($field){return  number_format((float)$field*1.8 +32,1);}
// Pressure
function mbToin(&$weather, $field){if(!isset($weather[$field])) return;	$weather[$field] = round((float)(0.02952999*$weather[$field]), 2);}
function inTomb(&$weather, $field){	if(!isset($weather[$field])) return;$weather[$field] = round((float)(33.86388158*$weather[$field]), 2);}
// Depth
function mmToin(&$weather, $field){if(!isset($weather[$field])) return;$weather[$field] = number_format(0.03937008*$weather[$field], 2);}
function inTomm(&$weather, $field){if(!isset($weather[$field])) return;	$weather[$field] =number_format(25.4*$weather[$field], 1);}
// Calculates "real feel" heat index valid only at lower temperatures (up to 79 F)
function heatIndexLow($t, $rh) {return 0.5 * ($t + 61.0 + (($t - 68.0) * 1.2) + ($rh * 0.094));}
// Calculates "real feel" heat index valid only at higher temperatures (beginning around 79-80 F), the traditional heat index formula
function heatIndexHigh($t, $rh) {$heatIndex = -42.379 + 2.04901523 * $t + 10.1433127*$rh - .22475441*$t*$rh - .00683783 *$t * $t - .05481717 * $rh * $rh + .00122874*$t*$t*$rh + .00085282 *$t * $rh *$rh - .00000199 *$t *$t *$rh * $rh;$a = 0;if ($rh < 13 && ($t >= 80 && $t <= 112)) {$a=((13 - $rh ) / 4) * sqrt((17-abs($t - 95))/17);$a = -$a;};if ($rh > 85 && ($t >= 80 && $t <= 87)) {$a=(($rh - 85)/10) * ((87 - $t) / 5);};$heatIndex += $a;return $heatIndex;}
// Ruthfusz heat index formula
// http://www.wpc.ncep.noaa.gov/html/heatindex_equation.shtml
function heatIndex($temp, $rh) {global $weather;$t = anyToF($temp);
// First try simple formula, valid when calculated heat index <= 79 degrees F
$heatIndex = heatIndexLow($t, $rh);
// If too warm, do the complicated formula instead
if ($heatIndex >= 79){$heatIndex = heatIndexHigh($t, $rh);}$weather["temp_units"]='C';if ($weather["temp_units"] == 'C'){$heatIndex = fToCDirect($heatIndex);}return round($heatIndex, 1);}

function anyToC($field){global $weather;if ($weather["temp_units"] == 'C'){	return $field;} else {return fToCDirect($field);}}
function anyToF($field){return cToFDirect ($field);	}
// Great circle calculation uses the radius of earth, 6371 km
function distance($lat, $lon, $lati, $longi) {$lat1 = deg2rad($lati);$lat2 = deg2rad($lat);$long1 = deg2rad($longi);$long2 = deg2rad($lon);
return 6371 * acos(sin($lat1)*sin($lat2) + cos($lat1)*cos($lat2)*cos($long2-$long1));}
?>
<?php 
$info='<svg  viewBox="0 0 32 32" width=10 height=10 fill=none stroke=silver stroke-linecap=round stroke-linejoin=round stroke-width=6.25%><path d="M16 14 L16 23 M16 8 L16 10" /><circle cx=16 cy=16 r=14 /></svg> ';
$fallingsymbol='<svg id="falling" width="16" height="16" viewBox="0 0 24 24"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><polyline points="17 18 23 18 23 12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>';
$risingsymbol='<svg id="rising" width="16" height="16" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><polyline points="17 6 23 6 23 12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>';
$tempfallingsymbol='<svg id="falling temp" width="16" height="16" viewBox="0 0 24 24"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><polyline points="17 18 23 18 23 12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>';
$temprisingsymbol='<svg id="rising temp" width="16" height="16" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><polyline points="17 6 23 6 23 12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>';
$steadysymbol='<svg id="steadybarometer" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>';
$arrowsymbol='<svg id="arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>';	
$arrowsymbol='<svg id="arrow" width="16" height="16" viewBox="0 0 17 18" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>';
//weather34 beaufort
$beaufort0='<svg id="weather34 bft0 calm" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#aaa" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 42.39 20.62 C 51.40 18.80 61.26 21.58 67.72 28.18 C 72.37 33.32 76.08 39.84 76.03 46.95 C 76.90 61.75 63.98 75.82 49.07 75.88 C 34.47 76.94 20.93 64.49 20.01 50.07 C 18.76 36.54 29.04 23.08 42.39 20.62 M 42.50 28.79 C 33.81 31.19 27.33 40.09 27.98 49.12 C 28.45 59.28 37.72 68.28 48.01 67.94 C 57.97 68.25 66.94 59.86 67.96 50.09 C 68.99 41.50 63.52 32.72 55.56 29.51 C 51.45 27.80 46.77 27.67 42.50 28.79 Z" /><path fill="#fff" stroke="#fff" stroke-width="0.09375" opacity="1.00" d=" M 47.33 36.16 C 54.36 35.51 60.80 42.06 59.99 49.07 C 59.51 55.87 52.46 61.15 45.80 59.61 C 38.41 58.73 33.64 49.68 37.08 43.09 C 38.85 39.03 42.93 36.37 47.33 36.16 Z" /></svg>';
$beaufort1='<svg id="weather34 bft1" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#00a4b4" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 73.92 43.89 C 77.12 40.10 82.80 39.45 87.34 40.81 C 91.48 42.01 93.99 45.85 96.00 49.39 L 96.00 56.58 C 94.00 60.14 91.49 63.99 87.34 65.19 C 82.80 66.55 77.13 65.90 73.92 62.11 C 72.32 60.28 71.03 58.19 69.69 56.16 C 46.47 55.76 23.23 56.12 0.00 56.00 L 0.00 50.00 C 23.23 49.88 46.47 50.24 69.69 49.84 C 71.03 47.81 72.31 45.73 73.92 43.89 Z" /></svg>';
$beaufort2='<svg id="weather34 bft2" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#00a4b4" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 33.38 C 1.68 32.46 3.19 31.28 4.67 30.09 C 10.04 36.72 15.42 43.36 20.80 50.00 C 37.23 49.99 53.66 50.03 70.09 49.98 C 71.41 47.21 72.76 44.23 75.39 42.45 C 79.66 39.54 85.60 39.45 90.03 42.07 C 93.26 44.08 95.26 47.64 96.00 51.31 L 96.00 54.79 C 95.15 58.68 92.92 62.47 89.30 64.34 C 84.74 66.62 78.83 66.29 74.79 63.09 C 72.52 61.29 71.31 58.57 70.10 56.02 C 46.73 55.97 23.37 56.02 0.00 56.00 L 0.00 49.94 C 4.33 50.04 8.66 50.00 13.00 49.99 C 8.62 44.92 4.88 39.28 0.00 34.68 L 0.00 33.38 Z" /></svg>';
$beaufort3='<svg id="weather34 bft3" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#e6a141" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 33.44 C 1.67 32.50 3.17 31.28 4.64 30.06 C 10.04 36.70 15.41 43.36 20.80 50.00 C 37.24 49.99 53.68 50.02 70.12 49.98 C 71.39 47.19 72.76 44.24 75.38 42.46 C 79.66 39.55 85.61 39.46 90.05 42.08 C 93.25 44.09 95.22 47.60 96.00 51.23 L 96.00 54.90 C 95.16 58.48 93.20 61.96 90.01 63.95 C 85.59 66.53 79.71 66.44 75.44 63.58 C 72.79 61.80 71.39 58.83 70.12 56.02 C 52.75 55.98 35.38 56.01 18.01 56.00 C 11.92 48.94 6.53 41.24 0.00 34.58 L 0.00 33.44 Z" /></svg>';
$beaufort4='<svg id="weather34 bft4" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#e6a141" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 33.39 C 1.62 32.38 3.17 31.27 4.69 30.10 C 10.05 36.74 15.43 43.37 20.80 50.01 C 22.27 49.99 23.73 49.99 25.20 49.99 C 22.39 46.60 19.61 43.19 16.80 39.80 C 18.34 38.53 19.87 37.27 21.40 36.00 C 25.26 40.67 29.13 45.33 33.00 50.00 C 45.36 49.99 57.72 50.02 70.08 49.98 C 71.35 47.43 72.52 44.67 74.84 42.87 C 79.08 39.57 85.34 39.34 89.94 42.02 C 93.23 44.01 95.21 47.59 96.00 51.27 L 96.00 54.84 C 95.16 58.45 93.23 61.98 89.99 63.95 C 85.38 66.65 79.11 66.44 74.86 63.15 C 72.54 61.35 71.34 58.58 70.08 56.02 C 52.72 55.98 35.37 56.01 18.01 56.00 C 11.92 48.97 6.60 41.23 0.00 34.67 L 0.00 33.39 Z" /></svg>';
$beaufort5='<svg id="weather34 bft5" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#ec5a34" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 4.55 30.01 C 10.04 36.62 15.37 43.37 20.82 50.01 C 22.21 50.00 23.60 49.99 25.00 49.99 C 20.67 44.66 16.33 39.33 12.00 34.00 C 13.53 32.67 15.07 31.34 16.60 30.01 C 22.01 36.67 27.39 43.35 32.82 50.01 C 45.26 49.98 57.71 50.02 70.15 49.99 C 71.41 46.91 73.07 43.77 76.03 42.02 C 79.40 40.12 83.56 39.63 87.24 40.85 C 91.95 42.11 95.08 46.63 96.00 51.23 L 96.00 55.03 C 95.11 58.56 93.16 61.97 90.02 63.95 C 85.60 66.53 79.71 66.45 75.44 63.58 C 72.80 61.79 71.34 58.86 70.15 56.01 C 52.77 55.99 35.39 56.00 18.02 56.00 C 11.93 48.90 6.44 41.24 0.00 34.48 L 0.00 33.53 C 1.72 32.64 3.15 31.32 4.55 30.01 Z" /></svg>';
$beaufort6='<svg id="weather34 bft6" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#ec5a34" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 4.55 30.01 C 10.03 36.62 15.37 43.35 20.81 50.00 C 22.20 50.00 23.60 50.00 24.99 49.99 C 20.67 44.65 16.33 39.34 12.01 34.00 C 13.53 32.66 15.07 31.33 16.60 30.00 C 22.02 36.67 27.39 43.38 32.84 50.02 C 34.22 50.01 35.60 49.99 36.98 49.98 C 32.67 44.64 28.31 39.34 24.01 33.99 C 25.54 32.66 27.07 31.33 28.60 30.01 C 34.01 36.67 39.39 43.35 44.81 50.00 C 53.26 49.99 61.71 50.01 70.15 49.99 C 71.04 48.00 71.89 45.95 73.36 44.31 C 76.67 40.43 82.45 39.34 87.19 40.83 C 91.91 42.08 95.07 46.60 96.00 51.22 L 96.00 54.75 C 95.20 58.73 92.83 62.57 89.13 64.44 C 84.81 66.48 79.42 66.27 75.43 63.58 C 72.80 61.79 71.34 58.86 70.15 56.01 C 52.77 55.99 35.39 56.01 18.01 56.00 C 11.92 48.94 6.51 41.22 0.00 34.56 L 0.00 33.45 C 1.83 32.80 3.11 31.23 4.55 30.01 Z" /></svg>'; 
$beaufort7='<svg id="weather34 bft7" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#d65b4a" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 34.01 C 1.53 32.68 3.03 31.30 4.61 30.03 C 10.06 36.65 15.35 43.40 20.85 49.98 C 22.23 50.02 23.60 50.02 24.98 49.97 C 20.67 44.64 16.31 39.36 12.04 34.00 C 13.53 32.64 15.05 31.31 16.61 30.03 C 22.05 36.65 27.35 43.39 32.84 49.98 C 34.22 50.02 35.60 50.02 36.98 49.98 C 32.69 44.64 28.30 39.37 24.04 34.00 C 25.53 32.64 27.05 31.31 28.61 30.03 C 34.05 36.65 39.36 43.39 44.83 49.98 C 46.35 50.02 47.86 50.02 49.38 49.99 C 46.62 46.57 43.78 43.22 41.03 39.80 C 42.53 38.52 44.05 37.24 45.61 36.03 C 49.51 40.65 53.29 45.38 57.22 49.98 C 61.55 50.03 65.88 50.00 70.21 49.99 C 71.17 47.29 72.62 44.67 74.86 42.84 C 78.91 39.72 84.66 39.43 89.20 41.60 C 92.85 43.49 95.26 47.32 96.00 51.30 L 96.00 54.66 C 95.11 60.04 90.82 65.13 85.16 65.58 C 78.59 67.06 71.90 62.43 70.21 56.01 C 52.82 55.97 35.43 56.04 18.04 55.98 C 11.96 48.71 6.04 41.31 0.00 34.01 L 0.00 34.01 Z" /></svg>';
$beaufort8='<svg id="weather34 bft8" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#d65b4a" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 4.64 30.07 C 10.05 36.70 15.41 43.37 20.82 50.01 C 22.21 50.00 23.60 50.00 25.00 49.99 C 20.66 44.66 16.33 39.33 12.00 34.00 C 13.54 32.67 15.07 31.34 16.60 30.00 C 22.01 36.67 27.40 43.35 32.81 50.01 C 34.21 50.00 35.60 49.99 37.00 49.99 C 32.66 44.66 28.33 39.33 24.00 34.00 C 25.54 32.67 27.07 31.34 28.60 30.00 C 34.01 36.67 39.40 43.35 44.82 50.01 C 46.21 50.00 47.60 50.00 49.00 49.99 C 44.66 44.66 40.33 39.33 36.00 34.00 C 37.54 32.67 39.07 31.34 40.60 30.00 C 46.01 36.67 51.40 43.35 56.81 50.01 C 58.34 50.00 59.86 50.00 61.39 49.99 C 58.60 46.59 55.80 43.20 53.00 39.80 C 54.54 38.53 56.07 37.27 57.61 36.01 C 61.73 40.79 65.44 45.94 69.89 50.42 C 71.21 47.70 72.41 44.73 74.89 42.83 C 79.11 39.58 85.30 39.36 89.89 41.99 C 93.19 43.96 95.20 47.55 96.00 51.23 L 96.00 54.77 C 95.21 58.43 93.21 62.00 89.94 63.98 C 85.52 66.55 79.63 66.43 75.40 63.55 C 72.77 61.77 71.38 58.81 70.11 56.01 C 52.74 55.99 35.38 56.01 18.01 56.00 C 11.92 48.95 6.57 41.23 0.00 34.64 L 0.00 33.40 C 1.68 32.49 3.18 31.30 4.64 30.07 Z" /></svg>';
$beaufort9='<svg id="weather34 bft9" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#d65b4a" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 29.97 C 5.29 36.34 10.66 42.65 15.99 48.99 C 16.01 42.66 15.99 36.34 16.00 30.01 C 21.61 36.67 27.19 43.34 32.80 50.00 C 45.26 49.99 57.71 50.02 70.16 49.98 C 71.97 43.66 78.38 39.03 85.02 40.35 C 90.73 40.87 95.12 45.87 96.00 51.36 L 96.00 54.55 C 95.18 60.08 90.75 65.14 85.00 65.66 C 78.37 66.96 71.98 62.34 70.16 56.02 C 46.77 55.98 23.39 56.01 0.00 56.00 L 0.00 29.97 Z" /></svg>';
$beaufort10='<svg id="weather34 bft10"  width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#d65b4a" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 29.97 C 5.30 36.33 10.66 42.65 15.99 48.98 C 16.01 42.66 15.99 36.34 16.00 30.02 C 21.62 36.67 27.19 43.35 32.81 50.00 C 34.20 50.00 35.60 49.99 36.99 50.00 C 33.74 45.99 30.46 42.01 27.21 38.00 C 28.66 36.67 30.12 35.34 31.58 34.01 C 36.02 39.32 40.38 44.69 44.81 50.00 C 53.27 49.99 61.72 50.02 70.18 49.99 C 71.39 46.85 73.14 43.69 76.15 41.96 C 80.11 39.71 85.11 39.63 89.20 41.59 C 92.87 43.50 95.27 47.34 96.00 51.35 L 96.00 54.56 C 95.18 60.08 90.75 65.14 85.02 65.65 C 78.40 66.97 71.95 62.35 70.18 56.01 C 46.79 55.98 23.39 56.01 0.00 56.00 L 0.00 29.97 Z" /></svg>';
$beaufort11='<svg id="weather34 bft11" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#d65b4a" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 29.97 C 5.57 36.68 11.20 43.33 16.81 50.00 C 34.60 49.99 52.38 50.02 70.16 49.99 C 71.98 43.63 78.44 39.00 85.10 40.36 C 90.77 40.90 95.07 45.87 96.00 51.29 L 96.00 54.67 C 95.15 59.33 91.95 63.89 87.21 65.17 C 82.45 66.67 76.62 65.56 73.32 61.64 C 71.87 60.01 71.03 57.98 70.16 56.01 C 46.77 55.99 23.39 56.01 0.00 56.00 L 0.00 29.97 Z" /></svg>';
$beaufort12='<svg id="weather34 bft12" width="20pt" height="20pt" viewBox="0 0 96 96" ><path fill="#d65b4a" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 0.00 29.96 C 5.55 36.68 11.21 43.31 16.80 50.00 C 18.26 49.99 19.73 49.99 21.19 49.99 C 18.93 47.26 16.67 44.53 14.40 41.79 C 15.94 40.54 17.47 39.27 19.00 38.00 C 22.34 42.00 25.66 46.01 29.01 50.00 C 42.72 49.98 56.43 50.03 70.14 49.98 C 71.17 47.82 72.07 45.50 73.83 43.81 C 77.91 39.62 84.85 39.15 89.85 41.94 C 93.15 43.97 95.29 47.56 96.00 51.33 L 96.00 54.56 C 95.35 58.38 93.17 62.01 89.84 64.06 C 85.44 66.52 79.67 66.42 75.46 63.60 C 72.81 61.81 71.37 58.87 70.15 56.02 C 46.76 55.98 23.38 56.01 0.00 56.00 L 0.00 29.96 Z" /></svg>';
$preciprain='<svg x="0px" y="0px" width="10px" viewBox="0 0 345.13 345.13" ><g> <path style="fill:#01A4B5;" opacity=".8"  d="M264.25,301.7c-2.45,3.01-5.08,5.91-7.88,8.71c-23.14,23.14-53.47,34.72-83.8,34.72 
s-60.66-11.58-83.81-34.72c-22.86-22.86-34.71-53.2-34.71-83.84c0-21.31,5.74-42.77,17.5-61.94l21.16-34.48L172.57,0l31.67,51.62 l24.28,39.56l45.06,73.45C300.18,207.99,295.971,263.03,264.25,301.7z"/><path style="fill:#01A4B5;" d="M264.25,301.7L92.71,130.15L172.57,0l31.67,51.62l24.28,39.56l45.06,73.45 C300.18,207.99,295.971,263.03,264.25,301.7z"/></g>';
$heatindexalert8='<svg id="weather34 heatindex alert" width="7pt" height="7pt" fill="#ff552e" viewBox="0 0 20 20"><path d="M19.64 16.36L11.53 2.3A1.85 1.85 0 0 0 10 1.21 1.85 1.85 0 0 0 8.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>';
$heatindexalert8a='<svg id="weather34 heatindex wu alert3" width="7pt" height="7pt" fill="#fff" viewBox="0 0 20 20"><path d="M19.64 16.36L11.53 2.3A1.85 1.85 0 0 0 10 1.21 1.85 1.85 0 0 0 8.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>';
$rainfallalert8='<svg id="weather34 wu rainfall alert" width="8pt" height="8pt" fill="#009bab" viewBox="0 0 20 20"><path d="M19.64 16.36L11.53 2.3A1.85 1.85 0 0 0 10 1.21 1.85 1.85 0 0 0 8.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>';
$windchillalert8='<svg id="weather34 windchill alert2" width="7pt" height="7pt" fill="#009bab" viewBox="0 0 20 20"><path d="M19.64 16.36L11.53 2.3A1.85 1.85 0 0 0 10 1.21 1.85 1.85 0 0 0 8.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z"/></svg>';
$toggle='<svg height="18pt" viewBox="0 0 512 512" width="18pt" fill="currentcolor" ><path d="m362.667969 0h-213.335938c-82.324219 0-149.332031 66.988281-149.332031 149.332031 0 82.347657 67.007812 149.335938 149.332031 149.335938h213.335938c82.324219 0 149.332031-66.988281 149.332031-149.335938 0-82.34375-67.007812-149.332031-149.332031-149.332031zm0 0" fill="currentcolor"/>
<path d="m234.667969 149.332031c0 47.128907-38.207031 85.335938-85.335938 85.335938-47.128906 0-85.332031-38.207031-85.332031-85.335938 0-47.128906 38.203125-85.332031 85.332031-85.332031 47.128907 0 85.335938 38.203125 85.335938 85.332031zm0 0" fill="#fafafa"/></svg>';
$settingsicon='<svg height="16pt" viewBox="-3 0 512 512" width="16pt"><path d="m317.5 341.332031c1.089844-6.976562 1.621094-14.144531 1.621094-21.332031 0-7.148438-.53125-14.230469-1.597656-21.164062l35.261718-27.667969c8.277344-6.507813 10.5625-18.28125 5.3125-27.457031l-22.761718-39.421876c-5.292969-9.152343-16.660157-13.078124-26.453126-9.132812l-41.558593 16.746094c-11.347657-9.148438-23.660157-16.277344-36.691407-21.226563l-6.316406-44.371093c-1.492187-10.433594-10.558594-18.304688-21.121094-18.304688h-45.480468c-10.5625 0-19.628906 7.871094-21.121094 18.324219l-6.316406 44.394531c-13.054688 5.015625-25.492188 12.226562-36.519532 21.183594l-41.75-16.746094c-9.792968-3.925781-21.140624 0-26.433593 9.132812l-22.742188 39.421876c-5.289062 9.175781-2.984375 20.992187 5.355469 27.476562l35.222656 27.480469c-1.089844 6.976562-1.621094 14.144531-1.621094 21.332031 0 7.148438.53125 14.230469 1.597657 21.164062l-35.261719 27.667969c-8.277344 6.507813-10.558594 18.28125-5.3125 27.457031l22.742188 39.421876c5.289062 9.132812 16.660156 13.058593 26.453124 9.132812l41.558594-16.746094c11.347656 9.148438 23.65625 16.277344 36.691406 21.226563l6.316407 44.371093c1.511719 10.433594 10.578125 18.304688 21.140625 18.304688h45.480468c10.5625 0 19.628907-7.871094 21.121094-18.324219l6.316406-44.394531c13.054688-5.015625 25.492188-12.226562 36.519532-21.183594l41.75 16.746094c9.835937 3.945312 21.164062.019531 26.433594-9.132812l22.742187-39.421876c5.289063-9.175781 2.984375-20.992187-5.355469-27.476562zm-137.042969 53.335938c-41.175781 0-74.667969-33.496094-74.667969-74.667969s33.492188-74.667969 74.667969-74.667969c41.171875 0 74.664063 33.496094 74.664063 74.667969s-33.492188 74.667969-74.664063 74.667969zm0 0" fill="#00bcd4"/><path d="m483.453125 116.671875c.40625-3.304687 1.003906-6.570313 1.003906-10.003906 0-3.4375-.597656-6.699219-1.003906-10.007813l19.222656-14.546875c4.285157-3.242187 5.480469-9.175781 2.792969-13.847656l-17.257812-29.867187c-2.6875-4.648438-8.429688-6.589844-13.378907-4.5l-22.121093 9.324218c-5.398438-4.117187-11.136719-7.746094-17.472657-10.390625l-2.941406-23.488281c-.683594-5.332031-5.207031-9.34375-10.582031-9.34375h-34.496094c-5.375 0-9.921875 4.011719-10.582031 9.34375l-2.945313 23.488281c-6.335937 2.644531-12.09375 6.292969-17.472656 10.390625l-22.121094-9.324218c-4.96875-2.089844-10.710937-.171876-13.398437 4.5l-17.234375 29.867187c-2.691406 4.652344-1.496094 10.582031 2.792968 13.847656l19.222657 14.546875c-.429688 3.308594-1.023438 6.570313-1.023438 10.007813 0 3.433593.59375 6.699219 1 10.003906l-19.21875 14.550781c-4.289062 3.242188-5.484375 9.171875-2.796875 13.84375l17.257813 29.867188c2.6875 4.652344 8.429687 6.589844 13.378906 4.5l22.121094-9.34375c5.398437 4.117187 11.136719 7.746094 17.472656 10.390625l2.941406 23.488281c.683594 5.355469 5.207031 9.363281 10.582031 9.363281h34.496094c5.378906 0 9.921875-4.007812 10.582032-9.34375l2.945312-23.488281c6.335938-2.644531 12.09375-6.292969 17.472656-10.386719l22.121094 9.320313c4.96875 2.089844 10.710938.171875 13.398438-4.5l17.234374-29.867188c2.691407-4.652344 1.496094-10.582031-2.792968-13.84375zm-78.996094 32.660156c-23.574219 0-42.667969-19.09375-42.667969-42.664062 0-23.574219 19.09375-42.667969 42.667969-42.667969 23.570313 0 42.664063 19.09375 42.664063 42.667969 0 23.570312-19.09375 42.664062-42.664063 42.664062zm0 0" fill="currentcolor"/></svg>'; 
?>