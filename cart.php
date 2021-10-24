<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Home - Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
    <?php 
	session_start();
	
	include 'functions.php';
    require_once 'component.php';
	$_SESSION['total'] = 0;

	
	$link = mysqli_connect("localhost", "dbadmin", "", 'duck_shop');

	
	?>
  </head>
  <Header>
  <center>
    <img src="img/logo4.png" width="250" align="center" a href="index.html">
  </center>
    <nav class="nav">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th scope="col"> <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Our Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="cart.php">Cart</a></li>
        			</ul></th>
  </tr>
</table>
    </nav>
  </Header>
  <body>
<table width="80%" border="1" align="center">
  <tr>
    <th align="left" scope="col"><b>Amount</b></th>
    <th align="left" scope="col"><b>Price</b></th>
  </tr>
  <tr>
    <td>
    <?php
			if (isset($_SESSION['cartAmount'])){  	
			for($i = 0; $i < $_SESSION['cartAmount']; $i++) {
				  if ($result = mysqli_query($link, 'SELECT * FROM product WHERE product_id=' . $_SESSION['cartInventory'][$i] . ';')) {
					while ($row = mysqli_fetch_assoc($result)) {
					  echo '<h3>' . $row['name'] . '</h3>';
					  $_SESSION['total'] += $row['price'];

					  
				  }
				}
			  }
		  }
        ?>
        </td>
    <td>		<?php 
				    echo '<h3>' . $_SESSION['total'] . '</h3>';
				?></td>
  </tr>
</table>
        		<a href="empty.php"><button >Click me to clear the cart!</button></a>


  </body>
<footer class="footer">
    <table width="80%" border="0" align="center">
  <tr>
    <th scope="col" width="30%"><a href="index.php"><img src="img/logo3.png" width="150" align="left"></a></th>
    <th scope="col" width="35%" align="left"><h3>Sitemap</h3>
    <a href="index.php">Home</a><br>
    <a href="products.php">Our Products</a><br>
    <a href="about.php">About Us</a><br>
    <a href="cart.php">Cart</a>
    </th>
    <th scope="col" width="35%" align="left"><h3>Contact Us</h3>
    <a href="tel:1300367070"><b>Phone: </b> 1300 367 070</a><br>
    <a href="mailto:clucky@cluckysocks.au"><b>Email: </b>clucky@cluckysocks.au</a><br>
    <p><b>Address:</b><br>
    Botanical Gardens, Adelaide SA 5000</p></th>
  </tr>
</table>
<table width="80%" align="center" border="0">
  <tr>
    <th scope="col"><p>Clucky's Socks operates its business with a responsible mindset across our four pillars, ducks, cotton, animal love & socks! All Rights reserved Clucky Sock's 2021</p></th>
  </tr>
</table>
</footer>
</html>