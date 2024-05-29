    $(document).ready(function (){
      $("#newTaskFrm").submit(function(event){
        event.preventDefault();
        var newTask = $("#newTaskName").val();
        var folderid = $("#newTaskName").attr('data-SendFolderId');
        var userId = $("#newFolderBtn").attr('name');
  

        $.ajax({
          url: "task.php",
          method: "POST",
          data: {"Action":"addNewTask", "task":newTask, "folder_id":folderid, 'user_id': userId},
          success: function(result){
            if (result == true) {
              $("#frmResult").html("task added ✔");
            } else {
              $("#frmResult").html(result);
            }
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
          success: function(){
            window.location.href = 'index.php';
          }
        });
      });
    });



      $(".folderBtn").click(function(){
        var folderID = $(this).attr('data-GetFolderId');
        $(this).toggleClass("active");
        $("#newTaskName").attr("data-SendFolderId", folderID);
      });

