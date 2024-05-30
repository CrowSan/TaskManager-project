    $(document).ready(function (){
      $("#newTaskFrm").submit(function(event){
        event.preventDefault();
        var taskName = $("#newTaskName").val();
        var folderid = $(".active").attr('data-getfolderid');
        var userId = $(".active").attr('data-userid');

        $.ajax({
          url: "task.php",
          method: "POST",
          data: {"Action":"addNewTask", "task":taskName, "folder_id":folderid, 'user_id': userId},
          success: function(result){
            if (result == true) {
              window.location.href = 'index.php';
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
      var userID = $(this).attr('data-userId');
      $(".folderBtn").removeClass("active");
      $(this).addClass("active");

      $.ajax({
        url: "task.php",
        method: "POST",
        data: {"Action":"folderData", "folder":folderID, "user":userID},
        success: function(result){
          $("#showtasks").html(result);
        }
      });
    });


