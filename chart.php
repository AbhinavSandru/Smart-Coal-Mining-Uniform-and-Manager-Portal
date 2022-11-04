<?php
header('Content-Type: application/text');

$servername = "localhost";
$username = "id19581971_coal";
$password = "U1user1@1234";
$dbname = "id19581971_sen";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

$sqlQuery = "SELECT * FROM u1";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>