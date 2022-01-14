<?php 
require '../../connection/database.php';

$output = '';

if (isset($_POST['export_excel'])){
    $sql = "SELECT * FROM supplier ORDER BY supplier_name ASC";
    $result = mysqli_query($connection, $sql);
    
    if(mysqli_num_rows($result) >0){
        $output .= ' 
            <table class="table" border="1">
                <tr>
                    <th>Supplier Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Address</th>
                </tr>
            ';

            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>'.$row['supplier_name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['contact'].'</td>
                        <td>'.$row['address'].'</td>
                    </tr>
                ';
            }

            $output .= '</table>';

            header('Content-Type: application/xls');
            header("Content-Disposition: attachment; filename=suppliers.xls");
            echo $output;
    }
}

?>