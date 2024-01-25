<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<?php 
             include_once '../header/header.php';
?>
<body>
    <style>
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
         .end{
            display: flex;
            align-items: center;
            justify-content: end;
         }
         .width-90{
            width: 90%;
         }
         button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        /*
        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #e74c3c;
        }*/ 
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
                 <th>Delete</th>
                 
             </tr>

              <?php
                 include_once '../Contact Us/ContactRepository.php';
                 $contactRepository=  new ContactRepository();
            
            $contacts = $contactRepository->getAllContacts();
    


        foreach ($contacts as $contact) {
            echo "
            <tr>
            <td>$contact[id]</td>
            <td>$contact[fullname]</td>
            <td>$contact[email] </td>
            <td>$contact[subject] </td>
            <td>$contact[message] </td>
            <td><a href='../Contact Us/deleteContact.php?id=$contact[id]'>Delete</a></td>
            
            </tr>
            ";
         }
         ?>

         </table>  
         
         <div class="end width-90">
    <button ><a href="../Music/AddSong.php" class="Pages <?php echo $hide?>"><b>Add new Song</b></a></button>
</div>
         <table border="1">
        
             <tr>
                 <th>ID</th>
                 <th>TITLE</th>
                 <th>ARTIST</th>
                 <th>GENRE</th>
                 <th>PUBLICATION DATE</th>
                 <th>Added By</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

              <?php
                 include_once '../Music/songsRepository.php';
                 $songsRepository=  new songsRepository();
            
            $song = $songsRepository->getAllSongs();
    
   

        foreach ($song as $songs) {
            echo "
            <tr>
            <td>$songs[Id]</td>
            <td>$songs[title]</td>
            <td>$songs[artist] </td>
            <td>$songs[genre] </td>
            <td>$songs[publicationDate] </td>
            <td>$songs[fullname]</td>
            <td><a href='../Music/editSong.php?id=$songs[Id]'>Edit</a> </td>
            <td><a href='../Music/deleteSong.php?id=$songs[Id]'>Delete</a></td>
            
            </tr>
            ";
         }
         ?>

         </table>   
         
         <div class="div">
         <table border="1">
        
        <tr>
            
            <th>TITLE</th>
            <th>ARTIST</th>
           <th>VIEWS</th>
            
        </tr>

         <?php
           
       
       $views= $songsRepository->getAllViews();;



   foreach ($views as $view) {
       echo "
       <tr>
       <td>$view[title]</td>
       <td>$view[artist] </td>
       <td>$view[NR]</td>
       
       
       </tr>
       ";
    }
    ?>

    </table>   
         </div>


</body>
</html>
