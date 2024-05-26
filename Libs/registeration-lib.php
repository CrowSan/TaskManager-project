<?php


function registration($userData){
    global $pdo;
    $passwordHash = password_hash($userData["Password"], PASSWORD_BCRYPT);
    $query = "INSERT INTO users (name, email, password) VALUES (:Name, :Email, :Password)";
    $stmt = $pdo -> prepare($query);
    $stmt -> execute([':Name'=>$userData['Name'], ':Email'=>$userData['Email'], ':Password'=>$passwordHash]);
    $result = $stmt -> rowCount() ? true : false;

    echo ($result);
};


function login ($userData){
    global $pdo;
    $query = 'SELECT * FROM users WHERE email = :email';
    $stmt = $pdo->prepare($query);
    $stmt -> execute([':email' => $userData["Email"]]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    if ($stmt -> rowCount() >= 1) {
        $hashPass = $result[0]["password"];
        $passCheck = password_verify($userData["Password"], $hashPass);
        if ($passCheck) {
            $_SESSION['login'] = $result;
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
};