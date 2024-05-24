<?php
//functions going through and happen in task page, comes here
$userLogged = false;

if ($userLogged) {
    include "Tpl/task.php";
} else {
    include "Tpl/login.php";
}



// 
?>