<?php
// Database connection
$host = "localhost";
$database = "id19581971_sen";       // Change your database name
$username = "id19581971_coal";     // Your database user id 
$password = "U1user1@1234";         // Your password
echo"<html>";
echo"   <head>";
echo"      <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css' rel='stylesheet'>";
echo"   </head>";
echo"   <body>";
echo " <style>";
echo ".fixTableHead {
      overflow-y: auto;
      height: 110px;
    }
    .fixTableHead thead th {
      position: sticky;
      top: 0;
    }
    ";
echo "</style>";
$connection=mysqli_connect($host,$username,$password,$database);
if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
echo "  <h1 class = 'text-center'>Miner1 Sensor Data</h1>";

if($stmt = $connection->query("SELECT * FROM u1")){

$php_data_array = Array(); // create PHP array
  echo "<table class='fixTableHead table table-bordered border-primary'>
<tr style = 'background: #ABDD93;'position: sticky;top: 0;'><th>Timedate</th> <th>temp</th><th>humidity</th><th>gas</th><th>light</th><th>sound</th></tr>";
while ($row = $stmt->fetch_row()) {
   echo "<tr><td>$row[5]</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
   $php_data_array[] = $row; // Adding to array
   }
echo "</table>";
}else{
echo $connection->error;
}
?>