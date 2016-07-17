<?php 
require "connect.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
	
$sql = "SELECT id,titel,kategori,antalsvar,dato FROM indlaeg ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "<tr><td><a href='indlaeg.php?id=" . $row["id"] . "'>";
echo $row["titel"] . "</a></td>";
echo "<td><a href=''>" . $row["kategori"] . "</td>";
echo "<td>" . $row["antalsvar"] . "</td><td>";
echo $row["dato"] . "</td>";

}
} else {
    echo "0 results";
}

$conn->close();

?>