<?php
    require '../../connection/database.php';
    
    if($_REQUEST['cxid']) {
        $sql = "SELECT customer_id, address
        FROM customer 
        WHERE customer_id='".$_REQUEST['cxid']."'";
        $resultSet = mysqli_query($connection, $sql);	
        $cxData = array();
        while( $emp = mysqli_fetch_assoc($resultSet) ) {
            $cxData = $emp;
        }
        echo json_encode($cxData);
    } else {
        echo 0;	
    }
?>