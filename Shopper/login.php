<?php
session_start();
include("db_connect.php");

if (isset($_POST['login'])) {

    // username and password sent from form  
    $uemail = $_POST['name'];
    $password = $_POST['password'];

    if (!empty($uemail) && !empty($password)) {
        $sql = "SELECT s_id FROM shop WHERE s_name = '$uemail' AND pass = $password;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $_SESSION["uid"] = $row['u_id'];
            header("location: shopper.php");
            exit();
        } else {
            
            echo '<script>alert(" Entar a valid username & password")</script>';
        }
    } else {
        echo "<h3>Please enter username or password<h3>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dhuye Daw | Login</title>
    <link rel="stylesheet" type="text/css" href="lp.css">
    <style>
        .suser.btn{
            background-color:#56C5DB; /* Green */
  border: 1px solid #56C5DB;
  border-radius: 12px;
  color: white;
  margin-top: 15px;
  
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-bl
        }
    </style>
</head>

<body>

    <div class="login-section">
        <div class="form">
            <h1>Dhuye Daw</h1>
            <form method="post" action="login.php">
                <span class="emailS">
                    <label for="email_n">Enter Your name</label><br>
                    <input type="text" id="email" name="name" placeholder="Name"><br>
                </span>
                <span class="passwordS">
                    <label for="pass">Enter Your Password</label><br>
                    <input type="Password" id="pass" name="password" placeholder="Password"><br>
                </span>
                <button class="btn" name="login">Log In</button>
            </form>

            <p class="forgot-password"><a href="#">Forgot Passwprd?</a> </p>

            <p class="create-new"><a href="create.php">Create New Account</a></p>
        </div>

    </div>

    <div class='suser'>
    <label for="loading">Enter shopper id to load orders</label><br>
    <input type="text" id="email" name="name" placeholder="na">
    <button class='btn'>Load Orders</button>
    </div>

</body>

</html>