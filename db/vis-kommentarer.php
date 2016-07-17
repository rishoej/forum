<?php 
require "connect.php";

//find kommentarer
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
	
$sql = "SELECT brugernavn,indhold,dato FROM svar WHERE indlaegsid=$idIndlaeg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

$brugernavn = $row["brugernavn"];
$dato = $row["dato"];
$indhold = $row["indhold"];

echo "<hr><div class='row'><div class='col-lg-1 col-md-1 col-xs-2'><center><a href='#'><img src='images/forfatter.jpg' class='img-circle' style='width:100%;'></center></div>
<div class='col-lg-11 col-md-11 col-xs-10'><p style='margin:0px;'><a href='#'><b>" . 
$brugernavn . 
"</b></a></p><small>" . $dato . "</p></small><br><p>" . nl2br($indhold) .
"</p></div></div>";

}
} else {
    //echo "0 resultater";
}

$conn->close();

?>