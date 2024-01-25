<?php
include_once '../user/UserRepository.php';
include_once '../user/User.php';

if(isset($_POST['SignUp'])){
    $user  = new User(null,$_POST['fullname'],$_POST['username'],$_POST['email'],$_POST['password'], 0);
    if(!$user->isValid()){
        echo "<script>alert('Fill all fields!')</script>";
    }else{
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
        header('Location: ../Login/Login.php');
    }
}



?>