<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Enter Your Details | Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
    <?php 
		 
		$servername = "localhost";
		$username = "dbadmin";
		$password = "";
		$dbname = "duck_shop";
		  
		$conn = new mysqli($servername, 
			$username, $password, $dbname);
	?>
    
  </head>
  <Header>
<?php require_once "header.php";?>
</Header>
  <body>
    <table align="center" width="80%">
        <tr>
          <th scope="col" align="center"><H2>Shipping Details</H2></th>
        </tr>
    </table>   
    <table width="80%" align="center">
      <tr>
        <th scope="col">
        <h3>Customer Details</h3>
        <form action="carddetails.php" method="post">
        <p>First Name: <input type="text" name="first_name" id="first_name" required></p>
        <p>Last Name: <input type="text" name="last_name" id="last_name" required></p>
        <p>Phone Number: <input maxlength="10" type="text" name="contact_no" id="contact_no" required></p>
        <p>Email: <input type="text" name="email" id="email" required></p>
        <p>House Number: <input maxlength="4" type="text" name="house_no" id="house_no" required></p>
        <p>Street: <input type="text" name="street" id="street" required></p>
        <p>City: <input type="text" name="city" id="city" required></p>
        <p>Country: <input type="text" name="country" id="country" required></p>
        <p>Post Code: <input type="text" maxlength="5" name="post_code" id="post_code" required></p>
        <p><input name="" type="checkbox" value="" required> You agree that this information is true and correct.</p>
        <a href="carddetails.php"><button class="agreebtn">Proceed to Payment</button></a>
        </form>
        
        
        </th>
      </tr>
    </table>
  </body>
<footer>
<?php require_once "footer.php"; ?>
</footer>
</html>