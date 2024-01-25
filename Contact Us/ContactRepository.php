<?php
require_once('../DatabaseConnection/DatabaseConnection.php');
class ContactRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->connectDB();
    }


function insertContact($contact){

    $conn = $this->connection;

    $id=$contact->getId();
    $fullname = $contact->getFullname();
    $email = $contact->getEmail();
    $subject = $contact->getSubject();
    $message=$contact->getMessage();

    $sql = "INSERT INTO contact (id ,fullname,email,subject, message) VALUES (?,?,?,?,?)";

    $statement = $conn->prepare($sql);

    $statement->execute([$id,$fullname,$email,$subject, $message]);
}



function getAllContacts(){
    $conn = $this->connection;

    $sql = "SELECT * FROM contact";

    $statement = $conn->query($sql);
    $contacts = $statement->fetchAll();

    return $contacts;
}


function deleteContacts($id){
    $conn = $this->connection;

    $sql = "DELETE FROM contact WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);
} 

}
?>