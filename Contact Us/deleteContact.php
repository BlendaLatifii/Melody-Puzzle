<?php

$contactId = $_GET['id'];
include_once '../Contact Us/ContactRepository.php';



$contactRepository = new ContactRepository();

$contactRepository->deleteContacts($contactId);

header("location: ../User/dashboard.php");


?>