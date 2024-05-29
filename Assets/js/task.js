    $(document).ready(function (){
      $("#newTaskFrm").submit(function(event){
        event.preventDefault();
        var newTask = $("#newTaskName").val();

        $.ajax({
          url: "task.php",
          method: "POST",
          data: {"Action":"addNewTask", "task":newTask},
          success: function(result){
            $("#frmResult").html(result);
          }
        });
      });

      $("#newFolderFrm").submit(function(event){
        event.preventDefault();
        var newFolder = $("#newFolderName").val();
        var folderUser = $("#newFolderBtn").attr('name');


        $.ajax({
          url: "task.php",
          method: "POST",
          data: {"Action":"addNewFolder", "folder":newFolder, "user":folderUser},
          success: function(result){
            window.location.href = 'index.php';
          }
        });
      });
    });