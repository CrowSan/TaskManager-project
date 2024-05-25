<?php


// try {
//     $pdo = new PDO("mysql: db = $Connection->db; host=$Connection->host;" , $Connection->user, $Connection->pass);
//     // echo "Connection was Successful";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e -> getMessage();
//     die();
// }
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test'; // Change this to your database name

try {
    $pdo = new PDO("mysql: host=localhost; dbname=test;", $username, $password);
    echo "connected";
} catch (PDOException $e) {
    echo $e -> getMessage();
    die();
}

$testQuery = "SELECT * FROM list2"; 

$stmt = $pdo -> query($testQuery);

$result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

echo"<pre>";

foreach ($result   as $row) {
    echo"<br>";
    print_r($row);
}

