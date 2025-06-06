<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
    <?php
    include('../User/UserRepository.php');
    function username_verify($inputUsername, $storedUsername) {
      return $inputUsername === $storedUsername;
  }

    if(isset($_POST['login'])){
      if(empty($_POST['username']) || empty($_POST['password'])){
        echo "Please fill the required fields!";
      }else{
        $repository = new UserRepository();
        $userData = $repository->getUser($_POST['username']);
        $pass = $_POST['password'];
        $uss = $userData['password'];
        $username=$_POST['username'];
      if($userData){
        if(username_verify($username,$userData['username'])){
        if(password_verify($pass,$uss)){
        session_start();
        $_SESSION['id'] = $userData['id'];
        $_SESSION['username'] = $userData['username'];
        $_SESSION['password'] = $userData['password'];
        $_SESSION['loginTime'] = date("H:i:s");
        $_SESSION['role'] = $userData['role'];
        header('Location:../Home/index.php');
        exit();
        }else{
          echo  "<script>alert('Password is wrong!')</script>";
        }
        }
        else{
          echo  "<script>alert('Username is wrong!')</script>";
        }
      }
    }
  }
  
    ?>

</head>
<body>
  <div class="container">
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
    <div style="display: flex; justify-content: center;">
      <a href="../Home/index.php" ><img src="../Images/logoo.png" alt="logo"></a>
  </div>
    <div>
        <h2>Log in</h2>
    </div>
    <div class="input-field">
      <input type="text" name="username"  id="username" required>
      <label>Username</label>
    </div>
    <div class="input-field">
      <input type="password"  name="password" id="password" required>
      <label>Password</label>
    </div>
    <div class="remember" >
      <input type="checkbox" /><span> Remember me</span>
    </div>
    <div class="button">
        <div class="inner"></div>
        <button onclick="validateForm()" name="login">Log in</button>
    </div>
    <div class="option" style="font-size: 14px;font-family: 'Times New Roman', Times, serif;">Log in using your account on:</div>
    <div class="google">
      <a href="https://www.google.com/"><i class="fa fa-google"></i>Google Sign in</a>
    </div>
    <div class="facebook">
      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>Facebook</a>
    </div>
    <span class="psw">Don't have an account? <a href="../SignUp/Sign up.php" style="text-decoration: none; color:rgb(28, 199, 142);"><b>Sign Up</b></a></span>

  </form>
</div>
 <script>
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
