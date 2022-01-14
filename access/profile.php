<?php
require('../auth/session.php');
require('../vendor/autoload.php');
require('../connection/database.php');


if ($_SESSION["access"] == "Admin") {
    $welcome = "Welcome" . " " . $_SESSION["access"] . " " . $_SESSION["email"];
    $isAdmin = true;
} else {
    $welcome = "Welcome " . $_SESSION["email"];
    $isAdmin = false;
}

//profile avatar
use YoHang88\LetterAvatar\LetterAvatar;

$avatar = new LetterAvatar($_SESSION['email'], 'circle', 150);

//profile details
$prof = $_SESSION["email"];
$queryUsers = "SELECT * FROM register WHERE email = '$prof'";
$profdetail = mysqli_query($connection, $queryUsers);

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
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
    <title>Profile | RVT</title>
</head>

<body>
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #16213E;">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../../index.php">RONGELVIL TRADING</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="mt-4">
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
                                <a class="nav-link active mt-2" aria-current="page" href="../index.php">
                                    <i class="bi bi-speedometer2 fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Dashboard
                                </a>
                            </li>
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Management</span>
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="../manage/sales/sales.php">
                                    <i class="bi bi-graph-up-arrow fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Sales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../manage/customers/customer.php">
                                    <i class="bi bi-people fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Customers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../manage/products/product.php">
                                    <i class="bi bi-cart4 fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../manage/suppliers/supplier.php">
                                    <i class="bi bi-shop-window fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Suppliers
                                </a>
                            </li>
                        </ul>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Accessibility</span>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="./profile.php">
                                    <i class="bi bi-person fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Profile Information
                                </a>
                            </li>
                            <?php if ($isAdmin) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="../admin/users.php">
                                        <i class="bi bi-gear fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; User Management
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link" href="../auth/logout.php">
                                    <span data-feather="file-text"></span>
                                    <i class="bi bi-box-arrow-right fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Accessibility</li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile Information</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Profile Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 text-center my-auto">
                                            <img src="<?php echo $avatar ?>" />
                                        </div>
                                        <?php while ($row = mysqli_fetch_array($profdetail)) {  ?>
                                            <div class="col-lg-2 fs-6 fw-normal">
                                                <p>First Name</p>
                                                <hr>
                                                <p>Last Name</p>
                                                <hr>
                                                <p>Company Role</p>
                                                <hr>
                                                <p>Contact Number</p>
                                                <hr>
                                                <p>Email</p>
                                            </div>
                                            <div class="col-lg-5 fs-6">
                                                <p><?php echo $row['first_name'] ?></p>
                                                <hr>
                                                <p><?php echo $row['last_name'] ?></p>
                                                <hr>
                                                <p><?php echo $row['roles'] ?></p>
                                                <hr>
                                                <p><?php echo $row['contact'] ?></p>
                                                <hr>
                                                <p><?php echo $row['email'] ?></p>
                                            </div>
                                        <?php  } ?>
                                        <div class="col-lg-3 fs-6 text-center">
                                            <img src="../img/time.png" alt="" class="img-fluid" width="200"><br>
                                            <?php
                                            echo "Today is " . date("l") . ", " . date("m/d/y") . "<br>";
                                            date_default_timezone_set("Asia/Manila");
                                            echo "The time is " . date("h:i:sa");
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center mt-3">
                                <p><i class="bi bi-info-circle-fill"></i>&nbsp; For concerns and issues about the system, please send an <a href="mailto:admin@gmail.com">email</a> to notify the Administrator.</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>