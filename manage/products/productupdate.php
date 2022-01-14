<?php
require('../../auth/session.php');

if ($_SESSION["access"] == "Admin") {
    $isAdmin = true;
} else {
    $isAdmin = false;
}

require '../../connection/database.php';
//update supplier
if (isset($_POST['edit'])) {
    $product_id = $_POST['product_id'];

    $queryProd = "SELECT * FROM product WHERE product_id = '$product_id'";
    $sqlUpdate = mysqli_query($connection, $queryProd);
    $row = mysqli_fetch_assoc($sqlUpdate);
}

if (isset($_POST['update'])) {
    $product_id = $_POST['product_id'];
    $model = $_POST['model'];
    $category = $_POST['category'];
    $supplier_id = $_POST['supplier_id'];
    $product_description = $_POST['product_description'];
    $quantity = $_POST['quantity'];
    $srp = $_POST['srp'];

    $queryUpdate = "UPDATE product SET model = '$model', category = '$category', supplier_id='$supplier_id', product_description ='$product_description', quantity = '$quantity', srp = '$srp' WHERE product_id = $product_id";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);
    echo "<script>alert('Successfully updated')</script>";
    echo "<script> window.location.href ='./product.php' </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" type="image/png" href="../../img/favicon.png">
    <title>Update Product | RVT</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            font-family: "Roboto";
        }
    </style>
</head>

<body>
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #16213E;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../../index.php">RONGELVIL TRADING</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white shadow-sm sidebar collapse">
                <div class="position-sticky pt-3 mx-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <div class="btn-group nav-link" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary w-100 rounded-3" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-plus-lg"></i> New
                                </button>
                                <ul class="dropdown-menu w-75" aria-labelledby="btnGroupDrop1" style="font-size: 0.9rem;">
                                    <li><a class="dropdown-item" href="./manage/sales/salescreate.php">Sales Invoice</a></li>
                                    <li><a class="dropdown-item" href="./manage/products/productcreate.php">Product</a></li>
                                    <li><a class="dropdown-item" href="./manage/customers/customercreate.php">Customer</a></li>
                                    <li><a class="dropdown-item" href="./manage/suppliers/suppliercreate.php">Supplier</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mt-2" aria-current="page" href="../../index.php">
                                <i class="bi bi-speedometer2 fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Dashboard
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Management</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="../sales/sales.php">
                                <i class="bi bi-graph-up-arrow fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Sales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../customers/customer.php">
                                <i class="bi bi-people fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./product.php">
                                <i class="bi bi-cart4 fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../suppliers/supplier.php">
                                <i class="bi bi-shop-window fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Suppliers
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Accessibility</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="../../access/profile.php">
                                <i class="bi bi-person fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Profile Information
                            </a>
                        </li>
                        <?php if ($isAdmin) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../../admin/users.php">
                                    <i class="bi bi-gear fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; User Management
                                </a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../../auth/logout.php">
                                <span data-feather="file-text"></span>
                                <i class="bi bi-box-arrow-right fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Management</li>
                                    <li class="breadcrumb-item"><a href="./product.php">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <h3>Update Product</h3>
                                <a href="./product.php" class="btn btn-secondary ms-auto"></i>Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="./productupdate.php" method="post" class="row">
                                        <div class="lead">Product Information</div>
                                        <div class="form-group mt-2">
                                            <input class="form-control" type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="model">Model</label>
                                            <input class="form-control" type="text" name="model" placeholder="Enter Model" value="<?php echo $row['model'] ?>">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-select" name="category">
                                                <option selected>Select Category</option>
                                                <option value="Graphic Arts Printer" <?php echo ($row['category'] == 'Graphic Arts Printer') ? "selected" : " " ?>>Graphic Arts Printer</option>
                                                <option value="Office Printer / Scanner / Copier" <?php echo ($row['category'] == 'Office Printer / Scanner / Copier') ? "selected" : " " ?>>Office Printer / Scanner / Copier</option>
                                                <option value="Digital Duplicator" <?php echo ($row['category'] == 'Digital Duplicator') ? "selected" : " " ?>>Digital Duplicator</option>
                                                <option value="ID Card Printer" <?php echo ($row['category'] == 'ID Card Printer') ? "selected" : " " ?>>ID Card Printer</option>
                                                <option value="Xerox DocuMate Scanners" <?php echo ($row['category'] == 'Xerox DocuMate Scanners') ? "selected" : " " ?>>Xerox DocuMate Scanners</option>
                                                <option value="Binding Machine" <?php echo ($row['category'] == 'Binding Machine') ? "selected" : " " ?>>Binding Machine</option>
                                                <option value="Shredder" <?php echo ($row['category'] == 'Shredder') ? "selected" : " " ?>>Shredder</option>
                                                <option value="Large Format Printer" <?php echo ($row['category'] == 'Large Format Printer') ? "selected" : " " ?>>Large Format Printer</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="supplier_id" class="form-label">Supplier</label>
                                            <select class="form-select" name="supplier_id">
                                                <option selected>Select Supplier</option>
                                                <?php
                                                $querySupplier = "SELECT * FROM supplier";
                                                $supplierList = mysqli_query($connection, $querySupplier);
                                                while ($sup = mysqli_fetch_array($supplierList)) {  ?>
                                                    <option value="<?php echo $sup['supplier_id'] ?>" <?php echo ($row['supplier_id'] == $sup['supplier_id']) ? "selected" : " " ?>><?php echo $sup['supplier_name'] ?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="product_description">Product Description</label>
                                            <textarea class="form-control" name="product_description" id="" cols="30" rows="10"><?php echo $row['product_description'] ?></textarea>
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="quantity">Product Quantity</label>
                                            <input class="form-control" type="number" step="1" min="0" name="quantity" placeholder="Enter Product Quantity" value="<?php echo $row['quantity'] ?>">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="srp">SRP</label>
                                            <input class="form-control" type="number" step="any" min="0" name="srp" placeholder="Enter SRP" value="<?php echo $row['srp'] ?>">
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <button class="btn btn-primary" type="submit" name="update">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6 text-center my-auto">
                                    <img src="../../img/pro2.png" alt="supplier" class="img-fluid" width="600">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>