<?php
include "Config.php";
include "Constants.php";


try {
    $pdo = new PDO("mysql: db = $Connection->db; host=$Connection->host;" , $Connection->user, $Connection->pass);
} catch (PDOException $e) {
    echo "Connection failed: " . $e -> getMessage();
    die();
}

echo "Connection was Successful";
