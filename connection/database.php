<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'rvt';
$port = 3307;

$connection = mysqli_connect($host, $user, $password, $database, $port);
if (mysqli_connect_error()) {
    echo 'Error unable to connect to mySQL <br>';
    echo 'Message: ' . mysqli_connect_error();
}
    // echo 'Database Connected';
?>