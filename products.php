<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Products - Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
  <?php 
    include 'functions.php';
	require_once 'component.php';
	
	$link = mysqli_connect("localhost", "dbadmin", "", 'duck_shop');

if (!$link) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}
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
  <center>
  <?php
    if ($result = mysqli_query($link, "SELECT * FROM product")) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='product'>";
          echo "</a>";
		  echo '<a href="addtocart.php?id='. $row['product_id']  .'"> <h2>' . $row['name'] . "</h2> </a>";
          echo "<span>$" . $row['price'] . "</span>";
          echo "</div>";
        }
      } else {
        echo "no results";
      }
    } else {
      echo "unable to display";
    }
    ?>
    </center>
    <br>

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
