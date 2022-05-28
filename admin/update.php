<?php
 include_once 'db_connect.php';
 if(isset($_POST['update'])){

     $id = $_POST['id'];
     $name = $_POST['Name'];
     $wash = $_POST['wash'];
     $shoepolish = $_POST['shoepolish'];
     $drywash = $_POST['drywash'];
     $iron = $_POST['iron'];


  
        $sql = "UPDATE price_list SET iron_price='$iron',wash_price='$wash',drywash_price='$drywash',shoepolish='$shoepolish' WHERE f_id=$id;";
         $result = $conn->query($sql);

         if ($result === TRUE) {
            echo '<script>alert("Update Successfull")</script>';
         }
         else{
         echo "Error: " . $sql . "<br>" . $conn->error;
         }
        }



        if(isset($_POST['Add'])){

            $id = $_POST['id'];
            $name = $_POST['Name'];
            $wash = $_POST['wash'];
            $shoepolish = $_POST['shoepolish'];
            $drywash = $_POST['drywash'];
            $iron = $_POST['iron'];
       
       
         
            $sql1 = "INSERT INTO `price_list` (`f_id`, `name`, `iron_price`, `wash_price`, `drywash_price`, `shoepolish`) VALUES (NULL, '$name', '$iron', '$wash', '$drywash', '$shoepolish');";
                $result = $conn->query($sql1);
       
                if ($result === TRUE) {
                   echo '<script>alert("Successfull Added one item")</script>';
                }
                else{
                echo "Error: " . $sql1 . "<br>" . $conn->error;
                }
               }

               if(isset($_POST['delete'])){

                $id = $_POST['id'];
                $name = $_POST['Name'];
                $wash = $_POST['wash'];
                $shoepolish = $_POST['shoepolish'];
                $drywash = $_POST['drywash'];
                $iron = $_POST['iron'];
           
           
             
                $sql2 = "DELETE FROM price_list WHERE name='$name' OR f_id = $id;";
                    $result = $conn->query($sql2);
           
                    if ($result === TRUE) {
                       echo '<script>alert("Successfull remove item")</script>';
                    }
                    else{
                    echo "Error: " . $sql2 . "<br>" . $conn->error;
                    }
                   }
     
    

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

</head>
<body>
    <div>
    <nav class="w3-bar w3-black">
        <a href="home.php" class="w3-button w3-bar-item">HOME</a>
        <a href="iron.php" class="w3-button w3-bar-item">IRON</a>
        <a href="wash.php" class="w3-button w3-bar-item">WASH</a>
        <a href="dry_wash.php" class="w3-button w3-bar-item">DRY WASH</a>
        <a href="Shoe_polish.php" class="w3-button w3-bar-item">SHOE POLISH</a>
    </nav>
    </div>
		<div class="login-section">
			<div class="form">
			<h1>Make Change</h1>
				<form method="POST" action="update.php">
                    <span class="id">
                        <label for="id">ID  </label>
                        <input type="text" id="id" name="id" placeholder="ID"><br>
                    </span>
                    <span class="name">
                        <label for="name">Name</label>
                        <input type="text" id="Name" name="Name" placeholder="Name"><br>
                    </span>
                    <span class="phone">
						<label for="phone">Wash</label>
						<input type="text"id="phone" name="wash" placeholder="wash"><br>
					</span>
                    </span>
                    <span class="phone">
						<label for="phone">Dry Wash</label>
						<input type="text"id="phone" name="drywash" placeholder="Drywash"><br>
					</span>
                    </span>
                    <span class="phone">
						<label for="phone">Shoe Polish</label>
						<input type="text"id="phone" name="shoepolish" placeholder="Shoepolish"><br>
					</span>
                    </span>
                    <span class="phone">
						<label for="phone">Iron</label>
						<input type="text"id="phone" name="iron" placeholder="Iron"><br>
					</span>
                    <div class="update">
                    <button class="upd" name="update">Update</button>
                    <button class="upd" name="Add">Add</button>
                    <button class="upd" name="delete">Delete</button>
                   

                    </div>
					
					
				</form>

			</div>

		</div>

</body>
</html>