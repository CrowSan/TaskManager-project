<?php
include "Bootstrap/init.php";

print_r($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["Action"] == "addNewTask") {
        #RUN add new task function("$_POST["task"]")
    }
}
