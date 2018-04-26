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

 $id = $_POST["id"];
 $text = $_POST["text"];
 $column_name = $_POST["column_name"];
 $sql = "UPDATE survey SET ".$column_name."='".$text."' WHERE id='".$id."'";
 if(mysqli_query($connect, $sql))
 {
      echo 'Data Updated';
 }
 ?>
