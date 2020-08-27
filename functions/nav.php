<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

$emparray = array();

if (mysqli_num_rows($result) > 0) {
  
  
  while($row = mysqli_fetch_assoc($result)) {
    $emparray[] = $row;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

echo json_encode($emparray);


?>