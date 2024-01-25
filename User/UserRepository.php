<?php
require_once('../DatabaseConnection/DatabaseConnection.php');
class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->connectDB();
    }
function insertUser($User){
    $conn = $this->connection;
    $password = password_hash($User->getPassword(),PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (id ,fullname,username,email,password, role) VALUES (?,?,?,?,?,?)";
    $statement = $conn->prepare($sql);
    $statement->execute([$User->getId(),$User->getFullname(),$User->getUsername(),$User->getEmail(),$password, $User->getRole()]);
}
function getUserById($id){
    $conn = $this->connection;
    $sql = "SELECT * FROM user WHERE id='$id'";
    $statement = $conn->query($sql);
    $user = $statement->fetch();
    return $user;
}
function getAllUsers(){
    $conn = $this->connection;
    $sql = "SELECT * FROM user";
    $statement = $conn->query($sql);
    $users = $statement->fetchAll();
    return $users;
}

function updateUser($id,$fullname,$username,$email,$password, $role){
    $conn = $this->connection;
    $sql = "UPDATE user SET fullname=?, username=?, email=?, password=? , role=? WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement->execute([$fullname,$username,$email,$password,$role,$id]);
} 
function deleteUser($id){
    $conn = $this->connection;
    $sql = "DELETE FROM user WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement->execute([$id]);
} 

function getUser($username){
    $conn = $this->connection;
    $sql = "select * FROM user WHERE username=?";
    $statement = $conn->prepare($sql);
    $statement->execute([$username]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
} 
}
?>