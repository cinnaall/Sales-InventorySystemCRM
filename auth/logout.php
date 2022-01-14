<?php
    require ('../connection/database.php');

    session_start();
    $_SESSION['status'] = 'invalid'; 
    unset($_SESSION['email']);
    unset($_SESSION['access']);
    mysqli_close($connection);
    header("Location: ./login.php");
?>