<?php

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