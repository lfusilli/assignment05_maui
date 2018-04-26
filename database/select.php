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


$output = '';
$sql = "SELECT * FROM survey";

$result = mysqli_query($connect, $sql);
$output .= '
     <div class="table-responsive">
          <table class="table table-bordered">
               <tr>
                    <th width="10%">Id</th>
                    <th width="20%">Name</th>
                    <th width="20%">Email</th>
                    <th width="30%">Relationship to NYC</th>
                    <th width="20%">Interest</th>
               </tr>';
if(mysqli_num_rows($result) > 0)
{
     while($row =

mysqli_fetch_array($result))
     {
          $output .= '
               <tr>
                    <td>'.$row["id"].'</td>
                    <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>
                    <td class="email" data-id2="'.$row["id"].'" contenteditable>'.$row["email"].'</td>
                    <td class="relationship" data-id3="'.$row["id"].'" contenteditable>'.$row["relationship"].'</td>
                    <td class="interest" data-id4="'.$row["id"].'" contenteditable>'.$row["interest"].'</td>
                    <td><button type="button" name="delete_btn" data-id5="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
               </tr>
          ';
     }
     $output .= '
          <tr>
               <td></td>
               <td id="name" contenteditable></td>
               <td id="email" contenteditable></td>
               <td id="relationship" contenteditable></td>
               <td id="interest" contenteditable></td>
               <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
          </tr>
     ';
}
else
{
     $output .= '<tr>
                         <td colspan="4">Data not Found</td>
                    </tr>';
}
$output .= '</table>


     </div>';
echo $output;
?>
