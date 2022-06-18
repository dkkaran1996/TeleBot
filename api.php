<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$apiKey="bot1044903372:AAG9AYtBbIc0FhoJGFWEG8-GDSDnhhEXc9Q";

function teleBotMsg($chatid,$text){
        global $apiKey;
        $url="https://api.telegram.org/$apiKey/sendMessage?chat_id=$chatid&text=$text";
        return file_get_contents($url);
}


function teleBotImage($chatid,$txt){
        global $apiKey;
        $url="https://api.telegram.org/$apiKey/sendphoto?chat_id=$chatid&photo=$txt";
        return file_get_contents($url);
}

?>