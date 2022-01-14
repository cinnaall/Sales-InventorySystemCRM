<?php 
    require '../../connection/database.php';

    //create supplier
    if (isset($_POST['create'])) {
        $supplier_name = $_POST['supplier_name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];

        $queryCreate = "INSERT INTO supplier (supplier_name, email, contact, address) VALUES ('$supplier_name', '$email', '$contact', '$address')";
        $sqlCreate = mysqli_query($connection, $queryCreate) || trigger_error('Query Failed ' . $queryCreate);
        echo "<script> alert('Successfully created') </script>";
        echo "<script> window.location.href ='./suppliercreate.php' </script>";
    } else {
        echo "<script> window.location.href= './suppliercreate.php' </script>";
    }
?>