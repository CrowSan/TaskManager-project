<?php
function diePage($msg){
    echo "<div style='padding: 30px; width: 80%; margin: 50px auto; background: #f9dede; border: 1px solid #cca4a4; color: #521717; border-radius: 5px; font-family: sans-serif;'>$msg</div>";
    die();
}

function Msg($msg){
    echo "<div style='padding: 10px 15px; width: 80%; margin: 20px auto; background: #ffffffe6; border-left: 5px solid #d4af7a; color: #521717; border-radius: 10px; font-family: sans-serif;'>$msg</div>";
}