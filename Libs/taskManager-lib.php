<?php

function getFolder($user_Id){
    global $pdo;
    $taskQuery = "SELECT * FROM folder WHERE user_id = :uid";
    $stmt = $pdo -> prepare($taskQuery);
    $stmt -> execute([':uid'=>$user_Id]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


# select forlder -> ajax(folder_id, user_id) -> task.php($_POST['Action'] == folderdata) -> getTask($user_Id, folder_id) -> echo Result one by one
function getTask($user_Id, $folder_id){
    global $pdo;
    $taaskQuery = "SELECT * FROM tasks WHERE user_id = :uid AND folder_id = :fid";
    $stmt = $pdo -> prepare($taaskQuery);
    $stmt -> execute([':uid' => $user_Id, ':fid' => $folder_id]);
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        //htmlspecialchars( $row["name"]) make sure that we get simple string from sql and not some fuckedup shit that has hidden code in it.
        echo "<li><i class='fa fa-square-o'></i><span>" . htmlspecialchars( $row["name"]) . "</span></li>";
    }
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
function addNewTask($task, $folder_id, $user_Id){
    global $pdo;
    $taskQuery = "INSERT INTO tasks (name, folder_id, user_id) VALUES (:name, :folder, :user)";
    $stmt = $pdo -> prepare($taskQuery);
    $stmt -> execute([':name'=>$task, ':folder'=>$folder_id, ':user'=>$user_Id]);
    $result = $stmt -> rowCount() ? true : false;
    echo $result;
}








#delete task function