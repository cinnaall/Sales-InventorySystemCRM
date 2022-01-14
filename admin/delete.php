<?php
require('../connection/database.php');

if (isset($_POST['delete'])) {

    $email = $_POST['email'];

    $queryDelete = "DELETE FROM register WHERE email = '$email'";
    $sqlUpdate = mysqli_query($connection, $queryDelete);
    echo "<script>alert('Successfully Deleted')</script>";
    echo "<script> window.location.href ='./users.php' </script>";
}
?>