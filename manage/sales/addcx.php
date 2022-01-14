<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./salescreate.php" method="post">
        <div class="d-flex">
            <select class="form-select" name="customer_id">
                <option selected>Select Customer</option>
                <?php
                $querySupplier = "SELECT * FROM customer";
                $supplierList = mysqli_query($connection, $querySupplier);
                while ($row = mysqli_fetch_array($supplierList)) {  ?>
                    <option value="<?php echo $row['customer_id'] ?>"><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></option>
                <?php  } ?>
            </select>

            <Button value="popcx" type="submit" class="btn btn-info" style="margin-left: 1rem;" /><i class="icon-plus-sign icon-large"></i> Add</button>
        </div>
    </form>
</body>

</html>