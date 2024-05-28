<?php
include "Bootstrap/init.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["Action"] == "sign-in") {
        if (strlen($_POST["Name"]) >= 3) {
            if (filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {  
                if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,}$/",$_POST["Password"])) {
                    registration($_POST);
                    }else{
                        Msg("Your Password needs this coditions: <br> 1.more that 5 letter<br> 2. atleast one capital letter<br>3. special Character like - or *<br> 4. one digit!");
                    }
                  } else {
                    Msg("{$_POST["Email"]} is not a valid email address");
                  }
            } else {
                Msg("name need more letters");
            }
        }

        if ($_POST["Action"] == "log-in") {
            if (login ($_POST)) {
                echo true;
            } else {
                Msg("Email or password was incorrect");
            }

      }
}


