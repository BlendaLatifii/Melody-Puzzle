<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
  <form >
    <div style="display: flex; justify-content: center; margin-top: 5px;">
      <a href="../Home/index.html" ><img src="../Images/logoo.png" alt="logo"></a>
  </div>
    <div>
        <h2>Log in</h2>
    </div>
    <div class="input-field">
      <input type="text"  id="username"required>
      <label>Username or e-mail</label>
    </div>
    <div class="input-field">
      <input type="password" id="password" required>
      <label>Password</label>
    </div>
    <div class="remember" >
      <input type="checkbox" /><span> Remember me</span>
    </div>
    <div class="button">
        <div class="inner"></div>
        <button onclick=" validateForm()"><a href="../Home/index.html" style="color:white;text-decoration: none;
          font-size: 16px;">Log in</a></button>
    </div>
    <div class="option" style="font-size: 14px;font-family: 'Times New Roman', Times, serif;">Log in using your account on:</div>
    <div class="google">
      <a href="https://www.google.com/"><i class="fa fa-google"></i>Google Sign in</a>
    </div>
    <div class="facebook">
      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>Facebook</a>
    </div>
    <span class="psw">Don't have an account? <a href="../SignUp/Sign up.html" style="text-decoration: none; color:rgb(28, 199, 142);"><b>Sign Up</b></a></span>

  </form>
</div>
</body>
</html>

 <script>

     alert("If you want to leave this page without logging in, just click on the logo.");
     function validateForm(){
      var username=document.getElementById('username').value;
          var password=document.getElementById('password').value;
          
          var nameRegex=/^[A-Za-z\s]+$/;
          if(!nameRegex.test(username)){
            alert("Enter a valid name");
            return false;
          }

           if(password.length<8){
            alert("Enter a valid password");
            return true;
           }
     }

 </script>
 </body>
</html>
