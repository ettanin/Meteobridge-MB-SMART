# This GITHUB repository is for Meteobridge Weather34 MB Smart Version *NO MYSQL KNOWLEDGE REQUIRED 
(Version 1.05 October 22nd 2019)

# IMPORTANT PLEASE READ THIS "IT IS NOT COMPATIBLE WITH CUMULUS,WEEWX,WIFILOGGER" IT IS DESIGNED FOR METOBERIDGE NANOSD(100% Compatibility) and MBPRO Products(MBPRO 90% compatibility )

# Version 1.05 has New mb-smart update and backup/restore feature .
* allows features/fixes to be added with ease by simply using a zip file containing neccessary files to be updated or added.
* this feature is for version 1.05 onwards do not try and use it with version 1.04 or previous.
* update files will be release via https://weather34.com/homeweatherstation/ and each update will be dated 
example MB-SMART-UPDATE-23102019
* Version 1.05 requires a fresh install and thereafter you simply use the updater method to update and apply fixes .No more fresh installs are required thereafter.
* The updater and backup is password a protected screen .
* simple guide to use new updater and backup https://weather34.com/homeweatherstation/smartupdate.html#setup


# When upgrading from version 1.04 or earlier please keep a copy of you weather34charts folder !!! 
* this contains all your yearly and monthly charts data from 2019 if you have been following the beta path.
* simply keep a copy on your desktop and copy it to your server where this version 1.05 is installed.

# All beta testers do not need to update with a fresh install you are presently upto date as of 23rd October.
* beta testers are a small group of 10 users and collaborated via email .if you did not recieve an email with 
changes for Version 1.05 during the month of october it means you were not a part of this beta group therefore a fresh install will be required.

# Project expected to finally finish early 2020 .
* todo minor CSS clean (January 2020)
* there are no plans for further development or features thereafter unless there is a significant change or enhancement
released for the Meteobridge NANOSD product.

# Please do not request personal modifications  
* sorry your requests must be of beneficial to everyone "its a one design to suit fit the most common Davis and meteobridge NANOSD setups". 
* Leaf and additional sensors will be added when I actually get around to ordering one and installing.

# ONCE AGAIN IMPORTANT PLEASE READ THIS "IT IS NOT COMPATIBLE WITH CUMULUS,WEEWX,WIFILOGGER" IT IS DESIGNED FOR METOBERIDGE NANOSD(100% Compatibility) and MBPRO Products(MBPRO 90% compatibility )

<p align="center">
  <img src="https://res.cloudinary.com/brian-underdown/image/upload/v1570359213/Screenshot_2019-10-06_Sinanoba_Istanbul_Home_Weather_Station_xty2ei.png" width="550" title="weather34 Meteobridge MB-SMART template "> 
</p>
	
# IMPORTANT THIS TEMPLATE IS FOR METEOBRIDGE NANOSD AND DAVIS HARDWARE USERS ONLY !!
# IT IS NOT COMPATIBLE WITH TP-LINK TYPE METEOBRIDGE HUBS
	

# IMPORTANT NOT COMPATIBLE WITH PREVIOUS MYSQL CSV CHART FILES  !!
	
# More info

https://weather34.com/homeweatherstation/meteobridge-mb-smart.html

# New basic setup Install template ..
Step guide to install template 

https://weather34.com/homeweatherstation/setupguidemb.html


# New setup how to use NANOSD meteobridge data ..
Uploading NANOSD data to the template 

https://weather34.com/homeweatherstation/setupguidembsmart-nanosd.html


# New No mysql setup use meteobridge data instead..
How to use this non mysql database version with ease.

https://weather34.com/homeweatherstation/meteobridge-mb-smart-chartsetup.html

# MB-SMART FAQ
https://weather34.com/homeweatherstation/faq.html

# Meteobridge  what is the benefit ? 
you have a file with every day ,month,year individually recorded , your data is yours and these files can be used in other 
programs like excel for example,these files can be edited if erroneous data appears .so no learning curve for understanding
how mysql works or is setup , reap the benefit of meteobridge services ,no external cron jobs , no server setup of cron jobs 
just let meteobridge https://www.meteobridge.com/wiki/index.php/Home do it all.. https://www.meteobridge.com/wiki/index.php/Home meteobridge is a feature rich product that totally caters for the weather enthusiast.


# 3 simple steps 

# step 1 
setup storing todays data to a CSV file for today charts to read file is chartstoday.php 

1. Goto meteobridge services screen 

2. Goto Select new service

3. Select from the drop down menu HTTP Request

4. Select Perodical in the next menu

5. Click Save at the bottom of the screen

6. Now look for new HTTP request 

7. select every FULL 10 MINUTES

8. NOW INSERT THE URL  example 
# http(s)://weathersomething/chartstoday.php

9. now click save .



# step 2 
setup storing monthly yearly data to a CSV file for monthly/year charts to read file is charts-month-year.php

1. Goto meteobridge services screen 

2. Goto Select new service

3. Select from the drop down menu HTTP Request

4. Select Specific Time in the next menu

5. Click Save at the bottom of the screen

6. Now look for new HTTP request 

7. select 23:45 (its the nearest the meteobridge will allow you get to the end of the day)

8. NOW INSERT THE URL  example 
# http(s)://weathersomething/charts-month-year.php

9. now click save .


# step 3 
setting the stationcron.php to run every 30 minutes (this collects the forecast,earthquake,air quality data etc

1. Goto meteobridge services screen 

2. Goto Select new service

3. Select from the drop down menu HTTP Request

4. Select periodically in the next menu

5. Click Save at the bottom of the screen

6. Now look for new HTTP request 

7. select 30 minutes 

8. NOW INSERT THE URL  example 
# http(s)://weathersomething/mbdbfiles/stationcron.php

9. now click save .


thats it !!! no mysql to setup just these three files will do all the work .screenshots below

behind the code ....

simple logic pull data from livedata.php and generate a required values. utilizes meteobridge software ability to 
pull data in many ways. i.e max wind last 10 minutes , rainfall amount last 10 minutes , average windpeed last 10 minutes and so on ....

short example of daily genrated file adds new line every 10 minutes
id,time,temp,barometer,rainfall,maxwind_last10,avgwind_last10,dewpoint,rainfall_last10min,avgdirection_last10min,date,humidity,indoortemp,indoorhumidity,uv,solar,lightning1,lightning2....

0,19:40,28.2,1013.6,0.0,8.0,4.5,15.5,0.0,36.0,24 Jun,46.0,27.6,38,0.2,38.0,3,2

0,19:50,27.9,1013.6,0.0,7.6,4.3,15.9,0.0,42.0,24 Jun,48.0,27.5,38,0.2,33.0,0,0

0,20:00,27.8,1013.6,0.0,8.0,4.4,16.1,0.0,39.0,24 Jun,49.0,27.4,39,0.1,27.0,1,4

<p align="center">
  <img src="https://res.cloudinary.com/brian-underdown/image/upload/v1561432649/nomysql_slsl7v.png" width="550" title="weather34 meteobridge nomysql charts "> 
</p>

<p align="center">
  <img src="https://res.cloudinary.com/brian-underdown/image/upload/v1563167987/stationcron_js0fmg.png" width="550" title="weather34 stationcron.php "> 
</p>

# Thanks to Lars 
Lars at  https://singaporeweather.info for access to test ideas realtime in a different climate.

# Thanks to Graham Hughes
Graham Hughes huge contribution to the tedious task of getting many translations into place.

# This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License. http://creativecommons.org/licenses/by-nc-nd/4.0/
*This work means CSS/SVG/PHP .
