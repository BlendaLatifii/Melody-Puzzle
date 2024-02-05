<?php
include_once '../user/UserRepository.php';
include_once '../user/User.php';

if(isset($_POST['SignUp'])){
    $fullnameRegex = '/^[A-Za-z\s]+$/';
    $usernameRegex = '/^[A-Za-z\s]+$/';
    $emailRegex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';

    if (!preg_match($fullnameRegex, $_POST['fullname'])) {
        echo "<script>alert('Enter a valid fullname')</script>";
    } elseif (!preg_match($usernameRegex, $_POST['username'])) {
        echo "<script>alert('Enter a valid username')</script>";
    } elseif (!preg_match($emailRegex, $_POST['email'])) {
        echo "<script>alert('Enter a valid email')</script>";
    } elseif ($_POST['password'] < 8) {
        echo "<script>alert('Enter a valid password')</script>";
    } elseif($_POST['password'] != $_POST['confirm-password']) {
        echo "<script>alert('Enter a valid confirm-password')</script>";
    }else{
        $user  = new User(null,$_POST['fullname'],$_POST['username'],$_POST['email'],$_POST['password'], 0);
    if(!$user->isValid()){
        echo "<script>alert('Fill all fields!')</script>";
    }else{
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
        header('Location: ../Login/Login.php');
    }
}
}



?>