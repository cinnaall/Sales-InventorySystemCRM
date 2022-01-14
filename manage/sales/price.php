<?php
require('../../auth/session.php');
require '../../connection/database.php';

$q = intval($_GET['q']);
            $queryproduct = "SELECT * FROM product WHERE product_id = '".$q."'";
            $productprice = mysqli_query($connection, $queryproduct);
            $row = mysqli_fetch_array($productprice);
            echo $row['srp'];

?>