<?php
error_reporting(0);
  session_start();
  include("db_connect.php");
  $uid =  $_SESSION["uid"];
if (isset($_POST['load'])) {

    // username and password sent from form  
  
    
    $sql = "SELECT * FROM order_data WHERE s_id = '$uid';";
    if($result = $conn->query($sql)){
    
        while($row = $result->fetch_assoc()){
            $oid = $row['o_id'];
            $cid = $row['c_id'];
            $shopid = $row['s_id'];
            $pmid = $row['pickman_id'];
            $dropid = $row['dropup_id'];
            $area = $row['area'];
            $location = $row['d_location'];
            $contact = $row['c_contact'];
            $ordprogress= $row['o_progress'];
            $bill = $row['bill'];
            $del_type = $row['d_type'];
        }
}
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
               

            </tr>
        </tbody>
    </table>
    
</body>
</html>