<?php 
include('settings.php');include('shared.php');
if($livedataFormat=='meteobridge-api'&&$livedata){$file_live=file_get_contents($livedata);$meteobridgeapi=explode(" ",$file_live);
$weather["temp_units"]=$meteobridgeapi[14];
$weather["temp_indoor"]=$meteobridgeapi[22];
$weather["temp_indoormax"]=$meteobridgeapi[120];
$weather["temp_indoormin"]=$meteobridgeapi[121];
$weather["humidity_indoor"]=$meteobridgeapi[23];
$weather["humidity_indoor15"]=$meteobridgeapi[71];
$weather["humidity_indoortrend"]=$meteobridgeapi[23]-$meteobridgeapi[71];
$weather["temp_indoor_trend"]=number_format($meteobridgeapi[22],1)- number_format($meteobridgeapi[70],1);
$weather["temp_indoor_feel"]=heatIndex($meteobridgeapi[22],$meteobridgeapi[23]);
$weather["temp_indoor_feel2"]=heatIndex($weatherflow[2],$weatherflow[3]);
if($tempunit!=$weather["temp_units"]){if($tempunit=="C"){fToC($weather,"temp_indoor");fToC($weather,"indoor2");fToC($weather,"temp_indoormax");fToC($weather,"temp_indoormin");fToC($weather,"temp");fToC($weather,"temp2");fToC($weather,"temp_avg");fToC($weather,"windchill");fToC($weather,"heat_index");fToC($weather,"dewpoint");fToC($weather,"temp_indoor_feel");fToC($weather,"temp_indoor_feel2");fToC($weather,"temp_feel");fToC($weather,"temp_today_high");fToC($weather,"temp_today_low");fToC($weather,"avgtemp");fToC($weather,"temp_avgtoday");fToC($weather,"tempydmax");fToC($weather,"tempydmin");fToC($weather,"tempmmax");fToC($weather,"tempmmin");fToC($weather,"tempymax");fToC($weather,"tempymin");fToC($weather,"tempdmax");fToC($weather,"tempdmin");fToC($weather,"tempamax");fToC($weather,"tempamin");fToC($weather,"dewmax");fToC($weather,"dewmin");fToC($weather,"dewamax");fToC($weather,"dewamin");fToC($weather,"dewmmax");fToC($weather,"dewmmin");fToC($weather,"dewymax");fToC($weather,"dewymin");fToC($weather,"dewydmax");fToC($weather,"dewydmin");fToC($weather,"dewpoint2");fToC($weather,"realfeel");fToCrel($weather,"temp_trend");fToCrel($weather,"dewpoint_trend");fToCrel($weather,"humidex");$weather["temp_units"]=$tempunit;}else if($tempunit=="F"){cToF($weather,"temp_indoor");cToF($weather,"temp");cToF($weather,"indoor2");cToF($weather,"temp2");cToF($weather,"temp_avg");cToF($weather,"temp_indoormax");cToF($weather,"temp_indoormin");cToF($weather,"windchill");cToF($weather,"heat_index");cToF($weather,"dewpoint");cToF($weather,"temp_indoor_feel");cToF($weather,"temp_indoor_feel2");cToF($weather,"temp_feel");cToF($weather,"temp_today_high");cToF($weather,"temp_today_low");cToF($weather,"avgtemp");cToF($weather,"temp_avgtoday");cToF($weather,"tempydmax");cToF($weather,"tempydmin");cToF($weather,"tempamax");cToF($weather,"tempamin");cToF($weather,"tempmmax");cToF($weather,"tempmmin");cToF($weather,"tempymax");cToF($weather,"tempymin");cToF($weather,"tempdmax");cToF($weather,"tempdmin");cToF($weather,"dewmax");cToF($weather,"dewmin");cToF($weather,"dewamax");cToF($weather,"dewamin");cToF($weather,"dewmmax");cToF($weather,"dewmmin");cToF($weather,"dewymax");cToF($weather,"dewymin");cToF($weather,"dewydmax");cToF($weather,"dewydmin");cToF($weather,"dewpoint2");cToF($weather,"realfeel");cToFrel($weather,"temp_trend");cToFrel($weather,"dewpoint_trend");cToFrel($weather,"humidex");$weather["temp_units"]=$tempunit;}}
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//

$lqi=$weather["humidity_indoor"]*anyToC($weather["temp_indoor"])*0.013555;
$aqi=number_format($lqi,1);
$heatindexwu='<svg "weather34 heatindex icon" width="60px" height="60px" viewBox="0 0 250 250" version="3.4.2019" >
<path fill="#ff832f" stroke="#ff832f" stroke-width="0.09375" opacity="1.00" d=" M 94.24 33.23 C 106.10 23.71 121.88 18.18 137.10 20.91 C 150.77 23.09 162.89 30.83 172.86 40.14 C 185.30 51.88 198.09 63.70 213.46 71.52 C 222.73 76.23 233.65 79.13 243.92 76.10 C 245.97 75.67 248.52 74.29 250.00 76.59 L 250.00 77.41 C 243.65 83.99 235.05 88.09 226.37 90.62 C 211.92 94.57 196.20 91.32 183.71 83.32 C 173.86 77.45 166.16 68.84 157.60 61.36 C 148.96 53.84 139.88 46.65 129.66 41.38 C 120.64 36.87 110.14 33.45 100.05 36.12 C 97.82 36.48 95.53 37.70 93.28 36.81 C 92.94 35.46 92.75 33.94 94.24 33.23 Z" /><path fill="#ff832f" stroke="#ff832f" stroke-width="0.09375" opacity="1.00" d=" M 40.96 70.24 C 55.35 59.16 73.48 51.97 91.86 53.82 C 112.91 55.25 131.31 67.49 146.46 81.37 C 160.43 94.60 174.85 107.67 191.64 117.27 C 205.48 125.28 221.84 130.62 237.92 127.34 C 240.94 127.12 244.23 125.18 247.05 127.08 C 247.03 127.74 246.99 129.04 246.97 129.70 C 232.18 142.37 212.89 151.02 193.10 149.31 C 176.62 148.37 161.34 140.68 148.46 130.76 C 141.24 125.29 134.74 118.98 128.15 112.80 C 113.51 99.62 97.87 86.88 79.42 79.47 C 68.23 74.90 55.71 73.38 43.88 76.15 C 41.67 76.37 38.79 77.88 37.14 75.68 C 36.36 73.01 39.31 71.67 40.96 70.24 Z" /><path fill="#ff832f" stroke="#ff832f" stroke-width="0.09375" opacity="1.00" d=" M 3.50 118.53 C 15.56 108.44 30.33 100.94 46.17 99.59 C 64.81 97.72 83.26 104.85 98.11 115.75 C 106.84 121.93 114.50 129.44 122.30 136.71 C 134.76 147.91 147.93 158.61 162.99 166.12 C 173.19 171.17 184.49 174.68 195.98 174.06 C 201.25 173.92 206.34 172.21 211.61 171.97 C 212.00 172.54 212.79 173.68 213.18 174.25 C 211.39 177.16 208.29 178.78 205.59 180.71 C 195.79 187.36 184.84 192.67 173.06 194.55 C 161.43 196.13 149.37 194.93 138.42 190.57 C 122.59 184.47 109.28 173.47 97.23 161.77 C 84.46 149.94 71.03 138.53 55.65 130.21 C 44.46 124.18 31.89 119.80 19.01 120.66 C 14.33 120.76 9.80 122.01 5.19 122.66 C 3.05 123.04 1.43 119.77 3.50 118.53 Z" /><path fill="#ff832f" stroke="#ff832f" stroke-width="0.09375" opacity="1.00" d=" M 26.44 157.60 C 40.14 154.39 54.65 158.24 66.35 165.64 C 77.14 172.14 85.34 181.89 94.99 189.83 C 106.04 199.15 118.02 208.17 132.13 212.13 C 139.32 214.27 147.04 213.87 154.14 211.59 C 156.28 210.49 158.15 213.79 156.18 215.09 C 147.11 222.60 135.83 227.63 124.02 228.51 C 106.54 229.76 90.07 220.91 77.61 209.29 C 63.90 196.42 49.84 183.15 32.41 175.48 C 23.21 171.33 12.55 170.13 2.91 173.51 C 1.29 174.56 -1.18 171.20 0.84 170.21 C 8.51 164.54 17.09 159.79 26.44 157.60 Z" /></svg>';

$airqualitybreeze='<svg "weather34 aq icon" width="60px" height="60px" viewBox="0 0 250 250" version="3.4.2019" >
<path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 94.24 33.23 C 106.10 23.71 121.88 18.18 137.10 20.91 C 150.77 23.09 162.89 30.83 172.86 40.14 C 185.30 51.88 198.09 63.70 213.46 71.52 C 222.73 76.23 233.65 79.13 243.92 76.10 C 245.97 75.67 248.52 74.29 250.00 76.59 L 250.00 77.41 C 243.65 83.99 235.05 88.09 226.37 90.62 C 211.92 94.57 196.20 91.32 183.71 83.32 C 173.86 77.45 166.16 68.84 157.60 61.36 C 148.96 53.84 139.88 46.65 129.66 41.38 C 120.64 36.87 110.14 33.45 100.05 36.12 C 97.82 36.48 95.53 37.70 93.28 36.81 C 92.94 35.46 92.75 33.94 94.24 33.23 Z" /><path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 40.96 70.24 C 55.35 59.16 73.48 51.97 91.86 53.82 C 112.91 55.25 131.31 67.49 146.46 81.37 C 160.43 94.60 174.85 107.67 191.64 117.27 C 205.48 125.28 221.84 130.62 237.92 127.34 C 240.94 127.12 244.23 125.18 247.05 127.08 C 247.03 127.74 246.99 129.04 246.97 129.70 C 232.18 142.37 212.89 151.02 193.10 149.31 C 176.62 148.37 161.34 140.68 148.46 130.76 C 141.24 125.29 134.74 118.98 128.15 112.80 C 113.51 99.62 97.87 86.88 79.42 79.47 C 68.23 74.90 55.71 73.38 43.88 76.15 C 41.67 76.37 38.79 77.88 37.14 75.68 C 36.36 73.01 39.31 71.67 40.96 70.24 Z" /><path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 3.50 118.53 C 15.56 108.44 30.33 100.94 46.17 99.59 C 64.81 97.72 83.26 104.85 98.11 115.75 C 106.84 121.93 114.50 129.44 122.30 136.71 C 134.76 147.91 147.93 158.61 162.99 166.12 C 173.19 171.17 184.49 174.68 195.98 174.06 C 201.25 173.92 206.34 172.21 211.61 171.97 C 212.00 172.54 212.79 173.68 213.18 174.25 C 211.39 177.16 208.29 178.78 205.59 180.71 C 195.79 187.36 184.84 192.67 173.06 194.55 C 161.43 196.13 149.37 194.93 138.42 190.57 C 122.59 184.47 109.28 173.47 97.23 161.77 C 84.46 149.94 71.03 138.53 55.65 130.21 C 44.46 124.18 31.89 119.80 19.01 120.66 C 14.33 120.76 9.80 122.01 5.19 122.66 C 3.05 123.04 1.43 119.77 3.50 118.53 Z" /><path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 26.44 157.60 C 40.14 154.39 54.65 158.24 66.35 165.64 C 77.14 172.14 85.34 181.89 94.99 189.83 C 106.04 199.15 118.02 208.17 132.13 212.13 C 139.32 214.27 147.04 213.87 154.14 211.59 C 156.28 210.49 158.15 213.79 156.18 215.09 C 147.11 222.60 135.83 227.63 124.02 228.51 C 106.54 229.76 90.07 220.91 77.61 209.29 C 63.90 196.42 49.84 183.15 32.41 175.48 C 23.21 171.33 12.55 170.13 2.91 173.51 C 1.29 174.56 -1.18 171.20 0.84 170.21 C 8.51 164.54 17.09 159.79 26.44 157.60 Z" /></svg>';

$humicon='<svg "weather34 humidity icon" width="60px" height="60px" viewBox="0 0 250 250" version="3.4.2019" >
<path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 94.24 33.23 C 106.10 23.71 121.88 18.18 137.10 20.91 C 150.77 23.09 162.89 30.83 172.86 40.14 C 185.30 51.88 198.09 63.70 213.46 71.52 C 222.73 76.23 233.65 79.13 243.92 76.10 C 245.97 75.67 248.52 74.29 250.00 76.59 L 250.00 77.41 C 243.65 83.99 235.05 88.09 226.37 90.62 C 211.92 94.57 196.20 91.32 183.71 83.32 C 173.86 77.45 166.16 68.84 157.60 61.36 C 148.96 53.84 139.88 46.65 129.66 41.38 C 120.64 36.87 110.14 33.45 100.05 36.12 C 97.82 36.48 95.53 37.70 93.28 36.81 C 92.94 35.46 92.75 33.94 94.24 33.23 Z" /><path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 40.96 70.24 C 55.35 59.16 73.48 51.97 91.86 53.82 C 112.91 55.25 131.31 67.49 146.46 81.37 C 160.43 94.60 174.85 107.67 191.64 117.27 C 205.48 125.28 221.84 130.62 237.92 127.34 C 240.94 127.12 244.23 125.18 247.05 127.08 C 247.03 127.74 246.99 129.04 246.97 129.70 C 232.18 142.37 212.89 151.02 193.10 149.31 C 176.62 148.37 161.34 140.68 148.46 130.76 C 141.24 125.29 134.74 118.98 128.15 112.80 C 113.51 99.62 97.87 86.88 79.42 79.47 C 68.23 74.90 55.71 73.38 43.88 76.15 C 41.67 76.37 38.79 77.88 37.14 75.68 C 36.36 73.01 39.31 71.67 40.96 70.24 Z" /><path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 3.50 118.53 C 15.56 108.44 30.33 100.94 46.17 99.59 C 64.81 97.72 83.26 104.85 98.11 115.75 C 106.84 121.93 114.50 129.44 122.30 136.71 C 134.76 147.91 147.93 158.61 162.99 166.12 C 173.19 171.17 184.49 174.68 195.98 174.06 C 201.25 173.92 206.34 172.21 211.61 171.97 C 212.00 172.54 212.79 173.68 213.18 174.25 C 211.39 177.16 208.29 178.78 205.59 180.71 C 195.79 187.36 184.84 192.67 173.06 194.55 C 161.43 196.13 149.37 194.93 138.42 190.57 C 122.59 184.47 109.28 173.47 97.23 161.77 C 84.46 149.94 71.03 138.53 55.65 130.21 C 44.46 124.18 31.89 119.80 19.01 120.66 C 14.33 120.76 9.80 122.01 5.19 122.66 C 3.05 123.04 1.43 119.77 3.50 118.53 Z" /><path fill="currentcolor" stroke="currentcolor" stroke-width="0.09375" opacity="1.00" d=" M 26.44 157.60 C 40.14 154.39 54.65 158.24 66.35 165.64 C 77.14 172.14 85.34 181.89 94.99 189.83 C 106.04 199.15 118.02 208.17 132.13 212.13 C 139.32 214.27 147.04 213.87 154.14 211.59 C 156.28 210.49 158.15 213.79 156.18 215.09 C 147.11 222.60 135.83 227.63 124.02 228.51 C 106.54 229.76 90.07 220.91 77.61 209.29 C 63.90 196.42 49.84 183.15 32.41 175.48 C 23.21 171.33 12.55 170.13 2.91 173.51 C 1.29 174.56 -1.18 171.20 0.84 170.21 C 8.51 164.54 17.09 159.79 26.44 157.60 Z" /></svg>';

$humiditybreeze='<svg "weather34 aq icon" width="60px" height="60px" viewBox="0 0 250 250" version="3.4.2019" >
<path fill="#e6a141" stroke="#e6a141" stroke-width="0.09375" opacity="1.00" d=" M 94.24 33.23 C 106.10 23.71 121.88 18.18 137.10 20.91 C 150.77 23.09 162.89 30.83 172.86 40.14 C 185.30 51.88 198.09 63.70 213.46 71.52 C 222.73 76.23 233.65 79.13 243.92 76.10 C 245.97 75.67 248.52 74.29 250.00 76.59 L 250.00 77.41 C 243.65 83.99 235.05 88.09 226.37 90.62 C 211.92 94.57 196.20 91.32 183.71 83.32 C 173.86 77.45 166.16 68.84 157.60 61.36 C 148.96 53.84 139.88 46.65 129.66 41.38 C 120.64 36.87 110.14 33.45 100.05 36.12 C 97.82 36.48 95.53 37.70 93.28 36.81 C 92.94 35.46 92.75 33.94 94.24 33.23 Z" /><path fill="#e6a141" stroke="#e6a141" stroke-width="0.09375" opacity="1.00" d=" M 40.96 70.24 C 55.35 59.16 73.48 51.97 91.86 53.82 C 112.91 55.25 131.31 67.49 146.46 81.37 C 160.43 94.60 174.85 107.67 191.64 117.27 C 205.48 125.28 221.84 130.62 237.92 127.34 C 240.94 127.12 244.23 125.18 247.05 127.08 C 247.03 127.74 246.99 129.04 246.97 129.70 C 232.18 142.37 212.89 151.02 193.10 149.31 C 176.62 148.37 161.34 140.68 148.46 130.76 C 141.24 125.29 134.74 118.98 128.15 112.80 C 113.51 99.62 97.87 86.88 79.42 79.47 C 68.23 74.90 55.71 73.38 43.88 76.15 C 41.67 76.37 38.79 77.88 37.14 75.68 C 36.36 73.01 39.31 71.67 40.96 70.24 Z" /><path fill="#e6a141" stroke="#e6a141" stroke-width="0.09375" opacity="1.00" d=" M 3.50 118.53 C 15.56 108.44 30.33 100.94 46.17 99.59 C 64.81 97.72 83.26 104.85 98.11 115.75 C 106.84 121.93 114.50 129.44 122.30 136.71 C 134.76 147.91 147.93 158.61 162.99 166.12 C 173.19 171.17 184.49 174.68 195.98 174.06 C 201.25 173.92 206.34 172.21 211.61 171.97 C 212.00 172.54 212.79 173.68 213.18 174.25 C 211.39 177.16 208.29 178.78 205.59 180.71 C 195.79 187.36 184.84 192.67 173.06 194.55 C 161.43 196.13 149.37 194.93 138.42 190.57 C 122.59 184.47 109.28 173.47 97.23 161.77 C 84.46 149.94 71.03 138.53 55.65 130.21 C 44.46 124.18 31.89 119.80 19.01 120.66 C 14.33 120.76 9.80 122.01 5.19 122.66 C 3.05 123.04 1.43 119.77 3.50 118.53 Z" /><path fill="#e6a141" stroke="#e6a141" stroke-width="0.09375" opacity="1.00" d=" M 26.44 157.60 C 40.14 154.39 54.65 158.24 66.35 165.64 C 77.14 172.14 85.34 181.89 94.99 189.83 C 106.04 199.15 118.02 208.17 132.13 212.13 C 139.32 214.27 147.04 213.87 154.14 211.59 C 156.28 210.49 158.15 213.79 156.18 215.09 C 147.11 222.60 135.83 227.63 124.02 228.51 C 106.54 229.76 90.07 220.91 77.61 209.29 C 63.90 196.42 49.84 183.15 32.41 175.48 C 23.21 171.33 12.55 170.13 2.91 173.51 C 1.29 174.56 -1.18 171.20 0.84 170.21 C 8.51 164.54 17.09 159.79 26.44 157.60 Z" /></svg>';

$feelslikewu='<svg "weather34feels wu icon" width="65px" height="65px" viewBox="0 0 250 250" version="3.4.2019" >
<path fill="#d05f2d" stroke="#d05f2d" stroke-width="0.09375" opacity="1.00" d=" M 94.24 33.23 C 106.10 23.71 121.88 18.18 137.10 20.91 C 150.77 23.09 162.89 30.83 172.86 40.14 C 185.30 51.88 198.09 63.70 213.46 71.52 C 222.73 76.23 233.65 79.13 243.92 76.10 C 245.97 75.67 248.52 74.29 250.00 76.59 L 250.00 77.41 C 243.65 83.99 235.05 88.09 226.37 90.62 C 211.92 94.57 196.20 91.32 183.71 83.32 C 173.86 77.45 166.16 68.84 157.60 61.36 C 148.96 53.84 139.88 46.65 129.66 41.38 C 120.64 36.87 110.14 33.45 100.05 36.12 C 97.82 36.48 95.53 37.70 93.28 36.81 C 92.94 35.46 92.75 33.94 94.24 33.23 Z" /><path fill="#ff832f" stroke="#ff832f" stroke-width="0.09375" opacity="1.00" d=" M 40.96 70.24 C 55.35 59.16 73.48 51.97 91.86 53.82 C 112.91 55.25 131.31 67.49 146.46 81.37 C 160.43 94.60 174.85 107.67 191.64 117.27 C 205.48 125.28 221.84 130.62 237.92 127.34 C 240.94 127.12 244.23 125.18 247.05 127.08 C 247.03 127.74 246.99 129.04 246.97 129.70 C 232.18 142.37 212.89 151.02 193.10 149.31 C 176.62 148.37 161.34 140.68 148.46 130.76 C 141.24 125.29 134.74 118.98 128.15 112.80 C 113.51 99.62 97.87 86.88 79.42 79.47 C 68.23 74.90 55.71 73.38 43.88 76.15 C 41.67 76.37 38.79 77.88 37.14 75.68 C 36.36 73.01 39.31 71.67 40.96 70.24 Z" /><path fill="#e6a141" stroke="#e6a141" stroke-width="0.09375" opacity="1.00" d=" M 3.50 118.53 C 15.56 108.44 30.33 100.94 46.17 99.59 C 64.81 97.72 83.26 104.85 98.11 115.75 C 106.84 121.93 114.50 129.44 122.30 136.71 C 134.76 147.91 147.93 158.61 162.99 166.12 C 173.19 171.17 184.49 174.68 195.98 174.06 C 201.25 173.92 206.34 172.21 211.61 171.97 C 212.00 172.54 212.79 173.68 213.18 174.25 C 211.39 177.16 208.29 178.78 205.59 180.71 C 195.79 187.36 184.84 192.67 173.06 194.55 C 161.43 196.13 149.37 194.93 138.42 190.57 C 122.59 184.47 109.28 173.47 97.23 161.77 C 84.46 149.94 71.03 138.53 55.65 130.21 C 44.46 124.18 31.89 119.80 19.01 120.66 C 14.33 120.76 9.80 122.01 5.19 122.66 C 3.05 123.04 1.43 119.77 3.50 118.53 Z" /><path fill="#90b12a" stroke="#90b12a" stroke-width="0.09375" opacity="1.00" d=" M 26.44 157.60 C 40.14 154.39 54.65 158.24 66.35 165.64 C 77.14 172.14 85.34 181.89 94.99 189.83 C 106.04 199.15 118.02 208.17 132.13 212.13 C 139.32 214.27 147.04 213.87 154.14 211.59 C 156.28 210.49 158.15 213.79 156.18 215.09 C 147.11 222.60 135.83 227.63 124.02 228.51 C 106.54 229.76 90.07 220.91 77.61 209.29 C 63.90 196.42 49.84 183.15 32.41 175.48 C 23.21 171.33 12.55 170.13 2.91 173.51 C 1.29 174.56 -1.18 171.20 0.84 170.21 C 8.51 164.54 17.09 159.79 26.44 157.60 Z" /></svg>';
$windchillwu='<svg "weather34 windchill wu icon" width="65px" height="65px" viewBox="0 0 250 250" version="3.4.2019" >
<path fill="#009bab" stroke="#009bab" stroke-width="0.09375" opacity="1.00" d=" M 94.24 33.23 C 106.10 23.71 121.88 18.18 137.10 20.91 C 150.77 23.09 162.89 30.83 172.86 40.14 C 185.30 51.88 198.09 63.70 213.46 71.52 C 222.73 76.23 233.65 79.13 243.92 76.10 C 245.97 75.67 248.52 74.29 250.00 76.59 L 250.00 77.41 C 243.65 83.99 235.05 88.09 226.37 90.62 C 211.92 94.57 196.20 91.32 183.71 83.32 C 173.86 77.45 166.16 68.84 157.60 61.36 C 148.96 53.84 139.88 46.65 129.66 41.38 C 120.64 36.87 110.14 33.45 100.05 36.12 C 97.82 36.48 95.53 37.70 93.28 36.81 C 92.94 35.46 92.75 33.94 94.24 33.23 Z" /><path fill="#009bab" stroke="#009bab" stroke-width="0.09375" opacity="1.00" d=" M 40.96 70.24 C 55.35 59.16 73.48 51.97 91.86 53.82 C 112.91 55.25 131.31 67.49 146.46 81.37 C 160.43 94.60 174.85 107.67 191.64 117.27 C 205.48 125.28 221.84 130.62 237.92 127.34 C 240.94 127.12 244.23 125.18 247.05 127.08 C 247.03 127.74 246.99 129.04 246.97 129.70 C 232.18 142.37 212.89 151.02 193.10 149.31 C 176.62 148.37 161.34 140.68 148.46 130.76 C 141.24 125.29 134.74 118.98 128.15 112.80 C 113.51 99.62 97.87 86.88 79.42 79.47 C 68.23 74.90 55.71 73.38 43.88 76.15 C 41.67 76.37 38.79 77.88 37.14 75.68 C 36.36 73.01 39.31 71.67 40.96 70.24 Z" /><path fill="#009bab" stroke="#009bab" stroke-width="0.09375" opacity="1.00" d=" M 3.50 118.53 C 15.56 108.44 30.33 100.94 46.17 99.59 C 64.81 97.72 83.26 104.85 98.11 115.75 C 106.84 121.93 114.50 129.44 122.30 136.71 C 134.76 147.91 147.93 158.61 162.99 166.12 C 173.19 171.17 184.49 174.68 195.98 174.06 C 201.25 173.92 206.34 172.21 211.61 171.97 C 212.00 172.54 212.79 173.68 213.18 174.25 C 211.39 177.16 208.29 178.78 205.59 180.71 C 195.79 187.36 184.84 192.67 173.06 194.55 C 161.43 196.13 149.37 194.93 138.42 190.57 C 122.59 184.47 109.28 173.47 97.23 161.77 C 84.46 149.94 71.03 138.53 55.65 130.21 C 44.46 124.18 31.89 119.80 19.01 120.66 C 14.33 120.76 9.80 122.01 5.19 122.66 C 3.05 123.04 1.43 119.77 3.50 118.53 Z" /><path fill="#009bab" stroke="#009bab" stroke-width="0.09375" opacity="1.00" d=" M 26.44 157.60 C 40.14 154.39 54.65 158.24 66.35 165.64 C 77.14 172.14 85.34 181.89 94.99 189.83 C 106.04 199.15 118.02 208.17 132.13 212.13 C 139.32 214.27 147.04 213.87 154.14 211.59 C 156.28 210.49 158.15 213.79 156.18 215.09 C 147.11 222.60 135.83 227.63 124.02 228.51 C 106.54 229.76 90.07 220.91 77.61 209.29 C 63.90 196.42 49.84 183.15 32.41 175.48 C 23.21 171.33 12.55 170.13 2.91 173.51 C 1.29 174.56 -1.18 171.20 0.84 170.21 C 8.51 164.54 17.09 159.79 26.44 157.60 Z" /></svg>';
$accooler='<svg id="weaather34 ac cooler" viewBox="0 0 455 455" fill="#999" width="65px" height="65px" enable-background="new 0 0 455 455"><g><path d="m425.17,67.167h-395.34c-16.448,0-29.83,13.382-29.83,29.83v152.67c0,4.142 3.357,7.5 7.5,7.5h440c4.143,0 7.5-3.358 7.5-7.5v-152.67c0-16.448-13.382-29.83-29.83-29.83zm-392.67,15h390v9.51c0,4.957-4.033,8.99-8.99,8.99h-372.02c-4.957,0-8.99-4.033-8.99-8.99v-9.51zm390,122.5h-390v-1.01c0-4.957 4.033-8.99 8.99-8.99h372.02c4.957,0 8.99,4.033 8.99,8.99v1.01zm-390,10h390v10h-390v-10zm0,20h390v7.5h-390v-7.5zm407.5,7.5h-7.5v-38.51c0-10.471-8.519-18.99-18.99-18.99h-372.02c-10.472,0-18.99,8.519-18.99,18.99v38.51h-7.5v-145.17c0-5.51 3.027-10.319 7.5-12.875v7.555c0,10.471 8.519,18.99 18.99,18.99h372.02c10.472,0 18.99-8.519 18.99-18.99v-7.555c4.473,2.556 7.5,7.365 7.5,12.875v145.17z"/><path d="m250.5,164.667h-46c-2.762,0-5,2.239-5,5s2.238,5 5,5h46c2.762,0 5-2.239 5-5s-2.238-5-5-5z"/><path d="m401.503,164.668c-1.32,0-2.61,0.53-3.54,1.46s-1.46,2.22-1.46,3.54 0.53,2.61 1.46,3.53c0.93,0.94 2.22,1.47 3.54,1.47 1.31,0 2.6-0.53 3.53-1.47 0.93-0.93 1.47-2.22 1.47-3.53s-0.54-2.6-1.47-3.54c-0.93-0.93-2.22-1.46-3.53-1.46z"/><path fill="#44a6b5" d="m378.503,164.668c-1.32,0-2.61,0.53-3.54,1.46s-1.46,2.22-1.46,3.54 0.53,2.6 1.46,3.53c0.93,0.93 2.22,1.47 3.54,1.47 1.31,0 2.6-0.54 3.53-1.47 0.93-0.93 1.47-2.22 1.47-3.53 0-1.32-0.54-2.61-1.47-3.54-0.93-0.93-2.22-1.46-3.53-1.46z"/><path fill="#44a6b5" d="m186.319,289.942c1.351-2.409 0.493-5.456-1.916-6.807-2.407-1.352-5.456-0.493-6.807,1.915-9.09,16.21-9.091,36.35-0.001,52.561 7.396,13.192 7.396,29.583 0,42.776-1.351,2.409-0.492,5.456 1.916,6.807 0.773,0.434 1.612,0.64 2.44,0.64 1.75,0 3.449-0.92 4.366-2.556 9.088-16.209 9.088-36.348 0-52.557-7.397-13.195-7.396-29.586 0.002-42.779z"/><path fill="#44a6b5" d="m231.862,289.942c1.351-2.409 0.493-5.456-1.916-6.807-2.407-1.352-5.456-0.493-6.807,1.915-9.09,16.21-9.091,36.35-0.001,52.561 7.396,13.192 7.396,29.583 0,42.776-1.351,2.409-0.492,5.456 1.916,6.807 0.773,0.434 1.612,0.64 2.44,0.64 1.75,0 3.449-0.92 4.366-2.556 9.088-16.209 9.088-36.348 0-52.557-7.397-13.195-7.396-29.586 0.002-42.779z"/><path fill="#44a6b5" d="m277.406,289.942c1.351-2.409 0.493-5.456-1.916-6.807-2.408-1.352-5.456-0.493-6.807,1.915-9.091,16.21-9.091,36.35-0.002,52.561 7.397,13.193 7.397,29.583 0,42.776-1.351,2.408-0.493,5.456 1.916,6.807 0.773,0.434 1.612,0.64 2.44,0.64 1.75,0 3.449-0.92 4.366-2.556 9.089-16.209 9.089-36.348 0-52.557-7.396-13.194-7.396-29.586 0.003-42.779z"/></g></svg>';

$fallingsymbol1='<svg id="falling" width="29" height="29" viewBox="0 0 24 24"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><polyline points="17 18 23 18 23 12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>';
$risingsymbol1='<svg id="rising" width="29" height="29" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><polyline points="17 6 23 6 23 12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>';
$steadysymbol='<svg id="steadybarometer" width="29" height="29" viewBox="0 0 24 24" fill="none" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Home Enviroment Temperature | Humidity</title>
  <meta http-equiv="refresh" content="600">
<meta name=apple-mobile-web-app-capable content=yes>
<meta name=apple-mobile-web-app-title content=HOME WEATHER STATION>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<link rel=apple-touch-icon sizes=180x180 href=img/apple-touch-icon.png>
<link href=favicon.ico rel="shortcut icon" type=image/x-icon><link href=favicon.ico rel=icon type=image/x-icon>
<style>
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
@font-face{font-family:clock;src:url(css/fonts/clock3-webfont.woff) format("woff")}
html,body{font-size:13px;font-family: "weathertext2", Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;background:#212428;}
.grid { 
  display: flex;  
 margin: 0 auto; 
 margin-bottom:10px;
  
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  background:#2f363f;
  width:900px
  }
.grid > article {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  height:300px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale; width:450px;
  background:#2f363f;
}

.grid3 { 
  display: flex;  
 margin: 0 auto; 
 margin-bottom:10px;
  
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  background:#2f363f;
  width:900px
  }
.grid3 > clock {
  border: 1px solid #212428;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  padding:5px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  height:200px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale; width:900px;
  background:#2f363f;
}


.grid1 { 
position:absolute;
  display:block;  
 margin: 0 auto; 
 margin-bottom:80px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  background:#2f363f;
  width:97%
  }
.grid1 > articlegraph {
	display:inline-block;
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px; 
   height:135px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale; 
  background:#2f363f;
   width:100%;padding:5px

}
.grid2 { 
position:absolute;
  display:block;  
 margin: 0 auto;
 margin-top:160px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  background:#2f363f;
  width:97%;
  }
  
  .grid2 > articlegraph1 {
	display:inline-block;
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);  
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px; 
   height:135px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale; 
  background:#2f363f;
   width:100%;padding:5px

}

.grid4 { 
position:absolute;
  display:block;  
 margin: 0 auto; 
 margin-bottom:80px;
  align-items: stretch;
  color:#f5f7fc;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  background:0;
  width:25%
  }
.grid4 > footer {
	display:inline-block;
  border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px; 
  height:20px;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale; 
  background:#2f363f;
   width:100%;padding:5px;margin-bottom:10px;margin-top:5px

}
  
 .weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}
 .weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:99%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:95%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-15px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}orange{color:#009bb4}orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}
.temperaturecontainer1{position:relative;left:10px;margin-top:0px}
.temperaturecontainer2{position:relative;left:10px;margin-top:0px}

.temperaturetoday0,.temperaturetoday10,.temperaturetoday18,.temperaturetoday24,.temperaturetoday30{font-family:weathertext2,Arial,Helvetica,system;width:8rem;height:2.3rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex;font-size:3.2rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.temperaturecaution,.temperaturetrend,.temperaturetrend1{position:absolute;font-size:1rem}

.temperaturetoday0{background:rgba(68, 166, 181, 1.000)} .temperaturetoday10{background:rgba(144, 177, 42, 1.000)}.temperaturetoday18{background:rgba(230, 161, 65, 1.000)}.temperaturetoday24{background:rgba(255, 124, 57, 1.000)}.temperaturetoday30{background:rgba(211, 93, 78, 1.000)}
.temperaturetrend{margin-left:30px;margin-top:-23px;z-index:1;color:#fff;font-size:.7rem;}
.temperaturetrend1{margin-left:10px;margin-top:-23px;z-index:1;color:#fff;font-size:.7rem;}

.w34convertrain{position:relative;font-size:.5em;top:10px;color:#c0c0c0;margin-left:5px}
indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{padding:5px}
.indoorhomesvg1{margin-top:-22px;left:0px;color:rgba(53,56,58,1);margin-left:0}
.weather34indoorword{margin-left:127px;margin-top:42px}
.indoortrendhouse1{position:absolute;margin-left:10px;margin-top:50px;font-size:.65rem;z-index:1;color:#fff}
.indoorhomevalue1,.indoorhomevalue2{font-size:23px;padding-right:4px;padding-left:0}.indoorhomevalue1{position:relative;margin-top:-89px;left:0}
.indoorhomesvg2{margin-top:-22px;left:53px;color:rgba(53,56,58,1);margin-left:-40px}.indoortrendhouse2{position:absolute;margin-left:195px;margin-top:25px}
.indoorhomevalue2{position:relative;margin-top:-79px;left:0}



indoorblue1,indoorgreen1,indoororange1,indoorred1,indooryellow1{font-family:weathertext,Arial,Helvetica,system;width:4.4rem;height:2.7rem;font-size:1rem;padding-top:10px;color:#fff;background:rgba(59,156,172,1);border-bottom:12px solid rgba(56,56,60,1);display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;margin-left:53px;top:-14px}
indoorred1{background:#e27667}indoororange1{background:#ff8841}indoorgreen1{background:#9aba2f}indoorblue1{background:#01a4b4}indooryellow1{background:rgba(233,171,74,1)}smallrainunit{font-size:.7em}
.tempconvertercircleblue,.tempconvertercirclegreen.tempconvertercirclegreen,.tempconvertercircleorange,.tempconvertercirclered,.tempconvertercircleyellow{background:rgba(144,177,42,.8);display:flex;align-items:center;justify-content:center;height:1.8rem;width:5rem;border:2px solid rgba(56,56,60,1);overflow:hidden;border-radius:4px;color:#fff;line-height:16px;font-family:weathertext,Arial,Helvetica,system;font-size:1em}.tempconvertercircleyellow{background:rgba(230,161,65,.8)}.tempconvertercircleorange{background:rgba(255,124,57,.8)}.tempconvertercirclered{background:rgba(211,93,78,.8)}.tempconvertercircleblue{background:rgba(59,156,172,.6)}.tempconvertercirclegreen{background:rgba(144,177,42,1)}.tempindoorconverter{position:absolute;margin-left:230px;margin-top:20px;font-size:12px}smallsup{color:#aaa;font-size:.5rem;font-family:Arial,Helvetica,system}.tempconverter1{position:absolute;margin-left:55px;margin-top:0;font-size:12px}
humgreen{color:rgba(132, 169, 39, 1.000)}humred{color:#e27667}humyellow{color:rgba(231, 150, 59, 1.000)}humblue{color:rgba(0, 155, 180, 1.000)}humorange{color:#ff832f}
.hitempy{position:relative;background:rgba(61, 64, 66, 0.5);color:#aaa;font-size:12px;width:90px;padding:1px;-webit-border-radius:2px;border-radius:2px;
margin-top:-20px;margin-left:92px;padding-left:3px;line-height:11px;font-size:10px}
.actualt{position:relative;left:0px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:160px;height:1em;font-size:1rem;padding-top:1px;color:#aaa;align-items:center;justify-content:center;margin-bottom:10px;top:0}



smalluvunit{font-size:.5rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;}
smallaqiunit{font-size:.45rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;}
smalltempunit{font-size:1rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;color:#aaa}
smallhumunit{font-size:1rem;font-family:weathertext2,Arial,Helvetica,system;vertical-align:super;}

.indoorsvgnest{position:relative;margin:0 auto;display:flex;align-items:center;justify-content:center;margin-top:-20px}
.indoorsvgnestvalue{font-size:5.5em;font-family:weathertext2;margin-left:-210px}
.indoorsvgnestvaluehum{font-size:5.5em;font-family:weathertext2;margin-left:-190px}

.weather34indoortrendup{font-family:weathertext2,Arial,Helvetica,system;width:8.6rem;height:3rem;font-size:3rem;padding:4px;color:#fff;background:#d35d4e;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;left:10px;top:220px}

.weather34indoortrenddown{font-family:weathertext2,Arial,Helvetica,system;width:8.6rem;height:3rem;font-size:3rem;padding:4px;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;left:10px;top:220px}

.weather34indoortrendsteady{font-family:weathertext2,Arial,Helvetica,system;width:8.6rem;height:3rem;font-size:2rem;padding:4px;color:#fff;background:#90b12a;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;left:10px;top:220px}



.weather34indoorcomfort{font-family:weathertext2,Arial,Helvetica,system;width:4rem;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:#90b12a;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;left:40px;top:145px}
.weather34indoorhumid{font-family:weathertext2,Arial,Helvetica,system;width:4rem;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;left:40px;top:145px}
.weather34indoordry{font-family:weathertext2,Arial,Helvetica,system;width:4rem;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:#d35d4e;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;left:40px;top:145px}




.weather34indoorwarm{font-family:weathertext2,Arial,Helvetica,system;width:4em;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:#ff832f;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;left:40px;top:145px}
.weather34indoorcold{font-family:weathertext2,Arial,Helvetica,system;width:4em;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;left:40px;top:145px}
.weather34indoormild{font-family:weathertext2,Arial,Helvetica,system;width:4em;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:rgba(230, 161, 65, 1.000);border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;left:40px;top:145px}
.weather34indoorhot{font-family:weathertext2,Arial,Helvetica,system;width:4em;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:rgba(211, 93, 78, 1.000);border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:2px;-moz-border-radius:2px;-o-border-radius:2px;border-radius:2px;position:absolute;left:40px;top:145px}

.weather34indoorpm{font-family:weathertext2,Arial,Helvetica,system;width:4em;height:1rem;font-size:.9rem;padding:4px;color:#fff;background:#00a4b4;border:0;display:flex;align-items:center;justify-content:center;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;position:absolute;left:40px;top:145px}

           
            div.output{
                width:90px;
                height:90px;
                position: absolute;
                left:0px;
                top:-30px;
                color:#fff;
                text-transform: uppercase;
                text-align: center;                
				margin:0 auto;
				display:flex;align-items:center;justify-content:center;
            }

            div.output small{
                display: block;
                margin:0;
                padding: 0;
                font-size: 1.35em;
                color:rgba(255,255,255,.8);
                font-weight: 500;
            }

.trendicon{top:50px;left:22px;position:absolute;}
.airqicon{top:50px;left:22px;position:absolute;
color:<?php 
if($aqi>300){echo "#99020d";}
else if($aqi>200){echo "#a968b3";}
else if($aqi>150){echo "#d35d4e";}
else if($aqi>100){echo "#d05f2d";}
else if ($aqi>=50){echo "#e6a141";}
else if ($aqi>=0){echo "#90b12a";}
?>''}
.humicon{top:50px;left:22px;position:absolute;z-index:999;
color:<?php 
if($weather["humidity_indoor"]<35)echo "#d35d4e";
else if($weather["humidity_indoor"]<60)echo "#e6a141";
else if($weather["humidity_indoor"]<70)echo "#ec5519";
else if($weather["humidity_indoor"]<=100)echo "#44a6b5";
?>''}

.orangeclock{color:silver;text-align:center;margin-left:75px;margin-top:43px;font-size:2.35rem;font-family:clock;padding:5px;font-weight:200}
time{color:rgba(132, 151, 167, 1.000);font-size:8rem;font-weight:100}

#weather34lightningdialog-notify{width:200px;max-height:250px;right:10px;top:50px;z-index:1;position:fixed;-webkit-animation-duration:10s;animation-duration:10s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOut{0%{opacity:2}50%{opacity:1}100%{opacity:0}}@keyframes fadeOut{0%{opacity:2}50%{opacity:1}100%{opacity:0}}.weather34lightningdialog-box{position:relative;min-height:80px;max-height:180px;-webkit-border-radius:5px;border-radius:5px;margin-bottom:8px;overflow:hidden;background:#616a72}.weather34lightningdialog-box .header{height:25px;position:relative;color:#fff;background:rgba(86,95,103,1);line-height:22px;border-radius:5px;font-size:.8em}.weather34lightningbackground-alert{height:100%;width:100%;background-color:rgba(61,64,66,0);position:absolute}.weather34lightningcontents{z-index:100;position:inherit;font-size:14px;text-align:center}.weather34lightningmain-content{padding:8px 20px 10px 10px;height:content-max;background:rgba(97,106,114,1);color:#fff;line-height:16px;text-align:center;font-size:.9em}.left,.right{width:content-max;font-size:.85em;font-family:weathertext2}.left{float:left;text-align:left;padding:3px 0 0 10px}.right{float:right;text-align:right;padding:3px 10px 0 0}.daylightvalue1{position:absolute;margin-left:68px;top:45px}.daylightvalue1 hours{position:relative;left:-5px}.daylightvalue1 period{position:absolute;font-size:11px;line-height:20px;top:18px;left:42px;letter-spacing:normal;color:silver}.daylightvalue1 hrs{margin-left:0}.daylightvalue1 span{position:relative;left:42px;top:-3px;color:#ff7c39;font-size:26px;margin-right:7px}notifyblue,notifyorange{color:#fff;padding:0 2px;font-weight:500;font-family:weathertext2}

</style>

<script src="js/jquery.js"></script>
  
<main class="grid">
  <article>  
   <div class=actualt>Indoor Temperature &deg;<?php echo $weather["temp_units"]?></div>        
   
 <div class=indoorsvgnest> 
 <div class="output">
           <small><?php 
$warmmonths='May' || 'Jun' || 'Jul' || 'Aug' ;
if($weather["temp_indoor_trend"] >0)echo "Warming";
else if(date('M')==$warmmonths && $weather["temp_indoor_trend"]<=-0.2)echo "AC Cooling";
else if($weather["temp_indoor_trend"]<0)echo "Cooling";
else if($weather["temp_indoor_trend"] ==0)echo "Stable"; 
?> </small>           
        </div>
<svg id="indoor temperature weather34" width="300px" height="300px" viewBox="0 0 600 600" version="1.1">
<path fill="#4b545c" opacity="1.00" d=" M 277.33 44.31 C 278.81 43.77 280.41 44.04 281.96 43.97 C 292.95 44.05 303.94 43.96 314.93 44.00 C 316.43 43.98 317.71 44.94 319.14 45.28 C 370.84 48.81 421.06 69.16 461.23 101.80 C 484.64 121.11 504.91 144.32 520.29 170.51 C 529.82 187.64 538.71 205.33 544.10 224.25 C 549.63 241.34 553.03 259.10 554.58 276.97 C 554.34 279.46 556.30 281.50 556.02 284.00 C 555.96 294.97 556.03 305.95 556.00 316.92 C 556.01 318.75 554.62 320.26 554.65 322.09 C 553.77 334.85 551.54 347.48 548.62 359.93 C 544.55 375.59 539.76 391.16 532.66 405.74 C 529.53 413.86 524.89 421.23 520.80 428.87 C 497.75 467.88 464.45 500.92 424.85 523.03 C 393.09 540.82 357.49 551.88 321.18 554.73 C 319.46 555.22 317.85 556.22 316.00 556.02 C 305.03 555.96 294.05 556.03 283.08 556.00 C 281.24 556.01 279.73 554.61 277.90 554.63 C 220.65 549.93 165.37 524.80 123.95 485.05 C 99.37 461.65 79.41 433.39 65.94 402.23 C 56.79 382.45 51.18 361.22 47.48 339.80 C 46.82 333.22 45.44 326.71 45.37 320.08 C 45.43 318.24 43.96 316.76 44.00 314.93 C 43.99 302.98 44.00 291.03 44.00 279.08 C 46.47 268.72 46.73 257.91 49.38 247.55 C 61.60 188.21 95.92 133.80 144.07 97.05 C 178.88 70.12 220.79 52.43 264.41 46.46 C 268.71 45.70 273.16 45.68 277.33 44.31 M 276.43 80.50 C 242.35 84.05 209.20 95.83 180.44 114.44 C 132.01 145.51 96.52 196.15 84.41 252.45 C 78.65 278.28 77.90 305.16 81.43 331.36 C 86.10 364.11 98.21 395.82 116.76 423.22 C 129.29 441.93 144.79 458.60 162.32 472.70 C 198.21 501.45 243.29 518.62 289.27 520.58 C 332.32 522.81 375.94 512.08 412.93 489.90 C 444.45 471.19 471.17 444.45 489.90 412.94 C 510.51 378.44 521.45 338.21 520.78 298.01 C 520.70 252.89 505.95 207.98 479.55 171.43 C 448.08 127.28 399.81 95.37 346.72 84.21 C 323.71 79.09 299.85 78.21 276.43 80.50 Z" />
<path fill="#1f1f1f" opacity="1.00" d=" M 276.43 80.50 C 299.85 78.21 323.71 79.09 346.72 84.21 C 399.81 95.37 448.08 127.28 479.55 171.43 C 505.95 207.98 520.70 252.89 520.78 298.01 C 521.45 338.21 510.51 378.44 489.90 412.94 C 471.17 444.45 444.45 471.19 412.93 489.90 C 375.94 512.08 332.32 522.81 289.27 520.58 C 243.29 518.62 198.21 501.45 162.32 472.70 C 144.79 458.60 129.29 441.93 116.76 423.22 C 98.21 395.82 86.10 364.11 81.43 331.36 C 77.90 305.16 78.65 278.28 84.41 252.45 C 96.52 196.15 132.01 145.51 180.44 114.44 C 209.20 95.83 242.35 84.05 276.43 80.50 M 286.41 150.46 C 242.51 154.25 200.72 178.50 176.17 215.17 C 162.81 234.07 154.66 256.34 151.24 279.17 C 147.21 309.14 152.07 340.35 165.68 367.40 C 176.33 388.48 191.81 407.16 210.97 421.04 C 249.80 450.25 303.35 458.22 349.12 442.07 C 379.21 431.96 405.62 411.69 423.60 385.58 C 448.45 350.20 456.72 303.60 445.26 261.87 C 442.59 251.03 438.74 240.45 433.33 230.67 C 425.90 216.47 416.41 203.29 404.75 192.24 C 373.92 161.88 329.44 146.38 286.41 150.46 Z" />
<path fill="<?php 
if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>78.8)echo "#d35d4e";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>64.4)echo "#ff832f";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>59)echo "#e6a141";
else if($weather["temp_units"]=='F' &&  $weather["temp_indoor"]>0)echo "#44a6b5";
else if ($weather["temp_indoor"]>=26) echo "#d35d4e";
else if ($weather["temp_indoor"]>18) echo "#ff832f";
elseif ($weather["temp_indoor"]>15) echo "#e6a141";
else if ($weather["temp_indoor"]>=0) echo "#44a6b5";
?>" opacity="1.00" d=" M 286.41 150.46 C 329.44 146.38 373.92 161.88 404.75 192.24 C 416.41 203.29 425.90 216.47 433.33 230.67 C 438.74 240.45 442.59 251.03 445.26 261.87 C 456.72 303.60 448.45 350.20 423.60 385.58 C 405.62 411.69 379.21 431.96 349.12 442.07 C 303.35 458.22 249.80 450.25 210.97 421.04 C 191.81 407.16 176.33 388.48 165.68 367.40 C 152.07 340.35 147.21 309.14 151.24 279.17 C 154.66 256.34 162.81 234.07 176.17 215.17 C 200.72 178.50 242.51 154.25 286.41 150.46 Z" />
</svg>
<div class=indoorsvgnestvalue>  
<?php echo number_format($weather["temp_indoor"],1);?><?php echo "<smalluvunit>&deg;",$weather["temp_units"]?></div>


<?php 
if($weather["temp_indoor_trend"] >0)echo "<div class='weather34indoortrendup'>",number_format($weather["temp_indoor_trend"],1).'&deg; '.$risingsymbol1;
else if($weather["temp_indoor_trend"]<0)echo "<div class='weather34indoortrenddown'>", number_format($weather["temp_indoor_trend"],1).'&deg; '.$fallingsymbol1;
else if($weather["temp_indoor_trend"] ==0)echo "<div class='weather34indoortrendsteady'>Steady"; 
?></div>
<div class="trendicon"><?php 
if($weather["temp_indoor_trend"] >0)echo $heatindexwu;
else if(date('M')==$warmmonths && $weather["temp_indoor_trend"]<=-0.2)echo $accooler;
else if($weather["temp_indoor_trend"]<0)echo $windchillwu;
else if($weather["temp_indoor_trend"] ==0)echo $airqualitybreeze; 
?> </div>



</div>
</div>
   
   
</article>  

 <article>  
      <div class=actualt>Indoor Humidity %</div>        
           
   <div class=indoorsvgnest> 
 <svg id="indoor humidity weather34" width="300px" height="300px" viewBox="0 0 600 600" version="1.1" >
<path fill="#4b545c" opacity="1.00" d=" M 277.33 44.31 C 278.81 43.77 280.41 44.04 281.96 43.97 C 292.95 44.05 303.94 43.96 314.93 44.00 C 316.43 43.98 317.71 44.94 319.14 45.28 C 370.84 48.81 421.06 69.16 461.23 101.80 C 484.64 121.11 504.91 144.32 520.29 170.51 C 529.82 187.64 538.71 205.33 544.10 224.25 C 549.63 241.34 553.03 259.10 554.58 276.97 C 554.34 279.46 556.30 281.50 556.02 284.00 C 555.96 294.97 556.03 305.95 556.00 316.92 C 556.01 318.75 554.62 320.26 554.65 322.09 C 553.77 334.85 551.54 347.48 548.62 359.93 C 544.55 375.59 539.76 391.16 532.66 405.74 C 529.53 413.86 524.89 421.23 520.80 428.87 C 497.75 467.88 464.45 500.92 424.85 523.03 C 393.09 540.82 357.49 551.88 321.18 554.73 C 319.46 555.22 317.85 556.22 316.00 556.02 C 305.03 555.96 294.05 556.03 283.08 556.00 C 281.24 556.01 279.73 554.61 277.90 554.63 C 220.65 549.93 165.37 524.80 123.95 485.05 C 99.37 461.65 79.41 433.39 65.94 402.23 C 56.79 382.45 51.18 361.22 47.48 339.80 C 46.82 333.22 45.44 326.71 45.37 320.08 C 45.43 318.24 43.96 316.76 44.00 314.93 C 43.99 302.98 44.00 291.03 44.00 279.08 C 46.47 268.72 46.73 257.91 49.38 247.55 C 61.60 188.21 95.92 133.80 144.07 97.05 C 178.88 70.12 220.79 52.43 264.41 46.46 C 268.71 45.70 273.16 45.68 277.33 44.31 M 276.43 80.50 C 242.35 84.05 209.20 95.83 180.44 114.44 C 132.01 145.51 96.52 196.15 84.41 252.45 C 78.65 278.28 77.90 305.16 81.43 331.36 C 86.10 364.11 98.21 395.82 116.76 423.22 C 129.29 441.93 144.79 458.60 162.32 472.70 C 198.21 501.45 243.29 518.62 289.27 520.58 C 332.32 522.81 375.94 512.08 412.93 489.90 C 444.45 471.19 471.17 444.45 489.90 412.94 C 510.51 378.44 521.45 338.21 520.78 298.01 C 520.70 252.89 505.95 207.98 479.55 171.43 C 448.08 127.28 399.81 95.37 346.72 84.21 C 323.71 79.09 299.85 78.21 276.43 80.50 Z" />
<path fill="#1f1f1f" opacity="1.00" d=" M 276.43 80.50 C 299.85 78.21 323.71 79.09 346.72 84.21 C 399.81 95.37 448.08 127.28 479.55 171.43 C 505.95 207.98 520.70 252.89 520.78 298.01 C 521.45 338.21 510.51 378.44 489.90 412.94 C 471.17 444.45 444.45 471.19 412.93 489.90 C 375.94 512.08 332.32 522.81 289.27 520.58 C 243.29 518.62 198.21 501.45 162.32 472.70 C 144.79 458.60 129.29 441.93 116.76 423.22 C 98.21 395.82 86.10 364.11 81.43 331.36 C 77.90 305.16 78.65 278.28 84.41 252.45 C 96.52 196.15 132.01 145.51 180.44 114.44 C 209.20 95.83 242.35 84.05 276.43 80.50 M 286.41 150.46 C 242.51 154.25 200.72 178.50 176.17 215.17 C 162.81 234.07 154.66 256.34 151.24 279.17 C 147.21 309.14 152.07 340.35 165.68 367.40 C 176.33 388.48 191.81 407.16 210.97 421.04 C 249.80 450.25 303.35 458.22 349.12 442.07 C 379.21 431.96 405.62 411.69 423.60 385.58 C 448.45 350.20 456.72 303.60 445.26 261.87 C 442.59 251.03 438.74 240.45 433.33 230.67 C 425.90 216.47 416.41 203.29 404.75 192.24 C 373.92 161.88 329.44 146.38 286.41 150.46 Z" />
<path fill="<?php if($weather["humidity_indoor"]<35)echo "#d35d4e";
			  else if($weather["humidity_indoor"]<60)echo "#e6a141";
			  else if($weather["humidity_indoor"]<70)echo "#ec5519";
			  else if($weather["humidity_indoor"]<=100)echo "#44a6b5";?>" opacity="1.00" d=" M 286.41 150.46 C 329.44 146.38 373.92 161.88 404.75 192.24 C 416.41 203.29 425.90 216.47 433.33 230.67 C 438.74 240.45 442.59 251.03 445.26 261.87 C 456.72 303.60 448.45 350.20 423.60 385.58 C 405.62 411.69 379.21 431.96 349.12 442.07 C 303.35 458.22 249.80 450.25 210.97 421.04 C 191.81 407.16 176.33 388.48 165.68 367.40 C 152.07 340.35 147.21 309.14 151.24 279.17 C 154.66 256.34 162.81 234.07 176.17 215.17 C 200.72 178.50 242.51 154.25 286.41 150.46 Z" />
</svg>

        <div class="output">
           <small><?php 
			  if($weather["humidity_indoor"]<35)echo "Dry";			  
			  else if($weather["humidity_indoor"]<60)echo "Good";
			  else if($weather["humidity_indoor"]<80)echo "Caution";
			  else if($weather["humidity_indoor"]<=100)echo "Damp";		  
			  ?></small>           
        </div>

<div class=indoorsvgnestvaluehum >  
<?php echo number_format($weather["humidity_indoor"],0);?><?php echo "<smallhumunit>%</smallhumunit>"?></div>

<?php 
if($weather["humidity_indoortrend"] >0)echo "<div class='weather34indoortrendup'>",number_format($weather["humidity_indoortrend"],0)."% ".$risingsymbol1;
else if($weather["humidity_indoortrend"]<0)echo "<div class='weather34indoortrenddown'>", number_format($weather["humidity_indoortrend"],0)."% ".$fallingsymbol1;
else if($weather["humidity_indoortrend"]==0)echo "<div class='weather34indoortrendsteady'>Steady"; 
?></div>
<div class="humicon"><?php echo $humicon;?></div>

</div>


</div></div></div>

</div></div>
</article>  
</main>
<main class="grid3">

  <clock>  
   <div class=actualt>Istanbul Time</div>        
   
 
   <span style="position:absolute;margin-top:30px;margin-left:10px"> 
<svg id="i-clock" viewBox="0 0 32 32" width="80" height="80" fill="none" stroke="#44a6b5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"> <circle cx="16" cy="16" r="14" /><path stroke="rgba(208, 95, 45, 1.000)" d="M16 8 L16 16 20 20" />
</svg></span>

<div id="theTime"></div>



</div></div>
</clock>  


    
  </main>
  <div class="grid1">
  <articlegraph> 
  <div class=actualt>Indoor <span style="color:#ff742c">Temp<?php echo "&deg;<smalluvunit>",$weather["temp_units"]?></smalluvunit></span></div>  
  <iframe  src="weather34charts/indoortempipad.php" frameborder="0" scrolling="no" width="100%" height="110px"></iframe>
   
  </articlegraph>  
 </div>
  <div class="grid2">
  <articlegraph1> 
    <div class=actualt>Indoor <blue>Humidity %</div>  
  <iframe  src="weather34charts/indoorhumipad.php" frameborder="0" scrolling="no" width="100%" height="110px"></iframe>
   
  </articlegraph1>   
  </main>
  <div class="grid4" >
  <footer> 
 <script>
 var clockID;var yourTimeZoneFrom='<?php echo $UTC?>';var d=new Date();var weekdays=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];var months=["January","February","March","April","May","June","July","August","September","October","November","December"];var tzDifference=yourTimeZoneFrom*60+d.getTimezoneOffset();var offset=tzDifference*60*1000;function UpdateClock(){var e=new Date(new Date().getTime()+offset);var c=e.getHours();var a=e.getMinutes();var g=e.getSeconds();var f=e.getFullYear();var h=months[e.getMonth()];var b=e.getDate();var i=weekdays[e.getDay()];if(a<10){a="0"+a}if(g<10){g="0"+g}if(c<10){c="0"+c}document.getElementById("theTime").innerHTML="<div class='orangeclock'> "+i+" "+h+" "+b+" "+f+" <time> "+c+":"+a+":"+g}function StartClock(){clockID=setInterval(UpdateClock,500)}function KillClock(){clearTimeout(clockID)}window.onload=function(){StartClock()}(jQuery);</script>  
  weather<blue>34</blue> Indoor iPad Dashboard &copy;2015-<?php echo date('Y');?> 
  <?php };?>
  </footer></div></main>