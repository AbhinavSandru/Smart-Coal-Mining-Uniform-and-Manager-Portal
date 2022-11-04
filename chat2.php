<?php
$servername = "localhost";
$username = "id19581971_coal";
$password = "U1user1@1234";
$dbname = "id19581971_sen";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

header('Content-Type: application/json');

$sqlQuery = "SELECT * FROM u1 ORDER BY time&date";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
for ($x = 0; $x < mysql_num_rows($query); $x++) {
  $data[] = mysql_fetch_assoc($query);
}


echo json_encode($data);


mysqli_close($conn);

?>
