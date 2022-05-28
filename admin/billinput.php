<?php
    include_once 'db_connect.php';
    if(isset($_POST['update'])){

        $u_id = $_POST['id'];
        $elect = $_POST['elect'];
        $gas = $_POST['gas'];
        $wasa = $_POST['wasa'];
        $telephone = $_POST['phone'];
        $televishion = $_POST['televishion'];
        $newspaper = $_POST['newspaper'];
        $month = $_POST['month'];
        $internet = $_POST['internet'];

        if(!empty($u_id) && !empty($elect) && !empty($gas) && !empty($wasa) && !empty($telephone) && !empty($televishion) && !empty($newspaper) && !empty($month)){
            $sql1 = "INSERT INTO gas(month,Amount,user_id) VALUES ('$month', '$gas', '$u_id');";
            $sql2 = "INSERT INTO electricity(month,Amount, user_id) VALUES ('$month','$elect', '$u_id');";
            $sql3 = "INSERT INTO wasa(month, Amount, user_id) VALUES ('$month', '$wasa', '$u_id');";
            $sql4 = "INSERT INTO telephone(month, Amount, user_id) VALUES ('$month', '$telephone', '$u_id');";
            $sql5 = "INSERT INTO televishion(month,Amount,user_id) VALUES ('$month', '$televishion', '$u_id');";
            $sql6 = "INSERT INTO newspaper(month, Amount,user_id) VALUES ('$month', '$newspaper', '$u_id');";
            $sql7 = "INSERT INTO internet(month, Amount, user_id) VALUES ('$month', '$internet', '$u_id');";
            $result1 = $conn->query($sql1);
            $result2 = $conn->query($sql2);
            $result3 = $conn->query($sql3);
            $result4 = $conn->query($sql4);
            $result5 = $conn->query($sql5);
            $result6 = $conn->query($sql6);
            $result7 = $conn->query($sql7);

            if ($result1 === TRUE) {
                //header("Location: index.php");
                echo "gas entry successful";
            }
            else{
                echo "Error: " . $sql1 . "<br>" . $conn->error;
                }
            if ($result2 == TRUE) {
            
                echo "electricity entry successful";
            }
            else{
                echo "Error: " . $sql2 . "<br>" . $conn->error;
                }
            if ($result3 == TRUE) {
            
                echo "wasa entry successful";
            }
            else{
                echo "Error: " . $sql3 . "<br>" . $conn->error;
                }
            if ($result4 == TRUE) {
            
                echo "telephone entry successful";
            }
            else{
                echo "Error: " . $sql4 . "<br>" . $conn->error;
                }
            if ($result5 == TRUE) {
            
                echo "televishion entry successful";
            }
            else{
                echo "Error: " . $sql5 . "<br>" . $conn->error;
                }
            if ($result6 == TRUE) {
            
                echo "newspaper entry successful";
            }
            else{
                echo "Error: " . $sql6 . "<br>" . $conn->error;
                }
            if ($result7 == TRUE) {
            
                echo "internet entry successful";
            }
            else{
            echo "Error: " . $sql7 . "<br>" . $conn->error;
            }
        }else{
           echo "Please...Enter all the fields"; 
        }
    }
    if(isset($_POST['sum'])){

        $u_id = $_POST['id'];
        $elect = $_POST['elect'];
        $gas = $_POST['gas'];
        $wasa = $_POST['wasa'];
        $telephone = $_POST['phone'];
        $televishion = $_POST['televishion'];
        $newspaper = $_POST['newspaper'];
        $month = $_POST['month'];
        $internet = $_POST['internet'];

        if(!empty($u_id) && !empty($elect) && !empty($gas) && !empty($wasa) && !empty($telephone) && !empty($televishion) && !empty($newspaper) && !empty($month)){
            $sql8 = "INSERT INTO bill(u_id,amount,month)
            SELECT e.user_id,(e.Amount+g.Amount+intr.Amount+np.Amount+tl.Amount+tv.Amount+ws.Amount) AS totalamount,e.month
            FROM electricity e
            JOIN gas g
            ON e.user_id = g.user_id
            JOIN internet intr
            ON e.user_id = intr.user_id
            JOIN newspaper np
            ON e.user_id = np.user_id 
            JOIN telephone tl
            ON e.user_id = tl.user_id
            JOIN televishion tv
            ON e.user_id = tv.user_id
            JOIN wasa ws
            ON e.user_id = ws.user_id;";

            $ret = $conn->query($sql8);
            if ($ret == TRUE) {
            
                echo "Total entry successful";
            }
            else{
                echo "Error: " . $sql8 . "<br>" . $conn->error;
                }
        }
        else{
            echo "Please...Enter all the fields"; 
         }
        }



        session_start();
include("db_connect.php");
$uid =  $_SESSION["uid"];
$sql = "SELECT * FROM users WHERE u_id = '$uid';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Name = $row['u_name'];
} else {
    echo "error at userpage";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bill Entry</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Moon Valley </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<script src="https://use.fontawesome.com/ba28bf3eae.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="billinput.php">Bill Entry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php"><?php echo $Name ?></a>
        </li>
      </ul>
      <div class="d-flex">
        <div class="dropdown me-md-5">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		    Account
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		    <li><a class="dropdown-item" href="updte,PHP">Edit Profile</a></li>
		    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
		  </ul>
		</div>
      </div>
    </div>
  </div>
</nav>

		<div class="login-section">
			<div class="form">
			<h1>User bill input</h1>
				<form method="post" action="billinput.php">
                    <span class="id">
                        <label for="id">user id</label>
                        <input type="text" id="id" name="id" placeholder="id">
                    </span>
                    <span class="Newspaper">
						<label for="pass">Month</label>
						<input type="text"id="news" name="month" placeholder="month"><br>
					</span>
					<span class="userid">
					<label for="u_id">Electricity</label>
					<input type="text" id="email" name="elect" placeholder="Amount">
					</span>
                    <span class="name">
                        <label for="name">Gas</label>
                        <input type="text" id="Name" name="gas" placeholder="Amount">
                    </span>
                        
					<span class="Address">
							<label for="Address">Wasa</label>
							<input type="text" id="address" name="wasa" placeholder="Amount">
					</span>
					<span class="phone">
						<label for="phone">Telephone</label>
						<input type="text"id="phone" name="phone" placeholder="Amount">
					</span>
					<span class="passwordS">
						<label for="pass">Televishion</label>
						<input type="text"id="pass" name="televishion" placeholder="Amount">
					</span>
                    <span class="Newspaper">
						<label for="pass">Newspaper</label>
						<input type="text"id="news" name="newspaper" placeholder="Amount"><br>
					</span>
                    <span class="Newspaper">
						<label for="pass">Internet</label>
						<input type="text"id="news" name="internet" placeholder="Amount"><br>
					</span>
					<button class="btn" name="update">Entry</button>
                    <button class="btn" name="sum">Update Total Amount</button>

					
				</form>

			</div>

		</div>

</body>
</html>