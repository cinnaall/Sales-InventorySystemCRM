<?php 
require '../../connection/database.php';

$output = '';

if (isset($_POST['export_excel'])){
    $sql = "SELECT * FROM supplier INNER JOIN product ON supplier.supplier_id = product.supplier_id ORDER BY category";
    $result = mysqli_query($connection, $sql);
    
    if(mysqli_num_rows($result) >0){
        $output .= ' 
            <table class="table" border="1">
                <tr>
                    <th>Model</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Quantity</th>
                    <th>Price per Unit</th>
                    <th>Price Description</th>
                </tr>
            ';

            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>'.$row['model'].'</td>
                        <td>'.$row['category'].'</td>
                        <td>'.$row['supplier_name'].'</td>
                        <td>'.$row['quantity'].'</td>
                        <td>'.$row['srp'].'</td>
                        <td>'.$row['product_description'].'</td>
                    </tr>
                ';
            }

            $output .= '</table>';

            header('Content-Type: application/xls');
            header("Content-Disposition: attachment; filename=products.xls");
            echo $output;
    }
}

?>