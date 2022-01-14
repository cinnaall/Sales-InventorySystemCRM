<?php 
require '../../connection/database.php';

$output = '';

if (isset($_POST['export_excel'])){
    $sql = "SELECT * FROM customer ORDER BY first_name ASC";
    $result = mysqli_query($connection, $sql);
    
    if(mysqli_num_rows($result) >0){
        $output .= ' 
            <table class="table" border="1">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                </tr>
            ';

            while ($row = mysqli_fetch_array($result)) {
                $output .= '
                    <tr>
                        <td>'.$row['first_name'].'</td>
                        <td>'.$row['last_name'].'</td>
                        <td>'.$row['company_name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['contact'].'</td>
                        <td>'.$row['address'].'</td>
                    </tr>
                ';
            }

            $output .= '</table>';

            header('Content-Type: application/xls');
            header("Content-Disposition: attachment; filename=customer.xls");
            echo $output;
    }
}

?>