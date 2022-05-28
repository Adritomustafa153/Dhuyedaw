<?php
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


 
    </style>
</head>
<body>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
<style>
 
    .btnl{

        
background-color:#56C5DB; /* Green */
border: 1px solid #56C5DB;
border-radius: 12px;
color: white;
margin-top: 15px;
margin-left:41%;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
    }

    .login-section form label{
	color: #56C5DB;
	margin: 20px 0px;
	font-size: 24px;
    margin-left:35%;
   
}
/* .login-section form input{
	height: 40px;
	border-radius: 8px;
	width: 300px;
	outline: none;
	border: none;
	padding: 0px 10px; 
   
 margin-left:50px   
} */
input{
  margin-left:38%;
  border-radius: 8px;
  background-color: #f1f1f1;
  width:15%
}


</style>
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
          <a class="nav-link" href="price.html">Price Chart</a>
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


<div class="container">
        <h3 class="text-center">WASH</h3>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Shopper id</th>
                    <th>Shopper Name</th>
                    <th>Password</th>
                    <th>Location</th>
                    <th>Service Area</th>
                    <th>Email</th>
                    <th>Contacts</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
              $con = mysqli_connect('localhost', 'root', '', 'dhuye_daw');
              $que = "SELECT * FROM shop;";
              $val = mysqli_query($con, $que);
                while ($row = mysqli_fetch_assoc($val)) {
                    $id = $row['s_id'];
                    $name = $row['s_name'];
                    $pass = $row['pass'];
                    $location = $row['s_loaction'];
                    $servicearea = $row['s_area'];
                    $email = $row['s_email'];
                    $contacts = $row['s_contact']
                   
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $pass ?></td>
                        <td><?php echo $location ?></td>
                        <td><?php echo $servicearea ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $contacts ?></td>
                        <td><a href="shopperupdate.php">Edit</a></td>
                    </tr>


                    <?php
                }
            ?>
                
            </tbody>
        </table>
    </div>
    </div>


    <div class="login-section">
        <div class="form">
            <form method="post" action="o_info.php">
                <span class="emailS">
                    <label for="email_n">Enter Shopper name to load shopper</label><br>
                    <input type="text" id="email" name="name" placeholder="Name"><br>
                    <button class="btnl" name="load">Load Shopper</button>
                </span>
              </form>
            </div>
            </div>
</body>
</html>