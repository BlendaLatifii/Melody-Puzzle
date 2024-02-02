<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MelodyPuzzle | Play music, find songs | Online website</title>
    <link rel="stylesheet" href="../Home/Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
    body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    
main {
    display: flex;
    align-items: center;
    justify-content: center;
}

.background-color {
    position: relative;
    overflow: hidden;
    width: 100%;
    box-sizing: border-box;
    background: linear-gradient(to right,black,gray);
}

#background-image {
    position: relative;
    left: 20%;
    float: right;
    margin: 0 auto;
    width: 70%;
    
}

.main-text {
    text-align: left;
    color: aliceblue;
    padding: 0 20px;
    position: relative;
    top: 30vh;
}

.h1 {
    font-size: 3em;
    margin-bottom: 20px;
}

p {
    font-style: italic;
    font-size: 1.2em;
    margin-bottom: 30px;
}

.music-library {
    padding: 15px;
    border-radius: 20px;
    border: thin solid aliceblue;
    display: inline-block;
    text-decoration: none;
    color: aliceblue;
}

@media (max-width: 708px) {
    .main-text {
        top: 20vh;
        font-size: 20px;
    }

    .h1 {
        font-size: 1em;
        margin-bottom: 10px;
    }

    p {
        font-size: 10px;
    }

    #background-image {
        position: relative;
        left: 10%;
        float: right;
        margin: 0 auto;
        width: 50%;
        top: 15px;
    }

    .music-library {
        padding: 7px;
        border-radius: 15px;
        border: 1px solid aliceblue;
        display: inline-block;
        text-decoration: none;
        color: aliceblue;
        font-size: 7px;
        position: relative;
        top: -20px;
    }

    .background-color {
        position: relative;
        overflow: hidden;
        width: 100%;
        box-sizing: border-box;
        height: 250px;
    }
}

@media (max-width: 480px) {
    .main-text {
        top: 32vh;
        font-size: 15px;
    }

    .h1 {
        font-size: 1em;
        margin-bottom: 10px;
    }

    p {
        font-size: 7px;
    }

    #background-image {
        position: relative;
        left: 10%;
        float: right;
        margin: 0 auto;
        width: 50%;
        top: 30px;
    }

    .music-library {
        padding: 5px;
        border-radius: 10px;
        border: 1px solid aliceblue;
        display: inline-block;
        text-decoration: none;
        color: aliceblue;
        font-size: 5px;
        position: relative;
        top: -20px;
    }
}
</style>
<header>
    <?php
    include('../header/header.php');
    ?>
</header>
   
    <main>
        <div class="background-color">
            <img src="../Images/background-image.png" alt="background-image" id="background-image">
            <div class="main-text">
                <h1 class="h1">
                    Music is life <br> itself.
                    <hr style="width: 25%; background: linear-gradient(to right, orange, green); height: 1px; border: none;">
                </h1>
                <p>
                    Discover, stream, and share a constantly expanding mix of music <br> from emerging and major artists
                    around the world.
                </p>
                <div class="buttons">
                    <a class="music-library" href="../Music/Music.php">Open Music Library</a>
                </div>
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