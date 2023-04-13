<?php
    session_start();// you have to start the session before you use it
    if(isset($_SESSION['username'])){
    echo '<h1>Welcome: '. $_SESSION['username']."</h1>";
    echo '<a href="../logout.php">Logout </a>';
    }
    else echo "Welcome Guest";
    echo '<br> <a href="../sessions.php"> Back </a>';
?>