<?php
    require '../../connection/database.php';

    //delete customer
    if (isset($_POST['delete'])) {
        $email = $_POST['email'];

        $queryDelete = "DELETE FROM customer WHERE email = '$email'";
        $sqlUpdate = mysqli_query($connection, $queryDelete);
        echo "<script>alert('Successfully Deleted')</script>";
        echo "<script> window.location.href ='./customer.php' </script>";
    }
?>