<?php include('settings.php');include('common.php');?>
<script src="js/jquery.js"></script>

<script>
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#wind").show()}});var c=a("#wind");c.load("yearavgwindspeedmodule-2019.php");var b=setInterval(function(){c.load("yearavgwindspeedmodule-2019.php")},1130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#gust").show()}});var c=a("#gust");c.load("yearwindspeedmodule-2019.php");var b=setInterval(function(){c.load("yearwindspeedmodule-2019.php")},1130000)})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:false,success:function(){a("#temperature").show()}});var c=a("#temperature");c.load("yeartemperaturemodule-2019.php");var b=setInterval(function(){c.load("yeartemperaturemodule-2019.php")},1130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#dewpoint").show()}});var c=a("#dewpoint");c.load("yeardewpointmodule-2019.php");var b=setInterval(function(){c.load("yeardewpointmodule-2019.php")},1130000)})})(jQuery);


(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#rain").show()}});var c=a("#rain");c.load("yearrainfallmodule-2019.php");var b=setInterval(function(){c.load("yearrainfallmodule-2019.php")},1130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#barometer").show()}});var c=a("#barometer");c.load("yearbarometermodule-2019.php");var b=setInterval(function(){c.load("yearbarometermodule-2019.php")},11300000 )})})(jQuery);

(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#moon").show()}});var c=a("#moon");c.load("weather34-moonphasemod.php");var b=setInterval(function(){c.load("weather34-moonphasemod.php")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#sun").show()}});var c=a("#sun");c.load("weather34-sunmod.php");var b=setInterval(function(){c.load("weather34-sunmod.php")},130000)})})(jQuery);
(function(a){a(document).ready(function(){a.ajaxSetup({cache:true,success:function(){a("#time-date").show()}});var c=a("#time-date");c.load("weather34-clockmod.php");var b=setInterval(function(){c.load("weather34-clockmod.php")},11162000)})})(jQuery);

</script>
</div></div>