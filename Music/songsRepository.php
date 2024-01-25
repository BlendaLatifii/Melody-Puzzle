<?php
require_once('../DatabaseConnection/DatabaseConnection.php');
class SongsRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->connectDB();
    }


function insertSong($song,$userId){
    $conn = $this->connection;
    $title = $song->getTitle();
    $artist = $song->getArtist();
    $genre = $song->getGenre();
    $sql = "INSERT INTO songs (title,artist,genre,publicationDate,Photo,Music,userId) VALUES (?,?,?,?,?,?,?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$title, $artist, $genre, date("Y-m-d H:i:s"),$song->getPhoto(),$song->getMusic(),$userId]);
}

function getAllSongs(){
    $conn = $this->connection;
    $sql = "SELECT * FROM songs s join user u on s.userId = u.id";
    $statement = $conn->query($sql);
    $song = $statement->fetchAll();
    return $song;
}

function getAllViews(){
    $conn = $this->connection;
    $sql = "SELECT s.title as title, s.artist as artist , Count(*) as NR FROM views v join songs s on s.Id = v.songId  Group by s.title, s.artist";
    $statement = $conn->query($sql);
    $views = $statement->fetchAll();
    return $views;
}
function getSongById($Id){
    $conn = $this->connection;
    $sql = "SELECT * FROM songs WHERE Id='$Id'";
    $statement = $conn->query($sql);
    $song = $statement->fetch();
    return $song;
}

function getNextSong($currentId)
{
    $conn = $this->connection;
    $sql = "SELECT * FROM songs WHERE Id > :currentId LIMIT 1";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':currentId', $currentId, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function getPrevSong($currentId){
    $conn = $this->connection;
    $sql = "SELECT * FROM songs WHERE Id < '$currentId' ORDER BY Id DESC LIMIT 1";
    $statement = $conn->query($sql);
    $song = $statement->fetch(PDO::FETCH_ASSOC);
    return $song;
}

function saveView($songId,$userId)
{
    $conn = $this->connection;
    $sql = "INSERT INTO views (songId,userID) VALUES (?,?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$songId, $userId]);
}

function updateSongs($id,$title, $artist, $genre, $publicationDate, $Photo, $Music){
    $conn = $this->connection;
    $sql = "UPDATE songs SET title=?, artist=?, genre=?, publicationDate=? , Photo=? , Music=? WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement->execute([$title, $artist, $genre, $publicationDate,$Photo,$Music, $id]);
} 
function deleteSong($id){
    $conn = $this->connection;
    $sql = "DELETE FROM songs WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement->execute([$id]);
} 

}

?>