<?php
$UNAME =$_GET["UNAME"];
$d1 =$_GET["d1"];
$d2 =$_GET["d2"];
$d3 =$_GET["d3"];
$d4 =$_GET["d4"];
$d5 =$_GET["d5"];

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
$sql = "INSERT INTO u1 (temp,humidity,gas,light,sound) VALUES ($d1,$d2,$d3,$d4,$d5)";
if($UNAME == "U1"){
    if (mysqli_query($conn, $sql)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

if($UNAME == "U2"){
    $sql1 = "INSERT INTO u2 (temp,humidity,gas,light,sound) VALUES ($d1,$d2,$d3,$d4,$d5)";
    if (mysqli_query($conn, $sql1)) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
    

mysqli_close($conn);
?>
