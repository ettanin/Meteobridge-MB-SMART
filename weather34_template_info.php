<?php include('settings.php');$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['SERVER_NAME'];?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Weather34 Weather Station Template Info card</title>  
  <style>
 @charset "UTF-8";/*!
 * Bio Card /Info page css for MB-SMART version July 2019*/
 @font-face{font-family:system;font-style:normal;src:local("Arial")} 
 @font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(css/fonts/verbatim-regular.woff2) format("woff2"),url(css/fonts/verbatim-regular.ttf) format("truetype")}
 *,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}
 body{font-family:Arial, Helvetica, sans-serif,system;margin:0}
 .container{display:flex;padding-left:1rem;padding-right:1rem;width:450px;margin:0 auto;justify-content:center;}
 
 html{font-size:15px}
 
 .card{display:flex;flex-direction:column;margin:1rem 0;background-color:#fff;}
 .card .card\:header{display:flex;width:550px;padding:1rem;background-color:rgba(86, 95, 103, 1.000);color:#eee;}
 .card .card\:header .card\:info{height:60px;display:flex;flex-direction:column;justify-content:center}
 .card .card\:header .card\:info h3{margin:0 0 5px;font-weight:500;line-height:1}.card .card\:header .card\:info p{margin:0;font-weight:300;line-height:1}.card .card\:header .card\:image{display:flex;align-items:center;height:57px;margin-left:auto}.card .card\:header .card\:image img{width:auto;height:57px;border-radius:0;border:0}
 .card .card\:content ul{margin:0;padding:0;list-style:none}.card .card\:content ul li{height:80px;border-bottom:1px solid #eee;display:flex;padding:1rem 1.5rem;text-decoration:none;outline:0}.card .card\:content ul li,.card .card\:content ul li a:focus{background-color:rgba(45,56,68,.04)}.card .card\:content ul li .collection{display:flex;flex-direction:row}.card .card\:content ul li .collection .collection\:icon{display:flex;align-items:center;width:43px;height:47px}.card .card\:content ul li .collection .collection\:data{display:flex;flex-direction:column;justify-content:center;height:47px;margin-left:1.5rem}
 .card .card\:content ul li .collection .collection\:data h3{margin:0;font-size:1.1rem;color:rgba(86, 95, 103, 1.000)}
 .card .card\:content ul li .collection .collection\:data span{font-size:.875rem;font-weight:500;color:rgba(45,56,68,.75)}
 .card .card\:content ul li .collection svg{max-width:43px;height:calc(80px - 2rem)}
 .card .card\:content ul li .collection svg.ghost{height:calc(70px - 2rem)}
 .card .card\:content ul li:last-of-type{border-bottom:0;padding:calc(1rem + .5px) 1.5rem}
 a{text-decoration:none;color:rgba(61, 70, 77, 1.000);font-size:.75rem;font-weight:500;}a:hover{color:rgba(208, 95, 45, 1.000);}
 .weather34darkbrowser{position:relative;background:0;width:100%;max-height:30px;margin:auto;margin-top:-7px;margin-left:-0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat;margin-bottom:-20px;}
 .weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}orange{color:#d35d4e}blue{color:#44a6b5}
.davishardwaresvg{position:absolute;margin-left:240px;}.nanohardwaresvg{position:absolute;margin-left:270px;}body{text-shadow:1px 1px 3px rgba(61,70,77,.2)}

 
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Weather34 Template Information"></div>
 
  <div class="container">
            <div class="card" style="margin-top:50px;overflow:hidden;max-height:370px;">
                <div class="card:header">
                    <div class="card:info">
                        <h3>Weather34</h3>
                        <p>Weather Template Info</p>
                    </div>
                    <div class="card:image">
                        <img src="img/weather34logo.svg" alt="weather34 logo" title="weather34 logo">
                    </div>                    
                </div>
                <div class="card:content">
                    <ul>
                    <li>
                         <div class="collection" >
                                    <div class="collection:icon">
<img src="img/weather34logo.svg" alt="weather34 logo" title="weather34 logo" width="42pt">

                                    </div>
                                    <div class="collection:data">
                                        <h3>Weather34 MB-SMART Design</h3>
                                     <span style="font-size:.8em;font-weight:500"> Built with the new CSS properties <em>.grid{}</em> and supports all new modern browsers.</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                       
                        <li>
                            <a href="https://weather34.com/homeweatherstation/beta-meteobridge.html" alt="weather34 Meteobridge Template Download" title="weather34 Meteobridge Template Download" target="_blank">
                                <div class="collection">
                                    <div class="collection:icon">
                                        <svg width="60pt" height="60pt" viewBox="0 0 320 320" version="1.1" xmlns="http://www.w3.org/2000/svg">
<g id="#00bcd4ff">
<path fill="#00bcd4" opacity="1.00" d=" M 66.89 64.86 C 88.31 43.61 117.15 30.28 147.13 27.19 C 156.99 25.45 167.30 25.97 177.14 27.81 C 211.50 32.10 243.63 50.71 264.89 77.97 C 280.57 97.75 290.14 122.07 292.81 147.13 C 294.32 153.93 293.70 161.04 293.58 167.97 C 291.83 180.82 289.81 193.79 285.08 205.96 C 273.50 237.56 249.43 264.28 219.33 279.29 C 204.84 286.63 188.96 290.98 172.85 292.81 C 163.21 294.48 153.11 294.08 143.49 292.28 C 113.39 288.60 84.81 274.09 63.91 252.14 C 43.20 230.83 30.26 202.40 27.19 172.88 C 25.97 168.73 26.41 164.32 26.21 160.04 C 26.41 155.74 25.96 151.29 27.19 147.11 C 30.38 116.19 44.49 86.48 66.89 64.86 M 125.87 58.93 C 101.14 67.26 79.77 85.04 67.01 107.81 C 55.71 127.60 51.28 151.08 54.09 173.66 C 54.44 178.19 55.71 182.58 56.75 186.99 C 65.58 221.32 92.63 250.16 126.30 261.22 C 130.70 262.60 135.16 263.76 139.66 264.76 C 140.23 264.87 141.38 265.08 141.96 265.19 C 147.81 266.23 153.75 266.53 159.68 266.75 C 160.42 266.73 161.92 266.70 162.67 266.69 C 169.84 266.50 177.00 265.49 184.00 263.97 C 184.97 263.73 185.94 263.50 186.92 263.25 C 189.97 262.32 193.06 261.48 196.02 260.27 C 198.64 259.07 201.73 259.13 203.98 257.15 C 234.19 243.61 257.16 215.31 264.25 182.97 C 264.33 182.35 264.50 181.10 264.58 180.48 C 265.00 180.19 265.83 179.61 266.25 179.32 C 266.05 177.53 266.01 175.73 265.77 173.94 C 268.42 154.57 265.45 134.49 257.46 116.66 C 246.78 92.61 226.88 72.87 202.80 62.30 C 178.78 51.61 150.73 50.36 125.87 58.93 Z" />
</g>
<g id="#455a64ff">
<path fill="#565f67" opacity="1.00" d=" M 101.34 121.47 C 99.76 112.23 98.30 101.72 103.85 93.45 C 114.27 93.57 124.62 97.68 132.11 104.97 C 133.18 106.43 134.99 105.46 136.37 105.08 C 152.31 98.99 170.31 98.65 186.58 103.70 C 188.92 104.32 191.14 105.63 193.60 105.69 C 201.46 98.22 212.03 93.24 223.04 93.58 C 229.71 104.70 225.94 118.02 223.49 129.78 C 224.74 132.88 226.86 135.57 228.04 138.72 C 233.59 151.39 232.87 166.43 226.84 178.81 C 238.74 177.85 250.91 176.16 262.64 179.38 C 265.41 179.58 265.13 176.44 265.29 174.56 C 261.92 174.81 258.67 173.72 255.33 173.45 C 247.03 172.69 238.80 174.40 230.57 175.23 C 232.74 172.93 236.15 173.75 238.95 173.26 C 247.83 171.85 256.99 171.79 265.77 173.94 C 266.01 175.73 266.05 177.53 266.25 179.32 C 265.83 179.61 265.00 180.19 264.58 180.48 C 264.50 181.10 264.33 182.35 264.25 182.97 C 264.28 182.42 264.35 181.34 264.39 180.79 C 257.40 179.37 250.28 178.00 243.12 178.72 C 237.48 178.62 231.94 180.04 226.29 179.65 C 219.91 191.45 207.70 198.81 195.14 202.47 C 189.20 204.19 183.10 205.23 176.96 205.83 C 189.17 211.42 198.01 223.62 199.60 236.94 C 199.79 243.78 199.86 250.65 199.48 257.48 C 200.98 257.59 202.49 257.35 203.98 257.15 C 201.73 259.13 198.64 259.07 196.02 260.27 C 193.06 261.48 189.97 262.32 186.92 263.25 C 186.67 254.19 187.05 245.12 186.75 236.07 C 186.65 232.18 180.37 232.21 179.81 235.88 C 179.52 245.53 179.85 255.21 179.66 264.87 C 181.11 264.58 182.56 264.28 184.00 263.97 C 177.00 265.49 169.84 266.50 162.67 266.69 C 164.08 266.61 165.49 266.51 166.90 266.40 C 166.68 253.98 167.07 241.54 166.71 229.13 C 166.28 225.56 160.51 225.55 159.84 229.04 C 159.50 241.59 159.86 254.18 159.68 266.75 C 153.75 266.53 147.81 266.23 141.96 265.19 C 143.60 265.41 145.25 265.56 146.91 265.72 C 146.68 255.84 147.04 245.94 146.75 236.07 C 146.76 233.50 143.46 232.34 141.50 233.58 C 139.92 234.43 139.58 236.36 139.68 237.99 C 139.70 246.92 139.77 255.84 139.66 264.76 C 135.16 263.76 130.70 262.60 126.30 261.22 C 126.29 253.86 126.26 246.49 126.32 239.13 C 116.92 239.24 105.47 240.40 98.86 232.17 C 93.70 224.44 90.34 215.09 82.53 209.43 C 81.42 208.14 78.49 207.54 79.25 205.42 C 81.77 204.05 84.88 205.50 87.46 206.17 C 96.01 208.82 98.72 218.61 106.09 222.91 C 111.98 226.77 119.40 225.58 126.01 224.97 C 127.68 224.54 129.98 224.88 131.02 223.19 C 133.50 219.37 135.98 215.46 139.44 212.42 C 142.22 209.65 145.90 208.15 149.03 205.87 C 133.80 203.99 117.74 199.60 106.91 188.06 C 104.07 185.51 102.34 182.06 99.98 179.14 C 94.03 178.28 87.98 178.44 81.98 178.29 C 72.97 177.69 64.24 180.85 56.39 184.98 C 56.48 185.49 56.66 186.49 56.75 186.99 C 55.71 182.58 54.44 178.19 54.09 173.66 C 62.28 172.03 70.60 170.24 79.00 170.92 C 85.00 171.36 91.01 171.56 97.01 171.85 C 92.97 158.90 94.54 144.33 101.86 132.84 C 104.63 129.42 101.81 125.23 101.34 121.47 M 55.75 174.97 C 55.52 175.22 55.07 175.73 54.85 175.98 C 54.82 178.43 55.49 180.79 55.97 183.17 C 61.97 180.36 68.23 177.75 74.91 177.23 C 83.04 176.15 91.20 177.71 99.35 177.59 C 98.71 176.12 98.05 174.65 97.37 173.20 C 90.25 172.59 83.06 172.76 75.98 171.73 C 69.24 172.78 62.51 174.04 55.75 174.97 Z" />
</g>
</svg>
                                    </div>
                                    <div class="collection:data">
                                        <h3>MB-SMART Template Download</h3>
                                        <a href="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" alt="https://weather34.com/homeweatherstation/meteobridge-mb-smart.html" title="weather34 Meteobridge Beta Template Download" target="_blank">https://weather34.com/homeweatherstation/meteobridge-mb-smart.html</a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        
                        
    <li>
                            <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" alt="weather34 http://creativecommons.org/licenses/by-nc-nd/4.0/" title="weather34 http://creativecommons.org/licenses/by-nc-nd/4.0/ Download" target="_blank">
                                <div class="collection">
                                    <div class="collection:icon">
                                        <svg width="25pt" height="25pt" version="1.1" id="Layer_1" x="0px" y="0px" 
	 viewBox="0 0 305 305" style="enable-background:new 0 0 305 305;" xml:space="preserve">
<g id="XMLID_231_"><path fill="#00bcd4" id="XMLID_232_" d="M152.248,0C110.826,0,73.791,15.302,45.143,44.256C16.032,73.824,0,112.266,0,152.5
		c0,40.978,15.494,78.094,44.804,107.329C73.833,288.958,111.99,305,152.248,305c40.679,0,79.463-16.175,109.205-45.543
		C289.941,231.415,305,194.43,305,152.5c0-41.796-15.214-79.075-43.996-107.806C231.714,15.455,194.106,0,152.248,0z
		 M152.674,272.476c-31.746,0-61.812-12.57-84.656-35.394c-23.139-23.126-35.881-53.165-35.881-84.581
		c0-31.503,12.748-61.831,35.895-85.396c22.554-22.909,51.823-35.018,84.643-35.018c32.663,0,62.219,12.266,85.473,35.471
		c22.67,22.609,34.652,51.986,34.652,84.954c0,33.027-11.813,62.106-34.164,84.093C215.106,259.736,184.578,272.476,152.674,272.476
		z"/><path fill="#ff832f" id="XMLID_236_" d="M152.435,173.38l-18.711-9.414c-0.619-0.311-1.338-0.351-1.987-0.113c-0.649,0.239-1.171,0.737-1.44,1.374
		c-3.37,7.988-8.196,11.396-16.136,11.396c-15.896,0-17.612-16.871-17.612-24.124c0-16,5.926-24.112,17.612-24.112
		c1.567,0,9.629,0.515,14.385,10.684c0.289,0.618,0.818,1.091,1.464,1.309c0.646,0.219,1.355,0.163,1.958-0.152l19.953-10.425
		c0.596-0.311,1.041-0.849,1.235-1.492c0.195-0.643,0.122-1.337-0.201-1.927c-8.209-14.954-22.708-22.858-41.931-22.858
		c-27.342,0-46.437,20.138-46.437,48.973c0,29.796,18.543,49.049,47.239,49.049c17.276,0,32.85-9.233,41.657-24.698
		c0.34-0.596,0.42-1.304,0.222-1.96C153.506,174.234,153.047,173.688,152.435,173.38z"/>
	<path fill="#ff832f" id="XMLID_237_" d="M240.344,174.893c-0.196-0.657-0.655-1.204-1.268-1.514l-18.65-9.423
		c-0.619-0.313-1.342-0.354-1.993-0.114c-0.652,0.241-1.174,0.742-1.441,1.383c-3.331,7.99-8.165,11.398-16.165,11.398
		c-15.953,0-17.676-16.871-17.676-24.124c0-15.967,5.947-24.064,17.676-24.064c1.571,0,9.649,0.513,14.398,10.638
		c0.29,0.617,0.818,1.089,1.464,1.307c0.647,0.218,1.353,0.163,1.956-0.152l19.949-10.412c0.596-0.311,1.041-0.848,1.236-1.49
		c0.194-0.643,0.123-1.336-0.198-1.925c-8.294-15.18-22.424-22.878-41.995-22.878c-27.341,0-46.436,20.14-46.436,48.976
		c0,29.796,18.566,49.049,47.3,49.049c17.196,0,32.754-9.232,41.618-24.695C240.459,176.259,240.541,175.549,240.344,174.893z"/>
</g></svg>

                                    </div>
                                    <div class="collection:data">
                                        <h3>Creative Commons</h3>
                                        <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" title="weather34 http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.</a>
                                    </div>
                                </div>
                            </a>
                        </li>                    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </ul>
                </div>
            </div>
            
            
            
            
            
            
            
            
        
        </div>
    </div>
</div>

</body>

</html>
