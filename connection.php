<?php
//  $server="Localhost";
//  $user="gdfims_root";
//  $password="Admin@123";
//  $dbname="gdfims_ims";
 
$servername = "localhost";
$username = "root";
$password = "";
// $dbname="gdfims_ims";
$dbname="ims";



// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// else {
//   echo "Connection established: ";
// }
?>