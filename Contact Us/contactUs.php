<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>
<body>
    <header>
       <?php
        include('../header/header.php');
        ?>
    </header>
    <main>
    <div class="right-side">
    <h1 id="right-side-text">Let's chat.
        <br>Tell us about your <br>concern.
    </h1>
    <p class="right-side-paragraph">Let's create something better together.</p>
    <p class="right-side-paragraph" style="margin-top:34px;">melodypuzzle@outlook.com</p>
    </div>
    <div class="left-side">
        <h3 class="left-side-text">Send us a message!</h3>
        <div class="contact-us">
            <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="fullname" required style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="fullname">Full name*</label>
            <br>
            <br>
            
            <input type="email" name="email" required style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="email">Email address*</label>
            <br>
            <br>
            <input type="text" name="subject" style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="Subject">Subject</label>
            <br>
            <p class="issues" style="font-size: x-large;font-family: system-ui;font-weight: 700;letter-spacing: -1px;color: darkred;">Tell us more about your concern.</p>
            <br>
            <input type="text" name="message" style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="message">Message</label>
            <br>
            <br>
            <button type="submit" style="border: 1px solid transparent; border-radius: 8px; padding: 14px 25px; text-transform: uppercase; cursor: pointer; background-color: rgb(18, 29, 128);color: aliceblue;" onclick="validateContact()" name="submit">Send message</button>
        </form>
        </div>
    </div>
    <?php
  include_once '../Contact Us/process_contact.php';
 ?>
    </main>
    <br>
    <footer>
        <?php
          include('../footer/footer.php');
          ?>
    </footer>


    <script>
        function validateContact(){
             var fullname=document.getElementById('fullname').value;
             var email=document.getElementById('email').value;
             var fullnameRegex=/^[A-Za-z\s]+$/;
             if(!fullnameRegex.test(fullname)){
            alert("Enter a valid fullname");
            return false;
            }
            var emailRegex=/w[a-zA-Z\s@][0-9]+@[^\s@]+\. w[2-4]+$/;
            if(!emailRegex.test(email)){
               alert("Enter a valid email");
              return false;
            }
        }
    </script>
</body>
</html>