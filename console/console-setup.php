<?php
include('console-settings.php');
if (isset($_POST["Submit"])) {

$string = '<?php
$unit = "' . $_POST["unit"] . '";
$metric = ' . $_POST["metric"] . ';
$windunit = "' . $_POST["windunit"] . '";
$distanceunit = "' . $_POST["distanceunit"] . '";
$tempunit = "' . $_POST["tempunit"] . '";
$rainunit  = "' . $_POST["rainunit"] . '";
$rainrate = "' . $_POST["rainrate"] . '";
$pressureunit  = "' . $_POST["pressureunit"] . '";
$livedataFormat = "' . $_POST["livedataFormat"] . '";
$livedata   = "' . $_POST["livedata"] . '";
$dateFormat   = "' . $_POST["dateFormat"] . '";
$password    = "' . $_POST['password'] . '";
$uvsensor    = "' . $_POST['uvsensor'] . '";
$display2019    = "' . $_POST['display2019'] . '";
$chartoption    = "' . $_POST['chartoption'] . '";
$chartoption2    = "' . $_POST['chartoption2'] . '";
$defaultlanguage   = "' . $_POST["defaultlanguage"] . '";
$stationName   = "' . $_POST["stationName"] . '";
$theme   = "' . $_POST["theme"] . '";
$TZ = "' . $_POST["TZ"] . '";
$lon = ' . $_POST["lon"] . ';
$lat = ' . $_POST["lat"] . ';
$UTC = "' . $_POST["UTC"] . '";
$clockformat    = "' . $_POST["clockformat"] . '";
$hemisphere   = "' . $_POST["hemisphere"] . '";
$consoleforecast    = "' . $_POST['consoleforecast'] . '";
';

    $fp = FOPEN("console-settings.php", "w") or die("Unable to open console-settings.php file check file permissions !");
    FWRITE($fp, $string);
    FCLOSE($fp);
}
?>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="favicon.ico" rel="icon" type="image/x-icon">
<style>
   @font-face{font-family:clock;src:url(fonts/clock3-webfont.woff) format("woff")}@font-face{font-family:weathertext3;src:url(fonts/verbatim-regular.woff) format("woff")}
   @font-face{font-family:weathertext2;src:url(fonts/verbatim-medium.woff) format("woff")}
   @font-face{font-family:headingtext;src:url(fonts/HelveticaNeue-Medium.woff) format("woff")}
   body{font-family:headingtext;margin:0 auto;color:#aeb6bf;background:#141418;width:100%;max-width:1024px;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;-moz-font-smoothing:unset;-moz-osx-font-smoothing:grayscale;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;backface-visibility:hidden}h1{color:rgba(86,95,103,1);font-size:24px;margin-bottom:10px;font-weight:700;margin:10px 0}h2{color:rgba(86,95,103,1);font-size:20px;margin-bottom:10px;font-weight:700;margin:10px 0}h3{color:silver;font-size:14px;margin-bottom:20px;font-weight:700;margin:20px 0}.weathersetuptitle{font-size:18px;text-align:center;font-weight:200;font-family:Arial,Helvetica,sans-serif;padding:5px;border:0;background:rgba(67,58,80,1);border-radius:5px;color:#fff;width:600px;margin:0 auto;border:0;border:1px solid silver}.theframe1{font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#fff;border:0 solid silver;margin:0 auto;margin-top:10px;margin-bottom:10px;width:1024px;background:0;padding:5px;border-radius:4px}.theframe{font-size:14px;font-family:Arial,Helvetica,sans-serif;color:#fff;border:1px solid rgba(7,114,125,1,.4);margin:0 auto;margin-top:10px;margin-bottom:10px;width:960px;font-family:headingtext;margin:0 auto;color:#aeb6bf;background:#141418;width:100%;max-width:1024px;padding:5px;border-radius:4px;-webkit-box-shadow:4px 7px 20px -5px rgba(0,0,0,.75);-moz-box-shadow:4px 7px 20px -5px rgba(0,0,0,.75);box-shadow:4px 7px 20px -5px rgba(0,0,0,.75)}.weatheroptions{margin:5px;padding:10px;border-radius:4px;border:1px solid #3d464d;border-bottom:18px solid #3d464d;width:95%}.weatheroptionssidebar{display:none}.weatheroptionssidebarbottom{display:none}.weatherbottominfo{position:absolute;font-size:12px;color:silver;padding:3px;margin-top:3px}.weatherbottomwarning{position:absolute;font-size:12px;color:silver;padding:3px;margin-top:7px}.weatheroptions .button{background:rgba(240,94,64,1);border-radius:4px;padding:5px;font-size:16px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;-webkit-appearance:none}
   .weatheroptions .choose{background:rgba(7,114,125,1);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:200px;max-width:400px;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .choose1{background:rgba(7,114,125,1);border-radius:3px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:130px;outline:0;-webkit-appearance:none}.weatheroptions .choose2{background:rgba(86,95,103,1);border-radius:3px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:100px;outline:0;-webkit-appearance:none}.weatheroptions .chooseapi{background:rgba(7,114,125,1);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:300px;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .personal{background:rgba(7,114,125,1);border-radius:4px;padding:5px;padding-right:10px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;width:99%;outline:0;-webkit-appearance:none;text-align:left}.weatheroptions .stationvalue{background:rgba(86,95,103,1);border-radius:3px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;display:inline-block;-webkit-appearance:none}.weatheroptions .stationvalue1{background:silver;border-radius:3px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;display:inline-block;-webkit-appearance:none}.weathersectiontitle{background:silver;border-radius:4px;padding:5px;font-size:14px;color:#fff;font-family:Arial,Helvetica,sans-serif;border:0;outline:0;margin:5px;display:inline-block;-webkit-appearance:none;background:#444}.weatheroptions a{font-size:14px;color:rgba(86,95,103,1);font-family:Arial,Helvetica,sans-serif;border:0;text-transform:none;outline:0;-webkit-appearance:none}a{font-size:14px;color:rgba(86,95,103,1);font-family:Arial,Helvetica,sans-serif;border:0;text-transform:none;outline:0;-webkit-appearance:none}#weatherpopupcontainer{width:960px;margin:auto;padding:30px}p{margin-bottom:20px;line-height:24px}#hover{position:fixed;background:#fff;width:100%;height:100%;opacity:.6}#weatherpopup{position:fixed;width:600px;height:320px;background:#fff;left:50%;top:25%;border-radius:5px;padding:60px 0;margin-left:-320px;margin-top:-100px;text-align:center;border:1px solid #e9ebf1;border-bottom:23px solid rgba(40,39,39,.7);color:#fff;padding:10px}.weatherpopupbottom{margin-top:55px;padding:10px;float:left;color:#fff;position:absolute;font-size:11px}#close{position:absolute;background:#fff;color:#fff;right:-10px;top:-10px;border-radius:50%;width:30px;height:30px;line-height:30px;text-align:center;font-size:14px;font-weight:700;font-family:Arial,Arial,sans-serif;cursor:pointer}body{font-family:headingtext;margin:0 auto;color:#aeb6bf;background:#141418;width:100%;max-width:1024px}.seperator{width:700px;border-top:1px #ddd dotted;margin-top:5px;padding:10px}*{box-sizing:border-box}:focus{outline:0}.login{margin:0 auto;width:300px;background-color:none}a{font-size:12px;text-transform:none;text-decoration:none;color:silver}a:hover{color:#7bbb28}.login-screen{background-color:none;padding:20px;border-radius:5px;margin:0 auto}.app-title{text-align:center;color:silver;background-color:none}.login-form{text-align:center;background-color:none}.control-group{margin-bottom:10px}input{text-align:center;background-color:silver;border:2px solid transparent;border-radius:3px;font-size:16px;font-weight:200;padding:10px 0;width:250px;transition:border .5s;color:#fff;border:2px solid rgba(86,95,103,1);box-shadow:none;margin:0 auto;margin-top:10px}input:focus{border:2px solid rgba(86,95,103,1);box-shadow:none}.btn{border:2px solid transparent;background:rgba(86,95,103,1);color:#fff;font-size:16px;line-height:25px;padding:10px 0;text-decoration:none;text-shadow:none;border-radius:3px;box-shadow:none;transition:.25s;display:block;width:150px;margin:10px;text-align:center;-webkit-appearance:none}.btn:hover{background-color:rgba(86,95,103,1)}.login-link{font-size:12px;color:#444;display:block;margin-top:12px}.loginformarea{margin:0 auto;text-align:center;font-size:16px}orange{color:rgba(236,87,27,1)}green{color:rgba(67,58,80,1)}blue{color:rgba(67,58,80,1)}img{border-radius:4px}white{color:#fff}.input-button,.modal-button{font-size:18px;padding:10px 40px}.input-block input,.input-button,.modal-button{font-family:Arial,sans-serif;border:1px solid #ccc}.icon-button,.input-block input,.input-button,.modal-button{outline:0;cursor:pointer}.modal-button{color:#f5f5f5;border-radius:5px;background:#2095a7;width:120px;text-align:center}.modal-button:hover{border-color:rgba(255,255,255,.2);background:rgba(144,177,42,1);color:#f8f8f8}.input-button{color:#7d695e;border-radius:5px;background:#fff}.input-button:hover{background:rgba(144,177,42,1);color:#fff}.input-label{font-size:11px;text-transform:uppercase;font-family:Arial,sans-serif;font-weight:600;letter-spacing:.7px;color:#8c7569}.input-block{display:flex;flex-direction:column;padding:10px 10px 8px;border:1px solid #ddd;border-radius:4px;margin-bottom:20px}.input-block input{color:#fff;font-size:18px;padding:10px 40px;border-radius:5px;background:rgba(144,177,42,1)}.input-block input::-webkit-input-placeholder{color:silver;opacity:1}.input-block input:-ms-input-placeholder{color:silver;opacity:1}.input-block input::-ms-input-placeholder{color:silver;opacity:1}.input-block input::placeholder{color:silver;opacity:1}.input-block:focus-within{border-color:#8c7569}.input-block:focus-within .input-label{color:rgba(140,117,105,.8)}.icon-button{position:absolute;right:10px;top:12px;width:32px;height:32px;background:0;padding:0}oblue{color:#00a4b4}
</style>
</head>

<body>
    <div class="loginformarea">
        <?php
        //lets secure the homeweatherstation easy setup ///
        function showForm($error = "LOGIN")
        {
            ?> <?php echo $error; ?>

            <div class="login_screen" style="width:60%;max-width:600px;margin:0 auto;color:silver;border:solid 1px grey;padding:10px;
            border-radius:4px;font-size:14px"> <?php echo 'Your Current PHP version is :<oblue><b> ' . phpversion(), '</b></oblue>
            <br>'; ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
                    Enter Your Password To Enter Setup Screen
                    <center>
                        <div class="modal-buttons">
                            <input name="passwd" type="password" class="input-button" /> <input type="submit" name="submit_pwd" value="Login " class="modal-button" />
                </form>
                </center>
                <?php echo "2015-"; ?><?php echo date('Y'); ?> &copy;</a> WEATHER34 Console</span></span></span>
                <br><br>
            <?php
            }
            ?>
            </div>
            <div span style="width:auto;margin:0 auto;text-align:center;color:#fff;background:0;font-family:arial;padding:20px;border-radius:4px;font-size:14px">
                <?php
                $Password = $password;
                if (isset($_POST['submit_pwd'])) {
                    $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
                    if ($pass != $Password) {
                        showForm("Alternative Weather34 Console Setup");
                        exit();
                    }
                } else {
                    showForm("Alternative Weather34 Console Setup");
                    exit();
                }
                ?>


            </div>
            <div span style="width:450px;margin:0 auto;margin-top:10px;text-align:center;color:white;background:0;
            font-family:arial;padding:20px;border-radius:4px;border:1px solid rgba(74, 99, 111, 0.4);font-size:16px">
                <img src='Wxsoft34-app.png' width='80px' style="float:left">

                <br>

                Welcome you have logged into the <br>WEATHER<oblue>34</oblue> <br>Alternative Console setup screen
                </span>
            </div>
    </div>
    </div>
    </div>
    </div>
    <div class="theframe1">
        <div class="theframe">

            <p>
                <form action="" method="post" name="install" id="install">
                    <div class="weatheroptionssidebar">
                        <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(7, 114, 125, 1.000)" stroke="rgba(7, 114, 125, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                            <path d="M16 14 L16 23 M16 8 L16 10" />
                            <circle cx="16" cy="16" r="14" /></svg> Please setup and password protect this page for later use it is for your privacy and protection.
                        <br>





                        <div class="weatherbottominfo">
                            <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                <path d="M2 20 L12 28 30 4" />
                            </svg>

                            check password </div>

                    </div>

                    <p>

                        <div class="weatheroptions">
                            <div class="weathersectiontitle">
                                <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                    <circle cx="16" cy="16" r="4" />
                                </svg>
                                Setup Unique Easysetup Password</div>
                            <p>


                                <div class="stationvalue"> Set Easysetup Password it is for your privacy & protection</div>
                                <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                    <path d="M12 30 L24 16 12 2" />
                                </svg>
                                <input name="password" type="password" id="password" value="<?php echo $password; ?>" class="choose">


                        </div>


                        <p>




                            <div class="weatheroptions">
                                <div class="weathersectiontitle">
                                    <svg id="i-code" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                        <path d="M10 9 L3 17 10 25 M22 9 L29 17 22 25 M18 7 L14 27" />
                                    </svg>

                                    METEOBRIDGE Software Path to Data file</div>
                                <p>
                                    <div class="stationvalue">Data Type</div>
                                    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                        <path d="M12 30 L24 16 12 2" />
                                    </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                        <path d="M30 12 L16 24 2 12" />
                                    </svg>
                                    <label name="livedataFormat"></label>
                                    <select id="livedataFormat" name="livedataFormat" class="choose1">
                                        <option><?php echo $livedataFormat; ?></option>
                                        <option>meteobridge-api</option>



                                    </select>


                                </p>

                                <div class="stationvalue">Add Your Path to data file (mbridge/MBrealtimeupload.txt)</div>
                                <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                    <path d="M30 12 L16 24 2 12" /></svg><br>

                                <input name="livedata" type="text" id="livedata" value="<?php echo $livedata; ?>" class="chooseapi">

                                <br><br>

                                <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(7, 114, 125, 1.000)" stroke="rgba(7, 114, 125, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                                        <path d="M16 14 L16 23 M16 8 L16 10" />
                                        <circle cx="16" cy="16" r="14" /></svg></strong><span style="color:silver;"> METEOBRIDGE-API path example: http://yourdomain/mbridge/MBrealtimeupload.txt</span><br>

                                <br>

                                <strong><svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(7, 114, 125, 1.000)" stroke="rgba(7, 114, 125, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                                        <path d="M16 14 L16 23 M16 8 L16 10" />
                                        <circle cx="16" cy="16" r="14" /></svg></strong><span style="color:silver;"> METEOBRIDGE path example: http://yourdomain/mbridge/MBrealtime.txt</span><br>

                                <br>
                                <span style="color:silver">
                                    <strong> <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                                            <path d="M16 14 L16 23 M16 8 L16 10" />
                                            <circle cx="16" cy="16" r="14" /></svg> getting the path correct is essential for live realtime data display (mbridge/MBrealtimeupload.txt)</strong></span>
                                <p>






                                    <div class="weatheroptions">

                                        <div class="weathersectiontitle">
                                            <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                <circle cx="16" cy="16" r="4" />
                                            </svg>
                                            Set the Fixed Metric/English </div>
                                        <p>

                                            <label name="unit"></label>
                                            <div class="stationvalue">Units</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M30 12 L16 24 2 12" />
                                            </svg>
                                            <select id="unit" name="unit" class="choose1">
                                                <option><?php echo $unit; ?></option>
                                                <option>metric</option>
                                                <option>english</option>
                                            </select>

                                            <label name="metric"></label>
                                            <div class="stationvalue">Metric</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M30 12 L16 24 2 12" />
                                            </svg>
                                            <select id="metric" name="metric" class="choose1">
                                                <option <?php if ($metric == "false") echo "selected"; ?>>false</option>
                                                <option <?php if ($metric == "true") echo "selected"; ?>>true</option>
                                            </select>
                                            <span style="color:silver;"> set: <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="rgba(7, 114, 125, 1.000)" stroke="rgba(7, 114, 125, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                                                    <path d="M16 14 L16 23 M16 8 L16 10" />
                                                    <circle cx="16" cy="16" r="14" /></svg> true=metric , <svg id="i-info" viewBox="0 0 32 32" width="10" height="10" fill="#FF793A" stroke="#FF793A" stroke-linecap="round" stroke-linejoin="round" stroke-width="16.25%">
                                                    <path d="M16 14 L16 23 M16 8 L16 10" />
                                                    <circle cx="16" cy="16" r="14" /></svg> false=non metric</span>

                                            <p>




                                    </div>


                                    <p>


                                        <div class="weatheroptions">
                                            <div class="weathersectiontitle">
                                                <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                    <circle cx="16" cy="16" r="4" />
                                                </svg>
                                                Set the Fixed Units to display </div>
                                            <p>
                                                <label name="windunit"></label>
                                                <div class="stationvalue">Wind Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M12 30 L24 16 12 2" />
                                                </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M30 12 L16 24 2 12" />
                                                </svg>
                                                <select id="windunit" name="windunit" class="choose1">
                                                    <option><?php echo $windunit; ?></option>
                                                    <option>km/h</option>
                                                    <option>mph</option>
                                                    <option>m/s</option>
                                                    <option>kts</option>

                                                </select>

                                                <label name="tempunit"></label>
                                                <div class="stationvalue">Temperature Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M12 30 L24 16 12 2" />
                                                </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M30 12 L16 24 2 12" />
                                                </svg>
                                                <select id="tempunit" name="tempunit" class="choose1">
                                                    <option><?php echo $tempunit; ?></option>
                                                    <option>C</option>
                                                    <option>F</option>

                                                </select>
                                                <br><br>
                                                <label name="rainunit"></label>
                                                <div class="stationvalue">Rain Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M12 30 L24 16 12 2" />
                                                </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M30 12 L16 24 2 12" />
                                                </svg>
                                                <select id="rainunit" name="rainunit" class="choose1">
                                                    <option><?php echo $rainunit; ?></option>
                                                    <option>mm</option>
                                                    <option>in</option>


                                                </select>


                                                <label name="rainrate"></label>
                                                <div class="stationvalue">Rain Rate (per Hr/Min)</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M12 30 L24 16 12 2" />
                                                </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M30 12 L16 24 2 12" />
                                                </svg>
                                                <select id="rainrate" name="rainrate" class="choose1">
                                                    <option><?php echo $rainrate; ?></option>
                                                    <option>/h</option>
                                                    <option>/m</option>

                                                </select>
                                                <br><br>
                                                <label name="pressureunit"></label>
                                                <div class="stationvalue">Barometer Unit</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M12 30 L24 16 12 2" />
                                                </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M30 12 L16 24 2 12" />
                                                </svg>
                                                <select id="pressureunit" name="pressureunit" class="choose1">
                                                    <option><?php echo $pressureunit; ?></option>
                                                    <option>mb</option>
                                                    <option>hPa</option>
                                                    <option>inHg</option>

                                                </select>

                                                <br><br>

                                                <label name="distanceunit"></label>
                                                <div class="stationvalue">Distance unit measured miles or kilometres</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M12 30 L24 16 12 2" />
                                                </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M30 12 L16 24 2 12" />
                                                </svg>
                                                <select id="distanceunit" name="distanceunit" class="choose1">
                                                    <option><?php echo $distanceunit; ?></option>
                                                    <option>mi</option>
                                                    <option>km</option>
                                                </select>



                                                <p>



                                                <div class="weathersectiontitle">
                                                    <svg id="i-clock" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                        <circle cx="16" cy="16" r="14" />
                                                        <path d="M16 8 L16 16 20 20" />
                                                    </svg> Time format options</span><br>
                                                    </div>
                                                    <div class="stationvalue">Set the Date Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                        <path d="M12 30 L24 16 12 2" />
                                                    </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                        <path d="M30 12 L16 24 2 12" />
                                                    </svg>
           
                                                    <label name="dateFormat"></label>
                                                    <select id="dateFormat" name="dateFormat" class="choose1">
                                                        <option><?php echo $dateFormat; ?></option>
                                                        <option>d-m-Y</option>
                                                        <option>m-d-Y</option>
                                                        <option>Y-m-d</option>

                                                    </select>
                                                    <br>
                                        

                                        <br>


                                        <div class="weathersectiontitle">
                                            <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                <circle cx="16" cy="16" r="4" />
                                            </svg>
                                            Do you have UV Index and Solar Sensor Installed </div>
                                        

                                            <label name="unit"></label>
                                            <div class="stationvalue">choose which file to use</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M30 12 L16 24 2 12" />
                                            </svg>
                                            <select id="uvsensor" name="uvsensor" class="choose1">
                                                <option><?php echo $uvsensor; ?></option>
                                                <option>uvindexmod.php</option>
                                                <option>indoortempmod.php</option>
                                            </select>

<br><br>
<p>
                                    <div class="stationvalue">
                                        Language Default Display</div>
                                    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="#F05E40" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                        <path d="M12 30 L24 16 12 2" />
                                    </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                        <path d="M30 12 L16 24 2 12" />
                                    </svg>

                                            <label name="defaultlanguage"></label>
                                    <select id="defaultlanguage" name="defaultlanguage" class="choose">
                                        <option><?php echo $defaultlanguage; ?></option>
                                        <option>en</option>
                                        <option>can</option>
                                        <option>dk</option>
                                        <option>dl</option>
                                        <option>fr</option>
                                        <option>it</option>
                                        <option>nl</option>
                                        <option>sp</option>
                                        <option>sw</option>
                                        <option>us</option>
                                    </select>
                                    <br><br>


                                    <div class="stationvalue"> Station Name</div>
                                            <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg>

                                            <input name="stationName" type="text" id="stationName" value="<?php echo $stationName; ?>" class="chooseapi">
                                            <br />  <br />  

                                    <div class="stationvalue"> Theme Colour</div>
                                                    <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                        <path d="M12 30 L24 16 12 2" />
                                                    </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                        <path d="M30 12 L16 24 2 12" />
                                                    </svg>

                                                    <label name="theme"></label>
                                                    <select id="theme" name="theme" class="choose1">
                                                        <option><?php echo $theme; ?></option>
                                                        <option>dark</option>
                                                        <option>light</option>

                                                    </select>

                                                 <br><br>

                                                    <div class="weatheroptions">
                                        <div class="stationvalue">TIMEZONE</div>
                                        <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                            <path d="M12 30 L24 16 12 2" />
                                        </svg>


                                        <input name="TZ" type="text" id="TZ" value="<?php echo $TZ; ?>" class="choose">
                                        <br><br>
                                        <div class="stationvalue">Latitude</div>
                                            <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg>

                                            <input name="lat" type="text" id="lat" value="<?php echo $lat; ?>" class="choose">
                                            <br><br>
                                            <div class="stationvalue">Longitude</div>
                                            <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg>
                                            
                                            <input name="lon" type="lon" id="TZ" value="<?php echo $lon; ?>" class="choose">
                                            <br>
                                            <br>

                                            <div class="stationvalue">UTC Offset</div>
                                        <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                            <path d="M12 30 L24 16 12 2" />
                                        </svg>

                                        <input name="UTC" type="text" id="UTC" value="<?php echo $UTC; ?>" class="choose">
                                        <p>




                                        <div class="stationvalue">Set the Main Clock Format</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                                                    <path d="M12 30 L24 16 12 2" />
                                                                                </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                                                    <path d="M30 12 L16 24 2 12" />
                                                                                </svg>

                                                                                <label name="clockformat"></label>
                                                                                <select id="clockformat" name="clockformat" class="choose1">
                                                                                    <option><?php echo $clockformat; ?></option>
                                                                                    <option>24</option>
                                                                                    <option>12</option>
                                                                                </select>

                                            </div>
<p>
                                            <div class="weatheroptions">
                                            <div class="weathersectiontitle">
                                            <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                <circle cx="16" cy="16" r="4" />
                                            </svg>
                                            Today Chart Option  Last Chart position with 3 options based on your hardware owned.</div>
                                        
<br>
                                            <label name="unit"></label>
                                            <div class="stationvalue">choose which file to use</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M30 12 L16 24 2 12" />
                                            </svg>
                                            <select id="chartoption" name="chartoption" class="choose">
                                                <option><?php echo $chartoption; ?></option>
                                                <option>todayuvindexmodule.php</option>
                                                <option>todaysolarmodule.php</option>
                                                <option>todayindoormodule.php</option>
                                            </select>

<br>

                                           
                                            <div class="weathersectiontitle">
                                            <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                <circle cx="16" cy="16" r="4" />
                                            </svg>
                                            Today Chart Option  Last Chart position with 2 options when used in potrait mode.</div>
                                        
<br>
                                            <label name="unit"></label>
                                            <div class="stationvalue">choose which file to use</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M30 12 L16 24 2 12" />
                                            </svg>
                                            <select id="chartoption2" name="chartoption2" class="choose">
                                                <option><?php echo $chartoption2; ?></option>
                                                <option></option>
                                                <option>todaysolarmodule.php</option>
                                                <option>todayindoormodule.php</option>
                                            </select>
                                            


<br><br>
                                            <div class="weathersectiontitle">
                                            <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                <circle cx="16" cy="16" r="4" />
                                            </svg>
                                            Previous Year (2019) Chart Display Option </div>
                                            <br>
                                            <div class="stationvalue">Do You have data for charts from 2019 (2019.CSV)</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M30 12 L16 24 2 12" />
                                            </svg>
                                            <select id="display2019" name="display2019" class="choose1">
                                                <option><?php echo $display2019; ?></option>
                                                <option>yes</option>
                                                <option>no</option>
                                            </select>

<P>
                                            <div class="stationvalue">
                                              Reverse the moonphase for southern hemisphere (i.e. Australia etc..)</div>
                                                                                                                                
                                              <svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                               <path d="M30 12 L16 24 2 12" /></svg>
                                              <select id="hemisphere" name="hemisphere" class="choose1">
                                              <option><?php echo $hemisphere; ?></option>
                                              <option>0</option>
                                               <option>180</option></select>

                                               <br><span style="color:#777;">
                                                <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M16 14 L16 23 M16 8 L16 10" />
                                                <circle cx="16" cy="16" r="14" /></svg> 0 for northern hemisphere <br>
                                                  <svg id="i-info" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                 <path d="M16 14 L16 23 M16 8 L16 10" />
                                                 <circle cx="16" cy="16" r="14" /></svg> 180 for southern hemisphere </span>
<br><br>

<div class="weathersectiontitle">
                                            <svg id="i-settings" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M13 2 L13 6 11 7 8 4 4 8 7 11 6 13 2 13 2 19 6 19 7 21 4 24 8 28 11 25 13 26 13 30 19 30 19 26 21 25 24 28 28 24 25 21 26 19 30 19 30 13 26 13 25 11 28 8 24 4 21 7 19 6 19 2 Z" />
                                                <circle cx="16" cy="16" r="4" />
                                            </svg>
                                            Show console forecast or Indoor Module (Choose Indoor if using Meteobridge Pro)<br></div>
                                        
                                            <br>
                                            <label name="unit"></label>
                                            <div class="stationvalue">choose which file to use</div> <svg id="i-chevron-right" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M12 30 L24 16 12 2" />
                                            </svg><svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="silver" stroke="silver" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                <path d="M30 12 L16 24 2 12" />
                                            </svg>
                                            <select id="consoleforecast" name="consoleforecast" class="choose">
                                                <option><?php echo $consoleforecast; ?></option>
                                                <option>weather34-indoormod.php</option>
                                                <option>weather34-davisforecast.php</option>
                                            </select>

                                                <br><br>
                                            <p>

</div>
<p>

<br>
                                        <div class="weatheroptions">
                                            <br><br>

                                            <input type="submit" name="Submit" value="Save Configuration" class="button">
                                            <p><span style="color:silver;font-size:12px;padding:5px;line-height:16px;">
                                                    <svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                        <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" /> </svg> Click "save configuration" if everything looks ok and dont forget to set the password.</span>
                                        </div>


                                        <p>
                                            <div class="weatheroptionssidebarbottom"><svg id="i-alert" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                    <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" />
                                                </svg>
                                                click save if everything looks ok above and dont forget to set the password.


                                                <div class="weatherbottominfo">
                                                    <svg id="i-info" viewBox="0 0 32 32" width="14" height="14" fill="none" stroke="rgba(86, 95, 103, 1.000)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                        <path d="M16 14 L16 23 M16 8 L16 10" />
                                                        <circle cx="16" cy="16" r="14" />
                                                    </svg>

                                                    now check the weather
                                                    <svg id="i-checkmark" viewBox="0 0 32 32" width="12" height="12" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
                                                        <path d="M2 20 L12 28 30 4" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <br><br>

                                            <br><br>
                                                                <a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank">
                                                                <img src='Wxsoft34-app.png' width='50' style="float:left;margin-top:-20px"></a>
                                                                <br><br><span style="font-size:12px;color:#777;">
                                                                    <center><?php echo "2015-"; ?><?php echo date('Y'); ?> &copy;WEATHER34 Davis Alternative Console</center>
                                                                </span>
                                                            </p>
                                        </p>
                </form>
            </p>
        </div>
    </div>