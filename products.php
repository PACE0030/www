<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Products | Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
  <?php 
    include 'functions.php';
	
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
<?php require_once "header.php"; ?>
</Header>
  <body>
  <center>
		<?php
            if ($result = mysqli_query($link, "SELECT * FROM product")) {
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class='product'>";
                  echo "</a>";
                  echo "<h2>" . $row['name'] . "</h2> </a>";
				  echo "<table align='center'>";
				  echo "<tr><th scope='col'  class='descbox'>";
				  echo "<img>" . $row['img'] . "</img>";
				  echo "</th>";
				  echo "<th scope='col'  class='descboxleft'>";
				  echo "<h3>$" . $row['price'] . "</h3>";
  				  echo "<p>" . $row['description'] ."</p></tr>";
				  echo "</table>";
				  echo '<button class="button"><b><a class="button" href="addtocart.php?id='. $row['product_id'] . '">Add to Cart' . "</a></b></button>";

                  echo "<br></div>";
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
<footer>
<?php require_once "footer.php"; ?>
</footer>
</html>
