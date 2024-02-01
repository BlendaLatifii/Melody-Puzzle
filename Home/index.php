    <!DOCTYPE html>
    <html>
    <head>
        <title>MelodyPuzzle | Play music, find songs | Online website</title>
   <link rel="stylesheet" href="../Home/Home.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
       <?php
        include('../header/header.php');
        ?>
        <main>
            <div class="background-color">
                <img src="../Images/background-image.png" alt="background-image" id="background-image">
                <div class="main-text">
                    <h1 style="color: aliceblue;
                    font-size: 60px;
                    font-family: math,sans-serif;
                    position: relative;
                    top: -350px;">
                        Music is life <br>
                        itself.
                        <hr style="width: 25%;background:linear-gradient(to right, orange, green);height: 1px;border: none;">
                    </h1>
                    <p style="font-style: italic;
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
                    display: flex; 
                    position: relative;
                    top: -300px;
                    color: aliceblue;">
                        Discover, stream, and share a constantly expanding mix of music <br> from emerging and major artists around the world.
                    </p>
                    <div class="buttons">
                        <button class="music-library" style="padding: 15px;
    border-radius: 20px;
    border-color: aliceblue;
    border-style: double;
    border-width: thin;
    position: relative;
    top: -250px;
    left: 0;
    margin: 0 auto;"><a href="../Music/Music.php" >
                            Open Music Library
                            </a>
                        </button>
                    </div>
                </div>
</main>
        <footer>
          <?php
          include('../footer/footer.php');
          ?>
          </footer>
    </body>
    </html>