<?php
include_once '../user/UserRepository.php';
include_once '../user/User.php';

if(isset($_POST['SignUp'])){
    if(empty($_POST['fullname']) || empty($_POST['username']) || empty($_POST['email']) ||
    empty(($_POST['password']))){
        echo "<script>alert('Fill all fields!')</script>";
    }else{
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = 0;
        $user  = new User(null,$fullname,$username,$email,$password, $role);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
        header('Location: ../Login/Login.php');
    }
}



?>