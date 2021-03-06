<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 MB-SMART Licence & Download</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
html,body{font-size:14px;font-family: Helvetica, Arial, sans-serif;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;}
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(700px, 1fr));
  grid-gap: 5px;
  align-items: stretch;
  color:#f5f7fc;
  
  }
.grid > article {
   border: 1px solid rgba(245, 247, 252,.02);
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.6);
  padding:10px;
  font-size:0.8em;
  -webkit-border-radius:4px;
  border-radius:4px;
  background:0;-webkit-font-smoothing: antialiased;	-moz-osx-font-smoothing: grayscale;
  height:360px ;
}

 a{color:#aaa;text-decoration:none} 
.weather34darkbrowser{position:relative;background:0;width:97%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:10px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 blue{color:#01a4b4}
 orange{color:#009bb4}
 orange1{position:relative;color:#009bb4;margin:0 auto;text-align:center;margin-left:5%;font-size:1.1rem}
 green{color:#aaa}red{color:#f37867}red6{color:#d65b4a}
 value{color:#fff}
 yellow{color:#CC0}
 purple{color:#916392}
 white{color:#aaa;display:inline;}
.actualt{position:relative;left:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(74, 99, 111, 0.1);
padding:5px;font-family:Arial, Helvetica, sans-serif;width:220px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.hardwareimage{position:relative;display:flex;margin:0 auto;margin-top:-0px;}
.hardwareimagewf{position:relative;display:flex;margin:0 auto;margin-top:10px;opacity:.8}
.hardwareimagenano{position:relative;display:flex;margin:0 auto;margin-top:10px;}
.hardwareimageups{position:relative;display:flex;margin:0 auto;margin-top:5px;
border:solid 2px #4b545c;border-bottom:solid 5px #4b545c;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;}
.hardwareimageaq{position:relative;display:flex;margin:0 auto;margin-top:10px;
border:solid 2px #4b545c;border-bottom:solid 15px #4b545c;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;padding-right:3px;opacity:.8}
.cclogo{display:flex;float:right;}
.weather34logo{position:relative;display:flex;margin-left:5%;bottom:0;margin-top:10px}
a{color:#009bb4;display:inline;}
date{color:#aaa;font-size:.65em;margin-top:10px}

</style>
<div class="weather34darkbrowser" url="Weather34 MB-SMART Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>Weather34 MB-SMART Licence & Download</div> 
   <div class="cclogo">
    <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" title="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">
    <svg id="weather34 cc logo " width="20pt" height="20pt" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 305 305" style="enable-background:new 0 0 305 305;" xml:space="preserve">
<g id="XMLID_231_"><path fill="#009bab" id="XMLID_232_" d="M152.248,0C110.826,0,73.791,15.302,45.143,44.256C16.032,73.824,0,112.266,0,152.5 c0,40.978,15.494,78.094,44.804,107.329C73.833,288.958,111.99,305,152.248,305c40.679,0,79.463-16.175,109.205-45.543 C289.941,231.415,305,194.43,305,152.5c0-41.796-15.214-79.075-43.996-107.806C231.714,15.455,194.106,0,152.248,0z M152.674,272.476c-31.746,0-61.812-12.57-84.656-35.394c-23.139-23.126-35.881-53.165-35.881-84.581 c0-31.503,12.748-61.831,35.895-85.396c22.554-22.909,51.823-35.018,84.643-35.018c32.663,0,62.219,12.266,85.473,35.471 c22.67,22.609,34.652,51.986,34.652,84.954c0,33.027-11.813,62.106-34.164,84.093C215.106,259.736,184.578,272.476,152.674,272.476 z"/><path fill="#ff832f" id="XMLID_236_" d="M152.435,173.38l-18.711-9.414c-0.619-0.311-1.338-0.351-1.987-0.113c-0.649,0.239-1.171,0.737-1.44,1.374  c-3.37,7.988-8.196,11.396-16.136,11.396c-15.896,0-17.612-16.871-17.612-24.124c0-16,5.926-24.112,17.612-24.112 c1.567,0,9.629,0.515,14.385,10.684c0.289,0.618,0.818,1.091,1.464,1.309c0.646,0.219,1.355,0.163,1.958-0.152l19.953-10.425 c0.596-0.311,1.041-0.849,1.235-1.492c0.195-0.643,0.122-1.337-0.201-1.927c-8.209-14.954-22.708-22.858-41.931-22.858 c-27.342,0-46.437,20.138-46.437,48.973c0,29.796,18.543,49.049,47.239,49.049c17.276,0,32.85-9.233,41.657-24.698 c0.34-0.596,0.42-1.304,0.222-1.96C153.506,174.234,153.047,173.688,152.435,173.38z"/> <path fill="#ff793a" id="XMLID_237_" d="M240.344,174.893c-0.196-0.657-0.655-1.204-1.268-1.514l-18.65-9.423 	c-0.619-0.313-1.342-0.354-1.993-0.114c-0.652,0.241-1.174,0.742-1.441,1.383c-3.331,7.99-8.165,11.398-16.165,11.398 c-15.953,0-17.676-16.871-17.676-24.124c0-15.967,5.947-24.064,17.676-24.064c1.571,0,9.649,0.513,14.398,10.638 c0.29,0.617,0.818,1.089,1.464,1.307c0.647,0.218,1.353,0.163,1.956-0.152l19.949-10.412c0.596-0.311,1.041-0.848,1.236-1.49 c0.194-0.643,0.123-1.336-0.198-1.925c-8.294-15.18-22.424-22.878-41.995-22.878c-27.341,0-46.436,20.14-46.436,48.976 c0,29.796,18.566,49.049,47.3,49.049c17.196,0,32.754-9.232,41.618-24.695C240.459,176.259,240.541,175.549,240.344,174.893z"/></g></svg>
    </a></div>    
    <br>    
    This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License. <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">http://creativecommons.org/licenses/by-nc-nd/4.0/</a><br>
   
<strong>Under the following terms:</strong><br>
<red>Attribution</red> — You must give appropriate credit, provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.<br>
<red>NonCommercial</red> — You may not use the material for commercial purposes.<br>
<red>NoDerivatives</red> — If you remix, transform, or build upon the material, <strong><red>you may not distribute</red></strong> the modified material.<br>
<red>No additional restrictions</red> — You may not apply legal terms or technological measures that legally restrict others from doing anything the license permits.
<br>
<em>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Template.</em>
<br><br><strong>Be smart and be ethical</strong>
<br>
<em>You do not have the right to <strong>resell, sublicense or redistribute (even for free)</strong> files yourself or as a separate application from any of your work. If you have any questions about the License, feel free to contact <strong><a href="mailto:info@weather34.com?subject=weather34 template">weather34</a></strong> for clarification.</em>
<br>
<br><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank">
<svg id="github" viewBox="0 0 64 64" width="15" height="15"><path stroke-width="0" fill="#009bab" d="M32 0 C14 0 0 14 0 32 0 53 19 62 22 62 24 62 24 61 24 60 L24 55 C17 57 14 53 13 50 13 50 13 49 11 47 10 46 6 44 10 44 13 44 15 48 15 48 18 52 22 51 24 50 24 48 26 46 26 46 18 45 12 42 12 31 12 27 13 24 15 22 15 22 13 18 15 13 15 13 20 13 24 17 27 15 37 15 40 17 44 13 49 13 49 13 51 20 49 22 49 22 51 24 52 27 52 31 52 42 45 45 38 46 39 47 40 49 40 52 L40 60 C40 61 40 62 42 62 45 62 64 53 64 32 64 14 50 0 32 0 Z" /></svg></a>
*download request MB-SMART version via <a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank">
<svg id="download" viewBox="0 0 32 32" width="22" height="22" fill="none" stroke="#ff793a" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M28 22 L28 30 4 30 4 22 M16 4 L16 24 M8 16 L16 24 24 16" /></svg> weather34.com</a>
<br><br>
<em>Credit Acknowledgements<em><br>
Lars (Singapore),Paul Wilman(UK),Graham(Guernsey),Ron(USA K1TTC),Tony(Tasmania)..
<em>*Revised October 2019</em>

<br>
<a href="https://weather34.com/homeweatherstation/" alt="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank">
 <img src="img/weather34-mbsmart-logo.svg" alt="weather34 logo" class="weather34logo" width="40px"><white>
 Copyright &copy; 2015-<?php echo date('Y')?> by Brian Underdown * <a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank">https://weather34.com </white>

</article> 
   </main>