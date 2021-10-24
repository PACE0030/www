<?php
//connect to database
$link = mysqli_connect("localhost", "clucky", "clucky123", 'duck_shop');

//errors if connection unsucessful
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  if(isset($_POST["submit"])) {

   //preparing statement
    $sql = "INSERT INTO customer(contact_no, email, first_name, last_name, country, city, post_code, street, house_no) ".
    "values (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = mysqli_stmt_init($link);
    mysqli_stmt_prepare($statement, $sql);

    //binding parameters to prepared statements, sanitising data using htmlspecialchars
    mysqli_stmt_bind_param($statement, 'isssssisi', htmlspecialchars($_POST["contact_no"]), htmlspecialchars($_POST["email"]),
        htmlspecialchars($_POST["first_name"]), htmlspecialchars($_POST["last_name"]), htmlspecialchars($_POST["country"]),
        htmlspecialchars($_POST["city"]), htmlspecialchars($_POST["postcode"]), htmlspecialchars($_POST["street"]), htmlspecialchars($_POST["house_no"]));
    
    //redirect if sucessful
      if(mysqli_stmt_execute($statement)) {
        header("Location: transaction.html");
    } else {
        echo mysqli_error($link);
    }

    //close connection
    mysqli_close($link);
}


?>