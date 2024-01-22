<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="Sign Up.css"/>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <div style="display: flex; justify-content: center; margin-top: 5px;">
      <a href="../Home/index.html" ><img src="../Images/logoo.png" alt="logo"></a>
    </div>
    <div>
        <h2>Sign Up</h2>
    </div>
    <div class="input-field">
      <input type="text" name="fullname" id="fullname" required>
      <label>Full name</label>
    </div>
    <div class="input-field">
      <input type="text"  name="username" id="username" required>
      <label>Username</label>
    </div>
    <div class="input-field">
      <input type="email" name="email"  id="email" required>
      <label>E-mail</label>
    </div>
    <div class="input-field">
      <input type="password" name="password" id="password" required>
      <label>Password</label>
    </div>
    <div class="input-field">
      <input type="password" name="confirm-password" id="confirm-password" required>
      <label> Confirm Password</label>
    </div>
    <div>
      <legend>Choose your gender:</legend>
      <input type="radio" name="gender" id="male" value="male" >
      <label for="male">Male</label>
      <input type="radio" name="gender" id="female" value="female">
      <label for="female">Female</label>
    </div>
    <div class="button">
        <div class="inner"></div>
        <button onclick="validateForm()" name="SignUp"> Sign Up</button>
    </div>
    <span class="psw">Already a member? <a href="../Login/login.html" style="text-decoration: none; color:rgb(28, 199, 142);padding-bottom: 10px;"><b>Log in</b></a></span>

  </form>
  <?php
  include_once '../User/RController.php';
 ?>


  <script>
     function validateForm(){
          var fullname=document.getElementById('fullname').value;
          var username=document.getElementById('username').value;
          var email=document.getElementById('email').value;
          var password=document.getElementById('password').value;

          var fullnameRegex=/^[A-Za-z\s]+$/;
          if(!fullnameRegex.test(fullname)){
            alert("Enter a valid fullname");
            return false;
          }
          var usernameRegex=/^[A-Za-z\s]+$/;
          if(!usernameRegex.test(username)){
            alert("Enter a valid name");
            return false;
          }
          //var emailRegex=/w[a-zA-Z\s@][0-9]+@[^\s@]+\. w[2-4]+$/;
          var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
          console.log(email,emailRegex.test(email));
          if(!emailRegex.test(email)){
               alert("Enter a valid email");
              return false;
           }
          if(password.length < 8){
          alert("Enter a valid password");
            return true;
           }

     }
  </script>
</body>
</html>