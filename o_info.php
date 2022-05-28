<?php
session_start();
include "db_connect.php";

$sql = "SELECT * FROM order_data WHERE o_progress IS NULL AND d_location='Malibagh'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $oid = $row['o_id'];
    $cid = $row['c_id'];
    $sid = $row['s_id'];
    $pman = $row['pickman_id'];
    $droid = $row['dropup_id'];
    $area = $row['area'];
    $location = $row['d_location'];
    $phn = $row['c_contact'];
    $op = $row['o_progress'];
    $bill = $row['bill'];
    $dtype = $row['d_type'];
    $ord = $row['ord_date'];
    $del = $row['del_date'];

} else {
    echo "error at userpage";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <h1><center>Orders</center></h1>

    <table border : 1px, width = "100%">
        <thead>
            <tr>
                <td>Order id</td>
                <td>Customer id</td>
                <td>Shop id id</td>
                <td>Pickup person id</td>
                <td>Dropup person id</td>
                <td>Area</td>
                <td>Loaction</td>
                <td>Phone</td>
                <td>Order progress</td>
                <td>Bill</td>
                <td>Delivery type</td>
                <td>Order date</td>
                <td>Delivery date</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo "$oid "?></td>
                <td><?php echo "$cid "?></td>
                <td><?php echo "$sid "?></td>
                <td><?php echo "$pman "?></td>
                <td><?php echo "$droid "?></td>
                <td><?php echo "$area "?></td>
                <td><?php echo "$location "?></td>
                <td><?php echo "$phn "?></td>
                <td><?php echo "$op "?></td>
                <td><?php echo "$bill "?></td>
                <td><?php echo "$dtype "?></td>
                <td><?php echo "$ord "?></td>
                <td><?php echo "$del"?></td>

            </tr>
        </tbody>
    </table>
    
</body>
</html>