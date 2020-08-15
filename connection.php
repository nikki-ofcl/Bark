
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "places";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM sheet1  WHERE Availability = '15-Aug-2020' OR Location = 'Noida, sector 120' AND Time = '14:00' ";
$result = $conn->query($sql);

if ($result) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Name"]. "<br>Availability: " . $row["Availability"]. "<br>Time: " . $row["Time"]. "<br>Location: " . $row["Location"]. "<br><br><hr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>