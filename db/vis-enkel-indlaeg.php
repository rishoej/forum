<?php
require "connect.php";

//find indlæg
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
	
$sql = "SELECT id,titel,indhold,kategori,dato FROM indlaeg WHERE id=$idIndlaeg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$indlaegId = $row["id"];
$titel = $row["titel"];
$novelle = $row["indhold"];
$kategori = $row["kategori"];
$dato = $row["dato"];

}
} else {
    echo "0 results";
}
?>