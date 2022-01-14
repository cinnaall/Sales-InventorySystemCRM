<?php 
    require '../../connection/database.php';

    //create customer
    if (isset($_POST['create'])) {
        $invoice_no = $_POST['invoice_no'];
        $customerid = $_POST['customerid'];
        $shipping_add = $_POST['shipping_add'];
        $payment_terms = $_POST['payment_terms'];
        $invoice_date = date('Y-m-d', strtotime($_POST['invoice_date']));
        $due_date = date('Y-m-d', strtotime($_POST['due_date']));
        $productid = $_POST['productid'];
        $qty = $_POST['qty'];
        $pre_total = $_POST['pre_total'];
        $notes = $_POST['notes'];
        $discount_percentage = $_POST['discount_percentage'];
        $discount_amount = $_POST['discount_amount'];
        $sub_total = $_POST['sub_total'];
        $vat_amount = $_POST['vat_amount'];
        $total_amount = $_POST['total_amount'];
        $status = $_POST['status'];
        
        $queryCreate = "INSERT INTO sales (invoice_no, customerid, shipping_add, payment_terms, invoice_date, due_date, productid, qty, pre_total, notes, discount_percentage, discount_amount, sub_total, vat_amount, total_amount, status) VALUES ('$invoice_no', '$customerid', '$shipping_add', '$payment_terms', '$invoice_date', '$due_date', '$productid', '$qty', '$pre_total', '$notes', '$discount_percentage', '$discount_amount', '$sub_total', '$vat_amount', '$total_amount', '$status')";
        $sqlCreate = mysqli_query($connection, $queryCreate) || trigger_error('Query Failed ' . $queryCreate);

        echo "<script> alert('Successfully created') </script>";
        echo "<script> window.location.href ='./salescreate.php' </script>";
    } else {
        echo "<script> window.location.href= './salescreate.php' </script>";
    }
?>