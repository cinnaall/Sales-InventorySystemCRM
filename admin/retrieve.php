<?php
// for database retrieval
require '../connection/database.php';

$sort = "ASC";
$column = "first_name";

if (isset($_GET['column']) && isset($_GET['sort'])) {
    $sort = $_GET['sort'];
    $column = $_GET['column'];

    $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';
}

$queryUsers = "SELECT * FROM register ORDER BY $column $sort";
$listusers = mysqli_query($connection, $queryUsers);

?>
