<?php
  
 
 ?>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price</title>
</head>
<style>
    h3{
        color : white;
        font: 1em sans-serif,Arial;
        margin-right: 30px ;
    }
    
</style>
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
                    <th>User id</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>User Type</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
              $con = mysqli_connect('localhost', 'root', '', 'dhuye_daw');
              $que = "SELECT * FROM login_info WHERE u_type='customer';";
              $val = mysqli_query($con, $que);
                while ($row = mysqli_fetch_assoc($val)) {
                    $id = $row['u_id'];
                    $name = $row['u_name'];
                    $pass = $row['pass'];
                    $type = $row['u_type'];
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $pass ?></td>
                        <td><?php echo $type ?></td>
                        <td><a href="userupdate.php">Edit</a></td>
                    </tr>


                    <?php
                }
            ?>
                
            </tbody>
        </table>
    </div>
