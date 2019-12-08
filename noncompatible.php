
<script src="js/jquery.js"></script>
<style type="text/css">
#overlay {
position:absolute;
top: 0;
left: 0;
background-color:#fff;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
color: #333;
}
.cnt223 a{
text-decoration: none;
color: #333;
}
.popup{
margin:0 auto;
display: none;
position: fixed;
top:25%;
z-index: 101;
color: #333;
text-shadow: 1px 1px 3px rgba(61, 70, 77, 0.2);

}
.cnt223{
min-width: 300px;
max-width: 500px;
height:300px;
min-height: 300px;
margin:0 auto;
background: white;
position: absolute;
z-index: 103;
padding: 15px 15px;
border-radius: 3px;
box-shadow: 0 2px 5px #000;
font-size: 12px;
color: #222;
font-family: Arial, Helvetica, sans-serif;
}
.cnt223 p{
clear: both;
    color: #333;
    /* text-align: justify; */
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;   
    
}
.cnt223 p a{
color: #01a4b4;
font-weight: normal;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
.close{color:#333;font-size:11px;line-height:1;width:100%;text-shadow: 1px 1px 3px rgba(61, 70, 77, 0.2);
padding:3px}
blue{color:#01a4b4;}
.logo{float:right;bottom:0;width:25px;position:relative;}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
<div class='popup'>
<div class='cnt223'>
<div class='close'>
<svg version="1.2" x="0px" y="0px"  viewBox="0 0 55.597 55.597"  width="35px">
<path style="fill:#5C6887;" d="M55.458,51.807c0.389,0.664-0.09,1.5-0.859,1.5H27.625H0.997c-0.767,0-1.246-0.831-0.862-1.495
	L26.768,2.787c0.382-0.661,1.335-0.663,1.721-0.005L55.458,51.807z"/>
<polygon style="fill:#fa544d;" points="8.207,47.45 27.659,11.112 47.357,47.45 "/>
<g>
	<path style="fill:#FFFFFF;" d="M27.597,19.307c-0.553,0-1,0.447-1,1v17c0,0.553,0.447,1,1,1s1-0.447,1-1v-17
		C28.597,19.754,28.149,19.307,27.597,19.307z"/>
	<path style="fill:#FFFFFF;" d="M27.597,40.307c-0.553,0-1,0.447-1,1v2c0,0.553,0.447,1,1,1s1-0.447,1-1v-2
		C28.597,40.754,28.149,40.307,27.597,40.307z"/>
</g></svg>
</div>

Sorry your hardware or software interface is not compatible with this Weather34 designed template MB-SMART.<br><br>
*<b>Warning</b> If you are using a <b>NANO(SD)</b> or <B>Meteobridge Pro</B> and still seeing this screen you may have misconfigured the upload path or
your Meteobridge or Weather Station hardware may be experiencing issues.
<br/><br/>

<div class='close'>Supports only 
<br>Meteobridge 
<a href="https://www.meteobridge.com/wiki/index.php/Meteobridge_NANO_SD" target="_blank" title="https://www.meteobridge.com/wiki/index.php/Meteobridge_NANO_SD"><blue>NANO(SD)</blue></a> 
or 
<a href="https://www.meteobridge.com/wiki/index.php/Meteobridge_PRO" target="_blank" title="https://www.meteobridge.com/wiki/index.php/Meteobridge_PRO"><blue>Pro</blue></a>
</div>

<div class='close'>
<a href="https://weather34.com/homeweatherstation/" target="_blank" title="https://weather34.com/homeweatherstation/"><img src="img/weather34-mbsmart-logo.svg" class="logo"></img></a>
</div>
</div>
</div>