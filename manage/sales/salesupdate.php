<?php
require('../../auth/session.php');
require '../../connection/database.php';

if ($_SESSION["access"] == "Admin") {
    $isAdmin = true;
} else {
    $isAdmin = false;
}

//update supplier
if (isset($_POST['edit'])) {
    $sales_id = $_POST['sales_id'];

    $queryUsers = "SELECT * FROM customer JOIN sales ON customer.customer_id = sales.customerid JOIN product ON product.product_id = sales.productid WHERE sales_id = '$sales_id'";
    $sqlUpdate = mysqli_query($connection, $queryUsers);
    $row = mysqli_fetch_assoc($sqlUpdate);
}

if (isset($_POST['update'])) {
    $sales_id = $_POST['sales_id'];
    $invoice_no = $_POST['invoice_no'];
    $customerid = $_POST['customerid'];
    $shipping_add = $_POST['shipping_add'];
    $payment_terms = $_POST['payment_terms'];
    $invoice_date = date('Y-m-d', strtotime($_POST['invoice_date']));
    $due_date = date('Y-m-d', strtotime($_POST['due_date']));
    $productid = $_POST['productid'];
    $qty = $_POST['qty'];
    $pre_total = ($_POST['pre_total']);
    $notes = $_POST['notes'];
    $discount_percentage = $_POST['discount_percentage'];
    $discount_amount = ($_POST['discount_amount']);
    $sub_total = ($_POST['sub_total']);
    $vat_amount = ($_POST['vat_amount']);
    $total_amount = ($_POST['total_amount']);
    $status = $_POST['status'];

    $queryUpdate = "UPDATE sales SET invoice_no = '$invoice_no', customerid = '$customerid', shipping_add = '$shipping_add', payment_terms = '$payment_terms', invoice_date = '$invoice_date', due_date = '$due_date', productid = '$productid', qty = '$qty', pre_total = '$pre_total', notes = '$notes', discount_percentage = '$discount_percentage', discount_amount = '$discount_amount', sub_total = '$sub_total', vat_amount = '$vat_amount', total_amount = '$total_amount' WHERE sales_id = $sales_id";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo "<script>alert('Successfully updated')</script>";
    echo "<script> window.location.href ='./sales.php' </script>";
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
    <title>Update Sales Invoice | RVT</title>
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
                                    <li class="breadcrumb-item active" aria-current="page">Update Sales Invoice</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <h3>Update Sales Invoice</h3>
                                <a href="./sales.php" class="btn btn-secondary ms-auto"></i>Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="./salesupdate.php" method="post" class="px-4">
                                <div class="row">
                                    <div class="form-group mt-2">
                                        <input class="form-control" type="hidden" name="sales_id" value="<?php echo $row['sales_id'] ?>">
                                    </div> 
                                    <div class="col-lg-1">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="invoice_no">Invoice No</label>
                                        <input class="form-control" type="number" step="1" min="0" name="invoice_no" value="<?php echo $row['invoice_no'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12"></div>
                                <div class="col-lg-12">
                                    <div class="page-header my-3">
                                        <label class="form-label" for="customerid">Customer</label>
                                        <select id="cxselect" class="form-select" name="customerid">
                                            <option value="" selected="selected">Select Customer</option>
                                            <?php
                                            $queryCxm = "SELECT customer_id, first_name, last_name, address FROM customer";
                                            $customerList = mysqli_query($connection, $queryCxm);
                                            while ($ow = mysqli_fetch_array($customerList)) {  ?>
                                                <option value="<?php echo $ow['customer_id'] ?>" <?php echo ($row['customerid'] == $ow['customer_id']) ? "selected" : " " ?>><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="hidden" id="errorMassage"></div>
                                <div class="col-lg-6">
                                    <p>Billing Address</p>
                                    <p id="cxAddress"><?php echo $row['address'] ?></p>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="shipping_add">Shipping Address</label>
                                    <input class="form-control" type="text" name="shipping_add" placeholder="Enter shipping address" value="<?php echo $row['shipping_add'] ?>">
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mt-2">
                                        <label class="form-label" for="payment_terms">Payment Terms</label>
                                        <select class="form-select" name="payment_terms">
                                            <option selected>Select Terms</option>
                                            <option value="Cash on Delivery / Outright" <?php echo ($row['payment_terms'] == 'Cash on Delivery / Outright') ? "selected" : " " ?>>Cash on Delivery / Outright</option>
                                            <option value="Installment - 6 Months" <?php echo ($row['payment_terms'] == 'Installment - 6 Months') ? "selected" : " " ?>>Installment - 6 Months</option>
                                            <option value="Installment - 12 Months" <?php echo ($row['payment_terms'] == 'Installment - 12 Months') ? "selected" : " " ?>>Installment - 12 Months</option>
                                            <option value="Installment - 24 Months" <?php echo ($row['payment_terms'] == 'Installment - 24 Months') ? "selected" : " " ?>>Installment - 24 Months</option>
                                            <option value="Installment - 36 Months" <?php echo ($row['payment_terms'] == 'Installment - 36 Months') ? "selected" : " " ?>>Installment - 36 Months</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mt-2">
                                        <label class="form-label " for="invoice_date">Invoice Date</label>
                                        <input class="form-control" type="date" name="invoice_date" value="<?php echo $row['invoice_date'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mt-2">
                                        <label class="form-label " for="due_date">Due Date</label>
                                        <input class="form-control " type="date" name="due_date" value="<?php echo $row['due_date'] ?>">
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
                                                    while ($wow = mysqli_fetch_array($productList)) {  ?>
                                                        <option value="<?php echo $wow['product_id'] ?>" <?php echo ($row['productid'] == $wow['product_id']) ? "selected" : " " ?>><?php echo $row['model'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input class="form-control" type="number" name="qty" min="0" placeholder="Enter Quantity" id="quantity" value="<?php echo $row['qty'] ?>">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" id="price" readonly value="<?php echo $row['srp'] ?>">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" readonly id="totalamount" name="pre_total" value="<?php echo $row['pre_total'] ?>">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <label for="notes">Additional Notes</label><br>
                                    <textarea class="form-control text-break" name="notes" cols="30" rows="5"><?php echo $row['notes'] ?></textarea>
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
                                    <input class="form-control" type="number" min="0" name="discount_percentage" placeholder="Enter Discount %" id="discount" value="<?php echo $row['discount_percentage'] ?>">
                                    <input class="form-control" type="text" id="distotal" name="discount_amount" readonly value="<?php echo $row['discount_amount'] ?>">
                                    <input class="form-control " type="text" id="subtotal" name="sub_total" readonly value="<?php echo $row['sub_total'] ?>">
                                    <input class="form-control" type="text" id="taxvat" name="vat_amount" readonly value="<?php echo $row['vat_amount'] ?>">
                                    <input class="form-control" type="text" id="total" name="total_amount" readonly value="<?php echo $row['total_amount'] ?>">
                                    <select class="form-select" name="status">
                                        <option value="" selected>Select Status</option>
                                        <option value="Paid" <?php echo ($row['status'] == 'Paid') ? "selected" : " " ?>>Paid</option>
                                        <option value="Unpaid" <?php echo ($row['status'] == 'Unpaid') ? "selected" : " " ?>>Unpaid</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 text-end">
                                    <button class="btn btn-primary my-4" style="width: 14rem;" type="submit" name="update">Save</button>
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