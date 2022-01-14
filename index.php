<?php
require('./auth/session.php');

if ($_SESSION["access"] == "Admin") {
    $welcome = "Welcome" . " " . $_SESSION["access"] . " " . $_SESSION["email"];

    $isAdmin = true;
} else {
    $welcome = "Welcome " . $_SESSION["email"];

    $isAdmin = false;
}

require './connection/database.php';
$querySale1 = "SELECT SUM(total_amount) AS PaidSalesCount FROM sales WHERE status = 'Paid'";
$salepa = mysqli_query($connection, $querySale1);

$querySale2 = "SELECT SUM(total_amount) AS UnpaidSalesCount FROM sales WHERE status = 'Unpaid'";
$saleun = mysqli_query($connection, $querySale2);

$querySup = "SELECT COUNT(supplier_id) AS SupplierCount FROM supplier";
$sup = mysqli_query($connection, $querySup);

$queryCx = "SELECT COUNT(customer_id) AS CustomerCount FROM customer";
$cx = mysqli_query($connection, $queryCx);

$queryProd = "SELECT COUNT(product_id) AS ProductCount FROM product";
$prod = mysqli_query($connection, $queryProd);
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
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png">
    <link rel="stylesheet" href="/style.css">
    <title>Dashboard | RVT</title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #16213E;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="./index.php">RONGELVIL TRADING</a>
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
                            <a class="nav-link active mt-2" aria-current="page" href="./index.php">
                                <i class="bi bi-speedometer2 fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Dashboard
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Management</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="./manage/sales/sales.php">
                                <i class="bi bi-graph-up-arrow fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Sales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./manage/customers/customer.php">
                                <i class="bi bi-people fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./manage/products/product.php">
                                <i class="bi bi-cart4 fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./manage/suppliers/supplier.php">
                                <i class="bi bi-shop-window fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Suppliers
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Accessibility</span>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="./access/profile.php">
                                <i class="bi bi-person fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Profile Information
                            </a>
                        </li>
                        <?php if ($isAdmin) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="./admin/users.php">
                                    <i class="bi bi-gear fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; User Management
                                </a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./auth/logout.php">
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
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3><?php echo $welcome ?></h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card bg-primary mb-3 mx-auto" style="max-width: 17rem;">
                                        <div class="card-body text-center">
                                            <div>
                                                <?php while ($row = mysqli_fetch_array($salepa)) {  ?>
                                                    <p>Status: Paid</p>
                                                    <h1>Php <?php echo $row['PaidSalesCount'] ?></h1>
                                                <?php  } ?>
                                            </div>
                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                    <div class="card bg-primary mb-3 mx-auto" style="max-width: 17rem;">
                                        <div class="card-body text-center">
                                            <div>
                                                <?php while ($row = mysqli_fetch_array($saleun)) {  ?>
                                                    <p>Status: Unpaid</p>
                                                    <h1>Php <?php echo $row['UnpaidSalesCount'] ?></h1>
                                                <?php  } ?>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h5 class="card-title text-dark">Sales</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card bg-warning mb-3 mx-auto" style="max-width: 15rem;">
                                        <div class="card-body text-center">
                                            <p>Total Number of Products</p>
                                            <?php while ($row = mysqli_fetch_array($prod)) {  ?>
                                                <h1><?php echo $row['ProductCount'] ?></h1>
                                            <?php  } ?>
                                        </div>
                                        <div class="card-footer">
                                            <h5 class="card-title">Products</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card bg-success mb-3 mx-auto" style="max-width: 15rem;">
                                        <div class="card-body text-center">
                                            <p>Total Number of Customers</p>
                                            <?php while ($row = mysqli_fetch_array($cx)) {  ?>
                                                <h1><?php echo $row['CustomerCount'] ?></h1>
                                            <?php  } ?>
                                        </div>
                                        <div class="card-footer">
                                            <h5 class="card-title">Customers</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card bg-info mb-3 mx-auto" style="max-width: 15rem;">
                                        <div class="card-body text-center">
                                            <p>Total Number of Suppliers</p>
                                            <?php while ($row = mysqli_fetch_array($sup)) {  ?>
                                                <h1><?php echo $row['SupplierCount'] ?></h1>
                                            <?php  } ?>
                                        </div>
                                        <div class="card-footer">
                                            <h5 class="card-title">Suppliers</h5>
                                        </div>
                                    </div>
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