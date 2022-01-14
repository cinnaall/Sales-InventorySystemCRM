<?php 
    require '../../connection/database.php';

    //delete supplier
    if (isset($_POST['delete'])) {
        $email = $_POST['email'];

        $queryDelete = "DELETE FROM supplier WHERE email = '$email'";
        $sqlUpdate = mysqli_query($connection, $queryDelete);
        echo "<script>alert('Successfully Deleted')</script>";
        echo "<script> window.location.href ='./supplier.php' </script>";
    }
?>