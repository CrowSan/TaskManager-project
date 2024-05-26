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
$dbname = 'taskmanager'; // Change this to your database name

try {
    $pdo = new PDO("mysql: host=localhost; dbname=taskmanager;", $username, $password);
    // echo "connected";
} catch (PDOException $e) {
    echo $e -> getMessage();
    die();
}
function login ($userData){
    global $pdo;
    $query = 'SELECT * FROM users WHERE email = :email';
    $stmt = $pdo->prepare($query);
    $stmt -> execute([':email' => $userData["email"]]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    if ($result > 1) {
        $hashPass = $result[0]["password"];
        $passCheck = password_verify($userData["Password"], $hashPass);
        if ($passCheck) {
            echo "you're all correct";
        } else {
            print_r($passCheck);
            echo "pass was incorrect";
        }
    } else {
        echo "no such email were found.";
    }
};

$testUser = array (
    "email" => "newUser@g.com",
    "Password" => "New.00-ir98"
);

login($testUser);

// $testQuery = "SELECT * FROM users"; 
// $stmt = $pdo -> query($testQuery);
// $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
// echo"<pre>";
// foreach ($result   as $row) {
//     echo"<br>";
//     print_r($row);
// }





