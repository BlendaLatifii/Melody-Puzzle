<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link href="https://fonts.cdnfonts.com/css/fantaisie-artistique" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Music2.css">
</head>
<body>
  <header>
       <?php
        include('../header/header.php');
        ?>
  </header>      
  <main>
    <div class="container">
    <audio id="music" loop>
        <source src="" id="music" type="audio/mp3" />
      </audio>
        <img id="main-image" src=""/>
        <span id="timer">0:00</span>
      
        <div class="playlist-container">
            <button class="playlist-button" id="prevBtn" style="color:black; margin-right: 40px;"><i class="fa fa-backward" aria-hidden="true"></i></button>
            <button class="playlist-button" id="prevButton"  style="color:red"onclick="backTenSeconds()"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
            <button class="playlist-button" id="playPauseBtn" style="color:green" onclick="togglePlayPause()"><i class="fa fa-play" aria-hidden="true"></i></button>
            <button class="playlist-button" id="nextButton" style="color:red"  onclick="skipForward()"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
            <button class="playlist-button" id="nextBtn" style="color:green;margin-left:40px;"><i class="fa fa-forward" aria-hidden="true"></i></button>
        </div>
</div>
  </main>

  <br>
  <br>


  <footer>
  <?php
   include('../footer/footer.php');
  ?>
</footer>



<script>
    document.addEventListener('DOMContentLoaded', function() {

    var storedItem = localStorage.getItem('music-key');

    
    if (storedItem !== null) {
       document.getElementById('main-image').src = `../Images/${storedItem}.jpg`;
       document.getElementById('music').src = `../songs/${storedItem}.mp3`;
    }
});
  let music = document.getElementById("music");
      let playPauseBtn = document.getElementById("playPauseBtn");
      let timer = document.getElementById("timer");

      let isPlaying = false;

      function togglePlayPause() {
        if (isPlaying) {
          music.pause();
          playPauseBtn.textContent = "Play";
        } else {
          music.play();
          playPauseBtn.textContent = "Pause";
        }
        isPlaying = !isPlaying;
      }

      function skipForward() {
        music.currentTime += 10;
        updateTimer();
      }

      function backTenSeconds() {
        if (music.currentTime >= 10) {
          music.currentTime -= 10;
          updateTimer();
        }
      }

      function updateTimer() {
        let minutes = Math.floor(music.currentTime / 60);
        let seconds = Math.floor(music.currentTime % 60);
        seconds = seconds < 10 ? "0" + seconds : seconds;
        timer.textContent = `${minutes}:${seconds}`;
      }

      music.addEventListener("timeupdate", updateTimer);

      let maxItem = 15;
      let currentItem = +localStorage.getItem('music-key');
      prevBtn.style.backgroundColor = "red";

      document.getElementById("prevBtn").addEventListener("click", function() {
         if(currentItem == 1)
         {
            currentItem = maxItem;
         }
         else{
            currentItem--;
         }

         updateContent() ; 
      });
      document.getElementById("nextBtn").addEventListener("click", function() {
        if(currentItem == maxItem)
        {
            currentItem = 1;
        }
        else{
            currentItem++;
        }
         updateContent() ;
      });
      function updateContent() {
         document.getElementById('main-image').src = `../Images/${currentItem}.jpg`;
         let music =  document.getElementById('music');
       music.src = `../songs/${currentItem}.mp3`;
       music.play();
       playPauseBtn.textContent="Pause"
       updateTimer();
      }
</script>
</body>
</html>