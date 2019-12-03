<?php include('settings.php');?>
<script src="js/jquery.js"></script>
<script>
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("windmod.php");var b=setInterval(function(){c.load("windmod.php")},10000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("gustmod.php");var b=setInterval(function(){c.load("gustmod.php")},10000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#direction").show()}});var c=a("#direction");c.load("directionmod.php");var b=setInterval(function(){c.load("directionmod.php")},10000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("rainmod.php");var b=setInterval(function(){c.load("rainmod.php")},50000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");c.load("temperaturemod.php");var b=setInterval(function(){c.load("temperaturemod.php")},60000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("dewpointmod.php");var b=setInterval(function(){c.load("dewpointmod.php")},61000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#uvindex").show()}});var c=a("#uvindex");c.load("<?php echo $uvsensor?>");var b=setInterval(function(){c.load("<?php echo $uvsensor?>")},65000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("barometermod.php");var b=setInterval(function(){c.load("barometermod.php")},1300000 )})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity").show()}});var c=a("#humidity");c.load("humiditymod.php");var b=setInterval(function(){c.load("humiditymod.php")},60000)})})(jQuery);

 </script>
</div></div>