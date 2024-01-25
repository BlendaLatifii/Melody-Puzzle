<?php
require_once '../Contact Us/ContactRepository.php';
require_once '../Contact Us/contact.php';
$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->connectDB();

if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $contact = new contact(null, $fullname, $email, $subject, $message);

    $contactRepository = new ContactRepository();

     $contactRepository->insertContact($contact);


}
?>