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
    ?>
       <?php
        include("../header/header.php");
        include('../Music/songsRepository.php');
        $id = intval($_GET['id']);
        $repo = new SongsRepository();
        $song = $repo->getSongById($id);
        $nextSong = $repo->getNextSong($id);
        $nextSongId = -1;
        $prevSong = $repo->getPrevSong($id);
        $prevSongId =-1;
        if(!empty($nextSong)){
          $nextSongId = $nextSong['Id'];
        }

        if(!empty($prevSong)){
        $prevSongId = $prevSong['Id'];
        }
        $repo->saveView($id,$_SESSION['id']);
        ?>
  </header>      
  <main>
    <div class="container">
    <audio id="music" loop>
        <source src="<?php echo '../songs/'.$song['Music']?>" id="music" type="audio/mp3" />
      </audio>
        <img id="main-image" style="max-width: 100%;
    height: auto;
    border-radius: 15px;
    margin-top: 20px;" src="<?php echo '../Images/'.$song['Photo']?>"/>
        <span id="timer">0:00</span>
      
        <div class="playlist-container">
          <?php
          if($prevSongId != -1){

            ?>
<button class="playlist-button" id="prevBtn" onclick="nextSong(<?php echo $prevSongId ?>)" style="color:black; margin-right: 40px;"><i class="fa fa-backward" aria-hidden="true"></i></button>

            <?php
          }
          ?>
            <button class="playlist-button" id="prevButton"  style="color:red"onclick="backTenSeconds()"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
            <button class="playlist-button" id="playPauseBtn" style="color:green" onclick="togglePlayPause()"><i class="fa fa-play" aria-hidden="true"></i></button>
            <button class="playlist-button" id="nextButton" style="color:red"  onclick="skipForward()"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
            <?php
          if($nextSongId != -1){

            ?>
  <button class="playlist-button"  onclick="nextSong(<?php echo $nextSongId ?>)"id="nextBtn" style="color:green;margin-left:40px;"><i class="fa fa-forward" aria-hidden="true"></i></button>

            <?php
          }
          ?>
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
      function nextSong(value)
      {
        element = document.createElement('a');
        element.href = '/Melody-puzzle/Music2/Music2.php?id='+value;
        document.body.appendChild(element);
        localStorage.setItem('music-key',value);
        element.click();
      }

      function nextTenSeconds() {
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

      function updateContent() {
         let music =  document.getElementById('music');
       music.play();
       playPauseBtn.textContent="Pause"
       updateTimer();
      }
</script>
</body>
</html>