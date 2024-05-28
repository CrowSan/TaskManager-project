<?php

function Msg($msg){
    echo "<div style='padding: 10px 15px; width: 80%; margin: 20px auto; background: #ffffffe6; border-left: 5px solid #d4af7a; color: #521717; border-radius: 10px; font-family: sans-serif;'>$msg</div>";
}

function isLoggedIn($session){
    return isset($session["login"]) ? true : false;
}

function redirect($url){
    header("Location: $url");
}

function siteUrl ($uri = ""){
    BASE_URL . $uri;
}