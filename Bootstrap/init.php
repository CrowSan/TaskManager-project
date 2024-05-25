<?php
include "Constants.php";
include BASE_PATH . "Bootstrap/Config.php";
include BASE_PATH . "Bootstrap/Helper.php";
include BASE_PATH . "Libs/registeration-lib.php";


try {
    $pdo = new PDO("mysql: host=localhost; dbname=taskmanager;", "root", "");
    // echo "connected";
} catch (PDOException $e) {
    echo $e -> getMessage();
    die();
}

