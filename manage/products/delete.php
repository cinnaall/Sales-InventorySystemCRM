<?php 
    require '../../connection/database.php';

    //delete supplier
    if (isset($_POST['delete'])) {
        $product_id = $_POST['product_id'];

        $queryDelete = "DELETE FROM product WHERE product_id = '$product_id'";
        $sqlUpdate = mysqli_query($connection, $queryDelete);
        echo "<script>alert('Successfully Deleted')</script>";
        echo "<script> window.location.href ='./product.php' </script>";
    }
?>