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
  });
