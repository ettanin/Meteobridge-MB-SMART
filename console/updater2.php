<?php include('settings.php');include('common.php');?>
<script src="js/jquery.js"></script>
<script>
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("windmod.php");var b=setInterval(function(){c.load("windmod.php")},11000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("gustmod.php");var b=setInterval(function(){c.load("gustmod.php")},11000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#direction").show()}});var c=a("#direction");c.load("directionmod.php");var b=setInterval(function(){c.load("directionmod.php")},10000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("rainmod.php");var b=setInterval(function(){c.load("rainmod.php")},50000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");c.load("temperaturemod.php");var b=setInterval(function(){c.load("temperaturemod.php")},70000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("dewpointmod.php");var b=setInterval(function(){c.load("dewpointmod.php")},71000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#uvindex").show()}});var c=a("#uvindex");c.load("<?php echo $uvsensor ?>");var b=setInterval(function(){c.load("<?php echo $uvsensor ?>")},120000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("barometermod.php");var b=setInterval(function(){c.load("barometermod.php")},1300000 )})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#humidity").show()}});var c=a("#humidity");c.load("humiditymod.php");var b=setInterval(function(){c.load("humiditymod.php")},62000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#moon").show()}});var c=a("#moon");c.load("weather34-davisforecast.php");var b=setInterval(function(){c.load("weather34-davisforecast.php")},265000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#sun").show()}});var c=a("#sun");c.load("weather34-sunmod.php");var b=setInterval(function(){c.load("weather34-sunmod.php")},262000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#time-date").show()}});var c=a("#time-date");c.load("weather34-clockmod.php");var b=setInterval(function(){c.load("weather34-clockmod.php")},1300000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#clock-date").show()}});var c=a("#clock-date");c.load("weather34-clockphone.php");var b=setInterval(function(){c.load("weather34-clockphone.php")},130000)})})(jQuery);
</script>
</div></div>