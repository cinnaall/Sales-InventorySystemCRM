<?php 
    require '../../connection/database.php';

    //retreive product
    $sort = "ASC";
    $column = "model";
    if (isset($_GET['column']) && isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $column = $_GET['column'];

        $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';
    }
    $queryUsers = "SELECT * FROM supplier INNER JOIN product ON supplier.supplier_id = product.supplier_id ORDER BY $column $sort";
    $productList = mysqli_query($connection, $queryUsers);
?>