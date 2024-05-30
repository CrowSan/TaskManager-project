<?php
include "Bootstrap/init.php";

// print_r($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["Action"] == "addNewTask") {
        #RUN add new task function("$_POST["task"]")
        addNewTask($_POST['task'], $_POST['folder_id'], $_POST['user_id']);
    } elseif ($_POST["Action"] == "addNewFolder") {
        #RUN add new Folder function("$_POST["folder"]")
        addFolderTask($_POST["folder"], $_POST["user"]);
    }
    elseif ($_POST["Action"] == "folderData") {
        getTask($_POST['user'] , $_POST['folder']);
    }
}
// $_POST['folder'] = 24;
// $_POST['user'] = 4;
// print_r ((getTask($_POST['folder'], $_POST['user'])));
