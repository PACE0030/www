<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Cart | Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
    <?php 
	session_start();
	
	include 'functions.php';
	$_SESSION['total'] = 0;

	
	$link = mysqli_connect("localhost", "dbadmin", "", 'duck_shop');
	?>
  </head>
  <Header>
<?php require_once "header.php"; ?>
</Header>
  <body>
  <br>
<table width="80%" border="0" align="center">
  <tr>
    <th align="left" scope="col"><b>Product</b></th>
    <th align="left" scope="col"><b>Total Price</b></th>
  </tr>
  <tr>
    <td>
    <?php
			if (isset($_SESSION['cartAmount'])){  	
			for($i = 0; $i < $_SESSION['cartAmount']; $i++) {
				  if ($result = mysqli_query($link, 'SELECT * FROM product WHERE product_id=' . $_SESSION['cartInventory'][$i] . ';')) {
					while ($row = mysqli_fetch_assoc($result)) {
					  echo '<p>' . $row['name'] . '</p>';
					  $_SESSION['total'] += $row['price'];

					  
				  }
				}
			  }
		  }
        ?>
        </td>
    <td>	
    			<?php 
				echo '<b><h3>$' . $_SESSION['total'] . '</h3></b>';
				?></td>
  </tr>
</table>
<center>
				<a href="empty.php"><button class="errorbtn">Remove all items from cart</button></a>
                <br><br> 
                <a href="details.php"><button class="button">Checkout</button></a>'	
</center>


  </body>
<footer>
<?php require_once "footer.php"; ?>
</footer>
</html>