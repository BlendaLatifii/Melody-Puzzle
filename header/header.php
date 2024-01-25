 <html>
 <link rel="stylesheet" href="../header/header.css">
 <header>
 <?php
        require_once('../DatabaseConnection/DatabaseConnection.php');
        session_start();
        $hide="";
        $isLogedIn = false;
        if(!isset($_SESSION['username'])){
            header("location:../Login/login.php");
        }
        else{
            $isLogedIn = true;
          if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
            $hide = "";
          else
            $hide = "hide";
        }
        ?>
         <div class="header">
            <div style="display: flex; justify-content: flex-start;padding-right: 5px;">
               <a href="../Home/index.php" ><img src="../Images/logoo.png" alt="logo" style="width: 35px;"></a>
           <h1 class="logo">MelodyPuzzle</h1>
            </div>
            <nav>
                <div>
            <ul class="nav-bar">
                <li><a href="../Home/index.php" class="Pages" ><b>HOME</b></a></li>
                <li><a href="../Music/Music.php" class="Pages"  ><b>MUSIC</b></a></li>
                <li><a href="../About Singer/ourArtists.php" class="Pages"><b>ABOUT SINGERS</b></a></li>
                <li><a href="../About Us/AboutUs.php" class="Pages" ><b>ABOUT US</b></a></li>
                <li><a href="../Contact Us/contactUs.php" class="Pages"><b>CONTACT US</b></a></li>
                <li><a href="../User/dashboard.php" class="Pages <?php echo $hide?>"><b>DASHBOARD</b></a></li>
            </ul>
        </div>
        <?php
        if($isLogedIn){
            ?>
            <button class="no-link-style"><a href="../Login/logout.php" style="text-decoration: none;color: black;"><b>LOG OUT</b></a></button>
            <?php
        }
        else{
            ?>
          <button class="no-link-style"><a href="../Login/login.php" style="text-decoration: none;color: black;"><b>LOG IN</b></a></button>
            <?php
        }
        ?>
            </nav>
         </div>
    </header>
 </html>



