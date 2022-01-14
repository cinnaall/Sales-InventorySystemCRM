<?php 
    require '../../connection/database.php';

    //create customer
    if (isset($_POST['create'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $company_name = $_POST['company_name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];

        $queryCreate = "INSERT INTO customer (first_name, last_name, company_name, email, contact, address) VALUES ('$first_name', '$last_name', '$company_name', '$email', '$contact', '$address')";
        $sqlCreate = mysqli_query($connection, $queryCreate) || trigger_error('Query Failed ' . $queryCreate);
        echo "<script> alert('Successfully created') </script>";
        echo "<script> window.location.href ='./customercreate.php' </script>";
    } else {
        echo "<script> window.location.href= './customercreate.php' </script>";
    }
?>