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
                <hr style="position: relative; top: -60px; border: none; background: linear-gradient(to right , gray , black); height: 1px;">
                <div class="artists-container">
                    <p style="display: flex;
                       justify-content: center;
                        font-family: math;
                        font-size: 25px;">
                            <b>
                            Hear artists on trend for free in the MelodyPuzzle community.
                            </b>
                        </p>
                    <div id="artist">
                    <div id="ylli" class="round-img artist-link" data-val="Yll Limani***" style="background-image: url(../Images/yllLimani.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Dhurata Dora***" style="background-image: url(../Images/DhurataDora.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Noizy***" style="background-image: url(../Images/Noizy.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Stresi***" style="background-image: url(../Images/Stresi.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Rina Balaj***" style="background-image: url(../Images/RinaBalaj.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Melinda Ademi***" style="background-image: url(../Images/melindaAdemi.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Muma***" style="background-image: url(../Images/muma.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Ledri Vula***" style="background-image: url(../Images/ledriVula.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Butrint Imeri***" style="background-image: url(../Images/butrintImeri.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Mozzik***" style="background-image: url(../Images/mozzik.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="BM***" style="background-image: url(../Images/bm.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Capital T***" style="background-image: url(../Images/capitalT.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Elvana Gjata***" style="background-image: url(../Images/elvanaGjata.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Finem***" style="background-image: url(../Images/finem.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Luiz Ejlli***" style="background-image: url(../Images/luizEjlli.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Lyrical Son***" style="background-image: url(../Images/lyricalSon.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Marin***" style="background-image: url(../Images/marin.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="MC Kresha***" style="background-image: url(../Images/mcKresha.jpeg);">
                    </div>
                    <div class="round-img artist-link" data-val="Stealth***" style="background-image: url(../Images/stealth.jpeg);">
                    </div>
                    </div>
                </div>
            </div>
            <br>
</main>
        <footer>
          <?php
          include('../footer/footer.php');
          ?>
          </footer>
    </body>
    </html>