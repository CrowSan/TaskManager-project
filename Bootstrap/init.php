<?php
include "Constants.php";
include BASE_PATH . "Bootstrap/Config.php";
include BASE_PATH . "Libs/helper.php";
include BASE_PATH . "Libs/registeration-lib.php";
include BASE_PATH . "Libs/taskManager-lib.php";

session_start();

try {
    $pdo = new PDO("mysql: host=localhost; dbname=taskmanager;", "root", "");
    // echo "connected";
} catch (PDOException $e) {
    echo $e -> getMessage();
    die();
}

