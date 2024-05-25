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