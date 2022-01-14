<?php
    require '../../connection/database.php';

    //delete customer
    if (isset($_POST['delete'])) {
        $sales_id = $_POST['sales_id'];

        $queryDelete = "DELETE FROM sales WHERE sales_id = '$sales_id'";
        $sqlUpdate = mysqli_query($connection, $queryDelete);
        echo "<script>alert('Successfully Deleted')</script>";
        echo "<script> window.location.href ='./sales.php' </script>";
    }
?>