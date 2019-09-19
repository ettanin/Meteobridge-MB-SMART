<?php include('livedata.php');include('common.php');header('Content-type: text/html; charset=utf-8');date_default_timezone_set($TZ);?>
<div class="topframe">

<div class="tempminthisyear" style="margin-left:10px;">
<?php //battery console
 if ($weather['indoorbattery']==1){echo "<maxtempred style='margin-left:-5px;font-size:.75rem'>".$lang['ReplaceBattery']."</maxtempred>";}else if ($weather['indoorbattery']==0){echo "<maxtempblue>".$lang['GoodBattery']."</maxtempblue>";}?></div>
<div class="tmonthmax" style="margin-left:0px;">Console <?php echo $lang['Battery']?></div>
<div class="tmonthconv" style="margin-left:5px;"><?php echo $lang['ConditionBattery']?></div>
<div class="davisbattery">
<svg id="weather34 davis console battery" width="100pt" height="25pt" viewBox="0 0 537 303" version="1.1">
<path fill="#3e4a57" stroke="#3e4a57" stroke-width="0.09375" opacity="1.00" d=" M 30.57 62.58 C 35.86 55.20 44.77 50.23 53.95 50.59 C 113.96 51.11 173.97 50.91 233.98 51.39 C 275.69 51.60 317.41 51.97 359.13 52.00 C 359.18 120.30 359.02 188.61 359.21 256.91 C 308.80 256.45 258.39 256.44 207.98 256.16 C 158.66 255.70 109.33 255.75 60.01 255.45 C 55.27 255.36 50.37 255.89 45.81 254.23 C 36.01 251.10 27.29 242.48 26.05 232.02 C 25.93 179.68 26.03 127.33 26.00 74.99 C 25.80 70.41 28.00 66.21 30.57 62.58 Z" />
<path fill="#f14507" stroke="#f14507" stroke-width="0.09375" opacity="1.00" d=" M 359.13 52.00 C 392.42 52.00 425.72 52.01 459.01 51.99 C 466.09 52.28 472.72 55.56 478.04 60.11 C 483.69 65.51 487.01 73.14 487.23 80.95 C 487.24 91.12 487.23 101.28 487.23 111.45 C 487.27 140.49 487.28 169.53 487.23 198.57 C 487.15 209.39 487.41 220.22 487.11 231.03 C 486.10 245.89 471.93 258.58 456.99 257.40 C 424.40 257.16 391.80 257.10 359.21 256.91 C 359.02 188.61 359.18 120.30 359.13 52.00 M 409.30 147.06 C 400.41 147.12 391.51 147.06 382.62 147.09 C 382.55 151.70 382.54 156.31 382.63 160.92 C 391.52 160.93 400.41 160.88 409.30 160.94 C 409.30 169.61 409.35 178.28 409.27 186.95 C 414.15 187.07 419.04 186.98 423.92 187.00 C 423.92 178.31 423.90 169.62 423.93 160.93 C 432.75 160.90 441.56 160.94 450.38 160.91 C 450.45 156.30 450.45 151.69 450.37 147.08 C 441.56 147.07 432.74 147.10 423.93 147.07 C 423.90 138.25 423.93 129.44 423.91 120.62 C 419.10 120.52 414.29 120.65 409.48 120.52 C 409.09 129.35 409.43 138.21 409.30 147.06 Z" />
<path fill="#e5e6e7" stroke="#e5e6e7" stroke-width="0.09375" opacity="1.00" d=" M 487.23 111.45 C 492.16 111.44 497.09 111.38 502.02 111.55 C 506.42 111.69 511.45 115.16 510.94 120.02 C 510.95 143.34 510.94 166.66 510.95 189.98 C 511.49 194.75 506.66 198.27 502.33 198.52 C 497.30 198.76 492.26 198.50 487.23 198.57 C 487.28 169.53 487.27 140.49 487.23 111.45 Z" />
<path fill="#e5e6e7" stroke="#e5e6e7" stroke-width="0.09375" opacity="1.00" d=" M 409.30 147.06 C 409.43 138.21 409.09 129.35 409.48 120.52 C 414.29 120.65 419.10 120.52 423.91 120.62 C 423.93 129.44 423.90 138.25 423.93 147.07 C 432.74 147.10 441.56 147.07 450.37 147.08 C 450.45 151.69 450.45 156.30 450.38 160.91 C 441.56 160.94 432.75 160.90 423.93 160.93 C 423.90 169.62 423.92 178.31 423.92 187.00 C 419.04 186.98 414.15 187.07 409.27 186.95 C 409.35 178.28 409.30 169.61 409.30 160.94 C 400.41 160.88 391.52 160.93 382.63 160.92 C 382.54 156.31 382.55 151.70 382.62 147.09 C 391.51 147.06 400.41 147.12 409.30 147.06 Z" />
</svg></div>

<div class="yearwordtempbig" style="margin-left:8px;">Battery</div>
<div class="tempmaxthisyear" style="margin-left:0;">
<?php //battery ISS
 if ($weather['outdoorbattery']==1){echo "<maxtempred style='margin-left:-5px;font-size:.75rem'>".$lang['ReplaceBattery']."</maxtempred>";} else if ($weather['outdoorbattery']==0){echo "<maxtempblue>".$lang['GoodBattery']."</maxtempblue>";} ?>
</div>
<div class="tyearmax" style="margin-left:0px;">ISS <?php echo $lang['Battery']?></div>
<div class="tyearconv" style="margin-left:0;"><?php echo $lang['ConditionBattery']?></div>
