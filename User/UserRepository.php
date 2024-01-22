<?php
include('../DatabaseConnection/DatabaseConnection.php');
class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->connectDB();
    }


function insertUser($User){

    $conn = $this->connection;

    $id=$User->getId();
    $fullname = $User->getFullname();
    $username = $User->getUsername();
    $email = $User->getEmail();
    $password = $User->getPassword();
    $role=$User->getRole();

    $sql = "INSERT INTO user (id ,fullname,username,email,password, role) VALUES (?,?,?,?,?,?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$id,$fullname,$username,$email,$password, $role]);

    echo "<script> alert('User has been inserted successfuly!'); </script>";

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

    echo "<script>alert('delete was successful'); </script>";
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