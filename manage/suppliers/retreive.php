<?php 
    require '../../connection/database.php';

    //retreive supplier
    $sort = "ASC";
    $column = "supplier_name";
    if (isset($_GET['column']) && isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $column = $_GET['column'];

        $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';
    }
    $queryUsers = "SELECT * FROM supplier ORDER BY $column $sort";
    $supplierList = mysqli_query($connection, $queryUsers);
?>