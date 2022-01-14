<?php
require('../../auth/session.php');
require('./retreive.php');

if ($_SESSION["access"] == "Admin") {
    $isAdmin = true;
} else {
    $isAdmin = false;
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Sales | RVT</title>
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
                            <a class="nav-link" href="./sales.php">
                                <i class="bi bi-graph-up-arrow fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Sales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../customers/customer.php">
                                <i class="bi bi-people fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp; Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../products/product.php">
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
                <div class="row">
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="../../index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Management</li>
                                        <li class="breadcrumb-item active" aria-current="page">Sales</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <h3>Sales</h3>
                                    <a href="./salescreate.php" class="btn btn-primary ms-auto"><i class="bi bi-plus-lg"></i> Add Sales Invoice</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <button onclick="window.print()" class="btn btn-transparent btn-sm ms-auto" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" width="100"><i class="bi bi-printer"></i></button>
                                    <form action="./excel.php" method="post">
                                        <button type="submit" name="export_excel" class="btn btn-sm btn-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Export to Excel"><i class="bi bi-upload"></i></button>
                                    </form>
                                </div>
                                <div class="table-responsive mt-2">
                                    <table id="saletab" class="table table-bordered align-middle table-hover">
                                        <thead class="table-light">
                                            <th width="2%" class="text-center"><input type="checkbox" onclick="toggle(this)"></th>
                                            <th><a style="text-decoration: none;" href="?column=invoice_no&sort=<?php echo $sort ?>">Invoice No.</a></th>
                                            <th><a style="text-decoration: none;" href="?column=customer_id&sort=<?php echo $sort ?>">Customer Name</a></th>
                                            <th><a style="text-decoration: none;" href="?column=address&sort=<?php echo $sort ?>">Address</a></th>
                                            <th><a style="text-decoration: none;" href="?column=total_amount&sort=<?php echo $sort ?>">Total Amount</a></th>
                                            <th><a style="text-decoration: none;" href="?column=status&sort=<?php echo $sort ?>">Status</a></th>
                                            <th width="5%">Actions</th>
                                        </thead>
                                        <?php while ($row = mysqli_fetch_array($salesList)) {  ?>
                                            <tr>
                                                <td><input type="checkbox" name="sale" value="<?php echo $row['sales_id'] ?>"></td>
                                                <td><?php echo $row['invoice_no'] ?></td>
                                                <td><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                                                <td><?php echo $row['shipping_add'] ?></td>
                                                <td><?php echo $row['total_amount'] ?></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td class="d-flex flex-row">
                                                    <form action="./salesupdate.php" method="post">
                                                        <button class="btn btn-sm btn-transparent" type="submit" value="edit" name="edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                                        <input type="hidden" name="sales_id" value="<?php echo $row['sales_id'] ?>">
                                                    </form> &nbsp;
                                                    <?php if ($isAdmin) { ?>
                                                        <form action="./delete.php" method="post">
                                                            <button class="btn btn-sm btn-transparent" type="submit" value="delete" name="delete" onclick="return confirm('Are you sure you want to delete this user?')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash-fill"></i></button>
                                                            <input type="hidden" name="sales_id" value="<?php echo $row['sales_id'] ?>">
                                                        </form>
                                                    <?php  } ?>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        function toggle(source) {
            checkboxes = document.getElementsByName("sale");
            for (var i = 0, val = checkboxes.length; i < val; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#saletab').DataTable({
                "pagingType": "full_numbers"
            });
        });
    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>