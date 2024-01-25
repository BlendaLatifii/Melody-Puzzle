<?php

$songId = $_GET['id'];
include_once './songsRepository.php';



$songsRepository = new SongsRepository();

$songsRepository->deleteSong($songId);

header("location: ../User/dashboard.php");


?>