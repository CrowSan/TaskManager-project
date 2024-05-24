document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});


$(document).ready(function () {
    $("#signin_Form").submit(function (event) {
        event.preventDefault(); 
  
        var frmName = $("#signin_Name").val();
        var frmEmail = $("#signin_Email").val();
        var frmPass = $("#signin_Pass").val();
  
        $.ajax({
            url: "auth.php",
            method: "POST",
            data: {
                "Action": "signin",
                "Name": frmName,
                "Email": frmEmail,
                "Pass": frmPass
            },
            success: function (response) {
                    alert(response);
                
            }
        })
    });
});