<?php 
require '../../connection/database.php';

$output = '';

if (isset($_POST['export_excel'])){
    $sql = "SELECT * FROM customer JOIN sales ON customer.customer_id = sales.customerid JOIN product ON product.product_id = sales.productid ORDER BY invoice_no";
    $result = mysqli_query($connection, $sql);
    
    if(mysqli_num_rows($result) >0){
        $output .= ' 
            <table class="table" border="1">
                <tr>
                    <th>Invoice No</th>
                    <th>Customer ID</th>
                    <th>Shipping Address</th>
                    <th>Payment Terms</th>
                    <th>Invoice Date</th>
                    <th>Due Date</th>
                    <th>Model</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Notes</th>
                    <th>Discount Percentage</th>
                    <th>Discount Amount</th>
                    <th>Subtotal</th>
                    <th>VAT Amount</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                </tr>
            ';

            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>'.$row['invoice_no'].'</td>
                        <td>'.$row['first_name'].' '.$row['last_name'].'</td>
                        <td>'.$row['shipping_add'].'</td>
                        <td>'.$row['payment_terms'].'</td>
                        <td>'.$row['invoice_date'].'</td>
                        <td>'.$row['due_date'].'</td>
                        <td>'.$row['model'].'</td>
                        <td>'.$row['qty'].'</td>
                        <td>'.$row['pre_total'].'</td>
                        <td>'.$row['notes'].'</td>
                        <td>'.$row['discount_percentage'].'</td>
                        <td>'.$row['discount_amount'].'</td>
                        <td>'.$row['sub_total'].'</td>
                        <td>'.$row['vat_amount'].'</td>
                        <td>'.$row['total_amount'].'</td>
                        <td>'.$row['status'].'</td>
                    </tr>
                ';
            }

            $output .= '</table>';

            header('Content-Type: application/xls');
            header("Content-Disposition: attachment; filename=sales.xls");
            echo $output;
    }
}

?>