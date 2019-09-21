<?php include('settings1.php');$url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['SERVER_NAME'];?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Weather Station Bio Info card</title>  
 <style>
 @charset "UTF-8";/*!
 * Bio Card /Info page css for MB-SMART version July 2019*/
 @font-face{font-family:system;font-style:normal;src:local("Arial")} 
 @font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff"),url(css/fonts/verbatim-regular.woff2) format("woff2"),url(css/fonts/verbatim-regular.ttf) format("truetype")}
 *,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}
 body{font-family:Arial, Helvetica, sans-serif,system;margin:0}
 .container{display:flex;padding-left:1rem;padding-right:1rem;width:100%;margin:auto 0;justify-content:center;}
 
 html{font-size:15px}
 
 .card{display:flex;flex-direction:column;margin:1rem 0;background-color:#fff;}
 .card .card\:header{display:flex;width:450px;padding:1rem;background-color:rgba(86, 95, 103, 1.000);color:#eee}
 .card .card\:header .card\:info{height:60px;display:flex;flex-direction:column;justify-content:center}
 .card .card\:header .card\:info h3{margin:0 0 5px;font-weight:500;line-height:1}.card .card\:header .card\:info p{margin:0;font-weight:300;line-height:1}.card .card\:header .card\:image{display:flex;align-items:center;height:57px;margin-left:auto}.card .card\:header .card\:image img{width:auto;height:57px;border-radius:0;border:0}
 .card .card\:content ul{margin:0;padding:0;list-style:none}.card .card\:content ul li{height:80px;border-bottom:1px solid #eee;display:flex;padding:1rem 1.5rem;text-decoration:none;outline:0}.card .card\:content ul li,.card .card\:content ul li a:focus{background-color:rgba(45,56,68,.04)}.card .card\:content ul li .collection{display:flex;flex-direction:row}.card .card\:content ul li .collection .collection\:icon{display:flex;align-items:center;width:43px;height:47px}.card .card\:content ul li .collection .collection\:data{display:flex;flex-direction:column;justify-content:center;height:47px;margin-left:1.5rem}
 .card .card\:content ul li .collection .collection\:data h3{margin:0;font-size:1.1rem;color:rgba(86, 95, 103, 1.000)}
 .card .card\:content ul li .collection .collection\:data span{font-size:.875rem;font-weight:500;color:rgba(45,56,68,.75)}
 .card .card\:content ul li .collection svg{max-width:43px;height:calc(80px - 2rem)}
 .card .card\:content ul li .collection svg.ghost{height:calc(70px - 2rem)}
 .card .card\:content ul li:last-of-type{border-bottom:0;padding:calc(1rem + .5px) 1.5rem}
 a{text-decoration:none;color:rgba(61, 70, 77, 1.000);font-size:.75rem;font-weight:500;}a:hover{color:rgba(61, 139, 150, 1.000);}
 
.weather34darkbrowser{position:relative;background:0;width:94%;height:30px;margin:auto;margin-top:3px;margin-left:10px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:-10px;}
.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:11px;position:absolute;left:0;right:0;top:0;padding:4px 15px;margin:11px 10px 0 auto;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}
 
 
 orange{color:#d35d4e}blue{color:#44a6b5}
.davishardwaresvg{position:absolute;margin-left:240px;}.nanohardwaresvg{position:absolute;margin-left:270px;}body{text-shadow:1px 1px 3px rgba(61,70,77,.2)}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="<?php echo $stationlocation ?> Weather Station Information"></div>
 
  <div class="container">
            <div class="card" style="margin-top:50px;overflow:hidden;max-height:370px;">
                <div class="card:header">
                    <div class="card:info">
                        <h3><?php echo $stationlocation?> <?php echo "<img src=img/flags/".$flag.".svg width='25em' height='20em'>"?>
  </h3>
                        <p>Weather Station Information</p>
                    </div>
                    <div class="card:image">
                        <img src="img/weather34-mbsmart-logo.svg" alt="weather34 logo" title="weather34 logo">
                    </div>                    
                </div>
                <div class="card:content">
                    <ul>
                    
                        <li>
                            <a href="#!">
                                <div class="collection">
                                    <div class="collection:icon">
                                        <svg id="weather34 i-mail" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="rgba(255, 93, 46, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M2 26 L30 26 30 6 2 6 Z M2 6 L16 16 30 6" />
</svg>
                                    </div>
                                    
                                    
                                    <div class="collection:data">
                                        <h3><orange>@</orange>Mail</h3>
                                        <span><a href="mailto:@@<?php echo $email;?>?Subject=Weather Station"onmouseover="this.href=this.href.replace('@@','')">Send an @email</a></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="collection">
                                    <div class="collection:icon">
                                       <svg id="weather34 i-twitter" viewBox="0 0 64 64" width="32" height="32">
    <path stroke-width="0" fill="rgba(0, 154, 171, 1.000)" d="M60 16 L54 17 L58 12 L51 14 C42 4 28 15 32 24 C16 24 8 12 8 12 C8 12 2 21 12 28 L6 26 C6 32 10 36 17 38 L10 38 C14 46 21 46 21 46 C21 46 15 51 4 51 C37 67 57 37 54 21 Z" />
</svg>
                                    </div>
                                    <div class="collection:data">
                                        <h3>Twitter</h3>
                                        <a href="https://twitter.com/<?php echo $twitter;?>" target="_blank" alt="twitter" title="weather34 twitter">https://twitter.com/<?php echo $twitter;?></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="collection">
                                    <div class="collection:icon">
                                      <svg id="i-website" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="rgba(144, 177, 42, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
    <path d="M10 29 C10 29 10 24 16 24 22 24 22 29 22 29 L10 29 Z M2 6 L2 23 30 23 30 6 2 6 Z" />
</svg>
                                    </div>
                                    <div class="collection:data">
                                        <h3>Website</h3>
                                        <a href="<?php echo $url;?>" alt="weather34" title="weather34" target="_blank"><?php echo $url;?></a>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
        </div>
    </div>
</div>

</body>

</html>
