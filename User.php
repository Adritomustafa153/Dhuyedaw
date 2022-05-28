<?php
session_start();
include_once 'db_connect.php';
$uid =  $_SESSION['uid'];
// echo $uid


?>
<html>
    <head lang="en">
        <title>DHUYE DAW USER</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"> </script> 
       

	    <script
	        src="https://code.jquery.com/jquery-3.1.1.min.js"
	        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	        crossorigin="anonymous">
	    </script>
    </head>
    <body>
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
        <a class="navbar-brand ms-md-5" href="mainpage.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="price.html">Price list</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="payment.php">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="User.php">Order</a>
            </li>
           
          </ul>
          <div class="d-flex">
            <div class="dropdown me-md-5">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="update.php">Edit Profile</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
          </div>
        </div>
      </div>
    </nav>

        <div style="padding: 10px;"></div>

        <div id="mainDiv">

            <form action="insert_order.php" target="_blank" id="orderFORM" method="GET">
                <!-- COMBOBOX -->
                <label>Cloth type</label>
                <select name="cloths" id="cloths" style="margin: 10px;">
                    <option value="pant">Pant</option>
                    <option value="shirt">Shirt</option>
                    <option value="Shari">Panjabi</option>
                    <option value="shoe">Shoe</option>
                </select><br>

                <!-- <span style="padding: 20px;"></span> -->
                
                <label> Service Type</label>
                <select name="service" id="service" style="margin: 10px;">
                    <option value="wash">Wash</option>
                    <option value="iron">Iron</option>
                    <option value="drywash">Drywash</option>
                    <option value="shoeRep">Shoe Repair & Polish</option>
                </select><br>

                <!-- <span style="padding: 20px;"></span> -->

                <label> Quantity Select</label>
                <input type="number" name="quantity" value="">
                 <br>
                
                <label> Area Select</label>
                <select name="area" id="area" style="margin: 10px;">
                    <option value="Mohammadpur">Mohammadpur</option>
                    <option value="Gulshan">Gulshan</option>
                    <option value="Malibagh">Malibagh</option>
                    <option value="Dhanmondi">Dhanmondi</option>
                </select><br>
                <label> Select Shop</label>
                <select name="shop" id="shop" style="margin: 10px;">
                    <option value="Sheba dry clean">Sheba dry clean</option>
                    <option value="Dhuye Daw">Dhuye Daw</option>
                    <option value="Band Box">Bandbox</option>
                    
                </select><br>
                
                <!-- <span style="margin-right: 20px;"></span> -->
                
                <label> Delivery Type</label>
                <select name="deltype" id="delivery" style="margin: 10px;">
                    <option value="Express Delivery">Express Delivery</option>
                    <option value="Regular Delivery">Regular Delivery</option>
                </select><br>

                <label> Payment Type</label>
                <select name="paytype" id="payment" style="margin: 10px;">
                    <option value="visa">VISA</option>
                    <option value="COD">CASH on Delivery</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="bkash">bkash</option>
                </select><br>
                <input type="button" name="bill" id="billBtn" value="Generate Bill">
                <input class="ui " type="text" name="billAmount" placeholder="0">
                
                <!-- <span style="padding: 20px;"></span> -->

            </form>

            <br>
            <button class="ui large button" type="submit" form="orderFORM" name="submit">Place Order</button>
        </div>
       
        <button class="ui button"> <a href="mainpage.php">Go back></a> </button>

    </body>
</html>