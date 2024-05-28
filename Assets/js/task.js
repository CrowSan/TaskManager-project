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
    });