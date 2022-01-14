<?php
require('../../auth/session.php');
require '../../connection/database.php';

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Create Sales Invoice | RVT</title>
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
                <div class="mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../../index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Management</li>
                                    <li class="breadcrumb-item"><a href="./sales.php">Sales</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Sales Invoice</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <h3>Create Sales Invoice</h3>
                                <a href="./sales.php" class="btn btn-secondary ms-auto"></i>Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="./create.php" method="post" class="px-4">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="invoice_no">Invoice No</label>
                                            <input class="form-control" type="number" step="1" min="0" name="invoice_no" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-12">
                                        <div class="page-header my-3">
                                            <label class="form-label" for="customerid">Customer</label>
                                            <select id="cxselect" class="form-select" name="customerid">
                                                <option value="" selected="selected">Select Customer</option>
                                                <?php
                                                $querySupplier = "SELECT customer_id, first_name, last_name, address FROM customer";
                                                $supplierList = mysqli_query($connection, $querySupplier);
                                                while ($row = mysqli_fetch_assoc($supplierList)) {  ?>
                                                    <option value="<?php echo $row['customer_id'] ?>"><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="hidden" id="errorMassage"></div>
                                    <div class="col-lg-6">
                                        <p>Billing Address</p>
                                        <p id="cxAddress"></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label" for="shipping_add">Shipping Address</label>
                                        <input class="form-control" type="text" name="shipping_add" placeholder="Enter shipping address" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mt-2">
                                            <label class="form-label" for="payment_terms">Payment Terms</label>
                                            <select class="form-select" name="payment_terms">
                                                <option selected>Select Terms</option>
                                                <option value="Cash on Delivery / Outright">Cash on Delivery / Outright</option>
                                                <option value="Installment - 6 Months">Installment - 6 Months</option>
                                                <option value="Installment - 12 Months">Installment - 12 Months</option>
                                                <option value="Installment - 24 Months">Installment - 24 Months</option>
                                                <option value="Installment - 36 Months">Installment - 36 Months</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mt-2">
                                            <label class="form-label " for="invoice_date">Invoice Date</label>
                                            <input class="form-control" type="date" name="invoice_date" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group mt-2">
                                            <label class="form-label " for="due_date">Due Date</label>
                                            <input class="form-control " type="date" name="due_date" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <hr class="my-5">
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table table-bordered">
                                            <thead class="bg-light">
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Price per Unit</th>
                                                <th>SubTotal</th>
                                            </thead>
                                            <tr>
                                                <td style="width: 40%;">
                                                    <select class="form-select" name="productid" id="prodselect">
                                                        <option value=" " selected>Select Product</option>
                                                        <?php
                                                        $queryproduct = "SELECT * FROM product";
                                                        $productList = mysqli_query($connection, $queryproduct);
                                                        while ($row = mysqli_fetch_array($productList)) {  ?>
                                                            <option value="<?php echo $row['product_id'] ?>"><?php echo $row['model'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="number" step="1" min="0" name="qty" placeholder="Enter Quantity" id="quantity" required>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" id="price" readonly>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" id="totalamount" name="pre_total" readonly>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <label for="notes">Additional Notes</label><br>
                                        <textarea class="form-control text-break" name="notes" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="col-lg-4 text-end">
                                        <label class="form-label pt-2" for="subtotal">Discount</label><br>
                                        <label class="form-label pt-2" for="discount">Discount Amount</label><br>
                                        <label class="form-label pt-2" for="subtotal">SubTotal</label><br>
                                        <label class="form-label pt-2" for="taxvat">VAT Amount</label><br>
                                        <label class="form-label pt-2" for="total">Total Amount</label><br>
                                        <label class="form-label pt-2" for="total">Status</label><br>
                                    </div>
                                    <div class="col-lg-2">
                                        <input class="form-control" type="number" step="1" min="0" name="discount_percentage" placeholder="Enter Discount %" id="discount" required>
                                        <input class="form-control" type="text" value=" " id="distotal" name="discount_amount" readonly>
                                        <input class="form-control " type="text" value=" " id="subtotal" name="sub_total" readonly>
                                        <input class="form-control" type="text" value=" " id="taxvat" name="vat_amount" readonly>
                                        <input class="form-control" type="text" value=" " id="total" name="total_amount" readonly>
                                        <select class="form-select" name="status">
                                            <option value="" selected>Select Status</option>
                                            <option value="Paid">Paid</option>
                                            <option value="Unpaid">Unpaid</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 text-end">
                                        <button class="btn btn-primary my-4" style="width: 14rem;" type="submit" name="create">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-4"></div>
                </div>
            </main>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#cxselect").change(function() {
                var id = $(this).find(":selected").val();
                var dataString = 'cxid=' + id;
                $.ajax({
                    url: './getcustomer.php',
                    dataType: "json",
                    data: dataString,
                    cache: false,
                    success: function(cxData) {
                        if (cxData) {
                            $("#errorMassage").addClass('hidden').text("");
                            $("#recordListing").removeClass('hidden');
                            $("#cxId").text(cxData.customer_id);
                            $("#cxFirstName").text(cxData.first_name);
                            $("#cxLastName").text(cxData.last_name);
                            $("#cxAddress").text(cxData.address);
                        } else {
                            $("#recordListing").addClass('hidden');
                            $("#errorMassage").removeClass('hidden').text("No record found!");
                        }
                    }
                });
            })
        });
    </script>

    <script>
        const fwselect = document.querySelector('#prodselect');
        fwselect.onchange = (event) => {
            document.getElementById("quantity").value = "";
            event.preventDefault(); //to prevent the user from submitting 
            // alert(fwselect.value);//show the selected index through alert
            // document.getElementById("price").innerHTML = fwselect.value;

            if (fwselect.value != " ") {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("price").value = this.responseText;
                    }
                };
                a = fwselect.value;
                xmlhttp.open("GET", "price.php?q=" + a, true);
                xmlhttp.send();
            } else {
                document.getElementById("price").innerHTML = " ";
            }
        };
    </script>

    <script>
        const quan = document.querySelector('#quantity');
        quan.onkeyup = (event) => {

            document.getElementById("totalamount").value = document.getElementById("price").value * document.getElementById("quantity").value //- dis.value;

        }

        const dis = document.querySelector('#discount');
        dis.onkeyup = (event) => {
            dc = dis.value / 100;
            document.getElementById("distotal").value = dc * document.getElementById("totalamount").value;
            document.getElementById("subtotal").value = document.getElementById("totalamount").value - document.getElementById("distotal").value;
            document.getElementById("taxvat").value = document.getElementById("subtotal").value * 0.12;
            document.getElementById("total").value = parseFloat(document.getElementById("subtotal").value) + parseFloat(document.getElementById("taxvat").value);
        }
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>