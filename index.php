<?php
include "Bootstrap/init.php";

if (isLoggedIn($_SESSION)) {
    include "tpl/tpl_task.php";
} else {
    include "tpl/tpl_login.php";
}









