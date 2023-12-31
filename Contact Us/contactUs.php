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
        <div class="header">
            <div style="display: flex; justify-content: flex-start;padding-right: 5px;">
                <a href="../Home/index.html" ><img src="../Images/logoo.png" alt="logo" style="width: 35px;"></a>
                <p></p>
           <h1 class="logo">MelodyPuzzle</h1>
            </div>
           <nav>
               <div>
           <ul class="nav-bar">
            <li><a href="../Home/index.html" class="Pages" style="text-decoration: none; color: black;" ><b>HOME</b></a></li>
            <li><a href="../Music/Music.html" class="Pages" style="text-decoration: none;color: black;"><b>MUSIC</b></a></li>
            <li><a href="../About Us/AboutUs.html" class="Pages" style="text-decoration: none;color: black;"><b>ABOUT US</b></a></li>
           </ul>
            </div>
            <button class="no-link-style"><a href="../Login/login.html" style="text-decoration: none;color: black;"><b>LOG IN</b></a></button>
           </nav>
        </div>
        <hr>
    </header>
    <main>
    <div class="right-side">
    <h1 id="right-side-text">Let's chat.
        <br>Tell us about your <br>concern.
    </h1>
    <p class="right-side-paragraph">Let's create something better together.</p>
    <p class="right-side-paragraph">melodypuzzle@outlook.com</p>
    </div>
    <div class="left-side">
        <h3 class="left-side-text">Send us a message!</h3>
        <div class="contact-us">
            <form>
            <input type="text" name="username" required style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="username">Full name*</label>
            <br>
            <br>
            
            <input type="email" name="email" required style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="email">Email address*</label>
            <br>
            <br>
            <input type="text" name="Subject" style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="Subject">Subject</label>
            <br>
            <p style="font-size: x-large;font-family: system-ui;font-weight: 700;letter-spacing: -1px;color: darkred;">Tell us more about your concern.</p>
            <br>
            <input type="text" name="message" style="padding: 10px 0; width: 100%; border: none; border-bottom: 1px solid gray; outline: none; border-radius: 5px;">
            <label for="message">Message</label>
            <br>
            <br>
            <button type="submit" style="border: 1px solid transparent; border-radius: 8px; padding: 14px 25px; text-transform: uppercase; cursor: pointer; background-color: rgb(18, 29, 128);color: aliceblue;" onclick="validateContact()">Send message</button>
        </form>
        </div>
    </div>
    </main>
    <footer>
        <hr>
        <div class="footer">
        <p>© 2023 MelodyPuzzle BE</p>
        <p>melodypuzzle@outlook.com</p>
        <a href="https://www.instagram.com/"><img src="../Images/instagrami.png" alt=""></a>
        <a href="https://www.facebook.com//"><img src="../Images/ffacebook.png" alt=""></a>
        <a href="https://twitter.com/"><img src="../Images/ttwitter.jpg" alt=""></a>
        <div class="right-side-footer">
            <a href="../Privacy Policy/privacyPolicy.html" style="text-decoration: none;">PRIVACY POLICY</a>
            <a href="../Terms of Use/termsOfUse.html" style="text-decoration: none;">TERMS OF USE</a>
            <a href="../Contact Us/ContactUs.html" style="text-decoration: none;">CONTACT US</a>
        </div>
        </div>
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