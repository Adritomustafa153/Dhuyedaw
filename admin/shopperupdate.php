<?php
include_once 'db_connect.php';
if(isset($_POST['u_update'])){

    $id = $_POST['id'];
    $name = $_POST['Name'];
    $pass = $_POST['pass'];
    $location = $_POST['location'];
    $servicearea = $_POST['s_area'];
    $email = $_POST['s_email'];
    $contact = $_POST['s_contact'];

 
       $sql = "UPDATE shop SET s_name='$name',pass='$pass',s_loaction='$location',s_area='$servicearea',s_email='$email',s_contact='$contact' WHERE s_id='$id';";
        $result = $conn->query($sql);

        if ($result === TRUE) {
           echo '<script>alert("Update Successfull")</script>';
        }
        else{
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
       }



       if(isset($_POST['u_Add'])){

           $id = $_POST['id'];
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
              }

              if(isset($_POST['u_delete'])){

               $id = $_POST['id'];
               $name = $_POST['Name'];
               $pass = $_POST['pass'];
               $location = $_POST['location'];
             
               $sql2 = "DELETE FROM shop WHERE s_name='$name' OR s_id = $id;";
                   $result = $conn->query($sql2);
          
                   if ($result === TRUE) {
                      echo '<script>alert("Successfull remove user")</script>';
                   }
                   else{
                   echo "Error: " . $sql2 . "<br>" . $conn->error;
                   }
                  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppers Update</title>
    <link rel="stylesheet" type="text/css" href="up.css">
    <style>
        body{

            background-image: url("lun1.jpg");
            height : 100vh;
        }
    .update .upd{
        
        background-color:#56C5DB; /* Green */
  border: 1px solid #56C5DB;
  border-radius: 12px;
  color: white;
  margin-top: 15px;
  
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
    }
    h1{
        font-family:'Poppins', sans-serif;
        margin-right:40px
    }
    .login-section{
	
	display: flex;
	justify-content: flex-end;
	height: 100vh;
	margin-bottom: 50vh;
	margin-right: 40vh;

}
    </style>
</head>
<body>

<link rel="stylesheet" type="text/css" href="up.css">
    <style>
        body{

            background-image: url("lun1.jpg");
            height : 100vh;
        }
    .update .upd{
        
        background-color:#56C5DB; /* Green */
  border: 1px solid #56C5DB;
  border-radius: 12px;
  color: white;
  margin-top: 15px;
  
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
    }
    h1{
        font-family:'Poppins', sans-serif;
        margin-right:40px
    }
    .login-section{
	
	display: flex;
	justify-content: flex-end;
	height: 100vh;
	margin-bottom: 50vh;
	margin-right: 40vh;

}
    </style>
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

<div class="login-section">
			<div class="form">
			<h1>Make Change</h1>
				<form method="POST" action="shopperupdate.php">
                    <span class="id">
                        <label for="id">ID  </label>
                        <input type="text" id="id" name="id" placeholder="ID"><br>
                    </span>
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
                    <button class="upd" name="u_update">Update</button>
                    <button class="upd" name="u_Add">Add</button>
                    <button class="upd" name="u_delete">Delete</button>
                   

                    </div>
					
					
				</form>

			</div>

		</div>
        

    
</body>
</html>

