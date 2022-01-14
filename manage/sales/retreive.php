<?php 
    require '../../connection/database.php';

    //retreive product
    $sort = "ASC";
    $column = "invoice_no";
    if (isset($_GET['column']) && isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        $column = $_GET['column'];

        $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';
    }
    $querySales = "SELECT * FROM customer JOIN sales ON customer.customer_id = sales.customerid JOIN product ON product.product_id = sales.productid ORDER BY $column $sort";
    $salesList = mysqli_query($connection, $querySales);
?>