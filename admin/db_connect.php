<?php

$username = "root";
$password = "";
$servername = "localhost";
$db_name = "dhuye_daw";

$conn = new mysqli($servername,$username,$password,$db_name);

// if ($conn -> connect_error){
//     die("Connection Failed ". $conn->connect_error);
// }
// else{
//     echo "connected with database";
// }
if($conn){
    // echo "Connecter with db";
}
else{
    echo "Error";
}

?>