<?php 
    require '../../connection/database.php';

    //create supplier
    if (isset($_POST['create'])) {
        $model = $_POST['model'];
        $category = $_POST['category'];
        $supplier_id = $_POST['supplier_id'];
        $product_description = $_POST['product_description'];
        $quantity = $_POST['quantity'];
        $srp = $_POST['srp'];
        

        //storing image to server
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0) {
                if ($fileSize < 500000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = './uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName ,$fileDestination);
                } else {
                    echo "Your file is too big. Maximum file size: 500mb.";
                }
            } else {
                echo "There was an error uploading your file. Please try again.";
            }
        } else {
            echo "You cannot upload files of this type";
        }

        //insert data to database
        $queryCreate = "INSERT INTO product (model, category, supplier_id, product_description, quantity, srp, image_url) VALUES ('$model', '$category', '$supplier_id', '$product_description', '$quantity', '$srp', '$fileNameNew')";
        $sqlCreate = mysqli_query($connection, $queryCreate) || trigger_error('Query Failed ' . $queryCreate);
        echo "<script> alert('Successfully created') </script>";
        echo "<script> window.location.href ='./productcreate.php' </script>";

        
    } else {
        echo "<script> window.location.href= './productcreate.php' </script>";
    }

    
?>