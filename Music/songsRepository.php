<?php
require_once('../DatabaseConnection/DatabaseConnection.php');
class SongsRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->connectDB();
    }


function insertSong($song){

    $conn = $this->connection;

    $title = $song->getTitle();
    $artist = $song->getArtist();
    $genre = $song->getGenre();
   

    $sql = "INSERT INTO songs (title,artist,genre,publicationDate,Photo,Music) VALUES (?,?,?,?,?,?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$title, $artist, $genre, date("Y-m-d H:i:s"),$song->getPhoto(),$song->getMusic()]);
}

function getAllSongs(){
    $conn = $this->connection;

    $sql = "SELECT * FROM songs";

    $statement = $conn->query($sql);
    $song = $statement->fetchAll();

    return $song;
}
function getSongById($Id){
    echo $Id;
    $conn = $this->connection;

    $sql = "SELECT * FROM songs WHERE Id='$Id'";

    $statement = $conn->query($sql);
    $song = $statement->fetch();

    return $song;
}

function updateSongs($id,$title, $artist, $genre, $publicationDate){
    $conn = $this->connection;

    $sql = "UPDATE songs SET title=?, artist=?, genre=?, publicationDate=?  WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$title, $artist, $genre, $publicationDate , $id]);
} 
function deleteSong($id){
    $conn = $this->connection;

    $sql = "DELETE FROM songs WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('delete was successful'); </script>";
} 

}

?>