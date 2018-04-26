<?php
  /* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'urcscon3_maui');
define('DB_PASSWORD', 'urcscon3_maui');
define('DB_NAME', 'urcscon3_maui');

/* Attempt to connect to MySQL database */
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


 $sql = "INSERT INTO survey (name, email, relationship, interest) VALUES('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["relationship"]."', '".$_POST["interest"]."')";
 if(mysqli_query($connect, $sql))
 {
      echo 'Data Inserted';
 }
 ?>
