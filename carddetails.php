<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Card Details | Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
<?php 
 		$conn = mysqli_connect("localhost", "dbadmin", "", "duck_shop");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $contact_no =  $_REQUEST['contact_no'];
        $email = $_REQUEST['email'];
        $house_no = $_REQUEST['house_no'];
        $street = $_REQUEST['street'];
		$city = $_REQUEST['city'];
		$country = $_REQUEST['country'];
		$post_code = $_REQUEST['post_code'];
          
        $sql = "INSERT INTO customer (first_name, last_name, contact_no, email, house_no, street, city, country, post_code)
		VALUES ('$first_name','$last_name','$contact_no','$email','$house_no','$street','$city','$country','$post_code')";
			          
        if(mysqli_query($conn, $sql)){ 
        } else{
            echo "ERROR: Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
		
		?>
  </head>
  <Header>
<?php require_once "header.php"; ?>
</Header>
  <body><br>
<center>
    <h3>Card Details</h3>
        <form action="confirmation.php" method="post">
        <p>Name on Card: <input type="text" name="card_name" id="card_name" required></p>
        <p>Card Number: <input type="text" maxlength="16" name="card_number" id="card_number" required></p>
        <p>Card Expiry: <input maxlength="5" type="text" name="card_expiry" id="card_expiry" required></p>
        <p>CVV: <input type="text" maxlength="3" name="card_cvv" id="card_cvv" required></p>
        <p><input name="" type="checkbox" value="" required> You agree that this information is true and correct.</p>
        <a href="confirmation.php"><button class="agreebtn">Create your Order!</button></a>
        </form>
        </center>
  </body>
<footer>
<?php require_once "footer.php"; ?>
</footer>
</html>