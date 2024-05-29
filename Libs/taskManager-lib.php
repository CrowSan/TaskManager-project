<?php

function getFolder($user_Id){
    global $pdo;
    $taskQuery = "SELECT * FROM folder WHERE user_id = :uid";
    $stmt = $pdo -> prepare($taskQuery);
    $stmt -> execute([':uid'=>$user_Id]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getUserId(){
    $id = $_SESSION['login'][0]['id'];
    return  $id;
}



#adding new folder function
function addFolderTask($folderName, $user_Id){
    global $pdo;
    $taskQuery = "INSERT INTO folder (name, user_id) VALUES (:name, :user_id)";
    $stmt = $pdo -> prepare($taskQuery);
    $stmt -> execute([':name'=>$folderName, ':user_id'=>$user_Id]);
    $result = $stmt -> rowCount() ? true : false;
    echo $result;
}

#adding new task function
function addNewTask($task, $folder, $userId){
    global $pdo;
    $taskQuery = "INSERT INTO tasks (name, folder_id, user_id) VALUES (:name, :folder, :user)";
    $stmt = $pdo -> prepare($taskQuery);
    $stmt -> execute([':name'=>$task, ':folder'=>$folder, ':user'=>$userId]);
    $result = $stmt -> rowCount() ? true : false;
    echo $result;
}








#delete task function