<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('livedata.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Meteocloud</title>
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
.weather34darkbrowser{position:relative;background:0;width:95%;height:30px;margin:auto;margin-top:-5px;margin-left:0px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:10px;}
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
padding:5px;font-family:Arial, Helvetica, sans-serif;width:320px;height:0.8em;font-size:0.8rem;padding-top:2px;color:#aaa;
align-items:center;justify-content:center;margin-bottom:10px;top:0}
.hardwareimage{position:relative;display:flex;margin:0 auto;margin-top:-0px;}
.hardwareimagewf{position:relative;display:flex;margin:0 auto;margin-top:10px;opacity:.8}


.hardwareimagembpro{position:relative;display:flex;margin:0 auto;margin-top:5px;width:160px;display:inline}
.hardwareimagenano{position:relative;display:flex;margin:0 auto;margin-top:5px;margin-left:140px;width:80px;display:inline}
.meteocloudimg2{position:relative;display:flex;margin:0 auto;top:-50px;margin-left:140px;width:160px;display:inline;opacity:.7}


.meteocloudimg{width:60%;margin:0 auto;float:none;display:block}
.weather34logo{position:relative;display:flex;margin-left:5%;bottom:0;margin-top:10px}
a{color:#009bb4;display:inline;}
date{color:#aaa;font-size:.65em;margin-top:10px}

</style>
<div class="weather34darkbrowser" url="Meteocloud Network"></div>
  
<main class="grid">
  <article>  
   <div class=actualt>See the enthusiasts weather network Meteocloud</div> 
    <a href="https://www.meteomap.cloud" title="https://www.meteomap.cloud" target="_blank">
   <img src="img/meteocloud-logo.png" class="meteocloudimg">   
    </a><br>
    
    <?php echo $info;?> <a href="https://www.meteomap.cloud/register" title="https://www.meteomap.cloud/register" target="_blank"><strong>Sign up today</strong></a> and send data via Meteobridge network services or just click <a href="https://www.meteomap.cloud" title="https://www.meteomap.cloud" target="_blank"><b>here to view</b></a> the Meteobridge enthusiasts weather data map.  
    <br> 
    *<em>As a weather station operator, you send data via MeteoBridge or WeatherBoxx to this cloud database</em>. 
    <br>
    <a href="https://swisswetter.shop/weatherBoxx-PRO" title="https://swisswetter.shop/weatherBoxx-PRO" target="_blank"><img src="img/MeteobridgePRO.svg" class="hardwareimagembpro"></a>  
    
    <a href="https://swisswetter.shop/weatherBoxx-NANO" title="https://swisswetter.shop/weatherBoxx-NANO" target="_blank"><img src="img/nano.svg" class="hardwareimagenano"></a>
   
<a href="https://www.meteomap.cloud" title="https://www.meteomap.cloud" target="_blank"><img src="img/meteocloud-logo.png" class="meteocloudimg2"> </a>  
</article> 
   </main>