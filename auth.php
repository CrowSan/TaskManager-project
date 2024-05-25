<?php
include "Bootstrap/init.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["Action"] == "sign-in") {
        if (strlen($_POST["Name"]) > 3) {
            if (filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {  
                if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/",$_POST["Password"])) {
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
    }



# Verifications:
    //name be longer than 3words
    //mail be either Gmail or Yahoo
    //Password have sign(@ ! # $ % ^ . ) and a UpperCase and be longer tha 5 Character

# if else by ACTION type 
    // Sign-in
    // Log-in



// $query = "INSERT INTO tbName (Name, Email, Pass) VALUES (:Name, :Email, :Password)";


// "Action"
// "Name"
// "Email"
// "Password"
