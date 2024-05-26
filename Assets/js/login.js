document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});

$(document).ready(function () {
      $("#signinFrm").submit(function (event) {
      event.preventDefault();

        var frmName = $("#signinName").val();
        var frmEmail = $("#signinEmail").val();
        var frmPass = $("#signinPass").val();
      
        $.ajax({
          url: "auth.php",
          method: "POST",
          data: {"Action": "sign-in", "Name":frmName, "Email":frmEmail,"Password":frmPass},
          success: function (result) {
            if (result == true) {
              $("#result").html("You are now a member 😀");
              
            } else {
              $("#result").html(result);
              
            }
          }
        });
    });


    $("#loginFrm").submit(function (event) {
      event.preventDefault();

        var logFrmEmail = $("#loginEmail").val();
        var logFrmPass = $("#loginPass").val();
      
        $.ajax({
          url: "auth.php",
          method: "POST",
          data: {"Action": "log-in", "Email":logFrmEmail,"Password":logFrmPass},
          success: function (result) {
            if (result == true) {
              $("#result").html("you're in 🎫");
              
            } else {
              $("#result").html(result);
              
            }
          }
        });
    });
  });
