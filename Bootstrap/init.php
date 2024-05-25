<?php
include "Config.php";
include "Constants.php";
include "Helper.php";
include "Libs/registeration-lib.php";



try {
    $pdo = new PDO("mysql: db = $Connection->db; host=$Connection->host;" , $Connection->user, $Connection->pass);
    // echo "Connection was Successful";
} catch (PDOException $e) {
    echo "Connection failed: " . $e -> getMessage();
    die();
}

