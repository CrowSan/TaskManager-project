<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="Assets/css/login.css">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <form id="loginFrm" name="loginFrm">
        <label>
          <span>Email</span>
          <input type="email" name="loginEmail" id="loginEmail"/>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="loginPass" id="loginPass"/>
        </label>
        <button type="submit" class="submit" id="loginsub">Log in</button>
    </form>
    <p id="result"><p>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Let's make you an account</h2>
    <form id="signinFrm" name="siginFrm">
      <label>
          <span>Name</span>
          <input type="text" name="signinName" id="signinName"/>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="signinEmail" id="signinEmail"/>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="signinPass" id="signinPass"/>
        </label>
        <button type="submit" class="submit" id="singinsub">Sign Up</button>
    </form>
    <p id="result"><p>
    </div>
  </div>
</div>

<!-- partial -->
<script src="Assets/js/jquery.min.js"></script>
<script src="Assets/js/login.js"></script>

</body>
</html>
