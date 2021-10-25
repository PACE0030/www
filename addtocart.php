<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Product Added to Cart! | Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
<?php
    session_start();

    $idItem = $_GET['id'];

    if(isset($_SESSION['cartAmount'])){
        array_push($_SESSION['cartInventory'], $idItem);
        $_SESSION['cartAmount'] = count($_SESSION['cartInventory']);
    }
    else{
        $_SESSION['cartInventory'] = array($idItem);
        $_SESSION['cartAmount'] = 1;
    }

    ?>
  </head>
  <Header>
<?php require_once "header.php"; ?>
</Header>
<body>
    <center>
    <br><br>
    		<h2>Congratulations! You've added a product to your cart!</h2>
        		<a href="cart.php"><button class="agreebtn">View my Cart</button></a>
                <br><br> 
                <a href="products.php"><button class="button">Browse More Products</button></a>
    </center>
</body>    
<footer>
<?php require_once "footer.php"; ?>
</footer>