# This repository is a beta project for Meteobridge-Weather34-Smart Version (expected release 2020)

This version uses new css grid layouts based on 

  display:grid;
  
  grid-template-columns: 236px 236px 236px 236px;
  
  
  grid-gap: 5px;
  
  *does not use bootstrap or any other ready made framework it is developed and built locally using sample of above.

this provides the platform for increasing modules to display for example have small charts displayed in small modules
on main page , increase the total of moduels to 24 and choosing optional layouts.
* important this code may not be supported on old browsers prior to end of 2018.


# New No mysql setup use meteobridge data instead..
How to use this non mysql database version with ease.

*what is the benefit ? 
you have a file with every day ,month,year individually recorded , your data is yours and these files can be used in other 
programs like excel for example,these files can be edited if erroneous data appears .so no learning curve for understanding
how mysql works or is setup , reap the benefit of meteobridge services ,no external cron jobs , no server setup of cron jobs 
just let meteobridge do it all.. meteobridge is a feature rich product that totally caters for the weather enthusiast.

important and mostly mis understood mysql database of growing millions of records unless regurlarly maintained can grind your sites to halt over time or cause slow down , its not just about executing a database where it begins to grind when complex routines are called where and the resources of a server get pushed 100% each time called..
siffling through millions of data values is not smart on poorly low cost histed servers.. non maintained databases are not smart ..



step 1 setup storing todays data to a CSV file for today charts to read file is chartstoday.php 

1. Goto meteobridge services screen 

2. Goto Select new service

3. Select from the drop down menu HTTP Request

4. Select Perodical in the next menu

5. Click Save at the bottom of the screen

6. Now look for new HTTP request 

7. select every 10 MINUTES

8. NOW INSERT THE URL  example https://weathersomething.dot.com/chartstoday.php 

9. now click save .



step 2 setup storing monthly yearly data to a CSV file for monthly/year charts to read file is charts-month-year.php

1. Goto meteobridge services screen 

2. Goto Select new service

3. Select from the drop down menu HTTP Request

4. Select Specific Time in the next menu

5. Click Save at the bottom of the screen

6. Now look for new HTTP request 

7. select 23:45 (its the nearest the meteobridge will allow you get to the end of the day)

8. NOW INSERT THE URL  example https://weathersomething.dot.com/charts-month-year.php

9. now click save .

thats it !!! no mysql to setup just these two files will do all the work .

example of future layout screenshot 

<p align="center">
  <img src="https://res.cloudinary.com/brian-underdown/image/upload/v1557736951/december2019_mqrll6.png" width="550" title="weather34 meteobridge beta template "> 
</p>

# Meteobridge-Weather34-Beta Smart Version
Github Beta repository for the Meteobridge version of the original weather34 template 
Weather Template for Meteobridge users only 

*The aim is to create the cleanest and most friendly approach to displaying your personal
weather data for your personal use and reap the full potential of meteobridge nanosd and meteobridge pro.

*This template is primed for use with meteobridge NANOSD and Pro unfortunately the smaller TP-LINK is not
fully compatible due to the requirement of being able to retrieve historical values realtime .

*This work is for development use only it is for meteobridge NANO/Pro users and contributors,participants who communicate
ideas and request permission to use.

*This work is not to be used without prior permission , please clearly outline on how you want to use this work.

*This work requires credits to be left intact where work is used ,it has no legal binding warrant but it is ethical
to create a working enviroment to exchange ideas without creating unwanted noise, the community is smaller than you may think..

*This work means CSS/SVG/PHP .

example of current beta

<p align="center">
  <img src="https://res.cloudinary.com/brian-underdown/image/upload/v1559632919/Beta_aqbm0a.png" width="550" title="weather34 meteobridge beta template "> 
</p>


# Basic Setup guide 
https://weather34.com/homeweatherstation/guides/setup.html

# Myqsl Setup Guide
https://weather34.com/homeweatherstation/guides/setupmeteobridge.html

# Weather34 Historic Timeline of design 2014-2019 
https://weather34.com/homeweatherstation/weather34timeline/weather34timeline.html

# Meteobridge Beta Smart Version Screenshot 
<p align="center">
  <img src="https://res.cloudinary.com/brian-underdown/image/upload/v1559467750/col_ddcheg.png" width="550" title="weather34 meteobridge beta template "> 
</p>
