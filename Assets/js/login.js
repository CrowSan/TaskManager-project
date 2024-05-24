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
              console.log (result);

            } else {
              alert(result);
            };
          }
        });
    });
  });




// $(document).ready(function () {
//   $("#signin_Form").submit(function (event) {
//       event.preventDefault(); // Prevent default form submission

//       var frmName = $("#signin_Name").val();
//       var frmEmail = $("#signin_Email").val();
//       var frmPass = $("#signin_Pass").val();

//       $.ajax({
//           url: "auth.php",
//           method: "POST",
//           data: {
//               "Action": "signin",
//               "Name": frmName,
//               "Email": frmEmail,
//               "Pass": frmPass
//           },
//           success: function (response) {
//               // Handle the response based on its content
//               if (response === "success") {
//                   // Successful login (you can redirect or show a message)
//                   alert("Login successful!");
//               } else {
//                   // Handle other cases (e.g., display an error message)
//                   console.log("Error:", response);
//               }
//           },
//           error: function (xhr, status, error) {
//               // Handle server errors (e.g., 500)
//               console.log("Server error:", status, error);
//           }
//       });
//   });
// });
