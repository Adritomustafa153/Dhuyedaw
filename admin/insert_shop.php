<?php
require_once('db_connect.php');
if(isset($_POST['u_Add'])){

  // $id = $_POST['id'];
  $name = $_POST['Name'];
  $pass = $_POST['pass'];
  $location = $_POST['location'];
  $servicearea = $_POST['s_area'];
  $email = $_POST['s_email'];
  $contact = $_POST['s_contact'];

  $sql1 = "INSERT INTO shop (s_id, s_name, pass, s_loaction,s_contact,s_email,s_area) VALUES (NULL, '$name', '$pass', '$location','$contact','$email','$servicearea');";
      $result = $conn->query($sql1);

      if ($result === TRUE) {
         echo '<script>alert("Successfull Added new user")</script>';
      }
      else{
      echo "Error: " . $sql1 . "<br>" . $conn->error;
      }

$conn->close();
    }
?>

<?php
date_default_timezone_set('Asia/dhaka');
$date = date('d-m-y');
$time = date(' h:i:s');

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin | Home</title>
     <style>
         h3{
        color : white;
        font: 1em sans-serif,Arial;
        margin-right: 30px ;
    }
    .weladm{
      margin-top:10px;
      margin-left: 220px;
      
    }
    .btns{
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 12px;
        transition-duration: 0.4s;
        background-color: #005EB8;
        color: white;
        margin-left:20px;
        border: 2px solid #005EB8; 
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .btns:hover {
  background-color: #87CEEB;
  border: 2px solid #005EB8; 
  
  
}
.update{
    margin-left:45%;
  }
    .update .upd{
        
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
    .emailS, .passwordS{
	margin: 10px 0px;
	display: block;
}
.login-section form input{
	height: 40px;
	border-radius: 8px;
	width: 300px;
	outline: none;
	border: none;
	padding: 0px 10px;
}
    
    </style>
    <link rel="stylesheet" href="sidenav.css">
    <!-- <link rel="stylesheet" type="text/css" href="up.css"> -->
 </head>
 <body>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
    

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<script src="https://use.fontawesome.com/ba28bf3eae.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</nav>
<!-- Side navigation -->
<div class="sidenav">
  <h1>Admin</h1>
  <a href="home.php">Home</a>
  <a href="shoppers.php">Shoppers</a>
  <a href="#">Delivery</a>
  <a href="customers.php">Customer</a>
  <a href="#">Todays Delivery</a>
  <a href="#">History</a>
</div>

<!-- Page content -->
<div class="main">
  
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-1" href="home.php">
        <img
          src="logo.jpg"
          height="15"
          alt="Ewash Solution"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Add Shopper</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tracking</a>
        </li>
      </ul>

      <!-- Left links
    </div>
  

   

      <!-Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="admpro.jpg"
            class="rounded-circle"
            height="25"
            alt="hello"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
  
</div>
<div class="weladm">
<h2>Welcome <span class="badge bg-primary"><?php echo"Admin"?></span></h2>
<p> Today's Date : <?php echo "$date"?> Time : <?php echo "$time"?></p>
<div>
<h5>Please fillup the input field of shop entry form</h3>
<form method="POST" action="insert_shop.php">
              
                    <span class="name">
                        <label for="name">Name</label>
                        <input type="text" id="Name" name="Name" placeholder="Name"><br>
                    </span>
                    <span class="phone">
						<label for="phone">Password</label>
						<input type="password"id="phone" name="pass" placeholder="password"><br>
					</span>
                    
                    <span class="phone">
						<label for="phone">Location</label>
						<input type="text"id="phone" name="location" placeholder="Location"><br>
					</span>
                    <span class="phone">
						<label for="phone">Contact</label>
						<input type="text"id="phone" name="s_contact" placeholder="Contact"><br>
					</span>
                    <span class="phone">
						<label for="phone">Email</label>
						<input type="email"id="phone" name="s_email" placeholder="Email"><br>
					</span>
                    <span class="phone">
						<label for="phone">Service Area</label>
						<input type="text"id="phone" name="s_area" placeholder="Service Area"><br>
					</span>
                    
                    <div class="update">
                    <!-- <button class="upd" name="u_update">Update</button> -->
                    <button class="upd" name="u_Add">Add Shop</button>
                    <!-- <button class="upd" name="u_delete">Delete</button> -->
                   

                    </div>
					
					
				</form>


</div>
</div>


 </body>
 <script src="sidenav.js"></script>
 <!-- <script src="request.js"></script> -->
 </html>