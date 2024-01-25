<?php
$userId = $_GET['id'];
include_once './userRepository.php';
$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align:start;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h3 {
            color: #3498db;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color:#3498db;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color:cornflowerblue;
        }
        
      
    </style>
    <form action="" method="post">
    <h3 style="color: #3498db;
            margin-bottom: 10px;">Edit User</h3>
        <label class="input-field">ID</label>
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br>
        <label class="input-field">Full name</label>
        <input type="text" name="fullname"  value="<?=$user['fullname']?>"> <br> 
        <label class="input-field">Username</label>
        <input type="text" name="username"  value="<?=$user['username']?>"> <br> 
        <label class="input-field">E-mail</label>
        <input type="text" name="email"  value="<?=$user['email']?>"> <br>
        <label class="input-field">Password</label>
        <input type="text" name="password"  value="<?=$user['password']?>"> <br>
        <label class="input-field">Role</label>
        <input type="text" name="role"  value="<?=$user['role']?>"> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $user['id'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $userRepository->updateUser($id,$fullname,$username,$email,$password, $role);
    header("location:dashboard.php");
}


?>