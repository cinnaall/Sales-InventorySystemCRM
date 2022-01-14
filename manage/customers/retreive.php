<?php
    require '../../connection/database.php';

    //retreive database information
    $sort = "ASC";
    $column = "first_name";

    if (isset($_GET['column']) && isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $column = $_GET['column'];
        $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';
    }
    $queryUsers = "SELECT * FROM customer ORDER BY $column $sort";
    $customerList = mysqli_query($connection, $queryUsers);
?>