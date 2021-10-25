<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="author" content="Joshua Pace, Lachlan Madeley, Chloe Pendry, Louis Tatlock" />
    <meta name="description" content="Final Assessment" />
    <title>Order Confirmation | Clucky's Sock's</title>
    <link rel="stylesheet" href="css/style.css">
<?php 
 		$conn = mysqli_connect("localhost", "dbadmin", "", "duck_shop");
          
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
		$card_name =  $_REQUEST['card_name'];
        $card_number = $_REQUEST['card_number'];
        $card_expiry =  $_REQUEST['card_expiry'];
        $card_cvv = $_REQUEST['card_cvv'];
		
		$sql = "INSERT INTO transaction (card_name, card_number, card_expiry, card_cvv)
		VALUES('$card_name','$card_number','$card_expiry','$card_cvv')";
           
		   if(mysqli_query($conn, $sql)){

        } else{
            echo "ERROR: Sorry $sql. " 
                . mysqli_error($conn);
        }
		?>
  </head>
  <Header>
<?php require_once "header.php"; ?>
</Header>
  <body>
    <table width="100%" border="0">
        <tr>
          <th scope="col" align="center"><H2>Congratulations!</H2> 
          <p>Your order has been created sucessfully </p>       
           <a href="emptyredirect.php"><button class="agreebtn">Return Home</button></a></th>
        </tr>
    </table>    

   

  </body>
<footer>
<?php require_once "footer.php"; ?>
</footer>
</html>