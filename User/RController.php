<?php
include_once '../user/UserRepository.php';
include_once '../user/User.php';

if(isset($_POST['SignUp'])){
    if(empty($_POST['fullname']) || empty($_POST['username']) || empty($_POST['email']) ||
    empty(($_POST['password'])) || empty($_POST['role']) ){
        echo "Fill all fields!";
    }else{
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role=$_POST['role'];
        $id = $username.rand(100,999);

        $user  = new User($id,$fullname,$username,$email,$password, $role);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}



?>