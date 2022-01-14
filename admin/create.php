<?php
require("../connection/database.php");
if (isset($_POST['create'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $roles = $_POST['roles'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $access = $_POST['access'];

    $queryCreate = "INSERT INTO register (first_name, last_name, roles, contact, email, password, access) VALUES ('$first_name', '$last_name', '$roles', '$contact', '$email', '$password', '$access')";
    $sqlCreate = mysqli_query($connection, $queryCreate) || trigger_error('Query Failed ' . $queryCreate);
    echo "<script> alert('Successfully created') </script>";
    echo "<script> window.location.href ='./createuser.php' </script>";
} else {
    echo "<script> window.location.href= './createuser.php' </script>";
}
?>