<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../header/header.css">
    <title>Dashboard</title>
</head>
<?php 
             include_once '../header/header.php';
?>
<body><style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: aquamarine;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #e74c3c;
        } */
    </style>

    <table border="1">
             <tr>
                <th>ID</th>
                 <th>FULLNAME</th>
                 <th>USERNAME</th>
                 <th>EMAIL</th>
                 <th>PASSWORD</th>
                 <th>ROLE</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once './UserRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $User){
                echo 
                "
                <tr>
                     <td>$User[id]</td>
                     <td>$User[fullname]</td>
                     <td>$User[username] </td>
                     <td>$User[email] </td>
                     <td>$User[password] </td>
                     <td>$User[role] </td>
                     <td><a href='edit.php?id=$User[id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$User[id]'>Delete</a></td>
                     
                </tr>
                ";
             }
             ?>
    </table>
    <table border="1">
             <tr>
                <th>ID</th>
                 <th>FULLNAME</th>
                 <th>EMAIL</th>
                 <th>SUBJECT</th>
                 <th>MESSAGE</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             </table>         

</body>
</html>
