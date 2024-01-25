<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Track Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            background: url(../Images/bg.jpg);
            background-size: cover;
            background-position: center;
        }
        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
    <?php
    include("../header/header.php");
    ?>
</div>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>

    <label for="artist">Artist:</label>
    <input type="text" id="artist" name="artist" required>

    <label for="genre">Genre:</label>
    <select id="genre" name="genre" required>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="hip-hop">Hip Hop</option>
    </select>

    <label for="photo">Photo:</label>
    <input type="file" id="photo" name="photo" accept="image/*" required>

    <label for="mp3file">MP3 File:</label>
    <input type="file" id="mp3file" name="mp3file" accept=".mp3" required>

    <input name="AddSong"   type="submit" value="Save Track">
</form>

<?php
include('./songs.php');
include('./songsRepository.php');
if(isset($_POST["AddSong"]))
{
    $song = new Song();
    $imageFileName = $_FILES["photo"]["name"];
    $imageTmpName = $_FILES["photo"]["tmp_name"];
    $imageDestination = "../images/" . $imageFileName;
    move_uploaded_file($imageTmpName, $imageDestination);
    $song->setPhoto($imageFileName);

    if (isset($_FILES["mp3file"])) {
        $mp3FileName = $_FILES["mp3file"]["name"];
        $mp3TmpName = $_FILES["mp3file"]["tmp_name"];
        $mp3Destination = "../songs/" . $mp3FileName;
        move_uploaded_file($mp3TmpName, $mp3Destination);
        $song->setMusic($mp3FileName);
    }
    $song->setTitle($_POST['title']);
    $song->setArtisti($_POST['artist']);
    $song->setGenre($_POST['genre']);

    $songReposiitory = new SongsRepository();

    $songReposiitory->insertSong($song,$_SESSION['id']);
    header("Location:../User/dashboard.php");
}
?>

</body>
</html>
