<?php

$songId = $_GET['id'];
include_once '../Music/songsRepository.php';
$songRepository = new SongsRepository();

$song  = $songRepository->getSongById($songId);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            background: url(../Images/bg.jpg);
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .container {
            text-align:start;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h3 {
            color: #3498db;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color:#3498db;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color:cornflowerblue;
        }
        
      
    </style>

    <header>
     <?php
    include("../header/header.php");
    ?>
    </header>
    <br>
    <br>
    <main style=" display: flex;justify-content: center;
            align-items: center;flex-direction: column;">

<form action="" method="post" enctype="multipart/form-data" >
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"  value="<?=$song['title']?>" required>

    <label for="artist">Artist:</label>
    <input type="text" id="artist" name="artist" value="<?=$song['artist']?>" required>

    <label for="genre">Genre:</label>
    <select id="genre" name="genre" required>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="hip-hop">Hip Hop</option>
    </select>
    <br>

    <label for="photo">Photo:</label>
    <input type="file" id="photo" name="photo" accept="image/*"  value="<?=$song['Photo']?>" required>

    <label for="mp3file">MP3 File:</label>
    <input type="file" id="mp3file" name="mp3file" accept=".mp3" value="<?=$song['Music']?>" required>

    <input name="Edit"   type="submit" value="Edit">
</form>
    </main>
</body>

<?php

if(isset($_POST['Edit'])){
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $Photo = $_FILES['photo'];
    $Music = $_FILES['mp3file'];

    $songRepository->updateSongs($songId,$title, $artist, $genre, date("Y-m-d H:i:s") , $Photo, $Music);
    header("location:../User/dashboard.php");
}

?>
</html>