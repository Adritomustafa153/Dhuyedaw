<?php

$username = 'Tahlil';
$Total = 100;

if (isset($_POST['submit'])) {			
    
    header("Location: checkout.php?price=$Total&username=$username");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--<link rel="stylesheet" type="text/css" href="/Include/style.css">
-->
    <link rel="stylesheet" type="text/css" href="Include/nav.css">
    <title>Shipping Info</title>
    <style>

    </style>
</head>

<body>


    <h2><a href="main.php" class="btn btn-outline-dark my-3">HOME</a></h2>


    <div style="margin: 0 30vw;">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Shipping Form</h2>
                <p class="lead">Place your Shipping Information</p>
                <hr>
            </div>
        </div>

       

                    <a href="checkout.php?price=<?php echo $Total; ?>&username=<?php echo $username; ?>"><button name="submit" class="btn btn-primary btn-lg btn-block">Checkout</button></a>
                </div>
            </form>
        </div>
    </div>








    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>