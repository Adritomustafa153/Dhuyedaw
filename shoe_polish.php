<?php
    $con = mysqli_connect('localhost', 'root', '', 'dhuye_daw');
    $que = "SELECT name,shoepolish FROM price_list WHERE shoepolish !=0;";
    $val = mysqli_query($con, $que);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

    <title>SHOE POLISH</title>
  </head>
  <body>
    <nav class="w3-bar w3-black">
    <a href="mainpage.php" class="w3-button w3-bar-item">HOME</a>
        <a href="iron.php" class="w3-button w3-bar-item">IRON</a>
        <a href="wash.php" class="w3-button w3-bar-item">WASH</a>
        <a href="dry_wash.php" class="w3-button w3-bar-item">DRY WASH</a>
        <a href="Shoe_polish.php" class="w3-button w3-bar-item">SHOE POLISH</a>
    </nav>
    <div class="container">
        <h3 class="text-center">SHOE POLISH</h3>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Item Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($row = mysqli_fetch_assoc($val)) {
                    $name = $row['name'];
                    $price = $row['shoepolish'];
                    ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $price ?></td>
                    </tr>


                    <?php
                }
            ?>
                
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </section>
  <section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">Dhuye Daw</h2>
    <p class="w3-opacity">Make Your LIfe easy</p>
  </section>
  </body>
</html>