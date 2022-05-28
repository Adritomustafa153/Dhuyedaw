<?php
include_once "db_connect.php";

$sql = "SELECT * FROM price_list;";

    $result = $conn -> query($sql);
    if($result ){
        while($row = $result->fetch_assoc()){
            // echo "<center>". "<br>" . "Doctor Name : " . $row["d_name"]. " -   Phone " . $row["d_phone"]. "   Designation : " .$row["d_designation"]."<br>" . "</center>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price</title>
    <style>
         h3{
        color : white;
        font: 1em sans-serif,Arial;
        margin-right: 30px ;
    }
  .seeprice{
    margin-left:45%;
  }
    .seeprice .btn{
        
        background-color:#1CDBBC; /* Green */
  border: 1px solid #1CDBBC;
  border-radius: 12px;
  color: white;
  margin-top: 10px;
  
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    }
    </style>
</head>
<body>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <h3>Dhuye Daw</h3>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shopper.php">Shoppers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="price.php">Price Chart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user.php">Users</a>
        </li>
      </ul>
      <div class="d-flex">
        <div class="dropdown me-md-5">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
		    Account
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
		  </ul>
		</div>
      </div>
    </div>
  </div>
</nav>
<div class = "seeprice">
<button class="btn" href="home.php" name="price">See Price</button>
<button class="btn" name="update">Update Price</button>
</div>
    
</body>
</html>