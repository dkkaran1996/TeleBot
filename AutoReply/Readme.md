Auto Reply from Telegram Bot

Automated messages based on User inpit has two methods.

1. Using Webhook - Telegram will send a request to our API to get the desired output for required input.

2. Using API - In certain Interval, We will call Telgram api to get the inputs from the users from telgram since last hit.

Method 1 needs https enabled server needed and response is immediate while telgram calls our api. But if we have not any https we can use Method 2 which is need not Https but it will be delay of minimum 60 seconds.

Method 2 is given in this folder.


api.php - Message sending functions
fethcAnswer - getting output for given input. Actually mapping input to respective functions defined in functions.php - RUN THIS FILE FOR EVERY MINUTE IN CRONTAB
functions.php - Output is defined here as functions
getdata.php - Getting inputs for fetchanswer switch case.

